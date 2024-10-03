<?php
include("database/connection.php");
$logemail = $_POST['logemail'];
$logpass = $_POST['logpassword'];

$query = "SELECT * FROM userdata WHERE uname='$logemail'";
// $query = mysqli_query($connect,"SELECT * FROM `userdata`");
// $query = mysqli_query($connect,"SELECT * FROM `userdata` WHERE `uname`='$logemail' AND `pwd`='$logpass'");
$row = mysqli_query($connect,$query);
$res = mysqli_fetch_assoc($row);
// $res = $connect->query($query);
/*
// get data from database
// $query2 = mysqli_query($connect,"SELECT * FROM `userdata` ");
if($res['uemail'] === $logemail && $res['pwd'] === $logpass)
{
    echo "correct";
    //     echo ("<SCRIPT LANGUAGE='JavaScript'>
    //   window.location.href='index.php';
    //  </SCRIPT>");
}else{
    echo "wrong";
    // echo ("<SCRIPT LANGUAGE='JavaScript'>
    // window.location.href='home.php';
    // </SCRIPT>");
}*/
echo $logemail."<br>";
echo $logpass."<br>";
echo $res['uemail']."<br>";
echo $res['pwd']."<br>";
?>