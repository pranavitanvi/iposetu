<?php
header('Content-Type: application/json');
require_once 'upstox_client.php';

$instrument = isset($_GET['instrument']) ? $_GET['instrument'] : 'NSE_EQ|INE002A01018'; // Default to Reliance

$client = new UpstoxClient();

// Use Reflection to access the private makeRequest method
try {
    $rc = new ReflectionClass('UpstoxClient');
    $meth = $rc->getMethod('makeRequest');
    $meth->setAccessible(true);
    
    $url = "https://api.upstox.com/v2/market-quote/quotes?instrument_key=" . urlencode($instrument);
    $response = $meth->invoke($client, $url);
    
    echo json_encode($response);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
