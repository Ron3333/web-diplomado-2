<?php


for ($i=0; $i < 10 ; $i++) { 
	
	if($i == 5) continue;
	
	echo "Estoy contando $i";
	echo "<br>";

}

echo "<br>";
echo "<br>";

$datos = ["uno", "dos", "tres", "cuatro"];

foreach($datos as $index => $dato){

	echo " El index es $index y el dato es este : $dato";
	echo "<br>";
}

echo "<br>";
echo "<br>";

$datos = ["nombre" => "pepe", "apellido" => "trueno", "edad" => 20  ];

foreach($datos as $key => $value){

	echo " El index es $key y el dato es este : $value";
	echo "<br>";
}


?>