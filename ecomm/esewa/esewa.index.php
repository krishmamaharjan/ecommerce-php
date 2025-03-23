
<?php
// include 'esewa.setting.php';
// $transaction_uuid = uniqid('txn_', true);
?>
<?php
    $total_amount='110';
    $transaction_uuid='11-201-13';
    $product_code='EPAYTEST';
    $secretkey='8gBm/:&EnhH.1/q';
    $to_sign="total_amount=$total_amount&transaction_uuid=$transaction_uuid&product_code=$product_code";
    $s = hash_hmac('sha256',$to_sign,$secretkey, true);
    $hash= base64_encode($s); 
    echo $hash;

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!-- The Form in HTML -->
<!-- <form action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" method="POST">
    <input type="text" id="amount" name="amount" value="100" required>
    <input type="text" id="tax_amount" name="tax_amount" value="10" required>
    <input type="text" id="total_amount" name="total_amount" value="110" required>
    <input type="text" id="transaction_uuid" name="transaction_uuid" value="241028" required>
    <input type="text" id="product_code" name="product_code" value="EPAYTEST" required>
    <input type="text" id="product_service_charge" name="product_service_charge" value="0" required>
    <input type="text" id="product_delivery_charge" name="product_delivery_charge" value="0" required>
    <input type="text" id="success_url" name="success_url" value="https://developer.esewa.com.np/success" required>
    <input type="text" id="failure_url" name="failure_url" value="https://developer.esewa.com.np/failure" required>
    <input type="text" id="signed_field_names" name="signed_field_names" value="total_amount,transaction_uuid,product_code" required> -->
    <!-- <input type="text" id="signature" name="signature" value="<?php //echo $signature; ?>" required> Signature here -->
    <!-- <input value="Submit" type="submit"> -->
<!-- </form> -->

<form action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" method="POST">
    <input type="text" id="amount" name="amount" value="<?php echo $amount; ?>" required>
    <input type="text" id="tax_amount" name="tax_amount" value="<?php echo $tax_amount; ?>" required>
    <input type="text" id="total_amount" name="total_amount" value="<?php echo $total_amount; ?>" required>
    <input type="text" id="transaction_uuid" name="transaction_uuid" value="<?php echo $transaction_uuid ?>" required>
    <input type="text" id="product_code" name="product_code" value="<?php echo $product_code; ?>" required>
    <input type="text" id="product_service_charge" name="product_service_charge" value="0" required>
    <input type="text" id="product_delivery_charge" name="product_delivery_charge" value="0" required>
    <input type="text" id="success_url" name="success_url" value="https://developer.esewa.com.np/success" required>
    <input type="text" id="failure_url" name="failure_url" value="https://developer.esewa.com.np/failure" required>
    <input type="text" id="signed_field_names" name="signed_field_names" value="total_amount,transaction_uuid,product_code" required>
    <input type="text" id="signature" name="signature" value="<?php echo $hash ?>" required>
    <input value="Submit" type="submit">
</form>


</body>
</html>