<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sme – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Sme on IPOSETU."/>
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

<div class="sme-hero-wrapper" style="background: linear-gradient(135deg, #0f172a 0%, #2e1065 100%); padding: 80px 0; margin-bottom: 40px;">
    <div class="container">
        <div style="display: inline-block; padding: 4px 12px; background: rgba(139, 92, 246, 0.2); color: #c4b5fd; font-weight: 700; font-size: 12px; border-radius: 20px; margin-bottom: 16px; border: 1px solid rgba(139, 92, 246, 0.4);">SME SEGMENT</div>
    <div id="header-flex-container"  style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 40px;">
        <div style="flex: 1; min-width: 300px;">
            <h1 style="font-size: 36px; font-weight: 800; margin-bottom: 12px; color: white;">SME IPOs in India</h1>
            
<p style="color:#cbd5e1; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 16px;">SME IPOs provide small and medium-sized businesses with an opportunity to raise capital from public investors and become listed companies. The SME segment is designed for emerging businesses that are developing their operations, expanding their market presence or looking to raise capital for future growth.</p>
<p style="color:#cbd5e1; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 24px;">SME IPOs can be found across a wide range of industries. Investors can use the All SME IPOs section to explore IPOs across different stages and compare their issue details, financial performance, subscription, GMP and listing performance.</p>

        </div>
        
        <div style="flex-shrink: 0; width: 320px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-top: 4px solid #8b5cf6; border-radius: 16px; padding: 24px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05);">
            <h3 style="font-size: 13px; font-weight: 800; color: #8b5cf6; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">SME Market Overview</h3>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 16px;">
                <div style="color:#cbd5e1; font-weight: 600; font-size: 14px;">Total SME Listings (YTD)</div>
                <div style="font-weight: 800; font-size: 18px; color: #8b5cf6;">104</div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 16px;">
                <div style="color:#cbd5e1; font-weight: 600; font-size: 14px;">Avg SME Fund Raise</div>
                <div style="font-weight: 800; font-size: 16px; color: white;">₹32 Cr</div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="color:#cbd5e1; font-weight: 600; font-size: 14px;">Top Sector</div>
                <div style="font-weight: 800; font-size: 14px; background: #e0e7ff; color: #3730a3; padding: 4px 10px; border-radius: 6px;">Manufacturing</div>
            </div>
        </div>
        
    </div>
    
    <div style="margin-top: 40px;">
        <h2 style="font-size: 20px; font-weight: 800; margin-bottom: 24px; border-left: 4px solid #8b5cf6; padding-left: 12px; color: white;">ALL SME IPOs</h2>
        <div class="grid-container" id="sme-ipo-grid">
            <div style="grid-column: span 3; text-align: center; padding: 40px; color: #64748b; font-weight: 600;">Loading SME IPOs...</div>
        </div>
              <!-- Pagination controls -->
        <div id="sme-pagination" style="display:flex; justify-content:space-between; align-items:center; margin-top:30px; padding: 15px; background: white; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
            <div id="sme-pagination-info" style="font-size:14px; color:#64748b; font-weight: 500;"></div>
            <div style="display:flex; gap:8px; align-items:center;">
                <button id="sme-pagination-prev" class="pg-btn" style="padding: 8px 16px; border: 1px solid #e2e8f0; background: white; border-radius: 6px; cursor: pointer; font-weight: 600; color: #475569; transition: all 0.2s;">&larr; Prev</button>
                <div id="sme-pagination-pages" class="pagination" style="display:flex; gap:5px;"></div>
                <button id="sme-pagination-next" class="pg-btn" style="padding: 8px 16px; border: 1px solid #e2e8f0; background: white; border-radius: 6px; cursor: pointer; font-weight: 600; color: #475569; transition: all 0.2s;">Next &rarr;</button>
            </div>
        </div>
    </div>
</div>
</div>

