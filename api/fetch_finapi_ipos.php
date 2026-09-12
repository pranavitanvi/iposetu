<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
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
