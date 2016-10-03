<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//require_once 'color.php';
//require_once 'component.php';
require_once 'rectangle.php';
require_once 'borderedrectangle.php';
require_once 'positionedrectangle.php';
require_once 'renderer.php';

$color = new Color(127, 0, 0);//создаем цвет для первого прямоугольника
$rect = new Rectangle($color, 100, 50);//создаем первый прямоугольник заданного цвета и размеров
$rect->render();//выводим первый прямоугольник

echo '<br />';

$color2 = new Color(3, 1, 150);
$borderColor = new Color(255, 160, 0);// создаем цвет для рамки 2-го прямоугольника
$bordRec = new BorderedRectangle($color2, 100, 100);//создаем 2-й прямоугольник,
// подаем на вход цвет заливки, ширину, высоту
$bordRec->setBorderColor($borderColor);//задаем цвет рамки для 2-го прямоугольника
$bordRec->render();//выводим второй прямоугольник

echo '<br />';

$color3 = new Color(34,139,34);//создаем цвет для 3-го прямоугольника
$posRec = new PositionedRectangle($color3, 150, 100);//создаем 3-й прямоугольник
$posRec->setPosition(130, 130);//задаем позиционирование для 3-го прямоугольника
$posRec->render();//выводим 3-й прямоугольник

echo '<br />';

//$renderer = new Renderer(array($rect, $bordRec));//объект класса Renderer получает на вход массив,
//в котором $rect - объект класса Rectangle (первый прямоугольник), $bordRec - объект класса BorderedRectangle (второй прямоугольник, в рамочке)
//echo '<br /><br />';
//echo 'Вызов $renderer->render(); выведет следующее:<br />';
//$renderer->render();// выведет все дивы, как будто мы бы вызывали $rect->render(); $bordRec->render();
//выведет оба прямоугольника