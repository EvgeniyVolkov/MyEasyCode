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

<!-- 
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
 -->

<?php
/*
$n = $_POST['repeat'];
$i = 0;
while ($i < $n) {
	echo strrev($_POST['word']) . '<br />';
	$i++;
}
*/
?>

<!-- Создать форму для конвертации валюты. Доступная валюта: USD, EUR, UAH.
Форма должна содержать:
1. Select с выбором валюты из которой конвертируем
2. Select с выбором валюты в которую конвертируем 
3. Сумму

Курс для каждой из валют задается в массиве в php  файле -->

<form action="" name="test-form" method="GET">
    Ковертируем из: <br />
    <select name="valuta_from">
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="UAH">UAH</option>
    </select><br />
    Ковертируем в: <br />
    <select name="valuta_to">
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="UAH">UAH</option>
    </select><br />
    Сумма:<br />
    <input type="text" name="sum" /> <br /><br />
    <input type="submit" value="Convert!">
</form>

<?php

$courses = ['USD' => 25, 'EUR' => 28, 'UAH' => 1];

$valuta_from = $_GET['valuta_from'];
$valuta_to = $_GET['valuta_to'];
$sum = $_GET['sum'];

if ($valuta_from != $valuta_to) {
	foreach ($courses as $valuta1 => $course1) {
		if ($valuta_from == $valuta1) {
			foreach ($courses as $valuta2 => $course2) {
				if ($valuta_to == $valuta2) {
					$result = $sum * $course1 / $course2;
					echo $result;
				}
			}
		}
	}

} else {
	echo "Выберите валюту для конвертации!";
}

?>