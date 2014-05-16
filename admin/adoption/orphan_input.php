<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" >

<head >
<title></title>

<style type="text/css">
.style3 {
	font-size: medium;
}
.style6 {
	font-size: small;
	font-family: Arial, Helvetica, sans-serif;
}
.style5 {
	font-size: x-small;
}
.style8 {
	font-weight: normal;
	color: #000000;
}
.style10 {
	clear: both;
	border-top: 2px solid #f70;
	border-bottom: 2px solid #f70;
	padding: 5px 0 3px 0;
	margin: 0 0 17px 0;
	font-size: medium;
}
.style13 {
	text-align: left;
	font-weight: normal;
	color: #000000;
}
.style14 {
	text-align: left;
}
</style>

</head>

<script type="text/javascript">
$empty="Empty Field";//error message for Empty field
$nameerr="Inavalid Name";//Error message for Name field
$mnameerr="Invalid Email";//Error message for Email field

$lnameerr="Invalid Email";//Error message for Email field
$dobrerr="Choose Date";//Error message for Dob field

$gendererr="Choose Gender";//Error message for Gender field
$raceerr="Choose Race";//Error message for Race field
$typeerr="Choose Race";//Error message for Type field
$socialerr="Choose Social Worker";//Error message for Social Worker field

$locerr="Location Invalid";//Error message for Number field
$handerr="Relation Error";//Error message for Password Field
$kinerr="Relation Error";//Error message for Password Field
$scherr="School Error";//Error message for Password Field
$adopterr="Adoption Error";//Error message for Password Field

//$termserr="Required";//Error message for terms checkbox
</script>
<script type="text/javascript" src="../orphan/jquery.js"></script>
<script type="text/javascript" src="../orphan/valid.js"></script>

	<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
	<link  href="../../css/bluehighlight.css" rel="stylesheet" type="text/css" >

	
   <link rel="stylesheet" href="../../css/jquery.ui.all.css">
    <script src="../../js/jquery.bgiframe-2.1.2.js"></script>
	<script src="../../js/jquery-1.7.2.js"></script>
	<script src="../../js/jquery.ui.core.js"></script>
	<script src="../../js/jquery.ui.widget.js"></script>
	<script src="../../js/jquery.ui.accordion.js"></script>
	<script src="../../js/jquery.ui.dialog.js"></script>
	<link rel="stylesheet" href="../../css/demos.css" >
			<script>
					$(function() {
					$( "#accordion" ).accordion({
					//collapsible: true
					autoHeight: false,
					navigation: true

					});
					});
			</script>
			
	<link rel="stylesheet" type="text/css" media="all" href="../../js/jsdatepick-calendar/jsDatePick_ltr.min.css" >
	<script type="text/javascript" src="../../js/jsdatepick-calendar/jsDatePick.min.1.3.js"></script>
			<script type="text/javascript">

					 window.onload = function(){                                                   
					    new JsDatePick({                                                            
					      useMode:2,                                                                
					      target:"dob",                                                        
					      dateFormat:"%Y-%m-%d"                                                     
					    });                                                                         
					  }; 
			</script>



<body >
     <form name='Orphan Details' method="post" action="orphan_save.php" style="height: 1185px; width: 495px"> 
	
	
<div style="position: absolute; width: 522px; height: 532px; z-index: 1; left: 9px; top: 7px" id="layer1">
    <div id="main" style="height: 900px; width: 492px;">
        <div id="middle" style="height: 910px; width: 485px;">
            <div id="center-column" style="height: 900px; width: 492px;">
                <div class="top-bar" style="width: 401px">
                    <h1 style="width: 375px">NEW ORPHAN</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /New 
						Orphan</div>
                </div>
				<table align="left"class="listing" cellpadding="0" cellspacing="0"style="width: 98%; height: 1128px">
 
  <tr>
  <th colspan=2 class="full" style="height: 39px; font-size: medium; font-family: Arial, Helvetica, sans-serif; font-weight: normal;">
	
		ENTER ORPHAN DETAILS HERE
	</th></tr>
  <tr> 
	<td style="height: 27px; text-align: left;"> 
	<span class="style6">Name:</span><br>
	
	<input type='text' name='fname' id='fname'  maxlength="15" title="Enter first name" class="required">
	  	<span class="fnamespanimgg"></span> <br>
	  	<span id='fnamespan' class=spn></span>

	</td> 
	
	<td  style="height: 27px; width: 35px;"> 
	<span class="style6">Middle Name:</span>
	<input type='text' name='mname' id='mname'  maxlength="15" style="width: 138px; height: 20px" title="Enter Middlename"  >
   <span class="mnamespanimgg"></span><br> 
   <span id='mnamespan' class=spn></span>

	</td></tr>
	

  <tr> 
	<td class="style6" colspan="2" style="height: 11px; text-align: left;"> 
	<span>Last Name:<br>
	</span>
	&nbsp;<input type='text' name='lname' id='lname'   maxlength="15" style="width: 279px" title="Enter Last name" class="required">
	   <span class="lnamespanimgg"></span><br>
	    <span id='lnamespan' class=spn></span>

	</td></tr>
  <tr> 
	<td colspan="2"> 

