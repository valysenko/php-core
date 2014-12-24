<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 24.12.2014
 * Time: 21:43
 */

class Controller_404 extends Controller
{

    function action_index()
    {
        $this->view->generate('404_view.php', 'template_view.php');
    }

}