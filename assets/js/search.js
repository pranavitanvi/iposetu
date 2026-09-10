/**
 * IPOSETU Search & PDF-Style Text Highlighter
 * 1. Attached dropdown directly beneath the header search bar
 * 2. PDF-style yellow text highlighting on target pages with smooth scroll
 */
(function() {
    'use strict';

    let searchContainer = null;
    let searchInput = null;
    let searchDropdown = null;
    let searchResults = null;
    let searchClear = null;
    let debounceTimer = null;
    let currentFocusIndex = -1;
    let currentItems = [];

    function initSearch() {
        searchContainer = document.getElementById('header-search-container');
        searchInput = document.getElementById('header-search-input');
        searchDropdown = document.getElementById('header-search-dropdown');
        searchResults = document.getElementById('header-search-dropdown-results');
        searchClear = document.getElementById('header-search-clear');

        // Check and apply PDF-style yellow text highlight on page load
        applyPageHighlightFromUrl();

        if (!searchContainer || !searchInput || !searchDropdown) return;

        // Focus & open dropdown on input click
        searchInput.addEventListener('focus', function() {
            openDropdown();
            if (!searchInput.value.trim()) {
                renderDefaultSuggestions();
            }
        });

        // Clear input button
        if (searchClear) {
            searchClear.addEventListener('click', function(e) {
                e.stopPropagation();
                searchInput.value = '';
                searchInput.focus();
                searchClear.style.display = 'none';
                renderDefaultSuggestions();
            });
        }

        // Live input typing with debounce
        searchInput.addEventListener('input', function() {
            const query = searchInput.value.trim();
            if (searchClear) {
                searchClear.style.display = query ? 'flex' : 'none';
            }

            clearTimeout(debounceTimer);
            if (query.length < 2) {
                renderDefaultSuggestions();
                return;
            }

            searchResults.innerHTML = `
                <div style="padding:24px;text-align:center;color:#64748b;font-size:13px;">
                    <div class="search-spinner" style="margin:0 auto 10px;"></div>
                    Searching IPOs & tools...
                </div>
            `;
            openDropdown();

            debounceTimer = setTimeout(() => {
                fetchSearchResults(query);
            }, 200);
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!searchContainer.contains(e.target)) {
                closeDropdown();
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            // Global shortcut Ctrl+K / Cmd+K
            if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 'k') {
                e.preventDefault();
                searchInput.focus();
                openDropdown();
            } else if (e.key === 'Escape' && isDropdownOpen()) {
                e.preventDefault();
                closeDropdown();
                searchInput.blur();
            }
        });

        searchInput.addEventListener('keydown', function(e) {
            if (!currentItems.length) return;

            if (e.key === 'ArrowDown') {
                e.preventDefault();
                currentFocusIndex = (currentFocusIndex + 1) % currentItems.length;
                updateFocusItem();
            } else if (e.key === 'ArrowUp') {
                e.preventDefault();
                currentFocusIndex = (currentFocusIndex - 1 + currentItems.length) % currentItems.length;
                updateFocusItem();
            } else if (e.key === 'Enter') {
                e.preventDefault();
                if (currentFocusIndex >= 0 && currentFocusIndex < currentItems.length) {
                    const link = currentItems[currentFocusIndex].querySelector('a');
                    if (link) handleResultSelection(link.href, link.getAttribute('data-query') || searchInput.value.trim());
                } else if (currentItems.length > 0) {
                    const firstLink = currentItems[0].querySelector('a');
                    if (firstLink) handleResultSelection(firstLink.href, firstLink.getAttribute('data-query') || searchInput.value.trim());
                }
            }
        });

        // Connect any external trigger buttons (like homepage hero search)
        document.querySelectorAll('.search-trigger-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                searchInput.focus();
                openDropdown();
            });
        });
    }

    function isDropdownOpen() {
        return searchDropdown && searchDropdown.style.display !== 'none';
    }

    function openDropdown() {
        if (!searchDropdown) return;
        searchDropdown.style.display = 'block';
    }

    function closeDropdown() {
        if (!searchDropdown) return;
        searchDropdown.style.display = 'none';
        currentFocusIndex = -1;
    }

    function fetchSearchResults(query) {
        fetch(`/iposetu/api/search_api.php?q=${encodeURIComponent(query)}`)
            .then(res => res.json())
            .then(data => {
                renderSearchResults(data, query);
            })
            .catch(() => {
                searchResults.innerHTML = `<div class="search-empty-state"><p style="color:#ef4444;font-size:13px;">Error loading results. Please try again.</p></div>`;
            });
    }

    function appendHighlightParam(url, query) {
        if (!url || !query) return url;
        const separator = url.includes('?') ? '&' : '?';
        return `${url}${separator}highlight=${encodeURIComponent(query)}`;
    }

    function handleResultSelection(url, query) {
        closeDropdown();
        const currentPath = window.location.pathname;
        const targetUrl = new URL(url, window.location.origin);

        const norm = (p) => p.replace(/\/index(\.php)?$/, '').replace(/\/+$/, '');
        const normCurrent = norm(currentPath);
        const normTarget = norm(targetUrl.pathname);

        // If target is the current page, scroll and highlight directly without reload
        if (normTarget === normCurrent) {
            highlightWordOnPage(query, true);
        } else {
            window.location.href = appendHighlightParam(url, query);
        }
    }

    function renderDefaultSuggestions() {
        currentFocusIndex = -1;
        currentItems = [];
        searchResults.innerHTML = `
            <div class="search-section-header">QUICK SHORTCUTS</div>
            <div class="search-result-group">
                <div class="search-item" data-index="0">
                    <a href="/iposetu/tools/sip-calculator.php" class="search-item-link" data-query="SIP Calculator">
                        <div class="search-item-icon">🧮</div>
                        <div class="search-item-info">
                            <div class="search-item-title">SIP Calculator</div>
                            <div class="search-item-sub">Calculate compounding returns on monthly SIP</div>
                        </div>
                        <span class="search-item-badge badge-tool">TOOL</span>
                    </a>
                </div>
                <div class="search-item" data-index="1">
                    <a href="/iposetu/ipo/current" class="search-item-link" data-query="Current IPOs">
                        <div class="search-item-icon">📈</div>
                        <div class="search-item-info">
                            <div class="search-item-title">Current Mainboard IPOs</div>
                            <div class="search-item-sub">Actively open and upcoming public issues</div>
                        </div>
                        <span class="search-item-badge badge-ipo">IPO</span>
                    </a>
                </div>
                <div class="search-item" data-index="2">
                    <a href="/iposetu/sme/" class="search-item-link" data-query="SME IPO">
                        <div class="search-item-icon">🚀</div>
                        <div class="search-item-info">
                            <div class="search-item-title">SME IPO Directory</div>
                            <div class="search-item-sub">NSE Emerge & BSE SME issues</div>
                        </div>
                        <span class="search-item-badge badge-sme">SME</span>
                    </a>
                </div>
                <div class="search-item" data-index="3">
                    <a href="/iposetu/tools/listing-gain-calculator.php" class="search-item-link" data-query="Listing Gain">
                        <div class="search-item-icon">💰</div>
                        <div class="search-item-info">
                            <div class="search-item-title">Listing Gain Calculator</div>
                            <div class="search-item-sub">Forecast listing profit & GMP returns</div>
                        </div>
                        <span class="search-item-badge badge-tool">TOOL</span>
                    </a>
                </div>
                <div class="search-item" data-index="4">
                    <a href="/iposetu/calendar/" class="search-item-link" data-query="Calendar">
                        <div class="search-item-icon">📅</div>
                        <div class="search-item-info">
                            <div class="search-item-title">IPO Calendar</div>
                            <div class="search-item-sub">Opening, closing, and allotment schedule</div>
                        </div>
                        <span class="search-item-badge badge-page">PAGE</span>
                    </a>
                </div>
            </div>
        `;
        bindResultClickEvents();
    }

    function renderSearchResults(data, query) {
        currentFocusIndex = -1;
        currentItems = [];

        if (!data || data.total === 0) {
            searchResults.innerHTML = `
                <div class="search-empty-state">
                    <p style="font-weight:700;color:#0f172a;margin-bottom:4px;font-size:14px;">No results found for "${escapeHtml(query)}"</p>
                    <p style="color:#64748b;font-size:12px;">Try searching for "SIP", "IPO", "Rentomojo", or "Calendar".</p>
                </div>
            `;
            return;
        }

        let html = '';
        let itemIndex = 0;

        // Render IPOs
        if (data.results.ipos && data.results.ipos.length > 0) {
            html += `<div class="search-section-header">IPOs (${data.results.ipos.length})</div><div class="search-result-group">`;
            data.results.ipos.forEach(ipo => {
                const statusBadgeClass = ipo.status === 'OPEN' ? 'badge-open' : (ipo.status === 'UPCOMING' ? 'badge-upcoming' : 'badge-listed');
                html += `
                    <div class="search-item" data-index="${itemIndex++}">
                        <a href="${ipo.url}" class="search-item-link" data-query="${escapeHtml(ipo.title)}">
                            <div class="search-item-icon">🏢</div>
                            <div class="search-item-info">
                                <div class="search-item-title">
                                    ${highlightMatch(ipo.title, query)}
                                    ${ipo.symbol ? `<span class="search-item-symbol">${ipo.symbol}</span>` : ''}
                                </div>
                                <div class="search-item-sub">
                                    <span>${ipo.type} IPO</span> • <span>Price: ${ipo.price}</span>
                                </div>
                            </div>
                            <span class="search-item-badge ${statusBadgeClass}">${ipo.status}</span>
                        </a>
                    </div>
                `;
            });
            html += `</div>`;
        }

        // Render Tools & Calculators
        if (data.results.tools && data.results.tools.length > 0) {
            html += `<div class="search-section-header">INVESTMENT TOOLS (${data.results.tools.length})</div><div class="search-result-group">`;
            data.results.tools.forEach(tool => {
                html += `
                    <div class="search-item" data-index="${itemIndex++}">
                        <a href="${tool.url}" class="search-item-link" data-query="${escapeHtml(query)}">
                            <div class="search-item-icon">🧮</div>
                            <div class="search-item-info">
                                <div class="search-item-title">${highlightMatch(tool.title, query)}</div>
                                <div class="search-item-sub">${tool.subtitle}</div>
                            </div>
                            <span class="search-item-badge badge-tool">TOOL</span>
                        </a>
                    </div>
                `;
            });
            html += `</div>`;
        }

        // Render Platform Pages
        if (data.results.pages && data.results.pages.length > 0) {
            html += `<div class="search-section-header">EXPLORE (${data.results.pages.length})</div><div class="search-result-group">`;
            data.results.pages.forEach(page => {
                html += `
                    <div class="search-item" data-index="${itemIndex++}">
                        <a href="${page.url}" class="search-item-link" data-query="${escapeHtml(query)}">
                            <div class="search-item-icon">🧭</div>
                            <div class="search-item-info">
                                <div class="search-item-title">${highlightMatch(page.title, query)}</div>
                                <div class="search-item-sub">${page.subtitle}</div>
                            </div>
                            <span class="search-item-badge badge-page">PAGE</span>
                        </a>
                    </div>
                `;
            });
            html += `</div>`;
        }

        // Render News
        if (data.results.news && data.results.news.length > 0) {
            html += `<div class="search-section-header">NEWS & ARTICLES (${data.results.news.length})</div><div class="search-result-group">`;
            data.results.news.forEach(item => {
                html += `
                    <div class="search-item" data-index="${itemIndex++}">
                        <a href="${item.url}" class="search-item-link" data-query="${escapeHtml(query)}">
                            <div class="search-item-icon">📰</div>
                            <div class="search-item-info">
                                <div class="search-item-title">${highlightMatch(item.title, query)}</div>
                                <div class="search-item-sub">${item.subtitle}</div>
                            </div>
                            <span class="search-item-badge badge-news">NEWS</span>
                        </a>
                    </div>
                `;
            });
            html += `</div>`;
        }

        searchResults.innerHTML = html;
        bindResultClickEvents();
    }

    function bindResultClickEvents() {
        currentItems = Array.from(searchResults.querySelectorAll('.search-item'));
        searchResults.querySelectorAll('.search-item-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const q = this.getAttribute('data-query') || searchInput.value.trim();
                handleResultSelection(this.getAttribute('href'), q);
            });
        });
    }

    function updateFocusItem() {
        currentItems.forEach((el, idx) => {
            if (idx === currentFocusIndex) {
                el.classList.add('focused');
                el.scrollIntoView({ block: 'nearest', behavior: 'smooth' });
            } else {
                el.classList.remove('focused');
            }
        });
    }

    function highlightMatch(text, query) {
        if (!text || !query) return escapeHtml(text);
        const escaped = escapeHtml(text);
        const qEscaped = query.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
        const regex = new RegExp(`(${qEscaped})`, 'gi');
        return escaped.replace(regex, '<mark class="search-highlight">$1</mark>');
    }

    function escapeHtml(str) {
        if (!str) return '';
        return str
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }

    /* ==========================================================================
       PDF-STYLE YELLOW HIGHLIGHT & SCROLL TO TEXT
       ========================================================================== */

    function applyPageHighlightFromUrl() {
        const urlParams = new URLSearchParams(window.location.search);
        const term = urlParams.get('highlight');
        if (term && term.trim()) {
            const cleanTerm = term.trim();
            // Initial attempt after brief DOM layout
            setTimeout(() => {
                highlightWordOnPage(cleanTerm, true);
            }, 200);

            // Secondary fallback attempt if layout or tables take longer to render
            setTimeout(() => {
                if (!document.querySelector('.pdf-highlight-yellow')) {
                    highlightWordOnPage(cleanTerm, true);
                }
            }, 700);
        }
    }

    function highlightWordOnPage(term, shouldScroll) {
        if (!term || term.trim().length < 2) return;
        const cleanTerm = term.trim();

        // 1. Clean previous highlights
        document.querySelectorAll('.pdf-highlight-yellow').forEach(el => {
            const parent = el.parentNode;
            if (parent) {
                parent.replaceChild(document.createTextNode(el.textContent), el);
                parent.normalize();
            }
        });

        // 2. Build regex supporting exact phrase + meaningful distinctive words (>= 3 chars)
        const stopWords = new Set(['ipo', 'ipos', 'ltd', 'limited', 'the', 'and', 'for', 'all', 'pvt', 'corporation', 'india']);
        const escapeRegex = (s) => s.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');

        const cleanNoIpo = cleanTerm.replace(/\s+IPO$/i, '').trim();
        const words = cleanTerm.split(/\s+/)
            .map(w => w.trim())
            .filter(w => w.length >= 3 && !stopWords.has(w.toLowerCase()))
            .map(escapeRegex);

        const patternTokens = [escapeRegex(cleanTerm)];
        if (cleanNoIpo.length >= 3 && cleanNoIpo !== cleanTerm) {
            patternTokens.push(escapeRegex(cleanNoIpo));
        }
        words.forEach(w => {
            if (!patternTokens.includes(w)) patternTokens.push(w);
        });

        const regex = new RegExp(`(${patternTokens.join('|')})`, 'gi');

        // 3. Walk document.body text nodes
        const walker = document.createTreeWalker(
            document.body,
            NodeFilter.SHOW_TEXT,
            {
                acceptNode: function(node) {
                    const parent = node.parentElement;
                    if (!parent) return NodeFilter.FILTER_REJECT;
                    const tag = parent.tagName.toLowerCase();
                    if (['script', 'style', 'header', 'nav', 'svg', 'button', 'input', 'textarea', 'select', 'noscript'].includes(tag)) {
                        return NodeFilter.FILTER_REJECT;
                    }
                    if (parent.closest('.site-header, .header-search-container, #header-search-dropdown, .ticker-wrap, .pdf-highlight-yellow')) {
                        return NodeFilter.FILTER_REJECT;
                    }
                    if (!node.nodeValue || !node.nodeValue.trim()) {
                        return NodeFilter.FILTER_SKIP;
                    }
                    return regex.test(node.nodeValue) ? NodeFilter.FILTER_ACCEPT : NodeFilter.FILTER_SKIP;
                }
            }
        );

        const nodesToReplace = [];
        while (walker.nextNode()) {
            nodesToReplace.push(walker.currentNode);
        }

        let firstMatch = null;
        let matchCount = 0;

        nodesToReplace.forEach(node => {
            const text = node.nodeValue;
            const fragment = document.createDocumentFragment();
            let lastIndex = 0;
            let match;
            regex.lastIndex = 0;

            while ((match = regex.exec(text)) !== null) {
                // Preceding text
                if (match.index > lastIndex) {
                    fragment.appendChild(document.createTextNode(text.substring(lastIndex, match.index)));
                }

                // Yellow highlight mark
                const mark = document.createElement('mark');
                mark.className = 'pdf-highlight-yellow';
                mark.textContent = match[0];
                fragment.appendChild(mark);

                if (!firstMatch) firstMatch = mark;
                matchCount++;
                lastIndex = regex.lastIndex;
            }

            if (lastIndex < text.length) {
                fragment.appendChild(document.createTextNode(text.substring(lastIndex)));
            }

            if (node.parentNode) {
                node.parentNode.replaceChild(fragment, node);
            }
        });

        // 4. Smoothly scroll to the target match centered in the viewport
        if (shouldScroll) {
            // Prioritize match inside table body / row / card
            let targetMatch = document.querySelector('tbody .pdf-highlight-yellow, table tr .pdf-highlight-yellow, .ipo-card .pdf-highlight-yellow, .report-grid .pdf-highlight-yellow');
            if (!targetMatch) {
                targetMatch = firstMatch;
            }
            if (targetMatch) {
                setTimeout(() => {
                    targetMatch.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }, 120);
            }
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initSearch);
    } else {
        initSearch();
    }
})();
