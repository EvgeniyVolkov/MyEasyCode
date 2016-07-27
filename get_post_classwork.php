<!-- 1. Создать форму с такими полями:
Имя
Фамилия
Язык программирования, который учу
Язык, который хотел бы выучить -->

<!--
<form action="" name="test-form" method="POST">
    Имя: <input type="text" name="name" /> <br />
    Фамилия: <input type="text" name="lastname" /> <br />
    Язык программирования, который учу: <input type="text" name="lang1" /> <br />
    Язык, который хотел бы выучить: <input type="text" name="lang2" /> <br />
    <input type="submit" value="Жми!">
</form>
-->

<!-- 2.  Принять данные и вывести следующий текст на страницу:
Привет!
Меня зовут <Имя> <Фамилия>. Я изучаю <Язык программирования>. Хотел бы изучать <Язык программирования>. -->

<?php
// echo "Привет!<br />
// Меня зовут " . $_POST['name'] . " " . $_POST['lastname'] . ". " . "Я изучаю " . $_POST['lang1'] . ". Хотел бы изучать " . $_POST['lang2'] . ".";
?>

<!-- 
<form action="" name="test-form" method="GET">
    Слово: <input type="text" name="word" /> <br />
    Кол-во повторений: <input type="text" name="repeat" /> <br />
    <input type="submit" value="Start!">
</form>
 -->

<?php
/*
$n = $_GET['repeat'];
$i = 0;
while ($i < $n) {
	echo $_GET['word'] . '<br />';
	$i++;
}
*/
?>

<form action="" name="test-form" method="POST">
    Слово: <input type="text" name="word" /> <br />
    Кол-во повторений: 
    <select name="repeat">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    <input type="submit" value="Start!">
</form>

<?php

$n = $_POST['repeat'];
$i = 0;
while ($i < $n) {
	echo strrev($_POST['word']) . '<br />';
	$i++;
}

?>