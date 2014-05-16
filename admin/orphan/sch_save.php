<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['school_name']))
{
	
	$name=$_POST['school_name'];
	$title=$_POST['title'];
	$fname=$_POST['principle_fname'];
	$mname=$_POST['principle_mname'];
	$lname=$_POST['principle_lname'];
	$telephone=$_POST['telephone'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$addressline1=$_POST['school_address_line1'];
	$addressline2=$_POST['school_address_line2'];
	$city=$_POST['school_city'];
	$postalcode=$_POST['school_postalcode'];
	$province=$_POST['school_province'];
	$country=$_POST['school_country'];

		//insert data to database	
		$result=mysql_query("
							INSERT INTO 
							
										school(school_name,title,principle_fname,principle_mname,principle_lname,telephone,fax,email,school_address_line1,school_address_line2,
										       school_city,school_postalcode,school_province,school_country)
 							VALUES('$name','$title','$fname','$mname','$lname','$telephone','$fax','$email','$addressline1','$addressline2','$city','$postalcode','$province','$country')
 							")
		or die(mysql_error());

		
		//display success message
		echo "<font color='green'>Data added successfully.";
		header("Location:input.php");
	
}
?>

