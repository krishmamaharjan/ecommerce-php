<?php
    include 'product/connection.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Product</title>
    <link rel="stylesheet" href="product/index.css">


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
    </style>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Admin Login</header><br>
            <form action="" method="POST" name="login" enctype="multipart/form-data">
                <div class="field input">
                    <label for="">Admin Name</label>
                    <input type="text" name="username" id="username" placeholder="Enter username">
                    
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" name="userpassword" id="userpassword" placeholder="Enter Password">
                    

                </div>
                
                <div class="field ">
                    
                    <input type="submit" name="login" class="btn" value="Login">
                </div>
                
               

            </form>
        </div>
    </div>



    <?php
    if(isset($_POST['login']))
    {
        $Admin_name = $_POST['username'];
        $Admin_password = $_POST['userpassword'];

        $result = mysqli_query($con,"SELECT * FROM `admin` WHERE username = '$Admin_name' AND userpassword = '$Admin_password'");

        if(mysqli_num_rows($result))
        {
            echo "
            <script>
                alert('login Successfully');
                window.location.href='home.php';
            </script>
            ";
        }
        else{
            echo "
            <script>
                alert('Invalid username/password');
                window.location.href='admin.login.php';

            </script>
            ";
        }
    }
    ?>

</body>
</html>