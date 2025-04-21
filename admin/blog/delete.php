<?php
require_once __DIR__ . '/../../config/constants.php';
require_once BASE_PATH . '/config/database.php';
session_start();

// Check if user is logged in
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}

$id = $_GET['id'] ?? null;
if ($id) {
    try {
        $stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        // Log error if needed
    }
}

header('Location: index.php');
exit; 