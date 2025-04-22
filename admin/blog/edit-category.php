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
if (!$id) {
    header('Location: ' . SITE_URL . 'admin/blog/categories.php');
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $description = $_POST['description'] ?? '';
    
    if (empty($name)) {
        $error = "Category name is required.";
    } else {
        $slug = createSlug($name);

        try {
            // Check if category with same name exists (excluding current category)
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM categories WHERE name = ? AND id != ?");
            $stmt->execute([$name, $id]);
            if ($stmt->fetchColumn() > 0) {
                $error = "A category with this name already exists.";
            } else {
                $stmt = $pdo->prepare("UPDATE categories SET name = ?, slug = ?, description = ? WHERE id = ?");
                $stmt->execute([$name, $slug, $description, $id]);
                $success = "Category updated successfully";
            }
        } catch (PDOException $e) {
            $error = "Error updating category: " . $e->getMessage();
        }
    }
}

// Get category data
try {
    $stmt = $pdo->prepare("SELECT * FROM categories WHERE id = ?");
    $stmt->execute([$id]);
    $category = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$category) {
        header('Location: ' . SITE_URL . 'admin/blog/categories.php');
        exit;
    }
} catch (PDOException $e) {
    $error = "Error fetching category: " . $e->getMessage();
    header('Location: ' . SITE_URL . 'admin/blog/categories.php');
    exit;
}

// Get the base URL for admin
$baseUrl = SITE_URL . 'admin/blog/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include '../../head.html'; ?>
    <title>Edit Category - Blog Admin - Viet Deli</title>
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="admin-panel">
        <div class="admin-header">
            <h1>Edit Category</h1>
            <a href="<?php echo $baseUrl; ?>categories.php" class="back-button">← Back to Categories</a>
        </div>
        
        <?php if (isset($success)): ?>
            <div class="success-message"><?php echo $success; ?></div>
        <?php endif; ?>
        
        <?php if (isset($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <div class="admin-content">
            <form method="POST" class="category-form">
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" id="name" name="name" 
                           value="<?php echo htmlspecialchars($category['name']); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="3"><?php echo htmlspecialchars($category['description']); ?></textarea>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="admin-button">Update Category</button>
                    <a href="<?php echo $baseUrl; ?>categories.php" class="cancel-button">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html> 