<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['title']))
{
	$title=$_POST['title'];
	$fname=$_POST['adopter_fname'];
	$mname=$_POST['adopter_mname'];
	$lname=$_POST['adopter_lname'];
	$telephone=$_POST['telephone'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$addressline1=$_POST['adopter_addressline1'];
	$addressline2=$_POST['adopter_addressline2'];
	$city=$_POST['adopter_city'];
	$postalcode=$_POST['adopter_postalcode'];
	$province=$_POST['adopter_province'];
	$country=$_POST['adopter_country'];
	$spouse_fname=$_POST['spouse_fname'];
	$spouse_mname=$_POST['spouse_mname'];
	$spouse_lname=$_POST['spouse_lname'];
	$note=$_POST['note'];

		
// checking empty fields
	if(empty($fname) || empty($lname) || empty($mobile) || empty($addressline1)|| empty($city)|| empty($country))
	{
		//if fname field is empty
		if(empty($fname))
		{
			echo "<font color='red'>First Name field is empty.</font><br/>";
		}
		//if lname field is empty
		if(empty($lname))
		{
			echo "<font color='red'>Last Name field is empty.</font><br/>";
		}
		//if Mobile Password field is empty
		if(empty($mobile))
		{
			echo "<font color='red'>Mobile field is empty.</font><br/>";
		}
		
		//if Address line 1 field is empty
		if(empty($addressline1))
		{
			echo "<font color='red'>Address line 1 field is empty</font><br/>";
		}
		//if city field is empty
		if(empty($city))
		{
			echo "<font color='red'>City field is empty</font><br/>";
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
	
		//insert data to database	
		$result=mysql_query("
						INSERT INTO 
								`adopter`
								(`title`,`adopter_fname`,`adopter_mname`,`adopter_lname`,`telephone`,`mobile`,`email`,`adopter_addressline1`,`adopter_addressline2`,`adopter_city`,
								`adopter_postalcode`,`adopter_province`,`adopter_country`,`spouse_fname`,`spouse_mname`,`spouse_lname`,`note`)
 
						VALUES('$title','$fname','$mname','$lname','$telephone','$mobile','$email','$addressline1','$addressline2','$city','$postalcode','$province','$country','$spouse_fname',
								'$spouse_mname','$spouse_lname','$note')
							 ")
		or die(mysql_error());

		
		//display success message
		echo "<font color='green'>Adopter Information Saved successfully.";
		header ("refresh:5;url= ../placeholder1.htm");	

}	
}
?>