<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['title']))
{

	$title=$_POST['title'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$affiliation=$_POST['affiliation'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$addressline1=$_POST['handler_addressline1'];
	$addressline2=$_POST['handler_addressline2'];
	$city=$_POST['city'];
	$postalcode=$_POST['postalcode'];
	$province=$_POST['province'];
	$country=$_POST['country'];
	
		
		mysql_query("
			INSERT INTO 
				 `handler`(`title`,`handler_fname`,`handler_mname`,`handler_lname`,`affiliation`,`mobile`,`email`,`handler_addressline1`,`handler_addressline2`,`handler_city`,
				 `handler_postalcode`,`handler_province`,`handler_country`)
 
			VALUES('$title','$fname','$mname','$lname','$affiliation','$mobile','$email','$addressline1','$addressline2','$city','$postalcode','$province','$country')
				   ")
				   
		or die(mysql_error());
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		header("Location:input.php");
	
}
?>
