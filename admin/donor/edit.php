<?php
//including the database connection file
include_once("../../connections/config.php");


if(isset($_POST['title']))

{
	//echo '<br /><br />';echo '<br /><br />';
	//var_dump($_POST['fname']);
	//echo '<br /><br />';echo '<br /><br />';
	//var_dump($_POST['fname']);
	//here the id that we post is the same id that we get from url
	//id indicates the id of this data which we are editing
	//id is unique and a particular id is associated with particular data	
	$id = $_GET['ID'];
	
	$title=$_POST['title'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$telephone=$_POST['telephone'];
	$mobile=$_POST['mobile'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$addressline1=$_POST['addressline1'];
	$addressline2=$_POST['addressline2'];
	$city=$_POST['city'];
	$postalcode=$_POST['postalcode'];
	$province=$_POST['province'];
	$country =$_POST['country'];
	$donation = $_POST['donation'];
	

		//updating the table
		$result=mysql_query("
						UPDATE 
								`donor` 
						SET 
								`donation_id`='$donation',`title`='$title',
								`donor_fname`='$fname',`donor_mname`='$mname',
								`donor_lname`='$lname',`telephone`='$telephone',`mobile`='$mobile',
								`fax`='$fax',`email`='$email',`donor_addressline1`='$addressline1',
								`donor_addressline2`='$addressline2',`donor_city`='$city',
								`donor_province`='$province',`donor_postalcode`='$postalcode',
								`donor_country`='$country' 
						WHERE `donor_id`=$id
							")
		or die(mysql_error());
			
			echo "<font color='green'>Donor Updated Successfully";
			header ("refresh:5; url=../placeholder1.htm");		 
	
	
};
	
?>	

<?php
//for displaying data of this particular data
include_once("../../connections/config.php");

if(isset($_POST['donor_id']))

{

//getting id from url
$id = $_GET['donor_id'];

//selecting data associated with this particular id
	$result=mysql_query("
						SELECT * 
						FROM `donor` 
						WHERE `donor_id`=$id 
						")

or die(mysql_error());

while($res=mysql_fetch_array($result))
{
	$donation = $res['donation_id'];
	$title=$res['title'];
	$fname=$res['donor_fname'];
	$mname=$res['donor_mname'];
	$lname=$res['donor_lname'];
	$telephone=$res['telephone'];
	$mobile=$res['mobile'];
	$fax=$res['fax'];
	$email=$res['email'];
	$addressline1=$res['donor_addressline1'];
	$addressline2=$res['donor_addressline2'];
	$city=$res['donor_city'];
	$postalcode=$res['donor_postalcode'];
	$province=$res['donor_province'];
	$country =$res['donor_country'];

}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
<link  href="../../css/bluehighlight.css" rel="stylesheet" type="text/css" >

<style type="text/css">
.style1 {
	margin-right: 0px;
}
.style2 {
	text-align: left;
}
.style6 {
	font-family: Arial, Helvetica, sans-serif;
}
.spn
{
 color:red;
 
}
.style3 {
	font-size: medium;
}
.style16 {
	font-size: 11px;
}
</style>

</head>

<body>
<form name="Add Donor" method="post" action="edit.php?ID=<?php echo $_GET['donor_id'];?>" style="height: 1088px; width: 523px" >
    <div id="main" style="height: 1094px; width:488px;" class="style1">
        <div id="middle" style="height: 1053px; width:450px;">
            <div id="center-column" style="height: 1001px; width: 461px;">
                <div class="top-bar" style="width: 433px">
                    <h1>All Donors</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						Donors</div>
                </div>
  				<br>
				<br>
				<br>
  <table class="listing" cellpadding="0" cellspacing="0"  style="width: 31%; height: 932px">
 
    <tr class="spn"> 
      <th style="height: 52px; width: 314px;" class="full" colspan="2">
		Donor Details</th>
    </tr>
<tr> 
      <td style="height: 41px; width: 71px;">Title:<br>
	<select name="title" id="title"  style="width: 105px" title="Select title">&nbsp;&nbsp;<span class="titlespanimgg"></span> <br> 
	<span id='titlespan' class=spn></span>

	<option>Choose Title</option>
	<option>Mr</option>
	<option>Mrs</option>
	<option>Ms</option>
	<option>Dr</option>
	<option>Prof</option>
	<option>Rev</option>
	</select></td>
      <td style="height: 41px; width: 314px;" class="style6">&nbsp;</td>
    </tr>
<tr> 
      <td style="height: 41px; width: 71px;"><span class="style6">Name:<br>
		<input type="text" name="fname" title="Type First Name Here" id='fname'  maxlength="15" style="width: 133px" value="<?php echo $fname;?>">
		</span><span id='fnamespan' class=style17 > </span>
		<span class="style6">&nbsp;&nbsp; </span> </td>
      <td style="height: 41px; width: 314px;" class="style6">Middle Name:<br>
		<input type="text" name="mname" title="Type Middle Name Here" id='mname'  maxlength="15" style="width: 151px" value="<?php echo $mname;?>"><br>
		</td>
    </tr>
<tr> 
      <td style="height: 26px; width: 314px;" colspan="2" class="style6">Last Name:<br>
		<input type="text" name="lname" title="Type Last Name Here" maxlength="15" style="width: 312px; height: 21px" value="<?php echo $lname;?>" ></td>
    </tr>
<tr> 
      <td style="height: 44px; width: 71px">Telephone:<br>
		<input type="text"  value ="<?php echo $telephone;?>" name="telephone" style="width: 166px" title="Type Phone Number Here" > 
		<span id='telephonespan' class=spn > </span>
		<br>
		</span>
		</td>
      <td style="height: 44px; width: 314px"><span class="style6">Mobile:<br>
		<input name="mobile" type="text" style="width: 166px" title="Type Phone Number Here" value="<?php echo $mobile;?>" > <span id='mobilespan' class=spn > </span>
		<br>
		<br>
		</span>
		</td>
    </tr>
<tr> 
      <td style="height: 77px; width: 71px"><span class="style16">Fax:</span><span class="style6"><br />
		<input name="fax" type="text" style="width: 162px" value="<?php echo $fax;?>" id="fax"></span></td>
      <td style="height: 77px; width: 314px" class="style6"><span class="style6">Email:<br>
		<input name="email" type="text" style="width: 163px" title="Type Email here " value="<?php echo $email;?>" ></span><span id='emailspan' class=style17 > </span>
		<span class="style6"><br>
		</span>
		</td>
    </tr>
	<tr>
	<td style="height: 80px" colspan="2">
		<span class="normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Address</span> <span class="normal">Line</span> <span class="normal">1:</span><br/>
		<input name="addressline1" type="text" style="width: 239px" id="addressline1" value="<?php echo $addressline1;?>">
		 <span class="addressline1spanimgg"></span>
   		 <br/> <span id='addressline1span' class="spn"></span><br/>

		</td>
	</tr>
	<tr>
	<td style="height: 80px" colspan="2">
		Address Line 2:<span class="style3"><br>
		<br/></span> 
		<input name="addressline2" type="text" style="width: 237px" id="addressline2" value="<?php echo $addressline2;?>">
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
		
			</span>City:<span class="style3">&nbsp;</span><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>
		<input type="text"  name="city" style="width: 116px" id="city" value="<?php echo $city;?>"/>
		<span class="cityspanimgg"></span><br/>

		     <span id='cityspan' class="spn"></span><br/>&nbsp;</td>
	</tr>
	<tr>
	<td style="height: 28px">
		&nbsp;<span class="normal">Country:</span>&nbsp;<br />
		&nbsp;<input type="text" name="country" title="Type Country Here" style="width: 117px" id="country" value="<?php echo $country;?>" />
		<span class="countryspanimgg"></span><br/>
		     <span id='countryspan' class="spn"></span><br/>&nbsp;</td>
	<td style="height: 28px">
				<span class="style16">Postal Code:<br/>
		</span>
				&nbsp;<input type="text" name="postalcode" title="Type PostalCode Here" style="width: 118px" id="postalcode" value="<?php echo $postalcode;?>" />
		<span class="postalcodespanimgg"></span><br />
		     <span id='postalcodespan' class="spn"></span><br/>
&nbsp;</td>
	</tr>
    <tr> 
    <th colspan="2" class="full" style="height: 48px"> DONATION INFORMATION</th>
    </tr>
    <tr> 
    <td style="height: 52px; " colspan="2"> 
	<div style="width: 313px; height: 24px;">
		<p class="style2">
		Donation:</p>
	</div><div>
	<select name="donation" style="width: 135px"  >
			<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
      
        $fname = "SELECT donation_id, donation_description FROM donation WHERE donation_id= donor_id";
        $query_result = mysql_query($fname);
       
        while($result = mysql_fetch_assoc($query_result))         
     
          {
        ?>

		<option ><?php echo $result['donation_description']?></option>
		  <?php
        }

    ?>  

		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
      
        $fname = "SELECT donation_id, donation_description FROM donation";
        $query_result = mysql_query($fname);
       
        while($result = mysql_fetch_assoc($query_result))         
     
          {
        ?>
            <option value = "<?php echo $result['donation_id']?>"><?php echo $result['donation_description']?></option>
        <?php
        }

    ?>  
		</select>&nbsp;&nbsp;&nbsp;&nbsp;
		<a target="I4" href="../donation/input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style3" ></a></div>

	</td>
    </tr>
    <tr> 
    <td style="height: 65px" colspan="2"> 
                <div class="select-bar" style="width: 406px">
		<div>
		<span class="style6">&nbsp;
	<input type='submit' name='Submit' value='submit' style="width: 99px" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='submit' name='reset' value='Reset' style="width: 99px" ></span></div>
                </div>
	</td>
    </tr>
        

  </table>
  

                </div>
            	<br>
				<br>
            </div>
        </div>
    </form>
    </body>
</html>
