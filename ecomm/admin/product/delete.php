<?php


 $id = $_GET['ID'];

 include 'connection.config.php';

 mysqli_query($con, "DELETE FROM `product` WHERE id = '$id'");
 header("location:index.product.php");
//  window.location.href = 'index.product.php';
?>