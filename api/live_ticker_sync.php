<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// api/live_ticker_sync.php
require_once 'db.php';
require_once 'upstox_client.php';

function syncLiveTicker() {
    $client = new UpstoxClient();
    $cacheFile = __DIR__ . '/ticker_cache.json';
    
    if (!$client->isKeyConfigured()) {
        return ["success" => false, "message" => "Upstox API key not configured"];
    }

    global $pdo;
    
    // Fetch top 10 most recently listed IPOs that have an ISIN and Listing Price
    $stmt = $pdo->prepare("SELECT id, symbol, name, isin, listing_price FROM ipos WHERE status = 'LISTED' AND isin IS NOT NULL AND listing_price IS NOT NULL ORDER BY listing_date DESC LIMIT 10");
    $stmt->execute();
    $recentIpos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if (empty($recentIpos)) {
        return ["success" => false, "message" => "No listed IPOs with ISIN found"];
    }

    $instrumentKeys = [];
    $ipoMap = []; // Map ISIN to IPO data
    foreach ($recentIpos as $ipo) {
        $key = "NSE_EQ|" . $ipo['isin'];
        $instrumentKeys[] = $key;
        $ipoMap[$key] = $ipo;
    }
    
    $keysStr = implode(",", $instrumentKeys);
    
    // Fetch LTP
    $ltpResponse = $client->fetchLTP($keysStr);
    
    if (isset($ltpResponse['error']) || !isset($ltpResponse['data'])) {
        return ["success" => false, "message" => "Failed to fetch LTP data from Upstox"];
    }
    
    $tickerData = [];
    
    foreach ($ltpResponse['data'] as $symbolKey => $data) {
        $instrumentToken = $data['instrument_token']; // e.g., NSE_EQ|INE...
        if (isset($ipoMap[$instrumentToken])) {
            $ipo = $ipoMap[$instrumentToken];
            $livePrice = $data['last_price'];
            $listingPrice = (float)$ipo['listing_price'];
            
            if ($listingPrice > 0) {
                $changeAbs = $livePrice - $listingPrice;
                $changePct = ($changeAbs / $listingPrice) * 100;
                
                $tickerData[] = [
                    'symbol' => $ipo['symbol'],
                    'name' => $ipo['name'],
                    'live_price' => number_format($livePrice, 2, '.', ''),
                    'change_abs' => number_format($changeAbs, 2, '.', ''),
                    'change_pct' => number_format($changePct, 2, '.', ''),
                    'is_up' => $changeAbs >= 0
                ];
            }
        }
    }
    
    // Save to cache
    if (file_put_contents($cacheFile, json_encode($tickerData))) {
        return ["success" => true, "data" => $tickerData];
    } else {
        return ["success" => false, "message" => "Failed to write to cache file"];
    }
}

// Allow direct execution
if (basename($_SERVER['SCRIPT_FILENAME']) === basename(__FILE__)) {
    header('Content-Type: application/json');
    echo json_encode(syncLiveTicker());
}
?>
