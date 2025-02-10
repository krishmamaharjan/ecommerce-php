<?php
     
     session_start();

include 'connection.config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = trim($_POST['username']);
    $password = trim($_POST['password']);

      // Prepare and execute statement
      $stmt = $con->prepare("SELECT password FROM users WHERE username = ?");
      $stmt->bind_param("s", $name);
      $stmt->execute();
      $stmt->bind_result($hashed_password);
      $stmt->fetch();
      $stmt->close();

  
      // Verify password
      if ($hashed_password && password_verify($password, $hashed_password)) {

        $_SESSION["username"] = $name;

          echo "
          <script>alert('Successfully Logged In'); 
          window.location.href='index.php';</script>
          ";
      } else {
          echo "
          <script>alert('Incorrect username or password'); 
          window.location.href='login.php';
          </script>
          ";
      }
  
      $con->close();

    // $result = mysqli_query($con, "SELECT * FROM `users` WHERE username = '$name'  AND password = '$password'");

    // if(mysqli_num_rows($result))
    // {
    //     echo "
    //             <script>
    //                 alert('Successfully Login');
    //                 window.location.href='index.php';
    //             </script>
    //         ";
    // }
    // else
    // {
    //     echo "
    //             <script>
    //                 alert('Incorrect username or password');
    //                 window.location.href='login.php';
    //             </script>
    //         ";
    // }

    // if(mysqli_num_rows($result) == 0)
    // {
    //     echo "No matching user found.";

    // }


}
?>
