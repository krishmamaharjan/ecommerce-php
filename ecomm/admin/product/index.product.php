<?php
    include 'connection.config.php';
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
                        <option value="KeyBoard">keyBoard</option>
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
            <th>Update</th>
            <th>Delete</th>
            <th>Edit</th>
        </thead>
        

        <tbody>
            <?php
                $Record = mysqli_query($con, "SELECT * FROM `product`");

               while($row = mysqli_fetch_array($Record)) 

               echo "

            <tr>
                <td>$row[id]</td>
                <td>$row[Pname]</td>
                <td>$row[Pprice]</td>
                <td> <img src='$row[Pimage]'  height='90px' width='100px'> </td>
                <td>$row[Category]</td>
                <td></td>
            </tr>

               ";
            ?>
        </tbody>
    </table>
</div>
</body>
</html>