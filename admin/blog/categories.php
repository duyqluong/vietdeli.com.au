<?php
require_once __DIR__ . '/../../config/constants.php';
require_once BASE_PATH . '/config/database.php';
require_once BASE_PATH . '/includes/functions.php';
session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: ' . SITE_URL . 'admin/');
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $description = trim($_POST['description'] ?? '');
    
    if (empty($name)) {
        $error = "Category name is required.";
    } else {
        $slug = createSlug($name);

        try {
            // Check if category with same name or slug exists
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM categories WHERE name = ? OR slug = ?");
            $stmt->execute([$name, $slug]);
            if ($stmt->fetchColumn() > 0) {
                $error = "A category with this name or slug already exists.";
            } else {
                $stmt = $pdo->prepare("INSERT INTO categories (name, slug, description) VALUES (?, ?, ?)");
                if ($stmt->execute([$name, $slug, $description])) {
                    $_SESSION['success'] = "Category created successfully";
                    header('Location: ' . SITE_URL . 'admin/blog/categories.php');
                    exit;
                } else {
                    $error = "Failed to create category";
                }
            }
        } catch (PDOException $e) {
            $error = "Error creating category: " . $e->getMessage();
        }
    }
}

// Get all categories with post counts
try {
    $categories = $pdo->query("
        SELECT c.*, COUNT(pc.post_id) as post_count 
        FROM categories c 
        LEFT JOIN post_categories pc ON c.id = pc.category_id 
        GROUP BY c.id 
        ORDER BY c.name
    ")->fetchAll();
} catch (PDOException $e) {
    $error = "Error fetching categories: " . $e->getMessage();
    $categories = [];
}

// Get the base URL for admin
$baseUrl = SITE_URL . 'admin/blog/';

// Check for session messages
if (isset($_SESSION['success'])) {
    $success = $_SESSION['success'];
    unset($_SESSION['success']);
}

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include '../../head.html'; ?>
    <title>Manage Categories - Blog Admin - Viet Deli</title>
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="admin-panel">
        <div class="admin-header">
            <h1>Manage Categories</h1>
            <a href="<?php echo SITE_URL; ?>admin/blog/" class="back-button">← Back to Blog Management</a>
        </div>
        
        <?php if (isset($success)): ?>
            <div class="success-message"><?php echo $success; ?></div>
        <?php endif; ?>
        
        <?php if (isset($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <div class="admin-content">
            <div class="category-form-container">
                <h2>Add New Category</h2>
                <form method="POST" class="category-form">
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" rows="3"></textarea>
                    </div>
                    
                    <button type="submit" class="admin-button">Create Category</button>
                </form>
            </div>

            <div class="categories-list">
                <h2>Existing Categories</h2>
                <?php if (empty($categories)): ?>
                    <p>No categories found.</p>
                <?php else: ?>
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Posts</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($category['name']); ?></td>
                                <td><?php echo htmlspecialchars($category['slug']); ?></td>
                                <td><?php echo htmlspecialchars($category['description']); ?></td>
                                <td><?php echo $category['post_count']; ?></td>
                                <td>
                                    <a href="<?php echo $baseUrl; ?>edit-category.php?id=<?php echo $category['id']; ?>" 
                                       class="action-link edit">Edit</a>
                                    <?php if ($category['post_count'] == 0): ?>
                                        <a href="<?php echo $baseUrl; ?>delete-category.php?id=<?php echo $category['id']; ?>" 
                                           class="action-link delete"
                                           onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html> 