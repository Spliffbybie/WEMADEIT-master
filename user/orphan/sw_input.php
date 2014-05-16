<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Social Worker</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" />
<link  href="../../css/bluehighlight.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$empty="Empty Field";//error message for Empty field
$nameerr="Inavalid Name";//Error message for Name field
$titleerr="Choose Title";//Error message for Title field
$gendererr="Choose Gender";//Error message for Gender field
$emailerr="Invalid Email";//Error message for Email field
$numbererr="Invalid Number";//Error message for Number field
//$passworderr="Password Mismatch";//Error message for Password Field
//$termserr="Required";//Error message for terms checkbox
</script>
<script type="text/javascript" src="../social_worker/jquery.js"></script>
<script type="text/javascript" src="../social_worker/valid.js"></script>

</head>

<body>

<div style="position: absolute; width: 540px; height: 858px; z-index: 1; left: 10px; top: 38px" id="layer8">
    <div id="main" style="height: 903px; width:519px;">
        <div id="middle" style="height: 890px; width:505px;">
            <div id="center-column" style="height: 875px; width: 488px;">
                <div class="top-bar" style="width: 412px">
                    <h1>New Social Worker</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /New 
						Social Worker<div style="position: absolute; width: 418px; height: 805px; z-index: 1; left: 48px; top: 66px" id="layer9">
<form action="sw_save.php" method="post" name = "socialworker" style="width: 411px; height: 660px;">
  <table class="listing" cellpadding="0" cellspacing="0"  border="0" style="width: 100%; height: 760px">
  
    <tbody class="1">
  
    <tr class="spn"> 
      <th style="height: 38px; " class="full"  colspan="2">
		
			ENTER SOCIAL WORKER DETAILS HERE
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
	</select>
	<span class="titlespanimgg"></span> <br/> 
	<span id='titlespan' class="spn"></span>
	</td>
    	<td></td>
    </tr>
<tr> 
      <td style="height: 61px; width: 469px;" class="style15">
		<span class="style16">Name:</span><br>
		<input type="text" name="social_worker_fname" id='social_worker_fname'  maxlength="15" style="width: 135px; height: 22px;" title="Type First Name Here" />
		 	<span class="social_worker_fnamespanimgg"></span> <br>
	  	<span id='social_worker_fnamespan' class=spn></span>

		</td>
      <td style="height: 61px; " class="style15"><span class="style16">Middle Name:</span><br>
		<input type="text" name="social_worker_mname" id='social_worker_mname'  maxlength="15" style="width: 156px; height: 22px;" title="Type Middle Name Here" >
		<span class="social_worker_mnamespanimgg"></span> <br>
	  	<span id='social_worker_mnamespan' class=spn></span>

		</td>
    </tr>
<tr> 
      <td style="height: 26px; " class="style15" colspan="2">
		<span class="style16">Last Name:</span><br>
		<input type="text" name="social_worker_lname" maxlength="15" style="width: 315px; height: 21px" title="Type Last Name Here" id="social_worker_lname"/>
		
		<span class="social_worker_lnamespanimgg"></span> <br>
	  	<span id='social_worker_lnamespan' class=spn></span>

		</td>
    </tr>
<tr> 
     <td style="height: 58px; text-align: left;"> 
	<span class="style6">Gender:</span><b><br/>
	<select name="gender" id="gender"  style="width: 111px" title="Choose  Gender" class="required">
  <option>Choose Gender</option>
	<option>female</option>
	<option>male</option>
	</select></b>
	<span class="genderspanimgg"></span><br/>
   <span id='genderspan' class="spn"></span>
   </td> 
    	<td></td>
    </tr>
<tr> 
      <td style="height: 59px; width: 469px;"><span class="style16">Mobile:</span><br>
		<input name="mobile" type="text" style="width: 138px" title="Type Mobile Number" id="cellno"/>
		<span class="cellnospanimgg"></span>
    <br/> <span id='cellnospan' class="spn"></span>
 </td>
      <td style="height: 59px"><span class="style16">Tel:<br>
		</span>
		<input name="telephone" type="text" style="width: 162px" title="Type Telephone Number Here" id="cellno"/>
		<span class="cellnospanimgg"></span>
    <br/> <span id='cellnospan' class="spn"></span>
</td>
    </tr>
<tr> 
      <td style="height: 44px; width: 469px;"><span class="style16">Fax:</span><br />
		<input name="fax" type="text" style="width: 136px" title="Type Fax Number Here" id="fax"/><br/>
		</td>
      <td style="height: 44px; "><span class="style16">Email:</span><br>
		<input name="email" type="text" style="width: 159px" title="Type Email Address Here" id="email"/>
		 <span class="emailspanimgg"></span>
    		<br/> <span id='emailspan' class="spn"></span>
		</td>
    </tr>
<tr> 
      <td style="height: 248px" class="style2" colspan="2">
		<fieldset name="Group1" style="height: 207px; width: 329px;">
		<legend style="width: 58px" class="style16">Address</legend>
		<div class="style2" style="width: 327px; height: 201px">
		<span class="style16">&nbsp;<span class="normal">Address Line 1:</span></span><br/>
		<input name="social_worker_addressline1" type="text" style="width: 275px" title="Type Street Address Here" id="social_worker_addressline1"/> 
		<span class="social_worker_addressline1spanimgg"></span> <br>
	  	<span id='social_worker_addressline1span' class="spn"></span>
<br />
		<span class="normal">
		<span class="style16">Address Line 2:</span><br/>
		</span>
		<input name="social_worker_addressline2" type="text" style="width: 271px" title="Type P.o Box Here" id="social_worker_addressline2"/> 
		
		<span class="social_worker_addressline2spanimgg"></span> <br>
	  	<span id='social_worker_addressline2span' class="spn"></span>
<br/>
		<span class="normal">
		<span class="style16">City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postal Code:</span><br/>
		</span>
		<input name="social_worker_city" type="text" title="Type City Here" id="social_worker_city"/>&nbsp;&nbsp;&nbsp;
		<span class="social_worker_cityspanimgg"></span> <br>
	  	<span id='social_worker_cityspan' class="spn"></span>

<br />
		<input name="social_worker_postalcode" type="text" title="Type Postal Code Here" id="social_worker_postalcode"/>
		<span class="social_worker_postalcodespanimgg"></span> <br>
	  	<span id='social_worker_postalcodespan' class="spn"></span>
<br />
				
		<span class="normal"><span class="style16">Province:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Country:</span><br/>
		</span>
		<input name="social_worker_province" type="text" title="Type Province Here" id="social_worker_province"/>&nbsp;&nbsp;&nbsp;
		<span class="social_worker_provincespanimgg"></span> <br>
	  	<span id='social_worker_provincespan' class="spn"></span>
<br />
		<input name="social_worker_country" type="text" title="Type Country Here" id="social_worker_country"/>
		<span class="social_worker_countryspanimgg"></span> <br>
	  	<span id='social_worker_countryspan' class="spn"></span>

		</div>
		</fieldset><br/>
		</td>
    </tr>
    <tr>
    	<td colspan="2">
                
                <div class="select-bar" style="width: 313px">
                				<input type="submit" name="submit" value="Save" style="width: 90px" class="pop_but"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" name="reset" value="Reset" style="width: 83px"/></div>
		</td>
		</tr>
    </tbody>

  </table>
 </form> 
     					</div>
					</div>
                </div>
     </div>
            	<br>
				<br>
            </div>
        </div>
    </div>


</body>

</html>

