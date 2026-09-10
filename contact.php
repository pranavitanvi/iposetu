<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Contact – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Contact on IPOSETU."/>
<link class="style-link" href="/iposetu/assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="/iposetu/assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/header.php'; ?>
<main class="premium-page-body">
    <!-- Hero Section -->
    <section class="premium-hero" style="padding-bottom: 40px;">
        <div class="premium-grid-bg"></div>
        <div class="premium-hero-content animate-on-scroll">
            <span class="premium-eyebrow">CONTACT US</span>
            <h1 class="premium-heading">Get in Touch with IPOSETU</h1>
            <p class="premium-subtext">Have a question, feedback, or partnership proposal? We'd love to hear from you. Reach out to our team using the options below.</p>
        </div>
    </section>

    <!-- Main Contact Area -->
    <section class="container" style="padding: 40px 20px 100px;">
        <div style="display:grid; grid-template-columns: 1fr 1.5fr; gap: 40px; align-items:start;">
            
            <!-- Info Sections -->
            <div style="display:flex; flex-direction:column; gap:24px;">
                <div class="glass-card animate-on-scroll" style="padding:32px;">
                    <div style="width:48px; height:48px; background:rgba(59,130,246,0.1); border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:20px; color:#3b82f6;">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </div>
                    <h3 style="font-size:20px; font-weight:700; margin-bottom:8px;">Email Us</h3>
                    <p style="color:var(--page-text-muted); font-size:15px; margin-bottom:16px;">Our team typically responds within 24 hours.</p>
                    <a href="mailto:info@iposetu.com" style="color:#3b82f6; font-weight:600; text-decoration:none; font-size:16px;">info@iposetu.com</a>
                </div>

                <div class="glass-card animate-on-scroll" style="padding:32px;">
                    <div style="width:48px; height:48px; background:rgba(16,185,129,0.1); border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:20px; color:#10b981;">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <h3 style="font-size:20px; font-weight:700; margin-bottom:8px;">Headquarters</h3>
                    <p style="color:var(--page-text-muted); font-size:15px; line-height:1.6;">
                        Pune, Maharashtra
                    </p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="glass-card animate-on-scroll" style="padding:40px;">
                <h2 style="font-size:28px; font-weight:800; margin-bottom:24px;">Send us a message</h2>
                
                <form id="contactForm" onsubmit="handleContactSubmit(event)">
                    <!-- Interactive Enquiry Selector -->
                    <div style="margin-bottom:24px;">
                        <label style="display:block; font-size:14px; font-weight:600; margin-bottom:12px;">What is your enquiry about?</label>
                        <div style="display:grid; grid-template-columns: repeat(3, 1fr); gap:12px;" id="enquirySelector">
                            <label style="cursor:pointer;">
                                <input type="radio" name="enquiryType" value="general" checked style="display:none;">
                                <div class="enquiry-card active-enquiry" style="padding:16px; text-align:center; border-radius:8px; border:2px solid #3b82f6; background:rgba(59,130,246,0.05); font-weight:600; font-size:14px; color:var(--page-text); transition:all 0.2s;">General</div>
                            </label>
                            <label style="cursor:pointer;">
                                <input type="radio" name="enquiryType" value="advertising" style="display:none;">
                                <div class="enquiry-card" style="padding:16px; text-align:center; border-radius:8px; border:1px solid var(--glass-border); background:var(--page-bg); font-weight:600; font-size:14px; color:var(--page-text-muted); transition:all 0.2s;">Advertising</div>
                            </label>
                            <label style="cursor:pointer;">
                                <input type="radio" name="enquiryType" value="support" style="display:none;">
                                <div class="enquiry-card" style="padding:16px; text-align:center; border-radius:8px; border:1px solid var(--glass-border); background:var(--page-bg); font-weight:600; font-size:14px; color:var(--page-text-muted); transition:all 0.2s;">Support</div>
                            </label>
                        </div>
                    </div>

                    <div style="display:grid; grid-template-columns: 1fr 1fr; gap:20px; margin-bottom:20px;">
                        <div>
                            <label style="display:block; font-size:14px; font-weight:600; margin-bottom:8px;">First Name <span style="color:#ef4444;">*</span></label>
                            <input type="text" required style="width:100%; padding:12px 16px; border-radius:8px; border:1px solid var(--glass-border); background:var(--page-bg); color:var(--page-text); font-family:inherit; font-size:15px; outline:none; transition:border 0.2s;" onfocus="this.style.borderColor='#3b82f6'" onblur="this.style.borderColor='var(--glass-border)'">
                        </div>
                        <div>
                            <label style="display:block; font-size:14px; font-weight:600; margin-bottom:8px;">Last Name <span style="color:#ef4444;">*</span></label>
                            <input type="text" required style="width:100%; padding:12px 16px; border-radius:8px; border:1px solid var(--glass-border); background:var(--page-bg); color:var(--page-text); font-family:inherit; font-size:15px; outline:none; transition:border 0.2s;" onfocus="this.style.borderColor='#3b82f6'" onblur="this.style.borderColor='var(--glass-border)'">
                        </div>
                    </div>

                    <div style="margin-bottom:20px;">
                        <label style="display:block; font-size:14px; font-weight:600; margin-bottom:8px;">Email Address <span style="color:#ef4444;">*</span></label>
                        <input type="email" required style="width:100%; padding:12px 16px; border-radius:8px; border:1px solid var(--glass-border); background:var(--page-bg); color:var(--page-text); font-family:inherit; font-size:15px; outline:none; transition:border 0.2s;" onfocus="this.style.borderColor='#3b82f6'" onblur="this.style.borderColor='var(--glass-border)'">
                    </div>

                    <div style="margin-bottom:24px;">
                        <label style="display:block; font-size:14px; font-weight:600; margin-bottom:8px;">Message <span style="color:#ef4444;">*</span></label>
                        <textarea required rows="5" style="width:100%; padding:12px 16px; border-radius:8px; border:1px solid var(--glass-border); background:var(--page-bg); color:var(--page-text); font-family:inherit; font-size:15px; outline:none; resize:vertical; transition:border 0.2s;" onfocus="this.style.borderColor='#3b82f6'" onblur="this.style.borderColor='var(--glass-border)'"></textarea>
                    </div>

                    <button type="submit" class="premium-btn" style="width:100%; justify-content:center; padding:16px;">Send Message</button>
                    
                    <p style="font-size:13px; color:var(--page-text-muted); margin-top:16px; text-align:center;">
                        By submitting this form, you agree to our <a href="/iposetu/privacy-policy" style="color:#3b82f6; text-decoration:none;">Privacy Policy</a>.
                    </p>
                </form>
            </div>
        </div>
    </section>

    <!-- Proper In-Page Success Modal -->
    <div id="contactSuccessModal" style="display:none; position:fixed; inset:0; z-index:99999; background:rgba(15,23,42,0.65); backdrop-filter:blur(5px); align-items:center; justify-content:center; padding:20px;">
        <div style="background:#ffffff; border-radius:20px; padding:40px 32px; max-width:440px; width:100%; text-align:center; box-shadow:0 25px 60px -12px rgba(15,23,42,0.3); border:1px solid #e2e8f0; animation:modalPopIn 0.3s cubic-bezier(0.16, 1, 0.3, 1);">
            <div style="width:68px; height:68px; border-radius:50%; background:#dcfce7; color:#16a34a; display:flex; align-items:center; justify-content:center; margin:0 auto 20px; box-shadow:0 10px 20px rgba(22,163,74,0.15);">
                <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </div>
            <h3 style="font-size:22px; font-weight:800; color:#0f172a; margin-bottom:10px;">Message Sent Successfully!</h3>
            <p style="color:#64748b; font-size:15px; line-height:1.6; margin-bottom:28px;">We have received your message and our team will get back to you within 24 hours.</p>
            <button type="button" onclick="closeContactModal()" class="premium-btn" style="width:100%; justify-content:center; padding:14px 20px; border-radius:12px; font-size:15px; font-weight:700; cursor:pointer;">OK</button>
        </div>
    </div>
    <style>
        @keyframes modalPopIn {
            0% { opacity:0; transform:scale(0.92) translateY(10px); }
            100% { opacity:1; transform:scale(1) translateY(0); }
        }
    </style>
    <script>
        function handleContactSubmit(e) {
            e.preventDefault();
            var modal = document.getElementById('contactSuccessModal');
            if (modal) {
                modal.style.display = 'flex';
            }
            var form = document.getElementById('contactForm');
            if (form) {
                form.reset();
            }
        }
        function closeContactModal() {
            var modal = document.getElementById('contactSuccessModal');
            if (modal) {
                modal.style.display = 'none';
            }
        }
    </script>

    <!-- Frequently Asked Questions -->
    <section class="container animate-on-scroll" style="margin-top: 60px; padding: 40px 20px;">
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 28px; font-weight: 800; color: #0f172a; margin-bottom: 16px;">Frequently Asked Questions</h2>
            <p style="font-size: 16px; color: #475569; max-width: 600px; margin: 0 auto;">Before reaching out, you might find the answer to your question below.</p>
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; max-width: 900px; margin: 0 auto;">
            <div class="glass-card" style="padding: 24px;">
                <h3 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">How quickly do you update GMP?</h3>
                <p style="font-size: 14px; color: #475569; line-height: 1.7;">We update the Grey Market Premium (GMP) data multiple times throughout the trading day based on inputs from established brokers and market participants.</p>
            </div>
            <div class="glass-card" style="padding: 24px;">
                <h3 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Can I invest directly through IPOSETU?</h3>
                <p style="font-size: 14px; color: #475569; line-height: 1.7;">No, IPOSETU is strictly an informational and educational platform. You will need to use a registered broker (like Zerodha, Upstox, etc.) to place actual bids.</p>
            </div>
            <div class="glass-card" style="padding: 24px;">
                <h3 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">How can I partner with IPOSETU?</h3>
                <p style="font-size: 14px; color: #475569; line-height: 1.7;">We are always open to partnerships with brokers, financial content creators, and data providers. Please use the contact form and select 'Partnership' as the enquiry type.</p>
            </div>
            <div class="glass-card" style="padding: 24px;">
                <h3 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Is the data on your site free?</h3>
                <p style="font-size: 14px; color: #475569; line-height: 1.7;">Yes, the core data, analysis, and educational resources on IPOSETU are entirely free for our users. We may introduce premium features in the future.</p>
            </div>
        </div>
    </section>
</main>
    <!-- JS for Interactive Selector -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const radios = document.querySelectorAll('input[name="enquiryType"]');
            radios.forEach(radio => {
                radio.addEventListener('change', (e) => {
                    // Reset all
                    document.querySelectorAll('.enquiry-card').forEach(card => {
                        card.style.border = '1px solid var(--glass-border)';
                        card.style.background = 'var(--page-bg)';
                        card.style.color = 'var(--page-text-muted)';
                    });
                    
                    // Highlight selected
                    if(e.target.checked) {
                        const card = e.target.nextElementSibling;
                        card.style.border = '2px solid #3b82f6';
                        card.style.background = 'rgba(59,130,246,0.05)';
                        card.style.color = 'var(--page-text)';
                    }
                });
            });
        });
    </script>

    <!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/footer.php'; ?>
<div id="sticky-bottom-ad-container"></div>
<script src="/iposetu/assets/js/components.js?v=6.1"></script>
<script src="/iposetu/assets/js/ad-manager.js?v=1.2"></script>
<script src="/iposetu/assets/js/main.js"></script>
</body>
</html>
