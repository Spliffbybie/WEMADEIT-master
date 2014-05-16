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
	$province=$_POST['province'];
	$country=$_POST['school_country'];

	// checking empty fields
	if(empty($school_name)||empty($fname) || empty($lname)|| empty($telephone) || empty($email)|| empty($addressline1) || empty($city)|| empty($province))
	{
		//if hospital_name field is empty
		if(empty($hospital_name))
		{
			echo "<font color='red'>Hospital_name is empty.</font><br/>";
		}

		//if fname field is empty
		if(empty($fname))
		{
			echo "<font color='red'>Principle First Name is empty.</font><br/>";
		}
		//if lname field is empty
		if(empty($lname))
		{
			echo "<font color='red'>Principle Last Name field is empty.</font><br/>";
		}
		//if telephone field is empty
		if(empty($telephone))
		{
			echo "<font color='red'>Telephone field is empty</font><br/>";
		}
		//if email field is empty
		if(empty($email))
		{
			echo "<font color='red'>Email field is empty</font><br/>";
		}
		//if addressline1 field is empty
		if(empty($addressline1))
		{
			echo "<font color='red'>Addressline1 field is empty.</font><br/>";
		}
		//if city field is empty
		if(empty($city))
		{
			echo "<font color='red'>City field is empty</font><br/>";
		}
		//if province field is empty
		if(empty($province))
		{
			echo "<font color='red'>province field is empty</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)
	{	

	

		
		
		//insert data to database	
		$result=mysql_query("
							INSERT INTO 
							
										school(school_name,title,principle_fname,principle_mname,principle_lname,telephone,fax,email,school_address_line1,school_address_line2,
										       school_city,school_postalcode,school_province,school_country)
 							VALUES('$name','$title','$fname','$mname','$lname','$telephone','$fax','$email','$addressline1','$addressline2','$city','$postalcode','$province','$country')
 							")
		or die(mysql_error());

		
		//display success message
		echo "<font color='green'>School added successfully.";
		header ("refresh:5; url=../placeholder1.htm");
}	
}
?>

