<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Open – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Open on IPOSETU."/>
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
            <h1 style="font-size: 36px; font-weight: 800; margin-bottom: 12px; color: white;">Open SME IPOs in India</h1>
            
<p style="color:#cbd5e1; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 16px;">Open SME IPOs are SME public issues currently available for subscription. During the open period, investors can review the final IPO details, place eligible bids and monitor category-wise subscription demand until the issue closes.</p>
<p style="color:#cbd5e1; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 24px;">SEBI explains that IPO applications can use UPI as a payment mechanism, with funds being blocked and subsequently debited if shares are allotted.</p>

        </div>
        
        <div style="flex-shrink: 0; width: 320px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-top: 4px solid #8b5cf6; border-radius: 16px; padding: 24px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05);">
            <h3 style="font-size: 13px; font-weight: 800; color: #8b5cf6; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">Live Bidding Stats</h3>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 16px;">
                <div style="color:#cbd5e1; font-weight: 600; font-size: 14px;">Issues Open Now</div>
                <div id="stat-open-issues" style="font-weight: 800; font-size: 18px; color: white;">--</div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 16px;">
                <div style="color:#cbd5e1; font-weight: 600; font-size: 14px;">Retail Demand Avg</div>
                <div id="stat-retail-avg" style="font-weight: 800; font-size: 16px; color: #8b5cf6;">--</div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="color:#cbd5e1; font-weight: 600; font-size: 14px;">QIB Demand Avg</div>
                <div id="stat-qib-avg" style="font-weight: 800; font-size: 16px; color: #fcd34d;">--</div>
            </div>
        </div>
        
    </div>
    
    <div style="margin-top: 40px;">
        <h2 style="font-size: 20px; font-weight: 800; margin-bottom: 24px; border-left: 4px solid #8b5cf6; padding-left: 12px; color: white;">OPEN SME IPOs</h2>
        <div class="grid-container" id="sme-open-grid">
            <div style="grid-column: span 3; text-align: center; padding: 40px; color: #64748b; font-weight: 600;">Loading Open SME IPOs...</div>
        </div>
        
        </div>
    </div>
</div>

