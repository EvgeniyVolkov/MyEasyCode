<?php
$countries = array(
    1 => array(
        'name' => 'Ukraine',
        'population' => 46000000,
        'language' => array('ukrainian', 'russian'),
        'cities' => array(
            array(
                'name' => 'Kiev',
                'population' => 2500000
            ),
            array(
                'name' => 'Kharkov',
                'population' => 1500000
            ),
            array(
                'name' => 'Odessa',
                'population' => 1700000
        )
      )  
    )
);
print_r($countries);