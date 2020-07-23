<?php
namespace Shapes;

include_once 'Rectangle.php';
include_once 'Circle.php';
include_once 'Triangle.php';

function printArea(Shape $shape)
{
    echo "The area of {$shape->getName()} is {$shape->getArea()}" . PHP_EOL;
}

$shapes = [];
$shapes[] = new Rectangle(10.0, 7.0);
$shapes[] = new Circle(12.5);
$shapes[] = new Triangle(14.0, 10.0);

foreach ($shapes as $shape) {
    printArea($shape);
}
