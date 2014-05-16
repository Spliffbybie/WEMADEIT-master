<?php
//including the database connection file
include("../../connections/config.php");

//getting id of the data from url
$id = $_GET['orphan_id'];

//deleting the row from table
$result=mysql_query("DELETE FROM orphans where orphan_id=$id");

//redirecting to the display page 
header("Location:view1.php");
?>

