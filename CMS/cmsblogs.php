<?php
session_start();
if(!isset($_SESSION['s_username']) || !isset($_SESSION['s_password'])){
    echo "Please log in to proceed further. Redirecting page to login window...";
   // header("Location: ../php/login.php");
    header("refresh: 3; url = ../php/login.php");
    die();
} else{
    include_once ('include/cmsheader.php');
 //   try {
     //   $stmt = $db->prepare("SELECT * from blogs where username='$username' and password='$password'");
      //  $stmt->execute();

        // set the resulting array to associative
        //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
     //   $count = $stmt->rowCount();
     //   if ($count == 1) {
     //       $_SESSION['s_username'] = $username;
     //       $_SESSION['s_password'] = $password;
     //       echo"<script type='text/javascript'>location='../CMS/cmsdashboard.php';</script>";
     //   } else {
   //         echo "<script type='text/javascript'>alert('Invalid username/password');</script>";
   //     }
 //   }
   // catch(PDOException $e) {
     //   echo "Error: " . $e->getMessage();
    //}
    //$conn = null;
}

?>
<!--Main Working area-->
<div id="mainwindow">
    <table id="blogtable" border="1px">
        <tr>
            <td>Blog ID</td>
            <td>Blog Title</td>
            <td>Blog Author</td>
            <td>Blog Content</td>
            <td>Publish Date</td>
            <td>Image Location</td>
        </tr>
    </table>
</div>

</body>

</html>