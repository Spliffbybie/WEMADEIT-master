<html>
<head>
<script type="text/javascript">
$empty="Empty Field";//error message for Empty field
$nameerr="Inavalid Name";//Error message for Name field
/*$gendererr="Choose Gender";//Error message for Gender field
$emailerr="Invalid Email";//Error message for Email field
$numbererr="Invalid Number";//Error message for Number field*/
$passworderr="Password Mismatch";//Error message for Password Field
$termserr="Required";//Error message for terms checkbox
</script>
<script type="text/javascript" src="../js/jquery1.js" ></script>
<script type="text/javascript" src="../js/password.js"></script>
<script type="text/javascript" src="../js/valid.js"></script>
 <link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
<title>Hospital</title>
<style type="text/css">
.style1 {
	text-align: center;
}
.style16 {
	font-size: small;
}
.style17 {
	color: red;
	font-family: Arial, Helvetica, sans-serif;
}
.style18 {
	font-size: small;
	font-family: Arial, Helvetica, sans-serif;
}
.style19 {
	text-align: left;
}
.style20 {
	clear: both;
	border-top: 2px solid #f70;
	border-bottom: 2px solid #f70;
	padding: 5px 0 3px 0;
	margin: 0 0 17px 0;
	text-align: left;
}
</style>
</head>

<body>
<form action="hosp_save.php" method="post" name = "hospital" style="width: 593px; height: 1067px;">

  <div style="position: absolute; width: 547px; height: 1033px; z-index: 1; left: 5px; top: 14px" id="layer1">
    <div id="main" style="height: 980px; width: 558px;">
        <div id="middle" style="height: 890px; width: 554px;">
            <div id="center-column" style="height: 848px; width: 519px;">
                <div class="top-bar" style="width: 503px">
                    <h1>Enter Hospital Details</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Enter 
						Hospital Details</div>
                </div>
            	<br>
				<br>

<div class="style1" style="width: 465px; height: 745px;">
    
<br>

  <table  class="listing" cellpadding="0" cellspacing="0" style="width: 488px; border-top-left-radius: 10px; border-top-right-radius: 10px; -moz-border-radius-topleft: 10px; -moz-border-radius-topright: 10px; -webkit-border-top-left-radius: 10px; -webkit-border-top-right-radius: 10px; height: 721px;">
                         <!-- <tr><td>Username </td> <td> 
	<input type='text' name='username' id='username' class="pop_txt"  maxlength="15" >&nbsp;&nbsp;<span class="usernamespanimgg"></span> <br> <span id='usernamespan' class=spn></span></td></tr>
  -->
 <th class="full" colspan="2">Enter Hospital Details</th>
   <tr>
                            <td style="width: 133px">Hospital Name:</td>
                            <td style="width: 307px" > 
	<input type='text' name='hospital_name' id='hospital_name' class="style6"  maxlength="15" style="width: 145px" ><span class="hospital_namespanimgg"></span>  
	<span id='hospital_namespan' class=spn></span></td>
                        </tr>
<tr> 
      <td style="width: 254px;" class="style6">Dr. First Name:<br>
		<input type="text" name="fname" title="Type Doctor's First Name" id='fname'  maxlength="15" style="width: 149px"><br>
		<br>
		</td>
      <td style="width: 307px;" class="style6">Dr. Middle Name:<br>
		<input type="text" name="mname" title="Type Doctor's Middle Name" id='mname'  maxlength="15" style="width: 139px"><br>
		<br>
		</td>
    </tr>
<tr> 
      <td style="height: 26px; " colspan="2" class="style6">Dr. Last Name:<br>
		<input type="text" name="lname" title="Type First Name Here" id='lname'  maxlength="15" style="width: 241px"><br>
		</td>
    </tr>
<tr> 
      <td style="width: 277px" class="style19">
		<span class="style6">Tel:<br>
		</span>
		<span id='mobilespan' class=spn ></span>
		<span class="style6">
		<input name="telephone" type="text" style="width: 166px" title="Type Phone Number Here"><br>
		</span>
		</td>
      <td style="width: 307px" class="style19"><span class="style16">
		<span class="style6">Fax:<br>
		</span>
		</span><span class="style6">
		<input name="fax" type="text" style="width: 136px"><br>
		<br>
		</span>
		<span id='emailspan' class=style17 > &nbsp;</span></td>
    </tr>
<tr> 
      <td style="height: 44px; width: 277px" class="style6">Email:<br>
		<input name="email" type="text" style="width: 163px" title="Type Email here " id="email"><br>
		</td>
      <td style="height: 44px; width: 307px" class="style6">&nbsp;</td>
    </tr>
<tr> 
      <td style="height: 146px" colspan="2">
		<fieldset name="Group1" style="height: 207px; width: 329px;">
		<legend style="width: 58px" class="style18">Address</legend>
		<div class="style15" style="width: 364px; height: 186px">
			<span class="style18">Address Line1:</span><span class="style6"><br>
			<input name="addressline1" type="text" style="width: 275px" title="Type Street Addres Here" id="addressline1"></span>
			<span class="style6">
			<br>
			</span>
			<span class="style18">Address Line2:</span><span class="style6"><br>
			<input name="addressline2" type="text" style="width: 271px" title="Type P.o. Box Here" id="addressline2"></span>
			<span class="style6"><br>
			</span>
			<span class="style18">City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postal 
			Code:</span><span class="style6"><br>
			<input name="city" type="text" title="Type City Here" id="city">&nbsp;&nbsp;&nbsp;</span><span id="cityspan" class="style17">
			</span>
			<span class="style6">
			<input name="postalcode" type="text" title="Type Postal code Here" id="postalcode"></span><span id="postalcodespan" class="style17">
			</span><span class="style6"><br>
			</span>
			<span class="style18">Province:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Country:</span><span class="style6"><br>
			<input name="province" type="text" title="Type Province Here" id="province">&nbsp;&nbsp;&nbsp;</span><span id="provincespan" class="style17">
			</span>
			<span class="style6">
			<input name="country" type="text" title="Type Country Name Here" id="country"></span><span id="countryspan" class="style17">
			</span></div>
		</fieldset></td>
    </tr>
<tr> 
      <td class="style1" style="height: 151px; " colspan="2">
   <div class="style20" style="width: 459px; height: 53px">
                    <label>
	<span class="style6">
	<input type='submit' name='Submit' value='Save' style="width: 99px" ></span></label><span class="style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type='submit' name='reset' value='Reset' style="width: 99px" ></span></div>

	<span class="style6">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
	</span></td>
    </tr>
    

  </table>
   </form>
</body>
</html>

