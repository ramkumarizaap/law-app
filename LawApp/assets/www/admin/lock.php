<?php
ob_start();
session_start();
include('includes/common.php');
include('includes/config.php');
include('includes/functions.php');
if(isset($_SESSION['username'])=="")
{
	header("Location:{$homeurl}index.php");
}
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
<title>Indian Law Library | Lock Screen</title>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo $homeurl;?>assets/fonts.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo $homeurl;?>assets/admin/pages/css/lock.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>

<!-- END PAGE LEVEL STYLES -->
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
<body>
<div class="page-lock">
	<div class="page-logo">
		<a href="dashboard.php" style="text-decoration:none;">
		<h3 style="font-weight:bold;color:#FF0000;">Indian Law Library</h3>
	</a>
	</div>
	<?php if(isset($_SESSION['alert']))
		{
		$status=get_alert_status($_SESSION['alert']);
		echo $status;
		unset($_SESSION['alert']);
		}
		?>
	<div class="page-body">
		<img class="page-lock-img" src="<?php echo $homeurl.$_SESSION['user_image'];?>" alt="">
		<div class="page-lock-info">
			<h1><?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?></h1>
			<span class="email">
			<?php echo $_SESSION['email'];?> </span>
			<span class="locked">
			Locked </span>
			<form class="form-inline" action="" method="post">
				<div class="input-group input-medium">
					<input type="text" class="form-control" placeholder="Password" name="password">
					<span class="input-group-btn">
					<button type="submit" class="btn blue icn-only" name="lock_login"><i class="m-icon-swapright m-icon-white"></i></button>
					</span>
				</div>
				<!-- /input-group -->
				<div class="relogin">
					<a href="logout.php">
					Not <?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?> ? </a>
				</div>
			</form>
		</div>
	</div>
	<div class="page-footer-custom">
		 <?php echo date('Y');?> &copy; Indian Law Library. Admin Dashboard .
	</div>
</div>
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
<script src="<?php echo $homeurl;?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?php echo $homeurl;?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/pages/scripts/lock.js"></script>
<script src="<?php echo $homeurl;?>assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   Lock.init();
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
});
</script>
<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->
</html>
<?php
if(isset($_POST['lock_login']))
{
	$id=$_SESSION['id'];
	$password=$_POST['password'];
	$sql="select * from login where password='".$password."' and id='".$id."'";
	$q=query_exe($sql);
	if(mysqli_num_rows($q))
	{
		header("Location:{$homeurl}dashboard.php");
	}
	else
	{
		$_SESSION['alert']="poassword_wrong";
		header("Location:{$homeurl}lock.php");
	}
}
?>