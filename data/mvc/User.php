<?php

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