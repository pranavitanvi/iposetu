<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
﻿<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Reviews – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Reviews on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<main class="page-animate">
    <style>
        @keyframes fadeInScale { 0% { opacity: 0; transform: scale(0.98); } 100% { opacity: 1; transform: scale(1); } }
        .page-animate { animation: fadeInScale 0.6s ease-out; font-family: 'Inter', sans-serif; background: #f8fafc; padding-bottom: 80px; }
        
        /* Hero Section */
        .reviews-hero { background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); color: white; padding: 80px 24px 60px 24px; position: relative; overflow: hidden; border-bottom: 5px solid #6366f1; }
        .reviews-hero::before { content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, transparent 60%); z-index: 0; }
        .hero-inner { max-width: 1200px; margin: 0 auto; position: relative; z-index: 1; display: grid; grid-template-columns: 1fr 350px; gap: 40px; align-items: center; }
        .hero-title { font-size: 48px; font-weight: 900; line-height: 1.1; margin-bottom: 20px; letter-spacing: -1px; }
        .hero-subtitle { font-size: 18px; color: #94a3b8; line-height: 1.6; margin-bottom: 30px; }
        
        /* Hero Stats Box */
        .hero-stats-box { background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 20px; padding: 30px; backdrop-filter: blur(10px); }
        .big-rating-number { font-size: 72px; font-weight: 900; color: #fbbf24; line-height: 1; margin-bottom: 10px; display: flex; align-items: baseline; gap: 8px; }
        .big-rating-number span { font-size: 24px; color: #94a3b8; font-weight: 700; }
        .stat-row { display: flex; justify-content: space-between; margin-top: 16px; padding-top: 16px; border-top: 1px solid rgba(255,255,255,0.1); font-size: 14px; }
        
        .main-layout { max-width: 1200px; margin: -40px auto 0 auto; display: grid; grid-template-columns: 1fr 350px; gap: 30px; padding: 0 24px; position: relative; z-index: 10; }
        
        /* Featured Review */
        .featured-review { background: white; border-radius: 20px; padding: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; margin-bottom: 30px; }
        .feat-badge { display: inline-block; background: #ef4444; color: white; font-size: 12px; font-weight: 800; padding: 6px 12px; border-radius: 20px; letter-spacing: 1px; margin-bottom: 16px; }
        .feat-title { font-size: 32px; font-weight: 900; color: #0f172a; margin-bottom: 16px; }
        
        /* Filter Bar */
        .filter-bar { display: flex; gap: 12px; margin-bottom: 24px; overflow-x: auto; padding-bottom: 8px; }
        .filter-btn { background: white; border: 1px solid #cbd5e1; padding: 10px 20px; border-radius: 30px; font-weight: 700; color: #475569; cursor: pointer; transition: 0.2s; white-space: nowrap; }
        .filter-btn:hover, .filter-btn.active { background: #4f46e5; color: white; border-color: #4f46e5; }
        
        /* Reviews Grid */
        .reviews-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; }
        .review-card { background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; transition: all 0.3s; display: flex; flex-direction: column; }
        .review-card:hover { transform: translateY(-5px); box-shadow: 0 15px 30px rgba(0,0,0,0.05); border-color: #6366f1; }
        .rc-header { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; }
        .rc-company { font-size: 20px; font-weight: 800; color: #0f172a; }
        .rc-date { font-size: 12px; color: #94a3b8; font-weight: 600; }
        .rc-verdict { font-size: 13px; font-weight: 800; padding: 4px 10px; border-radius: 8px; display: inline-block; margin-bottom: 16px; }
        .rc-verdict.sub { background: #dcfce7; color: #166534; }
        .rc-verdict.avoid { background: #fee2e2; color: #991b1b; }
        .rc-verdict.neutral { background: #fef9c3; color: #854d0e; }
        .rc-body { font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 20px; flex-grow: 1; }
        
        /* Pro Con Table */
        .pro-con-table { width: 100%; font-size: 13px; margin-bottom: 20px; background: #f8fafc; border-radius: 8px; overflow: hidden; }
        .pro-con-table th { padding: 8px 12px; text-align: left; font-weight: 700; }
        .pro-con-table td { padding: 8px 12px; border-top: 1px solid #e2e8f0; }
        .th-pro { background: #dcfce7; color: #166534; }
        .th-con { background: #fee2e2; color: #991b1b; }
        
        /* Analyst Profile */
        .analyst-footer { display: flex; align-items: center; gap: 12px; margin-top: auto; padding-top: 16px; border-top: 1px dashed #e2e8f0; }
        .av { width: 36px; height: 36px; border-radius: 50%; background: #e0e7ff; color: #4f46e5; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 14px; }
        .an-name { font-weight: 700; font-size: 14px; color: #0f172a; }
        .an-type { font-size: 12px; color: #64748b; }
        
        /* Sidebar */
        .sidebar-widget { background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; margin-bottom: 24px; }
        .sw-title { font-size: 18px; font-weight: 900; color: #0f172a; margin-bottom: 20px; border-bottom: 2px solid #f1f5f9; padding-bottom: 12px; }
        .top-analyst-item { display: flex; align-items: center; gap: 16px; margin-bottom: 16px; }
        .rank-circle { width: 28px; height: 28px; border-radius: 50%; background: #f1f5f9; color: #64748b; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 12px; }
        .rank-1 { background: #fef3c7; color: #d97706; }
        .rank-2 { background: #f1f5f9; color: #475569; }
        .rank-3 { background: #ffedd5; color: #c2410c; }
        
        .method-step { display: flex; gap: 16px; margin-bottom: 16px; }
        .step-num { font-weight: 900; color: #4f46e5; font-size: 20px; }
        .step-text h4 { font-size: 14px; font-weight: 800; color: #0f172a; margin-bottom: 4px; }
        .step-text p { font-size: 13px; color: #64748b; }

        @media (max-width: 992px) { 
            .hero-inner { grid-template-columns: 1fr; text-align: center; } 
            .main-layout { grid-template-columns: 1fr; } 
            .reviews-grid { grid-template-columns: 1fr; }
        }
    </style>

    <div class="reviews-hero">
        <div class="hero-inner">
            <div>
                <h1 class="hero-title">Expert SME IPO Reviews & Analyst Consensus</h1>
                <p class="hero-subtitle">We aggregate, analyze, and distill reports from top SEBI-registered analysts, brokers, and grey market experts to give you the ultimate verdict on every upcoming SME IPO.</p>
                <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                    <span style="background: rgba(255,255,255,0.1); padding: 8px 16px; border-radius: 20px; font-size: 14px; font-weight: 700;">✓ 15+ Top Analysts Tracked</span>
                    <span style="background: rgba(255,255,255,0.1); padding: 8px 16px; border-radius: 20px; font-size: 14px; font-weight: 700;">✓ Unbiased Ratings</span>
                </div>
            </div>
            <div class="hero-stats-box">
                <div style="font-size: 14px; font-weight: 700; color: #c7d2fe; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Consensus Accuracy</div>
                <div class="big-rating-number">84<span>%</span></div>
                <div class="stars-container" style="color: #fbbf24; font-size: 20px;">★★★★★</div>
                <div class="stat-row">
                    <span style="color: #94a3b8;">Total Reviews</span>
                    <span style="color: white; font-weight: 700;">1,428</span>
                </div>
                <div class="stat-row">
                    <span style="color: #94a3b8;">Avg Listing Gain (Subscribed)</span>
                    <span style="color: #34d399; font-weight: 700;">+42.5%</span>
                </div>
            </div>
        </div>
    </div>

    <div class="main-layout">
        <!-- LEFT COLUMN: Main Reviews -->
        <div>
            <!-- Featured Review -->
            <div class="featured-review">
                <div class="feat-badge">HOTTEST THIS WEEK</div>
                <h2 class="feat-title">Vidyut Tech SME IPO</h2>
                <div style="display: flex; gap: 24px; margin-bottom: 24px;">
                    <div>
                        <div style="font-size: 12px; color: #64748b; font-weight: 700;">VERDICT</div>
                        <div style="font-size: 20px; font-weight: 900; color: #166534;">STRONG SUBSCRIBE</div>
                    </div>
                    <div>
                        <div style="font-size: 12px; color: #64748b; font-weight: 700;">ANALYST CONSENSUS</div>
                        <div style="font-size: 20px; font-weight: 900; color: #0f172a;">9 / 10 Recommend</div>
                    </div>
                </div>
                <p style="font-size: 16px; color: #475569; line-height: 1.8; margin-bottom: 24px;">Vidyut Tech is entering the market with an incredibly strong order book and massive grey market premium. At a P/E of 14x, the valuation leaves immense money on the table for retail and HNI investors. It is highly recommended for both listing gains and long term holding.</p>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div style="background: #f8fafc; padding: 20px; border-radius: 12px; border: 1px solid #e2e8f0;">
                        <h4 style="font-weight: 800; color: #166534; margin-bottom: 12px;">Key Strengths</h4>
                        <ul style="padding-left: 20px; font-size: 14px; color: #475569; line-height: 1.6;">
                            <li>Government PLI scheme beneficiary</li>
                            <li>45% YoY profit growth</li>
                            <li>Anchor book oversubscribed 50x</li>
                        </ul>
                    </div>
                    <div style="background: #f8fafc; padding: 20px; border-radius: 12px; border: 1px solid #e2e8f0;">
                        <h4 style="font-weight: 800; color: #991b1b; margin-bottom: 12px;">Key Risks</h4>
                        <ul style="padding-left: 20px; font-size: 14px; color: #475569; line-height: 1.6;">
                            <li>Client concentration (Top 3 = 60% Rev)</li>
                            <li>High working capital requirement</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Filter Bar -->
            <div class="filter-bar">
                <button class="filter-btn active">All Reviews</button>
                <button class="filter-btn">Subscribe Rated</button>
                <button class="filter-btn">Avoid Rated</button>
                <button class="filter-btn">Top Analysts Only</button>
                <button class="filter-btn">High GMP</button>
            </div>

            <!-- Grid -->
            <div class="reviews-grid">
                
                <!-- Card 1 -->
                <div class="review-card">
                    <div class="rc-header">
                        <div>
                            <div class="rc-company">AgriGrow SME</div>
                            <div class="rc-date">Reviewed 2 hours ago</div>
                        </div>
                    </div>
                    <div class="rc-verdict sub">SUBSCRIBE FOR LONG TERM</div>
                    <div class="rc-body">A solid, asset-heavy business model in the agriculture equipment space. Valuation is fair at 18x P/E. Might not yield massive listing gains, but holds excellent fundamental value.</div>
                    <table class="pro-con-table">
                        <tr><th class="th-pro">Pros</th><th class="th-con">Cons</th></tr>
                        <tr><td>Steady cash flows</td><td>Slow growth sector</td></tr>
                        <tr><td>Experienced Promoters</td><td>Low GMP</td></tr>
                    </table>
                    <div class="analyst-footer">
                        <div class="av">CA</div>
                        <div><div class="an-name">Chittorgarh</div><div class="an-type">Top Rating Agency</div></div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="review-card">
                    <div class="rc-header">
                        <div>
                            <div class="rc-company">GreenEnergy Solutions</div>
                            <div class="rc-date">Reviewed 5 hours ago</div>
                        </div>
                    </div>
                    <div class="rc-verdict avoid">AVOID</div>
                    <div class="rc-body">The asking price is exorbitant. The promoters are offloading 40% of their stake via OFS, signaling an exit. Fundamentals do not support the current hype.</div>
                    <table class="pro-con-table">
                        <tr><th class="th-pro">Pros</th><th class="th-con">Cons</th></tr>
                        <tr><td>EV Sector hype</td><td>Massive OFS portion</td></tr>
                        <tr><td>-</td><td>85x P/E Valuation</td></tr>
                    </table>
                    <div class="analyst-footer">
                        <div class="av" style="background:#fce7f3; color:#be185d;">DS</div>
                        <div><div class="an-name">Dilip Davda</div><div class="an-type">Market Veteran</div></div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="review-card">
                    <div class="rc-header">
                        <div>
                            <div class="rc-company">TechVision India</div>
                            <div class="rc-date">Reviewed 1 day ago</div>
                        </div>
                    </div>
                    <div class="rc-verdict neutral">APPLY FOR LISTING GAINS</div>
                    <div class="rc-body">Short-term momentum is extremely strong due to low float and grey market demand. However, long-term fundamentals are untested. Exit on day 1.</div>
                    <table class="pro-con-table">
                        <tr><th class="th-pro">Pros</th><th class="th-con">Cons</th></tr>
                        <tr><td>120% GMP Demand</td><td>Low promoter holding</td></tr>
                        <tr><td>Tiny issue size</td><td>Unproven tech</td></tr>
                    </table>
                    <div class="analyst-footer">
                        <div class="av" style="background:#ffedd5; color:#c2410c;">SM</div>
                        <div><div class="an-name">SME Watch</div><div class="an-type">Data Driven Analyst</div></div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="review-card">
                    <div class="rc-header">
                        <div>
                            <div class="rc-company">SafeBank Financial</div>
                            <div class="rc-date">Reviewed 2 days ago</div>
                        </div>
                    </div>
                    <div class="rc-verdict avoid">AVOID</div>
                    <div class="rc-body">High NPAs and pending litigations against the promoters make this a highly risky bet. The NBFC sector is already crowded. Better options exist in the secondary market.</div>
                    <table class="pro-con-table">
                        <tr><th class="th-pro">Pros</th><th class="th-con">Cons</th></tr>
                        <tr><td>Good regional presence</td><td>High NPA levels</td></tr>
                        <tr><td>-</td><td>Pending litigations</td></tr>
                    </table>
                    <div class="analyst-footer">
                        <div class="av" style="background:#e0f2fe; color:#0369a1;">BP</div>
                        <div><div class="an-name">Broker Panel</div><div class="an-type">Consensus View</div></div>
                    </div>
                </div>

                 <!-- Card 5 -->
                 <div class="review-card">
                    <div class="rc-header">
                        <div>
                            <div class="rc-company">SolarEdge Tech</div>
                            <div class="rc-date">Reviewed 3 days ago</div>
                        </div>
                    </div>
                    <div class="rc-verdict sub">SUBSCRIBE</div>
                    <div class="rc-body">Exceptional management and strong tie-ups with PSU solar projects. The valuation leaves 20% on the table. A safe bet for retail investors looking for steady listing gains.</div>
                    <table class="pro-con-table">
                        <tr><th class="th-pro">Pros</th><th class="th-con">Cons</th></tr>
                        <tr><td>PSU Contracts</td><td>Capital Intensive</td></tr>
                    </table>
                    <div class="analyst-footer">
                        <div class="av">CA</div>
                        <div><div class="an-name">Chittorgarh</div><div class="an-type">Top Rating Agency</div></div>
                    </div>
                </div>

                <!-- Card 6 -->
                 <div class="review-card">
                    <div class="rc-header">
                        <div>
                            <div class="rc-company">BuildPro Materials</div>
                            <div class="rc-date">Reviewed 3 days ago</div>
                        </div>
                    </div>
                    <div class="rc-verdict neutral">NEUTRAL / MAY APPLY</div>
                    <div class="rc-body">A standard construction materials company. Pricing is fully factored in. It might list flat or at a marginal premium depending on market sentiment on the listing day.</div>
                    <table class="pro-con-table">
                        <tr><th class="th-pro">Pros</th><th class="th-con">Cons</th></tr>
                        <tr><td>Profitable operations</td><td>Fully priced IPO</td></tr>
                    </table>
                    <div class="analyst-footer">
                        <div class="av" style="background:#fce7f3; color:#be185d;">DS</div>
                        <div><div class="an-name">Dilip Davda</div><div class="an-type">Market Veteran</div></div>
                    </div>
                </div>

            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <button class="filter-btn" style="padding: 12px 32px; font-size: 16px;">Load More Reviews  →</button>
            </div>
        </div>

        <!-- RIGHT COLUMN: Sidebar -->
        <div>
            <!-- Leaderboard Widget -->
            <div class="sidebar-widget">
                <div class="sw-title">Top Analyst Leaderboard</div>
                <div style="font-size: 12px; color: #64748b; margin-bottom: 16px;">Ranked by accuracy of 'Subscribe' calls yielding >20% listing gain in 2026.</div>
                
                <div class="top-analyst-item">
                    <div class="rank-circle rank-1">1</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 15px;">Chittorgarh</div>
                        <div style="font-size: 12px; color: #10b981; font-weight: 700;">88% Accuracy Score</div>
                    </div>
                </div>
                <div class="top-analyst-item">
                    <div class="rank-circle rank-2">2</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 15px;">Dilip Davda</div>
                        <div style="font-size: 12px; color: #10b981; font-weight: 700;">85% Accuracy Score</div>
                    </div>
                </div>
                <div class="top-analyst-item">
                    <div class="rank-circle rank-3">3</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 15px;">SME Watch</div>
                        <div style="font-size: 12px; color: #10b981; font-weight: 700;">79% Accuracy Score</div>
                    </div>
                </div>
                <div class="top-analyst-item">
                    <div class="rank-circle">4</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 15px;">Broker Panel</div>
                        <div style="font-size: 12px; color: #10b981; font-weight: 700;">72% Accuracy Score</div>
                    </div>
                </div>
            </div>

            <!-- Methodology Widget -->
            <div class="sidebar-widget">
                <div class="sw-title">Our Review Methodology</div>
                
                <div class="method-step">
                    <div class="step-num">1</div>
                    <div class="step-text">
                        <h4>RHP Deep Dive</h4>
                        <p>We analyze the Red Herring Prospectus for financials, P/E ratios, and promoter background.</p>
                    </div>
                </div>
                <div class="method-step">
                    <div class="step-num">2</div>
                    <div class="step-text">
                        <h4>Grey Market Sentiment</h4>
                        <p>We cross-reference valuations with live unofficial market demand (GMP).</p>
                    </div>
                </div>
                <div class="method-step">
                    <div class="step-num">3</div>
                    <div class="step-text">
                        <h4>Consensus Aggregation</h4>
                        <p>We pool opinions from SEBI-registered analysts to formulate a final verdict.</p>
                    </div>
                </div>
            </div>
            
            <!-- Ad Widget -->
            <div style="background: #f1f5f9; border: 1px solid #cbd5e1; height: 600px; display: flex; align-items: center; justify-content: center; color: #94a3b8; font-weight: 800; border-radius: 16px;">
                ADVERTISEMENT<br>300x600
            </div>
        </div>
    </div>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
