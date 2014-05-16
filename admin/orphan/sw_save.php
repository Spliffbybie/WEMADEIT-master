<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	$fname=$_POST['social_worker_fname'];
	$mname=$_POST['social_worker_mname'];
	$lname=$_POST['social_worker_lname'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$telephone=$_POST['telephone'];	
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$addressline1=$_POST['social_worker_addressline1'];
	$addressline2=$_POST['social_worker_addressline2'];
	$city=$_POST['social_worker_city'];
	$postalcode=$_POST['social_worker_postalcode'];
	$province=$_POST['social_worker_province'];
	$country=$_POST['social_worker_country'];
			
		mysql_query("
				INSERT INTO 
						`social_worker` (`title`,`social_worker_fname`,`social_worker_mname`,`social_worker_lname`,`gender`,`telephone`,`mobile`,`fax`,`email`,
										`social_worker_addressline1`,`social_worker_addressline2`,`social_worker_city`,`social_worker_postalcode`,
										`social_worker_province`,`social_worker_country`) 

				VALUES('$title','$fname','$mname','$lname','$gender','$mobile','$telephone','$fax','$email','$addressline1','$addressline2','$city','$postalcode','$province','$country')
			       		")
					
		or die(mysql_error());
	
	header("Location: input.php");

		}
?>

