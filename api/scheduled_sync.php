<?php
/**
 * scheduled_sync.php
 * 
 * Runs the daily IPO + News sync automatically.
 * Called by Windows Task Scheduler every day.
 * 
 * Task: IPOSETU_DailySync
 * Schedule: Daily at 08:00 AM
 * Command: C:\xampp\php\php.exe C:\xampp\htdocs\iposetu\api\scheduled_sync.php
 */

require_once __DIR__ . '/db.php';

$logFile = __DIR__ . '/sync_log.txt';

function writeLog(string $msg): void {
    global $logFile;
    $line = '[' . date('Y-m-d H:i:s') . '] ' . $msg . PHP_EOL;
    file_put_contents($logFile, $line, FILE_APPEND);
    if (php_sapi_name() === 'cli') echo $line;
}

writeLog("=== IPOSETU Daily Sync Started ===");

// ── 1. IPO + SME IPO Sync ─────────────────────────────────────────────────────
try {
    writeLog("Starting Upstox IPO sync...");

    // Reset state file to force sync
    $stateFile = __DIR__ . '/upstox_sync_state.json';
    if (file_exists($stateFile)) unlink($stateFile);

    require_once __DIR__ . '/upstox_sync_service.php';
    $result = syncUpstoxIPOs($pdo);

    if ($result['success']) {
        writeLog("IPO sync SUCCESS: inserted={$result['inserted']}, updated={$result['updated']}, errors=" . count($result['errors']));
        // Save updated state
        file_put_contents($stateFile, json_encode([
            'last_successful_sync' => date('Y-m-d H:i:s')
        ]));

        // Mark IPOs as CLOSED when close_date has passed by 2 days
        $closedCount = markPassedIPOsAsClosed($pdo, 2);
        writeLog("IPOs Status Update: marked {$closedCount} records as CLOSED.");
    } else {
        writeLog("IPO sync FAILED: " . implode('; ', $result['errors']));
    }
} catch (Exception $e) {
    writeLog("IPO sync EXCEPTION: " . $e->getMessage());
}

// ── 2. News Sync ──────────────────────────────────────────────────────────────
try {
    writeLog("Starting News sync...");

    // Delete old cache to force fresh fetch
    $newsCacheFile = __DIR__ . '/news_cache.json';
    if (file_exists($newsCacheFile)) unlink($newsCacheFile);

    require_once __DIR__ . '/news_sync.php';
    $newsResult = sync_news();

    writeLog("News sync " . ($newsResult ? "SUCCESS" : "FAILED"));
} catch (Exception $e) {
    writeLog("News sync EXCEPTION: " . $e->getMessage());
}

writeLog("=== IPOSETU Daily Sync Completed ===");
writeLog("");
?>
