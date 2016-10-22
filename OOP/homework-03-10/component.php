<?php
require_once 'color.php';

abstract class Component
{
    protected $color;

    protected $width;

    protected $height;

    public function __construct(Color $color, $width, $height)
    {
        $this->color = $color;
        $this->width = (int)$width;
        $this->height = (int)$height;
    }

    abstract public function render();
}