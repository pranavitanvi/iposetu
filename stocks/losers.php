<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Losers Share Price, Financials, Ratio &amp; Analysis | IPOSETU</title>
<meta name="description" content="Track live Losers stock analysis, 52-week range, valuation multiples, corporate actions, and financial reports on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
<style>
        @keyframes fadeUp { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
        
        .market-hero { background: #0f172a; color: white; padding: 60px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; }
        .market-hero::after { content: ''; position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(59,130,246,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none; }
        
        .market-bento { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 40px; }
        .market-card { background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 4px 6px rgba(0,0,0,0.02); transition: 0.3s; animation: fadeUp 0.6s both; }
        .market-card:hover { transform: translateY(-5px); box-shadow: 0 12px 24px rgba(0,0,0,0.06); border-color: #cbd5e1; }
        .market-card.delay-1 { animation-delay: 0.1s; }
        .market-card.delay-2 { animation-delay: 0.2s; }
        .market-card.delay-3 { animation-delay: 0.3s; }
        .market-card.delay-4 { animation-delay: 0.4s; }
        .market-card.delay-5 { animation-delay: 0.5s; }
        .market-card.delay-6 { animation-delay: 0.6s; }
        
        .index-name { font-size: 14px; font-weight: 800; color: #475569; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px; }
        .index-value { font-size: 28px; font-weight: 900; color: #0f172a; letter-spacing: -0.5px; }
        
        .val-green { color: #10b981; font-weight: 700; display: flex; align-items: center; gap: 4px; margin-top: 8px; }
        .val-red { color: #ef4444; font-weight: 700; display: flex; align-items: center; gap: 4px; margin-top: 8px; }
        
        .breadth-bar { height: 12px; border-radius: 6px; display: flex; overflow: hidden; background: #f1f5f9; margin-top: 12px; }
        .breadth-adv { width: 59%; background: #10b981; transition: width 1s ease-in-out; }
        .breadth-unc { width: 5%; background: #94a3b8; transition: width 1s ease-in-out; }
        .breadth-dec { width: 36%; background: #ef4444; transition: width 1s ease-in-out; }
    </style>
<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
<div class="market-hero">
<div style="font-size: 12px; font-weight: 700; color: #3b82f6; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Stocks → Market Overview</div>
<div style="display: flex; justify-content: space-between; align-items: flex-end;">
<div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px;">Market Overview</h1>
<p style="font-size: 16px; color: #94a3b8; max-width: 600px; line-height: 1.6;">Track Indian market indices, sector performance, and market breadth in real-time.</p>
</div>
<div style="text-align: right;">
<span style="font-size: 12px; font-weight: 600; color: #10b981; display: inline-flex; align-items: center; gap: 6px; background: rgba(16,185,129,0.1); padding: 8px 16px; border-radius: 20px; border: 1px solid rgba(16,185,129,0.2);">
<span style="display: inline-block; width: 8px; height: 8px; background: #10b981; border-radius: 50%; box-shadow: 0 0 8px #10b981; animation: pulse 2s infinite;"></span> LIVE MARKET
</span>
</div>
</div>
</div>
</div>
<main class="container" style="padding-top: 40px; padding-bottom: 80px; min-height: 50vh;">
<style>
        .losers-header { background: radial-gradient(circle at 50% -20%, #881337 0%, #0f172a 70%); border-radius: 24px; padding: 60px 48px; text-align: center; position: relative; overflow: hidden; margin-bottom: 40px; border-bottom: 4px solid #e11d48; }
        .losers-header::after { content: ''; position: absolute; inset: 0; background: url('data:image/svg+xml;utf8,<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><path d="M0 40L40 0H20L0 20v20z" fill="rgba(255,255,255,0.02)"/></svg>'); pointer-events: none; }
        
        .drop-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 40px; }
        .drop-card { background: white; border-radius: 16px; border: 1px solid #ffe4e6; padding: 32px 24px; text-align: center; position: relative; overflow: hidden; transition: 0.3s; box-shadow: 0 10px 15px -3px rgba(225,29,72,0.05); }
        .drop-card:hover { transform: translateY(5px); border-color: #fda4af; box-shadow: inset 0 -4px 0 #e11d48, 0 10px 20px rgba(225,29,72,0.1); }
        
        .drop-arrow { width: 48px; height: 48px; background: #fff1f2; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: #e11d48; }
        
        .drop-table-wrap { background: white; border-radius: 16px; border: 1px solid #e2e8f0; overflow: hidden; }
        .drop-table { width: 100%; border-collapse: collapse; }
        .drop-table th { padding: 16px 24px; font-size: 12px; font-weight: 800; color: #64748b; text-transform: uppercase; border-bottom: 1px solid #e2e8f0; background: #fafaf9; }
        .drop-table td { padding: 20px 24px; font-size: 15px; border-bottom: 1px solid #f1f5f9; transition: 0.2s; }
        .drop-table tr:hover td { background: #fff1f2; }
        
        .pill-red { background: #ffe4e6; color: #e11d48; padding: 4px 12px; border-radius: 12px; font-weight: 800; font-size: 13px; display: inline-block; }
</style>
<div class="losers-header">
<h1 style="font-size: 56px; font-weight: 900; color: white; margin-bottom: 16px; line-height: 1.1; letter-spacing: -2px;">The Drop Zone</h1>
<p style="font-size: 18px; color: #fecdd3; max-width: 600px; margin: 0 auto; line-height: 1.6; font-weight: 500;">Tracking the most severe sell-offs and highest downward momentum in today's session.</p>
</div>
<div class="drop-grid">
<div class="drop-card anim-card delay-1">
<div class="drop-arrow">
<svg fill="none" height="24" stroke="currentColor" stroke-width="3" viewbox="0 0 24 24" width="24"><polyline points="6 9 12 15 18 9"></polyline></svg>
</div>
<h3 style="font-size: 24px; font-weight: 900; color: #0f172a; margin-bottom: 4px;">PAYTM</h3>
<div style="font-size: 13px; color: #64748b; font-weight: 600; margin-bottom: 24px;">One97 Communications</div>
<div style="font-size: 40px; font-weight: 900; color: #e11d48; line-height: 1;">-18.4%</div>
<div style="margin-top: 16px; font-size: 14px; font-weight: 700; color: #475569;">LTP: ₹345.20</div>
</div>
<div class="drop-card anim-card delay-3">
<div class="drop-arrow">
<svg fill="none" height="24" stroke="currentColor" stroke-width="3" viewbox="0 0 24 24" width="24"><polyline points="6 9 12 15 18 9"></polyline></svg>
</div>
<h3 style="font-size: 24px; font-weight: 900; color: #0f172a; margin-bottom: 4px;">ZEEL</h3>
<div style="font-size: 13px; color: #64748b; font-weight: 600; margin-bottom: 24px;">Zee Entertainment</div>
<div style="font-size: 40px; font-weight: 900; color: #e11d48; line-height: 1;">-12.1%</div>
<div style="margin-top: 16px; font-size: 14px; font-weight: 700; color: #475569;">LTP: ₹142.80</div>
</div>
<div class="drop-card anim-card delay-2">
<div class="drop-arrow">
<svg fill="none" height="24" stroke="currentColor" stroke-width="3" viewbox="0 0 24 24" width="24"><polyline points="6 9 12 15 18 9"></polyline></svg>
</div>
<h3 style="font-size: 24px; font-weight: 900; color: #0f172a; margin-bottom: 4px;">WIPRO</h3>
<div style="font-size: 13px; color: #64748b; font-weight: 600; margin-bottom: 24px;">Wipro Ltd</div>
<div style="font-size: 40px; font-weight: 900; color: #e11d48; line-height: 1;">-5.8%</div>
<div style="margin-top: 16px; font-size: 14px; font-weight: 700; color: #475569;">LTP: ₹458.10</div>
</div>
</div>
<h2 style="font-size: 24px; font-weight: 900; color: #0f172a; margin-bottom: 24px; letter-spacing: -0.5px;">All Losers (NIFTY 500)</h2>
<div class="drop-table-wrap">
<table class="drop-table">
<thead>
<tr>
<th style="text-align: left;">Company</th>
<th style="text-align: right;">Last Price</th>
<th style="text-align: right;">Change</th>
<th style="text-align: right;">Drop %</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div style="font-weight: 900; color: #0f172a; font-size: 16px;">PAYTM</div>
<div style="font-size: 12px; font-weight: 600; color: #64748b;">Fintech</div>
</td>
<td style="text-align: right; font-weight: 800; color: #334155;">₹345.20</td>
<td style="text-align: right; font-weight: 700; color: #e11d48;">-78.40</td>
<td style="text-align: right;"><span class="pill-red">-18.4%</span></td>
</tr>
<tr>
<td>
<div style="font-weight: 900; color: #0f172a; font-size: 16px;">ZEEL</div>
<div style="font-size: 12px; font-weight: 600; color: #64748b;">Media</div>
</td>
<td style="text-align: right; font-weight: 800; color: #334155;">₹142.80</td>
<td style="text-align: right; font-weight: 700; color: #e11d48;">-19.65</td>
<td style="text-align: right;"><span class="pill-red">-12.1%</span></td>
</tr>
<tr>
<td>
<div style="font-weight: 900; color: #0f172a; font-size: 16px;">WIPRO</div>
<div style="font-size: 12px; font-weight: 600; color: #64748b;">IT Services</div>
</td>
<td style="text-align: right; font-weight: 800; color: #334155;">₹458.10</td>
<td style="text-align: right; font-weight: 700; color: #e11d48;">-28.20</td>
<td style="text-align: right;"><span class="pill-red">-5.8%</span></td>
</tr>
<tr>
<td>
<div style="font-weight: 900; color: #0f172a; font-size: 16px;">HDFCBANK</div>
<div style="font-size: 12px; font-weight: 600; color: #64748b;">Banking</div>
</td>
<td style="text-align: right; font-weight: 800; color: #334155;">₹1,432.50</td>
<td style="text-align: right; font-weight: 700; color: #e11d48;">-45.30</td>
<td style="text-align: right;"><span class="pill-red">-3.0%</span></td>
</tr>
</tbody>
</table>
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
