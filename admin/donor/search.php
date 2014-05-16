<?php
//including the database connection file
include_once("../../connections/config.php");

//fetching data in descending order (lastest entry first)
$result=mysql_query("SELECT * FROM donor ORDER BY donor_id DESC");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link rel="stylesheet" href="../../css/style1.css" type="text/css" >
<link rel="stylesheet" href="../../js/jsclass.js" >
<script type="text/javascript" src="../../js/jquery1.js" ></script>
 			<!--[if IE 6]><link rel="stylesheet" href="../../css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    		<!--[if IE 7]><link rel="stylesheet" href="../../css/style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/script.js"></script>
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
.style17 {
	font-size: small;
}
</style>
</head>

<body>

<div style="position: absolute; width: 686px; height: 819px; z-index: 1; left: -77px; top: 2px" id="layer8">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 774px; width:650px;">
            <div id="center-column" style="height: 734px; width: 610px;">
                <div class="top-bar">
                    <a class="button" target="I4" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="New Donor" href="input.php">ADD NEW 
					</a>
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 59px;" title="Back to donor details" href="new.php">BACK</a>
                    <h1>All Donors</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						Donors<br>
						<br>
					</div>
					<form action="search.php" method="POST" target="I3" style="width: 587px">
                <div class="select-bar" style="width: 605px">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>

                </div>
                <div class="style17" style="float: left; position: relative; width: 614px;">
                    <table class="listing" cellpadding="0" cellspacing="0" width="40%">
                     
                        <tr>
                        	<th>Title</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                    <?php  $term = $_POST['term'];?>
<?php $sql = mysql_query("SELECT * FROM `donor` WHERE donor_fname like '%$term%' OR donor_mname  like '%$term%' OR donor_lname  like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>
                        <tr>
                  			<td><?php echo $row['title']; ?> 
                            <td ><?php echo $row['donor_fname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['donor_lname']; ?> 
							&nbsp;</td>
                            <td><?php echo $row['mobile']; ?>
							&nbsp;</td>
                            <td><?php echo $row['email']; ?>
							&nbsp;</td>
							<td><?php echo $row['donor_city']; ?>
							&nbsp;</td>
                           

                            <td><?php echo "<a href=\"newedit.php?donor_id=$row[donor_id]\"  target='I1'>Edit</a>"; ?>
							&nbsp;</td>
                            <td onclick="confirmDelete()"><?php echo "<a href=\"delete.php?donor_id=$row[donor_id]\" >Delete</a>"; ?>
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