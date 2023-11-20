<?php

namespace App\Controllers;

require "../app/models/User.php";
//importar
use App\Models\User;


class UserController
{
    

    function index(){ //all
        $users = User::all();//Si es estatico no // realiza 
        // print_r($users);
        // die(); 
        require "../viewsController/user/index.php";
    }

    function show($args){ //find

        $id = (int)$args[0];
        $user = User::find($id);
        require "../viewsController/user/show.php";
    }

    function create(){
        require "../viewsController/user/create.php";
    }

    function store(){
        $user = new User();
        $user->name = $_REQUEST["name"];
        $user->surname = $_REQUEST["surname"];
        $user->email = $_REQUEST["name"];
        $user->birthdate = $_REQUEST["birthdate"];

        $user->insert();//llamo al modelo -> class User

    }

    
}