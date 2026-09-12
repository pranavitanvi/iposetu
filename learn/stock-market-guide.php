<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Stock Market Guide – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Stock Market Guide on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<main class="container">

<div class="learn-page-header">
    <div style="font-size: 12px; font-weight: 800; color: #64748b; letter-spacing: 0.5px; margin-bottom: 8px;">DOCUMENTATION</div>
    <h1 class="learn-page-title">BEGINNER'S STOCK MARKET GUIDE</h1>
    <div class="learn-page-subtitle">Learn how to read charts, analyze fundamentals, and start buying your first stocks.</div>
</div>

<div style="display: grid; grid-template-columns: 1fr 300px; gap: 40px; margin-bottom: 60px;">
    <!-- CENTER: CONTENT -->
    <article class="learn-article-content">

        <div style="margin-bottom: 32px; display: flex; gap: 16px; align-items: center; border-bottom: 1px solid #e2e8f0; padding-bottom: 16px;">
            <div style="font-size: 14px; font-weight: 700; color: #0f172a;">Updated: Aug 13, 2026</div>
            <div style="width: 4px; height: 4px; background: #cbd5e1; border-radius: 50%;"></div>
            <div style="font-size: 14px; color: #64748b;">20 min read</div>
        </div>
        <h2>1. Introduction to the Stock Market</h2>
        <p>The stock market is a platform where investors buy and sell shares of publicly traded companies. It serves as a vital component of the global economy, allowing companies to raise capital by offering equity to the public, while providing investors with an opportunity to share in the companies' growth and profits.</p>
        <p>In India, the primary stock exchanges are the National Stock Exchange (NSE) and the Bombay Stock Exchange (BSE). The NSE's benchmark index is the NIFTY 50, while the BSE's is the SENSEX.</p>

        <h2>2. Primary vs. Secondary Markets</h2>
        <p><strong>Primary Market:</strong> This is where new securities are created and issued to the public for the first time. The most common activity here is an Initial Public Offering (IPO), where a company transitions from being private to public.</p>
        <p><strong>Secondary Market:</strong> This is what people generally refer to when talking about the "stock market". Here, investors trade previously issued securities without the involvement of the issuing companies. Trading happens between buyers and sellers.</p>

        <div style="margin: 40px 0; background: #f8fafc; padding: 24px; text-align: center; border: 1px dashed #cbd5e1; border-radius: 8px;">
            <div style="font-size: 14px; color: #64748b;">ADVERTISEMENT 728x90</div>
        </div>

        <h2>3. How to Start Investing in Stocks</h2>
        <p>To begin your investment journey, you must set up the following prerequisites:</p>
        <ul>
            <li><strong>Savings Account:</strong> Your primary bank account from which funds will be transferred.</li>
            <li><strong>Demat Account:</strong> An account to hold your securities (shares, bonds, mutual funds) in an electronic (dematerialized) format.</li>
            <li><strong>Trading Account:</strong> An account provided by your stockbroker that acts as an interface to place buy and sell orders on the stock exchange.</li>
        </ul>
        <p>You can open a 2-in-1 (Demat + Trading) or 3-in-1 (Bank + Demat + Trading) account with a registered stockbroker such as Zerodha, Groww, Upstox, or traditional bank brokers.</p>

        <h2>4. Fundamental Analysis</h2>
        <p>Fundamental analysis involves evaluating a company's intrinsic value to determine whether its stock is overvalued or undervalued. This requires looking at:</p>
        <ul>
            <li><strong>Financial Statements:</strong> Analyzing the Balance Sheet, Income Statement, and Cash Flow Statement.</li>
            <li><strong>Ratios:</strong> Price-to-Earnings (P/E), Return on Equity (ROE), Debt-to-Equity (D/E), and Earnings Per Share (EPS).</li>
            <li><strong>Management & Industry:</strong> Evaluating the leadership team, competitive advantage, and industry growth prospects.</li>
        </ul>

        <h2>5. Technical Analysis</h2>
        <p>Unlike fundamental analysis, technical analysis focuses on statistical trends gathered from trading activity, such as price movement and volume. Technicians use chart patterns (like Head & Shoulders, Double Bottoms) and indicators (like Moving Averages, RSI, MACD) to predict future price movements based on historical data.</p>

        <h2>6. Types of Stocks</h2>
        <p>Understanding stock categories helps in building a diversified portfolio:</p>
        <ul>
            <li><strong>Blue-Chip Stocks:</strong> Large, well-established, and financially sound companies with a history of dependable earnings (e.g., Reliance, TCS, HDFC Bank).</li>
            <li><strong>Mid-Cap & Small-Cap Stocks:</strong> Companies with medium to small market capitalizations. They offer higher growth potential but come with increased risk and volatility.</li>
            <li><strong>Dividend Stocks:</strong> Companies that distribute a portion of their earnings back to shareholders regularly.</li>
            <li><strong>Growth Stocks:</strong> Companies expected to grow at an above-average rate compared to the market.</li>
        </ul>

        <h2>7. Key Investment Strategies</h2>
        <p>Investors usually adopt one of several approaches:</p>
        <p><strong>Value Investing:</strong> Finding stocks that appear to be trading for less than their intrinsic or book value ( popularized by Warren Buffett).</p>
        <p><strong>Growth Investing:</strong> Focusing on capital appreciation by investing in companies exhibiting signs of above-average growth.</p>
        <p><strong>Dividend Investing:</strong> Building a portfolio that generates a steady stream of passive income through regular dividend payouts.</p>
    
</article>
    
    <!-- RIGHT: RELATED -->
    <aside>
        <div style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; position: sticky; top: 20px;">
            <h4 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 16px;">Related Guides</h4>
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px;">
                <li><a href="<?= BASE_URL ?>learn/ipo-guide.php" style="color: var(--accent-color); text-decoration: none; font-weight: 700;">Complete IPO Guide →</a></li>
                <li><a href="<?= BASE_URL ?>learn/mutual-fund-guide.php" style="color: var(--accent-color); text-decoration: none; font-weight: 700;">Mutual Fund Guide →</a></li>
                <li><a href="<?= BASE_URL ?>learn/understanding-risk.php" style="color: var(--accent-color); text-decoration: none; font-weight: 700;">Mastering Risk →</a></li>
                <li><a href="<?= BASE_URL ?>learn/glossary.php" style="color: var(--accent-color); text-decoration: none; font-weight: 700;">Market Glossary →</a></li>
                <li><a href="<?= BASE_URL ?>learn/index.php" style="color: #475569; text-decoration: none; font-weight: 700;">← Learning Hub</a></li>
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
