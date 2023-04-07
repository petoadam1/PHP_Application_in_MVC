<?php

class User extends DB
{
    public $name;

    public function get()
    {
        $SQL = 'SELECT * FROM users;';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetchAll();
    }
}
?>