<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sip Calculator – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Sip Calculator on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=7.2" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<main class="container">

<div class="calculator-page-header">
    <div style="font-size: 12px; font-weight: 800; color: #64748b; letter-spacing: 0.5px; margin-bottom: 8px;">INVESTMENT TOOL</div>
    <h1 class="calculator-page-title">SIP CALCULATOR</h1>
    <div class="calculator-page-subtitle">Visualize the power of compounding by calculating returns on your monthly SIP investments.</div>
</div>

<div class="calculator-wrapper">
    <div class="calc-input-group" style="display: flex; gap: 24px;">
        <div style="flex: 1;">
            <label class="calc-label">Monthly Investment</label>
            <div style="position: relative;">
                <span style="position: absolute; left: 16px; top: 16px; color: #64748b; font-weight: 700;">₹</span>
                <input type="number" id="sip-monthly" class="calc-input" value="10000" style="padding-left: 36px;">
            </div>
        </div>
        <div style="flex: 1;">
            <label class="calc-label">Expected Return Rate</label>
            <div style="position: relative;">
                <input type="number" id="sip-rate" class="calc-input" value="12">
                <span style="position: absolute; right: 16px; top: 16px; color: #64748b; font-weight: 700;">% p.a.</span>
            </div>
        </div>
        <div style="flex: 1;">
            <label class="calc-label">Time Period</label>
            <div style="position: relative;">
                <input type="number" id="sip-years" class="calc-input" value="10">
                <span style="position: absolute; right: 16px; top: 16px; color: #64748b; font-weight: 700;">Years</span>
            </div>
        </div>
    </div>
    
    <div class="calc-result-box" style="display: flex; justify-content: space-around; margin-top: 40px; text-align: left;">
        <div>
            <div class="calc-result-title">TOTAL INVESTED</div>
            <div id="sip-inv" style="font-size: 32px; font-weight: 800; color: #0f172a;">₹12,00,000</div>
        </div>
        <div style="width: 1px; background: #cbd5e1;"></div>
        <div>
            <div class="calc-result-title">ESTIMATED RETURNS</div>
            <div id="sip-ret" style="font-size: 32px; font-weight: 800; color: #10b981;">₹11,23,391</div>
        </div>
        <div style="width: 1px; background: #cbd5e1;"></div>
        <div>
            <div class="calc-result-title">TOTAL VALUE</div>
            <div id="sip-tot" style="font-size: 32px; font-weight: 800; color: var(--primary-color);">₹23,23,391</div>
        </div>
    </div>
    
    <div style="margin-top: 40px;">
        <div style="display: flex; height: 40px; border-radius: 20px; overflow: hidden;">
            <div id="sip-bar-inv" style="width: 51%; background: #94a3b8; display: flex; align-items: center; justify-content: center; color: white; font-size: 12px; font-weight: 700;">Invested 51%</div>
            <div id="sip-bar-ret" style="width: 49%; background: var(--primary-color); display: flex; align-items: center; justify-content: center; color: white; font-size: 12px; font-weight: 700;">Returns 49%</div>
        </div>
    </div>
</div>
<script>
function calcSIP() {
    let p = parseFloat(document.getElementById('sip-monthly').value)||0;
    let r = parseFloat(document.getElementById('sip-rate').value)||0;
    let y = parseFloat(document.getElementById('sip-years').value)||0;
    let i = r / (12*100);
    let n = y * 12;
    let total = 0;
    if(i === 0) total = p * n;
    else total = p * ((Math.pow(1+i, n) - 1) / i) * (1+i);
    let inv = p * n;
    let ret = total - inv;
    
    document.getElementById('sip-inv').innerText = '₹' + Math.round(inv).toLocaleString('en-IN');
    document.getElementById('sip-ret').innerText = '₹' + Math.round(ret).toLocaleString('en-IN');
    document.getElementById('sip-tot').innerText = '₹' + Math.round(total).toLocaleString('en-IN');
    
    let inv_pct = total > 0 ? (inv/total)*100 : 50;
    let ret_pct = total > 0 ? (ret/total)*100 : 50;
    document.getElementById('sip-bar-inv').style.width = inv_pct + '%';
    document.getElementById('sip-bar-inv').innerText = 'Invested ' + Math.round(inv_pct) + '%';
    document.getElementById('sip-bar-ret').style.width = ret_pct + '%';
    document.getElementById('sip-bar-ret').innerText = 'Returns ' + Math.round(ret_pct) + '%';
}
document.getElementById('sip-monthly').addEventListener('input', calcSIP);
document.getElementById('sip-rate').addEventListener('input', calcSIP);
document.getElementById('sip-years').addEventListener('input', calcSIP);
</script>


<div style="margin-top: 60px; padding: 40px 0; border-top: 1px solid #e2e8f0;">
    <h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 24px;">Understanding the SIP Calculator</h2>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        <div>
            <p style="font-size: 16px; color: #475569; line-height: 1.8; margin-bottom: 16px;">
                A Systematic Investment Plan (SIP) allows you to invest small amounts regularly. Use this calculator to see the magic of compounding over time and plan your long-term wealth creation. 
            </p>
            <p style="font-size: 16px; color: #475569; line-height: 1.8; margin-bottom: 16px;">
                Financial planning is essential to achieving your goals. Whether you're a seasoned investor or just starting out, using a Systematic Investment Plan calculator eliminates the guesswork and provides clear, actionable data.
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

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
