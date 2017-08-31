<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.08.2017
 * Time: 17:59
 */
class Error extends Controller
{

    function __construct()
    {
        parent::__construct();
        echo "This is an a errors";
    }

   function index(){
        $this->view->msg ='this page doesent exist';
       $this->view->render('help/index');
   }
}