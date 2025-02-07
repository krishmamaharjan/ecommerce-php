<div class="browse-category">
    <!-- <h2>Browse By Category</h2> -->
    <div class="category-list">
        <?php
        include 'connection.config.php';
        $query = "SELECT * FROM category";
        $result = mysqli_query($con, $query);
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="category">';
            echo '<img src="assets/images/' . $row['image'] . '" alt="' . $row['name'] . '">';
            echo '<p>' . $row['name'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</div>
