<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM donation ORDER BY date ASC" ) or die("SELECT Error: ".mysql_error());

header ("refresh:20;url= view1.php");	
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

<div style="position: absolute; width: 686px; height: 870px; z-index: 1; left: 9px; top: 22px" id="layer8">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 610px;">
                <div class="top-bar" style="width: 614px">
                    <a class="button" target="I4" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="New Orphan" href="input.php">ADD NEW 
					</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 63px;" title="New Orphan" href="new.php">
					BACK</a><h1>All Donations</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Search 
						Results on Donations<br>
						<br>
					</div>
					<form action="Search.php" method="POST" target="I3">
					<div class="select-bar">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>

                </div>
                <div class="style1" style="float: left; position: relative; width: 614px; font-size: small;">
                    <table class="listing" cellpadding="0" cellspacing="0" width="40%">
                     
                        <tr>
                        	<th>Date</th>
                            <th>Donation Description</th>
                            <th>Donated Item</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                    <?php  $term = $_POST['term'];?>
 
<?php $sql = mysql_query("select * from `donation` WHERE donation_description like '%$term%' OR items  like '%$term%' OR date  like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>
                       
                        <tr>
                        	 <td><?php echo $row['date']; ?>
							&nbsp;</td>
                            <td ><?php echo $row['donation_description']; ?>
							&nbsp;</td>
                            <td><?php echo $row['items']; ?>
							&nbsp;</td>
                            <td><?php echo $row['quantity']; ?>
							&nbsp;</td>
                            <td><?php echo $row['amount']; ?>
							&nbsp;</td>
                            

                            <td><?php echo "<a href=\"edit.php?donation_id=$row[donation_id]\"  target='I4'>Edit</a>"; ?>
							&nbsp;</td>
                            <td onclick="confirmDelete()"><?php echo "<a href=\"delete.php?donation_id=$row[donation_id]\" >Delete</a>"; ?>
							&nbsp;</td>
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
