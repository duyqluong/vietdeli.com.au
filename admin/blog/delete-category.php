<?php
require_once __DIR__ . '/../../config/constants.php';
require_once BASE_PATH . '/config/database.php';
require_once BASE_PATH . '/includes/functions.php';
session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: ' . SITE_URL . 'admin/');
    exit;
}

$id = $_GET['id'] ?? null;
if ($id) {
    try {
        // Check if category exists
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        if ($stmt->fetchColumn() == 0) {
            $_SESSION['error'] = "Category not found.";
            header('Location: ' . SITE_URL . 'admin/blog/categories.php');
            exit;
        }
        
        // Check if category has any posts
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM post_categories WHERE category_id = ?");
        $stmt->execute([$id]);
        if ($stmt->fetchColumn() > 0) {
            $_SESSION['error'] = "Cannot delete category that has posts associated with it.";
            header('Location: ' . SITE_URL . 'admin/blog/categories.php');
            exit;
        }
        
        // Begin transaction
        $pdo->beginTransaction();
        
        // Delete the category
        $stmt = $pdo->prepare("DELETE FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        
        // Commit transaction
        $pdo->commit();
        
        $_SESSION['success'] = "Category deleted successfully.";
    } catch (PDOException $e) {
        // Rollback on error
        if ($pdo->inTransaction()) {
            $pdo->rollBack();
        }
        $_SESSION['error'] = "Error deleting category: " . $e->getMessage();
    }
} else {
    $_SESSION['error'] = "Invalid category ID.";
}

header('Location: ' . SITE_URL . 'admin/blog/categories.php');
exit; 