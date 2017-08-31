<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.08.2017
 * Time: 17:42
 */
class help extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('help/index');
        echo 'We are inside help<br>';
    }

    public  function other($arg = false){

        require 'models/help_model.php';
        $model = new Help_Model();
        $this->view->blac = $model->blac();
    }

}