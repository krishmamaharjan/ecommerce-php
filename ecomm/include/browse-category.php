<!-- <div class="browse-category">
    <h2>Browse By Category</h2>
    <div class="category-list">
        <?php
        // include 'connection.config.php';
        // $query = "SELECT * FROM category";
        // $result = mysqli_query($con, $query);
        
        // while ($row = mysqli_fetch_assoc($result)) {
        //     echo '<div class="category">';
        //     echo '<img src="assets/images/' . $row['image'] . '" alt="' . $row['name'] . '">';
        //     echo '<p>' . $row['name'] . '</p>';
        //     echo '</div>';
        // }
        ?>
    </div>
</div> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Categories</title>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fffaf0;
        } */

        .category-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .category-box {
            position: relative;
            width: 200px;
            height: 200px;
            border-radius: 10px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .category-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8;
        }

        .category-box a {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            transition: background 0.3s;
        }

        .category-box a:hover {
            background: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <div class="category-container">
        <div class="category-box">
            <a href="traditional_music.html">
                <img src="images/traditional.jpeg" alt="Traditional Music">
                <!-- Traditional Music -->
            </a>
        </div>
        <div class="category-box">
            <a href="western_music.html">
                <img src="images/western.jpg" alt="Western Music">
                <!-- Western Music -->
            </a>
        </div>
        <div class="category-box">
            <a href="electronic_music.html">
                <img src="images/elec.jpg" alt="Electronic Music">
                <!-- Electronic Music -->
            </a>
        </div>
        <div class="category-box">
            <a href="percussions.html">
                <img src="images/per.webp" alt="Percussions">
                <!-- Percussions -->
            </a>
        </div>
    </div>
</body>
</html>

