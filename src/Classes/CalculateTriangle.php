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
        return number_format((pow($this->a,2)*sqrt(3))/4,2);
    }

    public function calculateCircumference()
    {
        return 3*$this->a;
    }
}