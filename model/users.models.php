<?php

require_once "connection.php";

Class ModelUsers {


    static public function ModelShowUsers($table, $item, $value) {
        $statement = Connection::Connect()->prepare("SELECT * from $table  where $item = :$item");
        $statement->bindParam(":". $item, $value, PDO::PARAM_STR); 
        $statement->execute();
        return $statement->fetch();
    }

}