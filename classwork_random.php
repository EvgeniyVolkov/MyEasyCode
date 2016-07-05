<?php
$random = array();
for ($i = 0; $i <= 100; $i++) {
	$random[] = rand($i, true);
}
print_r($random);