<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM volunteer" ) or die("SELECT Error: ".mysql_error());
header ("refresh:25; url=viewall.php");
?>
	 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>All Volunteers&nbsp;&nbsp; Current Volunteers</title>
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
</head>

<body>

<div style="position: absolute; width: 1114px; height: 935px; z-index: 1; left: 9px; top: 22px" id="layer8">
    <div id="main" style="height: 938px; width:1121px;">
        <div id="middle" style="height: 890px; width:1112px;">
            <div id="center-column" style="height: 386px; width: 1108px;">
                <div class="top-bar" style="width: 1089px">
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 68px;" title="Back to all vonlunteer" href="new.php">BACK 
					</a>
                    <h1>All Volunteer</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						Volunteers<br>
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
                
                <div class="style1" style="float: left; position: relative; width: 1081px; left: 1px; top: -9px; font-size: 12pt;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 1080px">
                     
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
                            <th>Province</th>
                            <th>Country</th>
                            <th>Postalcode</th>

                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr> 
                        	<td><?php echo $res['title']; ?>
							&nbsp;</td>
                            <td><?php echo $res['national_id']; ?>
							&nbsp;</td>
                            <td ><?php echo $res['volunteer_fname']; ?>&nbsp;&nbsp;<?php echo $res['volunteer_mname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['volunteer_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['skill']; ?>
							&nbsp;</td>
                            <td><?php echo $res['mobile']; ?>
							&nbsp;</td>
							<td><?php echo $res['email']; ?>
							&nbsp;</td>
                            <td><?php echo $res['volunteer_address_line1']; ?>
							&nbsp;</td>
                            <td><?php echo $res['volunteer_city']; ?>
							&nbsp;</td>
                            <td><?php echo $res['volunteer_province']; ?>
							&nbsp;</td>
                            <td><?php echo $res['volunteer_country']; ?>
							&nbsp;</td>
                            <td><?php echo $res['volunteer_postalcode']; ?>
							&nbsp;</td>

                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
                <div class="select-bar" style="width: 1079px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
