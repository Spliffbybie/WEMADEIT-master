<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['donation_description']))
{
	//here the id that we post is the same id that we get from url
	//id indicates the id of this data which we are editing
	//id is unique and a particular id is associated with particular data	
	$id = $_GET['ID'];
	
	$donation=$_POST['donation_description'];
	$date=$_POST['date'];
	$amount=$_POST['amount'];
	$items=$_POST['items'];
	$quantity=$_POST['quantity'];
	

		//updating the table
		$result=mysql_query("
							UPDATE 
									`donation` 
							SET 	`donation_description`='$donation',`date`='$date',`amount`='$amount',`items`='$items',`quantity`='$quantity'
							WHERE 		donation_id=$id
							")
		or die(mysql_error());
		echo "<font color='green'>Donation Updated successfully.";

		header ("refresh:5;url=../placeholder1.htm");		 
		
	
}
	
?>
<?php
//for displaying data of this particular data

//getting id from url
$id = $_GET['donation_id'];

//selecting data associated with this particular id
$result=mysql_query("select * FROM donation WHERE donation_id=$id");

while($res=mysql_fetch_array($result))
{
	$donation= $res['donation_description'];
	$date = $res['date'];
	$amount = $res['amount'];
	$items = $res['items'];
	$quantity = $res['quantity'];	
	

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Adoption</title>
<script type="text/javascript">
$empty="Empty Field";//error message for Empty field
$nameerr="Inavalid Name";//Error message for Name field
/*$gendererr="Choose Gender";//Error message for Gender field
$emailerr="Invalid Email";//Error message for Email field
$numbererr="Invalid Number";//Error message for Number field*/
$passworderr="Password Mismatch";//Error message for Password Field
//$termserr="Required";//Error message for terms checkbox
</script>

<link rel="stylesheet" type="text/css" media="all" href="../../js/jsdatepick-calendar/jsDatePick_ltr.min.css" >
<script type="text/javascript" src="../../js/jsdatepick-calendar/jsDatePick.min.1.3.js"></script>
	<link  href="../../css/bluehighlight.css" rel="stylesheet" type="text/css" >

<script type="text/javascript" src="../../js/jquery1.js" ></script>
<link rel="stylesheet" href="../../css/admin.css" type="text/css" >

<style type="text/css">
.style3 {
	font-size: medium;
}
</style>
<script type="text/javascript">

 window.onload = function(){                                                   
    new JsDatePick({                                                            
      useMode:2,                                                                
      target:"date",                                                        
      dateFormat:"%Y-%m-%d"                                                     
    });                                                                         
  }; 
</script>

</head>
<body>
<form action="edit.php?ID=<?php echo $_GET['donation_id'];?>" method="post" name = "socialworker" style="width: 482px; height: 1052px;">

<div style="position: absolute; width: 475px; height: 999px; z-index: 1; left: 11px; top: 21px; right: 1001px;" id="layer8">
    <div id="main" style="height: 971px; width:459px;">
        <div id="middle" style="height: 890px; width:470px;">
            <div style="position: absolute; width: 428px; height: 699px; z-index: 1; left: 32px; top: 74px" id="layer9">
  <table class="listing" cellpadding="0" cellspacing="0"  border="0" style="width: 100%; height: 760px">
  
    <tbody class="1">
  
    <tr class="spn"> 
      <th style="height: 38px; " class="full"  colspan="2">
		
			ENTER DONATION DETAILS HERE
		</th>
    </tr>
<tr> 
      <td style="height: 22px; width: 435px;">
		Date:</td>
      <td style="height: 42px; ">

<div class="demo" style="text-align: left; font-family: Arial, Helvetica, sans-serif; height: 58px; width: 307px;">


<span class="style3">
<input name="date" type="text" id="date" title="Enter Date " value="<?php echo $date;?>"></span><b><br>
</b>
</div>

	
		</td>
    </tr>
<tr> 
      <td style="height: 61px; width: 435px;" class="style15">
		Donation Description:<br>
		</td>
      <td style="height: 61px; " class="style15">
	&nbsp;&nbsp;&nbsp;&nbsp;
	<select name="donation_description" id="donation_description"  style="width: 142px" title="Select title">&nbsp;&nbsp;<span class="titlespanimgg"></span> <br> 
	<span id='titlespan' class=spn></span>

	<option >-----Select-----</option>
	<option><?php echo $donation;?></option>
	<option>Money</option>
	<option>Clothes</option>
	<option>Food</option>
	<option>Groceries</option>
	<option>Baby Food</option>
	<option>Baby Products</option>
	<option>Appliances</option>
	<option>Toiletries</option>
	<option>Other</option>
	</select></td>
    </tr>
<tr> 
      <td style="height: 61px; width: 435px;" class="style15">
		Amount:</td>
      <td style="height: 61px; " class="style15">
	&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="amount" maxlength="15" style="width: 141px; height: 21px" title="Type Last Name Here" id="amount" value="<?php echo $amount;?>"></td>
    </tr>
<tr> 
      <td style="height: 61px; width: 435px;" class="style15">
		Items:</td>
      <td style="height: 61px; " class="style15">
	&nbsp;&nbsp;&nbsp;<textarea name="items" style="width: 170px; height: 88px" rows="1" cols="20"><?php echo $items;?></textarea>&nbsp; </td>
    </tr>
<tr> 
      <td style="height: 61px; width: 435px;" class="style15">
		<span class="style16">Quantity:</span><br>
		</td>
      <td style="height: 61px; " class="style15">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="quantity" maxlength="15" style="width: 141px; height: 21px" title="Type Item Quantity Here" id="quantity" value="<?php echo $quantity;?>"></td>
    </tr>
<tr> 
      <td style="height: 61px; " colspan="2">
                
                <div class="select-bar" style="width: 313px">
                				<input type="submit" name="submit" value="Save" style="width: 90px" class="pop_but">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" name="reset" value="Reset" style="width: 83px"></span></div>
		</td>
    </tr>
        

  </table>

     					</div>
            <div id="center-column" style="height: 897px; width: 480px;">
                <div class="top-bar" style="width: 446px">
                    <h1>New Donation</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /New 
						Donation</div>
                </div>
<!--div style="position: absolute; width: 491px; height: 766px; z-index: 1; left: 118px; top: 17px" id="layer2" class="style6"-->
     </div>
            	<br>
				<br>
            </div>
        </div>
    </div> 
    </form> 
</body>
</html>

