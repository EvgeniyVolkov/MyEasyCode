<!-- Калькулятор
Форма:
1 поле для цифры
2 поле для цифры
Select операция (+ - /  *) -->

<form action="" name="calculator" method="POST">
    Число 1: <br />
    <input type="text/html" name="num1" /><br />
    Число 2: <br />
    <input type="text/html" name="num2" /><br />
	Действие: <br />
    <select name="operations">
        <option value="+">Прибавить</option>
        <option value="-">Вычесть</option>
        <option value="*">Умножить</option>
        <option value="/">Разделить</option>
    </select><br /><br />
    <input type="submit" value="Count!">
</form>

<?php

$a = $_POST['num1'];
$b = $_POST['num2'];
$c = $_POST['operations'];

// Решение 1:
if ($a && $b) {
	if ($c == '+') {
		echo $a + $b;
	} elseif ($c == '-') {
		echo $a - $b;
	} elseif ($c == '*') {
		echo $a * $b;
	} elseif ($c == '/') {
		echo $a / $b;
	}
} else {
	echo 'Задайте оба числа!';
}

// Решение 2:
/*if ($a && $b) {
	$result = $a $c $b; // как сделать не стрингом?
	echo $result;
} else {
	echo 'Задайте оба числа!';
}*/

?>