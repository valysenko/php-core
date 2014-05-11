<?php

/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 11.05.14
 * Time: 15:00
 */
class Category
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var array object
     */
    private $goods;

    /**
     * @param $name
     */
    function __construct($name)
    {
        $this->name = $name;
        $this->goods = new ArrayObject();
    }

    /**
     * @return array object
     */
    public function getGoods()
    {
        return $this->goods;
    }

    /**
     * @param array object $goods
     */
    public function setGoods($goods)
    {
        $this->goods = $goods;
    }

    /**
     * @param $good
     */
    public function addGood($good)
    {
        $this->goods->append($good);
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