<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Performance – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Performance on IPOSETU."/>
<link class="style-link" href="/iposetu/assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="/iposetu/assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/header.php'; ?>

<main class="page-animate">
    <style>
        @keyframes slideUpFade { 0% { opacity: 0; transform: translateY(40px); } 100% { opacity: 1; transform: translateY(0); } }
        @keyframes fillBar { 0% { width: 0; } 100% { width: var(--target-width); } }
        .page-animate { animation: slideUpFade 0.6s cubic-bezier(0.16, 1, 0.3, 1); font-family: 'Inter', sans-serif; background: #f8fafc; padding-bottom: 80px; }
        
        .hero-section { background: #0f172a; color: white; padding: 80px 24px 60px 24px; text-align: center; }
        .hero-title { font-size: 48px; font-weight: 900; margin-bottom: 20px; }
        .hero-subtitle { font-size: 18px; color: #94a3b8; max-width: 700px; margin: 0 auto; line-height: 1.6; }

        .main-layout { max-width: 1200px; margin: -40px auto 0 auto; display: grid; grid-template-columns: 1fr 350px; gap: 40px; padding: 0 24px; position: relative; z-index: 10; }
        
        /* Podium */
        .podium-container { display: flex; align-items: flex-end; justify-content: center; gap: 20px; height: 250px; margin-bottom: 40px; background: white; padding: 40px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; }
        .podium-item { display: flex; flex-direction: column; align-items: center; width: 140px; }
        .podium-box { width: 100%; display: flex; align-items: flex-start; justify-content: center; padding-top: 16px; font-size: 32px; font-weight: 900; color: white; border-top-left-radius: 12px; border-top-right-radius: 12px; transition: all 0.3s; position: relative; }
        .podium-item:hover .podium-box { filter: brightness(1.1); transform: translateY(-10px); }
        .p-1 .podium-box { height: 160px; background: linear-gradient(180deg, #fbbf24 0%, #d97706 100%); z-index: 3; box-shadow: 0 0 30px rgba(251, 191, 36, 0.3); }
        .p-2 .podium-box { height: 120px; background: linear-gradient(180deg, #94a3b8 0%, #64748b 100%); z-index: 2; }
        .p-3 .podium-box { height: 80px; background: linear-gradient(180deg, #b45309 0%, #78350f 100%); z-index: 1; }
        .podium-label { text-align: center; margin-bottom: 12px; }
        .podium-company { font-weight: 800; font-size: 16px; color: #0f172a; }
        .podium-gain { font-weight: 900; font-size: 20px; color: #10b981; }

        /* Tables */
        .content-card { background: white; border-radius: 20px; border: 1px solid #e2e8f0; padding: 40px; margin-bottom: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.02); }
        .section-title { font-size: 28px; font-weight: 900; color: #0f172a; margin-bottom: 24px; display: flex; align-items: center; justify-content: space-between; }
        
        .perf-table { width: 100%; border-collapse: collapse; }
        .perf-table th { background: #f8fafc; padding: 16px 20px; text-align: left; font-size: 13px; font-weight: 800; color: #64748b; text-transform: uppercase; border-bottom: 2px solid #e2e8f0; }
        .perf-table td { padding: 20px; border-bottom: 1px solid #f1f5f9; font-size: 15px; color: #0f172a; font-weight: 600; vertical-align: middle; }
        .perf-table tr:hover td { background: #f8fafc; }
        
        .bar-wrapper { width: 100%; background: #f1f5f9; height: 8px; border-radius: 4px; overflow: hidden; margin-top: 8px; }
        .bar-fill { height: 100%; background: #10b981; border-radius: 4px; animation: fillBar 1.5s cubic-bezier(0.16, 1, 0.3, 1) forwards; width: 0; }
        .bar-fill.negative { background: #ef4444; }

        /* Content Text */
        .info-prose h3 { font-size: 20px; font-weight: 800; margin-top: 32px; margin-bottom: 16px; color: #0f172a; }
        .info-prose p { font-size: 16px; color: #475569; line-height: 1.8; margin-bottom: 16px; }
        .info-prose ul { margin-bottom: 24px; padding-left: 20px; }
        .info-prose li { font-size: 16px; color: #475569; margin-bottom: 8px; line-height: 1.6; }

        /* Sidebar */
        .sidebar-widget { background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; margin-bottom: 24px; }
        .sw-title { font-size: 18px; font-weight: 900; color: #0f172a; margin-bottom: 20px; border-bottom: 2px solid #f1f5f9; padding-bottom: 12px; }
        .stat-huge { font-size: 40px; font-weight: 900; color: #3b82f6; line-height: 1; margin-bottom: 8px; }
        
        @media (max-width: 992px) { .main-layout { grid-template-columns: 1fr; } .podium-container { transform: scale(0.8); } }
    </style>

    <div class="hero-section">
        <h1 class="hero-title">SME IPO Performance Data</h1>
        <p class="hero-subtitle">Comprehensive tracking of SME listing gains, current market returns, and historical performance trends to help you make data-driven investment decisions.</p>
    </div>

    <div class="main-layout">
        <!-- LEFT COLUMN -->
        <div>
            <!-- Podium -->
            <div class="podium-container">
                <div class="podium-item p-2">
                    <div class="podium-label"><div class="podium-company">AgriGrow</div><div class="podium-gain">+185%</div></div>
                    <div class="podium-box">2</div>
                </div>
                <div class="podium-item p-1">
                    <div class="podium-label"><div class="podium-company">Vidyut Tech</div><div class="podium-gain">+240%</div></div>
                    <div class="podium-box">1</div>
                </div>
                <div class="podium-item p-3">
                    <div class="podium-label"><div class="podium-company">SolarTech</div><div class="podium-gain">+110%</div></div>
                    <div class="podium-box">3</div>
                </div>
            </div>

            <!-- Leaderboard Table -->
            <div class="content-card">
                <h2 class="section-title">2026 Top Performers
                    <button style="font-size: 13px; font-weight: 700; padding: 8px 16px; background: #f1f5f9; border: none; border-radius: 8px; cursor: pointer; color: #475569;">Export CSV ↓</button>
                </h2>
                <div style="overflow-x: auto;">
                    <table class="perf-table">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Issue ₹</th>
                                <th>Listing Gain</th>
                                <th>Current Return</th>
                                <th style="width: 200px;">Trajectory</th>
                            </tr>
                        </thead>
                        <tbody id="sme-performance-tbody">
                            <tr>
                                <td colspan="5" style="text-align: center; padding: 40px; color: #64748b; font-weight: 600;">Loading SME IPO Performance...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Deep Dive Content Section -->
            <div class="content-card info-prose">
                <h2 class="section-title" style="margin-bottom: 16px;">Understanding SME IPO Performance</h2>
                <p>Analyzing SME IPO performance requires a fundamentally different approach than tracking Mainboard IPOs. The SME space is characterized by high volatility, lower liquidity, and outsized grey market premiums (GMP) driven by retail frenzy and low float.</p>
                
                <h3>Listing Day Dynamics</h3>
                <p>On listing day, an SME IPO can swing wildly within its circuit limits (usually 5% for SMEs). A common strategy among retail investors is the "Listing Pop and Drop." Due to the massive minimum investment size (₹1 Lakh+), many retail investors are purely seeking arbitrage between the issue price and the GMP. Therefore, tremendous selling pressure is often witnessed at the 9:45 AM pre-open match.</p>
                <ul>
                    <li><strong>Pre-Open Session (9:00 AM - 9:45 AM):</strong> This 45-minute window is critical. It determines the listing price based on equilibrium pricing of buy/sell orders.</li>
                    <li><strong>Circuit Limits:</strong> Once listed, SME stocks are immediately subjected to strict 5% upper and lower circuit filters to prevent absolute price manipulation.</li>
                </ul>

                <h3>Factors Driving Long-Term Return</h3>
                <p>While 80% of applicants exit on listing day, the remaining hold for long-term multi-bagger returns. The companies that sustain their listing gains generally possess:</p>
                <ul>
                    <li><strong>Anchor Lock-in Expiry:</strong> A crucial date to watch is the 30-day and 90-day mark when anchor investors can legally dump their shares. A stock that holds its price after anchor lock-in expiry is generally considered fundamentally strong.</li>
                    <li><strong>Consistent Quarterly Earnings:</strong> SMEs are required to report half-yearly (and sometimes quarterly) earnings. Given their small base, minor revenue bumps lead to massive EPS spikes, which the market rewards with P/E expansion.</li>
                    <li><strong>Migration to Mainboard:</strong> The ultimate goal of an SME. After 2-3 years, successful SMEs migrate to the NSE/BSE Mainboard, unlocking massive institutional liquidity (mutual funds) which drives the stock price up permanently.</li>
                </ul>

                <h3>The Liquidity Trap Risk</h3>
                <p>Investors must be cautious of "Upper Circuit Traps." A stock might show a 200% return on paper, but if there are 0 buyers in the market (lower circuit), you cannot sell your ₹1 Lakh lot. Paper profits in illiquid SMEs mean nothing until the trade is executed. Always check the daily traded volumes.</p>
            </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div>
            <!-- Stats Widget -->
            <div class="sidebar-widget">
                <div class="sw-title">Market Averages (2026)</div>
                <div style="margin-bottom: 24px;">
                    <div style="font-size: 13px; color: #64748b; font-weight: 700;">AVERAGE LISTING GAIN</div>
                    <div class="stat-huge">+34.5%</div>
                </div>
                <div style="margin-bottom: 24px;">
                    <div style="font-size: 13px; color: #64748b; font-weight: 700;">PROFITABLE LISTINGS</div>
                    <div class="stat-huge" style="color: #10b981;">72%</div>
                </div>
                <div>
                    <div style="font-size: 13px; color: #64748b; font-weight: 700;">DISCOUNT LISTINGS</div>
                    <div class="stat-huge" style="color: #ef4444;">28%</div>
                </div>
            </div>

            <!-- Ad Widget -->
            <div style="background: #f8fafc; border: 1px solid #cbd5e1; height: 300px; display: flex; align-items: center; justify-content: center; color: #94a3b8; font-weight: 800; border-radius: 16px; margin-bottom: 24px;">
                SPONSORED AD<br>300x250
            </div>

            <!-- Related Links -->
            <div class="sidebar-widget">
                <div class="sw-title">Quick Links</div>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 12px;"><a href="../sme/reviews" style="color: #3b82f6; text-decoration: none; font-weight: 700;">→ Expert SME Reviews</a></li>
                    <li style="margin-bottom: 12px;"><a href="../sme/anchor-investors" style="color: #3b82f6; text-decoration: none; font-weight: 700;">→ View Anchor Allotments</a></li>
                    <li style="margin-bottom: 12px;"><a href="../sme/gmp" style="color: #3b82f6; text-decoration: none; font-weight: 700;">→ Live SME GMP</a></li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="/iposetu/assets/js/components.js?v=6.1"></script>
<script src="/iposetu/assets/js/ad-manager.js?v=1.2"></script>
<script src="/iposetu/assets/js/main.js"></script>
</body>
</html>
