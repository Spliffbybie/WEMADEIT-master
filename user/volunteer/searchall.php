<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM volunteer" ) or die("SELECT Error: ".mysql_error());
header ("refresh:25;url=viewall.php");
?>
	 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>All Volunteers&nbsp;&nbsp; Search Results</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >

</head>

<body>

<div style="position: absolute; width: 1062px; height: 935px; z-index: 1; left: 9px; top: 22px" id="layer8">
    <div id="main" style="height: 938px; width:1068px;">
        <div id="middle" style="height: 890px; width:1056px;">
            <div id="center-column" style="height: 386px; width: 1037px;">
                <div class="top-bar" style="width: 1007px">
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 67px;" title="Back to all volunteer details" href="viewall.php">BACK 
					</a>
                    <h1>All Volunteer</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> |Search Results on Volunteers<br>
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
                
                <div class="style1" style="float: left; position: relative; width: 907px; left: 0px; top: -7px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 1008px">
                     
                        <tr>
                        	<th>Title</th>
                        	<th>ID number</th>
                            <th>Name(s)</th>
                            <th>Surname</th>
                            <th>Skill</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Email</th>
                            <th>Email</th>
                            <th>Email</th>
                      

                        </tr>
<?php  $term = $_POST['term'];?>
 
<?php $sql = mysql_query("select * from volunteer where volunteer_fname like '%$term%' OR volunteer_lname  like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>
                        <tr> 
                        	<td><?php echo $row['title']; ?>
							&nbsp;</td>
                            <td><?php echo $row['national_id']; ?>
							&nbsp;</td>
                            <td class="style1"><?php echo $row['volunteer_fname']; ?>&nbsp;<?php echo $row['volunteer_mname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['volunteer_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['skill']; ?>
							&nbsp;</td>
                            <td><?php echo $row['mobile']; ?>
							&nbsp;</td>
							<td><?php echo $row['email']; ?>
							&nbsp;</td>
                            <td><?php echo $row['volunteer_address_line1']; ?>
							&nbsp;</td>
                            <td><?php echo $row['volunteer_city']; ?>
							&nbsp;</td>
                            <td><?php echo $row['volunteer_province']; ?>
							&nbsp;</td>
                            <td><?php echo $row['volunteer_country']; ?>
							&nbsp;</td>
                            <td><?php echo $row['volunteer_postalcode']; ?>
							&nbsp;</td>

                          
                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
                <div class="select-bar" style="width: 1006px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
