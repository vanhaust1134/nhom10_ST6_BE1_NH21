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
    if(isset($_GET['manu_id'])){
        $manu_name = $_POST['manu_name'];
        if($manufacture->editManu($manu_name,$_GET['manu_id'])){
            echo "Sua thanh cong";
        }
        else{
            echo "Sua khong duoc";
        }
    }
    header('Location: http://localhost:8080/nhom10/Admin/products.php');
}