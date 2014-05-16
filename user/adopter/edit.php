<?php
include_once '../../login1/user-class.php';
$admin = new itg_user();
$admin->_authenticate();
?>

<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['update']))
{
	//here the id that we post is the same id that we get from url
	//id indicates the id of this data which we are editing
	//id is unique and a particular id is associated with particular data	
	$id = $_POST['adoption_id'];
	
	
	$orphan_id=$_POST['orphan'];
	$social_worker_id=$_POST['socialworker'];
	$adopter_id=$_POST['adopter'];
	$name=$_POST['name'];
	$description=$_POST['description'];
	$comment=$_POST['comment'];
	$number=$_POST['number'];
	$rating=$_POST['rating'];
	
	

		//updating the table
		$result=mysql_query("UPDATE adopter SET addressline2='$adopter_addressline2',city='$adopter_city',
		postalcode='$adopter_postalcode',province='$adopter_province',country='$adopter_country',spouse_fname='$spouse_fname',spouse_mname='$spouse_mname',
		spouse_lname='$spouse_lname',note='$note' WHERE adopter_id=$id");
		
		header("Location:../placeholder1.htm");		 
		`adoption`(`adoption_name`,
				   `description`, `comment`, `visit_number`, `rating`)
				    VALUES 
				    ('$name',
				    '$description','$comment',
				    '$number','$rating')
					")
	
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
	$mname = $res[adopter_mname'];
	$lname=$res['adopter_lname'];
	$mobile=$res['mobile'];
	$email=$res['email'];
	$addressline1=$res['adopter_addressline1'];
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

<div style="position: absolute; width: 686px; height: 870px; z-index: 1; left: 9px; top: 22px" id="layer8">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 610px;">
                <div class="top-bar">
                    <h1>EDIT ADOPTION PROCESS</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Edit 
						Adoption</div>
                </div>
<form action="edit.php" method="post" name = "fEdit Adoption" style="width: 467px">
  <table class="listing" cellpadding="0" cellspacing="0" style="width: 31%; height: 932px">
  <!-- <tr><td>Username </td> <td> 
	<input type='text' name='username' id='username' class="pop_txt"  maxlength="15" >&nbsp;&nbsp;<span class="usernamespanimgg"></span> <br> <span id='usernamespan' class=spn></span></td></tr>
  -->
 
    <tr class="spn"> 
      <th style="height: 52px; width: 314px;" class="full" colspan="2">
		ENTER ADOPTER DETAILS HERE</th>
    </tr>
<tr> 
      <td style="height: 41px; width: 111px;"><span class="style6">Name:<br>
		<input type="text" name="fname" title="Type First Name Here" id='fname'  maxlength="15" style="width: 133px" value="<?php echo $adpoter_fname;?>">&nbsp;&nbsp;&nbsp;&nbsp;</span><span id='fnamespan' class=style17 > </span>
		<span class="style6">&nbsp;&nbsp; </span> </td>
      <td style="height: 41px; width: 314px;" class="style6">Middle Name:<br>
		<input type="text" name="mname" title="Type Middle Name Here" id='mname'  maxlength="15" style="width: 151px" value="<?php echo $adopter_mname;?>"><br>
		</td>
    </tr>
<tr> 
      <td style="height: 26px; width: 314px;" colspan="2" class="style6">Last Name:<br>
		<input type="text" name="lname" title="Type Last Name Here" maxlength="15" style="width: 312px; height: 21px" value="<?php echo $adopter_lname;?>"></td>
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
      <td style="width: 314px; height: 248px" colspan="2">
		<fieldset name="Group1" style="height: 207px; width: 329px;">
		<legend style="width: 58px" class="style16">Address</legend>
		<div class="style15">
			<span class="style16">Address Line 1:</span><span class="style6"><br>
			<input name="addressline1" type="text" style="width: 275px" value="<?php echo $adopter_addressline1;?>"></span>
			<span id="streetaddressspan" class="spn"></span>
			<span class="style6"><br>
			</span>
			Address L<span class="style16">ine 2:</span><span class="style6"><br>
			<input name="addressline2" type="text" style="width: 271px" value="<?php echo $adopter_addressline2;?>"></span>
			<span id="boxspan" class="spn"></span><span class="style6"><br>
			</span>
			<span class="style16">City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postal 
			Code:</span><span class="style6"><br>
			<input name="city" type="text" value="<?php echo $adopter_city;?>">&nbsp;&nbsp;&nbsp;</span><span id="cityspan" class="style17">
			</span><span class="style6">
			<input name="postalcode" type="text" value="<?php echo $adopter_postalcode;?>"></span><span id="postalcodespan" class="style17">
			</span><span class="style16">Province:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Country:</span><span class="style6"><br>
			<input name="province" type="text" value="<?php echo $adopter_province;?>">&nbsp;&nbsp;&nbsp;</span><span id="provincespan" class="style17">
			</span><span class="style6">
			<input name="country" type="text" value="<?php echo $adopter_country;?>"></span><span id="countryspan" class="style17">
			</span></div>
		</fieldset></td>
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
    <td colspan="2" style="height: 14px">Adoption Status:<br>
	</td>
    </tr>
<tr> 
      <td colspan="2" class="style1">
                <div class="select-bar" style="width: 612px">
		<span class="style6">
	<input type='submit' name='Submit' value='Save' style="width: 99px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='submit' name='reset' value='Reset' style="width: 99px" /></span></div>
		<span class="style6">&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

