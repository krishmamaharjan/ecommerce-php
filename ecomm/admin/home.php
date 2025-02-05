<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musical Instrument</title>
    <link rel="stylesheet" href="home.css" type="text/css">
    <script src="https://kit.fontawesome.com/0280874e71.js" crossorigin="anonymous"></script>

<style>
    .product-nav
{
    display: flex;
    justify-content: center;
    align-items: center;
    background: #8b4513;
    padding: 10px;
    /* margin: 10px, 50px, 10px,50px; */
    margin-top: 10px;
    margin-left: 100px;
    margin-right: 100px;
    

}
    .product-nav a{
    /* display: block; */
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;

}
.product-nav a:hover{
    background-color: #6b4226;
    
}
</style>
</head>

<?php
    session_start();
    if(!$_SESSION['admin'])
    {
        header("location:admin.login.php");
    }

?>

<body>
    <div>
        <header>
            <h1>Musical Instrument Store</h1>    
    </header>
        
            <!-- <div class="logo"> -->
                
                <nav>
                <div class="logo">
                <a href="">LOGO</a>
                </div>
                
                <ul>
                    <li><a href="index.html">HOME</a></li> 
                        <li><a href="">SHOP</a></li>
                        <li><a href="">DEPARTMENT</a></li>
                        <li><a href="">BRAND</a></li>
                        <!-- <li><a href="">Rentals</a></li> -->
                        <li><a href="">ABOUT US</a></li>
                    </ul>
                
                

                <div class="login">
                   
            <i class="fa-solid fa-user-tie ">  Admin </i>

                    <!-- Admin |  -->

                    <a href="signUp.html">UserPanel</a>
            <i class="fa-solid fa-right-from-bracket"></i>

                    <a href="admin.logout.php">log out</a>
                    <a href=""></a>
                </div>
            </nav>
            </div>


            <div class="product-nav">
                <a href="product/index.php">Add Products</a>
                <a href="">Users</a>
            </div>
        
        
    </div>
</body>
</html>