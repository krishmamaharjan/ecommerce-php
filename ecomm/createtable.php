<?php
include("connection.php");
$sql = "CREATE TABLE IF NOT EXISTS users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,

    created_at datetime default CURRENT_TIMESTAMP,
    updated_at datetime default CURRENT_TIMESTAMP
)";

$qry = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($qry)
{
    echo "Users table created successfully";
}