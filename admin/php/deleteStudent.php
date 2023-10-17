<?php
include 'dbconnect.php';
$enrollment=$_POST['id'];
// $enrollment=65498;

$result=mysqli_query($con,"SELECT * FROM `student` WHERE `studentId` = $enrollment");

if(mysqli_num_rows($result)==0)
{
    $result=array("status"=>false,"msg"=>"Enrollment does not Exist.");
}
else{
    if(mysqli_query($con,"DELETE FROM `student` WHERE `studentId` = $enrollment"))
    {
        $result=array("status"=>true,"msg"=>"Delete Successfully...!");
    }
    else
    {
        $result=array("status"=>true,"msg"=>"Delete Failed...!");
    }
}
    // $result=array("status"=>true,"msg"=>$enrollment[1]);

echo json_encode($result);
?>