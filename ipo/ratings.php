<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Ratings – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Ratings on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
    <style>
        .rating-hero { text-align: center; margin: 40px 0; }
        .score-cards { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 60px; }
        .score-card { background: white; border: 1px solid #e2e8f0; padding: 24px; border-radius: 12px; text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.02); }
        .score-val { font-size: 32px; font-weight: 800; color: #f59e0b; margin: 8px 0; }
        .rating-table { width: 100%; border-collapse: collapse; }
        .rating-table th { background: #0f172a; color: white; padding: 16px; text-align: center; }
        .rating-table th:first-child { text-align: left; }
        .rating-table td { padding: 16px; border-bottom: 1px solid #e2e8f0; text-align: center; }
        .rating-table td:first-child { text-align: left; font-weight: 700; }
        .stars { color: #f59e0b; letter-spacing: 1px; }
    </style>
    <div class="container" style="padding-top: 40px; padding-bottom: 80px;">
        <div class="rating-hero">
            <h1 style="font-size: 36px; font-weight: 800;">IPO RATING SCORECARDS</h1>
            <p style="color: #64748b; font-size: 16px; max-width: 600px; margin: 12px auto 0;">Objective, 5-star ratings across critical evaluation metrics to help you make informed investment decisions.</p>
        </div>
        
        <h2 style="font-size: 20px; font-weight: 800; margin-bottom: 24px; text-align: center;">EVALUATION METRICS</h2>
        <div class="score-cards">
            <div class="score-card">
                <div style="font-weight:700; color:#475569;">BUSINESS MODEL</div>
                <div class="score-val">★★★★★</div>
                <div style="font-size:12px; color:#94a3b8;">Moat, Scalability, Market</div>
            </div>
            <div class="score-card">
                <div style="font-weight:700; color:#475569;">FINANCIALS</div>
                <div class="score-val">★★★★★</div>
                <div style="font-size:12px; color:#94a3b8;">Revenue, Margin, Debt</div>
            </div>
            <div class="score-card">
                <div style="font-weight:700; color:#475569;">VALUATION</div>
                <div class="score-val">★★★★★</div>
                <div style="font-size:12px; color:#94a3b8;">P/E, EV/EBITDA vs Peers</div>
            </div>
            <div class="score-card">
                <div style="font-weight:700; color:#475569;">RISK PROFILE</div>
                <div class="score-val">★★★★★</div>
                <div style="font-size:12px; color:#94a3b8;">Litigation, Concentration</div>
            </div>
        </div>
        
        <div style="display:grid; grid-template-columns: 3fr 1fr; gap: 40px;">
            <div>
                <h2 style="font-size: 20px; font-weight: 800; margin-bottom: 24px;">COMPREHENSIVE RATINGS TABLE</h2>
                <div style="background:white; border:1px solid #e2e8f0; border-radius:12px; overflow:hidden;">
                    <table class="rating-table">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Overall</th>
                                <th>Business</th>
                                <th>Financial</th>
                                <th>Valuation</th>
                                <th>Risk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nexus Tech Innovations</td>
                                <td><div class="stars">★★★★★</div></td>
                                <td><div class="stars">★★★★★</div></td>
                                <td><div class="stars">★★★★★</div></td>
                                <td><div class="stars">★★★★★</div></td>
                                <td><div class="stars">★★★★★</div></td>
                            </tr>
                            <tr style="background:#f8fafc;">
                                <td>Aura Energy SME</td>
                                <td><div class="stars">★★★★★</div></td>
                                <td><div class="stars">★★★★★</div></td>
                                <td><div class="stars">★★★★★</div></td>
                                <td><div class="stars">★★★★★</div></td>
                                <td><div class="stars">★★★★★</div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <aside>
                <div style="background:#f1f5f9; height:250px; display:flex; align-items:center; justify-content:center; border:1px solid #e2e8f0; font-weight:700; margin-bottom: 40px;">AD 300x250</div>
                
                <h3 style="font-weight: 800; border-bottom: 2px solid #e2e8f0; padding-bottom: 12px; margin-bottom: 16px;">TOP RATED IPOs</h3>
                <div style="margin-bottom: 16px;">
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <a href="#" style="font-weight: 700; color: #0f172a; text-decoration: none;">Nexus Tech</a>
                        <div class="stars" style="font-size:12px;">4.2/5</div>
                    </div>
                </div>
                <div style="margin-bottom: 16px;">
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <a href="#" style="font-weight: 700; color: #0f172a; text-decoration: none;">Vidyut Tech</a>
                        <div class="stars" style="font-size:12px;">4.1/5</div>
                    </div>
                </div>
            </aside>
        </div>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
