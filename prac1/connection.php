<?php
define("UNAME","root");
define("UPASS","");
define("HOST","localhost:3306"); //3306 PORT MA RUN BHAIRAXAA 
define("DB","ecommerce");
$conn=mysqli_connect(HOST,UNAME,UPASS,DB) or die("Unable to connect to database");