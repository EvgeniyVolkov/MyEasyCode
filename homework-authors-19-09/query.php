<?php

require_once 'db.php';

function getAuthorsWithBooksQuantity() {
	$sql = "
		SELECT
			`a`.`id`,
			`a`.`name`,
			`a`.`age`,
			count(`ab`.`author_id`) AS `booksQuantity`
		FROM `author` AS `a`
		LEFT JOIN `author_book` AS `ab`
			ON `a`.`id` = `ab`.`author_id`
		GROUP BY `a`.`id`;";
		
	return fetchAll($sql);
}

function getAuthorBooks($authorID) {
	$sql = "
		SELECT
        	`ab`.`author_id`,
        	`b`.`title`,
        	`ab`.`book_id`
        FROM `author_book` AS `ab`
        LEFT JOIN `book` AS `b`
        	ON `b`.`id` = `ab`.`book_id`
        WHERE `ab`.`author_id` = {$authorID};";

    return fetchAll($sql);
}

function deleteAuthorById($id) {
    delete('author', "id = $id");
}

function addNewAuthor($name, $age) {
    $data = array(
        'name' => $name,
        'age' => $age
    );
    insert('author', $data);
}

function editAuthor($authorId, $newName, $newAge) {
	$sql = "UPDATE `author` SET `name` = '{$newName}', `age` = '{$newAge}' WHERE id = $authorId";
    $connectionObject = getDbConnection();
    mysqli_query($connectionObject, $sql);
	// echo 'It\'s OK! <br />';
	// echo '$idAuthorToEdit = ' . $idAuthorToEdit . '<br />';
	// echo '$newName = ' . $newName . '<br />';
	// echo '$newAge = ' . $newAge . '<br />';
}

function getOtherAuthorsBooks($authorID, $booksID) {
	$sql = "
		SELECT
		    `b`.`id`,
		    `b`.`title`
        FROM `book` AS `b`
        LEFT JOIN `author_book` AS `ab`
        	ON `b`.`id` = `ab`.`book_id`
        WHERE `b`.`id` NOT IN ({$booksID})
        GROUP BY `b`.`id`";

    return fetchAll($sql);
}

function addBooksToAuthor($authorID, $booksIDs) {
    $addingQuotesAndBracketsArr = [];
        foreach ($booksIDs AS $index => $bookID) {
            $addingQuotesAndBracketsArr[$index] = "(" . $authorID . ", " . $bookID . ")";
        }
    $preparedIDs = implode(", ", $addingQuotesAndBracketsArr);
    $sql = "INSERT INTO `author_book` (`author_id`, `book_id`) VALUES {$preparedIDs}";
    $connectionObject = getDbConnection();
    mysqli_query($connectionObject, $sql);
}

function cutBooks($authorID, $booksToCutID) {
	$sql = "DELETE FROM `author_book` WHERE `author_id` = {$authorID} && `book_id` IN ({$booksToCutID})";
    $connectionObject = getDbConnection();
    mysqli_query($connectionObject, $sql);
}