<?php

/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 14.05.14
 * Time: 20:45
 */
class Resizer extends AbstractResizer
{

    /**
     * @param Image $image
     * @param $size
     * @return array
     * @throws Exception
     */
    public function thumbnail(Image $image, $size)
    {
        if ($size > $image->getWidth() || $size > $image->getHeight())
            throw new Exception("given size is greater than one of the sides of the image!");
        $center = $image->getCenter();
        /* $coordinates =  array(
             '_xLeftTop'=>$center->getX()-$size/2,
             '_yLeftTop'=>$center->getY()-$size/2,
             '_xLeftBottom'=>$center->getX()-$size/2,
             '_yLeftBottom'=>$center->getY()+$size/2,
             '_xRightTop'=>$center->getX()+$size/2,
             '_yRightTop'=>$center->getY()+$size/2,
             '_xRightBottom'=>$center->getX()+$size/2,
             '_yRightBottom'=>$center->getY()-$size/2,
         );*/
        $coordinates = $this->buildResizedImage(
            $this->convertXLeftTop($center, $size),
            $this->convertXLeftTop($center, $size),
            $this->convertXLeftBottom($center, $size),
            $this->convertYLeftBottom($center, $size),
            $this->convertXRightTop($center, $size),
            $this->convertYRightTop($center, $size),
            $this->convertXRightBottom($center, $size),
            $this->convertYRightBottom($center, $size)
        );
        return $coordinates;
    }

    /**
     * @param $center
     * @param $size
     * @return mixed
     */
    private function convertXLeftTop($center, $size)
    {
        return $center->getX() - $size / 2;
    }

    /**
     * @param $center
     * @param $size
     * @return mixed
     */
    private function convertYLeftTop($center, $size)
    {
        return $center->getY() - $size / 2;
    }

    /**
     * @param $center
     * @param $size
     * @return mixed
     */
    private function convertXLeftBottom($center, $size)
    {
        return $center->getX() - $size / 2;
    }

    /**
     * @param $center
     * @param $size
     * @return mixed
     */
    private function convertYLeftBottom($center, $size)
    {
        return $center->getY() + $size / 2;
    }

    /**
     * @param $center
     * @param $size
     * @return mixed
     */
    private function convertXRightTop($center, $size)
    {
        return $center->getX() + $size / 2;
    }

    /**
     * @param $center
     * @param $size
     * @return mixed
     */
    private function convertYRightTop($center, $size)
    {
        return $center->getY() + $size / 2;
    }

    /**
     * @param $center
     * @param $size
     * @return mixed
     */
    private function convertXRightBottom($center, $size)
    {
        return $center->getX() + $size / 2;
    }

    /**
     * @param $center
     * @param $size
     * @return mixed
     */
    private function convertYRightBottom($center, $size)
    {
        return $center->getY() - $size / 2;
    }

    /**
     * @param $x1
     * @param $y1
     * @param $x2
     * @param $y2
     * @param $x3
     * @param $y3
     * @param $x4
     * @param $y4
     * @return array
     */
    private function buildResizedImage($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4)
    {
        return array(
            '_xLeftTop' => $x1,
            '_yLeftTop' => $y1,
            '_xLeftBottom' => $x2,
            '_yLeftBottom' => $y2,
            '_xRightTop' => $x3,
            '_yRightTop' => $y3,
            '_xRightBottom' => $x4,
            '_yRightBottom' => $y4,
        );
    }
} 