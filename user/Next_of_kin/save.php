<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['title']))
{
	$title=$_POST['title'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$relation=$_POST['relation'];
	$mobile=$_POST['mobile'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$addressline1=$_POST['addressline1'];
	$addressline2=$_POST['addressline2'];
	$city=$_POST['city'];
	$postalcode=$_POST['postalcode'];
	$province=$_POST['province'];
	$country=$_POST['country'];
			
	
		//insert data to database	
		$result=mysql_query("
		 			INSERT INTO
		 					`next_of_kin` (`kin_fname`,`kin_mname`,`kin_lname`,`relation`,`mobile`,`fax`,`email`,`kin_addressline1`,`kin_addressline2`,`kin_city`,`kin_postalcode`,`kin_province`,`kin_country`) 
					VALUES('$fname','$mname','$lname','$relation','$mobile','$fax','$email','$addressline1','$addressline2','$city','$postalcode','$province','$country')
						    ")
		or die(mysql_error());
		
			//display success message
		echo "<font color='green'>Next of kin added successfully.";
		header ("refresh:5; url=../placeholder1.htm");
	
}
?>
