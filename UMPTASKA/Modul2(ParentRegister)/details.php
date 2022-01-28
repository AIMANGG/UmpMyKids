<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "taska";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
    
  if (isset($_POST['update'])){
    $name = $_POST['name'];
    $cname = $_POST['cname'];
    $cage = $_POST['cage'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $medical = $_POST['medical'];
    $status = $_POST['status'];

    $sql = "UPDATE register SET name='$name', cname='$cname', cage='$cage', address='$address', mobile='$mobile', medical='$medical', status='$status'";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }

    $conn->close();
  }
	?>
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
			.navbar {
			overflow: hidden;
			background-color: #333;
			}
			.navbar a {
			float: left;
			font-size: 16px;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
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
			.navbar a:hover, .dropdown:hover .dropbtn {
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
			<img src="http://localhost/MYMODULE/logo.png" width="150px" height="150px" style="float:left">
			<h1>UMP MyKids System</h1>
		</div>
		<div class="navbar">
			<a href="http://localhost/MYMODULE/interface.php">Home</a>
			<a href="User info">User info</a>
			<a href="Admin">Admin</a>
			<a href="Staff">Staff</a>
			<div class="dropdown">
				<button class="dropbtn">Teacher 
				<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="#">Salary</a>
					<a href="#">Information</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Parent 
				<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
				<a href="http://localhost/MYMODULE/register.php">Registration</a>
					<a href="http://localhost/MYMODULE/details.php">Details Information</a>
				</div>
			</div>
			<a href="Student">Student</a>
			<a href="About">About</a>
			<a href="#" style="float:right">Register</a>
			<a href="#" style="float:right">Login</a>
			<a href="#" style="float:right">Logout</a>
		</div>
		<div class="row">
		<table>
		<div class="leftcolumn">
			<div class="card">
				<h2>KIDS INFORMATION</h2>
        <form method="post" enctype="multipart/form-data">
          <?php
          if (isset($_POST['read'])){
            $sql = "SELECT * FROM register";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
          ?>
					<img src="<?php echo $row["picture"];?>" width="150px" height="150px" style="float:leftcolumn">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo $row["name"];?>" readonly>
          </div>
          <div class="form-group">
            <label for="childname">Child's Name:</label>
            <input type="text" name="cname" id="cname" value="<?php echo $row["cname"];?>" readonly>
          </div>
          <div class="form-group">
            <label for="childage">Child's Age:</label>
            <input type="number" name="cage" id="cage" value="<?php echo $row["cage"];?>" readonly>
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="<?php echo $row["address"];?>" readonly>
          </div>
          <div class="form-group">
            <label for="phoneNumber">Phone Number:</label>
            <input type="number" name="mobile" id="mobile" value="<?php echo $row["mobile"];?>" readonly>
          </div>
          <div class="form-group">
            <label for="medical">Medical</label>
            <input type="text" name="medical" id="medical" value="<?php echo $row["medical"];?>" readonly>
          </div>
          <div class="form-group">
            <label for="status">Status :</label>
            <input type="text" name="status" id="status" value="<?php echo $row["status"];?>" readonly>
          </div>
          <?php
              }
            }
          }
          //$conn->close();
          ?>
          <input type="submit" name="read" value="VIEW" />
          <!--<textarea id="w3review" name="w3review" rows="4" cols="50">
          At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
          </textarea>
          <p>Some text..</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>-->
        </form>
			</div>
      <div class="card">
				<h2>ADD INFORMATION</h2>
        <form method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
          </div>
          <div class="form-group">
            <label for="childname">Child's Name:</label>
            <input type="text" name="cname" id="cname">
          </div>
          <div class="form-group">
            <label for="childage">Child's Age:</label>
            <input type="number" name="cage" id="cage">
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address">
          </div>
          <div class="form-group">
            <label for="phoneNumber">Phone Number:</label>
            <input type="number" name="mobile" id="mobile">
          </div>
          <div class="form-group">
            <label for="medical">Medical</label>
            <select name="medical" id="" placeholder="Select Illnesses">
              <option value="Febrile Seizures">Febrile Seizures</option>
              <option value="Common cold">Common cold</option>
              <option value="Eczema">Eczema</option>
              <option value="Asthma">Asthma</option>
              <option value="No Medical History">No Medical History</option>
            </select>
          </div>
          <div class="form-group">
            <label for="status">Status :</label>
            <select name="status" id="">
              <option value="Mother">Mother</option>
              <option value="Father">Father</option>
              <option value="Siblings">Siblings</option>
            </select>
          </div>
          <input type="submit" name="update" value="EDIT" />
          <!--<textarea id="w3review" name="w3review" rows="4" cols="50">
          At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
          </textarea>
          <p>Some text..</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>-->
        </form>
			</div>
		</div>
		<div class="rightcolumn">
		<div class="card">
			<h2>QR Code for Group Whatsapp</h2>
			<img src="http://localhost/MYMODULE/qrco.png" width="150px" height="150px">
			<p>Scan this group for more information</p>
		</div>
		<div class="card">
			<h3>Parent Board</h3>
			<div class="fakeimg">
				<p>Image</p>
			</div>
			<div class="fakeimg">
				<p>Image</p>
			</div>
			<div class="fakeimg">
				<p>Image</p>
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