<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" />
<link  href="../../css/bluehighlight.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$empty="Empty Field";//error message for Empty field
$nameerr="Inavalid Name";//Error message for Name field
$titleerr="Choose Title";//Error message for Gender field
$provinceerr="Choose Province";//Error message for Province Field
$relationerr="Choose Relation";//Error message for Gender field
$emailerr="Invalid Email";//Error message for Email field
$numbererr="Invalid Number";//Error message for Number field
$passworderr="Password Mismatch";//Error message for Password Field
$termserr="Required";//Error message for terms checkbox
</script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="valid.js"></script>

<style type="text/css">
.style2 {
	text-align: left;
}
.style3 {
	text-align: left;
	font-weight: normal;
}
.style6 {
	font-family: Arial, Helvetica, sans-serif;
}
</style>

</head>

<body>
<form action="save.php" method="post" name = "next of kin" style="width: 430px; height: 806px;">

<div style="position: absolute; width: 421px; height: 756px; z-index: 1; left: 11px; top: 23px" id="layer8">
    <div id="main" style="height: 679px; width:429px;">
        <div id="middle" style="height: 719px; width:417px;" class="style2">
            <div id="center-column" style="height: 701px; width: 358px;">
                <div class="top-bar" style="width: 344px">
                    <h1>New Relation</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /New 
						Relation</div>
                </div>

<table align="left" class="listing" cellpadding="0" cellspacing="0" style="width: 103%; height: 627px">
 
	<tr>
	<th colspan="2" class="full">ENTER NEXT OF KIN DETAILS HERE</th></tr>

	<tr>
	<td class="style2"><span class="normal">Title</span><br/>
	<select name="title" id="title"  style="width: 111px">&nbsp;&nbsp;
	<option>Choose Title</option>
	<option>Mr</option>
	<option>Mrs</option>
	<option>Ms</option>
	<option>Dr</option>
	</select>
	<span class="titlespanimgg"></span> <br/> 
	<span id='titlespan' class="spn"></span>
	</td>
	<td class="style2">&nbsp;</td></tr>

	<tr>
	<td class="style2"><span class="normal">Name</span>:<br/>
	<input type='text' name='fname' id='fname'  maxlength="15" style="width: 105px" />
	  	<span class="fnamespanimgg"></span> <br/>
	  	<span id='fnamespan' class="spn"></span>

	</td>
	<td class="style2"><span class="normal">Middle</span> <span class="normal">Name</span>:<br/>
	<input type='text' name='mname' id='mname'  maxlength="15" style="width: 106px; height: 21px;" />
	   <span class="mnamespanimgg"></span><br/>
	    <span id='mnamespan' class="spn"></span>
	</td></tr>

	<tr>
	<td colspan="2"> 
	Last Name:<br/>
	<input type='text' name='lname' id='lname'   maxlength="15" style="width: 250px; height: 17px;" />
  	 <span class="lnamespanimgg"></span><br/> 
  	 <span id='lnamespan' class="spn"></span>
  	 </td></tr>
	<tr>
	<td class="style2"><span class="normal">Relation</span>: 
	<br />
	<select name="relation" id="relation"  style="width: 111px">&nbsp;&nbsp;
	<option>Choose Relation</option>
	<option>Mother</option>
	<option>Father</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Uncle</option>
	<option>Aunt</option>
	</select>
	<span class="relationspanimgg"></span> <br/>
	<span id='relationspan' class="spn"></span>
	</td>
	<td class="style2">&nbsp;</td></tr>

	<tr>
	<td class="style2"  ><span class="normal">Telephone</span>:<br/>
	<input name="telephone" type="text" style="height: 18px; width: 105px;" id="telephone"/>
	<span class="telephonespanimgg"></span> <br/>
	<span id='telephonespan' class="spn"></span>

	</td>
	<td class="style2" ><span class="normal">Mobile</span>:<br/>
	<input name="mobile" type="text" style="height: 16px; width: 99px;" id="cellno"/>
	 <span class="cellnospanimgg"></span>
    <br/> <span id='cellnospan' class="spn"></span>
	</td></tr>

	<tr>
	<td class="style2"><span class="normal">Fax</span>:<br/>
	<input name="fax" type="text" style="height: 18px; width: 115px;" id="fax"/>
	 <span class="faxspanimgg"></span>
    <br/> <span id='faxspan' class="spn"></span>

	</td>
	<td class="style2"><span class="normal">Email</span>:<br/>
	<input name="email" type="text" style="width: 99px; height: 17px;" id="email"/>
	 <span class="emailspanimgg"></span>
    <br/> <span id='emailspan' class="spn"></span>
	</td></tr>

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
		<span class="style3">Address Line 2:<br/></span> 
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
			<span class="style3"><br />
		
		City:&nbsp;</span><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>
		<input name="city" type="text" style="width: 116px" id="city"/>
		<span class="cityspanimgg"></span><br/>

		     <span id='cityspan' class="spn"></span><br/>&nbsp;</td></tr>

	<tr>
	<td style="height: 28px">
		&nbsp;<span class="normal">Country:</span>&nbsp;<br />
		&nbsp;<input name="country" type="text" style="width: 117px" id="country"/>
		<span class="countryspanimgg"></span><br/>
		     <span id='countryspan' class="spn"></span><br/>&nbsp;</td>
	<td style="height: 28px">
				<span class="style3">Postal Code:<br/>
		</span>
				&nbsp;<input name="postalcode" type="text" style="width: 118px" id="postalcode"/>
		<span class="postalcodespanimgg"></span><br />
		     <span id='postalcodespan' class="spn"></span><br/>
&nbsp;</td></tr>

	<tr>
	<td colspan="2">
		<table border="0">
			<tr>
				<td style="width: 309px">
                <div class="select-bar" style="width: 313px">
                <span class="style2">
				<input type="submit" name="submit" value="Save" style="width: 90px" class="pop_but"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" name="reset" value="Reset" style="width: 83px"/></span></div>
            	</td>
			</tr>
		</table>
	</td></tr>
</table>

     </div>
            	<br>
				<br>
            </div>
        </div>
    </div>

</form>
</body>

</html>
