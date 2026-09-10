document.addEventListener('DOMContentLoaded', () => {
    fetchMarketOverview();
    
    // Refresh every 30 seconds
    setInterval(fetchMarketOverview, 30000);
});

async function fetchMarketOverview() {
    try {
        const res = await fetch('../api/get_market_overview.php');
        const json = await res.json();
        
        if (json.status === 'success') {
            const data = json.data;
            
            // Map the API instrument tokens to our DOM IDs
            const map = {
                'NSE_INDEX|Nifty 50': 'nifty50',
                'BSE_INDEX|SENSEX': 'sensex',
                'NSE_INDEX|Nifty Bank': 'banknifty',
                'NSE_INDEX|Nifty IT': 'niftyit'
            };
            
            for (const [token, quote] of Object.entries(data)) {
                if (map[token]) {
                    updateIndexCard(map[token], quote);
                }
            }
        }
    } catch (err) {
        console.error('Failed to fetch market overview:', err);
    }
}

function updateIndexCard(idSuffix, quoteData) {
    const valEl = document.getElementById(`val-${idSuffix}`);
    const changeEl = document.getElementById(`change-${idSuffix}`);
    
    if (!valEl || !changeEl) return;
    
    const ltp = parseFloat(quoteData.last_price);
    const change = parseFloat(quoteData.net_change);
    const close = parseFloat(quoteData.ohlc.close); // Previous close
    
    let pctChange = 0;
    if (close > 0) {
        pctChange = (change / close) * 100;
    } else {
        pctChange = (change / (ltp - change)) * 100; // Fallback
    }
    
    // Format values
    valEl.textContent = ltp.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
    
    const isPositive = change >= 0;
    const sign = isPositive ? '+' : '';
    const formattedChange = `${sign}${change.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 })} (${sign}${pctChange.toFixed(2)}%)`;
    
    // SVG icons
    const upIcon = `<svg fill="none" height="16" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" width="16"><polyline points="18 15 12 9 6 15"></polyline></svg>`;
    const downIcon = `<svg fill="none" height="16" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" width="16"><polyline points="6 9 12 15 18 9"></polyline></svg>`;
    
    changeEl.innerHTML = (isPositive ? upIcon : downIcon) + ' ' + formattedChange;
    changeEl.className = isPositive ? 'val-green' : 'val-red';
}
