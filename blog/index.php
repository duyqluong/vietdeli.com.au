<?php
require_once __DIR__ . '/../config/constants.php';
require_once BASE_PATH . '/config/database.php';

// Pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = POSTS_PER_PAGE;
$offset = ($page - 1) * $per_page;
$posts = [];
$categories = [];
$total_pages = 0;

if ($pdo !== null) {
    $total_posts = $pdo->query("SELECT COUNT(*) FROM posts WHERE published = 1")->fetchColumn();
    $total_pages = ceil($total_posts / $per_page);

    $stmt = $pdo->prepare("
        SELECT p.*, GROUP_CONCAT(c.name) as categories
        FROM posts p
        LEFT JOIN post_categories pc ON p.id = pc.post_id
        LEFT JOIN categories c ON pc.category_id = c.id
        WHERE p.published = 1
        GROUP BY p.id
        ORDER BY p.created_at DESC
        LIMIT :limit OFFSET :offset
    ");
    $stmt->bindValue(':limit', $per_page, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $categories = $pdo->query("SELECT * FROM categories ORDER BY name")->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include '../head.html'; ?>
    <title>Stories from Our Kitchen — Viet Deli Blog</title>
    <meta name="description" content="Recipes, food culture, and stories from the Viet Deli family in Myaree, Perth — Vietnamese cooking, restaurant news, and more.">
    <meta name="keywords" content="Vietnamese food blog Perth, Viet Deli blog, Vietnamese recipes, Vietnamese restaurant Perth, Banh Mi recipes, Pho recipes">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
    <link rel="canonical" href="https://www.vietdeli.com.au/blog/">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.vietdeli.com.au/blog/">
    <meta property="og:title" content="Stories from Our Kitchen — Viet Deli Blog">
    <meta property="og:description" content="Recipes, food culture, and stories from the Viet Deli family in Myaree, Perth.">
    <meta property="og:image" content="https://www.vietdeli.com.au/images/viet-deli-restaurant-hero.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_AU">
    <meta property="og:site_name" content="Viet Deli">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.vietdeli.com.au/blog/">
    <meta name="twitter:title" content="Stories from Our Kitchen — Viet Deli Blog">
    <meta name="twitter:description" content="Recipes, food culture, and stories from the Viet Deli family in Myaree, Perth.">
    <meta name="twitter:image" content="https://www.vietdeli.com.au/images/viet-deli-restaurant-hero.jpg">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.vietdeli.com.au/" },
        { "@type": "ListItem", "position": 2, "name": "Blog", "item": "https://www.vietdeli.com.au/blog/" }
      ]
    }
    </script>

    <link rel="stylesheet" href="css/blog.css?v=<?php echo ASSET_VERSION; ?>">
</head>
<body>
    <?php include '../header.html'; ?>

    <main class="blog-main">

        <header class="blog-page-header">
            <span class="eyebrow">Viet Deli Kitchen</span>
            <h1>Stories from Our Kitchen</h1>
            <p>Recipes, food culture, and news from the Viet Deli family</p>
        </header>

        <div class="blog-inner">


            <?php if (empty($posts)): ?>
                <div class="blog-empty">
                    <h2>No stories yet</h2>
                    <p>Check back soon — we're cooking something up.</p>
                </div>
            <?php else: ?>

                <?php
                // Pull first post for featured treatment (only on page 1, only if it has an image)
                $featured = null;
                if ($page === 1 && !empty($posts) && $posts[0]['featured_image']) {
                    $featured = array_shift($posts);
                }
                ?>

                <?php if ($featured): ?>
                <div class="blog-featured">
                    <div class="blog-featured-image">
                        <img src="<?php echo htmlspecialchars($featured['featured_image']); ?>"
                             alt="<?php echo htmlspecialchars($featured['title']); ?>">
                    </div>
                    <div class="blog-featured-content">
                        <span class="featured-label">Featured Story</span>
                        <time datetime="<?php echo $featured['created_at']; ?>">
                            <?php echo date('F j, Y', strtotime($featured['created_at'])); ?>
                        </time>
                        <h2>
                            <a href="blog/<?php echo htmlspecialchars($featured['slug']); ?>">
                                <?php echo htmlspecialchars($featured['title']); ?>
                            </a>
                        </h2>
                        <?php if ($featured['excerpt']): ?>
                            <p><?php echo htmlspecialchars($featured['excerpt']); ?></p>
                        <?php endif; ?>
                        <a href="blog/<?php echo htmlspecialchars($featured['slug']); ?>" class="read-more">Read More</a>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (!empty($posts)): ?>
                <div class="blog-grid">
                    <?php foreach ($posts as $post): ?>
                        <article class="blog-card">
                            <?php if ($post['featured_image']): ?>
                                <div class="blog-card-image">
                                    <img src="<?php echo htmlspecialchars($post['featured_image']); ?>"
                                         alt="<?php echo htmlspecialchars($post['title']); ?>">
                                </div>
                            <?php endif; ?>
                            <div class="blog-card-content">
                                <time datetime="<?php echo $post['created_at']; ?>">
                                    <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                                </time>
                                <h2>
                                    <a href="blog/<?php echo htmlspecialchars($post['slug']); ?>">
                                        <?php echo htmlspecialchars($post['title']); ?>
                                    </a>
                                </h2>
                                <?php if ($post['excerpt']): ?>
                                    <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
                                <?php endif; ?>
                                <a href="blog/<?php echo htmlspecialchars($post['slug']); ?>" class="read-more">Read More</a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

            <?php endif; ?>

            <!-- Pagination -->
            <?php if ($total_pages > 1): ?>
                <div class="pagination">
                    <?php if ($page > 1): ?>
                        <a href="?page=<?php echo $page - 1; ?>" class="page-link">&laquo; Prev</a>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <a href="?page=<?php echo $i; ?>"
                           class="page-link <?php echo $page === $i ? 'active' : ''; ?>">
                            <?php echo $i; ?>
                        </a>
                    <?php endfor; ?>
                    <?php if ($page < $total_pages): ?>
                        <a href="?page=<?php echo $page + 1; ?>" class="page-link">Next &raquo;</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div><!-- /.blog-inner -->
    </main>

    <?php include '../footer.html'; ?>
    <script src="js/main.js?v=<?php echo ASSET_VERSION; ?>"></script>
</body>
</html> 