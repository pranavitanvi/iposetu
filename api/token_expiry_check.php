<?php
/**
 * token_expiry_check.php
 * 
 * Checks the Upstox access token expiry and sends email alerts.
 * 
 * Run this daily via Windows Task Scheduler:
 *   C:\xampp\php\php.exe C:\xampp\htdocs\iposetu\api\token_expiry_check.php
 * 
 * Alert thresholds:
 *   - 30 days before expiry -> Warning email
 *   - 7 days before expiry  -> Urgent email
 *   - 1 day before expiry   -> Critical email
 *   - Already expired        -> Expired email
 */

require_once __DIR__ . '/config.php';

// ─── Configuration ─────────────────────────────────────────────────────────────
$ALERT_EMAIL      = 'admin@iposetu.com';    // ← Change to your email
$ALERT_FROM       = 'noreply@iposetu.com';  // ← Change to your sender email
$SITE_NAME        = 'IPOSETU';
$CONFIG_FILE_PATH = 'C:\\xampp\\htdocs\\iposetu\\api\\config.php';
$STATE_FILE       = __DIR__ . '/token_alert_state.json';
// ────────────────────────────────────────────────────────────────────────────────

function decodeJwtPayload(string $token): ?array {
    $parts = explode('.', $token);
    if (count($parts) !== 3) return null;
    $padded  = str_pad($parts[1], strlen($parts[1]) + (4 - strlen($parts[1]) % 4) % 4, '=');
    $payload = base64_decode($padded);
    return json_decode($payload, true) ?: null;
}

function sendEmailAlert(string $to, string $from, string $subject, string $htmlBody): bool {
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: {$from}\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    return mail($to, $subject, $htmlBody, $headers);
}

function buildEmailBody(string $siteName, string $level, int $daysLeft, string $expiryDate, string $configPath): string {
    $colors = [
        'warning'  => ['bg' => '#fef9c3', 'border' => '#f59e0b', 'badge' => '#d97706', 'label' => 'WARNING'],
        'urgent'   => ['bg' => '#fff7ed', 'border' => '#f97316', 'badge' => '#ea580c', 'label' => 'URGENT'],
        'critical' => ['bg' => '#fef2f2', 'border' => '#ef4444', 'badge' => '#dc2626', 'label' => 'CRITICAL'],
        'expired'  => ['bg' => '#fef2f2', 'border' => '#dc2626', 'badge' => '#991b1b', 'label' => 'EXPIRED'],
    ];
    $c        = $colors[$level] ?? $colors['warning'];
    $daysText = $daysLeft <= 0 ? 'Token has EXPIRED' : "{$daysLeft} day(s) remaining";

    $html = '<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body style="font-family:Arial,sans-serif;background:#f8fafc;margin:0;padding:20px;">';
    $html .= '<div style="max-width:600px;margin:0 auto;background:white;border-radius:12px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.1);">';
    
    // Header
    $html .= '<div style="background:#0f172a;padding:24px 32px;">';
    $html .= '<span style="color:white;font-size:22px;font-weight:900;">' . $siteName . '</span>';
    $html .= '<span style="background:' . $c['badge'] . ';color:white;font-size:11px;font-weight:700;padding:3px 10px;border-radius:20px;float:right;">' . $c['label'] . '</span>';
    $html .= '</div>';

    // Alert Box
    $html .= '<div style="background:' . $c['bg'] . ';border-left:4px solid ' . $c['border'] . ';margin:24px 32px;padding:16px 20px;border-radius:0 8px 8px 0;">';
    $html .= '<div style="font-size:16px;font-weight:700;color:#0f172a;margin-bottom:4px;">Upstox API Token Expiry Alert</div>';
    $html .= '<div style="font-size:14px;color:#475569;">' . $daysText . '</div>';
    $html .= '</div>';

    // Details Table
    $html .= '<div style="padding:0 32px 24px;">';
    $html .= '<table style="width:100%;border-collapse:collapse;font-size:14px;">';
    $html .= '<tr><td style="padding:10px 0;color:#64748b;border-bottom:1px solid #e2e8f0;">Token Expiry Date</td><td style="padding:10px 0;font-weight:700;color:#0f172a;border-bottom:1px solid #e2e8f0;text-align:right;">' . $expiryDate . '</td></tr>';
    $html .= '<tr><td style="padding:10px 0;color:#64748b;border-bottom:1px solid #e2e8f0;">Days Remaining</td><td style="padding:10px 0;font-weight:700;color:#dc2626;border-bottom:1px solid #e2e8f0;text-align:right;">' . $daysLeft . ' days</td></tr>';
    $html .= '<tr><td style="padding:10px 0;color:#64748b;">Config File</td><td style="padding:10px 0;font-weight:600;color:#0f172a;text-align:right;font-size:12px;">' . $configPath . '</td></tr>';
    $html .= '</table>';

    // Action Steps
    $html .= '<div style="background:#f1f5f9;border-radius:8px;padding:16px 20px;margin-top:20px;">';
    $html .= '<div style="font-weight:700;font-size:14px;color:#0f172a;margin-bottom:10px;">Action Required:</div>';
    $html .= '<ol style="margin:0;padding-left:18px;color:#475569;font-size:14px;line-height:1.8;">';
    $html .= '<li>Log in to <strong>developer.upstox.com</strong></li>';
    $html .= '<li>Generate a new <strong>Extended Access Token</strong></li>';
    $html .= '<li>Open <code style="background:#e2e8f0;padding:2px 6px;border-radius:4px;">' . $configPath . '</code> and update the token</li>';
    $html .= '</ol></div>';
    $html .= '</div>';

    // Footer
    $html .= '<div style="background:#f8fafc;padding:16px 32px;border-top:1px solid #e2e8f0;font-size:12px;color:#94a3b8;text-align:center;">';
    $html .= 'This is an automated alert from ' . $siteName . ' &bull; token_expiry_check.php';
    $html .= '</div>';
    $html .= '</div></body></html>';

    return $html;
}

