<?php
session_start();
require ('../database.php');
require ('../lib/db_functions.php');

$condition = $_SESSION['assigned_condition'];
$participant_code = $_SESSION['participant_code'];
$username = $_POST['username'];
$description = $_POST['description'];
$avatar = $_POST['avatar'];
$cancelled = $_POST['cancelled'] ? 1 : 0;

if($_SESSION['result_submitted']){
    die(json_encode(["status" => "error", "msg" => "This result has already been submitted."]));
}else{
    try{
        $result = insert_into($pdo, "test_results", [
            "participant_code" => $participant_code, 
            "condition_id" => $condition, 
            "username" => $username,
            "description" => $description,
            "avatar" => $avatar,
            "cancelled" => $cancelled
        ]);
        if($result){
            echo json_encode(["status" => "success", "msg" => "Results submitted."]);
            $_SESSION['result_submitted'] = true;
        }else{
            echo json_encode(["status" => "error", "msg" => "Query was unsuccessful"]);
        }         
    }catch(PDOException $e){
        die(json_encode(["status" => "error", "msg" => "DB exception occurred"]));
    }
}

