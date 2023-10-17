<?php

session_start();

if($_SESSION["companyName"]=="")
{
    $result=array("status"=>"not register");
    $_SESSION["companyName"]="done";
}
else
{
    $result=array("status"=>"registed");
}
echo json_encode($result);

?>