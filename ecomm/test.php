<!-- <?php
$product = [
    'name' => 'Ultima Boom 181 ANC',
    'description' => 'App Support | 45 Hrs Playback Time | Custom EQ | Hi-Fi Drivers | 45ms Low Latency | ANC | Game Mode',
    'brand' => 'Ultima Lifestyle',
    'price' => 2099,
    'original_price' => 3999,
    'discount' => 48,
    'color' => 'Carbon Black',
    'warranty' => '6 Months Brand Warranty',
    'return_policy' => '14 Days Free Returns',
    'delivery_fee' => 70,
    'delivery_date' => '9 Feb',
    'cash_on_delivery' => true,
    'image' => 'ultima-boom-181.png',
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 80%; margin: auto; }
        .product { display: flex; gap: 20px; }
        .image { width: 300px; }
        .details { flex-grow: 1; }
        .price { color: orange; font-size: 24px; }
        .old-price { text-decoration: line-through; color: grey; }
        .btn { padding: 10px 20px; border: none; cursor: pointer; margin-right: 10px; }
        .buy { background: blue; color: white; }
        .cart { background: orange; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <div class="product">
            <img src="<?= $product['image']; ?>" alt="<?= $product['name']; ?>" class="image">
            <div class="details">
                <h1><?= $product['name']; ?></h1>
                <p><?= $product['description']; ?></p>
                <p>Brand: <?= $product['brand']; ?></p>
                <p class="price">Rs. <?= number_format($product['price']); ?>
                    <span class="old-price">Rs. <?= number_format($product['original_price']); ?></span>
                    (-<?= $product['discount']; ?>%)
                </p>
                <p>Color: <?= $product['color']; ?></p>
                <p>Warranty: <?= $product['warranty']; ?></p>
                <p>Return Policy: <?= $product['return_policy']; ?></p>
                <p>Delivery Fee: Rs. <?= $product['delivery_fee']; ?> (Expected by <?= $product['delivery_date']; ?>)</p>
                <p>Cash on Delivery: <?= $product['cash_on_delivery'] ? 'Available' : 'Not Available'; ?></p>
                <button class="btn buy">Buy Now</button>
                <button class="btn cart">Add to Cart</button>
            </div>
        </div>
    </div>
</body>
</html> -->



<?php
$product = [
    'name' => 'Dream Maker UK21',
    'price' => 3000,
    'currency' => 'NPR',
    'image' => 'dream-maker-uk21.png', // Make sure this image is available in the same directory
    'description' => 'For players who wish to experiment with diverse sounds and discover new musical genres, the Dream Maker UK21 is the perfect option because of its unique and energizing tone.',
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $product['name']; ?> - Guitar Shop Nepal</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f8f8f8; }
        .container { width: 80%; margin: auto; display: flex; padding: 20px; background: white; }
        .product-image { width: 50%; display: flex; justify-content: center; align-items: center; }
        .product-image img { max-width: 100%; height: auto; }
        .product-details { width: 50%; padding: 20px; }
        .product-details h1 { font-size: 28px; }
        .price { font-size: 24px; font-weight: bold; margin: 10px 0; }
        .quantity { display: flex; align-items: center; margin: 10px 0; }
        .quantity input { width: 50px; text-align: center; font-size: 16px; padding: 5px; }
        .btn { display: block; width: 100%; padding: 15px; margin: 10px 0; text-align: center; border: none; font-size: 16px; cursor: pointer; }
        .cart { background: white; border: 2px solid black; color: black; }
        .buy { background: black; color: white; }
    </style>
</head>
<body>

<div class="container">
    <!-- Product Image -->
    <div class="product-image">
        <img src="<?= $product['image']; ?>" alt="<?= $product['name']; ?>">
    </div>

    <!-- Product Details -->
    <div class="product-details">
        <h1><?= $product['name']; ?></h1>
        <p class="price">Rs <?= number_format($product['price']); ?> <?= $product['currency']; ?></p>
        <p><i>Shipping calculated at checkout.</i></p>

        <!-- Quantity Selector -->
        <div class="quantity">
            <button onclick="changeQuantity(-1)">-</button>
            <input type="text" id="quantity" value="1" readonly>
            <button onclick="changeQuantity(1)">+</button>
        </div>

        <!-- Buttons -->
        <button class="btn cart">Add to cart</button>
        <button class="btn buy">Buy it now</button>

        <!-- Product Description -->
        <p><?= $product['description']; ?></p>
    </div>
</div>

<script>
    function changeQuantity(amount) {
        let quantityInput = document.getElementById("quantity");
        let currentQuantity = parseInt(quantityInput.value);
        let newQuantity = currentQuantity + amount;
        if (newQuantity > 0) {
            quantityInput.value = newQuantity;
        }
    }
</script>

</body>
</html>





<!-- admin/product/insert.php -->


// $product_name = $_POST['Pname'];
    // $product_price = $_POST['Pprice'];
    // $product_image = $_FILES['Pimage'];

    // $image_location = $_FILES['Pimage']['tmp_name'];
    // $image_name = $_FILES['Pimage']['name'];

    // $img_des = "UploadImage/" . $image_name;
    // move_uploaded_file($image_location, $img_des);

    // $product_category = $_POST['Pages'];

    // Insert product into the database
    // $query = "INSERT INTO `product`(`Pname`, `Pprice`, `Pimage`, `Category`) VALUES('$product_name','$product_price','$img_des','$product_category')";
    // if (mysqli_query($con, mysqli_query)) 
