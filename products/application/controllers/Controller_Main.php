<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 24.12.2014
 * Time: 14:48
 */

class Controller_Main extends Controller
{
    function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }
}