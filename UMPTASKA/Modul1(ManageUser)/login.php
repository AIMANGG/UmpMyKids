<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title> Registration UMP MyKids</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login UMP MyKids</h2>
    </div>
    <form method= "post" action= "login.php">
    <?php include('errors.php');?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>   
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>  
        <div class="input-group">
            <button type= "Submit" name= "login" class="btn">Login</button>
        </div>
        <p> 
            Not yet a member? <a href="register.php">Sign up</a>
        </p>

    </form>      
    <a href="Homepage.html">Sign in</a>
</body>
</html>