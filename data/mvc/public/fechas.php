<?php

$cadenafecha = "12/10/2022";

$fecha = DateTime::createFromFormat('d/m/Y',$cadenafecha); 
//Y == año con 4 digitos

//comprobar:
echo "<br>Objeto Fecha";
var_dump($fecha); //2022/10/12

$sfecha = $fecha->format('#Y#m#d#');

echo "<br>Cad fecha " . $sfecha;
