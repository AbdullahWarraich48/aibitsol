<?php

declare(strict_types=1);

use PHPMailer\PHPMailer\Exception as PHPMailerException;
use PHPMailer\PHPMailer\PHPMailer;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../includes/env_loader.php';

header('Content-Type: application/json');

loadEnvFile(__DIR__ . '/../.env');

/**
 * Send a JSON response and terminate execution.
 */
function respond(int $statusCode, array $payload): void
{
    http_response_code($statusCode);
    echo json_encode($payload, JSON_UNESCAPED_SLASHES);
    exit;
}

/**
 * HTML-escape helper for email templates.
 */
function escapeHtml(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/**
 * Resolve the first non-empty environment value from a list of keys.
 */
function resolveEnvValue(array $possibleKeys, string $default = ''): string
{
    foreach ($possibleKeys as $key) {
        $value = (string) env_value($key, '');
        if ($value !== '') {
            return $value;
        }
    }

    return $default;
}

/**
 * Encode data using base64url (RFC 7515) without padding.
 */
function base64url_encode(string $data): string
{
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

/**
 * Build the Zoom meeting type map keyed by the form slug.
 *
 * @return array<string, array{label: string, meeting_id: string|null}>
 */
function zoomMeetingTypes(): array
{
    return [
        'free_consultation' => [
            'label' => 'Free Consultation',
            'meeting_id' => env_value('ZOOM_MEETING_ID_FREE_CONSULTATION'),
        ],
        'project_discussion' => [
            'label' => 'Project Discussion',
            'meeting_id' => env_value('ZOOM_MEETING_ID_PROJECT_DISCUSSION'),
        ],
        'technical_discussion' => [
            'label' => 'Technical Discussion',
            'meeting_id' => env_value('ZOOM_MEETING_ID_TECHNICAL_DISCUSSION'),
        ],
        'project_proposal' => [
            'label' => 'Project Proposal',
            'meeting_id' => env_value('ZOOM_MEETING_ID_PROJECT_PROPOSAL'),
        ],
        'support_maintenance' => [
            'label' => 'Support & Maintenance',
            'meeting_id' => env_value('ZOOM_MEETING_ID_SUPPORT_MAINTENANCE'),
        ],
    ];
}

/**
 * Convert preferred meeting time value to a human readable label.
 */
function preferredTimeLabel(string $value): string
{
    $map = [
        'morning' => 'Morning (9 AM - 12 PM)',
        'afternoon' => 'Afternoon (12 PM - 5 PM)',
        'evening' => 'Evening (5 PM - 8 PM)',
        'flexible' => 'Flexible — Any time works',
    ];

    return $map[$value] ?? 'Flexible — Any time works';
}

/**
 * Resolve the timezone used when scheduling new meetings.
 */
function zoomDefaultTimezone(): string
{
    $timezone = (string) env_value('ZOOM_DEFAULT_TIMEZONE', 'UTC');

    if ($timezone === '') {
        return 'UTC';
    }

    return $timezone;
}

/**
 * Determine the next meeting slot based on the preferred window.
 *
 * @return array{iso: string, human: string}
 */
function determineMeetingSchedule(string $preferredTime, string $timezone): array
{
    $slots = [
        'morning' => ['hour' => 9, 'minute' => 0],
        'afternoon' => ['hour' => 14, 'minute' => 0],
        'evening' => ['hour' => 18, 'minute' => 0],
        'flexible' => ['hour' => 13, 'minute' => 0],
    ];

    $slot = $slots[$preferredTime] ?? $slots['flexible'];

    try {
        $zone = new \DateTimeZone($timezone);
    } catch (\Throwable $exception) {
        $zone = new \DateTimeZone('UTC');
    }

    $now = new \DateTime('now', $zone);
    $scheduled = clone $now;
    $scheduled->setTime((int) $slot['hour'], (int) $slot['minute'], 0);

    if ($scheduled <= $now) {
        $scheduled->modify('+1 day');
    }

    return [
        'iso' => $scheduled->format('Y-m-d\TH:i:s'),
        'human' => $scheduled->format('l, F j, Y g:i A T'),
    ];
}

/**
 * Format the ISO date returned by Zoom into a friendly string.
 */
function formatMeetingDateTime(?string $value, ?string $timezone = null): string
{
    if (!$value) {
        return 'To be confirmed';
    }

    try {
        $date = new \DateTime($value);
    } catch (\Throwable $exception) {
        return 'To be confirmed';
    }

    $targetTz = $timezone ?: zoomDefaultTimezone();

    try {
        $date->setTimezone(new \DateTimeZone($targetTz));
    } catch (\Throwable $exception) {
        // keep the existing timezone if conversion fails
    }

    return $date->format('l, F j, Y g:i A T');
}

/**
 * Fetch a Zoom server-to-server OAuth access token.
 *
 * @throws RuntimeException
 */
function fetchZoomAccessToken(): string
{
    $clientId = resolveEnvValue(['ZOOM_CLIENT_ID', 'ZOOM_API_KEY', 'ZOOM_SDK_KEY']);
    $clientSecret = resolveEnvValue(['ZOOM_CLIENT_SECRET', 'ZOOM_API_SECRET', 'ZOOM_SDK_SECRET']);
    $accountId = resolveEnvValue(['ZOOM_ACCOUNT_ID', 'ZOOM_MASTER_ACCOUNT_ID', 'ZOOM_ACCOUNT_NUMBER']);

    if ($clientId === '' || $clientSecret === '') {
        $missing = [];
        if ($clientId === '') {
            $missing[] = 'ZOOM_CLIENT_ID (or ZOOM_API_KEY/ZOOM_SDK_KEY)';
        }
        if ($clientSecret === '') {
            $missing[] = 'ZOOM_CLIENT_SECRET (or ZOOM_API_SECRET/ZOOM_SDK_SECRET)';
        }

        throw new RuntimeException('Zoom credentials are not configured: missing ' . implode(', ', $missing) . '.');
    }

    // Prefer Server-to-Server OAuth when an account ID is present.
    if ($accountId !== '') {
        $tokenUrl = sprintf(
            'https://zoom.us/oauth/token?grant_type=account_credentials&account_id=%s',
            urlencode((string) $accountId)
        );

        $ch = curl_init($tokenUrl);
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Authorization: Basic ' . base64_encode($clientId . ':' . $clientSecret),
                'Content-Type: application/x-www-form-urlencoded',
            ],
        ]);

        $response = curl_exec($ch);
        if ($response === false) {
            $error = curl_error($ch);
            curl_close($ch);
            throw new RuntimeException('Unable to reach Zoom OAuth endpoint: ' . $error);
        }

        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $data = json_decode($response, true);
        if ($statusCode < 200 || $statusCode >= 300 || !is_array($data)) {
            $message = $data['reason'] ?? $data['message'] ?? 'Unexpected response while fetching Zoom token.';
            throw new RuntimeException($message);
        }

        if (empty($data['access_token'])) {
            throw new RuntimeException('Zoom token response is missing access_token.');
        }

        return (string) $data['access_token'];
    }

    // Fallback: support legacy JWT/API-Key + Secret apps.
    $now = time();
    $payload = [
        'iss' => $clientId,
        'exp' => $now + 55,
        'iat' => $now,
    ];

    $header = [
        'alg' => 'HS256',
        'typ' => 'JWT',
    ];

    $segments = [
        base64url_encode(json_encode($header, JSON_UNESCAPED_SLASHES)),
        base64url_encode(json_encode($payload, JSON_UNESCAPED_SLASHES)),
    ];

    $signature = hash_hmac('sha256', implode('.', $segments), $clientSecret, true);
    $segments[] = base64url_encode($signature);

    return implode('.', $segments);
}

