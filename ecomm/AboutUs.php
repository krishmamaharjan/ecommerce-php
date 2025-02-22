<?php
// about.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Music Store</title>
    <?php
    include 'header.php';
    ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fffaf0;
            margin: 0;
            padding: 0;
        }

        h1 {
            
            /* color: #fff;
            padding: 10px 20px;
            text-align: center; */
        
            /* margin: 0; */
        }

        .about-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .about-text, .about-image {
            flex: 1;
            margin: 10px;
            padding: 20px;
        }

        .about-text {
            max-width: 600px;
        }

        .about-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 130px;
        }

        .about-text h2 {
            font-size: 2rem;
            color: #222;
            margin-bottom: 15px;
        }

        .about-text p {
            font-size: 1.1rem;
            color: #333;
            line-height: 1.6;
        }

        footer {
            background-color: #222;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    
    

    <div class="about-container">

        <div class="about-text">
    <h1>About Us - Music Store</h1>

            <h2>Welcome to Our Music Store</h2>
            <p>At Music Store, we believe in the power of music to transform lives. We offer a wide selection of musical instruments and accessories to musicians of all skill levels. Whether you are a beginner picking up your first guitar or a seasoned professional looking for top-of-the-line equipment, we’ve got you covered.</p>
            <p>Our mission is to provide high-quality instruments, personalized customer service, and expert advice to ensure you have the best musical experience. From string instruments to percussion and wind instruments, we pride ourselves on offering a diverse range of products to meet your musical needs.</p>
            <p>Located in the heart of Music City, we’re passionate about bringing the joy of music to everyone. Visit us today, and let’s make music together!</p>
        </div>
        <div class="about-image">
            <img src="images/music.jpg" alt="Store">
        </div>
    </div>

    <div>
        <?php
            include 'footer.php';
        ?>
    </div>
</body>
</html>
