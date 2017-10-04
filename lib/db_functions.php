<?php
function get_next_condition($pdo)
{
    $resultless = get_condition_with_no_results($pdo);

    if($resultless)
        return $resultless;
    else
        return get_condition_with_lowest_count($pdo);
}

function get_condition_with_lowest_count($pdo)
{
    return $pdo->query(
      "SELECT condition_id AS 'cond_id', count(*) as 'cond_count'
       FROM test_results LEFT JOIN conditions
       ON test_results.condition_id = conditions.id
       WHERE conditions.enabled = 1
       GROUP BY condition_id
       ORDER BY `cond_count`
       ASC LIMIT 1"
    )->fetch()['cond_id'];
}

function get_condition_with_no_results($pdo)
{
    return $pdo->query(
      "SELECT conditions.id AS 'cond_id', conditions.enabled
       FROM conditions LEFT JOIN test_results
       ON conditions.id = test_results.condition_id
       WHERE test_results.condition_id IS null AND conditions.enabled = 1"
    )->fetch()['cond_id'];
}

function insert_into($pdo, $table, array $key_value)
{
    $sql = "INSERT INTO $table ";
    $columns = "(";
    $values = "(";
    foreach ($key_value as $key => $val) {
        $columns .= "`$key`, ";
        $values .= ":$key, ";
    }
    $columns = rtrim($columns, ", ") . ")";
    $values = rtrim($values, ", ") . ")";
    $sql .= "$columns VALUES $values;";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute($key_value);
}
