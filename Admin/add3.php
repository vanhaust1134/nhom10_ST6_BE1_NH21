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
    $manu_id = $_POST['manu_id'];
    $manu_name = $_POST['manu_name'];
    if($manufacture->addManu($manu_id,$manu_name)){
        echo "Them thanh cong";
    }
    else{
        echo "Them khong duoc";
    }
    header('Location: http://localhost:8080/nhom10/Admin/products.php');
}
?>