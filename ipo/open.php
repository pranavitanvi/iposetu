<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Open IPOs for Bidding Today – Real-Time Issue Details | IPOSETU</title>
<meta name="description" content="Browse IPOs open for subscription today. Get price band ranges, minimum bid lots, application amounts, and live bidding status on IPOSETU."/>
<link class="style-link" href="/iposetu/assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="/iposetu/assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
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
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/header.php'; ?>

<div class="container" style="padding-top: 60px; padding-bottom: 40px;">
    <div id="header-flex-container" style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 40px;">
        <div style="flex: 1; min-width: 300px;">
            <h1 style="font-size: 36px; font-weight: 800; margin-bottom: 12px; color: #0f172a;">Open IPOs in India</h1>
            <p style="color:#475569; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 16px;">Open IPOs are public issues currently accepting applications. During this period, eligible investors can submit bids within the announced dates and applicable investor categories.</p>
            <p style="color:#475569; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 0;">Review the final issue details, subscription status, and valuations before participating.</p>
        </div>
        
        <div style="flex-shrink: 0; width: 320px; background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05);">
            <h3 style="font-size: 13px; font-weight: 800; color: #94a3b8; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">Bidding Stats</h3>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px;">
                <div style="color: #475569; font-weight: 600; font-size: 14px;">Live IPOs</div>
                <div style="font-weight: 800; font-size: 18px; color: #0f172a;" id="live-ipos-count">--</div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px;">
                <div style="color: #475569; font-weight: 600; font-size: 14px;">Avg. QIB Demand</div>
                <div style="font-weight: 800; font-size: 16px; color: #8b5cf6;" id="avg-qib-demand">45.2x</div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="color: #475569; font-weight: 600; font-size: 14px;">Avg. Retail Demand</div>
                <div style="font-weight: 800; font-size: 16px; color: #3b82f6;" id="avg-retail-demand">12.8x</div>
            </div>
        </div>
    </div>

    <div style="margin-top: 40px;">
        <h2 style="font-size: 20px; font-weight: 800; margin-bottom: 24px; border-left: 4px solid #3b82f6; padding-left: 12px;">OPEN MAINBOARD IPOs</h2>
        <div class="grid-container" id="open-mainboard-grid">
            <div style="grid-column: 1/-1; text-align:center; padding: 40px; color:#475569;">Loading Open Mainboard IPOs...</div>
        </div>
        
        <h2 style="font-size: 20px; font-weight: 800; margin-bottom: 24px; border-left: 4px solid #8b5cf6; padding-left: 12px;">OPEN SME IPOs</h2>
        <div class="grid-container" id="open-sme-grid">
            <div style="grid-column: 1/-1; text-align:center; padding: 40px; color:#475569;">Loading Open SME IPOs...</div>
        </div>
    </div>
</div>

