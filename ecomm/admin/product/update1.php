
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>

<?php
 $id = $_GET['ID'];

 include 'connection.config.php';
 $Record = mysqli_query($con, "SELECT * FROM `product` WHERE id = '$id' " );
    // var_dump($Record);
$data = mysqli_fetch_array($Record);
    // var_dump($data);



 ?>


    <div class="container">
        <div class="box form-box">
            <header>Product Update</header><br>
            <form action="update1.php" method="POST" enctype="multipart/form-data">
                <div class="field input">
                    <label for="">Product Name</label>
                    <input type="text" value="<?php  echo $data['Pname']?> " name="Pname" id="Pname" placeholder="Product Name">
                    
                </div>
                <div class="field input">
                    <label for="">Product Price</label>
                    <input type="text" value="<?php  echo $data['Pprice']?> " name="Pprice" id="Pprice">
                    

                </div>
                <div class="field input">
                    <label for="">Product Detail</label>
                    <input type="text" value="<?php  echo $data['Pdetail']?> " name="Pdetail" id="Pdetail"  >
                    

                </div>
                <div class="field input">
                    <label for="">Add Product Image</label>
                    <input type="file" name="Pimage" id="Pimage" required>
                    <img src="<?php  echo $data['Pimage']?> " alt="" height= 100px, width= 100px>
                    

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

                <input type="hidden" name="ID" value="<?php  echo $data['id']?> ">
                <div class="field ">
                    
                    <input type="submit" name="update" class="btn" value="Update">
                </div>
                
               

            </form>
        </div>
    </div>

<!-- php update code  -->

<?php
    if(isset($_POST['update']))
    {

        $id =$_POST['ID'];

        $product_name = $_POST['Pname'];
        $product_price = $_POST['Pprice'];
    // print_r($_FILES);
        $product_image = $_FILES['Pimage'];
        $product_detail = $_POST['Pdetail'];


        // print_r($product_image);

        $image_location = $_FILES['Pimage']['tmp_name'];
        $image_name= $_FILES['Pimage']['name'];

        $img_des = "UploadImage/".$image_name;
        move_uploaded_file($image_location,"UploadImage/".$image_name);

        $product_category = $_POST['Pages'];

        include 'connection.config.php';
        mysqli_query($con, "UPDATE `product` SET `Pname`='$product_name',`Pprice`='$product_price',
                            `Pimage`='$img_des',`Category`='$product_category',`Pdetail`='$product_detail' WHERE id = $id");

                            header("location:index.product.php");
    }
?>

</body>
</html>