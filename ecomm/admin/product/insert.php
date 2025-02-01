<?php
if(isset($_POST['submit']))
{
    include 'connection.config.php';

    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
// print_r($_FILES);
    $product_image = $_FILES['Pimage'];

    // print_r($product_image);

    $image_location = $_FILES['Pimage']['tmp_name'];
    $image_name= $_FILES['Pimage']['name'];

    $img_des = "UploadImage/".$image_name;
    move_uploaded_file($image_location,"UploadImage/".$image_name);

    $product_category = $_POST['Pages'];

    // insert product 

    mysqli_query($con, "INSERT INTO `product`(`Pname`, `Pprice`, `Pimage`, `Category`) VALUES('$product_name','$product_price','$img_des','$product_category')" );

    
    
    if(isset($_POST['submit'])) {
    include 'connection.config.php';

    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];

    $image_location = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];

    $img_des = "UploadImage/" . $image_name;
    move_uploaded_file($image_location, $img_des);

    $product_category = $_POST['Pages'];

    // Insert product into the database
    $query = "INSERT INTO `product`(`Pname`, `Pprice`, `Pimage`, `Category`) VALUES('$product_name','$product_price','$img_des','$product_category')";

    if (mysqli_query($con, $query)) {
        echo "<script>
                alert('File uploaded successfully!');
                window.location.href = 'index.php'; // Reload the main page
              </script>";
    } else {
        echo "<script>alert('Database error: Unable to save product.');</script>";
    }
    

}
}
?>