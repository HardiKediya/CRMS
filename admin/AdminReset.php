<html>

<head>
    <title>Admin Forget Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" /> -->
</head>

<style>
    .admin-forget {
        width: 320px;
        height: auto;
        padding-bottom: 10px;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%, -50%);
        box-sizing: border-box;
        padding: 70px 30px;
    }

    .logo {
        width: 120px;
        height: auto;
        position: absolute;
        top: 25px;
        margin-right: 40%;
        margin-left: 1%;
    }

    .lock {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        position: absolute;
        top: 15px;
        left: calc(50% - 50px);
    }

    .admin-forget h1 {
        margin-top: 5px;
        padding-top: 25px;

        text-align: center;
        font-size: 18px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .admin-forget p {
        margin: 0;
        padding-top: 1px;
        padding-bottom: 1px;
        font-size: 15px;
        text-align: left;
        font-weight: bold;
    }

    .admin-forget input[type="password"] {

        width: 100%;
        margin-bottom: 15px;
    }

    .admin-forget input[type="text"] {
        width: 100%;
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
        margin-bottom: 15px;
    }

    .otp {
        width: 100%;
        height: 40px;
        border: none;
        outline: none;
        margin-bottom: 15px;
        color: #fff;
        font-size: 16px;
        border-bottom: 1px solid #fff;
        background: transparent;
        /* border-bottom-style: dashed; */
    }

    .admin-forget input[type="submit"] {
        border: none;
        outline: none;
        width: 35%;
        height: 35px;
        background: #1c8adb;
        color: #fff;
        font-size: 18px;
        border-radius: 12px;
        position: absolute;
        bottom: 10px;
        left: 110px;
    }

    .admin-forget input[type="submit"]:hover {
        cursor: pointer;
        background: #d5afd2;
        color: #000;
    }

    .input2 {
        width: 100%;
        padding-top: 17px;
        font-size: 10px;
        display: flex;
        /* background-color: lightcoral; */
    }

    .input2 a {
        margin-left: -5px;
    }

    #otp {
        float: right;
        text-align: left;
        margin-left: 110px;
        /* text-decoration: none; */
    }

    a:link {
        color: #fff;
    }

    a:visited {
        color: #d5afd2;
    }

    a:hover {
        color: azure;
    }

    .showpassword {
        width: 100%;
    }
</style>

<body>
    <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

    <div class="admin-forget">

        <img src="img/open lock1.png" class="lock">
        <h1>Reset Your Password</h1>
        <!-- <form> -->
        <p>Enter OTP :</p>
        <input type="number" name="otp" maxlength="6" id="otp" class="otp">
        <p>New Password :</p>
        <input type="password" id="pass" name="pass">
        <p>Confirm Password :</p>
        <input type="password" name="cpass" id="cpass">
        <p style="margin-bottom: 10px; color:red; display: none;" id="errorMsg">Input Field is empty</p>
        <div class="showpassword">
            <!-- <input type="checkbox" id="showPassword" name="showPassword" value="Bike">
                <label for="showPassword"> Show Password</label> -->
            <input type="checkbox" onclick="Toggle1()">
            <strong>Show Password</strong>
        </div>
        <input type="submit" name="submit" onclick="updatePassword()" value="Done">
        <!-- </form> -->
        <div class="input2">
            <a href="../home.php">Back to Home Page</a>
            <a href="./php/resendMail.php" id="otp">Resend OTP</a>
        </div>
    </div>
    <script>

        // Global Variable
        var obj;
        // Change the type of input to password or text
        function Toggle1() {
            var temp = document.getElementById("pass");
            var cpass = document.getElementById("cpass");
            if (temp.type === "password") {
                temp.type = "text";
                cpass.type = "text";
            } else {
                temp.type = "password";
                cpass.type = "password";
            }
        }

        function updatePassword() {
            var OTP = document.getElementById('otp').value;
            var pass = document.getElementById('pass').value;
            var cpass = document.getElementById('cpass').value;
            var errorMsg = document.getElementById('errorMsg');

            var data="otp="+OTP+"&pass="+pass;

            if (OTP == "" || pass == "" || cpass == "") {
                errorMsg.innerHTML = "Input Field is empty...!!";
                errorMsg.style.display = "block";
            } else if (OTP.length != 6) {
                errorMsg.innerHTML = "Please Enter 6 digits in OTP field..";
                errorMsg.style.display = "block";
            } else if (pass != cpass) {

                errorMsg.innerHTML = "Password and Confirm password are not same...!!";
                errorMsg.style.display = "block";
            } else {

                errorMsg.style.display = "none";
                var XRH = new XMLHttpRequest();
                XRH.onload = function() {
                    obj = JSON.parse(this.response);
                    console.log(obj);
                    if(obj.status)
                    {
                        if(confirm(obj.message))
                        {
                        window.location.href="AdminLogin.php";
                        }
                        else
                        {
                        window.location.href="AdminLogin.php";
                        }
                    }
                    else
                    {
                        alert(obj.message);
                    }
                }
            
                XRH.open('POST', './php/resetPassword.php');
                XRH.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                XRH.send(data);
        }
    }
    </script>
</body>

</html>