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
    if(isset($_GET['id'])){
        $name = $_POST['name'];
        $manu_id = $_POST['manu'];
        $type_id = $_POST['type'];
        $price = $_POST['price'];
        $desc =  $_POST['desc'];
        $image = $_FILES['image']['name'];
        $fea = $_POST['feature'];
        $crat = $_POST['Created_at'];
        if($product->editProduct($name,$image,$price,$manu_id,$type_id,$desc,$fea,$crat,$_GET['id'])){
            echo "Sua thanh cong";
        }
        else{
            echo "Sua khong duoc";
        }
    }
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
    header('Location: http://localhost:8080/nhom10/Admin/products.php');
}