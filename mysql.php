<?php
$servername = "localhost";
$username = "username";
$password = "password";


//create connection 
$conn = mysqli_connect($servername,$username,$password);

//check information
 if (!$conn) {
    die("connection failed:" . mysqli_connect_error() );
 }
 echo "connected successfully";
?>
