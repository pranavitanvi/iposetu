<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
﻿<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Guide – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Guide on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
<style>
    .anim-fade-up { opacity: 0; transform: translateY(20px); transition: opacity 0.5s ease-out, transform 0.5s ease-out; }
    .anim-fade-up.anim-active { opacity: 1; transform: translateY(0); }
    .anim-scale-in { opacity: 0; transform: scale(0.95); transition: opacity 0.4s ease-out, transform 0.4s ease-out; }
    .anim-scale-in.anim-active { opacity: 1; transform: scale(1); }
    .anim-slide-left { opacity: 0; transform: translateX(-30px); transition: all 0.5s ease-out; }
    .anim-slide-left.anim-active { opacity: 1; transform: translateX(0); }
    .anim-slide-right { opacity: 0; transform: translateX(30px); transition: all 0.5s ease-out; }
    .anim-slide-right.anim-active { opacity: 1; transform: translateX(0); }
    .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .card-hover:hover { transform: translateY(-4px); box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
    @media (prefers-reduced-motion: reduce) {
        .anim-fade-up, .anim-scale-in, .anim-slide-left, .anim-slide-right, .card-hover {
            transition: none !important; opacity: 1 !important; transform: none !important;
        }
    }
</style>

    <style>
        .roadmap { max-width: 1200px; margin: 0 auto; position: relative; padding: 40px 0; }
        .roadmap::before { content: ''; position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 4px; height: 100%; background: #e2e8f0; z-index: 1; }
        .rm-card { background: white; border: 2px solid #e2e8f0; border-radius: 12px; padding: 24px; position: relative; z-index: 2; margin-bottom: 40px; width: calc(50% - 40px); clear: both; transition: 0.3s; }
        .rm-card:hover { border-color: #3b82f6; transform: translateY(-4px); box-shadow: 0 10px 25px rgba(59,130,246,0.1); }
        .rm-card:nth-child(odd) { float: left; margin-right: 40px; }
        .rm-card:nth-child(even) { float: right; margin-left: 40px; }
        .rm-card::after { content: ''; position: absolute; top: 30px; width: 40px; height: 4px; background: #e2e8f0; z-index: -1; }
        .rm-card:nth-child(odd)::after { right: -40px; }
        .rm-card:nth-child(even)::after { left: -40px; }
        .rm-num { position: absolute; top: 16px; background: #0f172a; color: white; font-weight: 800; width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
        .rm-card:nth-child(odd) .rm-num { right: -58px; }
        .rm-card:nth-child(even) .rm-num { left: -58px; }
        .clearfix::after { content: ""; clear: both; display: table; }
    </style>
    <div class="container" style="padding-top: 40px; padding-bottom: 80px;">
        <div style="text-align:center; margin-bottom: 60px;" class="anim-fade-up">
            <h1 style="font-size: 36px; font-weight: 800;">COMPLETE SME IPO GUIDE</h1>
            <p style="font-size:18px; color:#64748b; margin-top:8px;">Your visual roadmap to understanding and investing in SME IPOs.</p>
        </div>
        
        <div class="roadmap clearfix anim-fade-up">
            <div class="rm-card">
                <div class="rm-num">01</div>
                <h3 style="font-size:18px; font-weight:800; margin-bottom:8px;">What is SME IPO?</h3>
                <p style="font-size:14px; color:#64748b;">Small and Medium Enterprises list on BSE SME or NSE Emerge to raise capital.</p>
            </div>
            <div class="rm-card">
                <div class="rm-num">02</div>
                <h3 style="font-size:18px; font-weight:800; margin-bottom:8px;">High Minimum Investment</h3>
                <p style="font-size:14px; color:#64748b;">Unlike mainboard IPOs (₹15k), SME IPOs require a minimum investment of ₹1 Lakh+.</p>
            </div>
            <div class="rm-card">
                <div class="rm-num">03</div>
                <h3 style="font-size:18px; font-weight:800; margin-bottom:8px;">Lot Size Trading</h3>
                <p style="font-size:14px; color:#64748b;">Even after listing, SME shares must be bought and sold in lots (e.g., 1000 shares), reducing liquidity.</p>
            </div>
            <div class="rm-card">
                <div class="rm-num">04</div>
                <h3 style="font-size:18px; font-weight:800; margin-bottom:8px;">High Risk, High Reward</h3>
                <p style="font-size:14px; color:#64748b;">SMEs can offer massive listing gains, but they also carry a much higher risk of capital loss.</p>
            </div>
        </div>
        
                
        <div style="max-width:800px; margin: 0 auto;" class="anim-fade-up">
            <h2 style="font-size: 24px; font-weight: 800; text-align:center; margin-bottom: 24px;">SME VS MAINBOARD IPO</h2>
            <table style="width:100%; border-collapse:collapse; background:white; border:1px solid #e2e8f0; border-radius:12px; overflow:hidden;">
                <thead>
                    <tr style="background:#0f172a; color:white;">
                        <th style="padding:16px; text-align:left;">Feature</th>
                        <th style="padding:16px; text-align:left;">SME IPO</th>
                        <th style="padding:16px; text-align:left;">Mainboard IPO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom:1px solid #e2e8f0;">
                        <td style="padding:16px; font-weight:700;">Min Investment</td><td style="padding:16px;">₹1 Lakh+</td><td style="padding:16px;">~₹15,000</td>
                    </tr>
                    <tr style="border-bottom:1px solid #e2e8f0;">
                        <td style="padding:16px; font-weight:700;">Post-Listing Trading</td><td style="padding:16px;">Traded in Lots</td><td style="padding:16px;">1 Share minimum</td>
                    </tr>
                    <tr>
                        <td style="padding:16px; font-weight:700;">Risk</td><td style="padding:16px; color:#ef4444; font-weight:700;">High</td><td style="padding:16px; color:#f59e0b; font-weight:700;">Moderate</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) { entry.target.classList.add('anim-active'); }
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.anim-fade-up, .anim-scale-in, .anim-slide-left, .anim-slide-right').forEach(el => observer.observe(el));
    });
    </script>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
