<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Listed IPOs in India – Performance Leaderboard | IPOSETU</title>
<meta name="description" content="Comprehensive list of all listed IPOs in India. Track listing gains, listing price vs issue price, and post-listing performance on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<style>
    .data-table-container {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05);
        margin-bottom: 0;
    }
    .data-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }
    .data-table th {
        padding: 16px 24px;
        font-size: 12px;
        font-weight: 700;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        background: #f8fafc;
        border-bottom: 2px solid #e2e8f0;
    }
    .data-table td {
        padding: 18px 24px;
        font-size: 14px;
        color: #0f172a;
        border-bottom: 1px solid #e2e8f0;
    }
    .data-table tr:last-child td { border-bottom: none; }
    .data-table tr:hover { background: #f8fafc; }
    .gain-positive { color: #16a34a; font-weight: 800; }
    .gain-negative { color: #dc2626; font-weight: 800; }
</style>

<div class="container" style="padding-top: 60px; padding-bottom: 60px;">

    <!-- Header Row -->
    <div id="header-flex-container" style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 40px; margin-bottom: 48px;">
        <div style="flex: 1; min-width: 300px;">
            <h1 style="font-size: 36px; font-weight: 800; margin-bottom: 12px; color: #0f172a;">Listed IPOs in India</h1>
            <p style="color:#475569; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 16px;">Listed IPOs are companies that have completed their public offering and have begun trading on a stock exchange. Once an IPO is listed, the company's shares move into the secondary market, where prices are determined by market demand and supply.</p>
            <p style="color:#475569; font-size:16px; line-height:1.6; max-width:800px;">The listing marks an important transition from the IPO stage to regular stock-market trading.</p>
        </div>

        <div style="flex-shrink: 0; width: 320px; background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05);">
            <h3 style="font-size: 13px; font-weight: 800; color: #94a3b8; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">2026 Performance</h3>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px;">
                <div style="color: #475569; font-weight: 600; font-size: 14px;">Total Listings</div>
                <div id="stat-total-listed" style="font-weight: 800; font-size: 18px; color: #0f172a;">--</div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px;">
                <div style="color: #475569; font-weight: 600; font-size: 14px;">Avg Listing Gain</div>
                <div id="stat-avg-gain" style="font-weight: 800; font-size: 16px; color: #10b981;">--</div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="color: #475569; font-weight: 600; font-size: 14px;">Positive Listings</div>
                <div id="stat-positive" style="font-weight: 800; font-size: 16px; color: #3b82f6;">--</div>
            </div>
        </div>
    </div>

    <!-- IPO Leaderboard Table -->
    <h2 style="font-size: 20px; font-weight: 800; margin-bottom: 20px; border-left: 4px solid #3b82f6; padding-left: 12px;">IPO PERFORMANCE LEADERBOARD</h2>
    <div class="data-table-container">
        <table class="data-table" id="listed-ipo-table">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Listing Date</th>
                    <th>Issue Price</th>
                    <th>Listing Price</th>
                    <th>Listing Gain/Loss</th>
                    <th>Current Price</th>
                </tr>
            </thead>
            <tbody id="listed-ipo-tbody">
                <tr><td colspan="6" style="padding: 20px 24px; text-align: center; color: #475569;">Loading listed IPOs...</td></tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination controls (20 per page) -->
    <div id="listed-ipo-pagination" style="display:flex; justify-content:space-between; align-items:center; margin-top:20px; margin-bottom:8px; padding: 15px 20px; background: white; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">
        <div id="listed-ipo-pagination-info" style="font-size:14px; color:#64748b; font-weight: 500;"></div>
        <div style="display:flex; gap:8px; align-items:center;">
            <button id="listed-ipo-pagination-prev" class="pg-btn" style="padding: 8px 16px; border: 1px solid #e2e8f0; background: white; border-radius: 6px; cursor: pointer; font-weight: 600; color: #475569; transition: all 0.2s;">&larr; Prev</button>
            <div id="listed-ipo-pagination-pages" class="pagination" style="display:flex; gap:6px;"></div>
            <button id="listed-ipo-pagination-next" class="pg-btn" style="padding: 8px 16px; border: 1px solid #e2e8f0; background: white; border-radius: 6px; cursor: pointer; font-weight: 600; color: #475569; transition: all 0.2s;">Next &rarr;</button>
        </div>
    </div>

</div><!-- end .container -->

<!-- SEO Content Section -->
<section class="seo-content-section" style="padding: 32px 0 0; background: #f8fafc;">
    <div class="container">
        <div style="text-align:center; max-width: 800px; margin: 0 auto 48px;">
            <h2 style="font-size: 36px; font-weight: 800; color: #0f172a; margin-bottom: 16px; letter-spacing: -0.5px;">📊 What is IPO Listing?</h2>
            <p style="font-size: 18px; color: #475569; line-height: 1.6;">IPO listing is the final milestone in the public offering process — the exact moment when shares become available for live trading on recognized stock exchanges like the NSE and BSE.</p>
        </div>

        <!-- Bento Grid -->
        <div style="display: grid; grid-template-columns: 1.5fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div style="background: white; padding: 40px; border-radius: 24px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); position: relative; overflow: hidden;">
                <div style="position:absolute; top:0; right:0; width:150px; height:150px; background:radial-gradient(circle, rgba(59,130,246,0.1) 0%, transparent 70%); border-radius:50%; transform:translate(30%, -30%);"></div>
                <div style="display:flex; align-items:center; gap:12px; margin-bottom:20px;">
                    <div style="width:40px; height:40px; background:#eff6ff; border-radius:10px; display:flex; align-items:center; justify-content:center; color:#3b82f6;">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <h3 style="font-size: 22px; font-weight: 800; color: #0f172a; margin: 0;">Understanding Listing Gains vs Losses</h3>
                </div>
                <p style="margin-bottom:16px; color:#334155; line-height:1.7;">If a stock opens at a price higher than its IPO issue price, the difference is a <strong>Listing Gain</strong>. For example, if the Issue Price was ₹100 and it opens at ₹125, the listing gain is 25%.</p>
                <p style="color:#334155; line-height:1.7;">Conversely, if it trades below its issue price (e.g., opens at ₹90), it has experienced a <strong>Listing Loss</strong> of 10%. Listing performance is heavily influenced by broader market conditions and institutional demand.</p>
            </div>
            <div style="background: linear-gradient(145deg, #1e293b, #0f172a); padding: 36px; border-radius: 24px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); color: white;">
                <h3 style="font-size: 18px; font-weight: 700; color: #f8fafc; margin-bottom: 20px; border-bottom: 1px solid #334155; padding-bottom: 14px;">Metrics to Compare Post-Listing</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="display:flex; align-items:center; gap:10px; margin-bottom:12px; color:#e2e8f0; font-size:14px;"><div style="background:#dcfce7; color:#16a34a; width:20px; height:20px; border-radius:5px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>Issue Price vs Listing Price</li>
                    <li style="display:flex; align-items:center; gap:10px; margin-bottom:12px; color:#e2e8f0; font-size:14px;"><div style="background:#dcfce7; color:#16a34a; width:20px; height:20px; border-radius:5px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>Estimated GMP vs Actual Gain</li>
                    <li style="display:flex; align-items:center; gap:10px; margin-bottom:12px; color:#e2e8f0; font-size:14px;"><div style="background:#dcfce7; color:#16a34a; width:20px; height:20px; border-radius:5px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>Current Price (CMP) vs Listing Price</li>
                    <li style="display:flex; align-items:center; gap:10px; margin-bottom:12px; color:#e2e8f0; font-size:14px;"><div style="background:#dcfce7; color:#16a34a; width:20px; height:20px; border-radius:5px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>Current P/E vs Industry P/E</li>
                    <li style="display:flex; align-items:center; gap:10px; color:#e2e8f0; font-size:14px;"><div style="background:#dcfce7; color:#16a34a; width:20px; height:20px; border-radius:5px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>1-Month &amp; 6-Month Returns</li>
                </ul>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 40px;">
            <div style="background: white; padding: 32px; border-radius: 24px; border: 1px solid #e2e8f0;">
                <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 16px; display:flex; align-items:center; gap:8px;"><span style="display:block; width:8px; height:8px; background:#f59e0b; border-radius:50%;"></span>GMP vs Actual Listing Price</h3>
                <p style="color:#475569; line-height:1.7;">Before listing, retail investors rely on the Grey Market Premium (GMP) as an unofficial market sentiment indicator. Our platform lets you compare the estimated GMP price against the actual listing outcome — you'll often find that during bull markets, IPOs list even higher than their GMP suggested.</p>
            </div>
            <div style="background: white; padding: 32px; border-radius: 24px; border: 1px solid #e2e8f0;">
                <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 16px; display:flex; align-items:center; gap:8px;"><span style="display:block; width:8px; height:8px; background:#f59e0b; border-radius:50%;"></span>Long-Term Post-Listing Performance</h3>
                <p style="color:#475569; line-height:1.7;">A smart investor doesn't stop tracking a company on listing day. We provide data on 1-week, 1-month, 6-month, and 1-year performance. Many companies that had poor listing days due to bad market timing have gone on to deliver multibagger returns over the next year.</p>
            </div>
        </div>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const tbody = document.getElementById("listed-ipo-tbody");
    if (!tbody) return;

    function formatDate(dateStr) {
        if (!dateStr) return '--';
        const d = new Date(dateStr);
        return isNaN(d) ? dateStr : d.toLocaleDateString('en-GB', {day:'numeric', month:'short', year:'numeric'});
    }

    fetch('<?= BASE_URL ?>api/get_ipos.php?status=listed')
        .then(res => res.json())
        .then(data => {
            if (data.status !== 'success' || !data.data || data.data.length === 0) {
                tbody.innerHTML = '<tr><td colspan="6" style="padding: 20px 24px; text-align: center; color: #64748b;">No listed IPOs found.</td></tr>';
                return;
            }

            let html = '';
            let positiveCount = 0;
            let totalGain = 0;
            let gainCount = 0;

            data.data.forEach(ipo => {
                const name = ipo.name || '--';
                const listingDate = formatDate(ipo.listing_date);
                const issuePrice = ipo.issue_price ? `&#8377;${ipo.issue_price}` : '--';
                const listingPrice = ipo.listing_price ? `&#8377;${ipo.listing_price}` : '--';

                let gainHtml = '--';
                if (ipo.issue_price && ipo.listing_price) {
                    const issueP = parseFloat(ipo.issue_price);
                    const listP = parseFloat(ipo.listing_price);
                    if (issueP > 0) {
                        const gain = listP - issueP;
                        const gainPct = (gain / issueP) * 100;
                        const sign = gain > 0 ? '+' : '';
                        const gainClass = gain > 0 ? 'gain-positive' : (gain < 0 ? 'gain-negative' : '');
                        gainHtml = `<span class="${gainClass}">${sign}${gainPct.toFixed(1)}%</span>`;
                        totalGain += gainPct;
                        gainCount++;
                        if (gain > 0) positiveCount++;
                    }
                }

                const currentPrice = '--';
                html += `<tr>
                    <td style="font-weight:700;"><a href="<?= BASE_URL ?>ipo/${ipo.symbol ? ipo.symbol.toLowerCase() : '#'}" style="color:inherit;text-decoration:none;">${name}</a></td>
                    <td>${listingDate}</td>
                    <td>${issuePrice}</td>
                    <td style="font-weight:700;">${listingPrice}</td>
                    <td>${gainHtml}</td>
                    <td style="font-weight:700;">${currentPrice}</td>
                </tr>`;
            });

            tbody.innerHTML = html;

            // Update stat cards
            const totalEl = document.getElementById('stat-total-listed');
            const avgEl = document.getElementById('stat-avg-gain');
            const posEl = document.getElementById('stat-positive');
            if (totalEl) totalEl.textContent = data.data.length;
            if (avgEl) avgEl.textContent = gainCount > 0 ? (totalGain / gainCount).toFixed(1) + '%' : '--';
            if (posEl) posEl.textContent = positiveCount > 0 ? positiveCount + ' / ' + gainCount : '--';

            // Pagination – 20 rows per page
            if (typeof initTablePagination === 'function') {
                initTablePagination('listed-ipo-table', 'listed-ipo-pagination', 20);
            }
        })
        .catch(err => {
            console.error("Error fetching listed IPOs:", err);
            tbody.innerHTML = '<tr><td colspan="6" style="padding: 20px 24px; text-align: center; color: #ef4444;">Error loading data.</td></tr>';
        });
});
</script>
</body>
</html>
