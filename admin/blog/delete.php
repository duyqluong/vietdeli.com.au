<?php
require_once '../security_headers.php';
require_once '../auth_check.php';
require_once __DIR__ . '/../../config/constants.php';
require_once BASE_PATH . '/config/database.php';

$id = $_GET['id'] ?? null;
if ($id) {
    try {
        // First check if the post exists
        $check_stmt = $pdo->prepare("SELECT id FROM posts WHERE id = ?");
        $check_stmt->execute([$id]);
        
        if ($check_stmt->rowCount() > 0) {
            $stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
            $stmt->execute([$id]);
            $_SESSION['success_message'] = "Post deleted successfully.";
        } else {
            $_SESSION['error_message'] = "Post not found.";
        }
    } catch (PDOException $e) {
        $_SESSION['error_message'] = "An error occurred while deleting the post.";
        error_log("Delete post error: " . $e->getMessage());
    }
} else {
    $_SESSION['error_message'] = "Invalid post ID.";
}

header('Location: ' . SITE_URL . 'admin/blog/');
exit; 