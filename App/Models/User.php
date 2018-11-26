<?php
    namespace App\Models;
    use Core\Model;
    class User extends Model{
        public static function getAllUsers(){
            $db = Model::getDB();
            $sql = "SELECT * FROM users";
            $query = mysqli_query($db, $sql);
            return $query;
        }
    }
?>