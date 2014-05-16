<?php
//including the database connection file
include_once("../../connections/config.php");

if(isset($_POST['user_username']))
{
// username and password sent from Form

$username=mysql_real_escape_string($_POST['user_username']);
$password=mysql_real_escape_string($_POST['user_password']);
$password2=mysql_real_escape_string($_POST['user_password2']);
$password= md5( trim($password)); // Encrypted Password
$password2= md5( trim($password2)); // Encrypted Password
$role=mysql_real_escape_string($_POST['user_role']);


	
	 /* so, the form has been posted, we'll process the data in three steps:
		1.	Check the data
		2.	Let the user refill the wrong fields (if necessary)
		3.	Save the data 
	*/
	$errors = array(); /* declare the array for later use */

	if(isset($_POST['user_username']))
	{
		//the user name exists
		if(!ctype_alnum($_POST['user_username']))
		{
			$errors[] = 'The username can only contain letters and digits.';
		}
		if(strlen($_POST['user_username']) > 30)
		{
			$errors[] = 'The username cannot be longer than 30 characters.';
		}
	}
	else
	{
		$errors[] = 'The username field must not be empty.';
	}
	
	
	if(isset($_POST['user_password']))
	{
		if($_POST['user_password'] != $_POST['user_password2'])
		{
			$errors[] = 'The two passwords did not match.';
		}
	}
	else
	{
		$errors[] = 'The password field cannot be empty.';
	}
		
		
		
	
	

	
	if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
	{
		echo 'Uh-oh.. a couple of fields are not filled in correctly..<br /><br />';
		echo '<ul>';
		foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
		{
			echo '<li>' . $value . '</li>'; /* this generates a nice error list */
		}
		echo '</ul>';
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)
	{	
	
		//the form has been posted without, so save it
		//notice the use of mysql_real_escape_string, keep everything safe!
		//also notice the sha1 function which hashes the password
		$sql = "INSERT INTO
					`users` (user_username, user_password,user_password2,user_role)
				VALUES('" . mysql_real_escape_string($_POST['user_username']) . "',
					   '" . sha1($_POST['user_password']) . "',
					    '" . sha1($_POST['user_password2']) . "',
					   '" . mysql_real_escape_string($_POST['user_role']) . "'
						)";
						
		$result = mysql_query($sql);
		if(!$result)
		{
			//something went wrong, display the error
			echo 'Something went wrong while registering. Please try again later.';
			//echo mysql_error(); //debugging purposes, uncomment when needed
		}
		else
		{


		
		//display success message
		echo "User Successfully registered.";
		header ("refresh:5;url=../placeholder1.htm");
	
}	
}
}	
?>