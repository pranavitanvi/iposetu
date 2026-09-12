<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// api/upstox_client.php
require_once __DIR__ . '/config.php';

class UpstoxClient {
    private $accessToken;
    private $baseUrl = 'https://api.upstox.com/v2/ipos';

    public function __construct() {
        global $UPSTOX_ACCESS_TOKEN;
        $this->accessToken = $UPSTOX_ACCESS_TOKEN;
    }

    public function isKeyConfigured() {
        return !empty($this->accessToken) && $this->accessToken !== '';
    }

    private function makeRequest($url) {
        if (!$this->isKeyConfigured()) {
            return ["error" => "Upstox access token has not been added ye455555t."];
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $this->accessToken,
            'Accept: application/json'
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            curl_close($ch);
            return ["error" => "cURL Error: " . $error];
        }

        curl_close($ch);

        $data = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return ["error" => "Invalid JSON received from Upstox API"];
        }

        if ($httpCode >= 400 || (isset($data['status']) && $data['status'] === 'error')) {
            $msg = isset($data['errors'][0]['message']) ? $data['errors'][0]['message'] : 'HTTP Error ' . $httpCode;
            return ["error" => $msg];
        }

        return $data;
    }

    public function fetchIPOList($status = 'open', $issue_type = 'regular', $page_number = 1, $records = 100) {
        $params = http_build_query([
            'status' => $status,
            'issue_type' => $issue_type,
            'page_number' => $page_number,
            'records' => $records
        ]);
        $url = $this->baseUrl . '?' . $params;
        return $this->makeRequest($url);
    }

    public function fetchIPODetails($ipoId) {
        $url = $this->baseUrl . '/' . urlencode($ipoId);
        return $this->makeRequest($url);
    }
    
    public function fetchMarketStatus($exchange = 'NSE') {
        $url = "https://api.upstox.com/v2/market/status/" . urlencode($exchange);
        return $this->makeRequest($url);
    }
    
    public function fetchMarketHolidays() {
        $url = "https://api.upstox.com/v2/market/holidays";
        return $this->makeRequest($url);
    }
    
    public function fetchLTP($instrumentKeys) {
        $url = "https://api.upstox.com/v2/market-quote/ltp?instrument_key=" . urlencode($instrumentKeys);
        return $this->makeRequest($url);
    }
    
    public function fetchQuotes($instrumentKeys) {
        $url = "https://api.upstox.com/v2/market-quote/quotes?instrument_key=" . urlencode($instrumentKeys);
        return $this->makeRequest($url);
    }
    
    public function fetchFundamentals($isin) {
        $url = "https://api.upstox.com/v2/fundamentals/" . urlencode($isin) . "/key-ratios";
        return $this->makeRequest($url);
    }
    
    public function fetchNews($instrumentKeys) {
        $url = "https://api.upstox.com/v2/news?category=instrument_keys&instrument_keys=" . urlencode($instrumentKeys);
        return $this->makeRequest($url);
    }
}
?>
