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

