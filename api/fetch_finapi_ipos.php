<?php
// api/fetch_finapi_ipos.php
header('Content-Type: application/json');
require_once 'db.php';

try {
    require_once 'finapi_sync_service.php';
    $result = syncFinAPIIPOs($pdo);
    echo json_encode($result);
} catch (Exception $e) {
    echo json_encode([
        "success" => false,
        "message" => "Error: " . $e->getMessage()
    ]);
}
?>
