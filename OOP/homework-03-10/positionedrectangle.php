<?php
require_once 'rectangle.php';

class PositionedRectangle extends Rectangle
{
    public $setPosition;

    public $divId;

    public function setPosition($left, $top)
    {
        $setPosition = '<style>
        div.#positioned{
        position: absolute;
        left: ' . $left . 'px;
        top: ' . $top . 'px;
        }
        </style>';
        $this->setPosition = $setPosition;
        $this->divId = 'id="positioned";';
    }

    public function render()
    {
        $this->divConstruct();
        $createPositionedRect = $this->setPosition . $this->divElements['divBegin'] . $this->divId . $this->divElements['divEnd'];
        echo $createPositionedRect;
    }
}