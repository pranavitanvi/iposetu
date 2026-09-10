<?php
// api/fetch_ipos.php
header('Content-Type: application/json');
require_once 'db.php';
require_once 'ipoguru_client.php';

$client = new IPOGuruClient();

if (!$client->isKeyConfigured()) {
    echo json_encode([
        "status" => "error",
        "message" => "IPO Guru API key has not been added yet. Add the API key in api/config.php."
    ]);
    exit;
}

$response = $client->fetchIPOs();

if (isset($response['error'])) {
    echo json_encode(["status" => "error", "message" => $response['error']]);
    exit;
}

$ipos = isset($response['data']) ? $response['data'] : $response;

if (!is_array($ipos)) {
    echo json_encode(["status" => "error", "message" => "Unexpected API response format."]);
    exit;
}

$inserted = 0;
$updated = 0;

foreach ($ipos as $ipo) {
    if (!isset($ipo['name'])) continue; // skip if no name

    // Check if IPO exists
    $stmt = $pdo->prepare("SELECT id FROM ipos WHERE name = ?");
    $stmt->execute([$ipo['name']]);
    $existing = $stmt->fetch();

    $qib = isset($ipo['subscription']['qib']) ? $ipo['subscription']['qib'] : null;
    $nii = isset($ipo['subscription']['nii']) ? $ipo['subscription']['nii'] : null;
    $retail = isset($ipo['subscription']['retail']) ? $ipo['subscription']['retail'] : null;
    $total = isset($ipo['subscription']['total']) ? $ipo['subscription']['total'] : null;
    $sub_updated_at = isset($ipo['subscription']['updated_at']) ? $ipo['subscription']['updated_at'] : null;

    $gmp_price = isset($ipo['gmp']['price']) ? $ipo['gmp']['price'] : null;
    $gmp_percentage = isset($ipo['gmp']['percentage']) ? $ipo['gmp']['percentage'] : null;
    $gmp_updated_at = isset($ipo['gmp']['updated_at']) ? $ipo['gmp']['updated_at'] : null;

    if ($existing) {
        // Update existing
        $updateStmt = $pdo->prepare("
            UPDATE ipos SET 
                type = ?, sub_type = ?, status = ?, open_date = ?, close_date = ?, allotment_date = ?, 
                listing_date = ?, listing_price = ?, price_band = ?, issue_price = ?, face_value = ?, 
                lot_size = ?, issue_size = ?, sale_type = ?, listing_exchange = ?, registrar = ?, 
                qib_sub = ?, nii_sub = ?, retail_sub = ?, total_sub = ?, sub_updated_at = ?, 
                gmp_price = ?, gmp_percentage = ?, gmp_updated_at = ?, updated_at = NOW()
            WHERE name = ?
        ");
        $updateStmt->execute([
            $ipo['type'] ?? null, $ipo['sub_type'] ?? null, $ipo['status'] ?? null,
            $ipo['open_date'] ?? null, $ipo['close_date'] ?? null, $ipo['allotment_date'] ?? null,
            $ipo['listing_date'] ?? null, $ipo['listing_price'] ?? null, $ipo['price_band'] ?? null,
            $ipo['issue_price'] ?? null, $ipo['face_value'] ?? null, $ipo['lot_size'] ?? null,
            $ipo['issue_size'] ?? null, $ipo['sale_type'] ?? null, $ipo['listing_on'] ?? null,
            $ipo['registrar'] ?? null, $qib, $nii, $retail, $total, $sub_updated_at,
            $gmp_price, $gmp_percentage, $gmp_updated_at, $ipo['name']
        ]);
        $updated++;
    } else {
        // Insert new
        $insertStmt = $pdo->prepare("
            INSERT INTO ipos (
                name, type, sub_type, status, open_date, close_date, allotment_date, 
                listing_date, listing_price, price_band, issue_price, face_value, 
                lot_size, issue_size, sale_type, listing_exchange, registrar, 
                qib_sub, nii_sub, retail_sub, total_sub, sub_updated_at, 
                gmp_price, gmp_percentage, gmp_updated_at, created_at, updated_at
            ) VALUES (
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW()
            )
        ");
        $insertStmt->execute([
            $ipo['name'], $ipo['type'] ?? null, $ipo['sub_type'] ?? null, $ipo['status'] ?? null,
            $ipo['open_date'] ?? null, $ipo['close_date'] ?? null, $ipo['allotment_date'] ?? null,
            $ipo['listing_date'] ?? null, $ipo['listing_price'] ?? null, $ipo['price_band'] ?? null,
            $ipo['issue_price'] ?? null, $ipo['face_value'] ?? null, $ipo['lot_size'] ?? null,
            $ipo['issue_size'] ?? null, $ipo['sale_type'] ?? null, $ipo['listing_on'] ?? null,
            $ipo['registrar'] ?? null, $qib, $nii, $retail, $total, $sub_updated_at,
            $gmp_price, $gmp_percentage, $gmp_updated_at
        ]);
        $inserted++;
    }
}

echo json_encode([
    "status" => "success",
    "message" => "Fetch complete.",
    "inserted" => $inserted,
    "updated" => $updated
]);
?>
