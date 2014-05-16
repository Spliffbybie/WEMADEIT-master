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
		

		// checking empty fields
	if(empty($title)||empty($fname) || empty($lname)|| empty($relation)|| empty($mobile)|| empty($email) || empty($addressline1) || empty($city)|| empty($province))
	{
		//if title field is empty
		if(empty($title))
		{
			echo "<font color='red'>Title is empty.</font><br/>";
		}

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
		//if relation field is empty
		if(empty($relation))
		{
			echo "<font color='red'>relation field is empty</font><br/>";
		}
		//if mobile field is empty
		if(empty($mobile))
		{
			echo "<font color='red'>Mobile field is empty</font><br/>";
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
			echo "<font color='red'>Cprovince field is empty</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)
	{	
	
	
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
}
?>
