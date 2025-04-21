<?php
require_once __DIR__ . '/../../config/constants.php';
require_once BASE_PATH . '/config/database.php';
session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: categories.php');
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $description = $_POST['description'] ?? '';
    $slug = createSlug($name);

    try {
        $stmt = $pdo->prepare("UPDATE categories SET name = ?, slug = ?, description = ? WHERE id = ?");
        $stmt->execute([$name, $slug, $description, $id]);
        header('Location: categories.php');
        exit;
    } catch (PDOException $e) {
        $error = "Error updating category: " . $e->getMessage();
    }
}

// Get category data
$stmt = $pdo->prepare("SELECT * FROM categories WHERE id = ?");
$stmt->execute([$id]);
$category = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$category) {
    header('Location: categories.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/vietdeli/' : '/'; ?>">
    <?php include '../../head.html'; ?>
    <title>Edit Category - Blog Admin - Viet Deli</title>
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="admin-panel">
        <h1>Edit Category</h1>
        
        <?php if (isset($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
        
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
                <a href="blog/admin/categories.php" class="cancel-button">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html> 