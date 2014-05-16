<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM social_worker" ) or die("SELECT Error: ".mysql_error());
//header ("refresh:10;url=view1.php");

	
?>
	 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>HomepageUsersOrdersSettingsStati</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >

<style type="text/css">
.style1 {
	color: #0000FF;
}
</style>

</head>

<body>

<div style="position: absolute; width: 1454px; height: 532px; z-index: 1; left: -2px; top: 6px" id="layer1">
    <div id="main" style="height: 524px; width: 1445px;">
        <div id="middle" style="height: 512px; width: 650px;">
            <div id="center-column" style="height: 493px; width: 1442px;">
                <div class="top-bar" style="width: 1155px">
                    <a class="button" target="I1" href="viewall.php" title="Add new relation" style="width: 71px">BACK</a>
                    &nbsp;<h1>Current Social Workers</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						social workers</div>
                </div>
				<form action="searchall.php" method="POST" target="I1">
                <div class="select-bar" style="width: 1160px">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>
                <div class="style1" style="float: left; position: relative; width: 1165px; left: 0px; top: 0px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 1161px">
                    
                   		 <tr>
                            <th>Title</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Telephone</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Province</th>
                            <th>Country</th>
                            <th>Postal code</th>
                          
                            
                        </tr>
<?php  $term = $_POST['term'];?>
 
<?php $sql = mysql_query("select * from social_worker where social_worker_fname like '%$term%' OR social_worker_lname  like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>
                        <tr>
                            <td><?php echo $row['title']; ?>
							&nbsp;</td>
                            <td class="style1"><?php echo $row['social_worker_fname']; ?>
							&nbsp;</td>
                            <td class="style1"><?php echo $row['social_worker_mname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['social_worker_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['gender']; ?>
							&nbsp;</td>
                            <td><?php echo $row['telephone']; ?>
							&nbsp;</td>
                            <td><?php echo $row['mobile']; ?>
							&nbsp;</td>
                            <td><?php echo $row['email']; ?>
							&nbsp;</td>
                            <td><?php echo $row['social_worker_address']; ?>
							&nbsp;</td>
                            <td><?php echo $row['social_worker_city']; ?>
							&nbsp;</td>
                            <td><?php echo $row['social_worker_province']; ?>
							&nbsp;</td>
                            <td><?php echo $row['social_worker_country']; ?>
							&nbsp;</td>
                            <td><?php echo $row['social_worker_postalcode']; ?>
							&nbsp;</td>
							
							
                           
                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
            </div>
        </div>
    </div>
</div>

</body>

</html>
<?php
mysql_free_result($result);
?>