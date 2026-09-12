<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>IPO FAQs – Comprehensive Answers to Common Questions | IPOSETU</title>
<meta name="description" content="Find answers to all frequently asked questions about IPOs, ASBA, UPI mandates, cut-off prices, allotment chances, and listing day rules on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<style>
    .faq-item {
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        background: white;
        margin-bottom: 16px;
        overflow: hidden;
        transition: border-color 0.2s;
    }
    .faq-item:hover {
        border-color: #cbd5e1;
    }
    .faq-question {
        padding: 18px 22px;
        font-size: 15.5px;
        font-weight: 800;
        color: #0f172a;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        background: #f8fafc;
        user-select: none;
    }
    .faq-answer {
        padding: 18px 22px;
        font-size: 14.5px;
        color: #475569;
        line-height: 1.65;
        border-top: 1px solid #f1f5f9;
        background: white;
    }
    .faq-toggle {
        font-size: 12px;
        color: #64748b;
        transition: transform 0.2s;
    }
    .faq-item.open .faq-toggle {
        transform: rotate(180deg);
    }
    .faq-pill {
        background: #f1f5f9;
        color: #475569;
        padding: 6px 16px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 700;
        border: 1px solid transparent;
        cursor: pointer;
        transition: all 0.2s;
    }
    .faq-pill.active, .faq-pill:hover {
        background: #0f172a;
        color: white;
    }
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<main class="container" style="padding-top: 24px;">

<div class="learn-page-header">
    <div style="font-size: 12px; font-weight: 800; color: #2563eb; letter-spacing: 0.8px; margin-bottom: 8px;">KNOWLEDGE BASE</div>
    <h1 class="learn-page-title">FREQUENTLY ASKED IPO QUESTIONS</h1>
    <div class="learn-page-subtitle">Clear, authoritative answers to common questions investors ask before, during, and after applying for an IPO.</div>
    
    <div style="max-width: 650px; margin: 24px auto 0;">
        <input type="text" id="faq-search" class="search-bar-large" placeholder="🔍 Type a question or keyword (e.g. UPI, PAN, allotment, refund)..." onkeyup="filterFaqs()">
    </div>
    
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-top: 20px;">
        <button class="faq-pill active" onclick="filterCategory('all', this)">All Questions</button>
        <button class="faq-pill" onclick="filterCategory('bidding', this)">Bidding &amp; UPI</button>
        <button class="faq-pill" onclick="filterCategory('allotment', this)">Allotment &amp; Refunds</button>
        <button class="faq-pill" onclick="filterCategory('listing', this)">Listing Day</button>
    </div>
</div>

