<?php

class Vehicle
{
    public $type;

    public $brand;

    public $model;

    public $color;

    public $capacity;

    public $maxSpeed;

    public function move()
    {
        return 'перемещаться';
    }
}