/**
 * Perform a Zoom API request and return the decoded array response.
 *
 * @throws RuntimeException
 */
function callZoomApi(string $method, string $endpoint, string $token, ?array $payload = null): array
{
    $ch = curl_init($endpoint);

    $headers = [
        'Authorization: Bearer ' . $token,
        'Accept: application/json',
    ];

    if ($payload !== null) {
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    }

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => strtoupper($method),
        CURLOPT_HTTPHEADER => $headers,
    ]);

    $response = curl_exec($ch);
    if ($response === false) {
        $error = curl_error($ch);
        curl_close($ch);
        throw new RuntimeException('Zoom API request failed: ' . $error);
    }

    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $data = json_decode($response, true);
    if ($statusCode < 200 || $statusCode >= 300) {
        $message = is_array($data) ? ($data['message'] ?? 'Zoom API error') : 'Zoom API error';
        throw new RuntimeException($message);
    }

    return is_array($data) ? $data : [];
}

/**
 * Create a brand new Zoom meeting for this submission.
 *
 * @return array{id?: string|int, join_url: string, start_url: string, start_time?: string, timezone?: string, duration?: int, scheduled_display?: string}
 */
function createZoomMeeting(
    string $token,
    string $meetingLabel,
    string $fullName,
    string $preferredTime,
    string $projectDescription
): array {
    $timezone = zoomDefaultTimezone();
    $duration = max(15, (int) env_value('ZOOM_DEFAULT_DURATION_MINUTES', 30));
    $schedule = determineMeetingSchedule($preferredTime, $timezone);

    $payload = [
        'topic' => sprintf('%s — %s', $meetingLabel, $fullName),
        'type' => 2,
        'start_time' => $schedule['iso'],
        'duration' => $duration,
        'timezone' => $timezone,
        'agenda' => $projectDescription !== '' ? $projectDescription : 'Client consultation with AiBit Sol',
        'settings' => [
            'waiting_room' => true,
            'mute_upon_entry' => true,
            'join_before_host' => false,
            'approval_type' => 2,
            'host_video' => true,
            'participant_video' => false,
            'registrants_email_notification' => false,
        ],
    ];

    $response = callZoomApi(
        'POST',
        'https://api.zoom.us/v2/users/me/meetings',
        $token,
        $payload
    );

    if (empty($response['join_url']) || empty($response['start_url'])) {
        throw new RuntimeException('Zoom did not return meeting links for the new meeting.');
    }

    $response['scheduled_display'] = formatMeetingDateTime(
        $response['start_time'] ?? $schedule['iso'],
        $response['timezone'] ?? $timezone
    );

    if (empty($response['duration'])) {
        $response['duration'] = $duration;
    }

    return $response;
}

