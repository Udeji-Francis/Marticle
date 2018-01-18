<?php

session_start();

if(!isset($_SESSION["admin_username"]) && !isset($_SESSION["admin_password"])) {
  header("location: login.php");
  exit();
} else {
  $adminUsername = $_SESSION["admin_username"];
  $adminPassword = $_SESSION["admin_password"];

  include "../functions/database.php";

if(isset($_POST["submit"])) {

    $title = $connection->real_escape_string($_POST["title"]);
    $body  = $connection->real_escape_string($_POST["tinymce"]);

    $sql = "INSERT INTO articles (title, body) VALUES ('$title', '$body')";
    
    $statement = $connection->query($sql);
    
    if($statement) {
      echo "Added article";
    } else {
      echo "failed to add article";
    }
  
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/normalise.css">
  <link rel="stylesheet" href="../css/style.css">
  <style>
    .container {
      width: 768px;
      margin: 0 auto;
    }

    #top-nav {
      line-height: 46px;
    }

    #nav-collection li a{
      color: #eee;
    }

    #nav-collection li a:hover{
      color: #fff;
    }

    #nav-collection li a.active {
      border-bottom: #eee 3px solid;
    }


    input[type="text"] {
      display: block;
      width: 100%;
      float: left;
      padding: 15px 0;
      box-sizing: border-box;
      border-bottom: 3px solid #333;
      margin-bottom: 15px;
      transition: all 300ms ease-in-out;
      font-size: 1.2em;
    }

    input[type="text"]:focus {
      border-bottom: 3px solid #0076c6;
    }

    #textarea {
      margin: 10px 0;
    }

    label {
      display: block;
      width: 100%;
    }
    #submit {
      background: #0076c6;
      color: #fff;
      font-weight: 700;
      text-transform: uppercase;
      padding: 10px 20px;
      text-align: center;
      box-shadow: 0 4px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
    }

    #submit:hover {
      cursor: pointer;
      opacity: 0.9;
    }

    #form-container {
      padding-top: 30px;
    }

    #header-admin {
      position: fixed;
      width: 100%;
      z-index: 5000;
      margin: 0 auto;
      float: left;
      background: #333;
    }
  </style>
</head>
<body>
<div id="header-admin">
<div class="container">
  <nav id="top-nav">
    <div class="container">
      <ul id="nav-collection">
        <li>
          <a href="#" class="active">
            New Article 
          </a>
        </li>
        <li>
          <a href="#">
            view Articles
          </a>
        </li>
        <li>
          <a href="../index.php" target="_blank">
            Home 
          </a>
        </li>
      </ul>
  </nav>
</div>
</div>
<br>
<br>
<div class="container" id="form-container">
  <form action="index.php" method="post" id="my-form">
    <label for="title">
      Title

      <input type="text" name="title" id="title" placeholder="Title of Article">
    </label><br>
    <label for="author">
      Author

      <input type="text" name="author" id="author" placeholder="Name of Author">
    </label><br>
    <label for="tinycme" style="margin-bottom: 30px;">
      Description<br>

      <textarea class="tinymce" name="tinymce" id="textarea" cols="30" rows="10"></textarea>
    </label><br>
    <input type="submit" id="submit" name="submit" value="Publish">
  </form>
</div>
<div id="data">
  <div class="container"></div>
</div>



  <script src='../js/jquery.min.js'></script>
  <script src="../plugin/tinymce/tinymce.min.js"></script>
  <script src="../plugin/tinymce/init-tinymce.js"></script>
  <script src="../js/data.js"></script>
</body>
</html>