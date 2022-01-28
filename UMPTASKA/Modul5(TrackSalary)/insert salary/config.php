<!--
BCS2243 WEB ENGINEERING [PROJECT]
Name:AFIEFAH HANNANI BINTI ABDUL HALIM
ID: CA19084
Section: 01B
Lecturer name: AZLINA BINTI ZAINUDDIN
-->

<?php
$dbhost = 'localhost';
$dbname = 'umpMykid';
$username = 'root';
$password = "";

$conn = mysqli_connect($dbhost,$username,$password,$dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());

}
?>