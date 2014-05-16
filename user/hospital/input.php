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
.style6 {
	font-family: Arial, Helvetica, sans-serif;
}
.spn
{
 color:red;
 
}
.style3 {
	font-size: medium;
}
</style>
</head>

<body>
<form action="save.php" method="post" name = "hospital" style="width: 582px; height: 945px;">

  <div style="position: absolute; width: 547px; height: 924px; z-index: 1; left: 5px; top: 14px" id="layer1">
    <div id="main" style="height: 908px; width: 558px;">
        <div id="middle" style="height: 890px; width: 554px;">
            <div id="center-column" style="height: 848px; width: 519px;">
                <div class="top-bar" style="width: 488px">
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
	<td style="height: 80px" colspan="2">
		<span class="normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Address</span> <span class="normal">Line</span> <span class="normal">1:</span><br/>
		<input name="addressline1" type="text" style="width: 239px" id="addressline1"/>
		 <span class="addressline1spanimgg"></span>
   		 <br/> <span id='addressline1span' class="spn"></span><br/>

		</td>
							</tr>
							<tr>
	<td style="height: 80px" colspan="2">
		Address Line 2:<span class="style3"><br>
		<br/></span> 
		<input name="addressline2" type="text" style="width: 237px" id="addressline2"/>
		 <span class="addressline2spanimgg"></span>
    	<br/> <span id='addressline2span' class="spn"></span><br/>&nbsp;&nbsp;</td>
							</tr>
							<tr>
	<td style="height: 59px">
			<span class="normal">Province:&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
		
		<span class="style6">
		<select name="province" style="width: 114px" id="province" title="Choose a Province">
		<option>Choose Province</option>
		<option>Easten Cape</option>
		<option>Free State</option>
		<option>Gauteng</option>
		<option>kwa Zulu-Natal</option>
		<option>Limpopo</option>
		<option>Mpumalanga</option>
		<option>North West</option>
		<option>Northern Cape</option>
		<option>Western Cape</option>
		</select></span>
		<span class="provincespanimgg"></span><br/>

		     <span id='provincespan' class="spn"></span><br/>&nbsp;</td>
	<td style="height: 59px">
			
		
			City:<span class="style3">&nbsp;</span>
		<input name="city" type="text" style="width: 116px" id="city">
		<span class="cityspanimgg"></span><br/>

		     <span id='cityspan' class="spn"></span><br/>&nbsp;</td>
							</tr>
							<tr>
	<td style="height: 28px">
		&nbsp;<span class="normal">Country:</span>&nbsp;<br />
		&nbsp;<input name="country" type="text" style="width: 117px" id="country"/>
		<span class="countryspanimgg"></span><br/>
		     <span id='countryspan' class="spn"></span><br/>&nbsp;</td>
	<td style="height: 28px">
				<span class="style16">Postal Code:<br/>
		</span>
				&nbsp;<input name="postalcode" type="text" style="width: 118px" id="postalcode"/>
		<span class="postalcodespanimgg"></span><br />
		     <span id='postalcodespan' class="spn"></span><br/>
&nbsp;</td>
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

