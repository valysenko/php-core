<?php

/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 14.05.14
 * Time: 20:37
 */
abstract class AbstractResizer
{
    /**
     * As a result square centralized  picture should be returned
     * @return mixed
     */
    abstract public function thumbnail(Image $image,$size);
} 