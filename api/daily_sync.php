<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// api/daily_sync.php
require_once 'db.php';
// IPO Guru temporarily disabled for Upstox API testing.
// Re-enable after data comparison is completed.
require_once 'upstox_sync_service.php';

function checkAndRunDailySync($pdo) {
    $stateFile = __DIR__ . '/upstox_sync_state.json';
    $lockFile = __DIR__ . '/upstox_sync.lock';
    $syncInterval = 24 * 60 * 60; // 24 hours in seconds

    // 1. Check state
    $lastSyncTime = 0;
    if (file_exists($stateFile)) {
        $state = json_decode(file_get_contents($stateFile), true);
        if (isset($state['last_successful_sync'])) {
            $lastSyncTime = strtotime($state['last_successful_sync']);
        }
    }

    $currentTime = time();
    
    // If less than 24 hours have passed, do not sync
    if (($currentTime - $lastSyncTime) < $syncInterval) {
        return [
            "success" => true,
            "synced" => false,
            "message" => "IPO data is already up to date.",
            "last_sync" => $lastSyncTime ? date('Y-m-d H:i:s', $lastSyncTime) : null
        ];
    }

    // 2. 24 hours have passed, attempt to acquire lock
    $fp = fopen($lockFile, 'w+');
    if (!$fp) {
        return [
            "success" => false,
            "synced" => false,
            "message" => "Could not open lock file.",
            "last_sync" => $lastSyncTime ? date('Y-m-d H:i:s', $lastSyncTime) : null
        ];
    }

    if (!flock($fp, LOCK_EX | LOCK_NB)) {
        fclose($fp);
        return [
            "success" => true,
            "synced" => false,
            "message" => "Sync already in progress by another request.",
            "last_sync" => $lastSyncTime ? date('Y-m-d H:i:s', $lastSyncTime) : null
        ];
    }

    // 3. Call Upstox Sync
    // try {
        $result = syncUpstoxIPOs($pdo);
        // return $result;
        // Success: update timestamp if successful
        if ($result['success']) {
            $newSyncTime = date('Y-m-d H:i:s');
            file_put_contents($stateFile, json_encode([
                "last_successful_sync" => $newSyncTime
            ]));
            
            flock($fp, LOCK_UN);
            fclose($fp);
            
            return [
                "success" => true,
                "synced" => true,
                "message" => "IPO data synchronized successfully via Upstox.",
                "last_sync" => $newSyncTime,
                "details" => $result
            ];
        } else {
            flock($fp, LOCK_UN);
            fclose($fp);
            return [
                "success" => false,
                "synced" => false,
                "message" => "Synchronization returned errors.",
                "last_sync" => $lastSyncTime ? date('Y-m-d H:i:s', $lastSyncTime) : null,
                "details" => $result
            ];
        }
    // } catch (Exception $e) {
    //     // Failure: release lock, do not update time
    //     flock($fp, LOCK_UN);
    //     fclose($fp);
        
    //     return [
    //         "success" => false,
    //         "synced" => false,
    //         "message" => "Synchronization failed: " . $e->getMessage(),
    //         "last_sync" => $lastSyncTime ? date('Y-m-d H:i:s', $lastSyncTime) : null
    //     ];
    // }
}

function triggerBackgroundSyncIfNeeded() {
    $stateFile = __DIR__ . '/upstox_sync_state.json';
    $lockFile = __DIR__ . '/upstox_sync.lock';
    $syncInterval = 6 * 3600; // 6 hours

    $lastSyncTime = 0;
    if (file_exists($stateFile)) {
        $state = json_decode(file_get_contents($stateFile), true);
        if (isset($state['last_successful_sync'])) {
            $lastSyncTime = strtotime($state['last_successful_sync']);
        }
    }

    // If more than 6 hours have passed since last successful sync
    if ((time() - $lastSyncTime) >= $syncInterval) {
        // If lock exists and is less than 10 minutes old, sync is already in flight
        if (file_exists($lockFile) && (time() - filemtime($lockFile)) < 600) {
            return;
        }
        @touch($lockFile);

        $scriptPath = __DIR__ . '/scheduled_sync.php';

        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $phpPath = file_exists('C:\\xampp\\php\\php.exe') ? 'C:\\xampp\\php\\php.exe' : (PHP_BINARY ?: 'php');
            pclose(popen("start /B \"\" \"$phpPath\" \"$scriptPath\" > NUL 2>&1", "r"));
        } else {
            // Live Linux server (cPanel / Ubuntu / Debian / CentOS)
            $phpPath = PHP_BINARY ?: 'php';
            exec("$phpPath \"$scriptPath\" > /dev/null 2>&1 &");
        }
    }
}

// Allow direct execution for testing via browser or CLI
if (basename($_SERVER['SCRIPT_FILENAME']) === basename(__FILE__)) {
    header('Content-Type: application/json');
    
    // If ?force=1 is passed, bypass the 24-hour check by passing a mock time
    if (isset($_GET['force']) && $_GET['force'] == '1') {
        $stateFile = __DIR__ . '/upstox_sync_state.json';
        if (file_exists($stateFile)) {
            unlink($stateFile); // Remove state file to force sync
        }
    }
    
    echo json_encode(checkAndRunDailySync($pdo));
}
?>
