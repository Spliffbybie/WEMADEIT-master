<?php
//including the database connection file
include("../../connections/config.php");

//getting id of the data from url
$id = $_GET['next_of_kin_id'];

//deleting the row from table
$result=mysql_query("DELETE FROM next_of_kin WHERE next_of_kin_id=$id");

//redirecting to the display page (view1.php in our case)
header("Location:view1.php");
?>

