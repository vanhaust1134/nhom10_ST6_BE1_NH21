<?php
require "config.php";
require "Models/db.php";
require "Models/product.php";
$product = new Product;
require "Models/manufacture.php";
$manufacture = new Manufacture;
require "Models/protype.php";
$protype = new protype;
if(isset($_GET['id'])){
    $product->editProduct($_GET['id']);
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $manu_id = $_POST['manu'];
        $type_id = $_POST['type'];
        $price = $_POST['price'];
        $desc =  $_POST['desc'];
        $image = $_FILES['image']['name'];
        $fea = $_POST['feature'];
        $crat = $_POST['Created_at'];
        if($product->editProduct($name,$image,$price,$manu_id,$type_id,$desc,$fea,$crat)){
            echo "Them thanh cong";
        }
        else{
            echo "Them khong duoc";
        }
    }
}