<section class="seo-content-section" style="padding: 40px 0; background: #f8fafc;">
    <div class="container">
        <!-- Header -->
        <div style="text-align:center; max-width: 800px; margin: 0 auto 48px;">
            <h2 style="font-size: 36px; font-weight: 800; color: #0f172a; margin-bottom: 16px; letter-spacing: -0.5px;">What is an SME IPO?</h2>
            <p style="font-size: 18px; color:#475569; line-height: 1.6;">An SME IPO is an Initial Public Offering by a small or medium-sized company through an SME platform of a stock exchange. In India, SME companies can seek listing on dedicated platforms such as NSE Emerge and the SME platform of BSE. NSE describes Emerge as a platform intended for emerging businesses that may not be large enough for the Main Board.</p>
        </div>
              <!-- Bento Grid: Balanced 2x2 Grid with Decreased Dark Card Size -->
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 40px; align-items: stretch;">
            <!-- Card 1: Company Size & Requirements -->
            <div style="background: white; padding: 22px 24px; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); display: flex; flex-direction: column; justify-content: center;">
                <div style="display:flex; align-items:center; gap:12px; margin-bottom:12px;">
                    <div style="width:34px; height:34px; background:#eff6ff; border-radius:10px; display:flex; align-items:center; justify-content:center; color:#3b82f6;">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <h3 style="font-size: 17px; font-weight: 800; color: #0f172a; margin: 0;">Company Size & Requirements</h3>
                </div>
                <p style="margin:0; color:#475569; line-height:1.6; font-size:13.5px;">Mainboard IPOs are strictly for large corporations with a post-issue paid-up capital of over ₹10 Crore, whereas SME IPOs are for emerging companies with a post-issue capital ranging from ₹1 Crore up to ₹25 Crore.</p>
            </div>

            <!-- Card 2: Liquidity & Risk Profile (Decreased, Sleek Dark Card) -->
            <div style="background: linear-gradient(145deg, #1e293b, #0f172a); padding: 18px 22px; border-radius: 16px; box-shadow: 0 4px 10px -2px rgba(0,0,0,0.12); color: white; display: flex; flex-direction: column; justify-content: center;">
                <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom: 10px; border-bottom: 1px solid #334155; padding-bottom: 8px;">
                    <div style="display:flex; align-items:center; gap:8px;">
                        <div style="width:24px; height:24px; background:rgba(239,68,68,0.15); border-radius:6px; display:flex; align-items:center; justify-content:center; color:#f87171;">
                            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                        <h3 style="font-size: 15px; font-weight: 700; color: #f8fafc; margin: 0;">Liquidity & Risk Profile</h3>
                    </div>
                    <span style="font-size: 11px; background: rgba(255,255,255,0.08); color: #cbd5e1; padding: 2px 7px; border-radius: 12px; font-weight: 600;">SEBI Advisory</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 6px;">
                    <li style="display:flex; align-items:center; gap:8px; color:#e2e8f0; font-size:12px; line-height:1.35;">
                        <div style="background:#dcfce7; color:#16a34a; width:16px; height:16px; border-radius:4px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="10" height="10" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
                        <span><strong>Liquidity Risk:</strong> Lower trading volumes; exit execution may take time.</span>
                    </li>
                    <li style="display:flex; align-items:center; gap:8px; color:#e2e8f0; font-size:12px; line-height:1.35;">
                        <div style="background:#dcfce7; color:#16a34a; width:16px; height:16px; border-radius:4px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="10" height="10" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
                        <span><strong>Business Scale:</strong> Concentrated client bases with higher operational sensitivity.</span>
                    </li>
                    <li style="display:flex; align-items:center; gap:8px; color:#e2e8f0; font-size:12px; line-height:1.35;">
                        <div style="background:#dcfce7; color:#16a34a; width:16px; height:16px; border-radius:4px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="10" height="10" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
                        <span><strong>Valuation Risk:</strong> High GMP & subscription do not substitute fundamentals.</span>
                    </li>
                    <li style="display:flex; align-items:center; gap:8px; color:#e2e8f0; font-size:12px; line-height:1.35;">
                        <div style="background:#dcfce7; color:#16a34a; width:16px; height:16px; border-radius:4px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="10" height="10" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
                        <span><strong>Due Diligence:</strong> Review DRHP filings & financial metrics, not unverified tips.</span>
                    </li>
                </ul>
            </div>

            <!-- Card 3: Dedicated Listing Platforms -->
            <div style="background: white; padding: 22px 24px; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); display: flex; flex-direction: column; justify-content: center;">
                <div style="display:flex; align-items:center; gap:12px; margin-bottom:12px;">
                    <div style="width:34px; height:34px; background:#fef3c7; border-radius:10px; display:flex; align-items:center; justify-content:center; color:#d97706;">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <h3 style="font-size: 17px; font-weight: 800; color: #0f172a; margin: 0;">Dedicated Listing Platforms</h3>
                </div>
                <p style="margin:0; color:#475569; line-height:1.6; font-size:13.5px;">Mainboard issues list on primary NSE and BSE. SME IPOs list on dedicated auxiliary platforms — <strong>NSE Emerge</strong> and <strong>BSE SME</strong> — specifically structured to help emerging businesses scale with tailored regulatory oversight.</p>
            </div>

            <!-- Card 4: Lot Size & Application Barrier -->
            <div style="background: white; padding: 22px 24px; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); display: flex; flex-direction: column; justify-content: center;">
                <div style="display:flex; align-items:center; gap:12px; margin-bottom:12px;">
                    <div style="width:34px; height:34px; background:#ecfdf5; border-radius:10px; display:flex; align-items:center; justify-content:center; color:#059669;">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <h3 style="font-size: 17px; font-weight: 800; color: #0f172a; margin: 0;">Lot Size & Application Barrier</h3>
                </div>
                <p style="margin:0; color:#475569; line-height:1.6; font-size:13.5px;">While retail investors can apply for Mainboard IPOs with ~₹15,000, SEBI mandates a minimum application size of ₹1,00,000 to ₹1,40,000 for SME IPOs. This lot size constraint also applies to secondary trading, ensuring informed capital participation.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>
