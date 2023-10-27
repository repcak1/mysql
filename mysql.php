 <?php
$servername = "localhost";
$username = "root"; //root
$password = "";// ""


//create connection 
$conn = mysqli_connect($servername,$username,$password);

//check information
 if (!$conn) {
    die("connection failed:" . mysqli_connect_error() );
 }
 echo "connected successfully";



$datebase="szkollne16";
//create database
$sql= "CREATE DATABASE $datebase";
if (mysqli_query($conn, $sql)) {
    echo "database created successfully";
}  else {
    echo "error creating database: " . mysqli_error($conn);
}

if (mysqli_select_db($conn, $datebase)) {
    echo "database $datebase selected";
} else {
    echo "error select database:" . 
    mysqli_error($conn);
}

$sql = "CREATE TABLE MyGuests (
    id int(6) UNSIGNED AUTO_INCREMENT
    PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(30),
    reg_date TIMESTAMP DEFAULT
    CURRENT_TIMESTAMP ON UPDATE
    CURRENT_TIMESTAMP)";
if (mysqli_query($conn, $sql)) {
    echo "table MyGuests created successfully";
} else {
    echo "error creating table:" . mysqli_error($conn);
}

$sql = "INSERT INTO MyGuests (firstname,lastname,email)
VALUES('john','kowalski', 'johnyie@gmail.com')";

$sql = "INSERT INTO MyGuests (firstname,lastname,email)
VALUES('lukasz','modern', 'lukaszie@gmail.com')";

$sql = "INSERT INTO MyGuests (firstname,lastname,email)
VALUES('maciej','klak', 'maciejie@gmail.com')";


if (mysqli_query($conn, $sql)) {
    echo "new record created successfully";
} else {
    echo "error: ". $sql. "<br>". mysqli_error($conn);
 }
 $sql = "SELECT  id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo "id:" . $row["id"]. "- Name:" . 
        $row["firstname"]. "" . $row["lastname"]. "<br>";
    }
} else {
    echo "0 result";
}
  ?>
