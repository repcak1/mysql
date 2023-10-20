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



<?php
$datebase="repcak";
//create database
$sql= "CREATE DATABASE $datebase";
if (mysqli_query($conn, $sql)) {
    echo "database created successfully";
}  else {
    echo "error creating database: " . mysqli_error($conn);
}

?>
