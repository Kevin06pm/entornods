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
        require "viewsController/index.php";

    }

    function show(){
        echo "<br>En el SHOW de LOGIN";
        require "viewsController/show.php";

    }
    
}