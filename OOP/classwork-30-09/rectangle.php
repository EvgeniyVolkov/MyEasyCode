<?php
require_once 'component.php';

abstract class Rectangle extends Component
{
    public function render(Component $component) {
        echo '<div style="background-color:RGB(' . "$component->color->red, $component->color->green, $component->color->blue" . ');width:' . $this->width . ';height:' . $this->height . '"></div>';
    }
}