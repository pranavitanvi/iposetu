<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Advertise With Us – Reach Active Stock &amp; IPO Investors | IPOSETU</title>
<meta name="description" content="Promote your financial brand, brokerage, or fintech service to high-intent primary market investors and active traders on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=7.4" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>
    
    <!-- Custom CSS for Advertise Page -->
    <style>
        .adv-hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: white;
            padding: 100px 0 160px;
            position: relative;
            overflow: hidden;
            text-align: center;
        }
        .adv-hero::before {
            content: '';
            position: absolute;
            top: -50%; left: -50%; width: 200%; height: 200%;
            background: radial-gradient(circle at center, rgba(59, 130, 246, 0.15) 0%, transparent 50%);
            animation: pulse-slow 8s ease-in-out infinite alternate;
        }
        @keyframes pulse-slow {
            0% { transform: scale(1); opacity: 0.5; }
            100% { transform: scale(1.2); opacity: 1; }
        }
        .adv-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 24px;
            backdrop-filter: blur(4px);
        }
        .adv-hero h1 {
            font-size: 52px;
            font-weight: 800;
            line-height: 1.15;
            margin-bottom: 24px;
            letter-spacing: -1.5px;
            color: #ffffff;
            position: relative;
            z-index: 2;
        }
        .adv-hero p {
            font-size: 20px;
            color: #cbd5e1;
            max-width: 700px;
            margin: 0 auto 40px;
            line-height: 1.6;
            position: relative;
            z-index: 2;
        }
        .adv-stats-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            margin-top: -100px;
            position: relative;
            z-index: 10;
        }
        @media (max-width: 991px) {
            .adv-stats-container { grid-template-columns: repeat(2, 1fr); margin-top: -50px; }
            .adv-hero h1 { font-size: 38px; }
        }
        @media (max-width: 576px) {
            .adv-stats-container { grid-template-columns: 1fr; margin-top: 20px; }
        }
        .adv-stat-card {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 32px 24px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .adv-stat-card:hover {
            transform: translateY(-8px);
        }
        .adv-stat-icon {
            font-size: 32px;
            margin-bottom: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 56px;
            height: 56px;
            background: #eff6ff;
            border-radius: 14px;
            color: #2563eb;
        }
        .adv-stat-value {
            font-size: 36px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 6px;
            line-height: 1;
        }
        .adv-stat-label {
            font-size: 13px;
            color: #64748b;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .adv-section {
            padding: 90px 0;
            background: #f8fafc;
        }
        .adv-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        @media (max-width: 991px) {
            .adv-grid { grid-template-columns: 1fr; gap: 40px; }
        }
        .adv-box {
            background: white;
            padding: 36px;
            border-radius: 20px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            transition: all 0.3s ease;
        }
        .adv-box:hover {
            border-color: #3b82f6;
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(59, 130, 246, 0.1);
        }
        .adv-box-icon {
            width: 54px;
            height: 54px;
            background: #eff6ff;
            color: #2563eb;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            margin-bottom: 20px;
        }
        .adv-box h3 {
            font-size: 20px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 12px;
        }
        .adv-box p {
            color: #475569;
            line-height: 1.65;
            font-size: 14.5px;
            margin: 0;
        }
        .adv-form-wrapper {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.06);
            border: 1px solid #e2e8f0;
        }
        .form-group {
            margin-bottom: 18px;
        }
        .form-label {
            display: block;
            font-size: 13.5px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 6px;
        }
        .form-control, .form-select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            font-size: 14px;
            background: #ffffff;
            color: #0f172a;
            box-sizing: border-box;
        }
        .form-control:focus, .form-select:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
        }
        .submit-btn {
            background: #2563eb;
            color: white;
            border: none;
            padding: 14px 28px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            width: 100%;
            transition: all 0.2s ease;
        }
        .submit-btn:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }
    </style>

    <div class="adv-hero">
        <div class="container" style="position: relative; z-index: 2;">
            <div class="adv-badge">PARTNER WITH US</div>
            <h1>Reach India's Most Active<br/>Financial Audience</h1>
            <p>Connect your brand with millions of highly engaged investors, traders, and finance professionals who trust IPOSETU for their daily market insights.</p>
            <a href="#contact" class="btn btn-primary" style="padding: 14px 32px; font-size: 15px; border-radius: 30px; display: inline-block; text-decoration: none; font-weight: 700;">Get in Touch &rarr;</a>
        </div>
    </div>

    <div class="container">
        <div class="adv-stats-container">
            <div class="adv-stat-card">
                <div class="adv-stat-icon">
                    <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <div class="adv-stat-value">2.5M+</div>
                <div class="adv-stat-label">Monthly Visitors</div>
            </div>
            <div class="adv-stat-card">
                <div class="adv-stat-icon">
                    <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                </div>
                <div class="adv-stat-value">12M+</div>
                <div class="adv-stat-label">Page Views / Mo</div>
            </div>
            <div class="adv-stat-card">
                <div class="adv-stat-icon">
                    <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                </div>
                <div class="adv-stat-value">85%</div>
                <div class="adv-stat-label">Mobile Traffic</div>
            </div>
            <div class="adv-stat-card">
                <div class="adv-stat-icon">
                    <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                </div>
                <div class="adv-stat-value">High-Intent</div>
                <div class="adv-stat-label">Active Investors</div>
            </div>
        </div>
    </div>

    <section class="adv-section">
        <div class="container">
            <div style="text-align: center; max-width: 600px; margin: 0 auto 50px;">
                <h2 style="font-size: 34px; font-weight: 800; color: #0f172a; margin-bottom: 14px;">Advertising Solutions</h2>
                <p style="color: #64748b; font-size: 16px; margin: 0;">Tailored marketing campaigns to hit your target KPIs with maximum ROI.</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
                <div class="adv-box">
                    <div class="adv-box-icon">
                        <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                    </div>
                    <h3>Display Advertising</h3>
                    <p>High-visibility banner placements across our Homepage, IPO Details pages, and financial tools. Support for IAB standard sizes (728x90, 300x250) and rich media.</p>
                </div>
                <div class="adv-box">
                    <div class="adv-box-icon">
                        <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    </div>
                    <h3>Sponsored Content</h3>
                    <p>In-depth reviews, broker comparisons, and thought-leadership articles written by our financial experts to seamlessly integrate your brand.</p>
                </div>
                <div class="adv-box">
                    <div class="adv-box-icon">
                        <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </div>
                    <h3>Newsletter Sponsorship</h3>
                    <p>Reach over 150,000 active subscribers directly in their inbox with our daily 'Pre-Market Briefing' and weekly IPO wraps.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" style="padding: 80px 0; background: white;">
        <div class="container adv-grid">
            <div>
                <h2 style="font-size: 38px; font-weight: 800; color: #0f172a; margin-bottom: 20px; line-height: 1.15;">Let's build a successful campaign together.</h2>
                <p style="font-size: 16.5px; color: #475569; margin-bottom: 36px; line-height: 1.7;">Whether your goal is brand awareness, user acquisition, or lead generation, our dedicated team will help you craft the perfect strategy.</p>
                
                <div style="display: flex; flex-direction: column; gap: 20px;">
                    <div style="display: flex; gap: 16px; align-items: flex-start;">
                        <div style="width: 46px; height: 46px; background: #eff6ff; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #2563eb;">
                            <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                        <div>
                            <div style="font-weight: 700; color: #0f172a; margin-bottom: 4px; font-size: 15px;">Email Us</div>
                            <div style="color: #64748b; font-size: 14px;">partnerships@iposetu.com</div>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; align-items: flex-start;">
                        <div style="width: 46px; height: 46px; background: #eff6ff; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #2563eb;">
                            <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div>
                            <div style="font-weight: 700; color: #0f172a; margin-bottom: 4px; font-size: 15px;">Office</div>
                            <div style="color: #64748b; font-size: 14px;">Pune, Maharashtra</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="adv-form-wrapper">
                <h3 style="font-size: 22px; font-weight: 800; color: #0f172a; margin-bottom: 20px;">Request a Media Kit</h3>
                <form id="advMediaForm" action="#" method="POST" onsubmit="handleAdvSubmit(event)">
                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Work Email</label>
                        <input type="email" class="form-control" placeholder="john@company.com" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Company Name</label>
                        <input type="text" class="form-control" placeholder="Acme Finance Ltd." required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Monthly Budget</label>
                        <select class="form-select">
                            <option>&lt; ₹1 Lakh</option>
                            <option>₹1 Lakh - ₹5 Lakhs</option>
                            <option>₹5 Lakhs - ₹20 Lakhs</option>
                            <option>&gt; ₹20 Lakhs</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tell us about your campaign goals</label>
                        <textarea class="form-control" rows="4" placeholder="How can we help your brand grow?" style="resize: vertical;"></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Inquiry &rarr;</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Proper In-Page Success Modal -->
    <div id="advSuccessModal" style="display:none; position:fixed; inset:0; z-index:99999; background:rgba(15,23,42,0.65); backdrop-filter:blur(5px); align-items:center; justify-content:center; padding:20px;">
        <div style="background:#ffffff; border-radius:20px; padding:40px 32px; max-width:440px; width:100%; text-align:center; box-shadow:0 25px 60px -12px rgba(15,23,42,0.3); border:1px solid #e2e8f0; animation:advModalPop 0.3s cubic-bezier(0.16, 1, 0.3, 1);">
            <div style="width:68px; height:68px; border-radius:50%; background:#dcfce7; color:#16a34a; display:flex; align-items:center; justify-content:center; margin:0 auto 20px; box-shadow:0 10px 20px rgba(22,163,74,0.15);">
                <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </div>
            <h3 style="font-size:22px; font-weight:800; color:#0f172a; margin-bottom:10px;">Request Received!</h3>
            <p style="color:#64748b; font-size:15px; line-height:1.6; margin-bottom:28px;">Thank you for your interest. Our advertising partnerships team will contact you within 24 hours.</p>
            <button type="button" onclick="closeAdvModal()" class="submit-btn" style="width:100%; justify-content:center; padding:14px 20px; border-radius:12px; font-size:15px; font-weight:700; cursor:pointer;">OK</button>
        </div>
    </div>
    <style>
        @keyframes advModalPop {
            0% { opacity:0; transform:scale(0.92) translateY(10px); }
            100% { opacity:1; transform:scale(1) translateY(0); }
        }
    </style>
    <script>
        function handleAdvSubmit(e) {
            e.preventDefault();
            var modal = document.getElementById('advSuccessModal');
            if (modal) {
                modal.style.display = 'flex';
            }
            var form = document.getElementById('advMediaForm');
            if (form) {
                form.reset();
            }
        }
        function closeAdvModal() {
            var modal = document.getElementById('advSuccessModal');
            if (modal) {
                modal.style.display = 'none';
            }
        }
    </script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>
</body>
</html>
