<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UserName</title>
<style type="text/css">
.style2 {
	margin-left: 11px;
}
</style>
</head>

<body >

<div style="position: absolute; width: 519px; height: 189px; z-index: 1; left: 166px; top: 145px" 
>
<?php
include("db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
//username and password sent from Form
$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$password=md5($password); // Encrypted Password
$sql="SELECT id FROM admin WHERE username='$username' and passcode='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1)
{
header("location: dashboard.php");
}
else
{
//$error="Your Login Name or Password is invalid";
header("Location: dashboard.php");
}
}
?>
<form action="login.php" method="post" style="height: 151px; width: 494px" class="style2">
<label><br />
&nbsp;&nbsp; User Name :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="username"/><br />
<br />
<label>&nbsp;&nbsp; Password :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
&nbsp; <input type="password" name="password"/><br />
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value=" Login "/><br />
&nbsp;&nbsp;
<a href="forgotpassword.php">Forgot Password?</a><br />
</form>
</div>

</body>

</html>
