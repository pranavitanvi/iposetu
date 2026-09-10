/**
 * IPOSETU Portal — Shared Components JS
 * Tabs, FAQ Accordion, Filter Bar, Mega Menu, Pagination, Scroll Animations
 */

/* --------------------------------------------------------------------------
   Tabs
   -------------------------------------------------------------------------- */
function initTabs(containerSelector) {
  var containers = document.querySelectorAll(containerSelector || '.tab-container');
  containers.forEach(function(container) {
    var buttons = container.querySelectorAll('.tab-btn');
    var panes = container.querySelectorAll('.tab-pane');

    // Ensure inactive panes are hidden on load
    panes.forEach(function(p) {
      if (!p.classList.contains('active')) {
        p.style.display = 'none';
      } else {
        p.style.display = 'block';
      }
    });

    buttons.forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        if (e) e.preventDefault();
        var target = btn.getAttribute('data-tab');
        buttons.forEach(function(b) { b.classList.remove('active'); });
        panes.forEach(function(p) {
          p.classList.remove('active');
          p.style.display = 'none';
          p.style.opacity = '0';
          p.style.transform = 'translateY(8px)';
        });
        btn.classList.add('active');
        var pane = container.querySelector('#' + target);
        if (pane) {
          pane.classList.add('active');
          pane.style.display = 'block';
          requestAnimationFrame(function() {
            pane.style.transition = 'opacity 0.25s ease, transform 0.25s ease';
            pane.style.opacity = '1';
            pane.style.transform = 'translateY(0)';
          });
        }
      });
    });

    // Default activate first tab if none active
    if (buttons.length > 0 && !container.querySelector('.tab-btn.active')) {
      buttons[0].click();
    } else {
      var activeBtn = container.querySelector('.tab-btn.active');
      if (activeBtn) {
        var activeTarget = activeBtn.getAttribute('data-tab');
        panes.forEach(function(p) {
          if (p.id === activeTarget) {
            p.classList.add('active');
            p.style.display = 'block';
            p.style.opacity = '1';
            p.style.transform = 'translateY(0)';
          } else {
            p.classList.remove('active');
            p.style.display = 'none';
          }
        });
      }
    }
  });
}

/* --------------------------------------------------------------------------
   FAQ Accordion — smooth animated
   -------------------------------------------------------------------------- */
function initAccordion(selector) {
  var questions = document.querySelectorAll(selector || '.faq-question');
  questions.forEach(function(q) {
    var answer = q.nextElementSibling;
    if (answer && answer.classList.contains('faq-answer')) {
      if (!q.classList.contains('open')) {
        answer.style.display = 'none';
      } else {
        answer.style.display = 'block';
      }
    }
    q.addEventListener('click', function(e) {
      if (e) e.preventDefault();
      var isOpen = q.classList.contains('open');

      // Close all
      document.querySelectorAll('.faq-question').forEach(function(oq) {
        oq.classList.remove('open');
        var oIcon = oq.querySelector('.faq-icon');
        if (oIcon) oIcon.textContent = '+';
        var oAns = oq.nextElementSibling;
        if (oAns && oAns.classList.contains('faq-answer')) {
          oAns.classList.remove('open');
          oAns.style.display = 'none';
        }
      });

      // Toggle clicked
      if (!isOpen && answer) {
        q.classList.add('open');
        var icon = q.querySelector('.faq-icon');
        if (icon) icon.textContent = '×';
        answer.classList.add('open');
        answer.style.display = 'block';
      }
    });
  });
}

/* --------------------------------------------------------------------------
   IPO Table Filter + Apply/Reset
   -------------------------------------------------------------------------- */
