$html = Get-Content -Raw "index.html" -Encoding UTF8
$head = [regex]::Match($html, '(?s)<head>.*?</head>').Value
$header = [regex]::Match($html, '(?s)<!-- (Global|Premium) Header -->.*?</header>').Value
$footer = [regex]::Match($html, '(?s)<!-- Footer -->.*?</footer>').Value
$scripts = [regex]::Match($html, '(?s)<script src="assets/js/components.js"></script>\s*<script src="assets/js/ad-manager.js\?v=1\.2"></script>\s*<script src="assets/js/main.js"></script>').Value

$pages = @(
    "advertise-with-us.html",
    "about.html",
    "contact.html",
    "ipo/index.html",
    "ipo/mainboard.html",
    "ipo/sme.html",
    "ipo/upcoming.html",
    "ipo/open.html",
    "ipo/closed.html",
    "ipo/listed.html",
    "ipo/ipo-details.html",
    "ipo/performance.html",
    "ipo/reviews.html",
    "ipo/ratings.html",
    "ipo/analysis.html",
    "ipo/financials.html",
    "ipo/anchor-investors.html",
    "ipo/basis-of-allotment.html",
    "ipo/faqs.html",
    "gmp/index.html",
    "subscription/index.html",
    "allotment/index.html",
    "calendar/index.html",
    "news/index.html",
    "news/article.html",
    "tools/ipo-calculator.html",
    "tools/listing-gain-calculator.html",
    "tools/sip-calculator.html",
    "tools/cagr-calculator.html",
    "tools/brokerage-calculator.html",
    "brokers/index.html",
    "brokers/prostocks.html",
    "stocks/index.html",
    "stocks/gainers.html",
    "stocks/losers.html",
    "stocks/most-active.html",
    "stocks/52-week-high.html",
    "stocks/52-week-low.html",
    "stocks/bulk-deals.html",
    "stocks/block-deals.html",
    "stocks/corporate-actions.html",
    "stocks/results.html",
    "stocks/shareholding.html",
    "mutual-funds/index.html",
    "mutual-funds/fund.html",
    "learn/index.html",
    "learn/ipo-guide.html",
    "learn/asba.html",
    "learn/gmp-guide.html",
    "learn/glossary.html"
)

# ============================================================
# Helper: Ad Slot HTML
# ============================================================
function Ad-Leaderboard($id) {
  return @"
<div style="margin: 20px auto; max-width: 100%; width: 100%;">
  <div class="ad-slot ad-leaderboard" id="$id"></div>
</div>
"@
}

function Ad-LargeBanner($id) {
  return @"
<div style="margin: 20px auto; max-width: 100%; width: 100%;">
  <div class="ad-slot ad-large-banner" id="$id"></div>
</div>
"@
}

function Ad-Rectangle($id) {
  return @"
<div class="ad-slot ad-rectangle" id="$id" style="margin: 0 auto; max-width: 300px; width: 100%;"></div>
"@
}

function Ad-Skyscraper($id) {
  return @"
<div class="ad-slot ad-skyscraper" id="$id" style="margin: 0 auto; max-width: 300px; width: 100%;"></div>
"@
}

function Ad-Banner($id) {
  return @"
<div class="ad-slot ad-banner" id="$id" style="margin: 20px auto; max-width: 100%; width: 100%;"></div>
"@
}

# ============================================================
# IPO Dummy Data Table Rows
# ============================================================
$ipoTableRows = @"
<tr>
  <td><div class="company-cell"><div class="company-avatar">DT</div><div><div style="font-weight:700;">Dhoot Transmission</div><div style="font-size:11px;color:#64748b;">BSE &bull; NSE</div></div></div></td>
  <td><span class="badge badge-main">Mainboard</span></td>
  <td>Aug 10, 2026</td><td>Aug 12, 2026</td>
  <td>&#8377;829&ndash;871</td><td>&#8377;1,250 Cr</td><td>17</td>
  <td class="text-green">&#8377;120 (13.8%)</td>
  <td><span class="badge badge-open">Open</span></td>
  <td><a href="ipo-details.html" class="text-blue" style="font-weight:600;">View &rarr;</a></td>
</tr>
<tr>
  <td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#10B981,#059669);">SC</div><div><div style="font-weight:700;">Saraswati Cables</div><div style="font-size:11px;color:#64748b;">BSE SME</div></div></div></td>
  <td><span class="badge badge-sme">SME</span></td>
  <td>Aug 9, 2026</td><td>Aug 13, 2026</td>
  <td>&#8377;90&ndash;95</td><td>&#8377;42 Cr</td><td>1600</td>
  <td class="text-green">&#8377;45 (47.4%)</td>
  <td><span class="badge badge-open">Open</span></td>
  <td><a href="ipo-details.html" class="text-blue" style="font-weight:600;">View &rarr;</a></td>
</tr>
<tr>
  <td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#F59E0B,#D97706);">FL</div><div><div style="font-weight:700;">FirstCry Logistics</div><div style="font-size:11px;color:#64748b;">BSE &bull; NSE</div></div></div></td>
  <td><span class="badge badge-main">Mainboard</span></td>
  <td>Aug 6, 2026</td><td>Aug 8, 2026</td>
  <td>&#8377;440&ndash;465</td><td>&#8377;4,193 Cr</td><td>32</td>
  <td class="text-green">&#8377;85 (18.3%)</td>
  <td><span class="badge badge-closed">Closed</span></td>
  <td><a href="ipo-details.html" class="text-blue" style="font-weight:600;">View &rarr;</a></td>
</tr>
<tr>
  <td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#8B5CF6,#7C3AED);">OE</div><div><div style="font-weight:700;">Ola Electric</div><div style="font-size:11px;color:#64748b;">BSE &bull; NSE</div></div></div></td>
  <td><span class="badge badge-main">Mainboard</span></td>
  <td>Jul 25, 2026</td><td>Jul 28, 2026</td>
  <td>&#8377;72&ndash;76</td><td>&#8377;6,146 Cr</td><td>197</td>
  <td class="text-green">&#8377;8 (10.5%)</td>
  <td><span class="badge" style="background:#DBEAFE;color:#1D4ED8;">Listed</span></td>
  <td><a href="ipo-details.html" class="text-blue" style="font-weight:600;">View &rarr;</a></td>
</tr>
<tr>
  <td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#EF4444,#DC2626);">KR</div><div><div style="font-weight:700;">Kross Ltd</div><div style="font-size:11px;color:#64748b;">BSE &bull; NSE</div></div></div></td>
  <td><span class="badge badge-main">Mainboard</span></td>
  <td>Sep 9, 2026</td><td>Sep 11, 2026</td>
  <td>&#8377;228&ndash;240</td><td>&#8377;250 Cr</td><td>62</td>
  <td style="color:#64748b;">&#8212;</td>
  <td><span class="badge" style="background:#FEF3C7;color:#92400E;">Upcoming</span></td>
  <td><a href="ipo-details.html" class="text-blue" style="font-weight:600;">View &rarr;</a></td>
</tr>
<tr>
  <td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#06B6D4,#0891B2);">AT</div><div><div style="font-weight:700;">Aeron Technik</div><div style="font-size:11px;color:#64748b;">NSE SME</div></div></div></td>
  <td><span class="badge badge-sme">SME</span></td>
  <td>Sep 15, 2026</td><td>Sep 17, 2026</td>
  <td>&#8377;115&ndash;121</td><td>&#8377;28 Cr</td><td>1200</td>
  <td style="color:#64748b;">&#8212;</td>
  <td><span class="badge" style="background:#FEF3C7;color:#92400E;">Upcoming</span></td>
  <td><a href="ipo-details.html" class="text-blue" style="font-weight:600;">View &rarr;</a></td>
</tr>
<tr>
  <td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#10B981,#059669);">PT</div><div><div style="font-weight:700;">Patel Engineering</div><div style="font-size:11px;color:#64748b;">BSE &bull; NSE</div></div></div></td>
  <td><span class="badge badge-main">Mainboard</span></td>
  <td>Jul 8, 2026</td><td>Jul 10, 2026</td>
  <td>&#8377;171</td><td>&#8377;1,170 Cr</td><td>87</td>
  <td class="text-red">-&#8377;12 (-7.0%)</td>
  <td><span class="badge" style="background:#DBEAFE;color:#1D4ED8;">Listed</span></td>
  <td><a href="ipo-details.html" class="text-blue" style="font-weight:600;">View &rarr;</a></td>
</tr>
<tr>
  <td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#F59E0B,#D97706);">BI</div><div><div style="font-weight:700;">Brainbees Solutions</div><div style="font-size:11px;color:#64748b;">BSE &bull; NSE</div></div></div></td>
  <td><span class="badge badge-main">Mainboard</span></td>
  <td>Jul 22, 2026</td><td>Jul 24, 2026</td>
  <td>&#8377;440&ndash;465</td><td>&#8377;4,193 Cr</td><td>32</td>
  <td class="text-green">&#8377;62 (13.3%)</td>
  <td><span class="badge" style="background:#DBEAFE;color:#1D4ED8;">Listed</span></td>
  <td><a href="ipo-details.html" class="text-blue" style="font-weight:600;">View &rarr;</a></td>
</tr>
<tr>
  <td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#8B5CF6,#7C3AED);">VA</div><div><div style="font-weight:700;">Vraj Iron</div><div style="font-size:11px;color:#64748b;">BSE SME</div></div></div></td>
  <td><span class="badge badge-sme">SME</span></td>
  <td>Jun 26, 2026</td><td>Jun 28, 2026</td>
  <td>&#8377;195&ndash;207</td><td>&#8377;171 Cr</td><td>72</td>
  <td class="text-green">&#8377;137 (66.2%)</td>
  <td><span class="badge" style="background:#DBEAFE;color:#1D4ED8;">Listed</span></td>
  <td><a href="ipo-details.html" class="text-blue" style="font-weight:600;">View &rarr;</a></td>
</tr>
<tr>
  <td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#EF4444,#DC2626);">MB</div><div><div style="font-weight:700;">Macobs Tech</div><div style="font-size:11px;color:#64748b;">NSE SME</div></div></div></td>
  <td><span class="badge badge-sme">SME</span></td>
  <td>Aug 20, 2026</td><td>Aug 22, 2026</td>
  <td>&#8377;145&ndash;153</td><td>&#8377;18 Cr</td><td>800</td>
  <td style="color:#64748b;">&#8212;</td>
  <td><span class="badge" style="background:#FEF3C7;color:#92400E;">Upcoming</span></td>
  <td><a href="ipo-details.html" class="text-blue" style="font-weight:600;">View &rarr;</a></td>
</tr>
"@

# ============================================================
# Sidebar HTML
# ============================================================
$sidebar = @"
<div>
  <!-- Live GMP Tracker Sidebar Widget (New) -->
  <div class="sidebar-widget">
    <div class="widget-title" style="display:flex; align-items:center; gap:6px;">
      <span style="display:inline-block; width:8px; height:8px; background:#10b981; border-radius:50%; animation: pulse 1.5s infinite;"></span>
      Live GMP Tracker
    </div>
    <div class="widget-body" style="padding:12px;">
      <div style="display:flex; flex-direction:column; gap:10px;">
        <div style="display:flex; justify-content:space-between; border-bottom:1px solid #f1f5f9; padding-bottom:8px;">
          <span style="font-size:12px; font-weight:700; color:#1e293b;">Dhoot Trans.</span>
          <span style="font-size:12px; font-weight:800; color:#16a34a;">+₹120 (13.8%)</span>
        </div>
        <div style="display:flex; justify-content:space-between; border-bottom:1px solid #f1f5f9; padding-bottom:8px;">
          <span style="font-size:12px; font-weight:700; color:#1e293b;">FirstCry Log.</span>
          <span style="font-size:12px; font-weight:800; color:#16a34a;">+₹85 (18.3%)</span>
        </div>
        <div style="display:flex; justify-content:space-between; border-bottom:1px solid #f1f5f9; padding-bottom:8px;">
          <span style="font-size:12px; font-weight:700; color:#1e293b;">Saraswati C.</span>
          <span style="font-size:12px; font-weight:800; color:#16a34a;">+₹45 (47.4%)</span>
        </div>
      </div>
      <a href="../gmp/index.html" style="display:block; text-align:center; font-size:11px; font-weight:700; color:var(--primary-color); margin-top:10px; text-decoration:none;">View All Live GMP &rarr;</a>
    </div>
  </div>

  <!-- Quick Links -->
  <div class="sidebar-widget">
    <div class="widget-title">Quick Links</div>
    <div class="widget-body" style="padding:8px 16px;">
      <ul class="sidebar-link-list">
        <li><a href="../ipo/index.html">All IPOs <span class="badge badge-open">10</span></a></li>
        <li><a href="../ipo/open.html">Open IPOs <span class="badge badge-open">2</span></a></li>
        <li><a href="../ipo/upcoming.html">Upcoming IPOs <span class="badge" style="background:#FEF3C7;color:#92400E;">4</span></a></li>
        <li><a href="../gmp/index.html">IPO GMP Today</a></li>
        <li><a href="../subscription/index.html">Subscription Status</a></li>
        <li><a href="../allotment/index.html">Allotment Status</a></li>
        <li><a href="../calendar/index.html">IPO Calendar</a></li>
      </ul>
    </div>
  </div>
  </div>
"@

# FAQ helper
function Build-Faq($faqs) {
    $html2 = '<div class="faq-section"><h2>Frequently Asked Questions</h2><div class="faq-list">'
    foreach ($faq in $faqs) {
        $html2 += @"
<div class="faq-item">
  <button class="faq-question">$($faq.q) <span class="faq-icon">+</span></button>
  <div class="faq-answer"><p>$($faq.a)</p></div>
</div>
"@
    }
    $html2 += '</div></div>'
    return $html2
}

