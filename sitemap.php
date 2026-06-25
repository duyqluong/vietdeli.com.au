<?php
require_once __DIR__ . '/config/constants.php';
require_once __DIR__ . '/config/database.php';

header('Content-Type: application/xml; charset=utf-8');

$static_pages = [
    ['url' => 'https://www.vietdeli.com.au/',          'lastmod' => '2026-06-24', 'changefreq' => 'weekly',  'priority' => '1.0'],
    ['url' => 'https://www.vietdeli.com.au/menu/',     'lastmod' => '2026-06-24', 'changefreq' => 'monthly', 'priority' => '0.9'],
    ['url' => 'https://www.vietdeli.com.au/catering/', 'lastmod' => '2026-06-24', 'changefreq' => 'monthly', 'priority' => '0.8'],
    ['url' => 'https://www.vietdeli.com.au/about/',    'lastmod' => '2026-06-24', 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['url' => 'https://www.vietdeli.com.au/blog/',     'lastmod' => '2026-06-24', 'changefreq' => 'weekly',  'priority' => '0.6'],
];

$blog_posts = [];
if ($pdo !== null) {
    try {
        $stmt = $pdo->query("SELECT slug, COALESCE(updated_at, created_at) AS lastmod FROM posts WHERE published = 1 ORDER BY created_at DESC");
        $blog_posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Fail silently — static pages still output correctly
    }
}

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($static_pages as $p): ?>
  <url>
    <loc><?php echo htmlspecialchars($p['url']); ?></loc>
    <lastmod><?php echo $p['lastmod']; ?></lastmod>
    <changefreq><?php echo $p['changefreq']; ?></changefreq>
    <priority><?php echo $p['priority']; ?></priority>
  </url>
<?php endforeach; ?>
<?php foreach ($blog_posts as $post): ?>
  <url>
    <loc>https://www.vietdeli.com.au/blog/<?php echo htmlspecialchars($post['slug']); ?></loc>
    <lastmod><?php echo date('Y-m-d', strtotime($post['lastmod'])); ?></lastmod>
    <changefreq>never</changefreq>
    <priority>0.5</priority>
  </url>
<?php endforeach; ?>
</urlset>
