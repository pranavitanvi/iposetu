// assets/js/main.js
document.addEventListener('DOMContentLoaded', () => {
  // Mobile Menu Toggle
  const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
  const navLinks = document.querySelector('.nav-links');

  if (mobileMenuBtn && navLinks) {
    mobileMenuBtn.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  }

  // Demo Search UI
  const searchForm = document.querySelector('.hero-search');
  if (searchForm) {
    searchForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const input = searchForm.querySelector('input').value;
      if (input) {
        alert('Demo Search: Searching for "' + input + '"... (API not connected)');
      }
    });
  }

  // Intersection Observer for scroll animations
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  const animateElements = document.querySelectorAll('.animate-on-scroll');
  animateElements.forEach(el => {
    observer.observe(el);
  });

  // Market Snapshot Tab Switching
  const tabButtons = document.querySelectorAll('.snapshot-tab-btn');
  const tabPanes = document.querySelectorAll('.snapshot-pane');

  tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      tabButtons.forEach(b => b.classList.remove('active'));
      tabPanes.forEach(p => p.classList.remove('active'));

      btn.classList.add('active');
      const tabId = btn.getAttribute('data-tab');
      const pane = document.getElementById(`pane-${tabId}`);
      if (pane) pane.classList.add('active');
    });
  });

  // SEBI Warning Ad Slider
  const adSlides = [
    {
      img: 'assets/images/banners/broker_ad_banner.png',
      text: 'Fake apps often look real because they use logos and designs from original apps. Download apps only from the verified apps list on the SEBI website.',
      url: 'https://investor.sebi.gov.in/'
    },
    {
      img: 'assets/images/banners/leaderboard_ad.png',
      text: 'Always verify the registration details of intermediaries on the SEBI website before investing.',
      url: 'https://investor.sebi.gov.in/'
    },
    {
      img: 'assets/images/banners/banner1.png',
      text: 'Beware of stock tips promising guaranteed returns. Report unregistered entities.',
      url: 'https://www.angelone.in/' // Example redirect for the broker ad
    }
  ];

  let currentAdIndex = 0;
  let adInterval = null;
  let isAdPlaying = true;

  const adImage = document.getElementById('adSlideImage');
  const adText = document.getElementById('adSlideText');
  const adDots = document.querySelectorAll('.ad-dot');
  const adPlayPauseBtn = document.getElementById('adPlayPauseBtn');
  const playPauseIcon = document.getElementById('playPauseIcon');

  function showSlide(index) {
    if (index < 0 || index >= adSlides.length) return;
    currentAdIndex = index;

    if (adImage) {
      adImage.src = adSlides[index].img;
      
      // Ensure the image is wrapped in a link
      let linkWrapper = adImage.closest('a');
      if (!linkWrapper) {
        linkWrapper = document.createElement('a');
        linkWrapper.target = "_blank";
        linkWrapper.style.display = "block";
        linkWrapper.style.width = "100%";
        linkWrapper.style.height = "100%";
        adImage.parentNode.insertBefore(linkWrapper, adImage);
        linkWrapper.appendChild(adImage);
      }
      linkWrapper.href = adSlides[index].url;
    }
    if (adText) adText.textContent = adSlides[index].text;

    adDots.forEach((dot, idx) => {
      if (idx === index) {
        dot.classList.add('active');
      } else {
        dot.classList.remove('active');
      }
    });
  }

  function nextSlide() {
    let nextIdx = (currentAdIndex + 1) % adSlides.length;
    showSlide(nextIdx);
  }

  function startAdTimer() {
    if (adInterval) clearInterval(adInterval);
    adInterval = setInterval(nextSlide, 4000);
  }

  function stopAdTimer() {
    if (adInterval) clearInterval(adInterval);
  }

  adDots.forEach((dot, idx) => {
    dot.addEventListener('click', () => {
      showSlide(idx);
      if (isAdPlaying) {
        startAdTimer();
      }
    });
  });

  if (adPlayPauseBtn) {
    adPlayPauseBtn.addEventListener('click', () => {
      if (isAdPlaying) {
        stopAdTimer();
        isAdPlaying = false;
        if (playPauseIcon) {
          playPauseIcon.innerHTML = '<polygon points="5 3 19 12 5 21 5 3"></polygon>';
          playPauseIcon.setAttribute('fill', 'currentColor');
        }
        adPlayPauseBtn.setAttribute('aria-label', 'Play Slideshow');
      } else {
        isAdPlaying = true;
        nextSlide();
        startAdTimer();
        if (playPauseIcon) {
          playPauseIcon.innerHTML = '<rect x="6" y="4" width="4" height="16"></rect><rect x="14" y="4" width="4" height="16"></rect>';
          playPauseIcon.removeAttribute('fill');
        }
        adPlayPauseBtn.setAttribute('aria-label', 'Pause Slideshow');
      }
    });
  }

  if (adSlides.length > 0) {
    showSlide(0);
    startAdTimer();
  }
});


document.addEventListener('DOMContentLoaded', () => {
  const path = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-links > li > a');
  navLinks.forEach(link => {
    if (link.getAttribute('href') && path.includes(link.getAttribute('href').replace('../', '').replace('./', ''))) {
      link.style.color = 'var(--accent-color)';
      link.style.fontWeight = '700';
    }
  });

  // FAQ Accordion Behavior (Only one open at a time)
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    item.addEventListener('toggle', (event) => {
      if (item.open) {
        faqItems.forEach(otherItem => {
          if (otherItem !== item && otherItem.open) {
            otherItem.open = false;
          }
        });
      }
    });
  });

  // Live Ticker Background Auto-Refresh
  const tickerEl = document.getElementById('liveTickerContainer');
  if (tickerEl) {
    function updateTickerData() {
      fetch('/iposetu/api/get_live_ticker.php')
        .then(res => res.json())
        .then(items => {
          if (!Array.isArray(items) || items.length === 0) return;
          let newHtml = '';
          for (let loop = 0; loop < 2; loop++) {
            items.forEach(t => {
              const cls = t.is_up ? 'up' : 'down';
              const sym = t.symbol || 'IPO';
              const price = parseFloat(t.live_price || 0).toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
              const cAbs = parseFloat(t.change_abs || 0);
              const cPct = parseFloat(t.change_pct || 0);
              const sign = cAbs >= 0 ? '+' : '';
              const changeStr = `${sign}${cAbs.toFixed(2)} (${sign}${cPct.toFixed(2)}%)`;
              newHtml += `<div class="ticker-item ${cls}"><span class="ticker-name">${sym}</span> <span class="ticker-price">${price}</span> <span class="ticker-change">${changeStr}</span></div>`;
            });
          }
          tickerEl.innerHTML = newHtml;
        })
        .catch(() => {});
    }
    // Refresh live prices every 60 seconds
    setInterval(updateTickerData, 60000);
  }
});
