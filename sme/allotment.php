<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Allotment – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Allotment on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

    <style>
        .text-container { max-width: 800px; margin: 0 auto; padding: 40px 24px; font-family: 'Inter', sans-serif; line-height: 1.8; color: #334155; }
        .text-container h1 { font-size: 36px; font-weight: 900; color: #0f172a; margin-bottom: 24px; }
        .text-container h2 { font-size: 24px; font-weight: 800; color: #0f172a; margin-top: 40px; margin-bottom: 16px; border-bottom: 1px solid #e2e8f0; padding-bottom: 8px; }
        .text-container h3 { font-size: 18px; font-weight: 700; color: #1e293b; margin-top: 24px; margin-bottom: 12px; }
        .text-container p { margin-bottom: 16px; font-size: 16px; }
        .text-container ul, .text-container ol { margin-bottom: 24px; padding-left: 20px; }
        .text-container li { margin-bottom: 8px; }
    </style>
    <div class="text-container">
        <h1>SME IPO Allotment Process Guide</h1>
        
        <p>The SME IPO allotment process determines how shares are distributed among investors who applied for the public issue. Because SME IPOs are often heavily oversubscribed, receiving an allotment is never guaranteed and is primarily based on a computerized lottery system governed by SEBI regulations.</p>

        <h2>The Backend Flow</h2>
        <p>The allocation process strictly follows a defined sequence of events after the IPO bidding window closes:</p>
        <ol>
            <li><strong>Closes:</strong> The stock exchanges stop accepting ASBA and UPI bids at 5:00 PM on the final day.</li>
            <li><strong>Verification:</strong> The Registrar cleans the data, removing invalid applications, duplicate PAN entries, and failed bank mandates.</li>
            <li><strong>Lottery:</strong> SEBI-approved algorithms execute a randomized draw to determine the winners for oversubscribed issues.</li>
            <li><strong>Settlement:</strong> Funds are either debited (for winners) or unblocked (for losers), and shares are credited to the respective Demat accounts.</li>
        </ol>

        <h2>Lottery Outcomes</h2>
        <h3>Lottery Won (Allotment)</h3>
        <p>If you are selected in the lottery, your bank mandate is triggered. The funds (usually upwards of ₹1.3 Lakhs for SME IPOs) are officially debited from your bank account. Simultaneously, the Registrar instructs the depositories (CDSL or NSDL) to electronically credit the shares to your Demat account.</p>

        <h3>Lottery Lost</h3>
        <p>If your application is not selected, the Registrar sends an instruction to your bank or the UPI sponsor bank to release the hold on your funds. The money never physically left your account; the temporary block is simply removed, allowing you to use those funds again.</p>

        <h2>The Backend Mechanics: ASBA vs UPI</h2>
        <p>There are two primary ways funds are held during the allotment process:</p>
        <ul>
            <li><strong>ASBA (Net Banking):</strong> Applications Supported by Blocked Amount. You apply directly through your bank's portal. The bank puts a strict hold on the funds. ASBA is universally preferred by High Net Worth Individuals (HNIs) due to higher application limits and virtually zero mandate failure rates.</li>
            <li><strong>UPI Mandate (Broker Apps):</strong> You apply via a discount broker, which triggers a UPI mandate request to your UPI app. A third-party sponsor bank holds the funds. UPI mandates have a strict ₹5 Lakh limit for IPOs and occasionally experience technical failure rates due to multiple server handshakes.</li>
        </ul>

        <h2>The Role of the Registrar</h2>
        <p>It is important to note that the Stock Exchange does not decide who gets shares, nor does your broker. The Registrar and Transfer Agent (RTA) makes these decisions. Companies like Link Intime, KFintech, and Bigshare Services are legally appointed by the SME company to manage the entire backend process. They are responsible for executing the SEBI-mandated randomized lottery and sending the final debit/unblock instruction files to NPCI and the banking networks.</p>

        <h2>Troubleshooting Extreme Edge Cases</h2>
        <p>Investors occasionally face issues during the allotment process. Here are common scenarios:</p>
        <ul>
            <li><strong>Mandate Expired but No Allotment Status:</strong> If your UPI mandate expires before the Allotment is finalized, your application becomes legally void. The funds are automatically unblocked, and you are excluded from the lottery.</li>
            <li><strong>Shares Allotted but Not Visible in Demat on Listing Morning:</strong> This usually happens due to a delay in CDSL/NSDL syncing with your broker's front-end UI. The shares exist in your depository; brokers usually execute a bulk sync right before the pre-open session ends.</li>
            <li><strong>Partial Unblocking Failure:</strong> If you applied for multiple lots but only won one, the registrar should debit one lot and unblock the rest. If the bank fails to unblock the remainder, you must manually contact your bank's UPI dispute team with the application number.</li>
            <li><strong>Lottery lost, but funds still blocked:</strong> You should wait 24-48 hours. The UPI mandate expiry will dictate the auto-unblock process.</li>
        </ul>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
