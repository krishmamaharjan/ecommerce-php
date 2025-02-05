<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>Home-page</title>
    <?php
    include 'header.php';
    ?>
</head>
<body>
    <?php
        include 'connection.config.php';
        $record = mysqli_query($con, "SELECT * FROM product");
            while($row = mysqli_fetch_array($record))
            {
                echo "
                <div class='container' id='shop'>
                        <div class='product'>
                            <img src='admin/product/$row[Pimage]' alt='Guitar'>
                        <h2>$row[Pname]</h2>
                            <p>Price: $row[Pprice]</p>
                            <button>Buy Now</button>
                            
                        </div>
                    </div> 


                ";

                echo "Image Path: admin/product/.$row[Pimage]";

            }
                

    ?>
</body>
</html>