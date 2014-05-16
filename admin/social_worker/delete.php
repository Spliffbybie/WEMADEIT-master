<?php
//including the database connection file
include("../../connections/config.php");

//getting id of the data from url
$id = $_GET['social_worker_id'];

//deleting the row from table
$result=mysql_query("DELETE FROM social_worker where social_worker_id=$id");

//redirecting to the display page (index.php in our case)
header("Location:view1.php");
?>

