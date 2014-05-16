<html>
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
<form action="save.php" method="post" name = "socialworker" style="width: 634px; height: 1052px;">

<div style="position: absolute; width: 581px; height: 999px; z-index: 1; left: 11px; top: 21px" id="layer8">
    <div id="main" style="height: 971px; width:533px;">
        <div id="middle" style="height: 890px; width:550px;">
            <div style="position: absolute; width: 459px; height: 699px; z-index: 1; left: 32px; top: 74px" id="layer9">
  <table class="listing" cellpadding="0" cellspacing="0"  border="0" style="width: 100%; height: 760px">
  
    <tbody class="1">
  
    <tr class="spn"> 
      <th style="height: 38px; " class="full"  colspan="2">
		
			ENTER DONATION DETAILS HERE
		</th>
    </tr>
<tr> 
      <td style="height: 22px; width: 469px;">
		Date:</td>
      <td style="height: 42px; ">

<div class="demo" style="text-align: left; font-family: Arial, Helvetica, sans-serif; height: 58px; width: 244px;">


<span class="style3">
<input name="date" type="text" id="date" title="Enter Date " ></span><b><br>
</b>
</div>

	
		</td>
    </tr>
<tr> 
      <td style="height: 61px; width: 469px;" class="style15">
		Donation Description:<br>
		</td>
      <td style="height: 61px; " class="style15">
	&nbsp;&nbsp;&nbsp;&nbsp;
	<select name="donation_description" id="donation_description"  style="width: 142px" title="Select title">&nbsp;&nbsp;<span class="titlespanimgg"></span> <br> 
	<span id='titlespan' class=spn></span>

	<option>----------Select----------</option>
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
      <td style="height: 61px; width: 469px;" class="style15">
		Amount:</td>
      <td style="height: 61px; " class="style15">
	&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="amount" maxlength="15" style="width: 141px; height: 21px" title="Type Last Name Here" id="amount"></td>
    </tr>
<tr> 
      <td style="height: 61px; width: 469px;" class="style15">
		Items:</td>
      <td style="height: 61px; " class="style15">
	&nbsp;&nbsp;&nbsp;&nbsp;
		<textarea name="items" style="width: 170px; height: 88px"></textarea></td>
    </tr>
<tr> 
      <td style="height: 61px; width: 469px;" class="style15">
		<span class="style16">Quantity:</span><br>
		</td>
      <td style="height: 61px; " class="style15">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="quantity" maxlength="15" style="width: 141px; height: 21px" title="Type Item Quantity Here" id="quantity"></td>
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
            <div id="center-column" style="height: 897px; width: 576px;">
                <div class="top-bar" style="width: 476px">
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

