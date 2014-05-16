<?php
//including the database connection file
include("../../connections/config.php");

//getting id of the data from url
$id = $_GET['case_id'];

//deleting the row from table
$result=mysql_query("DELETE FROM `case` WHERE  case_id=$id");

//redirecting to the display page (view1.php in our case)
header("Location:view1.php");
?>

