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
	$addressline1=$_POST['addressline1'];
	$addressline2=$_POST['addressline2'];
	$city=$_POST['city'];
	$postalcode=$_POST['postalcode'];
	$province=$_POST['province'];
	$country=$_POST['country'];
		
		// checking empty fields
	if(empty($fname) || empty($lname)|| empty($affiliation) || empty($mobile) || empty($email)|| empty($province))
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
		//if affiliation field is empty
		if(empty($affiliation))
		{
			echo "<font color='red'>Affiliation field is empty</font><br/>";
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
		

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)
	{	

		
		mysql_query("
			INSERT INTO 
				 `handler`(`title`,`handler_fname`,`handler_mname`,`handler_lname`,`affiliation`,`mobile`,`email`,`handler_addressline1`,`handler_addressline2`,`handler_city`,
				 `handler_postalcode`,`handler_province`,`handler_country`)
 
			VALUES('$title','$fname','$mname','$lname','$affiliation','$mobile','$email','$addressline1','$addressline2','$city','$postalcode','$province','$country')
				   ")
				   
		or die(mysql_error());
		
		//display success message
		echo "<font color='green'>Handler added successfully.";
		header ("refresh:5;url= ../placeholder1.htm");}
	
}
?>
