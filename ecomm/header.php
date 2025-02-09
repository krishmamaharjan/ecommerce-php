<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musical Instrument</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://kit.fontawesome.com/0280874e71.js" crossorigin="anonymous"></script>
<style>
    /* .nav-bar
    {
    position: fixed;

    } */

    /* html, body {
    height: 100%;
    margin: 0;
} */


/* .main-content {
    min-height: 100%;     
    padding-bottom: 50px; 
} */


/* footer {
    position: relative;
    bottom: 0;
    width: 100%;
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px;
    font-size: 14px;
}

footer a {
    color: #ddd;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
} */


/* .dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            display: none;
            min-width: 150px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .dropdown li {
            display: block;
        }

        .dropdown li a {
            color: black;
            padding: 10px;
            display: block;
            text-decoration: none;
        }

        .dropdown li a:hover {
            background: #f1f1f1;
        }

        /* Show dropdown on hover */
        /* li:hover .dropdown {
            display: block;
        } */ 

</style>
</head>
<body>

<?php
    session_start();
    $count = 0;
    if(isset($_SESSION['cart']))
    {
        $count = count($_SESSION['cart']);
    }
?>

<div class="nav-bar">
        <header>
            <h1>Musical Instrument Store</h1>    
    </header>
        
            <!-- <div class="logo"> -->
                
                <nav >
                <div class="logo">
                <a href="">LOGO</a>
                </div>
                
                    <ul>
                    <li><a href="index.php">HOME</a></li> 
                        <li><a href="">SHOP</a></li>
                        <li>
                            <a href="">DEPARTMENT</a>
                            <!-- <ul class="dropdown">
                                <li><a href="">Guitar</a></li>
                                <li><a href="">KeyBoard</a></li>
                                <li><a href="">Drum</a></li>
                                <li><a href="">Flute</a></li>
                                <li><a href="">Harmonium</a></li>
                            </ul> -->
                        </li>
                        <!-- <li><a href="">BRAND</a></li> -->
                        <!-- <li><a href="">Rentals</a></li> -->
                        <li><a href="">ABOUT US</a></li>
                    </ul>
                
                <!-- <div class="searchBar">
                    <input type="text" placeholder="Search for instruments" id="search">
                    <button onclick="searchInstrument()">Search</button> -->

                <div class="login">

                   <!-- <div class="searchcart"><input type="text" placeholder="Search instruments"></div> -->
                   <!-- <button class="btn">🔍</button>  -->
                    <a href="viewCart.php">
                    <i class="fa-solid fa-cart-arrow-down">&nbsp cart(<?php echo $count   ?>)</i> 
                    </a>

                    <a href="signUp.html">SIGN UP</a>
                    <a href="login.html">LOG IN</a>
                    <i class="fa-solid fa-circle-user"></i>
                </div>
            </nav>
            </div>
        
        
    </div>


    




<!-- <footer>
    <p>&copy; Musical Instrument Store. All rights reserved.</p>
    <p><a href="#privacy-policy">Privacy Policy</a> | <a href="#terms-of-service">Terms of Service</a></p>
</footer> -->


</body>
</html>