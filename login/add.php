<?php
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$user = new User;
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($user->addUser($username,$password)){
        echo "Them thanh cong";
    }
    else{
        echo "Them khong duoc";
    }
    header('Location: http://localhost:8080/nhom10/login/index.php');
}
?>