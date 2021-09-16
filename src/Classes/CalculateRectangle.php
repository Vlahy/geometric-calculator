<?php

namespace Classes;

use Interfaces\CalculateInterface;

class CalculateRectangle implements CalculateInterface
{

    public $a;
    public $b;

    public function __construct($a,$b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function calculateArea()
    {
        return $this->a*$this->b;
    }

    public function calculateCircumference()
    {
        return 2*$this->a+2*$this->b;
    }

}