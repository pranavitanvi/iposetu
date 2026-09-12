<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
﻿<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Gmp – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Gmp on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<style>
    .gmp-container { max-width: 1200px; margin: 0 auto; padding: 40px 24px; font-family: 'Inter', sans-serif; }
    .gmp-title { font-size: 36px; font-weight: 900; margin: 0 0 16px 0; border-bottom: 4px solid #0f172a; padding-bottom: 16px; display: inline-block; }
    
    .formula-box { background: white; border: 2px dashed #7c3aed; padding: 32px; border-radius: 12px; text-align: center; margin-bottom: 40px; }
    .formula-math { font-size: 28px; font-weight: 900; color: #0f172a; display: flex; justify-content: center; align-items: center; gap: 20px; flex-wrap: wrap; }
    .formula-label { font-size: 13px; font-weight: 700; color: #64748b; text-transform: uppercase; }
    
    .bullet-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 32px; margin-bottom: 40px; }
    .b-card { background: #f8fafc; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0; }
    .b-title { font-size: 18px; font-weight: 800; margin: 0 0 16px 0; color: #0f172a; }
    .b-list { list-style: none; padding: 0; margin: 0; }
    .b-list li { padding-left: 20px; position: relative; font-size: 14px; color: #475569; margin-bottom: 12px; line-height: 1.5; }
    .b-list li::before { content: '?'; position: absolute; left: 0; color: #7c3aed; font-weight: bold; }
    
    .warning-box { background: #fef2f2; border-left: 4px solid #ef4444; padding: 24px; border-radius: 0 8px 8px 0; margin-bottom: 40px; }
</style>
<div class="gmp-container">
    <h1 class="gmp-title">Grey Market Analysis (GMP)</h1>

    <div class="formula-box">
        <div class="formula-math">
            <div><span>₹100</span><br><span class="formula-label">Issue Price</span></div>
            <span style="color:#7c3aed;">+</span>
            <div><span>₹25</span><br><span class="formula-label">Current GMP</span></div>
            <span style="color:#7c3aed;">=</span>
            <div><span style="color:#10b981;">₹125</span><br><span class="formula-label">Indicative Price</span></div>
        </div>
    </div>

    <div class="bullet-grid">
        <div class="b-card">
            <h2 class="b-title">Why Does GMP Move?</h2>
            <ul class="b-list">
                <li><strong>Official Subscription Data:</strong> High QIB demand spikes GMP instantly.</li>
                <li><strong>Broader Market Volatility:</strong> Nifty/Sensex crashes drag GMP down.</li>
                <li><strong>Anchor Investor Lists:</strong> Strong institutional backing boosts sentiment.</li>
                <li><strong>Sector Hype:</strong> AI, Drones, and Solar command instant premiums.</li>
            </ul>
        </div>
        <div class="b-card">
            <h2 class="b-title">Positive vs Negative GMP</h2>
            <ul class="b-list">
                <li><strong style="color:#10b981;">Positive (+):</strong> Indicates off-market buyers believe the stock is undervalued. Predicts listing gains.</li>
                <li><strong style="color:#ef4444;">Negative (-):</strong> Also known as a "Discount". Grey market expects stock to list below issue price. Predicts heavy selling pressure.</li>
            </ul>
        </div>
    </div>

    <div class="warning-box">
        <h2 style="font-size: 20px; font-weight: 800; color: #b91c1c; margin: 0 0 12px 0;">Top 4 Reasons GMP Fails (The Risks)</h2>
        <ul class="b-list">
            <li><strong>Low Volume Manipulation:</strong> Operators trade 10 shares at a massive premium to fake high GMP, luring retail into subscribing.</li>
            <li><strong>Listing Day Panic:</strong> Unofficial sentiment vanishes if broader markets crash on the actual listing morning.</li>
            <li><strong>Operator Exit:</strong> Operators dump shares pre-open, causing a flat listing despite a 50% GMP history.</li>
            <li><strong>It's Unofficial:</strong> GMP has zero regulatory backing from SEBI or Exchanges.</li>
        </ul>
    </div>

    <!-- MASSIVE VERTICAL EXPANSION -->
    <style>
        .jargon-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 60px; }
        .jargon-box { background: white; border: 1px solid #e2e8f0; border-top: 4px solid #f59e0b; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); }
        .jargon-title { font-size: 20px; font-weight: 800; color: #0f172a; margin: 0 0 16px 0; }
        
        .case-study { background: #0f172a; color: white; padding: 40px; border-radius: 12px; margin-bottom: 60px; }
        .case-title { font-size: 24px; font-weight: 800; color: #facc15; margin: 0 0 20px 0; }
        
        .math-scenarios { display: flex; flex-direction: column; gap: 20px; margin-bottom: 60px; }
        .scenario-row { display: flex; background: #f8fafc; border: 1px solid #e2e8f0; padding: 20px; border-radius: 8px; align-items: center; justify-content: space-between; }
        .s-title { font-size: 16px; font-weight: 800; color: #0f172a; width: 25%; }
        .s-math { font-family: monospace; font-size: 16px; color: #475569; width: 45%; }
        .s-result { font-size: 18px; font-weight: 800; width: 25%; text-align: right; }
    </style>

    <h2 class="gmp-title" style="border:none; padding:0; margin-top: 60px;">Advanced Grey Market Terminology</h2>
    <div class="jargon-grid">
        <div class="jargon-box">
            <h3 class="jargon-title">What are Kostak Rates?</h3>
            <p style="font-size: 15px; color: #475569; line-height: 1.6; margin: 0;">The Kostak rate is the premium paid for an IPO application <strong>before the allotment is finalized</strong>. A buyer pays you the Kostak amount to "buy" your application. If you win the lottery, you give the shares to the buyer. If you lose, you keep the Kostak money as profit. This is highly prevalent in SME IPOs to hedge risk.</p>
        </div>
        <div class="jargon-box">
            <h3 class="jargon-title">What is Subject to Sauda (SS)?</h3>
            <p style="font-size: 15px; color: #475569; line-height: 1.6; margin: 0;">A premium amount that is strictly conditional. The buyer agrees to pay the SS premium <strong>only if your application receives an allotment</strong>. If you do not receive an allotment, the deal is cancelled. SS rates are generally much higher than Kostak rates.</p>
        </div>
    </div>

    <div class="case-study">
        <h2 class="case-title">Case Study: The "Fake Premium" Trap</h2>
        <p style="font-size: 16px; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">Because the Grey Market has no official clearing house, volumes are completely invisible. This creates the "Fake Premium Trap" frequently seen in weak SME IPOs.</p>
        <ol style="font-size: 16px; color: #cbd5e1; line-height: 1.8; padding-left: 20px;">
            <li><strong>The Setup:</strong> The SME Company has weak financials. The promoters secretly collude with Grey Market operators.</li>
            <li><strong>The Pump:</strong> The operators buy a negligible amount of shares (e.g., 2 lots) off-market at a massive 80% premium.</li>
            <li><strong>The Trap:</strong> This "80% GMP" is broadcasted across social media and IPO tracking sites. Retail investors, blinded by greed, aggressively subscribe to the IPO, pushing it to 100x subscription.</li>
            <li><strong>The Dump:</strong> Once listed, the operators vanish. With no real demand, the stock lists at a 10% discount and hits lower circuits daily. The retail investors are trapped.</li>
        </ol>
    </div>

    <h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 20px;">GMP Calculation Scenarios</h2>
    <div class="math-scenarios">
        <div class="scenario-row">
            <div class="s-title">Massive Hype Scenario</div>
            <div class="s-math">Issue: ₹150 + GMP: ₹120</div>
            <div class="s-result" style="color: #10b981;">Est: ₹270 (+80%)</div>
        </div>
        <div class="scenario-row">
            <div class="s-title">Flat / Neutral Scenario</div>
            <div class="s-math">Issue: ₹80 + GMP: ₹2</div>
            <div class="s-result" style="color: #f59e0b;">Est: ₹82 (+2.5%)</div>
        </div>
        <div class="scenario-row">
            <div class="s-title">Discount / Crash Scenario</div>
            <div class="s-math">Issue: ₹200 - Discount: ₹15</div>
            <div class="s-result" style="color: #ef4444;">Est: ₹185 (-7.5%)</div>
        </div>
    </div>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
