<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// api/get_market_overview.php
header('Content-Type: application/json');
require_once 'upstox_client.php';

try {
    $client = new UpstoxClient();
    if (!$client->isKeyConfigured()) {
        echo json_encode(["status" => "error", "message" => "Upstox key not configured."]);
        exit;
    }

    $keys = [
        'NSE_INDEX|Nifty 50',
        'BSE_INDEX|SENSEX',
        'NSE_INDEX|Nifty Bank',
        'NSE_INDEX|Nifty IT'
    ];
    $instrumentKeys = implode(',', $keys);

    $response = $client->fetchQuotes($instrumentKeys);
    
    if (isset($response['error'])) {
        echo json_encode(["status" => "error", "message" => $response['error']]);
        exit;
    }

    echo json_encode(["status" => "success", "data" => $response['data']]);

} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}
?>
