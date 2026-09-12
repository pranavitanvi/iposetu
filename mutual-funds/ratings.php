<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Ratings NAV, Portfolio Holdings &amp; Returns | IPOSETU</title>
<meta name="description" content="Analyze Ratings performance, expense ratio, risk ratings, and fund manager details on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
<div class="market-hero" style="background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: white; padding: 60px 40px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; animation: fadeUp 0.6s forwards;">
<div style="font-size: 12px; font-weight: 700; color: #5eead4; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Mutual Funds ? Ratings</div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px; color: white;">FUND RATINGS BOARD</h1>
<p style="font-size: 16px; color: #ccfbf1; max-width: 600px; line-height: 1.6;">Discover 5-star and 4-star rated mutual funds evaluated by independent agencies.</p>
<div style="position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(20,184,166,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none;"></div>
</div>
</div>

<main class="container" style="display: grid; grid-template-columns: 1fr 300px; gap: 40px; margin-bottom: 80px;">
<div class="main-content">
<!-- Filters -->
<div style="display: flex; gap: 12px; margin-bottom: 24px;">
<select style="padding: 10px 16px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 14px; font-weight: 600; color: #0f172a; outline: none; cursor: pointer;">
<option>Rating: 5 Stars Only</option>
<option>Rating: 4 &amp; 5 Stars</option>
</select>
<select style="padding: 10px 16px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 14px; font-weight: 600; color: #0f172a; outline: none; cursor: pointer;">
<option>Category: All Equity</option>
<option>Category: All Debt</option>
</select>
</div>
<!-- Rated Funds -->
<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 40px;">
<!-- Fund 1 -->
<div class="anim-card delay-2" style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 24px; box-shadow: 0 4px 6px rgba(0,0,0,0.02); display: flex; flex-direction: column; align-items: center; text-align: center;">
<div style="font-size: 24px; color: #f59e0b; margin-bottom: 12px; letter-spacing: 2px;">★★★★★</div>
<a href="parag-parikh-flexi-cap-fund.html" style="font-size: 16px; font-weight: 800; color: #0f172a; text-decoration: none; margin-bottom: 8px;">Parag Parikh Flexi Cap</a>
<div style="font-size: 13px; color: #64748b; margin-bottom: 16px;">Equity - Flexi Cap</div>
<div style="display: flex; gap: 24px; border-top: 1px solid #e2e8f0; width: 100%; padding-top: 16px; justify-content: center;">
<div>
<div style="font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase;">3Y Return</div>
<div style="font-size: 16px; font-weight: 800; color: #10b981;">22.1%</div>
</div>
<div>
<div style="font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase;">Risk</div>
<div style="font-size: 16px; font-weight: 800; color: #ef4444;">High</div>
</div>
</div>
</div>
<!-- Fund 2 -->
<div class="anim-card delay-3" style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 24px; box-shadow: 0 4px 6px rgba(0,0,0,0.02); display: flex; flex-direction: column; align-items: center; text-align: center;">
<div style="font-size: 24px; color: #f59e0b; margin-bottom: 12px; letter-spacing: 2px;">★★★★★</div>
<a href="sbi-small-cap-fund.html" style="font-size: 16px; font-weight: 800; color: #0f172a; text-decoration: none; margin-bottom: 8px;">SBI Small Cap Fund</a>
<div style="font-size: 13px; color: #64748b; margin-bottom: 16px;">Equity - Small Cap</div>
<div style="display: flex; gap: 24px; border-top: 1px solid #e2e8f0; width: 100%; padding-top: 16px; justify-content: center;">
<div>
<div style="font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase;">3Y Return</div>
<div style="font-size: 16px; font-weight: 800; color: #10b981;">26.8%</div>
</div>
<div>
<div style="font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase;">Risk</div>
<div style="font-size: 16px; font-weight: 800; color: #ef4444;">Very High</div>
</div>
</div>
</div>
</div>
<!-- Ad -->
<div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 12px; text-align: center;">
<div style="font-size: 10px; font-weight: 700; color: #94a3b8; letter-spacing: 1px; margin-bottom: 8px; text-transform: uppercase;">ADVERTISEMENT</div>
<div style="width: 100%; height: 90px; background: #e2e8f0; border-radius: 4px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 13px;">970 � 90 Ad Space</div>
</div>
</div>
<aside class="sidebar">
<div class="card anim-card delay-1" style="padding: 24px; border-radius: 12px; border-top: 4px solid var(--primary-color); margin-bottom: 24px;">
<h3 style="font-size: 14px; font-weight: 800; margin-bottom: 12px; color: #0f172a; text-transform: uppercase;">How are ratings calculated?</h3>
<p style="font-size: 13px; color: #475569; line-height: 1.6; margin: 0;">Ratings represent a fund's historical risk-adjusted performance compared to its peers. A 5-star rating means the fund is in the top 10% of its category.</p>
</div>
</aside>

