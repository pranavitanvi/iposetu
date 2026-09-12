<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Holdings NAV, Portfolio Holdings &amp; Returns | IPOSETU</title>
<meta name="description" content="Analyze Holdings performance, expense ratio, risk ratings, and fund manager details on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
<div class="market-hero" style="background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: white; padding: 60px 40px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; animation: fadeUp 0.6s forwards;">
<div style="font-size: 12px; font-weight: 700; color: #5eead4; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Mutual Funds ? Holdings</div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px; color: white;">PORTFOLIO HOLDINGS</h1>
<p style="font-size: 16px; color: #ccfbf1; max-width: 600px; line-height: 1.6;">Analyze where mutual funds invest their money: top stocks, sectors, and asset types.</p>
<div style="position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(20,184,166,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none;"></div>
</div>
</div>

<!-- Ad -->
<div class="container" style="margin-bottom: 32px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 12px; text-align: center;">
<div style="font-size: 10px; font-weight: 700; color: #94a3b8; letter-spacing: 1px; margin-bottom: 8px; text-transform: uppercase;">ADVERTISEMENT</div>
<div style="width: 100%; height: 90px; background: #e2e8f0; border-radius: 4px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 13px;">970 × 90 Ad Space</div>
</div>
<main class="container" style="display: grid; grid-template-columns: 1fr 300px; gap: 40px; margin-bottom: 80px;">
<div class="main-content">
<h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 16px; text-transform: uppercase;">Example: HDFC Flexi Cap Fund Holdings</h3>
<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 32px;">
<div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 24px;">
<h4 style="font-size: 13px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-bottom: 16px;">Top Sectors</h4>
<ul style="list-style: none; padding: 0;">
<li style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid #f1f5f9; font-size: 14px; font-weight: 600;">
<span style="color: #0f172a;">Financial Services</span>
<span style="color: #2563eb;">28.4%</span>
</li>
<li style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid #f1f5f9; font-size: 14px; font-weight: 600;">
<span style="color: #0f172a;">Information Technology</span>
<span style="color: #2563eb;">12.1%</span>
</li>
<li style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid #f1f5f9; font-size: 14px; font-weight: 600;">
<span style="color: #0f172a;">Automobile</span>
<span style="color: #2563eb;">9.5%</span>
</li>
</ul>
</div>
<div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 24px;">
<h4 style="font-size: 13px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-bottom: 16px;">Market Cap</h4>
<div style="height: 100px; display: flex; flex-direction: column; justify-content: center; gap: 12px;">
<div>
<div style="display: flex; justify-content: space-between; font-size: 12px; font-weight: 700; margin-bottom: 4px;"><span>Large Cap</span><span>72%</span></div>
<div style="height: 8px; background: #e2e8f0; border-radius: 4px;"><div style="width: 72%; height: 100%; background: #2563eb; border-radius: 4px;"></div></div>
</div>
<div>
<div style="display: flex; justify-content: space-between; font-size: 12px; font-weight: 700; margin-bottom: 4px;"><span>Mid Cap</span><span>18%</span></div>
<div style="height: 8px; background: #e2e8f0; border-radius: 4px;"><div style="width: 18%; height: 100%; background: #3b82f6; border-radius: 4px;"></div></div>
</div>
<div>
<div style="display: flex; justify-content: space-between; font-size: 12px; font-weight: 700; margin-bottom: 4px;"><span>Small Cap</span><span>10%</span></div>
<div style="height: 8px; background: #e2e8f0; border-radius: 4px;"><div style="width: 10%; height: 100%; background: #93c5fd; border-radius: 4px;"></div></div>
</div>
</div>
</div>
</div>
<div style="border: 1px solid var(--border-color); border-radius: 12px; overflow-x: auto; background: white;">
<table style="width: 100%; border-collapse: collapse; text-align: left;">
<thead style="background: #f8fafc; border-bottom: 1px solid var(--border-color);">
<tr>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Stock Name</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Sector</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; text-align: right;">% of Portfolio</th>
</tr>
</thead>
<tbody>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 14px 16px; font-size: 14px; font-weight: 700; color: #0f172a;">HDFC Bank Ltd.</td>
<td style="padding: 14px 16px; font-size: 14px; color: #475569;">Financial Services</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 800; color: #0f172a; text-align: right;">9.2%</td>
</tr>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 14px 16px; font-size: 14px; font-weight: 700; color: #0f172a;">ICICI Bank Ltd.</td>
<td style="padding: 14px 16px; font-size: 14px; color: #475569;">Financial Services</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 800; color: #0f172a; text-align: right;">7.8%</td>
</tr>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 14px 16px; font-size: 14px; font-weight: 700; color: #0f172a;">Reliance Industries Ltd.</td>
<td style="padding: 14px 16px; font-size: 14px; color: #475569;">Oil, Gas &amp; Consumable Fuels</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 800; color: #0f172a; text-align: right;">6.1%</td>
</tr>
</tbody>
</table>
</div>
</div>
<aside class="sidebar">
<div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px; text-align: center; margin-bottom: 24px;">
<div style="font-size: 10px; font-weight: 700; color: #94a3b8; letter-spacing: 1px; margin-bottom: 8px; text-transform: uppercase;">ADVERTISEMENT</div>
<div style="width: 100%; height: 250px; background: #e2e8f0; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 13px;">300 × 250 Ad</div>
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
