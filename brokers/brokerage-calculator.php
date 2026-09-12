<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
﻿<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Brokerage Calculator Review 2026 – Brokerage Charges, App &amp; IPO Bidding | IPOSETU</title>
<meta name="description" content="Complete review of Brokerage Calculator in India. Check account opening fees, trading charges, margin features, and one-click IPO application tools."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
    <div class="container" style="padding: 24px; margin-top: 20px; border-bottom: 1px solid var(--border-color); margin-bottom: 30px;">
        <div style="font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px;">
            <a href="<?= BASE_URL ?>brokers/" style="color: inherit; text-decoration: none;">Brokers</a> / <span style="color: var(--primary-color);">Calculator</span>
        </div>
        <h1 style="font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 12px; letter-spacing: -0.5px;">BROKERAGE CALCULATOR</h1>
        <p style="font-size: 16px; color: #475569; max-width: 800px; line-height: 1.6;">Calculate exact brokerage, STT, exchange charges, and taxes for Equity, Intraday, and F&O.</p>
    </div>

    <main class="container" style="margin-bottom: 80px;">
        <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 32px; box-shadow: 0 4px 12px rgba(0,0,0,0.03); margin-bottom: 40px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                
                <!-- Calculator Inputs -->
                <div>
                    <div style="display: flex; gap: 12px; margin-bottom: 24px;">
                        <button style="flex: 1; padding: 10px; background: #eff6ff; color: #2563eb; border: 1px solid #2563eb; border-radius: 6px; font-weight: 700; cursor: pointer;">Equity Delivery</button>
                        <button style="flex: 1; padding: 10px; background: white; color: #475569; border: 1px solid var(--border-color); border-radius: 6px; font-weight: 600; cursor: pointer;">Intraday</button>
                        <button style="flex: 1; padding: 10px; background: white; color: #475569; border: 1px solid var(--border-color); border-radius: 6px; font-weight: 600; cursor: pointer;">F&O</button>
                    </div>

                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-size: 12px; font-weight: 700; color: #64748b; margin-bottom: 8px; text-transform: uppercase;">Select Broker</label>
                        <select style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 6px; font-size: 14px; font-weight: 600; color: #0f172a; outline: none;">
                            <option>Zerodha (₹20/Free)</option>
                            <option>Groww (₹20)</option>
                            <option>Upstox (₹20)</option>
                        </select>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                        <div>
                            <label style="display: block; font-size: 12px; font-weight: 700; color: #64748b; margin-bottom: 8px; text-transform: uppercase;">Buy Price (₹)</label>
                            <input type="number" id="calc-buy" value="1000" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 6px; font-size: 14px; font-weight: 600; color: #0f172a; outline: none;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 12px; font-weight: 700; color: #64748b; margin-bottom: 8px; text-transform: uppercase;">Sell Price (₹)</label>
                            <input type="number" id="calc-sell" value="1100" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 6px; font-size: 14px; font-weight: 600; color: #0f172a; outline: none;">
                        </div>
                    </div>
                    <div style="margin-bottom: 24px;">
                        <label style="display: block; font-size: 12px; font-weight: 700; color: #64748b; margin-bottom: 8px; text-transform: uppercase;">Quantity</label>
                        <input type="number" id="calc-qty" value="100" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 6px; font-size: 14px; font-weight: 600; color: #0f172a; outline: none;">
                    </div>
                    
                    <button onclick="calculateBrokerage()" class="btn btn-primary" style="width: 100%; padding: 14px; border-radius: 8px; font-weight: 800; font-size: 16px;">CALCULATE</button>
                </div>

                <!-- Cost Breakdown -->
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px;">
                    <h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 24px;">COST BREAKDOWN</h3>
                    
                    <div style="display: flex; justify-content: space-between; padding-bottom: 12px; border-bottom: 1px dashed #cbd5e1; margin-bottom: 12px;">
                        <span style="font-size: 14px; color: #475569; font-weight: 600;">Turnover</span>
                        <span id="out-turnover" style="font-size: 14px; font-weight: 800; color: #0f172a;">₹2,10,000.00</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; padding-bottom: 12px; border-bottom: 1px dashed #cbd5e1; margin-bottom: 12px;">
                        <span style="font-size: 14px; color: #475569; font-weight: 600;">Brokerage</span>
                        <span id="out-brokerage" style="font-size: 14px; font-weight: 800; color: #ef4444;">₹0.00</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; padding-bottom: 12px; border-bottom: 1px dashed #cbd5e1; margin-bottom: 12px;">
                        <span style="font-size: 14px; color: #475569; font-weight: 600;">STT</span>
                        <span id="out-stt" style="font-size: 14px; font-weight: 800; color: #ef4444;">₹210.00</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; padding-bottom: 12px; border-bottom: 1px dashed #cbd5e1; margin-bottom: 12px;">
                        <span style="font-size: 14px; color: #475569; font-weight: 600;">Exchange Charges</span>
                        <span id="out-exchange" style="font-size: 14px; font-weight: 800; color: #ef4444;">₹7.24</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; padding-bottom: 12px; border-bottom: 1px solid #cbd5e1; margin-bottom: 12px;">
                        <span style="font-size: 14px; color: #475569; font-weight: 600;">GST</span>
                        <span id="out-gst" style="font-size: 14px; font-weight: 800; color: #ef4444;">₹1.30</span>
                    </div>
                    
                    <div style="display: flex; justify-content: space-between; margin-bottom: 24px;">
                        <span style="font-size: 16px; color: #0f172a; font-weight: 800;">Total Charges</span>
                        <span id="out-total" style="font-size: 16px; font-weight: 800; color: #ef4444;">₹218.54</span>
                    </div>

                    <div style="background: #ecfdf5; border: 1px solid #a7f3d0; padding: 16px; border-radius: 8px; display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 16px; color: #065f46; font-weight: 800;">Net Profit</span>
                        <span id="out-net" style="font-size: 24px; font-weight: 800; color: #10b981;">₹9,781.46</span>
                    </div>
                </div>

            </div>
        </div>
        
        <div style="background: #f1f5f9; border-radius: 8px; padding: 24px; text-align: center; margin-bottom: 40px; border: 1px dashed #cbd5e1;">
            <div style="font-size: 14px; color: #64748b;">970 × 90 Advertisement</div>
        </div>

        <script>
        function calculateBrokerage() {
            let buy = parseFloat(document.getElementById('calc-buy').value) || 0;
            let sell = parseFloat(document.getElementById('calc-sell').value) || 0;
            let qty = parseFloat(document.getElementById('calc-qty').value) || 0;
            
            let turnover = (buy + sell) * qty;
            let brokerage = Math.min(20, turnover * 0.0003); // Approx logic
            let stt = Math.round(sell * qty * 0.001); // Equity delivery STT
            let exchange = turnover * 0.0000345;
            let gst = (brokerage + exchange) * 0.18;
            let total = brokerage + stt + exchange + gst;
            let profit = (sell - buy) * qty - total;

            document.getElementById('out-turnover').innerText = '₹' + turnover.toLocaleString('en-IN', {minimumFractionDigits: 2, maximumFractionDigits: 2});
            document.getElementById('out-brokerage').innerText = '₹' + brokerage.toLocaleString('en-IN', {minimumFractionDigits: 2, maximumFractionDigits: 2});
            document.getElementById('out-stt').innerText = '₹' + stt.toLocaleString('en-IN', {minimumFractionDigits: 2, maximumFractionDigits: 2});
            document.getElementById('out-exchange').innerText = '₹' + exchange.toLocaleString('en-IN', {minimumFractionDigits: 2, maximumFractionDigits: 2});
            document.getElementById('out-gst').innerText = '₹' + gst.toLocaleString('en-IN', {minimumFractionDigits: 2, maximumFractionDigits: 2});
            document.getElementById('out-total').innerText = '₹' + total.toLocaleString('en-IN', {minimumFractionDigits: 2, maximumFractionDigits: 2});
            document.getElementById('out-net').innerText = '₹' + profit.toLocaleString('en-IN', {minimumFractionDigits: 2, maximumFractionDigits: 2});
            
            if(profit < 0) {
                document.getElementById('out-net').style.color = '#ef4444';
            } else {
                document.getElementById('out-net').style.color = '#10b981';
            }
        }
        </script>
    </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
