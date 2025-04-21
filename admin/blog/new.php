<?php
require_once __DIR__ . '/../../config/constants.php';
// No need to require config.php as it's already included in constants.php
require_once BASE_PATH . '/config/database.php';
session_start();

// Check if user is logged in
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    $excerpt = $_POST['excerpt'] ?? '';
    $published = isset($_POST['published']) ? 1 : 0;
    $featured_image = $_POST['featured_image'] ?? '';
    $categories = $_POST['categories'] ?? [];
    
    // Create slug from title
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
    
    try {
        $pdo->beginTransaction();
        
        // Insert post
        $stmt = $pdo->prepare("INSERT INTO posts (title, slug, content, excerpt, published, featured_image) 
                              VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$title, $slug, $content, $excerpt, $published, $featured_image]);
        $post_id = $pdo->lastInsertId();
        
        // Insert categories
        if (!empty($categories)) {
            $stmt = $pdo->prepare("INSERT INTO post_categories (post_id, category_id) VALUES (?, ?)");
            foreach ($categories as $category_id) {
                $stmt->execute([$post_id, $category_id]);
            }
        }
        
        $pdo->commit();
        header('Location: index.php');
        exit;
    } catch (PDOException $e) {
        $pdo->rollBack();
        $error = "Error creating post: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include BASE_PATH . '/head.html'; ?>
    <title>New Post - Blog Admin - Viet Deli</title>
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="admin-panel">
        <h1>New Blog Post</h1>
        
        <?php if (isset($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form method="POST" class="post-form">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" required>
            </div>
            
            <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <textarea id="excerpt" name="excerpt" rows="3"></textarea>
            </div>
            
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" rows="10" required></textarea>
            </div>
            
            <div class="form-group">
                <label>Categories</label>
                <div class="category-checkboxes">
                    <?php
                    $categories = $pdo->query("SELECT * FROM categories ORDER BY name")->fetchAll();
                    foreach ($categories as $category):
                    ?>
                        <label class="checkbox-label">
                            <input type="checkbox" name="categories[]" value="<?php echo $category['id']; ?>"
                                <?php if (isset($post_categories) && in_array($category['id'], $post_categories)) echo 'checked'; ?>>
                            <?php echo htmlspecialchars($category['name']); ?>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="form-group">
                <label for="image_upload">Featured Image</label>
                <div class="image-upload">
                    <input type="file" id="image_upload" name="image" accept="image/*">
                    <input type="hidden" id="featured_image" name="featured_image">
                    <div id="image_preview">
                        <?php if (isset($post) && $post['featured_image']): ?>
                            <img src="<?php echo htmlspecialchars($post['featured_image']); ?>" alt="Preview">
                            <button type="button" class="remove-image">Remove Image</button>
                        <?php endif; ?>
                    </div>
                    <div class="upload-hint">Maximum file size: 5MB. Allowed types: JPG, PNG, GIF</div>
                    <div id="upload_status"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label>
                    <input type="checkbox" name="published" checked>
                    Publish immediately
                </label>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="admin-button">Create Post</button>
                <a href="<?php echo SITE_URL; ?>admin/blog/" class="cancel-button">Cancel</a>
            </div>
        </form>
    </div>

    <script src="<?php echo SITE_URL; ?>js/admin/upload.js"></script>
</body>
</html> 