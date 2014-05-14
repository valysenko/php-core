<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 14.05.14
 * Time: 16:42
 */
namespace BionicUniversity\VladyslavLysenko\Purchaser\PurchaserTests;


use BionicUniversity\VladyslavLysenko\Purchaser\PurchaserTests\Good;
class TestGood {
    public function testSetName(){
        $good = new Good();
        $name = 'Good!';
        $good->setName($good);
        $this->assertEquals($name, $good->getName());

    }
} 