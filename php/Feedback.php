<?php
//include databe connection file
include '../dbconnect.php';

//check a request
if(isset($_POST["submit"]))
{
	//fetch data from form
	$name=$_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];

//insert data in table using 
	if(mysqli_query($con,"INSERT INTO `feedbackform`(`no`, `name`, `email`, `message`) VALUES ('','$name','$email','$msg')"))
	{
		echo '<script>if(confirm("Data Inserted...")){window.location.href = "../aboutus.html";}</script>';
	}
	else {
		{
		echo '<script>alert("Failed to insert...!!")</script>';
	}
	}
}
?>