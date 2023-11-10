<?php

    require_once "User.php"; //Invocar la clase
    class Controller
    {
        // Recupera todos los usuarios.
        // Invoca a vista con todos los usuarios.
        public function index(){ //llama al modelo 
            $arrusers = User::all(); //ESTATICO ::    //DINAMICO ->
            require "views/index.php"; //inyecta vista
        }

        
        public function show(){ //llama al modelo
            $id = $_GET["id"];
            $user = User::find($id); //Invocamos find
            require "views/show.php"; //inyecta vista
        }

        //  http://mvc.local?id=3

    }