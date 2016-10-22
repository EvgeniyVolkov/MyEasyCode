<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$tableName = 'book';
$books = array(
    array(
        'name' => 'book1',
        'page_count' => 300
    ),
    array(
        'name' => 'book2',
        'page_count' => 400
    )
);

function multiInsert($tableName, $data) {
    $keysArr = [];
    foreach ($data['0'] AS $key => $value) {
        $keysArr[] = "`" . $key . "`";
    }
    $addingQuotesArr = [];
    $addingBracketsArr = [];
    foreach ($data AS $index => $element) {
        foreach ($element AS $key => $value) {
            $addingQuotesArr[$key] = "'" . $value . "'";
            $valuesWithQuotes = implode(", ", $addingQuotesArr);
        }
        $addingBracketsArr[] = "(" . $valuesWithQuotes . ")";
    }
    $preparedColumns = implode(", ", $keysArr);
    $preparedValues = implode(", ", $addingBracketsArr);
    $sql = "INSERT INTO `{$tableName}` ({$preparedColumns}) VALUES {$preparedValues}";
    echo $sql;
}

multiInsert($tableName, $books);

//SQL output:
// INSERT INTO `book` (`name`, `page_count`) VALUES ('book1', 300), ('book2', '400')