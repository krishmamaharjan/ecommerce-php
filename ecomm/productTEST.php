<?php



include 'connection.config.php';

$products = mysqli_query($con, "SELECT * FROM product");

while ($row = mysqli_fetch_assoc($products)) {
    echo "
        <div class='product'>
            <img src='{$row['Pimage']}' height='200px' width='200px'>
            <h2>{$row['Pname']}</h2>
            <p>Rs {$row['Pprice']} NPR</p>
            <a href='product.php?id={$row['id']}'>View Details</a>
        </div>
    ";
}






if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM product WHERE id = '$id'");
    $product = mysqli_fetch_assoc($query);
} else {
    echo "Product not found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['Pname']; ?></title>
    <!-- <link rel="stylesheet" href="style.css"> -->
     <style>
        .product {
    display: inline-block;
    margin: 20px;
    text-align: center;
}

.product img {
    width: 150px;
    height: 150px;
    object-fit: cover;
}

.product-details {
    text-align: center;
    margin: auto;
    max-width: 600px;
}

.product-details img {
    max-width: 100%;
    height: auto;
}

     </style>
</head>
<body>

<div class="product-details">
    <img src="<?php echo $product['Pimage']; ?>" height="400px" width="400px">
    <h1><?php echo $product['Pname']; ?></h1>
    <h3>Rs <?php echo $product['Pprice']; ?> NPR</h3>
    <p><?php echo $product['Pdetail']; ?></p>
    
    <form action="cart.php" method="POST">
        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
        <input type="number" name="quantity" value="1" min="1">
        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
</div>

</body>
</html>
