<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Dashboard – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Dashboard on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<style>
    .report-container { max-width: 1200px; margin: 0 auto; padding: 40px 24px; font-family: 'Inter', sans-serif; }
    .report-header { border-bottom: 2px solid #e2e8f0; padding-bottom: 24px; margin-bottom: 40px; }
    .report-title { font-size: 32px; font-weight: 900; color: #0f172a; text-transform: uppercase; letter-spacing: -0.5px; margin: 0; }
    .report-subtitle { font-size: 16px; color: #64748b; font-weight: 500; margin-top: 8px; }
    
    .snapshot-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 60px; }
    .stat-box { background: #f8fafc; border: 1px solid #e2e8f0; padding: 24px; border-radius: 8px; border-left: 4px solid #7c3aed; }
    .stat-label { font-size: 13px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-bottom: 8px; }
    .stat-value { font-size: 28px; font-weight: 900; color: #0f172a; }
    
    .analysis-section { margin-bottom: 60px; }
    .analysis-title { font-size: 22px; font-weight: 800; color: #1e293b; margin-bottom: 20px; display: flex; align-items: center; gap: 12px; }
    .analysis-title::before { content: ''; display: block; width: 24px; height: 4px; background: #7c3aed; }
    
    /* HIGH DENSITY: Micro-Grids */
    .micro-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 24px; }
    .micro-box { background: white; border: 1px solid #e2e8f0; padding: 20px; border-radius: 8px; }
    .micro-title { font-size: 16px; font-weight: 800; color: #0f172a; margin: 0 0 8px 0; }
    .micro-text { font-size: 14px; color: #475569; margin: 0; line-height: 1.5; }
    
    /* HIGH DENSITY: Checklist */
    .checklist { background: #fefce8; border: 1px solid #fef08a; padding: 32px; border-radius: 12px; margin-bottom: 60px; }
    .checklist-title { font-size: 20px; font-weight: 800; color: #854d0e; margin: 0 0 20px 0; display: flex; align-items: center; gap: 12px; }
    .check-list-ul { list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
    .check-list-ul li { font-size: 15px; color: #713f12; display: flex; align-items: flex-start; gap: 12px; line-height: 1.5; }
    .check-icon { font-weight: 900; color: #ca8a04; }
</style>
<div class="report-container">
    <div class="report-header">
        <h1 class="report-title">SME IPO Market Report</h1>
        <div class="report-subtitle">Market Intelligence, High-Density Analytics, and Sector Tracking</div>
    </div>

    <div class="analysis-section">
        <h2 class="analysis-title">SME IPO Market Snapshot</h2>
        <div class="snapshot-grid">
            <div class="stat-box"><div class="stat-label">Total SME IPOs</div><div class="stat-value">482</div></div>
            <div class="stat-box"><div class="stat-label">Upcoming Pipeline</div><div class="stat-value">34</div></div>
            <div class="stat-box"><div class="stat-label">Currently Open</div><div class="stat-value">3</div></div>
            <div class="stat-box"><div class="stat-label">Avg Subscription</div><div class="stat-value">85x</div></div>
            <div class="stat-box"><div class="stat-label">Avg Listing Gain</div><div class="stat-value">+42.5%</div></div>
            <div class="stat-box" style="border-left-color: #10b981;"><div class="stat-label">Listed Successfully</div><div class="stat-value">412</div></div>
        </div>
    </div>

    <div class="analysis-section">
        <h2 class="analysis-title">Sector-Wise Analysis (Brief)</h2>
        <div class="micro-grid">
            <div class="micro-box" style="border-top: 3px solid #3b82f6;">
                <h3 class="micro-title">Technology & IT Services</h3>
                <p class="micro-text">High valuations, strong QIB interest. Companies scaling AI or SaaS models dominate retail hype.</p>
            </div>
            <div class="micro-box" style="border-top: 3px solid #f59e0b;">
                <h3 class="micro-title">Specialized Manufacturing</h3>
                <p class="micro-text">Heavy CapEx requirements. Consistent listing gains fueled by 'Make in India' government policies.</p>
            </div>
            <div class="micro-box" style="border-top: 3px solid #10b981;">
                <h3 class="micro-title">Green Energy / Solar</h3>
                <p class="micro-text">Massive recent surge. Highest average GMPs recorded across any sector in the last 12 months.</p>
            </div>
            <div class="micro-box" style="border-top: 3px solid #ef4444;">
                <h3 class="micro-title">Traditional Retail/Trading</h3>
                <p class="micro-text">Low margins, high competition. Generally sees the lowest subscription rates and flat listings.</p>
            </div>
        </div>
    </div>

    <div class="checklist">
        <h2 class="checklist-title">⚡ Quick Screen: How to Spot a Good SME IPO</h2>
        <ul class="check-list-ul">
            <li><span class="check-icon">✓</span> <strong>Strong Promoter Pedigree:</strong> Experienced founders with a clean track record.</li>
            <li><span class="check-icon">✓</span> <strong>High ROCE (20%+):</strong> Return on Capital Employed shows operational efficiency.</li>
            <li><span class="check-icon">✓</span> <strong>Anchor Investor Presence:</strong> Smart money locked in for 30-90 days.</li>
            <li><span class="check-icon">✓</span> <strong>Issue Size > ₹30 Cr:</strong> Smaller issues face extreme liquidity problems post-listing.</li>
            <li><span class="check-icon">✓</span> <strong>Clear Object of Issue:</strong> Raising money for CapEx, not just to pay off debt.</li>
            <li><span class="check-icon">✓</span> <strong>QIB Quota:</strong> Ensures institutional scrutiny rather than just retail hype.</li>
        </ul>
    </div>

    <!-- MASSIVE VERTICAL EXPANSION -->
    <style>
        .comparison-table { width: 100%; border-collapse: collapse; margin-bottom: 60px; background: white; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); }
        .comparison-table th { background: #0f172a; color: white; padding: 16px; text-align: left; font-size: 16px; border: 1px solid #334155; }
        .comparison-table td { padding: 16px; border: 1px solid #e2e8f0; font-size: 15px; color: #475569; }
        .comparison-table tr:nth-child(even) { background: #f8fafc; }
        
        .deep-dive-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 24px; margin-bottom: 60px; }
        .dd-card { background: white; border: 1px solid #e2e8f0; border-top: 4px solid #ef4444; padding: 24px; border-radius: 8px; }
        .dd-title { font-size: 18px; font-weight: 800; color: #0f172a; margin: 0 0 12px 0; }
    </style>

    <h2 class="analysis-title" style="margin-top: 60px;">Mainboard vs SME: Structural Differences</h2>
    <table class="comparison-table">
        <tr>
            <th>Parameter</th>
            <th>Mainboard IPO</th>
            <th>SME IPO</th>
        </tr>
        <tr>
            <td><strong>Post Issue Capital</strong></td>
            <td>Must be above ₹10 Crores</td>
            <td>Must not exceed ₹25 Crores</td>
        </tr>
        <tr>
            <td><strong>Minimum Investment</strong></td>
            <td>₹14,000 to ₹15,000 (1 Lot)</td>
            <td>₹1,00,000 to ₹1,40,000 (1 Lot)</td>
        </tr>
        <tr>
            <td><strong>Profitability Record</strong></td>
            <td>Strict 3-year consistent profitability track record required</td>
            <td>Relaxed norms; focus is on future growth potential</td>
        </tr>
        <tr>
            <td><strong>Draft Prospectus Vetting</strong></td>
            <td>Strictly vetted by SEBI</td>
            <td>Vetted by the Stock Exchange, not SEBI</td>
        </tr>
        <tr>
            <td><strong>Trading Mechanics</strong></td>
            <td>Trades in single shares</td>
            <td>Trades in strictly defined 'Market Lots' only</td>
        </tr>
    </table>

    <h2 class="analysis-title">Historical Bull & Bear Cycles</h2>
    <p class="analysis-text">The SME market is notoriously hyper-cyclical. Because SME stocks trade in large market lots and have a much smaller float (total available shares) compared to Mainboard stocks, their prices are highly sensitive to liquidity.</p>
    <div class="micro-grid" style="margin-bottom: 60px;">
        <div class="micro-box" style="border-top: 3px solid #10b981; background: #f0fdf4;">
            <h3 class="micro-title">Bull Cycles (High Liquidity)</h3>
            <p class="micro-text">Retail money floods the market. Average oversubscription crosses 100x. Even companies with weak fundamentals list at 30-50% premiums. Operators easily push up prices due to low float.</p>
        </div>
        <div class="micro-box" style="border-top: 3px solid #ef4444; background: #fef2f2;">
            <h3 class="micro-title">Bear Cycles (Liquidity Dry-Up)</h3>
            <p class="micro-text">When Nifty corrects, SME liquidity vanishes instantly. Investors refuse to buy full market lots. Heavy selling hits the lower circuit limit daily, trapping investors who cannot exit their positions.</p>
        </div>
    </div>

    <h2 class="analysis-title">Advanced SME Risk Metrics</h2>
    <div class="deep-dive-grid">
        <div class="dd-card">
            <h3 class="dd-title">1. Liquidity Trap Risk</h3>
            <p class="micro-text">Because you must trade in lots of 1000+ shares, finding a buyer post-listing can be incredibly difficult during a market downturn.</p>
        </div>
        <div class="dd-card">
            <h3 class="dd-title">2. Operator Manipulation</h3>
            <p class="micro-text">Low float allows organized syndicates to pump the stock price up 5% daily via upper circuits before dumping their holdings onto retail.</p>
        </div>
        <div class="dd-card">
            <h3 class="dd-title">3. Disclosure Gaps</h3>
            <p class="micro-text">SME companies are only required to report financial results half-yearly, not quarterly, reducing immediate transparency.</p>
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
