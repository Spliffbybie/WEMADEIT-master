<html>
<head>
<title>ShotDev.Com Tutorial</title>
<style type="text/css">
.style1 {
	border-style: solid;
	border-width: 1px;
}
.style2 {
	border-width: 0px;
}
</style>
</head>
<body>
<?
$objConnect = mysql_connect("localhost","root","Ch1fund0") or die(mysql_error());
$objDB = mysql_select_db("test");

//*** Add Condition ***//

if($_POST["hdnCmd"] == "Add")
{
$strSQL = "INSERT INTO orphan ";
$strSQL .="(ID,FirstName,Surname,Gender,Location,Dob) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["txtAddCustomerID"]."','".$_POST["txtAddName"]."' ";
$strSQL .=",'".$_POST["txtAddEmail"]."' ";
$strSQL .=",'".$_POST["txtAddCountryCode"]."','".$_POST["txtAddBudget"]."' ";
$strSQL .=",'".$_POST["txtAddUsed"]."') ";
$objQuery = mysql_query($strSQL);
if(!$objQuery)
{
echo "Error Save [".mysql_error()."]";
}
//header("location:$_SERVER[PHP_SELF]");
//exit();
}

//*** Update Condition ***//
if($_POST["hdnCmd"] == "Update")
{
$strSQL = "UPDATE orphan SET ";
$strSQL .="ID = '".$_POST["txtEditCustomerID"]."' ";
$strSQL .=",FirstName = '".$_POST["txtEditName"]."' ";
$strSQL .=",Surname = '".$_POST["txtEditEmail"]."' ";
$strSQL .=",Gender = '".$_POST["txtEditCountryCode"]."' ";
$strSQL .=",Location = '".$_POST["txtEditBudget"]."' ";
$strSQL .=",Dob = '".$_POST["txtEditUsed"]."' ";
$strSQL .="WHERE CustomerID = '".$_POST["hdnEditCustomerID"]."' ";
$objQuery = mysql_query($strSQL);
if(!$objQuery)
{
echo "Error Update [".mysql_error()."]";
}
//header("location:$_SERVER[PHP_SELF]");
//exit();
}

//*** Delete Condition ***//
if($_GET["Action"] == "Del")
{
$strSQL = "DELETE FROM orphan ";
$strSQL .="WHERE ID = '".$_GET["CusID"]."' ";
$objQuery = mysql_query($strSQL);
if(!$objQuery)
{
echo "Error Delete [".mysql_error()."]";
}
//header("location:$_SERVER[PHP_SELF]");
//exit();
}

$strSQL = "SELECT * FROM customer";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<form name="frmMain" method="post" action="<?=$_SERVER["PHP_SELF"];?>">
<input type="hidden" name="hdnCmd" value="">
<table width="600" border="1" class="style2">
<tr>
<th width="91" class="style1"> <div align="center">CustomerID </div></th>
<th width="98" class="style1"> <div align="center">Name </div></th>
<th width="198" class="style1"> <div align="center">Email </div></th>
<th width="97" class="style1"> <div align="center">CountryCode </div></th>
<th width="59" class="style1"> <div align="center">Budget </div></th>
<th width="71" class="style1"> <div align="center">Used </div></th>
<th width="30" class="style1"> <div align="center">Edit </div></th>
<th width="30" class="style1"> <div align="center">Delete </div></th>
</tr>
<?
while($objResult = mysql_fetch_array($objQuery))
{
?>

<?
if($objResult["ID"] == $_GET["CusID"] and $_GET["Action"] == "Edit")
{
?>
<tr>
<td class="style1"><div align="center">
<input type="text" name="txtEditCustomerID" size="5" value="<?=$objResult["ID"];?>">
<input type="hidden" name="hdnEditCustomerID" size="5" value="<?=$objResult["ID"];?>">
</div></td>
<td class="style1"><input type="text" name="txtEditName" size="20" value="<?=$objResult["Name"];?>"></td>
<td class="style1"><input type="text" name="txtEditEmail" size="20" value="<?=$objResult["Email"];?>"></td>
<td class="style1"><div align="center"><input type="text" name="txtEditCountryCode" size="2" value="<?=$objResult["CountryCode"];?>"></div></td>
<td align="right" class="style1"><input type="text" name="txtEditBudget" size="5" value="<?=$objResult["Budget"];?>"></td>
<td align="right" class="style1"><input type="text" name="txtEditUsed" size="5" value="<?=$objResult["Used"];?>"></td>
<td colspan="2" align="right" class="style1"><div align="center">
<input name="btnAdd" type="button" id="btnUpdate" value="Update" OnClick="frmMain.hdnCmd.value='Update';frmMain.submit();">
<input name="btnAdd" type="button" id="btnCancel" value="Cancel" OnClick="window.location='<?=$_SERVER["PHP_SELF"];?>';">
</div></td>
</tr>
<?
}
else
{
?>
<tr>
<td class="style1"><div align="center"><?=$objResult["ID"];?></div></td>
<td class="style1"><?=$objResult["FirstName"];?></td>
<td class="style1"><?=$objResult["Surname"];?></td>
<td class="style1"><div align="center"><?=$objResult["Gender"];?></div></td>
<td align="right" class="style1"><?=$objResult["Location"];?></td>
<td align="right" class="style1"><?=$objResult["Dob"];?></td>
<td align="center" class="style1"><a href="<?=$_SERVER["PHP_SELF"];?>?Action=Edit&CusID=<?=$objResult["ID"];?>">
Edit</a></td>
<td align="center" class="style1"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?=$_SERVER["PHP_SELF"];?>?Action=Del&CusID=<?=$objResult["ID"];?>';}">
Delete</a></td>
</tr>
<?
}
?>
<?
}
?>
<tr>
<td class="style1"><div align="center"><input type="text" name="txtAddCustomerID" size="5"></div></td>
<td class="style1"><input type="text" name="txtAddName" size="20"></td>
<td class="style1"><input type="text" name="txtAddEmail" size="20"></td>
<td class="style1"><div align="center"><input type="text" name="txtAddCountryCode" size="2"></div></td>
<td align="right" class="style1"><input type="text" name="txtAddBudget" size="5"></td>
<td align="right" class="style1"><input type="text" name="txtAddUsed" size="5"></td>
<td colspan="2" align="right" class="style1"><div align="center">
<input name="btnAdd" type="button" id="btnAdd" value="Add" OnClick="frmMain.hdnCmd.value='Add';frmMain.submit();">
</div></td>
</tr>
</table>
</form>
<?
mysql_close($objConnect);
?>
</body>
</html>
