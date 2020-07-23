<?php
namespace Shapes;

include_once 'Shape.php';

class Triangle implements Shape
{
    private $height;
    private $base;

    public function __construct(float $height, float $base)
    {
        $this->height = $height;
        $this->base = $base;
    }

    public function getName(): string
    {
        return 'Triangle';
    }

    public function getArea(): float
    {
        return number_format($this->height * ($this->base / 2), 2);
    }
}
