<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM next_of_kin" ) or die("SELECT Error: ".mysql_error());

	
?>
	 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>All Orphans&nbsp;&nbsp; Add Orphan</title>
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

<div style="position: absolute; width: 686px; height: 870px; z-index: 1; left: -38px; top: 5px" id="layer8">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 610px;">
                <div class="top-bar">
                    <a class="button" target="I4" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;" title="New Orphan" href="input.php">ADD NEW </a>
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 64px;" title="New Orphan" href="new.php">BACK</a>
                    <h1>All Relations</h1>
                    <div class="breadcrumbs"><a href="view1.php">Homepage</a> /Search result on
						Next of kin<br>
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
                    <table class="listing" cellpadding="0" cellspacing="0" width="40%" style="font-size: small">
                     
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Relation</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                   <?php  $term = $_POST['term'];?>
 
<?php $sql = mysql_query("select * from next_of_kin where kin_fname like '%$term%' OR kin_lname  like '%$term%'");?>
 
<?php while ($row = mysql_fetch_array($sql)){?>
                        <tr>
                            <td ><?php echo $row['kin_fname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['kin_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $row['relation']; ?>
							&nbsp;</td>
                            <td><?php echo $row['mobile']; ?>
							&nbsp;</td>
                            <td><?php echo $row['email']; ?>
							&nbsp;</td>
							<td><?php echo $row['kin_city']; ?>
							&nbsp;</td>
                            
					        <td><?php echo "<a href=\"edit.php?id=$row[next_of_kin_id]\"  target='I4'>Edit</a>"; ?>
							&nbsp;</td>
                            <td onclick="confirmDelete()"><?php echo "<a href=\"delete.php?id=$row[next_of_kin_id]\" >Delete</a>"; ?>
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
