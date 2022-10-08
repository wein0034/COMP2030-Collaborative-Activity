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

    $dbHost     = "localhost";  
    $dbUsername = "root";  
    $dbPassword = "mysql";  
    $dbName     = "senior";  
  
// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}
   
?>