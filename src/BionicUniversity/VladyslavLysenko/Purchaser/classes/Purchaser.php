<?php

/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 11.05.14
 * Time: 15:24
 */
class Purchaser extends AbstractHuman implements FindGoodsInterface
{
    /**
     * @var float
     */
    private $amountOfMoney;

    /**
     * @param $amountOfMoney
     */
    function __construct($age, $name, $amountOfMoney)
    {
        parent::__construct($age, $name);
        $this->amountOfMoney = $amountOfMoney;
    }

    /**
     * @return float
     */
    public function getAmountOfMoney()
    {
        return $this->amountOfMoney;
    }

    /**
     * @param float $amountOfMoney
     */
    public function setAmountOfMoney($amountOfMoney)
    {
        $this->amountOfMoney = $amountOfMoney;
    }

    /**
     * @param $category
     * @param $amount
     */
    public function findGoods($category, $amount)
    {
        $goods = $category->getGoods();
        $total_amount = 0;
        $answer = "You can buy:" . PHP_EOL;
        foreach ($goods as $good) {
            if ($total_amount + $good->getPrice() < $amount) {
                $total_amount += $good->getPrice();
                $answer .= ($good->getName() . PHP_EOL);
            } else {
                break;
            }
        }
        echo $answer;
    }

} 