<div class="demo" style="text-align: left; font-family: Arial, Helvetica, sans-serif; height: 54px; width: 456px;">
<span class="style4">Date of Birth:</span> <br>

<input name="dob" type="text" id="dob" title="Enter Date of Birth" class="required">
   <span class="dobspanimgg"></span><br> 
   <span id='dobspan' class=spn></span>

</div>

	
	</td> </tr>
  <tr> 
	<td style="height: 58px; text-align: left;"> 
	<span class="style6">Gender:</span><b><br>
	<select name="orphan_gender" id="orphan_gender"  style="width: 111px" title="Choose a Gender" class="required">
  <option>Choose Gender</option>
	<option>female</option>
	<option>male</option>
	</select></b>
	<span class="genderspanimgg"></span><br>
   <span id='genderspan' class=spn></span>
   </td> 
    
	<td style="height: 58px; width: 35px;"> 
		<span class="style6">Race:</span><b><br>
		</b>
	<select name="race" id="race" style="width: 113px" title="Choose a Race" class="required">
  <option>Choose Race</option>
	<option>Black</option>
	<option>White</option>
	<option>Coloured</option>
	<option>Other</option>
	</select>
	<span class="racespanimgg"></span><br>
   <span id='racespan' class=spn></span>
	</td> </tr>
	
	<tr class="style5">
	<td>
	<span class="style6"><span class="normal">Type</span>:</span> <b> <br>
	</b>
	<select name="type" id="type" style="width: 113px" title="Choose an Orphan Type" class="required">
  <option>Choose Type</option>
	<option>Double</option>
	<option>Parternal</option>
	<option>Maternal</option>
	<option>Social Welfare</option>
	</select>
	<span class="typespanimgg"></span><br>
   <span id='typespan' class=spn></span>
	</td>
	<td style="width: 35px">
	<span class="style6">Location:</span><b><br>  
	</b>  
	<input type='text' name='location' id='location'  maxlength="15" style="width: 151px; height: 23px" title="Enter a Location" >
	<span class="locationspanimgg"></span><br>
   <span id='locationspan' class=spn></span>
	</td></tr>

	<tr>
	<td style="height: 576px;" colspan="2" class="style1">
	
	<hr style="width: 314px; height: -43px; text-align: left;" class="style1">

<div class="demo">

