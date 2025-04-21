<?php
require_once __DIR__ . '/../../config/constants.php';
require_once BASE_PATH . '/config/database.php';
session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}

$id = $_GET['id'] ?? null;
if ($id) {
    try {
        // Begin transaction
        $pdo->beginTransaction();
        
        // Delete category associations first
        $stmt = $pdo->prepare("DELETE FROM post_categories WHERE category_id = ?");
        $stmt->execute([$id]);
        
        // Then delete the category
        $stmt = $pdo->prepare("DELETE FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        
        // Commit transaction
        $pdo->commit();
    } catch (PDOException $e) {
        // Rollback on error
        $pdo->rollBack();
        // Log error if needed
    }
}

header('Location: categories.php');
exit; 