<!-- Educational Section -->
<div class="anim-card delay-2" style="background: white; border-radius: 20px; border: 1px solid #e2e8f0; padding: 40px; margin-top: 60px; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
    <h2 style="font-size: 28px; font-weight: 800; color: #0f172a; margin-bottom: 24px; text-align: center;">Our Rating Methodology</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px;">
        <div style="background: #f8fafc; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0; text-align: center;">
            <div style="width: 48px; height: 48px; background: #e0f2fe; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            </div>
            <h3 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Consistency (40%)</h3>
            <p style="font-size: 13px; color: #475569; line-height: 1.6;">How consistently the fund beats its benchmark over rolling 3-year and 5-year periods.</p>
        </div>
        <div style="background: #f8fafc; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0; text-align: center;">
            <div style="width: 48px; height: 48px; background: #fef3c7; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            </div>
            <h3 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Risk Control (30%)</h3>
            <p style="font-size: 13px; color: #475569; line-height: 1.6;">Evaluation of downside capture ratios, Sortino ratio, and max drawdowns during bear markets.</p>
        </div>
        <div style="background: #f8fafc; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0; text-align: center;">
            <div style="width: 48px; height: 48px; background: #dcfce7; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
            </div>
            <h3 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Cost Efficiency (30%)</h3>
            <p style="font-size: 13px; color: #475569; line-height: 1.6;">Analyzing the Total Expense Ratio (TER) relative to category peers and the fund's asset size.</p>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="anim-card delay-3" style="margin-top: 60px;">
    <h2 style="font-size: 28px; font-weight: 800; color: #0f172a; margin-bottom: 32px; text-align: center;">Frequently Asked Questions</h2>
    <div class="faq-container" style="max-width: 800px; margin: 0 auto;">
        <details class="faq-item" name="faq-ratings" style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; margin-bottom: 16px; overflow: hidden;" open>
            <summary style="padding: 20px; font-size: 16px; font-weight: 700; color: #0f172a; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: #f8fafc; border-bottom: 1px solid transparent; transition: 0.2s;">
                How often are fund ratings updated?
                <span style="color: #10b981; font-size: 20px; font-weight: 300;">+</span>
            </summary>
            <div style="padding: 20px; font-size: 15px; color: #475569; line-height: 1.6; border-top: 1px solid #e2e8f0;">
                Our mutual fund ratings are rebalanced automatically at the end of every quarter. However, significant structural changes�such as a change in the lead fund manager or a major shift in the fund's mandate�can trigger an immediate review and potential rerating.
            </div>
        </details>
        <details class="faq-item" name="faq-ratings" style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; margin-bottom: 16px; overflow: hidden;">
            <summary style="padding: 20px; font-size: 16px; font-weight: 700; color: #0f172a; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: #f8fafc; border-bottom: 1px solid transparent; transition: 0.2s;">
                Should I sell a fund if its rating drops from 5 to 4 stars?
                <span style="color: #10b981; font-size: 20px; font-weight: 300;">+</span>
            </summary>
            <div style="padding: 20px; font-size: 15px; color: #475569; line-height: 1.6; border-top: 1px solid #e2e8f0;">
                Not immediately. A drop to 4 stars simply indicates that peer funds might have slightly edged it out in recent metrics. A 4-star fund is still considered an excellent investment. You should only consider selling if the fund's rating drops below 3 stars consistently for over 4 quarters, indicating structural underperformance.
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
