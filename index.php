<?php
/** PSR-4 autoloader */


use Classes\ShowResults;

require __DIR__ . '/autoloader.php';

$showResult = new ShowResults();
$result=$showResult->getGeoType('rectangle');
$showResult->showResult($result);

echo PHP_EOL;

$result=$showResult->getGeoType('square');
$showResult->showResult($result);

echo PHP_EOL;

$result=$showResult->getGeoType('triangle');
$showResult->showResult($result);

echo PHP_EOL;

$result=$showResult->getGeoType('circle');
$showResult->showResult($result);

