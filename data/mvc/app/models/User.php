<?php

//Este user nos va a cobectar a una base de datos

namespace App\Models;
require "../app/core/Model.php";

use Core\Model;

class User extends Model//MODEL
{


    // @return Array con los datos de los usuarios
    public static function all(){ //Recoger todos los datos
        return User:: USERS; //  :: ACCEDO A ALGO DE LA OTRA CLASE
        //Devuelvo USERS elena, pedro...

    }//all


    // @return Un usuario en particular 
    // @param $id
    public static function find($id){ //Recoger un solo dato especifico
        return User::USERS;

    }//find

}//finclass