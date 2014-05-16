<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['title']))
{
	//here the id that we post is the same id that we get from url
	//id indicates the id of this data which we are editing
	//id is unique and a particular id is associated with particular data	
	$id = $_GET['ID'];
	
	$title=$_POST['title'];
	$fname=$_POST['handler_fname'];
	$handler_mname=$_POST['handler_mname'];
	$handler_lname=$_POST['handler_lname'];
	$affiliation=$_POST['affiliation'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$handler_addressline1=$_POST['handler_addressline1'];
	$handler_addressline2=$_POST['handler_addressline2'];
	$handler_city =$_POST['handler_city'];
	$handler_province=$_POST['handler_province'];
	$handler_postalcode=$_POST['handler_postalcode'];
	$handler_country = $_POST['handler_country'];
			

		//updating the table
		$result=mysql_query("
					UPDATE `handler` 
					SET `title`='$title',
					`handler_fname`='$fname',`handler_mname`='$handler_mname',
					`handler_lname`='$handler_lname',`affiliation`='$affiliation',
					`mobile`='$mobile',`email`='$email',
					`handler_addressline1`='$handler_addressline1',
					`handler_addressline2`=$handler_addressline2,
					`handler_city`='$handler_city',`handler_province`=$handler_province,
					`handler_postalcode`=$handler_postalcode,`handler_country`=$handler_country
					WHERE `handler_id`=$id
							")
		
		
		or die(mysql_error());

		
		header("Location:../placeholder1.htm");		 
		
	}	

	
?>
