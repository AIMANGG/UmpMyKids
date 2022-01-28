<!--
BCS2243 WEB ENGINEERING [PROJECT]
Name:AFIEFAH HANNANI BINTI ABDUL HALIM
ID: CA19084
Section: 01B
Lecturer name: AZLINA BINTI ZAINUDDIN
-->

<?php 

        require_once("config.php ");

        if(isset($_GET['Delete']))
        {
            $employeeID = $_GET['Delete'];
            $query = " DELETE from insertSalary where employeeID = '".$employeeID."'";
            $result = mysqli_query($conn,$query);

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