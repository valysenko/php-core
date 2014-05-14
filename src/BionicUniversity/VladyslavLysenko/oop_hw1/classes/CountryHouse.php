<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 29.04.14
 * Time: 0:05
 */

class CountryHouse extends AbstractHouse{

    /**
     * @var Cellar
     */
    protected $cellar;

    protected $celcellarlar;
    function __construct($heating, $numberOfEntries, $roof, $numberOfWindows,$owner,$cellar)
    {
        parent::__construct($heating, $numberOfEntries, $roof, $numberOfWindows,$owner);
        $this->cellar = $cellar;
    }

    public function lockTheDoor()
    {
       $this->locked = true;
    }


    public function unlockTheDoor()
    {
        $this->locked = false;
    }

    /**
     * @return mixed
     */
    public function enterTheHouse()
    {
        if($this->isLocked())
            echo "Can not enter the house. The door is locked.".PHP_EOL;
        else
            echo "Enter the house.".PHP_EOL;
    }




} 