<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Top Performers NAV, Portfolio Holdings &amp; Returns | IPOSETU</title>
<meta name="description" content="Analyze Top Performers performance, expense ratio, risk ratings, and fund manager details on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
<div class="market-hero" style="background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: white; padding: 60px 40px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; animation: fadeUp 0.6s forwards;">
<div style="font-size: 12px; font-weight: 700; color: #5eead4; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Mutual Funds ? Top Performers</div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px; color: white;">TOP PERFORMING FUNDS</h1>
<p style="font-size: 16px; color: #ccfbf1; max-width: 600px; line-height: 1.6;">Ranked leaderboards of the highest returning mutual funds across time horizons.</p>
<div style="position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(20,184,166,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none;"></div>
</div>
</div>

<!-- Filters -->
<div class="container" style="margin-bottom: 32px; background: white; padding: 16px 24px; border-radius: 12px; border: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
<div style="display: flex; gap: 8px;">
<button style="padding: 8px 16px; font-size: 13px; font-weight: 700; color: white; background: var(--primary-color); border: none; border-radius: 20px; cursor: pointer;">1 Year</button>
<button style="padding: 8px 16px; font-size: 13px; font-weight: 600; color: #475569; background: #f1f5f9; border: 1px solid #cbd5e1; border-radius: 20px; cursor: pointer;">3 Years</button>
<button style="padding: 8px 16px; font-size: 13px; font-weight: 600; color: #475569; background: #f1f5f9; border: 1px solid #cbd5e1; border-radius: 20px; cursor: pointer;">5 Years</button>
</div>
<select style="padding: 8px 16px; font-size: 13px; font-weight: 600; color: #0f172a; border: 1px solid #cbd5e1; border-radius: 8px; background: white; outline: none; cursor: pointer;">
<option>All Categories</option>
<option>Equity - Small Cap</option>
<option>Equity - Mid Cap</option>
<option>Equity - Large Cap</option>
</select>
</div>
<main class="container" style="display: grid; grid-template-columns: 1fr; gap: 40px; margin-bottom: 80px;">
<div class="main-content">
<div style="border: 1px solid var(--border-color); border-radius: 12px; overflow-x: auto; background: white;">
<table style="width: 100%; border-collapse: collapse; text-align: left; min-width: 900px;">
<thead style="background: #f8fafc; border-bottom: 1px solid var(--border-color);">
<tr>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; width: 60px; text-align: center;">Rank</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Fund Name</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase;">Category</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #2563eb; text-transform: uppercase; text-align: right;">1Y Return ↓</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; text-align: right;">3Y Return</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; text-align: right;">5Y Return</th>
<th style="padding: 14px 16px; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; text-align: right;">AUM (Cr)</th>
</tr>
</thead>
<tbody>
<!-- Row 1 -->
<tr style="border-bottom: 1px solid #f1f5f9; background: #fffbeb;">
<td style="padding: 14px 16px; text-align: center; font-size: 16px; font-weight: 800; color: #d97706;">#1</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 700; color: #0f172a;">Quant Small Cap Fund</td>
<td style="padding: 14px 16px; font-size: 13px; color: #475569;">Equity - Small Cap</td>
<td style="padding: 14px 16px; font-size: 16px; font-weight: 800; color: #10b981; text-align: right;">68.4%</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 600; color: #10b981; text-align: right;">35.2%</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 600; color: #10b981; text-align: right;">32.8%</td>
<td style="padding: 14px 16px; font-size: 14px; color: #475569; text-align: right;">₹21,240</td>
</tr>
<!-- Row 2 -->
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 14px 16px; text-align: center; font-size: 15px; font-weight: 800; color: #64748b;">#2</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 700; color: #0f172a;">Nippon India Small Cap Fund</td>
<td style="padding: 14px 16px; font-size: 13px; color: #475569;">Equity - Small Cap</td>
<td style="padding: 14px 16px; font-size: 16px; font-weight: 800; color: #10b981; text-align: right;">59.2%</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 600; color: #10b981; text-align: right;">34.1%</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 600; color: #10b981; text-align: right;">29.5%</td>
<td style="padding: 14px 16px; font-size: 14px; color: #475569; text-align: right;">₹46,120</td>
</tr>
<!-- Row 3 -->
<tr style="border-bottom: 1px solid #f1f5f9;">
<td style="padding: 14px 16px; text-align: center; font-size: 15px; font-weight: 800; color: #8b5cf6;">#3</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 700; color: #0f172a;">Motilal Oswal Midcap Fund</td>
<td style="padding: 14px 16px; font-size: 13px; color: #475569;">Equity - Mid Cap</td>
<td style="padding: 14px 16px; font-size: 16px; font-weight: 800; color: #10b981; text-align: right;">55.1%</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 600; color: #10b981; text-align: right;">31.4%</td>
<td style="padding: 14px 16px; font-size: 14px; font-weight: 600; color: #10b981; text-align: right;">28.1%</td>
<td style="padding: 14px 16px; font-size: 14px; color: #475569; text-align: right;">₹12,450</td>
</tr>
</tbody>
</table>
</div>
<!-- Ad -->
<div style="margin-top: 40px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 12px; text-align: center;">
<div style="font-size: 10px; font-weight: 700; color: #94a3b8; letter-spacing: 1px; margin-bottom: 8px; text-transform: uppercase;">ADVERTISEMENT</div>
<div style="width: 100%; height: 90px; background: #e2e8f0; border-radius: 4px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 13px;">970 � 90 Ad Space</div>
</div>
</div>

