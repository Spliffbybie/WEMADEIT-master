<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['fname']))
{
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dob'];
	$gender=$_POST['orphan_gender'];
	$race=$_POST['race'];
	$type=$_POST['type'];
	$location=$_POST['location'];
	$social_worker=$_POST['social_worker'];
	$handler=$_POST['handler'];
	$next_of_kin=$_POST['next_of_kin'];
	$school=$_POST['school'];
	$hospital=$_POST['hospital'];
		

	// checking empty fields
	if(empty($fname) || empty($lname)  || empty($dob) || empty($gender) || empty($type)|| empty($social_worker)|| empty($handler))
	{
		//if fname field is empty
		if(empty($fname))
		{
			echo "<font color='red'>First Name is empty.</font><br/>";
		}
		//if lname field is empty
		if(empty($lname))
		{
			echo "<font color='red'>Last Name field is empty.</font><br/>";
		}
		//if dob field is empty
		if(empty($dob))
		{
			echo "<font color='red'>Date of Birth field is empty.</font><br/>";
		}
		//if Gender field is empty
		if(empty($gender))
		{
			echo "<font color='red'>Gender field is empty</font><br/>";
		}

		//if Type field is empty
		if(empty($type))
		{
			echo "<font color='red'>Type field is empty</font><br/>";
		}
		//if social_worker field is empty
		if(empty($social_worker))
		{
			echo "<font color='red'>social_worker field is empty</font><br/>";
		}
		//if handler field is empty
		if(empty($handler))
		{
			echo "<font color='red'>Handler field is empty</font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)
	{	



	
		mysql_query("
			INSERT INTO 
				`orphans`(`orphan_fname`,`orphan_mname`,`orphan_lname`,`dob`,`orphan_gender`,`race`,`type`,`location`, `social_worker_id`,`handler_id`,
						   `next_of_kin_id`,`school_id`,`hospital_id`)
			VALUES('$fname','$mname','$lname','$dob','$gender','$race','$type','$location', '$social_worker','$handler','$next_of_kin',
					'$school','$hospital')
					
					
					")
					
		or die(mysql_error());
		
		//display success message
		echo "<font color='green'>Orphan added successfully.";
		header ("refresh:5; url=../placeholder1.htm");
	
}
}
?>