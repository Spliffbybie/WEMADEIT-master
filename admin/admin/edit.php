
<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['user_username']))
{
	//here the id that we post is the same id that we get from url
	//id indicates the id of this data which we are editing
	//id is unique and a particular id is associated with particular data	
	$id = $_GET['ID'];
	
	$username=$_POST['user_username'];
	$password=$_POST['user_password'];
	$password2=$_POST['user_password2'];
	$password=md5($password); // Encrypted Password
	$password2=md5($password2); // Encrypted Password
	$role=$_POST['user_role'];
	
		//updating the table
		$result=mysql_query("UPDATE 
								`users` 
							SET `user_username`='$username',`user_password`='$password',
								`user_password2`='$password2',`user_role`='$role'	WHERE user_id='$id'
							")
				
		or die(mysql_error());

		header("Location:../placeholder1.htm");		 
		
	}
	
?>
<?php
//for displaying data of this particular data
include_once("../../connections/config.php");
if (isset($_GET['user_id'])){
//getting id from url
$id = $_GET['user_id'];

//selecting data associated with this particular id
$result=mysql_query("select * FROM `users` WHERE user_id=$id")

or die(mysql_error());

while($res=mysql_fetch_array($result))
{
	$username = $res['user_username'];
	$password = $res['user_password'];
	$password2 = $res['user_password2'];
	$role = $res['user_role'];	
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

 
<head>
<title>Edit </title>
<script type="text/javascript">
$empty="Empty Field";//error message for Empty field
$nameerr="Inavalid Name";//Error message for Name field
/*$gendererr="Choose Gender";//Error message for Gender field
$emailerr="Invalid Email";//Error message for Email field
$numbererr="Invalid Number";//Error message for Number field*/
$passworderr="Password Mismatch";//Error message for Password Field
$termserr="Required";//Error message for terms checkbox
</script>
<script type="text/javascript" src="../../js/jquery1.js" ></script>
<script type="text/javascript" src="../../js/password.js"></script>
<script type="text/javascript" src="../../js/valid.js"></script>
 <link  href="../../css/admin.css" rel="stylesheet" type="text/css" >

	<style type="text/css">
.style1 {
	text-align: left;
}
</style>
</head>
<body>
<form name='editorphan' method="post" action="edit.php?ID=<?php echo $_GET['user_id']; ?>" style="height: 498px; width: 577px" class="style5"> 

<div style="position: absolute; width: 547px; height: 458px; z-index: 1; left: 1px; top: 25px" id="layer1">
    <div id="main" style="height: 454px; width: 558px;">
        <div id="middle" style="height: 443px; width: 554px;">
            <div id="center-column" style="height: 436px; width: 522px;">
                <div class="top-bar" style="width: 454px">
                    <h1>Edit User</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Edit user</div>
                </div>
            	<br>
				<br>

<div class="style1" style="width: 501px">
    
<br>

                    <table  class="listing" cellpadding="0" cellspacing="0" style="width: 423px; border-top-left-radius: 10px; border-top-right-radius: 10px; -moz-border-radius-topleft: 10px; -moz-border-radius-topright: 10px; -webkit-border-top-left-radius: 10px; -webkit-border-top-right-radius: 10px;">
                        <tr>
                            <th class="full" colspan="2">Edit User Here</th>
                        </tr>
                        <tr>
                            <td style="width: 79px">User Name</td>
                            <td class="style1"> 
	<input type='text' name='user_username' id='user_username' class="style9"  maxlength="15" style="width: 145px" value="<?php echo $username; ?>" ><span class="usernamespanimgg"></span> <br> <span id='usernamespan' class=spn></span></td>
                        </tr>
                        <tr>
                            <td style="width: 79px">Password</td>
                            <td> 
	<input type='password' name='user_password' id='user_password' class="style9"  maxlength="15" onkeypress="capLock(event)" onkeyup='CheckPasswordStrength(this.value);'  style="width: 143px; height: 21px"  ><br>
	<div id='pwd_strength' style="border: 1px solid #dcdcdc; width: 143px ; height: 5px; margin-top: 2px; background-color: #efefef;"><span class="passcodespanimgg"></span></div>
   							</td>
                        </tr>
                        <tr>
                            <td style="width: 79px">Re-type Password</td>
                            <td> 
	<input  type='password' name='user_password2' id='user_password2' class="style9" style="width: 143px" ><span id='passcode2span' class=spn></span></td>
                        </tr>
                        <tr>
                            <td style="width: 79px">User Type</td>
                            <td>
	<select name="user_role" id="user_role" class="style9" style="width: 101px">&nbsp;&nbsp;<span class="rolespanimgg"></span> <br> 
	<span id='rolespan' class=spn></span>

	<option>-select-</option>
	<option>admin</option>
	<option>user</option>
	</select></td>
                        </tr>
                        <tr>
                       <td colspan="2">

                <div class="select-bar" style="width: 489px; height: 57px">
                    <label>
                        &nbsp;
                    </label> 
	<input type="submit" name="update" value="Update"  class="pop_but" style="width: 99px" ></div>
							</td>
                        </tr>
                    </table>
                </div>
              
            </div>
        </div>
    </div>
</div>
 </form> 
           
</body>
</html>    
