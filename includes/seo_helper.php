<?php
/**
 * IPOSETU Production SEO Engine & Structured Data Helper
 * Generates:
 * - Unique <title> & <meta name="description">
 * - Self-referencing Canonical URLs
 * - Robots Meta Directives (index, follow vs noindex, nofollow)
 * - Open Graph & Twitter Cards (summary_large_image)
 * - Schema.org JSON-LD (WebSite, Organization, BreadcrumbList, FinancialProduct, Article, FAQPage)
 * - Visual Breadcrumb Navigation
 */

require_once __DIR__ . '/seo_config.php';

if (!function_exists('iposetu_get_canonical_url')) {
    function iposetu_get_canonical_url($customPath = null) {
        $base = IPOSETU_SITE_URL;
        
        if ($customPath !== null) {
            $clean = '/' . ltrim(preg_replace('#^/iposetu#', '', $customPath), '/');
            $clean = preg_replace('/\.(php|html)$/i', '', $clean);
            if ($clean === '/index' || $clean === '') $clean = '/';
            return rtrim($base . $clean, '/') . ($clean === '/' ? '/' : '');
        }

        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        // Strip query string (removes tracking, highlight, utm parameters)
        $path = strtok($uri, '?');
        
        // Remove /iposetu prefix in local development environment
        $cleanPath = preg_replace('#^/iposetu#', '', $path);
        // Remove file extensions (.php or .html)
        $cleanPath = preg_replace('/\.(php|html)$/i', '', $cleanPath);
        
        if ($cleanPath === '' || $cleanPath === '/index' || $cleanPath === '/') {
            return $base . '/';
        }

        return rtrim($base . $cleanPath, '/');
    }
}

