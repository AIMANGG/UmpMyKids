<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="m3styles.css" />
<script language="javascript" src="staff_function.js" type="text/javascript"></script>
</head>
<body>

<div class="header">
<img src="UMPMyKids-logos_transparent(1).png" width="150px" height="100px" style="float:left">

<h1>UMP MyKids System</h1>
  <p></p>
</div>

<div class="topnav">
  <a href="Home.html">Home</a>
  <a href="User info.html">User info</a>
  <a href="Admin.php">Admin</a>
  <a href="./Staff.php">Staff</a>
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
      
      <div class="fakeimg" style="height:700px;">
      
      <form action="./display_admin.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="staffID">Staff ID:</label>
        <input type="text" id="staffID" name="staffID"><br><br>

        <label for="phone">Phone num:</label>
        <input type="text" id="phone" name="phone"><br><br>

        <label for="address">Address:</label><br>
        <textarea name="address" rows="10" cols="30"></textarea><br><br>

        <label for="year">Year</label>
        <input type="number" id="year" name="year"><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status">
          <option value="active">Active</option>
          <option value="retired">Retired</option>
        </select><br><br>

        <label for="salary">Salary</label>
        <input type="number" id="salary" name="salary"><br><br>

        <label for="medication">Medication</label>
        <input type="text" id="medication" name="medication"><br><br>
        
        <label for="task">Task</label>
        <input type="text" id="task" name="task"><br><br>
        <br><br>
         <input type="reset" value="Reset"> <input type="submit">
      </form>
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


