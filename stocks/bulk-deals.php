<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Bulk Deals Share Price, Financials, Ratio &amp; Analysis | IPOSETU</title>
<meta name="description" content="Track live Bulk Deals stock analysis, 52-week range, valuation multiples, corporate actions, and financial reports on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
<style>
        @keyframes fadeUp { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
        .market-hero { background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: white; padding: 60px 40px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; animation: fadeUp 0.6s forwards; }
        .market-hero::after { content: ''; position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(59,130,246,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none; }
        .anim-card { animation: fadeUp 0.6s both; }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
    </style>
<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
<div class="market-hero">
<div style="font-size: 12px; font-weight: 700; color: #60a5fa; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Stocks / Bulk Deals</div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px;">BULK DEALS TRACKER</h1>
<p style="font-size: 16px; color: #94a3b8; max-width: 600px; line-height: 1.6;">Track trades where the total quantity is more than 0.5% of the total number of listed shares.</p>
<div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 16px;">
<div>
</div>
<div style="display: flex; gap: 12px;">
<button style="padding: 10px 20px; font-size: 14px; font-weight: 700; color: white; background: #0f172a; border: none; border-radius: 8px; cursor: pointer;">Today</button>
<button style="padding: 10px 20px; font-size: 14px; font-weight: 700; color: #94a3b8; background: white; border: 1px solid #cbd5e1; border-radius: 8px; cursor: pointer;">Last 7 Days</button>
</div>
</div>
</div>
</div>
<main class="container" style="margin-bottom: 80px;">
<div class="bulk-dashboard">
<div style="margin-bottom: -10px;">
<h1 style="font-size: 28px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Bulk Deals Activity</h1>
<p style="color: #64748b; font-size: 15px; max-width: 800px; line-height: 1.6;">A bulk deal is a significant transaction involving a large quantity of shares (usually &gt;0.5% of total listed shares). These deals provide visibility into substantial buying or selling activity by institutional investors and high-net-worth individuals.</p>
</div>
<!-- Hero Stats -->
<div class="bulk-hero">
<div class="bulk-stat-card val-blue anim-card delay-1">
<span class="bulk-stat-label">Largest by Value</span>
<span class="bulk-stat-value">₹450 Cr</span>
<span class="bulk-stat-sub">HDFC Bank Ltd</span>
</div>
<div class="bulk-stat-card val-purple anim-card delay-2">
<span class="bulk-stat-label">Largest by Qty</span>
<span class="bulk-stat-value">1.2Cr</span>
<span class="bulk-stat-sub">Suzlon Energy</span>
</div>
<div class="bulk-stat-card val-green anim-card delay-3">
<span class="bulk-stat-label">Largest Buy</span>
<span class="bulk-stat-value">₹320 Cr</span>
<span class="bulk-stat-sub">Morgan Stanley Asia</span>
</div>
<div class="bulk-stat-card val-red anim-card delay-4">
<span class="bulk-stat-label">Largest Sell</span>
<span class="bulk-stat-value">₹450 Cr</span>
<span class="bulk-stat-sub">Vanguard Index Fund</span>
</div>
</div>
<!-- Transaction Feed -->
<div>
<h2 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 16px;">Today's Major Bulk Deals</h2>
<div class="transaction-flow">
<!-- Row 1 -->
<div class="tx-row">
<div class="tx-stock">
                            HDFC Bank
                            <span class="tx-date">Today, 14:30 IST</span>
</div>
<div class="tx-party buyer">
<span class="tx-pill buy">BUY</span>
<span class="tx-party-name">Morgan Stanley Asia</span>
</div>
<div class="tx-details">
<span class="tx-shares">30,00,000</span>
<span class="tx-price">@ ₹1,500.00</span>
</div>
<div class="tx-party seller">
<span class="tx-party-name">Vanguard Index Fund</span>
<span class="tx-pill sell">SELL</span>
</div>
<div class="tx-value">₹450 Cr</div>
</div>
<!-- Row 2 -->
<div class="tx-row">
<div class="tx-stock">
                            Tata Motors
                            <span class="tx-date">Today, 11:15 IST</span>
</div>
<div class="tx-party buyer">
<span class="tx-pill buy">BUY</span>
<span class="tx-party-name">Societe Generale</span>
</div>
<div class="tx-details">
<span class="tx-shares">15,50,000</span>
<span class="tx-price">@ ₹980.50</span>
</div>
<div class="tx-party seller">
<span class="tx-party-name">Citigroup Global</span>
<span class="tx-pill sell">SELL</span>
</div>
<div class="tx-value">₹151.9 Cr</div>
</div>
<!-- Row 3 -->
<div class="tx-row">
<div class="tx-stock">
                            Suzlon Energy
                            <span class="tx-date">Today, 10:05 IST</span>
</div>
<div class="tx-party buyer">
<span class="tx-pill buy">BUY</span>
<span class="tx-party-name">Blackrock Global</span>
</div>
<div class="tx-details">
<span class="tx-shares">1,20,00,000</span>
<span class="tx-price">@ ₹45.20</span>
</div>
<div class="tx-party seller">
<span class="tx-party-name">Retail Investors / Open</span>
<span class="tx-pill sell" style="background:#f1f5f9; color:#64748b; border-color:#cbd5e1;">MIXED</span>
</div>
<div class="tx-value">₹54.2 Cr</div>
</div>
</div>
</div>
<!-- Comparison -->
<div style="margin-top: 24px;">
<h2 style="font-size: 20px; font-weight: 800; color: #0f172a;">Bulk Deal vs Block Deal</h2>
<p style="font-size: 14px; color: #64748b; margin-top: 8px;">Understanding the difference between the two major institutional transaction types.</p>
<div class="bulk-vs-block">
<div class="compare-card anim-card delay-5">
<h3>Bulk Deal</h3>
<ul class="compare-list">
<li><strong>Threshold:</strong> Any transaction involving 0.5% or more of the company's total listed equity shares.</li>
<li><strong>Execution:</strong> Executed during normal market trading hours in the open market window.</li>
<li><strong>Visibility:</strong> Visible in the normal order book; price can fluctuate.</li>
<li><strong>Disclosure:</strong> Must be disclosed by the broker to the exchange on the same day if transacted through a single trade or multiple trades.</li>
</ul>
</div>
<div class="compare-card anim-card delay-1">
<h3>Block Deal</h3>
<ul class="compare-list">
<li><strong>Threshold:</strong> Any trade with a minimum quantity of 5 lakh shares or a minimum value of ₹10 crore.</li>
<li><strong>Execution:</strong> Executed in a separate, dedicated Block Deal window (typically morning and afternoon sessions).</li>
<li><strong>Visibility:</strong> Private negotiation executed on-screen; price bounds are strict (�1% of previous close/VWAP).</li>
<li><strong>Disclosure:</strong> Immediate public disclosure since it happens in a specialized reporting window.</li>
</ul>
</div>
</div>
</div>
</div>
</main>
<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>
<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
