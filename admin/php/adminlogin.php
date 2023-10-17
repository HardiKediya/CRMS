<?php
session_start();
include 'dbconnect.php';
$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM `admin` WHERE `adminName` = '$username'";
$result= mysqli_query($con, $query);
if($row=mysqli_fetch_assoc($result))
{
    if($username==$row['adminName'] && $password == $row['password'])
    {
        $_SESSION["id"]=$row['adminId'];
        $_SESSION["name"]=$row['adminName'];
        $_SESSION["email"]=$row['adminEmail'];
        $_SESSION["email"]=$row['adminEmail'];
        $_SESSION["adminpic"]=$row['adminpic'];
        $_SESSION["adminLogin"]=true;
        // $path=$_SESSION["path"];
        header("location:../AdminDashboard.php");
    }
    else
    {
    echo '<script>if(confirm("Invalide Email and Password..")){ window.location.href = "../AdminLogin.php"; }</script>';
        $_SESSION["login"]=false;
    }
}
else
{
    echo '<script>if(confirm("Data Not found.")){ window.location.href = "../AdminLogin.php"; }</script>';

    $_SESSION["login"]=false;

}
?>
    <a href="../admin.html">BACK TO LOGIN PAGE</a>