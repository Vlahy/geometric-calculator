<?php
/** PSR-4 autoloader */
require __DIR__ . '/autoloader.php';

$rectangle = new Classes\CalculateRectangle(7, 4);
echo '------------------------------------' . PHP_EOL . 'Area of rectangle is: ' . $rectangle->calculateArea() . PHP_EOL;
echo 'Circumference of rectangle is: ' . $rectangle->calculateCircumference() . PHP_EOL;

$square = new \Classes\CalculateSquare(6);
echo '------------------------------------' . PHP_EOL . 'Area of square is: ' . $square->calculateArea() . PHP_EOL;
echo 'Circumference of square is: ' . $square->calculateCircumference() . PHP_EOL;

$circle = new \Classes\CalculateCircle(7);
echo '------------------------------------' . PHP_EOL . 'Area of circle is: ' . $circle->calculateArea() . PHP_EOL;
echo 'Circumference of circle is: ' . $circle->calculateCircumference() . PHP_EOL;

$triangle = new \Classes\CalculateTriangle(4);
echo '------------------------------------' . PHP_EOL . 'Area of triangle is: ' . $triangle->calculateArea() . PHP_EOL;
echo 'Circumference of triangle is: ' . $triangle->calculateCircumference() . PHP_EOL .'------------------------------------';

