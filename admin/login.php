<?php

session_start();

if(isset($_SESSION["admin_username"]) && isset($_SESSION["admin_password"])) {
  header("location: index.php");
}
  
if(isset($_POST["submit"])) {

  include "../functions/database.php";


  $username = $connection->real_escape_string($_POST["username"]);
  $password = $connection->real_escape_string($_POST["password"]);

  $sql = "SELECT id FROM admin WHERE username='$username' AND password='$password' LIMIT 1";

  $result_set = $connection->query($sql);

  if($result_set->num_rows > 0) {
    $_SESSION["admin_username"] = $username;
    $_SESSION["admin_password"] = $password;

    header("location: index.php");
    exit();
  } else {
    echo $username. ' not found';
    exit();
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Login</title>
  <link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" href="../css/style_admin.css"> 
</head>
<body style="background: #fff;">
  <div id="form-admin-login-container">
    <span>Login as Administrator</span>
    <form action="login.php" id="admin-login-form" method="POST">
      <label for="username">Your email or username</label>
      <input type="text" name="username" id="username" placeholder="email or username" required>
      <br><br>
      <label for="username">Your password</label>
      <input type="password" name="password" id="password" placeholder="password" required>
      <br><br>
      <input type="submit" name="submit" value="login" id="submit">
    </form>
  </div>

<script src="../js/jquery.min.js"></script>
<script>

</script>
</body>
</html>