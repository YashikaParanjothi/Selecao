<?php
session_start();
include('database/dbconfig.php');

if($dbconfig)
{
    // echo "Database Connected";
}
else
{
    echo "Failed";
    header("Location: database/dbconfig.php");
}

if(!$_SESSION['username'])
{
    if($page=="home"){
        header('Location: admin/login.php');
    }
    else if($page=="aboutus" || "audit" || "contactus" || "events" || "forum" || "members" || "membership" || "recognized-preschools"){
        header('Location: ../admin/login.php');
    }
    else{
        header('Location: login.php');
    }
}
?>