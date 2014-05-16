<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['title']))
{
	$title=$_POST['title'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$mobile=$_POST['mobile'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$addressline1=$_POST['addressline1'];
	$addressline2=$_POST['addressline2'];
	$city=$_POST['city'];
	$postalcode=$_POST['postalcode'];
	$province=$_POST['province'];
	$country=$_POST['country'];
	$donation =$_POST['donation'];		
	
	// checking empty fields
	if(empty($fname) || empty($lname) || empty($mobile) || empty($email)|| empty($province)|| empty($donation))
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
		//if donation field is empty
		if(empty($donation))
		{
			echo "<font color='red'>Donation field is empty</font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)
	{	

		//insert data to database	
		$result=mysql_query("
					INSERT INTO 
							donor(donation_id,title,donor_fname,donor_mname,donor_lname,mobile,fax,email,donor_addressline1,donor_addressline2,donor_city,donor_postalcode,donor_province,donor_country) 
					VALUES('$donation','$title','$fname','$mname','$lname','$mobile','$fax','$email','$addressline1','$addressline2','$city','$postalcode','$province','$country')
							")
							
		
		or die(mysql_error());
		

		//display success message
		echo "<font color='green'>Donor added successfully.";
		header ("refresh:5;url= ../placeholder1.htm");}
	
}
?>
