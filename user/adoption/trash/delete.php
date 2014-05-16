<?php
include_once '../../login1/user-class.php';
$admin = new itg_user();
$admin->_authenticate();
?>


<?php
//including the database connection file
include("../../connections/config.php");

//getting id of the data from url
$id = $_GET['adoption_id'];

//deleting the row from table
$result=mysql_query("DELETE FROM adoption where adoption_id=$id");

//redirecting to the display page (index.php in our case)
header("Location:view1.php");
?>

