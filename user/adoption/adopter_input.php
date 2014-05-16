<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../js/validadoption.js"></script>
<script type="text/javascript" src="../../js/jquery1.js" ></script>
<link rel="stylesheet" href="../../css/style1.css" type="text/css" />

<style type="text/css">
.style16 {
	font-family: Arial, Helvetica, sans-serif;
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
<form action="adopter_save.php" method="post" name = "adopter_details" class="style6" style="width: 376px; height: 633px;">

<div style="position: absolute; width: 686px; height: 1079px; z-index: 1; left: 9px; top: 22px" id="layer8">
    <div id="main" style="height: 1073px; width:500px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 1036px; width: 610px;">
                <div class="top-bar">
                    <h1>New Adopter</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Add 
						Adopter</div>
                </div>
				<div style="position: absolute; width: 608px; height: 845px; z-index: 1; left: 49px; top: 65px" id="layer9">
  <table class="listing" cellpadding="0" cellspacing="0" style="width: 101%; height: 932px">
  <!-- <tr><td>Username </td> <td> 
	<input type='text' name='username' id='username' class="pop_txt"  maxlength="15" >&nbsp;&nbsp;<span class="usernamespanimgg"></span> <br> <span id='usernamespan' class=spn></span></td></tr>
  -->
 
    <tr class="spn"> 
      <th style="height: 52px; width: 314px;" class="full" colspan="2">
		ENTER ADOPTER DETAILS HERE</th>
    </tr>
<tr> 
      <td style="height: 41px; width: 111px;">Title:<br>
	<select name="title" id="title"  style="width: 105px" title="Select title">&nbsp;&nbsp;<span class="titlespanimgg"></span> <br> 
	<span id='titlespan' class=spn></span>

	<option>-----Select-----</option>
	<option>Mr</option>
	<option>Mrs</option>
	<option>Ms</option>
	<option>Dr</option>
	<option>Prof</option>
	<option>Rev</option>
	</select></td>
      <td style="height: 41px; width: 314px;" class="style6">&nbsp;</td>
    </tr>
<tr> 
      <td style="height: 41px; width: 111px;"><span class="style6">Name:<br>
		<input type="text" name="adopter_fname" title="Type First Name Here" id='adopter_fname'  maxlength="15" style="width: 133px">&nbsp;&nbsp;&nbsp;&nbsp;</span><span id='fnamespan' class=style17 > </span>
		<span class="style6">&nbsp;&nbsp; </span> </td>
      <td style="height: 41px; width: 314px;" class="style6">Middle Name:<br>
		<input type="text" name="adopter_mname" title="Type Middle Name Here" id='adopter_mname'  maxlength="15" style="width: 151px"><br>
		</td>
    </tr>
<tr> 
      <td style="height: 26px; width: 314px;" colspan="2" class="style6">Last Name:<br>
		<input type="text" name="adopter_lname" title="Type Last Name Here" maxlength="15" style="width: 289px; height: 21px"></td>
    </tr>
<tr> 
      <td style="height: 26px; width: 314px;"><span class="style6">Tel:<br>
		<input name="telephone" type="text" style="width: 156px"></span> <br>
		</td>
      <td style="height: 26px; width: 314px;" class="style6">&nbsp;</td>
    </tr>
<tr> 
      <td style="height: 44px; width: 111px"><span class="style6">Mobile:<br>
		<input name="mobile" type="text" style="width: 166px" title="Type Phone Number Here"></span> <span id='mobilespan' class=spn > </span>
		<span class="style6"><br>
		</span>
		</td>
      <td style="height: 44px; width: 314px"><span class="style6">Email:<br>
		<input name="email" type="text" style="width: 163px" title="Type Email here "><span id='emailspan' class=style17 > </span>
		<br>
		<br>
		</span>
		</td>
    </tr>
<tr> 
      <td style="width: 314px; height: 248px" colspan="2">
		<fieldset name="Group1" style="height: 207px; width: 329px;">
		<legend style="width: 58px" class="style16">Address</legend>
		<div class="style15">
			<span class="style16">Address Line 1:</span><span class="style6"><br>
			<input name="adopter_addressline1" type="text" style="width: 275px"></span>
			<span id="streetaddressspan" class="spn"></span>
			<span class="style6"><br>
			</span>
			Address L<span class="style16">ine 2:</span><span class="style6"><br>
			<input name="adopter_addressline2" type="text" style="width: 271px"></span>
			<span id="boxspan" class="spn"></span><span class="style6"><br>
			</span>
			<span class="style16">City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postal 
			Code:</span><span class="style6"><br>
			<input name="adopter_city" type="text">&nbsp;&nbsp;&nbsp;</span><span id="cityspan" class="style17">
			</span><span class="style6">
			<input name="adopter_postalcode" type="text"></span><span id="postalcodespan" class="style17">
			</span><span class="style16">Province:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Country:</span><span class="style6"><br>
			<input name="adopter_province" type="text">&nbsp;&nbsp;&nbsp;</span><span id="provincespan" class="style17">
			</span><span class="style6">
			<input name="adopter_country" type="text"></span><span id="countryspan" class="style17">
			</span></div>
		</fieldset></td>
    </tr>
    <tr> 
    <th colspan="2" class="full"> Spouse&nbsp;&nbsp;</th>
    </tr>
    <tr> 
    <td style="height: 52px; width: 111px;" class="style6"> Name:<br>
	<input type="text" name="spouse_fname" title="Type First Name Here" id='spouse_fname'  maxlength="15" style="width: 154px"/></td>
    <td style="height: 52px" class="style6"> Middle Name:<br>
		<input type="text" name="spouse_mname" title="Type Middle Name Here" id='spouse_mname'  maxlength="15" style="width: 151px"/></td>
    </tr>
    <tr> 
    <td style="height: 65px" colspan="2" class="style6"> Last Name:<br>
		<input type="text" name="spouse_lname" title="Type Last Name Here" maxlength="15" style="width: 312px; height: 21px" id="spouse_lname"/></td>
    </tr>
    <tr>
    <td colspan="2" style="height: 173px"><span class="style6">Note:<br>
	<br>
	<textarea name="note" style="width: 304px; height: 108px" dir="<?php echo $note;?>" title="Enter Notes Here" tabindex="<?php echo $note;?>" rows="1" cols="20"></textarea></span><span id='notespan' class=spn > 
	</span></td>
    </tr>
<tr> 
      <td colspan="2" class="style1">
                <div class="select-bar" style="width: 612px">
		<span class="style6">
	<input type='submit' name='Submit' value='Save' style="width: 99px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='submit' name='reset' value='Reset' style="width: 99px" /></span></div>
		<span class="style6">&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

