<?php
include('includes/common.php');
include('includes/config.php');

function query_exe($query)
{
	global $con;
	$sql=mysqli_query($con,$query);
	return $sql;
}
function get_alert_status($opt="")
{
	switch($opt)
	{
		 case "invalid_username":
		 $st="<div class='alert alert-danger'><button class='close' data-close='alert'></button><span>Invalid Username or 
				Password.</span></div>";
			return $st;
		 break;
		  case "profile_update_success":
		 $st="<div class='alert alert-info'>
			<button class='close' data-close='alert'></button>
			<span>
			Profile Updated Successfully.Please logout and login to revert changes. </span>
		</div>";
			return $st;
		 break;
		  case "profile_update_fail":
		 $st="<div class='alert alert-danger'><button class='close' data-close='alert'></button><span>Failed to update your 
				 Profile.</span></div>";
			return $st;
		 break;
		  case "avatar_update_success":
		 $st="<div class='alert alert-info'>
			<button class='close' data-close='alert'></button>
			<span>
			Avatar Updated Successfully.Please logout and login to revert changes. </span>
		</div>";
			return $st;
		 break;
		  case "avatar_update_fail":
		 $st="<div class='alert alert-danger'><button class='close' data-close='alert'></button><span>Failed to update your 
				 Avatar.</span></div>";
			return $st;
		 break;
		   case "password_update_success":
		 $st="<div class='alert alert-info'>
			<button class='close' data-close='alert'></button>
			<span>
			Password Updated Successfully.Please logout and login to revert changes. </span>
		</div>";
			return $st;
		 break;
		  case "password_update_fail":
		 $st="<div class='alert alert-danger'><button class='close' data-close='alert'></button><span>Failed to update your 
				 Password.</span></div>";
			return $st;
		 break;
		 case "password_mismatch":
		 $st="<div class='alert alert-danger'><button class='close' data-close='alert'></button><span>Password Mismatch.</span></div>";
			return $st;
		 break;
		  case "poassword_wrong":
		 $st="<div class='alert alert-danger'><button class='close' data-close='alert'></button><span>Entered Password is Wrong.</span></div>";
			return $st;
			 case "already_email_exists":
		 $st="<div class='alert alert-danger'><button class='close' data-close='alert'></button><span>This Email already exists.</span></div>";
			return $st;
		case "engineer_add_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Engineer Added Successfully.</span>
		 		</div>";
			return $st;
		 break;
		 case "engineer_delete_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Engineer Deleted Successfully.</span>
		 		</div>";
			return $st;
		 break;
		 case "engineer_update_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Engineer Updated Successfully.</span>
		 		</div>";
			return $st;
		 break;
		 case "project_add_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Project Added Successfully.</span>
		 		</div>";
			return $st;
		 break;
		  case "project_delete_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Project Deleted Successfully.</span>
		 		</div>";
			return $st;
		 break;
		 case "project_update_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Project Updated Successfully.</span>
		 		</div>";
			return $st;
		 break;
		 case "assign_validate_error":
		 $st="<div class='alert alert-danger'><button class='close' data-close='alert'></button><span>You have some form errors. Please 	
		 		check below.</span>
		 		</div>";
			return $st;
		 break;
		   case "ass_eng_delete_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Engineer Assigned Deleted Successfully.</span></div>";
			return $st;
		 break;
		  case "ass_eng_add_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Engineer assigned to the Project Successfully.</span></div>";
			return $st;
		 break;
		  case "ass_eng_update_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Engineer Assigned Updated Successfully.</span>
		 		</div>";
			return $st;
		 break;
		   case "blocks_already_exists":
		 $st="<div class='alert alert-danger'><button class='close' data-close='alert'></button><span>This Block already exists in this Project.</span></div>";
			return $st;
			 case "blocks_add_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Blocks are Added to the Project Successfully.</span></div>";
			return $st;
		 break;
		  case "blocks_update_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Block are updated to the Project  Successfully.</span></div>";
			return $st;
		 break;
		  case "block_delete_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Blocks Deleted Successfully.</span>
		 		</div>";
			return $st;
		 break;
		  case "floors_add_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Floors Added Successfully.</span>
		 		</div>";
			return $st;
		 break;
		  case "floors_already_exists":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>This floor already exists in this Project and Block.</span></div>";
			return $st;
		 break;
		  case "floors_update_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Floors are Updated Successfully.</span></div>";
			return $st;
		 break;
		  case "floor_delete_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Floor Deleted Successfully.</span>
		 		</div>";
			return $st;
		 break;
		 case "contractors_add_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Contractor Added Successfully.</span>
		 		</div>";
			return $st;
		 break;
		  case "short_desc_add_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Short Description Added Successfully.</span></div>";
			return $st;
			break;
			  case "short_desc_delete_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Short Description Deleted Successfully.</span></div>";
			return $st;
		 break;
		  case "short_desc_updated_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Short Description Updated Successfully.</span></div>";
			return $st;
		 break;
		   case "contractor_delete_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Contractor Deleted Successfully.</span></div>";
			return $st;
		 break;
		  case "contractors_update_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Contractors Updated Successfully.</span></div>";
			return $st;
		 break;
		   case "labour_add_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Labour Added Successfully.</span></div>";
			return $st;
			   case "labour_delete_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Labour Deleted Successfully.</span></div>";
			return $st;
		 break;
		   case "labour_update_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Labour Updated Successfully.</span></div>";
			return $st;
		 break;
		   case "password_mail_success":
		 $st="<div class='alert alert-info'><button class='close' data-close='alert'></button><span>Password has been sent to your mail successfully.</span></div>";
			return $st;
		 break;
		   case "password_mail_fail":
		 $st="<div class='alert alert-danger'><button class='close' data-close='alert'></button><span>Something Wrong!!!</span></div>";
			return $st;
		 break;
		   case "email_not_exists":
		 $st="<div class='alert alert-danger'><button class='close' data-close='alert'></button><span>Email-id doesn't exists.</span></div>";
			return $st;
		 break;
	}
}
function get_image_type($type)
{
	switch($type)
	{
		case "image/jpeg":
		$ext=".jpg";
		break;
		case "image/png":
		$ext=".png";
		break;
		default:
			$ext="";
		break;
	}
	return $ext;
}

?>