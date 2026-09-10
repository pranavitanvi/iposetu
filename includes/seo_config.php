<?php
// includes/seo_config.php - Centralized Production SEO Configuration
if (!defined('IPOSETU_SEO_CONFIG_LOADED')) {
    define('IPOSETU_SEO_CONFIG_LOADED', true);

    // Production Domain - Always preferred for Canonical, Sitemaps, OG, and JSON-LD
    $envSiteUrl = getenv('APP_SITE_URL') ?: (getenv('SITE_URL') ?: null);
    if ($envSiteUrl) {
        define('IPOSETU_SITE_URL', rtrim($envSiteUrl, '/'));
    } else {
        // Fallback production domain (never localhost for production SEO canonicals)
        define('IPOSETU_SITE_URL', 'https://iposetu.com');
    }

    define('IPOSETU_SITE_NAME', 'IPOSETU');
    define('IPOSETU_DEFAULT_TITLE', 'IPO Today – Latest Mainboard & SME IPOs, GMP, Allotment & Listing | IPOSETU');
    define('IPOSETU_DEFAULT_DESCRIPTION', 'Track latest Mainboard & SME IPOs in India, real-time GMP, subscription status, allotment dates, stock analytics, and financial calculators on IPOSETU.');
    define('IPOSETU_DEFAULT_OG_IMAGE', IPOSETU_SITE_URL . '/assets/images/og-default.png');
    define('IPOSETU_TWITTER_HANDLE', '@iposetu');
    define('IPOSETU_DEFAULT_LOCALE', 'en_IN');

    // Organization Structured Data Details
    define('IPOSETU_ORG_NAME', 'IPOSETU');
    define('IPOSETU_ORG_LEGAL_NAME', 'IPOSETU Financial Technologies');
    define('IPOSETU_ORG_LOGO', IPOSETU_SITE_URL . '/assets/images/logo.png');
    define('IPOSETU_ORG_EMAIL', 'support@iposetu.com');

    // Social Profiles
    define('IPOSETU_SOCIAL_TWITTER', 'https://twitter.com/iposetu');
    define('IPOSETU_SOCIAL_LINKEDIN', 'https://www.linkedin.com/company/iposetu');
    define('IPOSETU_SOCIAL_YOUTUBE', 'https://www.youtube.com/@iposetu');
}
