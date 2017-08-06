<?php 
session_start();

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
require("case2.php");
/*********/