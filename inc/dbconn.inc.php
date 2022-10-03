<?php
    define('USER', 'root');
    define('PASSWORD', 'mysql');
    define('HOST', 'localhost');
    define('DATABASE', 'senior');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
   
?>