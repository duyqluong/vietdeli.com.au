<?php
require_once '../security_headers.php';
require_once '../auth_check.php';
require_once __DIR__ . '/../../config/constants.php';
// No need to require config.php as it's already included in constants.php
require_once BASE_PATH . '/config/database.php';

// Debug: Verify database structure
try {
    // Force select the database
    $pdo->exec("SET SESSION TRANSACTION ISOLATION LEVEL SERIALIZABLE");
    error_log("Set transaction isolation level");
    
    // Check if posts table exists and its structure
    $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
    error_log("Available tables before insert: " . print_r($tables, true));
    
    $columns = $pdo->query("SHOW COLUMNS FROM posts")->fetchAll(PDO::FETCH_ASSOC);
    error_log("Posts table structure: " . print_r($columns, true));
} catch (PDOException $e) {
    error_log("Error checking database structure: " . $e->getMessage());
}

// Check if user is logged in
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    error_log("Received POST data: " . print_r($_POST, true));
    
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    $excerpt = $_POST['excerpt'] ?? '';
    $published = isset($_POST['published']) ? 1 : 0;
    $featured_image = $_POST['featured_image'] ?? '';
    $categories = isset($_POST['categories']) ? $_POST['categories'] : [];
    
    // Create slug from title
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
    
    error_log("Processed data:");
    error_log("Title: " . $title);
    error_log("Slug: " . $slug);
    error_log("Content: " . substr($content, 0, 100) . "...");
    error_log("Published: " . $published);
    
    try {
        // Start transaction with highest isolation level
        $pdo->exec("SET SESSION TRANSACTION ISOLATION LEVEL SERIALIZABLE");
        error_log("Set transaction isolation level");
        $pdo->beginTransaction();
        error_log("Started transaction");
        
        // Debug: Check database connection
        try {
            $test = $pdo->query("SELECT 1")->fetch();
            error_log("Database connection test before insert: " . ($test ? "Success" : "Failed"));
        } catch (PDOException $e) {
            error_log("Database connection test error: " . $e->getMessage());
        }
        
        // Check if posts table exists and its structure
        $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
        error_log("Available tables before insert: " . print_r($tables, true));
        
        $columns = $pdo->query("SHOW COLUMNS FROM posts")->fetchAll(PDO::FETCH_ASSOC);
        error_log("Posts table structure: " . print_r($columns, true));
        
        // Insert post
        $query = "INSERT INTO posts (title, slug, content, excerpt, published, featured_image) 
                  VALUES (:title, :slug, :content, :excerpt, :published, :featured_image)";
        error_log("SQL Query: " . $query);
        
        $stmt = $pdo->prepare($query);
        error_log("Statement prepared");
        
        $params = [
            ':title' => $title,
            ':slug' => $slug,
            ':content' => $content,
            ':excerpt' => $excerpt,
            ':published' => $published,
            ':featured_image' => $featured_image
        ];
        error_log("Parameters: " . print_r($params, true));
        
        $result = $stmt->execute($params);
        error_log("Insert result: " . ($result ? "Success" : "Failed"));
        
        if (!$result) {
            error_log("PDO Error Info: " . print_r($stmt->errorInfo(), true));
        }
        
        $post_id = $pdo->lastInsertId();
        error_log("Last Insert ID: " . $post_id);
        
        // Verify the post was actually inserted
        $verify = $pdo->query("SELECT * FROM posts WHERE id = " . $post_id)->fetch();
        error_log("Verification of inserted post: " . print_r($verify, true));
        
        // Insert categories only if we have a valid post_id and categories
        if ($post_id && !empty($categories)) {
            $stmt = $pdo->prepare("INSERT INTO post_categories (post_id, category_id) VALUES (:post_id, :category_id)");
            foreach ($categories as $category_id) {
                if (is_numeric($category_id)) {
                    $stmt->execute([
                        ':post_id' => $post_id,
                        ':category_id' => $category_id
                    ]);
                    error_log("Inserted category: " . $category_id . " for post: " . $post_id);
                }
            }
        }
        
        $pdo->commit();
        error_log("Transaction committed successfully");
        
        // Verify again after commit
        $final_verify = $pdo->query("SELECT * FROM posts WHERE id = " . $post_id)->fetch();
        error_log("Final verification of inserted post: " . print_r($final_verify, true));
        
        // Check all posts in the table
        $all_posts = $pdo->query("SELECT * FROM posts")->fetchAll();
        error_log("All posts after insert: " . print_r($all_posts, true));
        
        $_SESSION['success_message'] = "Post created successfully.";
        header('Location: ' . SITE_URL . 'admin/blog/');
        exit;
    } catch (PDOException $e) {
        $pdo->rollBack();
        error_log("Database error: " . $e->getMessage());
        error_log("SQL State: " . $e->getCode());
        error_log("Error Info: " . print_r($e->errorInfo, true));
        $_SESSION['error_message'] = "Error creating post: " . $e->getMessage();
    } catch (Exception $e) {
        $pdo->rollBack();
        error_log("General error: " . $e->getMessage());
        error_log("Error trace: " . $e->getTraceAsString());
        $_SESSION['error_message'] = "An unexpected error occurred.";
    }
}

// Debug: Check if database connection is working
try {
    $test = $pdo->query("SELECT 1")->fetch();
    error_log("Database connection test: " . ($test ? "Success" : "Failed"));
} catch (PDOException $e) {
    error_log("Database connection error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include '../../head.html'; ?>
    <title>New Post - Blog Admin - Viet Deli</title>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/blog.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/admin.css">
</head>
<body>
    <div class="admin-panel">
        <h1>New Blog Post</h1>
        
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
                    try {
                        $categories = $pdo->query("SELECT * FROM categories ORDER BY name")->fetchAll();
                        foreach ($categories as $category):
                    ?>
                        <label class="checkbox-label">
                            <input type="checkbox" name="categories[]" value="<?php echo $category['id']; ?>">
                            <?php echo htmlspecialchars($category['name']); ?>
                        </label>
                        <?php endforeach;
                    } catch (PDOException $e) {
                        error_log("Error fetching categories: " . $e->getMessage());
                    }
                    ?>
                </div>
            </div>
            
            <div class="form-group">
                <label for="image_upload">Featured Image</label>
                <div class="image-upload">
                    <input type="file" id="image_upload" name="image" accept="image/*">
                    <input type="hidden" id="featured_image" name="featured_image">
                    <div id="image_preview"></div>
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