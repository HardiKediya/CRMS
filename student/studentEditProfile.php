<!DOCTYPE html>
<html>
    <head>
        <title>Student edit Profile</title>
    </head>
    <style>
        * {
        margin: 0%;
        padding: 0%;
        font-family:  Arial, Helvetica, sans-serif;
    }

    .navbar {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url("images/pics/navbarbg.jpeg");
        background-size: 100%;
        background-repeat: no-repeat;
        overflow: hidden;
    }

    .logo {
        width: 7%;
        height: auto;
        padding: 20px 30px;
    }

    .right-navbar {
        width: 35%;
        float: right;
        padding-left: 50px;
    }

    .right-navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 25px 16px;
        text-decoration: none;
        font-size: 17px;
        transition: 0.5s;
    }

    .navbar a:hover {
        color: rgb(43, 105, 107);
    }

    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdownbtn {
        border: none;
        outline: none;
        color: white;
        background-color: inherit;
        font-size: 17px;
        padding: 25px 16px;
        margin: 0;
        font-family: inherit;
        transition: 0.5s;

    }

    .dropdownbtn:hover {
        color: rgb(43, 105, 107);
    }

    .dropdown-list {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 120px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-list a {
        float: none;
        color: black;
        padding: 8px 10px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-list a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-list {
        display: block;
    }

    .profilepic {
        width: 5%;
        height: auto;
    }

    .editprofilelink {
        padding: 25px 0px;
        float: right;
    }

    .profile_pic {
        display: block;
        padding: 15px 16px;
    }

    .profile_pic img {
        width: 7%;
        height: auto;
        cursor: pointer;
    }

    .path {
        width: 100%;
        padding: 10px 10px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.3);
        box-shadow: 0px 0px 10px black;
    }

    .section-1 {
        width: 97%;
        height: auto;
        border: 1px solid rgb(0, 0, 0);

        /* padding: 70px; */
        margin: 20px;
        display: flex;
    }

    .col-1 {
        width: 25%;
        height: auto;
        float: left;
        /* padding-left: 10px; */
        /* display: table; */
        border: none;
        border-right: 1px solid rgb(0, 0, 0);
        outline: none;
        /* background-color: pink; */
    }

    .col-1 p {
        font-size: 23px;
        text-align: center;
        padding-top: 40px;
    }

    .profile{
        padding: 8px;
        background: #1590e7;
        color: #fff;
        font-size: 15px;
        /* border-radius: 15px; */
        margin-left: 30%;
        margin-top: 10px;
        
        
    }

    .resume{
        padding: 10px;
        /* padding-top: 10px; */
        background: lightcoral;
        color: white;
        font-size: 15px;
        margin-left: 24%;
        margin-top: 25px;
    }

    .col-1 img {
        width: 60%;
        margin-left: 25%;
        align-items: center;
        padding-top: 20px;
    }

    .col-1 input[type="file"] {
        /* border: none; */
        /* outline: none; */
        /* padding-top: 100px; */
        margin-top: 20px;
        display: none;
    }

    .col-1 input[type="file"]:hover {
        background-color: rgb(31, 119, 119);
        /* color: black; */
    }

    .col-2 {
        width: 100%;
        display: table;
        /* background-color: lightblue; */
        font-size: 30px;
        padding-left: 20px;
        padding-top: 10px;
        /* margin-left: 90px; */
    }

    .sec-2 {
        width: 100%;
        font-size: 25px;
        font-weight: bold;
        /* display: flex; */
        /* background-color: skyblue; */
    }

    /* .sec-2 p {
        display: inline-block;
    }

    .sec-2 input {
        padding: 5px 10px;
        background-color: yellow;
    } */
    .row1
    {
        width: 100%;
        /* background-color: red; */
        display: flex;
        padding: 14px 0px;
        font-size: 25px;
    }

    .row1 p{
        width: 25%;
    }

    .row1 input{
        border: 1px solid;
        width: 65%;
        margin-left: 70px;
        /* box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.13) ; */
        box-shadow: 1px 3px #1d1c1c50;
        text-indent: 10px;
    }

    textarea{
        border: 1px solid;
        width: 65%;
        margin-left: 70px;
        /* box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.13) ; */
        box-shadow: 1px 3px #1d1c1c50;
        text-indent: 10px;
        height: 70px;
    }

    .row1 label{
        width: 50%;
    }

    .change_resume{
        width: 65%;
        padding-left: -50px;
    }

   /* .row1 input[type="button"]{
    border: 1px solid rgb(37, 34, 34);
    outline: none;
    width: 150px;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 5px;
    position: absolute;
    right: 40px;
    cursor: pointer;
   }

   .row1 input[type="button"]:hover{
    border: 1px solid rgb(37, 34, 34);
    background-color: #22707a;
   } */

   .row1 button{
    width: 150px;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 5px;
    position: absolute;
    right: 40px;
    cursor: pointer;
   }

   .row1 button:hover{
    background-color: #22707a;

   }
    </style>
    <body>
        <div class="navbar">
            <img src="recruiter/img/logo.png" class="logo" alt="Website Logo" onsubmit="return on_form_sbmt()">
            <div class="right-navbar">
                <a href="#">My Applications</a>
                <a href="#">Jobs</a>
                <a href="#">Schedule</a>
                <a href="#">Logout</a>
                
                <div class="profile_pic">
                    <img onclick="showtext()" src="images/profile/pr2.png" alt="Admin Profile pic">
                </div>
            </div>
        </div>
    
        <!-- Design a path -->
    
        <div class="path">
            <p class="path_design"> <b>Edit Profile</p>
        </div>

        <!-- Design Form Section -->
    <h2 style=" color:#201f1f ; margin: 2% 0px 0px 2%;"> STUDENT PROFILE</h2>

    <div class="section-1">
        <div class="col-1">
            
            <p><b>STUDENT PICTURE</b></p>
            <img src="images/profile/pr2.png" alt="Recruiter Profile">
            <label for="change_profile" class="profile">
                Change Image
                <input id="change_profile" type="file"/>
            </label><br><br><br><br>
            <label for="change_resume" class="resume">
                Select Resume
            <input id="change_resume" type="file"/>

            </label>
            
            

        </div>
        
        <div class="col-2">
            <p><b><br> STUDENT INFORMATION</b></p><br>
            <div class="sec-2">
                <form>
                    <div class="row1">
                        <p>Name :</p>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="row1">
                        <p>Email :</p><br>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="row1">
                        <p>Password :</p><br>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="row1">
                        <p>Confirm Password :</p><br>
                        <input type="password" name="cpassword" id="cpassword">
                    </div>

                    <div class="row1">
                        <p>Phone :</p><br>
                        <input type="number" name="phone" id="phone">
                    </div>

                    <div class="row1">
                        <p>College Name :</p><br>
                        <input type="text" name="cname" id="cname">
                    </div>

                    <div class="row1">
                        <p>Branch :</p><br>
                        <input type="text" name="branch" id="branch">
                    </div>

                    <div class="row1">
                        <p>Current Semester :</p><br>
                        <input type="number" name="sem" id="sem">
                    </div>

                    <div class="row1">
                        <p>CGPA :</p><br>
                        <input type="number" name="phone" id="phone">
                    </div>

                    <div class="row1">
                        <p>10th Percentage:</p><br>
                        <input type="number" name="Percentage" id="Percentage">
                    </div>

                    <div class="row1">
                        <p>12th Percentage :</p><br>
                        <input type="number" name="per" id="per">
                    </div>

                    <div class="row1">
                        <p>Starting Year :</p><br>
                        <input type="number" name="syear" id="syear">
                    </div>

                    <div class="row1">
                        <p>Ending Year:</p><br>
                        <input type="number" name="eyear" id="eyear">
                    </div>

                    <div class="row1">
                        <p>Address :</p><br>
                        <textarea name="description" id="description" ></textarea>
                        <!-- <input type="text" name="address" id="address"> -->
                    </div>

                    <div class="row1">
                        <p>Resume :</p><br>
                            <input type="file" id="change_resume" class="change_resume">
                    
                        <!-- <input type="file" name="resume" id="resume"> -->
                    </div>

                    <div class="row1">
                        <button>Update</button>
                        <!-- <input type="button" name="submit" id="submit" value="Update"> -->
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>