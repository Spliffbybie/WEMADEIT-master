<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM hospital" ) or die("SELECT Error: ".mysql_error());

	
?>
	 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>Hospital</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >

<style type="text/css">
.style1 {
	color: #0000FF;
}
</style>

</head>

<body>

<div style="position: absolute; width: 1104px; height: 532px; z-index: 1; left: 1px; top: 2px" id="layer1">
    <div id="main" style="height: 524px; width: 1195px;">
        <div id="middle" style="height: 512px; width: 650px;">
            <div id="center-column" style="height: 493px; width: 1284px;">
                <div class="top-bar" style="width: 1247px">
                    <a class="button" target="I1" href="new.php" title="Back to hospital details">BACK</a>
                    <h1>Hospital</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current Hospitals</div>
                </div>
					<form action="searchall.php" method="POST" target="I1">
                <div class="select-bar">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>
                <div class="style1" style="float: left; position: relative; width: 1250px; left: 0px; top: 0px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 1242px">
                     
                        <tr>
                            <th>Hospital Name</th>
                            <th>Doc Name</th>
                            <th>Doc Surname</th>
                            <th>Telephone</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Province</th>
                            <th>Address</th>
                            <th>Address</th>
                         
                            
                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                            <td class="style1"><?php echo $res['hospital_name']; ?>
							&nbsp;</td>
							 <td><?php echo $res['doctor_fname']; ?>&nbsp;<?php echo $res['doctor_mname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['doctor_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['telephone']; ?>
							&nbsp;</td>
                            <td><?php echo $res['fax']; ?>
							&nbsp;</td>
                            <td><?php echo $res['email']; ?>
							&nbsp;</td>
                            <td><?php echo $res['hospital_addressline1']; ?>
							&nbsp;</td>
							<td><?php echo $res['hospital_city']; ?>
							&nbsp;</td>
                            <td><?php echo $res['hospital_province']; ?>
							&nbsp;</td>
							<td><?php echo $res['hospital_country']; ?>
							&nbsp;</td>
                            <td><?php echo $res['hospital_postalcode']; ?>
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