<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 14.05.14
 * Time: 20:48
 */

class Center {
    /**
     * @var float
     */
    private $_x;
    /**
     * @var float
     */
    private  $_y;

    function __construct($_x, $_y)
    {
        $this->_x = $_x;
        $this->_y = $_y;
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->_x;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->_y;
    }

} 