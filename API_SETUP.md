# IPO Guru Integration Setup Guide

Follow these steps to complete the IPO Guru API integration.

## Step 1: Database Setup
Create a MySQL database named `iposetu` and run the following SQL command to create the `ipos` table:

```sql
CREATE DATABASE IF NOT EXISTS iposetu;
USE iposetu;

CREATE TABLE IF NOT EXISTS ipos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    type VARCHAR(50),
    sub_type VARCHAR(50),
    status VARCHAR(50),
    open_date DATE,
    close_date DATE,
    allotment_date DATE,
    listing_date DATE,
    listing_price DECIMAL(10,2),
    price_band VARCHAR(100),
    issue_price DECIMAL(10,2),
    face_value DECIMAL(10,2),
    lot_size INT,
    issue_size VARCHAR(100),
    sale_type VARCHAR(50),
    listing_exchange VARCHAR(100),
    registrar VARCHAR(255),
    qib_sub DECIMAL(10,2),
    nii_sub DECIMAL(10,2),
    retail_sub DECIMAL(10,2),
    total_sub DECIMAL(10,2),
    sub_updated_at DATETIME,
    gmp_price DECIMAL(10,2),
    gmp_percentage DECIMAL(10,2),
    gmp_updated_at DATETIME,
    created_at DATETIME,
    updated_at DATETIME
);
```

## Step 2: Database Configuration
If your database user and password are not `root` and empty `''`, configure your database credentials in `api/db.php`.

## Step 3: API Key Configuration
Open `api/config.php`.

## Step 4: Add the API Key
Replace:
`$IPO_GURU_API_KEY = 'PASTE_YOUR_API_KEY_HERE';`
with the actual IPO Guru API key once you receive it.

## Step 5: Test the API Connection
Open the following URL in your browser to verify the connection:
[http://localhost/IPOSETU/api/test_api.php](http://localhost/IPOSETU/api/test_api.php)

## Step 6: Fetch IPO Data
If the test API works successfully, run the following URL to fetch IPO data from the API and store it in your database:
[http://localhost/IPOSETU/api/fetch_ipos.php](http://localhost/IPOSETU/api/fetch_ipos.php)

## Step 7: Verify Database
Check your MySQL database `iposetu` to ensure that IPO data has been successfully populated in the `ipos` table.

## Step 8: Frontend Integration
Your frontend can now read the data dynamically by calling:
[http://localhost/IPOSETU/api/get_ipos.php](http://localhost/IPOSETU/api/get_ipos.php)

Example with filters:
[http://localhost/IPOSETU/api/get_ipos.php?status=open&type=mainboard](http://localhost/IPOSETU/api/get_ipos.php?status=open&type=mainboard)
