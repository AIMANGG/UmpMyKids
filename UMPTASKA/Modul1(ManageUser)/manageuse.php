<?php

include_once 'server.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Track Salary Payment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*
{
  box-sizing: border-box;
}


/* Style the body */
body 
{
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Logo Title */
.header
{
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 
{
  font-size: 50px;
}
/* Style the top navigation bar */
.topnav 
{
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a 
{
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover
{
  background-color: red;
  color: white;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown:hover .dropbtn{
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}


/* Page Content */
.content 
{
  padding:20px;
  text-align:center;
  background: white;
}

table
{
    background-color: #f1f1f0;
    padding: 5px;
}

th
{
    background-color: #b4ac9e;
    padding: 5px;
    text-align: center;
}

td
{
    background-color: #d9d9d9;
    padding: 0 10px 0 10px;
}

table,th,td
{
    border: 1px solid black;
}

/* Footer */
.bottomnavbar 
{ 
  overflow: hidden;
  background-color: #333;
}

.bottomnavbar a 
{
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}



</style>
</head>
<body>

<div class="header">
  <img src="http://localhost/Modul1/UMPMyKids-logos_transparent(1).png" width="150px" height="150px" style="float:left">
  <h1>UMP-myKids System</h1>
  <br>
</div>

<div class="topnav">
          <a href="http://localhost/Modul1/Homepage.html">Home</a>
          <a href="User info">User info</a>

          <div class="dropdown">
            <button class="dropbtn">Admin 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="./insert_salary.php">Insert Salary</a>
              <a href="./track salary.php">Salary Summary</a>
            </div>
          </div> 

          <div class="dropdown">
            <button class="dropbtn">Staff
             <i class="fa fa-caret-down"></i>
            </button>
             <div class="dropdown-content">
              <a href="./staff view.php">View Salary</a>
            </div>
          </div> 

         <div class="dropdown">
           <button class="dropbtn">Teacher 
            <i class="fa fa-caret-down"></i>
           </button>
           <div class="dropdown-content">
             <a href="./teacher view.php">View Salary</a>
           </div>
        </div> 

        <div class="dropdown">
          <button class="dropbtn">Parent 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">Registration</a>
            <a href="#">Details Information</a>
         </div>
       </div> 
       
          <a href="Student">Student</a>
          <a href="About">About</a>
      
          <a href="#" style="float:right">Logout</a>
      </div>

<div class="content">
    <h3>Manage User</h3>

    <table border = "2" width = "100%">
	<tr>
		<td>ID</td>
		<td>USERNAME</td>
		<td>EMAIL</td>
		<td>PASSWORD</td>
	</tr>
	
	<?php 
	$sql = "SELECT * FROM users;";
	$result = mysqli_query($con, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck>0){
		while($row = $result->fetch_assoc()) {
echo "<tr>
				<td>" . $row["id"]. "</td>
				<td>" . $row["username"] . "</td>
				<td>". $row["email"]. "</td>
				<td>". $row["password"]. "</td></tr>";
}
echo "</table>";
}
 else 
 { 
echo "0 results";
 }
$con->close();
?>
</table>

</div>

<footer>
    <div class="bottomnavbar">
        <a href="#home" >Home</a>
        <a href="#help">Help</a>
        <a href="#privacy">Privacy</a>
      </div>
</footer>

</body>
</html>