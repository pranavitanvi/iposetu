<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Expense Ratio NAV, Portfolio Holdings &amp; Returns | IPOSETU</title>
<meta name="description" content="Analyze Expense Ratio performance, expense ratio, risk ratings, and fund manager details on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
<div class="market-hero" style="background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: white; padding: 60px 40px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; animation: fadeUp 0.6s forwards;">
<div style="font-size: 12px; font-weight: 700; color: #5eead4; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Mutual Funds ? Expense Ratio</div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px; color: white;">EXPENSE RATIO COMPARISON</h1>
<p style="font-size: 16px; color: #ccfbf1; max-width: 600px; line-height: 1.6;">Find low-cost funds. A lower expense ratio means more of your money stays invested.</p>
<div style="position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(20,184,166,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none;"></div>
</div>
</div>

<main class="container" style="display: grid; grid-template-columns: 1fr; gap: 40px; margin-bottom: 80px;">
<div class="main-content">
<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 32px;">
<div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 20px; text-align: center;">
<div style="font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-bottom: 8px;">Avg. Regular Plan Expense</div>
<div style="font-size: 28px; font-weight: 800; color: #ef4444;">1.85%</div>
</div>
<div style="background: #f0fdf4; border: 1px solid #dcfce7; border-radius: 12px; padding: 20px; text-align: center;">
<div style="font-size: 12px; font-weight: 700; color: #166534; text-transform: uppercase; margin-bottom: 8px;">Avg. Direct Plan Expense</div>
<div style="font-size: 28px; font-weight: 800; color: #15803d;">0.75%</div>
</div>
<div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 20px; text-align: center;">
<div style="font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-bottom: 8px;">Avg. Index Fund Expense</div>
<div style="font-size: 28px; font-weight: 800; color: #2563eb;">0.20%</div>
</div>
</div>
<div style="border: 1px solid var(--border-color); border-radius: 12px; overflow-x: auto; background: white;">
<table style="width: 100%; border-collapse: collapse; text-align: left;">
<thead style="background: #f8fafc; border-bottom: 1px solid var(--border-color);">
<tr>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Fund Name (Direct Plan)</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Category</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; text-align: right;">Expense Ratio</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; text-align: right;">Category Average</th>
</tr>
</thead>
<tbody>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 14px 16px; font-size: 14px; font-weight: 700; color: #0f172a;">UTI Nifty 50 Index Fund</td>
<td style="padding: 14px 16px; font-size: 13px; color: #475569;">Index Fund</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 800; color: #10b981; text-align: right;">0.21%</td>
<td style="padding: 14px 16px; font-size: 14px; color: #64748b; text-align: right;">0.30%</td>
</tr>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 14px 16px; font-size: 14px; font-weight: 700; color: #0f172a;">Mirae Asset Large Cap Fund</td>
<td style="padding: 14px 16px; font-size: 13px; color: #475569;">Equity - Large Cap</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 800; color: #10b981; text-align: right;">0.52%</td>
<td style="padding: 14px 16px; font-size: 14px; color: #64748b; text-align: right;">1.05%</td>
</tr>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 14px 16px; font-size: 14px; font-weight: 700; color: #0f172a;">Parag Parikh Flexi Cap Fund</td>
<td style="padding: 14px 16px; font-size: 13px; color: #475569;">Equity - Flexi Cap</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 800; color: #0f172a; text-align: right;">0.58%</td>
<td style="padding: 14px 16px; font-size: 14px; color: #64748b; text-align: right;">0.95%</td>
</tr>
</tbody>
</table>
</div>
<div style="margin-top: 40px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 12px; text-align: center;">
<div style="font-size: 10px; font-weight: 700; color: #94a3b8; letter-spacing: 1px; margin-bottom: 8px; text-transform: uppercase;">ADVERTISEMENT</div>
<div style="width: 100%; height: 90px; background: #e2e8f0; border-radius: 4px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 13px;">970 × 90 Ad Space</div>
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
