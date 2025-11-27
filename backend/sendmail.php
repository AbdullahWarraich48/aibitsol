<?php

require_once __DIR__ . '/../includes/contact_mailer.php';

$scriptPath = $_SERVER['SCRIPT_NAME'] ?? '/backend/sendmail.php';
$basePath = rtrim(str_replace('\\', '/', dirname(dirname($scriptPath))), '/');
$redirectBase = $basePath === '' ? '' : $basePath;

function redirect_contact(string $target): void
{
    if (!headers_sent()) {
        header('Location: ' . $target);
        exit;
    }

    echo '<!doctype html><html><head>';
    echo '<meta http-equiv="refresh" content="0;url=' . htmlspecialchars($target, ENT_QUOTES, 'UTF-8') . '">';
    echo '<script>window.location.href = ' . json_encode($target) . ';</script>';
    echo '</head><body>Redirecting...</body></html>';
    exit;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    redirect_contact($redirectBase . '/?page=contact&error=' . urlencode('Invalid request.'));
}

$submissionResult = processContactFormSubmission($_POST);

if ($submissionResult['success']) {
    redirect_contact($redirectBase . '/?page=contact&success=1');
}

$errorMessage = $submissionResult['message'] ?: 'Failed to send message. Please try again.';
redirect_contact($redirectBase . '/?page=contact&error=' . urlencode($errorMessage));