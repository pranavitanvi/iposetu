
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Closed – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Closed on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>


<style>
    .animated-card {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 20px;
        display: block;
        text-decoration: none;
        color: inherit;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }
    .animated-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 24px -10px rgba(0, 0, 0, 0.15);
        border-color: #cbd5e1;
    }
    .animated-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: transparent;
        transition: background 0.3s ease;
    }
    .card-mainboard:hover::before { background: #3b82f6; }
    .card-sme:hover::before { background: #8b5cf6; }
    
    .grid-container {
        display: grid; 
        grid-template-columns: repeat(3, 1fr); 
        gap: 24px; 
        margin-bottom: 40px;
    }
    @media (max-width: 768px) {
        .grid-container { grid-template-columns: 1fr; }
    }
</style>

<div class="container" style="padding-top: 60px; padding-bottom: 40px;">
    
<div id="header-flex-container" style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 40px;">
    <div style="flex: 1; min-width: 300px;">
        <h1 style="font-size: 36px; font-weight: 800; margin-bottom: 12px; color: #0f172a;">Closed IPOs in India</h1>
    
<p style="color:#475569; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 16px;">Closed IPOs are public issues for which the subscription period has ended. Although investors can no longer apply during the IPO window, these issues remain important for tracking allotment, listing performance and historical IPO data.</p>
<p style="color:#475569; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 24px;">A closed IPO provides useful information for comparing the actual outcome of an issue with the expectations that existed before listing.</p>
    </div>
    
        <div style="flex-shrink: 0; width: 320px; background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05);">
            <h3 style="font-size: 13px; font-weight: 800; color: #94a3b8; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">Post-Issue Status</h3>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px;">
                <div style="color: #475569; font-weight: 600; font-size: 14px;">Awaiting Allotment</div>
                <div style="font-weight: 800; font-size: 18px; color: #f59e0b;">--</div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px;">
                <div style="color: #475569; font-weight: 600; font-size: 14px;">Refunds Processing</div>
                <div style="font-weight: 800; font-size: 18px; color: #0f172a;">--</div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="color: #475569; font-weight: 600; font-size: 14px;">Listing Tomorrow</div>
                <div style="font-weight: 800; font-size: 18px; color: #10b981;">--</div>
            </div>
        </div>
    
</div>


    
    
    
<style>
    .data-table-container {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05);
        margin-bottom: 40px;
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
        padding: 20px 24px;
        font-size: 14px;
        color: #0f172a;
        border-bottom: 1px solid #e2e8f0;
    }
    .data-table tr:last-child td {
        border-bottom: none;
    }
    .data-table tr:hover {
        background: #f8fafc;
    }
    .badge-status {
        display: inline-block;
        padding: 4px 10px;
        border-radius: 12px;
        font-size: 11px;
        font-weight: 800;
    }
    .gain-positive {
        color: #16a34a;
        font-weight: 800;
    }
    .gain-negative {
        color: #dc2626;
        font-weight: 800;
    }
</style>

    <div style="margin-top: 40px;">
        <h2 style="font-size: 20px; font-weight: 800; margin-bottom: 24px; border-left: 4px solid #3b82f6; padding-left: 12px;">CLOSED IPO STATUS BOARD</h2>
        <div class="data-table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Issue Price</th>
                        <th>Final Sub</th>
                        <th>Allotment Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="closed-ipo-tbody">
                    <tr><td colspan="5" style="padding: 20px 24px; text-align: center; color: #475569;">Loading closed IPOs...</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
<section class="seo-content-section" style="padding: 32px 0 0; background: #f8fafc;">
    <div class="container">
        <!-- Header -->
        <div style="text-align:center; max-width: 800px; margin: 0 auto 48px;">
            <h2 style="font-size: 36px; font-weight: 800; color: #0f172a; margin-bottom: 16px; letter-spacing: -0.5px;">🔒 What Happens After an IPO Closes?</h2>
            <p style="font-size: 18px; color: #475569; line-height: 1.6;">A closed IPO is a public issue for which the 3-day subscription period has definitively ended. Investors can no longer apply, modify, or withdraw their bids.</p>
        </div>
        
        <!-- Bento Grid -->
        <div style="display: grid; grid-template-columns: 1.5fr 1fr; gap: 24px; margin-bottom: 24px;">
            <!-- Main Feature Card -->
            <div style="background: white; padding: 40px; border-radius: 24px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); position: relative; overflow: hidden;">
                <div style="position:absolute; top:0; right:0; width:150px; height:150px; background:radial-gradient(circle, rgba(59,130,246,0.1) 0%, transparent 70%); border-radius:50%; transform:translate(30%, -30%);"></div>
                <div style="display:flex; align-items:center; gap:12px; margin-bottom:20px;">
                    <div style="width:40px; height:40px; background:#eff6ff; border-radius:10px; display:flex; align-items:center; justify-content:center; color:#3b82f6;">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <h3 style="font-size: 22px; font-weight: 800; color: #0f172a; margin: 0;">What is the Basis of Allotment?</h3>
                </div>
                <p style="margin-bottom:16px; color:#334155; line-height:1.7;">The Basis of Allotment is a formal document published by the IPO registrar (like Link Intime or KFintech) detailing exactly how the shares were distributed among successful applicants based on SEBI's strict lottery rules. If an IPO is heavily oversubscribed, the number of applicants far exceeds the available lots, making allotment entirely dependent on luck.</p>
            </div>
            <!-- Checklist Card -->
            <div style="background: linear-gradient(145deg, #1e293b, #0f172a); padding: 40px; border-radius: 24px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); color: white;">
                <h3 style="font-size: 20px; font-weight: 700; color: #f8fafc; margin-bottom: 24px; border-bottom: 1px solid #334155; padding-bottom: 16px;">The Post-Closing Timeline (T+3 Rule)</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="display:flex; align-items:flex-start; gap:12px; margin-bottom:16px; color:#f8fafc; font-weight:500;"><div style="background:#dcfce7; color:#16a34a; width:24px; height:24px; border-radius:6px; display:flex; align-items:center; justify-content:center; flex-shrink:0; margin-top:2px;"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>T+0 Issue Closes</li><li style="display:flex; align-items:flex-start; gap:12px; margin-bottom:16px; color:#f8fafc; font-weight:500;"><div style="background:#dcfce7; color:#16a34a; width:24px; height:24px; border-radius:6px; display:flex; align-items:center; justify-content:center; flex-shrink:0; margin-top:2px;"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>T+1 Finalization of Allotment</li><li style="display:flex; align-items:flex-start; gap:12px; margin-bottom:16px; color:#f8fafc; font-weight:500;"><div style="background:#dcfce7; color:#16a34a; width:24px; height:24px; border-radius:6px; display:flex; align-items:center; justify-content:center; flex-shrink:0; margin-top:2px;"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>T+2 Refunds / Unblocking of Funds</li><li style="display:flex; align-items:flex-start; gap:12px; margin-bottom:16px; color:#f8fafc; font-weight:500;"><div style="background:#dcfce7; color:#16a34a; width:24px; height:24px; border-radius:6px; display:flex; align-items:center; justify-content:center; flex-shrink:0; margin-top:2px;"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>T+2 Credit of Shares to Demat</li><li style="display:flex; align-items:flex-start; gap:12px; margin-bottom:16px; color:#f8fafc; font-weight:500;"><div style="background:#dcfce7; color:#16a34a; width:24px; height:24px; border-radius:6px; display:flex; align-items:center; justify-content:center; flex-shrink:0; margin-top:2px;"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>T+3 Listing on Exchanges</li>
                </ul>
            </div>
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 40px;">
            <div style="background: white; padding: 32px; border-radius: 24px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.02);">
                <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 16px; display:flex; align-items:center; gap:8px;"><span style="display:block; width:8px; height:8px; background:#f59e0b; border-radius:50%;"></span>What Happens If Shares Are Not Allotted?</h3>
                <p style="margin-bottom:16px; color:#475569; line-height:1.7;">If the lottery does not favor your application, your bank will receive an instruction from the registrar to revoke the ASBA or UPI mandate. The amount blocked in your bank account will be automatically released (unblocked), usually within 24 hours of the allotment finalization. No money is actually deducted from your account unless you win the allotment.</p>
            </div>
            <div style="background: white; padding: 32px; border-radius: 24px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.02);">
                <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 16px; display:flex; align-items:center; gap:8px;"><span style="display:block; width:8px; height:8px; background:#f59e0b; border-radius:50%;"></span>Why Historical Closed IPOs Are Useful</h3>
                <p style="margin-bottom:16px; color:#475569; line-height:1.7;">Keeping an eye on closed IPOs provides valuable historical context. Investors and researchers can examine the correlation between final subscription multiples, pre-listing GMP, and the actual listing outcome. This data helps refine bidding strategies for future IPOs in similar sectors.</p>
            </div>
        </div>
        
        <!-- FAQs -->
        <div style="margin-top: 60px;">
            <h3 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 24px; text-align: center;">Frequently Asked Questions</h3>
            <div style="max-width: 800px; margin: 0 auto;">
                <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e2e8f0; margin-bottom: 16px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                    <div style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';">
                        <div style="font-weight:700; font-size:16px; color:#1e293b;">What's the difference between Closed and Listed?</div>
                        <svg width="20" height="20" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24" style="transition:transform 0.2s;"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #e2e8f0; font-size:15px; color:#475569; line-height:1.6;">
                        A closed IPO has merely finished accepting applications, but its shares cannot be traded yet. A listed IPO has completed the entire backend process and its shares are actively trading on the stock market.
                    </div>
                </div>
                <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e2e8f0; margin-bottom: 16px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                    <div style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';">
                        <div style="font-weight:700; font-size:16px; color:#1e293b;">How do I check my allotment status?</div>
                        <svg width="20" height="20" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24" style="transition:transform 0.2s;"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #e2e8f0; font-size:15px; color:#475569; line-height:1.6;">
                        Once the IPO is closed and reaches the T+1 day, you can use our Allotment Status tool. You will need to enter your PAN number or DP Client ID to see if shares were credited to you.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>
<!-- Position I: Sticky Bottom Ad Container -->
<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const tbody = document.getElementById("closed-ipo-tbody");
    if (!tbody) return;

    function formatDate(dateStr) {
        if (!dateStr) return '--';
        const d = new Date(dateStr);
        return isNaN(d) ? dateStr : d.toLocaleDateString('en-GB', {day:'numeric', month:'short', year:'numeric'});
    }

    fetch('<?= BASE_URL ?>api/get_ipos.php?status=CLOSED')
        .then(res => res.json())
        .then(data => {
            if (data.status !== 'success' || !data.data || data.data.length === 0) {
                tbody.innerHTML = '<tr><td colspan="5" style="padding: 20px 24px; text-align: center; color: #64748b;">No closed IPOs found.</td></tr>';
                return;
            }

            let html = '';
            data.data.forEach(ipo => {
                const name = ipo.name || '--';
                const issuePrice = ipo.issue_price ? `₹${ipo.issue_price}` : '--';
                
                let finalSub = '--';
                if (ipo.total_sub) {
                    finalSub = `${ipo.total_sub}x`;
                } else if (ipo.subscription && ipo.subscription.total) {
                    finalSub = `${ipo.subscription.total}x`;
                }

                const allotDate = formatDate(ipo.allotment_date);
                
                const status = (ipo.status || '').toUpperCase();
                let statusHtml = `<span class="badge-status" style="background:#f1f5f9; color:#475569;">${status || '--'}</span>`;
                if (status === 'CLOSED') {
                    statusHtml = `<span class="badge-status" style="background:#e2e8f0; color:#475569;">CLOSED</span>`;
                } else if (status === 'ALLOTMENT TODAY') {
                    statusHtml = `<span class="badge-status" style="background:#fef9c3; color:#854d0e;">ALLOTMENT TODAY</span>`;
                } else if (status === 'REFUNDS PROCESSING') {
                    statusHtml = `<span class="badge-status" style="background:#dbeafe; color:#1e40af;">REFUNDS PROCESSING</span>`;
                } else if (status === 'LISTING TOMORROW') {
                    statusHtml = `<span class="badge-status" style="background:#dcfce7; color:#166534;">LISTING TOMORROW</span>`;
                }

                html += `<tr>
                    <td style="font-weight:700;">${name}</td>
                    <td>${issuePrice}</td>
                    <td style="font-weight:700; color:#3b82f6;">${finalSub}</td>
                    <td>${allotDate}</td>
                    <td>${statusHtml}</td>
                </tr>`;
            });
            tbody.innerHTML = html;
        })
        .catch(err => {
            console.error("Error fetching closed IPOs:", err);
            tbody.innerHTML = '<tr><td colspan="5" style="padding: 20px 24px; text-align: center; color: #ef4444;">Error loading data.</td></tr>';
        });
});
</script>
</body>
</html>

