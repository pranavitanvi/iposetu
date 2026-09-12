<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Block Deals Share Price, Financials, Ratio &amp; Analysis | IPOSETU</title>
<meta name="description" content="Track live Block Deals stock analysis, 52-week range, valuation multiples, corporate actions, and financial reports on IPOSETU."/>
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
<div style="font-size: 12px; font-weight: 700; color: #60a5fa; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Stocks / Block Deals</div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px;">BLOCK DEALS TRACKER</h1>
<p style="font-size: 16px; color: #94a3b8; max-width: 600px; line-height: 1.6;">Track massive single-trade transactions (Value &gt; ₹10 Cr or Shares &gt; 5 Lakh) executed through a separate trading window.</p>
<div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 16px;">
<div>
</div>
<div style="display: flex; gap: 12px;">
<button style="padding: 10px 20px; font-size: 14px; font-weight: 700; color: white; background: #0f172a; border: none; border-radius: 8px; cursor: pointer;">Morning Window</button>
<button style="padding: 10px 20px; font-size: 14px; font-weight: 700; color: #94a3b8; background: white; border: 1px solid #cbd5e1; border-radius: 8px; cursor: pointer;">Afternoon Window</button>
</div>
</div>
</div>
</div>

<main class="container" style="margin-bottom: 80px;">
<div class="terminal-dashboard">
<!-- Hero Terminal -->
<div class="terminal-hero">
<div class="terminal-title">
<h1>Block Deals Terminal</h1>
<p>Block deals are negotiated large transactions executed in a separate, dedicated exchange window. They represent massive institutional portfolio changes, fund rebalancing, or strategic investments, shielded from normal market price fluctuations.</p>
</div>
<div class="terminal-stat">
<span class="terminal-stat-label">Total Block Value (Today)</span>
<span class="terminal-stat-val">₹2,845 Cr</span>
</div>
<div class="terminal-stat">
<span class="terminal-stat-label">Largest Single Trade</span>
<span class="terminal-stat-val">₹950 Cr</span>
</div>
</div>
<!-- Terminal Feed -->
<div>
<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:12px;">
<h2 style="font-size: 18px; font-weight: 800; color: #0f172a;">Live Transaction Feed</h2>
<span style="font-size:12px; font-weight:700; color:#10b981; background:#d1fae5; padding:4px 8px; border-radius:4px;">🟢 MARKET OPEN</span>
</div>
<div class="terminal-feed-container">
<div class="terminal-feed-header">
<div>TIME</div>
<div>STOCK</div>
<div>BUYER</div>
<div>SELLER</div>
<div style="text-align:right;">QUANTITY</div>
<div style="text-align:right;">PRICE</div>
<div style="text-align:right;">VALUE</div>
</div>
<div class="terminal-row">
<div class="t-time">09:15:22</div>
<div class="t-stock">Reliance Industries</div>
<div class="t-buyer">Gov of Singapore</div>
<div class="t-seller">Capital Group</div>
<div class="t-qty">3,200,000</div>
<div class="t-price">2,950.00</div>
<div class="t-val">₹944.0 Cr</div>
</div>
<div class="terminal-row">
<div class="t-time">09:22:45</div>
<div class="t-stock">Infosys Ltd</div>
<div class="t-buyer">Vanguard Total</div>
<div class="t-seller">Promoter Group</div>
<div class="t-qty">1,500,000</div>
<div class="t-price">1,620.50</div>
<div class="t-val">₹243.0 Cr</div>
</div>
<div class="terminal-row">
<div class="t-time">10:05:10</div>
<div class="t-stock">TCS</div>
<div class="t-buyer">SBI Mutual Fund</div>
<div class="t-seller">Fidelity Inv</div>
<div class="t-qty">850,000</div>
<div class="t-price">3,890.00</div>
<div class="t-val">₹330.6 Cr</div>
</div>
<div class="terminal-row">
<div class="t-time">14:15:00</div>
<div class="t-stock">ITC Ltd</div>
<div class="t-buyer">LIC of India</div>
<div class="t-seller">BAT Plc</div>
<div class="t-qty">12,500,000</div>
<div class="t-price">410.25</div>
<div class="t-val">₹512.8 Cr</div>
</div>
</div>
</div>
<!-- Leaderboards -->
<div class="terminal-leaders">
<div class="leader-board">
<h3>
<svg fill="none" height="20" stroke="#10b981" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="20"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        Major Buyers (Today)
                    </h3>
<div class="leader-row">
<span class="leader-name">Gov of Singapore</span>
<span class="leader-val buyer-val">₹944.0 Cr</span>
</div>
<div class="leader-row">
<span class="leader-name">LIC of India</span>
<span class="leader-val buyer-val">₹512.8 Cr</span>
</div>
<div class="leader-row">
<span class="leader-name">SBI Mutual Fund</span>
<span class="leader-val buyer-val">₹330.6 Cr</span>
</div>
<div class="leader-row">
<span class="leader-name">Vanguard Total</span>
<span class="leader-val buyer-val">₹243.0 Cr</span>
</div>
</div>
<div class="leader-board">
<h3>
<svg fill="none" height="20" stroke="#e11d48" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="20"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        Major Sellers (Today)
                    </h3>
<div class="leader-row">
<span class="leader-name">Capital Group</span>
<span class="leader-val seller-val">₹944.0 Cr</span>
</div>
<div class="leader-row">
<span class="leader-name">BAT Plc</span>
<span class="leader-val seller-val">₹512.8 Cr</span>
</div>
<div class="leader-row">
<span class="leader-name">Fidelity Inv</span>
<span class="leader-val seller-val">₹330.6 Cr</span>
</div>
<div class="leader-row">
<span class="leader-name">Promoter Group</span>
<span class="leader-val seller-val">₹243.0 Cr</span>
</div>
</div>
</div>
<!-- Important Note -->
<div style="background: #f8fafc; border: 1px dashed #cbd5e1; padding: 24px; border-radius: 8px; margin-top: 16px;">
<h4 style="font-size: 15px; font-weight: 700; color: #334155; margin-bottom: 8px;">Block Deal Price vs Market Price</h4>
<p style="font-size: 14px; color: #64748b; line-height: 1.5;">Because block deals are executed in a separate window with price boundaries (typically �1% of the previous close or VWAP), the transaction price may differ from the live market price. While a large block deal indicates significant institutional participation, a large transaction should not automatically be interpreted as a buy or sell recommendation.</p>
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
