<?php
class Protype extends Db
{
    public function getAllProtype()
    {
        $sql = self::$connection->prepare("SELECT * FROM `protypes` ORDER BY `protypes`.`type_id` DESC");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function addProtype($type_id,$type_name)
    {
        $sql = self::$connection->prepare("INSERT INTO `protypes`(`type_id`,`type_name`) 
        VALUES (?,?)");
        $sql->bind_param("is", $type_id,$type_name);
        return $sql->execute(); //return an object
    }
    public function getProtypesById($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes WHERE `type_id` = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function editProtype($type_name,$type_id)
    {
        $sql = self::$connection->prepare("UPDATE `protypes` SET `type_name` = ? WHERE `type_id` = ?");
        $sql->bind_param("si" ,$type_name,$type_id);
        return $sql->execute(); //return an object
    }
    public function delProtype($type_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `protypes` WHERE `type_id`=?");
        $sql->bind_param("i", $type_id);
        return $sql->execute(); //return an object
    }
}