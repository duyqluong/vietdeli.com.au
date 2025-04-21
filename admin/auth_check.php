<?php
require_once __DIR__ . '/../config/constants.php';
require_once BASE_PATH . '/config/database.php';
require_once BASE_PATH . '/config/Auth.php';

session_start();

$auth = new Auth($pdo);

if (!$auth->isLoggedIn() || !$auth->checkSessionTimeout()) {
    session_unset();
    session_destroy();
    header('Location: ' . SITE_URL . 'admin/index.php');
    exit;
}
?> 