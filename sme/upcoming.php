<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Upcoming – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Upcoming on IPOSETU."/>
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
            <h1 style="font-size: 36px; font-weight: 800; margin-bottom: 12px; color: white;">Upcoming SME IPOs in India</h1>
            
<p style="color:#cbd5e1; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 16px;">Upcoming SME IPOs are companies preparing to enter the SME public market but whose IPO subscription period has not yet completed. Tracking these companies before the issue opens gives investors time to study the business, financials, IPO structure and risk factors.</p>
<p style="color:#cbd5e1; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 24px;">Researching an SME IPO before it opens can be more useful than making a decision during a short subscription window. Investors can review the company's offer documents before subscription begins.</p>

        </div>
        
        <div style="flex-shrink: 0; width: 320px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-top: 4px solid #8b5cf6; border-radius: 16px; padding: 24px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05);">
            <h3 style="font-size: 13px; font-weight: 800; color: #8b5cf6; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">SME Pipeline</h3>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 16px;">
                <div style="color:#cbd5e1; font-weight: 600; font-size: 14px;">DRHPs Filed</div>
                <div id="stat-drhp-sidebar" style="font-weight: 800; font-size: 18px; color: white;">--</div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 16px;">
                <div style="color:#cbd5e1; font-weight: 600; font-size: 14px;">Exchange Approved</div>
                <div id="stat-approved-sidebar" style="font-weight: 800; font-size: 18px; color: #fcd34d;">--</div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="color:#cbd5e1; font-weight: 600; font-size: 14px;">Opening Next Week</div>
                <div id="stat-opening-sidebar" style="font-weight: 800; font-size: 18px; color: #f59e0b;">--</div>
            </div>
        </div>
        
    </div>
    
    
    
    </div>
</div>
<div class="container" style="padding-bottom: 40px;">
<style>
    .pipeline-visual {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 60px;
        background: white;
        padding: 32px;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
    }
    .pipe-node {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        z-index: 2;
    }
    .pipe-circle {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: white;
        border: 3px solid #cbd5e1;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 16px;
        color: #64748b;
        margin-bottom: 12px;
    }
    .pipe-label {
        font-size: 12px;
        font-weight: 700;
        color: #475569;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .pipe-line {
        flex: 1;
        height: 3px;
        background: #e2e8f0;
        position: relative;
        top: -14px;
        z-index: 1;
        margin: 0 10px;
    }
    
    .vertical-timeline {
        position: relative;
        padding-left: 32px;
        margin-bottom: 40px;
    }
    .vertical-timeline::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: #e2e8f0;
        border-radius: 3px;
    }
    .vt-item {
        position: relative;
        margin-bottom: 32px;
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 24px;
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
    }
    .vt-item::before {
        content: '';
        position: absolute;
        left: -39px;
        top: 24px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: white;
        border: 4px solid var(--accent-color);
        box-shadow: 0 0 0 4px white;
    }
