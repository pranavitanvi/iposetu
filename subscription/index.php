<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Subscription – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Subscription on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
* { font-family: 'Inter', sans-serif; box-sizing: border-box; }

/* ── HERO ── */
.sub-hero {
    background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 60%, #312e81 100%);
    color: white; padding: 56px 60px; border-radius: 24px;
    margin: 40px 0 32px; position: relative; overflow: hidden;
}
.sub-hero::before {
    content: ''; position: absolute; right: -60px; top: -60px;
    width: 380px; height: 380px;
    background: radial-gradient(circle, rgba(139,92,246,0.2) 0%, transparent 70%);
    border-radius: 50%;
}
.sub-hero::after {
    content: '📊'; position: absolute; right: 60px; top: 50%;
    transform: translateY(-50%); font-size: 100px; opacity: 0.06;
}
.hero-tag { font-size: 11px; font-weight: 700; color: #a78bfa; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 12px; }
.hero-title { font-size: 42px; font-weight: 900; letter-spacing: -1px; margin-bottom: 12px; }
.hero-desc { font-size: 15px; color: #94a3b8; max-width: 520px; line-height: 1.7; }

/* ── STAT CARDS ── */
.stats-row { display: grid; grid-template-columns: repeat(4,1fr); gap: 16px; margin-bottom: 32px; }
.stat-card { background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 22px 24px; display: flex; align-items: center; gap: 16px; box-shadow: 0 2px 8px rgba(0,0,0,0.03); transition: 0.2s; }
.stat-card:hover { transform: translateY(-3px); box-shadow: 0 10px 24px rgba(0,0,0,0.07); }
.stat-icon { width: 50px; height: 50px; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 22px; flex-shrink: 0; }
.stat-val { font-size: 26px; font-weight: 900; color: #0f172a; line-height: 1; }
.stat-lbl { font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; margin-top: 5px; }

/* ── CATEGORY CARDS ── */
.cat-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 20px; margin-bottom: 32px; }
.cat-card { background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px; text-align: center; position: relative; overflow: hidden; transition: 0.25s; box-shadow: 0 2px 8px rgba(0,0,0,0.03); }
.cat-card::after { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px; border-radius: 0; }
.cat-card:hover { transform: translateY(-5px); box-shadow: 0 16px 40px rgba(0,0,0,0.08); }
.cat-qib::after { background: linear-gradient(90deg, #7c3aed, #c084fc); }
.cat-nii::after { background: linear-gradient(90deg, #1d4ed8, #60a5fa); }
.cat-retail::after { background: linear-gradient(90deg, #059669, #34d399); }
.cat-icon { font-size: 36px; margin-bottom: 12px; }
.cat-label { font-size: 12px; font-weight: 800; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 4px; }
.cat-name { font-size: 15px; font-weight: 700; color: #0f172a; margin-bottom: 16px; }
.cat-val { font-size: 32px; font-weight: 900; }
.cat-desc { font-size: 12px; color: #94a3b8; margin-top: 8px; line-height: 1.5; }

/* ── FILTERS ── */
.filter-bar { display: flex; gap: 10px; flex-wrap: wrap; align-items: center; margin-bottom: 24px; background: white; padding: 16px 20px; border: 1px solid #e2e8f0; border-radius: 14px; box-shadow: 0 2px 8px rgba(0,0,0,0.03); }
.filter-label { font-size: 13px; font-weight: 700; color: #64748b; }
.ftab { padding: 7px 16px; border-radius: 20px; border: 1px solid #e2e8f0; background: white; font-size: 12px; font-weight: 700; color: #64748b; cursor: pointer; transition: 0.2s; }
.ftab.active { background: #3b82f6; color: white; border-color: #3b82f6; }
.ftab:hover:not(.active) { background: #f1f5f9; }
.sort-select { padding: 8px 14px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 13px; font-weight: 600; color: #475569; background: white; cursor: pointer; margin-left: auto; }

/* ── MAIN LAYOUT ── */
.main-layout { display: grid; grid-template-columns: 1fr 340px; gap: 28px; align-items: start; }

/* ── TOP IPO SPOTLIGHT ── */
.spotlight-box { background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; margin-bottom: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.03); }
.spotlight-title { font-size: 13px; font-weight: 800; color: #64748b; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 16px; }
.bar-row { margin-bottom: 18px; }
.bar-label { display: flex; justify-content: space-between; margin-bottom: 7px; font-size: 13px; font-weight: 700; color: #0f172a; }
.bar-track { height: 18px; background: #f1f5f9; border-radius: 9px; overflow: hidden; }
.bar-fill { height: 100%; border-radius: 9px; width: 0; transition: width 1.4s cubic-bezier(0.22,1,0.36,1); display: flex; align-items: center; justify-content: flex-end; padding-right: 10px; font-size: 11px; font-weight: 800; color: white; }

/* ── CHART ── */
.chart-box { background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; margin-bottom: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.03); }
.chart-title { font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 20px; }
.chart-wrap { height: 280px; }

/* ── TABLE ── */
.table-box { background: white; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.03); }
.table-head-row { display: flex; justify-content: space-between; align-items: center; padding: 18px 20px; border-bottom: 1px solid #e2e8f0; }
.table-head-title { font-size: 16px; font-weight: 800; color: #0f172a; }
.sub-table { width: 100%; border-collapse: collapse; }
.sub-table th { background: #f8fafc; padding: 12px 16px; text-align: left; font-size: 11px; font-weight: 800; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 1px solid #e2e8f0; white-space: nowrap; cursor: pointer; }
.sub-table th:hover { color: #0f172a; }
.sub-table td { padding: 14px 16px; font-size: 13px; color: #334155; border-bottom: 1px solid #f1f5f9; }
.sub-table tr:last-child td { border-bottom: none; }
.sub-table tr:hover td { background: #f8fafc; }
.sub-val { font-size: 15px; font-weight: 800; }
.sub-hot { color: #dc2626; }
.sub-warm { color: #d97706; }
.sub-cool { color: #16a34a; }
.type-badge { font-size: 10px; font-weight: 700; padding: 3px 8px; border-radius: 8px; }
.type-main { background: #eff6ff; color: #1e40af; }
.type-sme  { background: #fef9c3; color: #854d0e; }
.status-pill { font-size: 10px; font-weight: 800; padding: 3px 10px; border-radius: 20px; }
.pill-open     { background: #ecfdf5; color: #065f46; }
.pill-upcoming { background: #fef9c3; color: #854d0e; }
.pill-closed   { background: #f1f5f9; color: #475569; }
.pill-listed   { background: #eff6ff; color: #1e40af; }

/* ── SIDEBAR ── */
.sidebar-box { background: white; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.03); position: sticky; top: 80px; }
.sidebar-head { padding: 16px 20px; border-bottom: 1px solid #e2e8f0; font-size: 14px; font-weight: 800; color: #0f172a; background: #f8fafc; }
.leaderboard-item { padding: 14px 20px; border-bottom: 1px solid #f1f5f9; display: flex; align-items: center; gap: 12px; transition: 0.15s; }
.leaderboard-item:hover { background: #f8fafc; }
.leaderboard-item:last-child { border-bottom: none; }
.rank-num { width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 900; flex-shrink: 0; }
.rank-1 { background: #fef9c3; color: #854d0e; }
.rank-2 { background: #f1f5f9; color: #475569; }
.rank-3 { background: #fff7ed; color: #c2410c; }
.rank-n { background: #f8fafc; color: #94a3b8; }
.ld-name { font-size: 12px; font-weight: 700; color: #0f172a; flex: 1; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.ld-val  { font-size: 13px; font-weight: 800; color: #dc2626; flex-shrink: 0; }

/* ── LOADING ── */
.loading-state { text-align: center; padding: 60px 20px; color: #94a3b8; }
.spinner { width: 34px; height: 34px; border: 3px solid #e2e8f0; border-top-color: #3b82f6; border-radius: 50%; animation: spin 0.8s linear infinite; margin: 0 auto 16px; }
@keyframes spin { to { transform: rotate(360deg); } }

/* ── EDITORIAL ── */
.sub-editorial { background: #0f172a; padding: 80px 0; margin-top: 60px; color: white; }
.ed-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 32px; margin-top: 40px; }
.ed-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); padding: 32px; border-radius: 16px; transition: 0.2s; }
.ed-card:hover { background: rgba(255,255,255,0.08); }

/* ── PAGINATION ── */
.pagination-row { display: flex; justify-content: space-between; align-items: center; padding: 14px 20px; border-top: 1px solid #e2e8f0; background: #f8fafc; }
.pg-info { font-size: 13px; color: #64748b; font-weight: 500; }
.pg-btns { display: flex; gap: 6px; }
.pg-btn { padding: 7px 14px; border: 1px solid #e2e8f0; background: white; border-radius: 6px; cursor: pointer; font-size: 13px; font-weight: 600; color: #475569; transition: 0.2s; }
.pg-btn:hover:not(:disabled) { background: #f1f5f9; }
.pg-btn:disabled { opacity: 0.4; cursor: not-allowed; }
.pg-btn.active { background: #3b82f6; color: white; border-color: #3b82f6; }

@media (max-width: 1024px) { .main-layout { grid-template-columns: 1fr; } .sidebar-box { position: static; } }
@media (max-width: 768px) { .stats-row { grid-template-columns: 1fr 1fr; } .cat-grid { grid-template-columns: 1fr; } .sub-hero { padding: 36px 24px; } .hero-title { font-size: 28px; } .ed-grid { grid-template-columns: 1fr; } }
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<div class="container" style="padding-bottom:80px;">

    <!-- HERO -->
    <div class="sub-hero">
        <div class="hero-tag">📊 Live Subscription Analytics</div>
        <h1 class="hero-title">IPO Subscription Data 2026</h1>
        <p class="hero-desc">Track real-time QIB, NII, and Retail subscription figures for all Mainboard and SME IPOs. Find the most oversubscribed IPOs at a glance.</p>
    </div>

    <!-- STATS -->
    <div class="stats-row">
        <div class="stat-card"><div class="stat-icon" style="background:#f5f3ff;">📊</div><div><div class="stat-val" id="s-total">—</div><div class="stat-lbl">IPOs with Sub Data</div></div></div>
        <div class="stat-card"><div class="stat-icon" style="background:#fef2f2;">🔥</div><div><div class="stat-val" id="s-max">—</div><div class="stat-lbl">Highest Subscription</div></div></div>
        <div class="stat-card"><div class="stat-icon" style="background:#fef9c3;">⚡</div><div><div class="stat-val" id="s-over100">—</div><div class="stat-lbl">Over 100x Subscribed</div></div></div>
        <div class="stat-card"><div class="stat-icon" style="background:#ecfdf5;">✅</div><div><div class="stat-val" id="s-avg">—</div><div class="stat-lbl">Avg Subscription</div></div></div>
    </div>

    <!-- CATEGORY CARDS -->
    <div class="cat-grid" id="cat-grid">
        <div class="cat-card cat-qib"><div class="cat-icon">🏆</div><div class="cat-label" style="color:#7c3aed;">Highest Subscribed</div><div class="cat-name">Most Oversubscribed IPO</div><div class="cat-val" id="top-qib" style="color:#7c3aed;">—</div><div class="cat-desc">The single most subscribed IPO by total times. Huge institutional + retail demand.</div></div>
        <div class="cat-card cat-nii"><div class="cat-icon">⚡</div><div class="cat-label" style="color:#1d4ed8;">Over 10x Subscribed</div><div class="cat-name">Significantly Oversubscribed</div><div class="cat-val" id="top-nii" style="color:#1d4ed8;">—</div><div class="cat-desc">IPOs subscribed 10x or more — high demand, tough allotment chances.</div></div>
        <div class="cat-card cat-retail"><div class="cat-icon">🔥</div><div class="cat-label" style="color:#059669;">Over 100x Subscribed</div><div class="cat-name">Massively Oversubscribed</div><div class="cat-val" id="top-retail" style="color:#059669;">—</div><div class="cat-desc">IPOs subscribed 100x+ — extremely rare allotment, huge listing pop expected.</div></div>
    </div>

    <!-- FILTER BAR -->
    <div class="filter-bar">
        <span class="filter-label">Filter:</span>
        <button class="ftab active" data-status="">All Status</button>
        <button class="ftab" data-status="OPEN">🟢 Open</button>
        <button class="ftab" data-status="UPCOMING">⏳ Upcoming</button>
        <button class="ftab" data-status="CLOSED">⚫ Closed</button>
        <button class="ftab" data-status="LISTED">📈 Listed</button>
        <div style="width:1px;height:24px;background:#e2e8f0;margin:0 4px;"></div>
        <button class="ftab" data-type="" id="type-all">All Types</button>
        <button class="ftab" data-type="Mainboard" id="type-main">Mainboard</button>
        <button class="ftab" data-type="SME" id="type-sme">SME</button>
        <select class="sort-select" id="sort-select">
            <option value="total_sub">Sort: Total Sub ↓</option>
            <option value="open_date">Sort: Open Date ↓</option>
        </select>
    </div>

    <!-- MAIN LAYOUT -->
    <div class="main-layout">

        <!-- LEFT COLUMN -->
        <div>
            <!-- Chart -->
            <div class="chart-box">
                <div class="chart-title">Top 10 Most Subscribed IPOs</div>
                <div class="chart-wrap"><canvas id="subChart"></canvas></div>
            </div>

            <!-- Table -->
            <div class="table-box">
                <div class="table-head-row">
                    <div class="table-head-title">Subscription Data Table</div>
                    <div id="table-count" style="font-size:13px;color:#94a3b8;font-weight:600;"></div>
                </div>
                <table class="sub-table" id="sub-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Company</th>
                            <th>Type</th>
                            <th>Industry</th>
                            <th>Open Date</th>
                            <th>Total Subscription</th>
                            <th>Issue Size</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="sub-tbody">
                        <tr><td colspan="8"><div class="loading-state"><div class="spinner"></div>Loading subscription data...</div></td></tr>
                    </tbody>
                </table>
                <div class="pagination-row" id="pagination-row" style="display:none;">
                    <div class="pg-info" id="pg-info"></div>
                    <div class="pg-btns" id="pg-btns"></div>
                </div>
            </div>
        </div>

        <!-- SIDEBAR -->
        <div>
            <!-- Spotlight bar -->
            <div class="spotlight-box" id="spotlight-box">
                <div class="spotlight-title">🏆 Top Subscribed IPO</div>
                <div class="loading-state" style="padding:20px;"><div class="spinner"></div></div>
            </div>

            <!-- Leaderboard -->
            <div class="sidebar-box">
                <div class="sidebar-head">🏆 Top 10 Leaderboard</div>
                <div id="leaderboard">
                    <div class="loading-state" style="padding:30px;"><div class="spinner"></div></div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Editorial -->
<section class="sub-editorial">
    <div class="container">
        <div style="text-align:center;margin-bottom:48px;">
            <div style="color:#a78bfa;font-size:11px;font-weight:800;letter-spacing:2px;text-transform:uppercase;margin-bottom:12px;">Subscription Psychology</div>
            <h2 style="font-size:36px;font-weight:900;letter-spacing:-0.5px;">Understanding IPO Subscription</h2>
            <p style="font-size:16px;color:#94a3b8;max-width:500px;margin:12px auto 0;line-height:1.7;">The domino effect of institutional bidding on retail demand.</p>
        </div>
        <div class="ed-grid">
            <div class="ed-card">
                <h3 style="font-size:18px;font-weight:800;color:white;margin-bottom:14px;">🏛️ The QIB Anchor Effect</h3>
                <p style="color:#94a3b8;line-height:1.8;font-size:14px;">QIBs rarely bid on Day 1 or 2. They deploy massive capital strictly in the final hours of Day 3. A sudden 50x spike in QIB category at 2:00 PM on the last day acts as an "Anchor of Safety", triggering a wave of last-minute retail applications and sending total subscription skyrocketing.</p>
            </div>
            <div class="ed-card">
                <h3 style="font-size:18px;font-weight:800;color:white;margin-bottom:14px;">💼 The NII Over-Leverage Warning</h3>
                <p style="color:#94a3b8;line-height:1.8;font-size:14px;">HNIs often use extreme leverage (borrowed funds) to bid for IPOs — pure arbitrage via listing gains to cover loan interest. If the NII category hits 100x but GMP drops before listing, these leveraged investors will desperately offload shares at open, crushing the stock regardless of fundamentals.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
<script>
(function() {
    const API = '<?= BASE_URL ?>api/get_subscription.php';
    const PER_PAGE = 20;
    let allData = [], filteredData = [];
    let currentPage = 1;
    let activeStatus = '', activeType = '', activeSort = 'total_sub';
    let chartInstance = null;

    // ── Fetch ──────────────────────────────────────────────────────────
    function fetchData() {
        const params = new URLSearchParams({ sort: activeSort });
        if (activeStatus) params.append('status', activeStatus);
        if (activeType)   params.append('type',   activeType);

        fetch(API + '?' + params)
            .then(r => r.json())
            .then(resp => {
                if (resp.status !== 'success') return;
                allData      = resp.data || [];
                filteredData = allData;

                // Stats
                document.getElementById('s-total').textContent    = resp.count;
                document.getElementById('s-max').textContent      = (resp.stats.max_subscription || 0).toFixed(0) + 'x';
                document.getElementById('s-over100').textContent  = resp.stats.over_100x;
                document.getElementById('s-avg').textContent      = (resp.stats.avg_subscription || 0).toFixed(1) + 'x';

                // ── Category cards ──
                const sorted = [...allData].sort((a,b) => (b.total_sub||0) - (a.total_sub||0));
                const top1 = sorted[0] || {};
                const over10  = allData.filter(i => (i.total_sub||0) >= 10).length;
                const over100 = allData.filter(i => (i.total_sub||0) >= 100).length;

                document.getElementById('top-qib').textContent    = top1.name ? top1.total_sub.toFixed(1) + 'x' : '—';
                document.getElementById('top-nii').textContent    = over10 + ' IPOs';
                document.getElementById('top-retail').textContent = over100 + ' IPOs';

                currentPage = 1;
                renderTable();
                renderChart();
                renderSpotlight();
                renderLeaderboard();
            })
            .catch(err => {
                document.getElementById('sub-tbody').innerHTML =
                    '<tr><td colspan="8"><div style="text-align:center;padding:40px;color:#ef4444;">Failed to load data.</div></td></tr>';
            });
    }

    // ── Table ──────────────────────────────────────────────────────────
    function renderTable() {
        const total  = filteredData.length;
        const pages  = Math.ceil(total / PER_PAGE);
        const start  = (currentPage - 1) * PER_PAGE;
        const slice  = filteredData.slice(start, start + PER_PAGE);

        document.getElementById('table-count').textContent = total + ' IPOs';

        if (!slice.length) {
            document.getElementById('sub-tbody').innerHTML =
                '<tr><td colspan="8" style="text-align:center;padding:40px;color:#94a3b8;">No data found.</td></tr>';
            document.getElementById('pagination-row').style.display = 'none';
            return;
        }

        const statusCls = { OPEN:'pill-open', UPCOMING:'pill-upcoming', CLOSED:'pill-closed', LISTED:'pill-listed' };
        const typeCls   = { Mainboard:'type-main', SME:'type-sme' };

        let html = '';
        slice.forEach((ipo, i) => {
            const rank = start + i + 1;
            const total_val = ipo.total_sub || 0;
            const valCls = total_val >= 100 ? 'sub-hot' : total_val >= 10 ? 'sub-warm' : 'sub-cool';
            const sc = statusCls[ipo.status] || 'pill-closed';
            const tc = typeCls[ipo.type] || 'type-main';

            html += `<tr>
                <td style="color:#94a3b8;font-weight:700;">${rank}</td>
                <td><div style="font-weight:700;color:#0f172a;">${ipo.name}</div></td>
                <td><span class="type-badge ${tc}">${ipo.type||'IPO'}</span></td>
                <td style="font-size:12px;color:#64748b;">${ipo.industry||'—'}</td>
                <td style="font-size:12px;">${ipo.open_date ? ipo.open_date : '—'}</td>
                <td><span class="sub-val ${valCls}">${total_val > 0 ? total_val + 'x' : '—'}</span></td>
                <td style="font-size:12px;color:#475569;">${ipo.issue_size ? '₹'+ipo.issue_size+' Cr' : '—'}</td>
                <td><span class="status-pill ${sc}">${ipo.status}</span></td>
            </tr>`;
        });
        document.getElementById('sub-tbody').innerHTML = html;

        // Pagination
        const pgRow = document.getElementById('pagination-row');
        const pgInfo = document.getElementById('pg-info');
        const pgBtns = document.getElementById('pg-btns');
        pgRow.style.display = 'flex';
        pgInfo.textContent = `Showing ${start+1}–${Math.min(start+PER_PAGE, total)} of ${total}`;

        let btns = `<button class="pg-btn" id="pg-prev" ${currentPage===1?'disabled':''}>← Prev</button>`;
        for (let p = 1; p <= pages; p++) {
            if (p === 1 || p === pages || Math.abs(p - currentPage) <= 1) {
                btns += `<button class="pg-btn ${p===currentPage?'active':''}" data-page="${p}">${p}</button>`;
            } else if (Math.abs(p - currentPage) === 2) {
                btns += `<span style="padding:6px 4px;color:#94a3b8;">…</span>`;
            }
        }
        btns += `<button class="pg-btn" id="pg-next" ${currentPage===pages?'disabled':''}>Next →</button>`;
        pgBtns.innerHTML = btns;

        pgBtns.querySelectorAll('[data-page]').forEach(btn => {
            btn.onclick = () => { currentPage = +btn.dataset.page; renderTable(); };
        });
        const prev = document.getElementById('pg-prev');
        const next = document.getElementById('pg-next');
        if (prev) prev.onclick = () => { if (currentPage > 1) { currentPage--; renderTable(); } };
        if (next) next.onclick = () => { if (currentPage < pages) { currentPage++; renderTable(); } };
    }

    // ── Chart — horizontal bar of top 10 total subscriptions ──────────
    function renderChart() {
        const top10 = [...filteredData].sort((a,b) => (b.total_sub||0)-(a.total_sub||0)).slice(0,10);
        if (!top10.length) return;

        const labels = top10.map(i => i.name.length > 20 ? i.name.substring(0,20)+'…' : i.name);
        const values = top10.map(i => i.total_sub || 0);
        const colors = values.map(v => v >= 100 ? '#dc2626' : v >= 10 ? '#d97706' : '#16a34a');

        const ctx = document.getElementById('subChart');
        if (!ctx) return;
        if (chartInstance) chartInstance.destroy();

        chartInstance = new Chart(ctx, {
            type: 'bar',
            data: {
                labels,
                datasets: [{
                    label: 'Total Subscription (x times)',
                    data: values,
                    backgroundColor: colors,
                    borderRadius: 6,
                    borderSkipped: false,
                }]
            },
            options: {
                indexAxis: 'y',
                responsive: true, maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: { callbacks: { label: ctx => ' ' + ctx.raw + 'x subscribed' } }
                },
                scales: {
                    x: { title: { display: true, text: 'Subscription (x times)' }, grid: { color: '#f1f5f9' } },
                    y: { grid: { display: false } }
                }
            }
        });
    }

    // ── Spotlight — total_sub bar for top IPO ─────────────────────────
    function renderSpotlight() {
        if (!filteredData.length) return;
        const sorted = [...filteredData].sort((a,b)=>(b.total_sub||0)-(a.total_sub||0));
        const top3 = sorted.slice(0,3);
        const maxVal = top3[0].total_sub || 1;

        let bars = top3.map((ipo,i) => {
            const pct = Math.min(((ipo.total_sub||0)/maxVal)*100, 100).toFixed(0);
            const colors = ['linear-gradient(90deg,#7c3aed,#c084fc)','linear-gradient(90deg,#1d4ed8,#60a5fa)','linear-gradient(90deg,#059669,#34d399)'];
            return `<div class="bar-row">
                <div class="bar-label"><span style="font-size:12px;max-width:140px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;display:block;">${ipo.name}</span><span style="font-weight:900;color:#dc2626;">${(ipo.total_sub||0).toFixed(1)}x</span></div>
                <div class="bar-track"><div class="bar-fill" style="background:${colors[i]};" data-w="${pct}%">${(ipo.total_sub||0).toFixed(0)}x</div></div>
            </div>`;
        }).join('');

        document.getElementById('spotlight-box').innerHTML =
            '<div class="spotlight-title">🏆 Top 3 Most Subscribed</div>' + bars;

        setTimeout(() => {
            document.querySelectorAll('.bar-fill').forEach(b => b.style.width = b.dataset.w);
        }, 100);
    }

    // ── Leaderboard ────────────────────────────────────────────────────
    function renderLeaderboard() {
        const top10 = filteredData.slice(0, 10);
        if (!top10.length) { document.getElementById('leaderboard').innerHTML = '<div style="padding:20px;text-align:center;color:#94a3b8;">No data.</div>'; return; }
        const rankCls = ['rank-1','rank-2','rank-3'];
        let html = '';
        top10.forEach((ipo, i) => {
            const cls = rankCls[i] || 'rank-n';
            html += `<div class="leaderboard-item">
                <div class="rank-num ${cls}">${i+1}</div>
                <div class="ld-name" title="${ipo.name}">${ipo.name}</div>
                <div class="ld-val">${(ipo.total_sub||0).toFixed(1)}x</div>
            </div>`;
        });
        document.getElementById('leaderboard').innerHTML = html;
    }

    // ── Filter Handlers ────────────────────────────────────────────────
    document.querySelectorAll('[data-status]').forEach(btn => {
        btn.onclick = () => {
            document.querySelectorAll('[data-status]').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            activeStatus = btn.dataset.status;
            currentPage  = 1;
            fetchData();
        };
    });

    document.querySelectorAll('[data-type]').forEach(btn => {
        btn.onclick = () => {
            document.querySelectorAll('[data-type]').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            activeType  = btn.dataset.type;
            currentPage = 1;
            fetchData();
        };
    });

    document.getElementById('sort-select').onchange = function() {
        activeSort  = this.value;
        currentPage = 1;
        fetchData();
    };

    // ── Init ───────────────────────────────────────────────────────────
    fetchData();
})();
</script>
</body>
</html>

