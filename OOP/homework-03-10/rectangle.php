<?php
require_once 'component.php';

class Rectangle extends Component
{
    public $divElements;

    public function divConstruct()
    {
        $divBegin = '<div style="background-color:RGB(' . $this->color->red . ',' . $this->color->green . ',' . $this->color->blue . ');width:' . $this->width . 'px;height:' . $this->height . 'px;';
        $divEnd = '"></div>';
        $divElements = array('divBegin' => $divBegin, 'divEnd' => $divEnd);
        $this->divElements = $divElements;
    }

    public function render()
    {
        $this->divConstruct();
        $createRect = $this->divElements['divBegin'] . $this->divElements['divEnd'];
        echo $createRect;
    }
}