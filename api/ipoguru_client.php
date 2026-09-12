<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// api/ipoguru_client.php
require_once 'config.php';

class IPOGuruClient {
    private $apiKey;
    private $baseUrl = 'https://www.ipoguru.in/api/v1';

    public function __construct() {
        global $IPO_GURU_API_KEY;
        $this->apiKey = $IPO_GURU_API_KEY;
    }

    public function isKeyConfigured() {
        return $this->apiKey !== 'PASTE_YOUR_API_KEY_HERE' && !empty($this->apiKey);
    }

    public function fetchIPOs($filters = []) {
        if (!$this->isKeyConfigured()) {
            return ["error" => "IPO Guru API key has not been added yet. Add the API key in api/config.php."];
        }

        $url = $this->baseUrl . '/ipos';
        if (!empty($filters)) {
            $url .= '?' . http_build_query($filters);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'X-API-KEY: ' . $this->apiKey,
            'Content-Type: application/json'
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        if (curl_errno($ch)) {
            $error = curl_error($ch);
            curl_close($ch);
            return ["error" => "cURL Error: " . $error];
        }
        
        curl_close($ch);

        if ($httpCode === 429) {
            return ["error" => "Rate limit exceeded. Please try again later."];
        }

        $data = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return ["error" => "Invalid JSON received from IPO Guru API"];
        }

        if ($httpCode >= 400) {
            $msg = isset($data['message']) ? $data['message'] : 'HTTP Error ' . $httpCode;
            return ["error" => $msg];
        }

        return $data;
    }
}
?>