<section class="seo-content-section" style="padding: 32px 0 0; background: #f8fafc;">
    <div class="container">
        <!-- Header -->
        <div style="text-align:center; max-width: 800px; margin: 0 auto 48px;">
            <h2 style="font-size: 36px; font-weight: 800; color: #0f172a; margin-bottom: 16px; letter-spacing: -0.5px;">SME IPO Investment Amount</h2>
            <p style="font-size: 18px; color:#475569; line-height: 1.6;">The minimum investment is calculated as: <strong>Price × Lot Size = Approximate Minimum Application Amount</strong>. Unlike Mainboard IPOs which cost around ₹15,000, SME IPO lot sizes are purposely structured to require a minimum investment block of over ₹1,00,000.</p>
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
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin: 0;">Lot Size & Capital Threshold</h3>
                </div>
                <p style="margin:0; color:#475569; line-height:1.6; font-size:13.5px;">SME IPOs have a mandatory minimum application threshold of at least ₹1 Lakh set by SEBI. For instance, an issue price of ₹80 with a lot size of 1,600 shares requires an upfront investment of ₹1,28,000 per application lot.</p>
            </div>

            <div style="background: linear-gradient(145deg, #1e293b, #0f172a); padding: 24px; border-radius: 16px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); color: white; display: flex; flex-direction: column; height: 100%;">
                <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom: 14px; border-bottom: 1px solid #334155; padding-bottom: 10px;">
                    <h3 style="font-size: 16px; font-weight: 700; color: #f8fafc; margin: 0;">BSE SME vs NSE Emerge</h3>
                    <span style="font-size: 10px; background: rgba(255,255,255,0.1); color: #cbd5e1; padding: 2px 7px; border-radius: 10px; font-weight: 600;">Exchanges</span>
                </div>
                <p style="margin:0; color:#cbd5e1; line-height:1.6; font-size:13px;">SME companies list on dedicated exchange platforms (BSE SME or NSE Emerge). Post-listing trades must also occur in full lot sizes, with mandatory appointed market makers providing 2-way continuous quotes for liquidity.</p>
            </div>

            <div style="background: white; padding: 24px; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); display: flex; flex-direction: column; height: 100%;">
                <div style="display:flex; align-items:center; gap:12px; margin-bottom:14px;">
                    <div style="width:36px; height:36px; background:#f5f3ff; border-radius:10px; display:flex; align-items:center; justify-content:center; color:#7c3aed; flex-shrink:0;">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin: 0;">SME Risk & Diligence</h3>
                </div>
                <p style="margin:0; color:#475569; line-height:1.6; font-size:13.5px;">SME enterprises are smaller in scale with concentrated customer or supplier risks. Always review the Draft Prospectus, verify historical profit margins, and never invest based solely on speculative unofficial GMP rumors.</p>
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
    const grid = document.getElementById('sme-open-grid');
    if (!grid) return;

    fetch('<?= BASE_URL ?>api/get_ipos.php?type=sme&status=open')
        .then(res => res.json())
        .then(data => {
            const ipos = (data.status === 'success' && data.data) ? data.data : [];
            
            // Update stats
            const statOpen = document.getElementById('stat-open-issues');
            if (statOpen) statOpen.textContent = ipos.length.toString();

            let retailTotal = 0, retailCount = 0;
            let qibTotal = 0, qibCount = 0;

            ipos.forEach(i => {
                if (i.retail_sub && parseFloat(i.retail_sub) > 0) {
                    retailTotal += parseFloat(i.retail_sub);
                    retailCount++;
                }
                if (i.qib_sub && parseFloat(i.qib_sub) > 0) {
                    qibTotal += parseFloat(i.qib_sub);
                    qibCount++;
                }
            });

            const statRetail = document.getElementById('stat-retail-avg');
            if (statRetail) statRetail.textContent = retailCount > 0 ? (retailTotal / retailCount).toFixed(2) + 'x' : '--';

            const statQib = document.getElementById('stat-qib-avg');
            if (statQib) statQib.textContent = qibCount > 0 ? (qibTotal / qibCount).toFixed(2) + 'x' : '--';

            if (ipos.length === 0) {
                grid.innerHTML = '<div style="grid-column: 1/-1; text-align: center; padding: 40px; color: #64748b; font-weight: 600; background: rgba(255,255,255,0.05); border-radius: 12px;">No open SME IPOs currently active for bidding. Check back soon!</div>';
                return;
            }

            let html = '';
            ipos.forEach(ipo => {
                const slug = ipo.slug || (ipo.symbol ? ipo.symbol.toLowerCase() : '#');
                const url = '<?= BASE_URL ?>sme/' + slug;
                const priceBand = ipo.price_band || (ipo.minimum_price && ipo.maximum_price ? ('₹' + ipo.minimum_price + ' - ₹' + ipo.maximum_price) : (ipo.issue_price ? '₹' + ipo.issue_price : '--'));
                const lotSize = ipo.lot_size ? ipo.lot_size + ' Shares' : '--';
                const issueSize = ipo.issue_size ? '₹' + ipo.issue_size + ' Cr' : '--';

                let gmpText = '--';
                if (ipo.gmp_price !== null && ipo.gmp_price !== undefined) {
                    const gVal = parseFloat(ipo.gmp_price);
                    const isPos = gVal > 0;
                    const color = isPos ? '#10b981' : (gVal < 0 ? '#ef4444' : '#64748b');
                    const sign = isPos ? '+' : '';
                    const pct = ipo.gmp_percentage ? (' (' + sign + ipo.gmp_percentage + '%)') : '';
                    gmpText = `<strong style="color:${color};">${sign}₹${ipo.gmp_price}${pct}</strong>`;
                }

                const subText = ipo.total_sub && parseFloat(ipo.total_sub) > 0 ? `<strong>${ipo.total_sub}x</strong>` : '<strong>--</strong>';

                function formatDt(dt) {
                    if (!dt) return '';
                    const d = new Date(dt);
                    return isNaN(d.getTime()) ? dt : d.toLocaleDateString('en-GB', {day:'numeric', month:'short'});
                }
                const closeDt = formatDt(ipo.close_date);
                const closeText = closeDt ? ('Closes ' + closeDt) : 'Date TBD';

                html += `
                <a href="${url}" class="animated-card card-sme" style="text-decoration:none; color:inherit; background:white;">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:14px;">
                        <span style="background:#f3e8ff; color:#7e22ce; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:800;">OPEN SME</span>
                        <span style="color:#64748b; font-size:12px; font-weight:600;">${closeText}</span>
                    </div>
                    <h3 style="font-size:18px; font-weight:800; margin-bottom:14px; color:#0f172a; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;" title="${ipo.name}">${ipo.name}</h3>
                    <div style="display:grid; grid-template-columns: 1fr 1fr; gap:12px; margin-bottom:14px;">
                        <div>
                            <div style="font-size:11px; color:#64748b; margin-bottom:2px;">Price Band</div>
                            <div style="font-weight:700; font-size:14px; color:#0f172a;">${priceBand}</div>
                        </div>
                        <div>
                            <div style="font-size:11px; color:#64748b; margin-bottom:2px;">Lot Size</div>
                            <div style="font-weight:700; font-size:14px; color:#0f172a;">${lotSize}</div>
                        </div>
                        <div>
                            <div style="font-size:11px; color:#64748b; margin-bottom:2px;">Issue Size</div>
                            <div style="font-weight:700; font-size:14px; color:#0f172a;">${issueSize}</div>
                        </div>
                        <div>
                            <div style="font-size:11px; color:#64748b; margin-bottom:2px;">Exchange</div>
                            <div style="font-weight:700; font-size:14px; color:#0f172a;">${ipo.listing_exchange || 'BSE SME'}</div>
                        </div>
                    </div>
                    <div style="padding-top:12px; border-top:1px dashed #e2e8f0; display:flex; justify-content:space-between; align-items:center; font-size:12px;">
                        <div>GMP: ${gmpText}</div>
                        <div>Sub: ${subText}</div>
                    </div>
                </a>`;
            });

            grid.innerHTML = html;
        })
        .catch(err => {
            console.error('Error fetching open SME IPOs:', err);
            grid.innerHTML = '<div style="grid-column: 1/-1; text-align: center; padding: 40px; color: #ef4444; font-weight: 600;">Failed to load open SME IPOs.</div>';
        });
});
</script>
</body>
</html>
