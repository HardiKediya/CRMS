<?php
include 'dbconnect.php';
$enrollment=$_POST['id'];
// $enrollment=65498;

$result1=mysqli_query($con,"SELECT * FROM `student` WHERE `studentId` IN($enrollment)");

$num=mysqli_num_rows($result1);
if($num>0)
{
    $query="DELETE FROM `student` WHERE `studentId` IN($enrollment)";

    if(mysqli_query($con,$query))
    {
        $result=array("status"=>true,"msg"=>"Delete Successfully...!");
    }
    else
    {
        $result=array("status"=>true,"msg"=>"Delete Failed...!");
    }
}
else
{
    $result=array("status"=>true,"msg"=>"Student Id not found...!");
}
echo json_encode($result);
?>