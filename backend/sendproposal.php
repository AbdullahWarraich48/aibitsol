<?php

require_once __DIR__ . '/../includes/proposal_mailer.php';

$basePath = rtrim(dirname(dirname($_SERVER['PHP_SELF'] ?? '/backend/sendproposal.php')), '/');
$redirectBase = $basePath === '' ? '' : $basePath;
$redirectBase = $redirectBase ?: '';

/**
 * Redirect helper that works even if headers have already been sent.
 */
function redirect_proposal(string $target): void
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
    redirect_proposal($redirectBase . '/?page=get-proposal&error=' . urlencode('Invalid request.'));
}

$submissionResult = processProposalFormSubmission($_POST);

if ($submissionResult['success']) {
    redirect_proposal($redirectBase . '/?page=get-proposal&success=1');
}

$errorMessage = $submissionResult['message'] ?: 'Failed to send message. Please try again.';
redirect_proposal($redirectBase . '/?page=get-proposal&error=' . urlencode($errorMessage));

