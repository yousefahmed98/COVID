<?php
include "functions/functions.php";
include "../db.php";

$username=$_POST["username"];
$email=$_POST["email"];
$phone=$_POST["phoneNumber"];
/*echo $username;
echo $email;
echo $phone;*/

$ip =  getUserIp();
//$result = $_COOKIE["sickness"];

$result = 10;
$date = get_Date();

/*$sql="select max(LastExamID) from `tbl_users`";
$exam_id=$db->query($sql);
$exam_id++;*/

$exam_id=0;

$sql="INSERT INTO `tbl_users`(`FullUsername`, `Email`, `Phone`, `IP`, `LastExamResult`, `LastExamID`, `TimeSt`) VALUES ("..","..","..","..",[value-6],[value-7],[value-8])";



?>