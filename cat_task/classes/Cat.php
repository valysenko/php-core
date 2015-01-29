<?php
include_once 'Animal.php';
include_once './interfaces/MeowInterface.php';

class Cat extends Animal implements MeowInterface
{
    /**
     * @return string
     */
    public function meow()
    {
        return "Cat $this->name is saying meow";
    }
}