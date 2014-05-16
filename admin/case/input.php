<html>
<head>
<title></title>
<script type="text/javascript">
$empty="Empty Field";//error message for Empty field
$nameerr="Inavalid Name";//Error message for Name field
/*$gendererr="Choose Gender";//Error message for Gender field
$emailerr="Invalid Email";//Error message for Email field
$numbererr="Invalid Number";//Error message for Number field*/
$passworderr="Password Mismatch";//Error message for Password Field
//$termserr="Required";//Error message for terms checkbox
</script>

<script type="text/javascript" src="../../js/validadoption.js"></script>
<script type="text/javascript" src="../../js/jquery1.js" ></script>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
<link  href="../../css/bluehighlight.css" rel="stylesheet" type="text/css" >

<style type="text/css">
.style2 {
	color: #FFFFFF;
	text-align: left;
}
.style3 {
	text-align: left;
}
.style1 {
	border-width: 0px;
}
</style>
</head>

<body>
<form action="save.php" method="post" name = "case" style="width: 523px; height: 660px;">

<div style="position: absolute; width: 505px; height: 638px; z-index: 1; left: 7px; top: 14px" id="layer2" class="style6">

<div style="position: absolute; width: 478px; height: 612px; z-index: 1; left: 9px; top: 11px" id="layer8">
    <div id="main" style="height: 510px; width:448px;">
        <div id="middle" style="height: 546px; width:465px;">
            <div id="center-column" style="height: 490px; width: 430px;">
                <div class="top-bar" style="width: 412px">
                    <h1>New Case</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /New case</div>
                </div>
				<div style="position: absolute; width: 432px; height: 406px; z-index: 1; left: 21px; top: 70px; bottom: 136px;" id="layer9">
  <table class="listing" cellpadding="0" cellspacing="0"  border="0" style="width: 99%; height: 392px">
  
    <tbody class="1">
  
    <tr class="spn"> 
      <th style="height: 38px; " colspan="2">
		<div class="style2">
			ENTER CASE DETAILS</div>
		</th>
    </tr>
<tr> 
      <td style="height: 61px; width: 241px;" class="style15">
		<span class="style16">Case Name:</span><br>
		<input type="text" name="case_name" id='case_name'  maxlength="15" style="width: 135px; height: 22px;" title="Type First Name Here" ></td>
      <td style="height: 61px; " class="style15"><span class="style16">
		Description:</span><br>
		&nbsp;<textarea name="description" style="width: 173px; height: 65px" id="description"></textarea></td>
    </tr>
<tr> 
      <td style="height: 26px; " colspan="2">
		<span class="style16">Comment:</span><br>
		<input type="text" name="comment" maxlength="15" style="width: 298px; height: 21px" title="Type Last Name Here" id="comment"></td>
    </tr>
<tr> 
      <td style="height: 50px; width: 241px;" class="style3">

Case Status:<br>
<select name="status" style="width: 132px" id="status">
<option>------Select------</option>
<option>In progress</option>
<option>Complete</option>
</select></td>
      <td style="height: 50px; " class="style3">

Social Worker:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
<span class="style3">
		
		<select name="social_worker" style="width: 103px" >
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

		</select> 	<a target="I4" href="../social_worker/input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6"></a>&nbsp;
		</span></td>
    </tr>
<tr> 
      <td style="height: 50px; width: 241px;" class="style3">

	Orphan:
	<div style="width: 187px; height: 11px;">
		<p class="style1"> <span class="style3">&nbsp;
		<select name="orphan" style="width: 111px" class="bold" >
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
		<img src="../../icons/Add.png" width="21" height="19" class="style6"></a>&nbsp;
		</p>
	</div>
		</td>
      <td style="height: 50px; " class="style3">

&nbsp;</td>
    </tr>
<tr> 
      <td style="height: 31px; " colspan="2">
                <div class="select-bar" style="width: 313px">
                <span class="style2">
				<input type="submit" name="Submit" value="Save" style="width: 90px" class="pop_but">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" name="reset" value="Reset" style="width: 83px"></span></div>
		</td>
    </tr>
   

  </table>
 				</div>
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