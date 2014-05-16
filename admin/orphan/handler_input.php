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
</style>

<script type="text/javascript">
$empty="Empty Field";//error message for Empty field
$nameerr="Inavalid Name";//Error message for Name field
$titleerr="Choose Title";//Error message for Gender field
$affiliationerr="Choose Affiliation";//Error message for Gender field
$emailerr="Invalid Email";//Error message for Email field
$numbererr="Invalid Number";//Error message for Number field
//$passworderr="Password Mismatch";//Error message for Password Field
//$termserr="Required";//Error message for terms checkbox
</script>
<script type="text/javascript" src="../handler/jquery.js"></script>
<script type="text/javascript" src="../handler/valid.js"></script>

</head>

<body>
<div style="position: absolute; width: 514px; height: 891px; z-index: 1; left: 4px; top: 22px" id="layer1">
    <div id="main" style="height: 864px; width: 496px;">
        <div id="middle" style="height: 823px; width: 450px;">
            <div id="center-column" style="height: 789px; width: 412px;">
                <div class="top-bar" style="width: 383px">
                    <h1 style="width: 360px">NEW HANDLER</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a>/ New Handler</div>
                </div>

				<div style="position: absolute; width: 387px; height: 726px; z-index: 1; left: 31px; top: 66px" id="layer2">

<form action="handler_save.php" method="post" name = "hundler_details" class="style6" style="width: 376px; height: 633px;">
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
	<input type="text" name="fname" title="Type First Name" id='fname' maxlength="15" style="width: 133px" >
	  <span class="fnamespanimgg"></span> <br>
	  <span id='fnamespan' class=spn></span>

	</td>
            
      <td style="height: 26px; width: 314px;" class="style6">
	<span class="style6">&nbsp;Middle Name:<br></span>
		<input type="text" name="mname" title="Type Middle Name" id='mname'  maxlength="15" style="width: 151px">
		   <span class="mnamespanimgg"></span><br> 
		   <span id='mnamespan' class="spn"></span>
		</td>
    </tr>
<tr> 
      <td style="height: 44px; width: 314px" class="style6" colspan="2">
      <span class="style6">Last Name:<br></span>
		<input type="text" name="lname" id ="lname" title="Enter the orphans Last Name" maxlength="15" style="width: 290px; height: 21px">
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
		<option >Social worker</option>
		<option >Friend</option>

		</select>
		   <span class="affiliationspanimgg"></span><br>
		    <span id='affiliationspan' class=spn></span>

		</td>
    </tr>
<tr> 
      <td style="height: 44px; width: 314px"><span class="style6">Mobile:<br></span>
		<input name="mobile" id="cellno" type="text" style="width: 166px"> 
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
      <td style="width: 314px; height: 248px" colspan="2">
		<fieldset name="Group1" style="height: 233px; width: 357px;">
		<legend style="width: 58px" class="style6">Address</legend>
		<span class="style6">Address Line 1:<br>
		<input name="addressline1" type="text" style="width: 275px" id="addressline1"></span> 
		 <span class="addressline1spanimgg"></span>
    	<br> <span id='addresslin1span' class=spn></span>		
		<span class="style6"><br>
		Address Line 2:<br>
		<input name="addressline2" type="text" style="width: 271px" id="addressline2"></span> <span id='boxspan' class=spn > </span>
		 <span class="addressline2spanimgg"></span>
    	<br> <span id='addressline2span' class=spn></span>
		
		<span class="style6"><br>
		City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Postal Code:<br></span>
		<input name="city" type="text" style="width: 122px" id="city">&nbsp;&nbsp;
		<span class="cityspanimgg"></span>
    	 <span id='cityspan' class=spn></span>

		<input name="postalcode" type="text" style="width: 104px" id="postalcode">
		 <span class="postalcodespanimgg"></span>
    	 <span id='postalcodespan' class=spn></span>
		
		<span class="style6"><br>
		Province:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Country:<br>
		<input name="province" type="text" style="width: 102px" id="province">&nbsp;&nbsp;
		 <span class="provincespanimgg"></span>
    	<span id='provincespan' class=spn></span>

		<input name="country" type="text" style="width: 98px" id="country">
		 <span class="countryspanimgg"></span>
    	 <span id='countryspan' class=spn></span>
		
		</span></fieldset></td>
    </tr>
<tr> 
      <td class="style1" colspan="2" style="height: 63px">
                <div class="style2" style="width: 319px">
	<span class="style6">
	<input type='submit' name='Submit' value='Save' style="width: 99px" ></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<input type='reset' name='reset0' value='Reset' style="width: 99px" ></div>
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

