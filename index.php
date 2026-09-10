<?php
require_once __DIR__ . '/api/db.php';
$kpi_open = '03';
$kpi_upcoming = '38';
$kpi_listed = '114';
$kpi_gmp = '+12.4%';
try {
    $stmt = $pdo->query("SELECT COUNT(*) FROM ipos WHERE status = 'live' OR UPPER(status) = 'OPEN'");
    $kpi_open = str_pad((string)$stmt->fetchColumn(), 2, '0', STR_PAD_LEFT);
    $stmt = $pdo->query("SELECT COUNT(*) FROM ipos WHERE UPPER(status) = 'UPCOMING'");
    $kpi_upcoming = (string)$stmt->fetchColumn();
    $stmt = $pdo->query("SELECT COUNT(*) FROM ipos WHERE UPPER(status) = 'LISTED' OR (listing_date IS NOT NULL AND listing_date <= CURDATE())");
    $kpi_listed = (string)$stmt->fetchColumn();
    $stmt = $pdo->query("SELECT AVG(gmp_percentage) FROM ipos WHERE gmp_percentage IS NOT NULL AND gmp_percentage > 0");
    $avg_gmp = $stmt->fetchColumn();
    if ($avg_gmp) $kpi_gmp = '+' . number_format((float)$avg_gmp, 1) . '%';
} catch(Exception $e) {}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Index – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Index on IPOSETU."/>
<link class="style-link" href="/iposetu/assets/css/style.css?v=7.3" rel="stylesheet"/>
<link href="/iposetu/assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once __DIR__ . '/includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/header.php'; ?>
<section class="hero light-theme" style="padding: 40px 0 50px 0;">
<div class="hero-bg-anim">
<div class="glow-orb orb-1"></div>
<div class="glow-orb orb-2"></div>
<div class="grid-overlay"></div>
<div class="chart-lines"></div>
</div>
<div class="container">
  <div class="hero-v2-layout">

    <!-- LEFT: 55% -->
    <div class="hero-v2-left">
      <span class="hero-badge">INDIAN IPO MARKET</span>
      <h1 class="hero-title">Track Every IPO.<br/>Make <span class="text-blue">Smarter Decisions.</span></h1>
      <p class="hero-subtitle">Real-time IPO information, GMP, subscription, allotment and market insights — all in one place.</p>

      <form class="hero-search-box search-trigger-btn" style="cursor:pointer;" onsubmit="return false;">
        <div class="search-input-wrapper" style="pointer-events:none;">
          <svg class="search-icon-svg" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg>
          <input placeholder="Search IPO or Company... (Ctrl + K)" type="text" readonly style="cursor:pointer;"/>
        </div>
        <button class="btn btn-primary search-btn" type="button">Search</button>
      </form>

      <!-- 4 Pills only -->
      <div class="quick-links pills" style="margin-bottom: 22px;">
        <a class="quick-pill" href="ipo/"><svg fill="none" height="14" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" width="14"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Mainboard IPOs</a>
        <a class="quick-pill" href="sme/"><svg fill="none" height="14" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" width="14"><rect height="7" width="7" x="3" y="3"></rect><rect height="7" width="7" x="14" y="3"></rect><rect height="7" width="7" x="14" y="14"></rect><rect height="7" width="7" x="3" y="14"></rect></svg> SME IPOs</a>
        <a class="quick-pill" href="ipo/open"><svg fill="none" height="14" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" width="14"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg> Open IPOs</a>
        <a class="quick-pill" href="calendar/"><svg fill="none" height="14" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" width="14"><rect height="18" rx="2" ry="2" width="18" x="3" y="4"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg> IPO Calendar</a>
      </div>

      <!-- KPI Cards — directly below pills -->
      <div class="hero-kpi-grid">

        <div class="hero-kpi-card kpi-green">
          <div class="kpi-icon-wrap kpi-icon-green">
            <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20"><rect height="18" rx="2" ry="2" width="18" x="3" y="4"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>
          </div>
          <div class="kpi-content">
            <span class="kpi-label">OPEN IPOs</span>
            <span class="kpi-value" id="kpiOpenIpos"><?= htmlspecialchars($kpi_open) ?></span>
            <span class="kpi-sub">Currently Open</span>
          </div>
          <div class="kpi-accent-bar kpi-bar-green"></div>
        </div>

        <div class="hero-kpi-card kpi-purple">
          <div class="kpi-icon-wrap kpi-icon-purple">
            <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20"><path d="M4 14.899A7 7 0 1 1 15.62 9.24L21.16 4.67a1 1 0 0 1 1.45 1.34l-5.38 6.27a7 7 0 1 1 -5.73 -11.08"></path><path d="M12 12v.01"></path></svg>
          </div>
          <div class="kpi-content">
            <span class="kpi-label">UPCOMING IPOs</span>
            <span class="kpi-value" id="kpiUpcomingIpos"><?= htmlspecialchars($kpi_upcoming) ?></span>
            <span class="kpi-sub">Coming Soon</span>
          </div>
          <div class="kpi-accent-bar kpi-bar-purple"></div>
        </div>

        <div class="hero-kpi-card kpi-teal">
          <div class="kpi-icon-wrap kpi-icon-teal">
            <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20"><rect height="18" width="4" x="18" y="3"></rect><rect height="13" width="4" x="10" y="8"></rect><rect height="8" width="4" x="2" y="13"></rect></svg>
          </div>
          <div class="kpi-content">
            <span class="kpi-label">GMP TODAY</span>
            <span class="kpi-value kpi-positive" id="kpiGmpToday"><?= htmlspecialchars($kpi_gmp) ?></span>
            <span class="kpi-sub">Avg. Movement</span>
          </div>
          <div class="kpi-accent-bar kpi-bar-teal"></div>
        </div>

        <div class="hero-kpi-card kpi-blue">
          <div class="kpi-icon-wrap kpi-icon-blue">
            <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
          </div>
          <div class="kpi-content">
            <span class="kpi-label">LISTED IPOs</span>
            <span class="kpi-value" id="kpiListedIpos"><?= htmlspecialchars($kpi_listed) ?></span>
            <span class="kpi-sub">Recently Listed</span>
          </div>
          <div class="kpi-accent-bar kpi-bar-blue"></div>
        </div>

      </div><!-- /.hero-kpi-grid -->
    </div><!-- /.hero-v2-left -->

    <!-- RIGHT: 45% — Advertisement Carousel -->
    <div class="hero-v2-right">
      <div class="ad-carousel" id="heroAdCarousel">
        <span class="ad-carousel-label">Advertisement</span>
        <div class="ad-carousel-track" id="heroAdTrack">
          <a class="ad-carousel-slide active" href="https://zerodha.com/" id="heroAdLink0" target="_blank" rel="noopener">
            <img src="/iposetu/assets/images/banners/zerodha_square_ad.jpg" alt="Zerodha - Zero Brokerage" loading="eager">
          </a>
          <a class="ad-carousel-slide" href="https://upstox.com/" id="heroAdLink1" target="_blank" rel="noopener">
            <img src="/iposetu/assets/images/banners/upstox_square_ad.jpg" alt="Upstox - Trade with Upstox" loading="lazy">
          </a>
          <a class="ad-carousel-slide" href="https://www.angelone.in/" id="heroAdLink2" target="_blank" rel="noopener">
            <img src="/iposetu/assets/images/banners/angel_one_square_ad.jpg" alt="Angel One - Trade with Angel One" loading="lazy">
          </a>
        </div>
        <div class="ad-carousel-dots" id="heroAdDots">
          <button class="ad-dot active" aria-label="Go to slide 1" data-slide="0"></button>
          <button class="ad-dot" aria-label="Go to slide 2" data-slide="1"></button>
          <button class="ad-dot" aria-label="Go to slide 3" data-slide="2"></button>
        </div>
      </div>
    </div><!-- /.hero-v2-right -->

  </div><!-- /.hero-v2-layout -->
</div><!-- /.container -->
</section><!-- /.hero -->

