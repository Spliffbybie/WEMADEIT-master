<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['hospital_name']))
{
	//here the id that we post is the same id that we get from url
	//id indicates the id of this data which we are editing
	//id is unique and a particular id is associated with particular data	
	$id = $_GET['ID'];
	
	$hospital_name=$_POST['hospital_name'];
	$doctor_fname=$_POST['doctor_fname'];
	$doctor_mname=$_POST['doctor_mname'];
	$doctor_lname=$_POST['doctor_lname'];
	$telephone=$_POST['telephone'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$hospital_addressline1=$_POST['addressline1'];
	$hospital_addressline2=$_POST['addressline2'];
	$hospital_city =$_POST['city'];
	$hospital_province=$_POST['province'];
	$hospital_postalcode=$_POST['postalcode'];
	$hospital_country=$_POST['country'];

			
	//updating the table
	$result=mysql_query("UPDATE hospital SET hospital_name='$hospital_name',doctor_fname='$doctor_fname',
	doctor_mname='$doctor_mname',doctor_lname='$doctor_lname',telephone='$telephone',fax='$fax',
	email='$email',hospital_addressline1='$hospital_addressline1',hospital_addressline2='$hospital_addressline2',
	hospital_city='$hospital_city',hospital_province='$hospital_province',hospital_postalcode='$hospital_postalcode',hospital_country='$hospital_country'
	WHERE hospital_id=$id");
		
	echo "<font color='green'>Hospital Updated Successfully";

	header ("refresh:5;url=../placeholder1.htm");		 
		
		
}
	
?>
<?php
//for displaying data of this particular data

//getting id from url
$id = $_GET['hospital_id'];

//selecting data associated with this particular id
$result=mysql_query("select * from hospital where hospital_id=$id");

while($res=mysql_fetch_array($result))
{
	$hospital_name=$res['hospital_name'];
	$doctor_fname=$res['doctor_fname'];
	$doctor_mname=$res['doctor_mname'];
	$doctor_lname=$res['doctor_lname'];
	$telephone=$res['telephone'];
	$fax=$res['fax'];
	$email=$res['email'];
	$hospital_addressline1=$res['hospital_addressline1'];
	$hospital_addressline2=$res['hospital_addressline2'];
	$hospital_city =$res['hospital_city'];
	$hospital_province=$res['hospital_province'];
	$hospital_postalcode=$res['hospital_postalcode'];
	$hospital_country=$res['hospital_country'];

}
?>
<html>
<head ><title>Edit </title>
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

<style type="text/css">
.style1 {
	font-size: 13px;
	color: maroon;
	text-align: center;
}
.style6 {
	text-align: center;
}
.spn
{
 color:red;
 
}
.style3 {
	font-size: medium;
}
.style16 {
	font-size: small;
}
</style>
</head>
<body>
<form name='registerform' method="post" action="edit.php?ID=<?php echo $_GET['hospital_id'];?>"  style="height: 885px; width: 582px">  
<div style="position: absolute; width: 547px; height: 859px; z-index: 1; left: 5px; top: 14px" id="layer1">
    <div id="main" style="height: 454px; width: 558px;">
        <div id="middle" style="height: 443px; width: 554px;">
            <div id="center-column" style="height: 436px; width: 519px;">
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
	<input type='text' name='hospital_name' id='hospital_name' class="style6"  maxlength="15" style="width: 145px" value="<?php echo $hospital_name;?>" ><span class="hospital_namespanimgg"></span>  
	<span id='hospital_namespan' class=spn></span></td>
                        </tr>
<tr> 
      <td style="width: 254px;" class="style6">Dr. First Name:<br>
		<input type="text" name="doctor_fname" title="Type Doctor's First Name" id='fname'  maxlength="15" style="width: 149px" value="<?php echo $doctor_fname;?>"><br>
		<br>
		</td>
      <td style="width: 307px;" class="style6">Dr. Middle Name:<br>
		<input type="text" name="doctor_mname" title="Type Doctor's Middle Name" id='mname'  maxlength="15" style="width: 139px" value="<?php echo $doctor_mname;?>"><br>
		<br>
		</td>
    </tr>
<tr> 
      <td style="height: 26px; " colspan="2" class="style6">Dr. Last Name:<br>
		<input type="text" name="doctor_lname" title="Type First Name Here" id='lname'  maxlength="15" style="width: 316px" value="<?php echo $doctor_lname;?>"><br>
		</td>
    </tr>
<tr> 
      <td style="width: 277px" class="style19">
		<span class="style6">Tel:<br>
		</span>
		<span id='mobilespan' class=spn ></span>
		<span class="style6">
		<input name="telephone" type="text" style="width: 166px" title="Type Phone Number Here" value="<?php echo $telephone;?>"><br>
		</span>
		</td>
      <td style="width: 307px" class="style19"><span class="style16">
		<span class="style6">Fax:<br>
		</span>
		</span><span class="style6">
		<input name="fax" type="text" style="width: 136px" value="<?php echo $fax;?>"><br>
		<br>
		</span>
		<span id='emailspan' class=style17 > &nbsp;</span></td>
    </tr>
<tr> 
      <td style="height: 44px; width: 277px" class="style6">Email:<br>
		<input name="email" type="text" style="width: 163px" title="Type Email here " value="<?php echo $email;?>"><br>
		</td>
      <td style="height: 44px; width: 307px" class="style6">&nbsp;</td>
    </tr>
							<tr>
	<td style="height: 80px" colspan="2">
		<span class="normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Address</span> <span class="normal">Line</span> <span class="normal">1:</span><br/>
		<input name="addressline1" type="text" style="width: 239px" id="addressline1" value="<?php echo $hospital_addressline1;?>" title="Type adddress"/>
		 <span class="addressline1spanimgg"></span>
   		 <br/> <span id='addressline1span' class="spn"></span><br/>

		</td>
							</tr>
							<tr>
	<td style="height: 80px" colspan="2">
		Address Line 2:<span class="style3"><br>
		<br/></span> 
		<input name="addressline2" type="text" style="width: 237px" id="addressline2" value="<?php echo $hospital_addressline2;?>" title="Type Address here"/>
		 <span class="addressline2spanimgg"></span>
    	<br/> <span id='addressline2span' class="spn"></span><br/>&nbsp;&nbsp;</td>
							</tr>
							<tr>
	<td style="height: 59px">
			<span class="normal">Province:&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
		
		<span class="style6">
		<select name="province" style="width: 114px" id="province" title="Choose a Province">
		<option><?php echo $hospital_province;?></option>
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
		<input name="city" type="text" style="width: 116px" id="city" title="Type City Here" value="<?php echo $hospital_city;?>">
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
				&nbsp;<input name="postalcode" type="text" style="width: 118px" id="postalcode" title="Type Postalcode Here" value="<?php echo $hospital_postalcode;?>"/>
		<span class="postalcodespanimgg"></span><br />
		     <span id='postalcodespan' class="spn"></span><br/>
&nbsp;</td>
							</tr>
<tr> 
      <td class="style1" style="height: 151px; " colspan="2">
   <div class="select-bar" style="width: 489px; height: 6px">
                    <input type="submit" name="update" value="Update"  class="pop_but" style="width: 99px" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" name="reset" value="Reset"  class="pop_but" style="width: 99px" ></div>
	<span class="style6">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
	</span></td>
    </tr>
    

  </table>
  							</div> 
  				</div>
  						 </div> 
  				</div> 
   </div>
   </form>
   </body>
</html>