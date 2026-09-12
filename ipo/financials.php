<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Financials – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Financials on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
    <style>
        .fin-selector { background: #0f172a; padding: 30px; text-align: center; border-radius: 12px; margin-bottom: 40px; color: white; }
        .fin-select-input { padding: 12px 20px; font-size: 16px; border-radius: 8px; border: none; min-width: 300px; }
        .fin-kpi-grid { display: grid; grid-template-columns: repeat(6, 1fr); gap: 16px; margin-bottom: 40px; }
        .fin-kpi-card { background: white; border: 1px solid #e2e8f0; padding: 16px; border-radius: 8px; text-align: center; }
        .fin-chart-row { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 40px; }
        .fin-chart-box { background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px; height: 300px; display: flex; align-items: center; justify-content: center; color: #94a3b8; }
        .fin-table { width: 100%; border-collapse: collapse; }
        .fin-table th { background: #f8fafc; padding: 16px; text-align: right; border-bottom: 2px solid #e2e8f0; }
        .fin-table th:first-child { text-align: left; }
        .fin-table td { padding: 16px; text-align: right; border-bottom: 1px solid #e2e8f0; }
        .fin-table td:first-child { text-align: left; font-weight: 700; }
    </style>
    <div class="container" style="padding-top: 40px; padding-bottom: 80px;">
        <h1 style="font-size: 32px; font-weight: 800; margin-bottom: 16px;">FINANCIAL DASHBOARD</h1>
        
        <div class="fin-selector">
            <h2 style="font-size: 20px; margin-bottom: 16px;">Select Company to View Financials</h2>
            <select class="fin-select-input">
                <option>Nexus Tech Innovations Ltd</option>
                <option>Aura Energy SME</option>
            </select>
        </div>
        
        <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 20px;">KEY PERFORMANCE INDICATORS (FY25)</h3>
        <div class="fin-kpi-grid">
            <div class="fin-kpi-card"><div style="font-size:11px; color:#64748b; font-weight:700;">REVENUE</div><div style="font-size:20px; font-weight:800; margin-top:8px;">₹1,420 Cr</div></div>
            <div class="fin-kpi-card"><div style="font-size:11px; color:#64748b; font-weight:700;">EBITDA</div><div style="font-size:20px; font-weight:800; margin-top:8px;">₹310 Cr</div></div>
            <div class="fin-kpi-card"><div style="font-size:11px; color:#64748b; font-weight:700;">PAT</div><div style="font-size:20px; font-weight:800; margin-top:8px; color:#10b981;">₹205 Cr</div></div>
            <div class="fin-kpi-card"><div style="font-size:11px; color:#64748b; font-weight:700;">EPS</div><div style="font-size:20px; font-weight:800; margin-top:8px;">₹18.40</div></div>
            <div class="fin-kpi-card"><div style="font-size:11px; color:#64748b; font-weight:700;">ROE</div><div style="font-size:20px; font-weight:800; margin-top:8px;">22.5%</div></div>
            <div class="fin-kpi-card"><div style="font-size:11px; color:#64748b; font-weight:700;">ROCE</div><div style="font-size:20px; font-weight:800; margin-top:8px;">28.4%</div></div>
        </div>
        
        <div style="display:grid; grid-template-columns: 3fr 1fr; gap:40px;">
            <div>
                <div class="fin-chart-row">
                    <div><h4 style="font-weight:800; margin-bottom:12px;">Revenue Growth</h4><div class="fin-chart-box">[ Bar Chart ]</div></div>
                    <div><h4 style="font-weight:800; margin-bottom:12px;">Profitability Margins</h4><div class="fin-chart-box">[ Line Chart ]</div></div>
                </div>
                
                                
                <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 20px;">INCOME STATEMENT (? in Crores)</h3>
                <div style="background:white; border:1px solid #e2e8f0; border-radius:12px; overflow:auto; margin-bottom:40px;">
                    <table class="fin-table">
                        <thead><tr><th>Particulars</th><th>FY25</th><th>FY24</th><th>FY23</th><th>YoY Growth</th></tr></thead>
                        <tbody>
                            <tr><td>Revenue from Operations</td><td>1,420.50</td><td>1,050.20</td><td>840.10</td><td style="color:#10b981;">+35.2%</td></tr>
                            <tr><td>Total Expenses</td><td>1,110.50</td><td>840.10</td><td>690.30</td><td>+32.1%</td></tr>
                            <tr style="background:#f8fafc;"><td>EBITDA</td><td>310.00</td><td>210.10</td><td>149.80</td><td style="color:#10b981;">+47.5%</td></tr>
                            <tr><td>Profit After Tax (PAT)</td><td>205.00</td><td>145.50</td><td>102.20</td><td style="color:#10b981;">+40.8%</td></tr>
                        </tbody>
                    </table>
                </div>
                
                <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 20px;">BALANCE SHEET & CASH FLOW</h3>
                <div style="background:white; border:1px solid #e2e8f0; border-radius:12px; overflow:auto;">
                    <table class="fin-table">
                        <thead><tr><th>Particulars</th><th>FY25</th><th>FY24</th><th>FY23</th></tr></thead>
                        <tbody>
                            <tr><td>Total Assets</td><td>1,850.40</td><td>1,420.10</td><td>1,110.50</td></tr>
                            <tr><td>Total Equity</td><td>910.20</td><td>650.40</td><td>480.20</td></tr>
                            <tr style="background:#f8fafc;"><td>Net Cash Flow from Operations</td><td>245.50</td><td>185.20</td><td>115.40</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <aside>
                <div style="background:#f1f5f9; height:600px; display:flex; align-items:center; justify-content:center; border:1px solid #e2e8f0; font-weight:700;">AD 300x600</div>
            </aside>
        </div>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
