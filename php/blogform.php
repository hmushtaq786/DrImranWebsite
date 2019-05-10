<?php

if (isset($_POST['upload'])) {
	echo "<script type='text/javascript'>alert('Blog posted successfully!');</script>";
	//connect to SQLiteDatabase
	$db = mysqli_connect("localhost","root","usbw","drimranadeelwebsite");
	//get all the submitted data from the form
	$title = $_POST['title'];
	$author = $_POST['author'];
	$content = $_POST['content'];
	$date = date("Y/m/d");
	$filename = $_FILES['photo']['name'];
	$fileError = $_FILES['photo']['error'];
	$fileSize = $_FILES['photo']['size'];
	$filetmpname = $_FILES['photo']['tmp_name'];
	$folder = 'imagesuploaded/';

	//break file name in two to get its extension
	$brName = explode('.', $filename);
	$fileExt = strtolower(end($brName));
	//allowed image file extensions
	$allowed = array('jpg', 'jpeg', 'png');

	if (in_array($fileExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 10000000) {
				$str = str_replace(' ','',$title);
				$fileDestination = 'imagesuploaded/'.$str.'_image.'.$fileExt;
				move_uploaded_file($filetmpname, $fileDestination);

			} else{
				echo "<script type='text/javascript'>alert('Your image is too big. It has to be less than 10 mb.');</script>";
				echo"<script type='text/javascript'>location='blogform.php';</script>";
			}
		} else{
			echo "<script type='text/javascript'>alert('There was an error uploading your file.');</script>";
			echo"<script type='text/javascript'>location='blogform.php';</script>";
		}
	} else {
		echo "<script type='text/javascript'>alert('You cannot upload images of this type! (JPG, JPEG, PNG are allowed only.)');</script>";
		echo"<script type='text/javascript'>location='blogform.php';</script>";
	}
	$sql = "INSERT INTO blogs (title, author, content, datepublished, imagelocation) VALUES ('$title', '$author', '$content', '$date', '$fileDestination')";
	mysqli_query($db, $sql);
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/icon.ico">
<title>Dr Imran Adeel - Write a Blog!</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
  body{
		height: 620px;
    background-color: mediumturquoise;
		background-image: linear-gradient(white, mediumturquoise);;
  }
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form method="post" action="blogform.php" enctype="multipart/form-data">
        <h2 class="text-center">Write a Blog</h2>
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Blog Title" required="required">
        </div>
        <div class="form-group">
            <input type="text" name="author" class="form-control" placeholder="Blog Author" required="required">
        </div>
        <div class="form-group">
          <textarea name="content" class="form-control" rows="10" placeholder="Blog's Content" required></textarea>
        </div>
        <div class="form-group">
            <input type="file" name="photo" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" name="upload" class="btn btn-primary btn-block">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
