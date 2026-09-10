<?php
// sitemap-ipo.php - Dynamic Public IPO & SME Issues XML Sitemap
header('Content-Type: application/xml; charset=utf-8');
require_once __DIR__ . '/includes/seo_config.php';
require_once __DIR__ . '/api/db.php';

$ipos = [];
try {
    $stmt = $pdo->query("
        SELECT upstox_id, type, status, updated_at, created_at 
        FROM ipos 
        WHERE upstox_id IS NOT NULL AND upstox_id != ''
        ORDER BY id DESC
    ");
    $ipos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Throwable $e) {
    // Graceful fallback
}

$today = date('Y-m-d');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($ipos as $item): 
    $type = strtolower($item['type'] ?? 'mainboard');
    $prefix = ($type === 'sme') ? '/sme/' : '/ipo/';
    $slug = urlencode($item['upstox_id']);
    $url = IPOSETU_SITE_URL . $prefix . $slug;
    
    $status = strtoupper($item['status'] ?? '');
    $priority = ($status === 'OPEN' || $status === 'LIVE') ? '0.9' : (($status === 'UPCOMING') ? '0.8' : '0.6');
    $changefreq = ($status === 'OPEN' || $status === 'LIVE') ? 'daily' : 'weekly';
    $lastmod = !empty($item['updated_at']) ? date('Y-m-d', strtotime($item['updated_at'])) : $today;
?>
    <url>
        <loc><?php echo htmlspecialchars($url); ?></loc>
        <lastmod><?php echo $lastmod; ?></lastmod>
        <changefreq><?php echo $changefreq; ?></changefreq>
        <priority><?php echo $priority; ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
