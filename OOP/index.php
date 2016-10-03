<?php

class Human
{
    public $name;

    public $age;

    // public function printAge()
    // {
    //     echo $this->age;
    // }

    // public function hello()
    // {
    //     echo 'Привет!' . ' Меня зовут ' . $this->name;
    //     echo '. Мне ' . $this->age . ' года';
    //     echo '<br />';
    // }

    public function breath()
    {
        return 'дышать';
    }

    public function drink()
    {
        return 'пить';
    }

    public function eat()
    {
        return 'питаться';
    }

    public function think()
    {
        return 'думать';
    }
}

$john = new Human();
$john->name = 'John';
$john->age = 35; // $this->age = 35

// $mike = new Human();
// $mike->name = 'Mike';
// $mike->age = 18; // $this->age = 18;

// $john->hello();
// $mike->hello();

echo "$john->name умеет:<br />";
echo '- ' . $john->breath() . '<br />';
echo '- ' . $john->drink() . '<br />';
echo '- ' . $john->eat() . '<br />';
echo '- ' . $john->think() . '<br />';

class Cat
{
    public $name;

    public $age;

    public $weight;

    public function breath()
    {
        return 'дышать';
    }

    public function drink()
    {
        return 'пить';
    }

    public function eat()
    {
        return 'питаться';
    }

    public function think()
    {
        return 'думать';
    }

    public function miu()
    {
        return 'мяукать';
    }
}

echo '<br /><br />';
echo '<div style="background-color:RGB(' . 127 . ',' . 0 . ',' . 0 . ');width:' . 100 . 'px;height:' . 50 . 'px"></div>';
echo '<hr />';
echo '<div style="background-color:RGB(3,1,150);width:100px;height:100px;border:solid 5px RGB(247,94,37);"></div>';