<?php
$numbers = array();
for ($i = 1; $i <= 100; $i++) {
	$numbers[] = $i;
}
// print_r($numbers);
/*for ($n = 4; $n < 100; $n++) {
	echo $numbers[$n] . '<br />';
	$n += 4;
}*/
/*foreach ($numbers as $number) {
	if ($number == 10 || $number == 25) {
		continue;
	}
	elseif ($number == 77) {
		break;
	}
	else {
		echo $number . '<br />';
	}
}*/

$randArr = array();
$i = 1;
while ($i <= 100) {
    $randArr[] = rand(1, 100);
    $i++;
}
// echo '<pre>';
// print_r($randArr);
// echo '</pre>';
if (in_array(35, $randArr)) {
	echo 35;
}