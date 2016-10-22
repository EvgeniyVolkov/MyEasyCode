<?php

class Human
{
	public $name;

	public $age;

	public function tellName()
	{
		return $this->name;
	}

	public function hello()
	{
		$str = 'Hi! It\'s ' . $this->tellName() . '. I\'m ' . $this->age . ' years old.<br />';
		return $str;
	}
}