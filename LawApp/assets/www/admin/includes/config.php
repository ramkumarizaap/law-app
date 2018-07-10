<?php

date_default_timezone_set("Asia/Calcutta");
$conn_hostname="localhost";
$conn_username="root";
$conn_password="";
$conn_database="law";
$con=@mysqli_connect($conn_hostname,$conn_username,$conn_password,$conn_database) or die("Error in connection");
if(!$con){
exit("Error in Database connection");
}

?>

