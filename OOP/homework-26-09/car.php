<?php
require_once 'vehicle.php';

class Car extends Vehicle
{
    public function ride()
    {
        echo 'Car can ride and it\'s driven';
    }
}