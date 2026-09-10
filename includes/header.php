<?php 
require_once __DIR__ . '/seo_helper.php';

// Dynamically load live ticker data (synced from Upstox API)
$tickerCachePath = dirname(__DIR__) . '/api/ticker_cache.json';
$liveTickerItems = [];
if (file_exists($tickerCachePath)) {
    $rawTicker = @file_get_contents($tickerCachePath);
    $decodedTicker = json_decode($rawTicker, true);
    if (!empty($decodedTicker) && is_array($decodedTicker)) {
        $liveTickerItems = $decodedTicker;
    }
}
// Fallback if cache is empty
if (empty($liveTickerItems)) {
    $liveTickerItems = [
        ['symbol' => 'ESDS', 'live_price' => '1542.50', 'change_abs' => '785.50', 'change_pct' => '103.76', 'is_up' => true],
        ['symbol' => 'PERNIASPOP', 'live_price' => '577.00', 'change_abs' => '42.00', 'change_pct' => '7.85', 'is_up' => true],
        ['symbol' => 'PRIORITY', 'live_price' => '221.20', 'change_abs' => '-8.80', 'change_pct' => '-3.83', 'is_up' => false],
        ['symbol' => 'SHANTIINOR', 'live_price' => '176.15', 'change_abs' => '18.45', 'change_pct' => '11.70', 'is_up' => true],
        ['symbol' => 'ASHUTOSH', 'live_price' => '155.90', 'change_abs' => '15.90', 'change_pct' => '11.36', 'is_up' => true],
        ['symbol' => 'DEEPA', 'live_price' => '199.33', 'change_abs' => '-21.67', 'change_pct' => '-9.81', 'is_up' => false],
        ['symbol' => 'MOMSBELIEF', 'live_price' => '220.00', 'change_abs' => '-19.00', 'change_pct' => '-7.95', 'is_up' => false],
    ];
}
?>
<div class="ticker-wrap">
<div class="ticker" id="liveTickerContainer">
<?php for ($loop = 0; $loop < 2; $loop++): ?>
    <?php foreach ($liveTickerItems as $tItem): 
        $isUp = !empty($tItem['is_up']);
        $cls = $isUp ? 'up' : 'down';
        $sym = htmlspecialchars($tItem['symbol'] ?? 'IPO');
        $lPrice = number_format((float)($tItem['live_price'] ?? 0), 2);
        $cAbs = (float)($tItem['change_abs'] ?? 0);
        $cPct = (float)($tItem['change_pct'] ?? 0);
        $sign = $cAbs >= 0 ? '+' : '';
        $cText = $sign . number_format($cAbs, 2) . " (" . $sign . number_format($cPct, 2) . "%)";
    ?>
    <div class="ticker-item <?= $cls ?>"><span class="ticker-name"><?= $sym ?></span> <span class="ticker-price"><?= $lPrice ?></span> <span class="ticker-change"><?= $cText ?></span></div>
    <?php endforeach; ?>
