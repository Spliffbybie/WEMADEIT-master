<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Adopter&nbsp;&nbsp; Add Adopter Information</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" />
<link  href="../../css/bluehighlight.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="valid.js"></script>
<style type="text/css">
.style16 {
	font-size: 11px;
}
.style17 {
	text-align: left;
}
</style>

</head>
<script type="text/javascript">
$empty="Empty Field";//error message for Empty field
$nameerr="Inavalid Name";//Error message for Name field
/*$gendererr="Choose Gender";//Error message for Gender field
$emailerr="Invalid Email";//Error message for Email field
$numbererr="Invalid Number";//Error message for Number field*/
$passworderr="Password Mismatch";//Error message for Password Field
//$termserr="Required";//Error message for terms checkbox
</script>

<body>
<form action="save.php" method="post" name = "adopter_details" class="style6" style="width: 678px; height: 1129px;">

<div style="position: absolute; width: 595px; height: 1193px; z-index: 1; left: 9px; top: 22px" id="layer8">
    <div id="main" style="height: 1073px; width:500px;">
        <div id="middle" style="height: 1285px; width:692px;">
            <div id="center-column" style="height: 1107px; width: 656px;">
                <div class="top-bar">
                    <h1>New Adopter</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Add 
						Adopter</div>
                </div>
				<div style="position: absolute; width: 114px; height: 1030px; z-index: 1; left: 57px; top: 77px" id="layer9">
  <table class="listing" cellpadding="0" cellspacing="0" style="width: 454%; height: 932px">
  
    <tr class="spn"> 
      <th style="height: 52px; width: 314px;" class="full" colspan="2">
		ENTER ADOPTER DETAILS HERE</th>
    </tr>
<tr> 
      <td style="height: 41px; ">Title:<br>
	<select name="title" id="title"  style="width: 105px" title="Select title">&nbsp;&nbsp;
	<option>Choose Title</option>
	<option>Mr</option>
	<option>Mrs</option>
	<option>Ms</option>
	<option>Dr</option>
	<option>Prof</option>
	<option>Rev</option>
	</select>
	 <span class="titlespanimgg"></span><br>
   <span id='titlespan' class=spn></span></td>
      <td style="height: 41px; width: 314px;" class="style6">&nbsp;</td>
    </tr>
<tr> 
      <td style="height: 41px; ">Name:<br/>
		<input type="text" name="adopter_fname" title="Type First Name Here" id='adopter_fname'  maxlength="15" style="width: 133px"/>
		  	<span class="adopter_fnamespanimgg"></span> <br/><span id='adopter_fnamespan' class=spn></span>
		
		 </td>
      <td style="height: 41px; width: 314px;" class="style6">Middle Name:<br/>
		<input type="text" name="adopter_mname" title="Type Middle Name Here" id='adopter_mname'  maxlength="15" style="width: 151px"/><br>
		  	<span class="adopter_mnamespanimgg"></span> <br/><span id='adopter_mnamespan' class=spn></span>

		</td>
    </tr>
<tr> 
      <td style="height: 26px; width: 314px;" colspan="2" class="style6">Last 
		Name:<br/>
		<input type="text" name="adopter_lname" id="adopter_lname" title="Type Last Name Here" maxlength="15" style="width: 230px; height: 21px"/>
		  	<span class="adopter_lnamespanimgg"></span> <br/><span id='adopter_lnamespan' class=spn></span>

		</td>
    </tr>
<tr> 
      <td style="height: 26px; "><span class="style6">Tel:<br/>
		<input name="telephone" type="text" style="width: 156px"/></span> <br/>
		  <span class="telephonespanimgg"></span><br/> <span id='telephonespan' class=spn></span>

		</td>
      <td style="height: 26px; width: 314px;" class="style6">&nbsp;</td>
    </tr>
