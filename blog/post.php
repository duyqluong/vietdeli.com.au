<?php
require_once __DIR__ . '/../config/constants.php';
require_once BASE_PATH . '/config/database.php';

// Get the slug from the URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// Get the post
$stmt = $pdo->prepare("
    SELECT p.*, GROUP_CONCAT(c.name) as categories
    FROM posts p
    LEFT JOIN post_categories pc ON p.id = pc.post_id
    LEFT JOIN categories c ON pc.category_id = c.id
    WHERE p.slug = ? AND p.published = 1
    GROUP BY p.id
");
$stmt->execute([$slug]);
$post = $stmt->fetch(PDO::FETCH_ASSOC);

// If no post found, redirect to blog index
if (!$post) {
    header('Location: ' . SITE_URL . 'blog/');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include '../head.html'; ?>
    <title><?php echo htmlspecialchars($post['title']); ?> - Viet Deli Blog</title>
    <link rel="stylesheet" href="css/blog.css">
</head>
<body>
    <?php include '../header.html'; ?>

    <main class="blog-main">
        <article class="blog-post">
            <?php if ($post['featured_image']): ?>
                <div class="post-featured-image">
                    <img src="<?php echo htmlspecialchars($post['featured_image']); ?>" 
                         alt="<?php echo htmlspecialchars($post['title']); ?>">
                </div>
            <?php endif; ?>

            <div class="post-header">
                <h1><?php echo htmlspecialchars($post['title']); ?></h1>
                <time datetime="<?php echo $post['created_at']; ?>">
                    <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                </time>
                <?php if ($post['categories']): ?>
                    <div class="post-categories">
                        <?php foreach (explode(',', $post['categories']) as $category): ?>
                            <span class="category-tag"><?php echo htmlspecialchars($category); ?></span>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="post-content">
                <?php echo nl2br(htmlspecialchars($post['content'])); ?>
            </div>

            <div class="post-footer">
                <a href="/vietdeli/blog/" class="back-to-blog">← Back to Blog</a>
            </div>
        </article>
    </main>

    <?php include '../footer.html'; ?>
</body>
</html> 