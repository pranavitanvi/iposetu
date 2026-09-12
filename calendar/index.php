<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Calendar – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Calendar on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
<style>
    * { font-family: 'Inter', sans-serif; box-sizing: border-box; }

    /* ── HERO ── */
    .cal-hero {
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 60%, #1e3a5f 100%);
        color: white; padding: 56px 60px; border-radius: 24px;
        margin: 40px 0 32px; position: relative; overflow: hidden;
    }
    .cal-hero::before {
        content: ''; position: absolute; right: -80px; top: -80px;
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(99,102,241,0.18) 0%, transparent 70%);
        border-radius: 50%;
    }
    .cal-hero::after {
        content: '📅'; position: absolute; right: 60px; top: 50%;
        transform: translateY(-50%); font-size: 110px; opacity: 0.07;
    }
    .cal-hero-tag { font-size: 11px; font-weight: 700; color: #818cf8; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 12px; }
    .cal-hero-title { font-size: 42px; font-weight: 900; letter-spacing: -1px; margin-bottom: 12px; }
    .cal-hero-desc { font-size: 15px; color: #94a3b8; max-width: 520px; line-height: 1.7; margin-bottom: 28px; }
    .legend { display: flex; gap: 12px; flex-wrap: wrap; }
    .legend-item { display: flex; align-items: center; gap: 6px; font-size: 12px; font-weight: 700; padding: 6px 14px; border-radius: 20px; }
    .leg-open   { background: rgba(16,185,129,0.15); color: #34d399; border: 1px solid rgba(16,185,129,0.25); }
    .leg-close  { background: rgba(239,68,68,0.15);  color: #f87171; border: 1px solid rgba(239,68,68,0.25); }
    .leg-allot  { background: rgba(234,179,8,0.15);  color: #fbbf24; border: 1px solid rgba(234,179,8,0.25); }
    .leg-list   { background: rgba(59,130,246,0.15); color: #60a5fa; border: 1px solid rgba(59,130,246,0.25); }

    /* ── STAT CARDS ── */
    .stat-row { display: grid; grid-template-columns: repeat(4,1fr); gap: 16px; margin-bottom: 32px; }
    .stat-card { background: white; border: 1px solid #e2e8f0; border-radius: 14px; padding: 20px 24px; display: flex; align-items: center; gap: 16px; box-shadow: 0 2px 8px rgba(0,0,0,0.03); transition: 0.2s; }
    .stat-card:hover { transform: translateY(-3px); box-shadow: 0 8px 20px rgba(0,0,0,0.07); }
    .stat-icon { width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; flex-shrink: 0; }
    .stat-val { font-size: 28px; font-weight: 900; color: #0f172a; line-height: 1; }
    .stat-lbl { font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-top: 4px; }

    /* ── LAYOUT ── */
    .cal-layout { display: grid; grid-template-columns: 1fr 320px; gap: 28px; align-items: start; }

    /* ── CALENDAR ── */
    .cal-box { background: white; border: 1px solid #e2e8f0; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 16px rgba(0,0,0,0.04); }
    .cal-nav { display: flex; align-items: center; justify-content: space-between; padding: 20px 24px; border-bottom: 1px solid #e2e8f0; }
    .cal-nav-title { font-size: 20px; font-weight: 800; color: #0f172a; }
    .cal-nav-btns { display: flex; gap: 8px; }
    .nav-btn { padding: 8px 16px; border: 1px solid #e2e8f0; background: white; border-radius: 8px; font-weight: 700; font-size: 14px; cursor: pointer; color: #475569; transition: 0.2s; }
    .nav-btn:hover { background: #f1f5f9; border-color: #cbd5e1; }
    .today-btn { background: #3b82f6; color: white; border-color: #3b82f6; }
    .today-btn:hover { background: #2563eb; }
    .cal-grid { display: grid; grid-template-columns: repeat(7,1fr); }
    .cal-head { padding: 12px 8px; text-align: center; font-size: 11px; font-weight: 800; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px; border-bottom: 1px solid #e2e8f0; background: #f8fafc; }
    .cal-day { min-height: 120px; padding: 8px; border-right: 1px solid #f1f5f9; border-bottom: 1px solid #f1f5f9; background: white; transition: 0.15s; vertical-align: top; cursor: default; }
    .cal-day:nth-child(7n) { border-right: none; }
    .cal-day.empty { background: #fafafa; }
    .cal-day.today { background: #eff6ff; }
    .cal-day.has-events:hover { background: #f8fafc; }
    .cal-num { display: inline-flex; width: 28px; height: 28px; align-items: center; justify-content: center; font-size: 13px; font-weight: 700; color: #64748b; border-radius: 50%; margin-bottom: 6px; }
    .cal-day.today .cal-num { background: #3b82f6; color: white; }
    .cal-event { padding: 3px 7px; border-radius: 5px; font-size: 10px; font-weight: 700; margin-bottom: 3px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; cursor: pointer; transition: 0.15s; border-left: 3px solid; }
    .cal-event:hover { opacity: 0.85; transform: translateX(1px); }
    .ev-open  { background: #ecfdf5; color: #065f46; border-color: #10b981; }
    .ev-close { background: #fef2f2; color: #991b1b; border-color: #ef4444; }
    .ev-allot { background: #fefce8; color: #854d0e; border-color: #eab308; }
    .ev-list  { background: #eff6ff; color: #1e40af; border-color: #3b82f6; }
    .more-badge { font-size: 10px; color: #94a3b8; font-weight: 600; padding: 2px 4px; }

    /* ── SIDEBAR ── */
    .sidebar-box { background: white; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 16px rgba(0,0,0,0.04); }
    .sidebar-head { padding: 16px 20px; background: #f8fafc; border-bottom: 1px solid #e2e8f0; font-size: 14px; font-weight: 800; color: #0f172a; display: flex; align-items: center; gap: 8px; }
    .upcoming-item { padding: 14px 20px; border-bottom: 1px solid #f1f5f9; cursor: pointer; transition: 0.15s; display: flex; gap: 12px; align-items: flex-start; }
    .upcoming-item:hover { background: #f8fafc; }
    .upcoming-item:last-child { border-bottom: none; }
    .upcoming-date-box { min-width: 44px; text-align: center; }
    .upcoming-day { font-size: 22px; font-weight: 900; color: #0f172a; line-height: 1; }
    .upcoming-mon { font-size: 10px; font-weight: 700; color: #94a3b8; text-transform: uppercase; }
    .upcoming-name { font-size: 13px; font-weight: 700; color: #0f172a; margin-bottom: 3px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 190px; }
    .upcoming-badge { font-size: 10px; font-weight: 700; padding: 2px 8px; border-radius: 10px; display: inline-block; }

    /* ── EVENT LIST TABLE ── */
    .events-section { margin-top: 32px; }
    .section-head { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; }
    .section-title { font-size: 22px; font-weight: 800; color: #0f172a; }
    .filter-tabs { display: flex; gap: 6px; }
    .ftab { padding: 6px 14px; border-radius: 20px; border: 1px solid #e2e8f0; background: white; font-size: 12px; font-weight: 700; color: #64748b; cursor: pointer; transition: 0.2s; }
    .ftab.active { background: #3b82f6; color: white; border-color: #3b82f6; }
    .events-table { width: 100%; border-collapse: collapse; background: white; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.03); }
    .events-table th { background: #f8fafc; padding: 12px 16px; text-align: left; font-size: 11px; font-weight: 800; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 1px solid #e2e8f0; }
    .events-table td { padding: 14px 16px; font-size: 13px; color: #334155; border-bottom: 1px solid #f1f5f9; }
    .events-table tr:last-child td { border-bottom: none; }
    .events-table tr:hover td { background: #f8fafc; }
    .type-badge { font-size: 10px; font-weight: 700; padding: 3px 8px; border-radius: 8px; }
    .type-main { background: #eff6ff; color: #1e40af; }
    .type-sme  { background: #fef9c3; color: #854d0e; }
    .status-pill { font-size: 10px; font-weight: 800; padding: 3px 10px; border-radius: 20px; }
    .pill-open     { background: #ecfdf5; color: #065f46; }
    .pill-upcoming { background: #fef9c3; color: #854d0e; }
    .pill-closed   { background: #f1f5f9; color: #475569; }
    .pill-listed   { background: #eff6ff; color: #1e40af; }

    .loading-state { text-align: center; padding: 60px 20px; color: #94a3b8; }
    .loading-spinner { width: 36px; height: 36px; border: 3px solid #e2e8f0; border-top-color: #3b82f6; border-radius: 50%; animation: spin 0.8s linear infinite; margin: 0 auto 16px; }
    @keyframes spin { to { transform: rotate(360deg); } }
    @keyframes fadeUp { from { opacity: 0; transform: translateY(12px); } to { opacity: 1; transform: translateY(0); } }
    .fade-in { animation: fadeUp 0.4s ease forwards; }

    @media (max-width: 900px) {
        .cal-layout { grid-template-columns: 1fr; }
        .stat-row { grid-template-columns: repeat(2,1fr); }
        .cal-hero { padding: 36px 24px; }
        .cal-hero-title { font-size: 28px; }
        .cal-day { min-height: 80px; }
    }
    @media (max-width: 480px) {
        .stat-row { grid-template-columns: 1fr 1fr; }
        .cal-event { font-size: 9px; }
        .filter-tabs { flex-wrap: wrap; }
    }
</style>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<div class="container" style="padding-bottom: 32px;">

    <!-- HERO -->
    <div class="cal-hero fade-in">
        <div class="cal-hero-tag">📅 Live IPO Calendar</div>
        <h1 class="cal-hero-title">IPO Master Calendar 2026</h1>
        <p class="cal-hero-desc">Never miss a critical date. Track upcoming IPO open dates, closing deadlines, allotment days, and listing dates — all in one place, updated daily.</p>
        <div class="legend">
            <span class="legend-item leg-open">● Opens</span>
            <span class="legend-item leg-close">● Closes</span>
            <span class="legend-item leg-allot">● Allotment</span>
            <span class="legend-item leg-list">● Listing</span>
        </div>
    </div>

    <!-- STATS -->
    <div class="stat-row" id="stat-row">
        <div class="stat-card"><div class="stat-icon" style="background:#eff6ff;">📊</div><div><div class="stat-val" id="s-total">—</div><div class="stat-lbl">Total IPOs</div></div></div>
        <div class="stat-card"><div class="stat-icon" style="background:#ecfdf5;">🟢</div><div><div class="stat-val" id="s-open">—</div><div class="stat-lbl">Open Now</div></div></div>
        <div class="stat-card"><div class="stat-icon" style="background:#fefce8;">⏳</div><div><div class="stat-val" id="s-upcoming">—</div><div class="stat-lbl">Upcoming</div></div></div>
        <div class="stat-card"><div class="stat-icon" style="background:#f5f3ff;">📈</div><div><div class="stat-val" id="s-listed">—</div><div class="stat-lbl">Listed</div></div></div>
    </div>

    <!-- MAIN LAYOUT -->
    <div class="cal-layout">

        <!-- CALENDAR BOX -->
        <div class="cal-box fade-in">
            <div class="cal-nav">
                <div class="cal-nav-title" id="cal-month-title">Loading...</div>
                <div class="cal-nav-btns">
                    <button class="nav-btn" id="cal-prev">← Prev</button>
                    <button class="nav-btn today-btn" id="cal-today">Today</button>
                    <button class="nav-btn" id="cal-next">Next →</button>
                </div>
            </div>
            <div class="cal-grid" id="cal-grid">
                <div style="grid-column:span 7;">
                    <div class="loading-state"><div class="loading-spinner"></div>Loading calendar...</div>
                </div>
            </div>
        </div>

        <!-- SIDEBAR: Upcoming Events -->
        <div class="sidebar-box fade-in" style="position:sticky;top:80px;">
            <div class="sidebar-head">🔔 Next 30 Days</div>
            <div id="upcoming-list">
                <div class="loading-state" style="padding:30px;"><div class="loading-spinner"></div></div>
            </div>
        </div>
    </div>

    <!-- EVENT TABLE -->
    <div class="events-section fade-in">
        <div class="section-head">
            <div class="section-title">All IPO Events — <span id="table-month-label" style="color:#3b82f6;"></span></div>
            <div class="filter-tabs">
                <button class="ftab active" data-filter="all">All</button>
                <button class="ftab" data-filter="Mainboard">Mainboard</button>
                <button class="ftab" data-filter="SME">SME</button>
            </div>
        </div>
        <table class="events-table">
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Type</th>
                    <th>Open Date</th>
                    <th>Close Date</th>
                    <th>Allotment</th>
                    <th>Listing Date</th>
                    <th>Price Band</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="events-tbody">
                <tr><td colspan="8"><div class="loading-state"><div class="loading-spinner"></div></div></td></tr>
            </tbody>
        </table>
        <div id="events-pagination" style="margin-top: 24px; display: flex; justify-content: center;"></div>
    </div>

</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var allIpos = [];
    var now = new Date();
    var currentYear = now.getFullYear();
    var currentMonth = now.getMonth();
    var currentFilter = 'all';
    var currentPage = 1;
    var pageSize = 20;

    var monthNames = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];
    var shortMonthNames = [
        "Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];

    function parseDate(str) {
        if (!str) return null;
        var parts = str.split(' ')[0].split('-');
        if (parts.length === 3) {
            var y = parseInt(parts[0], 10);
            var m = parseInt(parts[1], 10) - 1;
            var d = parseInt(parts[2], 10);
            if (!isNaN(y) && !isNaN(m) && !isNaN(d)) {
                return new Date(y, m, d);
            }
        }
        return null;
    }

    function formatDate(dt) {
        if (!dt) return '--';
        var d = parseDate(dt);
        if (!d) return dt;
        return d.getDate() + ' ' + shortMonthNames[d.getMonth()] + ' ' + d.getFullYear();
    }

    function isSameDay(d1, d2) {
        return d1.getFullYear() === d2.getFullYear() &&
               d1.getMonth() === d2.getMonth() &&
               d1.getDate() === d2.getDate();
    }

    // Fetch data
    fetch('<?= BASE_URL ?>api/get_ipos.php')
        .then(function(res) { return res.json(); })
        .then(function(data) {
            allIpos = (data && data.data) ? data.data : [];
            updateStats();
            renderCalendar(currentYear, currentMonth);
            renderUpcomingSidebar();
            renderTable(1);
        })
        .catch(function(err) {
            console.error("Error loading calendar data:", err);
            document.getElementById('cal-grid').innerHTML = '<div style="grid-column:span 7; padding:40px; text-align:center; color:#ef4444;">Failed to load calendar events.</div>';
            document.getElementById('events-tbody').innerHTML = '<tr><td colspan="8" style="text-align:center; color:#ef4444; padding:30px;">Failed to load data.</td></tr>';
            document.getElementById('upcoming-list').innerHTML = '<div style="padding:20px; text-align:center; color:#ef4444;">Failed to load events.</div>';
        });

    function updateStats() {
        var sTotal = document.getElementById('s-total');
        var sOpen = document.getElementById('s-open');
        var sUpcoming = document.getElementById('s-upcoming');
        var sListed = document.getElementById('s-listed');

        if (sTotal) sTotal.innerText = allIpos.length;
        if (sOpen) sOpen.innerText = allIpos.filter(function(i) { return (i.status || '').toUpperCase() === 'OPEN'; }).length;
        if (sUpcoming) sUpcoming.innerText = allIpos.filter(function(i) { return (i.status || '').toUpperCase() === 'UPCOMING'; }).length;
        if (sListed) sListed.innerText = allIpos.filter(function(i) { return (i.status || '').toUpperCase() === 'LISTED'; }).length;
    }

    function renderCalendar(year, month) {
        var calTitle = document.getElementById('cal-month-title');
        var calGrid = document.getElementById('cal-grid');
        if (!calTitle || !calGrid) return;

        calTitle.innerText = monthNames[month] + " " + year;

        var html = '';
        var dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        dayNames.forEach(function(d) {
            html += '<div class="cal-head">' + d + '</div>';
        });

        var firstDayIdx = new Date(year, month, 1).getDay();
        var totalDays = new Date(year, month + 1, 0).getDate();

        // Leading empty cells
        for (var i = 0; i < firstDayIdx; i++) {
            html += '<div class="cal-day empty"></div>';
        }

        // Days of month
        for (var day = 1; day <= totalDays; day++) {
            var thisDate = new Date(year, month, day);
            var isToday = (day === now.getDate() && month === now.getMonth() && year === now.getFullYear());

            // Collect events for this day
            var dayEvents = [];
            allIpos.forEach(function(ipo) {
                var dOpen = parseDate(ipo.open_date);
                var dClose = parseDate(ipo.close_date);
                var dAllot = parseDate(ipo.allotment_date);
                var dList = parseDate(ipo.listing_date);

                if (dOpen && isSameDay(dOpen, thisDate)) {
                    dayEvents.push({ ipo: ipo, cls: 'ev-open', label: ipo.name + ' (Opens)' });
                }
                if (dClose && isSameDay(dClose, thisDate)) {
                    dayEvents.push({ ipo: ipo, cls: 'ev-close', label: ipo.name + ' (Closes)' });
                }
                if (dAllot && isSameDay(dAllot, thisDate)) {
                    dayEvents.push({ ipo: ipo, cls: 'ev-allot', label: ipo.name + ' (Allotment)' });
                }
                if (dList && isSameDay(dList, thisDate)) {
                    dayEvents.push({ ipo: ipo, cls: 'ev-list', label: ipo.name + ' (Listing)' });
                }
            });

            var cellCls = 'cal-day' + (isToday ? ' today' : '') + (dayEvents.length > 0 ? ' has-events' : '');
            html += '<div class="' + cellCls + '">';
            html += '<div class="cal-num">' + day + '</div>';

            var showCount = Math.min(dayEvents.length, 3);
            for (var e = 0; e < showCount; e++) {
                var ev = dayEvents[e];
                var detailUrl = '<?= BASE_URL ?>ipo/detail.php?id=' + ev.ipo.id;
                html += '<div class="cal-event ' + ev.cls + '" title="' + ev.label.replace(/"/g, '&quot;') + '" onclick="window.location.href=\'' + detailUrl + '\'">' + ev.ipo.name + '</div>';
            }

            if (dayEvents.length > 3) {
                var more = dayEvents.length - 3;
                var tooltips = dayEvents.slice(3).map(function(ev) { return ev.label; }).join(' &#10; ');
                html += '<div class="more-badge" title="' + tooltips.replace(/"/g, '&quot;') + '">+' + more + ' more</div>';
            }

            html += '</div>';
        }

        // Trailing empty cells
        var totalCells = firstDayIdx + totalDays;
        var rem = (7 - (totalCells % 7)) % 7;
        for (var r = 0; r < rem; r++) {
            html += '<div class="cal-day empty"></div>';
        }

        calGrid.innerHTML = html;
    }

    function renderUpcomingSidebar() {
        var listEl = document.getElementById('upcoming-list');
        if (!listEl) return;

        var upcomingEvents = [];
        var todayStart = new Date(now.getFullYear(), now.getMonth(), now.getDate());
        var limitDate = new Date(todayStart.getTime() + 30 * 24 * 60 * 60 * 1000);

        allIpos.forEach(function(ipo) {
            var pairs = [
                { dt: parseDate(ipo.open_date), type: 'Opens', bg: '#ecfdf5', color: '#065f46' },
                { dt: parseDate(ipo.close_date), type: 'Closes', bg: '#fef2f2', color: '#991b1b' },
                { dt: parseDate(ipo.allotment_date), type: 'Allotment', bg: '#fefce8', color: '#854d0e' },
                { dt: parseDate(ipo.listing_date), type: 'Listing', bg: '#eff6ff', color: '#1e40af' }
            ];

            pairs.forEach(function(p) {
                if (p.dt && p.dt >= todayStart && p.dt <= limitDate) {
                    upcomingEvents.push({
                        ipo: ipo,
                        date: p.dt,
                        type: p.type,
                        bg: p.bg,
                        color: p.color
                    });
                }
            });
        });

        upcomingEvents.sort(function(a, b) {
            return a.date.getTime() - b.date.getTime();
        });

        if (upcomingEvents.length === 0) {
            listEl.innerHTML = '<div style="padding:24px; text-align:center; color:#94a3b8; font-size:13px;">No events scheduled for the next 30 days.</div>';
            return;
        }

        var html = '';
        upcomingEvents.slice(0, 15).forEach(function(item) {
            var detailUrl = '<?= BASE_URL ?>ipo/detail.php?id=' + item.ipo.id;
            html += '<div class="upcoming-item" onclick="window.location.href=\'' + detailUrl + '\'">';
            html += '<div class="upcoming-date-box">';
            html += '<div class="upcoming-day">' + item.date.getDate() + '</div>';
            html += '<div class="upcoming-mon">' + shortMonthNames[item.date.getMonth()] + '</div>';
            html += '</div>';
            html += '<div style="flex:1; min-width:0;">';
            html += '<div class="upcoming-name" title="' + item.ipo.name.replace(/"/g, '&quot;') + '">' + item.ipo.name + '</div>';
            html += '<span class="upcoming-badge" style="background:' + item.bg + '; color:' + item.color + ';">' + item.type + '</span>';
            html += '</div>';
            html += '</div>';
        });

        listEl.innerHTML = html;
    }

    function renderTable(page) {
        var tbody = document.getElementById('events-tbody');
        var monthLbl = document.getElementById('table-month-label');
        if (!tbody) return;

        if (monthLbl) {
            monthLbl.innerText = currentFilter === 'all' ? 'All Types' : currentFilter;
        }

        var filtered = allIpos.filter(function(ipo) {
            if (currentFilter === 'Mainboard') {
                return (ipo.type || '').toLowerCase() === 'mainboard';
            }
            if (currentFilter === 'SME') {
                return (ipo.type || '').toLowerCase() === 'sme';
            }
            return true;
        });

        if (filtered.length === 0) {
            tbody.innerHTML = '<tr><td colspan="8" style="text-align:center; padding:30px; color:#94a3b8;">No IPO events found.</td></tr>';
            renderPagination(0, 1);
            return;
        }

        var totalPages = Math.ceil(filtered.length / pageSize) || 1;
        if (page < 1) page = 1;
        if (page > totalPages) page = totalPages;
        currentPage = page;

        var start = (currentPage - 1) * pageSize;
        var end = start + pageSize;
        var pagedItems = filtered.slice(start, end);

        var html = '';
        pagedItems.forEach(function(ipo) {
            var detailUrl = '<?= BASE_URL ?>ipo/detail.php?id=' + ipo.id;
            var isSme = (ipo.type || '').toLowerCase() === 'sme';
            var typeBadge = isSme ? '<span class="type-badge type-sme">SME</span>' : '<span class="type-badge type-main">Mainboard</span>';

            var st = (ipo.status || 'UPCOMING').toUpperCase();
            var statusPill = '<span class="status-pill pill-upcoming">UPCOMING</span>';
            if (st === 'OPEN') statusPill = '<span class="status-pill pill-open">OPEN</span>';
            else if (st === 'CLOSED') statusPill = '<span class="status-pill pill-closed">CLOSED</span>';
            else if (st === 'LISTED') statusPill = '<span class="status-pill pill-listed">LISTED</span>';

            html += '<tr>';
            html += '<td><a href="' + detailUrl + '" style="font-weight:700; color:#0f172a; text-decoration:none;">' + ipo.name + '</a></td>';
            html += '<td>' + typeBadge + '</td>';
            html += '<td>' + formatDate(ipo.open_date) + '</td>';
            html += '<td>' + formatDate(ipo.close_date) + '</td>';
            html += '<td>' + formatDate(ipo.allotment_date) + '</td>';
            html += '<td>' + formatDate(ipo.listing_date) + '</td>';
            html += '<td>' + (ipo.price_band || '--') + '</td>';
            html += '<td>' + statusPill + '</td>';
            html += '</tr>';
        });

        tbody.innerHTML = html;
        renderPagination(totalPages, currentPage);
    }

    function renderPagination(totalPages, current) {
        var pagEl = document.getElementById('events-pagination');
        if (!pagEl) return;
        if (totalPages <= 1) {
            pagEl.innerHTML = '';
            return;
        }

        var html = '<div class="pagination-container" style="display:flex; gap:6px; align-items:center;">';
        if (current > 1) {
            html += '<button class="nav-btn" onclick="window.calGoPage(' + (current - 1) + ')">&larr; Prev</button>';
        }

        for (var p = 1; p <= totalPages; p++) {
            if (p === 1 || p === totalPages || (p >= current - 2 && p <= current + 2)) {
                var activeStyle = (p === current) ? 'background:#3b82f6; color:white; border-color:#3b82f6;' : '';
                html += '<button class="nav-btn" style="' + activeStyle + '" onclick="window.calGoPage(' + p + ')">' + p + '</button>';
            } else if (p === current - 3 || p === current + 3) {
                html += '<span style="color:#94a3b8; padding:0 4px;">...</span>';
            }
        }

        if (current < totalPages) {
            html += '<button class="nav-btn" onclick="window.calGoPage(' + (current + 1) + ')">Next &rarr;</button>';
        }
        html += '</div>';

        pagEl.innerHTML = html;
    }

    window.calGoPage = function(page) {
        renderTable(page);
    };

    // Nav buttons
    var btnPrev = document.getElementById('cal-prev');
    var btnNext = document.getElementById('cal-next');
    var btnToday = document.getElementById('cal-today');

    if (btnPrev) {
        btnPrev.addEventListener('click', function() {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            renderCalendar(currentYear, currentMonth);
        });
    }

    if (btnNext) {
        btnNext.addEventListener('click', function() {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            renderCalendar(currentYear, currentMonth);
        });
    }

    if (btnToday) {
        btnToday.addEventListener('click', function() {
            currentYear = now.getFullYear();
            currentMonth = now.getMonth();
            renderCalendar(currentYear, currentMonth);
        });
    }

    // Filter tabs
    var filterTabs = document.querySelectorAll('.ftab');
    filterTabs.forEach(function(tab) {
        tab.addEventListener('click', function() {
            filterTabs.forEach(function(t) { t.classList.remove('active'); });
            tab.classList.add('active');
            currentFilter = tab.getAttribute('data-filter') || 'all';
            renderTable(1);
        });
    });
});
</script>
</body>
</html>
