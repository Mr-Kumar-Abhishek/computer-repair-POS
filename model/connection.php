<?php

class Connection{
    static public function Connect() {
        $link = new PDO("mysql:host=localhost;dbname=laptop_world", 
                        "root", "leptonification");

        $link->exec("set names utf8");

        return $link;
    }
}