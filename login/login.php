<?php
session_start();
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$user = new User;
<<<<<<< HEAD
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($user->checkLogin($username, $password)) {
        $_SESSION['user'] = $username;
        header('location:../Admin');
    } else {
        header('location:index.php');
    }
}
=======
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($user->checkLogin($username,$password)){
        $_SESSION['user'] = $username;
        header('location:../Admin');
    }
    else{
        header('location:index.php');
        echo "<script> alert('Wrong password');window.location='index.php' </script>";
    }
}
>>>>>>> bb423c1ac9d843fbd33483c2cc2b4f7d9d1e7a52
