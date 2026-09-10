<?php
// api/get_ipos.php
header('Content-Type: application/json');
require_once 'db.php';
require_once 'daily_sync.php';

// Automatically triggers async background sync if data is older than 6 hours (zero-latency/non-blocking)
triggerBackgroundSyncIfNeeded();

$validFilters = ['status', 'type', 'sub_type'];
$conditions = [];
$params = [];

foreach ($validFilters as $filter) {
    if (isset($_GET[$filter]) && !empty($_GET[$filter])) {
        if ($filter === 'status') {
            $val = strtolower(trim($_GET[$filter]));
            if ($val === 'listed') {
                $conditions[] = "(listing_date IS NOT NULL AND listing_date <= CURDATE()) OR LOWER(status) = 'listed'";
            } else if ($val === 'open' || $val === 'live') {
                $conditions[] = "(LOWER(status) IN ('open', 'live') OR (open_date <= CURDATE() AND (close_date >= CURDATE() OR close_date IS NULL) AND (listing_date IS NULL OR listing_date > CURDATE())))";
            } else if ($val === 'upcoming') {
                $conditions[] = "(LOWER(status) = 'upcoming' OR (open_date > CURDATE()))";
            } else if ($val === 'closed') {
                $conditions[] = "(LOWER(status) = 'closed' OR (close_date < CURDATE() AND (listing_date IS NULL OR listing_date > CURDATE())))";
            } else {
                $conditions[] = "LOWER($filter) = ?";
                $params[] = $val;
            }
        } else {
            $conditions[] = "LOWER($filter) = ?";
            $params[] = strtolower(trim($_GET[$filter]));
        }
    }
}

$sql = "SELECT * FROM ipos";
if (!empty($conditions)) {
    $sql .= " WHERE " . implode(' AND ', $conditions);
}
$sql .= " ORDER BY open_date DESC"; // order by open date descending

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$ipos = $stmt->fetchAll();

foreach ($ipos as &$ipo) {
    if (strtolower($ipo['status'] ?? '') === 'live') {
        $ipo['status'] = 'OPEN';
    } else {
        $ipo['status'] = strtoupper($ipo['status'] ?? '');
    }
    
    if (!empty($ipo['listing_date'])) {
        $listing_date = strtotime($ipo['listing_date']);
        if ($listing_date <= time()) {
            $ipo['status'] = 'LISTED';
        }
    }
}
unset($ipo);

echo json_encode([
    "status" => "success",
    "data" => $ipos
]);
?>
