<?php

class Cat
{
    public $name;

    public $color;

    public $temper;

    public $age;

    public $weight;

    public function breath()
    {
        return 'дышать';
    }

    public function drink()
    {
        return 'пить';
    }

    public function eat()
    {
        return 'кушать';
    }

    public function walk()
    {
        return 'ходить';
    }

    public function run()
    {
        return 'бегать';
    }

    public function sleep()
    {
        return 'спать';
    }    

    public function think()
    {
        return 'думать';
    }

    public function play()
    {
        return 'играться';
    }

    public function mew()
    {
        return 'мяукать';
    }

    public function purr()
    {
        return 'мурлыкать';
    }

    public function tellAbout()
    {
        echo 'Моей кошке по имени ' . $this->name . ' ' . $this->age . ' лет. Она любит ' . $this->purr() . ' и ' . $this->play() . '. У ее шерсти ' . $this->color . ' окрас. У ' . $this->name . ' ' . $this->temper . ' характер.';
    }
}

$tilda = new Cat();
$tilda->name = 'Tilda';
$tilda->color = 'серый';
$tilda->temper = 'мягкий';
$tilda->age = 5;
$tilda->weight = 4;

$tilda->tellAbout();