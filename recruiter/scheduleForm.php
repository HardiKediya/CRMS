<?php
include '../dbconnect.php';
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add New Schedule for Recruiter</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
        
        <script>
            $(document).ready(function() {
                $(function() {
                    $( "#date_picker" ).datepicker({
                        dateFormat: 'dd-mm-yy',
                        // maxDate: '+1w',
                        minDate: '+1w'
                    });
                });
            });
        </script>

    </head>
    <style>
        body {
        margin: 0;
        padding: 0;
        background-size: cover;
        background: url(img/bg4.jpg);
    }

    h1 {
        margin: 0px;
        padding-left: 50px;
        padding-top: 20px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .schedule{
        width: 90%;
        margin: auto;
        margin-top: 35px;
        height: 90vh;
        background-color: rgba(0, 0, 0, .5);
        color: #fff;
    }
    .row-1{
        margin: auto;
        margin-top: 30px;
        /* background-color: yellow; */
        width: 92%;
        /* height: 70vh; */
        
    }

    .sec-1{
        width: 15%;
        height: 45px;
        margin-top: 1px;
        /* background-color: yellow; */
        padding-top: 2px;
        padding-left: 1px;
        display: flex;
    }
    .sec-2{
        width: 97%;
    }
    /* .sec-1 i{
        display: flex;
    } */
    .sec-1 p{
        /* display: flex; */
        padding-left: 2px;
        font-size: 20px;
    }
    
    select{
        color: rgb(255, 255, 255);
        opacity: 2;
        padding-left: 40px;
    }

    #job{
        /* border: none;
        border-bottom: 1px solid #fffbfb; */
        border: 1px solid #fffbfb;
        background: transparent;
        outline: none;
        text-indent: 10px;
        height: 30px;
        color: #fcfbfb;
        font-size: 16px;
        width: 100%;
        /* margin-bottom: 0px; */
    }

    option {
        background-color: rgb(182, 141, 141);
    }

    input{
        border: 1px solid #fffbfb;
        background: transparent;
        outline: none;
        text-indent: 10px;
        height: 30px;
        color: #fcfbfb;
        font-size: 16px;
        width: 100%;
    }
    
    #description{
        border: 1px solid #fffbfb;
        background: transparent;
        outline: none;
        text-indent: 10px;
        height: 100px;
        color: #fcfbfb;
        font-size: 16px;
        width: 100%;
    }

    .row-2 {
        padding-top: 60px;
        /* background-color: red; */
        width: 98%;
        min-height: 30px;
        display: flex;
        margin: auto;
    }

    .input2{
        width: 100%;
    }


    .sect-3 a{
        padding-left: 40px;
        padding-top: 10px;
        /* height: 20px; */
        /* background-color: bisque; */
    }

    .sect-4 input[type="submit"]
        {
            border: none;
            outline: none;
            width: 10%;
            height: 35px;
            background: #1c8adb;
            color: #fff;
            font-size: 18px;
            border-radius: 15px;
            position: absolute;
            bottom: 80px;
            right: 120px;
        }
    
    </style>
    <body>
        <div class="schedule">
            <h1><u>CREATE A NEW SCHEDULE</u></h1>
            <div class="row-1">
                <div class="sec-1">
                    <p><i class="fa-solid fa-note-sticky"></i> Job :</p>
                </div>
                
                <div class="sec-2">
                    <select name="job" id="job" name="job">
                    <option value="" selected disabled> Select Job</option>
                    <?php
                    $query=mysqli_query($con,'SELECT * FROM `job` WHERE `recruiterId`='.$_SESSION['recruiterId'].'');
                    while($row=mysqli_fetch_assoc($query))
                    {
                        $query1=mysqli_query($con,'SELECT * FROM `schedule` WHERE `jobId`='.$row['jobId'].'');
                        if(mysqli_num_rows($query1)==0)
                        {
                        echo '<option value="'.$row['jobId'].'">'.$row['jobTitle'].'</option>';
                        }

                    }
                    ?>
                    </select>
                </div>

                <div class="sec-1">
                    <p><i class="fa-solid fa-user-tie"></i> Title :</p>
                </div>
                
                <div class="sec-2">
                    <input type="text" name="title">
                </div>

                <div class="sec-1">
                    <p><i class="fa-solid fa-calendar" id="icon"></i> Placement Date :</p>
                    
                </div>
                
                <div class="sec-2">
                    <input type="text" id="date_picker" size="9" name="date_picker">
                    <!-- <input  type="text" name="dueDate" onfocus="(this.type = 'date')" id="dueDate"> -->
                </div>

                <div class="sec-1">
                    <p><i class="fa-solid fa-file-pen"></i>Description :</p>
                </div>
                
                <div class="sec-2" id="sec-2">
                    <textarea name="description" id="description" ></textarea>
                </div>
            </div>

            <div class="row-2">
                <div class="input2">
                    <div class="sect-3">
                        <a href="rjob.php"><i class="fa-solid fa-arrow-left"></i>Back to Job Page</a>
                    </div>
                    <div class="sect-4">
                        <input type="submit" name="submit" value="Create">
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>