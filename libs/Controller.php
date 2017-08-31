<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.08.2017
 * Time: 18:06
 */
class Controller
{
    function __construct()
    {
        echo "This is a main controller<br>";
        $this->view = new View();
    }

}