<?php

namespace Dwes\Galaxiaenana;

const RADIO = 35; //millones de km

function observar($nombre){
    echo "<br>Mirando a : $nombre";
}




class galaxia
{
    function __construct()
    {
        $this -> nacer();
    }

    function nacer()
    {
        echo "<br>Nueva galaxia encamino";
    }

    static function muerte(){
        echo "<br> Galaxya destruyendose en 3 2 1 ...";
    }
}