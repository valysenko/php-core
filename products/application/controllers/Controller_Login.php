<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 24.12.2014
 * Time: 15:01
 */

class Controller_Login extends Controller{

    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model_Login();
    }

    public function action_index()
    {
       if(isset($_POST['login']) && isset($_POST['password']))
        {
            $login = $_POST['login'];
            $password =$_POST['password'];
            $n = $this->model->getUser($login,$password);

            /*
            Производим аутентификацию, сравнивая полученные значения со значениями прописанными в коде.
            Такое решение не верно с точки зрения безопсаности и сделано для упрощения примера.
            Логин и пароль должны храниться в БД, причем пароль должен быть захеширован.
            */
            if($n>0)
            {
                $data["login_status"] = "access_granted";

                session_start();
               $_SESSION['admin'] = $login;
                header('Location:/admin/');
            }
            else
            {
                $data["login_status"] = "access_denied";
            }
        }
        else
        {
            $data["login_status"] = "";
        }

        $this->view->generate('login_view.php', 'template_view.php', $data);
    }
}