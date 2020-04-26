<?php
include "functions/functions.php";
include "../db.php";
$sickness=$_GET["sickness"];
$username=$_POST["username"];
$email=$_POST["email"];
$phone=$_POST["phoneNumber"];


$ip =  getUserIp();
if($ip=="")
{
    $ip="none";
}

$sick = $_GET["sick"];
$date = get_Date();

$result = mysql_query("SELECT MAX(`LastExamID`) FROM `tbl_users`");
$row = mysql_fetch_row($result);
$exam_id = $row[0]+1;


$ip=getUserIp();
if($ip=="")
    $ip="none";

$sql="INSERT INTO `tbl_users`(`FullUsername`, `Email`, `Phone`, `IP`, `LastExamResult`, `LastExamID`, `TimeSt`) VALUES ('".$username."','".$email."','".$phone."','".$ip."','".$sick."','".$exam_id."','".$date."')";

if(mysql_query( $sql, $db )){

}else{
    header("Location:checkDone.php? sickness = $sick");
}
/*
if($db->exec($sql)){
   header("Location:index.php");
}else{
    header("Location:checkDone.php");
}
*/

?>