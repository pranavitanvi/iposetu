<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Disclaimer – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Disclaimer on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
<main class="premium-page-body">
    <!-- Hero Section -->
    <section class="premium-hero" style="padding-bottom: 40px; border-bottom:1px solid var(--glass-border);">
        <div class="premium-grid-bg"></div>
        <div class="premium-hero-content animate-on-scroll">
            <span class="premium-eyebrow">LEGAL INFORMATION</span>
            <h1 class="premium-heading">Disclaimer</h1>
            <p class="premium-subtext">Please read this disclaimer carefully before using the IPOSETU platform or relying on any information provided here.</p>
        </div>
    </section>

    <!-- Content Area -->
    <section class="container" style="padding: 60px 20px 100px;">
        <div style="display:grid; grid-template-columns: 1fr; gap: 40px; max-width: 900px; margin: 0 auto;">
            
            <!-- Important Notice (Alert Box) -->
            <div class="glass-card animate-on-scroll" style="padding:32px; border-left: 4px solid #f59e0b; background:rgba(245,158,11,0.05);">
                <div style="display:flex; gap:16px; align-items:flex-start;">
                    <div style="color:#f59e0b; margin-top:4px;">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    </div>
                    <div>
                        <h2 style="font-size:18px; font-weight:700; margin-bottom:8px; color:#b45309;">Important Notice</h2>
                        <p style="font-size:15px; color:var(--page-text); line-height:1.6; margin:0;">IPOSETU is purely an educational and informational platform. We are <strong>not SEBI registered financial advisors</strong>. The information provided on this website, including but not limited to IPO details, Grey Market Premium (GMP), and market news, is for general information purposes only and should not be construed as investment advice.</p>
                    </div>
                </div>
            </div>

            <!-- Disclaimer Sections -->
            <div class="animate-on-scroll" style="display:flex; flex-direction:column; gap:32px;">
                <div class="glass-card" style="padding:40px;">
                    <h3 style="font-size:20px; font-weight:700; margin-bottom:16px; display:flex; align-items:center; gap:12px;">
                        <span style="display:flex; align-items:center; justify-content:center; width:32px; height:32px; background:rgba(59,130,246,0.1); color:#3b82f6; border-radius:8px;">1</span>
                        No Investment Advice
                    </h3>
                    <p style="font-size:15px; color:var(--page-text-muted); line-height:1.7; margin-bottom:16px;">The content on IPOSETU is designed to help users understand the IPO market and financial concepts. None of the materials published on the platform should be understood as a recommendation to buy, sell, or hold any security, or as an endorsement of any particular investment strategy.</p>
                    <p style="font-size:15px; color:var(--page-text-muted); line-height:1.7;">Users must conduct their own research or consult with a qualified, SEBI-registered financial advisor before making any investment decisions. Any actions taken based on the information provided on this platform are at your own risk.</p>
                </div>

                <div class="glass-card" style="padding:40px;">
                    <h3 style="font-size:20px; font-weight:700; margin-bottom:16px; display:flex; align-items:center; gap:12px;">
                        <span style="display:flex; align-items:center; justify-content:center; width:32px; height:32px; background:rgba(16,185,129,0.1); color:#10b981; border-radius:8px;">2</span>
                        Accuracy of Information
                    </h3>
                    <p style="font-size:15px; color:var(--page-text-muted); line-height:1.7; margin-bottom:16px;">While we strive to keep the information up-to-date and accurate, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability with respect to the website or the information, products, services, or related graphics.</p>
                    <p style="font-size:15px; color:var(--page-text-muted); line-height:1.7;">Data such as GMP is gathered from market sources and is highly volatile. It should not be treated as a definitive indicator of listing price or future performance.</p>
                </div>
            </div>

            <!-- Do / Don't Comparison -->
            <div class="animate-on-scroll">
                <h3 style="font-size:24px; font-weight:800; margin-bottom:24px; text-align:center;">How to Use IPOSETU</h3>
                <div style="display:grid; grid-template-columns: 1fr 1fr; gap:24px;">
                    <div class="glass-card" style="padding:32px; border-top: 4px solid #10b981;">
                        <div style="display:flex; align-items:center; gap:12px; margin-bottom:20px; color:#10b981;">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <h4 style="font-size:18px; font-weight:700; color:var(--page-text);">What You Should Do</h4>
                        </div>
                        <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:16px;">
                            <li style="display:flex; gap:12px; font-size:15px; color:var(--page-text-muted);">
                                <span style="color:#10b981;">•</span> Use the platform to track IPO timelines and details.
                            </li>
                            <li style="display:flex; gap:12px; font-size:15px; color:var(--page-text-muted);">
                                <span style="color:#10b981;">•</span> Read educational articles to improve your financial literacy.
                            </li>
                            <li style="display:flex; gap:12px; font-size:15px; color:var(--page-text-muted);">
                                <span style="color:#10b981;">•</span> Use our calculators to plan your investments.
                            </li>
                            <li style="display:flex; gap:12px; font-size:15px; color:var(--page-text-muted);">
                                <span style="color:#10b981;">•</span> Verify all information with official RHP/DRHP documents.
                            </li>
                        </ul>
                    </div>

                    <div class="glass-card" style="padding:32px; border-top: 4px solid #ef4444;">
                        <div style="display:flex; align-items:center; gap:12px; margin-bottom:20px; color:#ef4444;">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
                            <h4 style="font-size:18px; font-weight:700; color:var(--page-text);">What You Shouldn't Do</h4>
                        </div>
                        <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:16px;">
                            <li style="display:flex; gap:12px; font-size:15px; color:var(--page-text-muted);">
                                <span style="color:#ef4444;">•</span> Do not treat GMP as a guaranteed listing premium.
                            </li>
                            <li style="display:flex; gap:12px; font-size:15px; color:var(--page-text-muted);">
                                <span style="color:#ef4444;">•</span> Do not invest based solely on ratings or reviews on this site.
                            </li>
                            <li style="display:flex; gap:12px; font-size:15px; color:var(--page-text-muted);">
                                <span style="color:#ef4444;">•</span> Do not assume that past performance guarantees future returns.
                            </li>
                            <li style="display:flex; gap:12px; font-size:15px; color:var(--page-text-muted);">
                                <span style="color:#ef4444;">•</span> Do not make large financial decisions without consulting a professional.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div style="text-align:center; padding-top:40px; margin-top:20px; border-top:1px solid var(--glass-border);">
                <p style="font-size:14px; color:var(--page-text-muted);">Last Updated: August 2026</p>
                <p style="font-size:14px; color:var(--page-text-muted);">If you have any questions regarding this disclaimer, please <a href="<?= BASE_URL ?>contact" style="color:#3b82f6; text-decoration:none;">contact us</a>.</p>
            </div>
        </div>
    </section>
</main>

    <!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>
<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