foreach ($page in $pages) {
    $depth = ($page -split '/').Length - 1
    $prefix = ""
    if ($depth -gt 0) {
        for ($i=0; $i -lt $depth; $i++) { $prefix += "../" }
    }

    $pageHead = [regex]::Replace($head, 'href="(?!(http|#|/))', "href=""$prefix")
    $pageHeader = [regex]::Replace($header, 'href="(?!(http|#|/))', "href=""$prefix")
    $pageHeader = [regex]::Replace($pageHeader, 'src="(?!(http|#|/))', "src=""$prefix")
    $pageFooter = [regex]::Replace($footer, 'href="(?!(http|#|/))', "href=""$prefix")
    $pageFooter = [regex]::Replace($pageFooter, 'src="(?!(http|#|/))', "src=""$prefix")
    $pageScripts = [regex]::Replace($scripts, 'src="(?!(http|#|/))', "src=""$prefix")

    $categoryContent = ""
    $titleDisplay = ($page -split '/')[-1] -replace '\.html', ''
    $plainName = $titleDisplay -replace '-', ' '
    $titleDisplay = (Get-Culture).TextInfo.ToTitleCase($plainName)

    # ============================================================
    # ABOUT
    # ============================================================
    if ($page -match "^about") {
        $titleDisplay = "About IPOSETU"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">About</span></div>
  <h1 class="page-hero-title">About IPOSETU</h1>
  <p class="page-hero-desc">India's modern financial information portal for IPOs, stocks, and market data.</p>
</div></div>
<div class="container" style="padding:32px 24px;max-width:1400px;margin:0 auto;">
  <div style="max-width:800px;margin:0 auto;">
    <h2 style="font-size:28px;font-weight:800;color:var(--primary-color);margin-bottom:16px;">Demystifying the Indian IPO Market</h2>
    <p style="font-size:16px;color:var(--text-muted);line-height:1.8;margin-bottom:32px;">IPOSETU was built with a single mission: to empower retail and HNI investors with real-time, accurate, and actionable data on the Indian primary markets. We combine data, research, and tools into one clean platform.</p>
    <div class="stat-cards" style="grid-template-columns:repeat(3,1fr);margin-bottom:40px;">
      <div class="stat-card accent"><div class="stat-label">IPOs Tracked</div><div class="stat-value">500+</div><div class="stat-sub">Since 2020</div></div>
      <div class="stat-card positive"><div class="stat-label">Monthly Users</div><div class="stat-value">2L+</div><div class="stat-sub">Active investors</div></div>
      <div class="stat-card"><div class="stat-label">Data Points</div><div class="stat-value">10M+</div><div class="stat-sub">Updated daily</div></div>
    </div>
    <div class="cards-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;text-align:left;">
      <div class="ipo-card"><h3 style="color:var(--accent-color);margin-bottom:12px;">Real-Time Data</h3><p>Live subscription figures, GMP estimates, and market maker data directly from exchange feeds.</p></div>
      <div class="ipo-card"><h3 style="color:var(--accent-color);margin-bottom:12px;">Deep Analysis</h3><p>Unbiased, fundamental analysis of every Mainboard and SME IPO by our financial experts.</p></div>
      <div class="ipo-card"><h3 style="color:var(--accent-color);margin-bottom:12px;">Investor First</h3><p>Clean UI, simple calculators, and no annoying popups. Designed to help you make informed decisions.</p></div>
    </div>
  </div>
</div>
"@
    }

    # ============================================================
    # CONTACT
    # ============================================================
    elseif ($page -match "^contact") {
        $titleDisplay = "Contact Us"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">Contact</span></div>
  <h1 class="page-hero-title">Contact IPOSETU</h1>
  <p class="page-hero-desc">Get in touch with us for advertising, partnerships, or general enquiries.</p>
</div></div>
<div class="container" style="padding:32px 24px;max-width:900px;margin:0 auto;">
  <div style="display:grid;grid-template-columns:1fr 1fr;gap:32px;">
    <div>
      <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:32px;">
        <h2 style="margin-bottom:20px;color:var(--primary-color);">Send a Message</h2>
        <form style="display:flex;flex-direction:column;gap:16px;">
          <div><label style="display:block;font-weight:600;margin-bottom:6px;font-size:13px;">Name</label><input type="text" style="width:100%;padding:10px 12px;border:1px solid var(--border-color);border-radius:6px;font-family:inherit;" placeholder="Your Name"></div>
          <div><label style="display:block;font-weight:600;margin-bottom:6px;font-size:13px;">Email</label><input type="email" style="width:100%;padding:10px 12px;border:1px solid var(--border-color);border-radius:6px;font-family:inherit;" placeholder="your@email.com"></div>
          <div><label style="display:block;font-weight:600;margin-bottom:6px;font-size:13px;">Subject</label><select style="width:100%;padding:10px 12px;border:1px solid var(--border-color);border-radius:6px;font-family:inherit;"><option>General Enquiry</option><option>Advertising</option><option>Data Correction</option><option>Partnership</option></select></div>
          <div><label style="display:block;font-weight:600;margin-bottom:6px;font-size:13px;">Message</label><textarea rows="5" style="width:100%;padding:10px 12px;border:1px solid var(--border-color);border-radius:6px;font-family:inherit;" placeholder="How can we help?"></textarea></div>
          <button type="button" class="btn btn-primary" style="width:100%;padding:12px;">Send Message</button>
        </form>
      </div>
    </div>
    <div>
      <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:32px;margin-bottom:20px;">
        <h3 style="font-size:16px;font-weight:800;margin-bottom:16px;color:var(--primary-color);">Contact Information</h3>
        <p style="font-size:14px;color:var(--text-muted);margin-bottom:12px;">&#128231; contact@iposetu.com</p>
        <p style="font-size:14px;color:var(--text-muted);margin-bottom:12px;">&#128222; +91-98765-43210</p>
        <p style="font-size:14px;color:var(--text-muted);">&#128205; Mumbai, Maharashtra, India</p>
      </div>
      <div style="background:#EFF6FF;border:1px solid #BFDBFE;border-radius:var(--radius-md);padding:24px;">
        <h4 style="font-size:14px;font-weight:700;color:var(--accent-color);margin-bottom:8px;">Advertising Enquiries</h4>
        <p style="font-size:13px;color:#334155;margin-bottom:12px;">Reach millions of active Indian investors. View our media kit and ad formats.</p>
        <a href="${prefix}advertise-with-us.html" class="btn btn-primary" style="font-size:13px;padding:8px 16px;">View Media Kit &rarr;</a>
      </div>
    </div>
  </div>
</div>
"@
    }

    # ============================================================
    # IPO INDEX (All IPOs)
    # ============================================================
    elseif ($page -match "ipo/index") {
        $titleDisplay = "All IPOs"
        $categoryContent = @"
<div class="split-hero ipo-hero">
  <div class="hero-orb" style="width:300px;height:300px;background:#3b82f6;top:-100px;right:60px;"></div>
  <div class="split-hero-left">
    <div class="hero-breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">All IPOs</span></div>
    <div class="hero-badges">
      <span class="hero-badge live">&#x1F7E2; Live Data</span>
      <span class="hero-badge count">147 IPOs 2026</span>
      <span class="hero-badge updated">Daily Updates</span>
    </div>
    <h1 class="hero-title">All IPOs &mdash; 2026</h1>
    <p class="hero-desc">Browse current, upcoming, open, closed and listed IPOs.<br>Track subscription, GMP and listing gains &mdash; all in one place.</p>
  </div>
  <div class="split-hero-right">
    <div class="ipo-chart-visual">
      <div class="chart-label">IPO Listing Gains 2026</div>
      <div class="chart-bar"></div>
      <div class="chart-bar"></div>
      <div class="chart-bar"></div>
      <div class="chart-bar"></div>
      <div class="chart-bar"></div>
      <div class="chart-bar"></div>
    </div>
  </div>
</div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="stat-cards">
    <div class="stat-card accent"><div class="stat-label">Total IPOs 2026</div><div class="stat-value">147</div><div class="stat-sub">Mainboard + SME</div></div>
    <div class="stat-card positive"><div class="stat-label">Open IPOs</div><div class="stat-value">2</div><div class="stat-sub">Accepting now</div></div>
    <div class="stat-card"><div class="stat-label">Upcoming IPOs</div><div class="stat-value">8</div><div class="stat-sub">Next 30 days</div></div>
    <div class="stat-card positive"><div class="stat-label">Avg Listing Gain</div><div class="stat-value">22.4%</div><div class="stat-sub">2026 so far</div></div>
  </div>
  $(Ad-Leaderboard "ipoindex-top-ad")
  <div class="filter-bar">
    <input type="text" id="ipo-search" placeholder="Search company..." data-filter-input="ipo-main-table">
    <select id="filter-type"><option value="">All Types</option><option>Mainboard</option><option>SME</option></select>
    <select id="filter-status"><option value="">All Status</option><option>Open</option><option>Upcoming</option><option>Closed</option><option>Listed</option></select>
    <select id="filter-year"><option value="">All Years</option><option>2026</option><option>2025</option></select>
    <select id="filter-exchange"><option value="">Exchange</option><option>NSE</option><option>BSE</option></select>
    <button id="apply-filter" class="btn-filter">Apply</button>
    <button id="reset-filter" class="btn-reset">Reset</button>
  </div>
  <div class="tab-container">
    <div class="tab-bar">
      <button class="tab-btn active" data-tab="tab-all">All</button>
      <button class="tab-btn" data-tab="tab-open">Open</button>
      <button class="tab-btn" data-tab="tab-upcoming">Upcoming</button>
      <button class="tab-btn" data-tab="tab-closed">Closed</button>
      <button class="tab-btn" data-tab="tab-listed">Listed</button>
    </div>
    <div id="tab-all" class="tab-pane active">
      <div class="table-container">
        <table id="ipo-main-table"><thead><tr><th>Company</th><th>Type</th><th>Open</th><th>Close</th><th>Price Band</th><th>Issue Size</th><th>Lot</th><th>GMP</th><th>Status</th><th>Action</th></tr></thead>
        <tbody>$ipoTableRows</tbody></table>
      </div>
    </div>
    <div id="tab-open" class="tab-pane">
      <div class="table-container"><table><thead><tr><th>Company</th><th>Type</th><th>Open</th><th>Close</th><th>Price Band</th><th>Issue Size</th><th>Lot</th><th>GMP</th><th>Status</th><th>Action</th></tr></thead>
      <tbody>
        <tr><td><div class="company-cell"><div class="company-avatar">DT</div><strong>Dhoot Transmission</strong></div></td><td><span class="badge badge-main">Mainboard</span></td><td>Aug 10</td><td>Aug 12</td><td>&#8377;829&ndash;871</td><td>&#8377;1,250 Cr</td><td>17</td><td class="text-green">&#8377;120</td><td><span class="badge badge-open">Open</span></td><td><a href="ipo-details.html" class="text-blue">View &rarr;</a></td></tr>
        <tr><td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#10B981,#059669);">SC</div><strong>Saraswati Cables</strong></div></td><td><span class="badge badge-sme">SME</span></td><td>Aug 9</td><td>Aug 13</td><td>&#8377;90&ndash;95</td><td>&#8377;42 Cr</td><td>1600</td><td class="text-green">&#8377;45</td><td><span class="badge badge-open">Open</span></td><td><a href="ipo-details.html" class="text-blue">View &rarr;</a></td></tr>
      </tbody></table></div>
    </div>
    <div id="tab-upcoming" class="tab-pane">
      <div class="table-container"><table><thead><tr><th>Company</th><th>Type</th><th>Expected Open</th><th>Expected Close</th><th>Expected Price</th><th>Sector</th><th>Status</th></tr></thead>
      <tbody>
        <tr><td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#EF4444,#DC2626);">KR</div><strong>Kross Ltd</strong></div></td><td><span class="badge badge-main">Mainboard</span></td><td>Sep 9</td><td>Sep 11</td><td>&#8377;228&ndash;240</td><td>Auto Components</td><td><span class="badge" style="background:#FEF3C7;color:#92400E;">Upcoming</span></td></tr>
        <tr><td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#06B6D4,#0891B2);">AT</div><strong>Aeron Technik</strong></div></td><td><span class="badge badge-sme">SME</span></td><td>Sep 15</td><td>Sep 17</td><td>&#8377;115&ndash;121</td><td>Engineering</td><td><span class="badge" style="background:#FEF3C7;color:#92400E;">Upcoming</span></td></tr>
        <tr><td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#8B5CF6,#7C3AED);">MB</div><strong>Macobs Tech</strong></div></td><td><span class="badge badge-sme">SME</span></td><td>Aug 20</td><td>Aug 22</td><td>&#8377;145&ndash;153</td><td>Technology</td><td><span class="badge" style="background:#FEF3C7;color:#92400E;">Upcoming</span></td></tr>
      </tbody></table></div>
    </div>
    <div id="tab-closed" class="tab-pane">
      <div class="table-container"><table><thead><tr><th>Company</th><th>Type</th><th>Open</th><th>Close</th><th>Price</th><th>Issue Size</th><th>Subscription</th><th>GMP</th></tr></thead>
      <tbody>
        <tr><td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#F59E0B,#D97706);">FL</div><strong>FirstCry Logistics</strong></div></td><td><span class="badge badge-main">Mainboard</span></td><td>Aug 6</td><td>Aug 8</td><td>&#8377;465</td><td>&#8377;4,193 Cr</td><td class="text-green">18.26x</td><td class="text-green">&#8377;85</td></tr>
      </tbody></table></div>
    </div>
    <div id="tab-listed" class="tab-pane">
      <div class="table-container"><table><thead><tr><th>Company</th><th>Issue Price</th><th>Listing Price</th><th>Listing Gain</th><th>Current Price</th><th>Current Return</th></tr></thead>
      <tbody>
        <tr><td><strong>Ola Electric</strong></td><td>&#8377;76</td><td>&#8377;84</td><td class="text-green">+10.5%</td><td>&#8377;91</td><td class="text-green">+19.7%</td></tr>
        <tr><td><strong>Patel Engineering</strong></td><td>&#8377;171</td><td>&#8377;159</td><td class="text-red">-7.0%</td><td>&#8377;148</td><td class="text-red">-13.5%</td></tr>
        <tr><td><strong>Vraj Iron</strong></td><td>&#8377;207</td><td>&#8377;344</td><td class="text-green">+66.2%</td><td>&#8377;387</td><td class="text-green">+87.0%</td></tr>
      </tbody></table></div>
    </div>
  </div>
  $(Ad-LargeBanner "ipo-mid-large-ad")
  <div class="pagination">
    <button>&laquo;</button><button class="active">1</button><button>2</button><button>3</button><button>4</button><button>&raquo;</button>
  </div>
  $(Ad-LargeBanner "ipo-bottom-large-ad")
</div>
"@
    }

    # ============================================================
    # MAINBOARD IPO
    # ============================================================
    elseif ($page -match "ipo/mainboard") {
        $titleDisplay = "Mainboard IPOs"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}ipo/index.html">IPO</a><span class="sep">/</span><span class="current">Mainboard</span></div>
  <h1 class="page-hero-title">Mainboard IPOs 2026</h1>
  <p class="page-hero-desc">All NSE and BSE mainboard IPO listings &mdash; current, upcoming, and recently listed.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="stat-cards">
    <div class="stat-card accent"><div class="stat-label">Total Mainboard</div><div class="stat-value">82</div><div class="stat-sub">2026</div></div>

    <div class="stat-card positive"><div class="stat-label">Avg Listing Gain</div><div class="stat-value">18.7%</div><div class="stat-sub">2026</div></div>

    <div class="stat-card positive"><div class="stat-label">Highest Gain</div><div class="stat-value">66.2%</div><div class="stat-sub">Vraj Iron</div></div>

    <div class="stat-card negative"><div class="stat-label">Worst Loss</div><div class="stat-value">-13.5%</div><div class="stat-sub">Patel Engg</div></div>

  </div>
  
  $(Ad-Leaderboard "ipomainboard-top-ad")
<div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div class="page-section-title">Mainboard IPO Table</div>
      <div class="filter-bar">
        <input type="text" placeholder="Search company...">
        <select><option>All Status</option><option>Open</option><option>Upcoming</option><option>Listed</option></select>
        <select><option>All Years</option><option>2026</option><option>2025</option></select>
        <button class="btn-filter">Filter</button>
      </div>
      <div class="table-container">
        <table><thead><tr><th>Company</th><th>Price Band</th><th>Issue Size</th><th>Open</th><th>Close</th><th>Listing</th><th>GMP</th><th>Status</th></tr></thead>
        <tbody>
          <tr><td><strong>Dhoot Transmission</strong></td><td>&#8377;829&ndash;871</td><td>&#8377;1,250 Cr</td><td>Aug 10</td><td>Aug 12</td><td>Aug 15</td><td class="text-green">&#8377;120</td><td><span class="badge badge-open">Open</span></td></tr>
          <tr><td><strong>FirstCry Logistics</strong></td><td>&#8377;440&ndash;465</td><td>&#8377;4,193 Cr</td><td>Aug 6</td><td>Aug 8</td><td>Aug 13</td><td class="text-green">&#8377;85</td><td><span class="badge badge-closed">Closed</span></td></tr>
          <tr><td><strong>Kross Ltd</strong></td><td>&#8377;228&ndash;240</td><td>&#8377;250 Cr</td><td>Sep 9</td><td>Sep 11</td><td>Sep 16</td><td>&#8212;</td><td><span class="badge" style="background:#FEF3C7;color:#92400E;">Upcoming</span></td></tr>
          <tr><td><strong>Ola Electric</strong></td><td>&#8377;72&ndash;76</td><td>&#8377;6,146 Cr</td><td>Jul 25</td><td>Jul 28</td><td>Aug 2</td><td class="text-green">&#8377;8</td><td><span class="badge" style="background:#DBEAFE;color:#1D4ED8;">Listed</span></td></tr>
          <tr><td><strong>Vraj Iron</strong></td><td>&#8377;195&ndash;207</td><td>&#8377;171 Cr</td><td>Jun 26</td><td>Jun 28</td><td>Jul 3</td><td class="text-green">&#8377;137</td><td><span class="badge" style="background:#DBEAFE;color:#1D4ED8;">Listed</span></td></tr>
          <tr><td><strong>Patel Engineering</strong></td><td>&#8377;171</td><td>&#8377;1,170 Cr</td><td>Jul 8</td><td>Jul 10</td><td>Jul 15</td><td class="text-red">-&#8377;12</td><td><span class="badge" style="background:#DBEAFE;color:#1D4ED8;">Listed</span></td></tr>
        </tbody></table>
      </div>
      <div class="page-section-title" style="margin-top:24px;">Performance Summary</div>
      <div class="table-container">
        <table><thead><tr><th>Metric</th><th>Value</th><th>Company</th></tr></thead>
        <tbody>
          <tr><td>Best Listing Gain</td><td class="text-green">66.2%</td><td>Vraj Iron</td></tr>
          <tr><td>Worst Listing Loss</td><td class="text-red">-7.0%</td><td>Patel Engineering</td></tr>
          <tr><td>Average Listing Gain</td><td class="text-green">18.7%</td><td>&mdash;</td></tr>
          <tr><td>Total Issues (2026)</td><td>82</td><td>&mdash;</td></tr>
        </tbody></table>
      </div>
    </div>

      $(Ad-Leaderboard "ipomainboard-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>

</div>
"@
    }

    # ============================================================
    # SME IPO
    # ============================================================
    elseif ($page -match "ipo/sme") {
        $titleDisplay = "SME IPOs"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}ipo/index.html">IPO</a><span class="sep">/</span><span class="current">SME IPO</span></div>
  <h1 class="page-hero-title">SME IPOs 2026</h1>
  <p class="page-hero-desc">BSE SME and NSE Emerge listings  -  current, upcoming, and recently listed small and medium enterprise IPOs.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="stat-cards">
    <div class="stat-card accent"><div class="stat-label">Total SME 2026</div><div class="stat-value">65</div><div class="stat-sub">BSE SME + NSE Emerge</div></div>
    <div class="stat-card positive"><div class="stat-label">Avg Listing Gain</div><div class="stat-value">38.4%</div><div class="stat-sub">2026</div></div>
    <div class="stat-card positive"><div class="stat-label">Highest GMP</div><div class="stat-value">&#8377;45</div><div class="stat-sub">Saraswati Cables</div></div>
    <div class="stat-card"><div class="stat-label">Open Now</div><div class="stat-value">1</div><div class="stat-sub">SME IPO</div></div>
  </div>
  <div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div class="tab-container">
        <div class="tab-bar">
          <button class="tab-btn active" data-tab="sme-current">Current</button>
          <button class="tab-btn" data-tab="sme-upcoming">Upcoming</button>
          <button class="tab-btn" data-tab="sme-closed">Closed</button>
          <button class="tab-btn" data-tab="sme-listed">Listed</button>
          <button class="tab-btn" data-tab="sme-gmp">GMP</button>
        </div>
        <div id="sme-current" class="tab-pane active">
          <div class="table-container"><table><thead><tr><th>Company</th><th>Exchange</th><th>Price</th><th>Issue Size</th><th>Lot</th><th>Open</th><th>Close</th><th>GMP</th><th>Status</th></tr></thead>
          <tbody>
            <tr><td><strong>Saraswati Cables</strong></td><td>BSE SME</td><td>&#8377;90&ndash;95</td><td>&#8377;42 Cr</td><td>1600</td><td>Aug 9</td><td>Aug 13</td><td class="text-green">&#8377;45 (47.4%)</td><td><span class="badge badge-open">Open</span></td></tr>
          </tbody></table></div>
        </div>
        <div id="sme-upcoming" class="tab-pane">
          <div class="table-container"><table><thead><tr><th>Company</th><th>Exchange</th><th>Expected Price</th><th>Expected Size</th><th>Lot</th><th>Expected Open</th></tr></thead>
          <tbody>
            <tr><td><strong>Aeron Technik</strong></td><td>NSE Emerge</td><td>&#8377;115&ndash;121</td><td>&#8377;28 Cr</td><td>1200</td><td>Sep 15</td></tr>
            <tr><td><strong>Macobs Tech</strong></td><td>NSE Emerge</td><td>&#8377;145&ndash;153</td><td>&#8377;18 Cr</td><td>800</td><td>Aug 20</td></tr>
          </tbody></table></div>
        </div>
        <div id="sme-closed" class="tab-pane">
          <div class="table-container"><table><thead><tr><th>Company</th><th>Exchange</th><th>Price</th><th>Issue Size</th><th>Subscription</th><th>Listing Date</th></tr></thead>
          <tbody>
            <tr><td><strong>Synergy Green</strong></td><td>BSE SME</td><td>&#8377;72</td><td>&#8377;12 Cr</td><td class="text-green">84.2x</td><td>Aug 5</td></tr>
          </tbody></table></div>
        </div>
        <div id="sme-listed" class="tab-pane">
          <div class="table-container"><table><thead><tr><th>Company</th><th>Issue Price</th><th>Listing Price</th><th>Listing Gain</th><th>Current Price</th></tr></thead>
          <tbody>
            <tr><td><strong>Vraj Iron</strong></td><td>&#8377;207</td><td>&#8377;344</td><td class="text-green">+66.2%</td><td>&#8377;387</td></tr>
            <tr><td><strong>Synergy Green</strong></td><td>&#8377;72</td><td>&#8377;138</td><td class="text-green">+91.7%</td><td>&#8377;162</td></tr>
          </tbody></table></div>
        </div>
        <div id="sme-gmp" class="tab-pane">
          <div class="table-container"><table><thead><tr><th>Company</th><th>Exchange</th><th>IPO Price</th><th>GMP</th><th>Est. Listing</th><th>GMP %</th><th>Updated</th></tr></thead>
          <tbody>
            <tr><td><strong>Saraswati Cables</strong></td><td>BSE SME</td><td>&#8377;95</td><td class="text-green">&#8377;45</td><td>&#8377;140</td><td class="text-green">47.4%</td><td>Today</td></tr>
            <tr><td><strong>Aeron Technik</strong></td><td>NSE Emerge</td><td>&#8377;121</td><td class="text-green">&#8377;18</td><td>&#8377;139</td><td class="text-green">14.9%</td><td>Today</td></tr>
          </tbody></table></div>
        </div>
      </div>
      $(Ad-LargeBanner "sme-large-ad")
    </div>

      $(Ad-Leaderboard "iposme-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>
</div>
"@
    }

    # ============================================================
    # OPEN IPOs
    # ============================================================
    elseif ($page -match "ipo/open") {
        $titleDisplay = "Open IPOs"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}ipo/index.html">IPO</a><span class="sep">/</span><span class="current">Open IPOs</span></div>
  <h1 class="page-hero-title">Open IPOs</h1>
  <p class="page-hero-desc">IPOs currently open for subscription. Apply before closing date.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  
  $(Ad-Leaderboard "ipoopen-top-ad")
<div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div class="page-section-title">Currently Open for Subscription</div>
      <div class="ipo-card-grid">
        <div class="ipo-detail-card">
          <div class="card-header"><div class="card-logo">DT</div><div><div class="card-company">Dhoot Transmission</div><div class="card-type"><span class="badge badge-main">Mainboard</span> &bull; BSE &amp; NSE</div></div>
</div>
          <div class="card-body">
            <div class="card-grid">
              <div class="card-field"><label>Price Band</label><span>&#8377;829&ndash;871</span></div>
              <div class="card-field"><label>Issue Size</label><span>&#8377;1,250 Cr</span></div>
              <div class="card-field"><label>Lot Size</label><span>17 Shares</span></div>
              <div class="card-field"><label>Min Investment</label><span>&#8377;14,807</span></div>
              <div class="card-field"><label>Opens</label><span>Aug 10, 2026</span></div>
              <div class="card-field"><label>Closes</label><span>Aug 12, 2026</span></div>
            </div>
            <div class="card-gmp"><span class="gmp-label">GMP (Grey Market)</span><span class="gmp-value">&#8377;120 (13.8%)</span></div>
          </div>
          <div class="card-footer"><a href="ipo-details.html">VIEW IPO DETAILS</a></div>
        </div>
        <div class="ipo-detail-card">
          <div class="card-header"><div class="card-logo" style="background:linear-gradient(135deg,#10B981,#059669);">SC</div><div><div class="card-company">Saraswati Cables</div><div class="card-type"><span class="badge badge-sme">SME</span> &bull; BSE SME</div></div>
</div>
          <div class="card-body">
            <div class="card-grid">
              <div class="card-field"><label>Price Band</label><span>&#8377;90&ndash;95</span></div>
              <div class="card-field"><label>Issue Size</label><span>&#8377;42 Cr</span></div>
              <div class="card-field"><label>Lot Size</label><span>1,600 Shares</span></div>
              <div class="card-field"><label>Min Investment</label><span>&#8377;1,52,000</span></div>
              <div class="card-field"><label>Opens</label><span>Aug 9, 2026</span></div>
              <div class="card-field"><label>Closes</label><span>Aug 13, 2026</span></div>
            </div>
            <div class="card-gmp"><span class="gmp-label">GMP (Grey Market)</span><span class="gmp-value">&#8377;45 (47.4%)</span></div>
          </div>
          <div class="card-footer"><a href="ipo-details.html">VIEW IPO DETAILS</a></div>
        </div>
      </div>
      <div class="page-section-title" style="margin-top:24px;">Open IPO Summary Table</div>
      <div class="table-container">
        <table><thead><tr><th>Company</th><th>Type</th><th>Price Band</th><th>Issue Size</th><th>Lot</th><th>Min Inv.</th><th>Close Date</th><th>GMP</th><th>Action</th></tr></thead>
        <tbody>
          <tr><td><strong>Dhoot Transmission</strong></td><td><span class="badge badge-main">MB</span></td><td>&#8377;829&ndash;871</td><td>&#8377;1,250 Cr</td><td>17</td><td>&#8377;14,807</td><td>Aug 12</td><td class="text-green">+13.8%</td><td><a href="ipo-details.html" class="text-blue">View</a></td></tr>
          <tr><td><strong>Saraswati Cables</strong></td><td><span class="badge badge-sme">SME</span></td><td>&#8377;90&ndash;95</td><td>&#8377;42 Cr</td><td>1600</td><td>&#8377;1,52,000</td><td>Aug 13</td><td class="text-green">+47.4%</td><td><a href="ipo-details.html" class="text-blue">View</a></td></tr>
        </tbody></table>
      </div>
      <div class="faq-section"><h2>IPO Application FAQs</h2><div class="faq-list">
        <div class="faq-item"><button class="faq-question">How do I apply for an IPO? <span class="faq-icon">+</span></button><div class="faq-answer"><p>You can apply through your demat account broker, ASBA (Application Supported by Blocked Amount) via net banking, or the UPI-based mechanism directly via your broker or bank app.</p></div></div>

        <div class="faq-item"><button class="faq-question">What is the minimum investment for a retail investor? <span class="faq-icon">+</span></button><div class="faq-answer"><p>Retail investors must apply for at least 1 lot. The minimum investment is the IPO price &times; lot size. For Dhoot Transmission, this is &#8377;871 &times; 17 = &#8377;14,807.</p></div></div>

        <div class="faq-item"><button class="faq-question">What is the cut-off price option? <span class="faq-icon">+</span></button><div class="faq-answer"><p>When you select "Cut-off Price", your application is for shares at whatever the final issue price is within the band. This is recommended for retail investors.</p></div></div>

      </div></div>

    </div>

      $(Ad-Leaderboard "ipoopen-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>

</div>
"@
    }

    # ============================================================
    # UPCOMING IPOs
    # ============================================================
    elseif ($page -match "ipo/upcoming") {
        $titleDisplay = "Upcoming IPOs"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}ipo/index.html">IPO</a><span class="sep">/</span><span class="current">Upcoming IPOs</span></div>
  <h1 class="page-hero-title">Upcoming IPOs 2026</h1>
  <p class="page-hero-desc">Expected IPO listings in the next 30&ndash;60 days. Data is indicative and subject to SEBI approval.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div class="tab-container">
        <div class="tab-bar">
          <button class="tab-btn active" data-tab="up-mainboard">Upcoming Mainboard</button>
          <button class="tab-btn" data-tab="up-sme">Upcoming SME</button>
        </div>
        <div id="up-mainboard" class="tab-pane active">
          <div class="ipo-card-grid">
            <div class="ipo-detail-card">
              <div class="card-header"><div class="card-logo" style="background:linear-gradient(135deg,#EF4444,#DC2626);">KR</div><div><div class="card-company">Kross Ltd</div><div class="card-type"><span class="badge badge-main">Mainboard</span> &bull; NSE &amp; BSE</div></div>
</div>
              <div class="card-body">
                <div class="card-grid">
                  <div class="card-field"><label>Expected Price</label><span>&#8377;228&ndash;240</span></div>
                  <div class="card-field"><label>Expected Size</label><span>&#8377;250 Cr</span></div>
                  <div class="card-field"><label>Sector</label><span>Auto Components</span></div>
                  <div class="card-field"><label>Expected Open</label><span>Sep 9, 2026</span></div>
                </div>
                <div style="background:#FEF3C7;border-radius:6px;padding:8px 12px;margin-bottom:12px;font-size:12px;font-weight:600;color:#92400E;">Expected: All data subject to SEBI approval</div>
              </div>
              <div class="card-footer"><a href="ipo-details.html">VIEW DETAILS</a></div>
            </div>
            <div class="ipo-detail-card">
              <div class="card-header"><div class="card-logo" style="background:linear-gradient(135deg,#06B6D4,#0891B2);">TW</div><div><div class="card-company">TechWave Solutions</div><div class="card-type"><span class="badge badge-main">Mainboard</span> &bull; NSE &amp; BSE</div></div>
</div>
              <div class="card-body">
                <div class="card-grid">
                  <div class="card-field"><label>Expected Price</label><span>&#8377;375&ndash;395</span></div>
                  <div class="card-field"><label>Expected Size</label><span>&#8377;820 Cr</span></div>
                  <div class="card-field"><label>Sector</label><span>IT Services</span></div>
                  <div class="card-field"><label>Expected Open</label><span>Oct 2026</span></div>
                </div>
                <div style="background:#FEF3C7;border-radius:6px;padding:8px 12px;margin-bottom:12px;font-size:12px;font-weight:600;color:#92400E;">Expected: All data subject to SEBI approval</div>
              </div>
              <div class="card-footer"><a href="ipo-details.html">VIEW DETAILS</a></div>
            </div>
          </div>
          <div class="table-container">
            <table><thead><tr><th>Company</th><th>Sector</th><th>Expected Price</th><th>Expected Size</th><th>Expected Open</th><th>Status</th></tr></thead>
            <tbody>
              <tr><td><strong>Kross Ltd</strong></td><td>Auto Components</td><td>&#8377;228&ndash;240</td><td>&#8377;250 Cr</td><td>Sep 9</td><td><span class="badge" style="background:#FEF3C7;color:#92400E;">Expected</span></td></tr>
              <tr><td><strong>TechWave Solutions</strong></td><td>IT Services</td><td>&#8377;375&ndash;395</td><td>&#8377;820 Cr</td><td>Oct 2026</td><td><span class="badge" style="background:#FEF3C7;color:#92400E;">Expected</span></td></tr>
              <tr><td><strong>Greenleaf Pharma</strong></td><td>Pharmaceuticals</td><td>&#8377;480&ndash;510</td><td>&#8377;1,100 Cr</td><td>Nov 2026</td><td><span class="badge" style="background:#FEF3C7;color:#92400E;">DRHP Filed</span></td></tr>
            </tbody></table>
          </div>
        </div>
        <div id="up-sme" class="tab-pane">
          <div class="table-container">
            <table><thead><tr><th>Company</th><th>Exchange</th><th>Expected Price</th><th>Expected Size</th><th>Expected Open</th><th>Status</th></tr></thead>
            <tbody>
              <tr><td><strong>Aeron Technik</strong></td><td>NSE Emerge</td><td>&#8377;115&ndash;121</td><td>&#8377;28 Cr</td><td>Sep 15</td><td><span class="badge" style="background:#FEF3C7;color:#92400E;">Expected</span></td></tr>
              <tr><td><strong>Macobs Tech</strong></td><td>NSE Emerge</td><td>&#8377;145&ndash;153</td><td>&#8377;18 Cr</td><td>Aug 20</td><td><span class="badge" style="background:#FEF3C7;color:#92400E;">Expected</span></td></tr>
              <tr><td><strong>Lakshmi Forge</strong></td><td>BSE SME</td><td>&#8377;62&ndash;65</td><td>&#8377;9 Cr</td><td>Sep 22</td><td><span class="badge" style="background:#FEF3C7;color:#92400E;">Filed</span></td></tr>
            </tbody></table>
          </div>
        </div>
      </div>
      $(Ad-LargeBanner "up-large-ad")
    </div>

      $(Ad-Leaderboard "ipoupcoming-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>
</div>
"@
    }

    # ============================================================
    # CLOSED IPOs
    # ============================================================
    elseif ($page -match "ipo/closed") {
        $titleDisplay = "Closed IPOs"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}ipo/index.html">IPO</a><span class="sep">/</span><span class="current">Closed IPOs</span></div>
  <h1 class="page-hero-title">Closed IPOs</h1>
  <p class="page-hero-desc">Recently closed IPOs pending allotment and listing.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  
  $(Ad-Leaderboard "ipoclosed-top-ad")
<div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div class="filter-bar">
        <input type="text" placeholder="Search company...">
        <select><option>All Types</option><option>Mainboard</option><option>SME</option></select>
        <select><option>All Years</option><option>2026</option><option>2025</option></select>
        <select><option>Sector</option><option>Technology</option><option>Finance</option><option>Healthcare</option></select>
        <button class="btn-filter">Filter</button>
      </div>
      <div class="table-container">
        <table><thead><tr><th>Company</th><th>Type</th><th>Price</th><th>Issue Size</th><th>Open</th><th>Close</th><th>Subscription</th><th>GMP</th><th>Listing</th></tr></thead>
        <tbody>
          <tr><td><strong>FirstCry Logistics</strong></td><td><span class="badge badge-main">MB</span></td><td>&#8377;465</td><td>&#8377;4,193 Cr</td><td>Aug 6</td><td>Aug 8</td><td class="text-green">18.26x</td><td class="text-green">&#8377;85</td><td>Aug 13</td></tr>
          <tr><td><strong>Vraj Iron</strong></td><td><span class="badge badge-sme">SME</span></td><td>&#8377;207</td><td>&#8377;171 Cr</td><td>Jun 26</td><td>Jun 28</td><td class="text-green">106.5x</td><td class="text-green">&#8377;137</td><td>Jul 3</td></tr>
          <tr><td><strong>Ola Electric</strong></td><td><span class="badge badge-main">MB</span></td><td>&#8377;76</td><td>&#8377;6,146 Cr</td><td>Jul 25</td><td>Jul 28</td><td class="text-green">4.27x</td><td class="text-green">&#8377;8</td><td>Aug 2</td></tr>
          <tr><td><strong>Patel Engineering</strong></td><td><span class="badge badge-main">MB</span></td><td>&#8377;171</td><td>&#8377;1,170 Cr</td><td>Jul 8</td><td>Jul 10</td><td class="text-green">2.14x</td><td class="text-red">-&#8377;12</td><td>Jul 15</td></tr>
          <tr><td><strong>Synergy Green</strong></td><td><span class="badge badge-sme">SME</span></td><td>&#8377;72</td><td>&#8377;12 Cr</td><td>Jul 18</td><td>Jul 22</td><td class="text-green">84.2x</td><td class="text-green">&#8377;66</td><td>Jul 25</td></tr>
        </tbody></table>
      </div>
    </div>

      $(Ad-Leaderboard "ipoclosed-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>

</div>
"@
    }

    # ============================================================
    # LISTED IPOs
    # ============================================================
    elseif ($page -match "ipo/listed") {
        $titleDisplay = "Listed IPOs"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}ipo/index.html">IPO</a><span class="sep">/</span><span class="current">Listed IPOs</span></div>
  <h1 class="page-hero-title">Listed IPOs  -  Listing Performance</h1>
  <p class="page-hero-desc">IPO listing gains, current returns, and performance tracker for all listed IPOs.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="stat-cards">
    <div class="stat-card positive"><div class="stat-label">Best Listing Gain</div><div class="stat-value">+91.7%</div><div class="stat-sub">Synergy Green</div></div>

    <div class="stat-card negative"><div class="stat-label">Worst Listing</div><div class="stat-value">-7.0%</div><div class="stat-sub">Patel Engg</div></div>

    <div class="stat-card positive"><div class="stat-label">Avg Listing Gain</div><div class="stat-value">+28.3%</div><div class="stat-sub">2026</div></div>

    <div class="stat-card accent"><div class="stat-label">Total Listed</div><div class="stat-value">134</div><div class="stat-sub">This year</div></div>

  </div>
  <div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div class="page-section-title">Listing Performance Table</div>
      <div class="table-container">
        <table><thead><tr><th>Company</th><th>Issue Price</th><th>Listing Price</th><th>Listing Gain %</th><th>Current Price</th><th>Current Return %</th><th>52W High</th><th>52W Low</th></tr></thead>
        <tbody>
          <tr><td><strong>Synergy Green</strong></td><td>&#8377;72</td><td>&#8377;138</td><td class="text-green">+91.7%</td><td>&#8377;162</td><td class="text-green">+125.0%</td><td>&#8377;170</td><td>&#8377;68</td></tr>
          <tr><td><strong>Vraj Iron</strong></td><td>&#8377;207</td><td>&#8377;344</td><td class="text-green">+66.2%</td><td>&#8377;387</td><td class="text-green">+87.0%</td><td>&#8377;412</td><td>&#8377;182</td></tr>
          <tr><td><strong>FirstCry Logistics</strong></td><td>&#8377;465</td><td>&#8377;548</td><td class="text-green">+17.8%</td><td>&#8377;521</td><td class="text-green">+12.0%</td><td>&#8377;570</td><td>&#8377;380</td></tr>
          <tr><td><strong>Ola Electric</strong></td><td>&#8377;76</td><td>&#8377;84</td><td class="text-green">+10.5%</td><td>&#8377;91</td><td class="text-green">+19.7%</td><td>&#8377;102</td><td>&#8377;59</td></tr>
          <tr><td><strong>Patel Engineering</strong></td><td>&#8377;171</td><td>&#8377;159</td><td class="text-red">-7.0%</td><td>&#8377;148</td><td class="text-red">-13.5%</td><td>&#8377;188</td><td>&#8377;130</td></tr>
        </tbody></table>
      </div>
      <div class="page-section-title" style="margin-top:24px;">Performance Chart</div>
      <div class="chart-placeholder" style="height:300px;"><div class="chart-icon">&#128202;</div><div class="chart-label">Listing Gain vs Current Return Chart</div><div class="chart-sub">Live chart will appear here after API integration</div></div>

    </div>

      $(Ad-Leaderboard "ipolisted-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>

</div>
"@
    }

    # ============================================================
    # IPO PERFORMANCE
    # ============================================================
    elseif ($page -match "ipo/performance") {
        $titleDisplay = "IPO Performance"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}ipo/index.html">IPO</a><span class="sep">/</span><span class="current">Performance</span></div>
  <h1 class="page-hero-title">IPO Performance Tracker</h1>
  <p class="page-hero-desc">Track listing gains, current returns, and long-term performance of all listed IPOs.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="stat-cards">
    <div class="stat-card positive"><div class="stat-label">Best Listing Gain</div><div class="stat-value">+91.7%</div><div class="stat-sub">Synergy Green</div></div>

    <div class="stat-card negative"><div class="stat-label">Worst Listing</div><div class="stat-value">-7.0%</div><div class="stat-sub">Patel Engg</div></div>

    <div class="stat-card positive"><div class="stat-label">Avg Listing 2026</div><div class="stat-value">+28.3%</div></div>

    <div class="stat-card accent"><div class="stat-label">Best Current Return</div><div class="stat-value">+125%</div><div class="stat-sub">Synergy Green</div></div>

  </div>
  
  $(Ad-Leaderboard "ipoperformance-top-ad")
<div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div class="filter-bar">
        <select><option>All Years</option><option>2026</option><option>2025</option></select>
        <select><option>All Types</option><option>Mainboard</option><option>SME</option></select>
        <select><option>Sector</option><option>Technology</option><option>Finance</option></select>
        <button class="btn-filter">Filter</button>
      </div>
      <div class="table-container">
        <table><thead><tr><th>Company</th><th>Issue Price</th><th>Listing Price</th><th>Listing Gain</th><th>Current Price</th><th>Current Return</th><th>52W High</th><th>52W Low</th></tr></thead>
        <tbody>
          <tr><td><strong>Synergy Green</strong></td><td>&#8377;72</td><td>&#8377;138</td><td class="text-green">+91.7%</td><td>&#8377;162</td><td class="text-green">+125.0%</td><td>&#8377;170</td><td>&#8377;68</td></tr>
          <tr><td><strong>Vraj Iron</strong></td><td>&#8377;207</td><td>&#8377;344</td><td class="text-green">+66.2%</td><td>&#8377;387</td><td class="text-green">+87.0%</td><td>&#8377;412</td><td>&#8377;182</td></tr>
          <tr><td><strong>Ola Electric</strong></td><td>&#8377;76</td><td>&#8377;84</td><td class="text-green">+10.5%</td><td>&#8377;91</td><td class="text-green">+19.7%</td><td>&#8377;102</td><td>&#8377;59</td></tr>
          <tr><td><strong>Patel Engineering</strong></td><td>&#8377;171</td><td>&#8377;159</td><td class="text-red">-7.0%</td><td>&#8377;148</td><td class="text-red">-13.5%</td><td>&#8377;188</td><td>&#8377;130</td></tr>
        </tbody></table>
      </div>
      <div class="chart-placeholder" style="height:280px;margin-top:24px;"><div class="chart-icon">&#128202;</div><div class="chart-label">Yearly IPO Performance Chart</div></div>

    </div>

      $(Ad-Leaderboard "ipoperformance-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>
</div>
"@
    }

    # ============================================================
    # IPO REVIEWS
    # ============================================================
    elseif ($page -match "ipo/reviews") {
        $titleDisplay = "IPO Reviews"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}ipo/index.html">IPO</a><span class="sep">/</span><span class="current">Reviews</span></div>
  <h1 class="page-hero-title">IPO Reviews &amp; Recommendations</h1>
  <p class="page-hero-desc">In-depth IPO reviews by our research team. Subscribe/Avoid ratings with full analysis.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div class="page-section-title">Latest IPO Reviews</div>
      <div style="display:flex;flex-direction:column;gap:16px;">
        <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:24px;">
          <div style="display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:12px;margin-bottom:16px;">
            <div>
              <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;"><span class="badge badge-main">Mainboard</span><span style="font-size:12px;color:var(--text-muted);">Aug 10, 2026</span></div>
              <h2 style="font-size:18px;font-weight:800;color:var(--primary-color);">Dhoot Transmission IPO Review</h2>
              <p style="font-size:14px;color:var(--text-muted);margin-top:4px;">Manufacturer of automotive transmission components with pan-India presence.</p>
            </div>
            <div style="text-align:center;">
              <div style="background:#DCFCE7;border:2px solid #10B981;border-radius:12px;padding:12px 20px;">
                <div style="font-size:11px;font-weight:700;color:#059669;text-transform:uppercase;">Rating</div>
                <div style="font-size:24px;font-weight:800;color:#059669;">SUBSCRIBE</div>
                <div style="font-size:11px;color:#059669;">4.2 / 5.0</div>
              </div>
            </div>
          </div>
          <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:12px;margin-bottom:16px;">
            <div style="background:#F8FAFC;padding:12px;border-radius:8px;text-align:center;"><div style="font-size:10px;font-weight:700;color:var(--text-muted);text-transform:uppercase;">Price Band</div><div style="font-weight:700;margin-top:4px;">&#8377;829&ndash;871</div></div>
            <div style="background:#F8FAFC;padding:12px;border-radius:8px;text-align:center;"><div style="font-size:10px;font-weight:700;color:var(--text-muted);text-transform:uppercase;">Issue Size</div><div style="font-weight:700;margin-top:4px;">&#8377;1,250 Cr</div></div>
            <div style="background:#F8FAFC;padding:12px;border-radius:8px;text-align:center;"><div style="font-size:10px;font-weight:700;color:var(--text-muted);text-transform:uppercase;">GMP</div><div style="font-weight:700;color:var(--success-color);margin-top:4px;">&#8377;120</div></div>
            <div style="background:#F8FAFC;padding:12px;border-radius:8px;text-align:center;"><div style="font-size:10px;font-weight:700;color:var(--text-muted);text-transform:uppercase;">P/E</div><div style="font-weight:700;margin-top:4px;">28.4x</div></div>
          </div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px;">
            <div><div style="font-size:12px;font-weight:700;color:var(--success-color);margin-bottom:8px;">&#10003; Strengths</div><ul style="font-size:13px;color:var(--text-muted);padding-left:16px;line-height:2;"><li>Strong revenue growth (32% CAGR)</li><li>Established OEM customer base</li><li>Healthy EBITDA margins (18%)</li></ul></div>
            <div><div style="font-size:12px;font-weight:700;color:var(--danger-color);margin-bottom:8px;">&#10007; Risks</div><ul style="font-size:13px;color:var(--text-muted);padding-left:16px;line-height:2;"><li>Cyclical auto sector exposure</li><li>High customer concentration</li><li>Pending litigation matters</li></ul></div>
          </div>
          <p style="font-size:13px;color:var(--text-muted);line-height:1.7;">Our View: Dhoot Transmission is a quality auto-ancillary play at reasonable valuations. The strong GMP of &#8377;120 suggests positive market sentiment. We recommend subscribing for both listing gains and medium-term returns.</p>
        </div>
      </div>
      $(Ad-LargeBanner "rev-large-ad")
    </div>

      $(Ad-Leaderboard "iporeviews-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>
</div>
"@
    }

    # ============================================================
    # IPO RATINGS
    # ============================================================
    elseif ($page -match "ipo/ratings") {
        $titleDisplay = "IPO Ratings"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}ipo/index.html">IPO</a><span class="sep">/</span><span class="current">Ratings</span></div>
  <h1 class="page-hero-title">IPO Ratings</h1>
  <p class="page-hero-desc">IPOSETU star ratings for IPOs  -  business quality, financials, valuation, and risk assessment.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="filter-bar">
    <select><option>All Ratings</option><option>5 Stars</option><option>4 Stars</option><option>3 Stars</option></select>
    <select><option>All Risk</option><option>Low</option><option>Medium</option><option>High</option></select>
    <select><option>All Types</option><option>Mainboard</option><option>SME</option></select>
    <button class="btn-filter">Filter</button>
  </div>
  <div class="table-container">
    <table><thead><tr><th>Company</th><th>Type</th><th>Overall Rating</th><th>Business</th><th>Financial</th><th>Valuation</th><th>Risk</th><th>Recommendation</th></tr></thead>
    <tbody>
      <tr><td><strong>Dhoot Transmission</strong></td><td><span class="badge badge-main">MB</span></td><td>&#11088;&#11088;&#11088;&#11088; 4.2</td><td>&#11088;&#11088;&#11088;&#11088;</td><td>&#11088;&#11088;&#11088;&#11088;</td><td>&#11088;&#11088;&#11088;</td><td><span style="color:var(--warning-color);">Medium</span></td><td><span style="color:var(--success-color);font-weight:700;">Subscribe</span></td></tr>
      <tr><td><strong>Saraswati Cables</strong></td><td><span class="badge badge-sme">SME</span></td><td>&#11088;&#11088;&#11088; 3.5</td><td>&#11088;&#11088;&#11088;</td><td>&#11088;&#11088;&#11088;&#11088;</td><td>&#11088;&#11088;&#11088;</td><td><span style="color:var(--danger-color);">High</span></td><td><span style="color:var(--warning-color);font-weight:700;">Risky</span></td></tr>
      <tr><td><strong>Ola Electric</strong></td><td><span class="badge badge-main">MB</span></td><td>&#11088;&#11088;&#11088; 3.0</td><td>&#11088;&#11088;&#11088;&#11088;</td><td>&#11088;&#11088;</td><td>&#11088;&#11088;</td><td><span style="color:var(--danger-color);">High</span></td><td><span style="color:var(--text-muted);font-weight:700;">Neutral</span></td></tr>
    </tbody></table>
  </div>
</div>
"@
    }

    # ============================================================
    # IPO ANALYSIS
    # ============================================================
    elseif ($page -match "ipo/analysis") {
        $titleDisplay = "IPO Analysis"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}ipo/index.html">IPO</a><span class="sep">/</span><span class="current">Analysis</span></div>
  <h1 class="page-hero-title">IPO Analysis</h1>
  <p class="page-hero-desc">Detailed business, financial and valuation analysis for current and upcoming IPOs.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:24px;margin-bottom:24px;">
        <h2 style="font-size:20px;font-weight:800;margin-bottom:16px;">Dhoot Transmission  -  Business Analysis</h2>
        <div class="tab-container">
          <div class="tab-bar">
            <button class="tab-btn active" data-tab="an-business">Business</button>
            <button class="tab-btn" data-tab="an-financial">Financial</button>
            <button class="tab-btn" data-tab="an-valuation">Valuation</button>
            <button class="tab-btn" data-tab="an-industry">Industry</button>
            <button class="tab-btn" data-tab="an-risk">Risks</button>
          </div>
          <div id="an-business" class="tab-pane active">
            <h3 style="font-size:15px;font-weight:700;margin-bottom:10px;">Business Overview</h3>
            <p style="font-size:13px;color:var(--text-muted);line-height:1.8;margin-bottom:12px;">Dhoot Transmission Limited is a leading manufacturer of automotive transmission components including gear boxes, clutch assemblies, and drive shafts. Founded in 2003, the company has grown to serve 40+ OEM customers across India including Maruti, Tata Motors, and Mahindra.</p>
            <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:12px;">
              <div style="background:#F8FAFC;padding:12px;border-radius:8px;"><div style="font-size:11px;font-weight:700;color:var(--text-muted);">FOUNDED</div><div style="font-weight:700;margin-top:4px;">2003</div></div>

              <div style="background:#F8FAFC;padding:12px;border-radius:8px;"><div style="font-size:11px;font-weight:700;color:var(--text-muted);">EMPLOYEES</div><div style="font-weight:700;margin-top:4px;">2,400+</div></div>

              <div style="background:#F8FAFC;padding:12px;border-radius:8px;"><div style="font-size:11px;font-weight:700;color:var(--text-muted);">PLANTS</div><div style="font-weight:700;margin-top:4px;">6</div></div>

            </div>
          </div>
          <div id="an-financial" class="tab-pane">
            <div class="table-container"><table><thead><tr><th>Metric</th><th>FY2024</th><th>FY2025</th><th>FY2026E</th></tr></thead>
            <tbody>
              <tr><td>Revenue (Cr)</td><td>&#8377;842</td><td>&#8377;1,102</td><td>&#8377;1,420</td></tr>
              <tr><td>EBITDA (Cr)</td><td>&#8377;142</td><td>&#8377;198</td><td>&#8377;256</td></tr>
              <tr><td>PAT (Cr)</td><td>&#8377;68</td><td>&#8377;97</td><td>&#8377;131</td></tr>
              <tr><td>EPS (&#8377;)</td><td>&#8377;14.2</td><td>&#8377;20.3</td><td>&#8377;27.4</td></tr>
              <tr><td>ROE (%)</td><td>18.4%</td><td>22.1%</td><td>24.8%</td></tr>
            </tbody></table></div>
          </div>
          <div id="an-valuation" class="tab-pane">
            <p style="font-size:13px;color:var(--text-muted);margin-bottom:12px;">At the upper end of the price band (&#8377;871), the IPO is priced at a P/E of 31.8x FY2026E EPS. Peers like Minda Industries trade at 38x and Schaeffler India at 52x, suggesting reasonable valuation.</p>
            <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:12px;">
              <div style="background:#F8FAFC;padding:12px;border-radius:8px;"><div style="font-size:11px;font-weight:700;color:var(--text-muted);">P/E (Post-issue)</div><div style="font-weight:700;margin-top:4px;">31.8x</div></div>

              <div style="background:#F8FAFC;padding:12px;border-radius:8px;"><div style="font-size:11px;font-weight:700;color:var(--text-muted);">EV/EBITDA</div><div style="font-weight:700;margin-top:4px;">18.4x</div></div>

              <div style="background:#F8FAFC;padding:12px;border-radius:8px;"><div style="font-size:11px;font-weight:700;color:var(--text-muted);">Market Cap</div><div style="font-weight:700;margin-top:4px;">&#8377;4,170 Cr</div></div>

            </div>
          </div>
          <div id="an-industry" class="tab-pane">
            <p style="font-size:13px;color:var(--text-muted);line-height:1.8;">India's auto-ancillary industry is expected to reach USD 200 billion by 2030, growing at 8-10% CAGR. EV adoption is creating new product opportunities for transmission component manufacturers.</p>
          </div>
          <div id="an-risk" class="tab-pane">
            <ul style="font-size:13px;color:var(--text-muted);line-height:2;padding-left:20px;">
              <li>Cyclical exposure to automotive industry slowdowns</li>
              <li>Customer concentration: Top 3 customers = 48% revenue</li>
              <li>Raw material price volatility (steel, aluminium)</li>
              <li>Pending litigation &mdash; &#8377;12 Cr in disputed matters</li>
            </ul>
          </div>
        </div>
      </div>
      $(Ad-LargeBanner "ana-large-ad")
    </div>

      $(Ad-Leaderboard "ipoanalysis-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>
</div>
"@
    }

    # ============================================================
    # IPO FINANCIALS
    # ============================================================
    elseif ($page -match "ipo/financials") {
        $titleDisplay = "IPO Financials"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}ipo/index.html">IPO</a><span class="sep">/</span><span class="current">Financials</span></div>
  <h1 class="page-hero-title">IPO Financials</h1>
  <p class="page-hero-desc">Revenue, EBITDA, PAT, EPS, ROE, ROCE and other financial metrics for listed IPOs.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="tab-container">
    <div class="tab-bar">
      <button class="tab-btn active" data-tab="fin-fy26">FY 2026</button>
      <button class="tab-btn" data-tab="fin-fy25">FY 2025</button>
      <button class="tab-btn" data-tab="fin-fy24">FY 2024</button>
    </div>
    <div id="fin-fy26" class="tab-pane active">
      <div class="table-container"><table><thead><tr><th>Company</th><th>Revenue (Cr)</th><th>EBITDA (Cr)</th><th>PAT (Cr)</th><th>EPS (&#8377;)</th><th>ROE %</th><th>ROCE %</th><th>Debt (Cr)</th><th>Net Worth (Cr)</th></tr></thead>
      <tbody>
        <tr><td><strong>Dhoot Transmission</strong></td><td>1,420</td><td>256</td><td>131</td><td>27.4</td><td>24.8%</td><td>28.2%</td><td>380</td><td>528</td></tr>
        <tr><td><strong>FirstCry Logistics</strong></td><td>6,280</td><td>412</td><td>-180</td><td>-4.2</td><td>N/A</td><td>8.2%</td><td>1,240</td><td>2,800</td></tr>
        <tr><td><strong>Ola Electric</strong></td><td>5,120</td><td>-820</td><td>-1,280</td><td>-3.1</td><td>N/A</td><td>N/A</td><td>2,100</td><td>4,200</td></tr>
      </tbody></table></div>
    </div>
    <div id="fin-fy25" class="tab-pane">
      <div class="table-container"><table><thead><tr><th>Company</th><th>Revenue (Cr)</th><th>EBITDA (Cr)</th><th>PAT (Cr)</th><th>EPS (&#8377;)</th><th>ROE %</th></tr></thead>
      <tbody>
        <tr><td><strong>Dhoot Transmission</strong></td><td>1,102</td><td>198</td><td>97</td><td>20.3</td><td>22.1%</td></tr>
      </tbody></table></div>
    </div>
    <div id="fin-fy24" class="tab-pane">
      <div class="table-container"><table><thead><tr><th>Company</th><th>Revenue (Cr)</th><th>EBITDA (Cr)</th><th>PAT (Cr)</th><th>EPS (&#8377;)</th><th>ROE %</th></tr></thead>
      <tbody>
        <tr><td><strong>Dhoot Transmission</strong></td><td>842</td><td>142</td><td>68</td><td>14.2</td><td>18.4%</td></tr>
      </tbody></table></div>
    </div>
  </div>
  <div class="chart-placeholder" style="height:250px;margin-top:24px;"><div class="chart-icon">&#128202;</div><div class="chart-label">Revenue &amp; Profit Growth Chart</div><div class="chart-sub">Live charts after API integration</div></div>

</div>
"@
    }

    # ============================================================
    # ANCHOR INVESTORS
    # ============================================================
    elseif ($page -match "anchor-investors") {
        $titleDisplay = "Anchor Investors"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}ipo/index.html">IPO</a><span class="sep">/</span><span class="current">Anchor Investors</span></div>
  <h1 class="page-hero-title">IPO Anchor Investors</h1>
  <p class="page-hero-desc">Details of anchor investor allocations for current and recent IPOs.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="stat-cards">
    <div class="stat-card accent"><div class="stat-label">Total Anchor Allocation</div><div class="stat-value">&#8377;562 Cr</div><div class="stat-sub">Dhoot Transmission</div></div>

    <div class="stat-card"><div class="stat-label">No. of Investors</div><div class="stat-value">24</div></div>

    <div class="stat-card"><div class="stat-label">Anchor Price</div><div class="stat-value">&#8377;871</div></div>

    <div class="stat-card positive"><div class="stat-label">Lock-in Period</div><div class="stat-value">30 Days</div></div>

  </div>
  <div class="table-container">
    <table><thead><tr><th>Investor Name</th><th>Category</th><th>Shares Allocated</th><th>Amount (Cr)</th><th>Price (&#8377;)</th><th>Allocation %</th></tr></thead>
    <tbody>
      <tr><td><strong>HDFC Mutual Fund</strong></td><td>Domestic MF</td><td>8,42,000</td><td>&#8377;73.3 Cr</td><td>&#8377;871</td><td>13.0%</td></tr>
      <tr><td><strong>SBI Mutual Fund</strong></td><td>Domestic MF</td><td>7,20,000</td><td>&#8377;62.7 Cr</td><td>&#8377;871</td><td>11.1%</td></tr>
      <tr><td><strong>ICICI Prudential MF</strong></td><td>Domestic MF</td><td>6,40,000</td><td>&#8377;55.7 Cr</td><td>&#8377;871</td><td>9.9%</td></tr>
      <tr><td><strong>Goldman Sachs India</strong></td><td>FII/FPI</td><td>5,80,000</td><td>&#8377;50.5 Cr</td><td>&#8377;871</td><td>9.0%</td></tr>
      <tr><td><strong>Axis Mutual Fund</strong></td><td>Domestic MF</td><td>4,20,000</td><td>&#8377;36.6 Cr</td><td>&#8377;871</td><td>6.5%</td></tr>
    </tbody></table>
  </div>
</div>
"@
    }

    # ============================================================
    # BASIS OF ALLOTMENT
    # ============================================================
    elseif ($page -match "basis-of-allotment") {
        $titleDisplay = "Basis of Allotment"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}ipo/index.html">IPO</a><span class="sep">/</span><span class="current">Basis of Allotment</span></div>
  <h1 class="page-hero-title">Basis of Allotment</h1>
  <p class="page-hero-desc">Final allotment ratios and distribution details for recently closed IPOs.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="filter-bar"><input type="text" placeholder="Search IPO..."><select><option>All IPOs</option><option>FirstCry Logistics</option><option>Vraj Iron</option></select><button class="btn-filter">Search</button></div>
  <h2 style="font-size:18px;font-weight:800;margin-bottom:16px;">FirstCry Logistics IPO  -  Basis of Allotment</h2>
  <div class="table-container">
    <table><thead><tr><th>Category</th><th>Shares Offered</th><th>Shares Applied</th><th>Total Applications</th><th>Allotment Ratio</th><th>Allotment per Application</th></tr></thead>
    <tbody>
      <tr><td><strong>Retail (RII)</strong></td><td>98,00,000</td><td>11,84,26,000</td><td>37,00,800</td><td>1:37</td><td>32 shares (1 lot)</td></tr>
      <tr><td><strong>NII (sHNI 2 - 10L)</strong></td><td>14,70,000</td><td>4,82,16,000</td><td>30,135</td><td>1:33</td><td>~Proportionate</td></tr>
      <tr><td><strong>NII (bHNI 10L+)</strong></td><td>29,40,000</td><td>18,64,80,000</td><td>38,850</td><td>1:48</td><td>~Proportionate</td></tr>
      <tr><td><strong>QIB</strong></td><td>1,96,00,000</td><td>38,22,40,000</td><td>&mdash;</td><td>Proportionate</td><td>Proportionate</td></tr>
    </tbody></table>
  </div>
  <div style="background:#EFF6FF;border:1px solid #BFDBFE;border-radius:var(--radius-sm);padding:16px;margin-top:16px;">
    <p style="font-size:13px;color:#1D4ED8;"><strong>Allotment PDF:</strong> The official basis of allotment document will be published by the registrar (Link Intime India Pvt. Ltd.) upon finalisation. <a href="#" style="text-decoration:underline;">Download PDF &rarr;</a></p>
  </div>
</div>
"@
    }

    # ============================================================
    # IPO FAQs
    # ============================================================
    elseif ($page -match "ipo/faqs") {
        $titleDisplay = "IPO FAQs"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}ipo/index.html">IPO</a><span class="sep">/</span><span class="current">FAQs</span></div>
  <h1 class="page-hero-title">IPO Frequently Asked Questions</h1>
  <p class="page-hero-desc">Everything you need to know about applying for IPOs in India.</p>
</div></div>
<div style="max-width:900px;margin:0 auto;padding:24px;">
  <div class="filter-bar"><input type="text" placeholder="Search FAQs..."><select><option>All Categories</option><option>IPO Basics</option><option>Application</option><option>GMP</option><option>Allotment</option><option>Listing</option></select></div>
  <div class="tab-container">
    <div class="tab-bar">
      <button class="tab-btn active" data-tab="faq-basics">Basics</button>
      <button class="tab-btn" data-tab="faq-app">Application</button>
      <button class="tab-btn" data-tab="faq-gmp">GMP</button>
      <button class="tab-btn" data-tab="faq-allot">Allotment</button>
      <button class="tab-btn" data-tab="faq-listing">Listing</button>
    </div>
    <div id="faq-basics" class="tab-pane active">
      <div class="faq-list">
        <div class="faq-item"><button class="faq-question">What is an IPO? <span class="faq-icon">+</span></button><div class="faq-answer"><p>An Initial Public Offering (IPO) is when a private company offers its shares to the public for the first time. It is a way for companies to raise capital from public investors by listing on a stock exchange like NSE or BSE.</p></div></div>
        <div class="faq-item"><button class="faq-question">Who can apply for an IPO? <span class="faq-icon">+</span></button><div class="faq-answer"><p>Any Indian resident with a valid PAN card and a demat account can apply for an IPO. NRIs can also apply on repatriable or non-repatriable basis. Retail investors can apply up to &#8377;2 lakh per IPO.</p></div></div>
        <div class="faq-item"><button class="faq-question">What is the difference between Mainboard and SME IPO? <span class="faq-icon">+</span></button><div class="faq-answer"><p>Mainboard IPOs are for larger companies listed on NSE/BSE with higher minimum public issue size. SME IPOs are for small and medium enterprises listed on BSE SME or NSE Emerge platform with smaller issue sizes and higher lot sizes.</p></div></div>
        <div class="faq-item"><button class="faq-question">What is ASBA? <span class="faq-icon">+</span></button><div class="faq-answer"><p>ASBA (Application Supported by Blocked Amount) is the mandatory mechanism for IPO applications. Your bid amount is blocked in your bank account and only debited upon allotment. No interest is lost if allotment is not received.</p></div></div>
      </div>
    </div>
    <div id="faq-app" class="tab-pane">
      <div class="faq-list">
        <div class="faq-item"><button class="faq-question">How do I apply for an IPO? <span class="faq-icon">+</span></button><div class="faq-answer"><p>You can apply through: (1) Your broker's trading platform or mobile app, (2) Net banking ASBA application, (3) UPI-based application via your bank or payment app. The UPI mandate is sent to you and you must approve it within 24 hours.</p></div></div>
        <div class="faq-item"><button class="faq-question">What is the cut-off price? <span class="faq-icon">+</span></button><div class="faq-answer"><p>Cut-off price means you agree to pay whatever the final issue price is within the band. Retail investors are recommended to apply at cut-off to ensure their application is valid regardless of final price determination.</p></div></div>
        <div class="faq-item"><button class="faq-question">Can I apply from multiple demat accounts? <span class="faq-icon">+</span></button><div class="faq-answer"><p>No. Each PAN can only apply once per IPO. Applying from multiple accounts using the same PAN is illegal and all applications will be rejected. Family members with separate PANs can apply individually.</p></div></div>
      </div>
    </div>
    <div id="faq-gmp" class="tab-pane">
      <div class="faq-list">
        <div class="faq-item"><button class="faq-question">What is GMP? <span class="faq-icon">+</span></button><div class="faq-answer"><p>GMP (Grey Market Premium) is the premium at which IPO shares trade in the unofficial grey market before official listing. It is an informal indicator of expected listing price but is NOT a guarantee.</p></div></div>
        <div class="faq-item"><button class="faq-question">Is GMP reliable? <span class="faq-icon">+</span></button><div class="faq-answer"><p>GMP can give a general sentiment about expected listing performance but it is highly unreliable. Market conditions on listing day, overall market direction, and company fundamentals all affect actual listing price.</p></div></div>
      </div>
    </div>
    <div id="faq-allot" class="tab-pane">
      <div class="faq-list">
        <div class="faq-item"><button class="faq-question">How is IPO allotment done? <span class="faq-icon">+</span></button><div class="faq-answer"><p>If an IPO is oversubscribed, allotment for retail investors is done by lottery  -  either 1 lot per applicant or proportionate basis. If undersubscribed, all applicants receive their applied quantity.</p></div></div>
        <div class="faq-item"><button class="faq-question">How do I check allotment status? <span class="faq-icon">+</span></button><div class="faq-answer"><p>Visit the registrar's website (Link Intime, KFintech, Bigshare, etc.) and enter your PAN number or application number. You can also check via BSE/NSE IPO allotment portal.</p></div></div>
      </div>
    </div>
    <div id="faq-listing" class="tab-pane">
      <div class="faq-list">
        <div class="faq-item"><button class="faq-question">When do IPO shares get listed? <span class="faq-icon">+</span></button><div class="faq-answer"><p>As per SEBI regulations (T+6 listing), IPO shares are listed 6 working days after the IPO closing date. For example, if an IPO closes on Monday Aug 12, it lists on Tuesday Aug 19 (subject to holidays).</p></div></div>
        <div class="faq-item"><button class="faq-question">Can I sell IPO shares on listing day? <span class="faq-icon">+</span></button><div class="faq-answer"><p>Yes, you can sell allotted IPO shares immediately on listing day. Shares are credited to your demat account on T+1 day (one day before listing), allowing you to place sell orders for listing day.</p></div></div>
      </div>
    </div>
  </div>

</div>
"@
    }

    # ============================================================
    # GMP
    # ============================================================
    elseif ($page -match "gmp") {
        $titleDisplay = "IPO GMP Today"
        $categoryContent = @"
<div class="split-hero gmp-hero">
  <div class="hero-orb" style="width:250px;height:250px;background:#10b981;top:-80px;left:-60px;"></div>
  <div class="hero-orb" style="width:180px;height:180px;background:#34d399;bottom:-60px;right:100px;"></div>
  <div class="split-hero-left">
    <div class="hero-breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">IPO GMP</span></div>
    <div class="hero-badges">
      <span class="hero-badge live">&#x1F7E2; Live GMP</span>
      <span class="hero-badge free">Updated Daily</span>
      <span class="hero-badge count">10+ Active IPOs</span>
    </div>
    <h1 class="hero-title">IPO GMP Today<br><span style="font-size:20px;font-weight:600;opacity:0.8;">Grey Market Premium</span></h1>
    <p class="hero-desc">Live grey market premium data for active IPOs. Updated multiple times daily. <em style="opacity:0.7;">Not investment advice.</em></p>
  </div>

        $titleDisplay = "IPO Subscription"
        $categoryContent = @"
<div class="split-hero sub-hero">
  <div class="hero-orb" style="width:280px;height:280px;background:#7c3aed;top:-100px;right:80px;"></div>
  <div class="hero-orb" style="width:160px;height:160px;background:#a78bfa;bottom:-50px;left:40%;"></div>
  <div class="split-hero-left">
    <div class="hero-breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">Subscription</span></div>
    <div class="hero-badges">
      <span class="hero-badge live">&#x1F7E2; Live Status</span>
      <span class="hero-badge sub">QIB &middot; NII &middot; Retail</span>
      <span class="hero-badge updated">Daily Updated</span>
    </div>
    <h1 class="hero-title">IPO Subscription<br><span style="font-size:20px;font-weight:600;opacity:0.8;">Status Live</span></h1>
    <p class="hero-desc">Live IPO subscription data across QIB, NII and Retail categories. Monitor oversubscription in real-time.</p>
  </div>
  <div class="split-hero-right">
    <div class="sub-bars-visual">
      <div class="sub-bar-group"><span class="sub-bar-val">106x</span><div class="sub-bar-fill" style="height:130px;background:linear-gradient(to top,#7c3aed,#a78bfa);"></div><span class="sub-bar-lbl">Vraj Iron</span></div>
      <div class="sub-bar-group"><span class="sub-bar-val">84x</span><div class="sub-bar-fill" style="height:100px;background:linear-gradient(to top,#6d28d9,#c4b5fd);"></div><span class="sub-bar-lbl">Synergy</span></div>
      <div class="sub-bar-group"><span class="sub-bar-val">44x</span><div class="sub-bar-fill" style="height:60px;background:linear-gradient(to top,#4c1d95,#818cf8);"></div><span class="sub-bar-lbl">FirstCry</span></div>
      <div class="sub-bar-group"><span class="sub-bar-val">92x</span><div class="sub-bar-fill" style="height:110px;background:linear-gradient(to top,#10b981,#6ee7b7);"></div><span class="sub-bar-lbl">Vraj NII</span></div>
    </div>
  </div>
</div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="stat-cards">
    <div class="stat-card positive"><div class="stat-label">Highest Subscription</div><div class="stat-value">106.5x</div><div class="stat-sub">Vraj Iron (SME)</div></div>

    <div class="stat-card positive"><div class="stat-label">Highest Retail</div><div class="stat-value">84.2x</div><div class="stat-sub">Synergy Green</div></div>

    <div class="stat-card positive"><div class="stat-label">Highest QIB</div><div class="stat-value">44.8x</div><div class="stat-sub">FirstCry Logistics</div></div>

    <div class="stat-card positive"><div class="stat-label">Highest NII</div><div class="stat-value">92.1x</div><div class="stat-sub">Vraj Iron</div></div>

  </div>
  $(Ad-Leaderboard "subscription-top-ad")
  <div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div class="tab-container">
        <div class="tab-bar">
          <button class="tab-btn active" data-tab="sub-all">All</button>
          <button class="tab-btn" data-tab="sub-main">Mainboard</button>
          <button class="tab-btn" data-tab="sub-sme">SME</button>
          <button class="tab-btn" data-tab="sub-open">Open</button>
        </div>
        <div id="sub-all" class="tab-pane active">
          <div class="table-container">
            <table><thead><tr><th>Company</th><th>QIB (x)</th><th>NII (x)</th><th>Retail (x)</th><th>Employee (x)</th><th>Total (x)</th><th>Applications</th><th>Status</th></tr></thead>
            <tbody>
              <tr><td><strong>Dhoot Transmission</strong></td><td>0.85</td><td>3.40</td><td class="text-green">5.20</td><td>&mdash;</td><td class="text-green">3.15</td><td>12,40,000</td><td><span class="badge badge-open">Day 2</span></td></tr>
              <tr><td><strong>Vraj Iron (SME)</strong></td><td class="text-green">44.2</td><td class="text-green">92.1</td><td class="text-green">84.2</td><td>&mdash;</td><td class="text-green">106.5</td><td>4,82,000</td><td><span class="badge badge-closed">Closed</span></td></tr>
              <tr><td><strong>FirstCry Logistics</strong></td><td class="text-green">44.8</td><td class="text-green">28.5</td><td class="text-green">12.1</td><td>8.2</td><td class="text-green">18.26</td><td>37,00,800</td><td><span class="badge badge-closed">Closed</span></td></tr>
              <tr><td><strong>Ola Electric</strong></td><td>3.72</td><td>5.08</td><td>4.72</td><td>&mdash;</td><td class="text-green">4.27</td><td>58,42,000</td><td><span class="badge badge-closed">Closed</span></td></tr>
            </tbody></table>
          </div>
        </div>
        <div id="sub-main" class="tab-pane">
          <div class="table-container"><table><thead><tr><th>Company</th><th>QIB</th><th>NII</th><th>Retail</th><th>Total</th><th>Status</th></tr></thead>
          <tbody>
            <tr><td><strong>Dhoot Transmission</strong></td><td>0.85x</td><td>3.40x</td><td class="text-green">5.20x</td><td class="text-green">3.15x</td><td><span class="badge badge-open">Open</span></td></tr>
            <tr><td><strong>FirstCry Logistics</strong></td><td class="text-green">44.8x</td><td class="text-green">28.5x</td><td class="text-green">12.1x</td><td class="text-green">18.26x</td><td><span class="badge badge-closed">Closed</span></td></tr>
          </tbody></table></div>
        </div>
        <div id="sub-sme" class="tab-pane">
          <div class="table-container"><table><thead><tr><th>Company</th><th>QIB</th><th>NII</th><th>Retail</th><th>Total</th><th>Status</th></tr></thead>
          <tbody>
            <tr><td><strong>Saraswati Cables</strong></td><td>12.4x</td><td>28.8x</td><td class="text-green">42.1x</td><td class="text-green">36.2x</td><td><span class="badge badge-open">Open</span></td></tr>
            <tr><td><strong>Vraj Iron</strong></td><td class="text-green">44.2x</td><td class="text-green">92.1x</td><td class="text-green">84.2x</td><td class="text-green">106.5x</td><td><span class="badge badge-closed">Closed</span></td></tr>
          </tbody></table></div>
        </div>
        <div id="sub-open" class="tab-pane">
          <div class="table-container"><table><thead><tr><th>Company</th><th>QIB</th><th>NII</th><th>Retail</th><th>Total</th><th>Time</th></tr></thead>
          <tbody>
            <tr><td><strong>Dhoot Transmission</strong></td><td>0.85x</td><td>3.40x</td><td class="text-green">5.20x</td><td class="text-green">3.15x</td><td>Day 2</td></tr>
          </tbody></table></div>
        </div>
      </div>
      <div class="faq-section"><h2>Subscription FAQs</h2><div class="faq-list">
        <div class="faq-item"><button class="faq-question">What does QIB, NII, Retail mean? <span class="faq-icon">+</span></button><div class="faq-answer"><p>QIB = Qualified Institutional Buyers (FIIs, MFs, Banks). NII = Non-Institutional Investors (HNIs applying &gt;&#8377;2L). Retail = Individual investors applying up to &#8377;2 lakh.</p></div></div>

        <div class="faq-item"><button class="faq-question">How is oversubscription handled? <span class="faq-icon">+</span></button><div class="faq-answer"><p>For oversubscribed retail portions, allotment is done by computerised lottery (1 lot per applicant). For NII category, proportionate allotment applies.</p></div></div>

      </div></div>

    </div>

      $(Ad-Leaderboard "subscription-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>

</div>
"@
    }

    # ============================================================
    # ALLOTMENT
    # ============================================================
    elseif ($page -match "allotment") {
        $titleDisplay = "IPO Allotment"
        $categoryContent = @"
<div class="split-hero allot-hero">
  <div class="hero-orb" style="width:260px;height:260px;background:#0d9488;top:-80px;right:50px;"></div>
  <div class="hero-orb" style="width:140px;height:140px;background:#14b8a6;bottom:-40px;left:35%;"></div>
  <div class="split-hero-left">
    <div class="hero-breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">Allotment</span></div>
    <div class="hero-badges">
      <span class="hero-badge teal">&#x1F4CB; Allotment Status</span>
      <span class="hero-badge updated">Check by PAN</span>
      <span class="hero-badge live">&#x1F7E2; Updated Live</span>
    </div>
    <h1 class="hero-title">IPO Allotment<br><span style="font-size:20px;font-weight:600;opacity:0.8;">Status Checker</span></h1>
    <p class="hero-desc">Check your IPO allotment status using your PAN or application number. Results updated live from BSE &amp; NSE registrars.</p>
  </div>
  <div class="split-hero-right">
    <div class="allot-steps-visual">
      <div class="allot-step"><div class="allot-step-num">1</div><div class="allot-step-text"><div class="step-title">Select IPO</div><div class="step-sub">Choose from active or recent IPOs</div></div></div>
      <div class="allot-step"><div class="allot-step-num">2</div><div class="allot-step-text"><div class="step-title">Enter PAN / App No.</div><div class="step-sub">Your unique application identifier</div></div></div>
      <div class="allot-step"><div class="allot-step-num">3</div><div class="allot-step-text"><div class="step-title">Check Result</div><div class="step-sub">Get allotment status instantly</div></div></div>
    </div>
  </div>
</div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  
  $(Ad-Leaderboard "allotment-top-ad")
<div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:32px;max-width:560px;margin-bottom:28px;">
        <h2 style="font-size:18px;font-weight:800;margin-bottom:20px;">Check Allotment Status</h2>
        <form style="display:flex;flex-direction:column;gap:16px;">
          <div><label style="display:block;font-weight:600;font-size:13px;margin-bottom:6px;">Select IPO</label>
          <select style="width:100%;padding:10px 12px;border:1px solid var(--border-color);border-radius:6px;font-family:inherit;">
            <option>FirstCry Logistics (Link Intime)</option>
            <option>Dhoot Transmission (KFintech)</option>
            <option>Vraj Iron (Bigshare)</option>
            <option>Ola Electric (KFintech)</option>
          </select></div>
          <div><label style="display:block;font-weight:600;font-size:13px;margin-bottom:6px;">Enter PAN Number</label>
          <input type="text" style="width:100%;padding:10px 12px;border:1px solid var(--border-color);border-radius:6px;font-family:inherit;text-transform:uppercase;" placeholder="ABCDE1234F"></div>
          <button type="button" class="btn btn-primary" style="padding:12px;">Check Allotment Status</button>
        </form>
      </div>
      <div class="page-section-title">Recent Allotment Dates</div>
      <div class="table-container">
        <table><thead><tr><th>Company</th><th>Type</th><th>Allotment Date</th><th>Registrar</th><th>Status</th><th>Action</th></tr></thead>
        <tbody>
          <tr><td><strong>FirstCry Logistics</strong></td><td><span class="badge badge-main">MB</span></td><td>Aug 13, 2026</td><td>Link Intime</td><td><span class="badge badge-open">Allotted</span></td><td><a href="#" class="text-blue">Check &rarr;</a></td></tr>
          <tr><td><strong>Dhoot Transmission</strong></td><td><span class="badge badge-main">MB</span></td><td>Aug 15, 2026</td><td>KFintech</td><td><span class="badge" style="background:#FEF3C7;color:#92400E;">Pending</span></td><td><a href="#" class="text-blue">Check &rarr;</a></td></tr>
          <tr><td><strong>Vraj Iron</strong></td><td><span class="badge badge-sme">SME</span></td><td>Jul 3, 2026</td><td>Bigshare</td><td><span class="badge badge-open">Allotted</span></td><td><a href="#" class="text-blue">Check &rarr;</a></td></tr>
        </tbody></table>
      </div>
      <div class="page-section-title" style="margin-top:24px;">How to Check IPO Allotment</div>
      <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:24px;">
        <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-sm);padding:16px;text-align:center;"><div style="font-size:28px;margin-bottom:8px;">1&#65039;&#8419;</div><div style="font-size:13px;font-weight:700;margin-bottom:4px;">Select IPO</div><div style="font-size:12px;color:var(--text-muted);">Choose from recent IPOs</div></div>
        <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-sm);padding:16px;text-align:center;"><div style="font-size:28px;margin-bottom:8px;">2&#65039;&#8419;</div><div style="font-size:13px;font-weight:700;margin-bottom:4px;">Visit Registrar</div><div style="font-size:12px;color:var(--text-muted);">Go to official registrar site</div></div>
        <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-sm);padding:16px;text-align:center;"><div style="font-size:28px;margin-bottom:8px;">3&#65039;&#8419;</div><div style="font-size:13px;font-weight:700;margin-bottom:4px;">Enter PAN/App No.</div><div style="font-size:12px;color:var(--text-muted);">Use PAN or Application ID</div></div>
        <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-sm);padding:16px;text-align:center;"><div style="font-size:28px;margin-bottom:8px;">4&#65039;&#8419;</div><div style="font-size:13px;font-weight:700;margin-bottom:4px;">View Status</div><div style="font-size:12px;color:var(--text-muted);">See allotment result</div></div>
      </div>
    </div>

      $(Ad-Leaderboard "allotment-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>

</div>
"@
    }

    # ============================================================
    # CALENDAR
    # ============================================================
    elseif ($page -match "calendar") {
        $titleDisplay = "IPO Calendar"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">IPO Calendar</span></div>
  <h1 class="page-hero-title">IPO Calendar  -  August 2026</h1>
  <p class="page-hero-desc">Month-by-month view of IPO opens, closes, allotments and listing dates.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div style="display:flex;gap:12px;margin-bottom:16px;flex-wrap:wrap;">
        <span style="display:flex;align-items:center;gap:6px;font-size:12px;font-weight:600;"><span style="width:12px;height:12px;border-radius:3px;background:#DCFCE7;border:1px solid #86EFAC;display:inline-block;"></span>IPO Opens</span>
        <span style="display:flex;align-items:center;gap:6px;font-size:12px;font-weight:600;"><span style="width:12px;height:12px;border-radius:3px;background:#FEE2E2;border:1px solid #FCA5A5;display:inline-block;"></span>IPO Closes</span>
        <span style="display:flex;align-items:center;gap:6px;font-size:12px;font-weight:600;"><span style="width:12px;height:12px;border-radius:3px;background:#DBEAFE;border:1px solid #93C5FD;display:inline-block;"></span>Listing Day</span>
        <span style="display:flex;align-items:center;gap:6px;font-size:12px;font-weight:600;"><span style="width:12px;height:12px;border-radius:3px;background:#FEF3C7;border:1px solid #FDE68A;display:inline-block;"></span>Allotment</span>
      </div>
      <div class="calendar-wrap">
        <div class="calendar-header">
          <div class="calendar-title">August 2026</div>
          <div class="calendar-nav">
            <button>&lsaquo;</button>
            <button style="min-width:80px;">Today</button>
            <button>&rsaquo;</button>
          </div>
        </div>
        <div class="calendar-grid-header">
          <span>Sun</span><span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span>
        </div>
        <div class="calendar-grid-body">
          <div class="cal-day other-month"><div class="day-num">27</div></div>

          <div class="cal-day other-month"><div class="day-num">28</div></div>

          <div class="cal-day other-month"><div class="day-num">29</div></div>

          <div class="cal-day other-month"><div class="day-num">30</div></div>

          <div class="cal-day other-month"><div class="day-num">31</div></div>

          <div class="cal-day"><div class="day-num">1</div></div>

          <div class="cal-day"><div class="day-num">2</div></div>

          <div class="cal-day"><div class="day-num">3</div></div>

          <div class="cal-day"><div class="day-num">4</div></div>

          <div class="cal-day"><div class="day-num">5</div></div>

          <div class="cal-day"><div class="day-num">6</div><div class="cal-event open">FirstCry Opens</div></div>

          <div class="cal-day"><div class="day-num">7</div></div>

          <div class="cal-day"><div class="day-num">8</div><div class="cal-event close">FirstCry Closes</div></div>

          <div class="cal-day"><div class="day-num">9</div><div class="cal-event open">Saraswati Opens</div></div>

          <div class="cal-day today"><div class="day-num">10</div><div class="cal-event open">Dhoot Opens</div></div>

          <div class="cal-day"><div class="day-num">11</div></div>

          <div class="cal-day"><div class="day-num">12</div><div class="cal-event close">Dhoot Closes</div></div>

          <div class="cal-day"><div class="day-num">13</div><div class="cal-event close">Saraswati Closes</div><div class="cal-event allotment">FirstCry Allotment</div></div>

          <div class="cal-day"><div class="day-num">14</div></div>

          <div class="cal-day"><div class="day-num">15</div><div class="cal-event allotment">Dhoot Allotment</div></div>

          <div class="cal-day"><div class="day-num">16</div></div>

          <div class="cal-day"><div class="day-num">17</div></div>

          <div class="cal-day"><div class="day-num">18</div></div>

          <div class="cal-day"><div class="day-num">19</div><div class="cal-event listing">FirstCry Lists</div></div>

          <div class="cal-day"><div class="day-num">20</div></div>

          <div class="cal-day"><div class="day-num">21</div><div class="cal-event listing">Dhoot Lists</div></div>

          <div class="cal-day"><div class="day-num">22</div></div>

          <div class="cal-day"><div class="day-num">23</div></div>

          <div class="cal-day"><div class="day-num">24</div></div>

          <div class="cal-day"><div class="day-num">25</div></div>

          <div class="cal-day"><div class="day-num">26</div></div>

          <div class="cal-day"><div class="day-num">27</div></div>

          <div class="cal-day"><div class="day-num">28</div></div>

          <div class="cal-day"><div class="day-num">29</div></div>

          <div class="cal-day"><div class="day-num">30</div></div>

          <div class="cal-day"><div class="day-num">31</div></div>

          <div class="cal-day other-month"><div class="day-num">1</div></div>

          <div class="cal-day other-month"><div class="day-num">2</div></div>

          <div class="cal-day other-month"><div class="day-num">3</div></div>

          <div class="cal-day other-month"><div class="day-num">4</div></div>

          <div class="cal-day other-month"><div class="day-num">5</div></div>

          <div class="cal-day other-month"><div class="day-num">6</div></div>

        </div>
      </div>
      <div class="page-section-title" style="margin-top:24px;">Upcoming Events List</div>
      <div class="table-container">
        <table><thead><tr><th>Date</th><th>Company</th><th>Event</th><th>Exchange</th></tr></thead>
        <tbody>
          <tr><td><strong style="color:var(--accent-color);">Aug 10, 2026</strong></td><td>Dhoot Transmission</td><td><span class="cal-event open" style="display:inline;">IPO Opens</span></td><td>BSE &bull; NSE</td></tr>
          <tr><td><strong style="color:var(--accent-color);">Aug 12, 2026</strong></td><td>Dhoot Transmission</td><td><span class="cal-event close" style="display:inline;">IPO Closes</span></td><td>BSE &bull; NSE</td></tr>
          <tr><td><strong style="color:var(--accent-color);">Aug 13, 2026</strong></td><td>Saraswati Cables</td><td><span class="cal-event close" style="display:inline;">IPO Closes</span></td><td>BSE SME</td></tr>
          <tr><td><strong style="color:var(--accent-color);">Aug 13, 2026</strong></td><td>FirstCry Logistics</td><td><span class="cal-event allotment" style="display:inline;">Allotment</span></td><td>BSE &bull; NSE</td></tr>
          <tr><td><strong style="color:var(--accent-color);">Aug 15, 2026</strong></td><td>Dhoot Transmission</td><td><span class="cal-event allotment" style="display:inline;">Allotment</span></td><td>BSE &bull; NSE</td></tr>
          <tr><td><strong style="color:var(--accent-color);">Aug 19, 2026</strong></td><td>FirstCry Logistics</td><td><span class="cal-event listing" style="display:inline;">Listing Day</span></td><td>BSE &bull; NSE</td></tr>
          <tr><td><strong style="color:var(--accent-color);">Aug 21, 2026</strong></td><td>Dhoot Transmission</td><td><span class="cal-event listing" style="display:inline;">Listing Day</span></td><td>BSE &bull; NSE</td></tr>
        </tbody></table>
      </div>
    </div>

      $(Ad-Leaderboard "calendar-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>

</div>
"@
    }

    # ============================================================
    # NEWS
    # ============================================================
    elseif ($page -match "news/index") {
        $titleDisplay = "Market News"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">News</span></div>
  <h1 class="page-hero-title">Market News &amp; IPO Updates</h1>
  <p class="page-hero-desc">Latest IPO news, stock market updates, SEBI announcements and financial analysis.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  
  $(Ad-Leaderboard "newsindex-top-ad")
<div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div class="tab-container">
        <div class="tab-bar">
          <button class="tab-btn active" data-tab="news-all">All</button>
          <button class="tab-btn" data-tab="news-ipo">IPO News</button>
          <button class="tab-btn" data-tab="news-market">Market</button>
          <button class="tab-btn" data-tab="news-mf">Mutual Funds</button>
        </div>
        <div id="news-all" class="tab-pane active">
          <div class="news-grid-2col">
            <div class="news-card">
              <div class="news-img" style="background:linear-gradient(135deg,#1e3a5f,#3B82F6);height:180px;border-radius:8px 8px 0 0;display:flex;align-items:flex-end;padding:12px;margin-bottom:0;"><span style="color:#fff;font-size:10px;font-weight:700;background:rgba(255,255,255,.2);padding:2px 8px;border-radius:4px;">IPO NEWS</span></div>
              <div class="news-content" style="padding:16px;background:#fff;border:1px solid var(--border-color);border-top:none;border-radius:0 0 8px 8px;">
                <h3 class="news-title" style="font-size:14px;margin-bottom:8px;">Dhoot Transmission IPO: Should You Subscribe?</h3>
                <p style="font-size:12px;color:var(--text-muted);margin-bottom:8px;">Strong fundamentals, healthy GMP of &#8377;120 and reasonable P/E makes this a potential listing gain play...</p>
                <div style="font-size:11px;color:var(--text-muted);">Aug 10, 2026 &bull; 4 min read</div>
              </div>
            </div>
            <div class="news-card">
              <div class="news-img" style="background:linear-gradient(135deg,#064e3b,#10B981);height:180px;border-radius:8px 8px 0 0;display:flex;align-items:flex-end;padding:12px;"><span style="color:#fff;font-size:10px;font-weight:700;background:rgba(255,255,255,.2);padding:2px 8px;border-radius:4px;">MARKET NEWS</span></div>
              <div class="news-content" style="padding:16px;background:#fff;border:1px solid var(--border-color);border-top:none;border-radius:0 0 8px 8px;">
                <h3 class="news-title" style="font-size:14px;margin-bottom:8px;">SEBI announces new guidelines for SME IPO disclosures</h3>
                <p style="font-size:12px;color:var(--text-muted);margin-bottom:8px;">SEBI has mandated additional disclosures for SME companies filing for listings to protect retail investors...</p>
                <div style="font-size:11px;color:var(--text-muted);">Aug 9, 2026 &bull; 3 min read</div>
              </div>
            </div>
            <div class="news-card">
              <div class="news-img" style="background:linear-gradient(135deg,#3730a3,#6366f1);height:180px;border-radius:8px 8px 0 0;display:flex;align-items:flex-end;padding:12px;"><span style="color:#fff;font-size:10px;font-weight:700;background:rgba(255,255,255,.2);padding:2px 8px;border-radius:4px;">IPO NEWS</span></div>
              <div class="news-content" style="padding:16px;background:#fff;border:1px solid var(--border-color);border-top:none;border-radius:0 0 8px 8px;">
                <h3 class="news-title" style="font-size:14px;margin-bottom:8px;">Vraj Iron SME IPO subscribed 106x  -  All you need to know</h3>
                <p style="font-size:12px;color:var(--text-muted);margin-bottom:8px;">The SME IPO from the iron castings company saw unprecedented demand from retail and NII investors...</p>
                <div style="font-size:11px;color:var(--text-muted);">Aug 8, 2026 &bull; 5 min read</div>
              </div>
            </div>
            <div class="news-card">
              <div class="news-img" style="background:linear-gradient(135deg,#78350f,#F59E0B);height:180px;border-radius:8px 8px 0 0;display:flex;align-items:flex-end;padding:12px;"><span style="color:#fff;font-size:10px;font-weight:700;background:rgba(255,255,255,.2);padding:2px 8px;border-radius:4px;">COMPANY NEWS</span></div>
              <div class="news-content" style="padding:16px;background:#fff;border:1px solid var(--border-color);border-top:none;border-radius:0 0 8px 8px;">
                <h3 class="news-title" style="font-size:14px;margin-bottom:8px;">Ola Electric Q1 FY27 results: Revenue up 42%, losses narrow</h3>
                <p style="font-size:12px;color:var(--text-muted);margin-bottom:8px;">The EV company reported strong revenue growth but still incurred losses in Q1, sending stock higher...</p>
                <div style="font-size:11px;color:var(--text-muted);">Aug 7, 2026 &bull; 3 min read</div>
              </div>
            </div>
          </div>
        </div>
        <div id="news-ipo" class="tab-pane">
          <p style="font-size:14px;color:var(--text-muted);padding:20px 0;">IPO-specific news articles will appear here.</p>
        </div>
        <div id="news-market" class="tab-pane">
          <p style="font-size:14px;color:var(--text-muted);padding:20px 0;">Stock market news articles will appear here.</p>
        </div>
        <div id="news-mf" class="tab-pane">
          <p style="font-size:14px;color:var(--text-muted);padding:20px 0;">Mutual fund news articles will appear here.</p>
        </div>
      </div>
    </div>

      $(Ad-Leaderboard "newsindex-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>

</div>
"@
    }

    # ============================================================
    # NEWS ARTICLE
    # ============================================================
    elseif ($page -match "news/article") {
        $titleDisplay = "IPO Analysis Article"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}news/index.html">News</a><span class="sep">/</span><span class="current">Article</span></div>
  <h1 class="page-hero-title">Dhoot Transmission IPO Review: Should You Subscribe?</h1>
  <div style="display:flex;align-items:center;gap:16px;margin-top:8px;flex-wrap:wrap;">
    <span class="badge badge-main">IPO NEWS</span>
    <span style="font-size:13px;color:var(--text-muted);">By IPOSETU Research Desk</span>
    <span style="font-size:13px;color:var(--text-muted);">August 10, 2026</span>
    <span style="font-size:13px;color:var(--text-muted);">5 min read</span>
  </div>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div style="background:linear-gradient(135deg,#1e3a5f,#3B82F6);height:300px;border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:28px;"><span style="color:rgba(255,255,255,.4);font-size:48px;">&#128247;</span></div>
      <div style="font-size:15px;line-height:1.9;color:var(--text-main);max-width:720px;">
        <p style="margin-bottom:16px;">Dhoot Transmission Limited opens its IPO today with a price band of &#8377;829&ndash;871. The company manufactures automotive transmission components and has grown its revenue at a 32% CAGR over the last 3 years.</p>
        <h2 style="font-size:18px;font-weight:800;margin:24px 0 12px;">Business Overview</h2>
        <p style="margin-bottom:16px;">Founded in 2003, Dhoot Transmission serves 40+ OEM clients including Maruti Suzuki, Tata Motors, and Mahindra &amp; Mahindra. With 6 manufacturing plants and 2,400+ employees, the company is well-positioned in the growing auto-ancillary segment.</p>
        <h2 style="font-size:18px;font-weight:800;margin:24px 0 12px;">Financial Performance</h2>
        <p style="margin-bottom:16px;">Revenue grew from &#8377;842 Cr (FY24) to &#8377;1,102 Cr (FY25), with PAT improving from &#8377;68 Cr to &#8377;97 Cr. ROE stands at 22.1%  -  strong for the sector.</p>
        <h2 style="font-size:18px;font-weight:800;margin:24px 0 12px;">Valuation</h2>
        <p style="margin-bottom:16px;">At &#8377;871, the IPO is priced at 31.8x FY26E EPS. Peers trade at 38-52x, suggesting reasonable valuation. We recommend subscribing for listing gains and medium-term holding.</p>
        <div style="background:#DCFCE7;border:1px solid #86EFAC;border-radius:var(--radius-sm);padding:16px;margin-top:24px;"><strong style="color:#059669;">Our Recommendation: SUBSCRIBE</strong><p style="font-size:13px;color:#059669;margin-top:4px;">Strong fundamentals, reasonable valuation, high GMP of &#8377;120 (13.8% over issue price). Suitable for listing gains and short-to-medium term.</p></div>
        <div style="margin-top:24px;padding:12px 16px;border:1px solid #FDE68A;background:#FFFBEB;border-radius:var(--radius-sm);font-size:12px;color:#92400E;">
          <strong>Disclaimer:</strong> This article is for informational purposes only and does not constitute investment advice. Please consult a SEBI-registered advisor before making investment decisions.
        </div>
      </div>
    </div>

      $(Ad-Leaderboard "newsarticle-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>

</div>
"@
    }

    # ============================================================
    # TOOLS  -  IPO CALCULATOR
    # ============================================================
    elseif ($page -match "ipo-calculator") {
        $titleDisplay = "IPO Investment Calculator"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}tools/ipo-calculator.html">Tools</a><span class="sep">/</span><span class="current">IPO Calculator</span></div>
  <h1 class="page-hero-title">IPO Investment Calculator</h1>
  <p class="page-hero-desc">Calculate your required investment, expected profit, and estimated listing price for any IPO.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  
  $(Ad-Leaderboard "ipocalculator-top-ad")
<div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div class="calc-wrap">
        <div class="calc-input-card">
          <h2 style="font-size:18px;font-weight:800;margin-bottom:20px;color:var(--primary-color);">IPO Details</h2>
          <div class="calc-field"><label>IPO Price (Cut-off) &#8377;</label><input type="number" id="ipo-price" value="871" min="1"></div>
          <div class="calc-field"><label>Lot Size (Shares per Lot)</label><input type="number" id="ipo-lot" value="17" min="1"></div>
          <div class="calc-field"><label>Number of Lots</label><input type="range" id="ipo-lots" value="1" min="1" max="14" data-suffix=" Lots"><div class="range-val">1 Lots</div></div>

          <div class="calc-field"><label>GMP (Grey Market Premium) &#8377;</label><input type="number" id="ipo-gmp" value="120" min="0"></div>
        </div>
        <div>
          <div class="calc-result-card" style="margin-bottom:16px;">
            <div class="result-label">Total Investment Required</div>
            <div class="result-value" id="ipo-result">&#8377;14,807</div>
            <div class="result-sub">1 lot &times; 17 shares &times; &#8377;871</div>
          </div>
          <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:20px;">
            <div style="margin-bottom:12px;">
              <div style="font-size:11px;font-weight:700;color:var(--text-muted);text-transform:uppercase;">Est. Listing Price (GMP)</div>
              <div style="font-size:20px;font-weight:800;color:var(--primary-color);" id="ipo-est-listing">&#8377;991</div>
            </div>
            <div>
              <div style="font-size:11px;font-weight:700;color:var(--text-muted);text-transform:uppercase;">Expected Profit</div>
              <div style="font-size:20px;font-weight:800;" id="ipo-profit">+&#8377;2,040 (13.8%)</div>
            </div>
          </div>
        </div>
      </div>
      <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:24px;margin-top:24px;">
        <h3 style="font-size:16px;font-weight:800;margin-bottom:12px;">Formula</h3>
        <p style="font-size:13px;color:var(--text-muted);margin-bottom:8px;"><strong>Investment</strong> = Price &times; Lot Size &times; Number of Lots</p>
        <p style="font-size:13px;color:var(--text-muted);margin-bottom:8px;"><strong>Est. Listing</strong> = IPO Price + GMP</p>
        <p style="font-size:13px;color:var(--text-muted)"><strong>Expected Profit</strong> = GMP &times; Lot Size &times; Lots</p>
      </div>
    </div>

      $(Ad-Leaderboard "ipocalculator-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>

</div>
"@
    }

    # ============================================================
    # TOOLS  -  LISTING GAIN CALCULATOR
    # ============================================================
    elseif ($page -match "listing-gain-calculator") {
        $titleDisplay = "Listing Gain Calculator"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}tools/ipo-calculator.html">Tools</a><span class="sep">/</span><span class="current">Listing Gain Calculator</span></div>
  <h1 class="page-hero-title">IPO Listing Gain Calculator</h1>
  <p class="page-hero-desc">Calculate your actual profit or loss from IPO listing based on issue price and listing price.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="calc-wrap">
    <div class="calc-input-card">
      <h2 style="font-size:18px;font-weight:800;margin-bottom:20px;color:var(--primary-color);">Enter Details</h2>
      <div class="calc-field"><label>Issue Price &#8377;</label><input type="number" id="lg-issue" value="871" oninput="calcListingGain()"></div>
      <div class="calc-field"><label>Listing Price &#8377;</label><input type="number" id="lg-listing" value="991" oninput="calcListingGain()"></div>
      <div class="calc-field"><label>Lot Size</label><input type="number" id="lg-lot" value="17" oninput="calcListingGain()"></div>
      <div class="calc-field"><label>Number of Lots</label><input type="range" id="lg-lots" value="1" min="1" max="14" data-suffix=" Lots" oninput="calcListingGain()"><div class="range-val">1 Lots</div></div>

    </div>
    <div>
      <div class="calc-result-card" style="margin-bottom:16px;">
        <div class="result-label">Total Listing Profit</div>
        <div class="result-value" id="lg-result">+&#8377;2,040</div>
        <div class="result-sub" id="lg-pct">+13.8% Listing Gain</div>
      </div>
      <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:20px;">
        <div style="margin-bottom:12px;"><div style="font-size:11px;font-weight:700;color:var(--text-muted);text-transform:uppercase;">Investment Amount</div><div style="font-size:18px;font-weight:800;" id="lg-investment">&#8377;14,807</div></div>

        <div><div style="font-size:11px;font-weight:700;color:var(--text-muted);text-transform:uppercase;">Return Amount</div><div style="font-size:18px;font-weight:800;" id="lg-return">&#8377;16,847</div></div>

      </div>
    </div>
  </div>
  <script>
  function calcListingGain() {
    var issue = parseFloat(document.getElementById('lg-issue').value)||0;
    var listing = parseFloat(document.getElementById('lg-listing').value)||0;
    var lot = parseFloat(document.getElementById('lg-lot').value)||0;
    var lots = parseFloat(document.getElementById('lg-lots').value)||1;
    var investment = issue * lot * lots;
    var returnAmt = listing * lot * lots;
    var profit = returnAmt - investment;
    var pct = issue > 0 ? ((listing - issue)/issue*100).toFixed(2) : 0;
    document.getElementById('lg-result').textContent = (profit >= 0 ? '+' : '') + '\u20B9' + Math.round(profit).toLocaleString('en-IN');
    document.getElementById('lg-pct').textContent = (pct >= 0 ? '+' : '') + pct + '% Listing Gain';
    document.getElementById('lg-investment').textContent = '\u20B9' + Math.round(investment).toLocaleString('en-IN');
    document.getElementById('lg-return').textContent = '\u20B9' + Math.round(returnAmt).toLocaleString('en-IN');
  }
  document.addEventListener('DOMContentLoaded', calcListingGain);
  </script>

</div>
"@
    }

    # ============================================================
    # TOOLS  -  SIP CALCULATOR
    # ============================================================
    elseif ($page -match "sip-calculator") {
        $titleDisplay = "SIP Calculator"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">SIP Calculator</span></div>
  <h1 class="page-hero-title">SIP Calculator</h1>
  <p class="page-hero-desc">Calculate the future value of your Systematic Investment Plan (SIP) in mutual funds.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="calc-wrap">
    <div class="calc-input-card">
      <h2 style="font-size:18px;font-weight:800;margin-bottom:20px;">SIP Details</h2>
      <div class="calc-field"><label>Monthly Investment &#8377;</label><input type="number" id="sip-monthly" value="5000" min="100"></div>
      <div class="calc-field"><label>Expected Annual Return (%)</label><input type="range" id="sip-rate" value="12" min="1" max="30" data-suffix="%"><div class="range-val">12%</div></div>
      <div class="calc-field"><label>Investment Period (Years)</label><input type="range" id="sip-years" value="10" min="1" max="40" data-suffix=" Years"><div class="range-val">10 Years</div></div>
    </div>
    <div>
      <div class="calc-result-card" style="margin-bottom:16px;">
        <div class="result-label">Estimated Returns</div>
        <div class="result-value" id="sip-result">&#8377;11,61,695</div>
        <div class="result-sub">at 12% p.a. for 10 years</div>
      </div>
      <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:20px;">
        <div style="margin-bottom:12px;"><div style="font-size:11px;font-weight:700;color:var(--text-muted);text-transform:uppercase;">Total Invested</div><div style="font-size:18px;font-weight:800;" id="sip-invested">&#8377;6,00,000</div></div>
        <div><div style="font-size:11px;font-weight:700;color:var(--text-muted);text-transform:uppercase;">Estimated Returns</div><div style="font-size:18px;font-weight:800;color:var(--success-color);" id="sip-returns">&#8377;5,61,695</div></div>
      </div>
    </div>
  </div>

</div>
"@
    }

    # ============================================================
    # TOOLS  -  CAGR CALCULATOR
    # ============================================================
    elseif ($page -match "cagr-calculator") {
        $titleDisplay = "CAGR Calculator"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">CAGR Calculator</span></div>
  <h1 class="page-hero-title">CAGR Calculator</h1>
  <p class="page-hero-desc">Calculate the Compound Annual Growth Rate of any investment.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="calc-wrap">
    <div class="calc-input-card">
      <h2 style="font-size:18px;font-weight:800;margin-bottom:20px;">Investment Details</h2>
      <div class="calc-field"><label>Initial Value &#8377;</label><input type="number" id="cagr-initial" value="100000" min="1"></div>
      <div class="calc-field"><label>Final Value &#8377;</label><input type="number" id="cagr-final" value="200000" min="1"></div>
      <div class="calc-field"><label>Duration (Years)</label><input type="range" id="cagr-years" value="5" min="1" max="30" data-suffix=" Years"><div class="range-val">5 Years</div></div>

    </div>
    <div class="calc-result-card" style="display:flex;flex-direction:column;align-items:center;justify-content:center;">
      <div class="result-label">CAGR</div>
      <div class="result-value" id="cagr-result">14.87%</div>
      <div class="result-sub">per annum</div>
    </div>
  </div>

</div>
"@
    }

    # ============================================================
    # TOOLS  -  BROKERAGE CALCULATOR
    # ============================================================
    elseif ($page -match "brokerage-calculator") {
        $titleDisplay = "Brokerage Calculator"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">Brokerage Calculator</span></div>
  <h1 class="page-hero-title">Brokerage Calculator</h1>
  <p class="page-hero-desc">Calculate total brokerage, taxes and net profit/loss on equity trades.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="calc-wrap">
    <div class="calc-input-card">
      <h2 style="font-size:18px;font-weight:800;margin-bottom:20px;">Trade Details</h2>
      <div class="calc-field"><label>Segment</label><select><option>Equity Delivery</option><option>Equity Intraday</option><option>F&amp;O Futures</option><option>F&amp;O Options</option></select></div>
      <div class="calc-field"><label>Buy Price &#8377;</label><input type="number" value="1000"></div>
      <div class="calc-field"><label>Sell Price &#8377;</label><input type="number" value="1050"></div>
      <div class="calc-field"><label>Quantity</label><input type="number" value="100"></div>
      <button class="btn btn-primary" style="width:100%;padding:12px;margin-top:8px;">Calculate</button>
    </div>
    <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:24px;">
      <h3 style="font-size:16px;font-weight:800;margin-bottom:16px;">Breakdown</h3>
      <div style="display:flex;flex-direction:column;gap:10px;">
        <div style="display:flex;justify-content:space-between;font-size:13px;"><span>Turnover</span><span style="font-weight:600;">&#8377;2,05,000</span></div>
        <div style="display:flex;justify-content:space-between;font-size:13px;"><span>Brokerage (0.1%)</span><span style="font-weight:600;color:var(--danger-color);">-&#8377;205</span></div>
        <div style="display:flex;justify-content:space-between;font-size:13px;"><span>STT (0.1% sell)</span><span style="font-weight:600;color:var(--danger-color);">-&#8377;105</span></div>
        <div style="display:flex;justify-content:space-between;font-size:13px;"><span>Exchange Charges</span><span style="font-weight:600;color:var(--danger-color);">-&#8377;2.1</span></div>
        <div style="display:flex;justify-content:space-between;font-size:13px;"><span>GST (18% on brok)</span><span style="font-weight:600;color:var(--danger-color);">-&#8377;36.9</span></div>
        <div style="border-top:2px solid var(--border-color);padding-top:10px;display:flex;justify-content:space-between;font-size:15px;font-weight:800;"><span>Net P&amp;L</span><span style="color:var(--success-color);">+&#8377;4,651</span></div>
      </div>
    </div>
  </div>

</div>
"@
    }

    # ============================================================
    # BROKERS INDEX
    # ============================================================
    elseif ($page -match "brokers/index") {
        $titleDisplay = "Stock Brokers India"
        $categoryContent = @"
<div class="split-hero brokers-hero">
  <div class="hero-orb" style="width:350px;height:350px;background:#d97706;top:-150px;right:-50px;"></div>
  <div class="hero-orb" style="width:200px;height:200px;background:#f59e0b;bottom:-80px;left:30%;"></div>
  <div class="split-hero-left">
    <div class="hero-breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">Brokers</span></div>
    <div class="hero-badges">
      <span class="hero-badge featured">&#11088; Featured</span>
      <span class="hero-badge count">10+ Brokers</span>
      <span class="hero-badge free">Free Account</span>
    </div>
    <h1 class="hero-title">Best Stock Brokers<br><span style="font-size:18px;font-weight:500;opacity:0.75;">in India 2026</span></h1>
    <p class="hero-desc">Compare India&apos;s top discount and full-service brokers. Open a free demat account and start trading today.</p>
  </div>
  <div class="split-hero-right">
    <div class="broker-cards-visual">
      <div class="broker-feat-card"><div class="broker-feat-icon" style="background:rgba(251,191,36,0.2);">&#8377;</div><div class="broker-feat-info"><div class="feat-title">Flat &#8377;15 Per Order</div><div class="feat-sub">Best-in-class brokerage pricing</div></div></div>
      <div class="broker-feat-card"><div class="broker-feat-icon" style="background:rgba(52,211,153,0.2);">&#128241;</div><div class="broker-feat-info"><div class="feat-title">Free Demat Account</div><div class="feat-sub">Zero account opening charges</div></div></div>
      <div class="broker-feat-card"><div class="broker-feat-icon" style="background:rgba(96,165,250,0.2);">&#128640;</div><div class="broker-feat-info"><div class="feat-title">Apply IPOs Online</div><div class="feat-sub">1-click IPO applications</div></div></div>
    </div>
  </div>
</div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div class="tab-container">
        <div class="tab-bar">
          <button class="tab-btn active" data-tab="br-all">All Brokers</button>
          <button class="tab-btn" data-tab="br-discount">Discount</button>
          <button class="tab-btn" data-tab="br-full">Full Service</button>
        </div>
        
        <!-- ALL BROKERS TAB -->
        <div id="br-all" class="tab-pane active">
          <div style="display:flex;flex-direction:column;gap:16px;">
            <!-- Zerodha -->
            <div class="broker-list-card">
              <div class="broker-logo-box large" style="background:#EFF6FF;color:#3B82F6;">Z</div>
              <div class="broker-details">
                <div class="broker-header">
                  <h3 class="broker-name">Zerodha</h3>
                  <span class="broker-type-badge">Discount Broker</span>
                  <div class="broker-rating-pill">&#9733; 4.8</div>
                </div>
                <div class="broker-features">
                  <span class="feat-tag">Kite App</span>
                  <span class="feat-tag">Free MF</span>
                  <span class="feat-tag">IPO Apply</span>
                  <span class="feat-tag">Coin</span>
                </div>
              </div>
              <div class="broker-pricing">
                <div class="price-item">
                  <span class="price-label">Delivery</span>
                  <span class="price-value">&#8377;0</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Intraday</span>
                  <span class="price-value">&#8377;20</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Account Opening</span>
                  <span class="price-value">Free</span>
                </div>
              </div>
              <div class="broker-actions">
                <a href="${prefix}brokers/prostocks.html" class="btn btn-primary" style="text-decoration:none;">Open Account</a>
              </div>
            </div>
            <!-- Upstox -->
            <div class="broker-list-card">
              <div class="broker-logo-box large" style="background:#DCFCE7;color:#059669;">U</div>
              <div class="broker-details">
                <div class="broker-header">
                  <h3 class="broker-name">Upstox</h3>
                  <span class="broker-type-badge">Discount Broker</span>
                  <div class="broker-rating-pill">&#9733; 4.5</div>
                </div>
                <div class="broker-features">
                  <span class="feat-tag">Pro App</span>
                  <span class="feat-tag">IPO Apply</span>
                  <span class="feat-tag">API</span>
                </div>
              </div>
              <div class="broker-pricing">
                <div class="price-item">
                  <span class="price-label">Delivery</span>
                  <span class="price-value">&#8377;0</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Intraday</span>
                  <span class="price-value">&#8377;20</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Account Opening</span>
                  <span class="price-value">Free</span>
                </div>
              </div>
              <div class="broker-actions">
                <a href="${prefix}brokers/prostocks.html" class="btn btn-primary" style="text-decoration:none;">Open Account</a>
              </div>
            </div>
            <!-- ProStocks -->
            <div class="broker-list-card">
              <div class="broker-logo-box large" style="background:#FEF3C7;color:#D97706;">P</div>
              <div class="broker-details">
                <div class="broker-header">
                  <h3 class="broker-name">ProStocks</h3>
                  <span class="broker-type-badge featured">Featured</span>
                  <span class="broker-type-badge">Discount Broker</span>
                  <div class="broker-rating-pill">&#9733; 4.3</div>
                </div>
                <div class="broker-features">
                  <span class="feat-tag">Flat &#8377;15</span>
                  <span class="feat-tag">IPO Apply</span>
                  <span class="feat-tag">NRI Demat</span>
                </div>
              </div>
              <div class="broker-pricing">
                <div class="price-item">
                  <span class="price-label">Delivery</span>
                  <span class="price-value">&#8377;0</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Intraday</span>
                  <span class="price-value">&#8377;15</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Account Opening</span>
                  <span class="price-value">Free</span>
                </div>
              </div>
              <div class="broker-actions">
                <a href="${prefix}brokers/prostocks.html" class="btn btn-primary" style="text-decoration:none;">Open Account</a>
              </div>
            </div>
            <!-- Groww -->
            <div class="broker-list-card">
              <div class="broker-logo-box large" style="background:#EDE9FE;color:#7C3AED;">G</div>
              <div class="broker-details">
                <div class="broker-header">
                  <h3 class="broker-name">Groww</h3>
                  <span class="broker-type-badge">Discount Broker</span>
                  <div class="broker-rating-pill">&#9733; 4.2</div>
                </div>
                <div class="broker-features">
                  <span class="feat-tag">Stocks</span>
                  <span class="feat-tag">Mutual Funds</span>
                  <span class="feat-tag">IPO</span>
                </div>
              </div>
              <div class="broker-pricing">
                <div class="price-item">
                  <span class="price-label">Delivery</span>
                  <span class="price-value">&#8377;0</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Intraday</span>
                  <span class="price-value">&#8377;20</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Account Opening</span>
                  <span class="price-value">Free</span>
                </div>
              </div>
              <div class="broker-actions">
                <a href="${prefix}brokers/prostocks.html" class="btn btn-primary" style="text-decoration:none;">Open Account</a>
              </div>
            </div>
            <!-- ICICI Direct -->
            <div class="broker-list-card">
              <div class="broker-logo-box large" style="background:#EFF6FF;color:#F59E0B;">I</div>
              <div class="broker-details">
                <div class="broker-header">
                  <h3 class="broker-name">ICICI Direct</h3>
                  <span class="broker-type-badge">Full Service Broker</span>
                  <div class="broker-rating-pill">&#9733; 4.4</div>
                </div>
                <div class="broker-features">
                  <span class="feat-tag">3-in-1 Account</span>
                  <span class="feat-tag">Research Reports</span>
                  <span class="feat-tag">Global Investing</span>
                </div>
              </div>
              <div class="broker-pricing">
                <div class="price-item">
                  <span class="price-label">Delivery</span>
                  <span class="price-value">0.55%</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Intraday</span>
                  <span class="price-value">0.05%</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Account Opening</span>
                  <span class="price-value">Free</span>
                </div>
              </div>
              <div class="broker-actions">
                <a href="${prefix}brokers/prostocks.html" class="btn btn-primary" style="text-decoration:none;">Open Account</a>
              </div>
            </div>
            <!-- HDFC Securities -->
            <div class="broker-list-card">
              <div class="broker-logo-box large" style="background:#EFF6FF;color:#1D4ED8;">H</div>
              <div class="broker-details">
                <div class="broker-header">
                  <h3 class="broker-name">HDFC Securities</h3>
                  <span class="broker-type-badge">Full Service Broker</span>
                  <div class="broker-rating-pill">&#9733; 4.2</div>
                </div>
                <div class="broker-features">
                  <span class="feat-tag">HDFC Bank Link</span>
                  <span class="feat-tag">Daily Research</span>
                  <span class="feat-tag">Wealth Tools</span>
                </div>
              </div>
              <div class="broker-pricing">
                <div class="price-item">
                  <span class="price-label">Delivery</span>
                  <span class="price-value">0.50%</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Intraday</span>
                  <span class="price-value">0.05%</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Account Opening</span>
                  <span class="price-value">&#8377;999</span>
                </div>
              </div>
              <div class="broker-actions">
                <a href="${prefix}brokers/prostocks.html" class="btn btn-primary" style="text-decoration:none;">Open Account</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- DISCOUNT BROKERS TAB -->
        <div id="br-discount" class="tab-pane">
          <div style="display:flex;flex-direction:column;gap:16px;">
            <div class="broker-list-card">
              <div class="broker-logo-box large" style="background:#EFF6FF;color:#3B82F6;">Z</div>
              <div class="broker-details">
                <div class="broker-header">
                  <h3 class="broker-name">Zerodha</h3>
                  <span class="broker-type-badge">Discount Broker</span>
                  <div class="broker-rating-pill">&#9733; 4.8</div>
                </div>
                <div class="broker-features">
                  <span class="feat-tag">Kite App</span>
                  <span class="feat-tag">Free MF</span>
                  <span class="feat-tag">IPO Apply</span>
                  <span class="feat-tag">Coin</span>
                </div>
              </div>
              <div class="broker-pricing">
                <div class="price-item">
                  <span class="price-label">Delivery</span>
                  <span class="price-value">&#8377;0</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Intraday</span>
                  <span class="price-value">&#8377;20</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Account Opening</span>
                  <span class="price-value">Free</span>
                </div>
              </div>
              <div class="broker-actions">
                <a href="${prefix}brokers/prostocks.html" class="btn btn-primary" style="text-decoration:none;">Open Account</a>
              </div>
            </div>
            <div class="broker-list-card">
              <div class="broker-logo-box large" style="background:#DCFCE7;color:#059669;">U</div>
              <div class="broker-details">
                <div class="broker-header">
                  <h3 class="broker-name">Upstox</h3>
                  <span class="broker-type-badge">Discount Broker</span>
                  <div class="broker-rating-pill">&#9733; 4.5</div>
                </div>
                <div class="broker-features">
                  <span class="feat-tag">Pro App</span>
                  <span class="feat-tag">IPO Apply</span>
                  <span class="feat-tag">API</span>
                </div>
              </div>
              <div class="broker-pricing">
                <div class="price-item">
                  <span class="price-label">Delivery</span>
                  <span class="price-value">&#8377;0</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Intraday</span>
                  <span class="price-value">&#8377;20</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Account Opening</span>
                  <span class="price-value">Free</span>
                </div>
              </div>
              <div class="broker-actions">
                <a href="${prefix}brokers/prostocks.html" class="btn btn-primary" style="text-decoration:none;">Open Account</a>
              </div>
            </div>
            <div class="broker-list-card">
              <div class="broker-logo-box large" style="background:#FEF3C7;color:#D97706;">P</div>
              <div class="broker-details">
                <div class="broker-header">
                  <h3 class="broker-name">ProStocks</h3>
                  <span class="broker-type-badge featured">Featured</span>
                  <span class="broker-type-badge">Discount Broker</span>
                  <div class="broker-rating-pill">&#9733; 4.3</div>
                </div>
                <div class="broker-features">
                  <span class="feat-tag">Flat &#8377;15</span>
                  <span class="feat-tag">IPO Apply</span>
                  <span class="feat-tag">NRI Demat</span>
                </div>
              </div>
              <div class="broker-pricing">
                <div class="price-item">
                  <span class="price-label">Delivery</span>
                  <span class="price-value">&#8377;0</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Intraday</span>
                  <span class="price-value">&#8377;15</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Account Opening</span>
                  <span class="price-value">Free</span>
                </div>
              </div>
              <div class="broker-actions">
                <a href="${prefix}brokers/prostocks.html" class="btn btn-primary" style="text-decoration:none;">Open Account</a>
              </div>
            </div>
            <div class="broker-list-card">
              <div class="broker-logo-box large" style="background:#EDE9FE;color:#7C3AED;">G</div>
              <div class="broker-details">
                <div class="broker-header">
                  <h3 class="broker-name">Groww</h3>
                  <span class="broker-type-badge">Discount Broker</span>
                  <div class="broker-rating-pill">&#9733; 4.2</div>
                </div>
                <div class="broker-features">
                  <span class="feat-tag">Stocks</span>
                  <span class="feat-tag">Mutual Funds</span>
                  <span class="feat-tag">IPO</span>
                </div>
              </div>
              <div class="broker-pricing">
                <div class="price-item">
                  <span class="price-label">Delivery</span>
                  <span class="price-value">&#8377;0</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Intraday</span>
                  <span class="price-value">&#8377;20</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Account Opening</span>
                  <span class="price-value">Free</span>
                </div>
              </div>
              <div class="broker-actions">
                <a href="${prefix}brokers/prostocks.html" class="btn btn-primary" style="text-decoration:none;">Open Account</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- FULL SERVICE BROKERS TAB -->
        <div id="br-full" class="tab-pane">
          <div style="display:flex;flex-direction:column;gap:16px;">
            <div class="broker-list-card">
              <div class="broker-logo-box large" style="background:#EFF6FF;color:#F59E0B;">I</div>
              <div class="broker-details">
                <div class="broker-header">
                  <h3 class="broker-name">ICICI Direct</h3>
                  <span class="broker-type-badge">Full Service Broker</span>
                  <div class="broker-rating-pill">&#9733; 4.4</div>
                </div>
                <div class="broker-features">
                  <span class="feat-tag">3-in-1 Account</span>
                  <span class="feat-tag">Research Reports</span>
                  <span class="feat-tag">Global Investing</span>
                </div>
              </div>
              <div class="broker-pricing">
                <div class="price-item">
                  <span class="price-label">Delivery</span>
                  <span class="price-value">0.55%</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Intraday</span>
                  <span class="price-value">0.05%</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Account Opening</span>
                  <span class="price-value">Free</span>
                </div>
              </div>
              <div class="broker-actions">
                <a href="${prefix}brokers/prostocks.html" class="btn btn-primary" style="text-decoration:none;">Open Account</a>
              </div>
            </div>
            <div class="broker-list-card">
              <div class="broker-logo-box large" style="background:#EFF6FF;color:#1D4ED8;">H</div>
              <div class="broker-details">
                <div class="broker-header">
                  <h3 class="broker-name">HDFC Securities</h3>
                  <span class="broker-type-badge">Full Service Broker</span>
                  <div class="broker-rating-pill">&#9733; 4.2</div>
                </div>
                <div class="broker-features">
                  <span class="feat-tag">HDFC Bank Link</span>
                  <span class="feat-tag">Daily Research</span>
                  <span class="feat-tag">Wealth Tools</span>
                </div>
              </div>
              <div class="broker-pricing">
                <div class="price-item">
                  <span class="price-label">Delivery</span>
                  <span class="price-value">0.50%</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Intraday</span>
                  <span class="price-value">0.05%</span>
                </div>
                <div class="price-item">
                  <span class="price-label">Account Opening</span>
                  <span class="price-value">&#8377;999</span>
                </div>
              </div>
              <div class="broker-actions">
                <a href="${prefix}brokers/prostocks.html" class="btn btn-primary" style="text-decoration:none;">Open Account</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      $(Ad-Leaderboard "brokersindex-top-ad")

      $(Ad-Leaderboard "brokersindex-bot-main-ad")
  </div>

</div>
"@
    }

    # ============================================================
    # PROSTOCKS BROKER PAGE
    # ============================================================
    elseif ($page -match "brokers/prostocks") {
        $titleDisplay = "ProStocks Review"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}brokers/index.html">Brokers</a><span class="sep">/</span><span class="current">ProStocks</span></div>
  <h1 class="page-hero-title">ProStocks Review 2026 <span class="sponsored-label">FEATURED</span></h1>
  <p class="page-hero-desc">Flat-fee discount broker with &#8377;15 per order pricing. Complete review, account opening guide, and comparison.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  
<div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:24px;margin-bottom:24px;">
        <div style="display:flex;align-items:center;gap:20px;margin-bottom:24px;flex-wrap:wrap;">
          <div class="broker-logo-box" style="width:80px;height:80px;font-size:28px;">P</div>
          <div>
            <h2 style="font-size:22px;font-weight:800;margin-bottom:4px;">ProStocks</h2>
            <div style="font-size:14px;color:var(--text-muted);margin-bottom:8px;">Discount Broker &bull; SEBI Registered &bull; BSE &amp; NSE Member</div>
            <div class="broker-rating" style="font-size:16px;">&#11088;&#11088;&#11088;&#11088; 4.3 / 5.0 &bull; <span style="color:var(--text-muted);font-size:13px;">Based on 1,240 reviews</span></div>
          </div>
          <div style="margin-left:auto;"><a href="#" class="btn btn-primary" style="padding:12px 24px;font-size:15px;font-weight:700;text-decoration:none;">Open Free Account &rarr;</a></div>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:12px;">
          <div style="background:#F8FAFC;padding:14px;border-radius:8px;text-align:center;"><div style="font-size:10px;font-weight:700;color:var(--text-muted);text-transform:uppercase;">Account Opening</div><div style="font-size:16px;font-weight:800;margin-top:4px;color:var(--success-color);">FREE</div></div>

          <div style="background:#F8FAFC;padding:14px;border-radius:8px;text-align:center;"><div style="font-size:10px;font-weight:700;color:var(--text-muted);text-transform:uppercase;">Equity Delivery</div><div style="font-size:16px;font-weight:800;margin-top:4px;color:var(--success-color);">&#8377;0</div></div>

          <div style="background:#F8FAFC;padding:14px;border-radius:8px;text-align:center;"><div style="font-size:10px;font-weight:700;color:var(--text-muted);text-transform:uppercase;">Intraday / F&amp;O</div><div style="font-size:16px;font-weight:800;margin-top:4px;">&#8377;15</div></div>

          <div style="background:#F8FAFC;padding:14px;border-radius:8px;text-align:center;"><div style="font-size:10px;font-weight:700;color:var(--text-muted);text-transform:uppercase;">AMC (Demat)</div><div style="font-size:16px;font-weight:800;margin-top:4px;">&#8377;450/yr</div></div>

        </div>
      </div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:24px;">
        <div style="background:#DCFCE7;border:1px solid #86EFAC;border-radius:var(--radius-sm);padding:20px;">
          <h4 style="font-weight:700;color:#059669;margin-bottom:12px;">&#10003; Pros</h4>
          <ul style="font-size:13px;line-height:2;padding-left:16px;color:#065F46;">
            <li>Flat &#8377;15 per order (all segments)</li>
            <li>Unlimited monthly trading plans</li>
            <li>Free equity delivery</li>
            <li>IPO application via UPI</li>
            <li>NRI demat account available</li>
            <li>Strong research reports</li>
          </ul>
        </div>
        <div style="background:#FEE2E2;border:1px solid #FCA5A5;border-radius:var(--radius-sm);padding:20px;">
          <h4 style="font-weight:700;color:#B91C1C;margin-bottom:12px;">&#10007; Cons</h4>
          <ul style="font-size:13px;line-height:2;padding-left:16px;color:#7F1D1D;">
            <li>No currency derivatives</li>
            <li>Limited branches (online only)</li>
            <li>App UX less polished than Zerodha</li>
            <li>No advisory services</li>
          </ul>
        </div>
      </div>
      <div class="faq-section"><h2>ProStocks FAQs</h2><div class="faq-list">
        <div class="faq-item"><button class="faq-question">How to open a ProStocks account? <span class="faq-icon">+</span></button><div class="faq-answer"><p>Visit the ProStocks website, click "Open Account", complete KYC using Aadhaar-based e-KYC, submit PAN and bank details. Account opens within 24-48 hours.</p></div></div>

        <div class="faq-item"><button class="faq-question">Can I apply for IPOs via ProStocks? <span class="faq-icon">+</span></button><div class="faq-answer"><p>Yes. ProStocks supports IPO applications via UPI mandate (ASBA) directly from the trading platform. No extra charges for IPO applications.</p></div></div>

      </div></div>

    </div>

    <div class="sidebar-col">$sidebar</div>
  </div>
</div>
"@
    }

    # ============================================================
    # STOCKS  -  MARKET TODAY
    # ============================================================
    elseif ($page -match "stocks/index") {
        $titleDisplay = "Market Today"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">Market Today</span></div>
  <h1 class="page-hero-title">Stock Market Today</h1>
  <p class="page-hero-desc">Live market overview  -  indices, movers, most active stocks and sector performance.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="market-index-cards">
    <div class="market-index-card up"><div class="idx-name">NIFTY 50</div><div class="idx-val">24,836</div><div class="idx-change">+142 (+0.57%)</div></div>

    <div class="market-index-card up"><div class="idx-name">SENSEX</div><div class="idx-val">81,247</div><div class="idx-change">+489 (+0.61%)</div></div>

    <div class="market-index-card down"><div class="idx-name">BANK NIFTY</div><div class="idx-val">52,180</div><div class="idx-change">-218 (-0.42%)</div></div>

    <div class="market-index-card up"><div class="idx-name">NIFTY IT</div><div class="idx-val">39,420</div><div class="idx-change">+387 (+0.99%)</div></div>

    <div class="market-index-card up"><div class="idx-name">NIFTY AUTO</div><div class="idx-val">22,940</div><div class="idx-change">+204 (+0.90%)</div></div>

    <div class="market-index-card down"><div class="idx-name">NIFTY PHARMA</div><div class="idx-val">18,762</div><div class="idx-change">-112 (-0.59%)</div></div>

  </div>
  <div class="tab-container">
    <div class="tab-bar">
      <button class="tab-btn active" data-tab="mkt-gainers">Top Gainers</button>
      <button class="tab-btn" data-tab="mkt-losers">Top Losers</button>
      <button class="tab-btn" data-tab="mkt-active">Most Active</button>
    </div>
    <div id="mkt-gainers" class="tab-pane active">
      <div class="table-container"><table><thead><tr><th>Symbol</th><th>Company</th><th>LTP</th><th>Change</th><th>% Change</th><th>Volume</th></tr></thead>
      <tbody>
        <tr><td class="text-blue">TCS</td><td>Tata Consultancy</td><td>4,120</td><td class="text-green">+45.2</td><td class="text-green">+1.10%</td><td>28.4L</td></tr>
        <tr><td class="text-blue">HCLTECH</td><td>HCL Technologies</td><td>1,357</td><td class="text-green">+12.4</td><td class="text-green">+0.92%</td><td>19.2L</td></tr>
        <tr><td class="text-blue">GRASIM</td><td>Grasim Industries</td><td>3,380</td><td class="text-green">+57.5</td><td class="text-green">+1.73%</td><td>12.8L</td></tr>
      </tbody></table></div>
    </div>
    <div id="mkt-losers" class="tab-pane">
      <div class="table-container"><table><thead><tr><th>Symbol</th><th>Company</th><th>LTP</th><th>Change</th><th>% Change</th><th>Volume</th></tr></thead>
      <tbody>
        <tr><td class="text-blue">ETERNAL</td><td>Eternal Ltd</td><td>310</td><td class="text-red">-4.75</td><td class="text-red">-1.51%</td><td>42.1L</td></tr>
        <tr><td class="text-blue">DRREDDYS</td><td>Dr Reddy's</td><td>1,158</td><td class="text-red">-13.20</td><td class="text-red">-1.13%</td><td>8.2L</td></tr>
      </tbody></table></div>
    </div>
    <div id="mkt-active" class="tab-pane">
      <div class="table-container"><table><thead><tr><th>Symbol</th><th>LTP</th><th>% Change</th><th>Volume</th><th>Turnover</th></tr></thead>
      <tbody>
        <tr><td class="text-blue">ETERNAL</td><td>310</td><td class="text-red">-1.51%</td><td>42.1L</td><td>&#8377;1,302 Cr</td></tr>
        <tr><td class="text-blue">RELIANCE</td><td>2,840</td><td class="text-green">+0.38%</td><td>32.8L</td><td>&#8377;9,315 Cr</td></tr>
      </tbody></table></div>
    </div>
  </div>

</div>
"@
    }

    # ============================================================
    # STOCKS  -  GAINERS / LOSERS / MOST ACTIVE / 52W HIGH / LOW / BULK / BLOCK / CORPORATE / RESULTS / SHAREHOLDING
    # ============================================================
    elseif ($page -match "stocks/") {
        $pageName = ($page -split '/')[-1] -replace '\.html', ''
        $plainPName = $pageName -replace '-', ' '
        $titleDisplay = (Get-Culture).TextInfo.ToTitleCase($plainPName)
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}stocks/index.html">Market</a><span class="sep">/</span><span class="current">$titleDisplay</span></div>
  <h1 class="page-hero-title">$titleDisplay</h1>
  <p class="page-hero-desc">Live market data for $titleDisplay. Updated in real-time.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  
  $(Ad-Leaderboard "stocks-top-ad")
<div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div class="filter-bar">
        <select><option>NIFTY 50</option><option>NIFTY 500</option><option>All NSE</option><option>All BSE</option></select>
        <select><option>All Sectors</option><option>IT</option><option>Banking</option><option>Pharma</option></select>
        <button class="btn-filter">Filter</button>
      </div>
      <div class="table-container">
        <table><thead><tr><th>Symbol</th><th>Company</th><th>LTP (&#8377;)</th><th>Change (&#8377;)</th><th>% Change</th><th>Volume</th><th>Value (Cr)</th></tr></thead>
        <tbody>
          <tr><td class="text-blue">TCS</td><td><div class="company-cell"><div class="company-avatar" style="font-size:10px;">TCS</div>Tata Consultancy Services</div></td><td>4,120</td><td class="text-green">+45.2</td><td class="text-green">+1.10%</td><td>28.4L</td><td>1,170</td></tr>
          <tr><td class="text-blue">INFY</td><td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#10B981,#059669);font-size:10px;">INF</div>Infosys Ltd</div></td><td>1,540</td><td class="text-red">-12.1</td><td class="text-red">-0.78%</td><td>21.3L</td><td>328</td></tr>
          <tr><td class="text-blue">RELIANCE</td><td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#F59E0B,#D97706);font-size:10px;">REL</div>Reliance Industries</div></td><td>2,840</td><td class="text-green">+10.8</td><td class="text-green">+0.38%</td><td>32.8L</td><td>9,315</td></tr>
          <tr><td class="text-blue">HDFCBANK</td><td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#EF4444,#DC2626);font-size:10px;">HDF</div>HDFC Bank Ltd</div></td><td>1,720</td><td class="text-green">+8.4</td><td class="text-green">+0.49%</td><td>18.2L</td><td>313</td></tr>
          <tr><td class="text-blue">ETERNAL</td><td><div class="company-cell"><div class="company-avatar" style="background:linear-gradient(135deg,#8B5CF6,#7C3AED);font-size:10px;">ETR</div>Eternal Ltd</div></td><td>310</td><td class="text-red">-4.75</td><td class="text-red">-1.51%</td><td>42.1L</td><td>1,302</td></tr>
        </tbody></table>
      </div>
      <div class="pagination"><button>&laquo;</button><button class="active">1</button><button>2</button><button>3</button><button>&raquo;</button></div>
    </div>

      $(Ad-Leaderboard "stocks-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>

</div>
"@
    }

    # ============================================================
    # MUTUAL FUNDS
    # ============================================================
    elseif ($page -match "mutual-funds/index") {
        $titleDisplay = "Mutual Funds India"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">Mutual Funds</span></div>
  <h1 class="page-hero-title">Mutual Funds in India</h1>
  <p class="page-hero-desc">Explore top-performing mutual funds  -  equity, debt, hybrid and index funds. Compare returns, AUM and expense ratios.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div class="stat-cards">
    <div class="stat-card accent"><div class="stat-label">Total AMCs</div><div class="stat-value">44</div></div>

    <div class="stat-card"><div class="stat-label">Total Schemes</div><div class="stat-value">2,500+</div></div>

    <div class="stat-card positive"><div class="stat-label">Avg 5Y Return</div><div class="stat-value">18.4%</div><div class="stat-sub">Equity Funds</div></div>

    <div class="stat-card accent"><div class="stat-label">Total AUM</div><div class="stat-value">&#8377;58L Cr</div></div>

  </div>
  <div class="tab-container">
    <div class="tab-bar">
      <button class="tab-btn active" data-tab="mf-equity">Equity</button>
      <button class="tab-btn" data-tab="mf-debt">Debt</button>
      <button class="tab-btn" data-tab="mf-hybrid">Hybrid</button>
      <button class="tab-btn" data-tab="mf-index">Index</button>
      <button class="tab-btn" data-tab="mf-elss">ELSS</button>
    </div>
    <div id="mf-equity" class="tab-pane active">
      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:16px;">
        <div class="mf-card"><div class="mf-name">Parag Parikh Flexi Cap Fund</div><div class="mf-type">Flexi Cap &bull; PPFAS AMC</div><div class="mf-returns"><div class="mf-return-item"><div class="ret-label">1Y</div><div class="ret-val">28.4%</div></div>
<div class="mf-return-item"><div class="ret-label">3Y</div><div class="ret-val">22.1%</div></div>
<div class="mf-return-item"><div class="ret-label">5Y</div><div class="ret-val">24.8%</div></div>
</div></div>

        <div class="mf-card"><div class="mf-name">Mirae Asset Large Cap Fund</div><div class="mf-type">Large Cap &bull; Mirae AMC</div><div class="mf-returns"><div class="mf-return-item"><div class="ret-label">1Y</div><div class="ret-val">21.2%</div></div>
<div class="mf-return-item"><div class="ret-label">3Y</div><div class="ret-val">18.4%</div></div>
<div class="mf-return-item"><div class="ret-label">5Y</div><div class="ret-val">20.1%</div></div>
</div></div>

        <div class="mf-card"><div class="mf-name">SBI Small Cap Fund</div><div class="mf-type">Small Cap &bull; SBI AMC</div><div class="mf-returns"><div class="mf-return-item"><div class="ret-label">1Y</div><div class="ret-val">34.8%</div></div>
<div class="mf-return-item"><div class="ret-label">3Y</div><div class="ret-val">28.2%</div></div>
<div class="mf-return-item"><div class="ret-label">5Y</div><div class="ret-val">32.4%</div></div>
</div></div>

      </div>
    </div>
    <div id="mf-debt" class="tab-pane"><p style="padding:20px 0;color:var(--text-muted);">Debt fund listings will appear here.</p></div>
    <div id="mf-hybrid" class="tab-pane"><p style="padding:20px 0;color:var(--text-muted);">Hybrid fund listings will appear here.</p></div>
    <div id="mf-index" class="tab-pane"><p style="padding:20px 0;color:var(--text-muted);">Index fund listings will appear here.</p></div>
    <div id="mf-elss" class="tab-pane"><p style="padding:20px 0;color:var(--text-muted);">ELSS (Tax Saving) fund listings will appear here.</p></div>
  </div>

</div>
"@
    }

    # ============================================================
    # MUTUAL FUND  -  INDIVIDUAL FUND
    # ============================================================
    elseif ($page -match "mutual-funds/fund") {
        $titleDisplay = "Fund Details"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}mutual-funds/index.html">Mutual Funds</a><span class="sep">/</span><span class="current">Parag Parikh Flexi Cap</span></div>
  <h1 class="page-hero-title">Parag Parikh Flexi Cap Fund - Direct Growth</h1>
  <p class="page-hero-desc">Flexi Cap Equity Fund &bull; PPFAS Asset Management</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  
  $(Ad-Leaderboard "mutualfundsfund-top-ad")
<div class="page-layout" style="max-width:100%;padding:0;">
    <div class="main-col">
      <div style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:24px;margin-bottom:24px;">
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:20px;">
          <div style="text-align:center;"><div style="font-size:10px;font-weight:700;color:var(--text-muted);">NAV</div><div style="font-size:22px;font-weight:800;">&#8377;68.42</div></div>

          <div style="text-align:center;"><div style="font-size:10px;font-weight:700;color:var(--text-muted);">AUM</div><div style="font-size:22px;font-weight:800;">&#8377;68,240 Cr</div></div>

          <div style="text-align:center;"><div style="font-size:10px;font-weight:700;color:var(--text-muted);">Expense Ratio</div><div style="font-size:22px;font-weight:800;">0.58%</div></div>

          <div style="text-align:center;"><div style="font-size:10px;font-weight:700;color:var(--text-muted);">Min SIP</div><div style="font-size:22px;font-weight:800;">&#8377;1,000</div></div>

        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:12px;">
          <div style="background:#F0FDF4;padding:12px;border-radius:8px;text-align:center;"><div style="font-size:11px;font-weight:700;color:#059669;">1 Year Return</div><div style="font-size:20px;font-weight:800;color:#059669;">28.4%</div></div>

          <div style="background:#F0FDF4;padding:12px;border-radius:8px;text-align:center;"><div style="font-size:11px;font-weight:700;color:#059669;">3 Year CAGR</div><div style="font-size:20px;font-weight:800;color:#059669;">22.1%</div></div>

          <div style="background:#F0FDF4;padding:12px;border-radius:8px;text-align:center;"><div style="font-size:11px;font-weight:700;color:#059669;">5 Year CAGR</div><div style="font-size:20px;font-weight:800;color:#059669;">24.8%</div></div>

        </div>
      </div>
      <div class="chart-placeholder" style="height:250px;margin-bottom:24px;"><div class="chart-icon">&#128202;</div><div class="chart-label">NAV Performance Chart</div></div>

    </div>

      $(Ad-Leaderboard "mutualfundsfund-bot-main-ad")
    <div class="sidebar-col">$sidebar</div>
  </div>
</div>
"@
    }

    # ============================================================
    # LEARN  -  INDEX
    # ============================================================
    elseif ($page -match "learn/index") {
        $titleDisplay = "Learning Centre"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">Learn</span></div>
  <h1 class="page-hero-title">IPOSETU Learning Centre</h1>
  <p class="page-hero-desc">Master investing  -  from IPO basics to advanced stock analysis and mutual fund strategies.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:16px;">
    <a href="${prefix}learn/ipo-guide.html" style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:20px;text-decoration:none;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='var(--shadow-hover)'" onmouseout="this.style.boxShadow='none'">
      <div style="font-size:32px;margin-bottom:12px;">&#128218;</div>
      <h3 style="font-size:15px;font-weight:800;color:var(--primary-color);margin-bottom:6px;">IPO Guide</h3>
      <p style="font-size:12px;color:var(--text-muted);">Everything about IPO investing from basics to application.</p>
    </a>
    <a href="${prefix}learn/asba.html" style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:20px;text-decoration:none;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='var(--shadow-hover)'" onmouseout="this.style.boxShadow='none'">
      <div style="font-size:32px;margin-bottom:12px;">&#128181;</div>
      <h3 style="font-size:15px;font-weight:800;color:var(--primary-color);margin-bottom:6px;">ASBA Guide</h3>
      <p style="font-size:12px;color:var(--text-muted);">Learn how ASBA works and how to apply via banking portals.</p>
    </a>
    <a href="${prefix}learn/gmp-guide.html" style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:20px;text-decoration:none;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='var(--shadow-hover)'" onmouseout="this.style.boxShadow='none'">
      <div style="font-size:32px;margin-bottom:12px;">&#128200;</div>
      <h3 style="font-size:15px;font-weight:800;color:var(--primary-color);margin-bottom:6px;">GMP Guide</h3>
      <p style="font-size:12px;color:var(--text-muted);">Understand Grey Market Premium and listing gain projections.</p>
    </a>
    <a href="${prefix}learn/glossary.html" style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:20px;text-decoration:none;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='var(--shadow-hover)'" onmouseout="this.style.boxShadow='none'">
      <div style="font-size:32px;margin-bottom:12px;">&#128270;</div>
      <h3 style="font-size:15px;font-weight:800;color:var(--primary-color);margin-bottom:6px;">Financial Glossary</h3>
      <p style="font-size:12px;color:var(--text-muted);">Definitions for 500+ financial terms and acronyms.</p>
    </a>
    <a href="${prefix}ipo/faqs.html" style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:20px;text-decoration:none;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='var(--shadow-hover)'" onmouseout="this.style.boxShadow='none'">
      <div style="font-size:32px;margin-bottom:12px;">&#10067;</div>
      <h3 style="font-size:15px;font-weight:800;color:var(--primary-color);margin-bottom:6px;">Investor FAQs</h3>
      <p style="font-size:12px;color:var(--text-muted);">Answers to the most common questions about IPOs and investing.</p>
    </a>
    <a href="${prefix}tools/sip-calculator.html" style="background:#fff;border:1px solid var(--border-color);border-radius:var(--radius-md);padding:20px;text-decoration:none;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='var(--shadow-hover)'" onmouseout="this.style.boxShadow='none'">
      <div style="font-size:32px;margin-bottom:12px;">&#127777;</div>
      <h3 style="font-size:15px;font-weight:800;color:var(--primary-color);margin-bottom:6px;">SIP Guide &amp; Calculator</h3>
      <p style="font-size:12px;color:var(--text-muted);">Learn SIP investing and calculate future wealth.</p>
    </a>
  </div>
</div>
"@
    }

    # ============================================================
    # LEARN  -  IPO GUIDE
    # ============================================================
    elseif ($page -match "ipo-guide") {
        $titleDisplay = "IPO Guide"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}learn/index.html">Learn</a><span class="sep">/</span><span class="current">IPO Guide</span></div>
  <h1 class="page-hero-title">Complete IPO Guide for Beginners</h1>
  <p class="page-hero-desc">Learn everything about Indian IPOs  -  what they are, how to apply, and how to make smart decisions.</p>
</div></div>
<div style="max-width:900px;margin:0 auto;padding:24px;">
  <div style="font-size:14px;line-height:1.9;color:var(--text-main);">
    <h2 style="font-size:20px;font-weight:800;margin:24px 0 12px;color:var(--primary-color);">What is an IPO?</h2>
    <p style="margin-bottom:16px;">An Initial Public Offering (IPO) is the process through which a private company offers its shares to the general public for the first time. After an IPO, the company's shares are listed on a stock exchange (NSE or BSE) and can be traded by anyone.</p>
    <h2 style="font-size:20px;font-weight:800;margin:24px 0 12px;color:var(--primary-color);">Why do companies launch IPOs?</h2>
    <p style="margin-bottom:16px;">Companies launch IPOs to raise capital for business expansion, repay debt, fund acquisitions, or allow early investors to exit. For investors, IPOs offer an opportunity to invest in a company at the ground level before it becomes publicly traded.</p>
    <h2 style="font-size:20px;font-weight:800;margin:24px 0 12px;color:var(--primary-color);">Types of IPO Investors</h2>
    <div class="table-container" style="margin-bottom:20px;">
      <table><thead><tr><th>Category</th><th>Who</th><th>Max Limit</th><th>Allocation</th></tr></thead>
      <tbody>
        <tr><td><strong>Retail (RII)</strong></td><td>Individual investors</td><td>&#8377;2 Lakh</td><td>35% of issue</td></tr>
        <tr><td><strong>NII (HNI)</strong></td><td>High Net Worth Individuals</td><td>&gt;&#8377;2 Lakh</td><td>15% of issue</td></tr>
        <tr><td><strong>QIB</strong></td><td>FIIs, Mutual Funds, Banks</td><td>No limit</td><td>50% of issue</td></tr>
        <tr><td><strong>Employee</strong></td><td>Company employees</td><td>Varies</td><td>Separately reserved</td></tr>
      </tbody></table>
    </div>
    <h2 style="font-size:20px;font-weight:800;margin:24px 0 12px;color:var(--primary-color);">Step-by-Step IPO Application Process</h2>
    <ol style="padding-left:20px;line-height:2.2;">
      <li>Open a Demat account with a SEBI-registered broker</li>
      <li>Link your bank account for ASBA/UPI mandate</li>
      <li>Find an open IPO on IPOSETU or your broker's platform</li>
      <li>Apply for minimum 1 lot at cut-off price</li>
      <li>Approve the UPI mandate from your bank app</li>
      <li>Wait for allotment (usually 6 working days after IPO close)</li>
      <li>If allotted, shares are credited to your demat account 1 day before listing</li>
    </ol>
  </div>

</div>
"@
    }

    # ============================================================
    # LEARN  -  ASBA GUIDE
    # ============================================================
    elseif ($page -match "learn/asba") {
        $titleDisplay = "What is ASBA?"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}learn/index.html">Learn</a><span class="sep">/</span><span class="current">What is ASBA</span></div>
  <h1 class="page-hero-title">ASBA (Application Supported by Blocked Amount)</h1>
  <p class="page-hero-desc">Understand how ASBA works, its benefits, and how to apply for an IPO via your bank account.</p>
