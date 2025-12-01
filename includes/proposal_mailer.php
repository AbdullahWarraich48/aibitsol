<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/env_loader.php';

loadEnvFile(__DIR__ . '/../.env');

if (!function_exists('processProposalFormSubmission')) {
    /**
     * Handle the Get Proposal form submission and return the result state.
     *
     * @param array $postData
     * @return array{success: bool, message: string, errors: array, data: array}
     */
    function processProposalFormSubmission(array $postData): array
    {
        $result = [
            'success' => false,
            'message' => '',
            'errors' => [],
            'data' => []
        ];

        $formData = [];
        foreach ($postData as $key => $value) {
            $formData[$key] = is_array($value)
                ? array_map('trim', array_map('strval', $value))
                : trim((string) $value);
        }

        $result['data'] = $formData;

        if (empty($formData['name'])) {
            $result['errors'][] = 'Name is required.';
        }

        if (empty($formData['email']) || !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
            $result['errors'][] = 'Valid email is required.';
        }

        if (empty($formData['service'])) {
            $result['errors'][] = 'Service selection is required.';
        }

        if (empty($formData['message'])) {
            $result['errors'][] = 'Project description is required.';
        }

        if (!empty($result['errors'])) {
            $result['message'] = implode(' ', $result['errors']);
            return $result;
        }

        $mail = new PHPMailer(true);

        try {
            $smtpHost = env_value('SMTP_HOST', 'smtp.gmail.com');
            $smtpUser = env_value('SMTP_USERNAME', '');
            $smtpPassword = env_value('SMTP_PASSWORD', '');
            $smtpPort = (int) env_value('SMTP_PORT', 587);
            $smtpEncryption = strtolower((string) env_value('SMTP_ENCRYPTION', 'tls'));
            $fromEmail = env_value('SMTP_FROM_EMAIL', 'no-reply@example.com');
            $fromName = env_value('PROPOSAL_FROM_NAME', 'AibitSol Proposal Form');
            $recipientEmail = env_value('PROPOSAL_RECIPIENT_EMAIL', $fromEmail);

            $mail->isSMTP();
            $mail->Host       = $smtpHost;
            $mail->SMTPAuth   = true;
            $mail->Username   = $smtpUser;
            $mail->Password   = $smtpPassword;
            $mail->SMTPSecure = $smtpEncryption === 'ssl'
                ? PHPMailer::ENCRYPTION_SMTPS
                : PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = $smtpPort;

            $mail->setFrom($fromEmail, $fromName);
            $mail->addAddress($recipientEmail);

            if (!empty($formData['email'])) {
                $mail->addReplyTo($formData['email']);
            }

            $mail->isHTML(true);
            $mail->Subject = 'New Proposal Request';

            $htmlContent = '<h2>New Get Proposal Submission</h2>';
            foreach ($formData as $key => $value) {
                $label = ucwords(str_replace(['_', '-'], ' ', $key));
                $stringValue = is_array($value) ? implode(', ', $value) : $value;
                $htmlContent .= '<p><strong>' . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . ':</strong> ' .
                    nl2br(htmlspecialchars($stringValue, ENT_QUOTES, 'UTF-8')) . '</p>';
            }

            $mail->Body = $htmlContent;

            $mail->send();
            $result['success'] = true;
            $result['message'] = 'Proposal request sent successfully.';
        } catch (Exception $e) {
            error_log('Proposal PHPMailer error: ' . $mail->ErrorInfo);
            $result['message'] = 'Email failed to send. Please try again.';
        }

        return $result;
    }
}

