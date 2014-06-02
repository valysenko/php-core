<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 14.05.14
 * Time: 19:55
 */

require_once 'vendor/autoload.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$classLoader = new UniversalClassLoader();
$classLoader ->registerNamespaces(array(
    'BionicUniversity' => __DIR__ . '/src',
));
$classLoader->register();

error_reporting(E_ALL);
ini_set('display_errors', 'On');