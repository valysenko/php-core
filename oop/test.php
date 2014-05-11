<?php

include "classes/Circle.php";
//Alt+insert for generating

$frontCircle = new Circle('black', 'metal', 12.5);
var_dump($frontCircle);

$backCircle = new Circle('#000000', 'metal', 3.5);
echo $backCircle->getColor() . PHP_EOL;
var_dump($backCircle);

$backCircle->setRadius(12.5);
var_dump($backCircle);

echo $backCircle->getRadius();

//Дом