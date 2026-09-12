<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// api/get_market_data.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$cacheFile = __DIR__ . '/market_data_cache.json';

if (file_exists($cacheFile)) {
    echo file_get_contents($cacheFile);
} else {
    echo json_encode(["status" => "Unknown", "next_holiday" => null]);
}
?>
