<?php

class Advertisement extends DB
{
    public $title;
    public $userid;

    public function get()
    {
        $SQL = 'SELECT * FROM advertisements';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Advertisement');
        return $stmt->fetchAll();
    }
    public function getWithUsers() {
        $SQL = 'SELECT a.id, a.title, u.name FROM advertisements a INNER JOIN users u ON u.id = a.userid;';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Advertisement');
        return $stmt->fetchAll();
    }
}
?>