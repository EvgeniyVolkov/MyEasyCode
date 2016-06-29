<?php
/* $carBrands = array('BMW', 'Audi', 'Mercedes', 'Volvo', 'Lexus', 'Tesla', 'Porsche');
$arrayCount = count($carBrands);
for ($i = $arrayCount - 1; $i >= 0; $i--) {
	echo $carBrands[$i] . ', ';
} */
$carCenter = array(
    'brands' => array(
        'bmw' => array(
            'models' => array(
                'm5' => array(
                    'years' => array(
                        1999,
                        2000
                    )
                ),
                'm6' => array(
                    'years' => array(
                        2001,
                        2002
                    )
                )
            )
        )
    )
);
foreach ($carCenter['brands']['bmw']['models'] as $model => $modelYear) {
        echo $model . ', ';
}