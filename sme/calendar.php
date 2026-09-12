<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
﻿<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Calendar – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Calendar on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<style>
    .timeline-container { max-width: 1000px; margin: 0 auto; padding: 40px 24px; font-family: 'Inter', sans-serif; }
    .timeline-header { text-align: center; margin-bottom: 40px; }
    .timeline-title { font-size: 36px; font-weight: 900; color: #0f172a; margin-bottom: 16px; }
    
    /* VISUAL CALENDAR COMPONENT */
    .visual-calendar { background: white; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; margin-bottom: 60px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05); }
    .cal-header { background: #0f172a; color: white; padding: 16px 24px; font-weight: 800; font-size: 18px; display: flex; justify-content: space-between; align-items: center; }
    .cal-grid { display: grid; grid-template-columns: repeat(7, 1fr); border-top: 1px solid #e2e8f0; }
    .cal-day-header { padding: 12px; text-align: center; font-size: 12px; font-weight: 800; color: #64748b; border-bottom: 1px solid #e2e8f0; border-right: 1px solid #e2e8f0; background: #f8fafc; text-transform: uppercase; }
    .cal-cell { min-height: 100px; padding: 8px; border-bottom: 1px solid #e2e8f0; border-right: 1px solid #e2e8f0; }
    .cal-cell:nth-child(7n) { border-right: none; }
    .cal-date { font-size: 14px; font-weight: 700; color: #94a3b8; margin-bottom: 8px; }
    .cal-event { font-size: 11px; font-weight: 700; padding: 4px 8px; border-radius: 4px; margin-bottom: 4px; display: block; line-height: 1.4; }
    .ev-open { background: #dbeafe; color: #1e3a8a; border-left: 2px solid #3b82f6; }
    .ev-close { background: #fee2e2; color: #991b1b; border-left: 2px solid #ef4444; }
    .ev-list { background: #dcfce7; color: #166534; border-left: 2px solid #10b981; }
    
    .lifecycle-path { position: relative; padding-left: 40px; margin-bottom: 40px; }
    .lifecycle-path::before { content: ''; position: absolute; left: 15px; top: 0; bottom: 0; width: 4px; background: #e2e8f0; border-radius: 4px; }
    
    .event-node { position: relative; margin-bottom: 30px; background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; }
    .event-node::before { content: ''; position: absolute; left: -36px; top: 24px; width: 22px; height: 22px; border-radius: 50%; background: white; border: 5px solid #7c3aed; box-shadow: 0 0 0 4px white; }
    .event-title { font-size: 20px; font-weight: 800; color: #0f172a; margin: 0 0 8px 0; }
    .event-text { font-size: 15px; color: #475569; line-height: 1.6; margin: 0; }
    
    .status-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
    .status-card { background: #f8fafc; padding: 16px; border-radius: 8px; text-align: center; border: 1px solid #e2e8f0; }
    .status-card h4 { font-size: 16px; font-weight: 800; margin: 0 0 8px 0; }
    .status-card p { font-size: 13px; color: #64748b; margin: 0; }
</style>
<div class="timeline-container">
    <div class="timeline-header">
        <h1 class="timeline-title">SME IPO Visual Calendar & Timeline</h1>
    </div>

    <!-- VISUAL CALENDAR -->
    <div class="visual-calendar">
        <div class="cal-header">
            <span style="cursor:pointer;">‹</span> <span>Current IPO Month</span> <span style="cursor:pointer;">›</span>
        </div>
        <div class="cal-grid">
            <div class="cal-day-header">Sun</div><div class="cal-day-header">Mon</div><div class="cal-day-header">Tue</div>
            <div class="cal-day-header">Wed</div><div class="cal-day-header">Thu</div><div class="cal-day-header">Fri</div><div class="cal-day-header">Sat</div>
            
            <div class="cal-cell"><div class="cal-date">1</div></div>
            <div class="cal-cell"><div class="cal-date">2</div></div>
            <div class="cal-cell"><div class="cal-date">3</div><span class="cal-event ev-open">TechCorp Opens</span></div>
            <div class="cal-cell"><div class="cal-date">4</div><span class="cal-event ev-list">GreenEnergy Lists</span></div>
            <div class="cal-cell"><div class="cal-date">5</div><span class="cal-event ev-close">TechCorp Closes</span></div>
            <div class="cal-cell"><div class="cal-date">6</div></div>
            <div class="cal-cell"><div class="cal-date">7</div></div>
            
            <div class="cal-cell"><div class="cal-date">8</div></div>
            <div class="cal-cell"><div class="cal-date">9</div><span class="cal-event ev-open">ManuWorks Opens</span></div>
            <div class="cal-cell"><div class="cal-date">10</div><span class="cal-event ev-list">TechCorp Lists</span></div>
            <div class="cal-cell"><div class="cal-date">11</div><span class="cal-event ev-close">ManuWorks Closes</span></div>
            <div class="cal-cell"><div class="cal-date">12</div></div>
            <div class="cal-cell"><div class="cal-date">13</div></div>
            <div class="cal-cell"><div class="cal-date">14</div></div>
        </div>
    </div>

    <h2 style="font-size:24px; font-weight:800; margin-bottom:24px;">The Chronological Timeline</h2>
    <div class="lifecycle-path">
        <div class="event-node">
            <h2 class="event-title">1. DRHP / RHP Filing</h2>
            <p class="event-text">Company submits prospectus. Dates are eventually announced.</p>
        </div>
        <div class="event-node">
            <h2 class="event-title">2. IPO Opening Date (10:00 AM)</h2>
            <p class="event-text">Subscription window opens. Retail and QIBs place bids via ASBA.</p>
        </div>
        <div class="event-node">
            <h2 class="event-title">3. IPO Closing Date (5:00 PM)</h2>
            <p class="event-text">Final deadline. No modifications allowed after this cut-off.</p>
        </div>
        <div class="event-node">
            <h2 class="event-title">4. Basis of Allotment</h2>
            <p class="event-text">Registrar runs the lottery to determine allocation of shares.</p>
        </div>
        <div class="event-node">
            <h2 class="event-title">5. Fund Unblocking / Demat Credit</h2>
            <p class="event-text">Losers get funds unblocked; winners get shares in their Demat account.</p>
        </div>
        <div class="event-node" style="border-color: #10b981;">
            <h2 class="event-title" style="color: #10b981;">6. Listing Date (10:00 AM)</h2>
            <p class="event-text">Secondary market trading officially begins on NSE/BSE SME platform.</p>
        </div>
    </div>

    <!-- MASSIVE VERTICAL EXPANSION -->
    <style>
        .deep-rule-box { background: #0f172a; color: white; padding: 40px; border-radius: 12px; margin-bottom: 60px; }
        .dr-title { font-size: 28px; font-weight: 800; color: #38bdf8; margin: 0 0 16px 0; }
        
        .delay-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 60px; }
        .delay-card { background: #fef2f2; border: 1px solid #fecaca; padding: 24px; border-radius: 8px; }
        
        .timeline-table { width: 100%; border-collapse: collapse; margin-bottom: 60px; background: white; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); }
        .timeline-table th { background: #7c3aed; color: white; padding: 16px; text-align: left; }
        .timeline-table td { padding: 16px; border: 1px solid #e2e8f0; }
    </style>

    <div class="deep-rule-box" style="margin-top: 60px;">
        <h2 class="dr-title">The T+3 Listing Rule Explained</h2>
        <p style="font-size: 16px; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">Historically, IPOs listed 6 days after closing (T+6). SEBI has now mandated a hyper-accelerated <strong>T+3 listing timeline</strong>. This drastically improves capital efficiency for SME investors, allowing them to participate in more IPOs per month.</p>
        <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:12px;">
            <li><strong style="color:white;">T Day:</strong> Issue Closes (5:00 PM).</li>
            <li><strong style="color:white;">T+1 Day:</strong> Basis of Allotment finalized. Funds are instructed to be unblocked/debited.</li>
            <li><strong style="color:white;">T+2 Day:</strong> Demat Credit processed by CDSL/NSDL. Unblocking completed for losers.</li>
            <li><strong style="color:#38bdf8;">T+3 Day:</strong> Listing Day. Stock begins trading.</li>
        </ul>
    </div>

    <h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 20px;">What Causes Timeline Delays?</h2>
    <div class="delay-grid">
        <div class="delay-card">
            <h3 style="font-size: 18px; font-weight: 800; color: #991b1b; margin: 0 0 8px 0;">1. Exchange / SEBI Queries</h3>
            <p style="font-size: 15px; color: #7f1d1d; margin: 0;">If the exchange identifies discrepancies in the DRHP, the Opening Date is delayed indefinitely until the company responds and updates the prospectus.</p>
        </div>
        <div class="delay-card">
            <h3 style="font-size: 18px; font-weight: 800; color: #991b1b; margin: 0 0 8px 0;">2. Public Holidays</h3>
            <p style="font-size: 15px; color: #7f1d1d; margin: 0;">The T+3 rule strictly calculates 'Working Days'. Unexpected bank holidays or state holidays delay the entire Allotment and Unblocking process by 24 hours.</p>
        </div>
    </div>

    <h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 20px;">Listing Day: The Pre-Open Session (9:00 AM - 10:00 AM)</h2>
    <p style="font-size: 16px; color: #475569; line-height: 1.8; margin-bottom: 24px;">The Listing Date is not a sudden switch at 10:00 AM. A highly structured price discovery mechanism occurs first:</p>
    <table class="timeline-table">
        <tr>
            <th>Time</th>
            <th>Action</th>
        </tr>
        <tr>
            <td><strong>9:00 AM - 9:45 AM</strong></td>
            <td>Order Entry Period: Buyers and sellers place their initial bids/asks. The system calculates the Equilibrium Price based on supply and demand.</td>
        </tr>
        <tr>
            <td><strong>9:45 AM - 9:55 AM</strong></td>
            <td>Order Matching Period: Orders cannot be cancelled. The exchange formally calculates the exact opening listing price.</td>
        </tr>
        <tr>
            <td><strong>10:00 AM onwards</strong></td>
            <td>Continuous Trading: The stock is officially listed, and normal secondary market trading begins.</td>
        </tr>
    </table>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
