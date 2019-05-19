<?php
session_start();
if(!isset($_SESSION['s_username']) || !isset($_SESSION['s_password'])){
    echo "Please log in to proceed further. Redirecting page to login window...";
   // header("Location: ../php/login.php");
    header("refresh: 3; url = ../php/login.php");
    die();
} else{
    include_once ('include/cmsheader.php');
}

?>
<!--Main Working area-->
<div id="mainwindow">

</div>

</body>

</html>