<tr> 
      <td style="height: 44px; "><span class="style6">Mobile:</span><br/>
		<input name="mobile" type="text" style="width: 166px" title="Type Phone Number Here"/> 
		  <span class="mobilespanimgg"></span><br/> <span id='mobilespan' class=spn></span>

		</td>
      <td style="height: 44px; width: 314px"><span class="style6">Email:</span><br/>
		<input name="email" id="email" type="text" style="width: 163px" title="Type Email here "/>
		<span class="emailspanimgg"></span>
   		 <br/> <span id='emailspan' class=spn></span>
		</td>
    </tr>
	<tr>
	<td style="height: 26px; width: 314px;" colspan="2" >
	
		Address Line 1:<br/>
		<input name="adopter_addressline1" type="text" style="width: 239px" id="adopter_addressline1"/>
		 <span class="addressline1spanimgg"></span>
   		 <br/> <span id='addressline1span' class="spn"></span><br/>

		</td>
	</tr>
	<tr>
	<td style="height: 80px" colspan="2">
		Address Line 2:<span class="style3"><br />
		<br/></span> 
		<input name="adopter_addressline2" type="text" style="width: 237px" id="adopter_addressline2"/>
		 <span class="addressline2spanimgg"></span>
    	<br/> <span id='addressline2span' class="spn"></span><br/>&nbsp;&nbsp;</td>
	</tr>
	<tr>
	<td style="height: 59px; ">
			<span class="normal">Province:&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
		
		<span class="style6">
		<select name="adopter_province" style="width: 114px" id="adopter_province" title="Choose a Province">
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
			<span class="style3"><br />
		
			City:&nbsp;</span><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>
		<input name="adopter_city" type="text" style="width: 116px" id="adopter_city"/>
		<span class="cityspanimgg"></span><br/>
		 <span id='cityspan' class="spn"></span><br/>&nbsp;</td>
	</tr>
	<tr>
	<td style="height: 28px; ">
		&nbsp;<span class="normal">Country:</span>&nbsp;<br />
		&nbsp;<input name="adopter_country" type="text" style="width: 117px" id="adopter_country"/>
		<span class="countryspanimgg"></span><br/>
		     <span id='countryspan' class="spn"></span><br/>&nbsp;</td>
	
	<td style="height: 28px">
				<span class="style16">Postal Code:<br/>
		</span>
				&nbsp;<input name="adopter_postalcode" type="text" style="width: 118px" id="adopter_postalcode"/>
		<span class="postalcodespanimgg"></span><br />
		     <span id='postalcodespan' class="spn"></span><br/>
				&nbsp;</td>
	</tr>
    <tr> 
    <th colspan="2" class="full"> Spouse&nbsp;&nbsp;</th>
    </tr>
    <tr> 
    <td style="height: 52px; "> Name:<br>
	<input type="text" name="spouse_fname" title="Type First Name Here" id='spouse_fname'  maxlength="15" style="width: 154px"/>
	<span class="spouse_fnamespanimgg"></span>
    <br/> <span id='spouse_fnamespan' class=spn></span>
	</td>
    <td style="height: 52px" class="style6"> Middle Name:<br>
		<input type="text" name="spouse_mname" title="Type Middle Name Here" id='spouse_mname'  maxlength="15" style="width: 151px"/>
		<span class="spouse_mnamespanimgg"></span>
   			 <br/> <span id='spouse_mnamespan' class=spn></span>
		</td>
    </tr>
    <tr> 
    <td style="height: 26px; width: 314px;" colspan="2" class="style6"> Last 
	Name:<br>
		<input type="text" name="spouse_lname" title="Type Last Name Here" maxlength="15" style="width: 220px; height: 21px" id="spouse_lname"/>
		<span class="spouse_lnamespanimgg"></span>
    <br/> <span id='spouse_lnamespan' class=spn></span>
		</td>
    </tr>
    <tr>
    <td style="height: 173px; " class="style17"><span class="style6">Note:</span><br>
	<br>
	<textarea name="note" style="width: 225px; height: 108px"  title="Enter Notes Here"  rows="1"></textarea></span>
	 <span class="notespanimgg"></span>
    <br> <span id='notespan' class=spn></span>
	</td>
    <td style="height: 173px" class="style17">&nbsp;</td>
    </tr>
<tr> 
      <td colspan="2" class="style1">
                <div class="select-bar" style="width: 612px">
		<span class="style6">
	<input type='submit' name='Submit' value='Save' style="width: 99px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='submit' name='reset' value='Reset' style="width: 99px" /></span></div>
		<span class="style6">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</span></td>
    </tr>
    

  </table>
  
        		</div>
  
        </div>
            	<br>
				<br>
            </div>
        </div>
    </div>

</form>
</body>

</html>

