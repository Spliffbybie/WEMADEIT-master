<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM next_of_kin" ) or die("SELECT Error: ".mysql_error());
//header ("refresh:30;url=viewall.php");
	
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

<div style="position: absolute; width: 1303px; height: 870px; z-index: 1; left: 7px; top: 8px" id="layer8">
    <div id="main" style="height: 679px; width:1295px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 1292px;">
                <div class="top-bar" style="width: 1173px">
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 68px;" title="Back to details relation view" href="viewall.php">BACK</a>
                    &nbsp;<h1>All Relations</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						Next of kin<br>
						<br>
					</div>
					<form action="searchall.php" method="POST" target="I1">
                <div class="select-bar">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>

                </div>
                <div class="style1" style="float: left; position: relative; width: 1022px; left: 0px; top: 0px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 1187px">
                     
                        <tr>
                            <th>title</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Relation</th>
                            <th>Mobile</th>
                            <th>fax</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Province</th>
                            <th>Country</th>
                            <th>Postal code</th>
                      

                        </tr>
<?php  $term = $_POST['term'];?>
 
<?php $sql = mysql_query("select * from next_of_kin where kin_fname like '%$term%' OR kin_lname  like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>
                        <tr>
                            <td><?php echo $row['title']; ?>
							&nbsp;</td>
                            <td class="style1"><?php echo $row['kin_fname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['kin_mname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['kin_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['gender']; ?>
							&nbsp;</td>
                            <td><?php echo $row['relation']; ?>
							&nbsp;</td>
                            <td><?php echo $row['mobile']; ?>
							&nbsp;</td>
                            <td><?php echo $row['fax']; ?>
							&nbsp;</td>
                            <td><?php echo $row['email']; ?>
							&nbsp;</td>
                            <td class="style1"><?php echo $row['kin_address']; ?>
							&nbsp;</td>
							<td><?php echo $row['kin_city']; ?>
							&nbsp;</td>
                            <td class="style1"><?php echo $row['kin_province']; ?>
							&nbsp;</td>
                            <td class="style1"><?php echo $row['kin_country']; ?>
							&nbsp;</td>
                            <td class="style1"><?php echo $row['kin_postalcode']; ?>
							&nbsp;</td>
                            
					    
                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
                <div class="select-bar" style="width: 1186px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