if (!function_exists('iposetu_get_page_seo_defaults')) {
    function iposetu_get_page_seo_defaults() {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $path = strtok($uri, '?');
        $cleanPath = trim(preg_replace('#^/iposetu#', '', $path), '/');
        $cleanPath = preg_replace('/\.(php|html)$/i', '', $cleanPath);

        $seoMap = [
            '' => [
                'title' => 'IPO Today – Latest IPOs, GMP, Allotment & Listing | IPOSETU',
                'description' => 'Track live Mainboard & SME IPOs, real-time GMP trends, subscription numbers, allotment status, and listing dates on IPOSETU.'
            ],
            'index' => [
                'title' => 'IPO Today – Latest IPOs, GMP, Allotment & Listing | IPOSETU',
                'description' => 'Track live Mainboard & SME IPOs, real-time GMP trends, subscription numbers, allotment status, and listing dates on IPOSETU.'
            ],
            'about' => [
                'title' => 'About IPOSETU – India\'s Modern IPO & Financial Intelligence Platform',
                'description' => 'Learn about IPOSETU\'s mission to simplify IPO tracking, market analysis, financial calculators, and primary market data for Indian investors.'
            ],
            'contact' => [
                'title' => 'Contact Us – Support & Inquiries | IPOSETU',
                'description' => 'Get in touch with the IPOSETU editorial and technical team for platform feedback, market data partnerships, or general assistance.'
            ],
            'calendar' => [
                'title' => 'IPO Calendar 2026 – Upcoming Issue Dates, Bidding & Allotment | IPOSETU',
                'description' => 'Comprehensive Indian IPO Calendar for 2026. View issue opening dates, closing schedules, basis of allotment, and tentative listing dates.'
            ],
            'allotment' => [
                'title' => 'IPO Allotment Status Online – Check BSE, NSE & Registrars | IPOSETU',
                'description' => 'Check live IPO allotment status instantly via PAN number, application number, or DP client ID across Link Intime, KFintech, and Bigshare.'
            ],
            'subscription' => [
                'title' => 'Live IPO Subscription Status – QIB, NII & Retail Bidding | IPOSETU',
                'description' => 'Track real-time subscription demand across QIB, NII (HNI), and Retail categories with live bid multiples for open Mainboard and SME IPOs.'
            ],
            'privacy-policy' => [
                'title' => 'Privacy Policy | IPOSETU Financial Information Portal',
                'description' => 'Read IPOSETU\'s privacy policy detailing our data protection standards, user privacy commitments, and cookie practices.'
            ],
            'terms-and-conditions' => [
                'title' => 'Terms & Conditions of Use | IPOSETU',
                'description' => 'Review the terms and conditions governing your access to IPOSETU financial analytics, market data terminal, and investment tools.'
            ],
            'disclaimer' => [
                'title' => 'Financial Disclaimer & Risk Warning | IPOSETU',
                'description' => 'Important disclosures regarding market risk, Grey Market Premium (GMP) volatility, and informational use of IPOSETU content.'
            ],
            'advertise-with-us' => [
                'title' => 'Advertise With Us – Reach Active Stock & IPO Investors | IPOSETU',
                'description' => 'Promote your financial brand, brokerage, or fintech service to high-intent primary market investors and active traders on IPOSETU.'
            ],
            // Mainboard IPO Pages
            'ipo' => [
                'title' => 'Mainboard IPOs in India – Current, Upcoming & Listed Issues | IPOSETU',
                'description' => 'Explore all Mainboard public issues on BSE and NSE. Compare price bands, issue sizes, GMP estimates, and fundamental analytics.'
            ],
            'ipo/current' => [
                'title' => 'Current IPOs in India – Active Issues & Subscription Status | IPOSETU',
                'description' => 'List of currently active Mainboard IPOs accepting applications. Track live subscription figures, cutoff prices, and allotment timelines.'
            ],
            'ipo/upcoming' => [
                'title' => 'Upcoming IPOs in India – Forthcoming Issues in Pipeline | IPOSETU',
                'description' => 'Stay ahead with forthcoming Mainboard IPOs awaiting SEBI approval or opening dates. Review DRHP filings, issue sizes, and valuations.'
            ],
            'ipo/open' => [
                'title' => 'Open IPOs for Bidding Today – Real-Time Issue Details | IPOSETU',
                'description' => 'Browse IPOs open for subscription today. Get price band ranges, minimum bid lots, application amounts, and live bidding status.'
            ],
            'ipo/closed' => [
                'title' => 'Closed IPOs in India – Allotment Schedule & Listing Date | IPOSETU',
                'description' => 'Check recently closed IPOs awaiting basis of allotment, refund initiation, demat crediting, and expected listing day performance.'
            ],
            'ipo/listed' => [
                'title' => 'Recently Listed IPOs – Listing Day Gains & Performance | IPOSETU',
                'description' => 'Analyze listing gains, first-day trading returns, and long-term post-listing performance for recent Indian initial public offerings.'
            ],
            'ipo/performance' => [
                'title' => 'IPO Performance Tracker – Historical Return Analytics | IPOSETU',
                'description' => 'Evaluate historical IPO returns vs benchmark indices. Discover top performing public issues, multibagger returns, and listing history.'
            ],
            'ipo/reviews' => [
                'title' => 'IPO Reviews & Expert Analysis – Should You Apply? | IPOSETU',
                'description' => 'In-depth IPO reviews, broker recommendations, financial statements breakdown, and risk-reward ratings for upcoming public offerings.'
            ],
            'ipo/ratings' => [
                'title' => 'IPO Ratings & Broker Recommendations India | IPOSETU',
                'description' => 'Consolidated broker ratings (Apply / Avoid / Neutral) from top institutional research houses on active and forthcoming IPOs.'
            ],
            'ipo/faqs' => [
                'title' => 'IPO FAQs – Beginner Questions, ASBA, UPI & Bidding Rules | IPOSETU',
                'description' => 'Frequently asked questions on applying for IPOs via UPI ASBA, cutoff prices, allotment probability, and tax on listing gains.'
            ],
            'ipo/articles' => [
                'title' => 'IPO Guides & Educational Articles – Investor Learning | IPOSETU',
                'description' => 'Educational guides on how IPOs work, interpreting the Red Herring Prospectus (RHP), Anchor Investor locks, and valuation metrics.'
            ],
            // SME IPO Pages
            'sme' => [
                'title' => 'SME IPO Directory – NSE Emerge & BSE SME Public Issues | IPOSETU',
                'description' => 'Complete directory of Small and Medium Enterprise (SME) IPOs on NSE Emerge and BSE SME. Track lot sizes, GMP, and issue details.'
            ],
            'sme/current' => [
                'title' => 'Current SME IPOs – Active Issues on NSE Emerge & BSE SME | IPOSETU',
                'description' => 'Live SME public issues currently accepting bids. Check minimum application requirements, market maker lots, and subscription status.'
            ],
            'sme/upcoming' => [
                'title' => 'Upcoming SME IPOs – Pipeline, Calendar & Issue Size | IPOSETU',
                'description' => 'Discover upcoming SME initial public offerings scheduled for launch on BSE SME and NSE Emerge with tentative bidding dates.'
            ],
            'sme/open' => [
                'title' => 'Open SME IPOs Today – Live Bidding & Subscription Tracker | IPOSETU',
                'description' => 'View all SME IPOs currently open for subscription today with real-time bidding numbers, issue prices, and application links.'
            ],
            'sme/closed' => [
                'title' => 'Closed SME IPOs – Allotment Dates & Listing Estimates | IPOSETU',
                'description' => 'Review recently closed SME public offerings awaiting share allotment and exchange listing on BSE SME or NSE Emerge.'
            ],
            'sme/gmp' => [
                'title' => 'SME IPO GMP Today – Live Grey Market Premium & Returns | IPOSETU',
                'description' => 'Track daily Grey Market Premium (GMP) movements for all active SME IPOs to gauge expected listing premiums and market sentiments.'
            ],
            'sme/guide' => [
                'title' => 'SME IPO Guide – How to Invest in NSE Emerge & BSE SME | IPOSETU',
                'description' => 'Comprehensive beginner\'s guide to SME IPO investing: lot size requirements, liquidity risks, post-listing migration, and tax rules.'
            ],
            // Tools & Calculators
            'tools/sip-calculator' => [
                'title' => 'SIP Calculator Online – Mutual Fund Compounding Returns | IPOSETU',
                'description' => 'Calculate compounding returns on monthly Systematic Investment Plans (SIP) with visual wealth gain charts and maturity breakdowns.'
            ],
            'tools/cagr-calculator' => [
                'title' => 'CAGR Calculator Online – Compound Annual Growth Rate | IPOSETU',
                'description' => 'Free online CAGR calculator to measure Compound Annual Growth Rate of your stock, mutual fund, or real estate investments.'
            ],
            'tools/ipo-calculator' => [
                'title' => 'IPO Investment Calculator – Margin & Lot Value Forecast | IPOSETU',
                'description' => 'Estimate total capital requirement, retail lot cost, and maximum bidding capacity across multiple application categories on IPOSETU.'
            ],
            'tools/listing-gain-calculator' => [
                'title' => 'IPO Listing Gain Calculator – Forecast GMP & Allotment Profit | IPOSETU',
                'description' => 'Forecast your listing day profit based on Grey Market Premium (GMP), allotted share quantity, and expected opening prices.'
            ],
            'tools/brokerage-calculator' => [
                'title' => 'Brokerage Calculator – Calculate Delivery, Intraday & F&O Charges | IPOSETU',
                'description' => 'Calculate exact brokerage fees, STT, exchange turnover fees, SEBI charges, and GST across Zerodha, Groww, Angel One, and Upstox.'
            ],
            // News & Market Insights
            'news' => [
                'title' => 'Latest Stock Market News, IPO Updates & Financial Insights | IPOSETU',
                'description' => 'Breaking Indian financial market news, IPO debut updates, regulatory circulars, and quarterly earnings analysis on IPOSETU.'
            ],
            // Stock Brokers Section
            'brokers' => [
                'title' => 'Best Stock Brokers in India 2026 – Reviews & Comparison | IPOSETU',
                'description' => 'Compare top discount and full-service stock brokers in India. Review brokerage rates, trading platforms, demat account opening, and IPO features.'
            ],
            'brokers/zerodha' => [
                'title' => 'Zerodha Review 2026 – Kite –App, Charges, Margin & IPO Bidding | IPOSETU',
                'description' => 'In-depth Zerodha review: account opening charges, Kite –platform features, Coin mutual funds, UPI IPO application facility, and brokerage fee.'
            ],
            'brokers/groww' => [
                'title' => 'Groww Review 2026 – Demat Account, Charges & IPO Features | IPOSETU',
                'description' => 'Complete Groww review covering zero maintenance charges, stock trading app experience, mutual fund SIPs, and one-click IPO applications.'
            ],
            'brokers/angel-one' => [
                'title' => 'Angel One Review 2026 – Super App, ARQ Prime & Brokerage | IPOSETU',
                'description' => 'Detailed Angel One review. Discover smart recommendations, zero delivery brokerage, margin trade funding, and instant IPO bidding.'
            ],
            'brokers/upstox' => [
                'title' => 'Upstox Review 2026 – Pro Trading Platform, Charges & Tools | IPOSETU',
                'description' => 'Explore Upstox Pro web and mobile app features, brokerage plans, margin rules, and comprehensive IPO application tools.'
            ],
            'brokers/prostocks' => [
                'title' => 'ProStocks Review 2026 – Unlimited Flat Monthly Brokerage | IPOSETU',
                'description' => 'Review ProStocks flat monthly unlimited trading plans for active intraday and F&O traders with ultra-low transaction overheads.'
            ],
            // Stocks Section
            'stocks' => [
                'title' => 'Stock Market Overview – NSE & BSE Live Company Tracking | IPOSETU',
                'description' => 'Explore Indian stock market trends, 52-week high/low breakouts, top gainers, most active shares, and corporate action updates.'
            ],
            'stocks/gainers' => [
                'title' => 'Top Stock Gainers Today – NSE & BSE Daily Winners | IPOSETU',
                'description' => 'Real-time list of today\'s top gaining stocks on NSE and BSE with percentage rally, trading volumes, and 52-week range.'
            ],
            'stocks/losers' => [
                'title' => 'Top Stock Losers Today – NSE & BSE Declining Shares | IPOSETU',
                'description' => 'Track today\'s top losing shares across Nifty 50 and Sensex benchmarks with volume breakdown and sector trends.'
            ],
            // Mutual Funds Section
            'mutual-funds' => [
                'title' => 'Mutual Funds India – Top Schemes, NAV & Performance Ratings | IPOSETU',
                'description' => 'Compare top-performing equity, debt, hybrid, and index mutual funds in India. Analyze 1Y, 3Y, 5Y historical returns and expense ratios.'
            ],
            // Learn Section
            'learn' => [
                'title' => 'IPO & Stock Learning Center – Investor Education & Guides | IPOSETU',
                'description' => 'Master financial markets with beginner guides on IPO applications, ASBA, stock fundamentals, mutual fund compounding, and risk management.'
            ]
        ];

        return $seoMap[$cleanPath] ?? null;
    }
}

