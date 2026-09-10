# Upstox API → IPOSETU Field Mapping

This document provides a comprehensive mapping between the Upstox API responses and the IPOSETU database. We are ensuring all useful IPO information is captured and stored.

| Upstox Field | Meaning | IPOSETU Database Field | Data Type | API Endpoint | Used on Frontend | Notes |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| `id` | Unique Upstox IPO ID | `upstox_id` *(NEW)* | VARCHAR | List / Detail | Backend mapping | Used to fetch details |
| `symbol` | Trading Symbol | `symbol` *(NEW)* | VARCHAR | List / Detail | URL generation | Missing in existing DB |
| `name` | IPO Name | `name` | VARCHAR | List / Detail | Yes | |
| `status` | Current Status | `status` | VARCHAR | List / Detail | Yes | Normalize to OPEN, UPCOMING, etc. |
| `isin` | ISIN Code | `isin` *(NEW)* | VARCHAR | List / Detail | Yes (Details) | |
| `issue_type` | regular/sme | `type` | VARCHAR | List / Detail | Yes | Map 'regular' to 'Mainboard' |
| `issue_size` | Total Issue Size (Cr) | `issue_size` | VARCHAR | List / Detail | Yes | |
| `industry` | Sector/Industry | `industry` *(NEW)* | VARCHAR | List / Detail | Yes (Details) | |
| `minimum_price` | Lower Price Band | `minimum_price` *(NEW)* | DECIMAL | List / Detail | Yes | |
| `maximum_price` | Upper Price Band | `maximum_price` *(NEW)* | DECIMAL | List / Detail | Yes | Combined to update `price_band` |
| `bidding_start_date` | Open Date | `open_date` | DATE | List / Detail | Yes | |
| `bidding_end_date` | Close Date | `close_date` | DATE | List / Detail | Yes | |
| `daily_start_time` | Market open time | `daily_start_time` *(NEW)*| TIME | Detail | No | |
| `daily_end_time` | Market close time | `daily_end_time` *(NEW)*| TIME | Detail | No | |
| `face_value` | Face Value (₹) | `face_value` | DECIMAL | Detail | Yes | |
| `tick_size` | Tick Size | `tick_size` *(NEW)* | DECIMAL | Detail | No | |
| `lot_size` | Minimum Shares | `lot_size` | INT | Detail | Yes | |
| `minimum_quantity` | Same as lot size | `min_quantity` *(NEW)* | INT | Detail | No | |
| `cut_off_price` | Max bid price | `cut_off_price` *(NEW)* | DECIMAL | Detail | Yes (Details) | |
| `listing_price` | Listing Price | `listing_price` | DECIMAL | Detail | Yes | |
| `listing_exchange` | NSE/BSE | `listing_exchange`| VARCHAR | Detail | Yes | |
| `rhp_url` | RHP Document | `rhp_url` *(NEW)* | TEXT | Detail | Yes (Links) | |
| `drhp_url` | DRHP Document | `drhp_url` *(NEW)* | TEXT | Detail | Yes (Links) | |
| `timeline.allotment_date`| Allotment Date | `allotment_date` | DATE | Detail | Yes | |
| `timeline.listing_date` | Listing Date | `listing_date` | DATE | Detail | Yes | |
| `timeline.refund...` | Refund/Mandate dates| `timeline_json` *(NEW)*| JSON | Detail | Yes (Timeline) | Store all other dates as JSON |
| `registrar_info.name` | Registrar Name | `registrar` | VARCHAR | Detail | Yes | |
| `registrar_info.*` | Email/Web/Phone | `registrar_details`*(NEW)*| JSON | Detail | Yes (Details) | |
| `total_subscription` | Total Sub (x) | `total_sub` | DECIMAL | List / Detail | Yes | |
| `investors` | Category details | `sub_details_json` *(NEW)*| JSON | Detail | Yes | Contains Retail, HNI info if available |

*Note on GMP:* Upstox does not provide Grey Market Premium (GMP). Existing GMP fields (`gmp_price`, `gmp_percentage`, `gmp_updated_at`) will remain unchanged and untouched during the Upstox sync.
