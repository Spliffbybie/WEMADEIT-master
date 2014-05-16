<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['title']))
{
	//here the id that we post is the same id that we get from url
	//id indicates the id of this data which we are editing
	//id is unique and a particular id is associated with particular data	
	
	$id = $_GET['ID'];
	
	
	$title=$_POST['title'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$tel=$_POST['telephone'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$addressline1=$_POST['address1'];
	$addressline2=$_POST['address2'];
	$city =$_POST['city'];
	$province=$_POST['province'];
	$postalcode=$_POST['postalcode'];
	$country = $_POST['country'];
			

		//updating the table
		$result=mysql_query("
					UPDATE social_worker
					SET `title`='$title',`social_worker_fname`='$fname',`social_worker_mname`='$mname',`social_worker_lname`='$lname',`gender`='$gender',
						`mobile`='$mobile',`telephone`='$tel',`fax`='$fax',`email`='$email',`social_worker_addressline1`='$addressline1',`social_worker_addressline2`='$addressline2',
						`social_worker_city`='$city',`social_worker_province`='$province',`social_worker_postalcode`='$postalcode',`social_worker_country`='$country'
					WHERE `social_worker_id`=$id
							")
		
		
		or die(mysql_error());

		echo "<font color='green'>Social Worker Updated Successfully";
		header ("refresh:5;url=../placeholder1.htm");		 
		
	}	

	
?>
<?php
//for displaying data of this particular data
include_once("../../connections/config.php");

//getting id from url
$id = $_GET['social_worker_id'];

//selecting data associated with this particular id
$result=mysql_query("select * from social_worker WHERE social_worker_id=$id");

while($res=mysql_fetch_array($result))
{
	$title=$res['title'];
	$fname=$res['social_worker_fname'];
	$mname=$res['social_worker_mname'];
	$lname=$res['social_worker_lname'];
	$gender=$res['gender'];
	$mobile=$res['mobile'];
	$tel=$res['telephone'];
	$fax=$res['fax'];
	$email=$res['email'];
	$addressline1=$res['social_worker_addressline1'];
	$addressline2=$res['social_worker_addressline2'];
	$city =$res['social_worker_city'];
	$province=$res['social_worker_province'];
	$postalcode=$res['social_worker_postalcode'];
	$country = $res['social_worker_country'];


}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<style type="text/css">
.style6 {
	font-family: Arial, Helvetica, sans-serif;
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

<script type="text/javascript">
$empty="Empty Field";//error message for Empty field
$nameerr="Inavalid Name";//Error message for Name field
/*$gendererr="Choose Gender";//Error message for Gender field
$emailerr="Invalid Email";//Error message for Email field
$numbererr="Invalid Number";//Error message for Number field*/
$passworderr="Password Mismatch";//Error message for Password Field
$termserr="Required";//Error message for terms checkbox
</script>
<script type="text/javascript" src="../../js/jquery1.js" ></script>
<script type="text/javascript" src="../../js/password.js"></script>
<script type="text/javascript" src="../../js/valid1.js"></script>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
<link  href="../../css/bluehighlight.css" rel="stylesheet" type="text/css" >

<body>
<div style="position: absolute; width: 506px; height: 870px; z-index: 1; left: 9px; top: 22px" id="layer8">
    <div id="main" style="height: 679px; width:495px;">
        <div id="middle" style="height: 890px; width:497px;">
            <div id="center-column" style="height: 856px; width: 409px;">
                <div class="top-bar" style="width: 370px">
                    <h1>EDIT SOCIAL WORKER </h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Edit 
						Social Worker</div>
                </div>
<!--div class="style6" style="width: 609px"-->
<form name='edit' method="post" action="edit.php?ID=<?php echo $_GET['social_worker_id'];?>" style="height: 813px; width: 372px" class="style5"> 
<br>
  <table class="listing" cellpadding="0" cellspacing="0"  border="0"style="width: 33%; height: 760px">
  
    <tr class="spn"> 
      <th style="height: 38px; " colspan="2" class="full">ENTER SOCIAL WORKER DETAILS HERE
    </tr>
<tr> 
      <td style="height: 26px; width: 299px;">Title:<br>
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
      <td style="height: 26px; width: 314px;">&nbsp;</td>
    </tr>
<tr> 
      <td style="height: 26px; width: 299px;">Name:<br>
		<input type="text" name="fname" title="Type First Name" id='fname'  maxlength="15" value="<?php echo $fname;?>" style="width: 133px" >&nbsp;&nbsp;&nbsp;&nbsp;<span id='fnamespan0' class=spn > </span>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
      <td style="height: 26px; width: 314px;">Middle Name:<br>
		<input type="text" name="mname" title="Type Middle Name" id='mname'  maxlength="15" value="<?php echo $mname;?>" style="width: 151px" ></td>
    </tr>
<tr> 
      <td style="height: 26px; width: 314px;" colspan="2">Last Name:<br>
		<input type="text" name="lname" title="Enter the orphans Last Name" maxlength="15" value="<?php echo $lname;?>" style="width: 312px; height: 21px" id="lname"></td>
    </tr>
<tr> 
      <td style="height: 26px; width: 314px;" colspan="2">Gender:<br>
	<select name="gender" id="gender" class="pop_txt"  style="width: 111px">&nbsp;&nbsp;<span class="genderspanimgg"></span> <br> <span id='genderspan' class=spn></span>

	<option><?php echo $gender;?></option>
	<option>female</option>
	<option>male</option>
	</select></td>
    </tr>
<tr> 
      <td style="height: 44px; width: 299px">Tel:<br>
		<input name="telephone" type="text" style="width: 198px" value="<?php echo $tel;?>"></td>
      <td style="height: 44px; width: 314px">Mobile:<br>
		<input name="mobile" type="text" style="width: 198px" value="<?php echo $mobile;?>"> <span id='mobilespan' class=spn > </span><br>
		</td>
    </tr>
<tr> 
      <td style="height: 44px; width: 314px">Fax:<br />
		<input name="fax" type="text" style="width: 198px" value="<?php echo $fax;?>"></td>
      <td style="height: 44px; width: 314px">Email:<br>
		<input name="email" type="text" style="width: 198px" value="<?php echo $email;?>"><span id='emailspan' class=spn > </span></td>
    </tr>
	<tr>
	<td style="height: 80px" colspan="2">
		<span class="normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Address</span> <span class="normal">Line</span> <span class="normal">1:</span><br/>
		<input name="addressline1" type="text" style="width: 239px" id="addressline1" title="Type Address Here" value="<?php echo $addressline1;?>"/>
		 <span class="addressline1spanimgg"></span>
   		 <br/> <span id='addressline1span' class="spn"></span><br/>

		</td>
	</tr>
	<tr>
	<td style="height: 59px" colspan="2">
		<span class="style3">Address Line 2:<br/></span> 
		<input name="addressline2" type="text" style="width: 237px" id="addressline2" title="Type Address Here" value="<?php echo $addressline2;?>"/>
		 <span class="addressline2spanimgg"></span>
    	<br/> <span id='addressline2span' class="spn"></span><br/>&nbsp;&nbsp;</td>
	</tr>
	<tr>
	<td style="height: 20px">
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
	<td style="height: 20px">
			<span class="style3"><br />
		
		City:&nbsp;</span><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>
		<input name="city" type="text" style="width: 116px" id="city" title="Type City Here" value="<?php echo $city;?>"/>
		<span class="cityspanimgg"></span><br/>

		     <span id='cityspan' class="spn"></span><br/>&nbsp;</td>
	</tr>
	<tr>
	<td>
		&nbsp;<span class="normal">Country:</span>&nbsp;<br />
		&nbsp;<input name="country" type="text" style="width: 117px" id="country" title="Type Country Here" value="<?php echo $country;?>"/>
		<span class="countryspanimgg"></span><br/>
		     <span id='countryspan' class="spn"></span><br/>&nbsp;</td>
	<td>
				<span class="style3">Postal Code:<br/>
		</span>
				&nbsp;<input name="postalcode" type="text" style="width: 118px" id="postalcode" title="Type Postalcode Here" value="<?php echo $postalcode;?>"/>
		<span class="postalcodespanimgg"></span><br />
		     <span id='postalcodespan' class="spn"></span><br/>
&nbsp;</td>
	</tr>
<tr> 
      <td colspan="2">
                <div class="select-bar" style="width: 313px">
                <span class="style2">
				<input type="submit" name="Submit" value="Update" style="width: 90px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" name="reset" value="Reset" style="width: 83px"></span></div>
		</td>
    </tr>
    

  </table>
</form>
   </div>
            	<br>
				<br>
            </div>
        </div>
    </div>


</body>

</html>
