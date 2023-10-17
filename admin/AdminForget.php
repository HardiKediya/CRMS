<?php
session_start();
include './php/dbconnect.php';


if(isset($_POST['send_otp']))
{
    $to_email=$_POST['email'];
    
    $query=mysqli_query($con,'SELECT * FROM `admin` WHERE `adminEmail`="'.$to_email.'"');

    if(mysqli_num_rows($query)>0)
    {
        $otp =rand(100000,999999);
        $subject = "Forget Password";
        $body = "Your OTP : ".$otp."\nDo not share a OTP.";
        $headers = "From:crms7142001@gmail.com";
        if(mail($to_email, $subject, $body, $headers))
        {
            $time =  $_SERVER["REQUEST_TIME"];
            $_SESSION['email']=$to_email;
            $_SESSION['time']=$time;
            $_SESSION['otp']=$otp;
            header('location:AdminReset.php');
        }
        else
        {
            echo'<script>alert("Failed to send mail..!!");</script>';
        
        }
    }
    else
    {
        echo'<script>alert("This email does not exist in our Database..!!");</script>';      
    }

}
?>
<html>  
    <head>
        <title>Admin Forget Page</title>
        <link rel="stylesheet" type="text/css" href="css/adminlogin.css">
    </head>
   
    <style>
        .admin-forget{
            width: 320px;
            height: 420px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }

        .logo{
            width: 140px;
            height: auto;
            position: absolute;
            top: 15px;

            margin-right:40%;
            margin-left: 1%;    
        }
        .pr1{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }
        .lock{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: 55px;
            left: calc(50% - 50px);
        }

        .admin-forget p{
            margin: 0;
            padding-top: 85px;
            padding-bottom: 18px;
            font-size: 20px;
            text-align: center;
            font-weight: bold;
        }

        .admin-forget input{
            
            width: 100%;
            margin-bottom: 15px;
        }

        .admin-forget input[type= "text"] 
        {
            border: none;
            background:  rgba(255, 255, 255, 0.5);
            height: 40px;
            color: #3f3d3d;
            text-decoration-color: black;
            padding-left: 20px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 10px;
        }

        ::placeholder{
            color: #3e3a3a;
            opacity: 1;
        }

        .admin-forget input[type="submit"]
        {
            border: none;
            outline: none;
            width: 32%;
            height: 35px;
            background: #1c8adb;
            color: #fff;
            font-size: 18px;
            border-radius: 15px;
            position: absolute;
            bottom: 5px;
            right: 15px;
        }

        .admin-forget input[type="submit"]:hover
        {
            cursor: pointer;
            background: #d5afd2;
            color: #000;
        }
    </style>

    <body>
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div class="admin-forget">
            <img src="img/profile_pic.png" class="pr1">
            <img src="img/lock.png" class="lock">
            <form action="" method="post">  
                <p>Forgot Your Password</p> <br>
                <input type="text" name="email" placeholder="Type Your Email">
               
                <input type="submit" name="send_otp" value="Send" required>
                <a href="../home.php" style="text-decoration: none;color: white;">back to home</a>
                
            </form>
        </div>   
    </body>
</html>