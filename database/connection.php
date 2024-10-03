<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "wcs_database";

$connect = mysqli_connect($servername, $username, $password, $database);
if($connect) {
    // echo "Connected!";
}else{
    echo "Connection failed!";
}
?>