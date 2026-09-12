<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// api/news_sync.php
require_once __DIR__ . '/upstox_client.php';

function sync_news() {
    $client = new UpstoxClient();

    // List of Top Market Leaders Instrument Keys for Market News
    // Reliance, HDFC Bank, TCS, Infosys, SBI
    $topStocks = [
        'NSE_EQ|INE002A01018',
        'NSE_EQ|INE040A01034',
        'NSE_EQ|INE467B01029',
        'NSE_EQ|INE009A01021',
        'NSE_EQ|INE062A01020'
    ];

    $instrumentKeysStr = implode(',', $topStocks);

    $newsData = $client->fetchNews($instrumentKeysStr);

    if (isset($newsData['error'])) {
        return false;
    }

    if (!isset($newsData['status']) || $newsData['status'] !== 'success' || !isset($newsData['data'])) {
        return false;
    }

    $cacheFile = __DIR__ . '/news_cache.json';
    $cacheData = [
        'last_updated' => date('Y-m-d H:i:s'),
        'news' => $newsData['data']
    ];

    file_put_contents($cacheFile, json_encode($cacheData, JSON_PRETTY_PRINT));
    return true;
}

// If run from CLI directly, execute it
if (php_sapi_name() === 'cli' || basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    echo "Fetching Live News for Top Market Leaders from Upstox...\n";
    if (sync_news()) {
        echo "News synced successfully to news_cache.json.\n";
    } else {
        echo "Failed to fetch or save news.\n";
    }
}
?>
