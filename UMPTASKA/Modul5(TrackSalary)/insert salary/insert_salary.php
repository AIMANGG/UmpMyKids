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
<title>Insert Salary</title>
<script src="salary.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body
{
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Logo Title */
.header
{
  padding: 40px;
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
  text-align:auto;
  background: white;
}

h1
{
  text-align: center;
  font-size: 30px;
}

form
{
    margin: 0 auto;
    width: 800px;
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
    font-size: 20px;
}

form div + div 
{
    margin-top: 1em;
}

label 
{
    display: inline-block;
    width: 200px;
    text-align: justify;
}

input:focus, textarea:focus 
{
    /* To give a little highlight on active elements */
    border-color: #000;
}

.input-box 
{
  width: 500px;
  height: 25px;
}

#submit-button
{
  font-size: 15px;
  margin: 20px 10px 10px 160px;
  width: 500px;
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 3em;

}

.deleteButton
{
  border: 2px solid red;
  margin: auto;
  border-radius: 1em;
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

      

            <h1>Insert Salary</h1>
            <form action="insert_salary_data.php" method="POST">
                <div>
                    <label for="employeeID">Employee ID:</label>
                    <input type="text" name="employeeID" class="input-box"/>
                </div>
                <div>
                    <label for="position">Position:</label>
                    <input type="text" name="position" class="input-box"/> 
                </div>
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="input-box"/>
                </div>
                <div>
                    <label for="employeeSalary">Employee Salary:</label>
                    <input type="text" name="employeeSalary" class="input-box" />
                </div>
                <div>
                  <label for="employeeBonus">Employee Bonus:</label>
                  <input type="text" name="bonus" class="input-box"/>
              </div>
              <div>
                  <label for="date">Date:</label>
                  <input type="date" name="date" class="input-box"/>
              </div>
              <div>
                    <label for="status">Status:</label>
                    <input type="text" name="status" class="input-box"/>
                </div>

                <button type="submit" id="submit-button" name="submit">Submit</button>
            </form>
            <br>
            <br>

    <footer>
        <div class="bottomnavbar">
            <a href="#home" >Home</a>
            <a href="#help">Help</a>
            <a href="#privacy">Privacy</a>
          </div>
    </footer>

        </section>

    </main>


</form>
</body>
</html>
