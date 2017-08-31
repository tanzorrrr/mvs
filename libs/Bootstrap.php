<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.08.2017
 * Time: 17:51
 */
class Bootstrap
{
    function __construct()
    {
        $url =  isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:null;
        $url =rtrim($url,'/');
        $url = explode('/',$url );
        print_r($url);
        if(empty($url[1])){
            require 'controllers/index.php';
            $controller = new Index();
            return fase;
        }


       $file= "controllers/".$url[1].".php";
        if(file_exists($file)){
           require_once $file;
        }else{
            require'controllers/error.php';
            $controller =new Error();
            return false;
        }



        $controller = new $url[1];

        if(isset($url[2])){
            $controller->{$url[1]}($url[2]);
            return false;
        }else{
            if(isset($url[2])){
                echo 1;
                $controller->{$url[2]}();
                return false;
            }else{
                $controller->index();
            }


        }
       

    }
}