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

<main class="page-animate">
    <style>
        @keyframes fadeIn { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
        .page-animate { animation: fadeIn 0.8s ease-out; font-family: 'Inter', sans-serif; background: #f8fafc; padding-bottom: 80px; }
        
        .articles-hero { background: linear-gradient(135deg, #020617 0%, #1e293b 100%); color: white; padding: 100px 24px 80px 24px; text-align: center; }
        .hero-title { font-size: 56px; font-weight: 900; line-height: 1.1; margin-bottom: 24px; letter-spacing: -1px; }
        .hero-subtitle { font-size: 20px; color: #cbd5e1; max-width: 800px; margin: 0 auto; line-height: 1.6; }

        .chip-nav { display: flex; gap: 12px; justify-content: center; margin-top: 40px; flex-wrap: wrap; }
        .chip { padding: 10px 24px; border-radius: 30px; background: rgba(255,255,255,0.1); color: white; font-weight: 700; font-size: 14px; cursor: pointer; transition: 0.2s; backdrop-filter: blur(10px); }
        .chip:hover, .chip.active { background: #3b82f6; }

        .main-container { max-width: 1400px; margin: -40px auto 0 auto; padding: 0 24px; position: relative; z-index: 10; }
        
        .bento-grid { display: grid; grid-template-columns: repeat(4, 1fr); grid-auto-rows: 320px; gap: 24px; margin-bottom: 60px; }
        
        .article-card { background: white; border-radius: 24px; overflow: hidden; position: relative; border: 1px solid #e2e8f0; transition: transform 0.3s; display: flex; flex-direction: column; justify-content: flex-end; padding: 30px; box-shadow: 0 20px 40px rgba(0,0,0,0.04); cursor: pointer; }
        .article-card:hover { transform: translateY(-8px); box-shadow: 0 30px 60px rgba(0,0,0,0.08); }
        
        .ac-bg { position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; filter: brightness(0.6) grayscale(20%); transition: 0.4s; }
        .article-card:hover .ac-bg { filter: brightness(0.4) grayscale(0%); transform: scale(1.05); }
        .ac-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(0deg, rgba(15,23,42,0.95) 0%, rgba(15,23,42,0.4) 50%, transparent 100%); z-index: 1; }
        
        .ac-content { position: relative; z-index: 2; }
        .ac-tag { display: inline-block; background: #3b82f6; color: white; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 6px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px; }
        .ac-title { font-size: 22px; font-weight: 900; color: white; line-height: 1.3; margin-bottom: 12px; }
        .ac-meta { display: flex; align-items: center; gap: 12px; font-size: 13px; color: #cbd5e1; font-weight: 600; }
        
        /* Grid Sizing */
        .large-card { grid-column: span 2; grid-row: span 2; }
        .large-card .ac-title { font-size: 36px; }
        .wide-card { grid-column: span 2; }
        .tall-card { grid-row: span 2; }

        /* Prose Section */
        .editorial-prose { max-width: 900px; margin: 0 auto 80px auto; background: white; padding: 60px; border-radius: 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.02); border: 1px solid #e2e8f0; }
        .editorial-prose h2 { font-size: 32px; font-weight: 900; margin-bottom: 24px; color: #0f172a; }
        .editorial-prose p { font-size: 18px; color: #475569; line-height: 1.8; margin-bottom: 20px; }
        .editorial-prose h3 { font-size: 24px; font-weight: 800; margin-top: 40px; margin-bottom: 16px; color: #0f172a; }

        @media (max-width: 1200px) { .bento-grid { grid-template-columns: repeat(3, 1fr); } }
        @media (max-width: 992px) { .bento-grid { grid-template-columns: repeat(2, 1fr); } .large-card, .wide-card, .tall-card { grid-column: span 2; grid-row: span 1; } }
        @media (max-width: 600px) { .bento-grid { grid-template-columns: 1fr; } .large-card, .wide-card, .tall-card { grid-column: span 1; } }
    </style>

    <div class="articles-hero">
        <h1 class="hero-title">SME IPO Editorial & Insights</h1>
        <p class="hero-subtitle">Deep dives, market analysis, grey market trends, and educational guides to master the art of SME investing.</p>
        
        <div class="chip-nav">
            <div class="chip active">Latest News</div>
            <div class="chip">Market Analysis</div>
            <div class="chip">Educational</div>
            <div class="chip">Regulatory Updates</div>
            <div class="chip">Grey Market</div>
        </div>
    </div>

    <div class="main-container">
        
        <!-- Bento Grid -->
        <div class="bento-grid">
            
            <!-- Large Hero Card -->
            <div class="article-card large-card" onclick="window.location.href='article-detail.html?id=1'">
                <img class="ac-bg" src="<?= BASE_URL ?>assets/img/sme_boom_chart.jpg" alt="SME Boom">
                <div class="ac-overlay"></div>
                <div class="ac-content">
                    <div class="ac-tag" style="background: #ef4444;">MARKET ALERT</div>
                    <h2 class="ac-title">The SME IPO Boom: Is it a Bubble or a Structural Shift in Indian Capital Markets?</h2>
                    <p style="color: #cbd5e1; font-size: 16px; margin-bottom: 20px; line-height: 1.6;">With subscriptions crossing 500x and listing gains exceeding 100%, we analyze the macroeconomic factors driving the SME frenzy and warn against irrational exuberance.</p>
                    <div class="ac-meta">
                        <span>By Rahul Sharma</span>
                        <span>•</span>
                        <span>Aug 12, 2026</span>
                        <span>•</span>
                        <span>8 min read</span>
                    </div>
                </div>
            </div>

            <!-- Tall Card -->
            <div class="article-card tall-card" onclick="window.location.href='article-detail.html?id=2'">
                <img class="ac-bg" src="<?= BASE_URL ?>assets/img/drhp_analysis.jpg" alt="DRHP Analysis">
                <div class="ac-overlay"></div>
                <div class="ac-content">
                    <div class="ac-tag">EDUCATIONAL</div>
                    <h2 class="ac-title">How to Analyze an SME Draft Red Herring Prospectus (DRHP)</h2>
                    <p style="color: #cbd5e1; font-size: 14px; margin-bottom: 20px; line-height: 1.6;">Stop relying solely on grey market premiums. Learn how to read the balance sheet of an SME company before you invest ₹1 Lakh.</p>
                    <div class="ac-meta"><span>By Neha Gupta</span><span>•</span><span>Aug 10</span></div>
                </div>
            </div>

            <div class="article-card " onclick="window.location.href='article-detail.html?id=3'">
                <div class="ac-bg" style="background: #334155;"></div>
                <div class="ac-overlay"></div>
                <div class="ac-content">
                    <div class="ac-tag" style="background: #10b981;">GMP TRENDS</div>
                    <h2 class="ac-title">Why the Grey Market is Often Wrong</h2>
                    <div class="ac-meta"><span>Aug 08</span><span>•</span><span>5 min read</span></div>
                </div>
            </div>

            <div class="article-card " onclick="window.location.href='article-detail.html?id=4'">
                <div class="ac-bg" style="background: #475569;"></div>
                <div class="ac-overlay"></div>
                <div class="ac-content">
                    <div class="ac-tag" style="background: #f59e0b;">SEBI REGULATION</div>
                    <h2 class="ac-title">SEBI Introduces New Curbs on SME Listing Price Variations</h2>
                    <div class="ac-meta"><span>Aug 05</span><span>•</span><span>3 min read</span></div>
                </div>
            </div>

            <!-- Wide Card -->
            <div class="article-card wide-card" onclick="window.location.href='article-detail.html?id=5'">
                <div class="ac-bg" style="background: #1e1b4b;"></div>
                <div class="ac-overlay" style="background: linear-gradient(90deg, rgba(15,23,42,0.95) 0%, rgba(15,23,42,0.4) 100%);"></div>
                <div class="ac-content" style="max-width: 60%;">
                    <div class="ac-tag" style="background: #8b5cf6;">POST-LISTING STRATEGY</div>
                    <h2 class="ac-title">When to Sell an SME IPO: Holding for Long Term vs Booking Listing Gains</h2>
                    <div class="ac-meta"><span>By Amit Patel</span><span>•</span><span>Jul 28</span><span>•</span><span>10 min read</span></div>
                </div>
            </div>

            <div class="article-card " onclick="window.location.href='article-detail.html?id=6'">
                <div class="ac-bg" style="background: #0f172a;"></div>
                <div class="ac-overlay"></div>
                <div class="ac-content">
                    <div class="ac-tag">GUIDE</div>
                    <h2 class="ac-title">Understanding Upper Circuit Traps in SMEs</h2>
                    <div class="ac-meta"><span>Jul 22</span><span>•</span><span>4 min read</span></div>
                </div>
            </div>

             <div class="article-card " onclick="window.location.href='article-detail.html?id=7'">
                <div class="ac-bg" style="background: #020617;"></div>
                <div class="ac-overlay"></div>
                <div class="ac-content">
                    <div class="ac-tag">DATA DIVE</div>
                    <h2 class="ac-title">Sector Analysis: Why Drone & AI SMEs Demand Premium Valuation</h2>
                    <div class="ac-meta"><span>Jul 15</span><span>•</span><span>6 min read</span></div>
                </div>
            </div>

        </div>

        <!-- Long Editorial Text Section -->
        <div class="editorial-prose">
            <h2>The Changing Landscape of SME IPOs</h2>
            <p>For decades, the Indian stock market was dominated by massive conglomerates listing on the Mainboard (BSE/NSE). However, the introduction of the SME exchange platform has revolutionized access to capital for small and medium enterprises. Today, the SME segment is no longer a neglected backwater—it is the hottest venue for high-net-worth retail and institutional investors.</p>
            
            <h3>The Liquidity Squeeze and Exorbitant Demand</h3>
            <p>SME IPOs have an inherently tiny issue size, often ranging from ₹10 Crores to ₹50 Crores. Contrast this with a massive retail demand base where single investors are required to apply with a minimum lot size of ~₹1,00,000 to ₹1,40,000. This creates an extreme demand-supply mismatch.</p>
            <p>When an issue of ₹20 Crores receives a subscription of 400x, it means ₹8,000 Crores of retail and HNI money is locked in to buy shares of a small factory or IT firm. This immense pressure spills over into the Grey Market (unlisted trading) and eventually leads to explosive 100%+ listing gains.</p>
            
            <h3>Are the Fundamentals Keeping Up?</h3>
            <p>While the momentum is undeniable, investors must practice caution. An SME trading at a P/E of 80x is pricing in flawless execution and 50% YoY growth for the next five years. Many SMEs simply do not possess the competitive moat required to sustain such valuations. The critical skill for a modern SME investor is differentiating between a momentum-driven hype train and a fundamentally sound business poised for Mainboard migration.</p>
        </div>

    </div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const chips = document.querySelectorAll('.chip');
        const cards = document.querySelectorAll('.article-card');

        chips.forEach(chip => {
            chip.addEventListener('click', () => {
                // Update active chip
                chips.forEach(c => c.classList.remove('active'));
                chip.classList.add('active');

                // Filter logic
                const filterText = chip.innerText.trim().toUpperCase();
                
                cards.forEach(card => {
                    if (filterText === 'LATEST NEWS' || filterText === 'ALL') {
                        card.style.display = 'flex'; // Reset to default display
                    } else {
                        const tag = card.querySelector('.ac-tag');
                        if (tag) {
                            const tagText = tag.innerText.trim().toUpperCase();
                            // Simple mapping
                            if (filterText === 'MARKET ANALYSIS' && (tagText.includes('MARKET ALERT') || tagText.includes('DATA DIVE'))) {
                                card.style.display = 'flex';
                            } else if (filterText === 'EDUCATIONAL' && (tagText.includes('EDUCATIONAL') || tagText.includes('GUIDE'))) {
                                card.style.display = 'flex';
                            } else if (filterText === 'REGULATORY UPDATES' && tagText.includes('SEBI REGULATION')) {
                                card.style.display = 'flex';
                            } else if (filterText === 'GREY MARKET' && tagText.includes('GMP TRENDS')) {
                                card.style.display = 'flex';
                            } else {
                                card.style.display = 'none';
                            }
                        } else {
                            card.style.display = 'none';
                        }
                    }
                });
            });
        });
    });
</script>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
