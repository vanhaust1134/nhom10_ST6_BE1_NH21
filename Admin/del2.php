<?php
require "config.php";
require "Models/db.php";
require "Models/product.php";
$product = new Product;
require "Models/manufacture.php";
$manufacture = new Manufacture;
require "Models/protype.php";
$protype = new protype;
if(isset($_GET['type_id'])){
    $protype->delProtype($_GET['type_id']);
    header('location:protypes.php');
}