<?php
require_once 'core/Model.php';
require_once 'core/View.php';
require_once 'core/Controller.php';
require_once 'core/Router.php';
require_once 'core/DatabaseConnection.php';
DatabaseConnection::create();
Router::start(); // запускаем маршрутизатор