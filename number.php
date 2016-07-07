<?php

/*
$i = 1;
while ($i <= 100) {
	echo $i . '<br />';
	$i++;
}
*/

$i = 1;
$sum = 0;
while ($i <= 100) {
	$sum = $sum + $i;
	$i++;
}
echo 'Сумма всех чисел: ' . $sum . '<br />';

$a = 5;
$b = $a;
$i = 1;
while ($i < 7) {
	$b = $b * $a;
	$i++;
}
echo 'Число ' . $a . ' в ' . $i . '-й степени = ' . $b;