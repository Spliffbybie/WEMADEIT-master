<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM handler" ) or die("SELECT Error: ".mysql_error());
header ("refresh:10;url=view1.php");

	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" href="../../js/jsclass.js" >
<script type="text/javascript" src="../../js/jquery1.js" ></script>
 			<!--[if IE 6]><link rel="stylesheet" href="../../css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    		<!--[if IE 7]><link rel="stylesheet" href="../../css/style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/script.js"></script>

<title>All</title>
</head>

<body>

<div style="position: absolute; width: 738px; height: 855px; z-index: 1; left: 7px; top: 1px" id="layer8">
    <div id="main" style="height: 831px; width: 738px;">
        <div id="middle" style="height: 847px; width: 650px;">
            <div id="center-column" style="height: 795px; width: 724px;">
                <div class="top-bar" style="width: 692px">
                    <a class="button" target="I4" href="input.php" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;">ADD NEW </a>
                    <a class="button" target="I1" href="viewall.php" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="View all handler details">VIEWALL </a>
                    <h1>All Handlers</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						handlers</div>
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
                            <th>Title </th>
                            <th>First&nbsp; Name </th>
                            <th>Last Name</th>
                            <th>Affiliation</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>City</th>
                          
                            
                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                       		 <td><?php echo $res['title']; ?>
								&nbsp;</td>
                            <td class="style1"><?php echo $res['handler_fname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['handler_lname']; ?>
							&nbsp;</td>
							  <td><?php echo $res['affiliation']; ?>
								&nbsp;</td>

                            <td><?php echo $res['mobile']; ?>
							&nbsp;</td>
                            <td><?php echo $res['email']; ?>
							&nbsp;</td>
                            <td><?php echo $res['handler_city']; ?>
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
