<?php
$servername = "localhost";
$username = "root";
$password = "";
$con=mysqli_connect('localhost','root',"",'activities_student');
if($con){
    echo "Connection Successfull";
}else{
    die(mysqli_error("Error"+$con));
}

?>