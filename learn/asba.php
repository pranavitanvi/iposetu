<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>What is ASBA? – Application Supported by Blocked Amount Explained | IPOSETU</title>
<meta name="description" content="Learn how ASBA (Application Supported by Blocked Amount) works for IPO bidding. Understand how funds remain in your bank account earning interest until allotment."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<main class="container" style="padding-top: 24px;">

<div class="learn-page-header">
    <div style="font-size: 12px; font-weight: 800; color: #2563eb; letter-spacing: 0.8px; margin-bottom: 8px;">CONCEPT EXPLAINER</div>
    <h1 class="learn-page-title">WHAT IS ASBA IN IPOs?</h1>
    <div class="learn-page-subtitle">Understand how your IPO application amount is securely blocked and released without leaving your bank.</div>
</div>

<div style="display: grid; grid-template-columns: 1fr 320px; gap: 40px; margin-bottom: 60px;">
    
    <!-- LEFT: MAIN CONTENT -->
    <article class="learn-article-content">

        <!-- Flow Visual Card -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px; padding: 32px 24px; margin-bottom: 36px;">
            <div style="font-size: 13px; font-weight: 800; color: #0f172a; text-transform: uppercase; margin-bottom: 20px; text-align: center;">How Funds Move During an ASBA Application</div>
            <div style="display: flex; flex-direction: column; gap: 12px;">
                <div class="money-flow-node"><strong>1. Bank Account</strong><br><span style="font-size:12px; color:#64748b; font-weight:600;">₹15,000 balance available</span></div>
                <div class="money-flow-node"><strong>2. IPO Application Submitted</strong><br><span style="font-size:12px; color:#64748b; font-weight:600;">You place a bid for 1 retail lot at cut-off price</span></div>
                <div class="money-flow-node" style="background:#fffbeb; border-color:#f59e0b;"><strong>3. Amount Blocked (Lien Marked)</strong><br><span style="font-size:12px; color:#b45309; font-weight:600;">₹14,800 is locked in your own bank account (continues earning interest)</span></div>
                <div class="money-flow-node"><strong>4. Allotment Finalization</strong><br><span style="font-size:12px; color:#64748b; font-weight:600;">Registrar conducts computerized allotment</span></div>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 24px;">
                <div style="background:#ecfdf5; border: 2px solid #10b981; border-radius: 12px; padding: 18px; text-align: center; font-weight: 800; color: #065f46;">
                    ALLOTMENT SUCCESSFUL<br>
                    <span style="font-size:12px; font-weight:600; color: #047857;">Shares credited to Demat. Exactly ₹14,800 is debited.</span>
                </div>
                <div style="background:#f1f5f9; border: 2px solid #94a3b8; border-radius: 12px; padding: 18px; text-align: center; font-weight: 800; color: #334155;">
                    NO ALLOTMENT<br>
                    <span style="font-size:12px; font-weight:600; color: #475569;">Lien revoked automatically. Funds unblocked instantly.</span>
                </div>
            </div>
        </div>

        <h2>1. What is ASBA?</h2>
        <p>ASBA stands for <strong>Application Supported by Blocked Amount</strong>. It is a mandatory IPO bidding mechanism designed by the Securities and Exchange Board of India (SEBI). Under ASBA, when you apply for an IPO, your bid money is not debited immediately. Instead, the designated bank simply creates a temporary lien (block) on the required amount in your account.</p>

        <h2>2. Why ASBA Was a Revolutionary Breakthrough</h2>
        <p>Before ASBA was introduced in India, investors had to write physical cheques or submit demand drafts for IPO applications. Funds were debited immediately and kept with the issuing company for weeks. If an investor didn't receive an allotment, they had to wait weeks or months for refund cheques via postal mail, leading to lost interest, postal delays, and frequent fraud.</p>
        <p>ASBA eliminated this entirely. The money stays under your name, in your account, and <strong>continues to accrue savings account interest</strong> until the basis of allotment is finalized.</p>

        <h2>3. Step-by-Step ASBA Workflow</h2>
        <ol style="padding-left: 20px; line-height: 1.8; color: #334155;">
            <li><strong>Application:</strong> You place a bid through your stockbroker (Zerodha, Groww, AngelOne) or bank net banking.</li>
            <li><strong>Lien Authorization:</strong> You approve the UPI mandate or net banking prompt. Your bank places a block on the bid amount.</li>
            <li><strong>Registrar Verification:</strong> The IPO registrar compiles all valid applications and conducts the allotment lottery.</li>
            <li><strong>Debit or Revocation:</strong> If allotted, the blocked funds are transferred to the escrow account and shares appear in your Demat. If not allotted, the registrar sends an unblock instruction to your bank to release the lien.</li>
        </ol>

        <h2>4. UPI ASBA vs. Net Banking ASBA</h2>
        <div style="overflow-x: auto; margin: 24px 0;">
            <table style="width: 100%; border-collapse: collapse; font-size: 14px; text-align: left;">
                <thead>
                    <tr style="background: #f1f5f9; border-bottom: 2px solid #cbd5e1;">
                        <th style="padding: 12px 16px; font-weight: 800; color: #0f172a;">Feature</th>
                        <th style="padding: 12px 16px; font-weight: 800; color: #0f172a;">UPI ASBA</th>
                        <th style="padding: 12px 16px; font-weight: 800; color: #0f172a;">Net Banking ASBA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #e2e8f0;">
                        <td style="padding: 12px 16px; font-weight: 700;">Bid Limit</td>
                        <td style="padding: 12px 16px; color: #475569;">Up to ₹5,00,000 (Retail &amp; sHNI)</td>
                        <td style="padding: 12px 16px; color: #475569;">No upper ceiling (Ideal for bHNI)</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e2e8f0;">
                        <td style="padding: 12px 16px; font-weight: 700;">Platform</td>
                        <td style="padding: 12px 16px; color: #475569;">Broker App + UPI App (GPay/PhonePe)</td>
                        <td style="padding: 12px 16px; color: #475569;">Bank Portal (HDFC, SBI, ICICI, etc.)</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e2e8f0;">
                        <td style="padding: 12px 16px; font-weight: 700;">Third-Party Account</td>
                        <td style="padding: 12px 16px; color: #ef4444; font-weight: 600;">Strictly Not Allowed (PAN mismatch)</td>
                        <td style="padding: 12px 16px; color: #475569;">Allowed up to 5 family bids in some banks</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h2>5. Core Benefits for Retail Investors</h2>
        <ul style="padding-left: 20px; line-height: 1.8; color: #334155;">
            <li><strong>Never lose interest:</strong> Earn bank interest on your blocked capital during the 3-5 day bidding and allotment cycle.</li>
            <li><strong>Instant funds recovery:</strong> When an issue is oversubscribed and you don't receive shares, the block is automatically lifted on T+2 working days.</li>
            <li><strong>SEBI Protection:</strong> All ASBA banks are Self-Certified Syndicate Banks (SCSBs) regulated under stringent compliance guidelines.</li>
        </ul>

    </article>

    <!-- RIGHT: STICKY SIDEBAR -->
    <aside>
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; margin-bottom: 24px; position: sticky; top: 20px;">
            <h4 style="font-size: 14px; font-weight: 800; color: #0f172a; margin-bottom: 16px; text-transform: uppercase; letter-spacing: 0.5px;">ASBA Fast Facts</h4>
            
            <div style="margin-bottom: 16px; border-bottom: 1px solid #e2e8f0; padding-bottom: 12px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">Full Form</div>
                <div style="font-size: 13.5px; font-weight: 600; color: #0f172a;">Application Supported by Blocked Amount</div>
            </div>

            <div style="margin-bottom: 16px; border-bottom: 1px solid #e2e8f0; padding-bottom: 12px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">Governing Regulator</div>
                <div style="font-size: 13.5px; font-weight: 600; color: #0f172a;">SEBI (Securities &amp; Exchange Board of India)</div>
            </div>

            <div style="margin-bottom: 16px; border-bottom: 1px solid #e2e8f0; padding-bottom: 12px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">Max UPI Limit</div>
                <div style="font-size: 13.5px; font-weight: 700; color: #2563eb;">₹5,00,000 per application</div>
            </div>

            <div style="margin-bottom: 24px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">Allotment Timeline</div>
                <div style="font-size: 13.5px; font-weight: 600; color: #10b981;">T+1 / T+2 Days (Unblocking)</div>
            </div>

            <h4 style="font-size: 14px; font-weight: 800; color: #0f172a; margin-bottom: 12px; text-transform: uppercase; letter-spacing: 0.5px;">Related Guides</h4>
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px;">
                <li><a href="<?= BASE_URL ?>learn/how-to-apply-ipo.php" style="font-size: 13.5px; font-weight: 700; color: #2563eb; text-decoration: none;">How to Apply for an IPO →</a></li>
                <li><a href="<?= BASE_URL ?>learn/gmp.php" style="font-size: 13.5px; font-weight: 700; color: #2563eb; text-decoration: none;">Understanding GMP →</a></li>
                <li><a href="<?= BASE_URL ?>learn/ipo-faqs.php" style="font-size: 13.5px; font-weight: 700; color: #2563eb; text-decoration: none;">Common IPO Questions →</a></li>
                <li><a href="<?= BASE_URL ?>learn/index.php" style="font-size: 13.5px; font-weight: 700; color: #475569; text-decoration: none;">← Back to Learning Center</a></li>
            </ul>
        </div>
    </aside>

</div>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
