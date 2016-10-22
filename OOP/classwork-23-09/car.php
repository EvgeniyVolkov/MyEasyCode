<?php

include_once 'Vehicle.php';

class Car extends Vehicle
{
    public function drive()
    {
        echo 'i can drive';
    }
}