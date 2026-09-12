<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Financial &amp; IPO Glossary – Investment Terms Demystified | IPOSETU</title>
<meta name="description" content="Explore clear, jargon-free definitions for key financial, stock market, and IPO terms including ASBA, GMP, Cut-Off Price, P/E ratio, and NAV."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=6.9" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<style>
    .glossary-card {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 24px;
        transition: transform 0.2s, box-shadow 0.2s, border-color 0.2s;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .glossary-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px -5px rgba(15, 23, 42, 0.08);
        border-color: #cbd5e1;
    }
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<main class="container" style="padding-top: 24px; padding-bottom: 60px;">

<div class="learn-page-header" style="margin-bottom: 36px;">
    <div style="font-size: 12px; font-weight: 800; color: #2563eb; letter-spacing: 0.8px; margin-bottom: 8px;">INVESTOR DICTIONARY</div>
    <h1 class="learn-page-title">FINANCIAL &amp; IPO GLOSSARY</h1>
    <div class="learn-page-subtitle">Understand essential market terminology and jargon explained in simple, plain English.</div>
    
    <div style="max-width: 600px; margin: 24px auto 0;">
        <input type="text" id="glossary-search" class="search-bar-large" placeholder="🔍 Search any term (e.g. ASBA, GMP, P/E, Demat)..." onkeyup="filterGlossary()">
    </div>
</div>

