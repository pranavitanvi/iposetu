<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Swp Calculator NAV, Portfolio Holdings &amp; Returns | IPOSETU</title>
<meta name="description" content="Analyze Swp Calculator performance, expense ratio, risk ratings, and fund manager details on IPOSETU."/>
<link class="style-link" href="/iposetu/assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="/iposetu/assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/header.php'; ?>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
<div class="market-hero" style="background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: white; padding: 60px 40px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; animation: fadeUp 0.6s forwards;">
<div style="font-size: 12px; font-weight: 700; color: #5eead4; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Mutual Funds → Calculators</div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px; color: white;">SWP CALCULATOR</h1>
<p style="font-size: 16px; color: #ccfbf1; max-width: 600px; line-height: 1.6;">Plan your retirement with Systematic Withdrawal Plans.</p>
<div style="position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(20,184,166,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none;"></div>
</div>
</div>

<main class="container" style="margin-bottom: 80px;">
<div class="anim-card delay-1" style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 32px; box-shadow: 0 4px 12px rgba(0,0,0,0.03); margin-bottom: 32px;">
<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
<!-- Controls -->
<div>
<!-- Total Investment -->
<div style="margin-bottom: 24px;">
<div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
<label style="font-size: 14px; font-weight: 700; color: #0f172a;">Total Investment</label>
<div style="font-size: 16px; font-weight: 800; color: #2563eb;">₹50,00,000</div>
</div>
<input max="50000000" min="100000" step="50000" style="width: 100%; height: 6px; background: #e2e8f0; border-radius: 3px; outline: none;" type="range" value="5000000"/>
</div>
<!-- Withdrawal per month -->
<div style="margin-bottom: 24px;">
<div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
<label style="font-size: 14px; font-weight: 700; color: #0f172a;">Withdrawal per month</label>
<div style="font-size: 16px; font-weight: 800; color: #2563eb;">₹30,000</div>
</div>
<input max="500000" min="1000" step="1000" style="width: 100%; height: 6px; background: #e2e8f0; border-radius: 3px; outline: none;" type="range" value="30000"/>
</div>
<!-- Expected Return -->
<div style="margin-bottom: 24px;">
<div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
<label style="font-size: 14px; font-weight: 700; color: #0f172a;">Expected Return (p.a)</label>
<div style="font-size: 16px; font-weight: 800; color: #2563eb;">8%</div>
</div>
<input max="30" min="1" step="1" style="width: 100%; height: 6px; background: #e2e8f0; border-radius: 3px; outline: none;" type="range" value="8"/>
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
<span style="font-size: 14px; color: #64748b; font-weight: 600;">Total Investment</span>
<span style="font-size: 14px; font-weight: 800; color: #0f172a;">₹50,00,000</span>
</div>
<div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
<span style="font-size: 14px; color: #64748b; font-weight: 600;">Total Withdrawal</span>
<span style="font-size: 14px; font-weight: 800; color: #10b981;">₹36,00,000</span>
</div>
<div style="height: 1px; background: #cbd5e1; margin: 12px 0;"></div>
<div style="display: flex; justify-content: space-between;">
<span style="font-size: 16px; color: #0f172a; font-weight: 800;">Final Balance</span>
<span style="font-size: 20px; font-weight: 800; color: #2563eb;">₹58,40,738</span>
</div>
</div>
</div>
<!-- Visualization -->
<div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
<div style="position: relative; width: 220px; height: 220px; display: flex; align-items: center; justify-content: center;">
<svg height="220" style="transform: rotate(-90deg);" viewbox="0 0 36 36" width="220">
<!-- Total Withdrawal (38%) -->
<circle cx="18" cy="18" fill="none" r="15.915" stroke="#e2e8f0" stroke-width="6"></circle>
<circle cx="18" cy="18" fill="none" r="15.915" stroke="#10b981" stroke-dasharray="38 62" stroke-width="6"></circle>
<!-- Final Balance (62%) -->
<circle cx="18" cy="18" fill="none" r="15.915" stroke="#2563eb" stroke-dasharray="62 38" stroke-dashoffset="-38" stroke-width="6"></circle>
</svg>
<div style="position: absolute; text-align: center;">
<div style="font-size: 16px; font-weight: 800; color: #0f172a;">₹94.4L</div>
<div style="font-size: 11px; font-weight: 700; color: #64748b; text-transform: uppercase;">Total Value</div>
</div>
</div>
<div style="display: flex; gap: 16px; margin-top: 24px; font-size: 12px; font-weight: 600; color: #475569;">
<div style="display: flex; align-items: center; gap: 6px;"><div style="width:12px;height:12px;border-radius:2px;background:#10b981;"></div> Withdrawn</div>
<div style="display: flex; align-items: center; gap: 6px;"><div style="width:12px;height:12px;border-radius:2px;background:#2563eb;"></div> Final Bal</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/footer.php'; ?>
<div id="sticky-bottom-ad-container"></div>
<script src="/iposetu/assets/js/components.js?v=6.1"></script>
<script src="/iposetu/assets/js/ad-manager.js?v=1.2"></script>
<script src="/iposetu/assets/js/main.js"></script>
</body>
</html>
