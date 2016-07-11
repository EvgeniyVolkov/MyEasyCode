<?php

/*
$i = 1;
while ($i <= 100) {
	echo $i . '<br />';
	$i++;
}
*/

/*
$i = 1;
$sum = 0;
while ($i <= 100) {
	$sum = $sum + $i;
	$i++;
}
echo 'Сумма всех чисел: ' . $sum . '<br />';
$aver = $sum / ($i-1);
echo 'Среднее арифметическое: ' . $aver . '<br />';
*/

/*
$a = 5;
$b = $a;
$i = 1;
while ($i < 7) {
	$b = $b * $a;
	$i++;
}
echo 'Число ' . $a . ' в ' . $i . '-й степени = ' . $b . '<br />';
*/

/*
echo '<br />New task:<br />';
$numbers = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);
$sum = 0;
$count = count($numbers);
foreach ($numbers as $key => $number) {
    if (($key % 2 !== 0) && ($number % 2 == 0)) {
    	$sum = $sum + $number;
    }
}
echo 'Сумма: ' . $sum . '<br />';
echo 'Кол-во элементов: ' . $count . '<br />';
$average = $sum / $count;
echo 'Среднее: ' . $average . '<br />';
*/

/*
$numbers = array(1, 2, 3, 4, 8);
foreach ($numbers as $number) {
	$twice = $number * 2;
	$twiceArray[] = $twice;
}
echo '<pre>';
print_r($twiceArray);
echo '</pre>';
*/

/*
$numbers = array(1, 2, 3, 4, 8);
foreach ($numbers as $index => $number) {
	$number *= 2;
	$numbers[$index] = $number;
}
echo '<pre>';
print_r($numbers);
echo '</pre>';
*/