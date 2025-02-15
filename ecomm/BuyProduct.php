<?php
        // include 'connection.config.php';

            // $record = mysqli_query($con, "SELECT * FROM product");
            // while($row = mysqli_fetch_array($record))
            // {
            //     echo "            
            //                 <div class='product'>
            //                         <img src='admin/product/$row[Pimage]' alt='Guitar'>
            //                     <h2>$row[Pname]</h2>
            //                         <p>Price: $row[Pprice]</p>
            //                         <p>Details:</p><br>                                
            //                         <p></p>                                
            //                         <input type='submit' name='submit'class='btn' value='Add to cart'>                                
            //                 </div>
                    
            //        ";
            // }


            // if (isset($_GET['id'])) {
            //     $id = $_GET['id'];
            //     $query = mysqli_query($con, "SELECT * FROM product WHERE id = '$id'");
            //     $product = mysqli_fetch_assoc($query);
            // } else {
            //     echo "Product not found!";
            //     exit();
            // }


 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Product</title>
    <?php
        include 'header.php';
    ?>

<style>
    
    .product {
    display: inline-block;
    margin: 20px;
    text-align: center;
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 10px;
    background-color: #f9f6ee;
}

.product img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    cursor: pointer;
}

.product a {
    text-decoration: none;
    color: brown;
    font-weight: bold;
}

.details-btn {
    display: block;
    margin-top: 10px;
    background-color: brown;
    color: white;
    padding: 10px;
    border-radius: 5px;
    text-decoration: none;
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
    <div class="container">

    <?php
    
    include 'connection.config.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = mysqli_query($con, "SELECT * FROM product WHERE id = '$id'");

        if ($query && mysqli_num_rows($query) > 0) {
            $product = mysqli_fetch_assoc($query);
        } else {
            echo "Product not found!";
            exit();
        }
    } else {
        echo "No product selected!";
        exit();
    }
    // <a href='InsertCart.php'></a>
    // <form action = 'InsertCart.php' method = 'POST'>

            echo "
                <div class='product-details'>
                    <img src='admin/product/$product[Pimage]' alt=''>
                
                
                    <h1>$product[Pname]</h1>    
                    <p class='price'>Rs $product[Pprice]<p>
                    <p> Description : $product[Pdetail]<p>

                    <form action='InsertCart.php' method='POST'>
                        <input type='hidden' name='product_id' value='$product[id]'>
                        <input type = 'hidden' name = 'Pname' value = '$product[Pname]'>
                        <input type = 'hidden' name = 'Pprice' value = '$product[Pprice]'>

                        <input type='number' name='Pquantity' value='1' min='1'>
                        <button type='submit' name='addCart' class='btn'>Add to Cart</button>

                    </form>
                        <a href=''><button type='submit' name='buynow' class='btn'>Buy Now</button></a>

                </div>
                
            ";
                    // <button class='btn cart'>Add to cart</button>
                    // <button class='btn buy'>Buy it now</button>
        ?>
    </div>


    <!-- <script>
    function changeQuantity(amount) {
        let quantityInput = document.getElementById("quantity");
        let currentQuantity = parseInt(quantityInput.value);
        let newQuantity = currentQuantity + amount;
        if (newQuantity > 0) {
            quantityInput.value = newQuantity;
        }
    } -->
</script>
</body>
</html>