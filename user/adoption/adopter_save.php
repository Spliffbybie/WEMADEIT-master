<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['title']))
{
	$title=$_POST['title'];
	$fname=$_POST['adopter_fname'];
	$mname=$_POST['adopter_mname'];
	$lname=$_POST['adopter_lname'];
	$telephone=$_POST['telephone'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$addressline1=$_POST['adopter_addressline1'];
	$addressline2=$_POST['adopter_addressline2'];
	$city=$_POST['adopter_city'];
	$postalcode=$_POST['adopter_postalcode'];
	$province=$_POST['adopter_province'];
	$country=$_POST['adopter_country'];
	$spouse_fname=$_POST['spouse_fname'];
	$spouse_mname=$_POST['spouse_mname'];
	$spouse_lname=$_POST['spouse_lname'];
	$note=$_POST['note'];

			
	
		//insert data to database	
		$result=mysql_query("
						INSERT INTO 
								`adopter`
								(`title`,`adopter_fname`,`adopter_mname`,`adopter_lname`,`telephone`,`mobile`,`email`,`adopter_addressline1`,`adopter_addressline2`,
								`dopter_postalcode`,`adopter_province`,adopter_country`,`spouse_fname`,`spouse_mname`,`spouse_lname`,`note`)
 
						VALUES('$title','$fname','$mname','$lname','$telephone','$mobile','$email','$addressline1','$addressline2','$city','$postalcode','$province','$country','$spouse_fname',
								'$spouse_mname','$spouse_lname','$note')
							 ")
		or die(mysql_error());

		
		//display success message
		echo "<font color='green'>Adopter added successfully.";
		header("Location: input.php");
	
}
?>