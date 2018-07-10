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
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Builder CRM |  User Profile</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo $homeurl;?>assets/fonts.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo $homeurl;?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
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
<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
<?php include('includes/header.php');?>	
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php include('includes/sidebar.php');?>	
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			User Profile <small>user profile</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashborad.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Extra</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">User Profile</a>
					</li>
				</ul>
				
			</div>
			<?php if(isset($_SESSION['alert']))
				{
				$status=get_alert_status($_SESSION['alert']);
				echo $status;
				unset($_SESSION['alert']);
				}
			?>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row profile">
				<div class="col-md-12">
				
					<!--BEGIN TABS-->
					<div class="tabbable tabbable-custom tabbable-full-width">
						<ul class="nav nav-tabs">
							
							<li class="active">
								<a href="#tab_1_3" data-toggle="tab">
								Account </a>
							</li>
							
						</ul>
						<div class="tab-content" >
							
							<!--tab_1_2-->
							<div class="tab-pane" id="tab_1_3" style="display:block !important;">
								<div class="row profile-account">
									<div class="col-md-3">
										<ul class="ver-inline-menu tabbable margin-bottom-10">
											<li class="active">
												<a data-toggle="tab" href="#tab_1-1">
												<i class="fa fa-cog"></i> Personal info </a>
												<span class="after">
												</span>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_2-2">
												<i class="fa fa-picture-o"></i> Change Avatar </a>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_3-3">
												<i class="fa fa-lock"></i> Change Password </a>
											</li>
											
										</ul>
									</div>
									<div class="col-md-9">
										<div class="tab-content">
											<div id="tab_1-1" class="tab-pane active">
												<form role="form" action="" method="post">
													<div class="form-group">
														<label class="control-label">First Name</label>
														<input type="text" placeholder="Firstname" class="form-control"  name="firstname"
														value="<?php echo $_SESSION['firstname'];?>"/>
													</div>
													<div class="form-group">
														<label class="control-label">Last Name</label>
														<input type="text" placeholder="Lastname" class="form-control" name="lastname"
														value="<?php echo $_SESSION['lastname'];?>"/>
													</div>
													
													<div class="form-group">
														<label class="control-label">Username</label>
														<input type="text" placeholder="Username" class="form-control" name="username"
														value="<?php echo $_SESSION['username'];?>"/>
													</div>
													
													
													<div class="form-group">
														<label class="control-label">Email</label>
														<input type="text" placeholder="Email" class="form-control" name="email"
														value="<?php echo $_SESSION['email'];?>"/>
													</div>
													<div class="margiv-top-10">
													<input type="submit" class="btn green" value="Submit Changes" name="profile">
													<input type="button" class="btn default" 
													onClick="window.location.href='<?php echo $homeurl;?>dashboard.php';" value="Cancel">
													</div>
												</form>
											</div>
											<div id="tab_2-2" class="tab-pane">
											
												<form action="" role="form" method="post" enctype="multipart/form-data">
													
													<div class="form-group">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																<img src="<?php echo $homeurl.$_SESSION['user_image'];?>" alt=""/>
											
															</div>
														<input type="hidden" name="old_image" value="<?php echo $_SESSION['user_image'];?>">
															<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
															</div>
															<div>
																<span class="btn default btn-file">
																<span class="fileinput-new">
																Select image </span>
																<span class="fileinput-exists">
																Change </span>
																<input type="file" name="userfile">
																</span>
																<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
																Remove </a>
															</div>
														</div>
														
													</div>
													<div class="margin-top-10">
														<input type="submit" class="btn green" value="Submit Changes" name="avatar">
													<input type="button" class="btn default" 
													onClick="window.location.href='<?php echo $homeurl;?>dashboard.php';" value="Cancel">
													</div>
												</form>
											</div>
											<div id="tab_3-3" class="tab-pane">
												<form action="" method="post"> 
													<div class="form-group">
														<label class="control-label">Current Password</label>
														<input type="password" class="form-control" readonly 
														value="<?php echo $_SESSION['password'];?>"/>
													</div>
													<div class="form-group">
														<label class="control-label">New Password</label>
														<input type="password" class="form-control" name="n_password"/>
													</div>
													<div class="form-group">
														<label class="control-label">Re-type New Password</label>
														<input type="password" class="form-control" name="c_password"/>
													</div>
													<div class="margin-top-10">
														<input type="submit" class="btn green" value="Submit Changes" name="password">
													<input type="button" class="btn default" 
													onClick="window.location.href='<?php echo $homeurl;?>dashboard.php';" value="Cancel">
													</div>
												</form>
											</div>
											
										</div>
									</div>
									<!--end col-md-9-->
								</div>
							</div>
							<!--end tab-pane-->
							
								<!--end add-portfolio-->
									
							<!--end tab-pane-->
						</div>
					</div>
					<!--END TABS-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include('includes/footer.php');?>	
<!-- END FOOTER -->
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
<script src="<?php echo $homeurl;?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo $homeurl;?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo $homeurl;?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
});
</script>
<!-- END JAVASCRIPTS -->
</body>

<!-- END BODY -->
</html>
<?php
if(isset($_POST['profile']))
{	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$id=$_SESSION['id'];
	$sql="update login set firstname='".$firstname."',lastname='".$lastname."',username='".$username."',email='".$email."' 
	where id='".$id."'";
	$q=query_exe($sql);
	if($q)
	{
		$_SESSION['alert']="profile_update_success";
		header("Location:{$homeurl}profile.php");
	}
	else
	{
		$_SESSION['alert']="profile_update_fail";
		header("Location:{$homeurl}profile.php");
	}
}
if(isset($_POST['avatar']))
{
	 $old_image=$_POST['old_image'];
	$id=$_SESSION['id'];
	 $userfile=$_FILES['userfile']['name'];
	if($userfile!='')
	{
		$x=$_FILES['userfile']['name'];
		$imagesize=$_FILES['userfile']['size'];
		if($imagesize > 0)
		{
		$img_loc="";
			$type=$_FILES['userfile']['type'];
			$ext=get_image_type($type);
			$rand=time();
			$temp=$_FILES['userfile']['tmp_name'];
			$target="upload/users/".$rand.$ext;
			$img_loc.=$target;
			move_uploaded_file($temp,$target);
			$temp='';
			$target='';
			$rand='';
			$ext='';
		}
		else{
		$img_loc="";
		}
	}
	else
	{
		$img_loc=$old_image;
	}
$sql="update login set user_image='".$img_loc."' where id='".$id."'";	
$q=query_exe($sql);
	if($q)
	{
		$_SESSION['alert']="avatar_update_success";
		header("Location:{$homeurl}profile.php");
	}
	else
	{
		$_SESSION['alert']="avatar_update_fail";
		header("Location:{$homeurl}profile.php");
	}
}
if(isset($_POST['password']))
{
	$id=$_SESSION['id'];
	$n_password=$_POST['n_password'];
	$c_password=$_POST['c_password'];
	if($n_password!=$c_password)
	{
		$_SESSION['alert']="password_mismatch";
		header("Location:{$homeurl}profile.php");
	}
	else
	{
		$sql="update login set password='".$n_password."'	where id='".$id."'";
		$q=query_exe($sql);
		if($q)
		{
			$_SESSION['alert']="password_update_success";
			header("Location:{$homeurl}profile.php");
		}
		else
		{
			$_SESSION['alert']="password_update_fail";
			header("Location:{$homeurl}profile.php");
		}
	}
}
?>