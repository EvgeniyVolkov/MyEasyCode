<?php
$carBrands = array('BMW', 'Audi', 'Mercedes', 'Volvo', 'Lexus', 'Tesla', 'Porsche');
$arrayCount = count($carBrands);
for($i=$arrayCount-1; $i>=0; $i--){
	echo $carBrands[$i] . ', ';
};