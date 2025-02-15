<!-- <?php

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User info</title>
    <style>
        .table-container
        {
            /* margin: auto; */
            display: flex;
            justify-content: center;
            align-items: center;
            border-collapse: collapse;
            /* width: 80%; */
            text-align:center;
        }
        th{
            background-color:#8b4513;
            color: white;
            padding: 20px;

        }
    </style>
</head>
<body>
    <?php
    include 'home.php';
        include 'product/connection.config.php';
        $Record = mysqli_query($con, "SELECT * FROM `users` "); 
        $row_count = mysqli_num_rows($Record);
    ?>
    <div class="table-container">
        <table border=0 cellpadding=10 ccellspacing=5>
            <thead>
                <th>S.N</th>
                <th>Name</th>
                <th>Email</th>
                <th>Delete</th>
                <td></td>
            </thead>
            <!-- <td>$row[id]</td> -->
            <tbody>
                <?php
                $i = 0;
                    while($row = mysqli_fetch_array($Record))
                    {
                        echo "
                        <tr>
                            <td> "?> <?php echo ++$i ?> <?php echo" </td>
                            <td>$row[username]</td>
                            <td>$row[email]</td>
                            <td> <a href='delete.php? ID=$row[id]'>DELETE</a></td>
                                
                        </tr>
                        ";
                    }
                    
                ?>
            </tbody>
        </table>
    </div>
    <div>
        <h3>Total</h3>
        <h1><?php echo $row_count ?></h1>
    </div>
</body>
</html>