<!-- Responsive 3-Column Grid -->
<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 24px;" id="glossary-grid">
    
    <div class="glossary-card" data-term="asba application supported by blocked amount">
        <div>
            <h3 style="font-size: 22px; font-weight: 800; color: #0f172a; margin-bottom: 4px;">ASBA</h3>
            <div style="font-size: 12px; font-weight: 700; color: #2563eb; margin-bottom: 10px; text-transform: uppercase;">Application Supported by Blocked Amount</div>
            <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 16px;">A mandatory process where your bank creates a temporary block (lien) on your bid money. Funds are debited only if shares are allotted to you.</p>
        </div>
        <a href="<?= BASE_URL ?>learn/asba.php" style="font-size: 13px; font-weight: 700; color: #2563eb; text-decoration: none;">Read Guide →</a>
    </div>

    <div class="glossary-card" data-term="gmp grey market premium">
        <div>
            <h3 style="font-size: 22px; font-weight: 800; color: #0f172a; margin-bottom: 4px;">GMP</h3>
            <div style="font-size: 12px; font-weight: 700; color: #2563eb; margin-bottom: 10px; text-transform: uppercase;">Grey Market Premium</div>
            <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 16px;">The unofficial premium over and above the issue price at which IPO shares trade before being formally listed on stock exchanges.</p>
        </div>
        <a href="<?= BASE_URL ?>learn/gmp.php" style="font-size: 13px; font-weight: 700; color: #2563eb; text-decoration: none;">Read Guide →</a>
    </div>

    <div class="glossary-card" data-term="demat account dematerialised">
        <div>
            <h3 style="font-size: 22px; font-weight: 800; color: #0f172a; margin-bottom: 4px;">Demat Account</h3>
            <div style="font-size: 12px; font-weight: 700; color: #059669; margin-bottom: 10px; text-transform: uppercase;">Dematerialised Account</div>
            <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 16px;">An electronic locker maintained by depositories (NSDL or CDSL) to store your securities, shares, and ETF units in digital form.</p>
        </div>
        <a href="<?= BASE_URL ?>learn/stock-market-guide.php" style="font-size: 13px; font-weight: 700; color: #059669; text-decoration: none;">Read Guide →</a>
    </div>

    <div class="glossary-card" data-term="cut-off price cutoff bidding">
        <div>
            <h3 style="font-size: 22px; font-weight: 800; color: #0f172a; margin-bottom: 4px;">Cut-Off Price</h3>
            <div style="font-size: 12px; font-weight: 700; color: #2563eb; margin-bottom: 10px; text-transform: uppercase;">Final Issue Price Option</div>
            <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 16px;">A bidding option in book-built IPOs allowing retail applicants to agree to purchase shares at whatever final price the company discovers.</p>
        </div>
        <a href="<?= BASE_URL ?>learn/how-to-apply-ipo.php" style="font-size: 13px; font-weight: 700; color: #2563eb; text-decoration: none;">Read Guide →</a>
    </div>

    <div class="glossary-card" data-term="drhp red herring prospectus">
        <div>
            <h3 style="font-size: 22px; font-weight: 800; color: #0f172a; margin-bottom: 4px;">DRHP / RHP</h3>
            <div style="font-size: 12px; font-weight: 700; color: #2563eb; margin-bottom: 10px; text-transform: uppercase;">Draft Red Herring Prospectus</div>
            <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 16px;">The official regulatory document submitted to SEBI containing detailed company disclosures, past financials, risk factors, and promoter records.</p>
        </div>
        <a href="<?= BASE_URL ?>learn/ipo-guide.php" style="font-size: 13px; font-weight: 700; color: #2563eb; text-decoration: none;">Read Guide →</a>
    </div>

    <div class="glossary-card" data-term="aum assets under management">
        <div>
            <h3 style="font-size: 22px; font-weight: 800; color: #0f172a; margin-bottom: 4px;">AUM</h3>
            <div style="font-size: 12px; font-weight: 700; color: #7c3aed; margin-bottom: 10px; text-transform: uppercase;">Assets Under Management</div>
            <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 16px;">The total market value of all investments and client capital that an Asset Management Company (AMC) or mutual fund manages.</p>
        </div>
        <a href="<?= BASE_URL ?>learn/mutual-fund-guide.php" style="font-size: 13px; font-weight: 700; color: #7c3aed; text-decoration: none;">Read Guide →</a>
    </div>

    <div class="glossary-card" data-term="sip systematic investment plan">
        <div>
            <h3 style="font-size: 22px; font-weight: 800; color: #0f172a; margin-bottom: 4px;">SIP</h3>
            <div style="font-size: 12px; font-weight: 700; color: #7c3aed; margin-bottom: 10px; text-transform: uppercase;">Systematic Investment Plan</div>
            <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 16px;">An automated investment mechanism allowing you to invest a fixed sum at recurring calendar intervals to benefit from rupee cost averaging.</p>
        </div>
        <a href="<?= BASE_URL ?>learn/sip-vs-lumpsum.php" style="font-size: 13px; font-weight: 700; color: #7c3aed; text-decoration: none;">Read Guide →</a>
    </div>

    <div class="glossary-card" data-term="cagr compound annual growth rate">
        <div>
            <h3 style="font-size: 22px; font-weight: 800; color: #0f172a; margin-bottom: 4px;">CAGR</h3>
            <div style="font-size: 12px; font-weight: 700; color: #059669; margin-bottom: 10px; text-transform: uppercase;">Compound Annual Growth Rate</div>
            <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 16px;">The geometric progression ratio that provides a constant annual rate of return over a multi-year investment compounding horizon.</p>
        </div>
        <a href="<?= BASE_URL ?>learn/stock-market-guide.php" style="font-size: 13px; font-weight: 700; color: #059669; text-decoration: none;">Read Guide →</a>
    </div>

    <div class="glossary-card" data-term="nav net asset value">
        <div>
            <h3 style="font-size: 22px; font-weight: 800; color: #0f172a; margin-bottom: 4px;">NAV</h3>
            <div style="font-size: 12px; font-weight: 700; color: #7c3aed; margin-bottom: 10px; text-transform: uppercase;">Net Asset Value</div>
            <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 16px;">The market value per unit of a mutual fund scheme, calculated by subtracting liabilities from assets and dividing by outstanding units.</p>
        </div>
        <a href="<?= BASE_URL ?>learn/mutual-fund-guide.php" style="font-size: 13px; font-weight: 700; color: #7c3aed; text-decoration: none;">Read Guide →</a>
    </div>

</div>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
<script>
function filterGlossary() {
    const q = document.getElementById('glossary-search').value.toLowerCase();
    const cards = document.querySelectorAll('#glossary-grid .glossary-card');
    cards.forEach(card => {
        const text = (card.getAttribute('data-term') + ' ' + card.textContent).toLowerCase();
        if (text.includes(q)) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
}
</script>
</body>
</html>
