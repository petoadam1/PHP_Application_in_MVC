<?php

class DB {
    protected static $_connection = null;

    public function __construct(){
        if(self::$_connection == null) {
            $host = 'localhost';
            $dbname = 'phpwebpages';
            $user = 'root';
            $password = '1234';

            self::$_connection = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
        }
    }
}

?>