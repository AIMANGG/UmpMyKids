<?php 
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "module3") or die(mysqli_error($conn));
?>