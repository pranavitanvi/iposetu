<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>52 Week Low Share Price, Financials, Ratio &amp; Analysis | IPOSETU</title>
<meta name="description" content="Track live 52 Week Low stock analysis, 52-week range, valuation multiples, corporate actions, and financial reports on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
<style>
        @keyframes fadeUp { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
        .market-hero { background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: white; padding: 60px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; animation: fadeUp 0.6s forwards; }
        .market-hero::after { content: ''; position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(59,130,246,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none; }
        .anim-card { animation: fadeUp 0.6s both; }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
    </style>
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
<div style="font-size: 12px; font-weight: 700; color: #60a5fa; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Stocks ? 52-Week Low52-WEEK LOW WATCHIdentify stocks hitting yearly lows or trading dangerously close to their 52-week bottom.</div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px;">52-WEEK LOW WATCH</h1>
<p style="font-size: 16px; color: #94a3b8; max-width: 600px; line-height: 1.6;">Identify stocks hitting yearly lows or trading dangerously close to their 52-week bottom.</p>
</div>
</div>
<main class="container" style="margin-bottom: 80px;">
<!-- 52-Week Low Dashboard -->
<div class="low-dashboard">
<!-- Hero Snapshot -->
<div class="low-hero">
<div class="low-stat-card anim-card delay-1">
<span class="label">Stocks at 52-Week Low</span>
<span class="value">84</span>
</div>
<div class="low-stat-card anim-card delay-2">
<span class="label">Largest Sector Drop</span>
<span class="value" style="font-size:28px; line-height:36px;">Chemicals</span>
</div>
<div class="low-stat-card anim-card delay-3">
<span class="label">Avg Distance From Low</span>
<span class="value">+1.2%</span>
</div>
</div>
<!-- Warning Box -->
<div class="low-warning-box anim-card delay-2">
<svg fill="none" height="24" stroke="#f59e0b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="flex-shrink:0; margin-top:2px;" viewbox="0 0 24 24" width="24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" x2="12" y1="9" y2="13"></line><line x1="12" x2="12.01" y1="17" y2="17"></line></svg>
<div>
<h3 style="font-size: 16px; font-weight: 700; color: #92400e; margin-bottom: 4px;">52-Week Low Does Not Mean Cheap</h3>
<p style="font-size: 14px; color: #b45309; line-height: 1.5;">A stock trading near its 52-week low may appear inexpensive compared to its previous price, but a lower price does not automatically indicate an undervalued asset. The decline may be driven by deteriorating earnings, debt concerns, sector weakness, or management changes. Always examine cash flow and business prospects before interpreting a decline as a buying opportunity.</p>
</div>
</div>
<!-- Recovery Watch Section -->
<div class="low-recovery-section">
<div style="display:flex; justify-content:space-between; align-items:flex-end;">
<div>
<h2 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Recovery Watch</h2>
<p style="font-size: 14px; color: #64748b;">Stocks that are far below their 52-week highs but are showing early signs of upward price momentum from recent lows.</p>
</div>
</div>
<div class="recovery-grid">
<div class="recovery-card anim-card delay-1">
<div class="recovery-header">
<span class="recovery-stock">UPL Ltd</span>
<span class="recovery-badge">+8.5% from low</span>
</div>
<div class="recovery-metrics">
<span style="color:#64748b;">Current: <span class="recovery-val">₹485.20</span></span>
<span style="color:#64748b;">52W Low: <span class="recovery-val">₹447.00</span></span>
</div>
</div>
<div class="recovery-card anim-card delay-1">
<div class="recovery-header">
<span class="recovery-stock">Page Industries</span>
<span class="recovery-badge">+12.1% from low</span>
</div>
<div class="recovery-metrics">
<span style="color:#64748b;">Current: <span class="recovery-val">₹38,200.00</span></span>
<span style="color:#64748b;">52W Low: <span class="recovery-val">₹34,050.00</span></span>
</div>
</div>
<div class="recovery-card anim-card delay-2">
<div class="recovery-header">
<span class="recovery-stock">HDFC Bank</span>
<span class="recovery-badge">+5.4% from low</span>
</div>
<div class="recovery-metrics">
<span style="color:#64748b;">Current: <span class="recovery-val">₹1,440.00</span></span>
<span style="color:#64748b;">52W Low: <span class="recovery-val">₹1,366.50</span></span>
</div>
</div>
</div>
</div>
<!-- Decline Table Section -->
<div class="bento-card anim-card delay-3">
<div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:24px;">
<div>
<h2 style="font-size: 20px; font-weight: 800; color: #0f172a;">Stocks Near Their 52-Week Low</h2>
<p style="font-size: 13px; color: #64748b; margin-top:4px;">Tracking significant price weakness and total decline from yearly peaks.</p>
</div>
<a class="btn btn-outline" href="#" style="padding: 8px 16px; font-size: 13px;">View All Lows  →</a>
</div>
<div style="overflow-x: auto;">
<table class="table">
<thead>
<tr>
<th>COMPANY</th>
<th style="text-align:right;">CURRENT PRICE</th>
<th style="text-align:right;">52W LOW</th>
<th>DECLINE</th>
<th style="text-align:right;">DECLINE %</th>
</tr>
</thead>
<tbody>
<tr>
<td style="font-weight:600; color:#0f172a;">Navin Fluorine</td>
<td style="text-align:right; font-weight:600;">₹2,950.00</td>
<td style="text-align:right; color:#64748b;">₹2,910.00</td>
<td>
<div class="decline-bar-wrapper">
<div class="decline-bar-fill" style="width: 45%;"></div>
</div>
</td>
<td style="text-align:right; color:#e11d48; font-weight:600;">-45.2%</td>
</tr>
<tr>
<td style="font-weight:600; color:#0f172a;">Paytm</td>
<td style="text-align:right; font-weight:600;">₹380.25</td>
<td style="text-align:right; color:#64748b;">₹318.00</td>
<td>
<div class="decline-bar-wrapper">
<div class="decline-bar-fill" style="width: 62%;"></div>
</div>
</td>
<td style="text-align:right; color:#e11d48; font-weight:600;">-62.1%</td>
</tr>
<tr>
<td style="font-weight:600; color:#0f172a;">Aarti Industries</td>
<td style="text-align:right; font-weight:600;">₹590.50</td>
<td style="text-align:right; color:#64748b;">₹585.00</td>
<td>
<div class="decline-bar-wrapper">
<div class="decline-bar-fill" style="width: 38%;"></div>
</div>
</td>
<td style="text-align:right; color:#e11d48; font-weight:600;">-38.4%</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

<!-- Educational Section -->
<div class="anim-card delay-2" style="background: white; border-radius: 20px; border: 1px solid #e2e8f0; padding: 40px; margin-top: 60px; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
    <h2 style="font-size: 28px; font-weight: 800; color: #0f172a; margin-bottom: 24px; text-align: center;">Value vs. Value Trap</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        <div style="background: #f8fafc; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0;">
            <div style="width: 48px; height: 48px; background: #dcfce7; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            </div>
            <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Deep Value Opportunity</h3>
            <p style="font-size: 14px; color: #475569; line-height: 1.6;">A stock hitting a 52-week low might represent a deep value opportunity if the core business remains fundamentally sound. Temporary headwinds, sector rotation, or macroeconomic fears often cause irrational sell-offs, allowing investors to buy quality assets at a discount.</p>
        </div>
        <div style="background: #f8fafc; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0;">
            <div style="width: 48px; height: 48px; background: #fee2e2; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            </div>
            <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">The Value Trap</h3>
            <p style="font-size: 14px; color: #475569; line-height: 1.6;">However, sometimes cheap stocks are cheap for a reason. A "value trap" occurs when a stock looks inexpensive but continues to decline due to deteriorating financials, obsolete products, or poor management. Always check for structural weaknesses.</p>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="anim-card delay-3" style="margin-top: 60px;">
    <h2 style="font-size: 28px; font-weight: 800; color: #0f172a; margin-bottom: 32px; text-align: center;">Frequently Asked Questions</h2>
    <div class="faq-container" style="max-width: 800px; margin: 0 auto;">
        <details class="faq-item" name="faq-low" style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; margin-bottom: 16px; overflow: hidden;" open>
            <summary style="padding: 20px; font-size: 16px; font-weight: 700; color: #0f172a; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: #f8fafc; border-bottom: 1px solid transparent; transition: 0.2s;">
                Is it a good idea to buy a stock at its 52-week low?
                <span style="color: #3b82f6; font-size: 20px; font-weight: 300;">+</span>
            </summary>
            <div style="padding: 20px; font-size: 15px; color: #475569; line-height: 1.6; border-top: 1px solid #e2e8f0;">
                It depends entirely on why the stock has fallen. If the drop is due to temporary, resolvable issues or broader market panic, it could be a great buying opportunity. But if the company is losing market share, carrying massive debt, or facing regulatory action, "catching a falling knife" can lead to heavy losses.
            </div>
        </details>
        <details class="faq-item" name="faq-low" style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; margin-bottom: 16px; overflow: hidden;">
            <summary style="padding: 20px; font-size: 16px; font-weight: 700; color: #0f172a; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: #f8fafc; border-bottom: 1px solid transparent; transition: 0.2s;">
                How can I identify a trend reversal?
                <span style="color: #3b82f6; font-size: 20px; font-weight: 300;">+</span>
            </summary>
            <div style="padding: 20px; font-size: 15px; color: #475569; line-height: 1.6; border-top: 1px solid #e2e8f0;">
                Traders often look for technical indicators like bullish divergences on the RSI (Relative Strength Index), heavy buying volume at the lows, or "double bottom" chart patterns to confirm that the selling pressure has exhausted and a trend reversal is imminent.
            </div>
        </details>
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
