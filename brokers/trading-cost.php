<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
﻿<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Trading Cost Review 2026 – Brokerage Charges, App &amp; IPO Bidding | IPOSETU</title>
<meta name="description" content="Complete review of Trading Cost in India. Check account opening fees, trading charges, margin features, and one-click IPO application tools."/>
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
        <h1 style="font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 12px; letter-spacing: -0.5px;">YEARLY TRADING COST ANALYZER</h1>
        <p style="font-size: 16px; color: #475569; max-width: 800px; line-height: 1.6;">Find out how much you are losing to brokerage and taxes every year.</p>
    </div>

    <main class="container" style="margin-bottom: 80px;">
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            <div style="background: white; border: 1px solid var(--border-color); border-radius: 12px; padding: 32px; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
                <div style="margin-bottom: 24px;">
                    <label style="display: block; font-size: 12px; font-weight: 700; color: #64748b; margin-bottom: 8px; text-transform: uppercase;">Average Number of Trades per Day</label>
                    <input type="number" id="trades-per-day" value="10" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 6px; font-size: 16px; font-weight: 600; color: #0f172a; outline: none;">
                </div>
                <div style="margin-bottom: 24px;">
                    <label style="display: block; font-size: 12px; font-weight: 700; color: #64748b; margin-bottom: 8px; text-transform: uppercase;">Average Brokerage per Trade (₹)</label>
                    <input type="number" id="brokerage-per-trade" value="20" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 6px; font-size: 16px; font-weight: 600; color: #0f172a; outline: none;">
                </div>
                <div style="margin-bottom: 24px;">
                    <label style="display: block; font-size: 12px; font-weight: 700; color: #64748b; margin-bottom: 8px; text-transform: uppercase;">Estimated Taxes & STT per Day (₹)</label>
                    <input type="number" id="taxes-per-day" value="300" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 6px; font-size: 16px; font-weight: 600; color: #0f172a; outline: none;">
                </div>
                <button onclick="calculateCost()" class="btn btn-primary" style="width: 100%; padding: 14px; border-radius: 8px; font-weight: 800; font-size: 16px;">ANALYZE COST</button>
            </div>

            <div style="background: #1e293b; color: white; border-radius: 12px; padding: 32px; display: flex; flex-direction: column; justify-content: center;">
                <div style="margin-bottom: 32px;">
                    <div style="font-size: 14px; font-weight: 700; color: #94a3b8; text-transform: uppercase; margin-bottom: 8px;">Estimated Yearly Brokerage (250 Trading Days)</div>
                    <div id="yearly-brokerage" style="font-size: 48px; font-weight: 800; color: #f8fafc;">₹50,000</div>
                </div>
                <div style="margin-bottom: 32px;">
                    <div style="font-size: 14px; font-weight: 700; color: #94a3b8; text-transform: uppercase; margin-bottom: 8px;">Estimated Yearly Taxes & STT</div>
                    <div id="yearly-taxes" style="font-size: 36px; font-weight: 800; color: #f8fafc;">₹75,000</div>
                </div>
                <div style="border-top: 1px solid #334155; padding-top: 24px;">
                    <div style="font-size: 14px; font-weight: 700; color: #fecdd3; text-transform: uppercase; margin-bottom: 8px;">TOTAL YEARLY COST</div>
                    <div id="total-yearly-cost" style="font-size: 48px; font-weight: 800; color: #f43f5e;">₹1,25,000</div>
                </div>
            </div>
        </div>

        <script>
        function calculateCost() {
            let trades = parseFloat(document.getElementById('trades-per-day').value) || 0;
            let brokerage = parseFloat(document.getElementById('brokerage-per-trade').value) || 0;
            let taxes = parseFloat(document.getElementById('taxes-per-day').value) || 0;

            let yearlyBrokerage = trades * brokerage * 250;
            let yearlyTaxes = taxes * 250;
            let total = yearlyBrokerage + yearlyTaxes;

            document.getElementById('yearly-brokerage').innerText = '₹' + yearlyBrokerage.toLocaleString('en-IN');
            document.getElementById('yearly-taxes').innerText = '₹' + yearlyTaxes.toLocaleString('en-IN');
            document.getElementById('total-yearly-cost').innerText = '₹' + total.toLocaleString('en-IN');
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
