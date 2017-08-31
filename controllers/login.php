<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28.08.2017
 * Time: 15:25
 */
class login extends Controller
{
    function __construct()
    {
        parent::__construct();

        $this->view->render('login/index');
    }

    function index(){
        require 'models/login_model.php';
        $model =new login_model();
    }

}