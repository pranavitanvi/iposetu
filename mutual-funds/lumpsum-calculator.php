<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Lumpsum Calculator NAV, Portfolio Holdings &amp; Returns | IPOSETU</title>
<meta name="description" content="Analyze Lumpsum Calculator performance, expense ratio, risk ratings, and fund manager details on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
<div class="market-hero" style="background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: white; padding: 60px 40px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; animation: fadeUp 0.6s forwards;">
<div style="font-size: 12px; font-weight: 700; color: #5eead4; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Mutual Funds → Calculators</div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px; color: white;">LUMPSUM CALCULATOR</h1>
<p style="font-size: 16px; color: #ccfbf1; max-width: 600px; line-height: 1.6;">Calculate wealth creation from a one-time investment.</p>
<div style="position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(20,184,166,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none;"></div>
</div>
</div>

<!-- Very similar layout to SIP with changed text and values. Omitted for brevity but structure is same -->
<main class="container" style="display: grid; grid-template-columns: 1fr 350px; gap: 40px; margin-bottom: 80px;">
<div class="main-content">
<!-- Calculator UI Block -->
<div class="anim-card delay-1" style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 32px; box-shadow: 0 4px 12px rgba(0,0,0,0.03); margin-bottom: 32px;">
<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
<!-- Controls -->
<div>
<!-- Total Investment -->
<div style="margin-bottom: 24px;">
<div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
<label style="font-size: 14px; font-weight: 700; color: #0f172a;">Total Investment</label>
<div style="font-size: 16px; font-weight: 800; color: #2563eb;">₹5,00,000</div>
</div>
<input max="5000000" min="1000" step="5000" style="width: 100%; height: 6px; background: #e2e8f0; border-radius: 3px; outline: none;" type="range" value="500000"/>
</div>
<!-- Expected Return -->
<div style="margin-bottom: 24px;">
<div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
<label style="font-size: 14px; font-weight: 700; color: #0f172a;">Expected Return (p.a)</label>
<div style="font-size: 16px; font-weight: 800; color: #2563eb;">12%</div>
</div>
<input max="30" min="1" step="1" style="width: 100%; height: 6px; background: #e2e8f0; border-radius: 3px; outline: none;" type="range" value="12"/>
</div>
<!-- Time Period -->
<div style="margin-bottom: 24px;">
<div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
<label style="font-size: 14px; font-weight: 700; color: #0f172a;">Time Period (Years)</label>
<div style="font-size: 16px; font-weight: 800; color: #2563eb;">10 Yrs</div>
</div>
<input max="40" min="1" step="1" style="width: 100%; height: 6px; background: #e2e8f0; border-radius: 3px; outline: none;" type="range" value="10"/>
</div>
<div style="margin-top: 32px; padding: 16px; background: #f8fafc; border-radius: 8px; border: 1px solid #e2e8f0;">
<div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
<span style="font-size: 14px; color: #64748b; font-weight: 600;">Invested Amount</span>
<span style="font-size: 14px; font-weight: 800; color: #0f172a;">₹5,00,000</span>
</div>
<div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
<span style="font-size: 14px; color: #64748b; font-weight: 600;">Est. Returns</span>
<span style="font-size: 14px; font-weight: 800; color: #10b981;">₹10,52,924</span>
</div>
<div style="height: 1px; background: #cbd5e1; margin: 12px 0;"></div>
<div style="display: flex; justify-content: space-between;">
<span style="font-size: 16px; color: #0f172a; font-weight: 800;">Total Value</span>
<span style="font-size: 20px; font-weight: 800; color: #2563eb;">₹15,52,924</span>
</div>
</div>
</div>
<!-- Visualization -->
<div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
<div style="position: relative; width: 220px; height: 220px; display: flex; align-items: center; justify-content: center;">
<svg height="220" style="transform: rotate(-90deg);" viewbox="0 0 36 36" width="220">
<!-- Invested Amount (32%) -->
<circle cx="18" cy="18" fill="none" r="15.915" stroke="#e2e8f0" stroke-width="6"></circle>
<circle cx="18" cy="18" fill="none" r="15.915" stroke="#2563eb" stroke-dasharray="32 68" stroke-width="6"></circle>
<!-- Estimated Returns (68%) -->
<circle cx="18" cy="18" fill="none" r="15.915" stroke="#10b981" stroke-dasharray="68 32" stroke-dashoffset="-32" stroke-width="6"></circle>
</svg>
<div style="position: absolute; text-align: center;">
<div style="font-size: 16px; font-weight: 800; color: #0f172a;">₹15.5L</div>
<div style="font-size: 11px; font-weight: 700; color: #64748b; text-transform: uppercase;">Total</div>
</div>
</div>
<div style="display: flex; gap: 16px; margin-top: 24px; font-size: 12px; font-weight: 600; color: #475569;">
<div style="display: flex; align-items: center; gap: 6px;"><div style="width:12px;height:12px;border-radius:2px;background:#2563eb;"></div> Invested</div>
<div style="display: flex; align-items: center; gap: 6px;"><div style="width:12px;height:12px;border-radius:2px;background:#10b981;"></div> Returns</div>
</div>
</div>
</div>
</div>
<div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 12px; text-align: center;">
<div style="font-size: 10px; font-weight: 700; color: #94a3b8; letter-spacing: 1px; margin-bottom: 8px; text-transform: uppercase;">ADVERTISEMENT</div>
<div style="width: 100%; height: 90px; background: #e2e8f0; border-radius: 4px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 13px;">970 × 90 Ad Space</div>
</div>
</div>
<aside class="sidebar">
<div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px; text-align: center;">
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
