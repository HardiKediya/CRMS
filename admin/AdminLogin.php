<?php
session_start();
if(isset($_SESSION["adminLogin"]))
{
    header("location:AdminDashboard.php");
}
?>
<html>
    <head>
        <title>Admin Login Page</title>
        <link rel="stylesheet" type="text/css" href="css/adminlogin.css">
    </head>
    <body>
        <div class="admin-login">
            <img src="img/profile_pic.png" class="pr1">
            <h1>Login Here</h1>
            <form action="php/adminlogin.php" method="post">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username" required>
                <p>Password</p>
                <input type="password" id="password" name="password" placeholder="Enter Password"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
                <input type="submit" name="submit" value="Login">
                <a href="AdminForget.php">Forget Password</a>
                <a href="../home.php" style="margin-left: 55px;">back to home</a>
            </form>
        </div>
    </body>
</html>

