<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['case_name']))
{
	$case_name=$_POST['case_name'];
	$description=$_POST['description'];
	$comment=$_POST['comment'];
	$status=$_POST['status'];
	$social_worker =$_POST['social_worker_id'];
	$orphan =$_POST['orphan_id'];
	
// checking empty fields
	if(empty($case_name) || empty($description) || empty($status) || empty($social_worker)|| empty($orphan))
	{
		//if Case-name field is empty
		if(empty($case_name))
		{
			echo "<font color='red'>Case Name field is empty.</font><br/>";
		}
		//if Description field is empty
		if(empty($description))
		{
			echo "<font color='red'>Case Description field is empty.</font><br/>";
		}
		//if status field is empty
		if(empty($status))
		{
			echo "<font color='red'>Status field is empty.</font><br/>";
		}
		
		//if social worker field is empty
		if(empty($social_worker))
		{
			echo "<font color='red'>Social Worker field is empty</font><br/>";
		}
		//if Orphan field is empty
		if(empty($orphan))
		{
			echo "<font color='red'>Orphan field is empty</font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)
	{

		mysql_query("
			INSERT INTO 
					`case`(`case_name`,`description`,`comment`,`status`,`social_worker_id`,`orphan_id`) 
			VALUES 
					('$case_name','$description','$comment','$status','$social_worker','$orphan')
					")
		or die(mysql_error());
		
		//display success message
		echo "<font color='green'>Case added successfully.";
		header ("refresh:5;url= ../placeholder1.htm");}
	
	}

}
?>

