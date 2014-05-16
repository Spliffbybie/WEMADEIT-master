<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['title']))
{
	//here the id that we post is the same id that we get from url
	//id indicates the id of this data which we are editing
	//id is unique and a particular id is associated with particular data	
	$id = $_GET['ID'];
	
	$title = $_POST['title'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname=$_POST['lname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$addressline1=$_POST['adopter_addressline1'];
	$addressline2=$_POST['adopter_addressline2'];
	$adopter_city=$_POST['adopter_city'];
	$adopter_postalcode=$_POST['adopter_postalcode'];
	$adopter_province=$_POST['adopter_province'];
	$adopter_country=$_POST['adopter_country'];
	$spouse_fname=$_POST['spouse_fname'];
	$spouse_mname=$_POST['spouse_mname'];
	$spouse_lname=$_POST['spouse_lname'];
	$note=$_POST['note'];
	
	

		//updating the table
		$result=mysql_query("
						UPDATE 
								adopter 
						SET 			title='$title',adopter_fname='$fname',adopter_mname='$mname',
										adopter_lname='$lname',`mobile`='$mobile',`email`='$email',
										addressline2='$adopter_addressline2',city='$adopter_city',
										postalcode='$adopter_postalcode',province='$adopter_province',country='$adopter_country',
										spouse_fname='$spouse_fname',spouse_mname='$spouse_mname',
										spouse_lname='$spouse_lname',note='$note' 
						WHERE adopter_id=$id
							")
		or die(mysql_error());
		
			 
		
		echo "<font color='green'>Adopter Updated successfully.";

		header ("refresh:5; url=../placeholder1.htm");
}
	
?>
<?php
include_once("../../connections/config.php");
//for displaying data of this particular data

//getting id from url
$id = $_GET['adopter_id'];

//selecting data associated with this particular id
$result=mysql_query("SELECT * FROM adopter WHERE adopter_id=$id");

while($res=mysql_fetch_array($result))
{

	$fname = $res['adopter_fname'];
	$mname = $res['adopter_mname'];
	$lname = $res['adopter_lname'];
	$mobile = $res['mobile'];
	$email = $res['email'];
	$addressline1 = $res['adopter_addressline1'];
	$addressline2=$res['adopter_addressline2'];
	$adopter_city=$res['adopter_city'];
	$adopter_postalcode=$res['adopter_postalcode'];
	$adopter_province=$res['adopter_province'];
	$adopter_country=$res['adopter_country'];
	$spouse_fname=$res['spouse_fname'];
	$spouse_mname=$res['spouse_mname'];
	$spouse_lname=$res['spouse_lname'];
	$note=$res['note'];
	

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>All Orphans&nbsp;&nbsp; Add Orphan</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
<script type="text/javascript" src="../../js/validadoption.js"></script>
<script type="text/javascript" src="../../js/jquery1.js" ></script>
<link rel="stylesheet" href="../../css/style1.css" type="text/css" >

<style type="text/css">
.style16 {
	font-size: 11px;
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
<form action="edit.php?ID=<?php echo $_GET['adopter_id'];?>"  method="post" name = "fEdit Adoption" style="width: 467px">

<div style="position: absolute; width: 686px; height: 870px; z-index: 1; left: 9px; top: 22px" id="layer8">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 610px;">
                <div class="top-bar">
                    <h1>EDIT ADOPTER DETAILS</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Edit 
						Adoption</div>
                </div>
  <table class="listing" cellpadding="0" cellspacing="0" style="width: 112%; height: 932px">
  <!-- <tr><td>Username </td> <td> 
	<input type='text' name='username' id='username' class="pop_txt"  maxlength="15" >&nbsp;&nbsp;<span class="usernamespanimgg"></span> <br> <span id='usernamespan' class=spn></span></td></tr>
  -->
 
    <tr class="spn"> 
      <th style="height: 52px; width: 314px;" class="full" colspan="2">
		ENTER ADOPTER DETAILS HERE</th>
    </tr>
<tr> 
      <td style="height: 41px; width: 111px;">Title:<br>
	<select name="title" id="title"  style="width: 105px" title="Select title">&nbsp;&nbsp;
	<option>Choose Title</option>
	<option>Mr</option>
	<option>Mrs</option>
	<option>Ms</option>
	<option>Dr</option>
	<option>Prof</option>
	<option>Rev</option>
	</select>
	 <span class="titlespanimgg"></span> </td>
      <td style="height: 41px; width: 314px;" class="style6">&nbsp;</td>
    </tr>
<tr> 
      <td style="height: 41px; width: 111px;"><span class="style6">Name:<br>
		<input type="text" name="fname" title="Type First Name Here" id='fname'  maxlength="15" style="width: 133px" value="<?php echo $fname;?>">&nbsp;&nbsp;&nbsp;&nbsp;</span><span id='fnamespan' class=style17 > </span>
		<span class="style6">&nbsp;&nbsp; </span> </td>
      <td style="height: 41px; width: 314px;" class="style6">Middle Name:<br>
		<input type="text" name="mname" title="Type Middle Name Here" id='mname'  maxlength="15" style="width: 151px" value="<?php echo $mname;?>"><br>
		</td>
    </tr>
<tr> 
      <td style="height: 26px; width: 314px;" colspan="2" class="style6">Last 
		Name:<br>
		<input type="text" name="lname" title="Type Last Name Here" maxlength="15" style="width: 312px; height: 21px" value="<?php echo $lname;?>"></td>
    </tr>
<tr> 
      <td style="height: 44px; width: 111px"><span class="style6">Mobile:<br>
		<input name="mobile" type="text" style="width: 166px" title="Type Phone Number Here" value="<?php echo $mobile;?>"></span> <span id='mobilespan' class=spn > </span>
		<span class="style6"><br>
		</span>
		</td>
      <td style="height: 44px; width: 314px"><span class="style6">Email:<br>
		<input name="email" type="text" style="width: 163px" title="Type Email here " value="<?php echo $email;?>"><span id='emailspan' class=style17 > </span>
		<br>
		<br>
		</span>
		</td>
    </tr>
	<tr>
	<td style="height: 80px" colspan="2">
		<span class="normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address</span> <span class="normal">Line</span> <span class="normal">
		1:</span><br/>
		<input name="adopter_addressline1" type="text" style="width: 239px" id="adopter_addressline1" value="<?php echo $addressline1;?>">
		 <span class="addressline1spanimgg"></span>
   		 <br/> <span id='addressline1span' class="spn"></span><br/>

		</td>
	</tr>
	<tr>
	<td style="height: 80px" colspan="2">
		Address Line 2:<span class="style3"><br>
		<br/></span> 
		<input name="adopter_addressline2" type="text" style="width: 237px" id="adopter_addressline2" value="<?php echo $addressline2;?>"/>
		 <span class="addressline2spanimgg"></span>
    	<br/> <span id='addressline2span' class="spn"></span><br/>&nbsp;&nbsp;</td>
	</tr>
	<tr>
	<td style="height: 59px">
			<span class="normal">Province:&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
		
		<span class="style6">
		<select name="adopter_province" style="width: 114px" id="adopter_province" title="Choose a Province">
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
		<input name="adopter_city" type="text" style="width: 116px" id="adopter_city" value="<?php echo $adopter_city;?>"/>
		<span class="cityspanimgg"></span><br/>

		     <span id='cityspan' class="spn"></span><br/>&nbsp;</td>
	</tr>
	<tr>
	<td style="height: 28px">
		&nbsp;<span class="normal">Country:</span>&nbsp;<br />
		&nbsp;<input name="adopter_country" type="text" style="width: 117px" id="adopter_country" value="<?php echo $adopter_country;?>"/>
		<span class="countryspanimgg"></span><br/>
		     <span id='countryspan' class="spn"></span><br/>&nbsp;</td>
	<td style="height: 28px">
				<span class="style16">Postal Code:<br/>
		</span>
				&nbsp;<input name="adopter_postalcode" type="text" style="width: 118px" id="adopter_postalcode" value="<?php echo $adopter_postalcode;?>"/>
		<span class="postalcodespanimgg"></span><br />
		     <span id='postalcodespan' class="spn"></span><br/>
				&nbsp;</td>
	</tr>
    <tr> 
    <th colspan="2" class="full"> Spouse&nbsp;&nbsp;</th>
    </tr>
    <tr> 
    <td style="height: 52px; width: 111px;" class="style6"> Name:<br>
	<input type="text" name="sfname" title="Type First Name Here" id='Spouse_fname'  maxlength="15" style="width: 133px" value="<?php echo $spouse_fname;?>"/></td>
    <td style="height: 52px" class="style6"> Middle Name:<br>
		<input type="text" name="smname" title="Type Middle Name Here" id='spouse_mname'  maxlength="15" style="width: 151px" value="<?php echo $spouse_mname;?>"/></td>
    </tr>
    <tr> 
    <td style="height: 65px" colspan="2" class="style6"> Last Name:<br>
		<input type="text" name="slname" title="Type Last Name Here" maxlength="15" style="width: 312px; height: 21px" id="spouse_lname" value="<?php echo $spouse_lname;?>"/></td>
    </tr>
    <tr>
    <td colspan="2" style="height: 173px"><span class="style6">Note:<br>
	<br>
	<textarea name="note" style="width: 304px; height: 108px" dir="<?php echo $note;?>" title="Enter Notes Here" tabindex="<?php echo $note;?>"></textarea></span><span id='notespan' class=spn > 
	</span></td>
    </tr>
<tr> 
      <td colspan="2" class="style1">
                <div class="select-bar" style="width: 612px">
		<span class="style6">
	<input type='submit' name='Submit' value='Save' style="width: 99px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='submit' name='reset' value='Reset' style="width: 99px" /></span></div>
		<span class="style6">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</span></td>
    </tr>
    

  </table>
  
        </div>
            	<br>
				<br>
            </div>
        </div>
    </div>
</div>

</body>

</html>

