<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// api/market_data_sync.php
require_once 'upstox_client.php';

function syncMarketData() {
    $client = new UpstoxClient();
    $cacheFile = __DIR__ . '/market_data_cache.json';
    
    if (!$client->isKeyConfigured()) {
        return ["success" => false, "message" => "Upstox API key not configured"];
    }

    $data = [
        'status' => null,
        'next_holiday' => null,
        'last_updated' => date('Y-m-d H:i:s')
    ];

    // 1. Fetch Market Status
    $statusResponse = $client->fetchMarketStatus('NSE');
    if (!isset($statusResponse['error']) && isset($statusResponse['data'])) {
        $data['status'] = $statusResponse['data']['status'] ?? null;
    }

    // 2. Fetch Market Holidays
    $holidaysResponse = $client->fetchMarketHolidays();
    if (!isset($holidaysResponse['error']) && isset($holidaysResponse['data'])) {
        $today = date('Y-m-d');
        foreach ($holidaysResponse['data'] as $holiday) {
            if ($holiday['date'] >= $today && $holiday['holiday_type'] === 'TRADING_HOLIDAY') {
                $data['next_holiday'] = [
                    'date' => $holiday['date'],
                    'description' => $holiday['description']
                ];
                break; // Only need the next upcoming one
            }
        }
    }

    // Save to cache
    if (file_put_contents($cacheFile, json_encode($data))) {
        return ["success" => true, "data" => $data];
    } else {
        return ["success" => false, "message" => "Failed to write to cache file"];
    }
}

// Allow direct execution
if (basename($_SERVER['SCRIPT_FILENAME']) === basename(__FILE__)) {
    header('Content-Type: application/json');
    echo json_encode(syncMarketData());
}
?>
