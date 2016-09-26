<?php
require_once 'human.php';
//require_once 'car.php';

class Driver extends Human
{
	public function hello()
	{
		$str = parent::hello();
		$str .= 'I have a driver license.<br />';
		return $str;
	}

	public function buy(Vehicle $vehicle)
	{
		echo 'I have a lot of money, so I can buy anything, including even a cool ' . $vehicle->type . '!<br />';
	}

	public function drive(Car $car)
	{
		echo 'I can drive a car. For example: ' . $car->name . '.<br />';
	}

	public function transport(Human $human)
	{
		echo 'I can transport other people in my car. For example: ' . $human->tellName() . '.';
	}
}