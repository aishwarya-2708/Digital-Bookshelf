<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="";
// $conn ="";
//create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

//Die if connection was not successfull;
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
//    echo "Success";
}
