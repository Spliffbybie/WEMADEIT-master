<?php
//including the database connection file
include_once("../../connections/config.php");


$result = mysql_query( "SELECT orphans.*, social_worker.*,handler.*,next_of_kin.*,school.*,hospital.*
						FROM orphans, social_worker,handler,next_of_kin,school,hospital
						WHERE orphans.social_worker_id = social_worker.social_worker_id
						AND orphans.handler_id = handler.handler_id
						AND orphans.next_of_kin_id = next_of_kin.next_of_kin_id
						AND orphans.school_id = school.school_id
						AND orphans.hospital_id = hospital.hospital_id
						
						")
						 
						
or die("SELECT Error: ".mysql_error());


header ("refresh:15; url=viewall.php");

	
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

<div style="position: absolute; width: 884px; height: 870px; z-index: 1; left: 66px; top: 14px" id="layer8">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 882px;">
                <div class="top-bar" style="width: 840px">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <a class="button" target="I1" href="view1.php" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 62px;" title="New Orphan" href="../../admin/dashboard.php">BACK
					</a>

                    <h1>All Orphans</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						orphans<br>
						<br>
					</div>
					<form action="Search.php" method="POST" target="I3">
					<div class="select-bar" style="width: 880px; height: 36px;">
                    <label style="width: 232px; height: 28px">
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>

                </div>
                <div class="style1" style="float: left; position: relative; width: 855px; left: 1px; top: -6px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 861px">
                     
                        <tr>
                            <th>Orphan Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Race</th>
                            <th>Type</th>
                            <th>Location</th>
                            <th>Next of Kin</th>
                            <th>Social Worker Name</th>
 							<th>Handler <br>
							Name</th>
 							<th>School<br>
							Name</th>
							<th>Hospital Name</th>
							
 							

                        </tr>
                        <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                            <td class="style1"><?php echo $res['orphan_fname']; ?>&nbsp;&nbsp;<?php echo $res['orphan_lname']; ?>
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
                            <td><?php echo $res['kin_fname']; ?>&nbsp;&nbsp;<?php echo $res['kin_lname']; ?> 
							&nbsp;</td> 
							<td><?php echo $res['social_worker_fname']; ?>&nbsp;&nbsp;<?php echo $res['social_worker_lname']; ?> 
							&nbsp;</td>
							<td><?php echo $res['handler_fname']; ?>&nbsp;&nbsp;<?php echo $res['handler_lname']; ?>
							&nbsp;</td>
							<td><?php echo $res['school_name']; ?>
							&nbsp;</td>
							<td><?php echo $res['hospital_name']; ?>
							&nbsp;</td>
						


                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
                <div class="select-bar" style="width: 880px">
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