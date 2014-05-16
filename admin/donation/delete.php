<?php
//including the database connection file
include("../../connections/config.php");

//getting id of the data from url
$id = $_GET['donation_id'];

//deleting the row from table
$result=mysql_query("DELETE FROM donation where donation_id=$id");

//redirecting to the display page (index.php in our case)
header("Location:view1.php");
?>

