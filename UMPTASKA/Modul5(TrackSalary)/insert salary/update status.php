<!--
BCS2243 WEB ENGINEERING [PROJECT]
Name:AFIEFAH HANNANI BINTI ABDUL HALIM
ID: CA19084
Section: 01B
Lecturer name: AZLINA BINTI ZAINUDDIN
-->


<?php 
    require_once("config.php");

    if(isset($_POST['update']))
    {
        $employeeID = $_GET['employeeID'];
       

        $sql = " update insertSalary set status='"PAID"' where employeeID='".$employeeID."'";
        $result = mysqli_query($conn,$sql);

        if($result)
        {
            header("location:track salary.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:track salary.php");
    }


?>
