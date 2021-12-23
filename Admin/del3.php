<?php
require "config.php";
require "Models/db.php";
require "Models/product.php";
$product = new Product;
require "Models/manufacture.php";
$manufacture = new Manufacture;
require "Models/protype.php";
$protype = new protype;
if(isset($_GET['manu_id'])){
    $manufacture->delManu($_GET['manu_id']);
    header('location:manufactures.php');
}