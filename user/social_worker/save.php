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
	$province=$_POST['province'];
	$country=$_POST['social_worker_country'];
		
		// checking empty fields
	if(empty($fname) || empty($lname)|| empty($gender) || empty($mobile) || empty($email)|| empty($province)|| empty($country))
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
		//if gender field is empty
		if(empty($gender))
		{
			echo "<font color='red'>Gender field is empty</font><br/>";
		}
		//if mobile field is empty
		if(empty($mobile))
		{
			echo "<font color='red'>Mobile field is empty.</font><br/>";
		}
		
		//if email field is empty
		if(empty($email))
		{
			echo "<font color='red'>Email field is empty</font><br/>";
		}
		//if province field is empty
		if(empty($province))
		{
			echo "<font color='red'>Province field is empty</font><br/>";
		}
		
		//if country field is empty
		if(empty($country))
		{
			echo "<font color='red'>Country field is empty</font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)
	{	
	
		
		
		mysql_query("
				INSERT INTO 
						`social_worker` (`title`,`social_worker_fname`,`social_worker_mname`,`social_worker_lname`,`gender`,`telephone`,`mobile`,`fax`,`email`,
										`social_worker_addressline1`,`social_worker_addressline2`,`social_worker_city`,`social_worker_postalcode`,
										`social_worker_province`,`social_worker_country`) 

				VALUES('$title','$fname','$mname','$lname','$gender','$mobile','$telephone','$fax','$email','$addressline1','$addressline2','$city','$postalcode','$province','$country')
			       		")
					
		or die(mysql_error());
	
		//display success message
		echo "<font color='green'>Social Worker added successfully.";
		header ("refresh:5; url=../placeholder1.htm");


	}
	
}

?>