<div id="accordion" style="height: 504px; width: 265px;" class="style14">
	<h3 class="style1" style="width: 286px"><span class="full"><span class="style8">
	Social Worker:</span></span></h3>
	<div style="width: 279px; height: 37px;">
		<p class="style1"> <span class="style3">
		
		<select name="social_worker" style="width: 135px" >
		<option >------Select------------</option>	
	<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
      
        $fname = "SELECT social_worker_id, social_worker_fname, social_worker_lname FROM social_worker";
        $query_result = mysql_query($fname);
       
        while($result = mysql_fetch_assoc($query_result))         
     
          {
        ?>
            <option value = "<?php echo $result['social_worker_id']?>"><?php echo $result['social_worker_fname']?>&nbsp;&nbsp;<?php echo $result['social_worker_lname']?></option>
      <?php
        };

    ?>		</select> 
    <span class="social_workerspanimgg"></span>
   <span id='social_workerspan' class=spn></span>	&nbsp;&nbsp;
		<a target="I4" href="sw_input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6"></a>&nbsp;
		</p>
	</div>
	<h3 class="style13" style="width: 286px">
	<span class="normal">Handler</span>:</h3>
	<div style="width: 291px; height: 40px;">
		<p class="style1"> 
		&nbsp;<span><select name="handler" style="width: 135px" >
		<option >-------Select--------------</option>
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $fname = "SELECT handler_id ,handler_fname, handler_lname FROM handler";
        $query_result = mysql_query($fname);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>
            <option value = "<?php echo $result['handler_id']?>"><?php echo $result['handler_fname']?>&nbsp;&nbsp;<?php echo $result['handler_lname']?></option>
        <?php
        };

    ?>  
		</select>
		<span class="handlerspanimgg"></span>
   <span id='handlerspan' class=spn></span>
		
		&nbsp;&nbsp; <a target="I4" href="handler_input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6"></a>&nbsp;
		</p>
	</div>
	<h3 class="style1" style="width: 286px"><span class="style8">Next of Kin:</span></span></h3>
	<div style="width: 281px; height: 36px;">
		<p class="style1" style="width: 276px"> 
			&nbsp;<select name="next_of_kin" style="width: 135px" >
		<option >------Select------------</option>
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $fname = "SELECT next_of_kin_id, kin_fname, kin_lname FROM next_of_kin";
        $query_result = mysql_query($fname);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>
            <option value = "<?php echo $result['next_of_kin_id']?>"><?php echo $result['kin_fname']?>&nbsp;&nbsp;<?php echo $result['kin_lname']?></option>
        <?php
        };

    ?>  
		</select>
		<span class="next_of_kinspanimgg"></span>
   <span id='next_of_kinspan' class=spn></span>		
			&nbsp;&nbsp;<a target="I4" href="kin_input.php"><img src="../../icons/Add.png" width="21" height="19" class="style6"></a>&nbsp;&nbsp;
			</p>
	</div>
	<h3 class="style1" style="width: 286px; font-weight: normal; color: #000000;">School:</h3>
	<div style="width: 282px; height: 42px;">
		<p class="style1" style="width: 276px"> 
			&nbsp;<select name="school" style="width: 135px" >
		<option >-------Select--------------</option>
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $name = "SELECT school_id ,school_name FROM school";
        $query_result = mysql_query($name);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>
            <option value = "<?php echo $result['school_id']?>"><?php echo $result['school_name']?></option>
        <?php
        };

    ?>
    </select>
    <span class="schoolspanimgg"></span>
   <span id='schoolspan' class=spn></span>
    &nbsp;&nbsp; <a target="I4" href="sch_input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6"></a>&nbsp;<span class="style1">
			</span>
			</p>
	</div>
	<h3 class="style1" style="width: 286px; font-weight: normal; color: #000000;">Hospital:</h3>
	<div style="width: 285px; height: 32px;">
		<p class="style1"> 
			&nbsp;<select name="hospital" style="width: 135px" >
		<option >-------Select--------------</option>
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $name = "SELECT hospital_id ,hospital_name FROM hospital";
        $query_result = mysql_query($name);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>
            <option value = "<?php echo $result['hospital_id']?>"><?php echo $result['hospital_name']?></option>
        <?php
        };

    ?>
    </select>
    <span class="hospitalspanimgg"></span>
   <span id='hospitalspan' class=spn></span>
    		&nbsp;&nbsp;<a target="I4" href="hosp_input.php"><img src="../../icons/Add.png" width="21" height="19" class="style6"></a> 
			&nbsp;<span class="style1">
			</span></p>
	</div>
	<h3 class="style13" style="width: 286px">Adoption:</h3>
	<div style="width: 295px; height: 0px;">
		<p class="style1" style="width: 248px; height: 25px;"> 
			&nbsp;<select name="adoption" style="width: 135px" >
		<option >-------Select--------------</option>
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $fname = "SELECT adoption_id,adoption_name FROM adoption";
        $query_result = mysql_query($fname);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>
            <option value = "<?php echo $result['adoption_id']?>"><?php echo $result['adoption_name']?></option>
        <?php
        };

    ?>
    </select>
    <span class="adoptionspanimgg"></span>
   <span id='adoptionspan' class=spn></span>
    &nbsp;&nbsp; <a target="I4" href="adopt_input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6"></a>&nbsp;
			</p>
	</div>
	</div>
	
	<tr>
		<td colspan='2' class="style4" style="height: 44px; text-align: left;">
                <div class="style10" style="width: 325px">
	<input type='submit' name='Submit3' value='Save' style="width: 75px" ><b>&nbsp;&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<input type='reset' name='reset' value='Reset' style="width: 78px" ></div>


            	<b>&nbsp;</b></td> 
	</tr>

	</div>
	</div>
	</td></table>
	






            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>
