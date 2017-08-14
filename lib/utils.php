<?php
function get_query_string_values ($query_string)
{
    $qstr_values = array();
    foreach(explode("&", $query_string) as $keyvalue)
    {    
        $qstr_values[explode("=", $keyvalue)[0]] = explode("=", $keyvalue)[1];
    }

    return $qstr_values;
}