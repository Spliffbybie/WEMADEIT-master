<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT `case`.*,`orphans`.*,`social_worker`.*
				FROM `case`,`orphans`,`social_worker`
				WHERE case.orphan_id = orphans.orphan_id
				AND case.social_worker_id = social_worker.social_worker_id
				" )
 or die(mysql_error());

header ("refresh:25;url=viewall.php");	
?>
<script type="text/JavaScript"> 
function confirmDelete(){
   var agree = confirm("Are you sure you want to delete this record?");
   if (agree)
      return false ;
   else
      return false ;
   }
</script> 
	 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>All Orphans&nbsp;&nbsp; Add Orphan</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >

</head>

<body>

<div style="position: absolute; width: 940px; height: 870px; z-index: 1; left: 10px; top: 2px" id="layer8">
    <div id="main" style="height: 679px; width:924px;">
        <div id="middle" style="height: 890px; width: 890px;">
            <div id="center-column" style="height: 856px; width: 890px;">
                <div class="top-bar" style="width: 839px">
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 68px;" title="Back to case details" href="new.php">
					BACK 
					</a>
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
</div>
                </div>
                <div class="style1" style="float: left; position: relative; width: 696px; left: -1px; top: -8px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 846px; font-size: small;">
                     
                        <tr>
                            <th>Orphan Name</th>
							<th>Social Worker Name</th>
                            <th>Case Name</th>
                            <th>Description</th>
                            <th>Comment</th>
                            <th style="width: 63px">Status</th>
                            
                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                            <td ><?php echo $res['orphan_fname']; ?>&nbsp;&nbsp;<?php echo $res['orphan_lname']; ?>
                            &nbsp;</td>
   							<td><?php echo $res['social_worker_fname']; ?>&nbsp;&nbsp;<?php echo $res['social_worker_lname']; ?>
							&nbsp;</td>
                            <td ><?php echo $res['case_name'];?>
							&nbsp;</td>
                            <td><?php echo $res['description']; ?>
							&nbsp;</td>
                            <td><?php echo $res['comment']; ?>
							&nbsp;</td>
                            <td ><?php echo $res['status']; ?>
							&nbsp;</td>
                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
                <div class="select-bar" style="width: 849px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
