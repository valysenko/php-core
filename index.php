<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 12.05.14
 * Time: 21:07
 */
require_once 'vendor/symfony/class-loader/Symfonny/Compenent/ClassLoader/UniversalClassLoader.php';
require_once 'vendor/autoload.php';
use Symfony\Component\ClassLoader\UniversalClassLoader;
use \BionicUniversity\Intro;
$classLoader = new UniversalClassLoader();
$classLoader->registerNamespaces(array(
    'BionicUniversity'=>__DIR__.'/src',
));
$classLoader->register();
var_dump(new Intro());
