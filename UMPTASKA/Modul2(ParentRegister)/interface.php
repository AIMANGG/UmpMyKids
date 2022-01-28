<!DOCTYPE html>
<html>
	<head>
		<style>
			* 
			{
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
			<p></p>
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
			<a href="#">Student</a>
			<a href="http://localhost/MYMODULE/details.php">About</a>
			<a href="http://localhost/MYMODULE/register.php" style="float:right">Register</a>
			<a href="#" style="float:right">Login</a>
			<a href="#" style="float:right">Logout</a>
		</div>
		<div class="row">
			<div class="leftcolumn">
				<div class="card">
					<h2>Taskaku Comel</h2>
					<img src="http://localhost/MYMODULE/taska.jpg" width="150px" height="150px" style="float:leftcolumn">
					<p>A kindergarten is important places to produce a good student, who will be become quality citizen for the country. Therefore managing kindergarten effectively and efficiently needs more attention. Good kindergarten are kindergarten that have good management system. With this system, the performance of kindergarten will be improved. For example in the management of data or information that kindergarten should be managed consistently. This allows all the events or records are, kept well and safe and can be reviewed when necessary</p>
				</div>
				<div class="card">
					<h2>TITLE HEADING</h2>
					<h5>Title description, Sep 2, 2017</h5>
					<div class="fakeimg" style="height:200px;">Image</div>
					<p>Some text..</p>
					<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				</div>
			</div>
			<div class="rightcolumn">
				<div class="card">
					<h2>About Me</h2>
					<img src="http://localhost/MYMODULE/jj.jpg" width="250px" height="250px" style="float:leftcolumn">
					<p>It takes a big heart to shape little minds!
						Taska Anakku Comel is a preschool that aims to help parents raise 21st century learners. We are located in Pekan.
						We place great importance on creating an environment that stimulates character building so that your child will grow up to be respectful, responsible and confident individuals. 
						Our carefully selected teaching methods have been track record-proven to direct children towards being global citizens. And it all starts here in our safe, modern and thought-inducing institution.
					</p>
				</div>
				<div class="card">
					<h3>Popular Post</h3>
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
				<div class="card">
					<h3>Follow Me</h3>
					<p>Some text..</p>
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