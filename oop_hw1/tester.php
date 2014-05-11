<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 29.04.14
 * Time: 1:04
 */
include "classes/AbstractHouse.php";
include "classes/CountryHouse.php";
include "classes/Cellar.php";

$cellar = new Cellar(2.2,4,8);
echo PHP_EOL;
echo PHP_EOL;

$house = new CountryHouse("gas",1,"slate",4,"Vlad",$cellar);
var_dump($house);

$house->enterTheHouse();
$house->unlockTheDoor();
$house->enterTheHouse();
//
$oHouse = new CountryHouse("gas",1,"slate",4,"Vlad",$cellar);