<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analysis Share Price, Financials, Ratio &amp; Analysis | IPOSETU</title>
    <link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=7.1" rel="stylesheet"/>
    <link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
    
    <!-- TradingView Lightweight Charts -->
    <script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>
    
    <style>
        .analysis-wrapper {
            background-color: #f8fafc;
            padding: 40px 0 100px;
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
        }
        
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            background: #ffffff;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
            border: 1px solid #e2e8f0;
        }

        .stock-info h1 {
            font-size: 28px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 4px;
        }
        
        .stock-info .symbol-badge {
            display: inline-block;
            background: #e2e8f0;
            color: #475569;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .price-info {
            text-align: right;
        }

        .price-info .ltp {
            font-size: 32px;
            font-weight: 800;
            color: #0f172a;
        }

        .price-info .change {
            font-size: 16px;
            font-weight: 600;
        }
        
        .change.positive { color: #16a34a; }
        .change.negative { color: #dc2626; }

        .market-depth-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-top: 24px;
        }

        .depth-card {
            background: #f1f5f9;
            padding: 16px;
            border-radius: 8px;
            text-align: center;
        }

        .depth-card span {
            display: block;
            font-size: 12px;
            color: #64748b;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .depth-card strong {
            font-size: 16px;
            color: #0f172a;
        }

        .chart-container {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
            margin-top: 24px;
        }

        #tv-chart {
            width: 100%;
            height: 500px;
        }

        .selector-controls {
            margin-bottom: 16px;
            display: flex;
            gap: 12px;
        }

        .selector-controls select {
            padding: 8px 12px;
            border-radius: 6px;
            border: 1px solid #cbd5e1;
            font-size: 14px;
            font-weight: 600;
            outline: none;
            background: #f8fafc;
        }
    </style>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>

<!-- Header Placeholder (Would normally include global header via PHP/JS) -->
<header style="background: #ffffff; padding: 20px; border-bottom: 1px solid #e2e8f0; text-align: center;">
    <a href="../" style="font-size: 24px; font-weight: 900; color: #0f172a; text-decoration: none;">IPOSETU</a>
</header>

<div class="analysis-wrapper">
    <div class="container">
        
        <!-- Live Dashboard Header -->
        <div class="dashboard-header" id="quote-container">
            <div class="stock-info">
                <span class="symbol-badge" id="quote-symbol">LOADING...</span>
                <h1 id="quote-name">Loading Stock Data</h1>
            </div>
            <div class="price-info">
                <div class="ltp" id="quote-ltp">₹ 0.00</div>
                <div class="change" id="quote-change">0.00 (0.00%)</div>
            </div>
        </div>

        <div class="market-depth-grid" id="depth-container">
            <div class="depth-card"><span>Day High</span><strong id="quote-high">--</strong></div>
            <div class="depth-card"><span>Day Low</span><strong id="quote-low">--</strong></div>
            <div class="depth-card"><span>Total Buy Qty</span><strong id="quote-buy" style="color: #16a34a;">--</strong></div>
            <div class="depth-card"><span>Total Sell Qty</span><strong id="quote-sell" style="color: #dc2626;">--</strong></div>
        </div>

        <!-- Chart Container -->
        <div class="chart-container">
            <div class="selector-controls">
                <select id="stock-selector">
                    <option value="" disabled selected>Loading IPOs...</option>
                </select>
            </div>
            
            <div id="tv-chart"></div>
        </div>

    </div>
</div>

<script src="<?= BASE_URL ?>assets/js/stock-chart.js?v=13"></script>
</body>
</html>

