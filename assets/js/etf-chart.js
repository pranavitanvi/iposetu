document.addEventListener('DOMContentLoaded', () => {
    try {
        let chart;
        let candlestickSeries;
        const chartContainer = document.getElementById('tv-chart');
        const stockSelector = document.getElementById('stock-selector');

        // UI Elements for Quote
        const uiSymbol = document.getElementById('quote-symbol');
        const uiName = document.getElementById('quote-name');
        const uiLtp = document.getElementById('quote-ltp');
        const uiChange = document.getElementById('quote-change');
        const uiHigh = document.getElementById('quote-high');
        const uiLow = document.getElementById('quote-low');
        const uiBuy = document.getElementById('quote-buy');
        const uiSell = document.getElementById('quote-sell');

        // Name Map
        const nameMap = {
            'NSE_EQ|INF204KB14I2': 'Nifty BeES',
            'NSE_EQ|INF204KB17I5': 'Gold BeES',
            'NSE_EQ|INF204KB15I9': 'Bank BeES',
            'NSE_EQ|INF732E01037': 'Liquid BeES'
        };

        function initChart() {
            chart = LightweightCharts.createChart(chartContainer, {
                width: chartContainer.clientWidth,
                height: chartContainer.clientHeight,
                layout: {
                    backgroundColor: '#ffffff',
                    textColor: '#333',
                },
                grid: {
                    vertLines: { color: '#f1f5f9' },
                    horzLines: { color: '#f1f5f9' },
                },
                crosshair: {
                    mode: LightweightCharts.CrosshairMode.Normal,
                },
                rightPriceScale: {
                    borderColor: '#cbd5e1',
                },
                timeScale: {
                    borderColor: '#cbd5e1',
                    timeVisible: true,
                },
            });

            candlestickSeries = chart.addSeries(LightweightCharts.CandlestickSeries, {
                upColor: '#16a34a',
                downColor: '#dc2626',
                borderVisible: false,
                wickUpColor: '#16a34a',
                wickDownColor: '#dc2626'
            });

            window.addEventListener('resize', () => {
                chart.resize(chartContainer.clientWidth, chartContainer.clientHeight);
            });
        }

        async function loadStockData(instrumentKey) {
            try {
                // Fetch Quote
                const quoteRes = await fetch(`../api/get_stock_quote.php?instrument=${encodeURIComponent(instrumentKey)}`);
                const quoteData = await quoteRes.json();
                
                if (quoteData.status === 'success' && quoteData.data) {
                    const stock = Object.values(quoteData.data)[0];
                    
                    if (stock) {
                        uiSymbol.textContent = stock.symbol || 'SYMBOL';
                        uiName.textContent = nameMap[instrumentKey] || stock.symbol;
                        
                        const ltp = stock.last_price || 0;
                        const change = stock.net_change || 0;
                        const changePct = ((change / (ltp - change)) * 100).toFixed(2);
                        
                        uiLtp.textContent = '₹ ' + ltp.toLocaleString('en-IN', {minimumFractionDigits: 2});
                        
                        uiChange.textContent = `${change > 0 ? '+' : ''}${change.toFixed(2)} (${change > 0 ? '+' : ''}${changePct}%)`;
                        uiChange.className = 'change ' + (change >= 0 ? 'positive' : 'negative');
                        
                        // High/Low from ohlc
                        uiHigh.textContent = stock.ohlc && stock.ohlc.high ? stock.ohlc.high.toFixed(2) : '--';
                        uiLow.textContent = stock.ohlc && stock.ohlc.low ? stock.ohlc.low.toFixed(2) : '--';
                        
                        uiBuy.textContent = stock.total_buy_quantity ? stock.total_buy_quantity.toLocaleString('en-IN') : '--';
                        uiSell.textContent = stock.total_sell_quantity ? stock.total_sell_quantity.toLocaleString('en-IN') : '--';
                    }
                }

                // Fetch Candles
                const candleRes = await fetch(`../api/get_stock_candles.php?instrument=${encodeURIComponent(instrumentKey)}`);
                const candleData = await candleRes.json();

                if (candleData.status === 'success' && candleData.data && candleData.data.candles) {
                    let chartData = [];
                    let lastTime = null;
                    candleData.data.candles.reverse().forEach(c => {
                        const t = c[0].split('T')[0];
                        if (t !== lastTime) {
                            chartData.push({
                                time: t,
                                open: c[1],
                                high: c[2],
                                low: c[3],
                                close: c[4]
                            });
                            lastTime = t;
                        }
                    });
                    candlestickSeries.setData(chartData);
                }

            } catch (e) {
                console.error("Error loading stock data:", e);
                document.getElementById('quote-name').textContent = "DATA ERROR: " + e.message;
            }
        }

        stockSelector.addEventListener('change', (e) => {
            loadStockData(e.target.value);
        });

        // Initialize chart
        initChart();
        loadStockData(stockSelector.value);

    } catch (err) {
        document.getElementById('quote-name').textContent = "INIT ERROR: " + err.message;
        if (err.message.includes('LightweightCharts is not defined')) {
             document.getElementById('quote-name').textContent = "ERROR: TradingView Charts failed to load from CDN. Please disable adblockers.";
        }
    }
});
