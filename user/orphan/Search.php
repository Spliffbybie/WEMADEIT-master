<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM orphans" ) or die("SELECT Error: ".mysql_error());
//header ("refresh:40;url=Search.php");

	
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

<div style="position: absolute; width: 686px; height: 870px; z-index: 1; left: -61px; top: 23px" id="layer8">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 610px;">
                <div class="top-bar">
                    <a class="button" target="I4" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="Add new Orphan" href="input.php">ADD NEW  </a>
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 66px;" title="Back to Orphan view" href="new.php">BACK</a>

                    <h1>All Orphans</h1>
                    <div class="breadcrumbs"><a href="view1.php">Homepage</a> /Search result on 
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
                          

                        </tr>
<?php  $term = $_POST['term'];?>
 
<?php $sql = mysql_query("select * from orphans where orphan_fname like '%$term%' OR orphan_lname  like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>
                       
							<tr>
                            <td class="style1"><?php echo $row['orphan_fname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['orphan_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['age']; ?>
							&nbsp;</td>
                            <td><?php echo $row['gender']; ?>
							&nbsp;</td>
                            <td><?php echo $row['race']; ?>
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