function loadAlertState(string $stateFile): array {
    if (!file_exists($stateFile)) return [];
    return json_decode(file_get_contents($stateFile), true) ?: [];
}

function saveAlertState(string $stateFile, array $state): void {
    file_put_contents($stateFile, json_encode($state, JSON_PRETTY_PRINT));
}

// ─── Main ──────────────────────────────────────────────────────────────────────
$isCli = (php_sapi_name() === 'cli');

function logMsg(string $msg, bool $isCli): void {
    if ($isCli) echo $msg . PHP_EOL;
    else echo '<p>' . htmlspecialchars($msg) . '</p>';
}

// Decode token
$payload = decodeJwtPayload($UPSTOX_ACCESS_TOKEN);

if (!$payload || !isset($payload['exp'])) {
    logMsg("ERROR: Could not decode token or missing exp field.", $isCli);
    exit(1);
}

$expiryTimestamp = (int)$payload['exp'];
$expiryDate      = date('Y-m-d H:i:s', $expiryTimestamp);
$daysLeft        = (int)ceil(($expiryTimestamp - time()) / 86400);
$isExpired       = $daysLeft <= 0;

logMsg("Token Expiry Check", $isCli);
logMsg("  Expiry Date : {$expiryDate}", $isCli);
logMsg("  Days Left   : {$daysLeft}", $isCli);
logMsg("  Is Extended : " . (($payload['isExtended'] ?? false) ? 'YES' : 'NO'), $isCli);

// Determine alert level
$alertLevel = null;
if ($isExpired)         $alertLevel = 'expired';
elseif ($daysLeft <= 1) $alertLevel = 'critical';
elseif ($daysLeft <= 7) $alertLevel = 'urgent';
elseif ($daysLeft <= 30) $alertLevel = 'warning';

if (!$alertLevel) {
    logMsg("Token is healthy. No alert needed. ({$daysLeft} days remaining)", $isCli);
    exit(0);
}

logMsg("Alert level: " . strtoupper($alertLevel), $isCli);

// Avoid duplicate alerts on same day
$state     = loadAlertState($STATE_FILE);
$today     = date('Y-m-d');
$lastSent  = $state['last_sent_date'] ?? '';
$lastLevel = $state['last_sent_level'] ?? '';

if ($lastSent === $today && $lastLevel === $alertLevel) {
    logMsg("Alert already sent today for level '{$alertLevel}'. Skipping.", $isCli);
    exit(0);
}

// Build and send email
$subjects = [
    'warning'  => "[{$SITE_NAME}] Upstox Token expires in {$daysLeft} days - Warning",
    'urgent'   => "[{$SITE_NAME}] Upstox Token expires in {$daysLeft} days - Action Required",
    'critical' => "[{$SITE_NAME}] Upstox Token expires TOMORROW - Immediate Action Required",
    'expired'  => "[{$SITE_NAME}] Upstox Token HAS EXPIRED - Update Now!",
];

$subject = $subjects[$alertLevel];
$body    = buildEmailBody($SITE_NAME, $alertLevel, $daysLeft, $expiryDate, $CONFIG_FILE_PATH);
$sent    = sendEmailAlert($ALERT_EMAIL, $ALERT_FROM, $subject, $body);

if ($sent) {
    logMsg("Alert email sent to {$ALERT_EMAIL}", $isCli);
    saveAlertState($STATE_FILE, [
        'last_sent_date'  => $today,
        'last_sent_level' => $alertLevel,
        'days_left'       => $daysLeft,
        'expiry_date'     => $expiryDate,
    ]);
} else {
    logMsg("Failed to send email. Check PHP mail() / SMTP configuration.", $isCli);
    exit(1);
}

logMsg("Done.", $isCli);
?>
