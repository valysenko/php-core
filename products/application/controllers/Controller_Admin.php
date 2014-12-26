<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 24.12.2014
 * Time: 21:42
 */

class Controller_Admin extends Controller{

    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model_Admin();
    }

    public function action_index()
    {
        session_start();
        if ( isset($_SESSION['admin']))
        {

            //$data['books'] = $this->model->getBooks($_SESSION['admin']);
            $result = $this->model->getBooks($_SESSION['admin']);
            $n = mysql_num_rows($this->model->getBooks($_SESSION['admin']));
            $books = array();

            for ($i = 0; $i < $n; $i++)
            {
                $row = mysql_fetch_assoc($result);
                $articles[] = $row;
            }
            $data['books'] = $articles;
            $this->view->generate('adminIndex_view.php', 'template_view.php',$data);

        }
        else
        {
            session_destroy();
            Router::ErrorPage404();
            header('Location:/');
        }

    }

    public function action_add()
    {
        session_start();
        if ( isset($_SESSION['admin']))
        {
            if(isset($_POST['name'])&&isset($_POST['price'])&&isset($_POST['description'])){
                $name = $_POST['name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $this->model->insertBook($name,$price,$description);
            }

            $this->view->generate('adminAdd_view.php', 'template_view.php');

        }
        else
        {
            session_destroy();
            Router::ErrorPage404();
            header('Location:/');
        }

    }


    public function action_manage()
    {
        if(isset($_POST['action']))
            if($_POST['action']=='Save')
                var_dump($_POST);
        session_start();
        if ( isset($_SESSION['admin']))
        {
            $result = $this->model->getBooks($_SESSION['admin']);
            $n = mysql_num_rows($this->model->getBooks($_SESSION['admin']));
            $books = array();

            for ($i = 0; $i < $n; $i++)
            {
                $row = mysql_fetch_assoc($result);
                $articles[] = $row;
            }
            $data['books'] = $articles;
            $this->view->generate('adminManage_view.php', 'template_view.php',$data);

        }
        else
        {
            session_destroy();
            Router::ErrorPage404();
            header('Location:/');
        }

    }

    public function action_update()
    {


    }

    // Действие для разлогинивания администратора
    public function action_logout()
    {
        session_start();
        session_destroy();
        header('Location:/');
    }
}