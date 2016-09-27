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

	public function drive(Vehicle $vehicle)
	{
		echo 'I can drive any vehicle, including a ' . $vehicle->type . '.<br />';
	}

    public function buy(Car $car)
    {
        echo 'I can buy ' . $car->brand . ' ' . $car->model . '!<br />';
    }

	public function transport(Human $human)
	{
		echo 'I can transport other people in my car. For example: ' . $human->tellName() . '.';
	}
}