</style>

    <style>:root { --accent-color: #7c3aed; }</style>
    <div style="margin-top: 40px;">
        <div class="pipeline-visual">
            <div class="pipe-node"><div class="pipe-circle" id="stat-drhp-visual">--</div><div class="pipe-label">DRHP</div></div>
            <div class="pipe-line"></div>
            <div class="pipe-node"><div class="pipe-circle" id="stat-approved-visual" style="border-color:#7c3aed; color:#7c3aed;">--</div><div class="pipe-label">Approved</div></div>
            <div class="pipe-line"></div>
            <div class="pipe-node"><div class="pipe-circle" id="stat-expected-visual" style="border-color:#f59e0b; color:#f59e0b;">--</div><div class="pipe-label">Expected</div></div>
            <div class="pipe-line"></div>
            <div class="pipe-node"><div class="pipe-circle" id="stat-allotment-visual" style="border-color:#10b981; color:#10b981;">--</div><div class="pipe-label">Allotment</div></div>
            <div class="pipe-line"></div>
            <div class="pipe-node"><div class="pipe-circle" id="stat-listing-visual" style="border-color:#0f172a; color:#0f172a;">--</div><div class="pipe-label">Listing</div></div>
        </div>
        
        <h2 style="font-size: 20px; font-weight: 800; margin-bottom: 24px; border-left: 4px solid #7c3aed; padding-left: 12px; color: #0f172a;">PIPELINE TIMELINE</h2>
        <div class="vertical-timeline" id="sme-upcoming-timeline">
            <div style="text-align: center; padding: 40px; color: #64748b; font-weight: 600;">Loading Upcoming SME IPOs...</div>
        </div>
        <div id="sme-upcoming-pagination" style="margin-top: 20px; display: flex; justify-content: center;"></div>
    </div>
</div>
<section class="seo-content-section" style="padding: 48px 0 60px; background: #f8fafc; border-top: 1px solid #e2e8f0;">
    <div class="container">
        <!-- Section Header -->
        <div style="text-align: center; max-width: 820px; margin: 0 auto 40px;">
            <div style="font-size: 13px; font-weight: 800; color: #7c3aed; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 8px;">Pre-Issue Due Diligence</div>
            <h2 style="font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 14px; letter-spacing: -0.5px;">What Should You Research Before an SME IPO Opens?</h2>
            <p style="font-size: 16px; color: #475569; line-height: 1.6;">Unlike mainboard issues, SME IPOs have smaller operating scales, higher lot sizes (typically ₹1 Lakh+), and mandated market makers. Evaluating these 4 pillars before bidding helps you avoid traps and identify high-conviction opportunities.</p>
        </div>

        <!-- 4 Pillar Due Diligence Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px; margin-bottom: 50px;">
            <div style="background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); transition: transform 0.2s, box-shadow 0.2s;">
                <div style="width: 44px; height: 44px; border-radius: 12px; background: #ede9fe; color: #7c3aed; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-bottom: 16px; font-weight: 800;">1</div>
                <h3 style="font-size: 18px; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Promoter & Track Record</h3>
                <p style="font-size: 14px; color: #64748b; line-height: 1.6; margin: 0;">Analyze promoter background, corporate governance, related party transactions, and any litigation mentioned in the DRHP/RHP. Experienced management with proven execution capability is critical for small-cap longevity.</p>
            </div>

            <div style="background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); transition: transform 0.2s, box-shadow 0.2s;">
                <div style="width: 44px; height: 44px; border-radius: 12px; background: #ecfdf5; color: #10b981; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-bottom: 16px; font-weight: 800;">2</div>
                <h3 style="font-size: 18px; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Financial Quality & Margins</h3>
                <p style="font-size: 14px; color: #64748b; line-height: 1.6; margin: 0;">Review revenue CAGR, EBITDA margins, and Return on Equity (ROE) over the past 3 fiscal years. Watch out for sudden pre-IPO revenue spikes or inflated receivables that do not translate into operating cash flows.</p>
            </div>

            <div style="background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); transition: transform 0.2s, box-shadow 0.2s;">
                <div style="width: 44px; height: 44px; border-radius: 12px; background: #eff6ff; color: #2563eb; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-bottom: 16px; font-weight: 800;">3</div>
                <h3 style="font-size: 18px; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Objects of the Issue</h3>
                <p style="font-size: 14px; color: #64748b; line-height: 1.6; margin: 0;">Confirm if the proceeds represent a Fresh Issue for capital expenditure, capacity expansion, or debt reduction. Issues dominated by Offer for Sale (OFS) mean early shareholders are exiting without new growth capital entering the firm.</p>
            </div>

            <div style="background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); transition: transform 0.2s, box-shadow 0.2s;">
                <div style="width: 44px; height: 44px; border-radius: 12px; background: #fffbeb; color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-bottom: 16px; font-weight: 800;">4</div>
                <h3 style="font-size: 18px; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Market Maker & Valuations</h3>
                <p style="font-size: 14px; color: #64748b; line-height: 1.6; margin: 0;">SME exchanges require a market maker for 3 years to ensure continuous liquidity. Compare the company's P/E ratio against listed industry peers to confirm the issue price leaves upside on the table for retail bidders.</p>
            </div>
        </div>

        <!-- FAQ Section -->
        <div style="background: white; border: 1px solid #e2e8f0; border-radius: 24px; padding: 36px 40px; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.04); margin-bottom: 40px;">
            <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #f1f5f9; padding-bottom: 18px; margin-bottom: 24px; flex-wrap: wrap; gap: 12px;">
                <div>
                    <h3 style="font-size: 24px; font-weight: 800; color: #0f172a; margin: 0;">Frequently Asked Questions (SME IPOs)</h3>
                    <p style="font-size: 14px; color: #64748b; margin: 4px 0 0;">Everything you need to know about bidding, allotment, and listing for upcoming SME public issues.</p>
                </div>
                <span style="font-size: 12px; font-weight: 700; background: #ede9fe; color: #7c3aed; padding: 6px 14px; border-radius: 20px;">SME Knowledge Hub</span>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 24px;">
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 20px;">
                    <div style="font-size: 15px; font-weight: 800; color: #0f172a; margin-bottom: 8px; display: flex; align-items: flex-start; gap: 8px;">
                        <span style="color: #7c3aed;">Q1.</span> What is the minimum investment required for an SME IPO?
                    </div>
                    <div style="font-size: 13.5px; color: #475569; line-height: 1.6;">
                        Under SEBI regulations, SME IPOs have a standardized minimum application threshold of at least <strong>₹1,00,000 to ₹1,40,000</strong> per application lot (often 1,000 to 2,000 shares depending on the issue price). Retail investors must bid for at least one full lot.
                    </div>
                </div>

                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 20px;">
                    <div style="font-size: 15px; font-weight: 800; color: #0f172a; margin-bottom: 8px; display: flex; align-items: flex-start; gap: 8px;">
                        <span style="color: #7c3aed;">Q2.</span> When are the price band and lot size announced?
                    </div>
                    <div style="font-size: 13.5px; color: #475569; line-height: 1.6;">
                        The company and lead manager finalize the price band and lot size at least <strong>2 working days before the IPO opening date</strong>. Once announced, the data is updated on exchange portals (BSE SME / NSE Emerge) and reflected immediately on IPOSETU.
                    </div>
                </div>

                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 20px;">
                    <div style="font-size: 15px; font-weight: 800; color: #0f172a; margin-bottom: 8px; display: flex; align-items: flex-start; gap: 8px;">
                        <span style="color: #7c3aed;">Q3.</span> Can retail investors apply for SME IPOs using UPI?
                    </div>
                    <div style="font-size: 13.5px; color: #475569; line-height: 1.6;">
                        Yes. Retail investors can apply up to <strong>₹2 Lakhs</strong> per application using UPI ASBA across discount brokers (Zerodha, Groww, AngelOne) and banking apps. Applications exceeding ₹2 Lakhs fall into the HNI (Non-Institutional) category and can be submitted via Netbanking ASBA.
                    </div>
                </div>

                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 20px;">
                    <div style="font-size: 15px; font-weight: 800; color: #0f172a; margin-bottom: 8px; display: flex; align-items: flex-start; gap: 8px;">
                        <span style="color: #7c3aed;">Q4.</span> How does allotment work if an SME IPO is heavily oversubscribed?
                    </div>
                    <div style="font-size: 13.5px; color: #475569; line-height: 1.6;">
                        For the retail portion, if an issue is oversubscribed, allotment is conducted through a <strong>computerized lucky draw (lottery system)</strong> supervised by the exchange registrar. Successful applicants receive exactly 1 minimum lot, while unallocated funds are unblocked within T+2 days.
                    </div>
                </div>

                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 20px;">
                    <div style="font-size: 15px; font-weight: 800; color: #0f172a; margin-bottom: 8px; display: flex; align-items: flex-start; gap: 8px;">
                        <span style="color: #7c3aed;">Q5.</span> How are SME shares traded after listing?
                    </div>
                    <div style="font-size: 13.5px; color: #475569; line-height: 1.6;">
                        Post-listing, SME shares cannot be bought or sold as individual shares. They must be traded in <strong>predefined lot sizes</strong> (typically the same lot size as the IPO). A designated Market Maker provides continuous two-way buy/sell quotes during trading hours.
                    </div>
                </div>

                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 20px;">
                    <div style="font-size: 15px; font-weight: 800; color: #0f172a; margin-bottom: 8px; display: flex; align-items: flex-start; gap: 8px;">
                        <span style="color: #7c3aed;">Q6.</span> What are the primary risk factors in SME investing?
                    </div>
                    <div style="font-size: 13.5px; color: #475569; line-height: 1.6;">
                        Key risks include <strong>liquidity constraints</strong> (wider bid-ask spreads), dependency on a small customer base or specific geography, and circuit limit volatility. Investors should never invest solely based on unofficial GMP rumors.
                    </div>
                </div>
            </div>
        </div>

        <!-- Risk Advisory Banner -->
        <div style="background: #0f172a; color: white; border-radius: 16px; padding: 24px 32px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
            <div style="max-width: 750px;">
                <div style="font-size: 16px; font-weight: 800; color: #fbbf24; margin-bottom: 6px;">Important Investor Notice</div>
                <div style="font-size: 13.5px; color: #cbd5e1; line-height: 1.6;">
                    SME securities carry high risk due to low liquidity and market cap concentration. Offer documents (DRHP/RHP) should be read carefully before bidding. All applications are executed under SEBI guidelines via ASBA where funds remain in your bank account until allotment.
                </div>
            </div>
            <a href="<?= BASE_URL ?>learn/asba.php" style="background: #7c3aed; color: white; padding: 12px 24px; border-radius: 10px; font-size: 14px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; white-space: nowrap;">Learn ASBA Process →</a>
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
    const timeline = document.getElementById("sme-upcoming-timeline");
    if (!timeline) return;
    
    fetch('<?= BASE_URL ?>api/get_ipos.php?type=sme&status=upcoming')
        .then(res => res.json())
        .then(data => {
            if (data.status !== 'success' || !data.data) {
                throw new Error("Invalid response");
            }
            
            const ipos = data.data;
            if (ipos.length === 0) {
                timeline.innerHTML = '<div style="text-align: center; padding: 40px; color: #64748b; font-weight: 600;">No Upcoming SME IPOs found.</div>';
                return;
            }
            
            let html = '';
            ipos.forEach(ipo => {
                const name = ipo.name || '--';
                const issueSize = ipo.issue_size ? '&#8377;' + ipo.issue_size + ' Cr' : 'TBA';
                
                let dateDisplay = 'UPCOMING';
                if (ipo.open_date) {
                    const d = new Date(ipo.open_date);
                    dateDisplay = `OPENS ${d.getDate()} ${d.toLocaleString('default', { month: 'short' }).toUpperCase()}`;
                }
                
                const url = `../ipo/${ipo.symbol ? ipo.symbol.toLowerCase() : '#'}.html`;
                
                html += `
                <div class="vt-item">
                    <div style="display:flex; justify-content:space-between; margin-bottom:12px;">
                        <h3 style="font-size:18px; font-weight:800; color:#0f172a;"><a href="${url}" style="color:inherit; text-decoration:none;">${name}</a></h3>
                        <span style="color:#f59e0b; font-size:12px; font-weight:800;">${dateDisplay}</span>
                    </div>
                    <div style="font-size:14px; color:#475569;">Estimated Issue Size: ${issueSize}</div>
                </div>`;
            });
            timeline.innerHTML = html;
            if (typeof initGridPagination === 'function') {
                initGridPagination('sme-upcoming-timeline', 'sme-upcoming-pagination', 20);
            }

            // Update stats
            let openingNextWeek = 0;
            const now = new Date();
            const nextWeek = new Date(now.getTime() + 7 * 24 * 60 * 60 * 1000);
            ipos.forEach(ipo => {
                if (ipo.open_date) {
                    const d = new Date(ipo.open_date);
                    if (d > now && d <= nextWeek) openingNextWeek++;
                }
            });
            
            const elOpenSidebar = document.getElementById('stat-opening-sidebar');
            const elExpVisual = document.getElementById('stat-expected-visual');
            
            if (elOpenSidebar) elOpenSidebar.innerText = openingNextWeek;
            if (elExpVisual) elExpVisual.innerText = ipos.length;
            
        })
        .catch(err => {
            console.error("Error loading SME IPOs:", err);
            timeline.innerHTML = '<div style="text-align: center; padding: 40px; color: #ef4444; font-weight: 600;">Failed to load SME IPOs. Please try again later.</div>';
        });
});
</script>
</body>
</html>

