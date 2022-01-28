<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STUDENT ACTIVITIES UMPMYKIDS</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-image: url('./abc.jpg');}
    text-align:center
     * {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    
    .topnav {
      overflow: hidden;
      background-color: #333;
    }
    
    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    
    .topnav a.active {
      background-color: #FF0000; 
      color: white;
    }
    
    .topnav-right {
      float: right;
    }
    .header {
  padding: 30px;
  text-align: center;
  background: whitesmoke;
}

.header h1 {
  font-size: 50px;
}

.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

</style>
<div class="header">
    <img src="LOGO.png" width="150px" height="100px" style="float:left">
    
      <h1>UMP MyKids System</h1>
      
      <p></p>
    </div>
<div class="topnav">
    <a  href="#Home">Home</a>
    <a href="#userinfo">User info</a>
    <a href="#Admin">Admin</a>
    <a href="#Staff">Staff</a>
    <a href="#Teacher">Teacher</a>
    <a href="#Parent">Parents</a>
    <a class="active" href="#Student">Student</a>
    <a href="#About">About</a>

    <div class="topnav-right">
      <a href="#Logout">Logout</a>
      <a href="#Login">Login</a>
      <a href="#Register">Register</a>
    </div>
  </div>
  <br><br>
  <body>
   
    <div class="container">
      <div class="card">
          <div class="card-header">
              Date
              <strong>20/01/2022</strong>

          </div>

    <div>
      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
      <option selected>Search Names Of Students</option>
        <option value="1">MUHAMMAD RYKAL BIN LUKMAN</option>
        <option value="2">NUR FARAH BINTI KARUL</option>
        <option value="3">MUHAMMAD KHAIRUL BINTI YUSOFF</option>
        <option value="4">SARAH AINI BINTI AHMAD</option>
        <option value="5">OSMAN JAILANI BIN OMAR</option>
        <option value="6">OTHER...</option>
      </select>
      </div>

      <div>
      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
      <option selected>Staff Assigned</option>
        <option value="1">AHMAD MASLAN</option>
        <option value="2">SARAH SUHAIRI</option>
        <option value="3">MUKHZIN HASHIM</option>
        <option value="4">AINI ZAKARIA</option>
        <option value="5">OTHER...</option>
      </select>
      </div>

      <div>
      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
      <option selected>Activity</option>
        <option value="1">MEMBACA</option>
        <option value="2">MELUKIS</option>
        <option value="3">BERMAIN CONGKAK</option>
        <option value="4">BERMAIN DI LUAR</option>
        <option value="5">BELAJAR</option>
        <option value="6">OTHER...</option>
      </select>
      </div>
      

        <button class="left" class="btn btn-dark my-3"class="active">SUBMIT</button>
        <button class="btn btn-dark my-3"class="active">Activities List</button>
        <button class="btn btn-dark my-3"class="active">Activities Schedule</button>
      </div>
      
      <div class="footer">
        <h2></h2>
        <a class="active" href="Home">Home | </a>
        <a href="User info">Helps | </a>
        <a href="Admin">Privacy | </a>
        <a class="active" href="Staff">Logout</a>
        
      </div>
    </body>
    </html>