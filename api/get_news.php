<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// api/get_news.php
header('Content-Type: application/json');

$cacheFile = __DIR__ . '/news_cache.json';
$cacheAgeLimit = 3600; // 1 hour in seconds

$shouldSync = false;
if (!file_exists($cacheFile)) {
    $shouldSync = true;
} else {
    $fileAge = time() - filemtime($cacheFile);
    if ($fileAge > $cacheAgeLimit) {
        $shouldSync = true;
    }
}

if ($shouldSync) {
    require_once __DIR__ . '/news_sync.php';
    sync_news();
}

if (!file_exists($cacheFile)) {
    echo json_encode(["status" => "error", "message" => "News cache not found and sync failed."]);
    exit;
}

$cacheContent = file_get_contents($cacheFile);
$cacheData = json_decode($cacheContent, true);

if (!$cacheData || !isset($cacheData['news'])) {
    echo json_encode(["status" => "error", "message" => "Invalid cache format."]);
    exit;
}

// The Upstox News API returns data keyed by instrument key.
// We need to flatten this into a single timeline of articles.
$allArticles = [];

foreach ($cacheData['news'] as $instrumentKey => $articles) {
    foreach ($articles as $article) {
        // Add a badge/tag based on the instrument key if desired, or just use 'Stocks'
        $article['tag'] = 'Stocks'; 
        if (strpos($instrumentKey, 'INE040A01034') !== false) $article['tag'] = 'HDFC Bank';
        else if (strpos($instrumentKey, 'INE002A01018') !== false) $article['tag'] = 'Reliance';
        else if (strpos($instrumentKey, 'INE467B01029') !== false) $article['tag'] = 'TCS';
        else if (strpos($instrumentKey, 'INE009A01021') !== false) $article['tag'] = 'Infosys';
        else if (strpos($instrumentKey, 'INE062A01020') !== false) $article['tag'] = 'SBI';

        $allArticles[] = $article;
    }
}

// Sort articles by published_time descending (newest first)
usort($allArticles, function($a, $b) {
    return $b['published_time'] - $a['published_time'];
});

// Remove exact duplicates (sometimes same news is tagged to multiple stocks)
$uniqueArticles = [];
$seenHeadings = [];
foreach ($allArticles as $article) {
    if (!isset($seenHeadings[$article['heading']])) {
        $seenHeadings[$article['heading']] = true;
        $uniqueArticles[] = $article;
    }
}

echo json_encode([
    "status" => "success",
    "last_updated" => $cacheData['last_updated'],
    "data" => $uniqueArticles
]);
?>
