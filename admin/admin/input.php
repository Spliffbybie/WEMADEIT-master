<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

 
<head>
<title>New&nbsp; User</title>
<script type="text/javascript">
$empty="Empty Field";//error message for Empty field
$nameerr="Inavalid Name";//Error message for Name field
/*$gendererr="Choose Gender";//Error message for Gender field
$emailerr="Invalid Email";//Error message for Email field
$numbererr="Invalid Number";//Error message for Number field*/
$passworderr="Password Mismatch";//Error message for Password Field
$termserr="Required";//Error message for terms checkbox
</script> 

<link  href="../../css/admin.css" rel="stylesheet" type="text/css" />
<link  href="../../css/bluehighlight.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="jquery.js" ></script>
<script type="text/javascript" src="password.js"></script>
<script type="text/javascript" src="valid.js"></script>

<style type="text/css">
.style1 {
	font-family: Arial, Helvetica, sans-serif;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	text-align: left;
}
.capps{visibility:hidden; color: green;}

</style>
</head>
<body>
<form name='registerform' method="post" action="save.php" style="height: 490px; width: 457px"> 
<br/>

<div style="position: absolute; width: 339px; height: 398px; z-index: 1; left: 5px; top: 14px" id="layer1">
    <div id="main" style="height: 354px; width:400px;">
        <div id="middle" style="height: 343px; width: 454px;">
            <div id="center-column" style="height: 436px; width: 434px;">
                <div class="top-bar" style="width: 412px">
                    <h1>Create User Here</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Create user</div>
                </div>
            	<br/>
				<br/>

<div class="style1" style="width: 431px">
    
<br/>

                    <table  class="listing" cellpadding="0" cellspacing="0" style="width: 428px; border-top-left-radius: 10px; border-top-right-radius: 10px; -moz-border-radius-topleft: 10px; -moz-border-radius-topright: 10px; -webkit-border-top-left-radius: 10px; -webkit-border-top-right-radius: 10px; height: 305px;">
                        <tr>
                            <th class="full" colspan="2">ENTER USER HERE</th>
                        </tr>
                        <tr>
                            <td style="width: 133px">User Name</td>
                            <td > 
								<input type='text' name='user_username' id='user_username' class="style6"  maxlength="15" style="width: 194px" onkeyup=" checkSpecialChar(data)" title="Enter User Name"/>
								<span class="user_usernamespanimgg" ></span>
							<br/>
							<span id="user_usernamespan" class="spn"></span></td>
                        </tr>
                        <tr>
                            <td style="width: 133px">Password<div id="capss" class="capps">
								Caps Lock is on.</div>
							</td>
                            <td> 
								<input type='password' name='user_password' id='user_password' class="style6"  maxlength="15" onkeypress="capLock(event)" onkeyup='CheckPasswordStrength(this.value);'  style="width: 194px; height: 18px" title="Enter Password"  />
								<span class="user_passwordspanimgg"></span><br/>
							<div id="pwd_strength" style="border: 1px solid #dcdcdc; width: 140px; height: 9px; margin-top: 2px; background-color: #efefef;">
							</div>
   							<span id="user_passwordspan" class="spn"></span></td>
                        </tr>
                        <tr>
                            <td style="width: 133px">Re-type Password</td>
                            <td> 
								<input  type='password' name='user_password2' id='user_password2' class="style6"  onkeypress="capLock(event)" style="width: 194px; height: 22px;" title="Re-enter Password" />
			<span class="user_password2spanimgg"></span> <br/>
							<span id="user_password2span" class="spn"></span></td>
                        </tr>
                        <tr>
                            <td style="width: 133px">User Type</td>
                            <td>
	<select name="user_role" id="user_role" class="style7" style="width: 190px" title="Select a user Role">&nbsp;&nbsp;<span class="user_rolespanimgg"></span> <br/> 
	<span id='user_rolespan' class=spn></span>

	<option>-select-</option>
	<option>admin</option>
	<option>user</option>
	</select></td>
                        </tr>
                        <tr><td colspan="2" class="style2" style="height: 64px">
                         <div class="select-bar" style="width: 326px; height: 30px">
                    <label style="width: 314px">
                        <span class="normal">&nbsp;</span><input type='submit' name='Submit' value='Submit' style="width: 99px" /><span class="normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</span>
	<input type='submit' name='reset' value='Reset' style="width: 99px" /><span class="normal">&nbsp;</span></td>
                    </label>
                </div>	
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
               

