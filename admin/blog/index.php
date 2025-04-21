<?php
require_once '../security_headers.php';
require_once '../auth_check.php';
require_once __DIR__ . '/../../config/constants.php';
require_once BASE_PATH . '/config/database.php';

// Get all posts for admin
$stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include '../../head.html'; ?>
    <title>Blog Management - Viet Deli</title>
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="admin-panel">
        <h1>Blog Management</h1>
        <div class="admin-actions">
            <a href="admin/blog/new.php" class="admin-button">New Post</a>
            <a href="admin/blog/categories.php" class="admin-button">Manage Categories</a>
            <a href="admin/dashboard.php" class="admin-button">Back to Dashboard</a>
        </div>
        
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($posts)): ?>
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($post['title']); ?></td>
                            <td><?php echo date('Y-m-d', strtotime($post['created_at'])); ?></td>
                            <td><?php echo $post['published'] ? 'Published' : 'Draft'; ?></td>
                            <td>
                                <a href="admin/blog/edit.php?id=<?php echo $post['id']; ?>">Edit</a>
                                <a href="admin/blog/delete.php?id=<?php echo $post['id']; ?>" 
                                   onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No posts found. Create your first post!</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html> 