/**
 * Configure PHPMailer with SMTP settings pulled from the environment.
 *
 * @throws PHPMailerException
 */
function buildMailer(): PHPMailer
{
    $mail = new PHPMailer(true);

    $smtpHost = env_value('SMTP_HOST', 'smtp.gmail.com');
    $smtpUser = env_value('SMTP_USERNAME', '');
    $smtpPassword = env_value('SMTP_PASSWORD', '');
    $smtpPort = (int) env_value('SMTP_PORT', 587);
    $smtpEncryption = strtolower((string) env_value('SMTP_ENCRYPTION', 'tls'));
    $fromEmail = env_value('SMTP_FROM_EMAIL', 'no-reply@example.com');
    $fromName = env_value('SMTP_FROM_NAME', 'AiBit Sol Website');

    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = $smtpEncryption === 'ssl'
        ? PHPMailer::ENCRYPTION_SMTPS
        : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $smtpPort;
    $mail->setFrom($fromEmail, $fromName);
    $mail->isHTML(true);

    return $mail;
}

/**
 * Send an email and bubble up any PHPMailer errors as runtime exceptions.
 *
 * @throws RuntimeException
 */
function sendEmail(string $recipientEmail, string $recipientName, string $subject, string $htmlBody): void
{
    try {
        $mailer = buildMailer();
        $mailer->addAddress($recipientEmail, $recipientName);
        $mailer->Subject = $subject;
        $mailer->Body = $htmlBody;
        $mailer->send();
    } catch (PHPMailerException $exception) {
        throw new RuntimeException('Unable to send email: ' . $exception->getMessage());
    }
}

