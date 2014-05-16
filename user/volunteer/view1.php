<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM volunteer" ) or die("SELECT Error: ".mysql_error());
header ("refresh:25;url=view1.php");
	
?>
	 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>All Volunteers&nbsp;&nbsp; Current Volunteers</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >

</head>

<body>

<div style="position: absolute; width: 686px; height: 510px; z-index: 1; left: -64px; top: 0px" id="layer8">
    <div id="main" style="height: 494px; width:500px;">
        <div id="middle" style="height: 472px; width:650px;">
            <div id="center-column" style="height: 439px; width: 610px;">
                <div class="top-bar">
                    <a class="button" target="I4" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="Add new volunteer" href="input.php">ADD NEW </a>
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="view all volunteer details" href="viewall.php">VIEWALL </a>
                    <h1>All Volunteer</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						Volunteers<br>
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
                        	<th>Title</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Skill</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            

                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr> 
                        	<td><?php echo $res['title']; ?>
							&nbsp;</td>
                            <td class="style1"><?php echo $res['volunteer_fname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['volunteer_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['skill']; ?>
							&nbsp;</td>
                            <td><?php echo $res['mobile']; ?>
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
