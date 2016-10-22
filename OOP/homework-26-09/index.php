<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once 'human.php';
require_once 'driver.php';
require_once 'car.php';

$car = new Vehicle();
$car->type = 'car';

$bmwX5 = new Car();
$bmwX5->brand = 'BMW';
$bmwX5->model = 'X5';

$nick = new Human();
$nick->name = 'Nick';
$nick->age = 17;
echo $nick->hello();
echo '<br />';

$marti = new Driver();
$marti->name = 'Marti';
$marti->age = 18;
echo $marti->hello();
$marti->drive($car);
$marti->buy($bmwX5);
$marti->transport($nick);