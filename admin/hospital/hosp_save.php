<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['submit']))
{
	
	$hospital_name=$_POST['hospital_name'];
	$fname=$_POST['doctor_fname'];
	$mname=$_POST['doctor_mname'];
	$lname=$_POST['doctor_lname'];
	$telephone=$_POST['telephone'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$addressline1=$_POST['hospital_addressline1'];
	$addressline2=$_POST['hospital_addressline2'];
	$city=$_POST['hospital_city'];
	$postalcode=$_POST['hospital_postalcode'];
	$province=$_POST['hospital_province'];
	$country=$_POST['hospital_country'];
	
		//insert data to database	
		$result=mysql_query("
					INSERT INTO 
							`hospital`(`hospital_name`,`doctor_fname`,`doctor_mname`,`doctor_lname`,`telephone`,`fax`,`email`,`hospital_addressline1`,`hospital_addressline2`,
										 `hospital_city`,`hospital_postalcode`,`hospital_province`,`hospital_country`)
 					VALUES('$hospital_name','$fname','$mname','$lname','$telephone','$fax','$email','$addressline1','$addressline2','$city','$postalcode','$province','$country')
 							")
 		or die(mysql_error());
		
		//display success message
		echo "<font color='green'>Hospital added successfully.";
		header("Location:input.php");
	
}
?>
