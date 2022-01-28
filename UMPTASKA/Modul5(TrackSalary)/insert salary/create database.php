<!--
BCS2243 WEB ENGINEERING [PROJECT]
Name:AFIEFAH HANNANI BINTI ABDUL HALIM
ID: CA19084
Section: 01B
Lecturer name: AZLINA BINTI ZAINUDDIN
-->

<?php
//First, connect to the MySQL server.
//mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

$link = mysqli_connect("localhost", "root", "");
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

//Then, create a database named “umpMykid”.
//mysqli_query("$link", "CREATE DATABASE umpMykid") or die(mysqli_error($link));

$sql = "CREATE DATABASE umpMykid";

if (mysqli_query($link, $sql)) {
    echo "Database created successfully\n";
} else {
    echo 'Error creating database: ' . mysqli_error($link) . "\n";
}

//And finally we close the connection to the MySQL server
mysqli_close($link);
?>
