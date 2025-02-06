<?php
include 'product.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Maker UK21 - Product Page</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->

    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    /* display: flex; */
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f8f8f8;
}

.product-container {
    display: flex;
    justify-content: center;
    max-width: 800px;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.product-image img {
    max-width: 250px;
    border-radius: 10px;
}

.product-details {
    margin-left: 20px;
}

h2 {
    font-size: 24px;
    margin: 0;
}

.price {
    font-size: 20px;
    color: #333;
    font-weight: bold;
}

.shipping {
    font-size: 14px;
    color: gray;
}

.quantity {
    display: flex;
    align-items: center;
    margin: 10px 0;
}

.qty-btn {
    background: #ddd;
    border: none;
    padding: 5px 10px;
    font-size: 18px;
    cursor: pointer;
    z-index: 10;
}
.quantity input { 
    width: 50px; 
    text-align: center;
    font-size: 16px; 
    padding: 5px; 
}

input[type="number"] {
    width: 50px;
    text-align: center;
    margin: 0 5px;
}

.add-to-cart, .buy-now {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    margin-top: 10px;
    border: none;
    cursor: pointer;
}

.add-to-cart {
    background: white;
    border: 2px solid black;
}

.buy-now {
    background: black;
    color: white;
}

.description {
    margin-top: 15px;
    font-size: 14px;
}

    </style>


<?php
include'header.php';
?>
</head>
<body>

<div class="product-container">
        <div class="product-image">
            <img src="admin/product/<?php echo $product['Pimage']; ?>" alt="<?php echo $product['Pname']; ?>">
        </div>
        <div class="product-details">
            <h2><?php echo $product['Pname']; ?></h2>
            <p class="price">Rs<?php echo number_format($product['Pprice'], 2); ?></p>
            <p class="shipping">Shipping calculated at checkout.</p>

             <!-- Quantity Selector -->
             <div class="quantity">
    <button type="button" class="qty-btn" onclick="changeQuantity(-1)">-</button>
    <input type="number" id="quantity" value="1" readonly>
    <button type="button" class="qty-btn" onclick="changeQuantity(1)">+</button>
</div>

            <button class="add-to-cart">Add to cart</button>
            <button class="buy-now">Buy it now</button>

            <p class="description">
                <?php echo $product[Pdetail]; ?>
            </p>
            <?php
            // echo "Image Path: .$product[Pimage]";?>
            
        </div>
</div>


<script defer>
    function changeQuantity(amount) {
        console.log("clicked");
        let quantityInput = document.getElementById("quantity");
        let currentQuantity = parseInt(quantityInput.value) || 1;  // Ensure valid number
        let newQuantity = currentQuantity + amount;
        
        if (newQuantity >= 1) {
            quantityInput.value = newQuantity;
        }
    }
</script>


</body>
</html>
