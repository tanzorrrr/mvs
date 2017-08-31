<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 29.08.2017
 * Time: 21:02
 */
class Databeise extends PDO
{
    public function __construct()
    {
        parent::__construct('mysql:host=localhost;dbname=mvc ','root','');
    }

}