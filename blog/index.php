<?php
require_once __DIR__ . '/../config/constants.php';
require_once BASE_PATH . '/config/database.php';

// Pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = POSTS_PER_PAGE;
$offset = ($page - 1) * $per_page;

// Get total posts count
$total_posts = $pdo->query("SELECT COUNT(*) FROM posts WHERE published = 1")->fetchColumn();
$total_pages = ceil($total_posts / $per_page);

// Get posts with categories
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

// Get all categories for filter
$categories = $pdo->query("SELECT * FROM categories ORDER BY name")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include '../head.html'; ?>
    <title>Blog - Viet Deli</title>
    <link rel="stylesheet" href="css/blog.css?v=<?php echo ASSET_VERSION; ?>">
</head>
<body>
    <?php include '../header.html'; ?>

    <main class="blog-main">
        <div class="blog-header">
            <h1>Blog</h1>
            <p>Stories, recipes, and updates from our kitchen</p>
        </div>

        <!-- Category Filter -->
        <div class="category-filter">
            <a href="blog/" class="category-tag <?php echo !isset($_GET['category']) ? 'active' : ''; ?>">All</a>
            <?php foreach ($categories as $category): ?>
                <a href="blog/?category=<?php echo urlencode($category['slug']); ?>" 
                   class="category-tag <?php echo isset($_GET['category']) && $_GET['category'] === $category['slug'] ? 'active' : ''; ?>">
                    <?php echo htmlspecialchars($category['name']); ?>
                </a>
            <?php endforeach; ?>
        </div>

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
                        <h2>
                            <a href="blog/<?php echo htmlspecialchars($post['slug']); ?>">
                                <?php echo htmlspecialchars($post['title']); ?>
                            </a>
                        </h2>
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
                        <?php if ($post['excerpt']): ?>
                            <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
                        <?php endif; ?>
                        <a href="blog/<?php echo htmlspecialchars($post['slug']); ?>" 
                           class="read-more">Read More</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <?php if ($total_pages > 1): ?>
            <div class="pagination">
                <?php if ($page > 1): ?>
                    <a href="?page=<?php echo $page - 1; ?>" class="page-link">&laquo; Previous</a>
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
    </main>

    <?php include '../footer.html'; ?>
    <script src="js/main.js?v=<?php echo ASSET_VERSION; ?>"></script>
</body>
</html> 