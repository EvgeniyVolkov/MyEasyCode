<?php
$numbers = array();
for ($i = 1; $i <= 100; $i++) {
	$numbers[] = $i;
}
// print_r($numbers);
for ($n = 4; $n < 100; $n++) {
	echo $numbers[$n] . '<br />';
	$n += 4;
}