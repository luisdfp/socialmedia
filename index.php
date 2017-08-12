<?php 
session_start();

require ('database.php');

$condition_1_path = "case1.php";
$condition_2_path = "case2.php";
$condition_3_path = "case3.php";

$qstr_values = array();
foreach(explode("&", $_SERVER['QUERY_STRING']) as $keyvalue)
{    
    $qstr_values[explode("=", $keyvalue)[0]] = explode("=", $keyvalue)[1];
}

if(isset($_SESSION["case"])){
    $case = $_SESSION["case"];
}else{
    $case = rand(1, 3);
    $_SESSION["case"] = $case;
}

// switch($case){
//     case 1:
//         require("case1.php");
//         break;
//     case 2:
//         require("case2.php");
//         break;
//     case 3:
//         require("case3.php");
//         break;
//     default:
//         require("case1.php");
//         break;    
// }

/*Testing*/
switch($qstr_values['condition']){
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
/*********/