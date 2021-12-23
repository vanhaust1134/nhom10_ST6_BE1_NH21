<?php
Class User extends Db{
<<<<<<< HEAD
    public function checkLogin($username, $password)
    {
        $sql = self::$connection->prepare("SELECT * FROM `users` WHERE `username`=? AND `password`=?");
        $password = md5($password);
        $sql->bind_param("ss", $username, $password);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->num_rows;
        if($items == 1){
=======
    public function checkLogin($username,$password)
    {
        $sql = self::$connection->prepare("SELECT * FROM users WHERE `username`=? AND `password`=?");
        var_dump("SELECT * FROM users WHERE `username`='$username' AND `password`='$password'");
        $password = md5($password);
        $sql->bind_param("ss",$username,$password);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->num_rows;
        if($items==1)
        {
>>>>>>> bb423c1ac9d843fbd33483c2cc2b4f7d9d1e7a52
            return true;
        }
        else{
            return false;
        }
    }
<<<<<<< HEAD
=======
    public function addUser($username,$password)
    {
        $sql = self::$connection->prepare("INSERT INTO `users`(`username`,`password`) 
        VALUES (?,?)");
        $password = md5($password);
        $sql->bind_param("ss", $username,$password);
        return $sql->execute(); //return an object
    }
>>>>>>> bb423c1ac9d843fbd33483c2cc2b4f7d9d1e7a52
}
?>