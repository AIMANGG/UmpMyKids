<!--
BCS2243 WEB ENGINEERING [PROJECT]
Name:AFIEFAH HANNANI BINTI ABDUL HALIM
ID: CA19084
Section: 01B
Lecturer name: AZLINA BINTI ZAINUDDIN
-->

<?php
include("config.php");


   if(isset($_POST['submit']))
    {
     
  $employeeID=$_POST['employeeID'];
  $position=$_POST['position'];
  $name=$_POST['name'];
  $salary=$_POST['employeeSalary'];
  $bonus=$_POST['bonus'];
  $Time=$_POST['date'];
  $status=$_POST['status'];

  $result = mysqli_query($conn,"INSERT Into insertSalary values( '', '$employeeID' , '$position' , '$name' , '$salary', '$bonus', '$Time', '$status')");

	
        if($result)
	 {

		header("location:insert_salary.php");
	 }
	else
	{
		echo "Failed";
	}

    } 


 
?>