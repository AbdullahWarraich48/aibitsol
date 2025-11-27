<?php
$files = [
    'website-that-work.php',
    'web-app-development.php',
    'mob-app-development.php',
    'mobile-experiences.php',
    'ui-ux.php',
    'mvp.php',
    'custom-ai-solution.php',
    'custom-branding-marketing-kit.php',
    'custom-software-development.php',
    'digital-marketing.php',
    'seo-ai-seo.php',
    'seo-marketing.php',
    'social-media-ads.php',
    'it-staff.php',
    'custom-partnership.php',
    'technology-partner.php',
];

$base = __DIR__ . '/../pages/';
$data = [];

foreach ($files as $fname) {
    $path = $base . $fname;
    if (!file_exists($path)) {
        $data[$fname] = 'missing';
        continue;
    }
    $comments = [];
    $lines = file($path);
    foreach ($lines as $i => $line) {
        $lineTrim = trim($line);
        if (substr($lineTrim, 0, 4) === '<!--' && substr($lineTrim, -3) === '-->') {
            $comments[] = [$i + 1, $lineTrim];
        }
    }
    $data[$fname] = $comments;
}

echo json_encode($data, JSON_PRETTY_PRINT);

