<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
﻿<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Compare Review 2026 – Brokerage Charges, App &amp; IPO Bidding | IPOSETU</title>
<meta name="description" content="Complete review of Compare in India. Check account opening fees, trading charges, margin features, and one-click IPO application tools."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
    <div class="container" style="padding: 24px; margin-top: 20px; border-bottom: 1px solid var(--border-color); margin-bottom: 30px;">
        <div style="font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px;">
            <a href="<?= BASE_URL ?>brokers/" style="color: inherit; text-decoration: none;">Brokers</a> / <span style="color: var(--primary-color);">Compare</span>
        </div>
        <h1 style="font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 12px; letter-spacing: -0.5px;">COMPARE BROKERS</h1>
        <p style="font-size: 16px; color: #475569; max-width: 800px; line-height: 1.6;">Compare up to 3 brokers side-by-side to find the best fit for your trading style.</p>
    </div>

    <main class="container" style="margin-bottom: 80px;">
        
        <!-- SELECT BROKERS -->
        <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.03); margin-bottom: 40px; display: flex; gap: 24px;">
            <div style="flex: 1;">
                <label style="display: block; font-size: 12px; font-weight: 700; color: #64748b; margin-bottom: 8px; text-transform: uppercase;">Broker 1</label>
                <select style="width: 100%; padding: 12px; border: 1px solid #2563eb; border-radius: 6px; font-size: 16px; font-weight: 700; color: #2563eb; outline: none; background: #eff6ff;">
                    <option>Zerodha</option>
                    <option>Groww</option>
                    <option>Upstox</option>
                    <option>ProStocks</option>
                </select>
            </div>
            <div style="flex: 1;">
                <label style="display: block; font-size: 12px; font-weight: 700; color: #64748b; margin-bottom: 8px; text-transform: uppercase;">Broker 2</label>
                <select style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 6px; font-size: 16px; font-weight: 600; color: #0f172a; outline: none;">
                    <option>Groww</option>
                    <option>Zerodha</option>
                    <option>Upstox</option>
                    <option>ProStocks</option>
                </select>
            </div>
            <div style="flex: 1;">
                <label style="display: block; font-size: 12px; font-weight: 700; color: #64748b; margin-bottom: 8px; text-transform: uppercase;">Broker 3</label>
                <select style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 6px; font-size: 16px; font-weight: 600; color: #0f172a; outline: none;">
                    <option>Upstox</option>
                    <option>Zerodha</option>
                    <option>Groww</option>
                    <option>ProStocks</option>
                </select>
            </div>
        </div>

        <!-- Comparison Matrix -->
        <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; overflow: hidden; margin-bottom: 40px; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
            <table style="width: 100%; border-collapse: collapse; text-align: left;">
                <thead style="background: #f8fafc;">
                    <tr>
                        <th style="padding: 24px 16px; font-size: 14px; font-weight: 700; color: #64748b; text-transform: uppercase; width: 25%; border-bottom: 2px solid var(--border-color);">Features</th>
                        <th style="padding: 24px 16px; font-size: 18px; font-weight: 800; color: #0f172a; width: 25%; border-bottom: 2px solid #2563eb; background: #eff6ff;">Zerodha</th>
                        <th style="padding: 24px 16px; font-size: 18px; font-weight: 800; color: #0f172a; width: 25%; border-bottom: 2px solid var(--border-color);">Groww</th>
                        <th style="padding: 24px 16px; font-size: 18px; font-weight: 800; color: #0f172a; width: 25%; border-bottom: 2px solid var(--border-color);">Upstox</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--border-color); background: #f8fafc;"><td colspan="4" style="padding: 12px 16px; font-size: 12px; font-weight: 800; color: #475569; text-transform: uppercase;">CHARGES</td></tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 16px; font-weight: 600; color: #475569;">Account Opening</td>
                        <td style="padding: 16px; font-weight: 700; color: #ef4444; background: #eff6ff;">₹200</td>
                        <td style="padding: 16px; font-weight: 700; color: #10b981; background: #f0fdf4;">Free (Best)</td>
                        <td style="padding: 16px; font-weight: 700; color: #10b981;">Free</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 16px; font-weight: 600; color: #475569;">AMC</td>
                        <td style="padding: 16px; font-weight: 700; color: #0f172a; background: #eff6ff;">₹300/yr</td>
                        <td style="padding: 16px; font-weight: 700; color: #10b981; background: #f0fdf4;">Free (Best)</td>
                        <td style="padding: 16px; font-weight: 700; color: #0f172a;">₹150/yr</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 16px; font-weight: 600; color: #475569;">Equity Delivery</td>
                        <td style="padding: 16px; font-weight: 700; color: #10b981; background: #eff6ff;">Free (Best)</td>
                        <td style="padding: 16px; font-weight: 700; color: #0f172a;">₹20/order</td>
                        <td style="padding: 16px; font-weight: 700; color: #0f172a;">₹20/order</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 16px; font-weight: 600; color: #475569;">Intraday & F&O</td>
                        <td style="padding: 16px; font-weight: 700; color: #0f172a; background: #eff6ff;">₹20/order</td>
                        <td style="padding: 16px; font-weight: 700; color: #0f172a;">₹20/order</td>
                        <td style="padding: 16px; font-weight: 700; color: #0f172a;">₹20/order</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color); background: #f8fafc;"><td colspan="4" style="padding: 12px 16px; font-size: 12px; font-weight: 800; color: #475569; text-transform: uppercase;">PLATFORM & RATINGS</td></tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 16px; font-weight: 600; color: #475569;">Platform Name</td>
                        <td style="padding: 16px; font-weight: 700; color: #0f172a; background: #eff6ff;">Kite</td>
                        <td style="padding: 16px; font-weight: 700; color: #0f172a;">Groww</td>
                        <td style="padding: 16px; font-weight: 700; color: #0f172a;">Upstox Pro</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 16px; font-weight: 600; color: #475569;">Overall Rating</td>
                        <td style="padding: 16px; font-weight: 800; color: #eab308; background: #eff6ff;">4.8 ?</td>
                        <td style="padding: 16px; font-weight: 800; color: #eab308;">4.7 ?</td>
                        <td style="padding: 16px; font-weight: 800; color: #eab308;">4.6 ?</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 16px; font-weight: 600; color: #475569;">Best For</td>
                        <td style="padding: 16px; font-weight: 700; color: #0369a1; background: #eff6ff;">Active Traders</td>
                        <td style="padding: 16px; font-weight: 700; color: #166534; background: #f0fdf4;">Beginners</td>
                        <td style="padding: 16px; font-weight: 700; color: #6b21a8;">F&O Traders</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="background: #f1f5f9; border-radius: 8px; padding: 24px; text-align: center; margin-bottom: 40px; border: 1px dashed #cbd5e1;">
            <div style="font-size: 14px; color: #64748b;">970 � 90 Advertisement</div>
        </div>

    </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
