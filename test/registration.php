<html>
<head>
<style type="text/css">
.style1 {
	margin-left: 0px;
}
.style2 {
	text-align: left;
}
</style>
</head>
<body>
&nbsp;<script type="text/javascript">
	function verify()
		{
			if(register.password.value != register.password2.value)
				{
					alert("Password do not match. Go back and re-enter your passwords");
					register.password.value="";
					register.password2.value="";
					register.password.focus();
					return false;
				}
			if(register.password.value != "")
				{
					alert("You are registered. Thank You!");
					<?php
					function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "register")) {
  $insertSQL = sprintf("INSERT INTO admin (username, passcode, question, answer, role) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['passcode'], "text"),
                       GetSQLValueString($_POST['question'], "text"),
                       GetSQLValueString($_POST['answer'], "text"),
                       GetSQLValueString($_POST['role'], "text"));

  mysql_select_db($database_dbconn, $dbconn);
  $Result1 = mysql_query($insertSQL, $dbconn) or die(mysql_error());

  $insertGoTo = "userpanel.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
					
					?>
				}
			else
				{	alert("Password is empty. Please enter");
				info.password.focus();
				return false;
				}
		}
	
</script><form action="registration.php" method="post" style="height: 601px">
<div class="style2">
<div class="style2">
<img src="images/adduser.png" alt="adduser" width="119" height="112"><label><br>
<br>
User Name :&nbsp;&nbsp; </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="username" style="width: 207px"><br>
<br />


<label>Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="password" style="width: 209px"><br>
<br>
</div>
<table style="width: 375px">
	<tr>
		<td style="width: 155px" class="style2">Retype password:</td>
		<td class="style2"><span id="spryconfirm1">
		<input type="password" name="password2" id="password" style="width: 206px"></span></td>
	</tr>
</table>

<p class="style2">Choose Secret Question<label> :</label>&nbsp;
<select name="question" title="Select an Orphan Type" style="width: 412px">
		<option>-Select-</option>
		<option>What is your pets name?</option>
		<option>What is your mother's name?</option>
		<option>what is your favorate country?</option>
		<option>what is your favorate song?</option>
		</select>
		<br />


</p>
<p class="style2">Answer<label> :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>&nbsp;
<input type="text" name="answer" style="width: 205px" class="style1"><br/>
</p>

<p class="style2">User Type<label> :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="role" title="Select an Orphan Type" style="width: 199px">
		<option>-Select-</option>
		<option>Admin</option>
		<option>User</option>
		</select></p>
<div class="style2">
<br>
<input type="submit" value=" Register" onclick="verify()">
<br >
</div>
</div>
</form>
</body>
</html>