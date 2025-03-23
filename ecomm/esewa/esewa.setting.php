<?php
$epay_url = "https://rc-epay.esewa.com.np/api/epay/main/v2/form";
// $epay_url = "https://rc-epay.esewa.com.np/auth";
// $transaction_uuid= "241028";
// $successurl = "htt"

$secret_key = "8gBm/:&EnhH.1/q";

$amount = "100";
$tax_amount = "10";
$total_amount = "110";  // Total amount = amount + tax_amount + service charges
$transaction_uuid = uniqid('txn_', true); // Generate a unique transaction ID
$product_code = "EPAYTEST"; // Product code provided by eSewa

// Fields to be included in the signature (sorted)
$data = [
    'total_amount' => $total_amount,
    'transaction_uuid' => $transaction_uuid,
    'product_code' => $product_code,
];

// Sort the fields by name
ksort($data);

// Prepare the string to generate the signature
$signature_string = "";
foreach ($data as $key => $value) {
    $signature_string .= $key . "=" . $value . "&";
}

// Remove the trailing "&"
$signature_string = rtrim($signature_string, "&");

// Generate the HMAC signature
$signature = hash_hmac('sha256', $signature_string, $secret_key);
?>