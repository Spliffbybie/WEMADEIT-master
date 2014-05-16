<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM handler" ) or die("SELECT Error: ".mysql_error());
header ("refresh:10;url=viewall.php");

	
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
.style1 {
	margin-right: 0px;
}
</style>
</head>

<body>

<div style="position: absolute; width: 1206px; height: 855px; z-index: 1; left: 7px; top: 1px" id="layer8">
    <div id="main" style="height: 831px; width: 1232px;">
        <div id="middle" style="height: 847px; width:  1203px;">
            <div id="center-column" style="height: 818px; width: 1203px;">
                <div class="top-bar">
                    <div style="position: absolute; width: 88px; height: 39px; z-index: 1; left: 1019px; top: 16px" id="layer9">
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 83px;" href="new.php">BACK
						</a>
                    </div>
                    <h1>All Handlers</h1>
                    <div class="style1" style="width: 1089px"><a href="#">Homepage</a> /Current 
						handlers<br>
					</div>
                </div>
                <form action="searchall.php" method="POST" target="I1">
                <div class="select-bar" style="width: 1101px">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>

                <div class="style1" style="float: left; position: relative; width: 952px; left: 0px; top: 0px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 1105px; font-size: small;">
                     
                        <tr>
                            <th>Title </th>
                            <th>First Name </th>
                            <th>Middle Name </th>
                            <th>Last Name</th>
                            <th>Affiliation</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address </th>
                            <th>City</th>
                            <th>Province </th>
                            <th>Country </th>
                            <th>Postal code </th>
                            
                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                       		 <td><?php echo $res['title']; ?>
								&nbsp;</td>
                            <td><?php echo $res['handler_fname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['handler_mname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['handler_lname']; ?>
							&nbsp;</td>
							 <td><?php echo $res['affiliation']; ?>
							&nbsp;</td>
                            <td><?php echo $res['mobile']; ?>
							&nbsp;</td>
                            <td><?php echo $res['email']; ?>
							&nbsp;</td>
                            <td><?php echo $res['handler_addressline1']; ?>
							&nbsp;</td>
                            <td><?php echo $res['handler_city']; ?>
							&nbsp;</td>
                            <td><?php echo $res['handler_province']; ?>
							&nbsp;</td>
                            <td><?php echo $res['handler_country']; ?>
							&nbsp;</td>
                            <td><?php echo $res['handler_postalcode']; ?>
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
