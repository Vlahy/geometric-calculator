<?php

namespace Classes;

use Interfaces\CalculateInterface;

class CalculateCircle implements CalculateInterface
{

    protected $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function calculateArea()
    {
        echo 'Area of circle is: ' . number_format(pow($this->r,2)*M_PI,2) . PHP_EOL;
    }

    public function calculateCircumference()
    {
        echo 'Circumference of circle is: ' . number_format(2*$this->r*M_PI,2) . PHP_EOL;
    }
}