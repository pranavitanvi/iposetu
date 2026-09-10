<?php
// api/get_calendar.php
// Returns all IPOs with their key dates for the calendar view
header('Content-Type: application/json');
require_once 'db.php';

// Optional: filter by month/year
$month = isset($_GET['month']) ? (int)$_GET['month'] : null;
$year  = isset($_GET['year'])  ? (int)$_GET['year']  : null;

$conditions = ["(open_date IS NOT NULL OR close_date IS NOT NULL OR allotment_date IS NOT NULL OR listing_date IS NOT NULL)"];
$params = [];

if ($month && $year) {
    $start = sprintf('%04d-%02d-01', $year, $month);
    $end   = date('Y-m-t', strtotime($start));
    $conditions[] = "(
        (open_date BETWEEN ? AND ?) OR
        (close_date BETWEEN ? AND ?) OR
        (allotment_date BETWEEN ? AND ?) OR
        (listing_date BETWEEN ? AND ?)
    )";
    $params = [$start, $end, $start, $end, $start, $end, $start, $end];
}

$sql = "SELECT 
    id, name, type, status,
    open_date, close_date, allotment_date, listing_date,
    price_band, issue_size, lot_size, industry, symbol,
    listing_price, issue_price
    FROM ipos
    WHERE " . implode(' AND ', $conditions) . "
    ORDER BY open_date DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$ipos = $stmt->fetchAll();

// Normalize status
foreach ($ipos as &$ipo) {
    if (strtolower($ipo['status'] ?? '') === 'live') {
        $ipo['status'] = 'OPEN';
    } else {
        $ipo['status'] = strtoupper($ipo['status'] ?? '');
    }
    if (!empty($ipo['listing_date']) && strtotime($ipo['listing_date']) <= time()) {
        $ipo['status'] = 'LISTED';
    }
}
unset($ipo);

// Build summary stats
$today = date('Y-m-d');
$open     = array_filter($ipos, fn($i) => $i['status'] === 'OPEN');
$upcoming = array_filter($ipos, fn($i) => $i['status'] === 'UPCOMING');
$listed   = array_filter($ipos, fn($i) => $i['status'] === 'LISTED');

// Upcoming events (next 30 days from today)
$next30 = date('Y-m-d', strtotime('+30 days'));
$upcomingEvents = [];
foreach ($ipos as $ipo) {
    foreach (['open_date' => 'Opens', 'close_date' => 'Closes', 'allotment_date' => 'Allotment', 'listing_date' => 'Listing'] as $field => $label) {
        if (!empty($ipo[$field]) && $ipo[$field] >= $today && $ipo[$field] <= $next30) {
            $upcomingEvents[] = [
                'date'  => $ipo[$field],
                'label' => $label,
                'ipo'   => ['name' => $ipo['name'], 'type' => $ipo['type'], 'symbol' => $ipo['symbol'], 'status' => $ipo['status']]
            ];
        }
    }
}
usort($upcomingEvents, fn($a, $b) => strcmp($a['date'], $b['date']));

echo json_encode([
    'status' => 'success',
    'stats'  => [
        'total'    => count($ipos),
        'open'     => count($open),
        'upcoming' => count($upcoming),
        'listed'   => count($listed),
    ],
    'upcoming_events' => array_values($upcomingEvents),
    'data'   => $ipos,
]);
?>
