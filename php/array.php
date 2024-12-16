<?php

$nombre = array("Juan", "Sofia", "Pepe", "Gustavo");

echo $nombre[1];

$array = [10, 13, 15, 20];

echo "<br>";

echo $array[2];

echo "<br>";

$array[3]=17;

echo "<br>";

$array2[]= 1;
$array2[]= 10;
$array2[]= 100;
$array2[]= 1000;
$array2[]= 10000;

var_dump($array2);

echo "<br>";

$array3 = [10, 'Victor', 15, false];
echo $array3[1];
var_dump($array3);


// Array asociativos 

$persona = array( "nombre" => "Pepe", 
				  "apellido" => "Trueno",
				  "edad" => 14  
				);
echo "<br>";
echo "El apellido es " . $persona["apellido"];
echo "<br>";
echo "El apellido es".   $persona["apellido"];

echo "<br>";

$datos = [
    'nombre' => 'Pepe',
    'apellido'  => 'Trueno',
    'email' => 'pepe@gmail.com'
];

echo "<br>";
echo "El apellido es".   $datos["apellido"];

?>