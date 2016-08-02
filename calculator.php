<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!-- Калькулятор
Форма:
1 поле для цифры
2 поле для цифры
Select операция (+ - /  *) -->

<form action="" name="calculator" method="GET">
    Число 1: <br />
    <input type="text" name="num1" value="<?php echo getValue($num1) ?>" /><br />
    Число 2: <br />
    <input type="text" name="num2" value="<?= getValue($num2) ?>" /><br />
	Действие: <br />
    <select name="operations">
        <option value="+">Прибавить</option>
        <option value="-">Вычесть</option>
        <option value="*">Умножить</option>
        <option value="/">Разделить</option>
    </select><br /><br />
    <input type="submit" name="submit" value="Count!">
</form>

<?php

$num1 = isset($_GET['num1']) ? $_GET['num1'] : '' ;
$num2 = isset($_GET['num2']) ? $_GET['num2'] : '' ;
$operation = isset($_GET['operations']) ? $_GET['operations'] : '+' ;

if (isset($_GET['submit'])) {
	if (isset($num1) && isset($num2)) {
		if ($operation == '+') {
			echo $num1 + $num2;
		} elseif ($operation == '-') {
			echo $num1 - $num2;
		} elseif ($operation == '*') {
			echo $num1 * $num2;
		} elseif ($operation == '/') {
			if ($num2 == 0) {
				echo 'На ноль делить нельзя!';
			} else {
				echo $num1 / $num2;
			}
		}
	} else {
		echo 'Задайте оба числа!';
	}
} else {
	echo 'Привет!';
}

function getValue($var, $defaultValue = '') {
    $result = $defaultValue;
    if (isset($var)) {
        $result = $var;
    }

    return $result;
}

// } else {
// 	if (count($_GET) === 0) {
// 		echo 'Привет!';
// 	} else {
// 		echo 'Задайте оба числа!';
// 	}
// }

?>