<?php endfor; ?>
</div>
</div>
<!-- Premium Header -->
<header class="site-header premium-light">
<div class="container header-inner">
<!-- Left: Logo & Tagline -->
<div class="header-left">
<a class="logo" href="/iposetu/" style="display:flex;align-items:center;gap:10px;text-decoration:none;">
<svg fill="none" height="30" viewbox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
<path d="M12 2L2 7L12 12L22 7L12 2Z" fill="url(#ipoLogoGrad)"></path>
<path d="M2 17L12 22L22 17M2 12L12 17L22 12" stroke="#2563EB" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"></path>
<defs>
<linearGradient id="ipoLogoGrad" x1="2" y1="2" x2="22" y2="12" gradientUnits="userSpaceOnUse">
<stop stop-color="#3B82F6"/>
<stop offset="1" stop-color="#1D4ED8"/>
</linearGradient>
</defs>
</svg>
<span class="logo-text" style="font-size:21px;font-weight:900;letter-spacing:-0.5px;color:#0f172a;">IPOSETU</span>
</a>
</div>
<button class="mobile-menu-btn">☰</button>
<!-- Center: Navigation -->
<nav class="main-nav">
<ul class="nav-links">
<!-- IPO Mega Menu -->
<li class="has-mega-dropdown">
<a href="/iposetu/ipo/" style="display:flex; align-items:center;">IPO <svg fill="none" height="12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="margin-left:4px;" viewbox="0 0 24 24" width="12"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
<div class="mega-dropdown-content compact-dropdown" style="width: 520px; max-width: 90vw;">
<div class="container" style="padding: 0; max-width: 100%;">
<div class="mega-menu-grid cols-2" style="grid-template-columns: repeat(2, 1fr); gap: 32px;">
<div class="mega-menu-col">
<h4>IPO Overview</h4>
<ul>
<li><a href="/iposetu/ipo/">All IPOs</a></li>
<li><a href="/iposetu/ipo/current">Current IPOs</a></li>
<li><a href="/iposetu/ipo/upcoming">Upcoming IPOs</a></li>
<li><a href="/iposetu/ipo/open">Open IPOs</a></li>
<li><a href="/iposetu/ipo/closed">Closed IPOs</a></li>
<li><a href="/iposetu/ipo/listed">Listed IPOs</a></li>
</ul>
</div>
<!-- IPO Data (Commented out)
<div class="mega-menu-col">
<h4>IPO Data</h4>
<ul>
<li><a href="/iposetu/subscription/">IPO Subscription</a></li>
<li><a href="/iposetu/ipo/performance">IPO Performance</a></li>
</ul>
</div>
-->
<!-- COMMENED OUT STATIC RESEARCH PAGES
<div class="mega-menu-col">
<h4>IPO Research</h4>
<ul>
<li><a href="/iposetu/ipo/reviews">IPO Reviews</a></li>
<li><a href="/iposetu/ipo/reviews#ratings">IPO Ratings</a></li>
<li><a href="/iposetu/ipo/reviews#analysis">IPO Analysis</a></li>
<li><a href="/iposetu/ipo/reviews#financials">IPO Financials</a></li>
<li><a href="/iposetu/ipo/reviews#anchor">Anchor Investors</a></li>
</ul>
</div>
-->
<div class="mega-menu-col">
<h4>IPO Resources</h4>
<ul>
<li><a href="/iposetu/calendar/">IPO Calendar</a></li>
<li><a href="/iposetu/news/">IPO News</a></li>
<li><a href="/iposetu/ipo/articles">IPO Articles</a></li>
<li><a href="/iposetu/learn/">IPO Guide</a></li>
<li><a href="/iposetu/ipo/faqs">IPO FAQs</a></li>
</ul>
</div>
<!-- Mega Menu Promo -->
<div class="mega-menu-promo" style="flex-wrap: wrap; gap: 12px;">
<div style="display:flex; align-items:center; gap:8px; flex: 1; min-width: 250px; flex-wrap: wrap;">
<span style="background:#fef3c7; color:#d97706; font-size:10px; font-weight:700; padding:2px 6px; border-radius:4px; white-space: nowrap;">RECOMMENDED</span>
<span style="font-weight:600; font-size:13px; color:#0f172a;">Featured IPO Platform: Open Free Demat Account with ProStocks</span>
</div>
<a class="btn btn-primary" href="/iposetu/brokers/prostocks" style="padding:6px 12px; font-size:11px; border-radius:20px; text-decoration:none; white-space: nowrap;">Explore Now →</a>
</div>
</div>
</div>
</div>
</li>
<!-- SME IPO Mega Menu -->
<li class="has-mega-dropdown">
<a href="/iposetu/sme/" style="display:flex; align-items:center;">SME IPO <svg fill="none" height="12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="margin-left:4px;" viewbox="0 0 24 24" width="12"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
<div class="mega-dropdown-content compact-dropdown" style="width: 520px; max-width: 90vw;">
<div class="container" style="padding: 0; max-width: 100%;">
<div class="mega-menu-grid cols-2" style="grid-template-columns: repeat(2, 1fr); gap: 32px;">
<div class="mega-menu-col">
<h4>SME OVERVIEW</h4>
<ul>
<li><a href="/iposetu/sme/">All SME IPOs</a></li>
<li><a href="/iposetu/sme/current">Current SME IPOs</a></li>
<li><a href="/iposetu/sme/upcoming">Upcoming SME IPOs</a></li>
<li><a href="/iposetu/sme/open">Open SME IPOs</a></li>
<li><a href="/iposetu/sme/closed">Closed SME IPOs</a></li>
</ul>
</div>
<!-- SME DATA (Commented out)
<div class="mega-menu-col">
<h4>SME DATA</h4>
<ul>
<li><a href="/iposetu/subscription/">SME Subscription</a></li>
<li><a href="/iposetu/sme/performance">SME Performance</a></li>
</ul>
</div>
-->
<div class="mega-menu-col">
<h4>SME RESOURCES</h4>
<ul>
<li><a href="/iposetu/calendar/">SME Calendar</a></li>
<li><a href="/iposetu/news/">SME News</a></li>
<li><a href="/iposetu/sme/guide">SME Guide</a></li>
</ul>
</div>
<div class="mega-menu-promo" style="flex-wrap: wrap; gap: 12px;">
<div style="display:flex; align-items:center; gap:8px; flex: 1; min-width: 250px; flex-wrap: wrap;">
<span style="background:#e0f2fe; color:#0369a1; font-size:10px; font-weight:700; padding:2px 6px; border-radius:4px; white-space: nowrap;">GUIDE</span>
<span style="font-weight:600; font-size:13px; color:#0f172a;">New to SME listings? Read our detailed guide to start investing.</span>
</div>
<a class="btn btn-outline" href="/iposetu/sme/guide" style="padding:6px 12px; font-size:11px; border-radius:20px; text-decoration:none; white-space: nowrap;">Read Guide &rarr;</a>
</div>
</div>
</div>
</div>
</li>

