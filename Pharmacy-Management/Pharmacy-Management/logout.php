<?php
  require "php/db_connection.php";

  if($con) {
    $query = "UPDATE admin_credentials SET IS_LOGGED_IN = 'false'";
    $result = mysqli_query($con, $query);
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Logout</title>
    <h1 align="center"><font-color="#FFFFFFF">WELCOME BACK LOGIN HERE</font></h1>
    <script src="js/restrict.js"></script>
             
    <a href="login.php" class="btn btn-warning form-control font-weight-bold">login here</a>

  </head>
  
  <body>


  </body>
  
</html>