<!-- Educational Section -->
<div class="anim-card delay-2" style="background: white; border-radius: 20px; border: 1px solid #e2e8f0; padding: 40px; margin-top: 60px; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
    <h2 style="font-size: 28px; font-weight: 800; color: #0f172a; margin-bottom: 24px; text-align: center;">Understanding Mutual Fund Returns</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        <div style="background: #f8fafc; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0;">
            <div style="width: 48px; height: 48px; background: #e0f2fe; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Point-to-Point vs. Rolling Returns</h3>
            <p style="font-size: 14px; color: #475569; line-height: 1.6;">Most leaderboards display <strong>Point-to-Point CAGR</strong> (Compound Annual Growth Rate), which calculates returns between exactly two dates. While useful, it can be biased by market timing. <strong>Rolling Returns</strong> evaluate performance over all possible intervals, offering a much more accurate picture of a fund's consistency.</p>
        </div>
        <div style="background: #f8fafc; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0;">
            <div style="width: 48px; height: 48px; background: #fef3c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            </div>
            <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Risk-Adjusted Returns</h3>
            <p style="font-size: 14px; color: #475569; line-height: 1.6;">Don't just chase high percentages. A fund generating 20% returns by taking massive risks might be worse than a fund generating 18% returns with very low volatility. Always look at the Sharpe Ratio to see how much return the fund manager generated per unit of risk.</p>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="anim-card delay-3" style="margin-top: 60px;">
    <h2 style="font-size: 28px; font-weight: 800; color: #0f172a; margin-bottom: 32px; text-align: center;">Frequently Asked Questions</h2>
    <div class="faq-container" style="max-width: 800px; margin: 0 auto;">
        <details class="faq-item" name="faq-mf1" style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; margin-bottom: 16px; overflow: hidden;" open>
            <summary style="padding: 20px; font-size: 16px; font-weight: 700; color: #0f172a; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: #f8fafc; border-bottom: 1px solid transparent; transition: 0.2s;">
                Should I always invest in the #1 performing fund?
                <span style="color: #10b981; font-size: 20px; font-weight: 300;">+</span>
            </summary>
            <div style="padding: 20px; font-size: 15px; color: #475569; line-height: 1.6; border-top: 1px solid #e2e8f0;">
                No. Past performance is not indicative of future results. The #1 fund in a given year often belongs to a sector that had a cyclical boom (like IT or Pharma). Once the cycle rotates, that fund might underperform. It is better to choose consistently well-performing funds over a 5 to 10-year horizon rather than last year's outlier.
            </div>
        </details>
        <details class="faq-item" name="faq-mf1" style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; margin-bottom: 16px; overflow: hidden;">
            <summary style="padding: 20px; font-size: 16px; font-weight: 700; color: #0f172a; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: #f8fafc; border-bottom: 1px solid transparent; transition: 0.2s;">
                Why do direct plans have higher returns than regular plans?
                <span style="color: #10b981; font-size: 20px; font-weight: 300;">+</span>
            </summary>
            <div style="padding: 20px; font-size: 15px; color: #475569; line-height: 1.6; border-top: 1px solid #e2e8f0;">
                Direct plans do not pay trailing commissions to distributors or brokers. Because these marketing and distribution expenses are eliminated, the Total Expense Ratio (TER) is lower. A lower expense ratio directly translates into higher returns for the investor, which compounds significantly over long holding periods.
            </div>
        </details>
    </div>
</div>

</main>
<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>
<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
