<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['title']))
{

	$title=$_POST['title'];
	$national_id=$_POST['national_id'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$skill=$_POST['skill'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$addressline1=$_POST['addressline1'];
	$addressline2=$_POST['addressline2'];
	$city=$_POST['city'];
	$postalcode=$_POST['postalcode'];
	$province=$_POST['province'];
	$country=$_POST['country'];
	
				// checking empty fields
	if(empty($fname) || empty($lname)|| empty($skill) || empty($mobile) || empty($email)|| empty($province)|| empty($country))
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
		//if skill field is empty
		if(empty($skill))
		{
			echo "<font color='red'>Skill field is empty</font><br/>";
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
				 volunteer(title,national_id,volunteer_fname,volunteer_mname,volunteer_lname,skill,mobile,email,volunteer_address_line1,volunteer_address_line2,volunteer_city,
				 volunteer_postalcode,volunteer_province,volunteer_country)
 
			VALUES('$title','$national_id','$fname','$mname','$lname','$skill','$mobile','$email','$addressline1','$addressline2','$city','$postalcode','$province','$country')
				   ")
				   
		or die(mysql_error());
		
		//display success message
		echo "<font color='green'>Volunteer added successfully.";
		header ("refresh:5; url=../placeholder1.htm");
	
}
}
?>
