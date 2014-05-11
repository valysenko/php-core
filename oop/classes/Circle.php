<?php

/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 28.04.14
 * Time: 19:01
 */
class Circle
{
    /**
     * @var string
     */
    private $material;
    /**
     * @var float
     */
    private $radius;
    /**
     * @var string
     */
    private $color;
    /**
     * @var array
     */
    private $map;

    /**
     * @param $color
     * @param $material
     * @param $radius
     */
    public function __construct($color, $material, $radius)
    {
        $this->map = array('#000000' => 'black');
        $this->color = $color;
        $this->material = $material;
        $this->radius = $radius;

    }

    /**
     * @param float $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->convertColor($this->color);
    }

    private function convertColor($color)
    {
        return $this->map[$color];
    }

} 