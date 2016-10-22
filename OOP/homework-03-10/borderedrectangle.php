<?php
require_once 'rectangle.php';

class BorderedRectangle extends Rectangle
{
    private $addBorderColor;

    public function setBorderColor(Color $borderColor)
    {
        //$addBorderColor = 'border:solid 5px RGB(' . $borderColor->red . ',' . $borderColor->green . ',' . $borderColor->blue . ')';
        $addBorderColor = "border:solid 5px RGB({$borderColor->red}, {$borderColor->green}, {$borderColor->blue})";
        $this->addBorderColor = $addBorderColor;
    }

    public function render()
    {
        $this->divConstruct();
        $createBorderedRect = $this->divElements['divBegin'] . $this->addBorderColor . $this->divElements['divEnd'];
        echo $createBorderedRect;
    }
}