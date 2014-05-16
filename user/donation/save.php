<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['submit']))
{
	
	$donation_description=$_POST['donation_description'];
	$date=$_POST['date'];
	$amount=$_POST['amount'];
	$items=$_POST['items'];
	$quantity=$_POST['quantity'];
				
	// checking empty fields
	if(empty($donation_description) || empty($date) )
	{
		//if donation_descriptionfield is empty
		if(empty($donation_description))
		{
			echo "<font color='red'>donation_description field is empty.</font><br/>";
		}
		//if date field is empty
		if(empty($date))
		{
			echo "<font color='red'>Date field is empty.</font><br/>";
		}
	
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)
	{			
		//insert data to database	
		$result=mysql_query("
					INSERT INTO 
							donation(donation_description,date,amount,items,quantity)
 
					VALUES('$donation_description','$date','$amount','$items','$quantity')
							")
		or die(mysql_error());

		
		//display success message
		echo "<font color='green'>Donation added successfully.";
		header ("refresh:5;url= ../placeholder1.htm");}
	
}
?>
