<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Compare NAV, Portfolio Holdings &amp; Returns | IPOSETU</title>
<meta name="description" content="Analyze Compare performance, expense ratio, risk ratings, and fund manager details on IPOSETU."/>
<link class="style-link" href="/iposetu/assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="/iposetu/assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/header.php'; ?>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
<div class="market-hero" style="background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: white; padding: 60px 40px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; animation: fadeUp 0.6s forwards;">
<div style="font-size: 12px; font-weight: 700; color: #5eead4; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Mutual Funds ? Compare</div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px; color: white;">COMPARE MUTUAL FUNDS</h1>
<p style="font-size: 16px; color: #ccfbf1; max-width: 600px; line-height: 1.6;">Side-by-side comparison of up to 3 funds to help you choose the best fit.</p>
<div style="position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(20,184,166,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none;"></div>
</div>
</div>

<main class="container" style="margin-bottom: 80px;">
<!-- Selection Area -->
<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 40px;">
<!-- Fund 1 -->
<div style="background: white; border: 2px solid var(--primary-color); border-radius: 12px; padding: 20px;">
<div style="font-size: 12px; font-weight: 700; color: #2563eb; text-transform: uppercase; margin-bottom: 12px;">Fund 1</div>
<h3 style="font-size: 18px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Parag Parikh Flexi Cap</h3>
<div style="font-size: 13px; color: #64748b;">Equity - Flexi Cap</div>
<button style="margin-top: 16px; padding: 6px 12px; border: 1px solid #cbd5e1; background: white; border-radius: 4px; font-size: 12px; font-weight: 700; cursor: pointer;">Change Fund</button>
</div>
<!-- Fund 2 -->
<div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 20px;">
<div style="font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-bottom: 12px;">Fund 2</div>
<h3 style="font-size: 18px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">HDFC Flexi Cap Fund</h3>
<div style="font-size: 13px; color: #64748b;">Equity - Flexi Cap</div>
<button style="margin-top: 16px; padding: 6px 12px; border: 1px solid #cbd5e1; background: white; border-radius: 4px; font-size: 12px; font-weight: 700; cursor: pointer;">Change Fund</button>
</div>
<!-- Fund 3 -->
<div style="background: #f8fafc; border: 1px dashed #cbd5e1; border-radius: 12px; padding: 20px; display: flex; align-items: center; justify-content: center; flex-direction: column; cursor: pointer;">
<div style="width: 40px; height: 40px; border-radius: 50%; background: white; border: 1px solid #cbd5e1; display: flex; align-items: center; justify-content: center; font-size: 20px; color: #2563eb; margin-bottom: 12px;">+</div>
<div style="font-size: 14px; font-weight: 700; color: #0f172a;">Add Fund to Compare</div>
</div>
</div>
<!-- Comparison Table -->
<div class="anim-card delay-1" style="background: white; border: 1px solid var(--border-color); border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
<table style="width: 100%; border-collapse: collapse; text-align: left;">
<tbody>
<!-- Basic Info -->
<tr style="background: #f8fafc;">
<td colspan="4" style="padding: 12px 24px; font-size: 14px; font-weight: 800; color: #0f172a; text-transform: uppercase; border-bottom: 1px solid var(--border-color);">Basic Details</td>
</tr>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 16px 24px; font-size: 14px; font-weight: 600; color: #64748b; width: 25%;">NAV</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #0f172a; width: 25%;">₹72.84</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #0f172a; width: 25%;">₹145.20</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #94a3b8; width: 25%;">--</td>
</tr>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 16px 24px; font-size: 14px; font-weight: 600; color: #64748b;">AUM (Size)</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #0f172a;">₹64,250 Cr</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #0f172a;">₹48,900 Cr</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #94a3b8;">--</td>
</tr>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 16px 24px; font-size: 14px; font-weight: 600; color: #64748b;">Expense Ratio</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 800; color: #10b981;">0.58% <span style="font-size:10px; background:#dcfce7; padding:2px 4px; border-radius:2px;">Lower</span></td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #0f172a;">0.85%</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #94a3b8;">--</td>
</tr>
<!-- Returns -->
<tr style="background: #f8fafc;">
<td colspan="4" style="padding: 12px 24px; font-size: 14px; font-weight: 800; color: #0f172a; text-transform: uppercase; border-bottom: 1px solid var(--border-color); border-top: 1px solid var(--border-color);">Performance</td>
</tr>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 16px 24px; font-size: 14px; font-weight: 600; color: #64748b;">1Y Return</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 800; color: #10b981;">38.4%</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #10b981;">35.2%</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #94a3b8;">--</td>
</tr>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 16px 24px; font-size: 14px; font-weight: 600; color: #64748b;">3Y Return</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 800; color: #10b981;">22.1%</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #10b981;">20.8%</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #94a3b8;">--</td>
</tr>
<!-- Risk -->
<tr style="background: #f8fafc;">
<td colspan="4" style="padding: 12px 24px; font-size: 14px; font-weight: 800; color: #0f172a; text-transform: uppercase; border-bottom: 1px solid var(--border-color); border-top: 1px solid var(--border-color);">Risk Measures</td>
</tr>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 16px 24px; font-size: 14px; font-weight: 600; color: #64748b;">Sharpe Ratio</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 800; color: #0f172a;">1.24</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #0f172a;">1.12</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #94a3b8;">--</td>
</tr>
<tr>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 600; color: #64748b;">Alpha</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 800; color: #10b981;">5.6%</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #10b981;">4.1%</td>
<td style="padding: 16px 24px; font-size: 14px; font-weight: 700; color: #94a3b8;">--</td>
</tr>
</tbody>
</table>
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
