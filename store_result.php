<?php
require ('database.php');
require ('lib/db_functions.php');

header('Content-Type: application/json; charset=UTF-8');

$condition = $_SESSION['assigned_condition'];
$participant_code = $_SESSION['participant_code'];
$username = $_POST['username'];
$description = $_POST['description'];
$avatar = $_POST['avatar'];
$cancelled = $_POST['cancelled'];

try{
    $result = insert_into($pdo, "test_results", [
        "participant_code" => $participant_code, 
        "condition_id" => $condition, 
        "username" => $username,
        "description" => $description,
        "avatar" => $avatar,
        "cancelled" => $cancelled
    ]);
    if($result)
        die(json_decode(["status" => "success"]));
    else
        die(json_decode(["status" => "error"]));
}catch(PDOException $e){
    die(json_decode(["status" => "error"]));
}
