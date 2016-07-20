<?php

// function sum($a = 20, $b = 17) {
// 	$sum = $a + $b;
// 	return $sum;
// }
// $sum = sum();
// echo $sum;

function getArrayWithRandomNumbers($numbersCount, $min = 1, $max = 10)
{
    $array = array();

    for ($i = 0; $i < $numbersCount; $i++) {
        $array[] = rand($min, $max);
    }

    return $array;
}
$array = getArrayWithRandomNumbers(20);

foreach ($array as $value) {
    echo $value . '<br />';
}

$a = 10; // глобальная область видимости

function test()
{
    $a = 20; // локальная область видимости переменной
}

function test2()
{
    $a = 40;
    return $a;
}

echo '<br />';
$a = 30; // глобальная область видимости
test();
test2();

$d = test2();

echo $a;

echo '<br />';

echo $d;

echo '<br /><br />';

$num = 10;
function sum($num){
	// global $num;
	$num++;
	echo $num;
}

echo $num . '<br />';
sum($num);
echo '<br />' . $num . "<br />\r\n<br />\r\n";



// 1. Написать скрипт, который возводит число (к примеру 5) в 7 степень.
$a = 5;
$b = $a;
$i = 1;
while ($i < 7) {
	$b = $b * $a;
	$i++;
}
echo 'Число ' . $a . ' в ' . $i . '-й степени = ' . $b . '<br />';

// 2. Найти, есть ли в массиве число 37. Если есть - вывести его на экран и закончить обработку массива.
$numbers = array(2, 5, 8, 1, 37, 12, 33, 1, 5, 2, 4, 9, 44, 3);
foreach ($numbers as $element) {
	if ($element == 37) {
		echo $element . '<br />';
		break;
	}
}

// 3. Найти сумму всех четных чисел в массиве
$numbers = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);
$sum = 0;
foreach ($numbers as $key => $number) {
    if ($number % 2 == 0) {
    	$sum = $sum + $number;
    }
}
echo 'Сумма всех четных чисел в массиве: ' . $sum . "<br />\r\n";