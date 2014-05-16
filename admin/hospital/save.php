<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['hospital_name']))
{
	
	$hospital_name=$_POST['hospital_name'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$telephone=$_POST['telephone'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$addressline1=$_POST['addressline1'];
	$addressline2=$_POST['addressline2'];
	$city=$_POST['city'];
	$postalcode=$_POST['postalcode'];
	$province=$_POST['province'];
	$country=$_POST['country'];
	
		// checking empty fields
	if(empty($hospital_name)||empty($fname) || empty($lname)|| empty($telephone) || empty($email)|| empty($addressline1) || empty($city)|| empty($province))
	{
		//if hospital_name field is empty
		if(empty($hospital_name))
		{
			echo "<font color='red'>Hospital_name is empty.</font><br/>";
		}

		//if fname field is empty
		if(empty($fname))
		{
			echo "<font color='red'>Doctor First Name is empty.</font><br/>";
		}
		//if lname field is empty
		if(empty($lname))
		{
			echo "<font color='red'>Doctor Last Name field is empty.</font><br/>";
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
			echo "<font color='red'>Province field is empty</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)
	{	

	
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
		header ("refresh:5;url= ../placeholder1.htm");}
	
}

?>
