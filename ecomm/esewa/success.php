<?php
echo "<h1> Payment Success</h1>";
?>

<?php
// eSewa response will be sent as a query string
$response_data = $_GET; // This is an example of a GET request

// The signature sent by eSewa will be compared with the generated signature
$response_signature = $response_data['signature'];

// Create the string to verify
$data_to_verify = $response_data['transaction_code'] . $response_data['status'] . $response_data['total_amount'] . $response_data['transaction_uuid'] . $response_data['product_code'];

// Generate the expected signature
$expected_signature = base64_encode(hash_hmac('sha256', $data_to_verify, $secretKey, true));

// Compare the signatures
if ($response_signature === $expected_signature) {
    echo "Payment Successful!";
    // Process payment data here
} else {
    echo "Signature mismatch. Potential fraud detected!";
}
?>
