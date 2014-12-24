<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 24.12.2014
 * Time: 22:03
 */

class DatabaseConnection {
    public static function create(){
        // Настройки подключения к БД.
        $hostname = 'localhost:3307';
        $username = 'root';
        $password = 'root';
        $dbName = 'products';

        // Языковая настройка.
        setlocale(LC_ALL, 'ru_RU.CP1251');
        date_default_timezone_set('Europe/Kiev');
        // Подключение к БД.
        mysql_pconnect($hostname, $username, $password) or die('No connect with data base');
        mysql_query('SET NAMES cp1251');
        mysql_select_db($dbName) or die('No data base');

        // Открытие сессии.
        session_start();
    }

}