</div></div>
<div style="max-width:900px;margin:0 auto;padding:24px;">
  <div style="font-size:14px;line-height:1.9;color:var(--text-main);">
    <h2 style="font-size:20px;font-weight:800;margin:24px 0 12px;color:var(--primary-color);">What is ASBA?</h2>
    <p style="margin-bottom:16px;">Application Supported by Blocked Amount (ASBA) is an IPO application mechanism developed by SEBI. It is mandatory for applying to public issues in India. Under ASBA, the application money is not debited from your bank account but is temporarily blocked until the allotment is finalized.</p>
    
    <h2 style="font-size:20px;font-weight:800;margin:24px 0 12px;color:var(--primary-color);">How ASBA Works</h2>
    <p style="margin-bottom:16px;">When you submit an IPO bid using ASBA, your bank blocks the bid amount in your savings account. The blocked funds continue to earn interest. If you are allotted shares, the matching amount is debited and transferred to the issuer company, and the remaining amount is unblocked. If you receive no allotment, the entire amount is unblocked.</p>
    
    <h2 style="font-size:20px;font-weight:800;margin:24px 0 12px;color:var(--primary-color);">Key Benefits of ASBA</h2>
    <ul style="padding-left:20px;line-height:2.2;margin-bottom:20px;">
      <li><strong>Earn Interest:</strong> Your funds remain in your account, earning savings account interest even during the application window.</li>
      <li><strong>No Refund Delays:</strong> Because the funds never leave your account, there is no wait time for receiving refunds or checks.</li>
      <li><strong>Mandatory Security:</strong> Blocks funds securely, ensuring that only genuine applications backed by funds are submitted to stock exchanges.</li>
    </ul>

    <h2 style="font-size:20px;font-weight:800;margin:24px 0 12px;color:var(--primary-color);">How to Apply using ASBA</h2>
    <p style="margin-bottom:16px;">You can apply via two primary routes:</p>
    <ol style="padding-left:20px;line-height:2.2;">
      <li><strong>Net Banking (Direct):</strong> Log in to your bank's net banking portal, navigate to the "IPO / ASBA" section, enter your Demat account details (DP ID and Client ID), choose the IPO, place your bid, and submit.</li>
      <li><strong>UPI-based ASBA:</strong> Place a bid on your broker's trading platform (like Zerodha or ProStocks) and approve the incoming UPI payment mandate in your UPI app (GPay, PhonePe, BHIM, etc.). This automatically blocks the funds in your linked bank account.</li>
    </ol>
  </div>
