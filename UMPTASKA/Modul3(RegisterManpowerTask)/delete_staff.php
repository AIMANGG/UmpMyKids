<?php
require_once "m3db.php";
$rowCount = count($_POST["staffID"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($conn, "DELETE FROM staff WHERE staffID='" . $_POST["staffID"][$i] . "'");
}
header("Location:display_admin.php");
?>