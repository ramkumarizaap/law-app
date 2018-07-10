<?php
?>
<script src="<?php echo $homeurl;?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>	
<script>
$(document).ready(function(){
	url=$(location).attr('href');
	url=url.split('/');
	url=url[4];
	switch(url)	
	{
	case "blocks_view.php":
	$(".blocks").addClass("active");
	break;
	case "add_blocks.php":
	$(".blocks").addClass("active");
	break;
	case "floors_view.php":
	$(".blocks").addClass("active");
	break;
	case "add_floors.php":
	$(".blocks").addClass("active");
	break;
	case "dashboard.php":
	$(".start").addClass("active");
	break;
	case "add_projects.php":
	$(".project").addClass("active");
	break;
	case "view_projects.php":
	$(".project").addClass("active");
	break;
	case "add_engineers.php":
	$(".engineer").addClass("active");
	break;
	case "view_engineers.php":
	$(".engineer").addClass("active");
	break;
	case "assign_engineers_view.php":
	$(".engineer").addClass("active");
	break;
	case "assign_engineers.php":
	$(".engineer").addClass("active");
	break;
	case "add_contractors.php":
	$(".contractors").addClass("active");
	break;
	case "contractors_view.php":
	$(".contractors").addClass("active");
	break;
	case "add_short_description.php":
	$(".short").addClass("active");
	break;
	case "view_short_description.php":
	$(".short").addClass("active");
	break;
	case "add_labour.php":
	$(".labour").addClass("active");
	break;
	case "view_labour.php":
	$(".labour").addClass("active");
	break;
	}
	
});
</script>
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				
				<li class="start  active">
					<a href="<?php echo $homeurl;?>dashboard.php">
					<i class="fa fa-home"></i>
					<span class="title">Home</span>
					<span class="selected"></span>
					</a>
				
				</li>
				
				<!-- BEGIN FRONTEND THEME LINKS -->
				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>