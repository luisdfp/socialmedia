<?php 
session_start();

require ('lib/utils.php');

$qstr_values = get_query_string_values($_SERVER['QUERY_STRING']);

/*REMOVE WHEN FINISHED - For testing purposes*/
if(isset($qstr_values['condition'])){
    $_SESSION['assigned_condition'] = $qstr_values['condition'];
    echo $_SESSION['assigned_condition'];
    unset($_SESSION['result_submitted']);
}
/*********************************************/

if($_SESSION['result_submitted']){
  die("Ihr habt gerade in dieser Untersuchung teilgenommen. Danke.");
}

require ('database.php');
require ('lib/db_functions.php');

$condition_1_path = "case1.php";
$condition_2_path = "case2.php";
$condition_3_path = "case3.php";
$condition_4_path = "case4.php";

/*Participant code must be provided either via query string or previously set session*/
if( !( isset($qstr_values['pcode']) || isset($_SESSION['participant_code']) ) ){
    die("No participant code provided");
}else{
    /*If the participant code was provided via query string, set it in the session so it is remembered*/
    if(isset($qstr_values['pcode']))
        $_SESSION['participant_code'] = $qstr_values['pcode'];
}

/*If the condition was already assigned and found in the session*/
if(isset($_SESSION["assigned_condition"])){
    /*Use the condition previosly assigned*/
    $condition = $_SESSION["assigned_condition"];
}else{
    /*Otherwise, determine which condition to assign to the participant*/
    try{
        $condition = get_next_condition($pdo);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        die("Database error");
    }

    /*Set the assigned condition in the session*/
    $_SESSION["assigned_condition"] = $condition;
}

if($condition){
    /*Show the corresponding condition template*/
    switch($condition){
        case 1:
            require($condition_1_path);
            break;
        case 2:
            require($condition_2_path);
            break;
        case 3:
            require($condition_3_path);
            break;
        case 4:
            require($condition_4_path);
            break; 
    }
}