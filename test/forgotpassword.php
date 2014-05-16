
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result=mysql_query("SELECT * FROM orphans ORDER BY id DESC");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Choose Secret Question</title>
</head>

<body>
<form action="add.php" method="post" name = "form1">
<p>Your Secret Question<label> is :</label>&nbsp;
<label id="Label1">xxxxx</label>


</p>
<p>Answer<label> :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>&nbsp;<input type="text" name="question" style="width: 162px"/><br/>
</p>
<p>
<input type="submit" value=" Submit "/></p>
</form>
</body>

</html>
