<?php
// api/get_live_ticker.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$cacheFile = __DIR__ . '/ticker_cache.json';

if (file_exists($cacheFile)) {
    echo file_get_contents($cacheFile);
} else {
    echo json_encode([]);
}
?>
