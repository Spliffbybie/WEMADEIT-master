<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM adopter ORDER BY adopter_fname ASC" ) or die("SELECT Error: ".mysql_error());

header ("refresh:12;url= view1.php");	
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
	margin-top: 0px;
}
</style>

</head>

<body>

<div style="position: absolute; width: 686px; height: 870px; z-index: 1; left: -81px; top: 5px" id="layer8" class="style1">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 610px;">
                <div class="top-bar" style="width: 614px">
                    <a class="button" target="I4" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="New Adopter" href="input.php">ADD NEW 
					</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="View All Adopters" href="viewall.php">VIEW ALL
					</a>

                    <h1>All Adopters</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						Adopters<br>
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
                <div style="float: left; position: relative; width: 614px; left: 0px; top: 0px; height: 78px; font-size: small;">
                    <table class="listing" cellpadding="0" cellspacing="0" width="40%">
                     
                        <tr>
                        	<th>First <br>
							Name</th>
                            <th>Last Name</th>
                            <th>Mobile</th>
                            <th>Email Address</th>
                            <th>City</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                        	<td><?php echo $res['adopter_fname']; ?>
							&nbsp;</td>
                            <td ><?php echo $res['adopter_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['mobile']; ?>
							&nbsp;</td>
                            <td><?php echo $res['email']; ?>
							&nbsp;</td>
                            <td><?php echo $res['adopter_city']; ?>
							&nbsp;</td>                          
                            <td><?php echo "<a href=\"edit.php?adopter_id=$res[adopter_id]\"  target='I4'>Edit</a>"; ?>
							&nbsp;</td>
                            <td onclick="confirmDelete()"><?php echo "<a href=\"delete.php?adopter_id=$res[adopter_id]\" >Delete</a>"; ?>
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
