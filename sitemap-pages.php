<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// sitemap-pages.php - Core Public Pages XML Sitemap
header('Content-Type: application/xml; charset=utf-8');
require_once __DIR__ . '/includes/seo_config.php';

$pages = [
    ['url' => '/', 'priority' => '1.0', 'changefreq' => 'daily'],
    ['url' => '/about', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/contact', 'priority' => '0.6', 'changefreq' => 'monthly'],
    ['url' => '/calendar', 'priority' => '0.9', 'changefreq' => 'daily'],
    ['url' => '/allotment', 'priority' => '0.9', 'changefreq' => 'daily'],
    ['url' => '/subscription', 'priority' => '0.9', 'changefreq' => 'daily'],
    ['url' => '/ipo', 'priority' => '0.9', 'changefreq' => 'daily'],
    ['url' => '/ipo/current', 'priority' => '0.9', 'changefreq' => 'daily'],
    ['url' => '/ipo/upcoming', 'priority' => '0.8', 'changefreq' => 'daily'],
    ['url' => '/ipo/open', 'priority' => '0.9', 'changefreq' => 'daily'],
    ['url' => '/ipo/closed', 'priority' => '0.7', 'changefreq' => 'daily'],
    ['url' => '/ipo/listed', 'priority' => '0.7', 'changefreq' => 'daily'],
    ['url' => '/ipo/performance', 'priority' => '0.7', 'changefreq' => 'weekly'],
    ['url' => '/ipo/reviews', 'priority' => '0.8', 'changefreq' => 'daily'],
    ['url' => '/ipo/ratings', 'priority' => '0.8', 'changefreq' => 'daily'],
    ['url' => '/ipo/faqs', 'priority' => '0.6', 'changefreq' => 'monthly'],
    ['url' => '/sme', 'priority' => '0.9', 'changefreq' => 'daily'],
    ['url' => '/sme/current', 'priority' => '0.9', 'changefreq' => 'daily'],
    ['url' => '/sme/upcoming', 'priority' => '0.8', 'changefreq' => 'daily'],
    ['url' => '/sme/open', 'priority' => '0.9', 'changefreq' => 'daily'],
    ['url' => '/sme/closed', 'priority' => '0.7', 'changefreq' => 'daily'],
    ['url' => '/sme/gmp', 'priority' => '0.9', 'changefreq' => 'daily'],
    ['url' => '/sme/guide', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/brokers', 'priority' => '0.8', 'changefreq' => 'weekly'],
    ['url' => '/brokers/zerodha', 'priority' => '0.7', 'changefreq' => 'weekly'],
    ['url' => '/brokers/groww', 'priority' => '0.7', 'changefreq' => 'weekly'],
    ['url' => '/brokers/angel-one', 'priority' => '0.7', 'changefreq' => 'weekly'],
    ['url' => '/brokers/upstox', 'priority' => '0.7', 'changefreq' => 'weekly'],
    ['url' => '/brokers/prostocks', 'priority' => '0.7', 'changefreq' => 'weekly'],
    ['url' => '/stocks', 'priority' => '0.8', 'changefreq' => 'daily'],
    ['url' => '/stocks/gainers', 'priority' => '0.8', 'changefreq' => 'daily'],
    ['url' => '/stocks/losers', 'priority' => '0.8', 'changefreq' => 'daily'],
    ['url' => '/mutual-funds', 'priority' => '0.8', 'changefreq' => 'weekly'],
    ['url' => '/learn', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/privacy-policy', 'priority' => '0.3', 'changefreq' => 'yearly'],
    ['url' => '/terms-and-conditions', 'priority' => '0.3', 'changefreq' => 'yearly'],
    ['url' => '/disclaimer', 'priority' => '0.3', 'changefreq' => 'yearly']
];

$today = date('Y-m-d');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $p): ?>
    <url>
        <loc><?php echo IPOSETU_SITE_URL . $p['url']; ?></loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq><?php echo $p['changefreq']; ?></changefreq>
        <priority><?php echo $p['priority']; ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
