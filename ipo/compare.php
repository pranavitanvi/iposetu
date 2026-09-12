<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
﻿<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Compare – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Compare on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
    <style>
        .cmp-header { text-align: center; margin-bottom: 60px; }
        .cmp-selectors { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-bottom: 40px; }
        .cmp-select { width: 100%; padding: 16px; font-size: 16px; border: 2px solid #e2e8f0; border-radius: 8px; font-weight: 700; }
        .cmp-table { width: 100%; border-collapse: collapse; text-align: center; }
        .cmp-table th { padding: 20px; background: #0f172a; color: white; border: 1px solid #334155; }
        .cmp-table th:first-child { background: white; border: none; }
        .cmp-table td { padding: 20px; border: 1px solid #e2e8f0; font-size: 16px; }
        .cmp-table td:first-child { text-align: left; font-weight: 800; background: #f8fafc; }
        .winner { background: #ecfdf5 !important; border: 2px solid #10b981 !important; font-weight: 800; }
    </style>
    <div class="container" style="padding-top: 60px; padding-bottom: 80px;">
        <div class="cmp-header">
            <h1 style="font-size: 36px; font-weight: 800;">COMPARE IPOs</h1>
            <p style="color: #64748b; font-size: 16px;">Side-by-side comparison of issue metrics and financials.</p>
        </div>
        
        <div class="cmp-selectors">
            <div><select class="cmp-select"><option>Nexus Tech Innovations</option></select></div>
            <div><select class="cmp-select"><option>TechNova</option></select></div>
            <div><select class="cmp-select"><option>Select IPO 3...</option></select></div>
        </div>
        
        <div style="background:white; overflow:hidden;">
            <table class="cmp-table">
                <thead>
                    <tr>
                        <th style="width: 25%;"></th>
                        <th style="width: 25%;">Nexus Tech</th>
                        <th style="width: 25%;">TechNova</th>
                        <th style="width: 25%;">--</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Issue Size</td> <td>₹540 Cr</td> <td class="winner">₹1,200 Cr</td> <td>-</td></tr>
                    <tr><td>Price Band</td> <td>₹450 - 475</td> <td>₹450</td> <td>-</td></tr>
                    <tr><td>P/E Ratio</td> <td class="winner">24.2x</td> <td>32.5x</td> <td>-</td></tr>
                    <tr><td>Retail Sub</td> <td>8.4x</td> <td>2.4x</td> <td>-</td></tr>
                    <tr><td>GMP</td> <td class="winner">+32%</td> <td>-5%</td> <td>-</td></tr>
                </tbody>
            </table>
        </div>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
