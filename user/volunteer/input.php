<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" >

<head >
<title></title>

<style type="text/css">
.style3 {
	font-size: medium;
}
.style4 {
	font-size: small;
}
.style5 {
	font-size: x-small;
}
.style6 {
	font-size: small;
	font-family: Arial, Helvetica, sans-serif;
}
.style7 {
	font-family: Arial, Helvetica, sans-serif;
}
.style8 {
	font-size: medium;
	text-align: left;
}
.style9 {
	font-size: medium;
	text-align: right;
}
.style2 {
	clear: both;
	border-top: 2px solid #f70;
	border-bottom: 2px solid #f70;
	padding: 5px 0 3px 0;
	margin: 0 0 17px 0;
	text-align: left;
}
.style10 {
	text-align: left;
}
.style11 {
	font-size: 15px;
}
.style12 {
	font-weight: normal;
	font-size: 15px;
}
</style>

</head>
<script type="text/javascript" src="../../js/jquery1.js" ></script>
	<script type="text/javascript" src="../../js/valid1.js"></script>
	

<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
<link href="../../css/jquery-bubble-popup-v3.css" rel="stylesheet" type="text/css" >
	<script src="../../jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="pop_up.js" type="text/javascript"></script>
    <script src="../../js/jquery-bubble-popup-v3.min.js" type="text/javascript"></script>




<script type="text/javascript">
<!--
$(document).ready(function(){

		$('.button').CreateBubblePopup({

									position : 'top',
									align	 : 'center',
									
									innerHtml: 'Enter First Name Here',

									innerHtmlStyle: {
														color:'Black', 
														'text-align':'center'
													},

									themeName: 'orange',
									themePath: '../../jquerybubblepopup-themes'
								 
								});
});
//-->


<script type="text/javascript">
$empty="Empty Field";//error message for Empty field
$nameerr="Inavalid Name";//Error message for Name field
/*$gendererr="Choose Gender";//Error message for Gender field
$emailerr="Invalid Email";//Error message for Email field
$numbererr="Invalid Number";//Error message for Number field*/
$passworderr="Password Mismatch";//Error message for Password Field
$termserr="Required";//Error message for terms checkbox
</script>


<body >
	
	
<form name='addorphan' method="post" action="save.php" style="height: 1295px; width: 524px"> 

<div style="position: absolute; width: 448px; height: 532px; z-index: 1; left: 5px; top: 39px" id="layer1">
    <div id="main" style="height: 1080px; width: 492px;">
        <div id="middle" style="height: 1080px; width: 485px;">
            <div id="center-column" style="height: 1060px; width: 440px;">
                <div class="top-bar" style="width: 450px">
                    <h1 style="width: 434px">NEW ORPHAN</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /New 
						Orphan</div>
                </div>
				<table align="left"class="listing" cellpadding="0" cellspacing="0"style="width: 30%; height: 784px">
 
  <tr><th colspan=2 class="full" style="height: 52px">
		Volunteer Details
	</th></tr>
  <tr> 
	<td class="style9" style="height: 75px"> 
		<span class="style11">Title:</span><br>
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
	<td class="style3" style="height: 75px; width: 262px;"> 
	<span class="style7"><span class="style11">ID:</span></span><span class="style11"><br >
	</span>&nbsp;<input name="national_id" type="text" id="national_id" title="Type Identification Number Here"  >


	
	</td></tr>
  <tr> 
	<td class="style9" style="height: 58px"> 
	<span class="style5">Name:<br>
	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='fname' id='fname'  maxlength="15" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td> 
	<td class="style3" style="height: 58px; width: 262px;"> 
	<span class="style5">Middle Name:</span><br />
	<input type='text' name='mname' id='mname'  maxlength="15" style="width: 136px" ></td></tr>
  <tr> 
	<td class="style8" style="height: 46px" colspan="2"> 
	<span class="style5">Last Name:</span><br>
	&nbsp;<input type='text' name='lname' id='lname'  maxlength="15" style="width: 202px; height: 20px;" title="Type Last Name Here"  ></td></tr>
  <tr> 
	<td style="height: 8px; "> 
		&nbsp;<span class="style11">Skills</span>:&nbsp;<br>
&nbsp;<textarea name="skill" style="width: 235px; height: 80px" rows="1"></textarea></td>  
	<td class="style8" style="height: 8px; "> 
	&nbsp;</td> </tr>
  <tr> 
	<td class="style6" style="height: 24px; "> 
		<span class="style5">&nbsp;Telephone:<br>
&nbsp;<input name="mobile" type="text" onclick=" validatenum(data)" >
	</span><span id='racespan' class=spn>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
	</td>  
	<td class="style6" style="height: 24px; "> 
		<span class="style5">&nbsp;Email:</span><br>
	&nbsp;<input type='text' name='email' id='email'  maxlength="15" onclick="isValidEmail(email)" ></td> </tr>
	<tr>
	<td style="height: 80px" colspan="2">
		<span class="normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style11">
		Address</span></span> <span class="style12">Line</span> 
		<span class="style12">1:</span><br/>
		<input name="addressline1" type="text" style="width: 239px" id="addressline1" title="Type Address Here"/>
		 <span class="addressline1spanimgg"></span>
   		 <br/> <span id='addressline1span' class="spn"></span><br/>

		</td>
	</tr>
	<tr>
	<td style="height: 59px" colspan="2" class="style10">
		<span>Address Line 2:<br/></span> 
		<input name="addressline2" type="text" style="width: 237px" id="addressline2" title="Type Address Here"/>
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
			<span><br />
		
		City:<br>
			</span>
		<input name="city" type="text" style="width: 116px" id="city" title="Type City Here"/>
		<span class="cityspanimgg"></span><br/>

		     <span id='cityspan' class="spn"></span><br/>&nbsp;</td>
	</tr>
	<tr>
	<td>
		&nbsp;<span class="normal">Country:</span>&nbsp;<br />
		&nbsp;<input name="country" type="text" style="width: 117px" id="country" title="Type Country Here"/>
		<span class="countryspanimgg"></span><br/>
		     <span id='countryspan' class="spn"></span><br/>&nbsp;</td>
	<td>
				<span>Postal Code:<br/>
		</span>
				&nbsp;<input name="postalcode" type="text" style="width: 118px" id="postalcode" title="Type Postalcode Here"/>
		<span class="postalcodespanimgg"></span><br />
		     <span id='postalcodespan' class="spn"></span><br/>
&nbsp;</td>
	</tr>
  <tr><td colspan='2' class="style4" style="height: 63px">
                <div class="style2" style="width: 319px">
	<span class="style6">
	<input type='submit' name='Submit' value='Save' style="width: 99px" ></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<input type='reset' name='reset0' value='Reset' style="width: 99px" ></div>
  </td> </tr>
</table>




            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>
