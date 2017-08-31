<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.08.2017
 * Time: 18:21
 */
class View
{
    function __construct()
    {
        echo "This is a View<br>";
    }
    public  function render($name,$noinclude =false){
        if($noinclude==true){
            require 'views/'.$name.'.php';
        }else{
            require 'views/header.php';
            require 'views/'.$name.'.php';
            require 'views/footer.php';
        }


    }

}