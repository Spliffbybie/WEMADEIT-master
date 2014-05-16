<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['school_name']))
{
	//here the id that we post is the same id that we get from url
	//id indicates the id of this data which we are editing
	//id is unique and a particular id is associated with particular data	
	$id = $_GET['ID'];
	
	$name=$_POST['school_name'];
	$title-$_POST['title'];
	$fname=$_POST['principle_fname'];
	$mname=$_POST['principle_mname'];
	$lname=$_POST['principle_lname'];
	$telephone=$_POST['telephone'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$addressline1=$_POST['school_address_line1'];
	$addressline2=$_POST['school_address_line2'];
	$city =$_POST['school_city'];
	$province=$_POST['province'];
	$postalcode=$_POST['school_postalcode'];
	$country=$_POST['school_country'];
		
	//updating the table
	$result=mysql_query("
					UPDATE 
							`school` 
					SET 			`school_name`='$name',`title`='$title',`principle_fname`='$fname',
									`principle_mname`='$mname',`principle_lname`='$lname',`telephone`='$telephone',`fax`='$fax',
									`email`='$email',`school_address_line1`='$addressline1',`school_address_line2`='$addressline2',
									`school_city`='$city',`school_province`='$province',`school_postalcode`='$postalcode', `school_country`='$country'	
					WHERE `school_id`=$id
						")
	or die (mysql_error());
	
	echo "<font color='green'>School Updated successfully.";
	
	header ("refresh:5; url=../placeholder1.htm");		 
		
		
}
	
?>
<?php
//for displaying data of this particular data

//getting id from url
$id = $_GET['school_id'];

//selecting data associated with this particular id
$result=mysql_query("select * from school where school_id=$id");

while($res=mysql_fetch_array($result))
{
	$name = $res['school_name'];
	$title=$res['title'];
	$fname=$res['principle_fname'];
	$mname=$res['principle_mname'];
	$lname=$res['principle_lname'];
	$telephone=$res['telephone'];
	$fax=$res['fax'];
	$email=$res['email'];
	$addressline1=$res['school_address_line1'];
	$addressline2=$res['school_address_line2'];
	$city =$res['school_city'];
	$province=$res['school_province'];
	$postalcode=$res['school_postalcode'];
	$country =$res['school_country'];

}
?>
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
<title>Edit </title>
<style type="text/css">
.style1 {
	font-size: 13px;
	color: maroon;
	text-align: center;
}
.style6 {
	text-align: center;
}
.style16 {
	font-size: small;
}
.style18 {
	font-size: small;
	font-family: Arial, Helvetica, sans-serif;
}
.style17 {
	color: red;
	font-family: Arial, Helvetica, sans-serif;
}
.style20 {
	clear: both;
	border-top: 2px solid #f70;
	border-bottom: 2px solid #f70;
	padding: 5px 0 3px 0;
	margin: 0 0 17px 0;
	text-align: left;
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
<body>
<form action="edit.php?ID=<?php echo $_GET['school_id'];?>" method="post" name = "school" style="width: 567px; height: 1063px;">

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
 <th class="full" colspan="2">Enter School Details</th>
   <tr>
                            <td style="width: 133px">School Name:</td>
                            <td style="width: 307px" > 
	<input type='text' name='school_name' id='school_name' class="style6"  maxlength="15" style="width: 145px" value="<?php echo $name;?>"><span class="hospital_namespanimgg"></span>  
	<span id='hospital_namespan' class=spn></span></td>
                        </tr>
<tr> 
      <td style="width: 254px;" class="style6">Title:<br>
	<select name="title" id="title"  style="width: 105px" title="Select title">&nbsp;&nbsp;<span class="titlespanimgg"></span> <br> 
	<span id='titlespan' class=spn></span>

	<option><?php echo $title;?></option>
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
		<input type="text" name="principle_fname" title="Type Doctor's First Name" id='principle_fname'  maxlength="15" style="width: 149px" value="<?php echo $fname;?>"><br>
		</td>
      <td style="height: 26px; " class="style6">Prin. Middle Name:<br>
		<input type="text" name="principle_mname" title="Type Doctor's Middle Name" id='principle_mname'  maxlength="15" style="width: 139px" value="<?php echo $mname;?>"></td>
    </tr>
<tr> 
      <td style="height: 26px; " colspan="2" class="style6">Prin. Last Name:<br>
		<input type="text" name="principle_lname" title="Type First Name Here" id='principle_lname'  maxlength="15" style="width: 316px" value="<?php echo $lname;?>"><span class="style6"><br>
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
		<input name="telephone" type="text" style="width: 166px" title="Type Phone Number Here" id="telephone" value="<?php echo $telephone;?>"></span>&nbsp;</span></td>
      <td style="width: 307px"><span class="style16">
		<span class="style6">Fax:<br>
		</span>
		</span><span class="style6">
		<input name="fax" type="text" style="width: 136px" id="fax" value="<?php echo $fax;?>"></span></td>
    </tr>
<tr> 
      <td style="height: 44px; width: 277px" class="style6">Email:<br>
		<input name="email" type="text" style="width: 163px" title="Type Email here " id="email" value="<?php echo $email;?>"><span class="style6"><br>
		</span>
		<br>
		</td>
      <td style="height: 44px; width: 307px" class="style6">&nbsp;</td>
    </tr>
							<tr>
	<td style="height: 80px" colspan="2">
		<span class="normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Address</span> <span class="normal">Line</span> <span class="normal">1:</span><br/>
		<input name="school_address_line1" type="text" style="width: 239px" id="aschool_address_line1ssline1" title="Type Address Here" value="<?php echo $addressline1;?>"/>
		 <span class="addressline1spanimgg"></span>
   		 <br/> <span id='addressline1span' class="spn"></span><br/>

		</td>
							</tr>
							<tr>
	<td style="height: 80px" colspan="2">
		<span class="style3">Address Line 2:<br/></span> 
		<input name="school_address_line2" type="text" style="width: 237px" id="school_address_line2" title="Type Address Here" value="<?php echo $addressline2;?>"/>
		 <span class="addressline2spanimgg"></span>
    	<br/> <span id='addressline2span' class="spn"></span><br/>&nbsp;&nbsp;</td>
							</tr>
							<tr>
	<td style="height: 59px">
			<span class="normal">Province:&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
		
		<span class="style6">
		<select name="province" style="width: 114px" id="province" title="Choose a Province">
		<option><?php echo $province;?></option>
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
		<input name="school_city" type="text" style="width: 116px" id="school_city" title="Type City Here" value="<?php echo $city;?>"/>
		<span class="cityspanimgg"></span><br/>

		     <span id='cityspan' class="spn"></span><br/>&nbsp;</td>
							</tr>
							<tr>
	<td style="height: 28px">
		&nbsp;<span class="normal">Country:</span>&nbsp;<br />
		&nbsp;<input name="school_country" type="text" style="width: 117px" id="school_country" title="Type Country Here" value="<?php echo $country;?>"/>
		<span class="countryspanimgg"></span><br/>
		     <span id='countryspan' class="spn"></span><br/>&nbsp;</td>
	<td style="height: 28px">
				<span class="style3">Postal Code:<br/>
		</span>
				&nbsp;<input name="school_postalcode" type="text" style="width: 118px" id="school_postalcode" title="Type Postalcode Here" value="<?php echo $city;?>"/>
		<span class="postalcodespanimgg"></span><br />
		     <span id='postalcodespan' class="spn"></span><br/>
&nbsp;</td>
							</tr>
<tr> 
      <td class="style1" style="height: 151px; " colspan="2">
   <div class="style20" style="width: 493px; height: 56px">
                    <label>
	<span class="style6">
	<input type='submit' name='Submit' value='Update' style="width: 99px" ></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </label>
	<span class="style6">
					<input type='submit' name='reset' value='Reset' style="width: 99px" ></span></div>
		</td>
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