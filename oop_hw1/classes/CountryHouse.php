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
            echo "Can not enter the house. The door is locked.";
        else
            echo "Enter the house.";
    }




} 