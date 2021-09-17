<?php

namespace Classes;

use Interfaces\CalculateInterface;

class ShowResults
{

    public function showResults(CalculateInterface $showArea, CalculateInterface $showCircumference)
    {
        $showArea->calculateArea();
        $showCircumference->calculateCircumference();
    }

    public function getGeoType($type)
    {
        switch ($type)
        {
            case 'rectangle':
                return new CalculateRectangle(7,4);
            case 'square':
                return new CalculateSquare(6);
            case 'triangle':
                return new CalculateTriangle(7);
            case 'circle':
                return new CalculateCircle(4);
            default:
                return 'ERROR!';
        }
    }

}