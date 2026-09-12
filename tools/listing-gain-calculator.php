<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Listing Gain Calculator – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Listing Gain Calculator on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=7.2" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<main class="container">

<div class="calculator-page-header">
    <div style="font-size: 12px; font-weight: 800; color: #64748b; letter-spacing: 0.5px; margin-bottom: 8px;">IPO TOOL</div>
    <h1 class="calculator-page-title">LISTING GAIN CALCULATOR</h1>
    <div class="calculator-page-subtitle">Estimate your absolute profit and percentage return on listing day based on GMP or actual listing price.</div>
</div>

<div class="calculator-wrapper">
    <div class="calc-grid-2">
        <div>
            <div class="calc-input-group">
                <label class="calc-label">Issue Price</label>
                <div style="position: relative;">
                    <span style="position: absolute; left: 16px; top: 16px; color: #64748b; font-weight: 700;">₹</span>
                    <input type="number" id="lg-issue" class="calc-input" value="105" style="padding-left: 36px;">
                </div>
            </div>
            <div class="calc-input-group">
                <label class="calc-label">Estimated Listing Price (or GMP)</label>
                <div style="position: relative;">
                    <span style="position: absolute; left: 16px; top: 16px; color: #64748b; font-weight: 700;">₹</span>
                    <input type="number" id="lg-list" class="calc-input" value="135" style="padding-left: 36px;">
                </div>
            </div>
            <div class="calc-input-group">
                <label class="calc-label">Shares Allotted</label>
                <input type="number" id="lg-shares" class="calc-input" value="142">
            </div>
        </div>
        
        <div>
            <div class="calc-result-box" style="height: 100%; display: flex; flex-direction: column; justify-content: center; background: #ecfdf5;">
                <div class="calc-result-title">ESTIMATED PROFIT</div>
                <div id="lg-profit" class="calc-result-value" style="color: #059669;">₹4,260</div>
                
                <div style="margin-top: 32px; padding-top: 24px; border-top: 1px solid #a7f3d0; text-align: left;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                        <span style="font-size: 14px; font-weight: 600; color: #065f46;">Total Investment:</span>
                        <span id="lg-inv" style="font-size: 14px; font-weight: 800; color: #064e3b;">₹14,910</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                        <span style="font-size: 14px; font-weight: 600; color: #065f46;">Listing Value:</span>
                        <span id="lg-val" style="font-size: 14px; font-weight: 800; color: #064e3b;">₹19,170</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="font-size: 14px; font-weight: 600; color: #065f46;">Return Percentage:</span>
                        <span id="lg-ret" style="font-size: 14px; font-weight: 800; color: #064e3b;">+28.57%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function calcGain() {
    let issue = parseFloat(document.getElementById('lg-issue').value)||0;
    let list = parseFloat(document.getElementById('lg-list').value)||0;
    let shares = parseFloat(document.getElementById('lg-shares').value)||0;
    let inv = issue * shares;
    let val = list * shares;
    let profit = val - inv;
    let ret = inv > 0 ? (profit/inv)*100 : 0;
    
    document.getElementById('lg-profit').innerText = '₹' + profit.toLocaleString('en-IN');
    document.getElementById('lg-inv').innerText = '₹' + inv.toLocaleString('en-IN');
    document.getElementById('lg-val').innerText = '₹' + val.toLocaleString('en-IN');
    document.getElementById('lg-ret').innerText = (ret>=0?'+':'') + ret.toFixed(2) + '%';
    
    let box = document.querySelector('.calc-result-box');
    if(profit < 0) {
        box.style.background = '#fef2f2';
        document.getElementById('lg-profit').style.color = '#dc2626';
    } else {
        box.style.background = '#ecfdf5';
        document.getElementById('lg-profit').style.color = '#059669';
    }
}
document.getElementById('lg-issue').addEventListener('input', calcGain);
document.getElementById('lg-list').addEventListener('input', calcGain);
document.getElementById('lg-shares').addEventListener('input', calcGain);
</script>


<div style="margin-top: 60px; padding: 40px 0; border-top: 1px solid #e2e8f0;">
    <h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 24px;">Understanding the Listing Gain Calculator</h2>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        <div>
            <p style="font-size: 16px; color: #475569; line-height: 1.8; margin-bottom: 16px;">
                Understanding your potential listing gains based on the Grey Market Premium (GMP) gives you an edge in deciding whether to hold or sell on listing day. 
            </p>
            <p style="font-size: 16px; color: #475569; line-height: 1.8; margin-bottom: 16px;">
                Financial planning is essential to achieving your goals. Whether you're a seasoned investor or just starting out, using a Listing Gain calculator eliminates the guesswork and provides clear, actionable data.
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
