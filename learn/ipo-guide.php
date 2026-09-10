<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Ipo Guide – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Ipo Guide on IPOSETU."/>
<link class="style-link" href="/iposetu/assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="/iposetu/assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/header.php'; ?>

<main class="container">

<div class="reading-progress-container">
    <div class="reading-progress-bar" id="readingProgressBar"></div>
</div>

<script>
window.onscroll = function() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("readingProgressBar").style.width = scrolled + "%";
};
</script>

<style>
    @keyframes fadeUp { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
    
    .market-hero { background: #0f172a; color: white; padding: 60px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; margin-top: 40px; }
    .market-hero::after { content: ''; position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(245,158,11,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none; }
    
    .learn-article-content { animation: fadeUp 0.6s both; animation-delay: 0.2s; }
</style>

<div class="market-hero">
    <div style="font-size: 12px; font-weight: 700; color: #fbbf24; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Documentation</div>
    <h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px;">Complete IPO Guide</h1>
    <p style="font-size: 16px; color: #94a3b8; max-width: 600px; line-height: 1.6;">Everything you need to know about IPOs — from application to listing.</p>
</div>

<div style="display: grid; grid-template-columns: 1fr 300px; gap: 40px; margin-bottom: 60px;">
    
    <!-- CENTER: CONTENT -->
    <article class="learn-article-content">

        <div style="margin-bottom: 32px; display: flex; gap: 16px; align-items: center; border-bottom: 1px solid #e2e8f0; padding-bottom: 16px;">
            <div style="font-size: 14px; font-weight: 700; color: #0f172a;">Updated: Aug 13, 2026</div>
            <div style="width: 4px; height: 4px; background: #cbd5e1; border-radius: 50%;"></div>
            <div style="font-size: 14px; color: #64748b;">25 min read</div>
        </div>
        <h2>1. What is an IPO?</h2>
        <p>An Initial Public Offering (IPO) is the landmark process through which a privately held company issues shares of stock to the public for the first time. By doing so, the company transitions from being owned by a few private investors to being owned by the general public, and its shares are subsequently listed and traded on a stock exchange.</p>
        
        <h2>2. Why do Companies go Public?</h2>
        <p>Companies launch IPOs for several strategic reasons:</p>
        <ul>
            <li><strong>Raising Capital:</strong> The primary reason is to raise significant funds to finance expansion, research, debt repayment, or infrastructure development.</li>
            <li><strong>Liquidity for Founders & Early Investors:</strong> It allows founders, venture capitalists, and angel investors to monetize their early investments.</li>
            <li><strong>Brand Visibility:</strong> Being a publicly traded company enhances prestige, public image, and credibility.</li>
            <li><strong>Currency for Acquisitions:</strong> Public shares can be used to acquire other companies.</li>
        </ul>

        <div style="margin: 40px 0; background: #f8fafc; padding: 24px; text-align: center; border: 1px dashed #cbd5e1; border-radius: 8px;">
            <div style="font-size: 14px; color: #64748b;">ADVERTISEMENT 728x90</div>
        </div>

        <h2>3. Mainboard vs SME IPO</h2>
        <table class="comparison-table" style="width: 100%; text-align: left; border-collapse: collapse; margin-bottom: 24px;">
            <thead>
                <tr style="background: #f1f5f9;">
                    <th style="padding: 12px; border: 1px solid #cbd5e1;">Feature</th>
                    <th style="padding: 12px; border: 1px solid #cbd5e1;">Mainboard IPO</th>
                    <th style="padding: 12px; border: 1px solid #cbd5e1;">SME IPO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Company Size & Profitability</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Large scale, minimum 3 years of steady profitability required.</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Small and Medium Enterprises, relaxed profitability norms.</td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Minimum Investment</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">₹14,000 - ₹15,000 per lot.</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">₹1,00,000 to ₹1,40,000 per lot.</td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Listing Exchange</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">NSE and/or BSE Mainboard.</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">NSE Emerge or BSE SME platforms.</td>
                </tr>
            </tbody>
        </table>

        <h2>4. Understanding the Price Band and Cut-off Price</h2>
        <p>In a book-built IPO, the company offers a <strong>Price Band</strong> (e.g., ₹100 to ₹105). Investors must bid for shares within this range.</p>
        <p>The <strong>Cut-off Price</strong> is the final issue price decided by the company after evaluating all bids. Retail investors are advised to check the 'Cut-off Price' option while bidding to ensure their application remains valid regardless of the final price decided within the band.</p>

        <h2>5. Investor Categories</h2>
        <p>Shares in an IPO are reserved for different types of investors:</p>
        <ul>
            <li><strong>QIB (Qualified Institutional Buyers):</strong> Mutual funds, banks, and foreign portfolio investors (typically up to 50% reservation).</li>
            <li><strong>NII (Non-Institutional Investors) / HNI:</strong> High Net-worth Individuals investing more than ₹2 lakhs (typically 15% reservation).</li>
            <li><strong>RII (Retail Individual Investors):</strong> Everyday investors bidding up to ₹2 lakhs (typically 35% reservation).</li>
        </ul>

        <h2>6. Red Herring Prospectus (RHP)</h2>
        <p>The RHP is the most critical document for an IPO investor. Filed with SEBI, it contains exhaustive details about the company's business operations, financials, promoters, objectives of the issue, and potential risk factors. It does not contain the final issue price or quantity, which is why it is called a "Red Herring".</p>

        <h2>7. Allotment and Listing</h2>
        <p>Due to high demand, most good IPOs are oversubscribed, meaning investors demand more shares than are available. In the Retail category, if an IPO is oversubscribed, allotment happens via a computerized lottery system.</p>
        <p>Once allotted, shares are credited to the investor's Demat account. A few days later, the shares officially list on the stock exchange, at which point they can be freely bought and sold.</p>
    
</article>
    
    <!-- RIGHT: QUICK FACTS -->
    <aside>
        <div style="background: #f8fafc; border: 1px solid var(--border-color); border-radius: 12px; padding: 24px; margin-bottom: 24px;">
            <h4 style="font-size: 14px; font-weight: 800; color: #0f172a; margin-bottom: 16px; text-transform: uppercase;">Quick Facts</h4>
            <div style="margin-bottom: 12px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">IPO</div>
                <div style="font-size: 14px; font-weight: 600; color: #334155;">Initial Public Offering</div>
            </div>
            <div style="margin-bottom: 12px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">GMP</div>
                <div style="font-size: 14px; font-weight: 600; color: #334155;">Grey Market Premium (Unofficial)</div>
            </div>
            <div style="margin-bottom: 12px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">Lot Size</div>
                <div style="font-size: 14px; font-weight: 600; color: #334155;">Minimum shares you must bid for</div>
            </div>
            <div style="margin-bottom: 12px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">ASBA</div>
                <div style="font-size: 14px; font-weight: 600; color: #334155;">Funds blocked, not deducted</div>
            </div>
        </div>
        
        <div style="margin: 0 0 24px 0; background: #f8fafc; height: 250px; display: flex; align-items: center; justify-content: center; border: 1px dashed #cbd5e1; border-radius: 8px;">
            <div style="font-size: 14px; color: #64748b;">ADVERTISEMENT 300x250</div>
        </div>
        
        <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 24px;">
            <h4 style="font-size: 14px; font-weight: 800; color: #0f172a; margin-bottom: 16px; text-transform: uppercase;">Related Guides</h4>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li style="margin-bottom: 12px;"><a href="/iposetu/learn/how-to-apply-ipo.php" style="font-size: 14px; font-weight: 600; color: var(--accent-color); text-decoration: none;">How to Apply for an IPO →</a></li>
                <li style="margin-bottom: 12px;"><a href="/iposetu/learn/asba.php" style="font-size: 14px; font-weight: 600; color: var(--accent-color); text-decoration: none;">What is ASBA? →</a></li>
                <li style="margin-bottom: 12px;"><a href="/iposetu/learn/gmp.php" style="font-size: 14px; font-weight: 600; color: var(--accent-color); text-decoration: none;">Understanding GMP →</a></li>
                <li><a href="/iposetu/learn/index.php" style="font-size: 14px; font-weight: 600; color: #475569; text-decoration: none;">← Learning Hub</a></li>
            </ul>
        </div>
    </aside>
    
</div>

</main>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="/iposetu/assets/js/components.js?v=6.1"></script>
<script src="/iposetu/assets/js/ad-manager.js?v=1.2"></script>
<script src="/iposetu/assets/js/main.js"></script>
</body>
</html>
