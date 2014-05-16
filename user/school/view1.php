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

</head>

<body>

<div style="position: absolute; width: 686px; height: 870px; z-index: 1; left: -77px; top: 5px" id="layer8">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 610px;">
                <div class="top-bar">
                    <a class="button" target="I4" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="Add new school" href="input.php">ADD NEW</a>
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="View all school details" href="viewall.php">VIEWALL</a>
                    <h1>All Schools</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						schools<br>
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
                    <table class="listing" cellpadding="0" cellspacing="0" width="40%">
                     
                        <tr>
                            <th>School Name</th>
                            <th>Principal Name</th>
                            <th>Telephone</th>
                            <th>Fax</th>
                            <th>Email</th>
                           

                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                        	<td><?php echo $res['school_name']; ?>
							&nbsp;</td>
                            <td class="style1"><?php echo $res['principle_fname']; ?> &nbsp;&nbsp;<?php echo $res['principle_lname']; ?> 
							&nbsp;</td>
                            <td><?php echo $res['telephone']; ?>
							&nbsp;</td>
                            <td><?php echo $res['fax']; ?>
							&nbsp;</td>
                            <td><?php echo $res['email']; ?>
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
