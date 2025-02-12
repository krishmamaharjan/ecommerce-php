<?php
if(isset($_POST['submit']))
{
    include 'connection.config.php';

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

    // insert product 

    $query = mysqli_query($con, "INSERT INTO `product`(`Pname`, `Pprice`, `Pimage`, `Category`, `Pdetail`) VALUES('$product_name','$product_price','$img_des','$product_category','$product_detail')" );

    if ($query) {
        echo "<script>
                alert('File uploaded successfully!');
                window.location.href = 'index.product.php'; // Reload the main page
              </script>";
    } else {
        echo "<script>alert('Database error: Unable to save product.');</script>";
    }
    

}

?>