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
echo $countries[1]['cities'][2]['population'];
$countries[1]['cities'][3] = array('name' => 'Dnepr', 'population' => 1400000);
print_r($countries);