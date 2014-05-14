<?php

/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 12.05.14
 * Time: 21:06
 */
namespace BionicUniversity\VladyslavLysenko;
class Intro
{

    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

} 