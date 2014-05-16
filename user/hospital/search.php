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

<div style="position: absolute; width: 665px; height: 532px; z-index: 1; left: 10px; top: 15px" id="layer1">
    <div id="main" style="height: 524px; width: 660px;">
        <div id="middle" style="height: 512px; width: 650px;">
            <div id="center-column" style="height: 493px">
                <div class="top-bar">
                    <a class="button" target="I4" href="input.php" title="Add new hospital">ADD NEW </a>
                    <a class="button" target="I1" href="new.php" title="Back to hospital details">BACK</a>
                    <h1>Hospital</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current Hospitals</div>
                </div>
					<form action="search.php" method="POST" target="I3">
                <div class="select-bar">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>
                <div class="style1" style="float: left; position: relative; width: 614px;">
                    <table class="listing" cellpadding="0" cellspacing="0">
                     
                        <tr>
                            <th>Hospital Name</th>
                            <th>Doc FirstName</th>
                            <th>Doc LastName</th>
                            <th>Telephone</th>
                            <th>Email</th>
                        
                            
                        </tr>
                    <?php  $term = $_POST['term'];?>
 
<?php $sql = mysql_query("select * from hospital where hospital_name like '%$term%' OR doctor_fname  like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>
                        <tr>
                            <td class="style1"><?php echo $row['hospital_name']; ?>
							&nbsp;</td>
							 <td><?php echo $row['doctor_fname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['doctor_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['telephone']; ?>
							&nbsp;</td>
                            <td><?php echo $row['email']; ?>
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