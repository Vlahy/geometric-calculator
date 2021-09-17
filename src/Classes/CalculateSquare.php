<?php

namespace Classes;

use Interfaces\CalculateInterface;

class CalculateSquare implements CalculateInterface
{

    protected $a;

    public function __construct($a)
    {
        $this->a= $a;
    }

    public function calculateArea()
    {
        echo 'Area of square is: ' . pow($this->a,2) . PHP_EOL;
    }

    public function calculateCircumference()
    {
        echo 'Circumference of square is: ' . 4*$this->a . PHP_EOL;
    }
}