<?php

/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 29.04.14
 * Time: 0:40
 */
abstract class AbstractHouse
{
    /**
     * @var int
     */
    protected $numberOfWindows;
    /**
     * @var int
     */
    protected $numberOfEntries;
    /**
     * @var string
     */
    protected $heating;
    /**
     * @var string
     */
    protected $roof;
    /**
     * @var
     */
    protected $sheathing;
    /**
     * @var boolean
     */
    protected $locked;
    /**
     * @return mixed
     */
    public abstract function lockTheDoor();

    /**
     * @return boolean
     */
    public function isLocked()
    {
        return $this->locked;
    }

    public abstract function unlockTheDoor();
    public abstract function enterTheHouse();

    /**
     * @param $heating
     * @param $numberOfEntries
     * @param $roof
     * @param $numberOfWindows
     */
    function __construct($heating, $numberOfEntries, $roof, $numberOfWindows)
    {
        $this->heating = $heating;
        $this->numberOfEntries = $numberOfEntries;
        $this->roof = $roof;
        $this->numberOfWindows = $numberOfWindows;
    }
} 