<?php

include_once 'Vehicle.php';

class Bike extends Vehicle
{
    public function drive()
    {
        echo 'i can drive';
    }
}