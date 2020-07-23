<?php
namespace Shapes;

include_once 'Shape.php';

class Rectangle implements Shape
{
    private $width;
    private $length;

    public function __construct(float $width, float $length)
    {
        $this->width = $width;
        $this->length = $length;
    }

    public function getName(): string
    {
        return 'Rectangle';
    }

    public function getArea(): float
    {
        return number_format($this->width * $this->length, 2);
    }
}
