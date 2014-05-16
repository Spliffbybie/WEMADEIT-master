<link rel="stylesheet" href="style1.css" type="text/css" />
<?php
include("db.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$password2=mysql_real_escape_string($_POST['password2']);
$password=md5($password); // Encrypted Password
$password2=md5($password2); // Encrypted Password
$question=mysql_real_escape_string($_POST['question']);
$answer=mysql_real_escape_string($_POST['answer']);
$role=mysql_real_escape_string($_POST['role']);
$sql="Insert into admin(username,passcode,passcode2,question,answer,role) values('$username','$password','$password2','$question','$answer','$role');";
$result=mysql_query($sql);
echo "Registration Successfully";
}
?>

<script type="text/javascript">
$empty="Empty Field";//error message for Empty field
$nameerr="Inavalid Name";//Error message for Name field
/*$gendererr="Choose Gender";//Error message for Gender field
$emailerr="Invalid Email";//Error message for Email field
$numbererr="Invalid Number";//Error message for Number field*/
$passworderr="Password Mismatch";//Error message for Password Field
$termserr="Required";//Error message for terms checkbox
</script>
<script type="text/javascript" src="jquery1.js"></script>
<script type="text/javascript" src="password.js"></script>
<script type="text/javascript" src="valid.js"></script>
<form name='registerform' method="post" action="validation.php"> 
<br>
<table align='center' class="tablefield" cellspacing='0' cellpadding=0>
<tr><td colspan=2></td></tr>
<tr><td>
<div id='success'>
<table align=center class="innertable" cellspacing='3'>
 
  <tr><td colspan=2 align=left class="registerfrm"><b><br>Authentication Details</b><hr></td></tr>
  <tr><td>Username </td> <td> 
	<input type='text' name='username' id='username' class="pop_txt"  maxlength="15" />&nbsp;&nbsp;<span class="usernamespanimgg"></span> <br> <span id='usernamespan' class=spn></span></td></tr>
  <tr><td>Password <div id="capss" class="capps">Caps Lock is on.</div></td> <td> 
	<input type='password' name='password' id='passcode' class="pop_txt"  maxlength="15" onkeypress="capLock(event)" onkeyup='CheckPasswordStrength(this.value);'  /> 
	&nbsp;<span class="passcodespanimgg"></span>
  <br><div id='pwd_strength' style="border: 1px solid #dcdcdc; width: 140px ; height: 5px; margin-top: 2px; background-color: #efefef;"></div>
   <span id='passcodespan' class=spn></span></td> </tr>
  <tr><td>Re-type Password </td> <td> 
	<input type='password' name='password2' id='passcode2' class="pop_txt" />  
	&nbsp;<span class="passcode2spanimgg"></span> <br><span id='passcode2span' class=spn></span></td> </tr>
	<tr>
	<td>Question:</td>
	<td><select name="question" id="question" class="pop_txt"  style="width: 111px">&nbsp;&nbsp;<span class="questionspanimgg"></span> <br> <span id='questionspan' class=spn></span>

	<option>-select-</option>
	<option>What is your pets name?</option>
	<option>What is your favourite song?</option>
	<option>What is your mother maiden name?</option>
	</select></td></tr>
	<tr>
	<td>Answer:</td>
	<td><input name="answer" id="answer"class="pop_txt" maxlength="15" type="text" style="width: 113px">&nbsp;&nbsp;<span class="answerspanimgg"></span> <br> <span id='answerspan' class=spn></span></td></tr>

	<tr>
	<td>User Type:</td>
	<td><select name="role" id="role" class="pop_txt" style="width: 113px">&nbsp;&nbsp;<span class="rolespanimgg"></span> <br> <span id='rolespan' class=spn></span>

	<option>-select-</option>
	<option>admin</option>
	<option>user</option>
	</select></td></tr>
	<tr>
	<td><br>
	<input id="terms"  type="checkbox" name="terms">I accept that terms </td> 
	</tr>
  <tr><td colspan='2' align='left'>&nbsp;&nbsp;&nbsp;<br> <center><input type='submit' name='Submit' value='Submit'  class="pop_but" /><div style="font-size: 10px;color: #dadada;" id="dumdiv">
</div></center>
  </td> </tr>
</table>
</div>
</td></tr></table>
</form>