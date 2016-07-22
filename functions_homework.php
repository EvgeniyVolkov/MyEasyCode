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
    echo 'Среднее: ' . $average = $sum / $suitElem . "<br /><br />\r\n";
    // echo 'Среднее: ' . $average . "<br /><br />\r\n";
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




// 9. Заменить в массиве все числа меньше 10 на 99910. Все числа которые больше или равны 10, но меньше  25 - заменить на 9991025. Все числа которые больше 25 и делятся на 2 заменить, заменить на 9992, а которые не делятся на 2 - заменить на 9991. Если в массиве встречается число 64 - прекратить обработку массива.

/*
$array = array(1, 10, 25, 28, 31, 64, 100);

foreach ($array as $index => $value) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    if ($value == 64) {
        continue;
    }
    elseif ($value < 10) {
        $array[$index] = 99910;
        echo $array[$index] . ', ';
    }
    elseif ($value >= 10 && $value < 25) {
        $array[$index] = 9991025;
        echo $array[$index] . ', ';
    }
    elseif ($value > 25 && $value % 2 == 0) {
        $array[$index] = 9992;
        echo $array[$index] . ', ';
    }
    elseif ($value > 25 && $value % 2 > 0) {
        $array[$index] = 9991;
        echo $array[$index] . ', ';
    }
}
echo '<pre>';
print_r($array);
echo '</pre>';
*/

// 10. Найти максимальные элементы массива в заданных диапазанах. К примеру:
// Массив
// $array = [1, 2, 9, 86, 24, 6, 45, 72];
// Диапазаоны:
// 1-10, 20-50, 50-100
// Ответ:
// диапазон 1-10: максимальное число - 9
// диапазон 20-50: макс 45
// диапазон 50-100: макс 86


// $newNumbers = array(
//  '1-10' => array(1, 2, 6, 9),
//  '20-50' => array(24, 45),
//  '50-100' => array(72, 86)
// )


/*
$numbers = array(1, 2, 9, 86, 24, 6, 45, 72);

$newNumbers = array('1-10' => array(), '20-50' => array(), '50-100' => array());
foreach ($numbers as $number) {
    if ($number <= 10) {
        $newNumbers['1-10'][] = $number;
    }
    elseif ($number >= 20 && $number <= 50) {
        $newNumbers['20-50'][] = $number;
    }
    elseif ($number > 50 && $number <= 100) {
        $newNumbers['50-100'][] = $number;
    }
}

echo '<pre>';
print_r($newNumbers);
echo '</pre>';

echo 'Решение 1:<br /><br />';

$biggestNumber = 0;
foreach ($newNumbers['1-10'] as $newNumber) {
    if ($newNumber > $biggestNumber) {
        $biggestNumber = $newNumber;
    }
}
echo 'Макс. число из диапазона 1-10: ' . $biggestNumber . '<br />';

$biggestNumber = 0;
foreach ($newNumbers['20-50'] as $newNumber) {
    if ($newNumber > $biggestNumber) {
        $biggestNumber = $newNumber;
    }
}
echo 'Макс. число из диапазона 20-50: ' . $biggestNumber . '<br />';

$biggestNumber = 0;
foreach ($newNumbers['50-100'] as $newNumber) {
    if ($newNumber > $biggestNumber) {
        $biggestNumber = $newNumber;
    }
}
echo 'Макс. число из диапазона 50-100: ' . $biggestNumber . '<br />';

echo '<br />Решение 2:<br />';

$biggestNumber = 0;
foreach ($newNumbers as $diapason) {
    echo '<pre>';
    print_r($diapason);
    echo '</pre>';  
    foreach ($diapason as $currentNumber) {
        if ($currentNumber > $biggestNumber) {
            $biggestNumber = $currentNumber;
        }
    }
echo 'Макс. число из диапазона: ' . $biggestNumber . '<br />';
}

echo '<br />Решение 3:<br /><br />';

echo 'Макс. число из диапазона 1-10: ' . max($newNumbers['1-10']) . '<br />';
echo 'Макс. число из диапазона 20-50: ' . max($newNumbers['20-50']) . '<br />';
echo 'Макс. число из диапазона 50-100: ' . max($newNumbers['50-100']) . '<br />';
*/