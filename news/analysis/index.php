<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
﻿<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Analysis – Market News &amp; Analysis | IPOSETU</title>
<meta name="description" content="Read latest financial insights and market reporting on Analysis on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=7.1" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<main class="container news-page-container">

<div class="news-page-header">
    <div style="font-size: 12px; font-weight: 800; color: #64748b; letter-spacing: 0.5px; margin-bottom: 8px;">MARKET INTELLIGENCE</div>

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

    <h1 class="news-page-title">EXPERT ANALYSIS</h1>
    <div class="news-page-subtitle">In-depth research, editorial insights, and sector outlooks from industry experts.</div>
</div>

<div class="featured-story">
    <div class="featured-story-img">
        <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?q=80&w=600&auto=format&fit=crop" alt="Analysis">
    </div>
    <div class="featured-story-content" style="padding: 32px;">
        <span class="news-badge stocks" style="background: rgba(255,255,255,0.1); color: #e2e8f0; border: 1px solid rgba(255,255,255,0.2);">Editor's Pick</span>
        <h2 class="news-card-title" style="color: white;"><a href="../article" style="color: white; text-decoration: none;">The great Indian CAPEX cycle: Are infrastructure stocks overvalued?</a></h2>
        <p class="news-card-summary" style="color: #cbd5e1;">A deep dive into the valuations of top infrastructure companies as government spending hits record highs.</p>
        <div class="news-card-meta" style="color: #94a3b8;"><span>By Amit Sharma, Chief Market Analyst</span><span>�</span><span>10 min read</span></div>
    </div>
</div>

<div style="display: grid; grid-template-columns: 1fr 300px; gap: 40px;">
    <div>
        <h3 style="font-size: 20px; font-weight: 800; border-bottom: 2px solid #e2e8f0; padding-bottom: 12px; margin-bottom: 24px;">LATEST INSIGHTS</h3>
        <div style="display: grid; grid-template-columns: 1fr; gap: 32px;">
            <div style="display: grid; grid-template-columns: 200px 1fr; gap: 24px; border-bottom: 1px solid #e2e8f0; padding-bottom: 32px;">
                <div style="background: #f1f5f9; border-radius: 8px; overflow: hidden; aspect-ratio: 1;"><img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?q=80&w=600&auto=format&fit=crop" style="width:100%; height:100%; object-fit: cover; border-radius: 8px;" style="width: 100%; height: 100%; object-fit: cover;"></div>
                <div>
                    <span class="news-badge ipo">IPO Analysis</span>
                    <h3 class="news-card-title" style="font-size: 20px; margin-bottom: 12px;"><a href="../article">Decoding the SME IPO frenzy: Genuine growth or speculative bubble?</a></h3>
                    <p class="news-card-summary" style="margin-bottom: 16px;">With SME IPOs oversubscribed by 500x regularly, we analyze the underlying fundamentals vs retail euphoria.</p>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 32px; height: 32px; background: #e2e8f0; border-radius: 50%;"></div>
                        <div style="font-size: 13px; font-weight: 700; color: #334155;">Dr. Rakesh Singh</div>
                    </div>
                </div>
            </div>
            
            <div style="display: grid; grid-template-columns: 200px 1fr; gap: 24px; border-bottom: 1px solid #e2e8f0; padding-bottom: 32px;">
                <div style="background: #f1f5f9; border-radius: 8px; overflow: hidden; aspect-ratio: 1;"><img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?q=80&w=600&auto=format&fit=crop" style="width:100%; height:100%; object-fit: cover; border-radius: 8px;" style="width: 100%; height: 100%; object-fit: cover;"></div>
                <div>
                    <span class="news-badge mf">Fund Analysis</span>
                    <h3 class="news-card-title" style="font-size: 20px; margin-bottom: 12px;"><a href="../article">Active vs Passive Funds: The shift in Indian retail behavior</a></h3>
                    <p class="news-card-summary" style="margin-bottom: 16px;">Why index funds are slowly eating into the AUM of large-cap active mutual funds.</p>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 32px; height: 32px; background: #e2e8f0; border-radius: 50%;"></div>
                        <div style="font-size: 13px; font-weight: 700; color: #334155;">Priya Desai</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="margin: 40px 0; background: #f1f5f9; padding: 24px; text-align: center; border: 1px dashed #cbd5e1; border-radius: 8px;">
            <div class="ad-slot ad-leaderboard" data-format="leaderboard"></div>
        </div>
    </div>
    
    <div>
        <h3 style="font-size: 16px; font-weight: 800; margin-bottom: 16px; text-transform: uppercase;">MARKET OUTLOOK</h3>
        <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 24px; margin-bottom: 32px;">
            <div style="text-align: center; margin-bottom: 24px;">
                <div style="font-size: 48px; margin-bottom: 8px;">📈</div>
                <div style="font-size: 18px; font-weight: 800; color: #10b981;">BULLISH</div>
                <div style="font-size: 13px; color: #64748b; margin-top: 4px;">Short-term outlook (1M)</div>
            </div>
            
            <div style="border-top: 1px solid #f1f5f9; padding-top: 16px; margin-bottom: 12px;">
                <div style="font-size: 12px; font-weight: 700; color: #64748b; margin-bottom: 4px; text-transform: uppercase;">Bullish Sectors</div>
                <div style="font-size: 14px; font-weight: 700; color: #0f172a;">IT, FMCG, Pharma</div>
            </div>
            <div style="border-top: 1px solid #f1f5f9; padding-top: 16px;">
                <div style="font-size: 12px; font-weight: 700; color: #64748b; margin-bottom: 4px; text-transform: uppercase;">Bearish Sectors</div>
                <div style="font-size: 14px; font-weight: 700; color: #0f172a;">PSU Banks, Metals</div>
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
