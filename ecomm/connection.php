<?php
define("UNAME","root");
define("UPASS","");
define("HOST","localhost:3306");
define("DB","ecommerce2");
$conn=mysqli_connect(HOST,UNAME,UPASS,DB) or die("Unable to connect to database");