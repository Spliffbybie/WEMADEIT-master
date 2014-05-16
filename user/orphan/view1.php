<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM orphans" ) or die("SELECT Error: ".mysql_error());
header ("refresh:10; url=view1.php");

	
?>
	 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>All Orphans&nbsp;&nbsp; Add Orphan</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
   

</head>

<body>

<div style="position: absolute; width: 657px; height: 870px; z-index: 1; left: -57px; top: 6px" id="layer8">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 610px;">
                <div class="top-bar" style="width: 614px">
                    <a class="button" target="I4" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="New Orphan" href="input.php">ADD NEW 
					</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="New Orphan" href="viewall.php">VIEW ALL
					</a>

                    <h1>All Orphans</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						orphans<br>
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
                <div class="style1" style="float: left; position: relative; width: 614px;">
                    <table class="listing" cellpadding="0" cellspacing="0" width="40%">
                     
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Race</th>
                            <th>Type</th>
                            <th>Place of Birth</th>
                         

                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                            <td class="style1"><?php echo $res['orphan_fname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['orphan_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['age']; ?>
							&nbsp;</td>
                            <td><?php echo $res['orphan_gender']; ?>
							&nbsp;</td>
                            <td><?php echo $res['race']; ?>
							&nbsp;</td>
							<td><?php echo $res['type']; ?>
							&nbsp;</td>
                            <td><?php echo $res['location']; ?>
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
<?php
mysql_free_result($result);
?>