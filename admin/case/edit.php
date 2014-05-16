<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['case_name']))
{
	//here the id that we post is the same id that we get from url
	//id indicates the id of this data which we are editing
	//id is unique and a particular id is associated with particular data	
	
	$id = $_GET['ID'];
	
	$case_name = $_POST['case_name'];
	$description = $_POST['description'];
	$comment = $_POST['comment'];
	$case_status = $_POST['status'];
	$social_worker = $_POST['social_worker'];
	$orphan =$_POST['orphan'];
			
	
		//updating the table
		$result=mysql_query("
						UPDATE `case` 
						SET 	`case_name`='$case_name',`description`='$description',`comment`='$comment',
								`status`='$case_status',`social_worker_id`='$social_worker',`orphan_id`='$orphan' WHERE `case_id`=$id
							")
		or die (mysql_error());
		
		echo "<font color='green'>Case Updated successfully.";

		header ("refresh:5;url=../placeholder1.htm");		 
		
	};	

	
?>
<?php
//for displaying data of this particular data

//getting id from url
$id = $_GET['case_id'];

//selecting data associated with this particular id
$result=mysql_query("SELECT * FROM `case` WHERE `case_id`=$id ");

while($res=mysql_fetch_array($result))
{
	$case_name = $res['case_name'];
	$description = $res['description'];
	$comment = $res['comment'];
	$status = $res['status'];
	$social_worker = $res['social_worker_id'];
	$orphan =$res['orphan_id'];

	
	
};
?>
<html>
<head >
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
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >
<link  href="../../css/bluehighlight.css" rel="stylesheet" type="text/css" >

<title>Edit </title>
<style type="text/css">
.style2 {
	text-align: center;
}
.style3 {
	text-align: left;
}
.style1 {
	border-width: 0px;
}
</style>
</head>
<body >
<form action="edit.php?ID=<?php echo $_GET['case_id'];?>" method="post" name = "case" style="width: 523px; height: 660px;">

<div style="position: absolute; width: 505px; height: 638px; z-index: 1; left: 7px; top: 14px" id="layer2" class="style6">

<div style="position: absolute; width: 478px; height: 612px; z-index: 1; left: 9px; top: 11px" id="layer8">
    <div id="main" style="height: 510px; width:448px;">
        <div id="middle" style="height: 546px; width:465px;">
            <div id="center-column" style="height: 490px; width: 430px;">
                <div class="top-bar" style="width: 412px">
                    <h1>Edit Case</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Edit case</div>
                </div>
				<div style="position: absolute; width: 413px; height: 400px; z-index: 1; left: 21px; top: 70px; bottom: 142px;" id="layer9">
  <table class="listing" cellpadding="0" cellspacing="0"  border="0" style="width: 429px; height: 392px; border-top-left-radius: 10px; border-top-right-radius: 10px; -moz-border-radius-topleft: 10px; -moz-border-radius-topright: 10px; -webkit-border-top-left-radius: 10px; -webkit-border-top-right-radius: 10px;">
  
    <tbody class="1">
  
    <tr class="spn"> 
      <th style="height: 38px; " colspan="2" class="full">
		
			ENTER CASE DETAILS
		</th>
    </tr>
<tr> 
      <td style="height: 61px; " class="style15">
		<span class="style16">Case Name:</span><br>
		<input type="text" name="case_name" id='case_name'  maxlength="15" style="width: 135px; height: 22px;" title="Type First Name Here" value="<?php echo $case_name;?>" ></td>
      <td style="height: 61px; " class="style15"><span class="style16">
		Description:</span><br>
		&nbsp;<textarea name="description" style="width: 173px; height: 65px" rows="1" cols="20"><?php echo $description;?></textarea></td>
    </tr>
<tr> 
      <td style="height: 26px; " colspan="2">
		<span class="style16">Comment:</span><br>
		<input type="text" name="comment" maxlength="15" style="width: 298px; height: 21px" title="Type Last Name Here" value="<?php echo $comment;?>"></td>
    </tr>
<tr> 
      <td style="height: 50px; ">

Case Status:<br>
<select name="status" style="width: 132px">
<option><?php echo $res['status']?></option>
<option>In progress</option>
<option>Complete</option>
</select></td>
      <td style="height: 50px; ">

Social Worker:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
<span class="style3">
		
		<select name="social_worker" style="width: 135px" >
		<option >Choose Social Worker</option>	
	<?php
        mysql_connect("localhost","root","");
        mysql_select_db("safehaven");
      
        $fname = "SELECT social_worker_id, social_worker_fname,social_worker_lname FROM social_worker";
        $query_result = mysql_query($fname);
       
        while($result = mysql_fetch_assoc($query_result))         
     
          {
        ?>
            <option value = "<?php echo $result['social_worker_id']?>"><?php echo $result['social_worker_fname']?>&nbsp;&nbsp;<?php echo $result['social_worker_lname']?></option>
      <?php
        }

    ?>

		</select> 	<a target="I4" href="../social_worker/input.php">
		<img src="../../icons/Add.png" width="21" height="19" class="style6"></a>&nbsp;
		</span></td>
    </tr>
<tr> 
      <td style="height: 50px; ">

	Orphan:
	<div style="width: 187px; height: 11px;">
		<p class="style1"> <span class="style3">&nbsp;
		<select name="orphan" style="width: 111px" class="bold" >
		<option >Choose Orphan</option>
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
      <td style="height: 50px; ">

&nbsp;</td>
    </tr>
<tr> 
      <td style="height: 31px; " colspan="2">
                <div class="select-bar" style="width: 313px">
                <span class="style2">
				<input type="submit" name="Submit" value="Update" style="width: 90px" class="style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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