</div>
"@
    }

    # ============================================================
    # LEARN  -  GMP GUIDE
    # ============================================================
    elseif ($page -match "gmp-guide") {
        $titleDisplay = "Understanding GMP"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}learn/index.html">Learn</a><span class="sep">/</span><span class="current">Understanding GMP</span></div>
  <h1 class="page-hero-title">Grey Market Premium (GMP) Explained</h1>
  <p class="page-hero-desc">Learn what Grey Market Premium (GMP) is, how it is calculated, and how to use it to predict listing gains.</p>
</div></div>
<div style="max-width:900px;margin:0 auto;padding:24px;">
  <div style="font-size:14px;line-height:1.9;color:var(--text-main);">
    <h2 style="font-size:20px;font-weight:800;margin:24px 0 12px;color:var(--primary-color);">What is Grey Market Premium (GMP)?</h2>
    <p style="margin-bottom:16px;">The Grey Market is an unofficial, over-the-counter market where IPO shares and applications are traded before they are officially listed on a stock exchange. The Grey Market Premium (GMP) is the premium price at which shares are traded in this unofficial market.</p>
    
    <h2 style="font-size:20px;font-weight:800;margin:24px 0 12px;color:var(--primary-color);">How is GMP Used?</h2>
    <p style="margin-bottom:16px;">GMP acts as an early indicator of market sentiment and listing performance. For example, if an IPO's issue price is &#8377;100 and its current GMP is &#8377;30, it suggests that buyers are willing to purchase the shares unofficialy at &#8377;130. This predicts a listing price of &#8377;130 (a 30% listing gain).</p>
    
    <h2 style="font-size:20px;font-weight:800;margin:24px 0 12px;color:var(--primary-color);">Key Terms in the Grey Market</h2>
    <ul style="padding-left:20px;line-height:2.2;margin-bottom:20px;">
      <li><strong>Kostak Rate:</strong> The fixed amount an investor can earn by selling their IPO application before the allotment is declared.</li>
      <li><strong>Subject to Allotment (Sauda):</strong> An agreement where the transaction only gets executed if the seller is successfully allotted shares.</li>
    </ul>

    <h2 style="font-size:20px;font-weight:800;margin:24px 0 12px;color:var(--primary-color);">Should you rely solely on GMP?</h2>
    <p style="margin-bottom:16px;">While GMP is a helpful sentiment gauge, it is highly speculative and subject to manipulation by operators. You should always cross-verify GMP with the company's financial metrics, peer valuations, and subscription status before investing.</p>
  </div>
