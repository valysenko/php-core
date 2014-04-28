<?php

/**
 * @param $number
 * @return array|bool
 */
function getArrayOfNumber($number)
{
    if (strlen($number) != 8)
        return false;
    $num = (int)substr($number, 2, 4);
    if (!(!is_numeric($number{0}) && !is_numeric($number{1}) && !is_numeric($number{6})
        && !is_numeric($number{7}) && $num > 999)
    )
        return false;
    return array('region' => (substr($number, 0, 2)), 'number' => ($num),
        'area' => (substr($number, 6, 2)));


}

/**
 *
 */
function test()
{
    $array = getArrayOfNumber("CA4567CB");
    var_dump($array);

    $array = getArrayOfNumber("CA45679B");
    var_dump($array);

    $array = getArrayOfNumber("8A4567CB");
    var_dump($array);

    $array = getArrayOfNumber("CA567CB");
    var_dump($array);

    $array = getArrayOfNumber("BA11167CB");
    var_dump($array);

    $array = getArrayOfNumber("AP6466AB");
    var_dump($array);
}

test();