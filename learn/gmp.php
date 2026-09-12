<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Understanding GMP (Grey Market Premium) – Calculation &amp; Risks | IPOSETU</title>
<meta name="description" content="Learn what Grey Market Premium (GMP) is, how it is calculated, Kostak rates, Subject to Sauda, and the risks of relying solely on grey market prices."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<main class="container" style="padding-top: 24px;">

<div class="learn-page-header">
    <div style="font-size: 12px; font-weight: 800; color: #2563eb; letter-spacing: 0.8px; margin-bottom: 8px;">CALCULATION &amp; SENTIMENT</div>
    <h1 class="learn-page-title">UNDERSTANDING GREY MARKET PREMIUM (GMP)</h1>
    <div class="learn-page-subtitle">Learn what Grey Market Premium means, how dealers quote it, and how to interpret it without falling for artificial hype.</div>
</div>

<!-- Calculation Highlight Card -->
<div class="calculation-card" style="margin-bottom: 40px; max-width: 800px;">
    <div class="calc-box">
        <div style="font-size: 13px; font-weight: 800; color: #64748b; text-transform: uppercase; margin-bottom: 6px;">Issue Price (Cap)</div>
        <div style="font-size: 32px; font-weight: 900; color: #0f172a;">₹500</div>
        <div style="font-size: 12px; color: #64748b;">Official IPO price</div>
    </div>
    <div class="calc-operator">+</div>
    <div class="calc-box">
        <div style="font-size: 13px; font-weight: 800; color: #64748b; text-transform: uppercase; margin-bottom: 6px;">Grey Market Premium</div>
        <div style="font-size: 32px; font-weight: 900; color: #2563eb;">₹150</div>
        <div style="font-size: 12px; color: #2563eb; font-weight: 700;">Unofficial demand</div>
    </div>
    <div class="calc-operator">=</div>
    <div class="calc-box">
        <div style="font-size: 13px; font-weight: 800; color: #64748b; text-transform: uppercase; margin-bottom: 6px;">Est. Listing Price</div>
        <div style="font-size: 32px; font-weight: 900; color: #10b981;">₹650</div>
        <div style="font-size: 12px; font-weight: 800; color: #10b981;">+30.0% Expected Gain</div>
    </div>
</div>

<div style="display: grid; grid-template-columns: 1fr 320px; gap: 40px; margin-bottom: 60px;">
    
    <!-- LEFT: ARTICLE CONTENT -->
    <article class="learn-article-content">

        <h2>1. What is Grey Market Premium (GMP)?</h2>
        <p>The <strong>Grey Market Premium (GMP)</strong> is the unofficial, over-the-counter amount at which IPO shares or applications are traded among specialized dealers and investors before the shares officially list on stock exchanges (NSE or BSE).</p>
        <p>It represents the premium buyers are willing to pay over and above the issue price based on perceived listing gains. While widely tracked across financial media, the grey market is entirely unregulated by SEBI.</p>

        <h2>2. How the Grey Market Functions</h2>
        <p>The grey market functions through informal dealer networks via phone calls, WhatsApp groups, and personal relationships. There are two primary transaction types:</p>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 24px 0;">
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px;">
                <h4 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Kostak Rate</h4>
                <p style="font-size: 13.5px; color: #475569; line-height: 1.6; margin: 0;">A fixed fee paid to an applicant for selling their entire IPO application rights before allotment, regardless of whether shares are ultimately allotted or not.</p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px;">
                <h4 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Subject to Sauda</h4>
                <p style="font-size: 13.5px; color: #475569; line-height: 1.6; margin: 0;">A conditional contract where the premium is payable only if the seller receives an allotment. If no shares are allotted, the transaction is void.</p>
            </div>
        </div>

        <h2>3. Why Investors Track GMP</h2>
        <ul style="padding-left: 20px; line-height: 1.8; color: #334155;">
            <li><strong>Sentiment Gauge:</strong> Helps retail investors evaluate institutional and HNI enthusiasm before bidding closes.</li>
            <li><strong>Demand Indicator:</strong> Strong GMP often coincides with high QIB (Qualified Institutional Buyer) subscription figures.</li>
            <li><strong>Short-Term Expectation:</strong> Provides a benchmark for setting listing day profit targets or stop-loss levels.</li>
        </ul>

        <h2>4. Major Flaws and Risks of Relying Solely on GMP</h2>
        <div style="background: #fef2f2; border: 1px solid #fecaca; border-radius: 12px; padding: 20px; margin: 24px 0;">
            <div style="font-size: 15px; font-weight: 800; color: #991b1b; margin-bottom: 8px;">⚠️ Warning: The Danger of Artificial Manipulation</div>
            <p style="font-size: 14px; color: #7f1d1d; line-height: 1.6; margin: 0;">Because the grey market lacks centralized order books, operators can create artificial buying interest with zero trade volume to pump sentiment. Once retail investors rush in, the premium often evaporates on listing day, causing severe capital loss.</p>
        </div>

        <h2>5. Core Takeaway for Smart Bidders</h2>
        <p>Never base your bidding decision purely on GMP numbers. Use GMP only as a supplementary sentiment indicator alongside solid fundamental analysis: revenue growth, EBITDA margin stability, debt profile, promoter background, and P/E valuation relative to listed peers.</p>

    </article>

    <!-- RIGHT: STICKY SIDEBAR -->
    <aside>
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; position: sticky; top: 20px;">
            <h4 style="font-size: 14px; font-weight: 800; color: #0f172a; margin-bottom: 16px; text-transform: uppercase; letter-spacing: 0.5px;">GMP Quick Summary</h4>

            <div style="margin-bottom: 16px; border-bottom: 1px solid #e2e8f0; padding-bottom: 12px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">Legal Status</div>
                <div style="font-size: 13.5px; font-weight: 600; color: #dc2626;">Unregulated by SEBI</div>
            </div>

            <div style="margin-bottom: 16px; border-bottom: 1px solid #e2e8f0; padding-bottom: 12px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">Key Factor</div>
                <div style="font-size: 13.5px; font-weight: 600; color: #0f172a;">Short-term Demand / Hype</div>
            </div>

            <div style="margin-bottom: 16px; border-bottom: 1px solid #e2e8f0; padding-bottom: 12px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">Best Indicator</div>
                <div style="font-size: 13.5px; font-weight: 600; color: #10b981;">QIB Subscription Figures</div>
            </div>

            <div style="margin-bottom: 24px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">Reliability</div>
                <div style="font-size: 13.5px; font-weight: 600; color: #d97706;">Moderate to Low</div>
            </div>

            <h4 style="font-size: 14px; font-weight: 800; color: #0f172a; margin-bottom: 12px; text-transform: uppercase; letter-spacing: 0.5px;">Related Guides</h4>
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px;">
                <li><a href="<?= BASE_URL ?>learn/ipo-guide.php" style="font-size: 13.5px; font-weight: 700; color: #2563eb; text-decoration: none;">Complete IPO Guide →</a></li>
                <li><a href="<?= BASE_URL ?>learn/asba.php" style="font-size: 13.5px; font-weight: 700; color: #2563eb; text-decoration: none;">What is ASBA? →</a></li>
                <li><a href="<?= BASE_URL ?>learn/how-to-apply-ipo.php" style="font-size: 13.5px; font-weight: 700; color: #2563eb; text-decoration: none;">How to Apply for an IPO →</a></li>
                <li><a href="<?= BASE_URL ?>learn/index.php" style="font-size: 13.5px; font-weight: 700; color: #475569; text-decoration: none;">← Back to Learning Center</a></li>
            </ul>
        </div>
    </aside>

</div>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
