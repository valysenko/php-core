<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 24.12.2014
 * Time: 21:42
 */

class Controller_Admin extends Controller{

    public function action_index()
    {
        session_start();

        /*
        Для простоты, в нашем случае, проверяется равенство сессионной переменной admin прописанному
        в коде значению — паролю. Такое решение не правильно с точки зрения безопасности.
        Пароль должен храниться в базе данных в захешированном виде, но пока оставим как есть.
        */
        if ( isset($_SESSION['admin']))
        {
            $this->view->generate('admin_view.php', 'template_view.php');
        }
        else
        {
            session_destroy();
            Router::ErrorPage404();
        }

    }

    // Действие для разлогинивания администратора
    public function action_logout()
    {
        session_start();
        session_destroy();
        header('Location:/');
    }
}