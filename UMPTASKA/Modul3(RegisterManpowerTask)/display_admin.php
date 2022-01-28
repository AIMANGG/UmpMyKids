<?php
require_once "m3db.php";
$result = mysqli_query($conn, "SELECT * FROM staff");
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="m3styles.css" />
<script language="javascript" src="staff_function.js" type="text/javascript"></script>
</head>
<body>

<div class="header">
  <h1>UMP MyKids System</h1>
  <p></p>
</div>

<div class="topnav">
  <a href="Home.html">Home</a>
  <a href="User info.html">User info</a>
  <a href="Admin.html">Admin</a>
  <a href="./Staff.html">Staff</a>
  <a href="Teacher.html">Teacher</a>
  <a href="Parent.html">Parent</a>
  <a href="Student.html">Student</a>
  <a href="About.html">About</a>
  
  <a href="#" style="float:right">Logout</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>MANPOWER REGISTRATION</h2>
      
      <div class="fakeimg" style="height:600px;">
      
      <center>
        <?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "module3");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $staffID = $_REQUEST['staffID'];
        $phone =  $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $year = $_REQUEST['year'];
        $status = $_REQUEST['status'];
        $salary = $_REQUEST['salary'];
        $medication = $_REQUEST['medication'];
        $task = $_REQUEST['task'];
       
        // Performing insert query execution
        // here our table name is staff
        $sql = "INSERT INTO staff  VALUES ('$name', 
            '$staffID','$phone','$address','$year','$status','$salary','$medication','$task')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse Staff" 
                . " to view the updated data</h3>"; 
  
           /* echo nl2br("\n$name\n $staffID\n "
                . "$phone\n $address\n $year\n $status\n $salary\n $medication\n $task");  */
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
    <form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="1" width="600" class="tblListForm">
<tr class="listheader">
<td></td>
<td>Name</td>
<td>Staff ID</td>
<td>Phone num</td>
<td>Address</td>
<td>Year</td>
<td>Status</td>
<td>Salary</td>
<td>Medication</td>
<td>Task</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="staffID[]" value="<?php echo $row["staffID"]; ?>" ></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["staffID"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><?php echo $row["year"]; ?></td>
<td><?php echo $row["status"]; ?></td>
<td><?php echo $row["salary"]; ?></td>
<td><?php echo $row["medication"]; ?></td>
<td><?php echo $row["task"]; ?></td>
</tr>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="4"><input type="button" name="update" value="Update" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Delete"  onClick="setDeleteAction();" /></td>
</tr>
</table>
</form>
</div>
      
      </div>
      
      
    </div>
    <div class="card">
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>User List</h2>
      <div class="fakeimg" style="height:500px;">Total amount of user: 100</div>
      
    </div>
    <div class="card">
    </div>
  </div>
</div>

<div class="footer">
  <h2></h2>
   <a href="Home">Home</a>
  <a href="User info">Helps</a>
  <a href="Admin">Privacy</a>
  <a href="Staff">Logout</a>
  
</div>

</body>
</html>


