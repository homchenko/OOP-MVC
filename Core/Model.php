<?php
namespace Core;
class Model{
    public static function getDB(){
        $connection = mysqli_connect(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD, Config::DB_NAME);
        return $connection;
    }
}
?>