<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Gainers Share Price, Financials, Ratio &amp; Analysis | IPOSETU</title>
<meta name="description" content="Track live Gainers stock analysis, 52-week range, valuation multiples, corporate actions, and financial reports on IPOSETU."/>
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
        .gainers-header { background: linear-gradient(135deg, #064e3b 0%, #022c22 100%); border-radius: 24px; padding: 60px 48px; position: relative; overflow: hidden; margin-bottom: 40px; box-shadow: 0 20px 40px -10px rgba(16,185,129,0.3); }
        .gainers-header::before { content: ''; position: absolute; right: -10%; bottom: -20%; width: 50%; height: 150%; background: radial-gradient(circle, rgba(16,185,129,0.2) 0%, transparent 60%); transform: rotate(15deg); pointer-events: none; }
        
        .gainer-metric { font-size: 72px; font-weight: 900; color: rgba(255,255,255,0.05); position: absolute; right: 40px; bottom: -10px; line-height: 1; pointer-events: none; }

        .wall-grid { display: grid; grid-template-columns: repeat(4, 1fr); grid-auto-rows: 180px; gap: 16px; margin-bottom: 40px; }
        .wall-card { background: white; border-radius: 16px; padding: 24px; position: relative; border: 1px solid #e2e8f0; display: flex; flex-direction: column; justify-content: space-between; overflow: hidden; transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
        .wall-card:hover { transform: translateY(-5px); box-shadow: 0 15px 30px rgba(16,185,129,0.15); border-color: #10b981; z-index: 10; }
        .wall-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px; background: #10b981; opacity: 0; transition: 0.3s; }
        .wall-card:hover::before { opacity: 1; }
        
        .card-large { grid-column: span 2; grid-row: span 2; background: #f0fdf4; border-color: #86efac; }
        .card-wide { grid-column: span 2; }
        .card-tall { grid-row: span 2; }
        
        .card-large .company-name { font-size: 32px; font-weight: 900; color: #064e3b; letter-spacing: -1px; }
        .card-large .percent-gain { font-size: 48px; font-weight: 900; color: #10b981; margin-bottom: 8px; }
        
        .company-name { font-size: 18px; font-weight: 800; color: #0f172a; margin-bottom: 4px; }
        .percent-gain { font-size: 24px; font-weight: 800; color: #10b981; }
        
        .sparkline { width: 100%; height: 40px; position: absolute; bottom: 0; left: 0; opacity: 0.2; }
        .wall-card:hover .sparkline { opacity: 0.5; }

        .list-view { display: flex; flex-direction: column; gap: 12px; }
        .list-item { background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px 24px; display: flex; align-items: center; justify-content: space-between; transition: 0.3s; }
        .list-item:hover { border-color: #34d399; box-shadow: 0 4px 12px rgba(16,185,129,0.1); transform: translateX(5px); }
        .list-item-left { display: flex; align-items: center; gap: 20px; }
        .list-item-rank { font-size: 14px; font-weight: 800; color: #94a3b8; width: 24px; }
    </style>
<div class="gainers-header">
<div style="font-size: 14px; font-weight: 700; color: #6ee7b7; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
<svg fill="none" height="20" stroke="currentColor" stroke-width="3" viewbox="0 0 24 24" width="20"><polyline points="18 15 12 9 6 15"></polyline></svg>
            Market Bull Run
        </div>
<h1 style="font-size: 56px; font-weight: 900; color: white; margin-bottom: 16px; line-height: 1.1; letter-spacing: -2px;">Top Gainers</h1>
<p style="font-size: 18px; color: #a7f3d0; max-width: 500px; line-height: 1.6; font-weight: 500;">The strongest performers in the market today, breaking out with massive buying interest.</p>
<div class="gainer-metric">BULLISH</div>
</div>
<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;">
<h2 style="font-size: 24px; font-weight: 900; color: #0f172a; letter-spacing: -0.5px;">Heatmap Overview</h2>
<span style="font-size: 13px; font-weight: 700; color: #10b981; background: #ecfdf5; padding: 6px 12px; border-radius: 20px;">142 Stocks Advancing</span>
</div>
<div class="wall-grid">
<!-- Huge Card #1 -->
<div class="wall-card card-large anim-card delay-5">
<div>
<div style="font-size: 14px; font-weight: 800; color: #059669; text-transform: uppercase; margin-bottom: 8px;">Breakout Leader</div>
<div class="company-name">SUZLON</div>
<div style="font-size: 14px; color: #64748b; font-weight: 600;">Suzlon Energy Ltd</div>
</div>
<div>
<div class="percent-gain">+14.2%</div>
<div style="display: flex; gap: 16px; font-size: 15px; font-weight: 700; color: #334155;">
<span>LTP: ₹74.50</span>
<span style="color: #94a3b8;">|</span>
<span>Vol: 82.1M</span>
</div>
</div>
<svg class="sparkline" preserveaspectratio="none" viewbox="0 0 200 40">
<path d="M0,40 L20,30 L40,35 L60,20 L80,25 L100,10 L120,15 L140,5 L160,8 L180,2 L200,0 L200,40 Z" fill="#10b981"></path>
</svg>
</div>
<!-- Wide Card #2 -->
<div class="wall-card card-wide anim-card delay-4">
<div>
<div class="company-name">ZOMATO</div>
<div style="font-size: 12px; color: #64748b; font-weight: 600;">Zomato Ltd</div>
</div>
<div style="display: flex; justify-content: space-between; align-items: flex-end;">
<div>
<div style="font-size: 13px; font-weight: 700; color: #475569;">₹210.45</div>
</div>
<div class="percent-gain">+9.8%</div>
</div>
</div>
<!-- Normal Card #3 -->
<div class="wall-card anim-card delay-3">
<div>
<div class="company-name">TATAMOTORS</div>
<div style="font-size: 12px; color: #64748b; font-weight: 600;">Tata Motors</div>
</div>
<div style="display: flex; justify-content: space-between; align-items: flex-end;">
<div style="font-size: 13px; font-weight: 700; color: #475569;">₹1,120.30</div>
<div class="percent-gain" style="font-size: 20px;">+7.5%</div>
</div>
</div>
<!-- Normal Card #4 -->
<div class="wall-card anim-card delay-1">
<div>
<div class="company-name">BHEL</div>
<div style="font-size: 12px; color: #64748b; font-weight: 600;">Bharat Heavy</div>
</div>
<div style="display: flex; justify-content: space-between; align-items: flex-end;">
<div style="font-size: 13px; font-weight: 700; color: #475569;">₹310.20</div>
<div class="percent-gain" style="font-size: 20px;">+6.2%</div>
</div>
</div>
<!-- Wide Card #5 -->
<div class="wall-card card-wide anim-card delay-2">
<div>
<div class="company-name">RELIANCE</div>
<div style="font-size: 12px; color: #64748b; font-weight: 600;">Reliance Ind</div>
</div>
<div style="display: flex; justify-content: space-between; align-items: flex-end;">
<div>
<div style="font-size: 13px; font-weight: 700; color: #475569;">₹2,950.80</div>
</div>
<div class="percent-gain">+4.1%</div>
</div>
</div>
</div>
<h2 style="font-size: 24px; font-weight: 900; color: #0f172a; margin-bottom: 24px; letter-spacing: -0.5px;">All Gainers (NIFTY 500)</h2>
<div class="list-view">
<div class="list-item">
<div class="list-item-left">
<div class="list-item-rank">01</div>
<div>
<div style="font-size: 16px; font-weight: 900; color: #0f172a;">SUZLON</div>
<div style="font-size: 12px; font-weight: 600; color: #64748b;">Energy / Power</div>
</div>
</div>
<div style="display: flex; align-items: center; gap: 40px;">
<div style="text-align: right;">
<div style="font-size: 12px; font-weight: 700; color: #94a3b8;">LTP</div>
<div style="font-size: 16px; font-weight: 800; color: #0f172a;">₹74.50</div>
</div>
<div style="text-align: right; width: 100px;">
<div style="font-size: 12px; font-weight: 700; color: #94a3b8;">Chg</div>
<div style="font-size: 18px; font-weight: 900; color: #10b981;">+14.2%</div>
</div>
</div>
</div>
<div class="list-item">
<div class="list-item-left">
<div class="list-item-rank">02</div>
<div>
<div style="font-size: 16px; font-weight: 900; color: #0f172a;">ZOMATO</div>
<div style="font-size: 12px; font-weight: 600; color: #64748b;">Consumer Tech</div>
</div>
</div>
<div style="display: flex; align-items: center; gap: 40px;">
<div style="text-align: right;">
<div style="font-size: 12px; font-weight: 700; color: #94a3b8;">LTP</div>
<div style="font-size: 16px; font-weight: 800; color: #0f172a;">₹210.45</div>
</div>
<div style="text-align: right; width: 100px;">
<div style="font-size: 12px; font-weight: 700; color: #94a3b8;">Chg</div>
<div style="font-size: 18px; font-weight: 900; color: #10b981;">+9.8%</div>
</div>
</div>
</div>
<div class="list-item">
<div class="list-item-left">
<div class="list-item-rank">03</div>
<div>
<div style="font-size: 16px; font-weight: 900; color: #0f172a;">TATAMOTORS</div>
<div style="font-size: 12px; font-weight: 600; color: #64748b;">Automobiles</div>
</div>
</div>
<div style="display: flex; align-items: center; gap: 40px;">
<div style="text-align: right;">
<div style="font-size: 12px; font-weight: 700; color: #94a3b8;">LTP</div>
<div style="font-size: 16px; font-weight: 800; color: #0f172a;">₹1,120.30</div>
</div>
<div style="text-align: right; width: 100px;">
<div style="font-size: 12px; font-weight: 700; color: #94a3b8;">Chg</div>
<div style="font-size: 18px; font-weight: 900; color: #10b981;">+7.5%</div>
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
