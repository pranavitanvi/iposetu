<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Stocks – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Stocks on IPOSETU."/>
<link class="style-link" href="/iposetu/assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="/iposetu/assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/header.php'; ?>
<style>
        @keyframes fadeUp { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
        
        .market-hero { background: #0f172a; color: white; padding: 60px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; }
        .market-hero::after { content: ''; position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(59,130,246,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none; }
        
        .market-bento { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 40px; }
        .market-card { background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 4px 6px rgba(0,0,0,0.02); transition: 0.3s; animation: fadeUp 0.6s both; }
        .market-card:hover { transform: translateY(-5px); box-shadow: 0 12px 24px rgba(0,0,0,0.06); border-color: #cbd5e1; }
        .market-card.delay-1 { animation-delay: 0.1s; }
        .market-card.delay-2 { animation-delay: 0.2s; }
        .market-card.delay-3 { animation-delay: 0.3s; }
        .market-card.delay-4 { animation-delay: 0.4s; }
        .market-card.delay-5 { animation-delay: 0.5s; }
        .market-card.delay-6 { animation-delay: 0.6s; }
        
        .index-name { font-size: 14px; font-weight: 800; color: #475569; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px; }
        .index-value { font-size: 28px; font-weight: 900; color: #0f172a; letter-spacing: -0.5px; }
        
        .val-green { color: #10b981; font-weight: 700; display: flex; align-items: center; gap: 4px; margin-top: 8px; }
        .val-red { color: #ef4444; font-weight: 700; display: flex; align-items: center; gap: 4px; margin-top: 8px; }
        
        .breadth-bar { height: 12px; border-radius: 6px; display: flex; overflow: hidden; background: #f1f5f9; margin-top: 12px; }
        .breadth-adv { width: 59%; background: #10b981; transition: width 1s ease-in-out; }
        .breadth-unc { width: 5%; background: #94a3b8; transition: width 1s ease-in-out; }
        .breadth-dec { width: 36%; background: #ef4444; transition: width 1s ease-in-out; }
    </style>
<div class="container" style="padding-top: 40px; padding-bottom: 80px;">
<div class="market-hero">
<div style="font-size: 12px; font-weight: 700; color: #3b82f6; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Stocks → Market Overview</div>
<div style="display: flex; justify-content: space-between; align-items: flex-end;">
<div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px;">Market Overview</h1>
<p style="font-size: 16px; color: #94a3b8; max-width: 600px; line-height: 1.6;">Track Indian market indices, sector performance, and market breadth in real-time.</p>
</div>
<div style="text-align: right;">
<span style="font-size: 12px; font-weight: 600; color: #10b981; display: inline-flex; align-items: center; gap: 6px; background: rgba(16,185,129,0.1); padding: 8px 16px; border-radius: 20px; border: 1px solid rgba(16,185,129,0.2);">
<span style="display: inline-block; width: 8px; height: 8px; background: #10b981; border-radius: 50%; box-shadow: 0 0 8px #10b981; animation: pulse 2s infinite;"></span> LIVE MARKET
                    </span>
</div>
</div>
</div>
<main style="display: grid; grid-template-columns: 1fr 300px; gap: 40px;">
<div class="main-content">
<h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 24px;">Market Indices</h2>
<div class="market-bento">
<!-- NIFTY 50 -->
<div class="market-card delay-1 anim-card delay-3">
<div class="index-name">NIFTY 50</div>
<div class="index-value" id="val-nifty50">Loading...</div>
<div class="val-green" id="change-nifty50">
                            ---
                        </div>
</div>
<!-- SENSEX -->
<div class="market-card delay-2 anim-card delay-5">
<div class="index-name">SENSEX</div>
<div class="index-value" id="val-sensex">Loading...</div>
<div class="val-green" id="change-sensex">
                            ---
                        </div>
</div>
<!-- BANK NIFTY -->
<div class="market-card delay-3 anim-card delay-2">
<div class="index-name">BANK NIFTY</div>
<div class="index-value" id="val-banknifty">Loading...</div>
<div class="val-red" id="change-banknifty">
                            ---
                        </div>
</div>
<!-- NIFTY IT -->
<div class="market-card delay-4 anim-card delay-2">
<div class="index-name">NIFTY IT</div>
<div class="index-value" id="val-niftyit">Loading...</div>
<div class="val-green" id="change-niftyit">
                            ---
                        </div>
</div>
<!-- NIFTY AUTO -->
<div class="market-card delay-5 anim-card delay-3">
<div class="index-name">NIFTY AUTO</div>
<div class="index-value">25,180.40</div>
<div class="val-green">
<svg fill="none" height="16" stroke="currentColor" stroke-width="3" viewbox="0 0 24 24" width="16"><polyline points="18 15 12 9 6 15"></polyline></svg>
                            112.30 (0.44%)
                        </div>
</div>
<!-- NIFTY PHARMA -->
<div class="market-card delay-6 anim-card delay-1">
<div class="index-name">NIFTY PHARMA</div>
<div class="index-value">19,305.20</div>
<div class="val-red">
<svg fill="none" height="16" stroke="currentColor" stroke-width="3" viewbox="0 0 24 24" width="16"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            -45.80 (0.23%)
                        </div>
</div>
</div>
<!-- Market Breadth -->
<div class="anim-card delay-1" style="background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; margin-bottom: 40px; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
<h3 style="font-size: 14px; font-weight: 800; color: #475569; margin-bottom: 16px; text-transform: uppercase; letter-spacing: 0.5px;">Market Breadth (NSE)</h3>
<div style="display: flex; justify-content: space-between; font-size: 15px; font-weight: 700;">
<span style="color: #10b981;">Advances: 1,420</span>
<span style="color: #64748b;">Unchanged: 115</span>
<span style="color: #ef4444;">Declines: 850</span>
</div>
<div class="breadth-bar">
<div class="breadth-adv"></div>
<div class="breadth-unc"></div>
<div class="breadth-dec"></div>
</div>
</div>
<!-- Chart -->
<div class="anim-card delay-4" style="background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; margin-bottom: 40px; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
<h3 style="font-size: 18px; font-weight: 800; color: #0f172a;">Market Performance</h3>
<div style="display: flex; gap: 4px; background: #f1f5f9; padding: 4px; border-radius: 8px;">
<button style="padding: 6px 12px; font-size: 12px; font-weight: 700; background: white; color: #0f172a; border-radius: 6px; border: 1px solid #e2e8f0; cursor: pointer; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">1D</button>
<button style="padding: 6px 12px; font-size: 12px; font-weight: 600; background: transparent; color: #64748b; border: none; cursor: pointer;">1W</button>
<button style="padding: 6px 12px; font-size: 12px; font-weight: 600; background: transparent; color: #64748b; border: none; cursor: pointer;">1M</button>
<button style="padding: 6px 12px; font-size: 12px; font-weight: 600; background: transparent; color: #64748b; border: none; cursor: pointer;">1Y</button>
</div>
</div>
<div style="position: relative; height: 300px; border-radius: 8px; overflow: hidden; background: #f8fafc; border: 1px solid #e2e8f0;">
<svg style="width: 100%; height: 100%; preserveAspectRatio: none;" viewbox="0 0 800 300">
<defs>
<lineargradient id="chartGrad" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#3b82f6" stop-opacity="0.2"></stop>
<stop offset="100%" stop-color="#3b82f6" stop-opacity="0"></stop>
</lineargradient>
</defs>
<path d="M0 250 L100 220 L200 240 L300 180 L400 190 L500 140 L600 150 L700 80 L800 100 L800 300 L0 300 Z" fill="url(#chartGrad)"></path>
<path d="M0 250 L100 220 L200 240 L300 180 L400 190 L500 140 L600 150 L700 80 L800 100" fill="none" stroke="#3b82f6" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path>
</svg>
<div class="anim-card delay-4" style="position: absolute; top: 16px; left: 16px; font-size: 14px; font-weight: 800; color: #3b82f6; display: flex; align-items: center; gap: 8px; background: white; padding: 6px 12px; border-radius: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
<span style="display: inline-block; width: 8px; height: 8px; background: #3b82f6; border-radius: 50%;"></span> NIFTY 50
                        </div>
</div>
</div>
<!-- Sector Performance -->
<section style="margin-bottom: 40px;">
<h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 20px;">SECTOR PERFORMANCE</h3>
<div style="border: 1px solid var(--border-color); border-radius: 12px; overflow: hidden; background: white;">
<table style="width: 100%; border-collapse: collapse; text-align: left;">
<thead style="background: #f8fafc; border-bottom: 1px solid var(--border-color);">
<tr>
<th style="padding: 12px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Sector</th>
<th style="padding: 12px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Index Value</th>
<th style="padding: 12px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Change</th>
<th style="padding: 12px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; text-align: right;">% Change</th>
</tr>
</thead>
<tbody>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 14px 16px; font-size: 14px; font-weight: 600; color: #0f172a;">IT</td>
<td style="padding: 14px 16px; font-size: 14px; color: #475569;">37,420.15</td>
<td style="padding: 14px 16px; font-size: 14px; color: #10b981; font-weight: 600;">+520.60</td>
<td style="padding: 14px 16px; font-size: 14px; color: #10b981; font-weight: 700; text-align: right;">+1.41%</td>
</tr>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 14px 16px; font-size: 14px; font-weight: 600; color: #0f172a;">Metal</td>
<td style="padding: 14px 16px; font-size: 14px; color: #475569;">8,920.45</td>
<td style="padding: 14px 16px; font-size: 14px; color: #10b981; font-weight: 600;">+85.30</td>
<td style="padding: 14px 16px; font-size: 14px; color: #10b981; font-weight: 700; text-align: right;">+0.96%</td>
</tr>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 14px 16px; font-size: 14px; font-weight: 600; color: #0f172a;">Auto</td>
<td style="padding: 14px 16px; font-size: 14px; color: #475569;">25,180.40</td>
<td style="padding: 14px 16px; font-size: 14px; color: #10b981; font-weight: 600;">+112.30</td>
<td style="padding: 14px 16px; font-size: 14px; color: #10b981; font-weight: 700; text-align: right;">+0.44%</td>
</tr>
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 14px 16px; font-size: 14px; font-weight: 600; color: #0f172a;">Banking</td>
<td style="padding: 14px 16px; font-size: 14px; color: #475569;">52,140.85</td>
<td style="padding: 14px 16px; font-size: 14px; color: #ef4444; font-weight: 600;">-85.10</td>
<td style="padding: 14px 16px; font-size: 14px; color: #ef4444; font-weight: 700; text-align: right;">-0.16%</td>
</tr>
<tr>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 600; color: #0f172a;">FMCG</td>
<td style="padding: 14px 16px; font-size: 14px; color: #475569;">54,320.10</td>
<td style="padding: 14px 16px; font-size: 14px; color: #ef4444; font-weight: 600;">-145.20</td>
<td style="padding: 14px 16px; font-size: 14px; color: #ef4444; font-weight: 700; text-align: right;">-0.27%</td>
</tr>
</tbody>
</table>
</div>
</section>
</div>
 <!-- Close main-content -->
<!-- Right Sidebar -->
<aside class="sidebar">
<!-- Top Gainers Widget -->
<div style="background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; margin-bottom: 24px; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
<h3 style="font-size: 16px; font-weight: 800; color: #0f172a;">Top Gainers</h3>
<a href="gainers.html" style="font-size: 12px; font-weight: 700; color: #3b82f6; text-decoration: none;">View All</a>
</div>
<div style="display: flex; flex-direction: column; gap: 12px;">
<div style="display: flex; justify-content: space-between; align-items: center; padding-bottom: 12px; border-bottom: 1px solid #f1f5f9;">
<div>
<div style="font-weight: 700; color: #1e293b; font-size: 14px;">TCS</div>
<div style="font-size: 12px; color: #64748b;">IT Services</div>
</div>
<div style="text-align: right;">
<div style="font-weight: 800; color: #0f172a; font-size: 14px;">4,250.60</div>
<div style="font-size: 12px; font-weight: 700; color: #10b981;">+3.2%</div>
</div>
</div>
<div style="display: flex; justify-content: space-between; align-items: center; padding-bottom: 12px; border-bottom: 1px solid #f1f5f9;">
<div>
<div style="font-weight: 700; color: #1e293b; font-size: 14px;">RELIANCE</div>
<div style="font-size: 12px; color: #64748b;">Conglomerate</div>
</div>
<div style="text-align: right;">
<div style="font-weight: 800; color: #0f172a; font-size: 14px;">2,940.15</div>
<div style="font-size: 12px; font-weight: 700; color: #10b981;">+2.5%</div>
</div>
</div>
<div style="display: flex; justify-content: space-between; align-items: center;">
<div>
<div style="font-weight: 700; color: #1e293b; font-size: 14px;">HDFCBANK</div>
<div style="font-size: 12px; color: #64748b;">Banking</div>
</div>
<div style="text-align: right;">
<div style="font-weight: 800; color: #0f172a; font-size: 14px;">1,620.40</div>
<div style="font-size: 12px; font-weight: 700; color: #10b981;">+1.8%</div>
</div>
</div>
</div>
</div>
<!-- Trending Stocks Widget -->
<div style="background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; margin-bottom: 24px; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
<h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 16px;">Trending Stocks</h3>
<div style="display: flex; flex-wrap: wrap; gap: 8px;">
<a href="#" style="background: #f1f5f9; color: #475569; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 700; text-decoration: none;">#ZOMATO</a>
<a href="#" style="background: #f1f5f9; color: #475569; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 700; text-decoration: none;">#SUZLON</a>
<a href="#" style="background: #f1f5f9; color: #475569; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 700; text-decoration: none;">#IRFC</a>
<a href="#" style="background: #f1f5f9; color: #475569; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 700; text-decoration: none;">#JIOFIN</a>
<a href="#" style="background: #f1f5f9; color: #475569; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 700; text-decoration: none;">#TATASTEEL</a>
</div>
</div>
<!-- Ad Placeholder -->
<div style="background: #f8fafc; border: 1px dashed #cbd5e1; border-radius: 12px; height: 250px; display: flex; align-items: center; justify-content: center; color: #94a3b8; font-weight: 700; font-size: 14px;">
                    ADVERTISEMENT 300x250
                </div>
</aside>
</main>
</div>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/footer.php'; ?>
<div id="sticky-bottom-ad-container"></div>
<script src="/iposetu/assets/js/components.js?v=6.1"></script>
<script src="/iposetu/assets/js/ad-manager.js?v=1.2"></script>
<script src="/iposetu/assets/js/main.js"></script>
<script src="/iposetu/assets/js/market-overview.js"></script>
</body>
</html>
