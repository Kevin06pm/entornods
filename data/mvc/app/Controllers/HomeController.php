<?php

namespace App\Controllers;
class HomeController
{
    function __construct()
    {
        echo "<br>Construyendo HOME controller....";
    }

    function index(){
        echo "<br>En el INDEX de HOME";
        require "viewsController/index.php";

    }

    function show(){
        echo "<br>En el SHOW de HOME";
        require "viewsController/show.php";

    }
    
}