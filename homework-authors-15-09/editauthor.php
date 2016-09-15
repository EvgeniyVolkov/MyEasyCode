<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_GET['idToEdit'])) {
	$idToEdit = $_GET['idToEdit'];
	$name = $_GET['name'];
	$age = $_GET['age'];

    require_once 'forms/editauthorform.php';

} else {
    echo 'Вернитесь к выбору автора для редактирования!';
}

