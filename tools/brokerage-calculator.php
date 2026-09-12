<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Brokerage Calculator – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Brokerage Calculator on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=7.2" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<style>
    @keyframes fadeUp { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
    
    .market-hero { background: #0f172a; color: white; padding: 60px; border-radius: 24px; margin-bottom: 40px; position: relative; overflow: hidden; margin-top: 40px; }
    .market-hero::after { content: ''; position: absolute; right: -5%; top: -50%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(236,72,153,0.15) 0%, rgba(15,23,42,0) 70%); border-radius: 50%; pointer-events: none; }
    
    .calculator-wrapper { animation: fadeUp 0.6s both; animation-delay: 0.2s; }
</style>

<main class="container" style="margin-bottom: 80px;">

<div class="market-hero">
    <div style="font-size: 12px; font-weight: 700; color: #f472b6; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Investment Tool</div>
    <h1 style="font-size: 42px; font-weight: 900; margin-bottom: 16px; letter-spacing: -1px;">Brokerage Calculator</h1>
    <p style="font-size: 16px; color: #94a3b8; max-width: 600px; line-height: 1.6;">Calculate exact brokerage, STT, exchange transaction charges, and net profit for your trades.</p>
</div>

<div class="calculator-wrapper" style="max-width: 900px; margin: 0 auto; background: white; border: 1px solid #e2e8f0; border-radius: 24px; padding: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.02);">
    <div style="display: flex; gap: 40px;">
        <div style="flex: 1;">
            <div style="display: flex; gap: 16px; margin-bottom: 24px;">
                <div style="flex: 1;">
                    <label class="calc-label">Buy Price</label>
                    <input type="number" id="brk-buy" class="calc-input" value="1000">
                </div>
                <div style="flex: 1;">
                    <label class="calc-label">Sell Price</label>
                    <input type="number" id="brk-sell" class="calc-input" value="1050">
                </div>
            </div>
            <div class="calc-input-group">
                <label class="calc-label">Quantity</label>
                <input type="number" id="brk-qty" class="calc-input" value="100">
            </div>
            
            <div style="display: flex; gap: 12px; margin-top: 24px;">
                <button id="btn-intra" class="btn" style="flex:1; background:var(--primary-color); color:white; border:none; padding:12px; border-radius:8px; font-weight:700;">Intraday</button>
                <button id="btn-deliv" class="btn" style="flex:1; background:#f1f5f9; color:#475569; border:1px solid #cbd5e1; padding:12px; border-radius:8px; font-weight:700;">Delivery</button>
            </div>
        </div>
        
        <div style="flex: 1;">
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px;">
                <h4 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 24px; border-bottom: 1px solid #cbd5e1; padding-bottom: 12px;">CHARGES BREAKDOWN</h4>
                
                <div style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 14px;">
                    <span style="color: #475569;">Turnover</span>
                    <span id="brk-to" style="font-weight: 700; color: #0f172a;">₹2,05,000.00</span>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 14px;">
                    <span style="color: #475569;">Brokerage</span>
                    <span id="brk-brok" style="font-weight: 700; color: #0f172a;">₹40.00</span>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 14px;">
                    <span style="color: #475569;">STT Total</span>
                    <span id="brk-stt" style="font-weight: 700; color: #0f172a;">₹26.00</span>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 14px;">
                    <span style="color: #475569;">Exchange Charges</span>
                    <span id="brk-exc" style="font-weight: 700; color: #0f172a;">₹6.66</span>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 14px;">
                    <span style="color: #475569;">GST (18%)</span>
                    <span id="brk-gst" style="font-weight: 700; color: #0f172a;">₹8.40</span>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 14px;">
                    <span style="color: #475569;">Stamp Duty</span>
                    <span id="brk-stamp" style="font-weight: 700; color: #0f172a;">₹3.00</span>
                </div>
                
                <div style="border-top: 1px dashed #cbd5e1; margin: 16px 0;"></div>
                
                <div style="display: flex; justify-content: space-between; margin-bottom: 16px; font-size: 16px;">
                    <span style="font-weight: 800; color: #0f172a;">Total Charges</span>
                    <span id="brk-charges" style="font-weight: 800; color: #ef4444;">₹84.06</span>
                </div>
                
                <div style="background: #ecfdf5; border: 1px solid #10b981; padding: 16px; border-radius: 8px; display: flex; justify-content: space-between; align-items: center;">
                    <span style="font-weight: 800; color: #065f46; font-size: 14px;">NET PROFIT</span>
                    <span id="brk-net" style="font-weight: 800; color: #10b981; font-size: 24px;">₹4,915.94</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
let mode = 'intraday';

document.getElementById('btn-intra').addEventListener('click', function() {
    mode = 'intraday';
    this.style.background = 'var(--primary-color)'; this.style.color = 'white'; this.style.border = 'none';
    let d = document.getElementById('btn-deliv');
    d.style.background = '#f1f5f9'; d.style.color = '#475569'; d.style.border = '1px solid #cbd5e1';
    calcBrk();
});
document.getElementById('btn-deliv').addEventListener('click', function() {
    mode = 'delivery';
    this.style.background = 'var(--primary-color)'; this.style.color = 'white'; this.style.border = 'none';
    let d = document.getElementById('btn-intra');
    d.style.background = '#f1f5f9'; d.style.color = '#475569'; d.style.border = '1px solid #cbd5e1';
    calcBrk();
});

function calcBrk() {
    let buy = parseFloat(document.getElementById('brk-buy').value)||0;
    let sell = parseFloat(document.getElementById('brk-sell').value)||0;
    let qty = parseFloat(document.getElementById('brk-qty').value)||0;
    
    let to = (buy*qty) + (sell*qty);
    let brok = mode === 'intraday' ? Math.min(to*0.0003, 40) : 0;
    let stt = mode === 'intraday' ? Math.round(sell*qty*0.00025) : Math.round(to*0.001);
    let exc = to * 0.0000325;
    let gst = (brok + exc) * 0.18;
    let stamp = mode === 'intraday' ? Math.round(buy*qty*0.00003) : Math.round(buy*qty*0.00015);
    let charges = brok + stt + exc + gst + stamp;
    let prof = (sell - buy)*qty - charges;
    
    document.getElementById('brk-to').innerText = '₹' + to.toLocaleString('en-IN', {minimumFractionDigits:2, maximumFractionDigits:2});
    document.getElementById('brk-brok').innerText = '₹' + brok.toLocaleString('en-IN', {minimumFractionDigits:2, maximumFractionDigits:2});
    document.getElementById('brk-stt').innerText = '₹' + stt.toLocaleString('en-IN', {minimumFractionDigits:2, maximumFractionDigits:2});
    document.getElementById('brk-exc').innerText = '₹' + exc.toLocaleString('en-IN', {minimumFractionDigits:2, maximumFractionDigits:2});
    document.getElementById('brk-gst').innerText = '₹' + gst.toLocaleString('en-IN', {minimumFractionDigits:2, maximumFractionDigits:2});
    document.getElementById('brk-stamp').innerText = '₹' + stamp.toLocaleString('en-IN', {minimumFractionDigits:2, maximumFractionDigits:2});
    document.getElementById('brk-charges').innerText = '₹' + charges.toLocaleString('en-IN', {minimumFractionDigits:2, maximumFractionDigits:2});
    document.getElementById('brk-net').innerText = '₹' + prof.toLocaleString('en-IN', {minimumFractionDigits:2, maximumFractionDigits:2});
    
    if(prof < 0) {
        document.getElementById('brk-net').style.color = '#ef4444';
        document.getElementById('brk-net').parentElement.style.background = '#fef2f2';
        document.getElementById('brk-net').parentElement.style.borderColor = '#ef4444';
    } else {
        document.getElementById('brk-net').style.color = '#10b981';
        document.getElementById('brk-net').parentElement.style.background = '#ecfdf5';
        document.getElementById('brk-net').parentElement.style.borderColor = '#10b981';
    }
}
document.getElementById('brk-buy').addEventListener('input', calcBrk);
document.getElementById('brk-sell').addEventListener('input', calcBrk);
document.getElementById('brk-qty').addEventListener('input', calcBrk);
</script>


<div style="margin-top: 60px; padding: 40px 0; border-top: 1px solid #e2e8f0;">
    <h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 24px;">Understanding the Brokerage Calculator</h2>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        <div>
            <p style="font-size: 16px; color: #475569; line-height: 1.8; margin-bottom: 16px;">
                Hidden charges can eat into your trading profits. Use our brokerage calculator to estimate your exact break-even point and total charges including STT, GST, and exchange transaction charges. 
            </p>
            <p style="font-size: 16px; color: #475569; line-height: 1.8; margin-bottom: 16px;">
                Financial planning is essential to achieving your goals. Whether you're a seasoned investor or just starting out, using a Brokerage calculator eliminates the guesswork and provides clear, actionable data.
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
