<?php
$env = getenv('ENV');

if($env == 'production'){
    require('prod_config.php');
}else{
    echo "dev environment: ";
    require('dev_config.php');
}
