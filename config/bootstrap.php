<?php
require_once __DIR__ . '/config.php';      // Load basic configuration first
require_once __DIR__ . '/environment.php';  // Load environment settings
require_once __DIR__ . '/database.php';     // Load database configuration

// Initialize environment
$env = Environment::getInstance();
$env->setupHeaders();

// Get database connection
$db = Database::getInstance();
$pdo = $db->getConnection();
?> 