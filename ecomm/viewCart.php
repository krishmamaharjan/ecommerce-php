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
<div class="table-container">
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


<div>
    <h3>All Product Total</h3>
    <h1>
        <?php
            echo number_format($Alltotal,2);
        ?>
    </h1>
</div>



</body>
</html>