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

</head>

<body>

<div style="position: absolute; width: 834px; height: 870px; z-index: 1; left: 10px; top: 4px" id="layer8">
    <div id="main" style="height: 679px; width:710px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 830px;">
                <div class="top-bar" style="width: 811px">
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 65px;" title="Back to all case Details" href="viewall.php">BACK </a>
                    <h1>All Cases</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						cases<br>
									<form action="searchall.php" method="POST" target="I1">
                <div class="select-bar">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>
                <div class="style1" style="float: left; position: relative; width: 790px; left: 0px; top: 0px;">
   <table class="listing" cellpadding="0" cellspacing="0" style="width: 846px; font-size: small;">
                     
                        <tr>
                            <th>Orphan Name</th>
							<th>Social Worker Name</th>
                            <th>Case Name</th>
                            <th>Description</th>
                            <th>Comment</th>
                            <th style="width: 63px">Status</th>
                            
                        </tr>
              
                    <?php  $term = $_POST['term'];?>
 
<?php $sql = mysql_query("SELECT * FROM `case` WHERE case_name like '%$term%' OR status like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>

                        <tr>
                            <td ><?php echo $row['orphan_fname']; ?>&nbsp;&nbsp;<?php echo $row['orphan_lname']; ?>
                            &nbsp;</td>
   							<td><?php echo $row['social_worker_fname']; ?>&nbsp;&nbsp;<?php echo $row['social_worker_lname']; ?>
							&nbsp;</td>
                            <td ><?php echo $row['case_name'];?>
							&nbsp;</td>
                            <td><?php echo $row['description']; ?>
							&nbsp;</td>
                            <td><?php echo $row['comment']; ?>
							&nbsp;</td>
                            <td style="width: 63px"><?php echo $row['status']; ?>
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
                <div class="select-bar" style="width: 792px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