<!-- Subscription Link (Commented out: already under IPO & SME IPO dropdowns) -->
<!-- <li><a href="/iposetu/subscription/" style="padding: 18px 12px; font-weight: 700; color: #475569;">Subscription</a></li> -->
<!-- Calendar Link -->
<li><a href="/iposetu/calendar/" style="padding: 18px 12px; font-weight: 700; color: #475569;">Calendar</a></li>
<!-- News Link -->
<li><a href="/iposetu/news/" style="padding: 18px 12px; font-weight: 700; color: #475569;">News</a></li>
<!-- Stocks & ETFs Mega Menu (Commented out)
<li class="has-mega-dropdown">
<a href="/iposetu/stocks/" style="display:flex; align-items:center;">Stocks & ETFs <svg fill="none" height="12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="margin-left:4px;" viewbox="0 0 24 24" width="12"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
<div class="mega-dropdown-content">
<div class="container">
<div class="mega-menu-grid" style="grid-template-columns: repeat(1, 1fr); max-width: 300px;">
<div class="mega-menu-col">
<h4>Live Markets</h4>
<ul>
<li><a href="/iposetu/stocks/">Market Overview</a></li>
<li><a href="/iposetu/stocks/analysis.php">Live Stock Charts</a></li>
<li><a href="/iposetu/etfs/analysis.php">Live ETF Tracker <span class="badge" style="background:#ef4444; color:white; font-size:9px; padding:2px 6px; border-radius:10px; margin-left:4px;">NEW</span></a></li>
</ul>
</div>
</div>
</div>
</div>
</li>
-->
<!-- Brokers Mega Menu (commented out)
<li class="has-mega-dropdown mega-dropdown-right">
<a href="/iposetu/brokers/" style="display:flex; align-items:center;">Brokers <svg fill="none" height="12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="margin-left:4px;" viewbox="0 0 24 24" width="12"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
<div class="mega-dropdown-content">
<div class="container">
<div class="mega-menu-grid" style="grid-template-columns: repeat(2, 1fr); max-width: 600px;">

