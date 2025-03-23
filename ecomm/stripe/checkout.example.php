<?php
session_start();
// session_start();
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

    if(!$_SESSION['username'])
    {
        header("location:../login.php");
        exit();
    }


require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key =

\Stripe\Stripe::setApiKey($stripe_secret_key);



$product_name = isset($_POST['product_name']) ? $_POST['product_name'] : 'Default Product';
$unit_amount = isset($_POST['product_price']) ? intval($_POST['product_price']) * 100 : 2000; // Stripe uses amounts in cents
$quantity = isset($_POST['product_quantity']) && is_numeric($_POST['product_quantity']) ? intval($_POST['product_quantity']) : 1;

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['productPrice'] * $item['productQuantity'];
}
$unit_amount = $total * 100;

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/ecommerce/ecomm/stripe/success.php",
    "cancel_url" => "http://localhost/ecommerce/ecomm/index.php",
    "line_items" => [
        [
            "quantity" => $quantity,
            "price_data" =>[
                "currency" => "npr",
                "unit_amount" => $unit_amount,
                "product_data" =>[
                    "name" => $product_name
                   
                ] 
            ]
        ]
    ]
]);

http_response_code(303);
header("Location:".$checkout_session->url);
?>