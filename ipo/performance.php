<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Performance – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Performance on IPOSETU."/>
<link class="style-link" href="/iposetu/assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="/iposetu/assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/header.php'; ?>
    <style>
        .perf-kpi-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin: 40px 0; }
        .perf-kpi { background: white; border: 1px solid #e2e8f0; padding: 24px; border-radius: 12px; }
        .perf-val { font-size: 32px; font-weight: 800; margin-top: 8px; }
    </style>
    <div class="container" style="padding-top: 60px; padding-bottom: 80px;">
        <h1 style="font-size: 36px; font-weight: 800; margin-bottom: 12px;">IPO PERFORMANCE ANALYTICS</h1>
        <p style="color: #64748b; font-size: 16px;">Comprehensive analysis of post-listing market returns.</p>
        
        <div class="perf-kpi-grid" id="perf-kpi-grid">
            <div class="perf-kpi"><div style="font-size:12px; font-weight:700; color:#64748b;">AVERAGE LISTING GAIN</div><div class="perf-val" id="kpi-avg-gain">--</div></div>
            <div class="perf-kpi"><div style="font-size:12px; font-weight:700; color:#64748b;">BEST IPO</div><div class="perf-val" id="kpi-best-gain">--</div><div style="font-size:13px; font-weight:600; margin-top:4px;" id="kpi-best-name">--</div></div>
            <div class="perf-kpi"><div style="font-size:12px; font-weight:700; color:#64748b;">WORST IPO</div><div class="perf-val" id="kpi-worst-gain">--</div><div style="font-size:13px; font-weight:600; margin-top:4px;" id="kpi-worst-name">--</div></div>
            <div class="perf-kpi"><div style="font-size:12px; font-weight:700; color:#64748b;">AVERAGE CURRENT RETURN</div><div class="perf-val" id="kpi-avg-current">--</div></div>
        </div>
        
        <div style="display:grid; grid-template-columns: 3fr 1fr; gap:40px;">
            <div>
                <h2 style="font-size: 20px; font-weight: 800; margin-bottom: 24px;">HISTORICAL PERFORMANCE TREND</h2>
                <div style="height:400px; background:white; border:1px solid #e2e8f0; border-radius:12px; display:flex; align-items:center; justify-content:center; color:#64748b; margin-bottom:40px;">
                    [ Large Performance Bar/Line Chart Dashboard ]
                </div>
                
                <div style="display:grid; grid-template-columns: 1fr 1fr; gap:24px; margin-bottom:40px;">
                    <div>
                        <h3 style="font-size: 16px; font-weight: 800; margin-bottom: 16px;">GAIN DISTRIBUTION</h3>
                        <div style="height:250px; background:white; border:1px solid #e2e8f0; border-radius:12px; display:flex; align-items:center; justify-content:center; color:#94a3b8; font-size:12px;">[ Histogram ]</div>
                    </div>
                    <div>
                        <h3 style="font-size: 16px; font-weight: 800; margin-bottom: 16px;">MAINBOARD VS SME</h3>
                        <div style="height:250px; background:white; border:1px solid #e2e8f0; border-radius:12px; display:flex; align-items:center; justify-content:center; color:#94a3b8; font-size:12px;">[ Comparison Chart ]</div>
                    </div>
                </div>
                
                <h2 style="font-size: 20px; font-weight: 800; margin-bottom: 24px;">PERFORMANCE DATA TABLE</h2>
                <div style="background:white; border:1px solid #e2e8f0; border-radius:12px; overflow:hidden;">
                    <table style="width:100%; border-collapse:collapse; text-align:left;">
                        <thead>
                            <tr style="background:#f8fafc; border-bottom:1px solid #e2e8f0;">
                                <th style="padding:16px;">IPO</th>
                                <th style="padding:16px;">Type</th>
                                <th style="padding:16px;">Issue Size</th>
                                <th style="padding:16px;">Listing Gain</th>
                                <th style="padding:16px;">Current Return</th>
                            </tr>
                        </thead>
                        <tbody id="perf-table-body">
                            <tr><td colspan="5" style="padding:16px; text-align:center; color:#64748b;">Loading performance data...</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <aside>
                <div style="background:#f1f5f9; height:250px; display:flex; align-items:center; justify-content:center; border:1px solid #e2e8f0; font-weight:700;">AD 300x250</div>
            </aside>
        </div>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="/iposetu/assets/js/components.js?v=6.1"></script>
<script src="/iposetu/assets/js/ad-manager.js?v=1.2"></script>
<script src="/iposetu/assets/js/main.js"></script>
<script>
</body>
</html>
