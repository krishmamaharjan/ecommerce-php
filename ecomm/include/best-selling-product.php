<div class='container'>
    <?php
        include 'connection.config.php';
        $record = mysqli_query($con, "SELECT * FROM product");

            while($row = mysqli_fetch_array($record))
            {
                $check_page = $row['Category'];
                if($check_page === 'best-selling-product')
                {             
                // <a href=""></a>
                    echo "

                    <a href='/ecommerce/ecomm/BuyProduct.php?id={$row['id']}'>              
                            <div class='product'>
                                    <img src='admin/product/$row[Pimage]' alt='Guitar'>
                                <h2>$row[Pname]</h2>
                                    <p> ";?> Price: Rs <?php echo number_format($row['Pprice'])?> <?php echo "</p>  
                        <form action = 'InsertCart.php' method = 'POST'>
                                                              
                                    <input type='hidden' name='Pquantity' value='1' min='1'>

                                    <input type = 'hidden' name = 'Pname' value = '$row[Pname]'>
                                    <input type = 'hidden' name = 'Pprice' value = '$row[Pprice]'>
                                    <input type='submit' name='addCart'class='btn' value='Add to cart'>                                
                        </form>
                            
                            </div>
                    </a>
                   ";

                    // echo "Image Path: admin/product/.$row[Pimage]";
                }
            }
    ?>
</div>