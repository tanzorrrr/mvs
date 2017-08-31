<?php

 class index extends Controller
 {
     function __construct()
     {
         parent::__construct();
         $this->view->render('index/index');
     }
     function index(){
         echo 'INSIDE INDEX INDEX';
         $this->view->render('index/index');


     }

     function details(){
        
         $this->view->render('index/index');
     }




 }