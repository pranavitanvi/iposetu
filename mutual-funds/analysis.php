<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Analysis NAV, Portfolio Holdings &amp; Returns | IPOSETU</title>
<meta name="description" content="Analyze Analysis performance, expense ratio, risk ratings, and fund manager details on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
<div class="market-hero" style="background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: white; padding: 60px 40px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; animation: fadeUp 0.6s forwards;">
<div style="font-size: 12px; font-weight: 700; color: #5eead4; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Mutual Funds ? Analysis</div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px; color: white;">FUND ANALYSIS TERMINAL</h1>
<p style="font-size: 16px; color: #ccfbf1; max-width: 600px; line-height: 1.6;">Deep dive into risk metrics: Alpha, Beta, Sharpe Ratio, and Drawdowns.</p>
<div style="position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(20,184,166,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none;"></div>
</div>
</div>

<main class="container" style="display: grid; grid-template-columns: 1fr; gap: 40px; margin-bottom: 80px;">
<!-- Search -->
<div style="max-width: 600px; margin: 0 auto; width: 100%; text-align: center;">
<div style="position: relative;">
<input placeholder="Search a fund to analyze (e.g. Parag Parikh Flexi Cap)..." style="width: 100%; padding: 16px 20px; padding-left: 50px; border: 2px solid var(--primary-color); border-radius: 12px; font-size: 16px; font-weight: 600; color: #0f172a; outline: none; box-shadow: 0 4px 12px rgba(37,99,235,0.1);" type="text"/>
<svg fill="none" height="24" stroke="var(--primary-color)" stroke-width="2" style="position: absolute; left: 16px; top: 16px;" viewbox="0 0 24 24" width="24"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg>
</div>
</div>
<div style="display: grid; grid-template-columns: 1fr 300px; gap: 40px;">
<div class="main-content">
<!-- Example Analysis Data -->
<div class="anim-card delay-1" style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 24px; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
<div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 24px; border-bottom: 1px solid #e2e8f0; padding-bottom: 16px;">
<div>
<h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 4px;">Parag Parikh Flexi Cap Fund</h2>
<div style="font-size: 14px; color: #64748b;">Equity - Flexi Cap | Benchmark: NIFTY 500</div>
</div>
<div style="text-align: right;">
<div style="font-size: 12px; font-weight: 700; color: #94a3b8; text-transform: uppercase;">Overall Score</div>
<div style="font-size: 28px; font-weight: 800; color: #10b981;">8.5<span style="font-size:16px; color:#64748b;">/10</span></div>
</div>
</div>
<h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 16px; text-transform: uppercase;">Risk &amp; Return Metrics (3Y)</h3>
<div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 32px;">
<div style="padding: 16px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px;">
<div style="font-size: 11px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-bottom: 4px;">Alpha</div>
<div style="font-size: 20px; font-weight: 800; color: #10b981;">5.64%</div>
<div style="font-size: 11px; color: #94a3b8; margin-top: 4px;">Outperformance vs Benchmark</div>
</div>
<div style="padding: 16px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px;">
<div style="font-size: 11px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-bottom: 4px;">Beta</div>
<div style="font-size: 20px; font-weight: 800; color: #0f172a;">0.78</div>
<div style="font-size: 11px; color: #94a3b8; margin-top: 4px;">Lower volatility than market</div>
</div>
<div style="padding: 16px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px;">
<div style="font-size: 11px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-bottom: 4px;">Sharpe Ratio</div>
<div style="font-size: 20px; font-weight: 800; color: #0f172a;">1.24</div>
<div style="font-size: 11px; color: #94a3b8; margin-top: 4px;">Excellent risk-adjusted return</div>
</div>
<div style="padding: 16px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px;">
<div style="font-size: 11px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-bottom: 4px;">Max Drawdown</div>
<div style="font-size: 20px; font-weight: 800; color: #ef4444;">-18.4%</div>
<div style="font-size: 11px; color: #94a3b8; margin-top: 4px;">Worst historical drop</div>
</div>
</div>
<h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 16px; text-transform: uppercase;">Performance vs Category</h3>
<div style="width: 100%; height: 250px; background: #f8fafc; border: 1px dashed #cbd5e1; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-direction: column; margin-bottom: 24px;">
<svg fill="none" height="48" stroke="#94a3b8" stroke-width="1.5" viewbox="0 0 24 24" width="48"><path d="M3 3v18h18"></path><path d="M18 17V9"></path><path d="M13 17V5"></path><path d="M8 17v-3"></path></svg>
<div style="margin-top: 12px; font-size: 13px; color: #64748b; font-weight: 600;">Rolling Returns Chart placeholder</div>
</div>
</div>
</div>
<aside class="sidebar">
<div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px; text-align: center; margin-bottom: 24px;">
<div style="font-size: 10px; font-weight: 700; color: #94a3b8; letter-spacing: 1px; margin-bottom: 8px; text-transform: uppercase;">ADVERTISEMENT</div>
<div style="width: 100%; height: 250px; background: #e2e8f0; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 13px;">300 × 250 Ad</div>
</div>
</aside>
</div>

