<?php

namespace Dwes;
require "galaxia.php"; //importar fcuhero
require "galaxiaenana/galaxiaenana.php";

echo "<h2>Namespace ACTUAL: </h2>" . __NAMESPACE__;


echo "<h2> Acceso SIN cualificar</h2>"; ///Clases del mismo paquete
observar("Via Lactea");
echo "<br>El radio es: " . RADIO;
$gl = new galaxia();
galaxia::muerte(); 

echo "<h2> Acceso Cualificado</h2>"; ///ABsoluto desde mi ubicacion
Galaxiaenana\observar("Los 3 pilares"); ///Barra del paquete (nameSoace)/ recurso a utilizar (observar)
echo "<br>EL radio es " . Galaxiaenana\RADIO;
$gl = new Galaxiaenana\galaxia();
Galaxiaenana\galaxia::muerte();

echo "<h2> Acceso Totalmente Cualificado</h2>"; ///ABsoluto desde mi ubicacion
\Dwes\Galaxiaenana\observar("NGC 5709"); 
echo "<br>EL radio es " . \Dwes\Galaxiaenana\RADIO;
$gl = new \Dwes\Galaxiaenana\galaxia();
\Dwes\Galaxiaenana\galaxia::muerte();


//Importar la clase : comando use
echo "<h2>Importar con use</h2>";
use function \Dwes\Galaxiaenana\observar;
use const \Dwes\Galaxiaenana\RADIO;
observar("Otra galaxia");
echo "<br>EL radio es " . RADIO;


echo "<h2>Apodar / alias namespace</h2>";
use function \Dwes\Galaxiaenana\observar as mirar;
mirar("cometa Taylor Switt");


echo "<h2>Namespace GLOBAL</h2>";

echo time();
echo "<hr>";
echo "<br>Hora actual :  " . \time();


