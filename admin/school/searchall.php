﻿<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM school" ) or die("SELECT Error: ".mysql_error());
//header ("refresh:25;url=view1.php");
	
?>
	 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>School</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
	 
<script type="text/JavaScript"> 
function confirmDelete(){
   var agree = confirm("Are you sure you want to delete this record?");
   if (agree)
      return false ;
   else
      return false ;
   }
</script> 

<style type="text/css">
.style1 {
	color: #0000FF;
	font-size: small;
}
</style>

</head>

<body>

<div style="position: absolute; width: 1104px; height: 532px; z-index: 1; left: 1px; top: 2px" id="layer1">
    <div id="main" style="height: 524px; width: 1195px;">
        <div id="middle" style="height: 512px; width: 650px;">
            <div id="center-column" style="height: 493px; width: 1284px;">
                <div class="top-bar" style="width: 1247px">
                    <a class="button" target="I1" href="viewall.php" title="Back to hospital details">BACK</a>
                    <h1>School Details</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current school</div>
                </div>
					<form action="searchall.php" method="POST" target="I1">
                <div class="select-bar">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>
                <div class="style1" style="float: left; position: relative; width: 1250px; left: 0px; top: 0px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 1242px">
                     
                        <tr>
                            <th>school Name</th>
                            <th>Principle Name</th>
                            <th>Principle Surname</th>
                            <th>Telephone</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Province</th>
                            <th>Address</th>
                            <th>Address</th>
                            <th>Edit</th>
                            <th style="width: 65px">Delete</th>
                            
                        </tr>
				<?php  $term = $_POST['term'];?>
 
<?php $sql = mysql_query("SELECT * FROM `school` WHERE school_name like '%$term%' OR principle_fname  like '%$term%' OR principle_mname  like '%$term%'
												OR principle_lname  like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>
                        <tr>
                            <td><?php echo $row ['school_name']; ?>
							&nbsp;</td>
							 <td><?php echo $row['principle_fname']; ?>&nbsp;&nbsp;<?php echo $row['principle_mname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['principle_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['telephone']; ?>
							&nbsp;</td>
                            <td><?php echo $row['fax']; ?>
							&nbsp;</td>
                            <td><?php echo $row['email']; ?>
							&nbsp;</td>
                            <td><?php echo $row['school_address_line1']; ?>
							&nbsp;</td>
							<td><?php echo $row['school_city']; ?>
							&nbsp;</td>
                            <td><?php echo $row['school_province']; ?>
							&nbsp;</td>
							<td><?php echo $row['school_country']; ?>
							&nbsp;</td>
                            <td><?php echo $row['school_postalcode']; ?>
							&nbsp;</td>
							
                            <td><?php echo "<a href=\"newedit.php?hospital_id=$row[school_id]\"  target='I1'>Edit</a>"; ?>
							&nbsp;</td>
                            <td onclick="confirmDelete()"><?php echo "<a href=\"delete.php?hospital_id=$row[school_id]\" >Delete</a>"; ?>
							&nbsp;</td>
                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
            </div>
        </div>
    </div>
</div>

</body>

</html>
<?php
mysql_free_result($result);
?>