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
.style3 {
	text-align: left;
	font-weight: normal;
}
.style2 {
	text-align: left;
}
</style>
</head>
<form action="save.php" method="post" name = "next of kin" style="width: 567px; height: 1063px;">

<body>
  <div style="position: absolute; width: 547px; height: 1033px; z-index: 1; left: -3px; top: 17px" id="layer1">
    <div id="main" style="height: 980px; width: 558px;">
        <div id="middle" style="height: 890px; width: 554px;">
            <div id="center-column" style="height: 848px; width: 519px;">
                <div class="top-bar" style="width: 503px">
                    <h1>New School</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Enter 
						School Details</div>
                </div>
            	<br>
				<br>

<div class="style1" style="width: 465px; height: 745px;">
    
<br>

  <table  class="listing" cellpadding="0" cellspacing="0" style="width: 488px; border-top-left-radius: 10px; border-top-right-radius: 10px; -moz-border-radius-topleft: 10px; -moz-border-radius-topright: 10px; -webkit-border-top-left-radius: 10px; -webkit-border-top-right-radius: 10px; height: 721px;">
                         <!-- <tr><td>Username </td> <td> 
	<input type='text' name='username' id='username' class="pop_txt"  maxlength="15" >&nbsp;&nbsp;<span class="usernamespanimgg"></span> <br> <span id='usernamespan' class=spn></span></td></tr>
  -->
 <th class="full" colspan="2">Enter SCHOOL Details</th>
   <tr>
                            <td style="width: 133px">School Name:</td>
                            <td style="width: 307px" > 
	<input type='text' name='hospital_name' id='school_name' class="style6"  maxlength="15" style="width: 145px" ><span class="hospital_namespanimgg"></span>  
	<span id='hospital_namespan' class=spn></span></td>
                        </tr>
<tr> 
      <td style="width: 254px;" class="style6">Title:<br>
	<select name="title" id="title"  style="width: 105px" title="Select title">&nbsp;&nbsp;<span class="titlespanimgg"></span> <br> 
	<span id='titlespan' class=spn></span>

	<option>-----Select-----</option>
	<option>Mr</option>
	<option>Mrs</option>
	<option>Ms</option>
	<option>Dr</option>
	<option>Prof</option>
	<option>Rev</option>
	</select><br>
		<br>
		</td>
      <td style="width: 307px;" class="style6">
		<br>
		</td>
    </tr>
<tr> 
      <td style="height: 26px; " class="style6"><br>
		Prin. First Name:<br>
		<input type="text" name="principle_fname" title="Type Doctor's First Name" id='fname'  maxlength="15" style="width: 149px"><br>
		</td>
      <td style="height: 26px; " class="style6">Prin. Middle Name:<br>
		<input type="text" name="principle_mname" title="Type Doctor's Middle Name" id='principle_mname'  maxlength="15" style="width: 139px"></td>
    </tr>
<tr> 
      <td style="height: 26px; " colspan="2" class="style6">Prin. Last Name:<br>
		<input type="text" name="principle_lname" title="Type First Name Here" id='principle_lname'  maxlength="15" style="width: 316px"><span class="style6"><br>
		</span>
		</td>
    </tr>
<tr> 
      <td style="width: 277px" class="style19">
		<span id='emailspan' > 
		<span class="style6">Tel:<br>
		</span>
		<span id='mobilespan' class=spn ></span>
		<span class="style6">
		<input name="mobile" type="text" style="width: 166px" title="Type Phone Number Here" id="mobile"></span>&nbsp;</span></td>
      <td style="width: 307px"><span class="style16">
		<span class="style6">Fax:<br>
		</span>
		</span><span class="style6">
		<input name="fax" type="text" style="width: 136px" id="fax"></span></td>
    </tr>
<tr> 
      <td style="height: 44px; width: 277px" class="style6">Email:<br>
		<input name="email" type="text" style="width: 163px" title="Type Email here " id="email"><span class="style6"><br>
		</span>
		<br>
		</td>
      <td style="height: 44px; width: 307px" class="style6">&nbsp;</td>
    </tr>
							<tr>
	<td style="height: 80px" colspan="2">
		<span class="normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Address</span> <span class="normal">Line</span> <span class="normal">1:</span><br/>
		<input name="school_address_line1" type="text" style="width: 239px" id="school_address_line1ssline1" title="Type Address Here"/>
		 <span class="addressline1spanimgg"></span>
   		 <br/> <span id='addressline1span' class="spn"></span><br/>

		</td>
							</tr>
							<tr>
	<td style="height: 59px" colspan="2">
		<span class="style3">Address Line 2:<br/></span> 
		<input name="school_address_line2" type="text" style="width: 237px" id="school_address_line2" title="Type Address Here"/>
		 <span class="addressline2spanimgg"></span>
    	<br/> <span id='addressline2span' class="spn"></span><br/>&nbsp;&nbsp;</td>
							</tr>
							<tr>
	<td style="height: 20px">
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
	<td style="height: 20px">
			<span class="style3"><br />
		
		City:&nbsp;</span><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>
		<input name="school_city" type="text" style="width: 116px" id="school_city" title="Type City Here"/>
		<span class="cityspanimgg"></span><br/>

		     <span id='cityspan' class="spn"></span><br/>&nbsp;</td>
							</tr>
							<tr>
	<td>
		&nbsp;<span class="normal">Country:</span>&nbsp;<br />
		&nbsp;<input name="school_country" type="text" style="width: 117px" id="school_country" title="Type Country Here"/>
		<span class="countryspanimgg"></span><br/>
		     <span id='countryspan' class="spn"></span><br/>&nbsp;</td>
	<td>
				<span class="style3">Postal Code:<br/>
		</span>
				&nbsp;<input name="school_postalcode" type="text" style="width: 118px" id="school_postalcode" title="Type Postalcode Here"/>
		<span class="postalcodespanimgg"></span><br />
		     <span id='postalcodespan' class="spn"></span><br/>
&nbsp;</td>
							</tr>
<tr> 
      <td class="style1" style="height: 151px; " colspan="2">
   <div class="style20" style="width: 493px; height: 56px">
                    <label>
	<span class="style6">
	<input type='submit' name='Submit' value='Save' style="width: 99px" ></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </label>
	<span class="style6">
					<input type='submit' name='reset' value='Reset' style="width: 99px" ></span></div>
		</td>
    </tr>
    

  </table>
</form>  
</body>
</html>

