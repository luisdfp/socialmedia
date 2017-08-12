<?php
require ('config/config_select.php');

try 
{
    $dsn = "$driver:host=$hostname;dbname=$database;charset=$charset";
    $conn = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    require ('lib/db_functions.php');
}
catch(PDOException $e)
{
    echo "DB connection failed: " . $e->getMessage();
}
