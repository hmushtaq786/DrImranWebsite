
<?php
    session_start();
    include_once('dbconnect.php');
    if(isset($_POST['signin'])){
        $username = strip_tags($_POST['username']);
        $username = strtolower($username);


        $password = strip_tags($_POST['pass']);

        try {
            $stmt = $db->prepare("SELECT * from users where username='$username' and password='$password'");
            $stmt->execute();

            // set the resulting array to associative
            //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $count = $stmt->rowCount();
            if ($count == 1) {
                $_SESSION['s_username'] = $username;
                $_SESSION['s_password'] = $password;
                echo"<script type='text/javascript'>location='../CMS/cmsdashboard.php';</script>";
            } else {
                echo "<script type='text/javascript'>alert('Invalid username/password');</script>";
            }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
/*
        $sql = "SELECT * from users where username='$username' and password='$password'";

        $result = mysqli_query($db, $sql);

        $rows = mysqli_num_rows($result);

        if($rows==1){
            $_SESSION['s_username'] = $username;
            $_SESSION['s_password'] = $password;
            echo"<script type='text/javascript'>location='../CMS/cmsdashboard.php';</script>";
        } else{
            echo "<script type='text/javascript'>alert('Invalid username/password');</script>";
        }*/
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS - Dr Imran Adeel</title>
    <meta charset="UTF-8">
    <meta name="description" content="One of the best plastic surgery clinic in Bahawalpur, operated by Dr Imran Adeel, the second most experienced and qualified plastic surgeon in the city.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../styles/modal.css">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico" />
    <!--===============================================================u================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-b-160 p-t-50">
                <form action="login.php" class="login100-form validate-form" method="POST">
                    <span class="login100-form-title p-b-43">
						Account Login
					</span>

                    <div class="wrap-input100 rs1 validate-input" data-validate="Username is required">
                        <input class="input100" type="text" name="username" value="">
                        <span class="label-input100">Username</span>

                    </div>


                    <div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass">
                        <span class="label-input100">Password</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="signin">
							Sign in
						</button>
                    </div>

                    <div class="text-center w-full p-t-23">
                        <a href="#" class="txt1">
							Forgot password?
						</a>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <!--===============================================================================================-->
    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor/daterangepicker/moment.min.js"></script>
    <script src="../vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="../js/main.js"></script>

</body>

</html>