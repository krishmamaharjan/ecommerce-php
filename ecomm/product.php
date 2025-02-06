<?php
include 'connection.config.php';

// Fetch product from database
$product_id = 1; // You can change this to get different products dynamically
$sql = "SELECT * FROM product WHERE id = $product_id";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    die("Product not found!");
}

$con->close();
?>
