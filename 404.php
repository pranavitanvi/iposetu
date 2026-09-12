<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// 404.php - Custom Production 404 Error Page
http_response_code(404);
require_once __DIR__ . '/includes/seo_helper.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 – Track IPOs &amp; Market Intelligence | IPOSETU</title>
    <meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for 404 on IPOSETU."/>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css?v=7.4">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0">
    <?php 
    echo iposetu_render_head_seo([
        'title' => 'Page Not Found (404) | IPOSETU',
        'description' => 'The page you requested could not be found on IPOSETU.',
        'robots' => 'noindex, nofollow'
    ]); 
    ?>
    <style>
        .error-404-hero {
            padding: 90px 20px 80px;
            text-align: center;
            background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
            min-height: 65vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .error-badge {
            display: inline-block;
            background: #fee2e2;
            color: #dc2626;
            font-size: 13px;
            font-weight: 800;
            padding: 4px 14px;
            border-radius: 20px;
            margin-bottom: 16px;
            letter-spacing: 0.5px;
        }
        .error-title {
            font-size: 48px;
            font-weight: 900;
            color: #0f172a;
            margin-bottom: 12px;
            line-height: 1.1;
        }
        .error-subtext {
            font-size: 16px;
            color: #64748b;
            max-width: 580px;
            margin: 0 auto 36px;
            line-height: 1.6;
        }
        .error-links-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 16px;
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }
        .error-link-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 16px;
            text-decoration: none;
            color: inherit;
            transition: all 0.2s ease;
            display: block;
        }
        .error-link-card:hover {
            border-color: #3b82f6;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px -5px rgba(59, 130, 246, 0.12);
        }
        .error-link-icon {
            font-size: 24px;
            margin-bottom: 8px;
        }
        .error-link-title {
            font-size: 14px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 4px;
        }
        .error-link-desc {
            font-size: 12px;
            color: #64748b;
            line-height: 1.4;
        }
    </style>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<main class="error-404-hero">
    <div class="container">
        <span class="error-badge">ERROR 404</span>
        <h1 class="error-title">Page Not Found</h1>
        <p class="error-subtext">
            The page you are looking for might have been moved, renamed, or is temporarily unavailable. Let's get you back to tracking the markets.
        </p>

        <div class="error-links-grid">
            <a href="<?= BASE_URL ?>" class="error-link-card">
                <div class="error-link-icon">🏠</div>
                <div class="error-link-title">Homepage</div>
                <div class="error-link-desc">Return to the market overview and main dashboard</div>
            </a>
            <a href="<?= BASE_URL ?>ipo/current" class="error-link-card">
                <div class="error-link-icon">📈</div>
                <div class="error-link-title">Current IPOs</div>
                <div class="error-link-desc">Explore active Mainboard IPOs accepting bids</div>
            </a>
            <a href="<?= BASE_URL ?>calendar/" class="error-link-card">
                <div class="error-link-icon">📅</div>
                <div class="error-link-title">IPO Calendar</div>
                <div class="error-link-desc">Track opening, closing, and allotment dates</div>
            </a>
            <a href="<?= BASE_URL ?>allotment.php" class="error-link-card">
                <div class="error-link-icon">🔍</div>
                <div class="error-link-title">Allotment Status</div>
                <div class="error-link-desc">Check your share allotment status online</div>
            </a>
            <a href="<?= BASE_URL ?>tools/sip-calculator.php" class="error-link-card">
                <div class="error-link-icon">🧮</div>
                <div class="error-link-title">SIP Calculator</div>
                <div class="error-link-desc">Forecast compounding returns on your investments</div>
            </a>
            <a href="<?= BASE_URL ?>news/" class="error-link-card">
                <div class="error-link-icon">📰</div>
                <div class="error-link-title">Market News</div>
                <div class="error-link-desc">Latest financial news and corporate developments</div>
            </a>
        </div>
    </div>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

</body>
</html>
