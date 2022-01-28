<?php
require_once "m3db.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["userName"]);
for($i=0;$i<$usersCount;$i++) {
mysqli_query($conn, "UPDATE staff set userName='" . $_POST["userName"][$i] . "', password='" . $_POST["password"][$i] . "', firstName='" . $_POST["firstName"][$i] . "', lastName='" . $_POST["lastName"][$i] . "' WHERE userId='" . $_POST["userId"][$i] . "'");
}
header("Location:Admin.php");
}
?>
<html>
<head>
<title>Edit Multiple Staff</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
<tr class="tableheader">
<td>Edit User</td>
</tr>
<?php
$rowCount = count($_POST["module3"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='" . $_POST["staff"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>Name</label></td>
<td><input type="hidden" name="name[]" class="txtField" value="<?php echo $row[$i]['name']; ?>"><input type="text" name="userName[]" class="txtField" value="<?php echo $row[$i]['userName']; ?>"></td>
</tr>
<tr>
<td><label>Staff ID</label></td>
<td><input type="text" name="staffID[]" class="txtField" value="<?php echo $row[$i]['staffID']; ?>"></td>
</tr>
<td><label>Phone Number</label></td>
<td><input type="text" name="phonee[]" class="txtField" value="<?php echo $row[$i]['phonee']; ?>"></td>
</tr>
<td><label>Last Name</label></td>
<td><input type="text" name="lastName[]" class="txtField" value="<?php echo $row[$i]['lastName']; ?>"></td>
</tr>
</table>
</td>
</tr>
<?php
}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>