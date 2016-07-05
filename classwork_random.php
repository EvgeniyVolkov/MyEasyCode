<?php
/* $random = array();
for ($i = 0; $i <= 100; $i++) {
	$random[] = rand($i, true);
}
print_r($random); */
$i = 0;
while ($i <= 100) {
	$random[] = rand(0, 100);
	$i++;
}
print_r($random);