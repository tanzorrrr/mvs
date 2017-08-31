<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28.08.2017
 * Time: 15:38
 */
class contact extends  Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('contact/index');
    }

}