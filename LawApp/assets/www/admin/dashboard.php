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
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Indian Law Library | View Users</title>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo $homeurl;?>assets/fonts.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $homeurl;?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo $homeurl;?>assets/global/plugins/select2/select2.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo $homeurl;?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
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
			View Users <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="dashboard.php">
							Home </a>
							<span class="fa fa-angle-right">
							</span>
						</li>
						<li>
							<a href="#">
							Users </a>
							<span class="fa fa-angle-right">
							</span>
						</li>
						<li>
							<a href="#">
							View </a>
						</li>
				</ul>
				
			</div>
				<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
				
					<!-- BEGIN PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-users"></i>Users List Table</div>
							
						</div>
						
						<div class="portlet-body">
							<?php if(isset($_SESSION['alert']))
											{
											$status=get_alert_status($_SESSION['alert']);
											echo $status;
											unset($_SESSION['alert']);
											}
							?>		
							<table class="table table-hover table-striped table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									 SNO
								</th>
								<th>
									 Mobile No
								</th>
								<th>
									 Code
								</th>
								<th>
									 Activate Status
								</th>
								<th>
									 Payment Status
								</th>
								<th>
									 Confirm
								</th>
								
							</tr>
							</thead>
							<tbody>
							<?php
							$sql="select * from law_users order by id desc";
							$q=query_exe($sql);
							$i=1;
							while($r=mysqli_fetch_array($q))
							{
							?>
							<tr>
								<td>
									<?php echo $i;?>
								</td>
								<td>
									 <?php echo $r['mobile_no'];?>
								</td>
								<td>
									 <?php echo $r['code'];?>
								</td>
								<td>
									<?php if($r['code_status']=="0")
									{
										echo "<span class='label label-warning'> Pending </span>";
									}
									else
									{
										echo "<span class='label label-info'> Activate </span>";
									}
									?>
								</td>
							
								<td>
									<?php if($r['payment_status']=="0")
									{
										echo "<span class='label label-warning'> Pending </span>";
									}
									else
									{
										echo "<span class='label label-info'> Confirm </span>";
									}
									?>
								</td>
							
								<td>
								<?php
								if($r['payment_status']=="0")
								{
								?>
								<a class="btn blue" href="<?php echo $homeurl;?>confirm_user.php?id=<?php echo $r['id'];?>"><i class="fa fa-check"></i></a>
								<?php
								}
								else
								{
								?>
								<span class="label label-success"> Approved </span>
								<?php
								}
								?>
								</td>
							</tr>
							<?php
							$i++;
							}
							?>
							</tbody>
							</table>
						
						</div>
					</div>
					<!-- END PORTLET-->
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
<script src="<?php echo $homeurl;?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo $homeurl;?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo $homeurl;?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo $homeurl;?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo $homeurl;?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo $homeurl;?>assets/admin/pages/scripts/table-editable.js"></script>

<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
  TableEditable.init();
 ;
});
</script>
<!-- END JAVASCRIPTS -->
</body>

<!-- END BODY -->
</html>