<div style="display: grid; grid-template-columns: 1fr 320px; gap: 40px; margin-bottom: 60px;">
    
    <!-- LEFT: FAQS LIST -->
    <div>
        <div id="faqs-container">

            <div class="faq-item open" data-category="bidding">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>What is the Cut-Off Price, and why should I always select it?</span>
                    <span class="faq-toggle">▲</span>
                </div>
                <div class="faq-answer">
                    In a book-built issue, the price band consists of a floor and a cap price (e.g. ₹480 - ₹500). The cut-off price means you are willing to buy shares at whatever final price the company discovers through bidding. If you bid below the discovered cut-off price, your application is automatically disqualified from allotment. Checking <strong>'Cut-off'</strong> protects your bid from rejection.
                </div>
            </div>

            <div class="faq-item open" data-category="bidding">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>Can I apply for an IPO using multiple Demat accounts with the same PAN?</span>
                    <span class="faq-toggle">▲</span>
                </div>
                <div class="faq-answer">
                    <strong>No.</strong> SEBI regulations mandate that only one application per PAN card is permitted in the Retail category. If you apply from multiple broker accounts using the same PAN, the registrar's software automatically flags the duplicate PAN and <strong>rejects all your applications</strong> for that issue. To increase your odds, apply using separate Demat accounts of family members.
                </div>
            </div>

            <div class="faq-item" data-category="bidding">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>Can I pay from a bank account that belongs to someone else (Third-Party UPI)?</span>
                    <span class="faq-toggle">▼</span>
                </div>
                <div class="faq-answer" style="display: none;">
                    <strong>No.</strong> Third-party applications are strictly barred. The name and PAN on the bank account used for the UPI mandate must exactly match the PAN registered on the Demat/trading account. If there is a mismatch, the bank or registrar will reject the bid.
                </div>
            </div>

            <div class="faq-item" data-category="allotment">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>How does the allotment process work when an IPO is heavily oversubscribed?</span>
                    <span class="faq-toggle">▼</span>
                </div>
                <div class="faq-answer" style="display: none;">
                    Under SEBI retail allocation guidelines, oversubscribed retail portions are distributed via a <strong>computerized lottery system</strong>. Each valid PAN has an equal mathematical probability of winning. Applying for more than 1 lot in the retail category when the issue is oversubscribed does NOT increase your chances—lucky winners get exactly 1 minimum lot.
                </div>
            </div>

            <div class="faq-item" data-category="allotment">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>What should I do if my funds are still blocked after allotment is finalized?</span>
                    <span class="faq-toggle">▼</span>
                </div>
                <div class="faq-answer" style="display: none;">
                    All unallocated funds are scheduled for unblocking on T+2 working days. If your bank has not released the lien by the official refund date, you can raise a ticket directly with your bank's nodal officer or the IPO registrar (e.g. Link Intime, KFintech) quoting your application number and UPI mandate ID.
                </div>
            </div>

            <div class="faq-item" data-category="bidding">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>What is the difference between Retail (RII) and Non-Institutional (NII / HNI) categories?</span>
                    <span class="faq-toggle">▼</span>
                </div>
                <div class="faq-answer" style="display: none;">
                    The <strong>Retail (RII)</strong> category is capped at total application values up to ₹2,00,000. Any bid exceeding ₹2,00,000 is classified under <strong>Non-Institutional Investors (NII)</strong>, split into Small HNI (₹2 Lakh - ₹10 Lakh) and Big HNI (Above ₹10 Lakh), each with designated quota reserves and allotment rules.
                </div>
            </div>

            <div class="faq-item" data-category="listing">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>What time do IPO shares list and start trading on the stock exchange?</span>
                    <span class="faq-toggle">▼</span>
                </div>
                <div class="faq-answer" style="display: none;">
                    On listing day, the <strong>pre-open discovery session</strong> runs from 9:00 AM to 9:45 AM (orders matched by 9:45-10:00 AM). The opening price is determined during this window. Normal secondary market trading begins promptly at <strong>10:00 AM IST</strong> on NSE and BSE.
                </div>
            </div>

            <div class="faq-item" data-category="listing">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>Do I have to sell my allotted shares immediately on listing day?</span>
                    <span class="faq-toggle">▼</span>
                </div>
                <div class="faq-answer" style="display: none;">
                    No. Once shares are credited to your Demat account, they belong completely to you. You can sell all or part of your allotment at 10:00 AM to lock in listing gains, or hold them indefinitely for long-term fundamental compounding.
                </div>
            </div>

        </div>
    </div>

    <!-- RIGHT: STICKY SIDEBAR -->
    <aside>
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; position: sticky; top: 20px;">
            <h4 style="font-size: 14px; font-weight: 800; color: #0f172a; margin-bottom: 16px; text-transform: uppercase; letter-spacing: 0.5px;">Allotment Rules</h4>

            <div style="margin-bottom: 16px; border-bottom: 1px solid #e2e8f0; padding-bottom: 12px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">Retail Rule</div>
                <div style="font-size: 13.5px; font-weight: 600; color: #0f172a;">1 PAN = 1 Bid Max</div>
            </div>

            <div style="margin-bottom: 16px; border-bottom: 1px solid #e2e8f0; padding-bottom: 12px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">Cut-Off Option</div>
                <div style="font-size: 13.5px; font-weight: 600; color: #10b981;">Mandatory for Best Odds</div>
            </div>

            <div style="margin-bottom: 16px; border-bottom: 1px solid #e2e8f0; padding-bottom: 12px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">Mandate Time</div>
                <div style="font-size: 13.5px; font-weight: 600; color: #dc2626;">Before 5 PM on Close Date</div>
            </div>

            <div style="margin-bottom: 24px;">
                <div style="font-size: 12px; color: #64748b; font-weight: 700;">Unblocking Time</div>
                <div style="font-size: 13.5px; font-weight: 600; color: #2563eb;">T+1 / T+2 Working Days</div>
            </div>

            <h4 style="font-size: 14px; font-weight: 800; color: #0f172a; margin-bottom: 12px; text-transform: uppercase; letter-spacing: 0.5px;">Related Guides</h4>
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px;">
                <li><a href="<?= BASE_URL ?>learn/how-to-apply-ipo.php" style="font-size: 13.5px; font-weight: 700; color: #2563eb; text-decoration: none;">How to Apply Step-by-Step →</a></li>
                <li><a href="<?= BASE_URL ?>learn/asba.php" style="font-size: 13.5px; font-weight: 700; color: #2563eb; text-decoration: none;">What is ASBA? →</a></li>
                <li><a href="<?= BASE_URL ?>learn/gmp.php" style="font-size: 13.5px; font-weight: 700; color: #2563eb; text-decoration: none;">Understanding GMP →</a></li>
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
<script>
function toggleFaq(header) {
    const item = header.parentElement;
    const answer = item.querySelector('.faq-answer');
    const toggle = item.querySelector('.faq-toggle');
    
    if (item.classList.contains('open')) {
        item.classList.remove('open');
        answer.style.display = 'none';
        toggle.textContent = '▼';
    } else {
        item.classList.add('open');
        answer.style.display = 'block';
        toggle.textContent = '▲';
    }
}

function filterCategory(cat, btn) {
    document.querySelectorAll('.faq-pill').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');

    const items = document.querySelectorAll('.faq-item');
    items.forEach(item => {
        if (cat === 'all' || item.getAttribute('data-category') === cat) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

function filterFaqs() {
    const q = document.getElementById('faq-search').value.toLowerCase();
    const items = document.querySelectorAll('.faq-item');
    items.forEach(item => {
        const text = item.textContent.toLowerCase();
        if (text.includes(q)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
</script>
</body>
</html>
