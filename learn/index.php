<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Learning Center – Master IPOs, Stock Markets & Mutual Funds | IPOSETU</title>
<meta name="description" content="Master stock markets, Initial Public Offerings (IPOs), ASBA, GMP, and Mutual Funds with comprehensive, beginner-to-advanced guides from IPOSETU."/>
<link class="style-link" href="/iposetu/assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="/iposetu/assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<style>
    .learn-hub-card {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        padding: 28px;
        text-decoration: none;
        color: inherit;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        position: relative;
        overflow: hidden;
    }
    .learn-hub-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 30px -10px rgba(15, 23, 42, 0.1);
        border-color: #cbd5e1;
    }
    .learn-hub-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: transparent;
        transition: background 0.25s ease;
    }
    .learn-hub-card[data-track="ipo"]:hover::before { background: #2563eb; }
    .learn-hub-card[data-track="market"]:hover::before { background: #059669; }
    .learn-hub-card[data-track="fund"]:hover::before { background: #7c3aed; }

    .track-badge {
        font-size: 11px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 4px 10px;
        border-radius: 6px;
        display: inline-block;
    }
    .badge-ipo { background: #eff6ff; color: #2563eb; }
    .badge-market { background: #ecfdf5; color: #059669; }
    .badge-fund { background: #ede9fe; color: #7c3aed; }

    .filter-btn {
        padding: 8px 18px;
        border-radius: 30px;
        font-size: 13.5px;
        font-weight: 700;
        border: 1px solid #e2e8f0;
        background: white;
        color: #475569;
        cursor: pointer;
        transition: all 0.2s;
    }
    .filter-btn.active, .filter-btn:hover {
        background: #0f172a;
        color: white;
        border-color: #0f172a;
    }
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/header.php'; ?>

<main class="container" style="padding-top: 24px; padding-bottom: 60px;">

    <!-- Full-Width Modern Hero -->
    <div class="market-hero" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: white; padding: 50px 48px; border-radius: 24px; margin-bottom: 36px; position: relative; overflow: hidden; box-shadow: 0 20px 25px -5px rgba(15, 23, 42, 0.15);">
        <div style="max-width: 800px; position: relative; z-index: 2;">
            <div style="font-size: 12px; font-weight: 800; color: #fbbf24; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                <span style="width: 8px; height: 8px; border-radius: 50%; background: #fbbf24; display: inline-block;"></span>
                IPOSETU Knowledge Center
            </div>
            <h1 style="font-size: 40px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px; line-height: 1.2;">The Ultimate Investment &amp; IPO Learning Hub</h1>
            <p style="font-size: 16px; color: #cbd5e1; line-height: 1.6; margin-bottom: 24px;">Master public issues, market valuation, risk mitigation, and systematic wealth creation with our comprehensive, free educational guides designed for both beginners and seasoned investors.</p>
            
            <div style="display: flex; flex-wrap: wrap; gap: 14px; font-size: 13px; font-weight: 700;">
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(8px); padding: 8px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.15);">📚 10 In-Depth Guides</div>
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(8px); padding: 8px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.15);">🎯 Beginner to Advanced</div>
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(8px); padding: 8px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.15);">⚡ 100% Free &amp; Unbiased</div>
            </div>
        </div>
    </div>

    <!-- Navigation & Filter Bar -->
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px; margin-bottom: 32px;">
        <div style="display: flex; gap: 10px; flex-wrap: wrap;" id="track-filters">
            <button class="filter-btn active" onclick="filterTrack('all', this)">All Guides (10)</button>
            <button class="filter-btn" onclick="filterTrack('ipo', this)">IPO Masterclass (5)</button>
            <button class="filter-btn" onclick="filterTrack('market', this)">Stock Markets (3)</button>
            <button class="filter-btn" onclick="filterTrack('fund', this)">Mutual Funds &amp; Wealth (2)</button>
        </div>
        <div style="font-size: 13.5px; color: #64748b; font-weight: 600;">
            Estimated completion: ~2.5 hrs of practical reading
        </div>
    </div>

    <!-- Guides Full Grid -->
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(360px, 1fr)); gap: 24px; margin-bottom: 56px;" id="guides-grid">
        
        <!-- 1. IPO Guide -->
        <a href="/iposetu/learn/ipo-guide.php" class="learn-hub-card" data-track="ipo">
            <div>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="track-badge badge-ipo">IPO Masterclass</span>
                    <span style="font-size: 12px; font-weight: 700; color: #64748b;">25 min read</span>
                </div>
                <h3 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 10px; line-height: 1.3;">Complete IPO Guide</h3>
                <p style="color: #475569; font-size: 14px; line-height: 1.6; margin-bottom: 16px;">Everything you need to know about Initial Public Offerings: DRHP analysis, price bands, anchor investments, book building, and post-listing trading dynamics.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 20px;">
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">DRHP / RHP</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Price Bands</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Book Building</span>
                </div>
            </div>
            <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #f1f5f9; padding-top: 14px; margin-top: auto;">
                <span style="font-size: 13.5px; font-weight: 700; color: #2563eb;">Read Guide</span>
                <span style="font-size: 16px; color: #2563eb;">→</span>
            </div>
        </a>

        <!-- 2. How to Apply -->
        <a href="/iposetu/learn/how-to-apply-ipo.php" class="learn-hub-card" data-track="ipo">
            <div>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="track-badge badge-ipo">IPO Masterclass</span>
                    <span style="font-size: 12px; font-weight: 700; color: #64748b;">12 min read</span>
                </div>
                <h3 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 10px; line-height: 1.3;">How to Apply for an IPO</h3>
                <p style="color: #475569; font-size: 14px; line-height: 1.6; margin-bottom: 16px;">A step-by-step visual tutorial on bidding for an IPO using discount broker apps (Zerodha, Groww, Upstox) and approving UPI mandates effortlessly.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 20px;">
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">UPI Mandates</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Cut-Off Price</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Broker Walkthrough</span>
                </div>
            </div>
            <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #f1f5f9; padding-top: 14px; margin-top: auto;">
                <span style="font-size: 13.5px; font-weight: 700; color: #2563eb;">Read Guide</span>
                <span style="font-size: 16px; color: #2563eb;">→</span>
            </div>
        </a>

        <!-- 3. What is ASBA -->
        <a href="/iposetu/learn/asba.php" class="learn-hub-card" data-track="ipo">
            <div>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="track-badge badge-ipo">IPO Masterclass</span>
                    <span style="font-size: 12px; font-weight: 700; color: #64748b;">10 min read</span>
                </div>
                <h3 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 10px; line-height: 1.3;">What is ASBA?</h3>
                <p style="color: #475569; font-size: 14px; line-height: 1.6; margin-bottom: 16px;">Understand Application Supported by Blocked Amount. Discover how your funds remain earning interest in your bank account until share allotment is confirmed.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 20px;">
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Fund Blocking</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Bank Interest</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Refund Revocation</span>
                </div>
            </div>
            <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #f1f5f9; padding-top: 14px; margin-top: auto;">
                <span style="font-size: 13.5px; font-weight: 700; color: #2563eb;">Read Guide</span>
                <span style="font-size: 16px; color: #2563eb;">→</span>
            </div>
        </a>

        <!-- 4. Understanding GMP -->
        <a href="/iposetu/learn/gmp.php" class="learn-hub-card" data-track="ipo">
            <div>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="track-badge badge-ipo">IPO Masterclass</span>
                    <span style="font-size: 12px; font-weight: 700; color: #64748b;">12 min read</span>
                </div>
                <h3 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 10px; line-height: 1.3;">Understanding GMP (Grey Market)</h3>
                <p style="color: #475569; font-size: 14px; line-height: 1.6; margin-bottom: 16px;">Learn what Grey Market Premium signifies, how Kostak &amp; Subject to Sauda rates work, and why GMP must never be your sole decision criterion.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 20px;">
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Kostak Rate</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Subject to Sauda</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Listing Prediction</span>
                </div>
            </div>
            <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #f1f5f9; padding-top: 14px; margin-top: auto;">
                <span style="font-size: 13.5px; font-weight: 700; color: #2563eb;">Read Guide</span>
                <span style="font-size: 16px; color: #2563eb;">→</span>
            </div>
        </a>

        <!-- 5. IPO FAQs -->
        <a href="/iposetu/learn/ipo-faqs.php" class="learn-hub-card" data-track="ipo">
            <div>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="track-badge badge-ipo">IPO Masterclass</span>
                    <span style="font-size: 12px; font-weight: 700; color: #64748b;">15 min read</span>
                </div>
                <h3 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 10px; line-height: 1.3;">Frequently Asked IPO Questions</h3>
                <p style="color: #475569; font-size: 14px; line-height: 1.6; margin-bottom: 16px;">Straightforward answers to the most common queries: multiple applications from family accounts, allotment probabilities, cut-off bids, and refunds.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 20px;">
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Allotment Lottery</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Family Demat Bids</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Refund Delays</span>
                </div>
            </div>
            <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #f1f5f9; padding-top: 14px; margin-top: auto;">
                <span style="font-size: 13.5px; font-weight: 700; color: #2563eb;">Read Guide</span>
                <span style="font-size: 16px; color: #2563eb;">→</span>
            </div>
        </a>

        <!-- 6. Stock Market Basics -->
        <a href="/iposetu/learn/stock-market-guide.php" class="learn-hub-card" data-track="market">
            <div>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="track-badge badge-market">Stock Markets</span>
                    <span style="font-size: 12px; font-weight: 700; color: #64748b;">20 min read</span>
                </div>
                <h3 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 10px; line-height: 1.3;">Stock Market Basics</h3>
                <p style="color: #475569; font-size: 14px; line-height: 1.6; margin-bottom: 16px;">How the stock exchanges (NSE/BSE) function, primary vs secondary markets, reading candlestick charts, and conducting fundamental valuation checks.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 20px;">
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">NSE &amp; BSE</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">P/E &amp; ROE</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Value Investing</span>
                </div>
            </div>
            <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #f1f5f9; padding-top: 14px; margin-top: auto;">
                <span style="font-size: 13.5px; font-weight: 700; color: #059669;">Read Guide</span>
                <span style="font-size: 16px; color: #059669;">→</span>
            </div>
        </a>

        <!-- 7. Understanding Risk -->
        <a href="/iposetu/learn/understanding-risk.php" class="learn-hub-card" data-track="market">
            <div>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="track-badge badge-market">Stock Markets</span>
                    <span style="font-size: 12px; font-weight: 700; color: #64748b;">15 min read</span>
                </div>
                <h3 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 10px; line-height: 1.3;">Mastering Investment Risk</h3>
                <p style="color: #475569; font-size: 14px; line-height: 1.6; margin-bottom: 16px;">The essential differences between risk tolerance and risk capacity. Learn how asset allocation shields your portfolio from catastrophic market crashes.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 20px;">
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Asset Allocation</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Drawdown Defense</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Risk Capacity</span>
                </div>
            </div>
            <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #f1f5f9; padding-top: 14px; margin-top: auto;">
                <span style="font-size: 13.5px; font-weight: 700; color: #059669;">Read Guide</span>
                <span style="font-size: 16px; color: #059669;">→</span>
            </div>
        </a>

        <!-- 8. Glossary -->
        <a href="/iposetu/learn/glossary.php" class="learn-hub-card" data-track="market">
            <div>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="track-badge badge-market">Stock Markets</span>
                    <span style="font-size: 12px; font-weight: 700; color: #64748b;">18 min read</span>
                </div>
                <h3 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 10px; line-height: 1.3;">Financial &amp; IPO Glossary</h3>
                <p style="color: #475569; font-size: 14px; line-height: 1.6; margin-bottom: 16px;">Demystify financial jargon: AUM, Book Building, Cut-Off Price, Demat, EPS, Floor Price, Market Maker, NAV, RHP, and Anchor Allocation.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 20px;">
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Financial Terms</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">A to Z Index</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Quick Definitions</span>
                </div>
            </div>
            <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #f1f5f9; padding-top: 14px; margin-top: auto;">
                <span style="font-size: 13.5px; font-weight: 700; color: #059669;">Read Guide</span>
                <span style="font-size: 16px; color: #059669;">→</span>
            </div>
        </a>

        <!-- 9. Mutual Funds 101 -->
        <a href="/iposetu/learn/mutual-fund-guide.php" class="learn-hub-card" data-track="fund">
            <div>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="track-badge badge-fund">Mutual Funds</span>
                    <span style="font-size: 12px; font-weight: 700; color: #64748b;">16 min read</span>
                </div>
                <h3 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 10px; line-height: 1.3;">Mutual Funds 101</h3>
                <p style="color: #475569; font-size: 14px; line-height: 1.6; margin-bottom: 16px;">Active vs passive investing, expense ratios, direct vs regular plans, and building a low-cost, high-performing index fund portfolio.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 20px;">
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Direct vs Regular</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Expense Ratio</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Index Investing</span>
                </div>
            </div>
            <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #f1f5f9; padding-top: 14px; margin-top: auto;">
                <span style="font-size: 13.5px; font-weight: 700; color: #7c3aed;">Read Guide</span>
                <span style="font-size: 16px; color: #7c3aed;">→</span>
            </div>
        </a>

        <!-- 10. SIP vs Lumpsum -->
        <a href="/iposetu/learn/sip-vs-lumpsum.php" class="learn-hub-card" data-track="fund">
            <div>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="track-badge badge-fund">Mutual Funds</span>
                    <span style="font-size: 12px; font-weight: 700; color: #64748b;">14 min read</span>
                </div>
                <h3 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 10px; line-height: 1.3;">SIP vs Lumpsum Comparison</h3>
                <p style="color: #475569; font-size: 14px; line-height: 1.6; margin-bottom: 16px;">Which strategy wins? Rupee cost averaging, market timing myths, and backtested returns during bull and bear cycles in the Indian equity markets.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 20px;">
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Rupee Cost Averaging</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Volatility Shield</span>
                    <span style="font-size: 11px; background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Compounding</span>
                </div>
            </div>
            <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #f1f5f9; padding-top: 14px; margin-top: auto;">
                <span style="font-size: 13.5px; font-weight: 700; color: #7c3aed;">Read Guide</span>
                <span style="font-size: 16px; color: #7c3aed;">→</span>
            </div>
        </a>

    </div>

    <!-- Educational Roadmap -->
    <div style="background: white; border: 1px solid #e2e8f0; border-radius: 24px; padding: 40px; margin-bottom: 48px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03);">
        <div style="text-align: center; max-width: 700px; margin: 0 auto 36px;">
            <div style="font-size: 12px; font-weight: 800; color: #2563eb; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 8px;">Step-by-Step Pathway</div>
            <h2 style="font-size: 28px; font-weight: 800; color: #0f172a; margin-bottom: 12px;">Recommended Investor Learning Roadmap</h2>
            <p style="font-size: 15px; color: #64748b; line-height: 1.6;">Follow this structured 4-step sequence to build your market acumen without information overload.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px; position: relative;">
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px;">
                <div style="font-size: 12px; font-weight: 800; color: #2563eb; margin-bottom: 8px;">PHASE 01</div>
                <h4 style="font-size: 17px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Market Fundamentals</h4>
                <p style="font-size: 13.5px; color: #64748b; line-height: 1.6; margin: 0;">Open your Demat account, master order types (Market/Limit), and understand how NSE &amp; BSE settle transactions.</p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px;">
                <div style="font-size: 12px; font-weight: 800; color: #059669; margin-bottom: 8px;">PHASE 02</div>
                <h4 style="font-size: 17px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">IPO Due Diligence</h4>
                <p style="font-size: 13.5px; color: #64748b; line-height: 1.6; margin: 0;">Learn how to skim the DRHP, analyze promoter pedigree, understand price bands, and check grey market trends.</p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px;">
                <div style="font-size: 12px; font-weight: 800; color: #7c3aed; margin-bottom: 8px;">PHASE 03</div>
                <h4 style="font-size: 17px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">ASBA &amp; Execution</h4>
                <p style="font-size: 13.5px; color: #64748b; line-height: 1.6; margin: 0;">Apply flawlessly via UPI mandate or Netbanking ASBA. Understand cut-off price bidding and allotment probabilities.</p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px;">
                <div style="font-size: 12px; font-weight: 800; color: #d97706; margin-bottom: 8px;">PHASE 04</div>
                <h4 style="font-size: 17px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Systematic Compounding</h4>
                <p style="font-size: 13.5px; color: #64748b; line-height: 1.6; margin: 0;">Reinvest listing profits into disciplined monthly index fund SIPs to build generational long-term compounding.</p>
            </div>
        </div>
    </div>

    <!-- Interactive Tools CTA -->
    <div style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); color: white; border-radius: 20px; padding: 36px 40px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px;">
        <div style="max-width: 680px;">
            <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 8px; color: #f8fafc;">Ready to Put Your Knowledge into Practice?</h3>
            <p style="font-size: 14.5px; color: #94a3b8; line-height: 1.6; margin: 0;">Explore live upcoming IPOs, monitor real-time Grey Market Premiums, and check current subscription numbers across Mainboard and SME exchanges.</p>
        </div>
        <div style="display: flex; gap: 14px; flex-wrap: wrap;">
            <a href="/iposetu/ipo/open.php" style="background: #2563eb; color: white; padding: 12px 22px; border-radius: 10px; font-size: 14px; font-weight: 700; text-decoration: none;">View Open IPOs →</a>
            <a href="/iposetu/sme/upcoming.php" style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: white; padding: 12px 22px; border-radius: 10px; font-size: 14px; font-weight: 700; text-decoration: none;">Upcoming SME IPOs →</a>
        </div>
    </div>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="/iposetu/assets/js/components.js?v=6.1"></script>
<script src="/iposetu/assets/js/ad-manager.js?v=1.2"></script>
<script src="/iposetu/assets/js/main.js"></script>
<script>
function filterTrack(track, btn) {
    document.querySelectorAll('#track-filters .filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const cards = document.querySelectorAll('#guides-grid .learn-hub-card');
    cards.forEach(card => {
        if (track === 'all' || card.getAttribute('data-track') === track) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
}
</script>
</body>
</html>
