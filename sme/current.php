<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Current SME IPOs in India – Live SME IPO Issues | IPOSETU</title>
<meta name="description" content="Track live open SME IPOs currently accepting bids on NSE Emerge and BSE SME platforms with real-time subscription and GMP tracking."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
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
        padding: 60px 0;
    }
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<div class="sme-hero-wrapper" style="background: linear-gradient(135deg, #0f172a 0%, #2e1065 100%); padding: 60px 0; border-bottom: 1px solid #4c1d95; margin-bottom: 40px;">
    <div class="container">
        <div style="display: inline-block; padding: 4px 12px; background: rgba(139, 92, 246, 0.2); color: #c4b5fd; font-weight: 700; font-size: 12px; border-radius: 20px; margin-bottom: 16px; border: 1px solid rgba(139, 92, 246, 0.4);">SME SEGMENT</div>
        <div id="header-flex-container" style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 40px;">
            <div style="flex: 1; min-width: 300px;">
                <h1 style="font-size: 36px; font-weight: 800; margin-bottom: 12px; color: white;">Current SME IPOs in India</h1>
                <p style="color:#cbd5e1; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 0;">Track live open SME IPOs currently accepting bids on NSE Emerge and BSE SME platforms. Monitor subscription status, lot sizes, price bands, and grey market premiums in real time.</p>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding-bottom: 40px;">
    <div id="sme-current-grid" class="grid-container">
        <!-- Live Open SME IPOs loaded via JavaScript -->
        <div style="grid-column: span 3; text-align: center; padding: 40px; color: #64748b; font-weight: 600;">Loading current SME IPOs...</div>
    </div>
</div>

<!-- Bento Section: Decreased Dark Card Size -->
<section class="seo-content-section" style="padding: 50px 0; background: #f8fafc; border-top: 1px solid #e2e8f0; margin-top: 40px;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(380px, 1fr)); gap: 20px;">
            <!-- Feature Card -->
            <div style="background: #ffffff; padding: 22px 24px; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); display: flex; flex-direction: column; justify-content: center;">
                <div style="display:flex; align-items:center; gap:12px; margin-bottom:12px;">
                    <div style="width:34px; height:34px; background:#eff6ff; border-radius:10px; display:flex; align-items:center; justify-content:center; color:#3b82f6;">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <h3 style="font-size: 17px; font-weight: 800; color: #0f172a; margin: 0;">IPO Price & Lot Size</h3>
                </div>
                <p style="margin:0; color:#475569; line-height:1.6; font-size:13.5px;">The IPO price determines share value, while lot size sets the minimum application unit. For SMEs, SEBI requires minimum application amounts ranging between ₹1,00,000 to ₹1,40,000.</p>
            </div>
            
            <!-- Checklist Card (Decreased Size) -->
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
                        <span><strong>Liquidity Risk:</strong> Trading volumes are lower than Mainboard stocks.</span>
                    </li>
                    <li style="display:flex; align-items:center; gap:8px; color:#e2e8f0; font-size:12px; line-height:1.35;">
                        <div style="background:#dcfce7; color:#16a34a; width:16px; height:16px; border-radius:4px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="10" height="10" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
                        <span><strong>Business Scale:</strong> Higher sensitivity to client and market shifts.</span>
                    </li>
                    <li style="display:flex; align-items:center; gap:8px; color:#e2e8f0; font-size:12px; line-height:1.35;">
                        <div style="background:#dcfce7; color:#16a34a; width:16px; height:16px; border-radius:4px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="10" height="10" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
                        <span><strong>Due Diligence:</strong> Review DRHP documents rather than unverified tips.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const gridContainer = document.getElementById("sme-current-grid");
    if (!gridContainer) return;
    
    fetch('<?= BASE_URL ?>api/get_ipos.php?type=sme&status=open')
        .then(res => res.json())
        .then(data => {
            if (data.status !== 'success' || !data.data) {
                throw new Error("Invalid response");
            }
            
            const ipos = data.data;
            if (ipos.length === 0) {
                gridContainer.innerHTML = '<div style="grid-column: span 3; text-align: center; padding: 40px; color: #64748b; font-weight: 600;">No Open SME IPOs found.</div>';
                return;
            }
            
            let html = '';
            ipos.forEach(ipo => {
                const name = ipo.name || '--';
                
                let closeText = '--';
                if (ipo.close_date) {
                    const d = new Date(ipo.close_date);
                    closeText = `Closes ${d.getDate()} ${d.toLocaleString('default', { month: 'short' })}`;
                }

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
                const url = `/iposetu/ipo/${ipo.slug || (ipo.symbol ? ipo.symbol.toLowerCase() : '#')}`;
                
                html += `
                <a href="${url}" class="animated-card card-sme">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;">
                        <span style="background:#dcfce7; color:#166534; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:800;">OPEN SME</span>
                        <span style="color:#64748b; font-size:12px; font-weight:600;">${closeText}</span>
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
        })
        .catch(err => {
            console.error("Error loading SME IPOs:", err);
            gridContainer.innerHTML = '<div style="grid-column: span 3; text-align: center; padding: 40px; color: #ef4444; font-weight: 600;">Failed to load SME IPOs. Please try again later.</div>';
        });
});
</script>
</body>
</html>
