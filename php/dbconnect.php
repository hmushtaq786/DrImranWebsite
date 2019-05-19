<?php

$servername = "localhost";
$port = "3310";
$username = "root";
$password = "usbw";
$dbname = "drimranadeelwebsite";

try {
    $db = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Please retry. Connection failed: " . $e->getMessage();
    die();
    }
/*
$db = mysqli_connect("127.0.0.1","root","usbw","drimranadeelwebsite");

if(mysqli_errno()){
    echo "Failed to connect: ".mysqli_errno();
}*/

?>