<?php

require_once __DIR__ . '/../includes/book_expert_mailer.php';

$basePath = rtrim(dirname(dirname($_SERVER['PHP_SELF'] ?? '/backend/sendexpert.php')), '/');
$redirectBase = $basePath === '' ? '' : $basePath;
$redirectBase = $redirectBase ?: '';

function redirect_book_expert(string $target): void
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

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect_book_expert($redirectBase . '/?page=book-an-expert&error=' . urlencode('Invalid request.'));
}

$submissionResult = processBookExpertSubmission($_POST);

if ($submissionResult['success']) {
    redirect_book_expert($redirectBase . '/?page=book-an-expert&success=1');
}

$errorMessage = $submissionResult['message'] ?: 'Failed to send message. Please try again.';
redirect_book_expert($redirectBase . '/?page=book-an-expert&error=' . urlencode($errorMessage));

