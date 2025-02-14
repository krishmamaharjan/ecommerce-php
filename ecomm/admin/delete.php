<?php
echo $id = $_GET['ID'];
include 'product/connection.config.php';
mysqli_query($con,"DELETE FROM `users` WHERE id = $id");
header("location:user.php");
?>