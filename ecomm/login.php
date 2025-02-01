<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="Prac2/login.css" type="text/css"> -->
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Login</header><br>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field ">
                    
                    <input type="submit" name="submit" class="btn" value="login">
                </div>
                
                <div class="links">
                    Don't have an account? <a href="signUp.html">SignUp Now</a>
                </div>

            </form>
        </div>
    </div>
</body>
</html>