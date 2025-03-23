<?php
    include 'connection.config.php';
    // include '../home.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Product</title>
    <link rel="stylesheet" href="index.css">


    <style>
        .table-container
        {
            /* margin: auto; */
            display: flex;
            justify-content: center;
            align-items: center;
            border-collapse: collapse;
            /* width: 80%; */
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Product Details</header><br>
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="field input">
                    <label for="">Product Name</label>
                    <input type="text" name="Pname" id="Pname" placeholder="Product Name">
                    
                </div>
                <div class="field input">
                    <label for="">Product Price</label>
                    <input type="text" name="Pprice" id="Pprice">
                    

                </div>
                <div class="field input">
                    <label for="">Product Detail</label>
                    <input type="text" name="Pdetail" id="Pdetail"  >
                    

                </div>
                <div class="field input">
                    <label for="">Add Product Image</label>
                    <input type="file" name="Pimage" id="Pimage" required>
                    

                </div>

                <div class="field input ">
                    <label for="">Select Page Category</label>
                    <select class="form-select" name="Pages">
                        <option selected value="Home">Home</option>
                        <option value="Guitar">Guitar</option>
                        <option value="Drum">Drum</option>
                        <option value="Flute">Flute</option>
                        <option value="KeyBoard">keyBoard</option>
                        <option value="harmonium">Harmonium</option>
                        <option value="sarangi">Sarangi</option>
                        <option value="violin">Violin</option>
                        <option value="eastern">Eastern</option>
                        <option value="western">Western</option>
                        <option value="new-arrivals">new-arrivals</option>
                        <option value="best-selling-product">best-selling-product</option>
                        <option value="browse-category">browse-category</option>
                    </select>
                    

                </div>
                <div class="field ">
                    
                    <input type="submit" name="submit" class="btn" value="Upload">
                </div>
                
               

            </form>
        </div>
    </div>

<div class="table-container">
    <table border=0 cellpadding=4 ccellspacing=4>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category</th>
            <th>Description</th>
            <th>Update</th>
            <th>Delete</th>
            <th>Edit</th>
        </thead>
        
        <!-- <td>$row[id]</td> -->

        <tbody>
            <?php
            $i = 0;
                $Record = mysqli_query($con, "SELECT * FROM `product`");

               while($row = mysqli_fetch_array($Record)) 
{
               echo "

            <tr>
                <td>"?> <?php echo ++$i ?> <?php echo"</td>
                
                <td><a href='../../BuyProduct.php?id={$row['id']}'>$row[Pname]</a></td>
                <td>$row[Pprice]</td>
                <td> <a href='../../BuyProduct.php?id={$row['id']}'><img src='$row[Pimage]'  height='90px' width='100px'> </a></td>
                <td>$row[Category]</td>
                <td>$row[Pdetail]</td>

                <td><a href='update1.php? ID= $row[id]'>Update</a></td>
                
                <td><a href='delete.php? ID= $row[id]'>Delete</a></td>
            </tr>

               ";
}
            ?>
        </tbody>
    </table>
</div>
</body>
</html>