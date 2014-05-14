<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 11.05.14
 * Time: 14:57
 */

/*set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/classes');

spl_autoload_register(
    function ($className) {
        require_once(str_replace("\\", "/", $className) . '.php');
    }
);*/
//$classLoader->register();
/*require_once './vendor/symfony/class-loader/Symfonny/Compenent/ClassLoader/UniversalClassLoader.php';
require_once './vendor/autoload.php';
use Symfony\Component\ClassLoader\UniversalClassLoader;

$classLoader = new UniversalClassLoader();
$classLoader->registerNamespaces(array(
    'BionicUniversity/VladyslavLysenko/'=>__DIR__.'/src',
));*/

//require __DIR__ . '/../bootstrap.php';

/*set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '../src/BionicUniversity/VladyslavLysenko/Purchaser/classes');

spl_autoload_register(
    function ($className) {
        require_once(str_replace("\\", "/", $className) . '.php');
    });*/


spl_autoload_register(function ($class) {
    require_once 'vladyslav-lysenko/src/BionicUniversity/VladyslavLysenko/Purchaser/classes/' . $class . '.php';
});

/*
 * Building the Category of food
*/
$food = new Category("food");
$bread = new Good("Bread", 10);
$sausages = new Good("Sausages", 75);
$cheese = new Good("Cheese", 50);
$milk = new Good("Milk", 17);
$chocolate = new Good("Chocolate", 30);
$food->addGood($bread);
$food->addGood($sausages);
$food->addGood($cheese);
$food->addGood($milk);
$food->addGood($chocolate);
/*
 * Building the Category of non-food
*/
$non_food = new Category("non-food");
$table = new Good("Table", 350);
$pen = new Good("Pen", 15);
$door = new Good("Door", 400);
$pen = new Good("Pen", 15);
$notebook = new Good("Notebook", 25);
$non_food->addGood($table);
$non_food->addGood($pen);
$non_food->addGood($door);
$non_food->addGood($notebook);

/**
 * main menu function
 */
function mainMenu()
{
    echo "______________________________________________________________" . PHP_EOL;
    echo "Welcome to our program." . PHP_EOL;
    echo "Who are you? 1-purchaser / 2-administrator /3-I want to exit ";
    $n = fgets(STDIN);
    switch ($n) {
        case 1:
            purchaserMenu();
            break;
        case 2:
            adminMenu();
            break;
        case 3:
            break;
        default:
            break;
    }

}

/**
 * purchaser menu function
 */
function purchaserMenu()
{
    $name = "";
    $amount = 0;
    $age = 0;
    echo "Hello, user!" . PHP_EOL;
    echo "What is your name?  ";
    $name = fgets(STDIN);
    echo PHP_EOL . "How old are you?  ";
    $age = fgets(STDIN);
    echo PHP_EOL . "How much money do you have?  ";
    $amount = fgets(STDIN);
    $man = new Purchaser($age, $name, $amount);
    echo PHP_EOL . "What do you want to do? 1-check what you can buy /
    2- return to main menu   ";
    $n = fgets(STDIN);
    switch ($n) {
        case 1:
            findMenu($man);
            break;
        case 2:
            mainMenu();
            break;
        default:
            break;
    }
}

/**
 * admin menu function
 */
function adminMenu()
{
    $name = "";
    $age = 0;
    echo "Hello, admin!" . PHP_EOL;
    echo "What is your name?  ";
    $name = fgets(STDIN);
    echo PHP_EOL . "How old are you?  ";
    $age = fgets(STDIN);
    $man = new Administraor($age, $name);
    echo PHP_EOL . "What do you want to do? 1-add a good /
    2- return to main menu   ";
    $n = fgets(STDIN);
    switch ($n) {
        case 1:
            addMenu($man);
            break;
        case 2:
            mainMenu();
            break;
        default:
            break;
    }
}

/**
 * @param $man
 * find goods function
 */
function findMenu($man)
{
    global $food, $non_food;

    echo PHP_EOL . "What category do you chose? 1-food / 2-non-food / 3-return to main menu    ";
    $n = fgets(STDIN);
    switch ($n) {
        case 1:
            $man->findGoods(($food), $man->getAmountOfMoney());
            findMenu($man);
            break;
        case 2:
            $man->findGoods($non_food, $man->getAmountOfMoney());
            findMenu($man);
            break;
        case 3:
            mainMenu();
            break;
        case 3:
            break;
        default:
            break;
    }
}

/**
 * @param $man
 * add good function
 */
function addMenu($man)
{
    global $food, $non_food;
    $name = "";
    $price = 0;
    echo "Enter name of good:  ";
    $name = fgets(STDIN);
    echo PHP_EOL . "Enter price if good: ";
    $price = fgets(STDIN);
    $good = new Good($name, $price);
    echo PHP_EOL . "What category do you chose? 1-food / 2-non-food / 3-return to main menu ";
    $n = fgets(STDIN);
    switch ($n) {
        case 1:
            $man->addGoodToCategory($food, $good);
            adminMenu();
            break;
        case 2:
            $man->addGoodToCategory($non_food, $good);
            adminMenu();
            break;
        case 3:
            mainMenu();
            break;
        default:
            break;
    }
}

//entry
mainMenu();
