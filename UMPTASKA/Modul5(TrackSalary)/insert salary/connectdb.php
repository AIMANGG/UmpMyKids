<!--
BCS2243 WEB ENGINEERING [PROJECT]
Name:AFIEFAH HANNANI BINTI ABDUL HALIM
ID: CA19084
Section: 01B
Lecturer name: AZLINA BINTI ZAINUDDIN
-->

<?php

// server info
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'umpMykid';

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

?>