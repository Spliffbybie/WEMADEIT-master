<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM orphans" ) or die("SELECT Error: ".mysql_error());

	
?>
	 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
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

</head>

<body>

<div style="position: absolute; width: 917px; height: 870px; z-index: 1; left: -195px; top: 22px" id="layer8" class="style1">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 882px;">
                <div class="top-bar" style="width: 858px">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <a class="button" target="I1" href="viewall.php" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 62px;" title="Back to detail orphans">BACK
					</a>

                    <h1>All Orphans</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Search orphan result<br>
						<br>
					</div>
					<form action="Searchall.php" method="POST" target="I1">
					<div class="select-bar">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>

                </div>
                <div class="style1" style="float: left; position: relative; width: 855px; left: 1px; top: -6px; font-size: small;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 861px">
                     
                        <tr>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Race</th>
                            <th>Type</th>
                            <th style="width: 116px">Place of Birth</th>
                            <th>Delete</th>

                        </tr>
<?php  $term = $_POST['term'];?>
 
<?php $sql = mysql_query("select * from orphans where orphan_fname like '%$term%' OR orphan_mname  like '%$term%' OR orphan_lname  like '%$term%' OR dob  like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>
                       
							<tr>
                            <td ><?php echo $row['orphan_fname']; ?>
							&nbsp;</td>
							<td><?php echo $row['orphan_mname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['orphan_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['dob']; ?>
							&nbsp;</td>
                            <td><?php echo $row['orphan_gender']; ?>
							&nbsp;</td>
                            <td><?php echo $row['race']; ?>
							&nbsp;</td>
							<td><?php echo $row['type']; ?>
							&nbsp;</td>
                            <td style="width: 116px"><?php echo $row['location']; ?>
							&nbsp;</td>

                            <td onclick="confirmDelete()"><?php echo "<a href=\"delete.php?orphan_id=$row[orphan_id]\" >Delete</a>"; ?>
							&nbsp;</td>
                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
                <div class="select-bar" style="width: 861px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
