<?php
session_start();
session_unset();

include('connection/db.php');

$query=mysqli_query($conn,"select * from jobseeker where email='{$_SESSION['email']}' ");

if ($query) {
      header('location:http://localhost/job_portal/home.php');
    }else{
      header('location:http://localhost/job_portal/login.php');
    }
?>