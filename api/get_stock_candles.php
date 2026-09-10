<?php
header('Content-Type: application/json');
require_once 'upstox_client.php';

$instrument = isset($_GET['instrument']) ? $_GET['instrument'] : 'NSE_EQ|INE002A01018'; // Default Reliance
$interval = isset($_GET['interval']) ? $_GET['interval'] : 'day';

// Fetch up to 1 year back for daily, less for intraday
$to = date('Y-m-d');
$from = date('Y-m-d', strtotime('-1 year'));

$client = new UpstoxClient();

try {
    $rc = new ReflectionClass('UpstoxClient');
    $meth = $rc->getMethod('makeRequest');
    $meth->setAccessible(true);
    
    $url = "https://api.upstox.com/v2/historical-candle/" . urlencode($instrument) . "/$interval/$to/$from";
    $response = $meth->invoke($client, $url);
    
    echo json_encode($response);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
