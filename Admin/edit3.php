<?php
require "config.php";
require "Models/db.php";
require "Models/product.php";
$product = new Product;
require "Models/manufacture.php";
$manufacture = new Manufacture;
require "Models/protype.php";
$protype = new protype;
if(isset($_POST['submit'])){
    if(isset($_GET['type_id'])){
        //$type_id = $_POST['type_id'];
        $type_name = $_POST['type_name'];
        if($protype->editProtype($type_name,$_GET['type_id'])){
            echo "Sua thanh cong";
        }
        else{
            echo "Sua khong duoc";
        }
    }
    //header('Location: http://localhost:8080/nhom10/Admin/products.php');
}