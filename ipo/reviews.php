<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Reviews – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Reviews on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
    <style>
        .editorial-feat { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin: 40px 0; background: #0f172a; color: white; border-radius: 16px; overflow: hidden; }
        .editorial-img { background: #334155; height: 100%; min-height: 300px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #94a3b8; }
        .editorial-content { padding: 40px; display: flex; flex-direction: column; justify-content: center; }
        .star-rating { color: #f59e0b; letter-spacing: 2px; margin-bottom: 12px; }
        .latest-reviews { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
        .review-card { border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; }
        .rc-img { height: 180px; background: #f1f5f9; display: flex; align-items: center; justify-content: center; color: #94a3b8; }
        .rc-content { padding: 20px; }
    </style>
    <div class="container" style="padding-top: 40px; padding-bottom: 80px;">
        <h1 style="font-size: 36px; font-weight: 800; border-bottom: 4px solid #0f172a; display: inline-block; padding-bottom: 8px;">IPO REVIEWS</h1>
        
        <div class="editorial-feat">
            <div class="editorial-content">
                <div class="star-rating">★★★★☆ (4.2/5)</div>
                <h2 style="font-size: 32px; font-weight: 800; margin-bottom: 16px;">Nexus Tech Innovations: Strong Fundamentals or Overpriced?</h2>
                <p style="color: #cbd5e1; line-height: 1.6; margin-bottom: 24px;">An in-depth review of Nexus Tech's upcoming IPO, analyzing their market position, competitive moat, and valuation metrics against industry peers.</p>
                <div><a href="#" class="btn btn-primary" style="padding: 12px 24px; border-radius: 8px;">Read Full Review →</a></div>
            </div>
            <div class="editorial-img">[ FEATURED IMAGE ]</div>
        </div>
        
        <div style="display: grid; grid-template-columns: 3fr 1fr; gap: 40px;">
            <div>
                <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 24px; border-left: 4px solid #3b82f6; padding-left: 12px;">LATEST REVIEWS</h3>
                <div class="latest-reviews">
                    <div class="review-card">
                        <div class="rc-img">[ IMAGE ]</div>
                        <div class="rc-content">
                            <div class="star-rating">★★★☆☆</div>
                            <h4 style="font-weight: 800; font-size: 18px; margin-bottom: 8px;">Aura Energy SME Review</h4>
                            <p style="font-size: 14px; color: #475569; line-height: 1.5; margin-bottom: 16px;">Exploring the risks and potential rewards in the renewable sector.</p>
                            <a href="#" style="color: #3b82f6; font-weight: 700;">Read More →</a>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="rc-img">[ IMAGE ]</div>
                        <div class="rc-content">
                            <div class="star-rating">★★★★★</div>
                            <h4 style="font-weight: 800; font-size: 18px; margin-bottom: 8px;">TechNova: A Clear Buy</h4>
                            <p style="font-size: 14px; color: #475569; line-height: 1.5; margin-bottom: 16px;">Why this IT services firm is our top pick for the quarter.</p>
                            <a href="#" style="color: #3b82f6; font-weight: 700;">Read More →</a>
                        </div>
                    </div>
                </div>
                
                                
                <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 24px; border-left: 4px solid #f59e0b; padding-left: 12px;">IPO STRENGTHS & RISKS</h3>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
                    <div style="background: #f0fdf4; border: 1px solid #bbf7d0; padding: 20px; border-radius: 8px;">
                        <h4 style="color: #166534; font-weight: 800; margin-bottom: 12px;">Common Strengths</h4>
                        <ul style="color: #15803d; padding-left: 20px; line-height: 1.8;">
                            <li>Strong order book</li>
                            <li>Experienced management</li>
                            <li>High entry barriers</li>
                        </ul>
                    </div>
                    <div style="background: #fef2f2; border: 1px solid #fecaca; padding: 20px; border-radius: 8px;">
                        <h4 style="color: #991b1b; font-weight: 800; margin-bottom: 12px;">Key Risk Factors</h4>
                        <ul style="color: #b91c1c; padding-left: 20px; line-height: 1.8;">
                            <li>Customer concentration</li>
                            <li>Regulatory hurdles</li>
                            <li>Valuation concerns</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Ratings Section -->
                <div id="ratings" style="margin-top: 60px; padding-top: 40px; border-top: 1px solid #e2e8f0;">
                    <h3 style="font-size: 24px; font-weight: 800; margin-bottom: 16px; display:flex; align-items:center; gap:12px;">
                        <span style="background: #eef2ff; color: #4f46e5; padding: 8px 12px; border-radius: 8px;">⭐</span> IPO Ratings
                    </h3>
                    <p style="color: #475569; line-height: 1.8; font-size: 15px; margin-bottom: 24px;">
                        Our proprietary rating system evaluates every IPO across five critical dimensions: Management Pedigree, Financial Track Record, Valuation Comfort, Sector Outlook, and Grey Market Demand. An IPO must score at least 4 out of 5 stars to earn our "Strong Subscribe" recommendation. 
                    </p>
                    <div style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px;">
                        <div style="display:flex; justify-content:space-between; margin-bottom:12px; border-bottom:1px solid #f1f5f9; padding-bottom:12px;">
                            <span style="font-weight:700; color:#0f172a;">Nexus Tech Innovations</span>
                            <span style="color:#f59e0b; font-weight:800; letter-spacing:2px;">★★★★☆</span>
                        </div>
                        <div style="display:flex; justify-content:space-between; margin-bottom:12px; border-bottom:1px solid #f1f5f9; padding-bottom:12px;">
                            <span style="font-weight:700; color:#0f172a;">Aura Energy SME</span>
                            <span style="color:#f59e0b; font-weight:800; letter-spacing:2px;">★★★☆☆</span>
                        </div>
                        <div style="display:flex; justify-content:space-between;">
                            <span style="font-weight:700; color:#0f172a;">TechNova IT Services</span>
                            <span style="color:#f59e0b; font-weight:800; letter-spacing:2px;">★★★★★</span>
                        </div>
                    </div>
                </div>

                <!-- Analysis Section -->
                <div id="analysis" style="margin-top: 60px; padding-top: 40px; border-top: 1px solid #e2e8f0;">
                    <h3 style="font-size: 24px; font-weight: 800; margin-bottom: 16px; display:flex; align-items:center; gap:12px;">
                        <span style="background: #fdf4ff; color: #c026d3; padding: 8px 12px; border-radius: 8px;">📈</span> In-Depth Analysis
                    </h3>
                    <p style="color: #475569; line-height: 1.8; font-size: 15px; margin-bottom: 24px;">
                        Beyond the surface-level numbers, our expert analysts dive deep into the DRHP (Draft Red Herring Prospectus). We break down the Object of the Issue, ensuring the funds are used for genuine CAPEX (Capital Expenditure) and growth, rather than just enriching existing promoters through an Offer For Sale (OFS).
                    </p>
                    <a href="#" class="btn btn-outline" style="padding: 10px 20px; font-weight: 700; border-radius: 8px; text-decoration: none;">View Latest Analyst Reports &rarr;</a>
                </div>

                <!-- Financials Section -->
                <div id="financials" style="margin-top: 60px; padding-top: 40px; border-top: 1px solid #e2e8f0;">
                    <h3 style="font-size: 24px; font-weight: 800; margin-bottom: 16px; display:flex; align-items:center; gap:12px;">
                        <span style="background: #ecfdf5; color: #059669; padding: 8px 12px; border-radius: 8px;">💰</span> Financial Performance
                    </h3>
                    <p style="color: #475569; line-height: 1.8; font-size: 15px; margin-bottom: 24px;">
                        We track the 3-year historical financial trajectory of the company. Key metrics we analyze include Topline (Revenue) growth YoY, PAT (Profit After Tax) margins, Return on Net Worth (RoNW), and Debt-to-Equity ratios. Companies showing consistent double-digit growth with manageable debt are highlighted as prime investment candidates.
                    </p>
                    <div style="background:#f1f5f9; padding:20px; text-align:center; border:1px dashed #cbd5e1; border-radius:12px; font-weight:600; color:#64748b;">
                        Interactive Financial Comparison Tools Coming Soon
                    </div>
                </div>

                <!-- Anchor Investors Section -->
                <div id="anchor" style="margin-top: 60px; padding-top: 40px; border-top: 1px solid #e2e8f0;">
                    <h3 style="font-size: 24px; font-weight: 800; margin-bottom: 16px; display:flex; align-items:center; gap:12px;">
                        <span style="background: #fffbeb; color: #d97706; padding: 8px 12px; border-radius: 8px;">⚓</span> Anchor Investors
                    </h3>
                    <p style="color: #475569; line-height: 1.8; font-size: 15px;">
                        Anchor investors are marquee institutional buyers (like mutual funds and foreign portfolio investors) who are allocated shares a day before the IPO opens to the public. Strong anchor participation from reputed names like SBI Mutual Fund, Nippon India, or Goldman Sachs acts as a massive confidence booster for retail investors, often resulting in heavy oversubscription and strong GMP momentum.
                    </p>
                </div>

                <!-- Basis of Allotment Section -->
                <div id="allotment" style="margin-top: 60px; padding-top: 40px; border-top: 1px solid #e2e8f0; margin-bottom: 40px;">
                    <h3 style="font-size: 24px; font-weight: 800; margin-bottom: 16px; display:flex; align-items:center; gap:12px;">
                        <span style="background: #fef2f2; color: #dc2626; padding: 8px 12px; border-radius: 8px;">🎯</span> Basis of Allotment
                    </h3>
                    <p style="color: #475569; line-height: 1.8; font-size: 15px;">
                        The Basis of Allotment document is published by the registrar (like Link Intime or KFintech) and details exactly how shares were distributed. In the Retail category, if an IPO is oversubscribed, allotment is purely based on a computerized lottery draw. We break down the mathematical probability of your application getting selected based on the final subscription data.
                    </p>
                </div>
            </div>
            
            <aside>
                <div style="background:#f1f5f9; height:250px; display:flex; align-items:center; justify-content:center; border:1px solid #e2e8f0; font-weight:700;">AD 300x250</div>
                
                <div style="margin-top: 40px;">
                    <h3 style="font-weight: 800; border-bottom: 2px solid #e2e8f0; padding-bottom: 12px; margin-bottom: 16px;">POPULAR REVIEWS</h3>
                    <div style="margin-bottom: 16px;">
                        <div class="star-rating" style="font-size: 12px; margin-bottom: 4px;">★★★★☆</div>
                        <a href="#" style="font-weight: 700; color: #0f172a; text-decoration: none;">Vidyut Tech Analysis</a>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <div class="star-rating" style="font-size: 12px; margin-bottom: 4px;">★★★☆☆</div>
                        <a href="#" style="font-weight: 700; color: #0f172a; text-decoration: none;">AgriGrow Seed Co</a>
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