<style>
/* ===== Hero V2 Layout ===== */
.hero-v2-layout {
  display: flex;
  align-items: center;
  gap: 40px;
}
.hero-v2-left {
  flex: 0 0 55%;
  width: 55%;
  min-width: 0;
}
.hero-v2-right {
  flex: 0 0 calc(45% - 40px);
  width: calc(45% - 40px);
  min-width: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* ===== Ad Carousel ===== */
.ad-carousel {
  position: relative;
  width: 100%;
  height: 530px;
  border-radius: 24px;
  overflow: hidden;
  box-shadow: 0 12px 40px rgba(0,0,0,0.14);
  background: #0f172a;
  cursor: pointer;
}
.ad-carousel-label {
  position: absolute;
  top: 14px; right: 14px;
  font-size: 10px; font-weight: 700;
  letter-spacing: 1.2px; text-transform: uppercase;
  background: rgba(0,0,0,0.6); color: rgba(255,255,255,0.9);
  padding: 4px 10px; border-radius: 6px;
  z-index: 20; pointer-events: none;
}
.ad-carousel-track { position: relative; width: 100%; height: 100%; }
.ad-carousel-slide {
  position: absolute; inset: 0; display: block;
  opacity: 0; transition: opacity 0.6s ease-in-out; pointer-events: none;
}
.ad-carousel-slide.active { opacity: 1; pointer-events: auto; }
.ad-carousel-slide img { width: 100%; height: 100%; object-fit: cover; display: block; }
.ad-carousel-dots {
  position: absolute; bottom: 18px; left: 50%;
  transform: translateX(-50%); display: flex; gap: 8px; z-index: 20;
}
.ad-dot {
  width: 9px; height: 9px; border-radius: 50%; border: none;
  background: rgba(255,255,255,0.35); cursor: pointer; padding: 0;
  transition: background 0.3s, transform 0.3s; outline: none;
}
.ad-dot.active { background: #fff; transform: scale(1.25); }
.ad-dot:hover { background: rgba(255,255,255,0.7); }

/* ===== Hero KPI Grid ===== */
.hero-kpi-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 12px;
  margin-top: 0;
}
.hero-kpi-card {
  position: relative;
  background: #ffffff;
  border: 1px solid #e5eaf2;
  border-radius: 16px;
  padding: 16px 14px 18px 14px;
  display: flex;
  align-items: flex-start;
  gap: 12px;
  overflow: hidden;
  cursor: pointer;
  transition:
    transform 0.25s ease,
    box-shadow 0.25s ease,
    border-color 0.25s ease;
  box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}
/* Hover effects */
.hero-kpi-card:hover {
  transform: translateY(-5px) scale(1.01);
  box-shadow: 0 14px 30px rgba(0,0,0,0.1);
}
.kpi-green:hover  { border-color: #10b981; box-shadow: 0 14px 30px rgba(16,185,129,0.15); }
.kpi-purple:hover { border-color: #a855f7; box-shadow: 0 14px 30px rgba(168,85,247,0.15); }
.kpi-teal:hover   { border-color: #06b6d4; box-shadow: 0 14px 30px rgba(6,182,212,0.15); }
.kpi-blue:hover   { border-color: #3b82f6; box-shadow: 0 14px 30px rgba(59,130,246,0.15); }

/* Icon wrappers */
.kpi-icon-wrap {
  width: 40px; height: 40px; border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
  transition: transform 0.25s ease;
}
.hero-kpi-card:hover .kpi-icon-wrap { transform: scale(1.12); }
.kpi-icon-green  { background: #ecfdf5; color: #10b981; }
.kpi-icon-purple { background: #f5f3ff; color: #a855f7; }
.kpi-icon-teal   { background: #ecfeff; color: #06b6d4; }
.kpi-icon-blue   { background: #eff6ff; color: #3b82f6; }

/* Text */
.kpi-content { display: flex; flex-direction: column; min-width: 0; }
.kpi-label {
  font-size: 10px; font-weight: 700; letter-spacing: 0.6px;
  color: #94a3b8; text-transform: uppercase; margin-bottom: 2px;
}
.kpi-value {
  font-size: 24px; font-weight: 800; color: #0f172a;
  line-height: 1.1; letter-spacing: -0.5px; margin-bottom: 3px;
}
.kpi-positive { color: #10b981; }
.kpi-sub { font-size: 11px; color: #94a3b8; }

/* Bottom accent bar */
.kpi-accent-bar {
  position: absolute; bottom: 0; left: 16px;
  width: 36px; height: 3px; border-radius: 3px 3px 0 0;
}
.kpi-bar-green  { background: #10b981; }
.kpi-bar-purple { background: #a855f7; }
.kpi-bar-teal   { background: #06b6d4; }
.kpi-bar-blue   { background: #3b82f6; }

/* ===== Responsive ===== */
@media (max-width: 1100px) {
  .hero-v2-left { flex: 0 0 52%; width: 52%; }
  .hero-v2-right { flex: 0 0 calc(48% - 40px); width: calc(48% - 40px); }
  .ad-carousel { height: 460px; }
  .hero-kpi-grid { gap: 10px; }
  .kpi-value { font-size: 20px; }
}
@media (max-width: 900px) {
  .hero-v2-layout { flex-direction: column; gap: 32px; text-align: center; }
  .hero-v2-left { flex: none; width: 100%; display: flex; flex-direction: column; align-items: center; }
  .hero-v2-right { flex: none; width: 100%; max-width: 520px; margin: 0 auto; }
  .ad-carousel { height: 380px; }
  .quick-links { justify-content: center; }
  .hero-search-box { margin-left: auto; margin-right: auto; }
  .hero-kpi-grid { grid-template-columns: repeat(2, 1fr); gap: 12px; width: 100%; }
}
@media (max-width: 576px) {
  .ad-carousel { height: 280px; border-radius: 16px; }
  .hero-kpi-grid { grid-template-columns: repeat(2, 1fr); gap: 10px; }
  .kpi-value { font-size: 20px; }
}
</style>

<script>
(function() {
  var currentSlide = 0;
  var slides, dots, track, timer;
  var interval = 4500;
  var paused = false;

  function init() {
    track = document.getElementById('heroAdTrack');
    slides = track ? track.querySelectorAll('.ad-carousel-slide') : [];
    dots   = document.querySelectorAll('#heroAdDots .ad-dot');
    var carousel = document.getElementById('heroAdCarousel');

    if (!slides.length) return;

    // Pause on hover
    if (carousel) {
      carousel.addEventListener('mouseenter', function() { paused = true; });
      carousel.addEventListener('mouseleave', function() { paused = false; });
    }

    // Dot click
    dots.forEach(function(dot, i) {
      dot.addEventListener('click', function(e) {
        e.preventDefault();
        goTo(i);
        paused = false; // resume after manual click
      });
    });

    // Start autoplay
    timer = setInterval(function() {
      if (!paused) goTo((currentSlide + 1) % slides.length);
    }, interval);
  }

  function goTo(index) {
    slides[currentSlide].classList.remove('active');
    dots[currentSlide] && dots[currentSlide].classList.remove('active');
    currentSlide = index;
    slides[currentSlide].classList.add('active');
    dots[currentSlide] && dots[currentSlide].classList.add('active');
  }

  document.addEventListener('DOMContentLoaded', init);
})();
</script>
<!-- Two-Column Tables Row: Market Statistics + Market Turnover -->
<div class="container" style="margin-top: 56px;">
<div class="two-col-tables">
<!-- Market Statistics Box -->
<div class="section-box">
<div class="section-box-title-bar">
<h3 class="section-box-title">Market Statistics</h3>
<span class="section-box-subtitle" id="market-stats-subtitle">As on <?= date('d-M-Y H:i') ?> IST</span>
</div>
<div class="market-stats-grid">
<!-- Top 4 boxes -->
<div class="stats-top-cards">
<div class="stat-item-card blue">
<span class="stat-item-label">Stock Traded</span>
<span class="stat-item-val blue" id="stat-traded">3,560</span>
</div>
<div class="stat-item-card green">
<span class="stat-item-label">Advances</span>
<span class="stat-item-val green" id="stat-advances">1,738</span>
</div>
<div class="stat-item-card red">
<span class="stat-item-label">Declines</span>
<span class="stat-item-val red" id="stat-declines">1,702</span>
</div>
<div class="stat-item-card orange">
<span class="stat-item-label">Unchanged</span>
<span class="stat-item-val orange" id="stat-unchanged">120</span>
</div>
</div>
<!-- Mid row with Circuits & NSE logo -->
<div class="stats-mid-row">
<div class="mid-left-card">
<div class="mid-sub-item">
<span class="mid-sub-label">52 Wk High</span>
<span class="mid-sub-val up"><svg fill="none" height="12" stroke="currentColor" stroke-width="3" style="vertical-align: middle; margin-right: 2px;" viewbox="0 0 24 24" width="12"><polyline points="18 15 12 9 6 15"></polyline></svg> 168</span>
</div>
<div class="mid-sub-item">
<span class="mid-sub-label">52 Wk Low</span>
<span class="mid-sub-val down"><svg fill="none" height="12" stroke="currentColor" stroke-width="3" style="vertical-align: middle; margin-right: 2px;" viewbox="0 0 24 24" width="12"><polyline points="6 9 12 15 18 9"></polyline></svg> 69</span>
</div>
</div>
<div class="nse-logo-box">
<svg class="nse-logo-icon" fill="none" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
<circle cx="50" cy="50" fill="#f1f5f9" r="45" stroke="#cbd5e1" stroke-width="2"></circle>
<path d="M50 20 L76 35 L76 65 L50 80 L24 65 L24 35 Z" fill="#3B2F7E"></path>
<path d="M50 28 L69 39 L69 61 L50 72 L31 61 L31 39 Z" fill="#F59E0B"></path>
<path d="M50 36 L62 43 L62 57 L50 64 L38 57 L38 43 Z" fill="#10B981"></path>
</svg>
</div>
<div class="mid-right-card">
<div class="mid-sub-item">
<span class="mid-sub-label">Upper Circuit</span>
<span class="mid-sub-val up">123</span>
</div>
<div class="mid-sub-item">
<span class="mid-sub-label">Lower Circuit</span>
<span class="mid-sub-val down">127</span>
</div>
</div>
</div>
<!-- Bottom row Client / Market cap info -->
<div class="stats-bottom-row">
<div class="stats-bottom-card">
<div class="stats-bottom-label">Registered Client Accounts</div>
<div class="stats-bottom-val">26,64,19,093</div>
</div>
<div class="stats-bottom-card">
<div class="stats-bottom-label">Market Capitalization</div>
<div class="stats-bottom-val" style="font-size: 16px;">₹ Lac Crs 493.12 | Tn $ 5.18</div>
<div class="stats-bottom-sub" id="market-mcap-subtitle">As on <?= date('d-M-Y') ?></div>
</div>
</div>
<!-- Latency card -->
<div class="latency-card">
<span class="latency-label">
<svg fill="none" height="16" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="16"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                Avg Order Ack Latency (nanoseconds)
                            </span>
<span class="latency-val">798</span>
</div>
</div>
</div>
<!-- Market Turnover Box -->
<div class="section-box">
<div class="section-box-title-bar">
<h3 class="section-box-title">Market Turnover</h3>
<span class="section-box-subtitle" id="market-turnover-subtitle">As on <?= date('d-M-Y') ?></span>
</div>
<div class="market-table-container">
<table class="market-table">
<thead>
<tr>
<th>Products</th>
<th>Volume<br/><span style="font-size:9px; text-transform:lowercase;">(shares/contracts)</span></th>
<th>Value<br/><span style="font-size:9px; text-transform:lowercase;">(₹ Crores)</span></th>
<th>Open Interest<br/><span style="font-size:9px; text-transform:lowercase;">(contracts)</span></th>
<th>Updated At</th>
</tr>
</thead>
<tbody>
<tr>
<td class="bold">Equity</td>
<td>459.80 Cr</td>
<td>1,21,345.68</td>
<td>-</td>
<td>16:00</td>
</tr>
<tr>
<td class="bold">Equity Derivatives</td>
<td>11.30 Cr</td>
<td>1,18,095.69</td>
<td>2.42 Cr</td>
<td>15:40</td>
</tr>
<tr>
<td class="bold">Currency Derivatives</td>
<td>7.13 L</td>
<td>6,769.30</td>
<td>20.80 L</td>
<td>17:00</td>
</tr>
<tr>
<td class="bold">Interest Rate Derivatives</td>
<td>6.10 K</td>
<td>123.47</td>
<td>43.14 K</td>
<td>16:31</td>
</tr>
<tr>
<td class="bold">Commodity Derivatives</td>
<td>38.73 L</td>
<td>1,836.90</td>
<td>1.42 L</td>
<td>20:27</td>
</tr>
<tr>
<td class="bold">Debt</td>
<td>-</td>
<td>21,838.11</td>
<td>-</td>
<td>17:13</td>
</tr>
<tr>
<td class="bold">Electronic Gold Receipts</td>
<td>153</td>
<td>2.38</td>
<td>-</td>
<td>12:52</td>
</tr>
<tr>
<td class="bold">Mutual Fund</td>
<td>-</td>
<td>5,597.54</td>
<td>-</td>
<td>15:30</td>
</tr>
<tr style="background: #f1f5f9; font-weight: 700;">
<td class="bold">Total</td>
<td class="bold">471.56 Cr</td>
<td class="bold">2,75,609.08</td>
<td class="bold">2.65 Cr</td>
<td>-</td>
</tr>
</tbody>
</table>
</div>
</div>
</div><!-- end two-col-tables -->
<!-- Row 2: SEBI Warning Slide & Market Snapshot Table -->
<div class="market-overview-row-2">
<!-- Left: Ad Slideshow Warning -->
<div class="ad-slider-card">
<div class="ad-slide-image-area" id="adSlideContainer">
<div class="play-btn-overlay">
<svg fill="white" height="24" viewbox="0 0 24 24" width="24"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
</div>
<img alt="Investor Protection Ad" id="adSlideImage" src="/iposetu/assets/images/banners/broker_ad_banner.png"/>
</div>
<div class="ad-slide-text-area">
<div id="adSlideText" style="min-height: 50px; font-weight: 500;">
                            Fake apps often look real because they use logos and designs from original apps. Download apps only from the verified apps list on the SEBI website.
                        </div>
<div class="ad-controls-row">
<div class="ad-dot-container" id="adDotContainer">
<span class="ad-dot active" data-index="0"></span>
<span class="ad-dot" data-index="1"></span>
<span class="ad-dot" data-index="2"></span>
</div>
<button aria-label="Pause Slideshow" class="ad-play-pause-btn" id="adPlayPauseBtn">
<svg fill="none" height="14" id="playPauseIcon" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="14"><rect height="16" width="4" x="6" y="4"></rect><rect height="16" width="4" x="14" y="4"></rect></svg>
</button>
</div>
</div>
</div>
<!-- Right: Market Snapshot Section -->
<div class="section-box">
<div class="section-box-title-bar">
<h3 class="section-box-title">Market Snapshot</h3>
<a class="btn btn-outline" href="#" style="border-radius: 20px; font-size: 11px; font-weight: 700; padding: 4px 12px; color: #3b82f6; border-color: #cbd5e1;">View More</a>
</div>
<!-- Tabs -->
<div class="snapshot-tabs">
<button class="snapshot-tab-btn active" data-tab="gainers">Gainers</button>
<button class="snapshot-tab-btn" data-tab="losers">Losers</button>
<button class="snapshot-tab-btn" data-tab="active-val">Most Active(Value)</button>
<button class="snapshot-tab-btn" data-tab="active-vol">Most Active(Volume)</button>
<button class="snapshot-tab-btn" data-tab="etfs">ETFs(Volume)</button>
</div>
<!-- Tab Panes -->
<div class="market-table-container">
<!-- Gainers Pane -->
<div class="snapshot-pane active" id="pane-gainers">
<table class="market-table">
<thead>
<tr>
<th>Symbol</th>
<th>LTP</th>
<th>Chng</th>
<th>%Chng</th>
<th>Volume <span style="font-size:9px; text-transform:lowercase;">(Lakhs)</span></th>
<th>Value <span style="font-size:9px; text-transform:lowercase;">(₹ Crores)</span></th>
</tr>
</thead>
<tbody id="tbody-gainers">
<tr>
<td class="bold">TITAN</td>
<td>5,090.00</td>
<td class="up">149.00</td>
<td class="up">3.02</td>
<td>36.65</td>
<td>1,852.92</td>
</tr>
<tr>
<td class="bold">TATACONSUM</td>
<td>1,108.70</td>
<td class="up">26.40</td>
<td class="up">2.44</td>
<td>14.18</td>
<td>155.85</td>
</tr>
<tr>
<td class="bold">BAJFINANCE</td>
<td>1,102.20</td>
<td class="up">24.20</td>
<td class="up">2.24</td>
<td>73.03</td>
<td>797.05</td>
</tr>
<tr>
<td class="bold">SHRIRAMFIN</td>
<td>1,137.80</td>
<td class="up">22.80</td>
<td class="up">2.04</td>
<td>35.36</td>
<td>398.37</td>
</tr>
<tr>
<td class="bold">GRASIM</td>
<td>3,380.50</td>
<td class="up">57.50</td>
<td class="up">1.73</td>
<td>25.68</td>
<td>868.78</td>
</tr>
</tbody>
</table>
</div>
<!-- Losers Pane -->
<div class="snapshot-pane" id="pane-losers">
<table class="market-table">
<thead>
<tr>
<th>Symbol</th>
<th>LTP</th>
<th>Chng</th>
<th>%Chng</th>
<th>Volume <span style="font-size:9px; text-transform:lowercase;">(Lakhs)</span></th>
<th>Value <span style="font-size:9px; text-transform:lowercase;">(₹ Crores)</span></th>
</tr>
</thead>
<tbody id="tbody-losers">
<tr>
<td class="bold">DRREDDY</td>
<td>1,158.80</td>
<td class="down">-13.20</td>
<td class="down">-1.13</td>
<td>18.45</td>
<td>213.80</td>
</tr>
<tr>
<td class="bold">EICHERMOT</td>
<td>7,975.00</td>
<td class="down">-45.00</td>
<td class="down">-0.56</td>
<td>11.20</td>
<td>893.20</td>
</tr>
<tr>
<td class="bold">INFY</td>
<td>1,540.30</td>
<td class="down">-12.10</td>
<td class="down">-0.78</td>
<td>125.40</td>
<td>1,931.50</td>
</tr>
<tr>
<td class="bold">HINDUNILVR</td>
<td>2,087.20</td>
<td class="down">-8.80</td>
<td class="down">-0.42</td>
<td>42.10</td>
<td>878.60</td>
</tr>
<tr>
<td class="bold">HINDALCO</td>
<td>1,054.05</td>
<td class="down">-5.55</td>
<td class="down">-0.52</td>
<td>65.80</td>
<td>693.50</td>
</tr>
</tbody>
</table>
</div>
<!-- Most Active (Value) Pane -->
<div class="snapshot-pane" id="pane-active-val">
<table class="market-table">
<thead>
<tr>
<th>Symbol</th>
<th>LTP</th>
<th>Chng</th>
<th>%Chng</th>
<th>Volume <span style="font-size:9px; text-transform:lowercase;">(Lakhs)</span></th>
<th>Value <span style="font-size:9px; text-transform:lowercase;">(₹ Crores)</span></th>
</tr>
</thead>
<tbody id="tbody-active-val">
<tr>
<td class="bold">RELIANCE</td>
<td>2,950.00</td>
<td class="up">15.40</td>
<td class="up">0.52</td>
<td>98.50</td>
<td>2,905.75</td>
</tr>
<tr>
<td class="bold">HDFCBANK</td>
<td>1,620.00</td>
<td class="down">-5.60</td>
<td class="down">-0.34</td>
<td>175.20</td>
<td>2,838.24</td>
</tr>
<tr>
<td class="bold">TCS</td>
<td>4,120.00</td>
<td class="up">45.20</td>
<td class="up">1.10</td>
<td>52.30</td>
<td>2,154.76</td>
</tr>
<tr>
<td class="bold">INFY</td>
<td>1,540.30</td>
<td class="down">-12.10</td>
<td class="down">-0.78</td>
<td>125.40</td>
<td>1,931.50</td>
</tr>
<tr>
<td class="bold">TITAN</td>
<td>5,090.00</td>
<td class="up">149.00</td>
<td class="up">3.02</td>
<td>36.65</td>
<td>1,852.92</td>
</tr>
</tbody>
</table>
</div>
<!-- Most Active (Volume) Pane -->
<div class="snapshot-pane" id="pane-active-vol">
<table class="market-table">
<thead>
<tr>
<th>Symbol</th>
<th>LTP</th>
<th>Chng</th>
<th>%Chng</th>
<th>Volume <span style="font-size:9px; text-transform:lowercase;">(Lakhs)</span></th>
<th>Value <span style="font-size:9px; text-transform:lowercase;">(₹ Crores)</span></th>
</tr>
</thead>
<tbody id="tbody-active-vol">
<tr>
<td class="bold">YESBANK</td>
<td>24.50</td>
<td class="up">0.85</td>
<td class="up">3.59</td>
<td>1,850.00</td>
<td>453.25</td>
</tr>
<tr>
<td class="bold">IDEA</td>
<td>15.20</td>
<td class="down">-0.40</td>
<td class="down">-2.56</td>
<td>1,240.00</td>
<td>188.48</td>
</tr>
<tr>
<td class="bold">SUZLON</td>
<td>54.30</td>
<td class="up">2.55</td>
<td class="up">4.93</td>
<td>950.00</td>
<td>515.85</td>
</tr>
<tr>
<td class="bold">ZOMATO</td>
<td>195.40</td>
<td class="up">6.70</td>
<td class="up">3.55</td>
<td>650.00</td>
<td>1,270.10</td>
</tr>
<tr>
<td class="bold">TATASTEEL</td>
<td>164.20</td>
<td class="down">-1.80</td>
<td class="down">-1.08</td>
<td>420.00</td>
<td>689.64</td>
</tr>
</tbody>
</table>
</div>
<!-- ETFs Pane -->
<div class="snapshot-pane" id="pane-etfs">
<table class="market-table">
<thead>
<tr>
<th>Symbol</th>
<th>LTP</th>
<th>Chng</th>
<th>%Chng</th>
<th>Volume <span style="font-size:9px; text-transform:lowercase;">(Lakhs)</span></th>
<th>Value <span style="font-size:9px; text-transform:lowercase;">(₹ Crores)</span></th>
</tr>
</thead>
<tbody>
<tr>
<td class="bold">NIFTYBEES</td>
<td>265.40</td>
<td class="up">1.15</td>
<td class="up">0.44</td>
<td>245.50</td>
<td>651.58</td>
</tr>
<tr>
<td class="bold">BANKBEES</td>
<td>532.10</td>
<td class="down">-2.80</td>
<td class="down">-0.52</td>
<td>98.40</td>
<td>523.59</td>
</tr>
<tr>
<td class="bold">GOLDBEES</td>
<td>62.80</td>
<td class="up">0.45</td>
<td class="up">0.72</td>
<td>75.20</td>
<td>47.23</td>
</tr>
<tr>
<td class="bold">LIQUIDBEES</td>
<td>1,000.00</td>
<td>0.00</td>
<td>0.00</td>
<td>45.10</td>
<td>451.00</td>
</tr>
<tr>
<td class="bold">JUNIORBEES</td>
<td>580.30</td>
<td class="up">4.20</td>
<td class="up">0.73</td>
<td>32.10</td>
<td>186.28</td>
</tr>
</tbody>
</table>
</div>
</div>
<p style="font-size: 11px; color: #64748b; margin-top: 10px; font-style: italic;">*Data shown above represents only Nifty 50 stocks.</p>
</div>
</div>
</div><!-- end container -->
<!-- Homepage FAQ Section -->
<section class="home-faq-section animate-on-scroll" style="padding: 60px 0; background: #f8fafc; margin-top: 40px; border-top: 1px solid #e2e8f0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 16px;">Frequently Asked Questions</h2>
            <p style="font-size: 16px; color: #64748b; max-width: 600px; margin: 0 auto;">Everything you need to know about upcoming IPOs, Grey Market Premium (GMP), and stock market investing.</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;" class="faq-grid">
            <!-- FAQ 1 -->
            <div style="background: white; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
                <h3 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 12px; display: flex; gap: 12px;">
                    <span style="color: #3b82f6;">Q.</span> What is Grey Market Premium (GMP)?
                </h3>
                <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-left: 28px;">Grey Market Premium (GMP) is the unofficial price at which an IPO shares are traded before they are officially listed on the stock exchanges (BSE/NSE). A positive GMP indicates strong demand and potential listing gains, while a negative GMP suggests the stock might list at a discount.</p>
            </div>
            <!-- FAQ 2 -->
            <div style="background: white; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
                <h3 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 12px; display: flex; gap: 12px;">
                    <span style="color: #3b82f6;">Q.</span> What is the difference between Mainboard and SME IPOs?
                </h3>
                <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-left: 28px;">Mainboard IPOs are large companies listing on the primary BSE and NSE exchanges with a minimum post-issue capital of ₹10 crores. SME IPOs are small and medium enterprises listing on specialized platforms (BSE SME or NSE Emerge). SME IPOs have a higher minimum investment amount (lot size usually exceeds ₹1 Lakh).</p>
            </div>
            <!-- FAQ 3 -->
            <div style="background: white; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
                <h3 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 12px; display: flex; gap: 12px;">
                    <span style="color: #3b82f6;">Q.</span> How do I check my IPO Allotment Status?
                </h3>
                <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-left: 28px;">You can check your allotment status directly on IPOSETU by navigating to our Allotment Status tool. Alternatively, you can check it on the official registrar websites like Link Intime or KFintech by entering your PAN number, Application Number, or Demat Account (DP Client ID).</p>
            </div>
            <!-- FAQ 4 -->
            <div style="background: white; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
                <h3 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 12px; display: flex; gap: 12px;">
                    <span style="color: #3b82f6;">Q.</span> Which is the best discount broker for applying to IPOs?
                </h3>
                <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-left: 28px;">Most top discount brokers in India, such as Zerodha, Upstox, Groww, and Paytm Money, offer seamless UPI-based IPO applications completely free of charge. The best broker depends on your overall trading needs. Check our Broker Reviews section for detailed comparisons.</p>
            </div>
            <!-- FAQ 5 -->
            <div style="background: white; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
                <h3 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 12px; display: flex; gap: 12px;">
                    <span style="color: #3b82f6;">Q.</span> What is Kostak Rate?
                </h3>
                <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-left: 28px;">The Kostak rate is the premium amount at which an IPO application is traded in the grey market before the allotment is finalized. It is a fixed profit for the seller, regardless of whether the IPO gets allotted to them or not.</p>
            </div>
            <!-- FAQ 6 -->
            <div style="background: white; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
                <h3 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 12px; display: flex; gap: 12px;">
                    <span style="color: #3b82f6;">Q.</span> Can I apply for an IPO via net banking ASBA?
                </h3>
                <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-left: 28px;">Yes, ASBA (Application Supported by Blocked Amount) is available through most major Indian banks (HDFC, SBI, ICICI, etc.). It allows the application amount to remain blocked in your bank account, continuing to earn interest, until the shares are successfully allotted.</p>
            </div>
        </div>
    </div>
</section>

<!-- SEO / Expanded Content Section — Trusted Portal -->
<section class="seo-content-section" style="padding: 72px 0 64px; background: linear-gradient(180deg, #0f172a 0%, #1e293b 100%); position: relative; overflow: hidden;">

  <!-- Background decorative elements -->
  <div style="position:absolute;top:-80px;right:-80px;width:400px;height:400px;background:radial-gradient(circle,rgba(59,130,246,0.12) 0%,transparent 70%);border-radius:50%;pointer-events:none;"></div>
  <div style="position:absolute;bottom:-60px;left:-60px;width:320px;height:320px;background:radial-gradient(circle,rgba(168,85,247,0.1) 0%,transparent 70%);border-radius:50%;pointer-events:none;"></div>

  <div class="container" style="position:relative;z-index:1;">

    <!-- Section Badge + Heading -->
    <div style="text-align:center; max-width:760px; margin:0 auto 56px;">
      <div style="display:inline-flex;align-items:center;gap:8px;background:rgba(59,130,246,0.15);border:1px solid rgba(59,130,246,0.3);color:#93c5fd;font-weight:700;font-size:11px;letter-spacing:1.5px;padding:6px 18px;border-radius:30px;text-transform:uppercase;margin-bottom:20px;">
        <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6z"/></svg>
        India's Most Trusted IPO Intelligence Portal
      </div>
      <h2 style="font-size:40px;font-weight:900;color:#f8fafc;margin-bottom:18px;letter-spacing:-1px;line-height:1.15;">Your Trusted Portal for<br><span style="background:linear-gradient(90deg,#60a5fa,#a78bfa);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">IPO GMP & Market Intelligence</span></h2>
      <p style="font-size:17px;color:#94a3b8;line-height:1.7;max-width:620px;margin:0 auto;">Real-time data, expert analysis, and actionable insights — everything you need to make informed IPO investment decisions.</p>
    </div>

    <!-- 3-Column Feature Cards -->
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-bottom:20px;">

      <!-- Card 1: GMP Tracker -->
      <div style="background:rgba(255,255,255,0.05);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.08);border-radius:20px;padding:32px 28px;position:relative;overflow:hidden;transition:transform 0.3s,box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 24px 48px rgba(59,130,246,0.2)'" onmouseout="this.style.transform='';this.style.boxShadow=''">
        <div style="position:absolute;top:0;right:0;width:100px;height:100px;background:radial-gradient(circle,rgba(59,130,246,0.2) 0%,transparent 70%);border-radius:50%;transform:translate(30%,-30%);"></div>
        <div style="width:48px;height:48px;background:linear-gradient(135deg,#3b82f6,#1d4ed8);border-radius:14px;display:flex;align-items:center;justify-content:center;margin-bottom:20px;box-shadow:0 8px 16px rgba(59,130,246,0.4);">
          <svg width="24" height="24" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
        </div>
        <h3 style="font-size:18px;font-weight:800;color:#f1f5f9;margin:0 0 12px;">Live GMP Tracker</h3>
        <p style="font-size:14px;color:#94a3b8;line-height:1.7;margin:0;">Crowdsourced Grey Market Premium rates updated every hour. Track Kostak, Subject to Sauda (SS) metrics, and expert subscription data — all in one dashboard before you hit Apply.</p>
        <div style="margin-top:20px;display:inline-flex;align-items:center;gap:6px;color:#60a5fa;font-size:13px;font-weight:600;">
          <span>Track GMP</span><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
        </div>
      </div>

      <!-- Card 2: Expert Reviews -->
      <div style="background:rgba(255,255,255,0.05);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.08);border-radius:20px;padding:32px 28px;position:relative;overflow:hidden;transition:transform 0.3s,box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 24px 48px rgba(245,158,11,0.2)'" onmouseout="this.style.transform='';this.style.boxShadow=''">
        <div style="position:absolute;top:0;right:0;width:100px;height:100px;background:radial-gradient(circle,rgba(245,158,11,0.2) 0%,transparent 70%);border-radius:50%;transform:translate(30%,-30%);"></div>
        <div style="width:48px;height:48px;background:linear-gradient(135deg,#f59e0b,#d97706);border-radius:14px;display:flex;align-items:center;justify-content:center;margin-bottom:20px;box-shadow:0 8px 16px rgba(245,158,11,0.4);">
          <svg width="24" height="24" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <h3 style="font-size:18px;font-weight:800;color:#f1f5f9;margin:0 0 12px;">Expert Broker Reviews</h3>
        <p style="font-size:14px;color:#94a3b8;line-height:1.7;margin:0;">Unbiased, in-depth reviews of India's top discount brokers — Zerodha, Upstox, Angel One, and more. Compare brokerage charges, platform stability, and hidden fees before opening your Demat account.</p>
        <div style="margin-top:20px;display:inline-flex;align-items:center;gap:6px;color:#fbbf24;font-size:13px;font-weight:600;">
          <span>Compare Brokers</span><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
        </div>
      </div>

      <!-- Card 3: Free Tools -->
      <div style="background:rgba(255,255,255,0.05);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.08);border-radius:20px;padding:32px 28px;position:relative;overflow:hidden;transition:transform 0.3s,box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 24px 48px rgba(16,185,129,0.2)'" onmouseout="this.style.transform='';this.style.boxShadow=''">
        <div style="position:absolute;top:0;right:0;width:100px;height:100px;background:radial-gradient(circle,rgba(16,185,129,0.2) 0%,transparent 70%);border-radius:50%;transform:translate(30%,-30%);"></div>
        <div style="width:48px;height:48px;background:linear-gradient(135deg,#10b981,#059669);border-radius:14px;display:flex;align-items:center;justify-content:center;margin-bottom:20px;box-shadow:0 8px 16px rgba(16,185,129,0.4);">
          <svg width="24" height="24" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        </div>
        <h3 style="font-size:18px;font-weight:800;color:#f1f5f9;margin:0 0 12px;">Free Financial Tools</h3>
        <p style="font-size:14px;color:#94a3b8;line-height:1.7;margin:0;">Powerful calculators for IPO listing gains, SIP returns, and allotment status checks via Link Intime and KFintech. Speed and accuracy built for retail investors who mean business.</p>
        <div style="margin-top:20px;display:inline-flex;align-items:center;gap:6px;color:#34d399;font-size:13px;font-weight:600;">
          <span>Explore Tools</span><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
        </div>
      </div>
    </div>

    <!-- Trust Badges Row -->
    <div style="display:flex;align-items:center;justify-content:center;flex-wrap:wrap;gap:32px;padding:32px 0 0;border-top:1px solid rgba(255,255,255,0.08);">
      <div style="display:flex;align-items:center;gap:10px;color:#94a3b8;font-size:13px;font-weight:600;">
        <div style="width:32px;height:32px;background:rgba(16,185,129,0.15);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#34d399;">
          <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <span>100% Unbiased Data</span>
      </div>
      <div style="display:flex;align-items:center;gap:10px;color:#94a3b8;font-size:13px;font-weight:600;">
        <div style="width:32px;height:32px;background:rgba(59,130,246,0.15);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#60a5fa;">
          <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <span>Updated Every Hour</span>
      </div>
      <div style="display:flex;align-items:center;gap:10px;color:#94a3b8;font-size:13px;font-weight:600;">
        <div style="width:32px;height:32px;background:rgba(168,85,247,0.15);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#c084fc;">
          <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <span>10 Lakh+ Investors Trust Us</span>
      </div>
      <div style="display:flex;align-items:center;gap:10px;color:#94a3b8;font-size:13px;font-weight:600;">
        <div style="width:32px;height:32px;background:rgba(245,158,11,0.15);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fbbf24;">
          <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <span>Expert-Verified Reviews</span>
      </div>
    </div>

    <!-- Disclaimer -->
    <div style="margin-top:28px;padding:16px 24px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.07);border-radius:12px;text-align:center;">
      <p style="font-size:12px;color:#64748b;line-height:1.6;margin:0;"><strong style="color:#475569;">Disclaimer:</strong> Investment in securities market are subject to market risks. Read all related documents carefully before investing. GMP (Grey Market Premium) is unofficial data and should not be the sole criteria for investment. IPOSETU is an informational portal and does not provide financial advisory services.</p>
    </div>

  </div>
</section>


<!-- How to Apply Section -->
<section class="how-to-apply-section animate-on-scroll" style="padding: 60px 0; background: white; border-top: 1px solid #e2e8f0; margin-bottom: 40px;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 48px;">
            <div style="display: inline-block; background: #eff6ff; color: #3b82f6; font-weight: 700; font-size: 12px; letter-spacing: 1px; padding: 6px 16px; border-radius: 20px; text-transform: uppercase; margin-bottom: 16px;">Beginner's Guide</div>
            <h2 style="font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 16px;">How to Invest in an IPO</h2>
            <p style="font-size: 16px; color: #64748b; max-width: 600px; margin: 0 auto;">Follow these four simple steps to participate in the primary market and capture high listing day gains.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px;" class="steps-grid">
            <!-- Step 1 -->
            <div style="text-align: center; padding: 24px; position: relative;">
                <div style="width: 64px; height: 64px; background: #3b82f6; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; margin: 0 auto 24px; box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);">1</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Open Demat Account</h3>
                <p style="font-size: 14px; color: #475569; line-height: 1.6;">You must have an active Demat and Trading account. Compare our top-rated discount brokers and open an account completely free.</p>
            </div>
            <!-- Step 2 -->
            <div style="text-align: center; padding: 24px; position: relative;">
                <div style="width: 64px; height: 64px; background: #3b82f6; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; margin: 0 auto 24px; box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);">2</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Track GMP & Reviews</h3>
                <p style="font-size: 14px; color: #475569; line-height: 1.6;">Monitor the Grey Market Premium (GMP) and read our expert analysis to determine if an upcoming Mainboard or SME IPO is worth investing in.</p>
            </div>
            <!-- Step 3 -->
            <div style="text-align: center; padding: 24px; position: relative;">
                <div style="width: 64px; height: 64px; background: #3b82f6; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; margin: 0 auto 24px; box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);">3</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Apply via ASBA / UPI</h3>
                <p style="font-size: 14px; color: #475569; line-height: 1.6;">Use your broker's app to apply using UPI, or log in to your net banking portal to apply via ASBA. Your funds remain safely blocked in your account.</p>
            </div>
            <!-- Step 4 -->
            <div style="text-align: center; padding: 24px; position: relative;">
                <div style="width: 64px; height: 64px; background: #3b82f6; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; margin: 0 auto 24px; box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);">4</div>
                <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Check Allotment</h3>
                <p style="font-size: 14px; color: #475569; line-height: 1.6;">Check our Allotment Status page on the declaration date. If allotted, shares will be credited to your Demat; if not, funds are instantly unblocked.</p>
            </div>
        </div>
    </div>
</section>


<!-- Open for Subscription Section -->
<section class="section container" style="padding: 48px clamp(24px, 3.5vw, 52px) 12px clamp(24px, 3.5vw, 52px);">
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 28px;">
<div>
  <h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin: 0 0 4px; display: flex; align-items: center; gap: 10px;">
    Current &amp; Open IPOs
    <span style="display:inline-flex;align-items:center;gap:6px;background:#ecfdf5;color:#059669;font-size:11px;font-weight:700;padding:3px 10px;border-radius:20px;border:1px solid #a7f3d0;">
      <span style="width:6px;height:6px;background:#10b981;border-radius:50%;display:inline-block;"></span>LIVE BIDDING
    </span>
  </h2>
  <p style="font-size: 13px; color: #64748b; margin: 0;">Active Mainboard &amp; SME IPOs currently open for investor applications</p>
</div>
<a class="btn btn-outline" href="ipo/open" style="border-radius: 20px; font-size: 13px; font-weight: 600; padding: 6px 16px; color: #3B82F6; border-color: #E2E8F0;">View All IPOs →</a>
</div>
<div class="subscription-grid" id="home-subscription-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; align-items: stretch;">
<div style="grid-column: 1 / -1; text-align: center; padding: 20px; color: #64748B;">Loading Open IPOs...</div>
</div>
</section>
<!-- 3-Column Data Section: Mainboard, SME -->
<section class="section container" style="padding: 40px clamp(24px, 3.5vw, 52px) 48px clamp(24px, 3.5vw, 52px);">
<div class="three-col-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 28px; align-items: start;">
<!-- Column 1: Mainboard IPOs -->
<div class="data-col">
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
<div>
  <h3 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0 0 3px;">Mainboard IPOs</h3>
  <span style="font-size: 11px; color: #64748b;">Listed · Closed · Open · Upcoming</span>
</div>
<a href="ipo/" style="font-size: 12px; font-weight: 600; color: #3B82F6; text-decoration: none;">View All →</a>
</div>
<div class="table-container" style="background: white; border: 1px solid #E2E8F0; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
<table style="width: 100%; font-size: 12px; text-align: left; border-collapse: collapse;">
<thead style="background: #F8FAFC; color: #64748B; font-weight: 700; text-transform: uppercase; font-size: 10px; letter-spacing: 0.5px;">
<tr>
<th style="padding: 14px 16px;">Company</th>
<th style="padding: 14px 16px;">Price Band</th>
<th style="padding: 14px 16px; white-space: nowrap;">Dates</th>
<th style="padding: 14px 16px;">Status</th>
</tr>
</thead>
<tbody id="home-mainboard-tbody">
<tr style="border-top: 1px solid #E2E8F0;"><td colspan="4" style="padding: 20px; text-align:center; color:#94a3b8;">Loading Mainboard IPOs...</td></tr>
</tbody>
</table>
</div>
</div>
<!-- Column 2: SME IPOs -->
<div class="data-col">
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
<div>
  <h3 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0 0 3px;">SME IPOs</h3>
  <span style="font-size: 11px; color: #64748b;">Listed · Closed · Open · Upcoming</span>
</div>
<a href="sme/" style="font-size: 12px; font-weight: 600; color: #3B82F6; text-decoration: none;">View All →</a>
</div>
<div class="table-container" style="background: white; border: 1px solid #E2E8F0; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
<table style="width: 100%; font-size: 12px; text-align: left; border-collapse: collapse;">
<thead style="background: #F8FAFC; color: #64748B; font-weight: 700; text-transform: uppercase; font-size: 10px; letter-spacing: 0.5px;">
<tr>
<th style="padding: 14px 16px;">Company</th>
<th style="padding: 14px 16px;">Price Band</th>
<th style="padding: 14px 16px; white-space: nowrap;">Dates</th>
<th style="padding: 14px 16px;">Status</th>
</tr>
</thead>
<tbody id="home-sme-tbody">
<tr style="border-top: 1px solid #E2E8F0;"><td colspan="4" style="padding: 20px; text-align:center; color:#94a3b8;">Loading SME IPOs...</td></tr>
</tbody>
</table>
</div>
</div>
</div>
</section>
<!-- IPO Calendar (Brief) -->
<section class="section" style="background: white;">
<div class="container">
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px;">
<h2 class="section-title" style="margin: 0;">IPO Calendar</h2>
<a class="btn btn-outline" href="calendar/">View Full Calendar →</a>
</div>
<div class="table-container">
<table>
<thead>
<tr>
<th>Date</th>
<th>Company</th>
<th>Event</th>
<th>Status</th>
</tr>
</thead>
<tbody id="home-calendar-tbody">
<tr><td colspan="4" style="text-align:center; padding:16px;">Loading Calendar...</td></tr>
</tbody>
</table>
</div>
</div>
</section>
<!-- Tools Section -->
<section class="section" style="background: white;">
<div class="container">
<h2 class="section-title">Investor Tools</h2>
<div class="cards-grid">
<div class="ipo-card animate-on-scroll" style="text-align: center;">
<div style="font-size: 32px; margin-bottom: 16px;">🧮</div>
<h3 style="margin-bottom: 12px;">IPO Calculator</h3>
<p style="color: var(--text-muted); margin-bottom: 16px;">Calculate total investment based on lots.</p>
<a class="btn btn-outline" href="tools/ipo-calculator">Open Tool →</a>
</div>
<div class="ipo-card animate-on-scroll" style="text-align: center;">
<div style="font-size: 32px; margin-bottom: 16px;">📈</div>
<h3 style="margin-bottom: 12px;">Listing Gain Calculator</h3>
<p style="color: var(--text-muted); margin-bottom: 16px;">Calculate your profit on listing day.</p>
<a class="btn btn-outline" href="tools/listing-gain-calculator">Open Tool →</a>
</div>
<div class="ipo-card animate-on-scroll" style="text-align: center;">
<div style="font-size: 32px; margin-bottom: 16px;">✅</div>
<h3 style="margin-bottom: 12px;">IPO Allotment</h3>
<p style="color: var(--text-muted); margin-bottom: 16px;">Check allotment status via Registrar.</p>
<a class="btn btn-outline" href="allotment/">Open Tool →</a>
</div>
<div class="ipo-card animate-on-scroll" style="text-align: center;">
<div style="font-size: 32px; margin-bottom: 16px;">📅</div>
<h3 style="margin-bottom: 12px;">IPO Calendar</h3>
<p style="color: var(--text-muted); margin-bottom: 16px;">Track all important IPO dates.</p>
<a class="btn btn-outline" href="calendar/">Open Tool →</a>
</div>
</div>
</div>
</section>
<!-- Stock Broker Reviews Section -->
<section class="section animate-on-scroll broker-showcase-section" style="padding: 72px 0 80px; background: linear-gradient(180deg, #090e17 0%, #0f172a 100%); position: relative; overflow: hidden; margin-top: 30px;">
  <div style="position: absolute; top: -100px; right: -100px; width: 450px; height: 450px; background: radial-gradient(circle, rgba(59,130,246,0.1) 0%, transparent 70%); border-radius: 50%; pointer-events: none;"></div>
  <div style="position: absolute; bottom: -80px; left: -80px; width: 380px; height: 380px; background: radial-gradient(circle, rgba(168,85,247,0.08) 0%, transparent 70%); border-radius: 50%; pointer-events: none;"></div>

  <div class="container" style="position: relative; z-index: 2;">
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px; flex-wrap: wrap; gap: 20px;">
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(59,130,246,0.15); border: 1px solid rgba(59,130,246,0.3); color: #93c5fd; font-weight: 700; font-size: 11px; letter-spacing: 1.5px; padding: 5px 16px; border-radius: 20px; text-transform: uppercase; margin-bottom: 14px;">
          <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          TOP BROKERS IN INDIA
        </div>
        <h2 style="font-size: 32px; font-weight: 800; color: #ffffff; margin: 0 0 8px; letter-spacing: -0.5px;">Best Demat Accounts for IPOs &amp; Trading</h2>
        <p style="color: #94a3b8; font-size: 15px; margin: 0; max-width: 620px;">Compare India's leading SEBI-registered discount brokers, brokerage charges, and open a free Demat account in 5 minutes.</p>
      </div>
      <a class="btn" href="/iposetu/brokers/" style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); color: #f8fafc; padding: 10px 22px; border-radius: 24px; font-size: 13px; font-weight: 600; text-decoration: none; transition: 0.2s;">View All Brokers →</a>
    </div>

    <div class="broker-modern-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px;">
      
      <!-- Broker 1: Zerodha -->
      <div class="broker-modern-card" style="background: rgba(255,255,255,0.04); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.08); border-radius: 20px; padding: 28px 24px; display: flex; flex-direction: column; justify-content: space-between; position: relative; transition: all 0.3s ease;">
        <div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <span style="background: rgba(59, 130, 246, 0.18); color: #93c5fd; border: 1px solid rgba(59, 130, 246, 0.3); font-size: 10px; font-weight: 700; padding: 4px 10px; border-radius: 12px; letter-spacing: 0.6px; text-transform: uppercase;">#1 POPULAR CHOICE</span>
            <span style="display: inline-flex; align-items: center; gap: 4px; background: rgba(16, 185, 129, 0.15); color: #34d399; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 8px;">★ 4.6</span>
          </div>

          <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 18px;">
            <div style="width: 46px; height: 46px; background: linear-gradient(135deg, #38bdf8, #0284c7); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-weight: 900; font-size: 20px; box-shadow: 0 8px 16px rgba(2, 132, 199, 0.3);">Z</div>
            <div>
              <h3 style="font-size: 20px; font-weight: 800; color: #ffffff; margin: 0; letter-spacing: -0.3px;">Zerodha</h3>
              <span style="font-size: 12px; color: #94a3b8;">Kite –&bull; Pioneer of Discount Brokers</span>
            </div>
          </div>

          <!-- Fee Specs Box -->
          <div style="background: rgba(0,0,0,0.25); border: 1px solid rgba(255,255,255,0.06); border-radius: 14px; padding: 14px 16px; margin-bottom: 20px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px; font-size: 13px;">
              <span style="color: #94a3b8;">Equity Delivery</span>
              <strong style="color: #34d399; font-weight: 700;">₹0 (Free)</strong>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px; font-size: 13px;">
              <span style="color: #94a3b8;">Intraday &amp; F&amp;O</span>
              <strong style="color: #ffffff; font-weight: 600;">₹20 / order</strong>
            </div>
            <div style="display: flex; justify-content: space-between; font-size: 13px;">
              <span style="color: #94a3b8;">Account Opening</span>
              <strong style="color: #34d399; font-weight: 700;">₹0 (Free)</strong>
            </div>
          </div>

          <!-- Feature Bullets -->
          <div style="display: flex; flex-direction: column; gap: 8px; margin-bottom: 24px;">
            <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: #cbd5e1;">
              <span style="color: #3b82f6;">✓</span> Instant UPI IPO Applications
            </div>
            <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: #cbd5e1;">
              <span style="color: #3b82f6;">✓</span> Zero AMC First Year
            </div>
          </div>
        </div>

        <div>
          <a class="btn" target="_blank" href="https://zerodha.com/open-account?c=ZMP" style="display: block; width: 100%; text-align: center; background: linear-gradient(135deg, #2563eb, #1d4ed8); color: white; padding: 12px; border-radius: 12px; font-weight: 700; font-size: 14px; text-decoration: none; box-shadow: 0 8px 20px rgba(37,99,235,0.35); transition: 0.2s;">Open Free Account →</a>
          <div style="text-align: center; font-size: 11px; color: #64748b; margin-top: 8px;">100% Online · 5 Mins Paperless</div>
        </div>
      </div>

      <!-- Broker 2: Upstox -->
      <div class="broker-modern-card" style="background: rgba(255,255,255,0.04); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.08); border-radius: 20px; padding: 28px 24px; display: flex; flex-direction: column; justify-content: space-between; position: relative; transition: all 0.3s ease;">
        <div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <span style="background: rgba(168, 85, 247, 0.18); color: #d8b4fe; border: 1px solid rgba(168, 85, 247, 0.3); font-size: 10px; font-weight: 700; padding: 4px 10px; border-radius: 12px; letter-spacing: 0.6px; text-transform: uppercase;">FASTEST APP</span>
            <span style="display: inline-flex; align-items: center; gap: 4px; background: rgba(16, 185, 129, 0.15); color: #34d399; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 8px;">★ 4.5</span>
          </div>

          <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 18px;">
            <div style="width: 46px; height: 46px; background: linear-gradient(135deg, #a855f7, #7e22ce); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-weight: 900; font-size: 20px; box-shadow: 0 8px 16px rgba(126, 34, 206, 0.3);">U</div>
            <div>
              <h3 style="font-size: 20px; font-weight: 800; color: #ffffff; margin: 0; letter-spacing: -0.3px;">Upstox</h3>
              <span style="font-size: 12px; color: #94a3b8;">Pro Web &bull; Backed by Ratan Tata</span>
            </div>
          </div>

          <!-- Fee Specs Box -->
          <div style="background: rgba(0,0,0,0.25); border: 1px solid rgba(255,255,255,0.06); border-radius: 14px; padding: 14px 16px; margin-bottom: 20px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px; font-size: 13px;">
              <span style="color: #94a3b8;">Equity Delivery</span>
              <strong style="color: #ffffff; font-weight: 600;">₹20 / order</strong>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px; font-size: 13px;">
              <span style="color: #94a3b8;">Intraday &amp; F&amp;O</span>
              <strong style="color: #ffffff; font-weight: 600;">₹20 / order</strong>
            </div>
            <div style="display: flex; justify-content: space-between; font-size: 13px;">
              <span style="color: #94a3b8;">Account Opening</span>
              <strong style="color: #34d399; font-weight: 700;">₹0 (Free)</strong>
            </div>
          </div>

          <!-- Feature Bullets -->
          <div style="display: flex; flex-direction: column; gap: 8px; margin-bottom: 24px;">
            <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: #cbd5e1;">
              <span style="color: #a855f7;">✓</span> Real-Time TradingView Charts
            </div>
            <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: #cbd5e1;">
              <span style="color: #a855f7;">✓</span> Instant IPO Apply via WhatsApp
            </div>
          </div>
        </div>

        <div>
          <a class="btn" target="_blank" href="https://upstox.com/open-demat-account/?utm_source=google&utm_campaign=IPOSETU" style="display: block; width: 100%; text-align: center; background: linear-gradient(135deg, #9333ea, #6b21a8); color: white; padding: 12px; border-radius: 12px; font-weight: 700; font-size: 14px; text-decoration: none; box-shadow: 0 8px 20px rgba(147,51,234,0.35); transition: 0.2s;">Open Free Account →</a>
          <div style="text-align: center; font-size: 11px; color: #64748b; margin-top: 8px;">100% Online · Zero Paperwork</div>
        </div>
      </div>

      <!-- Broker 3: ProStocks -->
      <div class="broker-modern-card" style="background: rgba(255,255,255,0.04); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.08); border-radius: 20px; padding: 28px 24px; display: flex; flex-direction: column; justify-content: space-between; position: relative; transition: all 0.3s ease;">
        <div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <span style="background: rgba(245, 158, 11, 0.18); color: #fde68a; border: 1px solid rgba(245, 158, 11, 0.3); font-size: 10px; font-weight: 700; padding: 4px 10px; border-radius: 12px; letter-spacing: 0.6px; text-transform: uppercase;">ZERO BROKERAGE</span>
            <span style="display: inline-flex; align-items: center; gap: 4px; background: rgba(16, 185, 129, 0.15); color: #34d399; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 8px;">★ 4.4</span>
          </div>

          <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 18px;">
            <div style="width: 46px; height: 46px; background: linear-gradient(135deg, #f59e0b, #d97706); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-weight: 900; font-size: 20px; box-shadow: 0 8px 16px rgba(217, 119, 6, 0.3);">P</div>
            <div>
              <h3 style="font-size: 20px; font-weight: 800; color: #ffffff; margin: 0; letter-spacing: -0.3px;">ProStocks</h3>
              <span style="font-size: 12px; color: #94a3b8;">Unlimited Plans &bull; Flat ₹0</span>
            </div>
          </div>

          <!-- Fee Specs Box -->
          <div style="background: rgba(0,0,0,0.25); border: 1px solid rgba(255,255,255,0.06); border-radius: 14px; padding: 14px 16px; margin-bottom: 20px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px; font-size: 13px;">
              <span style="color: #94a3b8;">Equity Delivery</span>
              <strong style="color: #34d399; font-weight: 700;">₹0 (Free)</strong>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px; font-size: 13px;">
              <span style="color: #94a3b8;">Intraday &amp; F&amp;O</span>
              <strong style="color: #34d399; font-weight: 700;">₹0 (Unlimited Plan)</strong>
            </div>
            <div style="display: flex; justify-content: space-between; font-size: 13px;">
              <span style="color: #94a3b8;">Account Opening</span>
              <strong style="color: #34d399; font-weight: 700;">₹0 (Free)</strong>
            </div>
          </div>

          <!-- Feature Bullets -->
          <div style="display: flex; flex-direction: column; gap: 8px; margin-bottom: 24px;">
            <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: #cbd5e1;">
              <span style="color: #f59e0b;">✓</span> Unlimited Monthly Trading Plans
            </div>
            <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: #cbd5e1;">
              <span style="color: #f59e0b;">✓</span> Dedicated Call-and-Trade Desk
            </div>
          </div>
        </div>

        <div>
          <a class="btn" target="_blank" href="https://www.prostocks.com/open-an-account.html" style="display: block; width: 100%; text-align: center; background: linear-gradient(135deg, #d97706, #b45309); color: white; padding: 12px; border-radius: 12px; font-weight: 700; font-size: 14px; text-decoration: none; box-shadow: 0 8px 20px rgba(217,119,6,0.35); transition: 0.2s;">Open Free Account →</a>
          <div style="text-align: center; font-size: 11px; color: #64748b; margin-top: 8px;">Zero AMC for Lifetime Available</div>
        </div>
      </div>

      <!-- Broker 4: Paytm Money -->
      <div class="broker-modern-card" style="background: rgba(255,255,255,0.04); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.08); border-radius: 20px; padding: 28px 24px; display: flex; flex-direction: column; justify-content: space-between; position: relative; transition: all 0.3s ease;">
        <div>
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <span style="background: rgba(14, 165, 233, 0.18); color: #7dd3fc; border: 1px solid rgba(14, 165, 233, 0.3); font-size: 10px; font-weight: 700; padding: 4px 10px; border-radius: 12px; letter-spacing: 0.6px; text-transform: uppercase;">BEGINNER FRIENDLY</span>
            <span style="display: inline-flex; align-items: center; gap: 4px; background: rgba(16, 185, 129, 0.15); color: #34d399; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 8px;">★ 4.3</span>
          </div>

          <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 18px;">
            <div style="width: 46px; height: 46px; background: linear-gradient(135deg, #0ea5e9, #0284c7); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-weight: 900; font-size: 18px; box-shadow: 0 8px 16px rgba(14, 165, 233, 0.3);">PM</div>
            <div>
              <h3 style="font-size: 20px; font-weight: 800; color: #ffffff; margin: 0; letter-spacing: -0.3px;">Paytm Money</h3>
              <span style="font-size: 12px; color: #94a3b8;">Paytm &bull; Direct Mutual Funds</span>
            </div>
          </div>

          <!-- Fee Specs Box -->
          <div style="background: rgba(0,0,0,0.25); border: 1px solid rgba(255,255,255,0.06); border-radius: 14px; padding: 14px 16px; margin-bottom: 20px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px; font-size: 13px;">
              <span style="color: #94a3b8;">Equity Delivery</span>
              <strong style="color: #ffffff; font-weight: 600;">₹15 or 0.05%</strong>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px; font-size: 13px;">
              <span style="color: #94a3b8;">Intraday &amp; F&amp;O</span>
              <strong style="color: #ffffff; font-weight: 600;">₹20 / order</strong>
            </div>
            <div style="display: flex; justify-content: space-between; font-size: 13px;">
              <span style="color: #94a3b8;">Account Opening</span>
              <strong style="color: #34d399; font-weight: 700;">₹0 (Free)</strong>
            </div>
          </div>

          <!-- Feature Bullets -->
          <div style="display: flex; flex-direction: column; gap: 8px; margin-bottom: 24px;">
            <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: #cbd5e1;">
              <span style="color: #0ea5e9;">✓</span> Pre-Open IPO Bidding Available
            </div>
            <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: #cbd5e1;">
              <span style="color: #0ea5e9;">✓</span> Zero Commission Mutual Funds
            </div>
          </div>
        </div>

        <div>
          <a class="btn" target="_blank" href="https://www.paytmmoney.com/stocks/open-demat-account" style="display: block; width: 100%; text-align: center; background: linear-gradient(135deg, #0284c7, #0369a1); color: white; padding: 12px; border-radius: 12px; font-weight: 700; font-size: 14px; text-decoration: none; box-shadow: 0 8px 20px rgba(2,132,199,0.35); transition: 0.2s;">Open Free Account →</a>
          <div style="text-align: center; font-size: 11px; color: #64748b; margin-top: 8px;">100% Digital KYC via Aadhaar</div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/footer.php'; ?>

<script src="/iposetu/assets/js/components.js?v=6.1"></script>
<script src="/iposetu/assets/js/ad-manager.js?v=5"></script>
<script src="/iposetu/assets/js/main.js?v=2"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    function formatDisplayDate(dStr, showYear) {
        if (!dStr) return '';
        const d = new Date(dStr);
        if (isNaN(d.getTime())) return dStr;
        const opts = { day: 'numeric', month: 'short' };
        if (showYear) opts.year = 'numeric';
        return d.toLocaleDateString('en-GB', opts);
    }

    function renderStatusBadge(status) {
        const s = (status || '').toUpperCase();
        if (s === 'OPEN' || s === 'LIVE') {
            return '<span style="display:inline-block; padding:3px 8px; border-radius:12px; font-size:10px; font-weight:700; background:#dcfce7; color:#166534;">OPEN</span>';
        } else if (s === 'UPCOMING') {
            return '<span style="display:inline-block; padding:3px 8px; border-radius:12px; font-size:10px; font-weight:700; background:#fef9c3; color:#854d0e;">UPCOMING</span>';
        } else if (s === 'CLOSED') {
            return '<span style="display:inline-block; padding:3px 8px; border-radius:12px; font-size:10px; font-weight:700; background:#fee2e2; color:#991b1b;">CLOSED</span>';
        } else if (s === 'LISTED') {
            return '<span style="display:inline-block; padding:3px 8px; border-radius:12px; font-size:10px; font-weight:700; background:#dbeafe; color:#1e40af;">LISTED</span>';
        }
        return '<span style="display:inline-block; padding:3px 8px; border-radius:12px; font-size:10px; font-weight:700; background:#f1f5f9; color:#475569;">' + (s || '--') + '</span>';
    }

    function renderEventBadge(label) {
        const l = (label || '').toLowerCase();
        if (l.includes('open')) {
            return '<span style="display:inline-block; padding:3px 8px; border-radius:12px; font-size:11px; font-weight:700; background:#ecfdf5; color:#065f46; border:1px solid #a7f3d0;">Opens</span>';
        } else if (l.includes('close')) {
            return '<span style="display:inline-block; padding:3px 8px; border-radius:12px; font-size:11px; font-weight:700; background:#fef2f2; color:#991b1b; border:1px solid #fecaca;">Closes</span>';
        } else if (l.includes('allot')) {
            return '<span style="display:inline-block; padding:3px 8px; border-radius:12px; font-size:11px; font-weight:700; background:#fefce8; color:#854d0e; border:1px solid #fef08a;">Allotment</span>';
        } else if (l.includes('list')) {
            return '<span style="display:inline-block; padding:3px 8px; border-radius:12px; font-size:11px; font-weight:700; background:#eff6ff; color:#1e40af; border:1px solid #bfdbfe;">Listing</span>';
        }
        return '<span style="display:inline-block; padding:3px 8px; border-radius:12px; font-size:11px; font-weight:700; background:#f1f5f9; color:#475569;">' + (label || '--') + '</span>';
    }

    // 1. Load Current & Open IPOs Grid
    function loadOpenSubscriptionGrid() {
        const grid = document.getElementById('home-subscription-grid');
        if (!grid) return;

        fetch('/iposetu/api/get_ipos.php?status=open')
            .then(res => res.json())
            .then(data => {
                let ipos = (data.status === 'success' && data.data) ? data.data : [];
                if (ipos.length < 4) {
                    fetch('/iposetu/api/get_ipos.php?status=upcoming')
                        .then(res => res.json())
                        .then(upData => {
                            if (upData.status === 'success' && upData.data) {
                                ipos = ipos.concat(upData.data);
                            }
                            renderGridCards(ipos.slice(0, 4));
                        })
                        .catch(() => renderGridCards(ipos.slice(0, 4)));
                } else {
                    renderGridCards(ipos.slice(0, 4));
                }
            })
            .catch(err => {
                console.error('Error loading subscription grid:', err);
                grid.innerHTML = '<div style="grid-column: 1/-1; text-align:center; padding: 20px; color:#ef4444;">Failed to load open IPOs.</div>';
            });

        function renderGridCards(list) {
            if (!list || list.length === 0) {
                grid.innerHTML = '<div style="grid-column: 1/-1; text-align:center; padding: 20px; color:#64748b;">No active IPOs open for subscription right now.</div>';
                return;
            }

            let html = '';
            list.forEach(ipo => {
                const isSme = (ipo.type || '').toUpperCase().includes('SME');
                const badgeText = isSme ? 'SME IPO' : 'MAINBOARD';
                const badgeClass = isSme ? 'sme' : 'main';
                const slug = ipo.slug || (ipo.symbol ? ipo.symbol.toLowerCase() : '#');
                const url = isSme ? ('/iposetu/sme/' + slug) : ('/iposetu/ipo/' + slug);

                let gmpText = '--';
                let gmpColor = '#64748b';
                if (ipo.gmp_price !== null && ipo.gmp_price !== undefined) {
                    const gVal = parseFloat(ipo.gmp_price);
                    const isPos = gVal > 0;
                    gmpColor = isPos ? '#10b981' : (gVal < 0 ? '#ef4444' : '#64748b');
                    const sign = isPos ? '+' : '';
                    const pct = ipo.gmp_percentage ? (' (' + sign + ipo.gmp_percentage + '%)') : '';
                    gmpText = sign + '₹' + ipo.gmp_price + pct;
                }

                const priceBand = ipo.price_band || (ipo.minimum_price && ipo.maximum_price ? ('₹' + ipo.minimum_price + ' - ₹' + ipo.maximum_price) : '--');
                const issueSize = ipo.issue_size ? ('₹' + ipo.issue_size + ' Cr') : '--';

                const openDt = formatDisplayDate(ipo.open_date, false);
                const closeDt = formatDisplayDate(ipo.close_date, false);
                const dateRange = (openDt && closeDt) ? (openDt + ' - ' + closeDt) : (closeDt ? ('Closes ' + closeDt) : 'Dates TBD');

                const todayStr = new Date().toISOString().split('T')[0];
                const isClosingToday = (ipo.close_date === todayStr);
                const timeLeft = isClosingToday ? 'Closes Today' : (closeDt ? ('Closes ' + closeDt) : 'Open Now');

                html += `
                <div class="sub-card">
                  <div class="sub-card-header">
                    <div class="sub-logo" style="background:#eff6ff; color:#3b82f6; font-weight:800; font-size:13px; text-transform:uppercase;">
                      ${(ipo.name || 'IP').substring(0, 2)}
                    </div>
                    <div style="min-width: 0; flex: 1;">
                      <div class="sub-title" style="white-space:nowrap; overflow:hidden; text-overflow:ellipsis;" title="${ipo.name}">${ipo.name}</div>
                      <span class="sub-badge ${badgeClass}">${badgeText}</span>
                    </div>
                  </div>
                  <div class="sub-price" style="font-size: 18px; margin-bottom: 12px;">${priceBand}</div>
                  <div class="sub-stats">
                    <div>
                      <span class="label">Issue Size</span>
                      <span class="value">${issueSize}</span>
                    </div>
                    <div>
                      <span class="label">GMP (Est.)</span>
                      <span class="value" style="color:${gmpColor};">${gmpText}</span>
                    </div>
                  </div>
                  <div class="sub-dates" style="font-size: 12px; margin-bottom: 16px;">Dates: <strong>${dateRange}</strong></div>
                  <div class="sub-footer">
                    <span class="time-left ${isClosingToday ? 'orange' : ''}">
                      <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                      ${timeLeft}
                    </span>
                    <a href="${url}" class="btn btn-primary sub-btn" style="padding: 6px 14px; font-size: 12px; text-decoration: none;">Details →</a>
                  </div>
                </div>`;
            });

            grid.innerHTML = html;
        }
    }

    // 2. Load Mainboard IPOs Table
    function loadMainboardTable() {
        const tbody = document.getElementById('home-mainboard-tbody');
        if (!tbody) return;

        fetch('/iposetu/api/get_ipos.php?type=mainboard')
            .then(res => res.json())
            .then(data => {
                const ipos = (data.status === 'success' && data.data) ? data.data.slice(0, 6) : [];
                if (ipos.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="4" style="padding: 20px; text-align:center; color:#64748b;">No Mainboard IPOs available.</td></tr>';
                    return;
                }

                let html = '';
                ipos.forEach(ipo => {
                    const slug = ipo.slug || (ipo.symbol ? ipo.symbol.toLowerCase() : '#');
                    const url = '/iposetu/ipo/' + slug;
                    const priceBand = ipo.price_band || (ipo.minimum_price && ipo.maximum_price ? ('₹' + ipo.minimum_price + ' - ₹' + ipo.maximum_price) : '--');
                    const openDt = formatDisplayDate(ipo.open_date, false);
                    const closeDt = formatDisplayDate(ipo.close_date, false);
                    const dateRange = (openDt && closeDt) ? (openDt + ' - ' + closeDt) : (closeDt || openDt || 'TBD');

                    html += `
                    <tr style="border-top: 1px solid #E2E8F0; transition: background 0.15s;" onmouseover="this.style.background='#f8fafc'" onmouseout="this.style.background='white'">
                      <td style="padding: 12px 16px;">
                        <a href="${url}" style="text-decoration:none; color:inherit; display:flex; align-items:center; gap:10px;">
                          <div style="width:30px; height:30px; border-radius:8px; background:#eff6ff; color:#2563eb; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:11px; flex-shrink:0;">
                            ${(ipo.name || 'MB').substring(0,2).toUpperCase()}
                          </div>
                          <div style="min-width:0;">
                            <div style="font-weight:700; color:#0f172a; font-size:13px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; max-width:180px;" title="${ipo.name}">${ipo.name}</div>
                            <div style="font-size:11px; color:#64748b;">${ipo.industry || ipo.symbol || 'Mainboard'}</div>
                          </div>
                        </a>
                      </td>
                      <td style="padding: 12px 16px; font-weight:600; color:#334155; white-space:nowrap;">${priceBand}</td>
                      <td style="padding: 12px 16px; color:#64748b; white-space:nowrap;">${dateRange}</td>
                      <td style="padding: 12px 16px;">${renderStatusBadge(ipo.status)}</td>
                    </tr>`;
                });
                tbody.innerHTML = html;
            })
            .catch(err => {
                console.error('Error loading mainboard IPOs:', err);
                tbody.innerHTML = '<tr><td colspan="4" style="padding: 20px; text-align:center; color:#ef4444;">Failed to load Mainboard IPOs.</td></tr>';
            });
    }

    // 3. Load SME IPOs Table
    function loadSMETable() {
        const tbody = document.getElementById('home-sme-tbody');
        if (!tbody) return;

        fetch('/iposetu/api/get_ipos.php?type=sme')
            .then(res => res.json())
            .then(data => {
                const ipos = (data.status === 'success' && data.data) ? data.data.slice(0, 6) : [];
                if (ipos.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="4" style="padding: 20px; text-align:center; color:#64748b;">No SME IPOs available.</td></tr>';
                    return;
                }

                let html = '';
                ipos.forEach(ipo => {
                    const slug = ipo.slug || (ipo.symbol ? ipo.symbol.toLowerCase() : '#');
                    const url = '/iposetu/sme/' + slug;
                    const priceBand = ipo.price_band || (ipo.minimum_price && ipo.maximum_price ? ('₹' + ipo.minimum_price + ' - ₹' + ipo.maximum_price) : '--');
                    const openDt = formatDisplayDate(ipo.open_date, false);
                    const closeDt = formatDisplayDate(ipo.close_date, false);
                    const dateRange = (openDt && closeDt) ? (openDt + ' - ' + closeDt) : (closeDt || openDt || 'TBD');

                    html += `
                    <tr style="border-top: 1px solid #E2E8F0; transition: background 0.15s;" onmouseover="this.style.background='#f8fafc'" onmouseout="this.style.background='white'">
                      <td style="padding: 12px 16px;">
                        <a href="${url}" style="text-decoration:none; color:inherit; display:flex; align-items:center; gap:10px;">
                          <div style="width:30px; height:30px; border-radius:8px; background:#f5f3ff; color:#7c3aed; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:11px; flex-shrink:0;">
                            ${(ipo.name || 'SM').substring(0,2).toUpperCase()}
                          </div>
                          <div style="min-width:0;">
                            <div style="font-weight:700; color:#0f172a; font-size:13px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; max-width:180px;" title="${ipo.name}">${ipo.name}</div>
                            <div style="font-size:11px; color:#64748b;">${ipo.industry || ipo.symbol || 'SME'}</div>
                          </div>
                        </a>
                      </td>
                      <td style="padding: 12px 16px; font-weight:600; color:#334155; white-space:nowrap;">${priceBand}</td>
                      <td style="padding: 12px 16px; color:#64748b; white-space:nowrap;">${dateRange}</td>
                      <td style="padding: 12px 16px;">${renderStatusBadge(ipo.status)}</td>
                    </tr>`;
                });
                tbody.innerHTML = html;
            })
            .catch(err => {
                console.error('Error loading SME IPOs:', err);
                tbody.innerHTML = '<tr><td colspan="4" style="padding: 20px; text-align:center; color:#ef4444;">Failed to load SME IPOs.</td></tr>';
            });
    }

    // 4. Load Calendar Table
    function loadCalendarTable() {
        const tbody = document.getElementById('home-calendar-tbody');
        if (!tbody) return;

        fetch('/iposetu/api/get_calendar.php')
            .then(res => res.json())
            .then(data => {
                let events = (data.status === 'success' && data.upcoming_events && data.upcoming_events.length > 0)
                    ? data.upcoming_events.slice(0, 6)
                    : [];

                if (events.length === 0 && data.data && data.data.length > 0) {
                    events = data.data.slice(0, 6).map(item => ({
                        date: item.open_date || item.listing_date || item.close_date,
                        label: item.status === 'OPEN' ? 'Open' : (item.status === 'UPCOMING' ? 'Opens' : 'Listing'),
                        ipo: { name: item.name, symbol: item.symbol, type: item.type, status: item.status }
                    }));
                }

                if (events.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="4" style="padding: 16px; text-align:center; color:#64748b;">No calendar events scheduled.</td></tr>';
                    return;
                }

                let html = '';
                events.forEach(ev => {
                    const ipo = ev.ipo || {};
                    const isSme = (ipo.type || '').toUpperCase().includes('SME');
                    const slug = ipo.slug || (ipo.symbol ? ipo.symbol.toLowerCase() : '#');
                    const url = isSme ? ('/iposetu/sme/' + slug) : ('/iposetu/ipo/' + slug);
                    const formattedDate = formatDisplayDate(ev.date, true);

                    html += `
                    <tr style="border-top: 1px solid #E2E8F0; transition: background 0.15s;" onmouseover="this.style.background='#f8fafc'" onmouseout="this.style.background='white'">
                      <td style="padding: 14px 16px; font-weight:600; color:#334155; white-space:nowrap;">
                        <svg width="13" height="13" fill="none" stroke="#64748b" stroke-width="2" viewBox="0 0 24 24" style="vertical-align:middle; margin-right:4px;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        ${formattedDate}
                      </td>
                      <td style="padding: 14px 16px; font-weight:700; color:#0f172a;">
                        <a href="${url}" style="text-decoration:none; color:inherit; transition: color 0.15s;" onmouseover="this.style.color='#2563eb'" onmouseout="this.style.color='#0f172a'">${ipo.name || '--'}</a>
                      </td>
                      <td style="padding: 14px 16px;">${renderEventBadge(ev.label)}</td>
                      <td style="padding: 14px 16px;">${renderStatusBadge(ipo.status)}</td>
                    </tr>`;
                });
                tbody.innerHTML = html;
            })
            .catch(err => {
                console.error('Error loading calendar data:', err);
                tbody.innerHTML = '<tr><td colspan="4" style="padding: 16px; text-align:center; color:#ef4444;">Failed to load Calendar data.</td></tr>';
            });
    }

    // Execute loaders
    loadOpenSubscriptionGrid();
    loadMainboardTable();
    loadSMETable();
    loadCalendarTable();
});
</script>
</body>
</html>
