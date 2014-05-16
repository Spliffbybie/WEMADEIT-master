<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM `case`" ) or die("SELECT Error: ".mysql_error());
//header ("refresh: 30; url=viewall.php");


	
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

<div style="position: absolute; width: 769px; height: 870px; z-index: 1; left: 10px; top: 4px" id="layer8">
    <div id="main" style="height: 679px; width:710px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 767px;">
                <div class="top-bar" style="width: 675px">
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="Back to all case Details" href="viewall.php">BACK </a>
                    <h1>All Cases</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						cases<br>
									<form action="searchall.php" method="POST" target="I1">
                <div class="select-bar">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>
                <div class="style1" style="float: left; position: relative; width: 675px; left: 0px; top: 0px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 673px">
                     
                        <tr>
                            <th>Case Name</th>
                            <th>Description</th>
                            <th>Comment</th>
                            <th>Status</th>
                          

                        </tr>
                    <?php  $term = $_POST['term'];?>
 
<?php $sql = mysql_query("select * from case where case_name like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>
                        <tr>
                        	<td><?php echo $row['case_name'];?>
							&nbsp;</td>
                            <td class="style1"><?php echo $row['description'];?>
							&nbsp;</td>
                            <td><?php echo $row['comment'];?>
							&nbsp;</td>
                            <td><?php echo $row['status'];?>
							&nbsp;</td>
                            
                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
                <div class="select-bar" style="width: 674px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
