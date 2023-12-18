<?php

class Database
{
    public static function getPDO()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=Formatech;charset=utf8mb4', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}

?>

