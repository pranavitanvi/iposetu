<?php
// ipo/detail.php - Dynamic IPO & SME Detail Page with Full SEO & Schema Markup
require_once __DIR__ . '/../api/db.php';
require_once __DIR__ . '/../includes/seo_helper.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$requestedType = isset($_GET['type']) ? strtolower(trim($_GET['type'])) : '';

$ipo = null;

try {
    if (!empty($slug)) {
        // Find by upstox_id, or symbol, or matching name slug
        $stmt = $pdo->prepare("
            SELECT * FROM ipos 
            WHERE upstox_id = :slug 
               OR LOWER(symbol) = :slugLower
               OR LOWER(REPLACE(REPLACE(name, ' ', '-'), '.', '')) = :slugClean
            LIMIT 1
        ");
        $stmt->execute([
            'slug' => $slug,
            'slugLower' => strtolower($slug),
            'slugClean' => strtolower(preg_replace('/[^a-zA-Z0-9-]/', '', $slug))
        ]);
        $ipo = $stmt->fetch();
        
        // If still not found, try fuzzy match on name prefix
        if (!$ipo) {
            $words = explode('-', $slug);
            $prefix = $words[0] ?? '';
            if (strlen($prefix) >= 3) {
                $stmt = $pdo->prepare("SELECT * FROM ipos WHERE LOWER(name) LIKE :likeTerm LIMIT 1");
                $stmt->execute(['likeTerm' => '%' . strtolower($prefix) . '%']);
                $ipo = $stmt->fetch();
            }
        }
    } elseif ($id > 0) {
        $stmt = $pdo->prepare("SELECT * FROM ipos WHERE id = :id LIMIT 1");
        $stmt->execute(['id' => $id]);
        $ipo = $stmt->fetch();
    }
} catch (Throwable $e) {
    // Database fallback
}

// Fallback defaults if not in DB
$companyName = $ipo ? htmlspecialchars($ipo['name']) : ucwords(str_replace('-', ' ', $slug ?: 'IPO Details'));
$symbol = $ipo['symbol'] ?? '';
$ipoType = strtoupper($ipo['type'] ?? ($requestedType === 'sme' ? 'SME' : 'MAINBOARD'));
$status = strtoupper($ipo['status'] ?? 'UPCOMING');
if ($status === 'LIVE') $status = 'OPEN';

$price = !empty($ipo['price_band']) ? $ipo['price_band'] : (!empty($ipo['issue_price']) ? '₹' . $ipo['issue_price'] : '₹120 - ₹130 (Est.)');
$lotSize = !empty($ipo['lot_size']) ? $ipo['lot_size'] : (!empty($ipo['min_quantity']) ? $ipo['min_quantity'] : '100 Shares');
$issueSize = !empty($ipo['issue_size']) ? $ipo['issue_size'] : '₹450.00 Cr';
$openDate = !empty($ipo['open_date']) ? date('d M Y', strtotime($ipo['open_date'])) : 'To Be Announced';
$closeDate = !empty($ipo['close_date']) ? date('d M Y', strtotime($ipo['close_date'])) : 'To Be Announced';
$allotmentDate = !empty($ipo['allotment_date']) ? date('d M Y', strtotime($ipo['allotment_date'])) : 'To Be Announced';
$listingDate = !empty($ipo['listing_date']) ? date('d M Y', strtotime($ipo['listing_date'])) : 'To Be Announced';
$listingExchange = !empty($ipo['listing_exchange']) ? $ipo['listing_exchange'] : 'BSE, NSE';
$registrar = !empty($ipo['registrar']) ? $ipo['registrar'] : 'Link Intime India Private Ltd';
$gmp = !empty($ipo['gmp']) ? '₹' . $ipo['gmp'] : '+₹18 (15%)';
$industry = !empty($ipo['industry']) ? $ipo['industry'] : 'Manufacturing & Engineering';

// Clean company name if it already ends with 'IPO'
$cleanName = preg_replace('/\s+IPO$/i', '', $companyName);
$pageTitle = "{$cleanName} IPO – GMP, Price, Dates & Allotment | IPOSETU";
$metaDescription = "Get latest details for {$cleanName}. Check IPO open date {$openDate}, close date {$closeDate}, price band {$price}, lot size {$lotSize}, live GMP & allotment status on IPOSETU.";

// Decode JSON fields if present
$timeline = !empty($ipo['timeline_json']) ? json_decode($ipo['timeline_json'], true) : [];
$subDetails = !empty($ipo['sub_details_json']) ? json_decode($ipo['sub_details_json'], true) : [];

$productSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'FinancialProduct',
    'name' => $cleanName . ' IPO',
    'description' => $metaDescription,
    'provider' => [
        '@type' => 'Organization',
        'name' => $cleanName
    ],
    'feesAndCommissionsSpecification' => 'Price Band: ' . $price
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail – Track IPOs &amp; Market Intelligence | IPOSETU</title>
    <meta name="description" content="Comprehensive financial information, real-time analytics, and investment tracking for Detail on IPOSETU."/>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css?v=7.4">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/responsive.css?v=2.0">
    
    <!-- SEO Helper: Canonical Tag, Open Graph, Twitter Cards & Structured Data Schema -->
    <?php echo iposetu_render_head_seo([
        'title' => $pageTitle,
        'description' => $metaDescription,
        'schema' => $productSchema
    ]); ?>

    <style>
        .ipo-detail-hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #ffffff;
            padding: 50px 0 40px;
            position: relative;
            overflow: hidden;
        }
        .ipo-detail-hero::after {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.15) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .ipo-badge-status {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        .status-open { background: #dcfce7; color: #15803d; }
        .status-upcoming { background: #dbeafe; color: #1d4ed8; }
        .status-closed { background: #f1f5f9; color: #475569; }
        .status-listed { background: #ede9fe; color: #6d28d9; }

        .ipo-badge-type {
            background: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 700;
            margin-left: 8px;
        }

        .metric-cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
            margin-top: 30px;
        }
        .metric-card {
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 12px;
            padding: 16px 20px;
            transition: transform 0.2s ease, border-color 0.2s ease;
        }
        .metric-card:hover {
            transform: translateY(-2px);
            border-color: rgba(59, 130, 246, 0.5);
        }
        .metric-label {
            font-size: 12px;
            color: #94a3b8;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
        }
        .metric-value {
            font-size: 20px;
            font-weight: 800;
            color: #ffffff;
        }

        .ipo-layout-grid {
            display: grid;
            grid-template-columns: 1fr 340px;
            gap: 32px;
            padding: 40px 0 60px;
        }
        @media (max-width: 991px) {
            .ipo-layout-grid {
                grid-template-columns: 1fr;
            }
        }

        .ipo-box {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 28px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.04);
        }
        .ipo-box-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            border-bottom: 1px solid #f1f5f9;
            padding-bottom: 14px;
        }
        .ipo-box-title {
            font-size: 18px;
            font-weight: 800;
            color: #0f172a;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .details-table {
            width: 100%;
            border-collapse: collapse;
        }
        .details-table tr {
            border-bottom: 1px solid #f1f5f9;
        }
        .details-table tr:last-child {
            border-bottom: none;
        }
        .details-table td {
            padding: 12px 8px;
            font-size: 14px;
        }
        .details-table td:first-child {
            color: #64748b;
            font-weight: 600;
            width: 40%;
        }
        .details-table td:last-child {
            color: #0f172a;
            font-weight: 700;
            text-align: right;
        }

        .timeline-steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            margin-top: 16px;
        }
        @media (max-width: 768px) {
            .timeline-steps {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        .timeline-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 16px;
            text-align: center;
        }
        .timeline-title {
            font-size: 12px;
            font-weight: 700;
            color: #64748b;
            text-transform: uppercase;
            margin-bottom: 6px;
        }
        .timeline-date {
            font-size: 14px;
            font-weight: 800;
            color: #0f172a;
        }

        .cta-box {
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
            border: 1px solid #bfdbfe;
            border-radius: 16px;
            padding: 24px;
            text-align: center;
        }
        .cta-btn {
            display: block;
            width: 100%;
            background: #2563eb;
            color: #ffffff;
            font-weight: 700;
            font-size: 15px;
            padding: 14px;
            border-radius: 10px;
            text-decoration: none;
            text-align: center;
            margin-top: 16px;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.25);
            transition: all 0.2s ease;
        }
        .cta-btn:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/header.php'; ?>

<!-- Hero Section with Primary H1 -->
<div class="ipo-detail-hero">
    <div class="container">
        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px; flex-wrap: wrap;">
            <span class="ipo-badge-status status-<?php echo strtolower($status); ?>"><?php echo htmlspecialchars($status); ?></span>
            <span class="ipo-badge-type"><?php echo htmlspecialchars($ipoType); ?> IPO</span>
            <?php if (!empty($symbol)): ?>
                <span style="background: rgba(255,255,255,0.1); padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: 700; color: #93c5fd;">
                    NSE/BSE: <?php echo htmlspecialchars($symbol); ?>
                </span>
            <?php endif; ?>
        </div>

        <h1 style="font-size: 36px; font-weight: 800; color: #ffffff; margin-bottom: 8px; line-height: 1.2;">
            <?php echo htmlspecialchars($companyName); ?>
        </h1>
        <p style="color: #94a3b8; font-size: 15px; max-width: 750px; line-height: 1.5; margin: 0;">
            Comprehensive tracking for <?php echo htmlspecialchars($companyName); ?> in the <?php echo htmlspecialchars($industry); ?> sector. Follow live bidding dates, GMP estimates, price band, and allotment dates.
        </p>

        <!-- Metric Highlight Bar -->
        <div class="metric-cards-grid">
            <div class="metric-card">
                <div class="metric-label">Price Band</div>
                <div class="metric-value"><?php echo htmlspecialchars($price); ?></div>
            </div>
            <div class="metric-card">
                <div class="metric-label">Lot Size</div>
                <div class="metric-value"><?php echo htmlspecialchars($lotSize); ?></div>
            </div>
            <div class="metric-card">
                <div class="metric-label">Issue Size</div>
                <div class="metric-value"><?php echo htmlspecialchars($issueSize); ?></div>
            </div>
            <div class="metric-card">
                <div class="metric-label">Grey Market (GMP)</div>
                <div class="metric-value" style="color: #4ade80;"><?php echo htmlspecialchars($gmp); ?></div>
            </div>
        </div>
    </div>
</div>

<!-- Main Detail Content Layout -->
<div class="container">
    <div class="ipo-layout-grid">
        <!-- Main Column -->
        <div>
            <!-- Timeline Section -->
            <div class="ipo-box">
                <div class="ipo-box-header">
                    <div class="ipo-box-title">
                        <span>📅</span> Key IPO Dates &amp; Timeline
                    </div>
                </div>
                <div class="timeline-steps">
                    <div class="timeline-card">
                        <div class="timeline-title">Issue Opens</div>
                        <div class="timeline-date"><?php echo htmlspecialchars($openDate); ?></div>
                    </div>
                    <div class="timeline-card">
                        <div class="timeline-title">Issue Closes</div>
                        <div class="timeline-date"><?php echo htmlspecialchars($closeDate); ?></div>
                    </div>
                    <div class="timeline-card">
                        <div class="timeline-title">Basis Allotment</div>
                        <div class="timeline-date"><?php echo htmlspecialchars($allotmentDate); ?></div>
                    </div>
                    <div class="timeline-card">
                        <div class="timeline-title">Listing Date</div>
                        <div class="timeline-date"><?php echo htmlspecialchars($listingDate); ?></div>
                    </div>
                </div>
            </div>

            <!-- Issue Summary Table -->
            <div class="ipo-box">
                <div class="ipo-box-header">
                    <div class="ipo-box-title">
                        <span>📊</span> IPO Issue Details
                    </div>
                </div>
                <table class="details-table">
                    <tbody>
                        <tr>
                            <td>Company Name</td>
                            <td><?php echo htmlspecialchars($companyName); ?></td>
                        </tr>
                        <tr>
                            <td>Security Type</td>
                            <td>Equity Shares (Face Value ₹10)</td>
                        </tr>
                        <tr>
                            <td>Issue Type</td>
                            <td>Book Built Issue IPO</td>
                        </tr>
                        <tr>
                            <td>Price Band</td>
                            <td><?php echo htmlspecialchars($price); ?></td>
                        </tr>
                        <tr>
                            <td>Minimum Investment Lot</td>
                            <td><?php echo htmlspecialchars($lotSize); ?></td>
                        </tr>
                        <tr>
                            <td>Total Issue Size</td>
                            <td><?php echo htmlspecialchars($issueSize); ?></td>
                        </tr>
                        <tr>
                            <td>Listing Exchanges</td>
                            <td><?php echo htmlspecialchars($listingExchange); ?></td>
                        </tr>
                        <tr>
                            <td>Registrar to Issue</td>
                            <td><?php echo htmlspecialchars($registrar); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- About Company & Business -->
            <div class="ipo-box">
                <div class="ipo-box-header">
                    <div class="ipo-box-title">
                        <span>🏢</span> About <?php echo htmlspecialchars($companyName); ?>
                    </div>
                </div>
                <p style="color: #475569; font-size: 15px; line-height: 1.7; margin-bottom: 16px;">
                    <strong><?php echo htmlspecialchars($companyName); ?></strong> is a distinguished enterprise operating in the <strong><?php echo htmlspecialchars($industry); ?></strong> industry in India. The company is raising capital through this public issue to fuel business expansion, capital expenditures, and general corporate requirements.
                </p>
                <p style="color: #475569; font-size: 15px; line-height: 1.7;">
                    Investors can track real-time subscription figures, Grey Market Premium (GMP) fluctuations, and allotment updates directly through IPOSETU data terminal.
                </p>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div>
            <!-- Quick Apply / Action Box -->
            <div class="cta-box">
                <div style="font-size: 12px; font-weight: 800; color: #2563eb; text-transform: uppercase; letter-spacing: 0.5px;">Ready to Bid?</div>
                <h3 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 8px 0 12px;">Apply via ASBA or UPI</h3>
                <p style="font-size: 13px; color: #64748b; line-height: 1.5; margin-bottom: 16px;">
                    Ensure your UPI ID is linked with your demat account or apply seamlessly through your net banking ASBA facility.
                </p>
                <a href="<?= BASE_URL ?>allotment.php" class="cta-btn">Check Allotment Status &rarr;</a>
                <a href="<?= BASE_URL ?>calendar/" style="display: block; margin-top: 10px; font-size: 13px; color: #64748b; text-decoration: none; font-weight: 600;">
                    &larr; Back to IPO Calendar
                </a>
            </div>

            <!-- Calculators Widget -->
            <div class="ipo-box" style="margin-top: 24px;">
                <div class="ipo-box-header">
                    <div class="ipo-box-title" style="font-size: 16px;">
                        <span>🧮</span> Quick Calculators
                    </div>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 12px;">
                        <a href="<?= BASE_URL ?>tools/ipo-calculator.php" style="color: #2563eb; font-weight: 600; text-decoration: none; font-size: 14px; display: flex; align-items: center; justify-content: space-between;">
                            <span>IPO Margin Calculator</span> <span>&rarr;</span>
                        </a>
                    </li>
                    <li style="margin-bottom: 12px;">
                        <a href="<?= BASE_URL ?>tools/listing-gain-calculator.php" style="color: #2563eb; font-weight: 600; text-decoration: none; font-size: 14px; display: flex; align-items: center; justify-content: space-between;">
                            <span>Listing Gain Calculator</span> <span>&rarr;</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>tools/sip-calculator.php" style="color: #2563eb; font-weight: 600; text-decoration: none; font-size: 14px; display: flex; align-items: center; justify-content: space-between;">
                            <span>SIP Compounding Calculator</span> <span>&rarr;</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/footer.php'; ?>

</body>
</html>
