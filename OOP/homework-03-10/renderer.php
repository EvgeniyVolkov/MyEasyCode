<?php
require_once 'component.php';

class Renderer extends Component
{
    public $array;

    public function __construct(array $arr)
    {
        $this->array = $arr;
    }

    public function render()
    {
        foreach ($this->array AS $rectangle) {
            $rectangle->render();
            echo '<br />';
        }
    }
}