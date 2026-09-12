<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// sitemap-tools.php - Financial Tools & Calculators XML Sitemap
header('Content-Type: application/xml; charset=utf-8');
require_once __DIR__ . '/includes/seo_config.php';

$tools = [
    ['url' => '/tools/sip-calculator', 'priority' => '0.8', 'changefreq' => 'weekly'],
    ['url' => '/tools/cagr-calculator', 'priority' => '0.8', 'changefreq' => 'weekly'],
    ['url' => '/tools/ipo-calculator', 'priority' => '0.8', 'changefreq' => 'weekly'],
    ['url' => '/tools/listing-gain-calculator', 'priority' => '0.8', 'changefreq' => 'weekly'],
    ['url' => '/tools/brokerage-calculator', 'priority' => '0.8', 'changefreq' => 'weekly'],
    ['url' => '/mutual-funds/sip-calculator', 'priority' => '0.7', 'changefreq' => 'weekly'],
    ['url' => '/mutual-funds/lumpsum-calculator', 'priority' => '0.7', 'changefreq' => 'weekly'],
    ['url' => '/mutual-funds/swp-calculator', 'priority' => '0.7', 'changefreq' => 'weekly']
];

$today = date('Y-m-d');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($tools as $t): ?>
    <url>
        <loc><?php echo IPOSETU_SITE_URL . $t['url']; ?></loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq><?php echo $t['changefreq']; ?></changefreq>
        <priority><?php echo $t['priority']; ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
