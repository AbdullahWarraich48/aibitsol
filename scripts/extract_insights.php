<?php

/**
 * Extracts Statistics/Problems/Solutions seed data from a downloaded
 * AiBitSoft HTML page by parsing the "CRITICAL BUSINESS IMPACT" section.
 *
 * Usage:
 *   php scripts/extract_insights.php tmp/Digital-Marketing.html
 *
 * Outputs JSON payload with cards array:
 * [
 *   {
 *     "stat": "53%",
 *     "statLabel": "of website traffic comes from SEO",
 *     "problemTitle": "Low Visibility",
 *     "problemSubtitle": "Poor or no digital presence / low website visibility",
 *     "solutionCopy": "If your site doesn't rank..."
 *   },
 *   ...
 * ]
 */

if ($argc < 2) {
    fwrite(STDERR, "Usage: php scripts/extract_insights.php <html-file>\n");
    exit(1);
}

$file = $argv[1];
if (!is_file($file)) {
    fwrite(STDERR, "File not found: {$file}\n");
    exit(1);
}

$html = file_get_contents($file);
if ($html === false) {
    fwrite(STDERR, "Unable to read file: {$file}\n");
    exit(1);
}

libxml_use_internal_errors(true);
$dom = new DOMDocument();
$loaded = $dom->loadHTML($html);
libxml_clear_errors();

if (!$loaded) {
    fwrite(STDERR, "Failed to parse HTML for {$file}\n");
    exit(1);
}

$xpath = new DOMXPath($dom);
$section = $xpath->query("//section[.//div[contains(normalize-space(.), 'CRITICAL BUSINESS IMPACT')]]")->item(0);
if (!$section) {
    fwrite(STDERR, "Could not find CRITICAL BUSINESS IMPACT section in {$file}\n");
    exit(1);
}

$cards = $xpath->query(".//div[contains(@class,'rounded-2xl') and contains(@class,'border-2')]", $section);
$results = [];

foreach ($cards as $card) {
    $statNode = $xpath->query(".//div[contains(@class,'font-bold')]", $card)->item(0);
    $statLabelNode = $xpath->query(".//div[contains(@class,'font-bold')]/following-sibling::p", $card)->item(0);
    $problemTitleNode = $xpath->query(".//h3", $card)->item(0);
    $problemSubtitleNode = $xpath->query(".//h3/following-sibling::p", $card)->item(0);
    $solutionNode = $xpath->query(".//div[contains(@class,'rounded-lg')]/p", $card)->item(0);

    $results[] = [
        'stat' => trim($statNode?->textContent ?? ''),
        'statLabel' => trim($statLabelNode?->textContent ?? ''),
        'problemTitle' => trim($problemTitleNode?->textContent ?? ''),
        'problemSubtitle' => trim($problemSubtitleNode?->textContent ?? ''),
        'solutionCopy' => trim($solutionNode?->textContent ?? ''),
    ];
}

echo json_encode($results, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . PHP_EOL;

