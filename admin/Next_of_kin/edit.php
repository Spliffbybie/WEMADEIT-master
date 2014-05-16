<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['fname']))
{
	//here the id that we post is the same id that we get from url
	//id indicates the id of this data which we are editing
	//id is unique and a particular id is associated with particular data	
	$id = $_GET['ID'];
	
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$relation=$_POST['relation'];
	$telephone=$_POST['telephone'];
	$mobile=$_POST['mobile'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$addressline1=$_POST['addressline1'];
	$addressline2=$_POST['addressline2'];
	$city=$_POST['city'];
	$postalcode=$_POST['postalcode'];
	$province=$_POST['province'];
	$country=$_POST['country'];
			
	
		//updating the table
		$result=mysql_query("
					UPDATE
						 `next_of_kin`					
					SET `kin_fname`='$fname',`kin_lname`='$lname',`relation`='$relation',`telephone`='$telephone',
						`mobile`='$mobile',`fax`='$fax',`email`='$email',`kin_addressline1`='$addressline1',
						`kin_addressline2`='$addressline2',`kin_city`='$city',
						`kin_postalcode`='$postalcode',`kin_province`='$province',`kin_country`='$country' 
					WHERE `next_of_kin_id`=$id
						   ")
		 or die(mysql_error());
				
		echo "<font color='green'>Next of kin Updated successfully.";

		header ("refresh:5; url=../placeholder1.htm");		 
		
		
}
	
?>
<?php
//for displaying data of this particular data

//getting id from url
$id = $_GET['next_of_kin_id'];

//selecting data associated with this particular id
$result=mysql_query("select * from next_of_kin where next_of_kin_id=$id");

while($res=mysql_fetch_array($result))
{
	$title = $res['title'];
	$fname = $res['kin_fname'];
	$mname = $res['kin_mname'];
	$lname = $res['kin_lname'];
	$gender = $res['gender'];
	$relation = $res['relation'];
	$telephone = $res['telephone'];
	$mobile = $res['mobile'];
	$fax = $res['fax'];
	$email = $res['email'];
	$addressline1 = $res['kin_addressline1'];
	$addressline2 = $res['kin_addressline2'];
	$city = $res['kin_city'];
	$postalcode = $res['kin_postalcode'];
	$province = $res['kin_province'];
	$country = $res['kin_country'];

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
<link  href="../../css/bluehighlight.css" rel="stylesheet" type="text/css" >
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="valid.js"></script>

<style type="text/css">
.style2 {
	text-align: left;
}
.style3 {
	text-align: center;
}
.style6 {
	font-family: Arial, Helvetica, sans-serif;
}
</style>

</head>

<body>
<form action="edit.php?ID=<?php echo $_GET['next_of_kin_id'];?>" method="post" name = "next of kin" style="width: 348px">

<div style="position: absolute; width: 475px; height: 870px; z-index: 1; left: 9px; top: 22px" id="layer8">
    <div id="main" style="height: 679px; width:471px;">
        <div id="middle" style="height: 890px; width:469px;">
            <div id="center-column" style="height: 856px; width: 237px;">
                <div class="top-bar" style="width: 413px">
                    <h1>Edit Next Of Kin</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Edit Next 
						of Kin</div>
                </div>
  <table class="listing" cellpadding="0" cellspacing="0" style="width: 23%; height: 760px">
  
    <tr class="spn"> 
      <th style="height: 38px; " colspan="2" class="full">ENTER NEXT OF KIN 
		DETAILS HERE</th>
    </tr>
	<tr>
	<td colspan="2" class="style2">Title<br>
	<select name="title" id="title"  style="width: 111px">&nbsp;&nbsp;<span class="titlespanimgg"></span> <br> 
	<span id='titlespan' class=spn></span>

	<option>-select-</option>
	<option>Mr</option>
	<option>Mrs</option>
	<option>Ms</option>
	<option>Dr</option>
	</select></td>
	</tr>
<tr> 
      <td style="height: 26px; width: 314px;">Name:<br>
		<br>
		&nbsp;<input type="text" name="fname" title="Type First Name" id='fname'   maxlength="15" value=<?php echo $fname;?> >&nbsp;&nbsp;&nbsp;&nbsp;<span id='fnamespan' class=spn > </span>
		&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td style="height: 26px; width: 314px;">Middle Name:<input type="text" name="mname" title="Type Middle Name" id='mname'   maxlength="15" value=<?php echo $mname;?>></td>
    </tr>
<tr> 
      <td style="height: 44px; " colspan="2">Last Name:<br>
		<input type="text" name="lname" title="Enter the orphans Last Name"  maxlength="15" value=<?php echo $lname;?>></td>
    </tr>
<tr> 
      <td style="height: 44px; width: 314px">Relation<br>
	<select name="relation" id="relation" class="pop_txt"  style="width: 111px">&nbsp;&nbsp;<span class="relationspanimgg"></span> <br> 
	<span id='relationspan' class=spn></span>

	<option>-select-</option>
	<option>Mother</option>
	<option>Father</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Uncle</option>
	<option>Aunt</option>
	</select><br>
		</td>
      <td style="height: 44px; width: 314px">&nbsp;</td>
    </tr>
<tr> 
      <td style="height: 44px; width: 314px">Telephone:<br>
	<input name="telephone" type="text" value="<?php echo $telephone;?>"></td>
      <td style="height: 44px; width: 314px">Mobile:<br>
		<br>
		<input name="mobile" type="text"  value=<?php echo $mobile;?>> <span id='mobilespan' class=spn > </span></td>
    </tr>
<tr> 
      <td style="height: 77px; width: 314px">Fax:<br />
		<input name="fax" type="text" value=<?php echo $fax;?>><br>
		</td>
      <td style="height: 77px; width: 314px">Email:<br>
		<br>
		<input name="email" type="text"  value=<?php echo $email;?>><span id='emailspan' class=spn > </span>
		</td>
    </tr>
	<tr>
	<td style="height: 80px" colspan="2">
		<span class="normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address</span> <span class="normal">Line</span> <span class="normal">
		1:</span><br/>
		<input name="addressline1" type="text" style="width: 239px" id="addressline1" value="<?php echo $addressline1;?>"/>
		 <span class="addressline1spanimgg"></span>
   		 <br/> <span id='addressline1span' class="spn"></span><br/>

		</td>
	</tr>
	<tr>
	<td style="height: 80px" colspan="2">
		<span class="style3">Address Line 2:<br/></span> 
		<input name="addressline2" type="text" style="width: 237px" id="addressline2" value="<?php echo $addressline2;?>"/>
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

		     <span id='provincespan0' class="spn"></span><br/>&nbsp;</td>
	<td style="height: 59px">
			<span class="style3"><br />
		
			City:&nbsp;</span><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>
		<input name="city" type="text" style="width: 116px" id="city" value="<?php echo $city;?>"/>
		<span class="cityspanimgg"></span><br/>

		     <span id='cityspan' class="spn"></span><br/>&nbsp;</td>
	</tr>
	<tr>
	<td style="height: 28px">
		&nbsp;<span class="normal">Country:</span>&nbsp;<br />
		&nbsp;<input name="country" type="text" style="width: 117px" id="country" value="<?php echo $country;?>"/>
		<span class="countryspanimgg"></span><br/>
		     <span id='countryspan0' class="spn"></span><br/>&nbsp;</td>
	<td style="height: 28px">
				<span class="style3">Postal Code:<br/>
		</span>
				&nbsp;<input name="postalcode" type="text" style="width: 118px" id="postalcode" value="<?php echo $postalcode;?>"/>
		<span class="postalcodespanimgg"></span><br />
		     <span id='postalcodespan0' class="spn"></span><br/>
				&nbsp;</td>
	</tr>
<tr> 
      <td colspan="2">
                <div class="select-bar" style="width: 366px">
	<input type='submit' name='Submit' value='Update'  class="pop_but" style="width: 99px" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='submit' name='cancel' value='Cancel'  class="pop_but" style="width: 99px" ></div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
    </tr>
    

  </table>
   </div>
            	<br>
				<br>
            </div>
        </div>
    </div>
</div>
 </form> 
</body>

</html>
