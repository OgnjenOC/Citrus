<?php require('../config/db_connect.php'); ?>


<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
    $username = $_POST['user'];
    $password = $_POST['pass'];



    // Create Query
    $query = "SELECT * FROM admins ";
    $query .= "WHERE username='" . $username . "'";
    $query .= "AND password='" . $password ."'";

    // Get Result
    $result = mysqli_query($conn, $query);

    $credentials = mysqli_fetch_array($result);

    if (isset($credentials)) {
        echo "This var is set so I will print.";
        
        if($credentials['username'] == $username && $credentials['password'] == $password){
           header("Location: updateComments.php");
           exit;
        } else {
           echo 'Failed try again';
        }
        
    }else {
        echo 'Not good ';
    }


}

?>

<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>Admin Login</title>    
    <meta charset="utf-8">
  </head>
  
  <body>
      <div>
          <form action="login.php" method="POST">
              <p>
                  <label>Username:</label>
                  <input type="text" id="user" name="user" />
              </p>
              
              <p>
                  <label>Password:</label>
                  <input type="password" id="pass" name="pass" />
              </p>
              
              <p>
               <input type="submit" id="btn" value="Login" />
              </p>
              
          </form>
      </div>
  </body>
  
  
</html>