/**
 * Build a consistent HTML email layout.
 *
 * @param array<int, array{label: string, value: string}> $rows
 * @param array{label: string, url: string}|null $cta
 */
function buildEmailTemplate(
    string $title,
    string $intro,
    array $rows,
    ?array $cta = null,
    string $extraHtml = '',
    string $footerNote = ''
): string {
    $rowsHtml = '';
    foreach ($rows as $row) {
        $rowsHtml .= sprintf(
            '<tr>
                <td style="padding:12px 16px;font-weight:600;color:#0f172a;border-bottom:1px solid #e2e8f0;width:38%%;">%s</td>
                <td style="padding:12px 16px;color:#475467;border-bottom:1px solid #e2e8f0;">%s</td>
            </tr>',
            $row['label'],
            $row['value']
        );
    }

    $ctaHtml = '';
    if ($cta && !empty($cta['url']) && !empty($cta['label'])) {
        $ctaHtml = sprintf(
            '<div style="margin:24px 0;">
                <a href="%s" style="display:inline-block;background:#4f46e5;color:#ffffff;padding:12px 24px;border-radius:999px;font-weight:600;text-decoration:none;">%s</a>
            </div>',
            escapeHtml($cta['url']),
            escapeHtml($cta['label'])
        );
    }

    $extraSection = $extraHtml !== '' ? sprintf(
        '<div style="margin-top:20px;padding:16px 18px;background:#f8fafc;border-radius:16px;color:#0f172a;">%s</div>',
        $extraHtml
    ) : '';

    $footer = $footerNote !== '' ? sprintf(
        '<p style="margin-top:24px;font-size:13px;color:#94a3b8;">%s</p>',
        $footerNote
    ) : '';

    return sprintf(
        '<div style="font-family:\'Segoe UI\',Arial,sans-serif;background:#eef2ff;padding:32px 0;">
            <div style="max-width:640px;margin:0 auto;background:#ffffff;border-radius:24px;padding:32px 36px;box-shadow:0 12px 40px rgba(79,70,229,0.18);">
                <p style="text-transform:uppercase;font-weight:700;font-size:12px;letter-spacing:1.6px;color:#6366f1;margin:0 0 8px;">AiBit Sol</p>
                <h1 style="margin:0 0 16px;font-size:24px;color:#0f172a;">%s</h1>
                <p style="margin:0 0 24px;color:#475467;line-height:1.6;">%s</p>
                <table style="width:100%%;border-collapse:collapse;border-radius:20px;overflow:hidden;background:#f8fafc;">%s</table>
                %s
                %s
                %s
            </div>
        </div>',
        $title,
        $intro,
        $rowsHtml,
        $ctaHtml,
        $extraSection,
        $footer
    );
}

// -------------------------------------------------------------------------
// Request validation
// -------------------------------------------------------------------------

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(405, [
        'success' => false,
        'message' => 'Method not allowed.',
    ]);
}

$rawBody = file_get_contents('php://input') ?: '';
$payload = json_decode($rawBody, true);
if (!is_array($payload)) {
    $payload = $_POST;
}

$fullName = trim((string) ($payload['full_name'] ?? ''));
$email = trim((string) ($payload['email'] ?? ''));
$meetingType = trim((string) ($payload['meeting_type'] ?? ''));
$preferredTime = trim((string) ($payload['preferred_time'] ?? 'flexible'));
$projectDescription = trim((string) ($payload['project_description'] ?? ''));
$additionalNotes = trim((string) ($payload['additional_notes'] ?? ''));

$errors = [];

if ($fullName === '') {
    $errors[] = 'Full name is required.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email address is required.';
}

if (!array_key_exists($meetingType, zoomMeetingTypes())) {
    $errors[] = 'Please select a valid meeting type.';
}

if ($projectDescription === '') {
    $errors[] = 'Project description is required.';
}

