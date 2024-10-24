<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "Kipro22$";
$dBName = "restaurant-reservation";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("Connection failed:" .mysqli_connect_error());
}
?>

