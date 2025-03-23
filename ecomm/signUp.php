<?php
include('connection.php');

$username_error = $email_error = $password_error = $Cpassword_error ="";
$username = $email = $password= $Cpassword ="";

function test_input($data) 
 {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    // $username = test_input($_POST['username']);
    // $email = test_input($_POST['email']);
    // $password = test_input($_POST['password']);
    // $Cpassword = test_input($_POST['Cpassword']);

    $is_valid = true;
    if(empty($_POST["username"]))
    {
        $username_error = "*Username is required";
        $is_valid = false;

    }
    else
    {
        $username = test_input($_POST["username"]);
        if(!preg_match("/^[a-zA-Z0-9_]*$/",$username))
        {
            $username_error="*Invalid.Only letter,nuber and underscore is allowed.";
            $is_valid = false;

        }
    }

    if(empty($_POST["email"]))
    {
        $email_error = "*Email is required.";
        $is_valid = false;

    }
    else
    {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $email_error = "*Invalid email format";
        $is_valid = false;

        }
    }
    
    if (empty($_POST["password"])) {
        $password_error = "*Password is required.";
        $is_valid = false;

    }
    else
    {
        $password = test_input($_POST["password"]);
        if(!preg_match("/^(?=.*[!@#$%^&*(),.?\":{}|<>])[a-zA-Z0-9!@#$%^&*(),.?\":{}|<>]{8,}$/", $password)) 
        {
            $password_error = "*Invalid password. Password must be at least 8 characters long and contain at least one special character";
            $is_valid = false;

        }
    }
    if (empty($_POST["Cpassword"])) {
        $Cpassword_error = "*Confirm Password is required.";
        $is_valid = false;

    } 
    else
    {
        $Cpassword = test_input($_POST["Cpassword"]);
        if ($password !== $Cpassword) 
        {
            $Cpassword_error ="Passwords do not match.";
            $is_valid = false;

        }
    }
    
    if($is_valid)
    {
        if(isset($_POST['submit']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
        
        
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $Dup_Email = mysqli_query($conn,"SELECT * FROM `users` WHERE email = '$email'");
            $Dup_username = mysqli_query($conn,"SELECT * FROM `users` WHERE username = '$username'");

            if(mysqli_num_rows($Dup_Email))
            {
                echo "
                <script>
                    alert('This email is already taken');
                    window.location.href='signUp.php';
                </script>
                ";
            }

            if(mysqli_num_rows($Dup_username))
            {
                echo "
                <script>
                    alert('This username is already taken');
                    window.location.href='signUp.php';
                </script>
                ";
            }
            else{
                $query = mysqli_query($conn,"Insert into users(username,password,email) Values('$username','$hashed_password','$email')");

            }

            if($query)
            {
                
                echo "
                <script>
                alert('Data inserted Successfully');
                window.location.href = 'login.php';
                
                </script>";
            }
            else{
                
                echo "<script>alert(error);
                window.location.href = 'SignUp.php';
                </script>";
            }

        }
    }    
    

 }
 


       


?>

<!-- Validation -->


<!-- // if(empty($_POST['username']))
// {
//     $username_error = "Please enter the username";
    
// }
// if(empty($_POST['password']))
// {
//     $password_error = "Please enter the password";
// } -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- <link rel="stylesheet" href="Prac2/login.css" type="text/css"> -->
    <link rel="stylesheet" href="login.css">
    <style>
        .error 
        {
            color : #FF0000;
            font-size:0.9em;
        }
    </style>
</head>
<body>


<?php
// $username_error = $email_error = $password_error = $Cpassword_error ="";
// $username = $email = $password= $Cpassword ="";
?>







    <div class="container">
        <div class="box form-box">
            <header>Sign Up</header><br>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo htmlspecialchars($username); ?>" required>
                    <span class="error"><?php echo $username_error;?></span>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" required>
                    <span class="error"><?php echo $email_error;?></span>

                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                    <span class="error"><?php echo $password_error;?></span>

                </div>
                <div class="field input">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="Cpassword" id="Cpassword" required>
                    <span class="error"><?php echo $Cpassword_error;?></span>

                </div>
                <div class="field ">
                    
                    <input type="submit" name="submit" class="btn" value="Sign Up">
                </div>
                
                <div class="links">
                    Already have an account? <a href="login.php">Login</a>
                </div>

            </form>
        </div>
    </div>
</body>
</html>

<?php



?>

<!-- abcd   ps-> #12345678 -->