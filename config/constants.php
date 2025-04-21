<?php
// Include the main config file if not already included
require_once __DIR__ . '/config.php';

// Determine if we're on localhost or live site
$is_localhost = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false);

// Set the base URL accordingly
if ($is_localhost) {
    define('SITE_URL', '/vietdeli/');
} else {
    define('SITE_URL', '/');  // For vietdeli.com.au
}

// Define upload paths
define('UPLOADS_PATH', BASE_PATH . '/uploads');
define('UPLOADS_URL', SITE_URL . 'uploads'); 