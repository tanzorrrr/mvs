<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28.08.2017
 * Time: 16:26
 */
class about extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('about/index');
    }

}