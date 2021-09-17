<?php

namespace Classes;

use Interfaces\CalculateInterface;

class CalculateRectangle implements CalculateInterface
{

    protected $a;
    protected $b;

    public function __construct($a,$b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function calculateArea()
    {
        echo 'Area of rectangle is: ' . $this->a*$this->b . PHP_EOL;
    }

    public function calculateCircumference()
    {
        echo 'Circumference of rectangle is: ' . (2*$this->a+2*$this->b) . PHP_EOL;
    }

}