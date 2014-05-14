<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 29.04.14
 * Time: 1:01
 */

class Cellar {
    /**
     * @var float
     */
    protected $height;
    /**
     * @var float
     */
    protected $width;
    /**
     * @var float
     */
    protected $length;

    function __construct($height, $width, $length)
    {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }
} 