<section class="seo-content-section" style="padding: 60px 0; background: #f8fafc; border-top: 1px solid #e2e8f0; margin-top: 20px;">
    <div class="container">
        <!-- Header -->
        <div style="text-align:center; max-width: 800px; margin: 0 auto 48px;">
            <h2 style="font-size: 36px; font-weight: 800; color: #0f172a; margin-bottom: 16px; letter-spacing: -0.5px;">The Definitive Guide to Open IPOs</h2>
            <p style="font-size: 18px; color: #475569; line-height: 1.6;">Learn how to navigate the critical 3-day bidding window, interpret live subscription data, and time your applications perfectly.</p>
        </div>
        
        <!-- Bento Grid: All 4 cards in 1 line -->
        <style>
            .guide-grid-4 {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 16px;
                margin-bottom: 30px;
                align-items: stretch;
            }
            @media (max-width: 1100px) {
                .guide-grid-4 {
                    grid-template-columns: repeat(2, 1fr);
                }
            }
            @media (max-width: 600px) {
                .guide-grid-4 {
                    grid-template-columns: 1fr;
                }
            }
        </style>
        <div class="guide-grid-4">
            <!-- Feature Card 1 -->
            <div style="background: white; padding: 20px; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); display: flex; flex-direction: column; height: 100%;">
                <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                    <div style="width:32px; height:32px; background:#eff6ff; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#3b82f6; flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <h3 style="font-size: 15px; font-weight: 800; color: #0f172a; margin: 0; line-height: 1.3;">How Long Does an IPO Remain Open?</h3>
                </div>
                <p style="margin:0; color:#475569; line-height:1.55; font-size:13px;">By SEBI regulations, an IPO must remain open for a minimum of 3 working days. The retail cutoff is typically 5:00 PM on the closing day. Submitting before the final hours prevents bank UPI mandate delays.</p>
            </div>

            <!-- Feature Card 2 (Pre-Apply Checklist) -->
            <div style="background: linear-gradient(145deg, #1e293b, #0f172a); padding: 20px; border-radius: 16px; box-shadow: 0 4px 10px -2px rgba(0,0,0,0.12); color: white; display: flex; flex-direction: column; height: 100%;">
                <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom: 12px; border-bottom: 1px solid #334155; padding-bottom: 8px;">
                    <h3 style="font-size: 15px; font-weight: 700; color: #f8fafc; margin: 0;">Pre-Apply Checklist</h3>
                    <span style="font-size: 10px; background: rgba(255,255,255,0.1); color: #cbd5e1; padding: 2px 6px; border-radius: 10px; font-weight: 600;">Essential</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                    <li style="display:flex; align-items:flex-start; gap:8px; color:#e2e8f0; font-size:12px; line-height:1.35;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" style="flex-shrink:0; margin-top:2px;"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span>Bid at "Cut-off Price" for maximum allotment chance.</span>
                    </li>
                    <li style="display:flex; align-items:flex-start; gap:8px; color:#e2e8f0; font-size:12px; line-height:1.35;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" style="flex-shrink:0; margin-top:2px;"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span>Monitor QIB institutional demand on Day 2 and Day 3.</span>
                    </li>
                    <li style="display:flex; align-items:flex-start; gap:8px; color:#e2e8f0; font-size:12px; line-height:1.35;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" style="flex-shrink:0; margin-top:2px;"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span>Ensure adequate balance for UPI mandate before 5 PM.</span>
                    </li>
                </ul>
            </div>

            <!-- Feature Card 3 -->
            <div style="background: white; padding: 20px; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); display: flex; flex-direction: column; height: 100%;">
                <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                    <div style="width:32px; height:32px; background:#fef3c7; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#d97706; flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <h3 style="font-size: 15px; font-weight: 800; color: #0f172a; margin: 0; line-height: 1.3;">Tracking Subscription During Bidding</h3>
                </div>
                <p style="margin:0; color:#475569; line-height:1.55; font-size:13px;">Retail and NII categories often fill up first, while QIBs strategically deploy on Day 3 afternoon. Monitoring final-day institutional appetite is the best health check of an issue.</p>
            </div>

            <!-- Feature Card 4 -->
            <div style="background: white; padding: 20px; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); display: flex; flex-direction: column; height: 100%;">
                <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                    <div style="width:32px; height:32px; background:#ecfdf5; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#059669; flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <h3 style="font-size: 15px; font-weight: 800; color: #0f172a; margin: 0; line-height: 1.3;">Interpreting Live GMP for Open Issues</h3>
                </div>
                <p style="margin:0; color:#475569; line-height:1.55; font-size:13px;">During open bidding, Grey Market Premium fluctuates based on oversubscription. While GMP indicates market mood, always review company fundamentals before committing capital.</p>
            </div>
        </div>
        
        <!-- FAQs: Clean single-chevron Accordion -->
        <div style="margin-top: 40px;">
            <h3 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 24px; text-align: center;">Frequently Asked Questions</h3>
            <div style="max-width: 800px; margin: 0 auto;">
                <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e2e8f0; margin-bottom: 16px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                    <div style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';">
                        <div style="font-weight:700; font-size:16px; color:#1e293b;">Can I modify my bid while the IPO is open?</div>
                        <svg width="20" height="20" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24" style="transition:transform 0.2s;"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #e2e8f0; font-size:15px; color:#475569; line-height:1.6;">
                        Yes. As long as the IPO bidding window is open, you can revise your bid quantity or price, or even completely withdraw your application through your broker's platform.
                    </div>
                </div>
                <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e2e8f0; margin-bottom: 16px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                    <div style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';">
                        <div style="font-weight:700; font-size:16px; color:#1e293b;">What happens when an Open IPO closes?</div>
                        <svg width="20" height="20" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24" style="transition:transform 0.2s;"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #e2e8f0; font-size:15px; color:#475569; line-height:1.6;">
                        After the 5:00 PM cutoff on the closing date, the exchange stops accepting new applications. The issue then proceeds to the Basis of Allotment stage, where the registrar decides who gets the shares.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/footer.php'; ?>
