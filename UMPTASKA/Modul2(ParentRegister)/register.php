<?php

if (isset($_POST['create'])){
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
  
  $name = $_POST['name'];
  $cname = $_POST['cname'];
  $cage = $_POST['cage'];
  $address = $_POST['address'];
  $mobile = $_POST['mobile'];
  $medical = $_POST['medical'];
  $status = $_POST['status'];
  //$picture = $_POST['picture'];
  
  $currentDirectory = getcwd();
  $uploadDirectory = "/uploads/";

  $errors = []; // Store errors here

  $fileExtensionsAllowed = ['jpeg', 'jpg', 'png']; // These will be the only file extensions allowed 

  $fileName = $_FILES['the_file']['name'];
  $fileSize = $_FILES['the_file']['size'];
  $fileTmpName  = $_FILES['the_file']['tmp_name'];
  $fileType = $_FILES['the_file']['type'];
  $fileNameCmps = explode(".", $fileName);
  $fileExtension = strtolower(end($fileNameCmps));

  $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName); 

  if (!in_array($fileExtension,$fileExtensionsAllowed)) {
    $errors[] = "This file extension is not allowed. Please upload a JPEG, JPG, PNG file";
  }

  if ($fileSize > 4000000) {
    $errors[] = "File exceeds maximum size (4MB)";
  }

  if (empty($errors)) {
    $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

    $picture = "http://localhost/MYMODULE/uploads/" . basename($fileName);

    if ($didUpload) {
      //echo "The file " . basename($fileName) . " has been uploaded";
    } else {
      //echo "An error occurred. Please contact the administrator.";
    }
  } else {
    foreach ($errors as $error) {
      //echo $error . "These are the errors" . "\n";
    }
  }

  $sql = "INSERT INTO register (name, cname, cage, address, mobile, medical, status, picture)
  VALUES ('$name', '$cname', '$cage', '$address', '$mobile', '$medical', '$status', '$picture')";
  
  if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/MYMODULE/details.php", true, 301);
    //echo "New record created successfully";
  } else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
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
			<a href="http://localhost/MYMODULE/details.php">About</a>
			<a href="#" style="float:right">Register</a>
			<a href="#" style="float:right">Login</a>
			<a href="#" style="float:right">Logout</a>
		</div>
		<div class="row">
		<div class="leftcolumn">
		<div class="card">
		<h2>REGISTRATION</h2>
    <form method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label for="name">Name:</label></td>
				<td><input type="text" name="name" id="name" placeholder="your name"></td>
			</tr>
			<tr>
				<td><label for="childname">Child's Name:</label></td>
				<td><input type="text" name="cname" id="" placeholder="your child name"></td>
			</tr>
			<tr>
				<td><label for="childage">Child's Age:</label></td>
				<td><input type="number" name="cage" id=""></td>
			</tr>
			<tr>
				<td><label for="address">Address:</label></td>
				<td><textarea name="address" id="" placeholder=""></textarea></td>
			</tr>
			<tr>
				<td><label for="phoneNumber">Phone Number:</label></td>
				<td><input type="number" name="mobile" id=""></td>
			</tr>
			<tr>
				<td><label for="medical">Medical</label></td>
				<td>
					<select name="medical" id="" placeholder="Select Illnesses">
						<option value="Febrile Seizures">Febrile Seizures</option>
						<option value="Common cold">Common cold</option>
						<option value="Eczema">Eczema</option>
						<option value="Asthma">Asthma</option>
						<option value="No Medical History">No Medical History</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="status">Status :</label></td>
				<td>
					<select name="status" id="">
						<option value="Mother">Mother</option>
						<option value="Father">Father</option>
						<option value="Siblings">Siblings</option>
					</select>
				</td>
			<tr>
				<td><label for="file"> Upload Picture: </label> </td>
				<td>
          <input type="file" name="the_file" id="fileToUpload">
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="create" value="Submit" /></td>
				<!--<td><input type="button" value="Submit" onclick="submit()"></td>-->
				<td><input type="button" value="Reset" onclick="reset()"></td>
				<!--<tr>
					<td colspan="2"><input type="submit" class="submit" value="Submit" /></td>
					
					
					  <td colspan="2"><input type="reset" class="reset" value="Reset"style="float:left" /></td>
					</tr>-->
			</tr>
		</table>
    </form>
		<div class="footer">
			<h2></h2>
			<a href="Home">Home</a>
			<a href="User info">Helps</a>
			<a href="Admin">Privacy</a>
			<a href="Staff">Logout</a>
		</div>
	</body>
</html>