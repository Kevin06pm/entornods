<?php

namespace App\Controllers;
class UserController
{
    function __construct()
    {
        echo "<br>Construyendo USER controller....";

    }

    function index(){
        echo "<br>En el INDEX de USER";
        require "../viewsController/user/index.php";
    }

    function show(){
        echo "<br>En el SHOW de USER";
        require "../viewsController/user/show.php";
    }
    
}