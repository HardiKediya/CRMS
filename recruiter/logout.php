<?php
include '../dbconnect.php';
session_start();
session_destroy();  

echo '<script>window.location.href = "../home.php"; </script>';
?>