<script src="/iposetu/assets/js/components.js?v=6.2"></script>
<script src="/iposetu/assets/js/main.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    function loadOpenIPOs() {
        const mbGrid = document.getElementById("open-mainboard-grid");
        const smeGrid = document.getElementById("open-sme-grid");
        if (!mbGrid || !smeGrid) return;
        
        fetch('/iposetu/api/get_ipos.php?status=open')
            .then(res => res.json())
            .then(data => {
                let mbHtml = '';
                let smeHtml = '';
                
                if (data.status !== "success" || !data.data || data.data.length === 0) {
                    mbGrid.innerHTML = '<div style="grid-column: 1/-1; text-align:center; padding: 40px; color:#64748b;">No open Mainboard IPOs right now.</div>';
                    smeGrid.innerHTML = '<div style="grid-column: 1/-1; text-align:center; padding: 40px; color:#64748b;">No open SME IPOs right now.</div>';
                    return;
                }
                
                const liveCountEl = document.getElementById("live-ipos-count");
                if (liveCountEl) liveCountEl.textContent = data.data.length;

                data.data.forEach(ipo => {
                    let gmpText = '--';
                    if (ipo.gmp_price) {
                        let isPos = parseFloat(ipo.gmp_price) > 0;
                        let color = isPos ? '#10b981' : (parseFloat(ipo.gmp_price) < 0 ? '#ef4444' : '#64748b');
                        let sign = isPos ? '+' : '';
                        let pct = ipo.gmp_percentage ? ` (${sign}${ipo.gmp_percentage}%)` : '';
                        gmpText = `<strong style="color:${color};">${sign}₹${ipo.gmp_price}${pct}</strong>`;
                    } else {
                        gmpText = '<strong>--</strong>';
                    }
                    
                    const priceBand = ipo.price_band || '--';
                    const issueSize = ipo.issue_size ? `₹${ipo.issue_size} Cr` : '--';
                    const subText = ipo.total_sub && parseFloat(ipo.total_sub) > 0 ? `<strong>${ipo.total_sub}x</strong>` : '<strong>--</strong>';
                    
                    const formatDt = dt => {
                        if (!dt) return '';
                        const d = new Date(dt);
                        return isNaN(d) ? dt : d.toLocaleDateString('en-GB', {day:'numeric', month:'short'});
                    };
                    const closeDt = formatDt(ipo.close_date);
                    const closeText = closeDt ? `Closes ${closeDt}` : 'Date TBD';
                    
                    const isSME = ipo.type && ipo.type.toUpperCase().includes('SME');
                    const cardClass = isSME ? 'card-sme' : 'card-mainboard';
                    const badgeText = isSME ? 'OPEN SME' : 'OPEN';
                    const ipoUrl = `/iposetu/ipo/${ipo.slug || (ipo.symbol ? ipo.symbol.toLowerCase() : '#')}`;
                    
                    const cardHtml = `<a href="${ipoUrl}" class="animated-card ${cardClass}" style="text-decoration:none; color:inherit;">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;">
                            <span style="background:#dcfce7; color:#166534; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:800;">${badgeText}</span>
                            <span style="color:#64748b; font-size:12px; font-weight:600;">${closeText}</span>
                        </div>
                        <h3 style="font-size:18px; font-weight:800; margin-bottom:16px; color:#0f172a;">${ipo.name}</h3>
                        <div style="display:flex; gap:24px; margin-bottom:8px;">
                            <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Issue Size</div><div style="font-weight:700; font-size:14px;">${issueSize}</div></div>
                            <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Price</div><div style="font-weight:700; font-size:14px;">${priceBand}</div></div>
                        </div>
                        <div style="margin-top:16px; padding-top:16px; border-top:1px dashed #e2e8f0; display:flex; justify-content:space-between;">
                            <div style="font-size:12px; color:#64748b;">GMP: ${gmpText}</div>
                            <div style="font-size:12px; color:#64748b;">Sub: ${subText}</div>
                        </div>
                    </a>`;
                    
                    if (isSME) {
                        smeHtml += cardHtml;
                    } else {
                        mbHtml += cardHtml;
                    }
                });
                
                mbGrid.innerHTML = mbHtml || '<div style="grid-column: 1/-1; text-align:center; padding: 40px; color:#64748b;">No open Mainboard IPOs right now.</div>';
                smeGrid.innerHTML = smeHtml || '<div style="grid-column: 1/-1; text-align:center; padding: 40px; color:#64748b;">No open SME IPOs right now.</div>';
            })
            .catch(err => {
                console.error("Error fetching open IPOs:", err);
                mbGrid.innerHTML = '<div style="grid-column: 1/-1; text-align:center; padding: 40px; color:#ef4444;">Error loading data.</div>';
                smeGrid.innerHTML = '<div style="grid-column: 1/-1; text-align:center; padding: 40px; color:#ef4444;">Error loading data.</div>';
            });
    }

    loadOpenIPOs();
});
</script>
</body>
</html>
