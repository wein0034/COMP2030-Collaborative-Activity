<!-- contributor: Jessica Richardson rich0485 -->

<?php
    // connecting to database using PDO
    define('USER', 'root');
    define('PASSWORD', 'mysql');
    define('HOST', 'localhost');
    define('DATABASE', 'senior');
    $connection;
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    }
    catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>