<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// api/search_api.php - Fast Unified Search Engine
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-cache, no-store, must-revalidate');

require_once __DIR__ . '/db.php';

$rawQuery = isset($_GET['q']) ? $_GET['q'] : (isset($_POST['q']) ? $_POST['q'] : '');
$query = trim($rawQuery);

if (mb_strlen($query) < 2) {
    echo json_encode([
        'status' => 'success',
        'query' => $query,
        'total' => 0,
        'results' => [
            'ipos' => [],
            'tools' => [],
            'pages' => [],
            'news' => []
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    exit;
}

$results = [
    'ipos' => [],
    'tools' => [],
    'pages' => [],
    'news' => []
];

// 1. Search IPOs (Mainboard & SME)
try {
    $qLike = '%' . strtolower($query) . '%';
    $stmt = $pdo->prepare("
        SELECT id, name, symbol, type, status, price_band, issue_price, upstox_id, open_date, close_date, listing_date
        FROM ipos 
        WHERE LOWER(name) LIKE ? OR LOWER(symbol) LIKE ? OR LOWER(upstox_id) LIKE ?
        ORDER BY 
            CASE 
                WHEN LOWER(status) IN ('live', 'open') THEN 1 
                WHEN LOWER(status) = 'upcoming' THEN 2 
                ELSE 3 
            END,
            open_date DESC
        LIMIT 8
    ");
    $stmt->execute([$qLike, $qLike, $qLike]);
    $ipos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($ipos as $ipo) {
        $type = strtolower($ipo['type'] ?? 'mainboard');
        // Universal search: redirect directly to category listing page to highlight the result in the table
        $url = ($type === 'sme') ? "<?= BASE_URL ?>sme/" : "<?= BASE_URL ?>ipo/";
        $status = strtoupper($ipo['status'] ?? 'UPCOMING');
        if (strtolower($status) === 'live') $status = 'OPEN';
        
        $price = !empty($ipo['price_band']) ? $ipo['price_band'] : (!empty($ipo['issue_price']) ? '₹' . $ipo['issue_price'] : 'TBA');
        
        $results['ipos'][] = [
            'id' => $ipo['id'],
            'title' => $ipo['name'],
            'symbol' => $ipo['symbol'] ?? '',
            'type' => strtoupper($type),
            'status' => $status,
            'price' => $price,
            'url' => $url,
            'category' => 'IPO'
        ];
    }
} catch (Throwable $e) {
    // Graceful fallback
}

// 2. Search Tools & Calculators Catalog
$toolsCatalog = [
    [
        'title' => 'SIP Calculator',
        'desc' => 'Calculate returns on Systematic Investment Plans',
        'keywords' => ['sip', 'mutual fund', 'investment', 'compounding', 'calculator'],
        'url' => '<?= BASE_URL ?>tools/sip-calculator.php',
        'badge' => 'TOOL'
    ],
    [
        'title' => 'CAGR Calculator',
        'desc' => 'Calculate Compound Annual Growth Rate for investments',
        'keywords' => ['cagr', 'compound', 'growth', 'annual', 'returns', 'calculator'],
        'url' => '<?= BASE_URL ?>tools/cagr-calculator.php',
        'badge' => 'TOOL'
    ],
    [
        'title' => 'IPO Investment Calculator',
        'desc' => 'Estimate allotment amount, lot value, and requirement',
        'keywords' => ['ipo', 'calculator', 'investment', 'lot', 'shares', 'margin'],
        'url' => '<?= BASE_URL ?>tools/ipo-calculator.php',
        'badge' => 'TOOL'
    ],
    [
        'title' => 'Listing Gain Calculator',
        'desc' => 'Forecast estimated profit based on expected listing price and GMP',
        'keywords' => ['listing', 'gain', 'profit', 'gmp', 'grey market', 'calculator'],
        'url' => '<?= BASE_URL ?>tools/listing-gain-calculator.php',
        'badge' => 'TOOL'
    ],
    [
        'title' => 'Brokerage Calculator',
        'desc' => 'Calculate stamp duty, STT, exchange fees, and net brokerage',
        'keywords' => ['brokerage', 'charges', 'stt', 'tax', 'calculator', 'trading'],
        'url' => '<?= BASE_URL ?>tools/brokerage-calculator.php',
        'badge' => 'TOOL'
    ]
];

$qLower = strtolower($query);
foreach ($toolsCatalog as $tool) {
    $matched = (stripos($tool['title'], $query) !== false) || (stripos($tool['desc'], $query) !== false);
    if (!$matched) {
        foreach ($tool['keywords'] as $kw) {
            if (stripos($kw, $qLower) !== false || stripos($qLower, $kw) !== false) {
                $matched = true;
                break;
            }
        }
    }
    if ($matched) {
        $results['tools'][] = [
            'title' => $tool['title'],
            'subtitle' => $tool['desc'],
            'badge' => $tool['badge'],
            'url' => $tool['url'],
            'category' => 'Tools & Calculators'
        ];
    }
}

// 3. Search Key Platform Pages
$pagesCatalog = [
    [
        'title' => 'IPO Calendar',
        'desc' => 'Upcoming IPO issue opening, closing, and listing dates',
        'keywords' => ['calendar', 'dates', 'schedule', 'timeline'],
        'url' => '<?= BASE_URL ?>calendar/'
    ],
    [
        'title' => 'Current Mainboard IPOs',
        'desc' => 'Live and active Mainboard IPOs accepting bids',
        'keywords' => ['current', 'active', 'live ipo', 'open ipo'],
        'url' => '<?= BASE_URL ?>ipo/current'
    ],
    [
        'title' => 'Upcoming IPOs',
        'desc' => 'Forthcoming issues in the pipeline awaiting opening',
        'keywords' => ['upcoming', 'future', 'pipeline', 'sebi approved'],
        'url' => '<?= BASE_URL ?>ipo/upcoming'
    ],
    [
        'title' => 'SME IPO Directory',
        'desc' => 'Small and Medium Enterprise IPO tracking and updates',
        'keywords' => ['sme', 'nse emerge', 'bse sme', 'sme ipo'],
        'url' => '<?= BASE_URL ?>sme/'
    ],
    [
        'title' => 'IPO Learning Center',
        'desc' => 'Beginner guides, ASBA, GMP explanation, and FAQs',
        'keywords' => ['learn', 'guide', 'faq', 'asba', 'tutorial', 'basics'],
        'url' => '<?= BASE_URL ?>learn/'
    ],
    [
        'title' => 'Market & IPO News',
        'desc' => 'Real-time financial markets and IPO news stream',
        'keywords' => ['news', 'market updates', 'headlines'],
        'url' => '<?= BASE_URL ?>news/'
    ]
];

foreach ($pagesCatalog as $page) {
    $matched = (stripos($page['title'], $query) !== false) || (stripos($page['desc'], $query) !== false);
    if (!$matched) {
        foreach ($page['keywords'] as $kw) {
            if (stripos($kw, $qLower) !== false) {
                $matched = true;
                break;
            }
        }
    }
    if ($matched) {
        $results['pages'][] = [
            'title' => $page['title'],
            'subtitle' => $page['desc'],
            'badge' => 'PAGE',
            'url' => $page['url'],
            'category' => 'Explore'
        ];
    }
}

// 4. Search News Cache
$newsCacheFile = __DIR__ . '/news_cache.json';
if (file_exists($newsCacheFile)) {
    $newsContent = @file_get_contents($newsCacheFile);
    $newsData = json_decode($newsContent, true);
    if ($newsData && isset($newsData['news']) && is_array($newsData['news'])) {
        $newsCount = 0;
        foreach ($newsData['news'] as $instKey => $articles) {
            if (!is_array($articles)) continue;
            foreach ($articles as $article) {
                $title = $article['title'] ?? ($article['headline'] ?? '');
                $summary = $article['summary'] ?? ($article['description'] ?? '');
                if (stripos($title, $query) !== false || stripos($summary, $query) !== false) {
                    $results['news'][] = [
                        'title' => $title,
                        'subtitle' => !empty($summary) ? mb_strimwidth($summary, 0, 75, '...') : 'Financial Market News',
                        'badge' => 'NEWS',
                        'url' => '<?= BASE_URL ?>news/',
                        'category' => 'News'
                    ];
                    $newsCount++;
                    if ($newsCount >= 4) break 2;
                }
            }
        }
    }
}

$total = count($results['ipos']) + count($results['tools']) + count($results['pages']) + count($results['news']);

echo json_encode([
    'status' => 'success',
    'query' => $query,
    'total' => $total,
    'results' => $results
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
