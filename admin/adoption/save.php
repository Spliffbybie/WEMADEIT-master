<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['orphan']))
{
	//orphan infor
	$orphan_id=$_POST['orphan'];
	$social_worker_id=$_POST['socialworker'];
	$adopter_id=$_POST['adopter'];
	$name=$_POST['name'];
	$description=$_POST['description'];
	$comment=$_POST['comment'];
	$number=$_POST['number'];
	$rating=$_POST['rating'];
				
	
		
// checking empty fields
	if(empty($orphan_id) || empty($social_worker_id) || empty($adopter_id) || empty($name)|| empty($number)|| empty($rating))
	{
		//if Orphan field is empty
		if(empty($orphan_id))
		{
			echo "<font color='red'>Orphan field is empty.</font><br/>";
		}
		//if Social Worker field is empty
		if(empty($social_worker_id))
		{
			echo "<font color='red'>Social Worker field is empty.</font><br/>";
		}
		//if Adopter field is empty
		if(empty($adopter_id))
		{
			echo "<font color='red'>Adopter field is empty.</font><br/>";
		}
		
		//if Adoption Name field is empty
		if(empty($name))
		{
			echo "<font color='red'>Adoption Name field is empty</font><br/>";
		}
		//if Visit Number field is empty
		if(empty($number))
		{
			echo "<font color='red'>Visit Number field is empty</font><br/>";
		}
		//if Rating field is empty
		if(empty($rating))
		{
			echo "<font color='red'>Rating field is empty</font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)
	{	
			
		mysql_query("
			INSERT INTO 
				  `adoption`(`orphan_id`, 
				  `social_worker_id`, `adopter_id`, `adoption_name`,
				   `description`, `comment`, `visit_number`, `rating`)
				    VALUES 
				    ('$orphan_id',
				    '$social_worker_id',
				    '$adopter_id','$name',
				    '$description','$comment',
				    '$number','$rating')
					")
		or die(mysql_error());
		echo "<font color='green'>Adoption Information Saved successfully.";
		header ("refresh:5;url= ../placeholder1.htm");
		}
		}
?>

