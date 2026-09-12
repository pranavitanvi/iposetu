<?php
require_once $_SERVER['DOCUMENT_ROOT'] . (isset($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';
// api/upstox_sync_service.php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/upstox_client.php';

function syncUpstoxIPOs($pdo) {
    $client = new UpstoxClient();
    if (!$client->isKeyConfigured()) {
        throw new Exception("Upstox API key not configured.");
    }

    $inserted = 0;
    $updated = 0;
    $errors = [];

    // Fetch all combinations (open, upcoming, closed, listed) for both regular and sme
    $statuses = ['upcoming', 'open', 'closed', 'listed'];
    $types = ['regular', 'sme'];

    foreach ($statuses as $status) {
        foreach ($types as $type) {
            $page = 1;
            do {
                $listResponse = $client->fetchIPOList($status, $type, $page, 20); // 20 per page
                if (isset($listResponse['error'])) {
                    $errors[] = "List API Error ($status, $type, page $page): " . $listResponse['error'];
                    break;
                }

                $ipos = $listResponse['data'] ?? [];
                if (empty($ipos)) break;

                foreach ($ipos as $ipo) {
                    try {
                        // Sleep slightly to respect rate limit
                        usleep(100000); 

                        $detailResponse = $client->fetchIPODetails($ipo['id']);
                        if (isset($detailResponse['error'])) {
                            $errors[] = "Detail API Error for {$ipo['id']}: " . $detailResponse['error'];
                            continue;
                        }

                        $details = $detailResponse['data'] ?? [];
                        if (empty($details)) continue;

                        $name = $details['name'];
                        $symbol = $details['symbol'] ?? null;
                        
                        // Look up by name or symbol
                        $stmt = $pdo->prepare("SELECT id FROM ipos WHERE symbol = ? OR name = ? LIMIT 1");
                        $stmt->execute([$symbol, $name]);
                        $existing = $stmt->fetch();

                        $issue_type = isset($details['issue_type']) ? ($details['issue_type'] === 'regular' ? 'Mainboard' : strtoupper($details['issue_type'])) : null;
                        $status_str = strtoupper($details['status'] ?? '');
                        $price_band = (isset($details['minimum_price']) && isset($details['maximum_price'])) ? "₹{$details['minimum_price']} - ₹{$details['maximum_price']}" : null;

                        $qib = null; $nii = null; $retail = null;
                        if (isset($details['investors']) && is_array($details['investors'])) {
                            foreach ($details['investors'] as $inv) {
                                $cat = $inv['category'] ?? '';
                                $sub = isset($inv['subscription']) ? (float)$inv['subscription'] : null;
                                if ($cat === 'QIB') $qib = $sub;
                                if ($cat === 'NII') $nii = $sub;
                                if ($cat === 'IND') $retail = $sub;
                            }
                        }

                        if ($existing) {
                            // Update
                            $updateStmt = $pdo->prepare("
                                UPDATE ipos SET 
                                    upstox_id = ?, symbol = ?, type = ?, status = ?, isin = ?, industry = ?, 
                                    minimum_price = ?, maximum_price = ?, price_band = ?, open_date = ?, 
                                    close_date = ?, allotment_date = ?, listing_date = ?, issue_size = ?, 
                                    lot_size = ?, listing_price = ?, listing_exchange = ?, registrar = ?, 
                                    total_sub = ?, qib_sub = ?, nii_sub = ?, retail_sub = ?, 
                                    daily_start_time = ?, daily_end_time = ?, tick_size = ?, min_quantity = ?, 
                                    cut_off_price = ?, rhp_url = ?, drhp_url = ?, timeline_json = ?, 
                                    registrar_details = ?, sub_details_json = ?, ipo_source = 'Upstox', ipo_last_updated = NOW(), updated_at = NOW()
                                WHERE id = ?
                            ");
                            $updateStmt->execute([
                                $details['id'] ?? null, $symbol, $issue_type, $status_str, $details['isin'] ?? null, $details['industry'] ?? null,
                                $details['minimum_price'] ?? null, $details['maximum_price'] ?? null, $price_band, $details['bidding_start_date'] ?? null,
                                $details['bidding_end_date'] ?? null, $details['timeline']['allotment_date'] ?? null, $details['timeline']['listing_date'] ?? null, $details['issue_size'] ?? null,
                                $details['lot_size'] ?? null, $details['listing_price'] ?? null, $details['listing_exchange'] ?? null, $details['registrar_info']['name'] ?? null,
                                $details['total_subscription'] ?? null, $qib, $nii, $retail,
                                $details['daily_start_time'] ?? null, $details['daily_end_time'] ?? null, $details['tick_size'] ?? null, $details['minimum_quantity'] ?? null,
                                $details['cut_off_price'] ?? null, $details['rhp_url'] ?? null, $details['drhp_url'] ?? null, json_encode($details['timeline'] ?? []),
                                json_encode($details['registrar_info'] ?? []), json_encode($details['investors'] ?? []), $existing['id']
                            ]);
                            $updated++;
                        } else {
                            // Insert
                            $insertStmt = $pdo->prepare("
                                INSERT INTO ipos (
                                    name, upstox_id, symbol, type, status, isin, industry, minimum_price, maximum_price, price_band,
                                    open_date, close_date, allotment_date, listing_date, issue_size, lot_size, listing_price, listing_exchange,
                                    registrar, total_sub, qib_sub, nii_sub, retail_sub, daily_start_time, daily_end_time, tick_size, min_quantity,
                                    cut_off_price, rhp_url, drhp_url, timeline_json, registrar_details, sub_details_json, ipo_source, ipo_last_updated, created_at, updated_at
                                ) VALUES (
                                    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'Upstox', NOW(), NOW(), NOW()
                                )
                            ");
                            $insertStmt->execute([
                                $name, $details['id'] ?? null, $symbol, $issue_type, $status_str, $details['isin'] ?? null, $details['industry'] ?? null, $details['minimum_price'] ?? null, $details['maximum_price'] ?? null, $price_band,
                                $details['bidding_start_date'] ?? null, $details['bidding_end_date'] ?? null, $details['timeline']['allotment_date'] ?? null, $details['timeline']['listing_date'] ?? null, $details['issue_size'] ?? null, $details['lot_size'] ?? null, $details['listing_price'] ?? null, $details['listing_exchange'] ?? null,
                                $details['registrar_info']['name'] ?? null, $details['total_subscription'] ?? null, $qib, $nii, $retail, $details['daily_start_time'] ?? null, $details['daily_end_time'] ?? null, $details['tick_size'] ?? null, $details['minimum_quantity'] ?? null,
                                $details['cut_off_price'] ?? null, $details['rhp_url'] ?? null, $details['drhp_url'] ?? null, json_encode($details['timeline'] ?? []), json_encode($details['registrar_info'] ?? []), json_encode($details['investors'] ?? [])
                            ]);
                            $inserted++;
                        }
                    } catch (Exception $e) {
                        $errors[] = "Error processing {$ipo['id']}: " . $e->getMessage();
                    }
                }

                $totalPages = $listResponse['meta_data']['page']['total_pages'] ?? 1;
                $page++;
            } while ($page <= $totalPages);
        }
    }

    return [
        "success" => empty($errors),
        "message" => "Upstox IPO data fetched",
        "inserted" => $inserted,
        "updated" => $updated,
        "errors" => $errors
    ];
}
?>
