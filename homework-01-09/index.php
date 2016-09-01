<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'connection.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
// выполняем операции с базой данных
$query = "SELECT name FROM author;";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Выполнение запроса прошло успешно";
}
     
// закрываем подключение
mysqli_close($link);
?>