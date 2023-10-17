<!DOCTYPE html>
<html>

<head>
    <title>Recruiter Edit Profile</title>
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
        height: 990px;
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

    .col-1 img {
        width: 50%;
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
        width: 20%;
    }

    .row1 input{
        border: 1px solid;
        width: 70%;
        margin-left: 70px;
        /* box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.13) ; */
        box-shadow: 1px 3px #1d1c1c50;
        text-indent: 10px;
    }

   #clocation{
        border: 1px solid;
        width: 70%;
        margin-left: 70px;
        /* box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.13) ; */
        box-shadow: 1px 3px #1d1c1c50;
   }

   option{
    background-color: lightcoral;
   }

   textarea{
        border: 1px solid;
        width: 70%;
        height: 90px;
        margin-left: 70px;
        /* box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.13) ; */
        box-shadow: 1px 3px #1d1c1c50;
   }

   .row1 input[type="button"]{
    /* border: 1px solid rgb(37, 34, 34); */
    /* outline: none; */
    width: 150px;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
    position: absolute;
    right: 40px;
   }

   .row1 input[type="button"]:hover{
    border: 1px solid rgb(37, 34, 34);
    background-color: #22707a;
   }



</style>

<body>
    <!-- Navigation Menu -->

    <div class="navbar">
        <img src="images/logo/logo.png" class="logo" alt="Website Logo" onsubmit="return on_form_sbmt()">
        <div class="right-navbar">
            <a href="#">Dashboard</a>
            <a href="#">Student</a>
            <a href="#">Recruiter</a>
            <div class="dropdown">
                <button class="dropdownbtn">
                    Services <i class="fa fa-caret-down"></i>
                    <div class="dropdown-list">
                        <a href="#">Application</a>
                        <a href="#">Category</a>
                        <a href="#">Inbox</a>
                        <a href="#">Logout</a>
                    </div>
                </button>
            </div>
            <div class="profile_pic">
                <img onclick="showtext()" src="images/profile/pr2.png" alt="Admin Profile pic">
            </div>
        </div>
    </div>

    <!-- Design a path -->

    <div class="path">
        <p class="path_design"> <b>Edit Profile</b></p>
    </div>
    <!-- Design Form Section -->
    <h2 style=" color:#201f1f ; margin: 2% 0px 0px 2%;"> RECRUITER PROFILE</h2>

    <!-- Design Recruiter Edit Profile -->
    <div class="section-1">
        <div class="col-1">
            
            <p><b>Recruiter Profile Pic</b></p>
            <img src="images/profile/pr2.png" alt="Recruiter Profile">
            <label for="change_profile" class="profile">
                Change Profile
                <input id="change_profile" type="file"/>
              </label>

            <!-- <input type="file" name="submit" value="Change Profile"> -->
            <p><b>Company Logo</b></p>
            <img src="images/logo/p2.jpg" alt="Company Logo">
            <label for="change_logo" class="profile">
                Change Logo
                <input id="change_logo" type="file"/>
            </label>
            <!-- <input type="button" name="submit" value="Change Logo"> -->

        </div>
        
        <div class="col-2">
            <p><b><br> RECRUITER INFORMATION</b></p><br>
            <div class="sec-2">
                <form>
                    <div class="row1">
                        <p>Name :</p>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="row1">
                        <p>Recruiter Id :</p><br>
                        <input type="number" name="employee_id" id="employee_id">
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
                        <p>Phone :</p><br>
                        <input type="number" name="phone" id="phone">
                    </div>

                    
                    <p><b><br><br> COMPANY INFORMATION</b></p><br>

                    <div class="row1">
                        <p>Name :</p><br>
                        <input type="text" name="cname" id="cname">
                    </div>
                    <div class="row1">
                        <p>email :</p><br>
                        <input type="email" name="cemail" id="cemail">
                    </div>
                    <div class="row1">
                        <p>Website Link :</p><br>
                        <input type="url" name="website_link" id="website_link">
                    </div>
                    <div class="row1">
                        <p>Location :</p><br>
                        <!-- <input type="text" name="location" id="location"> -->
                        <select name="clocation" id="clocation">
                            <option value="">Select Location</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Gandhinagar">Gandhinagar</option>
                            <option value="Vadodra">Vadodra</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Mehsana">Mehsana</option>
                            <option value="Rajkot">Rajkot</option>
                            <option value="Surat">Surat</option>

                        </select>
                    </div>
                    <div class="row1">
                        <p>Address : :</p><br>
                        <input type="text" name="address" id="address">
                    </div>
                    <div class="row1">
                        <p>Description :</p><br>
                        <textarea name="description" id="description" ></textarea>
                    </div>
                    <div class="row1">
                        <input type="button" name="submit" id="submit" value="Update">
                    </div>
                </form>
            </div>
        </div>
        <div class="sec-1">
            <!-- <p><b>Recruiter Profile Pic</b></p> -->
        </div>
</body>

</html>