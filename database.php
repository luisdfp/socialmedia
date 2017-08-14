<?php
require ('config/config_select.php');

try 
{
    $dsn = "$driver:host=$hostname;dbname=$database;charset=$charset";
    $pdo = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "DB connection failed: " . $e->getMessage();
    die("Could not connect to the database.");
}
