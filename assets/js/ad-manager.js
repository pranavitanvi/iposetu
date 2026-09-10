// assets/js/ad-manager.js

(function() {
  // ============================================================
  // central ad library configuration
  // ============================================================
  const AD_CREATIVES = [
    {
      id: 'ad-tradex',
      name: 'TradeX Pro',
      category: 'stock',
      offerText: 'Superfast Execution. ₹0 Delivery Brokerage.',
      ctaText: 'Trade Now',
      targetUrl: 'brokers/prostocks.html',
      gradientStart: '#1e3c72',
      gradientEnd: '#2a5298',
      icon: '📈'
    },
    {
      id: 'ad-fundgrow',
      name: 'FundGrow Mutual Funds',
      category: 'mutual-fund',
      offerText: 'Invest in Direct Mutual Funds. ₹0 Commission.',
      ctaText: 'Invest Now',
      targetUrl: 'mutual-funds/index.html',
      gradientStart: '#11998e',
      gradientEnd: '#38ef7d',
      icon: '🌱'
    },
    {
      id: 'ad-apexdemat',
      name: 'ApexDemat Account',
      category: 'demat',
      offerText: 'Open Free Demat Account in just 5 minutes.',
      ctaText: 'Open Account',
      targetUrl: 'brokers/prostocks.html',
      gradientStart: '#00c6ff',
      gradientEnd: '#0072ff',
      icon: '💼'
    },
    {
      id: 'ad-ipohub',
      name: 'IPOHub Platform',
      category: 'ipo',
      offerText: 'Apply to SME & Mainboard IPOs with 1 click.',
      ctaText: 'Apply Now',
      targetUrl: 'ipo/index.html',
      gradientStart: '#f857a6',
      gradientEnd: '#ff5858',
      icon: '🚀'
    },
    {
      id: 'ad-wealthwise',
      name: 'WealthWise App',
      category: 'finance-app',
      offerText: 'Track your entire portfolio: stocks, gold & funds.',
      ctaText: 'Download App',
      targetUrl: 'tools/ipo-calculator.html',
      gradientStart: '#8e2de2',
      gradientEnd: '#4a00e0',
      icon: '📱'
    },
    {
      id: 'ad-bullmarket',
      name: 'BullMarket Analytics',
      category: 'trading',
      offerText: 'Advanced interactive charting & real-time GMP.',
      ctaText: 'Start Charting',
      targetUrl: 'stocks/index.html',
      gradientStart: '#f12711',
      gradientEnd: '#f5af19',
      icon: '🐂'
    }
  ];

  // Escape ampersands in ad names and offer texts for SVG XML compliance
  AD_CREATIVES.forEach(ad => {
    ad.name = ad.name.replace(/&/g, '&amp;');
    ad.offerText = ad.offerText.replace(/&/g, '&amp;');
  });

  // Helper to generate a professional SVG mockup dynamically
  function generateAdSVG(width, height, ad) {
    const isHorizontal = width > height;
    const isMobile = width <= 360;
    
    let svg = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 ${width} ${height}" width="100%" height="100%">
      <defs>
        <linearGradient id="grad-${ad.id}-${width}-${height}" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" style="stop-color:${ad.gradientStart};stop-opacity:1" />
          <stop offset="100%" style="stop-color:${ad.gradientEnd};stop-opacity:1" />
        </linearGradient>
        <style>
          .title { font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-weight: 800; fill: #ffffff; }
          .desc { font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-weight: 500; fill: rgba(255,255,255,0.9); }
          .cta-bg { fill: #ffffff; rx: 20px; transition: fill 0.3s; }
          .cta-text { font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-weight: 700; fill: ${ad.gradientStart}; }
          .icon { font-size: ${height * 0.4}px; }
        </style>
      </defs>
      <rect width="100%" height="100%" fill="url(#grad-${ad.id}-${width}-${height})" rx="8"/>
      <!-- Decorative background elements -->
      <circle cx="${width * 0.9}" cy="${height * 0.2}" r="${height * 0.6}" fill="white" fill-opacity="0.07" />
      <circle cx="${width * 0.1}" cy="${height * 0.8}" r="${height * 0.4}" fill="white" fill-opacity="0.04" />
    `;

    if (isHorizontal) {
      if (isMobile) {
        // Mobile Banner (e.g. 320x100 or 320x50)
        const isVerySmall = height <= 60;
        if (isVerySmall) {
          svg += `
            <text x="12" y="32" class="title" font-size="14">${ad.name}</text>
            <text x="12" y="44" class="desc" font-size="9">${ad.offerText.substring(0, 30)}...</text>
            <rect x="${width - 100}" y="12" width="88" height="26" rx="13" class="cta-bg" />
            <text x="${width - 56}" y="28" class="cta-text" font-size="10" text-anchor="middle">${ad.ctaText}</text>
          `;
        } else {
          svg += `
            <text x="12" y="38" class="title" font-size="16">${ad.name}</text>
            <text x="12" y="60" class="desc" font-size="11">${ad.offerText}</text>
            <rect x="${width - 110}" y="35" width="98" height="30" rx="15" class="cta-bg" />
            <text x="${width - 61}" y="54" class="cta-text" font-size="11" text-anchor="middle">${ad.ctaText}</text>
          `;
        }
      } else {
        // Leaderboard (970x90, 728x90)
        svg += `
          <g transform="translate(24, ${height/2 - 20})">
            <text x="0" y="20" font-size="40" class="icon">${ad.icon}</text>
            <text x="60" y="16" class="title" font-size="22">${ad.name}</text>
            <text x="60" y="36" class="desc" font-size="14">${ad.offerText}</text>
          </g>
          <g transform="translate(${width - 180}, ${height/2 - 20})">
            <rect x="0" y="5" width="150" height="38" rx="19" class="cta-bg" />
            <text x="75" y="29" class="cta-text" font-size="13" font-weight="bold" text-anchor="middle">${ad.ctaText} ↗</text>
          </g>
        `;
      }
    } else {
      // Vertical / Stacked Slots (300x250, 300x600, 970x250)
      if (height >= 500) {
        // Skyscraper (300x600)
        svg += `
          <g transform="translate(150, 100)" text-anchor="middle">
            <text x="0" y="0" font-size="80" class="icon" text-anchor="middle">${ad.icon}</text>
          </g>
          <g transform="translate(20, 240)">
            <text x="130" y="0" class="title" font-size="24" text-anchor="middle">${ad.name}</text>
            <foreignObject x="10" y="30" width="240" height="150">
              <div xmlns="http://www.w3.org/1999/xhtml" style="color: rgba(255,255,255,0.9); font-family: system-ui; font-size: 16px; font-weight: 500; text-align: center; line-height: 1.6;">
                ${ad.offerText}
              </div>
            </foreignObject>
          </g>
          <g transform="translate(50, 480)">
            <rect x="0" y="0" width="200" height="44" rx="22" class="cta-bg" />
            <text x="100" y="27" class="cta-text" font-size="14" font-weight="bold" text-anchor="middle">${ad.ctaText} ↗</text>
          </g>
        `;
      } else {
        // Rectangle (300x250) or Large Banner (e.g. 970x250 - note: 970x250 is horizontal but taller, we can format it differently)
        if (width > 500) {
          // Large Banner (970x250)
          svg += `
            <g transform="translate(48, ${height/2 - 40})">
              <text x="0" y="45" font-size="80" class="icon">${ad.icon}</text>
              <text x="110" y="30" class="title" font-size="32">${ad.name}</text>
              <text x="110" y="65" class="desc" font-size="18">${ad.offerText}</text>
            </g>
            <g transform="translate(${width - 240}, ${height/2 - 25})">
              <rect x="0" y="5" width="180" height="48" rx="24" class="cta-bg" />
              <text x="90" y="34" class="cta-text" font-size="15" font-weight="bold" text-anchor="middle">${ad.ctaText} ↗</text>
            </g>
          `;
        } else {
          // 300x250 Rectangle
          svg += `
            <g transform="translate(150, 55)" text-anchor="middle">
              <text x="0" y="0" font-size="48" class="icon" text-anchor="middle">${ad.icon}</text>
            </g>
            <g transform="translate(15, 110)">
              <text x="135" y="0" class="title" font-size="18" text-anchor="middle">${ad.name}</text>
              <foreignObject x="5" y="16" width="260" height="60">
                <div xmlns="http://www.w3.org/1999/xhtml" style="color: rgba(255,255,255,0.9); font-family: system-ui; font-size: 13px; font-weight: 500; text-align: center; line-height: 1.4;">
                  ${ad.offerText}
                </div>
              </foreignObject>
            </g>
            <g transform="translate(50, 185)">
              <rect x="0" y="0" width="200" height="38" rx="19" class="cta-bg" />
              <text x="100" y="24" class="cta-text" font-size="13" font-weight="bold" text-anchor="middle">${ad.ctaText} ↗</text>
            </g>
          `;
        }
      }
    }

    svg += `</svg>`;
    const base64 = btoa(unescape(encodeURIComponent(svg)));
    return "data:image/svg+xml;base64," + base64;
  }

  // Pre-generate images for the library dynamically
  const AD_LIBRARY = AD_CREATIVES.map(ad => {
    return {
      ...ad,
      images: {
        '970x90': generateAdSVG(970, 90, ad),
        '970x250': generateAdSVG(970, 250, ad),
        '728x90': generateAdSVG(728, 90, ad),
        '300x250': generateAdSVG(300, 250, ad),
        '300x600': generateAdSVG(300, 600, ad),
        '320x100': generateAdSVG(320, 100, ad),
        '320x50': generateAdSVG(320, 50, ad)
      }
    };
  });

  // Assign ads to categories to prevent duplicates
  function getAdByCategory(category, indexOffset = 0) {
    const matches = AD_LIBRARY.filter(ad => ad.category === category);
    if (matches.length > 0) return matches[indexOffset % matches.length];
    return AD_LIBRARY[indexOffset % AD_LIBRARY.length];
  }

  class AdManager {
    constructor() {
      this.rotations = {};
      this.usedAds = {};
    }

    getRelativePrefix() {
      const path = window.location.pathname.toLowerCase();
      const folders = ['ipo', 'mutual-funds', 'stocks', 'tools', 'calendar', 'gmp', 'allotment', 'subscription', 'learn', 'brokers'];
      for (const folder of folders) {
        if (path.includes('/' + folder + '/')) {
          return '../';
        }
      }
      return '';
    }

    resolveUrl(targetUrl) {
      if (!targetUrl) return '#';
      if (targetUrl.startsWith('http://') || targetUrl.startsWith('https://')) {
        return targetUrl;
      }
      return this.getRelativePrefix() + targetUrl;
    }

    // Determine the type of ad and fetch the creative
    getCreativeForSlot(elementId, size) {
      // Prevent duplicates by tracking page allocations
      // We can use a counter based on the element ID
      let hash = 0;
      for (let i = 0; i < elementId.length; i++) {
        hash = elementId.charCodeAt(i) + ((hash << 5) - hash);
      }
      const indexOffset = Math.abs(hash);

      // Distribute ad types based on page context
      const path = window.location.pathname.toLowerCase();
      if (path.includes('/ipo/')) {
        return AD_LIBRARY[(indexOffset + 3) % AD_LIBRARY.length]; // IPO, Demat, etc.
      } else if (path.includes('/mutual-funds/')) {
        return getAdByCategory('mutual-fund', indexOffset);
      } else if (path.includes('/stocks/')) {
        return getAdByCategory('stock', indexOffset);
      } else if (path.includes('/brokers/')) {
        return getAdByCategory('trading', indexOffset);
      } else if (path.includes('/tools/')) {
        return getAdByCategory('finance-app', indexOffset);
      }
      return AD_LIBRARY[indexOffset % AD_LIBRARY.length];
    }

    // Render ad component inside container with automatic rotation
    renderSlot(elementId, type) {
      const container = document.getElementById(elementId);
      if (!container) return;

      // Map ad types to target dimensions
      let dimensions = { desktop: '970x90', mobile: '320x100' };
      if (type === 'large-banner') {
        dimensions = { desktop: '970x250', mobile: '300x250' };
      } else if (type === 'rectangle') {
        dimensions = { desktop: '300x250', mobile: '300x250' };
      } else if (type === 'skyscraper') {
        dimensions = { desktop: '300x600', mobile: '300x250' };
      } else if (type === 'banner') {
        dimensions = { desktop: '728x90', mobile: '320x50' };
      }

      // We'll rotate between the creatives in the library. Let's find an initial offset index.
      let hash = 0;
      for (let i = 0; i < elementId.length; i++) {
        hash = elementId.charCodeAt(i) + ((hash << 5) - hash);
      }
      let adIndex = Math.abs(hash) % AD_LIBRARY.length;

      // Set up rotation timer (6 seconds)
      let rotationTimer;
      const startRotation = () => {
        if (type === 'leaderboard' || type === 'banner') return; // Don't rotate the static Zerodha ad
        rotationTimer = setInterval(() => {
          adIndex = (adIndex + 1) % AD_LIBRARY.length;
          updateAdContent();
        }, 6000); // 6 second interval (between 5 and 8 seconds)
      };

      const updateAdContent = () => {
        if (type === 'leaderboard' || type === 'banner') {
          container.innerHTML = `
            <div class="ad-container-inner" style="width:100%; display:flex; flex-direction:column; align-items:center;">
              <div class="ad-label-container" style="width:100%; text-align:right; margin-bottom:4px;">
                <span class="ad-label" style="font-size:9px; font-weight:700; color:#94a3b8; letter-spacing:0.5px; text-transform:uppercase;">Advertisement</span>
              </div>
              <a href="https://zerodha.com/" target="_blank" style="display:flex; align-items:center; justify-content:space-between; width:100%; min-height: 90px; border-radius:8px; text-decoration:none; background: linear-gradient(90deg, #eaf3fd 0%, #eaf3fd 50%, #ffffff 50%, #ffffff 100%); border: 1px solid #e2e8f0; overflow:hidden; padding: 16px 24px; box-sizing: border-box; flex-wrap: wrap; gap: 16px;">
                  <div style="flex:1; min-width: 250px;">
                      <div style="color:#2065D1; font-weight:800; font-size:13px; margin-bottom:6px; display:flex; align-items:center; letter-spacing: 0.5px;">
                          <svg width="14" height="14" viewBox="0 0 24 24" fill="#2065D1" style="margin-right:6px;"><path d="M12 2L2 22h20L12 2z"/></svg> ZERODHA
                      </div>
                      <div style="color:#1e293b; font-weight:600; font-size:18px; letter-spacing:-0.5px; line-height: 1.2;">Free equity & mutual fund investments</div>
                      <div style="color:#94a3b8; font-size:12px; margin-top:4px;">₹20 for all other trades*</div>
                  </div>
                  <div style="flex:1; min-width: 200px; display:flex; flex-direction:column; align-items:flex-end; justify-content:center;">
                      <div style="background:#2065D1; color:white; font-weight:600; font-size:13px; padding:8px 20px; border-radius:4px; margin-bottom:8px; white-space:nowrap;">Sign up now</div>
                      <div style="color:#334155; font-weight:600; font-size:13px; margin-bottom:4px; text-align:right;">Trade with superior platforms & tools</div>
                      <div style="color:#94a3b8; font-size:11px; text-align:right;">www.zerodha.com &nbsp; *T&C Applies</div>
                  </div>
              </a>
            </div>
          `;
          return;
        }

        const ad = AD_LIBRARY[adIndex];
        let desktopImgSrc = ad.images[dimensions.desktop];
        let mobileImgSrc = ad.images[dimensions.mobile];

        // Apply smooth transition fade
        linkEl.style.opacity = 0;
        setTimeout(() => {
          linkEl.href = this.resolveUrl(ad.targetUrl);
          sourceEl.srcset = mobileImgSrc;
          imgEl.src = desktopImgSrc;
          imgEl.alt = ad.name;
          linkEl.style.opacity = 1;
        }, 300);
      };

      // Set container structure if not a leaderboard/banner
      if (type !== 'leaderboard' && type !== 'banner') {
        container.innerHTML = `
          <div class="ad-container-inner" style="width:100%; display:flex; flex-direction:column; align-items:center;">
            <div class="ad-label-container" style="width:100%; text-align:right; margin-bottom:4px;">
              <span class="ad-label" style="font-size:9px; font-weight:700; color:#94a3b8; letter-spacing:0.5px; text-transform:uppercase;">Advertisement</span>
            </div>
            <a class="ad-link" href="#" target="_blank" style="display:block; width:100%; text-decoration:none; transition:opacity 0.3s ease;">
              <picture class="ad-picture" style="display:block; width:100%;">
                <source class="ad-source" media="(max-width: 768px)" srcset="">
                <img class="ad-img" src="" alt="" style="width:100%; height:auto; display:block; border-radius:6px; box-shadow:0 1px 3px rgba(0,0,0,0.05); border:1px solid #e2e8f0; object-fit:contain;">
              </picture>
            </a>
          </div>
        `;
      }

      let linkEl = container.querySelector('.ad-link');
      let sourceEl = container.querySelector('.ad-source');
      let imgEl = container.querySelector('.ad-img');

      // Initial render
      updateAdContent();

      startRotation();

      // Pause on hover
      container.addEventListener('mouseenter', () => {
        clearInterval(rotationTimer);
      });
      container.addEventListener('mouseleave', () => {
        startRotation();
      });
    }
    initHeroAds() {
      const topSlider = document.querySelector('.promo-card-link.slider-top');
      if (!topSlider) return;

      // Hero slider data: select three high-end square generated ad images
      const heroAds = [
        {
          name: 'Angel One',
          targetUrl: 'https://www.angelone.in/',
          image: 'assets/images/banners/angel_one_square_ad.jpg'
        },
        {
          name: 'Groww',
          targetUrl: 'https://groww.in/',
          image: 'assets/images/banners/groww_square_ad.jpg'
        },
        {
          name: 'Upstox',
          targetUrl: 'https://upstox.com/',
          image: 'assets/images/banners/upstox_square_ad.jpg'
        },
        {
          name: 'Mutual Funds Sahi Hai',
          targetUrl: 'https://www.mutualfundssahihai.com/',
          image: 'assets/images/banners/mf_sahi_hai_ad.jpg'
        }
      ];

      const renderHeroAdMarkup = (element, ad) => {
        const imgSrc = this.resolveUrl(ad.image);
        let dotsHtml = '<div class="slider-dots">';
        heroAds.forEach((item, idx) => {
          const activeClass = (idx === topIndex) ? 'active' : '';
          dotsHtml += `<span class="slider-dot ${activeClass}" data-index="${idx}"></span>`;
        });
        dotsHtml += '</div>';

        element.innerHTML = `
          <div class="ad-label-container" style="position:absolute; top:8px; right:12px; z-index:10; background:rgba(0,0,0,0.5); padding:2px 6px; border-radius:4px;">
            <span class="ad-label" style="font-size:8px; font-weight:700; color:#ffffff; letter-spacing:0.5px; text-transform:uppercase;">Advertisement</span>
          </div>
          <div class="slide-anim" style="width:100%; height:100%; display:flex; align-items:center; justify-content:center; background:#0f172a; border-radius:16px;">
              <img src="${imgSrc}" alt="${ad.name}" style="width:100%; height:100%; object-fit:contain; display:block; border-radius:16px;">
          </div>
          ${dotsHtml}
        `;
        element.href = this.resolveUrl(ad.targetUrl);
        element.target = "_blank";
      };

      let topIndex = 0;
      renderHeroAdMarkup(topSlider, heroAds[topIndex]);

      let topTimer = null;

      const startTopTimer = () => {
        if (topTimer) clearInterval(topTimer);
        topTimer = setInterval(() => {
          topIndex = (topIndex + 1) % heroAds.length;
          topSlider.style.opacity = 0.2;
          setTimeout(() => {
            renderHeroAdMarkup(topSlider, heroAds[topIndex]);
            topSlider.style.opacity = 1;
          }, 300);
        }, 5000);
      };

      topSlider.addEventListener('mouseenter', () => clearInterval(topTimer));
      topSlider.addEventListener('mouseleave', () => startTopTimer());

      // Interactive dots click navigation
      topSlider.addEventListener('click', (e) => {
        const dot = e.target.closest('.slider-dot');
        if (dot) {
          e.preventDefault();
          e.stopPropagation();
          const targetIndex = parseInt(dot.getAttribute('data-index'), 10);
          if (targetIndex !== topIndex) {
            topIndex = targetIndex;
            clearInterval(topTimer);
            topSlider.style.opacity = 0.2;
            setTimeout(() => {
              renderHeroAdMarkup(topSlider, heroAds[topIndex]);
              topSlider.style.opacity = 1;
              startTopTimer();
            }, 300);
          }
        }
      });

      // Add CSS transitions to elements
      topSlider.style.transition = 'opacity 0.3s ease, transform 0.3s ease';

      startTopTimer();
    }

    // Render sticky bottom ad
    renderStickyAd(containerId) {
      const container = document.getElementById(containerId);
      if (!container) return;

      const ad = AD_LIBRARY[4]; // Financial App
      const mobileImgSrc = ad.images['320x50'];
      const desktopImgSrc = ad.images['970x90'];

      container.innerHTML = `
        <div class="sticky-ad-box" style="position:fixed; bottom:0; left:50%; transform:translateX(-50%); z-index:10000; background:white; box-shadow:0 -4px 20px rgba(0,0,0,0.15); border:1px solid #e2e8f0; border-top-left-radius:12px; border-top-right-radius:12px; padding:10px 40px 10px 10px; width:100%; max-width:990px; display:flex; justify-content:center; align-items:center;">
          <button class="sticky-ad-close" onclick="this.parentElement.style.display='none';" style="position:absolute; top:8px; right:12px; background:#f1f5f9; border:none; font-size:18px; font-weight:700; cursor:pointer; color:#64748b; width:24px; height:24px; border-radius:50%; display:flex; align-items:center; justify-content:center;">&times;</button>
          <span class="ad-label" style="position:absolute; top:-16px; left:8px; font-size:9px; padding:1px 6px; background:#f1f5f9; border:1px solid #e2e8f0; border-radius:4px; color:#64748b; font-weight:700; text-transform:uppercase;">Advertisement</span>
          <a href="${this.resolveUrl(ad.targetUrl)}" target="_blank" style="display:block; width:100%; text-decoration:none;">
            <picture style="display:block; width:100%;">
              <source media="(max-width: 768px)" srcset="${mobileImgSrc}">
              <img src="${desktopImgSrc}" alt="${ad.name}" style="width:100%; height:auto; display:block; border-radius:6px; object-fit:contain; max-height:80px;">
            </picture>
          </a>
        </div>
      `;
    }

    // Auto-discover all elements with class 'ad-slot' and known homepage IDs
    discoverAndRender() {
      // Ensure homepage IDs are matched and have the classes
      const homepageIds = {
        'top-leaderboard-ad': 'leaderboard',
        'below-hero-ad': 'leaderboard',
        'between-ipo-ad': 'leaderboard',
        'large-promo-ad': 'large-banner',
        'bottom-ad': 'leaderboard'
      };

      for (const [id, defaultType] of Object.entries(homepageIds)) {
        const el = document.getElementById(id);
        if (el && !el.classList.contains('ad-slot')) {
          el.classList.add('ad-slot');
          if (defaultType === 'leaderboard') el.classList.add('ad-leaderboard');
          if (defaultType === 'large-banner') el.classList.add('ad-large-banner');
        }
      }

      const slots = document.querySelectorAll('.ad-slot');
      slots.forEach(slot => {
        if (!slot.id) return;
        
        let type = 'leaderboard';
        if (slot.classList.contains('ad-large-banner')) {
          type = 'large-banner';
        } else if (slot.classList.contains('ad-rectangle')) {
          type = 'rectangle';
        } else if (slot.classList.contains('ad-skyscraper')) {
          type = 'skyscraper';
        } else if (slot.classList.contains('ad-banner')) {
          type = 'banner';
        }
        
        this.renderSlot(slot.id, type);
      });

      // Special Hero Ads
      this.initHeroAds();
    }
  }

  // Initialize
  document.addEventListener('DOMContentLoaded', () => {
    window.adManager = new AdManager();
    window.adManager.discoverAndRender();
  });
})();
