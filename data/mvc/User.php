<?php

    /*

    CREATE TABLE cervezas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    tipo VARCHAR(10) NOT NULL,
    graduacion_alcoholica INT NOT NULL CHECK (graduacion_alcoholica >0),
    pais VARCHAR(60) NOT NULL,
    precio INT NOT NULL CHECK (precio >0),
    ruta_imagen VARCHAR(100)
);
    
    */ 


    //composer update -> actualizar librerias//actualiza todas las librerias
    //si quiero volver atras, usaria  compose.lock

    //Este user nos cenecta a un array

    class User //MODEL
    {
        const USERS = [ //array multidimensional
            array(1, "Pedro"),
            array(2, "Elena"),
            array(3, "Francisco"),
            array(4, "Blanca")
        ];
    
        // @return Array con los datos de los usuarios
        public static function all(){ //Recoger todos los datos
            return User:: USERS; //  :: ACCEDO A ALGO DE LA OTRA CLASE
            //Devuelvo USERS elena, pedro...

        }//all


        // @return Un usuario en particular 
        // @param $id
        public static function find($id){ //Recoger un solo dato especifico
            return User::USERS[$id-1];

        }//find
    
    }//finclass