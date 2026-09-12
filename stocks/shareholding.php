<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Shareholding Share Price, Financials, Ratio &amp; Analysis | IPOSETU</title>
<meta name="description" content="Track live Shareholding stock analysis, 52-week range, valuation multiples, corporate actions, and financial reports on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<style>
        @keyframes fadeUp { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
        .market-hero { background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: white; padding: 60px 40px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; animation: fadeUp 0.6s forwards; }
        .market-hero::after { content: ''; position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(59,130,246,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none; }
        .anim-card { animation: fadeUp 0.6s both; }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
    </style>
<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
<div class="market-hero">
<div style="font-size: 12px; font-weight: 700; color: #60a5fa; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Stocks / Shareholding Pattern</div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px;">SHAREHOLDING ANALYZER</h1>
<p style="font-size: 16px; color: #94a3b8; max-width: 600px; line-height: 1.6;">Analyze the ownership breakdown of companies to see promoter pledging and FII/DII activity.</p>
<div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 16px;">
<div>
</div>
<div style="position: relative;">
<input placeholder="Search Company (e.g. TCS)" style="padding: 12px 16px; padding-left: 40px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 14px; font-weight: 700; color: white; width: 300px; outline: none;" type="text" value="Tata Consultancy Services"/>
<svg fill="none" height="18" stroke="#94a3b8" stroke-width="2" style="position: absolute; left: 12px; top: 13px;" viewbox="0 0 24 24" width="18"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg>
</div>
</div>
</div>
</div>

<main class="container" style="margin-bottom: 80px;">
<div class="share-dashboard">
<!-- Hero Ownership Snapshot -->
<div class="share-hero">
<h1>Shareholding Pattern</h1>
<p>The shareholding pattern reveals exactly who owns the company. Tracking changes in ownership distribution helps investors understand institutional conviction, promoter skin-in-the-game, and retail participation trends.</p>
<div class="ownership-snapshot">
<h3 style="font-size:16px; font-weight:700; color:#334155; margin-bottom:4px;">Market Aggregate Ownership (Q3 FY26)</h3>
<div class="stacked-bar-container">
<div class="sb-segment sb-promoter" title="Promoters">45%</div>
<div class="sb-segment sb-fii" title="Foreign Institutional Investors">25%</div>
<div class="sb-segment sb-dii" title="Domestic Institutional Investors">15%</div>
<div class="sb-segment sb-public" title="Public / Retail">15%</div>
</div>
<div class="sb-legend">
<div class="legend-item">
<div class="legend-dot" style="background:#3b82f6;"></div> Promoters
                        </div>
<div class="legend-item">
<div class="legend-dot" style="background:#8b5cf6;"></div> FIIs
                        </div>
<div class="legend-item">
<div class="legend-dot" style="background:#10b981;"></div> DIIs
                        </div>
<div class="legend-item">
<div class="legend-dot" style="background:#f59e0b;"></div> Public
                        </div>
</div>
</div>
</div>
<!-- Shareholding Changes Matrix -->
<div class="share-matrix">
<div class="matrix-header">
<h2 style="font-size: 20px; font-weight: 800; color: #0f172a;">Quarterly Ownership Changes</h2>
<p style="font-size: 14px; color: #64748b; margin-top: 4px;">Tracking the delta between the previous quarter and the current reported quarter.</p>
</div>
<table class="matrix-table">
<thead>
<tr>
<th>Category</th>
<th class="right">Previous Qtr</th>
<th class="right">Current Qtr</th>
<th class="right">Change (Delta)</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<span class="matrix-cat">
<div class="legend-dot" style="background:#3b82f6;"></div> Promoters
                                </span>
</td>
<td class="right">45.00%</td>
<td class="right">45.00%</td>
<td class="right"><span class="trend-badge trend-flat">0.00%</span></td>
</tr>
<tr>
<td>
<span class="matrix-cat">
<div class="legend-dot" style="background:#8b5cf6;"></div> FII (Foreign Institutional)
                                </span>
</td>
<td class="right">23.50%</td>
<td class="right">25.00%</td>
<td class="right">
<span class="trend-badge trend-up">
<svg fill="none" height="12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" viewbox="0 0 24 24" width="12"><line x1="12" x2="12" y1="19" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
                                    +1.50%
                                </span>
</td>
</tr>
<tr>
<td>
<span class="matrix-cat">
<div class="legend-dot" style="background:#10b981;"></div> DII (Domestic Institutional)
                                </span>
</td>
<td class="right">16.20%</td>
<td class="right">15.00%</td>
<td class="right">
<span class="trend-badge trend-down">
<svg fill="none" height="12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" viewbox="0 0 24 24" width="12"><line x1="12" x2="12" y1="5" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                    -1.20%
                                </span>
</td>
</tr>
<tr>
<td>
<span class="matrix-cat">
<div class="legend-dot" style="background:#f59e0b;"></div> Public / Retail
                                </span>
</td>
<td class="right">15.30%</td>
<td class="right">15.00%</td>
<td class="right">
<span class="trend-badge trend-down">
<svg fill="none" height="12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" viewbox="0 0 24 24" width="12"><line x1="12" x2="12" y1="5" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                    -0.30%
                                </span>
</td>
</tr>
</tbody>
</table>
<!-- Pledge Warning -->
<div style="background:#fffbeb; border-top:1px solid #fde68a; padding:16px 24px; display:flex; gap:12px; align-items:center;">
<svg fill="none" height="20" stroke="#d97706" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="20"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" x2="12" y1="9" y2="13"></line><line x1="12" x2="12.01" y1="17" y2="17"></line></svg>
<span style="font-size:13px; color:#92400e; font-weight:600;">Pledged Promoter Shares: <span style="font-family:'Consolas', monospace; font-weight:800;">4.2%</span> of total promoter holding. High pledging can pose structural risks during market downturns.</span>
</div>
</div>
<!-- How To Read Workflow -->
<div>
<h2 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 16px;">How to Interpret Ownership Changes</h2>
<div class="how-to-read">
<div class="read-step">
<div class="step-num">1</div>
<h4>Promoter Trend</h4>
<p>Consistent promoter holding indicates stability. An increase shows management confidence ("skin in the game"). A sudden decrease without a valid corporate reason (like OFS) is a massive red flag.</p>
</div>
<div class="read-step">
<div class="step-num">2</div>
<h4>Institutional Validation</h4>
<p>Rising FII and DII stakes usually indicate that professional analysts have vetted the company and see growth potential. They bring stability and liquidity to the stock.</p>
</div>
<div class="read-step">
<div class="step-num">3</div>
<h4>The Public Trap</h4>
<p>If promoter and institutional holdings are rapidly falling while "Public" holding is rising, it often means informed money is exiting the stock by selling to retail investors.</p>
</div>
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
