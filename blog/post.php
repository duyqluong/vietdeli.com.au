<?php
require_once __DIR__ . '/../config/constants.php';
require_once BASE_PATH . '/config/database.php';

// Get the slug from the URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$post = null;

if ($pdo !== null) {
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

    if (!$post) {
        header('Location: ' . SITE_URL . 'blog/');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include __DIR__ . '/../head.html'; ?>
    <title><?php echo $post ? htmlspecialchars($post['title']) . ' — Viet Deli Blog' : 'Blog — Viet Deli'; ?></title>
    <?php if ($post && $post['excerpt']): ?>
    <meta name="description" content="<?php echo htmlspecialchars($post['excerpt']); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="css/blog.css?v=<?php echo ASSET_VERSION; ?>">
</head>
<body>
    <?php include __DIR__ . '/../header.html'; ?>

    <main class="blog-main">
        <nav class="blog-back-nav">
            <a href="blog/" class="back-to-blog">Stories from Our Kitchen</a>
        </nav>
        <div class="blog-inner">
        <article class="blog-post">
            <?php if ($post): ?>

            <?php if ($post['featured_image']): ?>
                <div class="post-featured-image">
                    <img src="<?php echo htmlspecialchars($post['featured_image']); ?>"
                         alt="<?php echo htmlspecialchars($post['title']); ?>">
                </div>
            <?php endif; ?>

            <div class="post-header">
                <time datetime="<?php echo $post['created_at']; ?>">
                    <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                </time>
                <h1><?php echo htmlspecialchars($post['title']); ?></h1>
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

            <?php else: ?>
            <div class="blog-empty" style="grid-column:unset;">
                <h2>Post unavailable</h2>
                <p>We couldn't load this post right now. Try again shortly.</p>
            </div>
            <?php endif; ?>

            <div class="post-footer">
                <a href="blog/" class="back-to-blog">Stories from Our Kitchen</a>
            </div>
        </article>
        </div><!-- /.blog-inner -->
    </main>

    <?php include __DIR__ . '/../footer.html'; ?>
    <script src="js/main.js?v=<?php echo ASSET_VERSION; ?>"></script>
</body>
</html> 