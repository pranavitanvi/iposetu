<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Reports – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Reports on IPOSETU."/>
<link class="style-link" href="/iposetu/assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="/iposetu/assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/header.php'; ?>
    <style>
        .report-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; margin-top: 40px; }
        .doc-card { background: white; border: 1px solid #e2e8f0; padding: 24px; border-radius: 12px; text-align: center; }
        .doc-icon { width: 60px; height: 60px; background: #fee2e2; color: #ef4444; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; margin: 0 auto 16px auto; }
    </style>
    <div class="container" style="padding-top: 40px; padding-bottom: 80px;">
        <h1 style="font-size: 36px; font-weight: 800; margin-bottom: 24px;">IPO REPORT LIBRARY</h1>
        
        <div style="display:flex; gap:16px; margin-bottom: 40px;">
            <select style="padding:12px; border-radius:8px; border:1px solid #cbd5e1;"><option>All Categories</option><option>DRHP</option><option>RHP</option></select>
            <input type="text" placeholder="Search company..." style="padding:12px; border-radius:8px; border:1px solid #cbd5e1; flex:1;">
        </div>
        
        <div class="report-grid">
            <div class="doc-card">
                <div class="doc-icon">📄</div>
                <h3 style="font-weight:700; margin-bottom:8px;">Nexus Tech</h3>
                <div style="font-size:12px; color:#64748b; margin-bottom:16px;">Red Herring Prospectus</div>
                <button class="btn btn-outline" style="width:100%; padding:8px;">Download PDF</button>
            </div>
            <div class="doc-card">
                <div class="doc-icon">📄</div>
                <h3 style="font-weight:700; margin-bottom:8px;">Aura Energy</h3>
                <div style="font-size:12px; color:#64748b; margin-bottom:16px;">Draft RHP (DRHP)</div>
                <button class="btn btn-outline" style="width:100%; padding:8px;">Download PDF</button>
            </div>
        </div>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="/iposetu/assets/js/components.js?v=6.1"></script>
<script src="/iposetu/assets/js/ad-manager.js?v=1.2"></script>
<script src="/iposetu/assets/js/main.js"></script>
</body>
</html>
