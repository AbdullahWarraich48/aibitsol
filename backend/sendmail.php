<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php'; // autoload correct path

$basePath = rtrim(dirname(dirname($_SERVER['PHP_SELF'] ?? '/backend/sendmail.php')), '/');
$redirectBase = $basePath === '' ? '' : $basePath;

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header('Location: ' . $redirectBase . '/?page=contact&error=' . urlencode('Invalid request.'));
    exit;
}

// Collect and sanitize ALL submitted fields dynamically
$formData = [];

foreach ($_POST as $key => $value) {
    $formData[$key] = htmlspecialchars(trim($value));
}

if (empty($formData)) {
    header('Location: ' . $redirectBase . '/?page=contact&error=' . urlencode('Form submission is empty.'));
    exit;
}

// Create mail instance
$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'aibitsofts@gmail.com';
    $mail->Password   = 'jcaw ksjz wkrf qvaq'; // Replace before deployment
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Routing
    $mail->setFrom('aibitsofts@gmail.com', 'Website Contact Form');
    $mail->addAddress('abdullahwarraich0048@gmail.com');

    // Add Reply-To automatically if an "email" field exists
    if (!empty($formData['email'])) {
        $mail->addReplyTo($formData['email']);
    }

    // Build HTML body dynamically from submitted fields
    $htmlContent = "<h2>New Contact Form Submission</h2>";

    foreach ($formData as $key => $value) {
        $htmlContent .= "<p><strong>" . ucfirst($key) . ":</strong> " . nl2br($value) . "</p>";
    }

    $mail->isHTML(true);
    $mail->Subject = "New Contact Form Submission";
    $mail->Body    = $htmlContent;

    $mail->send();
    header('Location: ' . $redirectBase . '/?page=contact&success=1');
    exit;
} catch (Exception $e) {
    error_log('PHPMailer error: ' . $mail->ErrorInfo);
    header('Location: ' . $redirectBase . '/?page=contact&error=' . urlencode('Email failed to send. Please try again.'));
    exit;
}

?>

