<?php

/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 11.05.14
 * Time: 15:24
 */
class Administraor extends AbstractHuman implements AddGoodInterface
{
    /**
     * @param $category
     * @param $good
     */
    public function addGoodToCategory($category, $good)
    {
        $category->addGood($good);
    }
} 