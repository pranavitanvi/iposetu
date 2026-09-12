<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Performance Tracker – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Performance Tracker on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
<style>
    .anim-fade-up { opacity: 0; transform: translateY(20px); transition: opacity 0.5s ease-out, transform 0.5s ease-out; }
    .anim-fade-up.anim-active { opacity: 1; transform: translateY(0); }
    .anim-scale-in { opacity: 0; transform: scale(0.95); transition: opacity 0.4s ease-out, transform 0.4s ease-out; }
    .anim-scale-in.anim-active { opacity: 1; transform: scale(1); }
    .anim-slide-left { opacity: 0; transform: translateX(-30px); transition: all 0.5s ease-out; }
    .anim-slide-left.anim-active { opacity: 1; transform: translateX(0); }
    .anim-slide-right { opacity: 0; transform: translateX(30px); transition: all 0.5s ease-out; }
    .anim-slide-right.anim-active { opacity: 1; transform: translateX(0); }
    .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .card-hover:hover { transform: translateY(-4px); box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
    @media (prefers-reduced-motion: reduce) {
        .anim-fade-up, .anim-scale-in, .anim-slide-left, .anim-slide-right, .card-hover {
            transition: none !important; opacity: 1 !important; transform: none !important;
        }
    }
</style>

    <div class="container" style="padding-top: 40px; padding-bottom: 80px;">
        <h1 style="font-size: 32px; font-weight: 800; text-align:center; margin-bottom: 24px;" class="anim-slide-left">INTERACTIVE SME PERFORMANCE TRACKER</h1>
        
        <div style="max-width:600px; margin: 0 auto 60px auto; position:relative;" class="anim-scale-in">
            <input type="text" style="width:100%; padding: 20px 24px; font-size: 18px; border-radius: 30px; border: 2px solid #3b82f6; box-shadow: 0 10px 25px rgba(59,130,246,0.1);" placeholder="Search SME Company (e.g., EcoBuilders)">
        </div>
        
        <div style="display:grid; grid-template-columns: 1fr 3fr; gap:40px;" class="anim-fade-up">
            <div>
                <h2 style="font-size: 24px; font-weight: 800; margin-bottom: 8px;">Vidyut Tech SME</h2>
                <div style="font-size:14px; color:#64748b; margin-bottom: 24px;">Listed on BSE SME � Aug 10, 2026</div>
                
                <div style="background:white; border:1px solid #e2e8f0; border-radius:12px; padding:24px; margin-bottom:24px;">
                    <div style="font-size:12px; font-weight:700; color:#64748b;">CURRENT PRICE</div>
                    <div style="font-size:36px; font-weight:800; margin-top:8px;">₹320</div>
                    <div style="color:#10b981; font-weight:700; font-size:14px; margin-top:4px;">+166% from Issue</div>
                </div>
                
                <div style="background:white; border:1px solid #e2e8f0; border-radius:12px; padding:24px;">
                    <div style="display:flex; justify-content:space-between; margin-bottom:12px; border-bottom:1px solid #e2e8f0; padding-bottom:8px;"><span style="font-size:12px; font-weight:700; color:#64748b;">ISSUE PRICE</span><span style="font-weight:800;">₹120</span></div>
                    <div style="display:flex; justify-content:space-between; margin-bottom:12px; border-bottom:1px solid #e2e8f0; padding-bottom:8px;"><span style="font-size:12px; font-weight:700; color:#64748b;">LISTING PRICE</span><span style="font-weight:800;">₹294</span></div>
                    <div style="display:flex; justify-content:space-between;"><span style="font-size:12px; font-weight:700; color:#64748b;">LISTING GAIN</span><span style="color:#10b981; font-weight:800;">+145%</span></div>
                </div>
            </div>
            
            <div>
                <div style="background:white; border:1px solid #e2e8f0; border-radius:12px; padding:24px; margin-bottom:40px;">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:24px;">
                        <h3 style="font-size: 16px; font-weight: 800;">PERFORMANCE GRAPH</h3>
                        <div style="display:flex; gap:8px;">
                            <span style="padding:4px 8px; background:#f1f5f9; border-radius:4px; font-size:12px; font-weight:700; cursor:pointer;">1D</span>
                            <span style="padding:4px 8px; background:#0f172a; color:white; border-radius:4px; font-size:12px; font-weight:700; cursor:pointer;">1M</span>
                            <span style="padding:4px 8px; background:#f1f5f9; border-radius:4px; font-size:12px; font-weight:700; cursor:pointer;">3M</span>
                        </div>
                    </div>
                    <div style="height:300px; background:#f8fafc; border:1px dashed #cbd5e1; display:flex; align-items:center; justify-content:center; color:#94a3b8;">
                        [ Interactive Stock Chart ]
                    </div>
                </div>
                
                <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 24px;">IPO JOURNEY</h3>
                <div style="display:flex; justify-content:space-between; background:white; border:1px solid #e2e8f0; border-radius:12px; padding:24px;">
                    <div style="text-align:center;"><div style="font-size:12px; font-weight:700; color:#64748b;">ISSUE</div><div style="font-weight:800; font-size:18px; margin-top:4px;">₹120</div></div>
                    <div style="color:#cbd5e1; font-weight:800; font-size:20px;">→</div>
                    <div style="text-align:center;"><div style="font-size:12px; font-weight:700; color:#64748b;">LISTING</div><div style="font-weight:800; font-size:18px; margin-top:4px;">₹294</div></div>
                    <div style="color:#cbd5e1; font-weight:800; font-size:20px;">→</div>
                    <div style="text-align:center;"><div style="font-size:12px; font-weight:700; color:#64748b;">CURRENT</div><div style="font-weight:800; font-size:18px; margin-top:4px; color:#10b981;">₹320</div></div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) { entry.target.classList.add('anim-active'); }
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.anim-fade-up, .anim-scale-in, .anim-slide-left, .anim-slide-right').forEach(el => observer.observe(el));
    });
    </script>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
