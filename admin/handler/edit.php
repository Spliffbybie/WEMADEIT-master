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
	$handler_mname=$_POST['handler_mname'];
	$handler_lname=$_POST['handler_lname'];
	$affiliation=$_POST['affiliation'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$handler_addressline1=$_POST['handler_addressline1'];
	$handler_addressline2=$_POST['handler_addressline2'];
	$handler_city =$_POST['handler_city'];
	$handler_province=$_POST['handler_province'];
	$handler_postalcode=$_POST['handler_postalcode'];
	$handler_country = $_POST['handler_country'];
			

		//updating the table
		$result=mysql_query("
					UPDATE `handler` 
					SET `title`='$title',
					`handler_fname`='$fname',`handler_mname`='$handler_mname',
					`handler_lname`='$handler_lname',`affiliation`='$affiliation',
					`mobile`='$mobile',`email`='$email',
					`handler_addressline1`='$handler_addressline1',
					`handler_addressline2`='$handler_addressline2',
					`handler_city`='$handler_city',`handler_province`='$handler_province',
					`handler_postalcode`='$handler_postalcode',`handler_country`='$handler_country'
					WHERE `handler_id`=$id
							")
		
		
		or die(mysql_error());

		echo "<font color='green'>Handler Updated successfully.";

		header ("refresh:5; url=../placeholder1.htm");		 
		
	}	

	
?>

<?php
//for displaying data of this particular data

include_once("../../connections/config.php");



//getting id from url
$id = $_GET['handler_id'];

//selecting data associated with this particular id
$result=mysql_query("select * from handler where handler_id=$id");

while($res=mysql_fetch_array($result))
{
	$title=$res['title'];
	$fname=$res['handler_fname'];
	$handler_mname=$res['handler_mname'];
	$handler_lname=$res['handler_lname'];
	$affiliation=$res['affiliation'];
	$mobile=$res['mobile'];
	$email=$res['email'];
	$handler_addressline1=$res['handler_addressline1'];
	$handler_addressline2=$res['handler_addressline2'];
	$handler_city =$res['handler_city'];
	$handler_province=$res['handler_province'];
	$handler_postalcode=$res['handler_postalcode'];
	$handler_country = $res['handler_country'];



}
?>
<html >
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

<head>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
<link  href="../../css/bluehighlight.css" rel="stylesheet" type="text/css" >

<title>Edit </title>

<style type="text/css">
.spn
{
 color:red;
 
}
.style3 {
	font-size: medium;
}
.style6 {
	font-family: Arial, Helvetica, sans-serif;
}
.style16 {
	font-size: 11px;
}
</style>

</head>
<body>
<form action="edit.php?ID=<?php echo $_GET['handler_id'];?>" method="post" name = "handler_details" class="style6" style="width: 554px; height: 1009px;">

<div style="position: absolute; width: 521px; height: 973px; z-index: 1; left: 14px; top: 19px" id="layer1">
    <div id="main" style="height: 966px; width: 506px;">
        <div id="middle" style="height: 970px; width: 493px;">
            <div id="center-column" style="height: 952px; width: 450px;">
                <div class="top-bar" style="width: 444px">
                    <h1>Edit Hander Details</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Edit 
						Handler</div>
                </div>
            	<br>
				<br>
				<div style="position: absolute; width: 449px; height: 760px; z-index: 1; left: 11px; top: 67px" id="layer2">
  <table class="listing" cellpadding="0" cellspacing="0" style="width: 98%; height: 760px">
  
    <tr class="spn"> 
      <th style="height: 38px; " colspan="2" class="full">

		
			ENTER HANDLER DETAILS
		</th>
    </tr>
<tr> 
      <td style="width: 96px;">Title:<br>
	<select name="title" id="title"  style="width: 105px" title="Select title">&nbsp;&nbsp;<span class="titlespanimgg"></span> <br> 
	<span id='titlespan' class=spn></span>

	<option><?php echo $title;?></option>
	<option>Mr</option>
	<option>Mrs</option>
	<option>Ms</option>
	<option>Dr</option>
	<option>Prof</option>
	<option>Rev</option>
	</select></td>
      <td style="width: 314px;">&nbsp;</td>
    </tr>
<tr> 
      <td style="width: 96px; height: 74px;">Name:&nbsp;<input type="text" name="fname" title="Type First Name" id='fname'   maxlength="15" value="<?php echo $fname;?>" ></td>
      <td style="width: 314px; height: 74px;">Middle Name:<br>
		<input type="text" name="handler_mname" title="Type Middle Name" id='handler_mname'   maxlength="15" value="<?php echo $handler_mname;?>"></td>
    </tr>
<tr> 
      <td style="height: 26px; width: 314px;" colspan="2">Last Name:<br>
		<input type="text" name="handler_lname" title="Enter the orphans Last Name"  maxlength="15" value="<?php echo $handler_lname;?>" style="width: 226px" id="handler_lname" ></td>
    </tr>
<tr> 
      <td style="height: 44px; " colspan="2">Affiliation:<br>
		<select name="affiliation" style="width: 196px" id="affilition">
		<option >Choose Affiliation</option>
		<option >Found Orphan</option>
		<option >Family</option>		
		<option >Friend</option>

		</select><br>
		<br>
		</td>
    </tr>
<tr> 
      <td style="height: 77px; width: 96px">Mobile:<br>
		<input name="mobile" type="text"  value="<?php echo $mobile;?>" id="mobile"> <span id='mobilespan' class=spn > </span>
		</td>
      <td style="height: 77px; width: 314px">Email:<br>
		<input name="email" type="text"  value="<?php echo $email;?>" id="email"><span id='emailspan' class=spn > </span>
		</td>
    </tr>
	<tr>
	<td style="height: 80px" colspan="2">
		<span class="normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Address</span> <span class="normal">Line</span> <span class="normal">1:</span><br/>
		<input name="handler_addressline1" type="text" style="width: 239px" id="handler_addressline1" value="<?php echo $handler_addressline1;?>" title="Type Handler Address Here"/>
		 <span class="addressline1spanimgg"></span>
   		 <br/> <span id='addressline1span' class="spn"></span><br/>

		</td>
		</tr>
	<tr>
	<td style="height: 80px" colspan="2">
		Address Line 2:<span class="style3"><br>
		<br/></span> 
		<input name="handler_addressline2" type="text" style="width: 237px" id="handler_addressline2" value="<?php echo $handler_addressline2;?>" title="Type Handler Address Here"/>
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
			
		
			City:<span class="style3">&nbsp;</span>
		<input name="handler_city" type="text" style="width: 116px" id="handler_city" value="<?php echo $handler_city;?>" unselectable="Type Handler's City Herei">
		<span class="cityspanimgg"></span><br/>

		     <span id='cityspan' class="spn"></span><br/>&nbsp;</td>
		</tr>
	<tr>
	<td style="height: 28px">
		&nbsp;<span class="normal">Country:</span>&nbsp;<br />
		&nbsp;<input name="handler_country" type="text" style="width: 117px" id="handler_country" value="<?php echo $handler_country;?>"/>
		<span class="countryspanimgg"></span><br/>
		     <span id='countryspan' class="spn"></span><br/>&nbsp;</td>
	<td style="height: 28px">
				<span class="style16">Postal Code:<br/>
		</span>
				&nbsp;<input name="handler_postalcode" type="text" style="width: 118px" id="handler_postalcode" value="<?php echo $handler_postalcode;?>" title="Type Handler Postalcode Here"/>
		<span class="postalcodespanimgg"></span><br />
		     <span id='postalcodespan' class="spn"></span><br/>
&nbsp;</td>
		</tr>
<tr> 
      <td colspan="2">
                <div class="style1" style="width: 406px; height: 6px">
   <div class="select-bar" style="width: 419px; height: 6px">
                    <input type="submit" name="update" value="Update"  class="pop_but" style="width: 99px" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='submit' name='reset' value='Reset' style="width: 99px" ></div>
				</div>
&nbsp;</td>
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

