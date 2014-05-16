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

<style type="text/css">
.style2 {
	font-size: small;
}
</style>

</head>

<body>

<div style="position: absolute; width: 1261px; height: 870px; z-index: 1; left: -336px; top: 15px" id="layer8">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 890px; width:1229px;">
            <div id="center-column" style="height: 856px; width: 1227px;">
                <div class="top-bar" style="width: 1194px">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 62px;" title="New Orphan" href="new.php">BACK
					</a>

                    <h1>All Orphans</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						orphans<br>
						<br>
					</div>
					<form action="Searchall.php" method="POST" target="I1">
					<div class="select-bar" style="width: 1182px; height: 36px;">
                    <label style="width: 232px; height: 28px">
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>

                </div>
                <div  style="float: left; position: relative; width: 861px; left: 1px; top: -6px; height: 97px;" class="style2">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 861px">
                     
                        <tr>
                            <th>Orphan Name</th>
                            <th>Date of birth</th>
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
                            <td ><?php echo $res['orphan_fname']; ?>&nbsp;&nbsp;<?php echo $res['orphan_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['dob']; ?>
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
                <div class="select-bar" style="width: 861px">
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