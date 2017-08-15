<?php
$env = getenv('ENV');

if($env == 'production'){
    require('prod_config.php');
}else{
    require('dev_config.php');
}
