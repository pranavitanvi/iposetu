<?php
// api/finapi_sync_service.php

function syncFinAPIIPOs($pdo) {
    $url = "https://finapi.upvaly.com/api/ipo";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    // User-Agent might be required by some public APIs
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)');
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    if (curl_errno($ch)) {
        throw new Exception("cURL Error: " . curl_error($ch));
    }
    curl_close($ch);
    
    if ($httpCode >= 400) {
        throw new Exception("HTTP Error: $httpCode");
    }
    
    if (empty($response)) {
        throw new Exception("Empty API response");
    }
    
    $data = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception("Invalid JSON received");
    }
    
    if (!isset($data['status']) || $data['status'] !== 'success' || !isset($data['data'])) {
        throw new Exception("Unexpected JSON structure");
    }
    
    $ipos = $data['data'];
    $inserted = 0;
    $updated = 0;
    
    // Helper to extract float from strings like "₹2", "3.33%", "0.21x"
    $extractFloat = function($val) {
        if ($val === null || $val === '') return null;
        $clean = preg_replace('/[^\d\.\-]/', '', $val);
        return $clean === '' ? null : (float)$clean;
    };
    
    foreach ($ipos as $ipo) {
        if (!isset($ipo['name']) || empty($ipo['name'])) {
            continue;
        }
        
        $name = $ipo['name'];
        $type = $ipo['type'] ?? null;
        $status = $ipo['status'] ?? null;
        
        $open_date = $ipo['schedule']['startDate'] ?? null;
        $close_date = $ipo['schedule']['endDate'] ?? null;
        $allotment_date = $ipo['schedule']['allotmentFinalization'] ?? null;
        $listing_date = $ipo['schedule']['listingDate'] ?? null;
        
        $price_band = $ipo['priceRange'] ?? null;
        $lot_size = isset($ipo['lotSize']) ? (int)$ipo['lotSize'] : null;
        $issue_size = $ipo['issueSize']['totalIssueSize'] ?? null;
        $listing_exchange = $ipo['exchanges'] ?? null;
        
        // GMP
        $gmp_price = null;
        $gmp_percentage = null;
        $gmp_updated_at = null;
        
        if (isset($ipo['greyMarketPremium']['gmpTrends']) && is_array($ipo['greyMarketPremium']['gmpTrends']) && count($ipo['greyMarketPremium']['gmpTrends']) > 0) {
            $latestTrend = $ipo['greyMarketPremium']['gmpTrends'][0];
            $gmp_price = $extractFloat($latestTrend['gmp'] ?? null);
            $gmp_percentage = $extractFloat($latestTrend['gain'] ?? null);
            $gmp_updated_at = date('Y-m-d H:i:s'); // Default to current time as FinAPI returns partial dates like "19 August"
        }
        
        // Subscription
        $qib_sub = $extractFloat($ipo['subscriptionNumbers']['institutional']['subscription'] ?? null);
        $nii_sub = $extractFloat($ipo['subscriptionNumbers']['nii']['subscription'] ?? null);
        $retail_sub = $extractFloat($ipo['subscriptionNumbers']['retail']['subscription'] ?? null);
        $total_sub = $extractFloat($ipo['subscriptionNumbers']['total']['subscription'] ?? null);
        
        // Identify using unique IPO name
        $stmt = $pdo->prepare("SELECT id FROM ipos WHERE name = ?");
        $stmt->execute([$name]);
        $existing = $stmt->fetch();
        
        if ($existing) {
            $updateStmt = $pdo->prepare("
                UPDATE ipos SET 
                    type = ?, status = ?, open_date = ?, close_date = ?, allotment_date = ?, 
                    listing_date = ?, price_band = ?, lot_size = ?, issue_size = ?, listing_exchange = ?, 
                    qib_sub = ?, nii_sub = ?, retail_sub = ?, total_sub = ?, 
                    gmp_price = ?, gmp_percentage = ?, gmp_updated_at = ?, updated_at = NOW()
                WHERE name = ?
            ");
            $updateStmt->execute([
                $type, $status, $open_date, $close_date, $allotment_date,
                $listing_date, $price_band, $lot_size, $issue_size, $listing_exchange,
                $qib_sub, $nii_sub, $retail_sub, $total_sub,
                $gmp_price, $gmp_percentage, $gmp_updated_at, $name
            ]);
            $updated++;
        } else {
            $insertStmt = $pdo->prepare("
                INSERT INTO ipos (
                    name, type, status, open_date, close_date, allotment_date, 
                    listing_date, price_band, lot_size, issue_size, listing_exchange, 
                    qib_sub, nii_sub, retail_sub, total_sub, 
                    gmp_price, gmp_percentage, gmp_updated_at, created_at, updated_at
                ) VALUES (
                    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW()
                )
            ");
            $insertStmt->execute([
                $name, $type, $status, $open_date, $close_date, $allotment_date,
                $listing_date, $price_band, $lot_size, $issue_size, $listing_exchange,
                $qib_sub, $nii_sub, $retail_sub, $total_sub,
                $gmp_price, $gmp_percentage, $gmp_updated_at
            ]);
            $inserted++;
        }
    }
    
    return [
        "success" => true,
        "message" => "FinAPI IPO data fetched successfully",
        "total_received" => count($ipos),
        "inserted" => $inserted,
        "updated" => $updated
    ];
}
?>