if (!function_exists('iposetu_render_head_seo')) {
    function iposetu_render_head_seo($pageMeta = []) {
        $defaults = iposetu_get_page_seo_defaults();
        
        $title = $pageMeta['title'] ?? ($defaults['title'] ?? IPOSETU_DEFAULT_TITLE);
        $description = $pageMeta['description'] ?? ($defaults['description'] ?? IPOSETU_DEFAULT_DESCRIPTION);
        $canonical = $pageMeta['canonical'] ?? iposetu_get_canonical_url();
        $robots = $pageMeta['robots'] ?? 'index, follow';
        
        // Prevent thin internal search or filter query URLs from cluttering index
        if (!empty($_GET['q']) || !empty($_GET['search']) || !empty($_GET['filter'])) {
            $robots = 'noindex, follow';
        }
        
        $ogType = $pageMeta['og_type'] ?? 'website';
        $ogImage = $pageMeta['og_image'] ?? IPOSETU_DEFAULT_OG_IMAGE;
        
        // Sanitize for security
        $safeTitle = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
        $safeDescription = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
        $safeCanonical = htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8');
        $safeRobots = htmlspecialchars($robots, ENT_QUOTES, 'UTF-8');
        $safeOgImage = htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8');
        $safeSiteName = htmlspecialchars(IPOSETU_SITE_NAME, ENT_QUOTES, 'UTF-8');

        $html = "\n<!-- ===== Production SEO System (IPOSETU) ===== -->\n";
        $html .= "<meta name=\"robots\" content=\"{$safeRobots}\">\n";
        $html .= "<link rel=\"canonical\" href=\"{$safeCanonical}\">\n";

        // Open Graph Metadata
        $html .= "<meta property=\"og:site_name\" content=\"{$safeSiteName}\">\n";
        $html .= "<meta property=\"og:type\" content=\"{$ogType}\">\n";
        $html .= "<meta property=\"og:title\" content=\"{$safeTitle}\">\n";
        $html .= "<meta property=\"og:description\" content=\"{$safeDescription}\">\n";
        $html .= "<meta property=\"og:url\" content=\"{$safeCanonical}\">\n";
        $html .= "<meta property=\"og:image\" content=\"{$safeOgImage}\">\n";
        $html .= "<meta property=\"og:locale\" content=\"" . IPOSETU_DEFAULT_LOCALE . "\">\n";

        // Twitter / X Card Metadata
        $html .= "<meta name=\"twitter:card\" content=\"summary_large_image\">\n";
        $html .= "<meta name=\"twitter:site\" content=\"" . IPOSETU_TWITTER_HANDLE . "\">\n";
        $html .= "<meta name=\"twitter:title\" content=\"{$safeTitle}\">\n";
        $html .= "<meta name=\"twitter:description\" content=\"{$safeDescription}\">\n";
        $html .= "<meta name=\"twitter:image\" content=\"{$safeOgImage}\">\n";

        // Core Structured Data: WebSite Schema (with working SearchAction)
        $siteSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => IPOSETU_SITE_NAME,
            'url' => IPOSETU_SITE_URL . '/',
            'description' => IPOSETU_DEFAULT_DESCRIPTION,
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => IPOSETU_SITE_URL . '/search?q={search_term_string}',
                'query-input' => 'required name=search_term_string'
            ]
        ];

        // Organization Schema
        $orgSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => IPOSETU_ORG_NAME,
            'legalName' => IPOSETU_ORG_LEGAL_NAME,
            'url' => IPOSETU_SITE_URL . '/',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => IPOSETU_ORG_LOGO
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'email' => IPOSETU_ORG_EMAIL,
                'contactType' => 'customer support'
            ],
            'sameAs' => array_filter([
                IPOSETU_SOCIAL_TWITTER,
                IPOSETU_SOCIAL_LINKEDIN,
                IPOSETU_SOCIAL_YOUTUBE
            ])
        ];

        $html .= "<script type=\"application/ld+json\">\n" . json_encode($siteSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n</script>\n";
        $html .= "<script type=\"application/ld+json\">\n" . json_encode($orgSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n</script>\n";

        // Any custom schema passed from calling template
        if (!empty($pageMeta['schema']) && is_array($pageMeta['schema'])) {
            $html .= "<script type=\"application/ld+json\">\n" . json_encode($pageMeta['schema'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n</script>\n";
        }

        $html .= "<!-- ===== End SEO System ===== -->\n";
        return $html;
    }
}

if (!function_exists('iposetu_get_breadcrumbs')) {
    function iposetu_get_breadcrumbs() {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $path = strtok($uri, '?');
        $cleanPath = trim(preg_replace('#^/iposetu#', '', $path), '/');

        if ($cleanPath === '' || $cleanPath === 'index.php' || $cleanPath === 'index') {
            return []; // No breadcrumbs on homepage
        }

        $namesMap = [
            'ipo' => 'Mainboard IPO',
            'sme' => 'SME IPO',
            'tools' => 'Investment Tools',
            'learn' => 'Learning Center',
            'news' => 'Market News',
            'calendar' => 'IPO Calendar',
            'allotment' => 'Allotment Status',
            'current' => 'Current IPOs',
            'upcoming' => 'Upcoming IPOs',
            'open' => 'Open Issues',
            'closed' => 'Closed Issues',
            'listed' => 'Listed Issues',
            'performance' => 'Performance',
            'reviews' => 'Reviews',
            'ratings' => 'Ratings',
            'faqs' => 'FAQs',
            'guide' => 'IPO Guide',
            'gmp' => 'Grey Market Premium',
            'sip-calculator' => 'SIP Calculator',
            'cagr-calculator' => 'CAGR Calculator',
            'ipo-calculator' => 'IPO Calculator',
            'listing-gain-calculator' => 'Listing Gain Calculator',
            'brokerage-calculator' => 'Brokerage Calculator',
            'about' => 'About Us',
            'contact' => 'Contact Us',
            'brokers' => 'Stock Brokers',
            'stocks' => 'Stock Markets',
            'mutual-funds' => 'Mutual Funds'
        ];

        $crumbs = [];
        $crumbs[] = [
            'name' => 'Home',
            'url' => IPOSETU_SITE_URL . '/'
        ];

        $segments = explode('/', $cleanPath);
        $runningPath = '';

        foreach ($segments as $index => $segment) {
            $segmentClean = preg_replace('/\.(php|html)$/i', '', $segment);
            if (empty($segmentClean)) continue;

            $runningPath .= '/' . $segmentClean;
            $isLast = ($index === count($segments) - 1);

            $label = $namesMap[$segmentClean] ?? ucwords(str_replace('-', ' ', $segmentClean));

            $crumbs[] = [
                'name' => $label,
                'url' => IPOSETU_SITE_URL . $runningPath,
                'is_current' => $isLast
            ];
        }

        return $crumbs;
    }
}

if (!function_exists('iposetu_render_breadcrumbs_html')) {
    function iposetu_render_breadcrumbs_html() {
        $crumbs = iposetu_get_breadcrumbs();
        if (count($crumbs) <= 1) {
            return '';
        }

        // Generate JSON-LD BreadcrumbList
        $itemListElement = [];
        foreach ($crumbs as $pos => $crumb) {
            $itemListElement[] = [
                '@type' => 'ListItem',
                'position' => $pos + 1,
                'name' => $crumb['name'],
                'item' => $crumb['url']
            ];
        }

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $itemListElement
        ];

        $html = "\n<!-- Visual Breadcrumbs UI & BreadcrumbList Schema -->\n";
        $html .= "<nav class=\"iposetu-breadcrumb-nav\" aria-label=\"Breadcrumb\" style=\"background:#f8fafc; border-bottom:1px solid #e2e8f0; padding:10px 0;\">\n";
        $html .= "  <div class=\"container\" style=\"display:flex; align-items:center; gap:8px; font-size:12.5px; color:#64748b; flex-wrap:wrap;\">\n";

        foreach ($crumbs as $index => $crumb) {
            if ($index > 0) {
                $html .= "    <span class=\"breadcrumb-separator\" style=\"color:#cbd5e1;\">/</span>\n";
            }
            if (!empty($crumb['is_current'])) {
                $html .= "    <span class=\"breadcrumb-current\" aria-current=\"page\" style=\"font-weight:700; color:#0f172a;\">" . htmlspecialchars($crumb['name']) . "</span>\n";
            } else {
                $html .= "    <a href=\"" . htmlspecialchars($crumb['url']) . "\" class=\"breadcrumb-link\" style=\"color:#2563eb; text-decoration:none; font-weight:500;\">" . htmlspecialchars($crumb['name']) . "</a>\n";
            }
        }

        $html .= "  </div>\n";
        $html .= "</nav>\n";
        $html .= "<script type=\"application/ld+json\">\n" . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n</script>\n";

        return $html;
    }
}