Column 1:
<div class="mega-menu-col">
                    <h4>Broker Directory</h4>
                    <div class="mega-cat-grid">
                        <a href="/iposetu/brokers/index.html" class="mega-cat-card">
                            <span class="mega-cat-icon">⚡</span>
                            <span class="mega-cat-name">Discount</span>
                        </a>
                        <a href="/iposetu/brokers/index.html" class="mega-cat-card">
                            <span class="mega-cat-icon">🏦</span>
                            <span class="mega-cat-name">Bank</span>
                        </a>
                        <a href="/iposetu/brokers/index.html" class="mega-cat-card">
                            <span class="mega-cat-icon">💼</span>
                            <span class="mega-cat-name">Full Service</span>
                        </a>
                        <a href="/iposetu/brokers/index.html" class="mega-cat-card">
                            <span class="mega-cat-icon">📈</span>
                            <span class="mega-cat-name">Options</span>
                        </a>
                    </div>
                    <a href="/iposetu/brokers/index.html" class="mega-compact-all">View Full Directory &rarr;</a>
                </div>
<! - - Column 2 - - >
<div class="mega-menu-col">
                    <h4>Broker Reviews</h4>
                    <a href="/iposetu/brokers/zerodha.html" class="mega-featured-broker">
                        <div class="mega-featured-icon">Z</div>
                        <div>
                            <div class="mega-featured-title">Zerodha</div>
                            <div class="mega-featured-desc"><span>★★★★★</span> &bull; Zero Brokerage</div>
                        </div>
                    </a>
                    <ul class="mega-compact-list">
                        <li><a href="/iposetu/brokers/groww.html">Groww Review <span style="color:#cbd5e1;">&rarr;</span></a></li>
                        <li><a href="/iposetu/brokers/upstox.html">Upstox Review <span style="color:#cbd5e1;">&rarr;</span></a></li>
                        <li><a href="/iposetu/brokers/angel-one.html">Angel One Review <span style="color:#cbd5e1;">&rarr;</span></a></li>
                        <li><a href="/iposetu/brokers/prostocks.html">ProStocks Review <span style="color:#cbd5e1;">&rarr;</span></a></li>
                    </ul>
                    <a href="/iposetu/brokers/reviews.html" class="mega-compact-all">View All Reviews &rarr;</a>
                </div>
</div>
</div>
</div>
</li>
-->




  <!-- Tools Mega Menu -->
<li class="has-mega-dropdown mega-dropdown-right">
    <a href="/iposetu/tools/ipo-calculator.php" style="display:flex; align-items:center;">Tools <svg fill="none" height="12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="margin-left:4px;" viewBox="0 0 24 24" width="12"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
    <div class="mega-dropdown-content tools-dropdown" style="width: 520px; max-width: 90vw;">
        <div class="container" style="padding: 0; max-width: 100%;">
            <div class="tools-menu-grid" style="padding: 24px 28px;">
                <!-- Column 1 -->
                <div class="tools-menu-col">
                    <h4>IPO Tools</h4>
                    <ul class="tools-hover-list">
                        <li><a href="/iposetu/tools/ipo-calculator.php">IPO Investment Calculator</a></li>
                        <li><a href="/iposetu/tools/listing-gain-calculator.php">Listing Gain Calculator</a></li>
                    </ul>
                </div>
                <!-- Column 2 -->
                <div class="tools-menu-col">
                    <h4>Investment Calculators</h4>
                    <ul class="tools-hover-list">
                        <li><a href="/iposetu/tools/sip-calculator.php">SIP Calculator</a></li>
                        <li><a href="/iposetu/tools/cagr-calculator.php">CAGR Calculator</a></li>
                        <li><a href="/iposetu/tools/brokerage-calculator.php">Brokerage Calculator</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</li>

