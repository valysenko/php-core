<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 14.05.14
 * Time: 16:42
 */
namespace BionicUniversity\VladyslavLysenko\Purchaser\PurchaserTests;



class GoodTest extends \PHPUnit_Framework_TestCase
{
    public function testSetName()
    {

        $good = new \BionicUniversity\VladyslavLysenko\Purchaser\classes\Good("",1);
        $name = 'Good!';
        $good->setName($name);
        $this->assertEquals($name, $good->getName());
    }
} 