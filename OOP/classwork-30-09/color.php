<?php

class Color
{
    public $red;

    public $green;

    public $blue;

    public function __construct($red, $green, $blue)
    {
        $this->red = (int)$red;
        $this->green = (int)$green;
        $this->blue = (int)$blue;
    }
}