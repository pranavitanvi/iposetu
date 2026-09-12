<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Ipo – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Ipo on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
    <style>
        @keyframes fadeUp { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
        
        .market-hero { background: #0f172a; color: white; padding: 60px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; margin-top: 40px; }
        .market-hero::after { content: ''; position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(99,102,241,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none; }
        
        .market-bento { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; margin-bottom: 40px; }
        .market-card { background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 4px 6px rgba(0,0,0,0.02); transition: 0.3s; animation: fadeUp 0.6s both; }
        .market-card:hover { transform: translateY(-5px); box-shadow: 0 12px 24px rgba(0,0,0,0.06); border-color: #cbd5e1; }
        .market-card.delay-1 { animation-delay: 0.1s; }
        .market-card.delay-2 { animation-delay: 0.2s; }
        .market-card.delay-3 { animation-delay: 0.3s; }
        .market-card.delay-4 { animation-delay: 0.4s; }
        
        /* SEARCH & FILTER PANEL */
        .filter-panel {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 40px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            align-items: center;
        }
        .search-input {
            flex: 1;
            min-width: 250px;
            padding: 12px 16px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 14px;
            background: #f8fafc;
            font-weight: 600;
        }
        .filter-select {
            padding: 12px 16px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 14px;
            background: white;
            color: #475569;
            font-weight: 600;
        }
        
        /* ADVERTISEMENTS */
        .ad-container {
            background: #f1f5f9;
            border: 1px solid #e2e8f0;
            display: flex; align-items: center; justify-content: center;
            color: #94a3b8; font-size: 12px; font-weight: 600; letter-spacing: 1px;
            margin: 30px 0;
            border-radius: 12px;
        }
        .ad-970x90 { width: 100%; max-width: 970px; height: 90px; margin: 40px auto; }
        .ad-970x250 { width: 100%; max-width: 970px; height: 250px; margin: 40px auto; }
        .ad-300x250 { width: 100%; height: 250px; margin-bottom: 24px; }
        
        /* MAIN TWO COLUMN LAYOUT */
        .two-col-layout {
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 40px;
        }
        
        /* TABS */
        .ipo-tabs {
            display: flex; gap: 8px; margin-bottom: 20px; flex-wrap: wrap;
            border-bottom: 1px solid #e2e8f0; padding-bottom: 12px;
        }
        .tab-btn {
            padding: 8px 16px; border-radius: 20px; border: none; background: #f1f5f9;
            color: #475569; font-weight: 600; font-size: 13px; cursor: pointer;
        }
        .tab-btn.active {
            background: #3b82f6; color: white;
        }
        
        /* TABLE */
        .data-table-wrapper {
            background: white; border: 1px solid #e2e8f0; border-radius: 12px; overflow: auto;
        }
        .data-table { width: 100%; border-collapse: collapse; min-width: 800px; }
        .data-table th {
            background: #f8fafc; padding: 12px 16px; text-align: left;
            font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;
            border-bottom: 1px solid #e2e8f0;
        }
        .data-table td {
            padding: 16px; font-size: 14px; border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .data-table tr:hover { background: #f8fafc; }
        
        /* QUICK FILTERS */
        .quick-filter-box {
            background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px;
        }
        .quick-filter-title { font-size: 16px; font-weight: 700; margin-bottom: 16px; color: #0f172a; }
        .qf-item {
            display: flex; align-items: center; justify-content: space-between;
            padding: 12px 0; border-bottom: 1px dashed #e2e8f0;
            font-size: 14px; color: #475569; cursor: pointer;
        }
        .qf-item:last-child { border-bottom: none; padding-bottom: 0; }
        .qf-item:hover { color: #3b82f6; }
        
        /* ANALYTICS */
        .analytics-section {
            background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px; padding: 30px;
            display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 40px;
        }
        
        /* SPOTLIGHT */
        .spotlight-grid {
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin: 40px 0;
        }
        .spotlight-card {
            background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
            transition: transform 0.2s;
        }
        .spotlight-card:hover { transform: translateY(-4px); box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
        
        /* BOTTOM SECTION */
        .year-pills {
            display: flex; gap: 12px; justify-content: center; margin: 40px 0;
        }
        .year-pill {
            padding: 10px 24px; border-radius: 30px; border: 1px solid #cbd5e1;
            color: #475569; font-weight: 600; text-decoration: none;
            transition: all 0.2s;
        }
        .year-pill:hover { background: #3b82f6; color: white; border-color: #3b82f6; }
    </style>
    
    <div class="container">
        <div class="market-hero">
            <div style="font-size: 12px; font-weight: 700; color: #818cf8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">IPO Market</div>
            <div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 24px;">
                <div>
                    <h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px;">All IPOs</h1>
                    <p style="font-size: 16px; color: #94a3b8; max-width: 600px; line-height: 1.6;">Explore Mainboard and SME IPOs, compare issue details, track GMP, and monitor listing performance.</p>
                </div>
                <div style="display: flex; gap: 12px;">
                    <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 16px; width: 140px;">
                        <div style="font-size: 11px; color: #94a3b8; font-weight: 600; margin-bottom: 4px;">Nifty 50</div>
                        <div style="color: #4ade80; font-weight: 700; font-size: 18px;">24,350 <span style="font-size: 12px;">-</span></div>
                    </div>
                    <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 16px; width: 140px;">
                        <div style="font-size: 11px; color: #94a3b8; font-weight: 600; margin-bottom: 4px;">Active IPOs</div>
                        <div style="color: white; font-weight: 700; font-size: 18px;">12 Live</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom: 80px;">
        <!-- MARKET STATS -->
        <h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 24px;">Market Overview</h2>
        <div class="market-bento">
            <div class="market-card delay-1" style="border-top: 4px solid #3b82f6;">
                <div style="font-size: 32px; margin-bottom: 16px;">📊</div>
                <div id="stat-total" style="font-size: 28px; font-weight: 900; color: #0f172a; margin-bottom: 4px;">0</div>
                <div style="font-size: 13px; font-weight: 700; color: #64748b; text-transform: uppercase;">Total IPOs (2026)</div>
            </div>
            <div class="market-card delay-2" style="border-top: 4px solid #22c55e;">
                <div style="font-size: 32px; margin-bottom: 16px;">🟢</div>
                <div id="stat-open" style="font-size: 28px; font-weight: 900; color: #0f172a; margin-bottom: 4px;">0</div>
                <div style="font-size: 13px; font-weight: 700; color: #64748b; text-transform: uppercase;">Open IPOs</div>
            </div>
            <div class="market-card delay-3" style="border-top: 4px solid #f59e0b;">
                <div style="font-size: 32px; margin-bottom: 16px;">⏳</div>
                <div id="stat-upcoming" style="font-size: 28px; font-weight: 900; color: #0f172a; margin-bottom: 4px;">0</div>
                <div style="font-size: 13px; font-weight: 700; color: #64748b; text-transform: uppercase;">Upcoming IPOs</div>
            </div>
            <div class="market-card delay-4" style="border-top: 4px solid #64748b;">
                <div style="font-size: 32px; margin-bottom: 16px;">📈</div>
                <div id="stat-listed" style="font-size: 28px; font-weight: 900; color: #0f172a; margin-bottom: 4px;">0</div>
                <div style="font-size: 13px; font-weight: 700; color: #64748b; text-transform: uppercase;">Listed IPOs</div>
            </div>
        </div>

        <!-- SEARCH & FILTER -->
        <div class="filter-panel">
            <input type="text" id="ipo-search" class="search-input" placeholder="Search company or IPO name...">
            <select id="filter-type" class="filter-select">
                <option value="">IPO Type: All</option>
                <option value="Mainboard">Mainboard</option>
                <option value="SME">SME</option>
            </select>
            <select id="filter-status" class="filter-select">
                <option value="">Status: All</option>
                <option value="OPEN">Open</option>
                <option value="UPCOMING">Upcoming</option>
                <option value="CLOSED">Closed</option>
                <option value="LISTED">Listed</option>
            </select>
            <select id="filter-year" class="filter-select">
                <option value="">Year: All</option>
                <option value="2026">2026</option>
                <option value="2025">2025</option>
                <option value="2024">2024</option>
            </select>
            <select id="filter-sector" class="filter-select">
                <option value="">Sector</option>
            </select>
            <select id="filter-exchange" class="filter-select">
                <option value="">Exchange</option>
            </select>
            <button id="apply-filter" class="btn btn-primary" style="padding: 12px 24px; border-radius: 8px;">Filter</button>
        </div>

        <!-- MAIN FULL-WIDTH TABLE LAYOUT -->
        <div class="ipo-table-section" style="width: 100%;">
            <div class="ipo-tabs">
                <button class="tab-btn active">All</button>
                <button class="tab-btn">Mainboard</button>
                <button class="tab-btn">SME</button>
                <button class="tab-btn">Open</button>
                <button class="tab-btn">Upcoming</button>
                <button class="tab-btn">Closed</button>
                <button class="tab-btn">Listed</button>
            </div>

            <div class="data-table-wrapper" style="width: 100%; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); border-radius: 14px; overflow: hidden; border: 1px solid #e2e8f0;">
                <table class="data-table" id="ipo-main-table" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Company</th>
                            <th>Type</th>
                            <th>Price Band</th>
                            <th>Issue Size</th>
                            <th>Lot Size</th>
                            <th>Open / Close</th>
                            <th>GMP</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td colspan="8" style="text-align: center; padding: 30px;">Loading IPO Data...</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination controls (20 per page) -->
            <div id="ipo-pagination" style="display:flex; justify-content:space-between; align-items:center; margin-top:20px; padding: 15px 20px; background: white; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">
                <div id="pg-info" style="font-size:14px; color:#64748b; font-weight: 500;"></div>
                <div style="display:flex; gap:8px; align-items:center;">
                    <button id="pg-prev" class="pg-btn" style="padding: 8px 16px; border: 1px solid #e2e8f0; background: white; border-radius: 6px; cursor: pointer; font-weight: 600; color: #475569; transition: all 0.2s;">&larr; Prev</button>
                    <div id="pg-pages" class="pagination" style="display:flex; gap:6px;"></div>
                    <button id="pg-next" class="pg-btn" style="padding: 8px 16px; border: 1px solid #e2e8f0; background: white; border-radius: 6px; cursor: pointer; font-weight: 600; color: #475569; transition: all 0.2s;">Next &rarr;</button>
                </div>
            </div>
        </div>

        <!-- INSIGHTS SECTION -->
        <h2 style="font-size:24px; font-weight:800; margin-top:60px;">IPO Market Insights</h2>
        <div class="analytics-section">
            <div>
                <div style="font-size:16px; font-weight:700; margin-bottom:16px; color:#0f172a;">IPO Activity (2026)</div>
                <!-- Placeholder for Chart -->
                <div style="height:200px; background:white; border:1px solid #e2e8f0; border-radius:8px; display:flex; align-items:flex-end; padding:16px; gap:8px;">
                    <div style="flex:1; background:#3b82f6; height:40%; border-radius:4px 4px 0 0;"></div>
                    <div style="flex:1; background:#3b82f6; height:60%; border-radius:4px 4px 0 0;"></div>
                    <div style="flex:1; background:#3b82f6; height:30%; border-radius:4px 4px 0 0;"></div>
                    <div style="flex:1; background:#3b82f6; height:80%; border-radius:4px 4px 0 0;"></div>
                    <div style="flex:1; background:#3b82f6; height:90%; border-radius:4px 4px 0 0;"></div>
                    <div style="flex:1; background:#3b82f6; height:50%; border-radius:4px 4px 0 0;"></div>
                </div>
            </div>
            <div>
                <div style="font-size:16px; font-weight:700; margin-bottom:16px; color:#0f172a;">Key Statistics</div>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px;">
                    <div style="background:white; padding:16px; border-radius:8px; border:1px solid #e2e8f0;">
                        <div style="font-size:12px; color:#64748b;">Average Issue Size</div>
                        <div style="font-size:18px; font-weight:700; margin-top:4px;">₹640 Cr</div>
                    </div>
                    <div style="background:white; padding:16px; border-radius:8px; border:1px solid #e2e8f0;">
                        <div style="font-size:12px; color:#64748b;">Average GMP</div>
                        <div style="font-size:18px; font-weight:700; margin-top:4px; color:#16a34a;">+18.5%</div>
                    </div>
                    <div style="background:white; padding:16px; border-radius:8px; border:1px solid #e2e8f0;">
                        <div style="font-size:12px; color:#64748b;">Average Subscription</div>
                        <div style="font-size:18px; font-weight:700; margin-top:4px;">42.5x</div>
                    </div>
                    <div style="background:white; padding:16px; border-radius:8px; border:1px solid #e2e8f0;">
                        <div style="font-size:12px; color:#64748b;">Average Listing Gain</div>
                        <div style="font-size:18px; font-weight:700; margin-top:4px; color:#16a34a;">+22.4%</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SPOTLIGHT SECTION -->
        <h2 style="font-size:24px; font-weight:800; margin-top:20px;">IPO Spotlight</h2>
        <div class="spotlight-grid">
            <!-- Open Spotlight -->
            <div class="spotlight-card" style="border-top:4px solid #16a34a;">
                <div style="display:flex; justify-content:space-between; margin-bottom:16px;">
                    <span style="background:#dcfce7; color:#166534; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:800;">OPEN IPO</span>
                    <span style="color:#64748b; font-size:12px; font-weight:600;">Closes Today</span>
                </div>
                <h3 style="font-size:18px; font-weight:800; margin-bottom:8px;">Nexus Tech Innovations</h3>
                <div style="display:flex; gap:16px; margin-bottom:20px;">
                    <div><div style="font-size:11px; color:#64748b;">Issue Size</div><div style="font-weight:700; font-size:14px;">₹540 Cr</div></div>
                    <div><div style="font-size:11px; color:#64748b;">Current GMP</div><div style="font-weight:700; font-size:14px; color:#16a34a;">+32%</div></div>
                </div>
                <div style="display:flex; justify-content:space-between; background:#f8fafc; padding:12px; border-radius:8px; border:1px solid #e2e8f0;">
                    <div><div style="font-size:11px; color:#64748b;">Subscription</div><div style="font-weight:700; font-size:13px; color:#0f172a;">42.5x</div></div>
                    <div style="text-align:right;"><div style="font-size:11px; color:#64748b;">Est. Listing</div><div style="font-weight:700; font-size:13px; color:#16a34a;">₹600</div></div>
                </div>
            </div>

            <!-- Upcoming Spotlight -->
            <div class="spotlight-card" style="border-top:4px solid #f59e0b;">
                <div style="display:flex; justify-content:space-between; margin-bottom:16px;">
                    <span style="background:#fef9c3; color:#854d0e; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:800;">UPCOMING IPO</span>
                    <span style="color:#64748b; font-size:12px; font-weight:600;">Opens 18 Aug</span>
                </div>
                <h3 style="font-size:18px; font-weight:800; margin-bottom:8px;">Aura Energy SME</h3>
                <div style="display:flex; gap:16px; margin-bottom:20px;">
                    <div><div style="font-size:11px; color:#64748b;">Issue Size</div><div style="font-weight:700; font-size:14px;">₹45 Cr</div></div>
                    <div><div style="font-size:11px; color:#64748b;">Price</div><div style="font-weight:700; font-size:14px;">₹120</div></div>
                </div>
                <div style="display:flex; justify-content:space-between; background:#f8fafc; padding:12px; border-radius:8px; border:1px solid #e2e8f0;">
                    <div><div style="font-size:11px; color:#64748b;">Expected GMP</div><div style="font-weight:700; font-size:13px; color:#0f172a;">TBD</div></div>
                    <div style="text-align:right;"><div style="font-size:11px; color:#64748b;">Listing Date</div><div style="font-weight:700; font-size:13px; color:#0f172a;">25 Aug</div></div>
                </div>
            </div>

            <!-- Listed Spotlight -->
            <div class="spotlight-card" style="border-top:4px solid #3b82f6;">
                <div style="display:flex; justify-content:space-between; margin-bottom:16px;">
                    <span style="background:#dbeafe; color:#1e40af; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:800;">RECENTLY LISTED</span>
                    <span style="color:#64748b; font-size:12px; font-weight:600;">Listed 28 Jul</span>
                </div>
                <h3 style="font-size:18px; font-weight:800; margin-bottom:8px;">EcoBuilders India</h3>
                <div style="display:flex; gap:16px; margin-bottom:20px;">
                    <div><div style="font-size:11px; color:#64748b;">Issue Price</div><div style="font-weight:700; font-size:14px;">₹85</div></div>
                    <div><div style="font-size:11px; color:#64748b;">Listing Gain</div><div style="font-weight:700; font-size:14px; color:#16a34a;">+45.2%</div></div>
                </div>
                <div style="display:flex; justify-content:space-between; background:#f8fafc; padding:12px; border-radius:8px; border:1px solid #e2e8f0;">
                    <div><div style="font-size:11px; color:#64748b;">Listing Price</div><div style="font-weight:700; font-size:13px; color:#0f172a;">₹123.40</div></div>
                    <div style="text-align:right;"><div style="font-size:11px; color:#64748b;">Current Price</div><div style="font-weight:700; font-size:13px; color:#16a34a;">₹145.20</div></div>
                </div>
            </div>
        </div>

        <!-- BOTTOM SECTION -->

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:40px; margin:60px 0;">
            <div>
                <h2 style="font-size:20px; font-weight:700; margin-bottom:20px;">Popular IPO Guides</h2>
                <div style="display:flex; flex-direction:column; gap:16px;">
                    <!-- Guide 1 -->
                    <a href="../learn/ipo-guide" style="display:flex; gap:16px; align-items:center; background:white; padding:16px; border-radius:12px; border:1px solid #e2e8f0; text-decoration:none; color:inherit; box-shadow:0 2px 4px rgba(0,0,0,0.02); transition:transform 0.2s, box-shadow 0.2s, border-color 0.2s;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.05)'; this.style.borderColor='#93c5fd'" onmouseout="this.style.transform='none'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.02)'; this.style.borderColor='#e2e8f0'">
                        <div style="width:48px; height:48px; border-radius:12px; background:#eff6ff; color:#3b82f6; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.773 2.853M4.228 5.728l2.853.773M1.5 12h3M4.228 18.272l2.853-.773M7.188 21.761l.773-2.853" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                        <div>
                            <div style="font-weight:700; color:#0f172a; font-size:15px; margin-bottom:4px;">How to Apply for an IPO Online?</div>
                            <div style="font-size:13px; color:#64748b;">Step-by-step guide for beginners</div>
                        </div>
                        <div style="margin-left:auto; color:#94a3b8;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                    </a>

                    <!-- Guide 2 -->
                    <a href="../learn/asba" style="display:flex; gap:16px; align-items:center; background:white; padding:16px; border-radius:12px; border:1px solid #e2e8f0; text-decoration:none; color:inherit; box-shadow:0 2px 4px rgba(0,0,0,0.02); transition:transform 0.2s, box-shadow 0.2s, border-color 0.2s;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.05)'; this.style.borderColor='#c4b5fd'" onmouseout="this.style.transform='none'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.02)'; this.style.borderColor='#e2e8f0'">
                        <div style="width:48px; height:48px; border-radius:12px; background:#f5f3ff; color:#8b5cf6; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                        <div>
                            <div style="font-weight:700; color:#0f172a; font-size:15px; margin-bottom:4px;">What is ASBA and How it Works?</div>
                            <div style="font-size:13px; color:#64748b;">Understand Application Supported by Blocked Amount</div>
                        </div>
                        <div style="margin-left:auto; color:#94a3b8;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                    </a>

                    <!-- Guide 3 -->
                    <a href="../learn/gmp" style="display:flex; gap:16px; align-items:center; background:white; padding:16px; border-radius:12px; border:1px solid #e2e8f0; text-decoration:none; color:inherit; box-shadow:0 2px 4px rgba(0,0,0,0.02); transition:transform 0.2s, box-shadow 0.2s, border-color 0.2s;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.05)'; this.style.borderColor='#fcd34d'" onmouseout="this.style.transform='none'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.02)'; this.style.borderColor='#e2e8f0'">
                        <div style="width:48px; height:48px; border-radius:12px; background:#fffbeb; color:#f59e0b; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M23 6l-9.5 9.5-5-5L1 18" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17 6h6v6" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                        <div>
                            <div style="font-weight:700; color:#0f172a; font-size:15px; margin-bottom:4px;">Understanding Grey Market Premium</div>
                            <div style="font-size:13px; color:#64748b;">How unofficial premiums indicate listing gains</div>
                        </div>
                        <div style="margin-left:auto; color:#94a3b8;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <h2 style="font-size:20px; font-weight:700; margin-bottom:20px;">Frequently Asked Questions</h2>
                <div style="display:flex; flex-direction:column; gap:12px;">
                    <!-- FAQ 1: Allotment -->
                    <a href="faqs" style="display:block; background:#f8fafc; padding:16px 20px; border-radius:12px; border:1px solid #e2e8f0; text-decoration:none; color:inherit; transition:all 0.2s;" onmouseover="this.style.background='#eff6ff'; this.style.borderColor='#bfdbfe';" onmouseout="this.style.background='#f8fafc'; this.style.borderColor='#e2e8f0';">
                        <div style="display:flex; justify-content:space-between; align-items:center;">
                            <div style="font-weight:600; font-size:14px; color:#0f172a;">How IPO Allotment Works</div>
                            <svg width="18" height="18" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                    </a>

                    <!-- FAQ 2: GMP -->
                    <a href="../learn/gmp" style="display:block; background:#eff6ff; padding:16px 20px; border-radius:12px; border:1px solid #bfdbfe; text-decoration:none; color:inherit; transition:all 0.2s;" onmouseover="this.style.background='#dbeafe'; this.style.borderColor='#93c5fd';" onmouseout="this.style.background='#eff6ff'; this.style.borderColor='#bfdbfe';">
                        <div style="display:flex; justify-content:space-between; align-items:center;">
                            <div style="display:flex; align-items:center; gap:8px;">
                                <svg width="18" height="18" fill="none" stroke="#3b82f6" stroke-width="2" viewBox="0 0 24 24"><path d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2z"></path><path d="M16 14v.01M12 14v.01M8 14v.01M16 18v.01M12 18v.01M8 18v.01M16 10v.01M12 10v.01M8 10v.01M8 6h8"></path></svg>
                                <span style="font-weight:600; font-size:14px; color:#2563eb;">What is GMP?</span>
                            </div>
                            <svg width="18" height="18" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                    </a>

                    <!-- FAQ 3: ASBA -->
                    <a href="../learn/asba" style="display:block; background:#f8fafc; padding:16px 20px; border-radius:12px; border:1px solid #e2e8f0; text-decoration:none; color:inherit; transition:all 0.2s;" onmouseover="this.style.background='#eff6ff'; this.style.borderColor='#bfdbfe';" onmouseout="this.style.background='#f8fafc'; this.style.borderColor='#e2e8f0';">
                        <div style="display:flex; justify-content:space-between; align-items:center;">
                            <div style="font-weight:600; font-size:14px; color:#0f172a;">What is ASBA?</div>
                            <svg width="18" height="18" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                    </a>
                </div>
                <div style="margin-top:20px; text-align:right;">
                    <a href="faqs" style="display:inline-flex; align-items:center; gap:8px; font-size:14px; color:#3b82f6; font-weight:700; text-decoration:none;" onmouseover="this.style.color='#1d4ed8';" onmouseout="this.style.color='#3b82f6';">
                        View All FAQs <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </a>
                </div>
            </div>
        </div>

    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.2"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    function loadIPOs() {
        const tbody = document.getElementById("ipo-main-table").querySelector("tbody");
        tbody.innerHTML = '<tr><td colspan="9" style="text-align: center; padding: 30px;">Loading IPO Data...</td></tr>';
        
        // Use basic filters if selected
        const typeFilter = document.getElementById("filter-type") ? document.getElementById("filter-type").value : '';
        const statusFilter = document.getElementById("filter-status") ? document.getElementById("filter-status").value : '';
        
        let url = '<?= BASE_URL ?>api/get_ipos.php?';
        if (typeFilter) url += 'type=' + typeFilter + '&';
        if (statusFilter) url += 'status=' + statusFilter;

        fetch(url)
            .then(res => res.json())
            .then(data => {
                if (data.status !== "success" || !data.data || data.data.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="9" style="text-align: center; padding: 30px; color: #ef4444;">No IPOs found.</td></tr>';
                    return;
                }
                
                let html = '';
                let total = 0, open = 0, upcoming = 0, listed = 0;
                data.data.forEach(ipo => {
                    total++;
                    let currentStatus = (ipo.status || '').toUpperCase();
                    if (currentStatus === 'OPEN' || currentStatus === 'LIVE') open++;
                    if (currentStatus === 'UPCOMING') upcoming++;
                    if (currentStatus === 'LISTED') listed++;

                    const typeStyle = ipo.type === 'MAIN' 
                        ? 'background:#e0f2fe; color:#0369a1;' 
                        : 'background:#f3e8ff; color:#7e22ce;';
                        
                    let statusStyle = 'background:#f1f5f9; color:#475569;'; // default
                    if (currentStatus === 'OPEN' || currentStatus === 'LIVE') {
                        statusStyle = 'background:#dcfce7; color:#166534;';
                        ipo.status = 'OPEN'; // Normalize for display
                    }
                    else if (currentStatus === 'UPCOMING') statusStyle = 'background:#fef9c3; color:#854d0e;';
                    else if (currentStatus === 'LISTED') statusStyle = 'background:#dbeafe; color:#1e40af;';

                    let gmpText = '--';
                    if (ipo.gmp_price) {
                        let isPos = parseFloat(ipo.gmp_price) > 0;
                        let color = isPos ? '#16a34a' : (parseFloat(ipo.gmp_price) < 0 ? '#ef4444' : '#64748b');
                        let sign = isPos ? '+' : '';
                        let pct = ipo.gmp_percentage ? ` (${sign}${ipo.gmp_percentage}%)` : '';
                        gmpText = `<span style="color:${color}; font-weight:600;">${sign}₹${ipo.gmp_price}${pct}</span>`;
                    }
                    
                    const priceBand = ipo.price_band || '--';
                    const issueSize = ipo.issue_size ? `₹${ipo.issue_size}` : '--';
                    const lotSize = ipo.lot_size ? `${ipo.lot_size} Shares` : '--';
                    
                    const formatDt = dt => {
                        if (!dt) return '';
                        const d = new Date(dt);
                        return isNaN(d) ? dt : d.toLocaleDateString('en-GB', {day:'numeric', month:'short'});
                    };
                    const openDt = formatDt(ipo.open_date);
                    const closeDt = formatDt(ipo.close_date);
                    const datesStr = (openDt && closeDt) ? `${openDt} - ${closeDt}` : '--';

                    html += `<tr>
                        <td style="font-weight:600; color:#0f172a;">${ipo.name}</td>
                        <td><span style="padding:2px 6px; border-radius:4px; font-size:11px; font-weight:700; ${typeStyle}">${ipo.type || 'N/A'}</span></td>
                        <td>${priceBand}</td>
                        <td>${issueSize}</td>
                        <td>${lotSize}</td>
                        <td style="font-size:12px; color:#64748b;">${datesStr}</td>
                        <td>${gmpText}</td>
                        <td><span style="padding:2px 8px; border-radius:12px; font-size:11px; font-weight:700; ${statusStyle}">${ipo.status || 'N/A'}</span></td>
                    </tr>`;
                });
                tbody.innerHTML = html;
                
                // Initialize pagination after table is populated (show 20 per page)
                window.reinitIpoPagination = function() {
                    if (typeof initTablePagination === 'function') {
                        initTablePagination('ipo-main-table', 'ipo-pagination', 20);
                    }
                };
                window.reinitIpoPagination();

                // Update market stats if elements exist
                if (document.getElementById("stat-total")) document.getElementById("stat-total").innerText = total;
                if (document.getElementById("stat-open")) document.getElementById("stat-open").innerText = open;
                if (document.getElementById("stat-upcoming")) document.getElementById("stat-upcoming").innerText = upcoming;
                if (document.getElementById("stat-listed")) document.getElementById("stat-listed").innerText = listed;
            })
            .catch(err => {
                console.error("Error fetching IPOs:", err);
                tbody.innerHTML = '<tr><td colspan="9" style="text-align: center; padding: 30px; color: #ef4444;">Error loading data.</td></tr>';
            });
    }

    loadIPOs();
    
    // Bind filters
    const applyBtn = document.getElementById("apply-filter");
    if (applyBtn) {
        applyBtn.addEventListener("click", loadIPOs);
    }
});
</script>
</body>
</html>

