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
		header("Location:input.php");
}
?>

