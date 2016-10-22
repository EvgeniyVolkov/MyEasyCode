<?php
require_once 'color.php';

abstract class Component
{
    public $color;

    public $width;

    public $height;

    public function __construct(Color $color, $width, $height)
    {
        $this->color = $color;
        $this->width = (int)$width;
        $this->height = (int)$height;
    }

    abstract public function render();
}