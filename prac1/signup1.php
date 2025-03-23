<?php
include'connection.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $Cpassword = $_POST['cpassword'];
    $query = mysqli_query($conn,"Insert into users(username, password, email) Values('$username',md5('$password'),'$email')");
    if($query)
    {
        //echo "hello";
        echo "<script>alert('data inserted successfully')</script>";
    }
    else{  
        echo "<script>alert(error)</script>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- <link rel="stylesheet" href="signup.css"> -->
    <link rel="stylesheet" href="signup.css" type="text/css">
</head>
<body>
    <div class="container">
    <div class="signupform">

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
        Username <input type="text" value="" name="username" placeholder=" username" required><br><br>
        Password <input type="password" value="" name="password" placeholder=" password" required><br><br>
        Confirm Password <input type="password" value="" name="cpassword" placeholder=" confirm password" required><br><br>
        Email <input type="email" value="" name="email" placeholder=" email@" required><br><br>
            <input type="submit" value="signup" name="submit"><br>
    
    </form>
    </div>
    </div>
<?php
    $username = $password = $cpassword = $email ="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $email = $_POST["email"];
        $errors=[];
        if(empty($username))
        {
            $errors="Username is required";
        }
        elseif(preg_match('/\s/', $username))
        {
            $errors="Username should not contain whitespace";
        }
        elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username))
        {
            $errors = "Username should only contain letters and numbers";
        }
        
    }
?>
</body>
</html>