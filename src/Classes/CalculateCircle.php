<?php

namespace Classes;

use Interfaces\CalculateInterface;

class CalculateCircle implements CalculateInterface
{

    public $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function calculateArea()
    {
        return number_format(pow($this->r,2)*M_PI,2);
    }

    public function calculateCircumference()
    {
        return number_format(2*$this->r*M_PI,2);
    }
}