<div class='container' id='shop'>
    <?php
        include 'connection.config.php';
        $record = mysqli_query($con, "SELECT * FROM product");

            while($row = mysqli_fetch_array($record))
            {
                $check_page = $row['Category'];
                if($check_page === 'new-arrivals')
                {             
                // <a href=""></a>
                    echo "

                    <a href=''>              
                            <div class='product'>
                                    <img src='admin/product/$row[Pimage]' alt='Guitar'>
                                <h2>$row[Pname]</h2>
                                    <p>Price: $row[Pprice]</p>                                
                                    <input type='submit' name='submit'class='btn' value='Add to cart'>                                
                            </div>
                    </a>
                   ";

                    // echo "Image Path: admin/product/.$row[Pimage]";
                }
            }
    ?>
</div>