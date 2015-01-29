<?php
include_once('classes/Cat.php');

$cat = new Cat('Tom');
var_dump($cat->getName() === 'Tom');
var_dump($cat->meow() === 'Cat Tom is saying meow'); 
echo $cat->meow();