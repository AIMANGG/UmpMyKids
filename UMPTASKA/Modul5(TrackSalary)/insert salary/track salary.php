<!--
BCS2243 WEB ENGINEERING [PROJECT]
Name:AFIEFAH HANNANI BINTI ABDUL HALIM
ID: CA19084
Section: 01B
Lecturer name: AZLINA BINTI ZAINUDDIN
-->

<?php 

    require_once("config.php");
    $query = " select * from insertSalary ";
    $result = mysqli_query($conn,$query);

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
  <img src="LOGO.png" width="150px" height="150px" style="float:left">
  <h1>UMP-myKids System</h1>
  <br>
</div>

<div class="topnav">
          <a href="Home">Home</a>
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
    <h3>SALARY SUMMARY</h3>

    <form>
      <br>
        <table style="width: 100%;">
            <tr>
                <th class="capital" style="width: 11.1%;">Employee ID</th>
                <th class="capital" style="width: 11.1%;">Position</th>
                <th class="capital" style="width: 11.1%;">Name</th>
                <th class="capital" style="width: 11.1%;">Employee Salary</th>
                <th class="capital" style="width: 11.1%;">Bonus</th>
                <th class="capital" style="width: 11.1%;">Date</th>
                <th class="capital" style="width: 11.1%;">Status</th>
                <th class="capital" style="width: 11.1;">Status Reminder</th>
                <th class="capital" style="width: 11.1%;">Delete</th>
            </tr>
            <form method="post" action="update status.php">
            <?php           
                  while($row=mysqli_fetch_assoc($result))
                  {
                    
                    $employeeID = $row['employeeID'];
                    $position = $row['position'];
                    $name = $row['name'];
                    $salary = $row['salary'];
                    $bonus = $row['bonus'];
                    $Time = $row['Time'];
                    $status = $row['status'];
                    //$statusReminder = $row['status'];
            ?>
           
                  <tr>
                     <td><p><?php echo $employeeID ?></p></td>
                     <td><p><?php echo $position ?></p></td>
                     <td><p><?php echo $name ?></p></td>
                     <td><p><?php echo $salary ?></p></td>
                     <td><p><?php echo $bonus ?></p></td>
                     <td><p><?php echo $Time ?></p></td>
   
                     <td><p><?php echo $status ?></p></td>
                     <td><p>
                  
                  
                    <button type="submit" name="update" id="update" value="update">Update</button>
                  </form>
               </p></td>
                     <td><p><a href="delete.php?Delete=<?php echo $employeeID ?>">Delete</a></p></td>
                     

            <?php 
                  }  
            ?>                    
                
        </table>     
    </form>       
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