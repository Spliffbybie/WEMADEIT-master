<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM school" ) or die("SELECT Error: ".mysql_error());
header ("refresh:10;url=view1.php");
	
?>
	 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>All Schools&nbsp;&nbsp; Add School</title>
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

<div style="position: absolute; width: 625px; height: 870px; z-index: 1; left: 6px; top: 10px" id="layer8">
    <div id="main" style="height: 679px; width:613px;">
        <div id="middle" style="height: 890px; width:622px;">
            <div id="center-column" style="height: 856px; width: 614px;">
                <div class="top-bar" style="width: 586px">
                    <a class="button" target="I4" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="Add new school" href="input.php">
					ADD NEW</a>
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="View all school details" href="viewall.php">
					VIEWALL</a>
                    <h1 style="width: 570px">All Schools</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						schools<br>
						<br>
					</div>
										<form action="search.php" method="POST" target="I3">
                <div class="select-bar" style="width: 576px">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>

                </div>
                <div class="style1" style="float: left; position: relative; width: 586px; font-size: small; left: 0px; top: 0px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 592px">
                     
                        <tr>
                            <th>School Name</th>
                            <th>Principal Name</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                        	<td><?php echo $res['school_name']; ?>
							&nbsp;</td>
                            <td ><?php echo $res['principle_fname']; ?> &nbsp;&nbsp;<?php echo $res['principle_lname']; ?> 
							&nbsp;</td>
                            <td><?php echo $res['telephone']; ?>
							&nbsp;</td>
                            <td><?php echo $res['email']; ?>
							&nbsp;</td>
						

                            <td><?php echo "<a href=\"edit.php?school_id=$res[school_id]\"  target='I4'>Edit</a>"; ?>
							&nbsp;</td>
                            <td  onclick="confirmDelete()"><?php echo "<a href=\"delete.php?school_id=$res[school_id]\" >Delete</a>"; ?>
							&nbsp;</td>
                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
                <div class="select-bar" style="width: 590px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
