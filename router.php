<?php
// Built-in server router to emulate .htaccess rewrites
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve existing files and directories directly
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
	return false;
}

// Map pretty paths to index.php?page=...
// e.g., /website-that-work -> index.php?page=website-that-work
if ($uri !== '/' && $uri !== '/index.php') {
	$slug = trim($uri, '/');
	if ($slug === '') {
		$_GET['page'] = 'home';
		require __DIR__ . '/index.php';
		exit;
	}
	$_GET['page'] = $slug;
	require __DIR__ . '/index.php';
	exit;
}

// Default to home
$_GET['page'] = $_GET['page'] ?? 'home';
require __DIR__ . '/index.php';

