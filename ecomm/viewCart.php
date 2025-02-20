<?php
        // session_start();
        // session_destroy();
        include 'header.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
</head>
<body>
<div style="display: flex; justify-content: space-between; align-items: flex-start;">
<div class="table-container" style="width: 70%; margin-top: 40px; margin-left: 40px">
    <h1>My Cart</h1>
    <table border=0 cellpadding=4 ccellspacing=4>
        <thead>
            <th>Serial No.</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Image</th>
            <th>Total Price</th>
            <th>Update</th>
            <th>Delete</th>
            
        </thead>
        <button></button>

        <tbody>
            <?php
            $total = 0;
            $Alltotal = 0;

                if(isset($_SESSION['cart']))
                {
                    foreach($_SESSION['cart'] as $key => $value)
                    {

                        $SN = $key + 1;
                        $total = $value['productPrice'] * $value['productQuantity'];
                        $Alltotal += $value['productPrice'] * $value['productQuantity'];

                        echo "
                         <form action='InsertCart.php' method='post'>

                            <tr>
                                <td>$SN</td>
                                
                                <td><input type = 'hidden' name = 'Pname' value ='$value[productName]'>$value[productName]</td>
                                <td><input type = 'hidden' name = 'Pprice' value ='$value[productPrice]'>$value[productPrice]</td>
                                <td><input type = 'number' name = 'Pquantity' value ='$value[productQuantity]'></td>
                                <td></td>
                                <td>$total</td>


                                <td>
                                    <input type = 'hidden' name = 'item' value='$value[productName]'>
                                    <button type=''submit' name = 'update'>Update</button>
                                </td>
                                

                                <td>
                                    <input type = 'hidden' name = 'item' value='$value[productName]'>
                                    <button type='submit' name = 'remove'>Delete</button>
                                </td>
                            </tr>
                        </form>
                        ";
                    }
                }         



            ?>
        </tbody>
    </table>
</div>


<div style="margin-top: 40px; margin-right: 20px">
    <h3>All Product Total</h3>
    <h1>
        <?php
            echo number_format($Alltotal,2);
        ?>
    </h1>
</div>

   <!-- Checkout Section -->
   <div style="width: 25%; padding: 20px; border: 1px solid #ccc; border-radius: 10px; background-color: #f8f8f8;  margin-right:40px; margin-top: 40px">
        <h2>Checkout Summary</h2>
        <p><strong>Total:</strong> NPR <?php echo number_format($Alltotal,2); ?></p>

        <?php
        echo    "
                <form action='stripe/checkout.php' method='post'>
                    <!-- <input class='btn' value='Buy Product' type='submit'> -->
                    <input class='btn' value='$value[productName]' name = 'product_name' type='hidden'>
                    <input class='btn' value='$value[productPrice]' name = 'product_price' type='hidden'>
                    <input type='hidden' name='$value[productQuantity]' value=' ".(isset($_POST["productQuantity"]) ? $_POST["productQuantity"] : 1) ." '>
            
                 <button type='submit' style='padding: 10px 20px; background-color: #a0522d; color: white; border: none; border-radius: 5px; cursor: pointer;'>Proceed to Checkout</button>
            </form>
        ";
        ?>
    </div>
</div>
</body>
</html>