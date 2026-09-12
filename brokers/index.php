<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Brokers – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Brokers on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
    <!-- HERO SECTION & MATCHMAKER -->
    <div class="container">
        <div class="broker-hero">
            <div class="broker-hero-content">
                <h1>Find Your Perfect Broker</h1>
                <p>Compare Indian brokers based on your trading style, calculate exact brokerages, and find the platform that fits your needs.</p>
                
                <div class="matchmaker-sentence">
                    I am a 
                    <select class="mm-select">
                        <option>Beginner</option>
                        <option>Trader</option>
                        <option>Investor</option>
                    </select>
                    looking for 
                    <select class="mm-select">
                        <option>Zero Brokerage</option>
                        <option>Best App</option>
                        <option>Margin Funding</option>
                    </select>
                    <button class="btn-match">Find Broker &rarr;</button>
                </div>
            </div>
        </div>
        
        <h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 24px;">Top Picks for You</h2>
        
        <!-- TOP PICKS BENTO GRID -->
        <div class="top-picks-grid">
            <div class="pick-card featured">
                <span class="pick-badge">Best Overall</span>
                <div class="pick-header">
                    <div class="pick-logo b-icon-z">Z</div>
                    <div>
                        <div class="pick-title">Zerodha</div>
                        <div class="pick-stars">★★★★★ <span style="color:#64748b; font-size:12px;">(4.9)</span></div>
                    </div>
                </div>
                <div class="pick-features">
                    <div class="pick-feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Free Equity Delivery
                    </div>
                    <div class="pick-feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Best Trading Platform (Kite)
                    </div>
                </div>
                <a href="" class="btn btn-primary" style="display:block; text-align:center; padding:10px; border-radius:8px; font-weight:700; text-decoration:none;" target="_blank" rel="noopener noreferrer">Open Account</a>
            </div>
            
            <div class="pick-card beginners">
                <span class="pick-badge">Best for Beginners</span>
                <div class="pick-header">
                    <div class="pick-logo b-icon-g">G</div>
                    <div>
                        <div class="pick-title">Groww</div>
                        <div class="pick-stars">★★★★★ <span style="color:#64748b; font-size:12px;">(4.8)</span></div>
                    </div>
                </div>
                <div class="pick-features">
                    <div class="pick-feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Zero AMC Forever
                    </div>
                    <div class="pick-feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Extremely Simple UI
                    </div>
                </div>
                <a href="<?= BASE_URL ?>brokers/groww" class="btn btn-outline" style="display:block; text-align:center; padding:10px; border-radius:8px; font-weight:700; text-decoration:none; margin-top: auto;">Read Review</a>
            </div>
            
            <div class="pick-card options">
                <span class="pick-badge">Best for Traders</span>
                <div class="pick-header">
                    <div class="pick-logo b-icon-u">U</div>
                    <div>
                        <div class="pick-title">Upstox</div>
                        <div class="pick-stars">★★★★☆ <span style="color:#64748b; font-size:12px;">(4.6)</span></div>
                    </div>
                </div>
                <div class="pick-features">
                    <div class="pick-feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Advanced Charting
                    </div>
                    <div class="pick-feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Margin Trading Facility
                    </div>
                </div>
                <a href="<?= BASE_URL ?>brokers/upstox" class="btn btn-outline" style="display:block; text-align:center; padding:10px; border-radius:8px; font-weight:700; text-decoration:none;">Read Review</a>
            </div>
        </div>
    </div>

    <main class="container" style="margin-bottom: 80px;">

        <div style="display: grid; grid-template-columns: 1fr 300px; gap: 40px;">
            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 24px;">BROKER DIRECTORY</h2>
                
                <!-- Table Style Directory -->
                <div class="enhanced-broker-table" style="margin-bottom: 40px;">
                    <table>
                        <thead>
                            <tr>
                                <th>Broker</th>
                                <th>A/C Opening</th>
                                <th>AMC</th>
                                <th>Equity Del.</th>
                                <th>F&O</th>
                                <th style="text-align: right;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="broker-name-cell">
                                        <div class="broker-icon b-icon-z">Z</div>
                                        <div>
                                            <a href="<?= BASE_URL ?>brokers/zerodha" class="broker-name">Zerodha</a><br>
                                            <span class="broker-type-badge">Discount</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fee-num">₹200</span></td>
                                <td><span class="fee-num">₹300</span></td>
                                <td><span class="fee-free">Free</span></td>
                                <td><span class="fee-num">₹20/order</span></td>
                                <td style="text-align: right;">
                                    <a href="<?= BASE_URL ?>brokers/zerodha" class="btn-review">
                                        Review <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="broker-name-cell">
                                        <div class="broker-icon b-icon-g">G</div>
                                        <div>
                                            <a href="<?= BASE_URL ?>brokers/groww" class="broker-name">Groww</a><br>
                                            <span class="broker-type-badge">Discount</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fee-free">Free</span></td>
                                <td><span class="fee-free">Free</span></td>
                                <td><span class="fee-num">₹20/order</span></td>
                                <td><span class="fee-num">₹20/order</span></td>
                                <td style="text-align: right;">
                                    <a href="<?= BASE_URL ?>brokers/groww" class="btn-review">
                                        Review <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="broker-name-cell">
                                        <div class="broker-icon b-icon-u">U</div>
                                        <div>
                                            <a href="<?= BASE_URL ?>brokers/upstox" class="broker-name">Upstox</a><br>
                                            <span class="broker-type-badge">Discount</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fee-free">Free</span></td>
                                <td><span class="fee-free">Free</span></td>
                                <td><span class="fee-num">₹20/order</span></td>
                                <td><span class="fee-num">₹20/order</span></td>
                                <td style="text-align: right;">
                                    <a href="<?= BASE_URL ?>brokers/upstox" class="btn-review">
                                        Review <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="broker-name-cell">
                                        <div class="broker-icon b-icon-a">A</div>
                                        <div>
                                            <a href="<?= BASE_URL ?>brokers/angel-one" class="broker-name">Angel One</a><br>
                                            <span class="broker-type-badge">Full Service</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fee-free">Free</span></td>
                                <td><span class="fee-num">₹240</span></td>
                                <td><span class="fee-free">Free</span></td>
                                <td><span class="fee-num">₹20/order</span></td>
                                <td style="text-align: right;">
                                    <a href="<?= BASE_URL ?>brokers/angel-one" class="btn-review">
                                        Review <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="broker-name-cell">
                                        <div class="broker-icon b-icon-p">P</div>
                                        <div>
                                            <a href="<?= BASE_URL ?>brokers/prostocks" class="broker-name">ProStocks</a><br>
                                            <span class="broker-type-badge">Discount</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fee-free">Free</span></td>
                                <td><span class="fee-free">Free</span></td>
                                <td><span class="fee-free">Free</span></td>
                                <td><span class="fee-num">₹15/order</span></td>
                                <td style="text-align: right;">
                                    <a href="<?= BASE_URL ?>brokers/prostocks" class="btn-review">
                                        Review <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div style="background: #f1f5f9; border-radius: 8px; padding: 24px; text-align: center; margin-bottom: 40px; border: 1px dashed #cbd5e1;">
                    <div style="font-size: 14px; color: #64748b;">970 × 90 Advertisement</div>
                </div>

                <h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 24px;">BROKER COMPARISON</h2>
                <p style="color: #475569; line-height: 1.6; margin-bottom: 24px;">Not sure which one to choose? Compare brokers side-by-side to find the right fit for your trading style.</p>
                <a href="compare.html" class="btn btn-primary" style="padding: 12px 24px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-block;">Compare All Brokers →</a>

            </div>

            <!-- Sidebar -->
            <aside>
                <div style="background: #f1f5f9; border-radius: 8px; padding: 24px; text-align: center; margin-bottom: 32px; border: 1px dashed #cbd5e1; height: 250px; display: flex; align-items: center; justify-content: center;">
                    <div style="font-size: 14px; color: #64748b;">300 × 250 Ad</div>
                </div>

                <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
                    <h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 16px;">Top Brokers</h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 16px; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 700; color: #0f172a;">Zerodha</span>
                            <span style="color: #eab308; font-size: 14px;">★★★★★</span>
                        </li>
                        <li style="margin-bottom: 16px; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 700; color: #0f172a;">Groww</span>
                            <span style="color: #eab308; font-size: 14px;">★★★★☆</span>
                        </li>
                        <li style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 700; color: #0f172a;">Upstox</span>
                            <span style="color: #eab308; font-size: 14px;">★★★★☆</span>
                        </li>
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
