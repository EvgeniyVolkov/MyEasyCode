<?php

$params = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);
//echo '<pre>';
//print_r($params);
//echo '</pre>';

// $columns; // `key1`, `key2`
// $values; // 'value1', 'value2'

foreach ($params as $key => $value) {
    $keyArray[] = "`" . $key . "`";
    $valueArray[] = "'" . $value . "'";
}

echo '<pre>';
print_r($keyArray);
echo '</pre>';

echo '<pre>';
print_r($valueArray);
echo '</pre>';

$keyCollector = implode(",", $keyArray);
echo $keyCollector;
echo '<br />';
$valueCollector = implode(",", $valueArray);
echo $valueCollector;

