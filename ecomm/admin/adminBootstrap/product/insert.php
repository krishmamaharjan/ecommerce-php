<?php
if(isset($_POST['submit']))
{
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    // print_r($product_image);

    $image_location = $_FILES['Pimage']['tmp_name'];
    $image_name= $_FILES['Pimage']['name'];

    $img_des = "UploadImage/".$image_name;
    move_uploaded_file($image_location,"UploadImage/".$image_name);

    

}
?>