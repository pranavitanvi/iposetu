<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Ipo Calculator – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Ipo Calculator on IPOSETU."/>
<link class="style-link" href="/iposetu/assets/css/style.css?v=7.2" rel="stylesheet"/>
<link href="/iposetu/assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/header.php'; ?>

<main class="container">

<div class="calculator-page-header">
    <div style="font-size: 12px; font-weight: 800; color: #64748b; letter-spacing: 0.5px; margin-bottom: 8px;">IPO TOOL</div>
    <h1 class="calculator-page-title">IPO INVESTMENT CALCULATOR</h1>
    <div class="calculator-page-subtitle">Calculate the exact amount required to apply for a specific number of lots in an IPO.</div>
</div>

<div class="calculator-wrapper">
    <div class="calc-grid-2">
        <div>
            <div class="calc-input-group">
                <label class="calc-label">IPO Issue Price (Upper Band)</label>
                <div style="position: relative;">
                    <span style="position: absolute; left: 16px; top: 16px; color: #64748b; font-weight: 700;">₹</span>
                    <input type="number" id="ipo-price" class="calc-input" value="105" style="padding-left: 36px;">
                </div>
            </div>
            <div class="calc-input-group">
                <label class="calc-label">Shares per Lot (Lot Size)</label>
                <input type="number" id="ipo-lot" class="calc-input" value="142">
            </div>
            <div class="calc-input-group">
                <label class="calc-label">Number of Lots</label>
                <input type="number" id="ipo-lots" class="calc-input" value="1">
            </div>
            <div style="font-size: 13px; color: #64748b;">
                * Retail category max limit is usually ₹2,00,000.
            </div>
        </div>
        
        <div>
            <div class="calc-result-box" style="height: 100%; display: flex; flex-direction: column; justify-content: center;">
                <div class="calc-result-title">TOTAL INVESTMENT REQUIRED</div>
                <div id="ipo-total" class="calc-result-value">₹14,910</div>
                
                <div style="margin-top: 32px; padding-top: 24px; border-top: 1px solid #cbd5e1; text-align: left;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                        <span style="font-size: 14px; font-weight: 600; color: #475569;">Total Shares:</span>
                        <span id="ipo-shares" style="font-size: 14px; font-weight: 800; color: #0f172a;">142</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="font-size: 14px; font-weight: 600; color: #475569;">Category:</span>
                        <span id="ipo-cat" style="font-size: 14px; font-weight: 800; color: #10b981;">Retail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function calcIPO() {
    let p = parseFloat(document.getElementById('ipo-price').value)||0;
    let ls = parseFloat(document.getElementById('ipo-lot').value)||0;
    let lots = parseFloat(document.getElementById('ipo-lots').value)||0;
    let shares = ls * lots;
    let total = p * shares;
    document.getElementById('ipo-shares').innerText = shares.toLocaleString('en-IN');
    document.getElementById('ipo-total').innerText = '₹' + total.toLocaleString('en-IN');
    let cat = 'Retail';
    if(total > 200000 && total <= 1000000) cat = 'sNII';
    else if(total > 1000000) cat = 'bNII';
    document.getElementById('ipo-cat').innerText = cat;
}
document.getElementById('ipo-price').addEventListener('input', calcIPO);
document.getElementById('ipo-lot').addEventListener('input', calcIPO);
document.getElementById('ipo-lots').addEventListener('input', calcIPO);
</script>


<div style="margin-top: 60px; padding: 40px 0; border-top: 1px solid #e2e8f0;">
    <h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 24px;">Understanding the IPO Investment Calculator</h2>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        <div>
            <p style="font-size: 16px; color: #475569; line-height: 1.8; margin-bottom: 16px;">
                Calculating your required IPO investment helps you plan your liquidity and optimize your chances of allotment in multiple retail applications. This tool is designed for retail and HNI investors alike. 
            </p>
            <p style="font-size: 16px; color: #475569; line-height: 1.8; margin-bottom: 16px;">
                Financial planning is essential to achieving your goals. Whether you're a seasoned investor or just starting out, using a IPO calculator eliminates the guesswork and provides clear, actionable data.
            </p>
            
            <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin-top: 32px; margin-bottom: 16px;">How does it work?</h3>
            <ul style="padding-left: 20px; color: #475569; font-size: 16px; line-height: 1.8;">
                <li style="margin-bottom: 8px;">Enter your specific investment parameters into the fields above.</li>
                <li style="margin-bottom: 8px;">The calculator uses standard financial formulas to instantly compute the result.</li>
                <li style="margin-bottom: 8px;">Use the dynamic slider to visualize your returns and investment ratio.</li>
                <li>Adjust the values to create multiple "what-if" scenarios for better decision making.</li>
            </ul>
        </div>
        
        <div>
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 32px;">
                <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 20px;">Frequently Asked Questions</h3>
                
                <div style="margin-bottom: 16px; border-bottom: 1px solid #e2e8f0; padding-bottom: 16px;">
                    <h4 style="font-size: 15px; font-weight: 600; color: #0f172a; margin-bottom: 8px;">Is this tool free to use?</h4>
                    <p style="font-size: 14px; color: #64748b; margin: 0; line-height: 1.6;">Yes, all our financial calculators are 100% free and do not require any registration.</p>
                </div>
                
                <div style="margin-bottom: 16px; border-bottom: 1px solid #e2e8f0; padding-bottom: 16px;">
                    <h4 style="font-size: 15px; font-weight: 600; color: #0f172a; margin-bottom: 8px;">How accurate are the results?</h4>
                    <p style="font-size: 14px; color: #64748b; margin: 0; line-height: 1.6;">The results are highly accurate mathematically, but market-linked investments (like IPOs and Mutual Funds) are subject to market risks. Actual returns may vary.</p>
                </div>
                
                <div>
                    <h4 style="font-size: 15px; font-weight: 600; color: #0f172a; margin-bottom: 8px;">Can I save my calculations?</h4>
                    <p style="font-size: 14px; color: #64748b; margin: 0; line-height: 1.6;">Currently, the data is generated in real-time in your browser. You can bookmark this page to easily return later.</p>
                </div>
            </div>
        </div>
    </div>
</div>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/iposetu/includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="/iposetu/assets/js/components.js?v=6.1"></script>
<script src="/iposetu/assets/js/ad-manager.js?v=1.2"></script>
<script src="/iposetu/assets/js/main.js"></script>
</body>
</html>
