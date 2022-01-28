<!--
BCS2243 WEB ENGINEERING [PROJECT]
Name:AFIEFAH HANNANI BINTI ABDUL HALIM
ID: CA19084
Section: 01B
Lecturer name: AZLINA BINTI ZAINUDDIN
-->

<?php



$link = mysqli_connect("localhost", "root", "");
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_select_db($link, "umpMykid") or die(mysqli_connect_error());

//Then, create a database named "umpMykid”.

$sql = "CREATE TABLE insertSalary (id INT AUTO_INCREMENT,employeeID VARCHAR(8), position VARCHAR(10), name VARCHAR(100), salary FLOAT(20), bonus FLOAT(20),Time Date, status VARCHAR(10), primary key(id))";


if (mysqli_query($link, $sql)) {
    echo "Table created successfully\n";
} else {
    echo 'Error creating table: ' . mysqli_error($link) . "\n";
}

//And finally we close the connection to the MySQL server
mysqli_close($link);
?>
