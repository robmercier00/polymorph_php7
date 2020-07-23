<?php
namespace Shapes;

include_once 'Shape.php';

class Circle implements Shape
{
    public $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getName(): string
    {
        return 'Circle';
    }

    public function getArea(): float
    {
        return number_format((pi() * $this->radius) ** 2, 2);
    }
}
