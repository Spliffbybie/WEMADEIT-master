<?php
//including the database connection file
include_once("../../connections/config.php");

//if(isset($_POST['orphan_fname']))
if(isset($_POST['fname']))

{
	//echo '<br /><br />';echo '<br /><br />';
	//var_dump($_POST['orphan_fname']);
	//echo '<br /><br />';echo '<br /><br />';
	//var_dump($_POST['fname']);
	//here the id that we post is the same id that we get from url
	//id indicates the id of this data which we are editing
	//id is unique and a particular id is associated with particular data	
	$id = $_GET['ID'];
	
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dob'];
	$gender=$_POST['orphan_gender'];
	$race=$_POST['race'];
	$type=$_POST['type'];
	$location=$_POST['location'];
	$social_worker=$_POST['social_worker'];
	$handler=$_POST['handler'];
	$next_of_kin=$_POST['next_of_kin'];
	$school=$_POST['school'];
	$hospital=$_POST['hospital'];
	

		//updating the table
		$result=mysql_query("
						UPDATE 
								`orphans`
						SET 	`social_worker_id`='$social_worker',`handler_id` ='$handler',
						   		`next_of_kin_id` = '$next_of_kin',`school_id`='$school',
						   		`hospital_id`='$hospital',
						   		`orphan_fname`='$fname',`orphan_mname`='$mname',
						   		`orphan_lname`='$lname',dob='$dob',`orphan_gender`='$gender',
						   		`race`='$race',`type`='$type',`location`='$location'
						WHERE `orphan_id`=$id
							")
		or die(mysql_error());
			
			echo "Orphan Information Updated Successfully";
			header ("refresh:5; url=../placeholder1.htm");		 
	
	
};
	
?><!--?php
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
	$gender = $res['gender'];	
	$race = $res['race'];	
	$type = $res['type'];
	$location = $res['location'];
	$social_worker=$res['social_worker_id'];
	$handler=$res['handler_id'];
	$next_of_kin=$res['next_of_kin_id'];
	$school=$res['school_id'];
	$hospital=$res['hospital_id'];
	$adoption=$res['adoption_id'];

}
?-->
