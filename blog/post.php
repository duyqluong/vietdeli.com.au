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
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include __DIR__ . '/../head.html'; ?>
    <title><?php echo $post ? htmlspecialchars($post['title']) . ' — Viet Deli Blog' : 'Blog — Viet Deli'; ?></title>
    <?php if ($post && $post['excerpt']): ?>
    <meta name="description" content="<?php echo htmlspecialchars($post['excerpt']); ?>">
    <?php endif; ?>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
    <?php if ($post): ?>
    <?php
        $post_url  = 'https://www.vietdeli.com.au/blog/' . rawurlencode($post['slug']);
        $post_img  = $post['featured_image']
            ? 'https://www.vietdeli.com.au/' . ltrim($post['featured_image'], '/')
            : 'https://www.vietdeli.com.au/images/viet-deli-restaurant-hero.jpg';
        $date_pub  = date('c', strtotime($post['created_at']));
        $date_mod  = date('c', strtotime($post['updated_at'] ?: $post['created_at']));
    ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($post_url); ?>">

    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php echo htmlspecialchars($post_url); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($post['title']); ?> — Viet Deli">
    <meta property="og:description" content="<?php echo htmlspecialchars($post['excerpt'] ?? ''); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($post_img); ?>">
    <meta property="og:locale" content="en_AU">
    <meta property="og:site_name" content="Viet Deli">
    <meta property="article:published_time" content="<?php echo $date_pub; ?>">
    <meta property="article:modified_time" content="<?php echo $date_mod; ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo htmlspecialchars($post_url); ?>">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($post['title']); ?> — Viet Deli">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($post['excerpt'] ?? ''); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($post_img); ?>">

    <?php
    $schema_post = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BlogPosting',
        'headline'        => $post['title'],
        'description'     => $post['excerpt'] ?? '',
        'image'           => $post_img,
        'datePublished'   => $date_pub,
        'dateModified'    => $date_mod,
        'url'             => $post_url,
        'publisher'       => [
            '@type' => 'Organization',
            'name'  => 'Viet Deli',
            'url'   => 'https://www.vietdeli.com.au/',
            'logo'  => [
                '@type' => 'ImageObject',
                'url'   => 'https://www.vietdeli.com.au/images/logo.png',
            ],
        ],
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id'   => $post_url,
        ],
    ];
    $schema_breadcrumb = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://www.vietdeli.com.au/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => 'https://www.vietdeli.com.au/blog/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $post['title'], 'item' => $post_url],
        ],
    ];
    $json_flags = JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT;
    echo '<script type="application/ld+json">' . json_encode($schema_post, $json_flags) . '</script>' . "\n";
    echo '    <script type="application/ld+json">' . json_encode($schema_breadcrumb, $json_flags) . '</script>';
    ?>
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