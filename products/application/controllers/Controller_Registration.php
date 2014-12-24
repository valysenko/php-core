<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 24.12.2014
 * Time: 23:16
 */

class Controller_Registration extends Controller{
    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model_Registration();
    }

    public function action_index()
    {
        if(isset($_POST['login']) && isset($_POST['password']) && $_POST['email'])
        {
            $login = $_POST['login'];
            $password =$_POST['password'];
            $email = $_POST['email'];
            $res = $this->model->insertUser($login,$password,$email);

            /*
            Производим аутентификацию, сравнивая полученные значения со значениями прописанными в коде.
            Такое решение не верно с точки зрения безопсаности и сделано для упрощения примера.
            Логин и пароль должны храниться в БД, причем пароль должен быть захеширован.
            */
            if($res)
            {
               header('Location:/');
            }
            else
            {
                $data["reg_status"] = "fail";
            }
        }
        else
        {
            $data["login_status"] = "";
        }

        $this->view->generate('registration_view.php', 'template_view.php', $data);
    }

}