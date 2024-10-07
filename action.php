<?php
include("database/connection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$user_pic = $_FILES['pic']['name'];
$temp_name = $_FILES['pic']['tmp_name'];
$folder = "images/".$user_pic;

$query = "INSERT INTO `userdata`(uname,uemail,pwd,phone,userPic) VALUES ('$name','$email','$password','$mobile','$user_pic')";
$submits = mysqli_query($connect,$query);
move_uploaded_file($temp_name,$folder);
header("location:index.php");
?>
