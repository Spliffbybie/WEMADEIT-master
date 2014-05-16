<?php
//for displaying data of this particular data
include_once("../../connections/config.php");

//getting id from url

$id = $_GET['orphan_id'];

//selecting data associated with this particular id
$result=mysql_query("select * FROM orphans WHERE orphan_id=$id");

while($res=mysql_fetch_array($result))
{
	$fname = $res['orphan_fname'];
	$mname = $res['orphan_mname'];
	$lname = $res['orphan_lname'];
	$dob = $res['dob'];
	$gender = $res['orphan_gender'];	
	$race = $res['race'];	
	$type = $res['type'];
	$location = $res['location'];
	$social_worker= $res['social_worker_id'];
	$handler= $res['handler_id'];
	$next_of_kin= $res['next_of_kin_id'];
	$school= $res['school_id'];
	$hospital= $res['hospital_id'];

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title ></title>
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

<style type="text/css">
.style1 {
	text-align: left;
}
.style2 {
	color: #000000;
}
.style3 {
	font-weight: normal;
	color: #000000;
}
</style>

</head>
<body >

     <form name='Edit Orphan' method="post" action="edit1.php?ID=<?php echo $_GET['orphan_id'];?>" style="height: 1185px; width: 495px"> 

<div style="position: absolute; width: 483px; height: 532px; z-index: 1; left: 11px; top: 3px" id="layer1">
    <div id="main" style="height: 1080px; width: 472px;">
        <div id="middle" style="height: 1080px; width: 450px;">
            <div id="center-column" style="height: 1161px; width: 420px;">
                <div class="top-bar" style="width: 427px">
                    <h1 style="width: 408px">Edit Orphan Details</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Edit 
						Orphan</div>
                </div>
				<table align="left"  class="listing" cellpadding="0" cellspacing="0" style="width:200px; height: 1000px; ">
 
  <tr>
  <th colspan=2 class="full" style="height: 39px; font-size: medium;">
	
		ENTER ORPHAN DETAILS HERE
	</th></tr>
	                      
  <tr> 
	<td class="style3" style="height: 46px; text-align: left;"> 
	Name:<br>
	<input type='text' name='fname' id='fname'  maxlength="15" title="Enter first name" value="<?php echo $fname;?>" >
	<span class="fnamespanimgg"></span> <br> <span id='fnamespan' class=spn></span></td> 
	<td  style="height: 46px; width: 149px;"> 
	<span class="style12">Middle Name</span><span class="style3"><br>
	<input type='text' name='mname' id='mname'  maxlength="15" style="width: 138px; height: 20px" title="Enter Middlename" value="<?php echo $mname;?>"  ></span>
	<span class="mnamespanimgg"></span> <span class="style3"> <br> </span> 
	<span id='mnamespan' class=spn></span>
	</td></tr>
	

  <tr> 
	<td class="style3" colspan="2" style="height: 11px; text-align: left;"> 
	<span class="style3"><span class="style11">Last Name</span></span><span class="style5"><span class="style3"><br>
	</span>
	</span>
	<span class="style3">
	<input type='text' name='lname' id='lname'   maxlength="15" style="width: 331px" title="Enter Last name" value="<?php echo $lname;?>" ><span class="lnamespanimgg"></span></span>
	<span class="lnamespanimgg"></span> <span class="style3"> <br> </span> 
	<span id='lnamespan' class=spn></span>
	</td></tr>
  <tr> 
	<td colspan="2"> 

<div class="style9" style="height: 58px; width: 375px;">
<span class="style13">Date of Birth:</span><br>
<span class="style3">
<input name="dob" type="text" id="dob" title="Enter Date of Birth" value="<?php echo $dob;?>" >
<span class="dobspanimgg"></span>
<span id='dobspan' class=spn></span></span>
</div>

	
	</td> </tr>
  <tr> 
	<td style="height: 58px; text-align: left;"> 
		&nbsp;<span class="style13">Gender:</span><br>
	<select name="orphan_gender" id="orphan_gender"  style="width: 111px" title="Choose a Gender">&nbsp;&nbsp;
	

	<option><?php echo $gender;?></option>
	<option>female</option>
	<option>male</option>
	</select>&nbsp;&nbsp; <br>
	<span class="genderspanimgg"></span>  
	<span id='genderspan' class=spn></span>
	</td>  
	<td style="height: 58px; width: 149px;"> 
		<span class="style13">Race:</span><br>
	<select name="race" id="race" style="width: 113px" title="Choose a Race">&nbsp;&nbsp;
	

	<option><?php echo $race;?></option>
	<option>Black</option>
	<option>White</option>
	<option>Coloured</option>
	<option>Other</option>
	</select>
	<span class="racespanimgg"></span>
	<span id='racespan' class=spn></span></td> </tr>
	<tr class="style5">
	<td>
	<span class="style8"><span class="style13"> Type:</span></span> <br>
	<select name="type" id="type" style="width: 113px" title="Choose an Orphan Type"  >&nbsp;&nbsp;
	<option><?php echo $type;?></option>
	<option>Double</option>
	<option>Parternal</option>
	<option>Maternal</option>
	<option>Social Welfare</option>
	</select><br>
	<span class="typespanimgg"></span> 	 
	<span id='typespan' class=spn></span>
	</td>
	<td>
	&nbsp;</td></tr>

	<tr>
	<td style="height: 51px;" colspan="2">
	<span class="style3">
	<span class="style13">Location:</span><br>  
	<input type='text' name='location' id='location'  maxlength="15" style="width: 261px; height: 23px" title="Enter a Location" value="<?php echo $location;?>"></span>
	<span class="locationspanimgg"></span> <span class="style3"> <br> </span> 
	<span id='locationspan' class=spn></span>
<span class="style3">&nbsp; 
	
	</span> 
	
	</td></tr>

	<tr>
	<td style="height: 51px;" colspan="2" class="style1">
	
	<hr style="width: 404px; height: -15px" class="style1">

<div class="demo">

<div id="accordion" style="width: 230px; height: 430px;" class="style1">
	<h3 class="style1" style="width: 230px; margin-left: 0px;"><span class="full">
	<span class="style11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span class="style2">Social Worker</span></span></span></h3>
	<div style="width: 194px; height: 62px;">
		<p class="style1" style="width: 230px; margin-left: 0px;"> <span class="style3">
		<select name="social_worker" style="width: 135px" class="bold" >
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $fname = "SELECT social_worker_id,social_worker_fname,social_worker_lname FROM social_worker WHERE social_worker_id = orphan_id ";
        $query_result = mysql_query($fname);
        while($result = mysql_fetch_assoc($query_result)) 
        {
        ?>

		<option ><?php echo $result['social_worker_fname']?>&nbsp;&nbsp;<?php echo $result['social_worker_lname']?></option>
		 <?php
        };
		?>
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $fname = "SELECT social_worker_id,social_worker_fname,social_worker_lname FROM social_worker ";
        $query_result = mysql_query($fname);
        while($result = mysql_fetch_assoc($query_result)) 
        {
        ?>
            <option value = "<?php echo $result['social_worker_id']?>"><?php echo $result['social_worker_fname']?>&nbsp;&nbsp;<?php echo $result['social_worker_lname']?> </option>
        <?php
        };

    ?>  
		</select>&nbsp;&nbsp;
		<a target="I3" href="../social_worker/input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6" title="new social worker"></a>&nbsp; </p></div> 
		
	<h3 class="style1" style="width: 230px; margin-left: 0px;"><span class="style9"><span class="normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span class="style2">Handler:</span></span></span></h3>
	</span>
	<div style="width: 230px; margin-left: 0px;">
		<p class="width: 230px; margin-left: 0px;"> 
		&nbsp;<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<select name="handler" style="width: 135px" class="bold" >
			<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $fname = "SELECT handler_id,handler_fname,kin_lname handler WHERE handler_id = orphan_id ";
        $query_result = mysql_query($fname);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>

		<option ><?php echo $result['handler_fname']?></option>
		    <?php
        };

    ?>
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $fname = "SELECT handler_id,handler_fname,handler_lname FROM handler ";
        $query_result = mysql_query($fname);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>
            <option value = "<?php echo $result['handler_id']?>"><?php echo $result['handler_fname']?>&nbsp;&nbsp;<?php echo $result['handler_lname']?></option>
        <?php
        };

    ?>  
		</select>&nbsp;&nbsp; <a target="I3" href="../handler/input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6"></a>&nbsp; </p>
	</div>
	<h3 class="style1" style="width: 230px; margin-left: 0px;"><span class="style8">
	<span class="style4"><span class="style3">Next </span><span class="style2">
	of Kin:</span></span></span></span></h3>
	<div style="width: 230px; margin-left: 0px;">
		<p class="style1"> 
			&nbsp;<span class="style3"><select name="next_of_kin" style="width: 135px" class="bold" >
			<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $fname = "SELECT next_of_kin_id,kin_fname,kin_lname FROM next_of_kin WHERE next_of_kin_id = orphan_id ";
        $query_result = mysql_query($fname);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>

		<option ><?php echo $result['kin_fname']?>&nbsp;&nbsp;<?php echo $result['kin_lname']?> </option>
		  <?php
        };

    ?> 
		
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $fname = "SELECT next_of_kin_id,kin_fname,kin_lname FROM next_of_kin ";
        $query_result = mysql_query($fname);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>
            <option value = "<?php echo $result['next_of_kin_id']?>"><?php echo $result['kin_fname']?>&nbsp;&nbsp;<?php echo $result['kin_lname']?> </option>
        <?php
        };

    ?>  
		</select>&nbsp;&nbsp;<a target="I3" href="../Next_of_kin/input.php"><img src="../../icons/Add.png" width="21" height="19" class="style6"></a>&nbsp;&nbsp; </p>
	</div>
	<h3 class="style1" style="width: 230px; margin-left: 0px;"><span class="style8">
	<span class="style4"><span class="style2">School:</span></span></span></span></h3>
	<div style="width: 230px; margin-left: 0px;">
		<p class="style1" style="width: 230px; margin-left: 0px;"> 
			&nbsp;<span class="style3"><select name="school" style="width: 135px" class="bold" >
				<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $name = "SELECT school_id,school_name FROM school WHERE school_id = orphan_id ";
        $query_result = mysql_query($name);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>

		<option ><?php echo $result['school_name']?></option>
		   <?php
        };

    ?>

		
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $name = "SELECT school_id,school_name FROM school ";
        $query_result = mysql_query($name);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>
            <option value = "<?php echo $result['school_id']?>"><?php echo $result['school_name']?></option>
        <?php
        };

    ?>
    </select>&nbsp;&nbsp; <a target="I3" href="../school/input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6"></a>&nbsp;<span class="style1">
			</span>
			</p>
	</div> 
		
	<h3 class="style1" style="width: 230px; margin-left: 0px;"><span class="style8">
	<span class="style4"><span class="style2">Hospital:</span></span></span></span></h3>
	<div style="width: 230px; margin-left: 0px;">
		<p class="width: 230px; margin-left: 0px;"> 
			&nbsp;<span class="style3"><select name="hospital" style="width: 135px" class="bold" >
			<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $name = "SELECT hospital_id,hospital_name FROM hospital WHERE hospital_id = orphan_id";
        $query_result = mysql_query($name);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>

		
		<option ><?php echo $result['hospital_name']?></option>
		    <?php
        };

    ?>

		
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $name = "SELECT hospital_id,hospital_name FROM hospital";
        $query_result = mysql_query($name);
        while($result = mysql_fetch_assoc($query_result))
        {
        ?>
            <option value = "<?php echo $result['hospital_id']?>"><?php echo $result['hospital_name']?></option>
        <?php
        };

    ?>
    </select>&nbsp;&nbsp;<a target="I3" href="../hospital/input.php"><img src="../../icons/Add.png" width="21" height="19" class="style6"></a> 
			&nbsp;<span class="style1">
			</span></p>
	</div>
	
	</span>
	</div>
	
	</div>
                    
</tr>
	<tr>	
	

		<td colspan='2' class="style4" style="height: 44px; text-align: left;">                <div class="select-bar" style="width: 375px">
	<span class="style3">
	<input type='submit' name='update' value='Update' style="width: 99px" ></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style3">&nbsp;&nbsp;&nbsp;&nbsp;
	
	<input type='reset' name='reset' value='Reset' style="width: 99px" ></span></div>


            	</td> 
            	</tr>
            	
</table>


            </div>
        	<br>
        </div>
    </div>
</div>
</form>
</body>
</html>

