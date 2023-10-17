<?php
include 'php/dbconnect.php';

if (!isset($_SESSION["adminLogin"])) {
    header("location:AdminLogin.php");
}

require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

//global variable
$recruiter = "";
$job ="";
$application = "";

$data ='<!DOCTYPE html>
<html lang="en">
<body>
    <br>
    <h2 class="title">Campus Recruitement Management System</h2>
    <br><br>
    <h4 class="sub-title">Report on total registration per jobs</h4>
';

    $result1 = mysqli_query($con, 'SELECT * FROM `recruiter`');

    while ($recruiter = mysqli_fetch_assoc($result1)) {
        $result2 = mysqli_query($con, 'SELECT * FROM `job` WHERE `recruiterId`=' . $recruiter['recruiterId'] . '');
        if ($recruiter['accountStatus'] == "active") {
            if (mysqli_num_rows($result2) > 0) {
                $total_job = mysqli_num_rows($result2);
                $data .= '<h4 class="company-title">Company Name : ' . strtoupper($recruiter['companyName']) . '</h4>';
                
                $data .= '<h4 class="small-title">Total Jobs : ' . $total_job . '</h4>';

                while ($job = mysqli_fetch_assoc($result2)) {
                    $data .= '<h4 class="job-title">Job : ' . strtoupper($job['jobTitle']) . '</h4>';

                    $data .=' <table class="table">
                    <thead>
                        <tr>
                            <th>Application No.</th>
                            <th>Student Name</th>
                            <th>Student Email</th>
                            <th>Apply date</th>
                            <th>Resume</th>
                        </tr>
                    </thead> <tbody>';
                    $result3=mysqli_query($con, 'SELECT * FROM `application` WHERE `jobId`='.$job['jobId'].'');
                    while($application=mysqli_fetch_assoc($result3))
                    {
                        $result4=mysqli_query($con,'SELECT * FROM `student` WHERE `studentId`='.$application['studentId'].'');
                        $student=mysqli_fetch_assoc($result4);

                        $data .=' 
                        
                        <tr>
                            <td>'.$application['app_no'].'</td>
                            <td>'.$application['studentName'].'</td>
                            <td>'.$application['studentEmail'].'</td>
                            <td>'.$application['applyedDate'].'</td>
                            <td><a href="../student/Resume/'.$student['studentResume'].'" target="_blank">view</a></td>  
                        </tr>
                   ';
                        
                    }
                 
                    $data .=' </tbody></table></body></html>';
                }
            }
        }
    }
    $stylesheet = file_get_contents('./css/reportStyle.css');
    $mpdf->writeHtml($stylesheet,1);
    $mpdf->writeHtml($data);
    $mpdf->output();
    ?>
