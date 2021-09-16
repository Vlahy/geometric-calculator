<?php

namespace Classes;

use Interfaces\CalculateInterface;

class CalculateSquare implements CalculateInterface
{

    public $a;

    public function __construct($a)
    {
        $this->a= $a;
    }

    public function calculateArea()
    {
        return pow($this->a,2);
    }

    public function calculateCircumference()
    {
        return 4*$this->a;
    }
}