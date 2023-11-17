<?php

namespace Core;

require "../config/db.php";
//TRas poner namespace Core, nos dara error los PDO, asi que usamos USE:

use PDO;
use PDOException;

//POR LA IMPORTACION

use const DSN;
use const USUARIO;
use const PASSWORD;

class Model
{
    static function db(){

        try{
            $dbh = new PDO(DSN,USUARIO,PASSWORD);
            $dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //echo "<br>Conexion Correcta!!!";
        }catch(PDOException $ex){
            echo "Fallo en la conexion: " . $ex -> getMessage();
        }

        return $dbh; //Devuelve conexion a bbdd 

        //finally se usa cuando quiero cerrar la conexion, en este caso no me interesa
    }
}