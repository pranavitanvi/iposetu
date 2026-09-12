<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Dashboard NAV, Portfolio Holdings &amp; Returns | IPOSETU</title>
<meta name="description" content="Analyze Dashboard performance, expense ratio, risk ratings, and fund manager details on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
<div class="market-hero" style="background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: white; padding: 60px 40px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; animation: fadeUp 0.6s forwards;">
<div style="font-size: 12px; font-weight: 700; color: #5eead4; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Mutual Funds ? Dashboard</div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px; color: white;">MUTUAL FUND DASHBOARD</h1>
<p style="font-size: 16px; color: #ccfbf1; max-width: 600px; line-height: 1.6;">High-level analytics and market performance across all mutual fund categories.</p>
<div style="position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(20,184,166,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none;"></div>
</div>
</div>

<!-- Ad -->
<div class="container" style="margin-bottom: 32px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 12px; text-align: center;">
<div style="font-size: 10px; font-weight: 700; color: #94a3b8; letter-spacing: 1px; margin-bottom: 8px; text-transform: uppercase;">ADVERTISEMENT</div>
<div style="width: 100%; height: 90px; background: #e2e8f0; border-radius: 4px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 13px;">970 � 90 Ad Space</div>
</div>
<main class="container" style="display: grid; grid-template-columns: 1fr 300px; gap: 40px; margin-bottom: 80px;">
<div class="main-content">
<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 40px;">
<!-- Chart 1 -->
<div class="anim-card delay-1" style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 24px; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
<h3 style="font-size: 14px; font-weight: 800; color: #0f172a; margin-bottom: 16px; text-transform: uppercase;">Category Average Returns (1Y)</h3>
<div style="height: 200px; display: flex; align-items: flex-end; justify-content: space-between; gap: 8px; padding-top: 20px; border-bottom: 1px solid #e2e8f0;">
<div style="width: 100%; height: 85%; background: #2563eb; border-radius: 4px 4px 0 0; position: relative;">
<div style="position: absolute; top: -20px; width: 100%; text-align: center; font-size: 11px; font-weight: 700; color: #0f172a;">42%</div>
</div>
<div style="width: 100%; height: 60%; background: #3b82f6; border-radius: 4px 4px 0 0; position: relative;">
<div style="position: absolute; top: -20px; width: 100%; text-align: center; font-size: 11px; font-weight: 700; color: #0f172a;">28%</div>
</div>
<div style="width: 100%; height: 40%; background: #60a5fa; border-radius: 4px 4px 0 0; position: relative;">
<div style="position: absolute; top: -20px; width: 100%; text-align: center; font-size: 11px; font-weight: 700; color: #0f172a;">18%</div>
</div>
<div style="width: 100%; height: 25%; background: #10b981; border-radius: 4px 4px 0 0; position: relative;">
<div style="position: absolute; top: -20px; width: 100%; text-align: center; font-size: 11px; font-weight: 700; color: #0f172a;">7%</div>
</div>
</div>
<div style="display: flex; justify-content: space-between; gap: 8px; margin-top: 8px; font-size: 10px; font-weight: 700; color: #64748b; text-align: center; text-transform: uppercase;">
<div style="width: 100%;">Small</div>
<div style="width: 100%;">Mid</div>
<div style="width: 100%;">Large</div>
<div style="width: 100%;">Debt</div>
</div>
</div>
<!-- Chart 2 -->
<div class="anim-card delay-3" style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 24px; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
<h3 style="font-size: 14px; font-weight: 800; color: #0f172a; margin-bottom: 16px; text-transform: uppercase;">AUM Distribution</h3>
<div style="height: 200px; display: flex; align-items: center; justify-content: center; position: relative;">
<svg height="160" style="transform: rotate(-90deg);" viewbox="0 0 36 36" width="160">
<circle cx="18" cy="18" fill="none" r="15.915" stroke="#f1f5f9" stroke-width="6"></circle>
<circle cx="18" cy="18" fill="none" r="15.915" stroke="#2563eb" stroke-dasharray="55 45" stroke-width="6"></circle>
<circle cx="18" cy="18" fill="none" r="15.915" stroke="#10b981" stroke-dasharray="25 75" stroke-dashoffset="-55" stroke-width="6"></circle>
<circle cx="18" cy="18" fill="none" r="15.915" stroke="#f59e0b" stroke-dasharray="20 80" stroke-dashoffset="-80" stroke-width="6"></circle>
</svg>
<div style="position: absolute; text-align: center;">
<div style="font-size: 20px; font-weight: 800; color: #0f172a;">₹48T</div>
<div style="font-size: 10px; font-weight: 700; color: #64748b; text-transform: uppercase;">Total AUM</div>
</div>
</div>
<div style="display: flex; justify-content: center; gap: 16px; margin-top: 16px; font-size: 11px; font-weight: 600; color: #475569;">
<div><span style="color: #2563eb;">■</span> Equity (55%)</div>
<div><span style="color: #10b981;">■</span> Debt (25%)</div>
<div><span style="color: #f59e0b;">■</span> Other (20%)</div>
</div>
</div>
</div>
<!-- Dashboard Table -->
<section style="margin-bottom: 40px;">
<h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 16px; text-transform: uppercase;">Latest NFOs (New Fund Offers)</h3>
<div style="border: 1px solid var(--border-color); border-radius: 12px; overflow-x: auto; background: white;">
<table style="width: 100%; border-collapse: collapse; text-align: left;">
<thead style="background: #f8fafc; border-bottom: 1px solid var(--border-color);">
<tr>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Fund Name</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Category</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Open Date</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Close Date</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; text-align: right;">Action</th>
</tr>
</thead>
<tbody>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 14px 16px; font-size: 14px; font-weight: 700; color: #0f172a;">Zerodha Nifty LargeMidcap 250 Index Fund</td>
<td style="padding: 14px 16px; font-size: 13px; color: #475569;">Equity - Index</td>
<td style="padding: 14px 16px; font-size: 13px; font-weight: 600; color: #0f172a;">15 Oct 2026</td>
<td style="padding: 14px 16px; font-size: 13px; font-weight: 600; color: #0f172a;">25 Oct 2026</td>
<td style="padding: 14px 16px; text-align: right;"><button style="padding: 6px 12px; background: var(--primary-color); color: white; border: none; border-radius: 4px; font-size: 12px; font-weight: 700; cursor: pointer;">View</button></td>
</tr>
</tbody>
</table>
</div>
</section>
</div>
<aside class="sidebar">
<div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px; text-align: center; margin-bottom: 24px;">
<div style="font-size: 10px; font-weight: 700; color: #94a3b8; letter-spacing: 1px; margin-bottom: 8px; text-transform: uppercase;">ADVERTISEMENT</div>
<div style="width: 100%; height: 250px; background: #e2e8f0; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 13px;">300 � 250 Ad</div>
</div>
<div class="card anim-card delay-2" style="padding: 24px; border-radius: 12px; border-top: 4px solid var(--primary-color);">
<h3 style="font-size: 14px; font-weight: 800; margin-bottom: 16px; color: #0f172a; text-transform: uppercase;">Quick Links</h3>
<div style="display: flex; flex-direction: column; gap: 12px;">
<a href="sip-calculator" style="font-size: 13px; font-weight: 600; color: #2563eb; text-decoration: none;">? SIP Calculator</a>
<a href="compare" style="font-size: 13px; font-weight: 600; color: #2563eb; text-decoration: none;">? Compare Funds</a>
<a href="top-performers" style="font-size: 13px; font-weight: 600; color: #2563eb; text-decoration: none;">? View Top Performers</a>
</div>
</div>
</aside>
</main>
<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>
<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
