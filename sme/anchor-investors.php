<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Anchor Investors – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Anchor Investors on IPOSETU."/>
<link class="style-link" href="/iposetu/assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="/iposetu/assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/header.php'; ?>

<main class="page-animate">
    <style>
        @keyframes fadeIn { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
        .page-animate { animation: fadeIn 0.8s ease-out; font-family: 'Inter', sans-serif; background: #f8fafc; padding-bottom: 80px; }
        
        .anchor-hero { background: #0f172a; color: white; padding: 80px 24px 100px 24px; text-align: center; }
        .hero-title { font-size: 48px; font-weight: 900; line-height: 1.1; margin-bottom: 20px; }
        .hero-subtitle { font-size: 18px; color: #94a3b8; max-width: 800px; margin: 0 auto; line-height: 1.6; }

        .split-layout { max-width: 1300px; margin: -60px auto 0 auto; display: grid; grid-template-columns: 350px 1fr; gap: 40px; padding: 0 24px; position: relative; z-index: 10; align-items: start; }
        
        .directory-list { display: flex; flex-direction: column; gap: 12px; position: sticky; top: 100px; }
        .dir-search { padding: 16px 20px; border-radius: 12px; border: 1px solid #e2e8f0; margin-bottom: 12px; font-size: 15px; width: 100%; box-shadow: 0 10px 20px rgba(0,0,0,0.05); }
        .dir-item { padding: 20px; border-radius: 12px; border: 1px solid #e2e8f0; background: white; cursor: pointer; transition: all 0.2s; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 4px 6px rgba(0,0,0,0.02); }
        .dir-item:hover, .dir-item.active { background: #2563eb; color: white; border-color: #2563eb; transform: translateX(10px); }
        .dir-item:hover .dir-sub, .dir-item.active .dir-sub { color: #bfdbfe; }
        .dir-title { font-weight: 800; font-size: 16px; margin-bottom: 4px; }
        .dir-sub { font-size: 12px; color: #64748b; font-weight: 600; }
        
        .detail-pane { background: white; border: 1px solid #e2e8f0; border-radius: 24px; padding: 50px; box-shadow: 0 20px 40px rgba(0,0,0,0.03); }
        .badge { display: inline-flex; align-items: center; padding: 6px 12px; background: #e0e7ff; color: #4338ca; border-radius: 20px; font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 24px; }
        
        .invest-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; margin-top: 32px; margin-bottom: 40px; }
        .invest-card { border: 1px solid #e2e8f0; background: #f8fafc; padding: 24px; border-radius: 16px; transition: transform 0.2s; }
        .invest-card:hover { transform: translateY(-5px); background: white; border-color: #cbd5e1; box-shadow: 0 15px 30px rgba(0,0,0,0.06); }
        
        .info-prose h3 { font-size: 24px; font-weight: 900; margin-top: 40px; margin-bottom: 16px; color: #0f172a; border-bottom: 2px solid #f1f5f9; padding-bottom: 12px; }
        .info-prose p { font-size: 16px; color: #475569; line-height: 1.8; margin-bottom: 20px; }
        .info-prose ul { margin-bottom: 24px; padding-left: 20px; }
        .info-prose li { font-size: 16px; color: #475569; margin-bottom: 12px; line-height: 1.6; }

        @media (max-width: 992px) { .split-layout { grid-template-columns: 1fr; } .directory-list { position: static; flex-direction: row; overflow-x: auto; padding-bottom: 20px; } .dir-item { min-width: 250px; } .dir-item:hover, .dir-item.active { transform: translateY(-5px); } }
    </style>

    <div class="anchor-hero">
        <h1 class="hero-title">SME Anchor Investors Directory</h1>
        <p class="hero-subtitle">Institutional backing provides immense conviction for retail investors. Discover the elite mutual funds, FPIs, and AIFs that are heavily betting on the Indian SME growth story, and track their historical lock-in periods.</p>
    </div>

    <div class="split-layout">
        <!-- LEFT: Directory -->
        <div class="directory-list">
            <input type="text" class="dir-search" placeholder="Search Funds...">
            <div class="dir-item active">
                <div><div class="dir-title">BofA Securities</div><div class="dir-sub">Global Institutional</div></div>
                <div>→</div>
            </div>
            <div class="dir-item">
                <div><div class="dir-title">Nippon India MF</div><div class="dir-sub">Domestic Mutual Fund</div></div>
                <div>→</div>
            </div>
            <div class="dir-item">
                <div><div class="dir-title">Quant Small Cap Fund</div><div class="dir-sub">Aggressive Domestic</div></div>
                <div>→</div>
            </div>
            <div class="dir-item">
                <div><div class="dir-title">Morgan Stanley Asia</div><div class="dir-sub">FPI / FII</div></div>
                <div>→</div>
            </div>
            <div class="dir-item">
                <div><div class="dir-title">Societe Generale</div><div class="dir-sub">European FPI</div></div>
                <div>→</div>
            </div>
             <div class="dir-item">
                <div><div class="dir-title">HDFC SME Fund</div><div class="dir-sub">Domestic AIF</div></div>
                <div>→</div>
            </div>
        </div>

        <!-- RIGHT: Detail Pane -->
        <div class="detail-pane">
            <div class="badge">🎯 High Conviction Fund</div>
            <h2 style="font-size: 36px; font-weight: 900; color: #0f172a; margin-bottom: 12px;">BofA Securities Europe SA</h2>
            <p style="font-size: 16px; color: #475569; line-height: 1.8; margin-bottom: 30px;">Bank of America Securities has aggressively expanded its portfolio into high-growth Indian SMEs over the past 24 months, focusing heavily on AI-driven tech companies, green energy infrastructure, and niche manufacturing units. Their presence in an SME anchor book is highly regarded by retail HNIs as a stamp of institutional quality due to their rigorous due diligence process.</p>
            
            <h3 style="font-size: 20px; font-weight: 800; border-bottom: 2px solid #f1f5f9; padding-bottom: 12px; margin-top: 40px; color: #0f172a;">Recent SME Allocations (2026)</h3>
            
            <div class="invest-grid">
                <div class="invest-card">
                    <div style="display:flex; justify-content:space-between; margin-bottom:12px;">
                        <span style="font-weight:800; color:#0f172a; font-size: 18px;">Vidyut Tech</span>
                        <span style="color:#10b981; font-weight:800;">+145%</span>
                    </div>
                    <div style="font-size:12px; color:#64748b; font-weight:700; margin-bottom:4px;">ANCHOR ALLOCATION</div>
                    <div style="font-size:24px; font-weight:900; color:#3b82f6; margin-bottom: 12px;">₹14.5 Cr</div>
                    <div style="font-size: 12px; color: #ef4444; font-weight: 700;">Lock-in Expiry: 15-Mar-2026</div>
                </div>
                
                <div class="invest-card">
                    <div style="display:flex; justify-content:space-between; margin-bottom:12px;">
                        <span style="font-weight:800; color:#0f172a; font-size: 18px;">SolarTech 2025</span>
                        <span style="color:#10b981; font-weight:800;">+110%</span>
                    </div>
                    <div style="font-size:12px; color:#64748b; font-weight:700; margin-bottom:4px;">ANCHOR ALLOCATION</div>
                    <div style="font-size:24px; font-weight:900; color:#3b82f6; margin-bottom: 12px;">₹8.2 Cr</div>
                    <div style="font-size: 12px; color: #ef4444; font-weight: 700;">Lock-in Expiry: 22-Apr-2026</div>
                </div>

                <div class="invest-card" style="border-color: #cbd5e1; background: white;">
                    <div style="display:flex; justify-content:space-between; margin-bottom:12px;">
                        <span style="font-weight:800; color:#0f172a; font-size: 18px;">NextGen AI SME</span>
                        <span style="color:#f59e0b; font-weight:800;">UPCOMING</span>
                    </div>
                    <div style="font-size:12px; color:#64748b; font-weight:700; margin-bottom:4px;">ANCHOR ALLOCATION</div>
                    <div style="font-size:24px; font-weight:900; color:#3b82f6; margin-bottom: 12px;">₹22.0 Cr</div>
                    <div style="font-size: 12px; color: #64748b; font-weight: 700;">Bidding Opens: 20-Aug-2026</div>
                </div>
            </div>

            <div class="info-prose">
                <h3>What is an Anchor Investor?</h3>
                <p>An Anchor Investor in an SME IPO is a Qualified Institutional Buyer (QIB) like a Mutual Fund, Foreign Portfolio Investor (FPI), or Alternative Investment Fund (AIF) that makes an upfront investment before the IPO opens to the public. They "anchor" the issue by providing early capital, which instills confidence in retail and HNI investors.</p>
                <p>By SEBI rules, up to 60% of the QIB quota can be allocated to Anchor Investors. They must bid for a minimum of ₹2 Crores in an SME IPO, ensuring only serious, large-scale financial institutions participate.</p>

                <h3>Understanding the Anchor Lock-in Period</h3>
                <p>Unlike retail investors who can sell their SME shares the moment the market opens at 10:00 AM on listing day, Anchor Investors are legally bound by a strict lock-in period. This prevents institutional dumping and wild price crashes.</p>
                <ul>
                    <li><strong>30-Day Lock-in:</strong> 50% of the shares allotted to the Anchor Investor are locked in for 30 days from the date of allotment.</li>
                    <li><strong>90-Day Lock-in:</strong> The remaining 50% of the shares are locked in for 90 days from the date of allotment.</li>
                </ul>
                <p><strong>Trading Strategy:</strong> Smart SME investors actively track these lock-in expiry dates. If a stock is trading at a massive premium, the 30-day lock-in expiry often acts as a negative trigger, as Anchor funds may offload 50% of their holdings to book profits, causing temporary selling pressure.</p>

                <h3>Why Retail Investors Track Anchor Books</h3>
                <p>When an SME company files its RHP, it claims it has a great business. But when a marquee fund like BofA Securities or Nippon India invests ₹20 Crores, it means a team of highly-paid analysts has vetted the company's books, visited their factories, and concluded the business is sound. A strong anchor book is often the precursor to a massive grey market premium (GMP).</p>
            </div>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const dirItems = document.querySelectorAll('.dir-item');
        const detailPane = document.querySelector('.detail-pane');
        const searchInput = document.querySelector('.dir-search');

        const fundsData = {
            'BofA Securities': {
                badge: '🎯 High Conviction Fund',
                title: 'BofA Securities Europe SA',
                description: 'Bank of America Securities has aggressively expanded its portfolio into high-growth Indian SMEs over the past 24 months, focusing heavily on AI-driven tech companies, green energy infrastructure, and niche manufacturing units. Their presence in an SME anchor book is highly regarded by retail HNIs as a stamp of institutional quality due to their rigorous due diligence process.',
                allocations: [
                    { name: 'Vidyut Tech', return: '+145%', amount: '₹14.5 Cr', expiry: 'Lock-in Expiry: 15-Mar-2026', type: 'positive' },
                    { name: 'SolarTech 2025', return: '+110%', amount: '₹8.2 Cr', expiry: 'Lock-in Expiry: 22-Apr-2026', type: 'positive' },
                    { name: 'NextGen AI SME', return: 'UPCOMING', amount: '₹22.0 Cr', expiry: 'Bidding Opens: 20-Aug-2026', type: 'upcoming' }
                ]
            },
            'Nippon India MF': {
                badge: '⭐ Consistent Performer',
                title: 'Nippon India Small Cap Fund',
                description: 'Nippon India is one of the most active domestic mutual funds in the SME space. They typically invest in companies with a proven track record of profitability and scalable business models. Their holding period is generally longer than FPIs, often holding past the 90-day lock-in.',
                allocations: [
                    { name: 'AgriGrow SME', return: '+61%', amount: '₹12.0 Cr', expiry: 'Lock-in Expiry: 05-Jun-2026', type: 'positive' },
                    { name: 'BuildPro Materials', return: '+2%', amount: '₹5.5 Cr', expiry: 'Lock-in Expiry: 12-Jul-2026', type: 'neutral' }
                ]
            },
            'Quant Small Cap Fund': {
                badge: '⚡ Aggressive Growth',
                title: 'Quant Small Cap Fund',
                description: 'Quant Mutual Fund is known for its highly aggressive, momentum-driven investment style. They are quick to enter high-beta SME stocks and equally quick to exit. If Quant is in the anchor book, expect extreme volatility and high listing gains.',
                allocations: [
                    { name: 'TechVision India', return: '+210%', amount: '₹18.0 Cr', expiry: 'Lock-in Expiry: 01-Feb-2026', type: 'positive' },
                    { name: 'CloudServe Networks', return: '+20%', amount: '₹9.0 Cr', expiry: 'Lock-in Expiry: 18-May-2026', type: 'positive' }
                ]
            },
            'Morgan Stanley Asia': {
                badge: '🌐 Global FPI',
                title: 'Morgan Stanley Asia (Singapore) Pte.',
                description: 'Morgan Stanley selectively participates in SME IPOs, usually preferring issues sized above ₹50 Crores. They look for companies with export-oriented businesses or those operating in niche, high-barrier-to-entry sectors.',
                allocations: [
                    { name: 'SolarEdge Tech', return: '+85%', amount: '₹15.0 Cr', expiry: 'Lock-in Expiry: 30-Aug-2026', type: 'positive' }
                ]
            },
            'Societe Generale': {
                badge: '🌍 European FPI',
                title: 'Societe Generale',
                description: 'Societe Generale often participates in SME IPOs alongside other global institutional investors. Their participation provides a significant boost to the grey market premium.',
                allocations: [
                    { name: 'Vidyut Tech', return: '+145%', amount: '₹10.0 Cr', expiry: 'Lock-in Expiry: 15-Mar-2026', type: 'positive' }
                ]
            },
            'HDFC SME Fund': {
                 badge: '🏛️ Domestic AIF',
                 title: 'HDFC SME Growth Fund',
                 description: 'A specialized AIF created by HDFC to invest exclusively in high-growth SMEs. They provide not just capital but also mentorship and networking opportunities to the promoters.',
                 allocations: [
                     { name: 'AgriGrow SME', return: '+61%', amount: '₹8.0 Cr', expiry: 'Lock-in Expiry: 05-Jun-2026', type: 'positive' },
                     { name: 'SafeBank SME', return: '-12%', amount: '₹4.0 Cr', expiry: 'Lock-in Expiry: 20-Jul-2026', type: 'negative' }
                 ]
            }
        };

        function renderDetailPane(fundKey) {
            const data = fundsData[fundKey];
            if (!data) return;

            let allocationsHTML = '';
            data.allocations.forEach(alloc => {
                let returnColor = '#64748b'; // default neutral
                if (alloc.type === 'positive') returnColor = '#10b981';
                else if (alloc.type === 'negative') returnColor = '#ef4444';
                else if (alloc.type === 'upcoming') returnColor = '#f59e0b';
                
                let expiryColor = alloc.type === 'upcoming' ? '#64748b' : '#ef4444';

                allocationsHTML += `
                    <div class="invest-card">
                        <div style="display:flex; justify-content:space-between; margin-bottom:12px;">
                            <span style="font-weight:800; color:#0f172a; font-size: 18px;">${alloc.name}</span>
                            <span style="color:${returnColor}; font-weight:800;">${alloc.return}</span>
                        </div>
                        <div style="font-size:12px; color:#64748b; font-weight:700; margin-bottom:4px;">ANCHOR ALLOCATION</div>
                        <div style="font-size:24px; font-weight:900; color:#3b82f6; margin-bottom: 12px;">${alloc.amount}</div>
                        <div style="font-size: 12px; color: ${expiryColor}; font-weight: 700;">${alloc.expiry}</div>
                    </div>
                `;
            });

            const html = `
                <div class="badge">${data.badge}</div>
                <h2 style="font-size: 36px; font-weight: 900; color: #0f172a; margin-bottom: 12px;">${data.title}</h2>
                <p style="font-size: 16px; color: #475569; line-height: 1.8; margin-bottom: 30px;">${data.description}</p>
                
                <h3 style="font-size: 20px; font-weight: 800; border-bottom: 2px solid #f1f5f9; padding-bottom: 12px; margin-top: 40px; color: #0f172a;">Recent SME Allocations (2026)</h3>
                
                <div class="invest-grid">
                    ${allocationsHTML}
                </div>
                
                <div class="info-prose">
                    <h3>What is an Anchor Investor?</h3>
                    <p>An Anchor Investor in an SME IPO is a Qualified Institutional Buyer (QIB) like a Mutual Fund, Foreign Portfolio Investor (FPI), or Alternative Investment Fund (AIF) that makes an upfront investment before the IPO opens to the public. They "anchor" the issue by providing early capital, which instills confidence in retail and HNI investors.</p>
                    <p>By SEBI rules, up to 60% of the QIB quota can be allocated to Anchor Investors. They must bid for a minimum of ₹2 Crores in an SME IPO, ensuring only serious, large-scale financial institutions participate.</p>

                    <h3>Understanding the Anchor Lock-in Period</h3>
                    <p>Unlike retail investors who can sell their SME shares the moment the market opens at 10:00 AM on listing day, Anchor Investors are legally bound by a strict lock-in period. This prevents institutional dumping and wild price crashes.</p>
                    <ul>
                        <li><strong>30-Day Lock-in:</strong> 50% of the shares allotted to the Anchor Investor are locked in for 30 days from the date of allotment.</li>
                        <li><strong>90-Day Lock-in:</strong> The remaining 50% of the shares are locked in for 90 days from the date of allotment.</li>
                    </ul>
                    <p><strong>Trading Strategy:</strong> Smart SME investors actively track these lock-in expiry dates. If a stock is trading at a massive premium, the 30-day lock-in expiry often acts as a negative trigger, as Anchor funds may offload 50% of their holdings to book profits, causing temporary selling pressure.</p>

                    <h3>Why Retail Investors Track Anchor Books</h3>
                    <p>When an SME company files its RHP, it claims it has a great business. But when a marquee fund like BofA Securities or Nippon India invests ₹20 Crores, it means a team of highly-paid analysts has vetted the company's books, visited their factories, and concluded the business is sound. A strong anchor book is often the precursor to a massive grey market premium (GMP).</p>
                </div>
            `;
            
            detailPane.style.opacity = 0;
            setTimeout(() => {
                detailPane.innerHTML = html;
                detailPane.style.opacity = 1;
            }, 200);
        }

        dirItems.forEach(item => {
            item.addEventListener('click', () => {
                dirItems.forEach(i => i.classList.remove('active'));
                item.classList.add('active');
                const fundKey = item.querySelector('.dir-title').innerText;
                renderDetailPane(fundKey);
            });
        });

        searchInput.addEventListener('input', (e) => {
            const term = e.target.value.toLowerCase();
            dirItems.forEach(item => {
                const text = item.innerText.toLowerCase();
                item.style.display = text.includes(term) ? 'flex' : 'none';
            });
        });
        
        // Add transition style to detail pane
        detailPane.style.transition = 'opacity 0.2s ease';
    });
</script>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="/iposetu/assets/js/components.js?v=6.1"></script>
<script src="/iposetu/assets/js/ad-manager.js?v=1.2"></script>
<script src="/iposetu/assets/js/main.js"></script>
</body>
</html>
