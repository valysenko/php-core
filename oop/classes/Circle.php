<?php

/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 28.04.14
 * Time: 19:01
 */
class Circle
{
    private $material;
    private $radius;
    private $color;

    public function __construct($color, $material, $radius)
    {
        $this->color = $color;
        $this->material = $material;
        $this->radius = $radius;

    }

} 