<!-- Educational Section -->
<div class="anim-card delay-2" style="background: white; border-radius: 20px; border: 1px solid #e2e8f0; padding: 40px; margin-top: 60px; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
    <h2 style="font-size: 28px; font-weight: 800; color: #0f172a; margin-bottom: 24px; text-align: center;">Key Analysis Metrics Cheat Sheet</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        <div style="background: #f8fafc; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0;">
            <div style="width: 48px; height: 48px; background: #e0f2fe; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                <span style="font-size: 24px; font-weight: 800; color: #0ea5e9;">a</span>
            </div>
            <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Alpha (Manager Skill)</h3>
            <p style="font-size: 14px; color: #475569; line-height: 1.6;">Alpha measures how much extra return the fund manager generated compared to the benchmark index, for the amount of risk taken. A positive Alpha indicates the manager added value through stock selection.</p>
        </div>
        <div style="background: #f8fafc; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0;">
            <div style="width: 48px; height: 48px; background: #fef3c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                <span style="font-size: 24px; font-weight: 800; color: #d97706;">ß</span>
            </div>
            <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Beta (Market Volatility)</h3>
            <p style="font-size: 14px; color: #475569; line-height: 1.6;">Beta measures the fund's volatility relative to the market. A Beta of 1 means it moves with the market. A Beta > 1 means it is more volatile (aggressive), and a Beta < 1 means it is less volatile (defensive).</p>
        </div>
        <div style="background: #f8fafc; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0;">
            <div style="width: 48px; height: 48px; background: #dcfce7; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                <span style="font-size: 24px; font-weight: 800; color: #16a34a;">S</span>
            </div>
            <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Sharpe Ratio</h3>
            <p style="font-size: 14px; color: #475569; line-height: 1.6;">The Sharpe ratio divides the excess returns of the fund by its volatility. Simply put, it tells you how much extra return you are getting for the extra sleep you might lose. Higher is always better.</p>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="anim-card delay-3" style="margin-top: 60px;">
    <h2 style="font-size: 28px; font-weight: 800; color: #0f172a; margin-bottom: 32px; text-align: center;">Frequently Asked Questions</h2>
    <div class="faq-container" style="max-width: 800px; margin: 0 auto;">
        <details class="faq-item" name="faq-analysis" style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; margin-bottom: 16px; overflow: hidden;" open>
            <summary style="padding: 20px; font-size: 16px; font-weight: 700; color: #0f172a; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: #f8fafc; border-bottom: 1px solid transparent; transition: 0.2s;">
                What is a good Sharpe Ratio for an equity fund?
                <span style="color: #10b981; font-size: 20px; font-weight: 300;">+</span>
            </summary>
            <div style="padding: 20px; font-size: 15px; color: #475569; line-height: 1.6; border-top: 1px solid #e2e8f0;">
                Generally, a Sharpe ratio above 1.0 is considered good, above 2.0 is considered very good, and above 3.0 is considered excellent. However, you should always compare the Sharpe ratio of a fund against its direct peers (e.g., compare a Small Cap fund's Sharpe only against other Small Cap funds).
            </div>
        </details>
        <details class="faq-item" name="faq-analysis" style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; margin-bottom: 16px; overflow: hidden;">
            <summary style="padding: 20px; font-size: 16px; font-weight: 700; color: #0f172a; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: #f8fafc; border-bottom: 1px solid transparent; transition: 0.2s;">
                Why do some funds have negative Alpha?
                <span style="color: #10b981; font-size: 20px; font-weight: 300;">+</span>
            </summary>
            <div style="padding: 20px; font-size: 15px; color: #475569; line-height: 1.6; border-top: 1px solid #e2e8f0;">
                A negative Alpha indicates that the fund manager is underperforming the benchmark index when adjusted for risk. If an active fund consistently posts negative alpha over 3 to 5 years, investors are better off switching to a passive index fund, which will guarantee market returns at a lower cost.
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
