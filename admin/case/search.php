<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM `case`" ) or die("SELECT Error: ".mysql_error());
	
?>
	 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<script type="text/JavaScript"> 
function confirmDelete(){
   var agree = confirm("Are you sure you want to delete this record?");
   if (agree)
      return false ;
   else
      return false ;
   }
</script> 
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >

<style type="text/css">
.style1 {
	font-size: small;
}
.style2 {
	font-size: small;
	font-weight: normal;
}
</style>

</head>

<body>

<div style="position: absolute; width: 686px; height: 870px; z-index: 1; left: -46px; top: 2px" id="layer8">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 610px;">
                <div class="top-bar">
                    <a class="button" target="I4" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="New case" href="input.php">ADD NEW 
					</a>
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 58px;" title="Back to case details" href="new.php">BACK </a>
                    <h1>All Cases</h1>
                    <div class="breadcrumbs"><a href="view1.php">View</a> 
						/search Case<br>
						<br>
					</div>
					<form action="search.php" method="POST" target="I3">
                <div class="select-bar">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>

                </div>
                <div class="style1" style="float: left; position: relative; width: 614px;">
                    <table class="listing" cellpadding="0" cellspacing="0" width="40%" style="font-size: small">
                     
                        <tr>
                        	<th>Case<br>
							Name</th>
                            <th>Description</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th class="style2">Edit</th>
                            <th class="style2">Delete</th>

                        </tr>
                    <?php  $term = $_POST['term'];?>
 
<?php $sql = mysql_query("SELECT * FROM `case` WHERE case_name like '%$term%' OR status like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>
                        <tr>
                        	<td><?php echo $row['case_name'];?>
							&nbsp;</td>
                            <td ><?php echo $row['description'];?>
							&nbsp;</td>
                            <td><?php echo $row['comment'];?>
							&nbsp;</td>
                            <td><?php echo $row['status'];?>
							&nbsp;</td>
                                                     
                            <td ><span class="normal"><?php echo "<a href=\"edit.php?case_id=$row[case_id]\"  target='I4'>Edit</a>";?>
							&nbsp;</span></td>
                            <td onclick="confirmDelete()" class="style1">
							<span ><?php echo "<a href=\"delete.php?case_id=$row[case_id]\" >Delete</a>";?>
							&nbsp;</span></td>
                        </tr>
                                               
						<?php }; ?>
                    	

                    </table>
                </div>
            	<br>
				<br>
                <div class="select-bar" style="width: 612px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
