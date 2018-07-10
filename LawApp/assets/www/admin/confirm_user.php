<?php
ob_start();
session_start();
include('includes/config.php');
include('includes/common.php');
include('includes/functions.php');
$id=$_GET['id'];
$sql="update law_users set payment_status='1' where id='".$id."'";
$q=query_exe($sql);
$sql1="select * from law_users where id='".$id."'";
$q1=query_exe($sql1);
$r=mysqli_fetch_array($q1);
$uid="9566588960";
$pwd="E6797C";
$phone="9566588960";
$msg="hi";
//send_sms($userID, $userPWD, $recerverNO, $message);

header("Location:{$homeurl}dashboard.php");

?>