<!-- Position I: Sticky Bottom Ad Container -->
<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.2"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const gridContainer = document.getElementById("sme-ipo-grid");
    if (!gridContainer) return;
    
    fetch('<?= BASE_URL ?>api/get_ipos.php?type=sme')
        .then(res => res.json())
        .then(data => {
            if (data.status !== 'success' || !data.data) {
                throw new Error("Invalid response");
            }
            
            const ipos = data.data;
            if (ipos.length === 0) {
                gridContainer.innerHTML = '<div style="grid-column: span 3; text-align: center; padding: 40px; color: #64748b; font-weight: 600;">No SME IPOs found.</div>';
                return;
            }
            
            let html = '';
            ipos.forEach(ipo => {
                const name = ipo.name || '--';
                const status = ipo.status || '--';
                const issueSize = ipo.issue_size ? '₹' + ipo.issue_size + ' Cr' : '--';
                const price = ipo.price_band || ipo.issue_price ? '₹' + (ipo.price_band || ipo.issue_price) : '--';
                
                let gmpDisplay = '--';
                if (ipo.gmp_price !== null && ipo.gmp_price !== undefined) {
                    const gmpVal = parseFloat(ipo.gmp_price);
                    const gmpPct = ipo.gmp_percentage ? `(${ipo.gmp_percentage}%)` : '';
                    if (gmpVal > 0) {
                        gmpDisplay = `<strong style="color:#10b981;">+₹${gmpVal} ${gmpPct}</strong>`;
                    } else if (gmpVal < 0) {
                        gmpDisplay = `<strong style="color:#ef4444;">-₹${Math.abs(gmpVal)} ${gmpPct}</strong>`;
                    } else {
                        gmpDisplay = `<strong>₹0 ${gmpPct}</strong>`;
                    }
                }
                
                const subDisplay = ipo.total_sub ? `<strong>${ipo.total_sub}x</strong>` : '--';
                
                const url = `/iposetu/sme/${ipo.slug ? ipo.slug : (ipo.symbol ? ipo.symbol.toLowerCase() : '#')}`;
                
                html += `
                <a href="${url}" class="animated-card card-sme">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;">
                        <span style="background:#f3e8ff; color:#6b21a8; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:800;">SME ISSUE</span>
                        <span style="color:#64748b; font-size:12px; font-weight:600;">Status: ${status}</span>
                    </div>
                    <h3 style="font-size:18px; font-weight:800; margin-bottom:16px; color: #0f172a;">${name}</h3>
                    <div style="display:flex; gap:24px; margin-bottom:8px;">
                        <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Issue Size</div><div style="font-weight:700; font-size:14px;">${issueSize}</div></div>
                        <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Price</div><div style="font-weight:700; font-size:14px;">${price}</div></div>
                    </div>
                    <div style="margin-top:16px; padding-top:16px; border-top:1px dashed #e2e8f0; display:flex; justify-content:space-between;">
                        <div style="font-size:12px; color:#64748b;">GMP: ${gmpDisplay}</div>
                        <div style="font-size:12px; color:#64748b;">Sub: ${subDisplay}</div>
                    </div>
                </a>`;
            });
            gridContainer.innerHTML = html;
            
            // Initialize pagination after grid is populated (20 per page)
            if (typeof initGridPagination === 'function') {
                initGridPagination('sme-ipo-grid', 'sme-pagination', 20);
            }
        })
        .catch(err => {
            console.error("Error loading SME IPOs:", err);
            gridContainer.innerHTML = '<div style="grid-column: span 3; text-align: center; padding: 40px; color: #ef4444; font-weight: 600;">Failed to load SME IPOs. Please try again later.</div>';
        });
});
</script>
</body>
</html>
