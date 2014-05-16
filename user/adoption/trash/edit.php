<?php
include_once '../../login1/user-class.php';
$admin = new itg_user();
$admin->_authenticate();
?>


<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['name']))
{
	//here the id that we post is the same id that we get from url
	//id indicates the id of this data which we are editing
	//id is unique and a particular id is associated with particular data	
	$id = $_GET['ID'];
	
	
	
	$name=$_POST['name'];
	$description=$_POST['description'];
	$comment=$_POST['comment'];
	$number=$_POST['number'];
	$rating=$_POST['rating'];
	$orphan=$_POST['orphan'];
	$socialworker=$_POST['socialworker'];
	$adopter=$_POST['adopter'];
	

		//updating the table
		$result=mysql_query("
						UPDATE 
								`adoption` 
						SET 
								`orphan_id`='$orphan',`social_worker_id`='$socialworker',
								`adopter_id`='$adopter',`adoption_name`='$name',
								`description`='$description',`comment`='$comment',`visit_number`='$number',
								`rating`='$rating'
						WHERE 
								adoption_id=$id")
		
		or die(mysql_error());

		
		header("Location:../placeholder1.htm");		 
			
}
	
?>
<?php
include_once("../../connections/config.php");
//for displaying data of this particular data
if (isset($_GET['user_id'])){

//getting id from url
$id = $_GET['adoption_id'];

//selecting data associated with this particular id
$result=mysql_query("SELECT * FROM adoption WHERE adoption_id=$id")
or die(mysql_error());
while($res=mysql_fetch_array($result))
{

	
	$orphan_id=$res['orphan_id'];
	$social_worker_id=$res['social_worker_id'];
	$adopter_id=$res['adopter_id'];
	$name=$res['adoption_name'];
	$description=$res['description'];
	$comment=$res['comment'];
	$number=$res['visit_number'];
	$rating=$res['rating'];
}
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

<style type="text/css">
.style16 {
	margin-right: 2;
}
.style17 {
	border-width: 0px;
	font-weight: normal;
}
.style19 {
	border-width: 0px;
	font-weight: normal;
	text-align: left;
	color: #060606;
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
<form action="edit1.php?ID=<?php echo $_GET['adoption_id'];?>" method="post" name = "form1" style="width: 698px; height: 998px;" class="style16">

<div style="position: absolute; width: 686px; height: 870px; z-index: 1; left: 9px; top: 22px" id="layer8">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 610px;">
                <div class="top-bar">
                    <h1>EDIT ADOPTION PROCESS</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Edit 
						Adoption</div>
                </div>

  <table class="listing" cellpadding="0" cellspacing="0" style="width: 90%; height: 661px">
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
		<input type="text" name="name" id='name'  maxlength="15" style="width: 135px; height: 22px;" title="Type First Name Here" value="<?php echo $name;?>" /></td>
      <td style="height: 61px; " class="style15"><span class="style16">
		Description:</span><br>
		&nbsp;<textarea name="description" style="width: 173px; height: 65px" rows="1" cols="20" id="description"><?php echo $description;?></textarea></td>
    </tr>
	<tr>
      <td style="height: 26px; " colspan="2">
		<span class="style16">Comment:</span><br>
		<input type="text" name="comment" maxlength="15" style="width: 298px; height: 21px" title="Type Last Name Here" value="<?php echo $comment;?>" id="comment"/></td>
    </tr>
    <tr>
      <td style="height: 41px; width: 111px;">Visit <span class="style6">Number:<br>
		&nbsp;&nbsp;&nbsp;&nbsp;</span><span id='fnamespan0' class=style17 > </span>
		<span class="style6">&nbsp;&nbsp; </span> 
		<select name="number" style="width: 132px" id="number">
		<option><?php echo $number;?></option>
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
		<select name="rating" style="width: 137px" id="rating">
		<option><?php echo $rating;?></option>
		<option value="1">Very poor</option>
		<option value="2">Poor</option>
		<option value="3">Fair</option>
		<option value="4">Good</option>
		<option value="5">Excellent</option>
		</select><br />
		</td>
    </tr>
	<td style="height: 332px;" colspan="2" class="style1">
	
<div class="demo" style="height: 352px">

<div id="accordion">
	<h3 class="style19" style="width: 206px">Orphan:</h3>
	<div style="width: 211px; height: 62px;">
		<p class="style1"> <span class="style3"><span class="normal">&nbsp;
		</span>
		<select name="orphan" style="width: 135px" id="orphan" >
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
      
        $fname = "SELECT orphan_id, orphan_fname, orphan_lname FROM orphans WHERE orphan_id= adoption_id";
        $query_result = mysql_query($fname);
       
        while($result = mysql_fetch_assoc($query_result))         
     
          {
        ?>
	<option ><?php echo $result['orphan_fname']?>&nbsp;&nbsp;<?php echo $result['orphan_lname']?></option>
		  <?php
        };

    ?>
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
		</select><span class="normal">&nbsp;&nbsp;
		<a target="I3" href="../social_worker/input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6"></a>&nbsp;
		</span>
		</p>
	</div>
	<h3 class="style19" style="width: 215px"> Social Worker:</h3>
	<div style="width: 218px; height: 62px;">
		<p class="style1"> <span class="normal">&nbsp;
		</span>
		<select name="socialworker" style="width: 135px" id="socialworker" >
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
        $fname = "SELECT social_worker_id,social_worker_fname,social_worker_lname FROM social_worker WHERE social_worker_id = adoption_id ";
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
		</select><span class="normal">&nbsp;&nbsp;
		<a target="I3" href="../social_worker/input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6"/></a>&nbsp;
		</span>
		</p>
	</div>
	<h3 class="style19" style="width: 229px">Adopter:</h3>
	<div style="width: 230px; height: 59px;">
		<p class="style1"> <span class="normal">&nbsp;
		</span>
		<select name="adopter" style="width: 135px" id="adopter" >
		<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
      
        $fname = "SELECT adopter_id, adopter_fname, adopter_lname FROM adopter WHERE adopter_id = adoption_id";
        $query_result = mysql_query($fname);
       
        while($result = mysql_fetch_assoc($query_result))         
     
          {
        ?>

		<option value = "<?php echo $result['adopter_id']?>"><?php echo $result['adopter_fname']?>&nbsp;&nbsp;<?php echo $result['adopter_lname']?></option>
		 <?php
        };
		?>
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
		</select><span class="normal">&nbsp;&nbsp;
		<a target="I3" href="../adopter/input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6"/></a>&nbsp;
		</span>
		</p>
	</div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   	</div>
	<tr>
	<td style="height: 76px;" colspan="2">
	
                <div class="select-bar" style="width: 525px">
				<span class="style3">
		<p style="height: 39px; width: 505px;"> 

	<input type='submit' name='submit' value='save' style="width: 99px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='submit' name='reset' value='Reset' style="width: 99px" /></p>
		        </div>
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

