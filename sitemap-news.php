<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// sitemap-news.php - News & Market Articles XML Sitemap
header('Content-Type: application/xml; charset=utf-8');
require_once __DIR__ . '/includes/seo_config.php';

$newsArticles = [
    '/news/',
    '/news/ola-electric-listing',
    '/news/ecobuilders-lists-at-45-premium-on-nse-sme-platform',
    '/news/sebi-guidelines-sme',
    '/news/sebi-tightens-rules-for-unauthorized-financial-influencers',
    '/news/sensex-drops-300-points-amid-global-sell-off',
    '/news/tcs-reports-strong-q2-growth-beats-street-estimates',
    '/news/top-5-flexi-cap-funds-for-long-term-wealth-creation',
    '/news/vraj-iron-gmp-surges-ahead-of-allotment'
];

$today = date('Y-m-d');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($newsArticles as $path): ?>
    <url>
        <loc><?php echo IPOSETU_SITE_URL . $path; ?></loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
<?php endforeach; ?>
</urlset>