function initIPOFilter() {
  var table = document.getElementById('ipo-main-table');
  if (!table) return;

  var searchInput = document.getElementById('ipo-search');
  var typeSelect  = document.getElementById('filter-type');
  var statusSelect = document.getElementById('filter-status');
  var yearSelect  = document.getElementById('filter-year');
  var exchangeSel = document.getElementById('filter-exchange');
  var applyBtn    = document.getElementById('apply-filter');
  var resetBtn    = document.getElementById('reset-filter');

  function applyFilters() {
    var search   = searchInput ? searchInput.value.toLowerCase().trim() : '';
    var type     = typeSelect   ? typeSelect.value.toLowerCase() : '';
    var status   = statusSelect ? statusSelect.value.toLowerCase() : '';
    var year     = yearSelect   ? yearSelect.value : '';
    var exchange = exchangeSel  ? exchangeSel.value.toUpperCase() : '';

    var rows = table.querySelectorAll('tbody tr');
    var visibleCount = 0;
    rows.forEach(function(row) {
      if (row.cells.length === 1 && row.cells[0].colSpan > 1) return;
      var text = row.textContent.toLowerCase();
      var show = true;

      if (search && !text.includes(search)) show = false;
      if (type && !text.includes(type)) show = false;
      if (status && !text.includes(status)) show = false;
      if (year && !text.includes(year)) show = false;
      if (exchange && !text.includes(exchange.toLowerCase())) show = false;

      if (show) {
        row.classList.remove('filtered-out');
        row.removeAttribute('data-filtered');
        visibleCount++;
      } else {
        row.classList.add('filtered-out');
        row.setAttribute('data-filtered', 'true');
        row.style.display = 'none';
      }
    });

    if (typeof window.reinitIpoPagination === 'function') {
      window.reinitIpoPagination();
    } else {
      initTablePagination('ipo-main-table', 'ipo-pagination', 20);
    }
  }

  if (applyBtn) applyBtn.addEventListener('click', applyFilters);

  // Live search
  if (searchInput) {
    searchInput.addEventListener('input', applyFilters);
  }

  if (resetBtn) {
    resetBtn.addEventListener('click', function() {
      if (searchInput) searchInput.value = '';
      if (typeSelect) typeSelect.value = '';
      if (statusSelect) statusSelect.value = '';
      if (yearSelect) yearSelect.value = '';
      if (exchangeSel) exchangeSel.value = '';
      var rows = table.querySelectorAll('tbody tr');
      rows.forEach(function(row) {
        row.classList.remove('filtered-out');
        row.removeAttribute('data-filtered');
      });
      var tabs = document.querySelectorAll('.ipo-tabs .tab-btn');
      tabs.forEach(function(t) { t.classList.remove('active'); });
      if (tabs.length > 0) tabs[0].classList.add('active');
      
      if (typeof window.reinitIpoPagination === 'function') {
        window.reinitIpoPagination();
      } else {
        initTablePagination('ipo-main-table', 'ipo-pagination', 20);
      }
    });
  }

  // Bind Quick Filter Tabs
  var tabs = document.querySelectorAll('.ipo-tabs .tab-btn');
  tabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      tabs.forEach(function(t) { t.classList.remove('active'); });
      tab.classList.add('active');
      
      var text = tab.textContent.trim().toUpperCase();
      
      // Reset selects before applying tab
      if (typeSelect) typeSelect.value = '';
      if (statusSelect) statusSelect.value = '';
      
      if (text === 'MAINBOARD') {
        if (typeSelect) typeSelect.value = 'MAIN';
      } else if (text === 'SME') {
        if (typeSelect) typeSelect.value = 'SME';
      } else if (text === 'OPEN') {
        if (statusSelect) statusSelect.value = 'OPEN';
      } else if (text === 'UPCOMING') {
        if (statusSelect) statusSelect.value = 'UPCOMING';
      } else if (text === 'CLOSED') {
        if (statusSelect) statusSelect.value = 'CLOSED';
      } else if (text === 'LISTED') {
        if (statusSelect) statusSelect.value = 'LISTED';
      }
      
      applyFilters();
    });
  });
}

/* --------------------------------------------------------------------------
   Table Pagination
   -------------------------------------------------------------------------- */
