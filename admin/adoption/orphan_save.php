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
	$adoption=$_POST['adoption'];
			
		mysql_query("
			INSERT INTO 
				`orphans`(`orphan_fname`,`orphan_mname`,`orphan_lname`,`dob`,`orphan_gender`,`race`,`type`,`location`, `social_worker_id`,`handler_id`,
						   `next_of_kin_id`,`school_id`,`hospital_id`,`adoption_id`)
			VALUES('$fname','$mname','$lname','$dob','$gender','$race','$type','$location', '$social_worker','$handler','$next_of_kin',
					'$school','$hospital','$adoption')
					
					
					")
					
		or die(mysql_error());
		
		//display success message
		echo "<font color='green'>Orphan added successfully.";
		header("Location: input.php");
	
}// UPDATE orphans SET age = ROUND (datediff(curdate(),`dob`)/365.25)
?>
