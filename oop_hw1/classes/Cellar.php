<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 29.04.14
 * Time: 1:01
 */

class Cellar {
    /**
     * @var ine
     */
    protected $height;
    /**
     * @var int
     */
    protected $width;
    /**
     * @var int
     */
    protected $length;

    function __construct($height, $width, $length)
    {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }
} 