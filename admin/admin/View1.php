<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM users" ) or die("SELECT Error: ".mysql_error());
header ("refresh:12;url=view1.php");
	
?>
	 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>HomepageUsersOrdersSettingsStati</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
<script type="text/JavaScript"> 
function confirmDelete(){
   var agree = confirm("Are you sure you want to delete this record?");
   if (agree)
      return true ;
   else
      return  false;
   }
</script> 

<style type="text/css">
.style1 {
	color: #0000FF;
}
.style4 {
	font-size: small;
}
</style>

</head>

<body>

<div style="position: absolute; width: 665px; height: 532px; z-index: 1; left: 0px; top: 10px" id="layer1">
    <div id="main" style="height: 524px; width: 630px;">
        <div id="middle" style="height: 512px; width: 650px;">
            <div id="center-column" style="height: 493px">
                <div class="top-bar">
                    <a class="button" target="I4" href="input.php">ADD NEW </a>
                    <h1>Current Users</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						users</div>
                </div>
                <div class="select-bar">
                    <label>
                        <input type="text" name="textfield" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                <div class="style1" style="float: left; position: relative; width: 614px;">
                    <table class="listing" cellpadding="0" cellspacing="0">
                     
                        <tr>
                            <th class="style4">User Name</th>
                            <th class="style4">Password</th>
                            <th class="style4">Role</th>
                            <th class="style4">Edit</th>
                            <th class="style4">Delete</th>
                            
                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                            <td class="style4" ><?php echo $res['user_username']; ?>
							&nbsp;</td>
                            <td class="style4"><?php echo "*******"; ?>
							&nbsp;</td>
                            <td class="style4"><?php echo $res['user_role']; ?>
							&nbsp;</td>
                            <td class="style4"><?php echo "<a href=\"edit.php?user_id=$res[user_id]\"  target='I4'>Edit</a>"; ?>
							&nbsp;</td>
                            <td onclick="confirmDelete()" class="style4"><?php echo "<a href=\"delete.php?user_id=$res[user_id]\" >Delete</a>"; ?>
							&nbsp;</td>
                        </tr>
                                               
						<?php }; ?><span class="style4"> </span>
                    
                    </table>
                </div>
            	<span class="style4">
            	<br>
				<br>
            	</span>
            </div>
        </div>
    </div>
</div>

</body>

</html>
<?php
mysql_free_result($result);
?>