</div>
"@
    }

    # ============================================================
    # LEARN  -  GLOSSARY
    # ============================================================
    elseif ($page -match "glossary") {
        $titleDisplay = "Financial Glossary"
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><a href="${prefix}learn/index.html">Learn</a><span class="sep">/</span><span class="current">Glossary</span></div>
  <h1 class="page-hero-title">Financial Glossary</h1>
  <p class="page-hero-desc">500+ financial terms explained in plain English. Perfect for beginner and intermediate investors.</p>
</div></div>
<div style="max-width:900px;margin:0 auto;padding:24px;">
  <div class="alpha-nav">
    <a href="#a" class="active">A</a><a href="#b">B</a><a href="#c">C</a><a href="#d">D</a><a href="#e">E</a>
    <a href="#f">F</a><a href="#g">G</a><a href="#h">H</a><a href="#i">I</a><a href="#j">J</a>
    <a href="#k">K</a><a href="#l">L</a><a href="#m">M</a><a href="#n">N</a><a href="#o">O</a>
    <a href="#p">P</a><a href="#q">Q</a><a href="#r">R</a><a href="#s">S</a><a href="#t">T</a>
    <a href="#u">U</a><a href="#v">V</a><a href="#w">W</a><a href="#x">X</a><a href="#y">Y</a><a href="#z">Z</a>
  </div>
  <h2 id="a" style="font-size:18px;font-weight:800;margin:20px 0 12px;color:var(--primary-color);">A</h2>
  <div class="glossary-term"><h3>ASBA (Application Supported by Blocked Amount)</h3><p>A mechanism for IPO applications where the bid amount is blocked in your bank account but not debited until allotment. Mandatory for all IPO applications in India.</p></div>
  <div class="glossary-term"><h3>Allotment</h3><p>The process of distributing IPO shares to applicants. If an IPO is oversubscribed, retail allotment is done by lottery system.</p></div>
  <div class="glossary-term"><h3>Anchor Investor</h3><p>QIB investors who subscribe to an IPO one day before the issue opens. They receive allotment before the issue opens and are subject to a 30-day lock-in period.</p></div>
  <h2 id="b" style="font-size:18px;font-weight:800;margin:20px 0 12px;color:var(--primary-color);">B</h2>
  <div class="glossary-term"><h3>Basis of Allotment</h3><p>The official document published by the registrar showing how IPO shares were allocated across different investor categories after the IPO closes.</p></div>
  <div class="glossary-term"><h3>Book Building</h3><p>An IPO pricing mechanism where the issue price is determined based on investor bids received in the price band. Most mainboard IPOs in India use book building.</p></div>
  <h2 id="g" style="font-size:18px;font-weight:800;margin:20px 0 12px;color:var(--primary-color);">G</h2>
  <div class="glossary-term"><h3>GMP (Grey Market Premium)</h3><p>The premium at which IPO shares trade in the unofficial grey market before official listing. Not regulated by SEBI. GMP is an informal indicator and not a guaranteed listing price.</p></div>
  <h2 id="i" style="font-size:18px;font-weight:800;margin:20px 0 12px;color:var(--primary-color);">I</h2>
  <div class="glossary-term"><h3>IPO (Initial Public Offering)</h3><p>When a private company offers its shares to the public for the first time and gets listed on a stock exchange.</p></div>
  <div class="glossary-term"><h3>Issue Price</h3><p>The final price at which IPO shares are sold to investors. For book-built issues, this is determined after the bidding period closes.</p></div>
  <h2 id="l" style="font-size:18px;font-weight:800;margin:20px 0 12px;color:var(--primary-color);">L</h2>
  <div class="glossary-term"><h3>Lot Size</h3><p>The minimum number of shares an investor must bid for in an IPO. Retail investors must apply for at least 1 lot and maximum 13 lots (for mainboard IPOs).</p></div>
  <div class="glossary-term"><h3>Listing Gain</h3><p>The percentage gain or loss on the first day of trading, calculated as (Listing Price - Issue Price) / Issue Price &times; 100.</p></div>
  <h2 id="q" style="font-size:18px;font-weight:800;margin:20px 0 12px;color:var(--primary-color);">Q</h2>
  <div class="glossary-term"><h3>QIB (Qualified Institutional Buyer)</h3><p>Institutional investors including mutual funds, FIIs, banks, and insurance companies that are considered sophisticated enough to evaluate investment risks.</p></div>

</div>
"@
    }

    # ============================================================
    # CUSTOM PAGES (DO NOT OVERWRITE)
    # ============================================================
    elseif ($page -match "ipo-details" -or $page -match "advertise-with-us") {
        # Keep existing custom page content (don't overwrite)
        continue
    }

    # ============================================================
    # DEFAULT FALLBACK
    # ============================================================
    else {
        $categoryContent = @"
<div class="page-hero"><div class="container">
  <div class="breadcrumb"><a href="${prefix}index.html">Home</a><span class="sep">/</span><span class="current">$titleDisplay</span></div>
  <h1 class="page-hero-title">$titleDisplay</h1>
  <p class="page-hero-desc">Comprehensive data and insights for $titleDisplay.</p>
</div></div>
<div style="max-width:1400px;margin:0 auto;padding:24px;">
  <p style="color:var(--text-muted);font-size:14px;">Content for this section is coming soon.</p>

</div>
"@
    }

    # ============================================================
    # BUILD PAGE
    # ============================================================
    $content = @"
<!DOCTYPE html>
<html lang="en">
$pageHead
<body>
    $pageHeader

    $categoryContent

    $pageFooter
    $pageScripts
</body>
</html>
"@

    # Ensure directory exists
    $dir = Split-Path $page -Parent
    if ($dir -and -not (Test-Path $dir)) { New-Item -ItemType Directory -Path $dir -Force | Out-Null }

    $content | Set-Content -Path $page -Encoding UTF8
    Write-Host "Created $page"
}




