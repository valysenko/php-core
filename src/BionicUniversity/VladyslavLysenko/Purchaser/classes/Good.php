<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 11.05.14
 * Time: 14:59
 */
namespace BionicUniversity\VladyslavLysenko\Purchaser\classes;
class Good {
    /**
     * @var string
     */
    private $name;
    /**
     * @var float
     */
    private $price;

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

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param $name
     * @param $price
     */
    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

} 