if (!empty($errors)) {
    respond(422, [
        'success' => false,
        'message' => implode(' ', $errors),
        'errors' => $errors,
    ]);
}

$meetingTypes = zoomMeetingTypes();
$meetingConfig = $meetingTypes[$meetingType];
$meetingLabel = $meetingConfig['label'] ?? 'Custom Session';
$configuredMeetingId = $meetingConfig['meeting_id'] ?? null;

$companyEmail = env_value('COMPANY_EMAIL', 'aibitsolpvt@gmail.com');
if (empty($companyEmail)) {
    respond(500, [
        'success' => false,
        'message' => 'Company email is not configured.',
    ]);
}

try {
    $zoomToken = fetchZoomAccessToken();

    // Split full name into first/last for Zoom API requirements.
    $nameParts = preg_split('/\s+/', $fullName, 2);
    $firstName = $nameParts[0] ?? $fullName;
    $lastName = $nameParts[1] ?? '';

    $comments = implode("\n", array_filter([
        'Meeting Type: ' . $meetingConfig['label'],
        'Preferred Time: ' . preferredTimeLabel($preferredTime),
        $projectDescription,
        $additionalNotes,
    ]));

    $registrantData = [
        'email' => $email,
        'first_name' => $firstName,
        'last_name' => $lastName !== '' ? $lastName : $firstName,
        'comments' => $comments,
    ];
    $timeLabel = preferredTimeLabel($preferredTime);
    $meetingTimezone = zoomDefaultTimezone();
    $durationMinutes = max(15, (int) env_value('ZOOM_DEFAULT_DURATION_MINUTES', 30));
    $scheduledDisplay = 'We will confirm the exact time shortly.';
    $meetingRef = $configuredMeetingId ? (string) $configuredMeetingId : '';
    $startUrl = '';
    $joinUrl = '';

    if ($configuredMeetingId) {
        $registrantResponse = callZoomApi(
            'POST',
            sprintf('https://api.zoom.us/v2/meetings/%s/registrants', $configuredMeetingId),
            $zoomToken,
            $registrantData
        );

        $joinUrl = $registrantResponse['join_url'] ?? '';
        if ($joinUrl === '') {
            throw new RuntimeException('Zoom did not return a join link for this meeting.');
        }

        $meetingDetails = callZoomApi(
            'GET',
            sprintf('https://api.zoom.us/v2/meetings/%s', $configuredMeetingId),
            $zoomToken
        );

        $startUrl = $meetingDetails['start_url'] ?? '';
        $meetingTimezone = $meetingDetails['timezone'] ?? $meetingTimezone;
        $scheduledDisplay = formatMeetingDateTime($meetingDetails['start_time'] ?? null, $meetingTimezone);
        if (!empty($meetingDetails['duration'])) {
            $durationMinutes = (int) $meetingDetails['duration'];
        }
        $meetingRef = (string) $configuredMeetingId;
    } else {
        $createdMeeting = createZoomMeeting(
            $zoomToken,
            $meetingLabel,
            $fullName,
            $preferredTime,
            $projectDescription
        );

        $joinUrl = (string) $createdMeeting['join_url'];
        $startUrl = (string) $createdMeeting['start_url'];
        $meetingTimezone = $createdMeeting['timezone'] ?? $meetingTimezone;
        $scheduledDisplay = $createdMeeting['scheduled_display'] ?? formatMeetingDateTime(
            $createdMeeting['start_time'] ?? null,
            $meetingTimezone
        );
        $durationMinutes = (int) ($createdMeeting['duration'] ?? $durationMinutes);
        $meetingRef = (string) ($createdMeeting['id'] ?? $meetingRef);
    }

    if ($joinUrl === '') {
        throw new RuntimeException('Zoom did not provide a join link for this booking.');
    }

    $durationLabel = sprintf('%d mins', $durationMinutes);
    $meetingIdDisplay = $meetingRef !== '' ? escapeHtml($meetingRef) : 'To be assigned';

    $userRows = [
        ['label' => 'Meeting Type', 'value' => escapeHtml($meetingLabel)],
        ['label' => 'Preferred Window', 'value' => escapeHtml($timeLabel)],
        ['label' => 'Scheduled Time', 'value' => escapeHtml($scheduledDisplay)],
        ['label' => 'Duration', 'value' => escapeHtml($durationLabel)],
        ['label' => 'Meeting ID', 'value' => $meetingIdDisplay],
    ];

    $userIntro = sprintf(
        'Hi %s, thanks for scheduling a <strong>%s</strong> with AiBit Sol. Below are your meeting details.',
        escapeHtml($fullName),
        escapeHtml($meetingLabel)
    );

    $userExtra = '<p style="margin:0;font-weight:600;">Project Description</p>'
        . '<p style="margin:4px 0 0;">' . nl2br(escapeHtml($projectDescription)) . '</p>';

    if ($additionalNotes !== '') {
        $userExtra .= '<p style="margin:16px 0 0;font-weight:600;">Additional Notes</p>'
            . '<p style="margin:4px 0 0;">' . nl2br(escapeHtml($additionalNotes)) . '</p>';
    }

    $userEmailBody = buildEmailTemplate(
        'Your Zoom meeting is booked',
        $userIntro,
        $userRows,
        [
            'label' => 'Join Meeting',
            'url' => $joinUrl,
        ],
        $userExtra,
        'Need to reschedule? Reply directly to this email and our team will assist.'
    );

    $adminRows = [
        ['label' => 'Client', 'value' => escapeHtml($fullName)],
        [
            'label' => 'Email',
            'value' => sprintf(
                '<a href="mailto:%1$s" style="color:#4f46e5;text-decoration:none;">%1$s</a>',
                escapeHtml($email)
            ),
        ],
        ['label' => 'Meeting Type', 'value' => escapeHtml($meetingLabel)],
        ['label' => 'Preferred Window', 'value' => escapeHtml($timeLabel)],
        ['label' => 'Scheduled Time', 'value' => escapeHtml($scheduledDisplay)],
        ['label' => 'Duration', 'value' => escapeHtml($durationLabel)],
        ['label' => 'Meeting ID', 'value' => $meetingIdDisplay],
    ];

    $adminExtra = '<p style="margin:0;font-weight:600;">Project Description</p>'
        . '<p style="margin:4px 0 0;">' . nl2br(escapeHtml($projectDescription)) . '</p>';

    if ($additionalNotes !== '') {
        $adminExtra .= '<p style="margin:16px 0 0;font-weight:600;">Additional Notes</p>'
            . '<p style="margin:4px 0 0;">' . nl2br(escapeHtml($additionalNotes)) . '</p>';
    }

    $adminExtra .= sprintf(
        '<p style="margin:16px 0 0;"><strong>Client Join Link:</strong> <a href="%1$s" style="color:#4f46e5;text-decoration:none;">%1$s</a></p>',
        escapeHtml($joinUrl)
    );

    $adminEmailBody = buildEmailTemplate(
        'New Zoom meeting scheduled',
        sprintf(
            'A new <strong>%s</strong> Zoom session was requested via the AiBit Sol website.',
            escapeHtml($meetingLabel)
        ),
        $adminRows,
        $startUrl !== '' ? [
            'label' => 'Start Meeting (Host)',
            'url' => $startUrl,
        ] : null,
        $adminExtra,
        'This notification was sent automatically — reply if follow-up is needed.'
    );

    sendEmail($email, $fullName, 'Your Zoom Meeting Details', $userEmailBody);
    sendEmail($companyEmail, 'AiBit Sol', 'New Zoom Meeting Request', $adminEmailBody);

    respond(200, [
        'success' => true,
        'message' => 'Meeting scheduled successfully. Please check your email for the join link.',
        'data' => [
            'join_url' => $joinUrl,
            'start_url' => $startUrl,
            'meeting_id' => $meetingRef,
        ],
    ]);
} catch (RuntimeException $exception) {
    respond(500, [
        'success' => false,
        'message' => $exception->getMessage(),
    ]);
}


