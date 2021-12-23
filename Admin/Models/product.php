<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM `products`,`manufactures`,`protypes`
        WHERE `products`.`manu_id` = `manufactures`.`manu_id`
        AND `products`.`type_id` = `protypes`.`type_id`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function addProduct($name,$image,$price,$manu_id,$type_id,$desc,$fea,$crat)
    {
        $sql = self::$connection->prepare("INSERT INTO `products`(`name`,`image`,`price`,`manu_id`,`type_id`,`description`,`feature`,`created_at`) 
        VALUES (?,?,?,?,?,?,?,?)");
        var_dump("INSERT INTO `products`(`name`,`image`,`price`,`manu_id`,`type_id`,`description`,`feature`,`created_at`) 
        VALUES ('$name','$image',$price,$manu_id,$type_id,'$desc',$fea,'$crat')");
        $sql->bind_param("ssiiisis", $name,$image,$price,$manu_id,$type_id,$desc,$fea,$crat);
        return $sql->execute(); //return an object
    }
    public function delProduct($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }
    public function getProductsById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function editProduct($name,$image,$price,$manu_id,$type_id,$desc,$fea,$crat,$id)
    {
        $sql = self::$connection->prepare("UPDATE `products` SET `name` = ?,`image` = ?,`price` = ?,`manu_id` = ?,`type_id` = ?,`description` = ?,`feature` = ?,`created_at` = ? 
        WHERE `id` = ?");
        var_dump("UPDATE `products` SET `name` = '$name',`image` = '$image',`price` = $price,`manu_id` = $manu_id,`type_id` = $type_id,`description` = '$desc',`feature` = $fea,`created_at` = '$crat'
        WHERE `id` = $id");
        $sql->bind_param("ssiiisisi", $name,$image,$price,$manu_id,$type_id,$desc,$fea,$crat,$id);
        return $sql->execute(); //return an object
    }
}