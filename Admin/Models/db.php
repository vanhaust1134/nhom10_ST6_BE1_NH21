<?php
<<<<<<< HEAD
session_start();
=======
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
>>>>>>> bb423c1ac9d843fbd33483c2cc2b4f7d9d1e7a52
if(!isset($_SESSION['user'])){
    header('location:../login/index.php');
}
class Db
{
    public static $connection;
    public function __construct()
    {
        if (!self::$connection) {
            self::$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, PORT);
            self::$connection->set_charset(DB_CHARSET);
        }
        return self::$connection;
    }
}