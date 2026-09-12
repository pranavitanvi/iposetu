<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Current IPOs in India – Active Issues &amp; Subscription Status | IPOSETU</title>
<meta name="description" content="List of currently active Mainboard IPOs accepting applications. Track live subscription figures, cutoff prices, and allotment timelines on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<style>
    .animated-card {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 20px;
        display: block;
        text-decoration: none;
        color: inherit;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }
    .animated-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 24px -10px rgba(0, 0, 0, 0.15);
        border-color: #cbd5e1;
    }
    .animated-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: transparent;
        transition: background 0.3s ease;
    }
    .card-mainboard:hover::before { background: #3b82f6; }
    .card-sme:hover::before { background: #8b5cf6; }

    .grid-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        margin-bottom: 40px;
    }
    @media (max-width: 768px) {
        .grid-container { grid-template-columns: 1fr; }
    }

    /* FAQ accordion */
    .faq-item {
        background: white;
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        margin-bottom: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        overflow: hidden;
        transition: box-shadow 0.2s;
    }
    .faq-item:hover { box-shadow: 0 4px 16px rgba(0,0,0,0.08); }
    .faq-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 24px;
        cursor: pointer;
        user-select: none;
        gap: 16px;
    }
    .faq-question { font-weight: 700; font-size: 16px; color: #1e293b; flex: 1; }
    .faq-icon {
        flex-shrink: 0;
        width: 32px; height: 32px;
        background: #f1f5f9;
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        transition: background 0.2s, transform 0.3s;
    }
    .faq-item.open .faq-icon { background: #eff6ff; transform: rotate(180deg); }
    .faq-icon svg { stroke: #64748b; transition: stroke 0.2s; }
    .faq-item.open .faq-icon svg { stroke: #3b82f6; }
    .faq-body {
        display: none;
        padding: 0 24px 20px;
        border-top: 1px dashed #e2e8f0;
        font-size: 15px;
        color: #475569;
        line-height: 1.7;
    }
    .faq-item.open .faq-body { display: block; }
</style>

<div class="container" style="padding-top: 60px; padding-bottom: 40px;">

<div id="header-flex-container" style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 40px;">
    <div style="flex: 1; min-width: 300px;">
        <h1 style="font-size: 36px; font-weight: 800; margin-bottom: 12px; color: #0f172a;">Current IPOs in India</h1>
        <p style="color:#475569; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 16px;">Current IPOs are public issues that are actively progressing through the IPO cycle, including IPOs that are currently open for subscription and recently announced issues that are moving toward their opening dates. This page helps investors keep track of the latest IPO activity in the Indian primary market and understand where each IPO currently stands.</p>
        <p style="color:#475569; font-size:16px; line-height:1.6; max-width:800px; margin-bottom: 24px;">A current IPO can be at different stages of its journey. Some companies may have announced their IPO dates and price bands, while others may already be accepting applications from investors. During this period, investors can follow important information such as the IPO price band, issue size, lot size, subscription figures, GMP, allotment schedule and expected listing date.</p>
    </div>

    <div style="flex-shrink: 0; width: 320px; background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05);">
        <h3 style="font-size: 13px; font-weight: 800; color: #94a3b8; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">Live Market Pulse</h3>
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px;">
            <div style="color: #475569; font-weight: 600; font-size: 14px;">Active Issues</div>
            <div style="font-weight: 800; font-size: 18px; color: #0f172a;">14</div>
        </div>
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px;">
            <div style="color: #475569; font-weight: 600; font-size: 14px;">Est. Fund Raise</div>
            <div style="font-weight: 800; font-size: 16px; color: #10b981;">₹4,250 Cr</div>
        </div>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div style="color: #475569; font-weight: 600; font-size: 14px;">Overall Sentiment</div>
            <div style="font-weight: 800; font-size: 14px; background: #dcfce7; color: #166534; padding: 4px 10px; border-radius: 6px;">BULLISH</div>
        </div>
    </div>
</div>

<!-- IPO Cards Grid -->
<div style="margin-top: 40px;">
    <h2 style="font-size: 20px; font-weight: 800; margin-bottom: 24px; border-left: 4px solid #3b82f6; padding-left: 12px;">OPEN MAINBOARD IPOs</h2>
    <div class="grid-container">

        <div class="animated-card card-mainboard">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;">
                <span style="background:#dcfce7; color:#166534; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:800;">OPEN</span>
                <span style="color:#64748b; font-size:12px; font-weight:600;">Closes 18 Aug</span>
            </div>
            <h3 style="font-size:18px; font-weight:800; margin-bottom:16px; color:#0f172a;">Company Beta 1 Ltd</h3>
            <div style="display:flex; gap:24px; margin-bottom:8px;">
                <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Issue Size</div><div style="font-weight:700; font-size:14px;">₹620 Cr</div></div>
                <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Price Band</div><div style="font-weight:700; font-size:14px;">₹130–₹140</div></div>
            </div>
            <div style="margin-top:16px; padding-top:16px; border-top:1px dashed #e2e8f0; display:flex; justify-content:space-between;">
                <div style="font-size:12px; color:#64748b;">GMP: <strong style="color:#10b981;">+₹20 (14%)</strong></div>
                <div style="font-size:12px; color:#64748b;">Sub: <strong>3.5x</strong></div>
            </div>
        </div>

        <div class="animated-card card-mainboard">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;">
                <span style="background:#dcfce7; color:#166534; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:800;">OPEN</span>
                <span style="color:#64748b; font-size:12px; font-weight:600;">Closes 18 Aug</span>
            </div>
            <h3 style="font-size:18px; font-weight:800; margin-bottom:16px; color:#0f172a;">Company Beta 2 Ltd</h3>
            <div style="display:flex; gap:24px; margin-bottom:8px;">
                <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Issue Size</div><div style="font-weight:700; font-size:14px;">₹740 Cr</div></div>
                <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Price Band</div><div style="font-weight:700; font-size:14px;">₹140–₹150</div></div>
            </div>
            <div style="margin-top:16px; padding-top:16px; border-top:1px dashed #e2e8f0; display:flex; justify-content:space-between;">
                <div style="font-size:12px; color:#64748b;">GMP: <strong style="color:#10b981;">+₹25 (16%)</strong></div>
                <div style="font-size:12px; color:#64748b;">Sub: <strong>7.0x</strong></div>
            </div>
        </div>

        <div class="animated-card card-mainboard">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;">
                <span style="background:#dcfce7; color:#166534; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:800;">OPEN</span>
                <span style="color:#64748b; font-size:12px; font-weight:600;">Closes 18 Aug</span>
            </div>
            <h3 style="font-size:18px; font-weight:800; margin-bottom:16px; color:#0f172a;">Company Beta 3 Ltd</h3>
            <div style="display:flex; gap:24px; margin-bottom:8px;">
                <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Issue Size</div><div style="font-weight:700; font-size:14px;">₹860 Cr</div></div>
                <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Price Band</div><div style="font-weight:700; font-size:14px;">₹150–₹160</div></div>
            </div>
            <div style="margin-top:16px; padding-top:16px; border-top:1px dashed #e2e8f0; display:flex; justify-content:space-between;">
                <div style="font-size:12px; color:#64748b;">GMP: <strong style="color:#10b981;">+₹30 (18%)</strong></div>
                <div style="font-size:12px; color:#64748b;">Sub: <strong>10.5x</strong></div>
            </div>
        </div>

        <div class="animated-card card-mainboard">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;">
                <span style="background:#dcfce7; color:#166534; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:800;">OPEN</span>
                <span style="color:#64748b; font-size:12px; font-weight:600;">Closes 18 Aug</span>
            </div>
            <h3 style="font-size:18px; font-weight:800; margin-bottom:16px; color:#0f172a;">Company Beta 4 Ltd</h3>
            <div style="display:flex; gap:24px; margin-bottom:8px;">
                <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Issue Size</div><div style="font-weight:700; font-size:14px;">₹980 Cr</div></div>
                <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Price Band</div><div style="font-weight:700; font-size:14px;">₹160–₹170</div></div>
            </div>
            <div style="margin-top:16px; padding-top:16px; border-top:1px dashed #e2e8f0; display:flex; justify-content:space-between;">
                <div style="font-size:12px; color:#64748b;">GMP: <strong style="color:#10b981;">+₹35 (20%)</strong></div>
                <div style="font-size:12px; color:#64748b;">Sub: <strong>14.0x</strong></div>
            </div>
        </div>

        <div class="animated-card card-mainboard">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;">
                <span style="background:#dcfce7; color:#166534; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:800;">OPEN</span>
                <span style="color:#64748b; font-size:12px; font-weight:600;">Closes 18 Aug</span>
            </div>
            <h3 style="font-size:18px; font-weight:800; margin-bottom:16px; color:#0f172a;">Company Beta 5 Ltd</h3>
            <div style="display:flex; gap:24px; margin-bottom:8px;">
                <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Issue Size</div><div style="font-weight:700; font-size:14px;">₹1,100 Cr</div></div>
                <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Price Band</div><div style="font-weight:700; font-size:14px;">₹170–₹180</div></div>
            </div>
            <div style="margin-top:16px; padding-top:16px; border-top:1px dashed #e2e8f0; display:flex; justify-content:space-between;">
                <div style="font-size:12px; color:#64748b;">GMP: <strong style="color:#10b981;">+₹28 (15%)</strong></div>
                <div style="font-size:12px; color:#64748b;">Sub: <strong>5.2x</strong></div>
            </div>
        </div>

        <div class="animated-card card-sme">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;">
                <span style="background:#ede9fe; color:#5b21b6; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:800;">OPEN SME</span>
                <span style="color:#64748b; font-size:12px; font-weight:600;">Closes 19 Aug</span>
            </div>
            <h3 style="font-size:18px; font-weight:800; margin-bottom:16px; color:#0f172a;">Alpha Tech 2 SME</h3>
            <div style="display:flex; gap:24px; margin-bottom:8px;">
                <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Issue Size</div><div style="font-weight:700; font-size:14px;">₹50 Cr</div></div>
                <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Price</div><div style="font-weight:700; font-size:14px;">₹90</div></div>
            </div>
            <div style="margin-top:16px; padding-top:16px; border-top:1px dashed #e2e8f0; display:flex; justify-content:space-between;">
                <div style="font-size:12px; color:#64748b;">GMP: <strong style="color:#10b981;">+₹30 (33%)</strong></div>
                <div style="font-size:12px; color:#64748b;">Sub: <strong>31.0x</strong></div>
            </div>
        </div>

        <div class="animated-card card-sme">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;">
                <span style="background:#ede9fe; color:#5b21b6; padding:4px 10px; border-radius:12px; font-size:11px; font-weight:800;">OPEN SME</span>
                <span style="color:#64748b; font-size:12px; font-weight:600;">Closes 19 Aug</span>
            </div>
            <h3 style="font-size:18px; font-weight:800; margin-bottom:16px; color:#0f172a;">Alpha Tech 3 SME</h3>
            <div style="display:flex; gap:24px; margin-bottom:8px;">
                <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Issue Size</div><div style="font-weight:700; font-size:14px;">₹55 Cr</div></div>
                <div><div style="font-size:11px; color:#64748b; margin-bottom:4px;">Price</div><div style="font-weight:700; font-size:14px;">₹95</div></div>
            </div>
            <div style="margin-top:16px; padding-top:16px; border-top:1px dashed #e2e8f0; display:flex; justify-content:space-between;">
                <div style="font-size:12px; color:#64748b;">GMP: <strong style="color:#10b981;">+₹35 (36%)</strong></div>
                <div style="font-size:12px; color:#64748b;">Sub: <strong>46.5x</strong></div>
            </div>
        </div>

    </div><!-- end grid-container -->
</div><!-- end margin-top:40px -->
</div><!-- end .container -->

<!-- SEO Content Section -->
<section class="seo-content-section" style="padding: 32px 0 0; background: #f8fafc;">
    <div class="container">

        <!-- Section Header -->
        <div style="text-align:center; max-width: 800px; margin: 0 auto 48px;">
            <h2 style="font-size: 36px; font-weight: 800; color: #0f172a; margin-bottom: 16px; letter-spacing: -0.5px;">The Complete Guide to Current IPOs</h2>
            <p style="font-size: 18px; color: #475569; line-height: 1.6;">Everything you need to know about navigating the active primary market, tracking real-time demand, and making informed investment decisions.</p>
        </div>

        <!-- Bento Grid Row 1 -->
        <div style="display: grid; grid-template-columns: 1.5fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div style="background: white; padding: 40px; border-radius: 24px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); position: relative; overflow: hidden;">
                <div style="position:absolute; top:0; right:0; width:150px; height:150px; background:radial-gradient(circle, rgba(59,130,246,0.1) 0%, transparent 70%); border-radius:50%; transform:translate(30%, -30%);"></div>
                <div style="display:flex; align-items:center; gap:12px; margin-bottom:20px;">
                    <div style="width:40px; height:40px; background:#eff6ff; border-radius:10px; display:flex; align-items:center; justify-content:center; color:#3b82f6;">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <h3 style="font-size: 22px; font-weight: 800; color: #0f172a; margin: 0;">Why Are Current IPOs Important?</h3>
                </div>
                <p style="margin-bottom:16px; color:#334155; line-height:1.7;">Tracking current IPOs helps investors understand which companies are entering the public market and what opportunities are currently available. Instead of looking at an IPO only on its opening day, users can follow its complete progress from announcement to subscription, allotment and listing.</p>
                <p style="color:#334155; line-height:1.7;">Current IPO information can also help users compare different issues based on company fundamentals, valuation, issue size, investor demand and market sentiment. By monitoring the active pipeline, you can effectively allocate your capital to the most promising issues rather than locking up funds in mediocre offerings.</p>
            </div>
            <div style="background: linear-gradient(145deg, #1e293b, #0f172a); padding: 36px; border-radius: 24px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); color: white;">
                <h3 style="font-size: 18px; font-weight: 700; color: #f8fafc; margin-bottom: 20px; border-bottom: 1px solid #334155; padding-bottom: 14px;">Essential Checklist Before Applying</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="display:flex; align-items:center; gap:10px; margin-bottom:12px; color:#e2e8f0; font-size:14px;"><div style="background:#dcfce7; color:#16a34a; width:20px; height:20px; border-radius:5px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>IPO opening and closing dates</li>
                    <li style="display:flex; align-items:center; gap:10px; margin-bottom:12px; color:#e2e8f0; font-size:14px;"><div style="background:#dcfce7; color:#16a34a; width:20px; height:20px; border-radius:5px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>Price band and Lot size</li>
                    <li style="display:flex; align-items:center; gap:10px; margin-bottom:12px; color:#e2e8f0; font-size:14px;"><div style="background:#dcfce7; color:#16a34a; width:20px; height:20px; border-radius:5px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>Fresh issue vs Offer for Sale (OFS)</li>
                    <li style="display:flex; align-items:center; gap:10px; margin-bottom:12px; color:#e2e8f0; font-size:14px;"><div style="background:#dcfce7; color:#16a34a; width:20px; height:20px; border-radius:5px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>Company financials and P/E valuation</li>
                    <li style="display:flex; align-items:center; gap:10px; margin-bottom:12px; color:#e2e8f0; font-size:14px;"><div style="background:#dcfce7; color:#16a34a; width:20px; height:20px; border-radius:5px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>QIB &amp; Retail Subscription status</li>
                    <li style="display:flex; align-items:center; gap:10px; color:#e2e8f0; font-size:14px;"><div style="background:#dcfce7; color:#16a34a; width:20px; height:20px; border-radius:5px; display:flex; align-items:center; justify-content:center; flex-shrink:0;"><svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>Grey Market Premium (GMP) trends</li>
                </ul>
            </div>
        </div>

        <!-- Bento Grid Row 2 -->
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 24px; margin-bottom: 48px;">
            <div style="background: white; padding: 28px; border-radius: 20px; border: 1px solid #e2e8f0;">
                <h3 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 12px; display:flex; align-items:center; gap:8px;"><span style="display:block; width:8px; height:8px; background:#f59e0b; border-radius:50%;"></span>Mainboard vs SME Current IPOs</h3>
                <p style="color:#475569; line-height:1.7; font-size:14px;">Mainboard IPOs are large corporations listing on NSE/BSE with a minimum investment of ₹15,000. SME IPOs list on specialized platforms with ₹1 Lakh+ minimum, carrying higher liquidity risk. Both types appear on this page and are clearly labelled.</p>
            </div>
            <div style="background: white; padding: 28px; border-radius: 20px; border: 1px solid #e2e8f0;">
                <h3 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 12px; display:flex; align-items:center; gap:8px;"><span style="display:block; width:8px; height:8px; background:#f59e0b; border-radius:50%;"></span>Tracking the IPO Lifecycle</h3>
                <p style="color:#475569; line-height:1.7; font-size:14px;">The IPO journey moves through: <strong>Announcement → Price Band → Bidding Opens → Subscription → Bidding Closes → Allotment → Demat Credit → Listing.</strong> Missing the UPI mandate approval cutoff can result in rejection.</p>
            </div>
            <div style="background: white; padding: 28px; border-radius: 20px; border: 1px solid #e2e8f0;">
                <h3 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 12px; display:flex; align-items:center; gap:8px;"><span style="display:block; width:8px; height:8px; background:#f59e0b; border-radius:50%;"></span>Decoding Subscription &amp; GMP</h3>
                <p style="color:#475569; line-height:1.7; font-size:14px;">Live subscription data shows QIB, NII, and retail demand. A massive QIB subscription on the final day is the strongest signal of institutional confidence. GMP provides an unofficial market sentiment indicator — but is volatile and unregulated.</p>
            </div>
        </div>

        <!-- FAQ Section -->
        <div style="max-width: 760px; margin: 0 auto;">
            <h3 style="font-size: 26px; font-weight: 800; color: #0f172a; margin-bottom: 8px; text-align: center;">Frequently Asked Questions</h3>
            <p style="text-align:center; color:#64748b; font-size:15px; margin-bottom:32px;">Everything you need to know about current IPOs</p>

            <div class="faq-item">
                <div class="faq-header" onclick="toggleFaq(this)">
                    <span class="faq-question">What exactly is a "Current" IPO?</span>
                    <span class="faq-icon"><svg width="16" height="16" fill="none" stroke-width="2.5" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </div>
                <div class="faq-body">A current IPO refers to an Initial Public Offering that is actively progressing through its issue cycle. It includes IPOs that are open for bidding, issues that have closed and are awaiting allotment, and newly announced issues approaching their subscription period.</div>
            </div>

            <div class="faq-item">
                <div class="faq-header" onclick="toggleFaq(this)">
                    <span class="faq-question">Where can I find detailed financials for these IPOs?</span>
                    <span class="faq-icon"><svg width="16" height="16" fill="none" stroke-width="2.5" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </div>
                <div class="faq-body">Click the "View Details" link for any IPO listed on this page. The detail page shows price band, issue size, historical financials, live subscription data, GMP trends, and official SEBI filings.</div>
            </div>

            <div class="faq-item">
                <div class="faq-header" onclick="toggleFaq(this)">
                    <span class="faq-question">How is subscription data updated?</span>
                    <span class="faq-icon"><svg width="16" height="16" fill="none" stroke-width="2.5" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </div>
                <div class="faq-body">SEBI mandates that stock exchanges publish subscription data at the end of each bidding day. Our platform fetches and displays this data so investors can compare QIB, NII, and retail demand in near real-time during the active subscription window.</div>
            </div>

            <div class="faq-item">
                <div class="faq-header" onclick="toggleFaq(this)">
                    <span class="faq-question">What is the difference between Mainboard and SME current IPOs?</span>
                    <span class="faq-icon"><svg width="16" height="16" fill="none" stroke-width="2.5" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </div>
                <div class="faq-body">Mainboard IPOs are from large corporations listing on NSE/BSE with a minimum application of ₹15,000. SME IPOs are from smaller companies on BSE SME or NSE Emerge, often requiring ₹1 Lakh or more per application, and carry higher liquidity risk. Both types appear together on this page but are clearly labelled.</div>
            </div>

            <div class="faq-item">
                <div class="faq-header" onclick="toggleFaq(this)">
                    <span class="faq-question">Can I apply for multiple IPOs simultaneously?</span>
                    <span class="faq-icon"><svg width="16" height="16" fill="none" stroke-width="2.5" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </div>
                <div class="faq-body">Yes. SEBI allows investors to apply for multiple IPOs at the same time using the ASBA (Application Supported by Blocked Amount) mechanism. Your funds are blocked — not debited — and released if you don't receive an allotment, so capital can be recycled across multiple open issues.</div>
            </div>

        </div><!-- end faq container -->

    </div><!-- end .container -->
</section>

<script>
function toggleFaq(header) {
    var item = header.closest('.faq-item');
    var isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(function(el) { el.classList.remove('open'); });
    if (!isOpen) item.classList.add('open');
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
