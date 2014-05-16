<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM adoption" ) or die("SELECT Error: ".mysql_error());

header ("refresh:20;url=view1.php");	
?>
	 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>All Adoption&nbsp;&nbsp; Add adoption</title>
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

<div style="position: absolute; width: 631px; height: 870px; z-index: 1; left: 6px; top: 7px" id="layer8">
    <div id="main" style="height: 679px; width:617px;">
        <div id="middle" style="height: 890px; width:608px;">
            <div id="center-column" style="height: 856px; width: 583px;">
                <div class="top-bar" style="width: 567px">
                    <a class="button" target="I4" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="Add new adoption" href="input.php">ADD NEW 
					</a>
					<a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="View all adoption details" href="viewall.php">VIEW ALL 
					</a>

                    <h1>All Adoptions</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						Adoption Processes<br>
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
                <div  style="float: left; position: relative; width: 565px; left: 0px; top: 0px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 568px; font-size: small;">
                     
                        <tr>
                        	<th>Adoption Name</th>
                            <th>Description</th>
                            <th>Visit Number</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                        	<td><?php echo $res['adoption_name']; ?>
							&nbsp;</td>
                            <td ><?php echo $res['description']; ?></td>
                            <td><?php echo $res['visit_number']; ?>
							&nbsp;</td>
							<td>&nbsp;</td>

                            <td><?php echo "<a href=\"edit.php?adopter_id=$res[adopter_id]\"  target='I4'>Edit</a>"; ?>
							&nbsp;</td>
                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
                <div class="select-bar" style="width: 572px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
