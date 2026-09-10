<?php
// sitemap.php - XML Sitemap Index
header('Content-Type: application/xml; charset=utf-8');
require_once __DIR__ . '/includes/seo_config.php';

$now = date('Y-m-d');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc><?php echo IPOSETU_SITE_URL; ?>/sitemap-pages.xml</loc>
        <lastmod><?php echo $now; ?></lastmod>
    </sitemap>
    <sitemap>
        <loc><?php echo IPOSETU_SITE_URL; ?>/sitemap-ipo.xml</loc>
        <lastmod><?php echo $now; ?></lastmod>
    </sitemap>
    <sitemap>
        <loc><?php echo IPOSETU_SITE_URL; ?>/sitemap-tools.xml</loc>
        <lastmod><?php echo $now; ?></lastmod>
    </sitemap>
    <sitemap>
        <loc><?php echo IPOSETU_SITE_URL; ?>/sitemap-news.xml</loc>
        <lastmod><?php echo $now; ?></lastmod>
    </sitemap>
</sitemapindex>
