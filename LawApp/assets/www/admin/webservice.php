<?php
include('includes/config.php');
include('includes/common.php');
include('includes/functions.php');
if(isset($_POST['mob']))
{
$mob=$_POST['mob'];
$code=rand(0,99999);
$sql1="select * from law_users where mobile_no='".$mob."'";
$q1=query_exe($sql1);
if(mysqli_num_rows($q1) > 0)
{
	echo "Sorry...You already request for activation code.";
}
else
{
	$sql="insert into law_users(mobile_no,code)values('".$mob."','".$code."')";
	$q=query_exe($sql);
	echo "Thank You.You will receive the activation code when admin checks your payment status.";
}
}
if(isset($_POST['code']))
{
$code=$_POST['code'];
$sql="select * from law_users where code='".$code."'";
$q=query_exe($sql);
$r=mysqli_fetch_array($q);
	if(mysqli_num_rows($q))
	{
		if($r['payment_status']=="1")
		{
			$sql1="update law_users set code_status='1' where id='".$r['id']."'";
			$q1=query_exe($sql1);
			echo "Thank You.Your code has been activated successfully.";
		}
		else
		{
			echo "Payment is not yet received or confirmed.";
		}
	}
	else
	{
		echo "The entered code is wrong!!!";
	}
}



?>