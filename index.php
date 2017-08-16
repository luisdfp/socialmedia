<?php 
session_start();

require ('database.php');
require ('lib/utils.php');
require ('lib/db_functions.php');

$condition_1_path = "case1.php";
$condition_2_path = "case2.php";
$condition_3_path = "case3.php";

$qstr_values = get_query_string_values($_SERVER['QUERY_STRING']);

/*Participant code must be provided either via query string or previously set session*/
if( !( isset($qstr_values['pcode']) || isset($_SESSION['participant_code']) ) ){
    echo "No participant code provided";
}else{
    /*If the participant code was provided via query string, set it in the session so it is remembered*/
    if(isset($qstr_values['pcode']))
        $_SESSION['participant_code'] = $qstr_values['pcode'];

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
            die("Databse error");
        }

        /*Set the assigned condition in the session*/
        $_SESSION["assigned_condition"] = $condition;
    }

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
        default:
            require($condition_1_path);
            break;    
    }
}

/*Testing*/
// switch($qstr_values['condition']){
//     case 1:
//         require($condition_1_path);
//         break;
//     case 2:
//         require($condition_2_path);
//         break;
//     case 3:
//         require($condition_3_path);
//         break;
//     default:
//         require($condition_1_path);
//         break;    
// }
/*********/