<?php
//including the database connection file
include("../../connections/config.php");

//getting id of the data from url
$id = $_GET['adopter_id'];

//deleting the row from table
$result=mysql_query("DELETE FROM adopter where adopter_id=$id");

//redirecting to the display page (index.php in our case)
header("Location:view1.php");
?>

