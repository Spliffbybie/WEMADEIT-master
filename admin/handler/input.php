<html>
<head>
<title>handler</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
<link  href="../../css/bluehighlight.css" rel="stylesheet" type="text/css" >

<style type="text/css">
.style1 {
	text-align: left;
}
.style2 {
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
.style16 {
	font-size: 11px;
}
</style>

<script type="text/javascript">
$empty="Empty Field";//error message for Empty field
$nameerr="Inavalid Name";//Error message for Name field
$titleerr="Choose Title";//Error message for Title field
$affiliationerr="Choose Affiliation";//Error message for affiliation field
$emailerr="Invalid Email";//Error message for Email field
$numbererr="Invalid Number";//Error message for Number field
$provinceerr="Choose Province"; //Error message for province field
</script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="valid.js"></script>

</head>

<body>
<div style="position: absolute; width: 459px; height: 891px; z-index: 1; left: 4px; top: 22px" id="layer1">
    <div id="main" style="height: 864px; width: 448px;">
        <div id="middle" style="height: 823px; width: 434px;">
            <div id="center-column" style="height: 789px; width: 412px;">
                <div class="top-bar" style="width: 383px">
                    <h1 style="width: 360px">NEW HANDLER</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a>/ New Handler</div>
                </div>

				<div style="position: absolute; width: 387px; height: 726px; z-index: 1; left: 31px; top: 66px" id="layer2">

<form action="save.php" method="post" name = "hundler_details" class="style6" style="width: 376px; height: 633px;">
  <table class="listing" cellpadding="0" cellspacing="0"  style="width: 99%; height: 693px">
      <tr class="spn"> 
      <th style="height: 38px; width: 314px;" class="full" colspan="2">
	
		ENTER HANDLER DETAILS
		</th>
    </tr>
		<tr>
     	<td class="style2"><span class="normal">Title</span><br/>
	<select name="title" id="title"  style="width: 111px">&nbsp;&nbsp;
	<option>Choose Title</option>
	<option>Mr</option>
	<option>Mrs</option>
	<option>Ms</option>
	<option>Dr</option>
	<option>Rev</option>
	</select>
	<span class="titlespanimgg"></span> <br/> 
	<span id='titlespan' class="spn"></span>
	</td>
	
      <td style="height: 61px; " class="style15">&nbsp;</td>
    	</tr>
	<tr> 
      <td style="height: 26px; " class="style6">
	<span class="style6">Name:<br></span>
	<input type="text" name="fname" title="Type First Name" id='fname' maxlength="15" style="width: 123px" >
	  <span class="fnamespanimgg"></span> <br>
	  <span id='fnamespan' class=spn></span>

	</td>
            
      <td style="height: 26px; width: 314px;" class="style6">
	<span class="style6">&nbsp;Middle Name:<br></span>
		<input type="text" name="mname" title="Type Middle Name" id='mname'  maxlength="15" style="width: 140px">
		   <span class="mnamespanimgg"></span><br> 
		   <span id='mnamespan' class="spn"></span>
		</td>
    </tr>
<tr> 
      <td style="height: 44px; width: 314px" class="style6" colspan="2">
      <span class="style6">Last Name:<br></span>
		<input type="text" name="lname" id ="lname" title="Enter the orphans Last Name" maxlength="15" style="width: 264px; height: 21px">
   			<span class="lnamespanimgg"></span><br>
   			<span id='lnamespan' class=spn></span>
		
		</td>
    </tr>
<tr> 
      <td style="height: 44px; width: 314px" class="style6" colspan="2">
		Affiliation:<br>
		<select name="affiliation" style="width: 196px" id="affiliation">
		<option >Choose Affiliation</option>
		<option >Found Orphan</option>
		<option >Family</option>
		<option >Friend</option>

		</select>
		   <span class="affiliationspanimgg"></span><br>
		    <span id='affiliationspan' class=spn></span>

		</td>
    </tr>
<tr> 
      <td style="height: 44px; width: 314px"><span class="style6">Mobile:<br></span>
		<input name="mobile" id="cellno" type="text" style="width: 145px"> 
  		<span class="cellnospanimgg"></span><br> 
  		<span id='cellnospan' class=spn></span>
		</td>
      <td style="height: 44px; width: 314px">
      <span class="style6">Email:<br></span>
		<input name="email" type="text" style="width: 163px" id="email" >
		 <span class="emailspanimgg"></span>
    	<br> <span id='emailspan' class=spn></span>
		</td>
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
      <td class="style1" colspan="2" style="height: 63px">
                <div class="style2" style="width: 319px">
	<span class="style6">
	<input type='submit' name='Submit' value='Save' style="width: 99px" ></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<input type='reset' name='reset' value='Reset' style="width: 99px" ></div>
		</td>
    </tr>
    

  </table>
  
</form>
            	</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

