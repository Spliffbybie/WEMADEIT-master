<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{
	//here the id that we post is the same id that we get from url
	//id indicates the id of this data which we are editing
	//id is unique and a particular id is associated with particular data	
	$id = $_POST['id'];
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$race=$_POST['race'];
	$type=$_POST['type'];
	$location=$_POST['location'];
			
	// checking empty fields
	if(empty($fname) || empty($lname) || empty($dob) || empty($gender)||empty($race)|| empty($type) ||
	 empty($location))
{
//if name field is empty
		if(empty($fname))
		{
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		//if age field is empty
		if(empty($lname))
		{
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		//if email field is empty
		if(empty($dob))
		{
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		//if gender field is empty
		if(empty($gender))
		{
			echo "<font color='red'>Gender</font><br/>";
		}
		//if racce field is empty
		if(empty($race))
		{
			echo "<font color='red'>Race</font><br/>";
		}
		//if Type field is empty
		if(empty($type))
		{
			echo "<font color='red'>Type</font><br/>";
		}
		//if Location field is empty
		if(empty($location))
		{
			echo "<font color='red'>Location</font><br/>";
		}
		
	}	
	else
	{	
		//updating the table
		$result=mysql_query("UPDATE orphans SET firstname='$fname',surname='$lname',dob='$dob',
		gender='$gender',race='$race',type='$type',location='$location'	WHERE id=$id");
		
		header("Location: add.html");		 
		
	}	
}
	
?>
<?php
//for displaying data of this particular data

//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result=mysql_query("select * from orphans where id=$id");

while($res=mysql_fetch_array($result))
{
	$fname = $res['firstname'];
	$lname = $res['surname'];
	$dob = $res['dob'];
	$gender = $res['gender'];
	$race = $res['race'];	
	$type = $res['type'];
	$location = $res['location'];
}
?>
<html>
<title>Edit Data</title>
<body>
<form name="form1" method="post" action="edit.php">
<table border="0">
 <tr>
		<td>First Name:</td>
	</tr>
	<tr>
		<td>
		<input type="text" name="fname" title="Enter the orphans First Name" value=<?php echo $fname;?>></td>
	</tr>
<tr>
		<td>Last Name:</td>
	</tr>
	<tr>
		<td><input type="text" name="lname" title="Enter the orphans Last Name" value=<?php echo $lname;?>></td>
	</tr>
	<tr>
		<td>Date Of Birth:</td>
	</tr>
	<tr>
		<td><input type="text" name="dob" title="yyyy/mm/dd" value=<?php echo $dob;?>></td>
	</tr>
	<tr>
		<td>Gender :</td>
	</tr>
	<tr>
		<td><select name="gender" title="Select from list" >
		<option><?php echo $gender;?></option>
		<option>male</option>
		<option>female</option>
		</select></td>
	</tr>
	<tr>
		<td>Race:</td>
	</tr>
	<tr>
		<td><select name="race" title="Select a race">
		<option><?php echo $race;?></option>
		<option>-Select-</option>
		<option>White</option>
		<option>Colored</option>
		<option>Indian</option>
		<option>Other</option>
		<option>Chinese</option>
		<option>Black</option>
		</select></td>
	</tr>
	<tr>
		<td>Orphan Type:</td>
	</tr>
	<tr>
		<td><select name="type" title="Select an Orphan Type">
		<option><?php echo $type;?></option>
		<option>Double</option>
		<option>Parternal</option>
		<option>Maternal</option>
		<option>Social Welfare</option>
		</select></td>
	</tr>
       <tr>
		<td>Location:</td>
	</tr>
	<tr>
		<td>
		<input type="text" name="location" title="Enter the orphans last reported location" value=<?php echo $location;?>></td>
	</tr>
   <tr>
    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>>    </td></tr>
   <tr><td><input type="submit" name="update" value="Update"></td></tr> 
  </table>
</form>

</body>
</html>