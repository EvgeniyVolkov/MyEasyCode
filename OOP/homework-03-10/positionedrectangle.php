<?php
require_once 'rectangle.php';

class PositionedRectangle extends Rectangle
{
    private $setPosition;

    private $divId;

    public function setPosition($left, $top)
    {
        $setPosition = 'position:absolute;left:' . $left . 'px;top:' . $top . 'px;';
        $this->setPosition = $setPosition;
    }

    public function render()
    {
        $this->divConstruct();
        $createPositionedRect = $this->divElements['divBegin'] . $this->setPosition . $this->divElements['divEnd'];
        echo $createPositionedRect;
    }
}