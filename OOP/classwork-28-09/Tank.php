<?php

require_once 'Vehicle.php';

class Tank extends Vehicle
{
    public $color;

    public function move()
    {
        echo 'Я еду на гусеницах';
    }
}