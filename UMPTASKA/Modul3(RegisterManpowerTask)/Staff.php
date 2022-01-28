<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>UMP MyKids System</h1>
  <p></p>
</div>

<div class="topnav">
  <a href="Home.html">Home</a>
  <a href="User info.html">User info</a>
  <a href="./Admin.php">Admin</a>
  <a href="Staff.php">Staff</a>
  <a href="Teacher.html">Teacher</a>
  <a href="Parent.html">Parent</a>
  <a href="Student.html">Student</a>
  <a href="About.html">About</a>
  
  <a href="#" style="float:right">Logout</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>MANPOWER LIST</h2>
      <label for="name">Name:</label>
      <select id="name" name="name[]">
        <option value="name">Zakiah</option>
        <option value="name">Ahmad</option>
      </select> <input type="submit" value="Search"><br><br>
      
      <div class="fakeimg" style="height:500px;">MANPOWER DETAILS:
        <p>Name: Zakiah</p>
        <p>User ID: TT21456</p>
        <p>Position: Teacher</p>
        <p>Phone num: 0172337453</p>
        <p>Year registered: 2018</p>
        <p>Status: Active</p>
        <p>Name: Zakiah</p>
        <hr>
        <p>Task: Teach student in Room A1</p>
    </div>
    </div>
    
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


