<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
﻿<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Faqs – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Faqs on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<main class="page-animate">
    <style>
        @keyframes fadeIn { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
        .page-animate { animation: fadeIn 0.8s ease-out; font-family: 'Inter', sans-serif; background: #f8fafc; padding-bottom: 80px; }
        
        .faq-hero { background: #0f172a; color: white; padding: 80px 24px 100px 24px; text-align: center; }
        .hero-title { font-size: 48px; font-weight: 900; line-height: 1.1; margin-bottom: 20px; }
        .hero-subtitle { font-size: 18px; color: #94a3b8; max-width: 800px; margin: 0 auto; line-height: 1.6; }
        
        .search-box { max-width: 600px; margin: 30px auto 0 auto; position: relative; }
        .search-box input { width: 100%; padding: 20px 24px; border-radius: 30px; border: none; font-size: 16px; outline: none; box-shadow: 0 20px 40px rgba(0,0,0,0.2); }
        .search-box button { position: absolute; right: 8px; top: 8px; bottom: 8px; padding: 0 24px; background: #3b82f6; color: white; border: none; border-radius: 30px; font-weight: 800; cursor: pointer; }

        .faq-layout { max-width: 1200px; margin: -50px auto 0 auto; display: grid; grid-template-columns: 300px 1fr; gap: 40px; padding: 0 24px; position: relative; z-index: 10; align-items: start; }
        
        .faq-nav { background: white; border: 1px solid #e2e8f0; border-radius: 20px; padding: 24px; position: sticky; top: 100px; box-shadow: 0 10px 30px rgba(0,0,0,0.02); }
        .faq-nav h3 { font-size: 16px; font-weight: 900; color: #0f172a; margin-bottom: 16px; text-transform: uppercase; letter-spacing: 1px; }
        .nav-link { display: block; padding: 12px 16px; border-radius: 12px; color: #475569; font-weight: 600; text-decoration: none; margin-bottom: 4px; transition: 0.2s; }
        .nav-link:hover, .nav-link.active { background: #eff6ff; color: #2563eb; }
        
        .faq-category { margin-bottom: 40px; }
        .cat-title { font-size: 28px; font-weight: 900; color: #0f172a; margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid #e2e8f0; }
        
        .accordion { background: white; border: 1px solid #e2e8f0; border-radius: 16px; margin-bottom: 16px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.01); transition: 0.3s; }
        .accordion:hover { border-color: #cbd5e1; box-shadow: 0 10px 20px rgba(0,0,0,0.03); }
        .accordion summary { padding: 24px; font-size: 18px; font-weight: 800; color: #0f172a; cursor: pointer; list-style: none; position: relative; }
        .accordion summary::-webkit-details-marker { display: none; }
        .accordion summary::after { content: '+'; position: absolute; right: 24px; top: 50%; transform: translateY(-50%); font-size: 24px; font-weight: 400; color: #3b82f6; transition: 0.3s; }
        .accordion[open] summary::after { content: '−'; }
        .accordion .acc-content { padding: 0 24px 24px 24px; font-size: 16px; color: #475569; line-height: 1.8; }
        .accordion .acc-content p { margin-bottom: 16px; }
        .accordion .acc-content ul { padding-left: 20px; margin-bottom: 16px; }
        .accordion .acc-content li { margin-bottom: 8px; }

        @media (max-width: 992px) { .faq-layout { grid-template-columns: 1fr; } .faq-nav { position: static; display: flex; overflow-x: auto; white-space: nowrap; } }
    </style>

    <div class="faq-hero">
        <h1 class="hero-title">SME IPO Knowledge Base</h1>
        <p class="hero-subtitle">Everything you need to know about investing in Small and Medium Enterprises. From lot sizes and bidding logic to listing day mechanics and taxation.</p>
        <div class="search-box">
            <input type="text" placeholder="Search for 'Lot Size', 'ASBA', 'Allotment'...">
            <button>Search</button>
        </div>
    </div>

    <div class="faq-layout">
        <!-- Sidebar Navigation -->
        <div class="faq-nav">
            <h3>Categories</h3>
            <a href="#basics" class="nav-link active">1. SME Basics</a>
            <a href="#bidding" class="nav-link">2. Application & Bidding</a>
            <a href="#allotment" class="nav-link">3. Allotment Process</a>
            <a href="#listing" class="nav-link">4. Listing & Trading</a>
            <a href="#risks" class="nav-link">5. Risks & Taxation</a>
        </div>

        <!-- FAQ Content -->
        <div>
            <!-- Category 1 -->
            <div id="basics" class="faq-category">
                <h2 class="cat-title">1. SME Basics</h2>
                
                <div style="background:#f8fafc; padding:20px; border-radius:12px; border:1px solid #e2e8f0; margin-bottom:16px;">
    <div style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';">
        <div style="font-weight:700; font-size:16px; color:#0f172a;">What is an SME IPO?</div>
        <svg width="20" height="20" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24" style="transition:transform 0.2s;"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
    </div>
    <div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #cbd5e1; font-size:15px; color:#475569; line-height:1.6;">
        <p>An SME IPO (Small and Medium Enterprise Initial Public Offering) is a method for early-stage or smaller companies to raise capital from the public market. Unlike mainboard IPOs (which list on the standard NSE/BSE), SME IPOs list on specialized platforms: <strong>NSE Emerge</strong> or <strong>BSE SME</strong>.</p>
                        <p>The core difference is the regulatory requirement. SMEs have relaxed rules regarding minimum post-issue capital (usually under ₹25 Crores) and do not need a prior track record of profitability, making it an excellent platform for growing startups and established small businesses.</p>
    </div>
</div>

                <div style="background:#f8fafc; padding:20px; border-radius:12px; border:1px solid #e2e8f0; margin-bottom:16px;">
    <div style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';">
        <div style="font-weight:700; font-size:16px; color:#0f172a;">What is the minimum investment amount (Lot Size)?</div>
        <svg width="20" height="20" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24" style="transition:transform 0.2s;"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
    </div>
    <div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #cbd5e1; font-size:15px; color:#475569; line-height:1.6;">
        <p>The defining characteristic of an SME IPO is the massive minimum investment required. To protect small retail investors from the high volatility of SMEs, SEBI has mandated large lot sizes.</p>
                        <ul>
                            <li>The minimum application amount is <strong>strictly above ₹1,00,000</strong>.</li>
                            <li>Typically, lot sizes range from ₹1,20,000 to ₹1,40,000.</li>
                            <li>You can only buy or sell in multiples of this lot size even after the stock is listed.</li>
                        </ul>
    </div>
</div>
            </div>

            <!-- Category 2 -->
            <div id="bidding" class="faq-category">
                <h2 class="cat-title">2. Application & Bidding</h2>
                
                <div style="background:#f8fafc; padding:20px; border-radius:12px; border:1px solid #e2e8f0; margin-bottom:16px;">
    <div style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';">
        <div style="font-weight:700; font-size:16px; color:#0f172a;">Can I apply for an SME IPO using UPI?</div>
        <svg width="20" height="20" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24" style="transition:transform 0.2s;"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
    </div>
    <div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #cbd5e1; font-size:15px; color:#475569; line-height:1.6;">
        <p><strong>Yes</strong>, retail investors can apply using UPI, but there is a catch. The UPI mandate limit was recently raised to ₹5 Lakhs. Since a single SME lot costs ~₹1.3 Lakhs, you can easily apply for 1, 2, or 3 lots using a standard UPI app (like GPay, PhonePe, or BHIM).</p>
                        <p>However, if you wish to apply under the HNI category (which requires an application of more than ₹2 Lakhs), you can use UPI for up to ₹5 Lakhs. For applications exceeding ₹5 Lakhs, you must use the ASBA process via your bank's net banking portal.</p>
    </div>
</div>

                <div style="background:#f8fafc; padding:20px; border-radius:12px; border:1px solid #e2e8f0; margin-bottom:16px;">
    <div style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';">
        <div style="font-weight:700; font-size:16px; color:#0f172a;">What is the difference between Retail and HNI category in SME IPOs?</div>
        <svg width="20" height="20" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24" style="transition:transform 0.2s;"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
    </div>
    <div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #cbd5e1; font-size:15px; color:#475569; line-height:1.6;">
        <p>SME IPOs have strict quota rules based on application size:</p>
                        <ul>
                            <li><strong>Retail Category (RII):</strong> Application value must be exactly ₹2,00,000 or below. Because of the lot size math, this usually means applying for exactly 1 Lot. Applying for 1 lot places you in the retail pool.</li>
                            <li><strong>Non-Institutional Investor (NII/HNI):</strong> Application value strictly greater than ₹2,00,000. Applying for 2 or more lots places you in this category. The NII pool usually sees different subscription multiples than the retail pool.</li>
                        </ul>
    </div>
</div>
            </div>

            <!-- Category 3 -->
            <div id="allotment" class="faq-category">
                <h2 class="cat-title">3. Allotment Process</h2>
                
                <div style="background:#f8fafc; padding:20px; border-radius:12px; border:1px solid #e2e8f0; margin-bottom:16px;">
    <div style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';">
        <div style="font-weight:700; font-size:16px; color:#0f172a;">How is SME IPO allotment calculated?</div>
        <svg width="20" height="20" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24" style="transition:transform 0.2s;"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
    </div>
    <div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #cbd5e1; font-size:15px; color:#475569; line-height:1.6;">
        <p>If an SME IPO is oversubscribed (e.g., 100x), the allotment becomes a lottery.</p>
                        <p>In the <strong>Retail category</strong>, the allotment is purely computerized random draw. If the retail portion is oversubscribed 50 times, your mathematical probability of getting an allotment is 1 out of 50 (2%).</p>
                        <p>In the <strong>HNI category</strong>, allotment rules recently changed. Unlike Mainboard IPOs where there is a pro-rata system for certain HNI tiers, SME HNI allotment is also heavily lottery-based to ensure applicants get at least the minimum lot size. If you apply for 10 lots in an oversubscribed HNI pool, you will either get 0 lots or 1 minimum lot via draw of lots.</p>
    </div>
</div>
                
                <div style="background:#f8fafc; padding:20px; border-radius:12px; border:1px solid #e2e8f0; margin-bottom:16px;">
    <div style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';">
        <div style="font-weight:700; font-size:16px; color:#0f172a;">Why didn't I get allotment even after applying from 5 accounts?</div>
        <svg width="20" height="20" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24" style="transition:transform 0.2s;"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
    </div>
    <div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #cbd5e1; font-size:15px; color:#475569; line-height:1.6;">
        <p>SME IPOs routinely see retail subscription rates of 300x to 500x. If the subscription is 500x, your chance of getting 1 lot is 1/500 (0.2%).</p>
                        <p>Even if you apply from 5 different PAN accounts (family members), your cumulative probability is still extremely low. It is purely a game of chance and luck.</p>
    </div>
</div>
            </div>

            <!-- Category 4 -->
            <div id="listing" class="faq-category">
                <h2 class="cat-title">4. Listing & Trading</h2>

                <div style="background:#f8fafc; padding:20px; border-radius:12px; border:1px solid #e2e8f0; margin-bottom:16px;">
    <div style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';">
        <div style="font-weight:700; font-size:16px; color:#0f172a;">What are Circuit Filters / Circuit Limits in SMEs?</div>
        <svg width="20" height="20" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24" style="transition:transform 0.2s;"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
    </div>
    <div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #cbd5e1; font-size:15px; color:#475569; line-height:1.6;">
        <p>To prevent absolute price manipulation, SME stocks are subjected to extremely tight circuit limits immediately upon listing.</p>
                        <ul>
                            <li><strong>Standard Limit:</strong> Most SME stocks are locked into a <strong>5% circuit filter</strong>.</li>
                            <li><strong>Meaning:</strong> On any given trading day, the stock price cannot go up by more than +5% (Upper Circuit) or fall by more than -5% (Lower Circuit) from the previous day's closing price.</li>
                        </ul>
                        <p>If the stock hits the upper circuit, there are only buyers and zero sellers. If it hits the lower circuit, there are only sellers and zero buyers (Liquidity Trap).</p>
    </div>
</div>

                <div style="background:#f8fafc; padding:20px; border-radius:12px; border:1px solid #e2e8f0; margin-bottom:16px;">
    <div style="display:flex; justify-content:space-between; align-items:center; cursor:pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.querySelector('svg').style.transform = this.nextElementSibling.style.display === 'none' ? 'rotate(0deg)' : 'rotate(180deg)';">
        <div style="font-weight:700; font-size:16px; color:#0f172a;">Do I have to sell my shares in "Lots" after listing?</div>
        <svg width="20" height="20" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24" style="transition:transform 0.2s;"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
    </div>
    <div style="display:none; margin-top:16px; padding-top:16px; border-top:1px dashed #cbd5e1; font-size:15px; color:#475569; line-height:1.6;">
        <p><strong>Yes.</strong> This is the most crucial aspect of trading SME stocks. The lot size restriction continues even in the secondary market.</p>
                        <p>If the IPO lot size was 1,200 shares, and you want to sell, you must sell exactly 1,200 shares (or 2,400, 3,600). You cannot sell 500 shares. This means your capital remains tied up in huge chunks.</p>
    </div>
</div>
            </div>

        </div>
    </div>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.faq-nav .nav-link');
    const categories = document.querySelectorAll('.faq-category');

    // Hide all except first initially, and setup styles
    categories.forEach((cat, index) => {
        cat.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
        if (index !== 0) {
            cat.style.display = 'none';
            cat.style.opacity = '0';
            cat.style.transform = 'translateY(20px)';
        } else {
            cat.style.opacity = '1';
            cat.style.transform = 'translateY(0)';
        }
    });

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            
            // Update active link state
            navLinks.forEach(l => l.classList.remove('active'));
            link.classList.add('active');

            // Get target category
            const targetId = link.getAttribute('href').substring(1);
            
            // Hide all and show target with animation
            categories.forEach(cat => {
                if (cat.id === targetId) {
                    cat.style.display = 'block';
                    // Trigger reflow to restart animation
                    cat.offsetHeight; 
                    cat.style.opacity = '1';
                    cat.style.transform = 'translateY(0)';
                } else {
                    cat.style.display = 'none';
                    cat.style.opacity = '0';
                    cat.style.transform = 'translateY(20px)';
                }
            });
            
            // On mobile, scroll up slightly so the content is in view
            if(window.innerWidth < 992) {
                 window.scrollTo({
                     top: document.querySelector('.faq-layout').offsetTop - 20,
                     behavior: 'smooth'
                 });
            }
        });
    });
});
</script>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
