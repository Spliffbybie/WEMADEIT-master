<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM adoption" ) or die("SELECT Error: ".mysql_error());

//header ("refresh:15;url=search.php");	
?>
	 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>All adoption&nbsp;&nbsp; Add adoption</title>
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
	margin-top: 0px;
}
.style2 {
	margin-top: 6px;
}
</style>

</head>

<body>

<div style="position: absolute; width: 847px; height: 870px; z-index: 1; left: -10px; top: 0px" id="layer8" class="style2">
    <div id="main" style="height: 679px; width:810px;">
        <div id="middle" style="height: 890px; width:791px;">
            <div id="center-column" style="height: 856px; width: 753px;">
                <div class="top-bar">
                    <h1 style="width: 617px">All Adoptions</h1>
                    <div class="breadcrumbs">
						<div style="position: absolute; width: 100px; height: 35px; z-index: 1; left: 649px; top: 24px" id="layer9">
                    <a class="button" target="I1" style="float: right; height: 21px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 70px;" title="Go back to all adoption details" href="viewall.php">
							<div>
								BACK</div>
							</a></div>
						All relations details view<br>
						<br>
					</div>
					<form action="searchall.php" method="POST" target="I1">
                <div class="select-bar" style="width: 728px">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>

                </div>
                <div class="style1" style="float: left; position: relative; width: 738px; left: -3px; top: -3px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 741px; font-size: small;">
                     
                        <tr>
                        	<th>Adoption Name</th>
                            <th>Description</th>
                            <th>Comment</th>
                            <th>Visit Number</th>
                            <th>Rating</th>
                          

                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
<?php  $term = $_POST['term'];?>
 
<?php $sql = mysql_query("SELECT * FROM adoption WHERE adoption_name like '%$term%' OR  description like '%$term%' OR  visit_number like '%$term%' OR  rating like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>
                        <tr>
                        	<td><?php echo $row['adoption_name']; ?>
							&nbsp;</td>
                            <td><?php echo $row['description']; ?>
							&nbsp;</td>
                            <td><?php echo $row['comment']; ?>
							&nbsp;</td>
                            <td><?php echo $row['visit_number']; ?>
							&nbsp;</td>
                            <td><?php echo $row['rating']; ?>
							&nbsp;</td> 
							                         
                            <td><?php echo "<a href=\"newedit.php?adopter_id=$row[adopter_id]\"  target='I1'>Edit</a>"; ?>
							&nbsp;</td>
                            <td onclick="confirmDelete()"><?php echo "<a href=\"delete.php?adopter_id=$row[adopter_id]\" >Delete</a>"; ?>
							&nbsp;</td>
                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
                <div class="select-bar" style="width: 742px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
