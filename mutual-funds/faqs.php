<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Faqs NAV, Portfolio Holdings &amp; Returns | IPOSETU</title>
<meta name="description" content="Analyze Faqs performance, expense ratio, risk ratings, and fund manager details on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
<div class="market-hero" style="background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: white; padding: 60px 40px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; animation: fadeUp 0.6s forwards;">
<div style="font-size: 12px; font-weight: 700; color: #5eead4; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Mutual Funds → FAQs</div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px; color: white;">FREQUENTLY ASKED QUESTIONS</h1>
<p style="font-size: 16px; color: #ccfbf1; max-width: 600px; line-height: 1.6;">Everything you need to know about investing in mutual funds.</p>
<div style="position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(20,184,166,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none;"></div>
</div>
</div>

<main class="container" style="max-width: 800px; margin: 0 auto 80px auto;">
<!-- Search -->
<div style="margin-bottom: 40px; position: relative;">
<input placeholder="Search for a question..." style="width: 100%; padding: 16px 20px; padding-left: 50px; border: 1px solid #cbd5e1; border-radius: 12px; font-size: 16px; font-weight: 600; color: #0f172a; outline: none; box-shadow: 0 4px 6px rgba(0,0,0,0.02);" type="text"/>
<svg fill="none" height="24" stroke="#64748b" stroke-width="2" style="position: absolute; left: 16px; top: 16px;" viewbox="0 0 24 24" width="24"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg>
</div>
<!-- Accordions -->
<div style="display: flex; flex-direction: column; gap: 16px; margin-bottom: 40px;">
<div style="background:#f8fafc; padding:20px; border-radius:12px; border:1px solid #e2e8f0; margin-bottom:16px;">
<div onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';" style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;">
<div style="font-weight:700; font-size:16px; color:#0f172a;">What is the difference between Direct and Regular plans? <span style="color: #2563eb; font-size: 24px; line-height: 1;">+</span></div>
<svg fill="none" height="20" stroke="#94a3b8" stroke-width="2" style="transition:transform 0.2s;" viewbox="0 0 24 24" width="20"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</div>
<div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #cbd5e1; font-size:15px; color:#475569; line-height:1.6;">
<p style="font-size: 14px; color: #475569; line-height: 1.6; margin: 0; margin-top: 12px; border-top: 1px solid #e2e8f0; padding-top: 12px;">Direct plans are bought directly from the AMC without a broker, resulting in a lower expense ratio and higher returns. Regular plans include broker commissions.</p>
</div>
</div>
<div style="background:#f8fafc; padding:20px; border-radius:12px; border:1px solid #e2e8f0; margin-bottom:16px;">
<div onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';" style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;">
<div style="font-weight:700; font-size:16px; color:#0f172a;">How is taxation handled for Equity Funds? <span style="color: #2563eb; font-size: 24px; line-height: 1;">+</span></div>
<svg fill="none" height="20" stroke="#94a3b8" stroke-width="2" style="transition:transform 0.2s;" viewbox="0 0 24 24" width="20"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</div>
<div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #cbd5e1; font-size:15px; color:#475569; line-height:1.6;">
<p style="font-size: 14px; color: #475569; line-height: 1.6; margin: 0; margin-top: 12px; border-top: 1px solid #e2e8f0; padding-top: 12px;">Long Term Capital Gains (LTCG) over ₹1 Lakh in a financial year are taxed at 10% (12.5% in recent budgets) without indexation. Short Term Capital Gains (STCG) are taxed at 15% (or 20%).</p>
</div>
</div>
<div style="background:#f8fafc; padding:20px; border-radius:12px; border:1px solid #e2e8f0; margin-bottom:16px;">
<div onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';" style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;">
<div style="font-weight:700; font-size:16px; color:#0f172a;">What is a lock-in period? <span style="color: #2563eb; font-size: 24px; line-height: 1;">+</span></div>
<svg fill="none" height="20" stroke="#94a3b8" stroke-width="2" style="transition:transform 0.2s;" viewbox="0 0 24 24" width="20"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</div>
<div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #cbd5e1; font-size:15px; color:#475569; line-height:1.6;">
<p style="font-size: 14px; color: #475569; line-height: 1.6; margin: 0; margin-top: 12px; border-top: 1px solid #e2e8f0; padding-top: 12px;">Most mutual funds do not have a lock-in period, meaning you can withdraw anytime. However, ELSS (Tax Saving) funds have a mandatory 3-year lock-in period from the date of investment.</p>
</div>
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