<!-- Learn Mega Menu -->
<li class="has-mega-dropdown mega-dropdown-right">
    <a href="/iposetu/learn/" style="display:flex; align-items:center;">Learn <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left:4px;"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
    <div class="mega-dropdown-content">
        <div class="container">
            <div class="mega-menu-grid" style="grid-template-columns: repeat(3, 1fr);">
                <!-- Column 1 -->
                <div class="mega-menu-col">
                    <h4>Learning Centre</h4>
                    <ul class="mf-hover-list">
                        <li><a href="/iposetu/learn/index.html">All Guides</a></li>
                        <li><a href="/iposetu/learn/ipo-guide.html" style="font-weight:700; color:var(--primary-color);">Complete IPO Guide</a></li>
                        <li><a href="/iposetu/learn/ipo-faqs.html">IPO FAQs</a></li>
                        <li><a href="/iposetu/learn/index.html">Beginner's Guide</a></li>
                    </ul>
                </div>
                <!-- Column 2 -->
                <div class="mega-menu-col">
                    <h4>IPO Learning</h4>
                    <ul class="mf-hover-list-tool">
                        <li><a href="/iposetu/learn/how-to-apply-ipo.html">How to Apply for an IPO</a></li>
                        <li><a href="/iposetu/learn/gmp.html">What is GMP →</a></li>
                        <li><a href="/iposetu/learn/asba.html">What is ASBA →</a></li>
                        <li><a href="/iposetu/learn/ipo-guide.html#sme">Mainboard vs SME IPO</a></li>
                    </ul>
                </div>
                <!-- Column 3 -->
                <div class="mega-menu-col">
                    <h4>Investing Basics</h4>
                    <ul class="mf-hover-list-research">
                        <li><a href="/iposetu/learn/stock-market-guide.html">Stocks for Beginners</a></li>
                        <li><a href="/iposetu/learn/mutual-fund-guide.html">Mutual Funds Basics</a></li>
                        <li><a href="/iposetu/learn/sip-vs-lumpsum.html">SIP vs Lumpsum</a></li>
                        <li><a href="/iposetu/learn/glossary.html#demat">Demat & Trading Account</a></li>
                        <li><a href="/iposetu/learn/understanding-risk.html">Understanding Risk</a></li>
                    </ul>
                </div>
                <!-- Promo -->
                <div class="mega-menu-promo" style="flex-wrap: wrap; gap: 12px; margin-top: 16px; border-top: 1px solid #e2e8f0; padding-top: 16px; grid-column: 1 / -1;">
                    <div style="flex:1;min-width:200px;">
                        <span style="font-weight:600; font-size:13px; color:#0f172a;">New to investing? Start with our beginner guides.</span>
                    </div>
                    <a href="/iposetu/learn/index.html" class="btn btn-primary" style="padding:8px 16px; font-size:13px; border-radius:20px; text-decoration:none;">Explore Learning Centre &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</li>
<li><a href="/iposetu/advertise-with-us">Advertise With Us</a></li>
</ul>
</nav>
<!-- Right: Search Bar with Attached Dropdown -->
<div class="header-right">
  <div class="header-search-container" id="header-search-container">
    <div class="header-search-bar" id="header-search-bar">
      <svg class="header-search-icon" fill="none" height="15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" viewbox="0 0 24 24" width="15"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg>
      <input type="text" id="header-search-input" class="header-search-input" placeholder="Search IPOs, tools..." autocomplete="off" spellcheck="false" aria-label="Search IPOs, tools and platform">
      <button type="button" id="header-search-clear" class="header-search-clear" aria-label="Clear query" style="display:none;">✕</button>
      <kbd class="search-trigger-kbd">Ctrl K</kbd>
    </div>
    <!-- Results Dropdown Directly Underneath Search Bar -->
    <div id="header-search-dropdown" class="header-search-dropdown" style="display:none;">
      <div id="header-search-dropdown-results" class="header-search-dropdown-body"></div>
    </div>
  </div>
</div>
</div>
</header>

<!-- Visual Breadcrumb Navigation & BreadcrumbList Schema (Inner Pages) -->
<?php if (function_exists('iposetu_render_breadcrumbs_html')) echo iposetu_render_breadcrumbs_html(); ?>

<script src="/iposetu/assets/js/search.js?v=7.4" defer></script>

