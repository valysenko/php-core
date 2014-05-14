<?php

/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 14.05.14
 * Time: 20:41
 */
class Image implements ImageInterface
{
    /**
     * @var integer
     */
    private $width;
    /**
     * @var integer
     */
    private $height;
    /**
     * @var Center
     */
    private $center;

    /**
     * @return Center
     */
    public function getCenter()
    {
        return $this->center;
    }

    /**
     * @param $height
     * @param $width
     */
    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
        $this->center = determineCenter();
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return Center
     */
    public function determineCenter()
    {
        return new Center($this->getWidth() / 2, $this->getHeight() / 2);
    }

}