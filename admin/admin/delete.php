<?php
//including the database connection file
include("../../connections/config.php");

//getting id of the data from url
$id = $_GET['user_id'];

//deleting the row from table
$result=mysql_query("DELETE FROM users where user_id=$id");

//redirecting to the display page (admin.php in our case)
	header("Location:view1.php");
?>

