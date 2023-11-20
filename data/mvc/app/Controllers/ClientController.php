<?php

namespace App\Controllers;
class ClientController
{
    function __construct()
    {
        echo "<br>Construyendo CLIENT controller....";
    }

    function index(){
        echo "<br>En el INDEX de CLIENT";
        require "../viewsController/client/index.php";


    }

    function show(){
        echo "<br>En el SHOW de CLIENT";
        require "../viewsController/client/show.php";

    }
    
}