<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM handler" ) or die("SELECT Error: ".mysql_error());

	
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

<div style="position: absolute; width: 665px; height: 532px; z-index: 1; left: 7px; top: 11px" id="layer8">
    <div id="main" style="height: 524px; width: 660px;">
        <div id="middle" style="height: 599px; width: 650px;">
            <div id="center-column" style="height: 493px">
                <div class="top-bar">
                    <a class="button" target="I4" href="input.php" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="Add new handler">ADD NEW </a>
                    <a class="button" target="I3" href="view1.php" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="Back handler details">BACK </a>
                    <h1>All Handlers</h1>
                    <div class="breadcrumbs"><a href="view1.php">Homepage</a> /Search result on 
						handlers</div>
                </div>
                <form action="search.php" method="POST" target="I1">
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
                    <?php  $term = $_POST['term'];?>
 
<?php $sql = mysql_query("select * from handler where handler_fname like '%$term%' OR handler_lname  like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>
                        <tr>
                  			<td><?php echo $row['title']; ?> 
                            <td class="style1"><?php echo $row['handler_fname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['handler_lname']; ?> 
							&nbsp;</td>
                            <td><?php echo $row['affiliation']; ?>
							&nbsp;</td>
                            <td><?php echo $row['mobile']; ?>
							&nbsp;</td>
                            <td><?php echo $row['email']; ?>
							&nbsp;</td>
							<td><?php echo $row['handler_city']; ?>
							&nbsp;</td>
                           

                            
                        </tr>
                                               
						<?php }; ?>
						
                    
                    </table>
                </div>
                
                
                
                
                <div class="select-bar" style="width: 612px">
                </div>
					
					
					
					
					</div>
               
               
               
               
            	<br>
				<br>
            </div>
        </div>
    </div>
</div>

</body>

</html>