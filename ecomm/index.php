<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>Home-page</title>
    <?php
    include 'include/header.php';
    ?>

    <style>
        .section{
            text-align: center;
            margin: 50px auto;
            width: 80%;
        }
       .section h3
        {
            font-size: 24px;
            margin-bottom: 20px;
        }
        


    </style>
</head>
<body>
    
<!-- <div class="new-arrival"> -->
    <?php
        // include 'connection.config.php';
        // $record = mysqli_query($con, "SELECT * FROM product");
        //     while($row = mysqli_fetch_array($record))
        //     {
        //         $check_page = $row['pages'];
        //         if($check_page === 'Home')
        //         {

                
                // <a href=""></a>


                    // echo "

                    // <a href='BuyProduct.php'>
                    // <div class='container' id='shop'>

                    // <form action = 'InsertCart' method = 'POST' >
                    //         <div class='product'>
                    //             <img src='admin/product/$row[Pimage]' alt='Guitar'>
                    //         <h2>$row[Pname]</h2>
                    //             <p>Price: $row[Pprice]</p>
                                
                    //             <input type='submit' name='submit'class='btn' value='Add to cart'>
                                

                                
                    //         </div>
                    // </form>
                    // </div> 
                    // </a>


                    // ";

                    // echo "Image Path: admin/product/.$row[Pimage]";
                // }

            // }
                

    ?>
</div>




<div class="section new-arrivals">
    <h3>New Arrivals</h3>
</div>

<div class="section best-selling-product">
    <h3>Best Selling Products</h3>
</div>

<div class="section browse-by-category">
    <h3>Browse Categories</h3>
</div>


</body>
</html>