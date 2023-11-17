<?php

//Este user nos va a cobectar a una base de datos

namespace App\Models;

require "../core//Model.php";

use Core\Model;

class User extends Model//MODEL
{


    // @return devuelve todos los registros de la tabla user de la bbddd
     
    public static function all(){ //Recoger todos los datos
        // $dbh = User::db();//obtener conexion; -> otra forma es self::db() metodo-estatico
        // $sql = "SELECT * FROM users"; //llamar tabla users
        // $statement = $dbh ->query($sql);
        //Devuelvo USERS elena, pedro...

    }//all


    // @return Un usuario en particular de la bbdd
    // @param $id
    public static function find($id){ //Recoger un solo dato especifico
        echo "<br> Recupero un usuario..";

    }//find

    //codigo sql -> solo en Models- USER
    
    public function insert(){ 
        echo "<br> inserta un registro..";

    }

    public function save(){
        echo "<br> Actualizando un registro..";

    }

    public function delete(){
        echo "<br> Borrar un registro..";

    }

}//finclass