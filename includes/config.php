<?php
// IPOSetu Configuration File

// Determine if we are running locally (XAMPP) or on production
$server_name = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '';
$is_localhost = ($server_name === 'localhost' || $server_name === '127.0.0.1');

// Set BASE_URL dynamically
if (!defined('BASE_URL')) {
    define('BASE_URL', $is_localhost ? '/iposetu/' : '/');
}
?>
