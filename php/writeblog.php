<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="images/icon.ico">
    <title></title>
  </head>
  <body>
    <?php
    $uname = $_POST["username"];
    $pass = $_POST["password"];
    if($uname == "imranadeel" && $pass == "khanzada"){
      echo "<script type='text/javascript'>alert('Welcome Imran Adeel!');</script>";
      echo"<script type='text/javascript'>location='blogform.php';</script>";
      //header("Location: /adeel/blogform.html");
    } else {
      echo "<script type='text/javascript'>alert('Wrong Username/Password. Contact Administrator.');</script>";
      echo"<script type='text/javascript'>location='../login.html';</script>";
      //header("Location: /adeel/login.html");
    }
    ?>
  </body>
</html>
