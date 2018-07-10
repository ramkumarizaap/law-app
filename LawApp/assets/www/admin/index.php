<?php
ob_start();
session_start();
include('includes/common.php');
include('includes/config.php');
include('includes/functions.php');
?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.1.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Indian Law Library| Login Form </title>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo $homeurl;?>assets/fonts.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo $homeurl;?>assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo $homeurl;?>assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo $homeurl;?>assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.php" class="logo_text">
		<h3 style="font-weight:bold;color:#FF0000;">INDIAN LAW LIBRARY</h3>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="" method="post">
		<h3 class="form-title">Login to your account</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
		</div>
		<?php if(isset($_SESSION['alert']))
		{
		$status=get_alert_status($_SESSION['alert']);
		echo $status;
		unset($_SESSION['alert']);
		}
		?>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn blue pull-right" name="login">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	
		<div class="forget-password">
			<h4>Forgot your password ?</h4>
			<p>
				 no worries, click <a href="javascript:;" id="forget-password">
				here </a>
				to reset your password.
			</p>
		</div>
		<div class="create-account">
			
		</div>
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<form class="forget-form" action="" method="post">
		<h3>Forget Password ?</h3>
		<p>
			 Enter your e-mail address below to reset your password.
		</p>
		<div class="form-group">
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn">
			<i class="m-icon-swapleft"></i> Back </button>
			<button type="submit" class="btn blue pull-right" name="forgot_password">
			Submit <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	
	<!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 <?php echo date('Y');?> &copy; Indian Law Library - Admin Dashboard.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo $homeurl;?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo $homeurl;?>assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo $homeurl;?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $homeurl;?>assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo $homeurl;?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
  Login.init();
       // init background slide images
       $.backstretch([
        "<?php echo $homeurl;?>assets/admin/pages/media/bg/1.jpg",
        ".<?php echo $homeurl;?>assets/admin/pages/media/bg/2.jpg",
        ".<?php echo $homeurl;?>assets/admin/pages/media/bg/3.jpg",
        "<?php echo $homeurl;?>assets/admin/pages/media/bg/4.jpg"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
<!-- END JAVASCRIPTS -->
</body>

<!-- END BODY -->
</html>
<?php
if(isset($_POST['login']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from login where username='".$username."' and password='".$password."'";
	$q=query_exe($sql);
	if(mysqli_num_rows($q))
	{
	 	$r=mysqli_fetch_array($q);
			$_SESSION['user_type']=$r['user_type'];
			$_SESSION['firstname']=$r['firstname'];
			$_SESSION['id']=$r['id'];
			$_SESSION['lastname']=$r['lastname'];
			$_SESSION['username']=$r['username'];
			$_SESSION['password']=$r['password'];
			$_SESSION['user_image']=$r['user_image'];
			$_SESSION['email']=$r['email'];
			header("Location:{$homeurl}dashboard.php");
	}
	else
	{
		$_SESSION['alert']="invalid_username";
		header("Location:{$homeurl}");
	}
}
if(isset($_POST['forgot_password']))
{
$email=$_POST['email'];
$sql="select * from login where email='".$email."'";
$q=query_exe($sql);
$r=mysqli_fetch_array($q);
if(mysqli_num_rows($q))
{
$username=$r['username'];
$password=$r['password'];
$from="Builder CRM";
$to=$email;
$subject="Password Reset";
$message="
<html>
<body>
	<table>
		<tr>
			<td>Username</td><td>:</td><td>".$username."</td>
		</tr>
		<tr>
			<td>Password</td><td>:</td><td>".$password."</td>
		</tr>
	</table>
</body>
</html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Builder CRM <info@techzar.com>' . "\r\n";
if(mail($to,$subject,$message,$headers))
{
		$_SESSION['alert']="password_mail_success";
		header("Location:{$homeurl}index.php");
}
else
{
		$_SESSION['alert']="password_mail_fail";
		header("Location:{$homeurl}index.php");
}
}
else
{
		$_SESSION['alert']="email_not_exists";
		header("Location:{$homeurl}index.php");
}
}
?>