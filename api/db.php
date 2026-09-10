<?php
// api/db.php
$server_name = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '';
$is_local = ($server_name === 'localhost' || $server_name === '127.0.0.1' || (php_sapi_name() === 'cli' && strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'));

if ($is_local) {
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'iposetu';
} else {
    // Live Production Credentials (update when setting up live cPanel database)
    $db_host = getenv('DB_HOST') ?: 'localhost';
    $db_user = getenv('DB_USER') ?: 'root';
    $db_pass = getenv('DB_PASS') ?: '';
    $db_name = getenv('DB_NAME') ?: 'iposetu';
}

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die(json_encode(["error" => "Database connection failed: " . $e->getMessage()]));
}

/**
 * Marks IPOs as 'CLOSED' when their close_date has passed by 2 days.
 * Does NOT delete any IPOs from the database.
 * If there is no date, status is left untouched.
 */
function markPassedIPOsAsClosed($pdo, $daysThreshold = 2) {
    try {
        $sql = "UPDATE ipos 
                SET status = 'CLOSED', updated_at = NOW() 
                WHERE close_date IS NOT NULL 
                AND close_date < DATE_SUB(CURDATE(), INTERVAL ? DAY)
                AND LOWER(status) NOT IN ('closed', 'listed')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([(int)$daysThreshold]);
        return $stmt->rowCount();
    } catch (Exception $e) {
        error_log("Failed to update passed IPOs to CLOSED: " . $e->getMessage());
        return 0;
    }
}
?>
