<?php
require_once __DIR__ . '/security_headers.php';
require_once __DIR__ . '/auth_check.php';
session_start();

// Clear all session data
session_unset();
session_destroy();

// Redirect to login page
header('Location: ' . SITE_URL . 'admin/index.php');
exit; 