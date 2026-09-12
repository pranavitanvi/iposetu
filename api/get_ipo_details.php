<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// api/get_ipo_details.php
header('Content-Type: application/json');

require_once 'db.php';
require_once 'upstox_client.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id <= 0) {
    echo json_encode(["status" => "error", "message" => "Invalid IPO ID provided."]);
    exit;
}

try {
    // 1. Fetch IPO Details from Database
    $stmt = $pdo->prepare("SELECT * FROM ipos WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $ipoData = $stmt->fetch();

    if (!$ipoData) {
        echo json_encode(["status" => "error", "message" => "IPO not found."]);
        exit;
    }

    // Decode JSON fields for easier frontend parsing
    if (!empty($ipoData['timeline_json'])) {
        $ipoData['timeline'] = json_decode($ipoData['timeline_json'], true);
    }
    if (!empty($ipoData['sub_details_json'])) {
        $ipoData['sub_details'] = json_decode($ipoData['sub_details_json'], true);
    }
    if (!empty($ipoData['registrar_details'])) {
        $ipoData['registrar_details'] = json_decode($ipoData['registrar_details'], true);
    }

    // 2. Fetch Fundamentals from Upstox if ISIN is available
    $fundamentalsData = null;
    $isin = $ipoData['isin'];
    
    if (!empty($isin)) {
        $client = new UpstoxClient();
        $res = $client->fetchFundamentals($isin);
        
        // If success, store data
        if (!isset($res['error']) && isset($res['status']) && $res['status'] === 'success') {
            $fundamentalsData = $res['data'];
        }
    }

    echo json_encode([
        "status" => "success",
        "data" => $ipoData,
        "fundamentals" => $fundamentalsData
    ]);

} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => "Server error: " . $e->getMessage()]);
}
?>