function initTablePagination(tableId, paginationId, rowsPerPage) {
  var table = document.getElementById(tableId);
  var pag   = document.getElementById(paginationId);
  if (!table || !pag) return;

  rowsPerPage = rowsPerPage || 20;
  var currentPage = 1;

  function getEligibleRows() {
    return Array.from(table.querySelectorAll('tbody tr')).filter(function(r) {
      if (r.cells.length === 1 && r.cells[0].colSpan > 1) return false;
      return !r.classList.contains('filtered-out') && r.getAttribute('data-filtered') !== 'true';
    });
  }

  function renderPage(page) {
    var rows = getEligibleRows();
    var totalPages = Math.ceil(rows.length / rowsPerPage) || 1;
    if (page < 1) page = 1;
    if (page > totalPages) page = totalPages;
    currentPage = page;

    var start = (currentPage - 1) * rowsPerPage;
    var end = start + rowsPerPage;

    rows.forEach(function(r, i) {
      if (i >= start && i < end) {
        r.classList.remove('pg-hidden');
        r.style.display = '';
      } else {
        r.classList.add('pg-hidden');
        r.style.display = 'none';
      }
    });

    var pagesEl = document.getElementById(paginationId + '-pages') || document.getElementById('pg-pages') || pag.querySelector('.pagination');
    if (pagesEl) {
      pagesEl.innerHTML = '';
      var startPage = Math.max(1, currentPage - 2);
      var endPage = Math.min(totalPages, startPage + 4);
      if (endPage - startPage < 4) {
        startPage = Math.max(1, endPage - 4);
      }

      if (startPage > 1) {
        addPageBtn(pagesEl, 1);
        if (startPage > 2) addEllipsis(pagesEl);
      }

      for (var i = startPage; i <= endPage; i++) {
        addPageBtn(pagesEl, i);
      }

      if (endPage < totalPages) {
        if (endPage < totalPages - 1) addEllipsis(pagesEl);
        addPageBtn(pagesEl, totalPages);
      }
    }

    var prevBtn = document.getElementById(paginationId + '-prev') || document.getElementById('pg-prev') || pag.querySelector('.pg-btn:first-child');
    var nextBtn = document.getElementById(paginationId + '-next') || document.getElementById('pg-next') || pag.querySelector('.pg-btn:last-child');
    var pgInfo  = document.getElementById(paginationId + '-info') || document.getElementById('pg-info') || pag.querySelector('.pg-info');

    if (prevBtn) prevBtn.disabled = currentPage <= 1;
    if (nextBtn) nextBtn.disabled = currentPage >= totalPages;
    if (pgInfo) {
      pgInfo.textContent = 'Showing ' + (rows.length === 0 ? 0 : start + 1) + '–' + Math.min(end, rows.length) + ' of ' + rows.length + ' IPOs (Page ' + currentPage + ' of ' + totalPages + ')';
    }
  }

  function addPageBtn(container, pageNum) {
    var btn = document.createElement('button');
    btn.textContent = pageNum;
    btn.className = 'pg-num' + (pageNum === currentPage ? ' active' : '');
    btn.setAttribute('data-page', pageNum);
    btn.addEventListener('click', function() {
      renderPage(pageNum);
      table.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
    container.appendChild(btn);
  }

  function addEllipsis(container) {
    var span = document.createElement('span');
    span.textContent = '...';
    span.style.cssText = 'padding: 6px 10px; color: #94a3b8; font-weight: 600;';
    container.appendChild(span);
  }

  var prevBtn = document.getElementById(paginationId + '-prev') || document.getElementById('pg-prev') || pag.querySelector('.pg-btn:first-child');
  var nextBtn = document.getElementById(paginationId + '-next') || document.getElementById('pg-next') || pag.querySelector('.pg-btn:last-child');
  
  if (prevBtn) {
    var newPrev = prevBtn.cloneNode(true);
    prevBtn.parentNode.replaceChild(newPrev, prevBtn);
    newPrev.addEventListener('click', function() {
      if (currentPage > 1) {
        renderPage(currentPage - 1);
        table.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  }

  if (nextBtn) {
    var newNext = nextBtn.cloneNode(true);
    nextBtn.parentNode.replaceChild(newNext, nextBtn);
    newNext.addEventListener('click', function() {
      var rows = getEligibleRows();
      var totalPages = Math.ceil(rows.length / rowsPerPage) || 1;
      if (currentPage < totalPages) {
        renderPage(currentPage + 1);
        table.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  }

  renderPage(1);
}

/* --------------------------------------------------------------------------
   Filter Bar — Live Search on Table (legacy)
   -------------------------------------------------------------------------- */
function initFilterBar(inputId, tableId) {
  var input = document.getElementById(inputId);
  var table = document.getElementById(tableId);
  if (!input || !table) return;
  input.addEventListener('input', function() {
    var val = input.value.toLowerCase();
    var rows = table.querySelectorAll('tbody tr');
    rows.forEach(function(row) {
      var text = row.textContent.toLowerCase();
      row.style.display = text.includes(val) ? '' : 'none';
    });
  });
}

/* --------------------------------------------------------------------------
   Mega Menu
   -------------------------------------------------------------------------- */
function initMegaMenu() {
  var items = document.querySelectorAll('.has-mega-dropdown');
  items.forEach(function(item) {
    var dropdown = item.querySelector('.mega-dropdown-content');
    if (!dropdown) return;

    var closeTimer;

    item.addEventListener('mouseenter', function() {
      clearTimeout(closeTimer);
      dropdown.style.display = 'block';
    });
    item.addEventListener('mouseleave', function() {
      closeTimer = setTimeout(function() {
        dropdown.style.display = 'none';
      }, 80);
    });
    dropdown.addEventListener('mouseenter', function() {
      clearTimeout(closeTimer);
    });
    dropdown.addEventListener('mouseleave', function() {
      closeTimer = setTimeout(function() {
        dropdown.style.display = 'none';
      }, 80);
    });

    var anchor = item.querySelector('a');
    if (anchor) {
      anchor.addEventListener('click', function(e) {
        if (window.innerWidth < 1024) {
          e.preventDefault();
          var isVisible = dropdown.style.display === 'block';
          document.querySelectorAll('.mega-dropdown-content').forEach(function(d) {
            d.style.display = 'none';
          });
          dropdown.style.display = isVisible ? 'none' : 'block';
        }
      });
    }
  });

  document.addEventListener('click', function(e) {
    if (!e.target.closest('.has-mega-dropdown')) {
      document.querySelectorAll('.mega-dropdown-content').forEach(function(d) {
        d.style.display = 'none';
      });
    }
  });
}

/* --------------------------------------------------------------------------
   Scroll Animations — fade in elements on scroll
   -------------------------------------------------------------------------- */
function initScrollAnimations() {
  var targets = document.querySelectorAll('.animate-on-scroll');
  if (!targets.length) return;

  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

  targets.forEach(function(el, i) {
    el.style.transitionDelay = Math.min(i * 0.06, 0.4) + 's';
    observer.observe(el);
  });

}

/* --------------------------------------------------------------------------
   Stat Card Counter Animation
   -------------------------------------------------------------------------- */
function initCounterAnimation() {
  var counters = document.querySelectorAll('.stat-value');
  counters.forEach(function(el) {
    var raw = el.textContent.trim();
    var num = parseFloat(raw.replace(/[^0-9.]/g, ''));
    if (isNaN(num) || num === 0) return;
    var suffix = raw.replace(/[0-9.]/g, '').trim();
    var duration = 1200;
    var steps = 50;
    var increment = num / steps;
    var current = 0;
    var interval = setInterval(function() {
      current += increment;
      if (current >= num) { current = num; clearInterval(interval); }
      el.textContent = (Number.isInteger(num) ? Math.round(current) : current.toFixed(1)) + suffix;
    }, duration / steps);
  });
}

/* --------------------------------------------------------------------------
   Range Slider Live Value Display
   -------------------------------------------------------------------------- */
function initRangeSliders() {
  document.querySelectorAll('input[type="range"]').forEach(function(slider) {
    var display = slider.parentElement.querySelector('.range-val');
    if (!display) return;
    function updateDisplay() {
      var suffix = slider.getAttribute('data-suffix') || '';
      var prefix = slider.getAttribute('data-prefix') || '';
      display.textContent = prefix + slider.value + suffix;
    }
    slider.addEventListener('input', updateDisplay);
    updateDisplay();
  });
}

/* --------------------------------------------------------------------------
   Calculator — Generic Compute
   -------------------------------------------------------------------------- */
function bindCalcInputs(formSelector, computeFn) {
  var form = document.querySelector(formSelector);
  if (!form) return;
  var inputs = form.querySelectorAll('input, select');
  inputs.forEach(function(inp) {
    inp.addEventListener('input', computeFn);
  });
  computeFn();
}

/* --------------------------------------------------------------------------
   IPO Calculator
   -------------------------------------------------------------------------- */
function initIpoCalc() {
  function compute() {
    var priceEl = document.getElementById('ipo-price');
    var lotEl = document.getElementById('ipo-lot');
    var lotsEl = document.getElementById('ipo-lots');
    var gmpEl = document.getElementById('ipo-gmp');
    var resultEl = document.getElementById('ipo-result');
    var profitEl = document.getElementById('ipo-profit');
    if (!priceEl || !lotEl || !resultEl) return;
    var price = parseFloat(priceEl.value) || 0;
    var lot = parseFloat(lotEl.value) || 0;
    var lots = parseFloat(lotsEl ? lotsEl.value : 1) || 1;
    var gmp = parseFloat(gmpEl ? gmpEl.value : 0) || 0;
    var investment = price * lot * lots;
    var estimatedListing = price + gmp;
    var profit = gmp * lot * lots;
    resultEl.textContent = '\u20B9' + investment.toLocaleString('en-IN');
    if (profitEl) {
      profitEl.textContent = (profit >= 0 ? '+' : '') + '\u20B9' + profit.toLocaleString('en-IN') +
        ' (' + (price > 0 ? ((gmp / price) * 100).toFixed(2) : '0') + '%)';
      profitEl.style.color = profit >= 0 ? '#10B981' : '#EF4444';
    }
    var estEl = document.getElementById('ipo-est-listing');
    if (estEl) estEl.textContent = '\u20B9' + estimatedListing.toFixed(2);
  }
  var inputs = document.querySelectorAll('#ipo-price, #ipo-lot, #ipo-lots, #ipo-gmp');
  inputs.forEach(function(inp) { inp.addEventListener('input', compute); });
  compute();
}

/* --------------------------------------------------------------------------
   SIP Calculator
   -------------------------------------------------------------------------- */
function initSipCalc() {
  function compute() {
    var monthlyEl = document.getElementById('sip-monthly');
    var rateEl = document.getElementById('sip-rate');
    var yearsEl = document.getElementById('sip-years');
    var resultEl = document.getElementById('sip-result');
    var investedEl = document.getElementById('sip-invested');
    var returnsEl = document.getElementById('sip-returns');
    if (!monthlyEl || !rateEl || !yearsEl || !resultEl) return;
    var monthly = parseFloat(monthlyEl.value) || 0;
    var rate = parseFloat(rateEl.value) || 0;
    var years = parseFloat(yearsEl.value) || 0;
    var n = years * 12;
    var r = rate / 100 / 12;
    var fv = r > 0 ? monthly * ((Math.pow(1 + r, n) - 1) / r) * (1 + r) : monthly * n;
    var invested = monthly * n;
    var returns = fv - invested;
    resultEl.textContent = '\u20B9' + Math.round(fv).toLocaleString('en-IN');
    if (investedEl) investedEl.textContent = '\u20B9' + Math.round(invested).toLocaleString('en-IN');
    if (returnsEl) returnsEl.textContent = '\u20B9' + Math.round(returns).toLocaleString('en-IN');
  }
  var inputs = document.querySelectorAll('#sip-monthly, #sip-rate, #sip-years');
  inputs.forEach(function(inp) { inp.addEventListener('input', compute); });
  compute();
}

/* --------------------------------------------------------------------------
   CAGR Calculator
   -------------------------------------------------------------------------- */
function initCagrCalc() {
  function compute() {
    var initialEl = document.getElementById('cagr-initial');
    var finalEl = document.getElementById('cagr-final');
    var yearsEl = document.getElementById('cagr-years');
    var resultEl = document.getElementById('cagr-result');
    if (!initialEl || !finalEl || !yearsEl || !resultEl) return;
    var initial = parseFloat(initialEl.value) || 0;
    var finalV = parseFloat(finalEl.value) || 0;
    var years = parseFloat(yearsEl.value) || 1;
    var cagr = initial > 0 ? ((Math.pow(finalV / initial, 1 / years) - 1) * 100) : 0;
    resultEl.textContent = cagr.toFixed(2) + '%';
  }
  var inputs = document.querySelectorAll('#cagr-initial, #cagr-final, #cagr-years');
  inputs.forEach(function(inp) { inp.addEventListener('input', compute); });
  compute();
}

/* --------------------------------------------------------------------------
   Ad Slot Renderer (legacy fallback)
   -------------------------------------------------------------------------- */
function renderAdSlot(containerId, sizeClass, label) {
  var el = document.getElementById(containerId);
  if (!el) return;
  el.innerHTML =
    '<div class="ad-slot ' + sizeClass + '">' +
    '  <span class="ad-label">' + (label || 'Advertisement') + '</span>' +
    '  <div class="ad-inner">' +
    '    <div style="font-size:32px;opacity:.3">📢</div>' +
    '    <div>Your Advertisement Here</div>' +
    '  </div>' +
    '</div>';
}

/* --------------------------------------------------------------------------
   Auto-Init on DOMContentLoaded
   -------------------------------------------------------------------------- */
document.addEventListener('DOMContentLoaded', function() {
  initTabs();
  initAccordion();
  initRangeSliders();
  initMegaMenu();
  initIpoCalc();
  initSipCalc();
  initCagrCalc();
  initScrollAnimations();
  initIPOFilter();

  // Trigger counter on stat cards when visible
  var statSection = document.querySelector('.stat-cards');
  if (statSection) {
    var countObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(e) {
        if (e.isIntersecting) { initCounterAnimation(); countObserver.disconnect(); }
      });
    }, { threshold: 0.3 });
    countObserver.observe(statSection);
  }

  // Init all filter bars declared with data attributes
  document.querySelectorAll('[data-filter-input]').forEach(function(inp) {
    var tableId = inp.getAttribute('data-filter-input');
    initFilterBar(inp.id, tableId);
  });
});





/* --------------------------------------------------------------------------
   Demo Interaction Handler
   Provides UI feedback for prototype links and buttons
   -------------------------------------------------------------------------- */
function showToast(message) {
    var toast = document.getElementById('demo-toast');
    if (!toast) {
        toast = document.createElement('div');
        toast.id = 'demo-toast';
        toast.style.cssText = 'position:fixed; bottom:24px; left:50%; transform:translateX(-50%) translateY(20px); background:#0f172a; color:white; padding:12px 24px; border-radius:30px; font-size:14px; font-weight:600; z-index:99999; opacity:0; transition:all 0.3s cubic-bezier(0.4, 0, 0.2, 1); pointer-events:none; box-shadow:0 10px 25px rgba(0,0,0,0.2); white-space:nowrap;';
        document.body.appendChild(toast);
    }
    
    // reset animation
    toast.style.opacity = '0';
    toast.style.transform = 'translateX(-50%) translateY(20px)';
    
    setTimeout(function() {
        toast.innerText = message;
        toast.style.opacity = '1';
        toast.style.transform = 'translateX(-50%) translateY(0)';
    }, 50);
    
    clearTimeout(window.toastTimer);
    window.toastTimer = setTimeout(function() {
        toast.style.opacity = '0';
        toast.style.transform = 'translateX(-50%) translateY(20px)';
    }, 2500);
}

document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('click', function(e) {
        var a = e.target.closest('a');
        if (a && a.getAttribute('href') === '#') {
            e.preventDefault();
            var text = a.innerText.trim();
            if (text) {
                showToast("Loading " + text + "...");
                
                // If it's a category pill, visually set it active
                if (a.style.borderRadius === '20px' || a.classList.contains('pill')) {
                    var siblings = a.parentElement.querySelectorAll('a');
                    siblings.forEach(function(s) { 
                        if (s.getAttribute('href') === '#') {
                            s.style.background = '#f1f5f9';
                            s.style.color = '#475569';
                        }
                    });
                    a.style.background = 'var(--accent-color)';
                    a.style.color = 'white';
                }
            } else {
                showToast("Action simulated.");
            }
        }
        
        var btn = e.target.closest('button');
        if (btn) {
            var btnText = btn.innerText.toLowerCase();
            if (btnText.includes('load more') || btnText.includes('next') || btnText.includes('view all') || btnText.includes('subscribe')) {
                e.preventDefault();
                showToast("Request sent to server...");
                var originalText = btn.innerText;
                btn.innerText = "Loading...";
                btn.style.opacity = "0.7";
                setTimeout(function() {
                    btn.innerText = originalText;
                    btn.style.opacity = "1";
                    showToast("No more items to load in demo.");
                }, 1000);
            }
        }
    });
});

/* --------------------------------------------------------------------------
   Grid Pagination
   -------------------------------------------------------------------------- */
function initGridPagination(gridId, paginationId, itemsPerPage) {
  var grid = document.getElementById(gridId);
  var pag = document.getElementById(paginationId);
  if (!grid || !pag) return;

  itemsPerPage = itemsPerPage || 20;
  var currentPage = 1;

  function getEligibleItems() {
    return Array.from(grid.children).filter(function(el) {
      if (el.getAttribute('data-placeholder') === 'true') return false;
      return !el.classList.contains('filtered-out') && el.getAttribute('data-filtered') !== 'true';
    });
  }

  function renderPage(page) {
    var items = getEligibleItems();
    var totalPages = Math.ceil(items.length / itemsPerPage) || 1;
    if (page < 1) page = 1;
    if (page > totalPages) page = totalPages;
    currentPage = page;

    var start = (currentPage - 1) * itemsPerPage;
    var end = start + itemsPerPage;

    items.forEach(function(el, i) {
      if (i >= start && i < end) {
        el.classList.remove('pg-hidden');
        el.style.display = '';
      } else {
        el.classList.add('pg-hidden');
        el.style.display = 'none';
      }
    });

    var pagesEl = document.getElementById(paginationId + '-pages') || document.getElementById('pg-pages') || pag.querySelector('.pagination');
    if (pagesEl) {
      pagesEl.innerHTML = '';
      var startPage = Math.max(1, currentPage - 2);
      var endPage = Math.min(totalPages, startPage + 4);
      if (endPage - startPage < 4) {
        startPage = Math.max(1, endPage - 4);
      }

      if (startPage > 1) {
        addPageBtn(pagesEl, 1);
        if (startPage > 2) addEllipsis(pagesEl);
      }

      for (var i = startPage; i <= endPage; i++) {
        addPageBtn(pagesEl, i);
      }

      if (endPage < totalPages) {
        if (endPage < totalPages - 1) addEllipsis(pagesEl);
        addPageBtn(pagesEl, totalPages);
      }
    }

    var prevBtn = document.getElementById(paginationId + '-prev') || document.getElementById('pg-prev') || pag.querySelector('.pg-btn:first-child');
    var nextBtn = document.getElementById(paginationId + '-next') || document.getElementById('pg-next') || pag.querySelector('.pg-btn:last-child');
    var pgInfo  = document.getElementById(paginationId + '-info') || document.getElementById('pg-info') || pag.querySelector('.pg-info');

    if (prevBtn) prevBtn.disabled = currentPage <= 1;
    if (nextBtn) nextBtn.disabled = currentPage >= totalPages;
    if (pgInfo) {
      pgInfo.textContent = 'Showing ' + (items.length === 0 ? 0 : start + 1) + '–' + Math.min(end, items.length) + ' of ' + items.length + ' SME IPOs (Page ' + currentPage + ' of ' + totalPages + ')';
    }
  }

  function addPageBtn(container, pageNum) {
    var btn = document.createElement('button');
    btn.textContent = pageNum;
    btn.className = 'pg-num' + (pageNum === currentPage ? ' active' : '');
    btn.setAttribute('data-page', pageNum);
    btn.addEventListener('click', function() {
      renderPage(pageNum);
      grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
    container.appendChild(btn);
  }

  function addEllipsis(container) {
    var span = document.createElement('span');
    span.textContent = '...';
    span.style.cssText = 'padding: 6px 10px; color: #94a3b8; font-weight: 600;';
    container.appendChild(span);
  }

  var prevBtn = document.getElementById(paginationId + '-prev') || document.getElementById('pg-prev');
  var nextBtn = document.getElementById(paginationId + '-next') || document.getElementById('pg-next');
  
  if (prevBtn) {
    var newPrev = prevBtn.cloneNode(true);
    prevBtn.parentNode.replaceChild(newPrev, prevBtn);
    newPrev.addEventListener('click', function() {
      if (currentPage > 1) {
        renderPage(currentPage - 1);
        grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  }

  if (nextBtn) {
    var newNext = nextBtn.cloneNode(true);
    nextBtn.parentNode.replaceChild(newNext, nextBtn);
    newNext.addEventListener('click', function() {
      var items = getEligibleItems();
      var totalPages = Math.ceil(items.length / itemsPerPage) || 1;
      if (currentPage < totalPages) {
        renderPage(currentPage + 1);
        grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  }

  renderPage(1);
}
