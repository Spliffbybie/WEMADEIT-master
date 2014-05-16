<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>All Orphans&nbsp;&nbsp; Add Orphan</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../js/validadoption.js"></script>
<script type="text/javascript" src="../../js/jquery1.js" ></script>
<link rel="stylesheet" href="../../css/style1.css" type="text/css" />

<style type="text/css">
.style16 {
	margin-right: 2;
}
.style17 {
	border-width: 0px;
	font-weight: normal;
}
.style19 {
	font-weight: normal;
	color: #060606;
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
//$termserr="Required";//Error message for terms checkbox
</script>

<body>
<form action="save.php" method="post" name = "form1" style="width: 562px; height: 816px;" class="style16">
<div style="position: absolute; width: 514px; height: 745px; z-index: 1; left: 9px; top: 22px" id="layer8">
    <div id="main" style="height: 729px; width:510px;">
        <div id="middle" style="height: 757px; width:539px;">
            <div id="center-column" style="height: 721px; width: 473px;">
                <div class="top-bar" style="width: 472px">
                    <h1>New Adoption</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /New 
						Adoption Process</div>
                </div>
				<div style="position: absolute; width: 460px; height: 658px; z-index: 1; left: 32px; top: 73px" id="layer9">

  <table class="listing" cellpadding="0" cellspacing="0" style="width: 99%; height: 546px">
  <!-- <tr><td>Username </td> <td> 
	<input type='text' name='username' id='username' class="pop_txt"  maxlength="15" >&nbsp;&nbsp;<span class="usernamespanimgg"></span> <br> <span id='usernamespan' class=spn></span></td></tr>
  -->
 
    <tr>
    <th colspan="2" style="height: 14px" class="full" >Adoption PROCESS<br>
	</th>
    </tr>
    <tr>
      <td style="height: 61px; " class="style15">
		<span class="style16">Adoption Name:</span><br>
		<input type="text" name="name" id='name'  maxlength="15" style="width: 135px; height: 22px;" title="Type First Name Here" /></td>
      <td style="height: 61px; " class="style15"><span class="style16">
		Description:</span><br>
		&nbsp;<textarea name="description" style="width: 173px; height: 65px" rows="1" cols="20"></textarea></td>
    </tr>
	<tr>
      <td style="height: 26px; " colspan="2">
		<span class="style16">Comment:</span><br />
		<textarea name="comment" style="width: 173px; height: 65px" rows="1" cols="20"></textarea></td>
    </tr>
    <tr>
      <td style="height: 41px; width: 111px;">Visit <span class="style6">Number:<br>
		&nbsp;&nbsp;&nbsp;&nbsp;</span><span id='fnamespan0' class=style17 > </span>
		<span class="style6">&nbsp;&nbsp; </span> 
		<select name="number" style="width: 132px">
		<option>------select--------</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="11">11</option>
		<option value="12">12</option>
		</select></td>
      <td style="height: 41px; width: 314px;" class="style6">Rating:<br>
		<select name="rating" style="width: 137px">
		<option>------select-------</option>
		<option >Very poor</option>
		<option >Poor</option>
		<option >Fair</option>
		<option >Good</option>
		<option >Excellent</option>
		</select><br />
		</td>
    </tr>
	<td style="height: 280px;" colspan="2" class="style1">
	
<div class="demo" style="height: 275px; width: 244px;">

<div id="accordion" style="width: 233px; height: 263px">
	<h3 class="style19" style="width: 222px">Orphan:</h3>
	<div style="width: 222px; height: 33px;">
		<p class="style1"> <span class="style3">&nbsp;<select name="orphan" style="width: 135px" class="bold" >
		<option >------Select------------</option>
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
      
        $fname = "SELECT orphan_id, orphan_fname, orphan_lname FROM orphans";
        $query_result = mysql_query($fname);
       
        while($result = mysql_fetch_assoc($query_result))         
     
          {
        ?>
            <option value = "<?php echo $result['orphan_id']?>"><?php echo $result['orphan_fname']?>&nbsp;&nbsp;<?php echo $result['orphan_lname']?></option>
        <?php
        };

    ?>  
		</select>&nbsp;&nbsp;
		<a target="I3" href="../social_worker/input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6"/></a>&nbsp;
		</p>
	</div>
	<h3 class="style19" style="width: 226px"> Social Worker:</h3>
	<div style="width: 229px; height: 34px;">
		<p class="style1"> &nbsp;
		<select name="socialworker" style="width: 135px" class="bold" >
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

    ?>  
		</select>&nbsp;&nbsp;
		<a target="I3" href="../social_worker/input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6"/></a>&nbsp;
		</p>
	</div>
	<h3 class="style19" style="width: 229px">Adopter:</h3>
	<div style="width: 233px; height: 40px;">
		<p class="style1"> &nbsp;
		<select name="adopter" style="width: 135px" class="bold" >
		<option >------Select------------</option>
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
      
        $fname = "SELECT adopter_id, adopter_fname, adopter_lname FROM adopter";
        $query_result = mysql_query($fname);
       
        while($result = mysql_fetch_assoc($query_result))         
     
          {
        ?>
            <option value = "<?php echo $result['adopter_id']?>"><?php echo $result['adopter_fname']?>&nbsp;&nbsp;<?php echo $result['adopter_lname']?></option>
        <?php
        };

    ?>  
		</select>&nbsp;&nbsp;
		<a target="I3" href="../adopter/input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6"/></a>&nbsp;
		</p>
	</div>
   	</div>
	<tr>
	<td style="height: 74px;" colspan="2">
	
                <div class="select-bar" style="width: 441px">
				<span class="style3">
		<p style="height: 10px; width: 443px;" class="style15"> 

	<input type='submit' name='submit' value='save' style="width: 99px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='reset' name='reset' value='Reset' style="width: 99px" /></p>
		        </div>
            </tr>
   </table>

        		</div>
  
        </div>
            	<span class="style9"><span class="style3">
		<p class="style1"> 
		&nbsp;
        </div >  
        </div>
          </div>
        
</form>
</body>

</html>

