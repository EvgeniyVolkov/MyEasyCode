<?php

// 1. Написать скрипт, который возводит число (к примеру 5) в 7 степень.
echo '1. Написать скрипт, который возводит число (к примеру 5) в 7 степень.<br /><br />';

// Решение 1:
echo 'Решение 1:<br /><br />';

function power($a, $c) {
    $b = $a;
    $i = 1;
    while ($i < $c) {
        $b = $b * $a;
        $i++;
    }
    return $b;    
}
$result = power(5, 7);
echo $result . "<br /><br />\r\n";

// Решение 2:
echo 'Решение 2:<br /><br />';

function power2($a, $d) {  
    $pow = $a ** $d;
    return $pow;
}
$result = power2(5, 7);
echo $result . "<br /><br />\r\n";


// 2. Найти, есть ли в массиве число 37. Если есть - вывести его на экран и закончить обработку массива.
echo '2. Найти, есть ли в массиве число 37. Если есть - вывести его на экран и закончить обработку массива.<br /><br />';

$numbers = array(2, 5, 8, 1, 12, 33, 1, 5, 37, 2, 4, 9, 44, 3);

function searchElem($arr, $n) {
    foreach ($arr as $element) {
        // echo $element . '<br />';
        if ($element == $n) {
            echo $element . "<br /><br />\r\n";
            break;
        }
    }
}

$n = 37;
searchElem($numbers, $n);


// 3. Найти сумму всех четных чисел в массиве
echo '3. Найти сумму всех четных чисел в массиве<br /><br />';

$numbers = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);

function searchEven($arr) {
	$sum = 0;
	foreach ($arr as $key => $number) {
	    if ($number % 2 == 0) {
	        $sum = $sum + $number;
	    }
	}
	echo 'Сумма всех четных чисел в массиве: ' . $sum . "<br /><br />\r\n";
}

searchEven($numbers);


// 4. Найти среднее арифметическое всех чисел в массива
echo '4. Найти среднее арифметическое всех чисел в массива<br /><br />';

$numbers = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);

function average($arr) {
    $sum = 0;
    $countArr = count($arr);
    foreach ($arr as $key => $number) {
        $sum = $sum + $number;
    }
    echo 'Сумма всех чисел: ' . $sum . "<br />\r\n";
    echo 'Кол-во элементов: ' . $countArr . "<br />\r\n";
    $aver = $sum / $countArr;
    echo 'Среднее арифметическое: ' . $aver . "<br /><br />\r\n";
}

average($numbers);


// 5. Получить среднее арифметическое всех чётных элементов массива, стоящих на нечётных местах.
echo '5. Получить среднее арифметическое всех чётных элементов массива, стоящих на нечётных местах.<br /><br />';

$numbers = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);

function averSuit($arr) {
    $sum = 0;
    $suitElem = 0;
    foreach ($arr as $key => $number) {
        if (($key % 2 !== 0) && ($number % 2 == 0)) {
            $sum = $sum + $number;
            $suitElem++;
        }
    }
    echo 'Сумма: ' . $sum . "<br />\r\n";
    echo 'Кол-во подходящих элементов: ' . $suitElem . "<br />\r\n";
    $average = $sum / $suitElem;
    echo 'Среднее: ' . $average . "<br /><br />\r\n";
}

averSuit($numbers);


// 6. Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.
echo '6. Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.';

function buildArr($j) {
    $arr = array();
    for ($i = 0; $i < $j; $i++) {
        if ($i % 2 == 0) {
            $arr[$i] = 0;
        } elseif ($i % 2 !== 0) {
            $arr[$i] = 1;
        }
    }
    return $arr;
}

$matrix = buildArr(10);
echo '<pre>';
print_r($matrix);
echo '</pre>';
