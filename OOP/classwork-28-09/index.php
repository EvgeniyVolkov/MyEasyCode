<?php

require_once 'Car.php';
require_once 'Moto.php';
require_once 'Bike.php';
require_once 'Driver.php';
require_once 'Passenger.php';
require_once 'Tank.php';

$car = new Car();
$moto = new Moto();
$bike = new Bike();
$tank = new Tank();

$driver = new Driver();
$passenger = new Passenger();

$driver->sit($tank); // $tank
echo '<br />';
$passenger->sit($tank); // $tank
echo '<br />';
$driver->drive();


