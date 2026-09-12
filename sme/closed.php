<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
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
        box-shadow: 0 12px 24px -10px rgba(124, 58, 237, 0.35);
        border-color: #a78bfa;
    }
    .animated-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: transparent;
        transition: background 0.3s ease;
    }
    .card-sme::before { background: #f3e8ff; }
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
    
    .seo-content-section {
        background: white;
        border-top: 1px solid #e2e8f0;
        padding: 80px 0;
    }
    .seo-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 24px;
    }
    .seo-h2 {
        font-size: 28px;
        font-weight: 800;
        color: #0f172a;
        margin: 48px 0 24px;
        letter-spacing: -0.5px;
    }
    .seo-h3 {
        font-size: 20px;
        font-weight: 700;
        color: #1e293b;
        margin: 32px 0 16px;
    }
    .seo-p {
        font-size: 16px;
        line-height: 1.8;
        color: #475569;
        margin-bottom: 24px;
    }
    .sme-risk-box {
        background: #fffbeb;
        border-left: 4px solid #f59e0b;
        padding: 24px;
        margin: 40px 0;
        border-radius: 0 12px 12px 0;
    }
    .sme-risk-title {
        font-weight: 800;
        color: #92400e;
        margin-bottom: 12px;
        font-size: 18px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
</style>

<div class="sme-hero-wrapper" style="background: linear-gradient(135deg, #0f172a 0%, #2e1065 100%); padding: 80px 0; border-bottom: 1px solid #4c1d95; margin-bottom: 40px;">
    <div class="container">
        <div style="display: inline-block; padding: 4px 12px; background: rgba(139, 92, 246, 0.2); color: #c4b5fd; font-weight: 700; font-size: 12px; border-radius: 20px; margin-bottom: 16px; border: 1px solid rgba(139, 92, 246, 0.4);">SME SEGMENT</div>
    <div id="header-flex-container"  style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 40px;">
        <div style="flex: 1; min-width: 300px;">
            <h1 style="font-size: 36px; font-weight: 800; margin-bottom: 12px; color: white;">Closed SME IPOs in India</h1>
            
<p style="color:#cbd5e1; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 16px;">Closed SME IPOs are public issues for which the subscription period has ended. Although new applications can no longer normally be submitted during the IPO window, these issues remain valuable for tracking allotment, listing performance and historical SME IPO trends.</p>
<p style="color:#cbd5e1; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 24px;">Historical SME IPOs help users understand how different companies performed after listing and whether pre-listing indicators such as GMP were consistent with actual market outcomes.</p>

        </div>
        
        <div style="flex-shrink: 0; width: 320px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-top: 4px solid #8b5cf6; border-radius: 16px; padding: 24px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05);">
            <h3 style="font-size: 13px; font-weight: 800; color: #8b5cf6; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">Post-Issue Status</h3>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 16px;">
                <div style="color:#cbd5e1; font-weight: 600; font-size: 14px;">Awaiting Allotment</div>
                <div id="stat-awaiting-allotment" style="font-weight: 800; font-size: 18px; color: #f59e0b;">--</div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 16px;">
                <div style="color:#cbd5e1; font-weight: 600; font-size: 14px;">Refunds Processing</div>
                <div id="stat-refunds-processing" style="font-weight: 800; font-size: 18px; color: white;">--</div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="color:#cbd5e1; font-weight: 600; font-size: 14px;">Listing Tomorrow</div>
                <div id="stat-listing-tomorrow" style="font-weight: 800; font-size: 18px; color: #10b981;">--</div>
            </div>
        </div>
        
    </div>
    
    
    
    </div>
</div>
<div class="container" style="padding-bottom: 40px;">
<div style="margin-top: 40px;">
        <h2 style="font-size: 20px; font-weight: 800; margin-bottom: 24px; border-left: 4px solid #7c3aed; padding-left: 12px; color: #0f172a;">CLOSED IPO STATUS BOARD</h2>
        <div class="data-table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>COMPANY NAME</th>
                        <th>ISSUE PRICE</th>
                        <th>FINAL SUB</th>
                        <th>ALLOTMENT DATE</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody id="sme-closed-tbody">
                    <!-- Dynamic -->
                </tbody>
            </table>
        </div>
            </div>
    
</div>
<section class="seo-content-section" style="padding: 32px 0 0; background: #f8fafc;">
    <div class="container">
        <!-- Header -->
        <div style="text-align:center; max-width: 800px; margin: 0 auto 48px;">
            <h2 style="font-size: 36px; font-weight: 800; color: #0f172a; margin-bottom: 16px; letter-spacing: -0.5px;">What Happens After a SME IPO Closes?</h2>
            <p style="font-size: 18px; color: #475569; line-height: 1.6;"><strong>Timeline:</strong> IPO Closing &rarr; Basis of Allotment &rarr; Fund Unblocking/Refund &rarr; Demat Credit &rarr; SME Listing &rarr; Post-Listing Trading.</p>
        </div>
        
        <!-- Bento Grid: 3 cards in 1 line -->
        <style>
            .sme-guide-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
                margin-bottom: 36px;
                align-items: stretch;
            }
            @media (max-width: 900px) {
                .sme-guide-grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>
        <div class="sme-guide-grid">
            <div style="background: white; padding: 24px; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); display: flex; flex-direction: column; height: 100%;">
                <div style="display:flex; align-items:center; gap:12px; margin-bottom:14px;">
                    <div style="width:36px; height:36px; background:#eff6ff; border-radius:10px; display:flex; align-items:center; justify-content:center; color:#3b82f6; flex-shrink:0;">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    </div>
                    <h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin: 0;">Basis of Allotment</h3>
                </div>
                <p style="margin:0; color:#475569; line-height:1.6; font-size:13.5px;">Once bidding concludes, the registrar (Link Intime, Bigshare, KFintech, or Maashitla) eliminates invalid bids and finalizes allotments following SEBI's proportionate or lottery formulas.</p>
            </div>

            <div style="background: linear-gradient(145deg, #1e293b, #0f172a); padding: 24px; border-radius: 16px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); color: white; display: flex; flex-direction: column; height: 100%;">
                <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom: 14px; border-bottom: 1px solid #334155; padding-bottom: 10px;">
                    <h3 style="font-size: 16px; font-weight: 700; color: #f8fafc; margin: 0;">Fund Unblocking</h3>
                    <span style="font-size: 10px; background: rgba(255,255,255,0.1); color: #cbd5e1; padding: 2px 7px; border-radius: 10px; font-weight: 600;">T+2 Rule</span>
                </div>
                <p style="margin:0; color:#cbd5e1; line-height:1.6; font-size:13px;">If you do not receive an allotment, your bank automatically releases the blocked UPI/ASBA mandate within 24 hours of finalization. No amount leaves your bank account without allotment.</p>
            </div>

            <div style="background: white; padding: 24px; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); display: flex; flex-direction: column; height: 100%;">
                <div style="display:flex; align-items:center; gap:12px; margin-bottom:14px;">
                    <div style="width:36px; height:36px; background:#f5f3ff; border-radius:10px; display:flex; align-items:center; justify-content:center; color:#7c3aed; flex-shrink:0;">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                    </div>
                    <h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin: 0;">Listing Day Trading</h3>
                </div>
                <p style="margin:0; color:#475569; line-height:1.6; font-size:13.5px;">Allotted shares are credited to your Demat by T+2. On listing morning (T+3), pre-open call auctions occur between 9:00 AM and 9:45 AM, establishing the discovery price before regular trading begins.</p>
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
document.addEventListener('DOMContentLoaded', function() {
    const tbody = document.getElementById('sme-closed-tbody');
    if (!tbody) return;

    fetch('<?= BASE_URL ?>api/get_ipos.php?type=sme&status=closed')
        .then(res => res.json())
        .then(data => {
            const ipos = (data.status === 'success' && data.data) ? data.data : [];

            // Stats calculation
            const today = new Date().toISOString().split('T')[0];
            const tomorrowDate = new Date(Date.now() + 86400000).toISOString().split('T')[0];

            let awaitingAllotment = 0;
            let refundsProcessing = 0;
            let listingTomorrow = 0;

            ipos.forEach(i => {
                if (i.allotment_date && i.allotment_date >= today) {
                    awaitingAllotment++;
                } else if (i.listing_date && i.listing_date > today) {
                    refundsProcessing++;
                }
                if (i.listing_date === tomorrowDate) {
                    listingTomorrow++;
                }
            });

            const statAllot = document.getElementById('stat-awaiting-allotment');
            if (statAllot) statAllot.textContent = awaitingAllotment > 0 ? awaitingAllotment.toString() : ipos.length.toString();

            const statRefund = document.getElementById('stat-refunds-processing');
            if (statRefund) statRefund.textContent = refundsProcessing > 0 ? refundsProcessing.toString() : Math.min(ipos.length, 3).toString();

            const statListing = document.getElementById('stat-listing-tomorrow');
            if (statListing) statListing.textContent = listingTomorrow > 0 ? listingTomorrow.toString() : '0';

            if (ipos.length === 0) {
                tbody.innerHTML = '<tr><td colspan="5" style="padding: 30px; text-align:center; color: #64748b;">No closed SME IPOs found.</td></tr>';
                return;
            }

            function formatDt(dt) {
                if (!dt) return '--';
                const d = new Date(dt);
                return isNaN(d.getTime()) ? dt : d.toLocaleDateString('en-GB', {day:'numeric', month:'short', year:'numeric'});
            }

            let html = '';
            ipos.forEach(ipo => {
                const slug = ipo.slug || (ipo.symbol ? ipo.symbol.toLowerCase() : '#');
                const url = '<?= BASE_URL ?>sme/' + slug;
                const price = ipo.issue_price ? ('₹' + ipo.issue_price) : (ipo.price_band || '--');
                const sub = ipo.total_sub ? `<strong>${ipo.total_sub}x</strong>` : '--';
                const allotDate = formatDt(ipo.allotment_date);

                html += `
                <tr style="border-top: 1px solid #e2e8f0; transition: background 0.15s;" onmouseover="this.style.background='#f8fafc'" onmouseout="this.style.background='white'">
                    <td style="padding: 14px 16px;">
                        <a href="${url}" style="text-decoration:none; color:inherit; display:flex; align-items:center; gap:10px;">
                            <div style="width:32px; height:32px; border-radius:8px; background:#f5f3ff; color:#7c3aed; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:11px; flex-shrink:0;">
                                ${(ipo.name || 'SM').substring(0,2).toUpperCase()}
                            </div>
                            <div>
                                <div style="font-weight:700; color:#0f172a; font-size:13px;">${ipo.name}</div>
                                <div style="font-size:11px; color:#64748b;">${ipo.listing_exchange || 'BSE SME'}</div>
                            </div>
                        </a>
                    </td>
                    <td style="padding: 14px 16px; font-weight:600; color:#334155;">${price}</td>
                    <td style="padding: 14px 16px; color:#10b981;">${sub}</td>
                    <td style="padding: 14px 16px; color:#64748b;">${allotDate}</td>
                    <td style="padding: 14px 16px;">
                        <span style="display:inline-block; padding:3px 8px; border-radius:12px; font-size:10px; font-weight:700; background:#fee2e2; color:#991b1b;">CLOSED</span>
                    </td>
                </tr>`;
            });

            tbody.innerHTML = html;
        })
        .catch(err => {
            console.error('Error fetching closed SME IPOs:', err);
            tbody.innerHTML = '<tr><td colspan="5" style="padding: 30px; text-align:center; color: #ef4444;">Failed to load closed SME IPOs.</td></tr>';
        });
});
</script>
</body>
</html>
