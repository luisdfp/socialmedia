<?php
function get_condition_with_lowest_count($pdo)
{
    return $pdo->query("SELECT condition_id AS 'cond_id', count(*) as 'cond_count' FROM test_results GROUP BY condition_id ORDER BY `cond_count` ASC LIMIT 1")->fetch()['cond_id'];
}

function insert_into($pdo, $table, array $key_value)
{
    $sql = "INSERT INTO $table "; 
    $columns = "(";
    $values = "(";
    foreach ($key_value as $key => $val) {
        $columns .= "`$key`, ";
        $values .= "'$val', ";
    }
    $columns = rtrim($columns, ", ") . ")";
    $values = rtrim($values, ", ") . ")";
    $sql .= "$columns VALUES $values;";
    $stmt = $pdo->prepare($sql);    
    return $stmt->execute();
}