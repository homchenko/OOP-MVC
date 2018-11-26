<?php
    namespace App\Models;
    use Core\Model;
    class Post extends Model{
        public static function getAll(){
            $db = Model::getDB();
            $sql = "SELECT * FROM posts";
            $query = mysqli_query($db, $sql);
            return $query;
        }
    }
?>