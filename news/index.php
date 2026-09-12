<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>News – Track IPOs &amp; Market Intelligence | IPOSETU</title>
<meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for News on IPOSETU."/>
<link class="style-link" href="<?= BASE_URL ?>assets/css/style.css?v=7.1" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0" rel="stylesheet"/>
<link href="<?= BASE_URL ?>assets/css/news-clean.css" rel="stylesheet"/>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/seo_helper.php'; echo iposetu_render_head_seo(); ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<div class="clean-news-wrapper">
    <div class="container">
        <div class="clean-news-header">
            <h1>MARKET NEWS & INSIGHTS</h1>
            <p>Real-time updates, breaking headlines, and financial insights from top market leaders and trending sectors.</p>
        </div>

        <div id="clean-news-grid" class="clean-news-grid">
            <!-- Dynamic News Cards will be inserted here -->
            <p id="news-loading-msg" style="color: #64748b; text-align: center; grid-column: 1 / -1; padding: 40px 0;">Fetching latest news...</p>
        </div>
        
        <div id="news-pagination" style="display: flex; justify-content: center; gap: 8px; margin-top: 40px;">
            <!-- Pagination buttons injected here -->
        </div>
    </div>
</div>

<!-- Footer -->
<!-- Footer -->
<!-- Footer -->
<!-- Footer -->

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>
<!-- Position I: Sticky Bottom Ad Container -->
<div id="sticky-bottom-ad-container"></div>
<script src="<?= BASE_URL ?>assets/js/components.js?v=6.1"></script>
<script src="<?= BASE_URL ?>assets/js/ad-manager.js?v=1.2"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', async () => {
        let allNewsData = [];
        let currentPage = 1;
        const itemsPerPage = 9;

        const grid = document.getElementById('clean-news-grid');
        const paginationContainer = document.getElementById('news-pagination');

        function renderGrid(page) {
            grid.innerHTML = '';
            
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const pageData = allNewsData.slice(start, end);

            pageData.forEach((item) => {
                const tagName = item.tag || 'Market';
                const tagClass = 'tag-' + tagName.toLowerCase().replace(/\s+/g, '');

                let thumb = item.thumbnail || 'https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?q=80&w=600&auto=format&fit=crop';
                const hoursAgo = Math.round((Date.now() - item.published_time) / (1000 * 60 * 60));
                let timeText = '';
                if (hoursAgo <= 0) {
                    timeText = 'Just now';
                } else if (hoursAgo < 24) {
                    timeText = hoursAgo === 1 ? '1 hr ago' : hoursAgo + ' hrs ago';
                } else {
                    const daysAgo = Math.floor(hoursAgo / 24);
                    timeText = daysAgo === 1 ? '1d ago' : daysAgo + 'd ago';
                }
                
                const html = `
                    <a href="${item.article_link}" target="_blank" class="clean-news-card" style="padding-top: 24px;">
                        <div class="clean-card-content" style="padding-top: 0;">
                            <span class="clean-card-tag ${tagClass}">${tagName}</span>
                            <h3 class="clean-card-title">${item.heading}</h3>
                            <p class="clean-card-summary">${item.summary}</p>
                            <div class="clean-card-meta">
                                <i>🕒</i> <span>${timeText}</span>
                            </div>
                        </div>
                    </a>
                `;
                grid.insertAdjacentHTML('beforeend', html);
            });
            
            // Scroll to top of grid
            if(page > 1) {
                document.querySelector('.clean-news-header').scrollIntoView({ behavior: 'smooth' });
            }
        }

        function renderPagination() {
            paginationContainer.innerHTML = '';
            const totalPages = Math.ceil(allNewsData.length / itemsPerPage);
            
            if (totalPages <= 1) return; // No pagination needed

            for (let i = 1; i <= totalPages; i++) {
                const btn = document.createElement('button');
                btn.textContent = i;
                btn.style.padding = '8px 16px';
                btn.style.border = '1px solid #cbd5e1';
                btn.style.borderRadius = '6px';
                btn.style.cursor = 'pointer';
                btn.style.fontWeight = '600';
                btn.style.background = (i === currentPage) ? '#0f172a' : '#ffffff';
                btn.style.color = (i === currentPage) ? '#ffffff' : '#0f172a';
                
                btn.addEventListener('click', () => {
                    currentPage = i;
                    renderGrid(currentPage);
                    renderPagination();
                });
                paginationContainer.appendChild(btn);
            }
        }

        try {
            const response = await fetch('../api/get_news.php');
            const result = await response.json();
            
            if (result.status === 'success' && result.data && result.data.length > 0) {
                allNewsData = result.data;
                renderGrid(currentPage);
                renderPagination();
            } else {
                document.getElementById('news-loading-msg').textContent = 'No news available right now.';
            }
        } catch (e) {
            console.error(e);
            document.getElementById('news-loading-msg').textContent = 'Error loading news.';
        }
    });
</script>
</body>
</html>