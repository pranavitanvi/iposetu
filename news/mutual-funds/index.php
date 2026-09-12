<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
﻿<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Mutual Funds – Market News &amp; Analysis | IPOSETU</title>
<meta name="description" content="Read latest financial insights and market reporting on Mutual Funds on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=7.1" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<main class="container news-page-container">

<div class="news-page-header">
    <div style="font-size: 12px; font-weight: 800; color: #64748b; letter-spacing: 0.5px; margin-bottom: 8px;">FUND NEWSROOM</div>

<!-- Category Nav -->
<div class="news-category-nav">
    <a href="../">News Home</a>
    <a href="../market-today/">Market Today</a>
    <a href="../ipo/">IPO News</a>
    <a href="../sme-ipo/">SME IPO News</a>
    <a href="../stocks/">Stocks</a>
    <a href="../corporate/">Corporate</a>
    <a href="../mutual-funds/">Mutual Funds</a>
</div>

    <h1 class="news-page-title">MUTUAL FUND NEWS</h1>
    <div class="news-page-subtitle">Expert analysis, NFO updates, and AMC announcements.</div>
</div>

<div class="featured-story">
    <div class="featured-story-img">
        <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?q=80&w=600&auto=format&fit=crop" alt="Mutual Funds">
    </div>
    <div class="featured-story-content" style="padding: 32px;">
        <span class="news-badge mf">SIP</span>
        <h2 class="news-card-title"><a href="./dummy-mutual-funds-best-sips-for-2026/">Retail SIP inflows cross ₹23,000 crore in a single month</a></h2>
        <p class="news-card-summary">AMFI data reveals record-breaking retail participation as systematic investment plans continue to dominate equity inflows.</p>
        <div class="news-card-meta"><span>By Mutual Fund Desk</span><span>�</span><span>5 hours ago</span></div>
    </div>
</div>

<div style="display: flex; gap: 8px; margin-bottom: 32px; flex-wrap: wrap;">
    <a href="#" style="background: var(--accent-color); color: white; padding: 8px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-decoration: none;">All Funds</a>
    <a href="#" style="background: white; color: #475569; border: 1px solid #cbd5e1; padding: 8px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-decoration: none;">Equity</a>
    <a href="#" style="background: white; color: #475569; border: 1px solid #cbd5e1; padding: 8px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-decoration: none;">Debt</a>
    <a href="#" style="background: white; color: #475569; border: 1px solid #cbd5e1; padding: 8px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-decoration: none;">ELSS</a>
    <a href="#" style="background: white; color: #475569; border: 1px solid #cbd5e1; padding: 8px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-decoration: none;">Index Funds</a>
    <a href="#" style="background: white; color: #475569; border: 1px solid #cbd5e1; padding: 8px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-decoration: none;">AMC Updates</a>
</div>

<div style="display: grid; grid-template-columns: 1fr 300px; gap: 40px;">
    <div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 40px;">
            <div class="news-card">
                <div class="news-card-img-wrapper" style="aspect-ratio: 4/3;">
                    <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?q=80&w=600&auto=format&fit=crop" style="width:100%; height:100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="news-card-content">
                    <span class="news-badge mf">Equity Funds</span>
                    <h3 class="news-card-title"><a href="./hdfc-defence-fund-stops-lumpsum-investments/">HDFC Defence Fund stops lumpsum investments</a></h3>
                    <p class="news-card-summary">Due to excessive inflows and valuation concerns in the defence sector...</p>
                </div>
            </div>
            <div class="news-card">
                <div class="news-card-img-wrapper" style="aspect-ratio: 4/3;">
                    <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?q=80&w=600&auto=format&fit=crop" style="width:100%; height:100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="news-card-content">
                    <span class="news-badge mf">Index Funds</span>
                    <h3 class="news-card-title"><a href="./sbi-mutual-fund-launches-new-nifty-50-equal-weight-index-fund/">SBI Mutual Fund launches new Nifty 50 Equal Weight Index Fund</a></h3>
                    <p class="news-card-summary">The NFO aims to provide diversified exposure without market-cap bias...</p>
                </div>
            </div>
            <div class="news-card">
                <div class="news-card-img-wrapper" style="aspect-ratio: 4/3;">
                    <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?q=80&w=600&auto=format&fit=crop" style="width:100%; height:100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="news-card-content">
                    <span class="news-badge mf">Debt Funds</span>
                    <h3 class="news-card-title"><a href="./why-short-duration-debt-funds-look-attractive-now/">Why short duration debt funds look attractive now</a></h3>
                    <p class="news-card-summary">With interest rates peaking, experts recommend short duration funds...</p>
                </div>
            </div>
            <div class="news-card">
                <div class="news-card-img-wrapper" style="aspect-ratio: 4/3;">
                    <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?q=80&w=600&auto=format&fit=crop" style="width:100%; height:100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="news-card-content">
                    <span class="news-badge mf">ELSS</span>
                    <h3 class="news-card-title"><a href="./top-3-elss-funds-that-delivered-20-cagr-over-5-years/">Top 3 ELSS funds that delivered 20%+ CAGR over 5 years</a></h3>
                    <p class="news-card-summary">Save taxes under Section 80C while building long-term wealth...</p>
                </div>
            </div>
        </div>
    </div>
    
    <div>
        <h3 style="font-size: 16px; font-weight: 800; margin-bottom: 16px; border-bottom: 1px solid #e2e8f0; padding-bottom: 12px;">FUND MARKET SNAPSHOT</h3>
        <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 24px; margin-bottom: 32px;">
            <div style="margin-bottom: 16px;">
                <div style="font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Highest AUM AMC</div>
                <div style="font-size: 16px; font-weight: 800; color: #0f172a;">SBI Mutual Fund</div>
            </div>
            <div style="margin-bottom: 16px;">
                <div style="font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Top Performing Sector Fund (1Y)</div>
                <div style="font-size: 16px; font-weight: 800; color: #10b981;">Quant Infrastructure (+65%)</div>
            </div>
            <div style="margin-bottom: 16px;">
                <div style="font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Latest NFO</div>
                <div style="font-size: 16px; font-weight: 800; color: #0f172a;">Axis Multicap Fund</div>
            </div>
        </div>
        
        <div style="background: #f1f5f9; height: 300px; display: flex; align-items: center; justify-content: center; border: 1px dashed #cbd5e1; border-radius: 8px;">
            <div style="font-size: 14px; color: #64748b;">ADVERTISEMENT 300x250
    </div>
</div>
</div>
</div>

        <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 24px; margin-top: 24px;">
            <h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 16px; border-bottom: 2px solid #e2e8f0; padding-bottom: 8px;">STAY UPDATED</h3>
            <p style="font-size: 14px; color: #475569; margin-bottom: 16px;">Subscribe to our newsletter for daily market insights.</p>
            <form style="display: flex; gap: 8px;">
                <input type="email" placeholder="Email address" style="flex: 1; padding: 10px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px;">
                <button type="button" style="background: var(--primary-color); color: white; border: none; padding: 10px 16px; border-radius: 6px; font-weight: 600; cursor: pointer;">Subscribe</button>
            </form>
        </div>

</main>

<!-- Footer -->
<!-- Footer -->
<!-- Footer -->
<!-- Footer -->

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>
<!-- Position I: Sticky Bottom Ad Container -->
<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
