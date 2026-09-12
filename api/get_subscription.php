<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// api/get_subscription.php
// Returns IPOs with subscription data (QIB, NII, Retail, Total)
header('Content-Type: application/json');
require_once 'db.php';

$status = isset($_GET['status']) ? strtoupper($_GET['status']) : '';
$type   = isset($_GET['type'])   ? $_GET['type']               : '';
$sort   = isset($_GET['sort'])   ? $_GET['sort']                : 'total_sub';

$allowed_sorts = ['total_sub', 'qib_sub', 'nii_sub', 'retail_sub', 'open_date'];
if (!in_array($sort, $allowed_sorts)) $sort = 'total_sub';

$conditions = ['total_sub IS NOT NULL', 'total_sub > 0'];
$params = [];

if ($status) {
    if ($status === 'OPEN') {
        $conditions[] = "(status = 'live' OR UPPER(status) = 'OPEN')";
    } elseif ($status === 'LISTED') {
        $conditions[] = "listing_date IS NOT NULL AND listing_date <= CURDATE()";
    } else {
        $conditions[] = "UPPER(status) = ?";
        $params[] = $status;
    }
}

if ($type) {
    $conditions[] = "type = ?";
    $params[] = $type;
}

$sql = "SELECT 
    id, name, type, status,
    open_date, close_date, listing_date,
    qib_sub, nii_sub, retail_sub, total_sub,
    price_band, issue_size, lot_size, industry, symbol
    FROM ipos
    WHERE " . implode(' AND ', $conditions) . "
    ORDER BY CAST($sort AS DECIMAL(10,2)) DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$ipos = $stmt->fetchAll();

// Normalize status
foreach ($ipos as &$ipo) {
    if (strtolower($ipo['status'] ?? '') === 'live') $ipo['status'] = 'OPEN';
    else $ipo['status'] = strtoupper($ipo['status'] ?? '');
    if (!empty($ipo['listing_date']) && strtotime($ipo['listing_date']) <= time()) $ipo['status'] = 'LISTED';
    // Round subscription values
    foreach (['qib_sub','nii_sub','retail_sub','total_sub'] as $f) {
        if ($ipo[$f] !== null) $ipo[$f] = round((float)$ipo[$f], 2);
    }
}
unset($ipo);

// Stats
$maxSub   = count($ipos) ? max(array_column($ipos, 'total_sub')) : 0;
$avgSub   = count($ipos) ? round(array_sum(array_column($ipos, 'total_sub')) / count($ipos), 2) : 0;
$over10x  = count(array_filter($ipos, fn($i) => $i['total_sub'] >= 10));
$over100x = count(array_filter($ipos, fn($i) => $i['total_sub'] >= 100));

echo json_encode([
    'status' => 'success',
    'count'  => count($ipos),
    'stats'  => [
        'max_subscription' => $maxSub,
        'avg_subscription' => $avgSub,
        'over_10x'         => $over10x,
        'over_100x'        => $over100x,
    ],
    'data' => $ipos,
]);
?>
