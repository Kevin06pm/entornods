<?php

namespace App\Controllers;
class LoginController
{
    function __construct()
    {
        echo "<br>Construyendo LOGIN controller....";
    }

    function index(){
        echo "<br>En el INDEX de LOGIN";
        require "../viewsController/login/index.php";

    }

    function show(){
        echo "<br>En el SHOW de LOGIN";
        require "../viewsController/login/show.php";


    }
    
}