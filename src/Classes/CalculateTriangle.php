<?php

namespace Classes;

use Interfaces\CalculateInterface;

class CalculateTriangle implements CalculateInterface
{

    protected $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function calculateArea()
    {
        echo 'Area of triangle is: ' . number_format((pow($this->a,2)*sqrt(3))/4,2) . PHP_EOL;
    }

    public function calculateCircumference()
    {
        echo 'Circumference of triangle is: ' .  3*$this->a . PHP_EOL;
    }
}