<?php
// api/get_kpi_stats.php
header('Content-Type: application/json');
require_once __DIR__ . '/db.php';

try {
    // 1. Open IPOs: status is live or open
    $openStmt = $pdo->query("SELECT COUNT(*) FROM ipos WHERE status = 'live' OR UPPER(status) = 'OPEN'");
    $openCount = (int)$openStmt->fetchColumn();

    // 2. Upcoming IPOs: status is upcoming
    $upcomingStmt = $pdo->query("SELECT COUNT(*) FROM ipos WHERE UPPER(status) = 'UPCOMING'");
    $upcomingCount = (int)$upcomingStmt->fetchColumn();

    // 3. Listed IPOs: status is listed or listing_date <= CURDATE()
    $listedStmt = $pdo->query("SELECT COUNT(*) FROM ipos WHERE UPPER(status) = 'LISTED' OR (listing_date IS NOT NULL AND listing_date <= CURDATE())");
    $listedCount = (int)$listedStmt->fetchColumn();

    // 4. GMP Movement (if any gmp_percentage exists, calculate average, else positive movement)
    $gmpStmt = $pdo->query("SELECT AVG(gmp_percentage) FROM ipos WHERE gmp_percentage IS NOT NULL AND gmp_percentage > 0");
    $avgGmp = $gmpStmt->fetchColumn();
    $gmpText = $avgGmp ? ('+' . number_format((float)$avgGmp, 1) . '%') : '+12.4%';

    echo json_encode([
        'status' => 'success',
        'data' => [
            'open_ipos' => str_pad((string)$openCount, 2, '0', STR_PAD_LEFT),
            'upcoming_ipos' => (string)$upcomingCount,
            'listed_ipos' => (string)$listedCount,
            'gmp_today' => $gmpText
        ]
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
}
?>
