<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Most Active Share Price, Financials, Ratio &amp; Analysis | IPOSETU</title>
<meta name="description" content="Track live Most Active stock analysis, 52-week range, valuation multiples, corporate actions, and financial reports on IPOSETU."/>
<link class="style-link" href="/iposetu/assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="/iposetu/assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</meta><?php require_once $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/header.php'; ?>
<style>
        @keyframes fadeUp { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
        
        .market-hero { background: #0f172a; color: white; padding: 60px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; }
        .market-hero::after { content: ''; position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(59,130,246,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none; }
        
        .market-bento { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 40px; }
        .market-card { background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 4px 6px rgba(0,0,0,0.02); transition: 0.3s; animation: fadeUp 0.6s both; }
        .market-card:hover { transform: translateY(-5px); box-shadow: 0 12px 24px rgba(0,0,0,0.06); border-color: #cbd5e1; }
        .market-card.delay-1 { animation-delay: 0.1s; }
        .market-card.delay-2 { animation-delay: 0.2s; }
        .market-card.delay-3 { animation-delay: 0.3s; }
        .market-card.delay-4 { animation-delay: 0.4s; }
        .market-card.delay-5 { animation-delay: 0.5s; }
        .market-card.delay-6 { animation-delay: 0.6s; }
        
        .index-name { font-size: 14px; font-weight: 800; color: #475569; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px; }
        .index-value { font-size: 28px; font-weight: 900; color: #0f172a; letter-spacing: -0.5px; }
        
        .val-green { color: #10b981; font-weight: 700; display: flex; align-items: center; gap: 4px; margin-top: 8px; }
        .val-red { color: #ef4444; font-weight: 700; display: flex; align-items: center; gap: 4px; margin-top: 8px; }
        
        .breadth-bar { height: 12px; border-radius: 6px; display: flex; overflow: hidden; background: #f1f5f9; margin-top: 12px; }
        .breadth-adv { width: 59%; background: #10b981; transition: width 1s ease-in-out; }
        .breadth-unc { width: 5%; background: #94a3b8; transition: width 1s ease-in-out; }
        .breadth-dec { width: 36%; background: #ef4444; transition: width 1s ease-in-out; }
    </style>
<div class="container" style="padding-top: 40px; padding-bottom: 80px;">
<div class="market-hero">
<div style="font-size: 12px; font-weight: 700; color: #3b82f6; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Stocks → Market Overview</div>
<div style="display: flex; justify-content: space-between; align-items: flex-end;">
<div>
<h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px;">Market Overview</h1>
<p style="font-size: 16px; color: #94a3b8; max-width: 600px; line-height: 1.6;">Track Indian market indices, sector performance, and market breadth in real-time.</p>
</div>
<div style="text-align: right;">
<span style="font-size: 12px; font-weight: 600; color: #10b981; display: inline-flex; align-items: center; gap: 6px; background: rgba(16,185,129,0.1); padding: 8px 16px; border-radius: 20px; border: 1px solid rgba(16,185,129,0.2);">
<span style="display: inline-block; width: 8px; height: 8px; background: #10b981; border-radius: 50%; box-shadow: 0 0 8px #10b981; animation: pulse 2s infinite;"></span> LIVE MARKET
                    </span>
</div>
</div>
</div>
</div>
<main class="container" style="padding-top: 40px; padding-bottom: 80px; min-height: 50vh;">
<style>
        .terminal-header { background: #020617; border-radius: 24px; padding: 48px; position: relative; overflow: hidden; margin-bottom: 40px; border: 1px solid #1e293b; box-shadow: 0 20px 40px -10px rgba(0,0,0,0.5); }
        .terminal-header::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at 80% 20%, rgba(139,92,246,0.15) 0%, transparent 50%); pointer-events: none; }
        .terminal-header::after { content: ''; position: absolute; inset: 0; background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(255,255,255,0.01) 2px, rgba(255,255,255,0.01) 4px); pointer-events: none; }
        
        .pulse-dot { width: 10px; height: 10px; background: #8b5cf6; border-radius: 50%; box-shadow: 0 0 10px #8b5cf6; animation: pulse-glow 2s infinite; }
        @keyframes pulse-glow { 0%, 100% { opacity: 1; transform: scale(1); } 50% { opacity: 0.5; transform: scale(1.2); } }
        
        .heat-card { background: white; border-radius: 16px; border: 1px solid #e2e8f0; padding: 24px; position: relative; overflow: hidden; transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
        .heat-card:hover { transform: translateY(-8px) scale(1.02); box-shadow: 0 20px 30px rgba(0,0,0,0.05); border-color: #8b5cf6; }
        .heat-card::before { content: ''; position: absolute; left: 0; top: 0; bottom: 0; width: 4px; background: #8b5cf6; transition: 0.3s; }
        .heat-card:hover::before { width: 8px; }
        
        .vol-bar-bg { height: 6px; background: #f1f5f9; border-radius: 4px; overflow: hidden; margin-top: 12px; }
        .vol-bar-fg { height: 100%; background: linear-gradient(90deg, #8b5cf6, #3b82f6); border-radius: 4px; position: relative; }
        .vol-bar-fg::after { content: ''; position: absolute; top: 0; right: 0; bottom: 0; width: 20px; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.5)); animation: shimmer 2s infinite; }
        @keyframes shimmer { 0% { transform: translateX(-100%); } 100% { transform: translateX(500%); } }

        .data-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin-bottom: 40px; }
        
        .terminal-table { width: 100%; border-collapse: separate; border-spacing: 0 8px; }
        .terminal-table th { padding: 0 16px 8px; font-size: 11px; font-weight: 800; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px; border: none; }
        .terminal-table td { padding: 20px 16px; background: white; font-size: 14px; font-weight: 600; color: #0f172a; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; }
        .terminal-table td:first-child { border-left: 1px solid #e2e8f0; border-radius: 12px 0 0 12px; }
        .terminal-table td:last-child { border-right: 1px solid #e2e8f0; border-radius: 0 12px 12px 0; }
        .terminal-table tr { transition: 0.3s; box-shadow: 0 4px 6px rgba(0,0,0,0); }
        .terminal-table tbody tr:hover { transform: scale(1.01); box-shadow: 0 10px 20px rgba(0,0,0,0.05); }
        .terminal-table tbody tr:hover td { background: #fafaf9; border-color: #cbd5e1; }
    </style>
<div class="terminal-header">
<div style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px;">
<div class="pulse-dot"></div>
<span style="color: #a78bfa; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-family: monospace;">Live Terminal / Volume</span>
</div>
<h1 style="font-size: 48px; font-weight: 900; color: white; margin-bottom: 16px; line-height: 1.1; letter-spacing: -2px;">Most Active Equities</h1>
<p style="font-size: 18px; color: #94a3b8; max-width: 600px; line-height: 1.6; font-weight: 500;">Real-time tracking of the highest volume and turnover stocks dictating market momentum.</p>
</div>
<div class="data-grid">
<div class="heat-card anim-card delay-1">
<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 20px;">
<div>
<div style="font-size: 12px; font-weight: 800; color: #64748b; text-transform: uppercase; margin-bottom: 4px;">Top Volume</div>
<div style="font-size: 24px; font-weight: 900; color: #0f172a; letter-spacing: -1px;">SUZLON</div>
</div>
<div style="text-align: right;">
<div style="font-size: 28px; font-weight: 900; color: #8b5cf6;">82.1M</div>
<div style="font-size: 13px; font-weight: 700; color: #10b981;">+4.9%</div>
</div>
</div>
<div class="vol-bar-bg"><div class="vol-bar-fg" style="width: 100%;"></div></div>
<div style="display: flex; justify-content: space-between; margin-top: 8px; font-size: 11px; font-weight: 700; color: #94a3b8;">
<span>Value: ₹611.5 Cr</span>
<span>100%</span>
</div>
</div>
<div class="heat-card anim-card delay-3">
<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 20px;">
<div>
<div style="font-size: 12px; font-weight: 800; color: #64748b; text-transform: uppercase; margin-bottom: 4px;">High Momentum</div>
<div style="font-size: 24px; font-weight: 900; color: #0f172a; letter-spacing: -1px;">YESBANK</div>
</div>
<div style="text-align: right;">
<div style="font-size: 28px; font-weight: 900; color: #8b5cf6;">45.8M</div>
<div style="font-size: 13px; font-weight: 700; color: #10b981;">+2.1%</div>
</div>
</div>
<div class="vol-bar-bg"><div class="vol-bar-fg" style="width: 65%;"></div></div>
<div style="display: flex; justify-content: space-between; margin-top: 8px; font-size: 11px; font-weight: 700; color: #94a3b8;">
<span>Value: ₹110.6 Cr</span>
<span>65%</span>
</div>
</div>
<div class="heat-card anim-card delay-2">
<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 20px;">
<div>
<div style="font-size: 12px; font-weight: 800; color: #64748b; text-transform: uppercase; margin-bottom: 4px;">Institutional</div>
<div style="font-size: 24px; font-weight: 900; color: #0f172a; letter-spacing: -1px;">ZOMATO</div>
</div>
<div style="text-align: right;">
<div style="font-size: 28px; font-weight: 900; color: #8b5cf6;">35.2M</div>
<div style="font-size: 13px; font-weight: 700; color: #10b981;">+3.2%</div>
</div>
</div>
<div class="vol-bar-bg"><div class="vol-bar-fg" style="width: 45%;"></div></div>
<div style="display: flex; justify-content: space-between; margin-top: 8px; font-size: 11px; font-weight: 700; color: #94a3b8;">
<span>Value: ₹740.7 Cr</span>
<span>45%</span>
</div>
</div>
</div>
<div style="margin-bottom: 40px; display: flex; justify-content: space-between; align-items: center;">
<h2 style="font-size: 24px; font-weight: 900; color: #0f172a; letter-spacing: -0.5px;">Market Activity Log</h2>
<div style="display: flex; gap: 8px;">
<button style="padding: 8px 16px; background: #0f172a; color: white; border: none; border-radius: 8px; font-size: 13px; font-weight: 700; cursor: pointer;">By Volume</button>
<button style="padding: 8px 16px; background: white; color: #64748b; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 13px; font-weight: 700; cursor: pointer;">By Value</button>
</div>
</div>
<div style="overflow-x: auto; padding-bottom: 20px;">
<table class="terminal-table">
<thead>
<tr>
<th style="text-align: left;">Symbol / Name</th>
<th style="text-align: right;">LTP</th>
<th style="text-align: right;">Chg %</th>
<th style="text-align: right;">Volume</th>
<th style="text-align: right;">Value (Cr)</th>
<th style="text-align: right;">Activity Heat</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div style="font-size: 16px; font-weight: 900; color: #0f172a; margin-bottom: 4px;">SUZLON</div>
<div style="font-size: 12px; font-weight: 600; color: #94a3b8;">Suzlon Energy</div>
</td>
<td style="text-align: right; font-size: 16px;">₹74.50</td>
<td style="text-align: right; color: #10b981; font-weight: 800;">+4.9%</td>
<td style="text-align: right; font-size: 18px; font-weight: 900; color: #0f172a;">82.1M</td>
<td style="text-align: right; font-weight: 700; color: #475569;">₹611.50</td>
<td style="width: 150px; padding-right: 20px;">
<div class="vol-bar-bg" style="margin-top: 0;"><div class="vol-bar-fg" style="width: 100%;"></div></div>
</td>
</tr>
<tr>
<td>
<div style="font-size: 16px; font-weight: 900; color: #0f172a; margin-bottom: 4px;">YESBANK</div>
<div style="font-size: 12px; font-weight: 600; color: #94a3b8;">Yes Bank</div>
</td>
<td style="text-align: right; font-size: 16px;">₹24.15</td>
<td style="text-align: right; color: #10b981; font-weight: 800;">+2.1%</td>
<td style="text-align: right; font-size: 18px; font-weight: 900; color: #0f172a;">45.8M</td>
<td style="text-align: right; font-weight: 700; color: #475569;">₹110.60</td>
<td style="width: 150px; padding-right: 20px;">
<div class="vol-bar-bg" style="margin-top: 0;"><div class="vol-bar-fg" style="width: 65%;"></div></div>
</td>
</tr>
<tr>
<td>
<div style="font-size: 16px; font-weight: 900; color: #0f172a; margin-bottom: 4px;">ZOMATO</div>
<div style="font-size: 12px; font-weight: 600; color: #94a3b8;">Zomato Ltd</div>
</td>
<td style="text-align: right; font-size: 16px;">₹210.45</td>
<td style="text-align: right; color: #10b981; font-weight: 800;">+3.2%</td>
<td style="text-align: right; font-size: 18px; font-weight: 900; color: #0f172a;">35.2M</td>
<td style="text-align: right; font-weight: 700; color: #475569;">₹740.78</td>
<td style="width: 150px; padding-right: 20px;">
<div class="vol-bar-bg" style="margin-top: 0;"><div class="vol-bar-fg" style="width: 45%;"></div></div>
</td>
</tr>
<tr>
<td>
<div style="font-size: 16px; font-weight: 900; color: #0f172a; margin-bottom: 4px;">IRFC</div>
<div style="font-size: 12px; font-weight: 600; color: #94a3b8;">Indian Rly Finance</div>
</td>
<td style="text-align: right; font-size: 16px;">₹180.20</td>
<td style="text-align: right; color: #ef4444; font-weight: 800;">-1.5%</td>
<td style="text-align: right; font-size: 18px; font-weight: 900; color: #0f172a;">22.5M</td>
<td style="text-align: right; font-weight: 700; color: #475569;">₹405.45</td>
<td style="width: 150px; padding-right: 20px;">
<div class="vol-bar-bg" style="margin-top: 0;"><div class="vol-bar-fg" style="width: 30%;"></div></div>
</td>
</tr>
<tr>
<td>
<div style="font-size: 16px; font-weight: 900; color: #0f172a; margin-bottom: 4px;">NHPC</div>
<div style="font-size: 12px; font-weight: 600; color: #94a3b8;">NHPC Ltd</div>
</td>
<td style="text-align: right; font-size: 16px;">₹102.75</td>
<td style="text-align: right; color: #10b981; font-weight: 800;">+0.8%</td>
<td style="text-align: right; font-size: 18px; font-weight: 900; color: #0f172a;">18.4M</td>
<td style="text-align: right; font-weight: 700; color: #475569;">₹189.06</td>
<td style="width: 150px; padding-right: 20px;">
<div class="vol-bar-bg" style="margin-top: 0;"><div class="vol-bar-fg" style="width: 25%;"></div></div>
</td>
</tr>
</tbody>
</table>
</div>
</main>
<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/footer.php'; ?>
<div id="sticky-bottom-ad-container"></div>
<script src="/iposetu/assets/js/components.js?v=6.1"></script>
<script src="/iposetu/assets/js/ad-manager.js?v=1.2"></script>
<script src="/iposetu/assets/js/main.js"></script>
</body>
</html>
