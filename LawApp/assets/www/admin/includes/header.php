<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="dashboard.php" style="text-decoration:none;">
			<h3 style="font-weight:bold;color:#FF0000;">Indian Law Library</h3>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle hide1" src="<?php echo $homeurl.$_SESSION['user_image'];?>"/>
					<span class="username username-hide-on-mobile">
					<?php echo $_SESSION['firstname'];?> </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="profile.php">
							<i class="fa fa-user"></i> My Profile </a>
						</li>
							<li class="divider">
						</li>
						<li>
							<a href="lock.php">
							<i class="fa fa-lock"></i> Lock Screen </a>
						</li>
						<li>
							<a href="logout.php">
							<i class="fa fa-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
