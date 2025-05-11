<?php
require_once '../security_headers.php';
require_once '../auth_check.php';
require_once __DIR__ . '/../../config/constants.php';
require_once BASE_PATH . '/config/database.php';

// Debug: Log the received ID
error_log("Received post ID: " . ($_GET['id'] ?? 'null'));

$id = $_GET['id'] ?? null;
if (!$id) {
    $_SESSION['error_message'] = "Invalid post ID.";
    header('Location: ' . SITE_URL . 'admin/blog/');
    exit;
}

// Debug: Log the ID after validation
error_log("Validated post ID: " . $id);

// Get existing post data
$stmt = $pdo->prepare("
    SELECT p.*, GROUP_CONCAT(pc.category_id) as category_ids
    FROM posts p
    LEFT JOIN post_categories pc ON p.id = pc.post_id
    WHERE p.id = ?
    GROUP BY p.id
");

// Debug: Log the SQL query
error_log("SQL Query: SELECT p.*, GROUP_CONCAT(pc.category_id) as category_ids FROM posts p LEFT JOIN post_categories pc ON p.id = pc.post_id WHERE p.id = " . $id);

$stmt->execute([$id]);
$post = $stmt->fetch(PDO::FETCH_ASSOC);

// Debug: Log the query result
error_log("Query result: " . ($post ? "Post found" : "No post found"));

if (!$post) {
    $_SESSION['error_message'] = "Post not found.";
    header('Location: ' . SITE_URL . 'admin/blog/');
    exit;
}

// Get post categories
$post_categories = $post['category_ids'] ? explode(',', $post['category_ids']) : [];

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
        
        // Update post
        $stmt = $pdo->prepare("UPDATE posts 
                              SET title = ?, slug = ?, content = ?, 
                                  excerpt = ?, published = ?, featured_image = ? 
                              WHERE id = ?");
        $stmt->execute([$title, $slug, $content, $excerpt, $published, $featured_image, $id]);
        
        // Update categories
        $stmt = $pdo->prepare("DELETE FROM post_categories WHERE post_id = ?");
        $stmt->execute([$id]);
        
        if (!empty($categories)) {
            $stmt = $pdo->prepare("INSERT INTO post_categories (post_id, category_id) VALUES (?, ?)");
            foreach ($categories as $category_id) {
                $stmt->execute([$id, $category_id]);
            }
        }
        
        $pdo->commit();
        $_SESSION['success_message'] = "Post updated successfully.";
        header('Location: ' . SITE_URL . 'admin/blog/');
        exit;
    } catch (PDOException $e) {
        $pdo->rollBack();
        $_SESSION['error_message'] = "Error updating post: " . $e->getMessage();
        error_log("Update post error: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include '../../head.html'; ?>
    <title>Edit Post - Blog Admin - Viet Deli</title>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/blog.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/admin.css">
</head>
<body>
    <div class="admin-panel">
        <h1>Edit Blog Post</h1>
        
        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="alert alert-danger">
                <?php 
                echo $_SESSION['error_message'];
                unset($_SESSION['error_message']);
                ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" class="post-form">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" 
                       value="<?php echo htmlspecialchars($post['title']); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <textarea id="excerpt" name="excerpt" rows="3"><?php echo htmlspecialchars($post['excerpt']); ?></textarea>
            </div>
            
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" rows="10" required><?php echo htmlspecialchars($post['content']); ?></textarea>
            </div>
            
            <div class="form-group">
                <label for="image_upload">Featured Image</label>
                <div class="image-upload">
                    <input type="file" id="image_upload" name="image" accept="image/*">
                    <input type="hidden" id="featured_image" name="featured_image" 
                           value="<?php echo htmlspecialchars($post['featured_image']); ?>">
                    <div id="image_preview">
                        <?php if ($post['featured_image']): ?>
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
                    <input type="checkbox" name="published" 
                           <?php echo $post['published'] ? 'checked' : ''; ?>>
                    Published
                </label>
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
                                <?php if (in_array($category['id'], $post_categories)) echo 'checked'; ?>>
                            <?php echo htmlspecialchars($category['name']); ?>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="admin-button">Update Post</button>
                <a href="<?php echo SITE_URL; ?>admin/blog/" class="cancel-button">Cancel</a>
            </div>
        </form>
    </div>

    <script src="<?php echo SITE_URL; ?>js/admin/upload.js"></script>
</body>
</html> 