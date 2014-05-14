<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 11.05.14
 * Time: 15:26
 */

abstract class AbstractHuman {
    /**
     * @var string
     */
    protected $name;
    /**
     * @var integer
     */
    protected $age;

    /**
     * @param $age
     * @param $name
     */
    function __construct($age, $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


} 