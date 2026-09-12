<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Articles – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Articles on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
    <style>
        .art-feat { position: relative; border-radius: 16px; overflow: hidden; margin-bottom: 40px; height: 400px; background: #0f172a; display: flex; align-items: flex-end; }
        .art-feat-content { position: relative; z-index: 2; padding: 40px; color: white; width: 60%; }
        .art-list { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px; }
        .art-card { display: flex; flex-direction: column; }
        .art-img { height: 200px; background: #e2e8f0; border-radius: 12px; margin-bottom: 16px; display: flex; align-items: center; justify-content: center; color: #94a3b8; }
        .art-meta { font-size: 12px; color: #64748b; font-weight: 700; text-transform: uppercase; margin-bottom: 8px; }
    </style>
    <div class="container" style="padding-top: 40px; padding-bottom: 80px;">
        <h1 style="font-size: 32px; font-weight: 800; margin-bottom: 24px;">IPO MARKET ARTICLES</h1>
        
        <div class="art-feat">
            <!-- image background placeholder -->
            <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:linear-gradient(to right, #0f172a 40%, transparent); z-index:1;"></div>
            <div class="art-feat-content">
                <div class="art-meta" style="color:#60a5fa;">MARKET TRENDS</div>
                <h2 style="font-size: 36px; font-weight: 800; margin-bottom: 16px;">The Rise of SME IPOs in 2026: What Investors Need to Know</h2>
                <p style="color: #cbd5e1; font-size: 16px; margin-bottom: 24px;">SME platforms are seeing unprecedented listing gains, but are the valuations sustainable?</p>
                <button class="btn btn-primary" style="padding: 10px 24px; border-radius: 8px;">Read Article</button>
            </div>
        </div>
        
        <div style="display:grid; grid-template-columns: 3fr 1fr; gap: 40px;">
            <div>
                <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 24px;">LATEST ARTICLES</h3>
                <div class="art-list">
                    <div class="art-card">
                        <div class="art-img">[ IMAGE ]</div>
                        <div class="art-meta">IPO STRATEGY � 2 HOURS AGO</div>
                        <h4 style="font-size: 20px; font-weight: 800; margin-bottom: 12px;">How to interpret Grey Market Premiums effectively</h4>
                        <p style="color: #475569; font-size: 14px;">Understanding the correlation between GMP and final listing day performance.</p>
                    </div>
                    <div class="art-card">
                        <div class="art-img">[ IMAGE ]</div>
                        <div class="art-meta">COMPANY ANALYSIS � 5 HOURS AGO</div>
                        <h4 style="font-size: 20px; font-weight: 800; margin-bottom: 12px;">Nexus Tech vs Peers: A Valuation Comparison</h4>
                        <p style="color: #475569; font-size: 14px;">Why the IT services firm might be leaving money on the table.</p>
                    </div>
                </div>
                
                            </div>
            
            <aside>
                <div style="background:white; border:1px solid #e2e8f0; border-radius:12px; padding:20px; margin-bottom:40px;">
                    <h3 style="font-size: 16px; font-weight: 800; border-bottom: 2px solid #f1f5f9; padding-bottom: 12px; margin-bottom: 16px;">MOST READ</h3>
                    <div style="margin-bottom:16px;">
                        <div style="font-size:11px; font-weight:700; color:#3b82f6;">01</div>
                        <h4 style="font-weight:700; font-size:14px; margin-top:4px;">10 Things to Check Before Applying for an IPO</h4>
                    </div>
                    <div style="margin-bottom:16px;">
                        <div style="font-size:11px; font-weight:700; color:#3b82f6;">02</div>
                        <h4 style="font-weight:700; font-size:14px; margin-top:4px;">Understanding ASBA and UPI Mandates</h4>
                    </div>
                </div>
                
                <div style="background:#f1f5f9; height:250px; display:flex; align-items:center; justify-content:center; border:1px solid #e2e8f0; font-weight:700;">AD 300x250</div>
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
