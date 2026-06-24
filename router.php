<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Blog post: /blog/[slug]
if (preg_match('#^/blog/([^/\?]+)/?$#', $path, $m)) {
    $_GET['slug'] = $m[1];
    $_REQUEST['slug'] = $m[1];
    include __DIR__ . '/blog/post.php';
    return true;
}

// Serve real files and directories as-is (CSS, JS, images, PHP pages)
if ($path !== '/' && file_exists(__DIR__ . $path)) {
    return false;
}

// Fall through to index.php for everything else
include __DIR__ . '/index.php';
return true;
