<?php
declare(strict_types= 1);

/*
function suma(){
    $a = 10;
    $b = 20;
    $sum = $a + $b;
    //echo "La suma es: $sum";
    return $sum;
}

$sum = suma();
echo "La suma es : $sum";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

*/



//  retornar que sea int, float, string, bool, array. object, null
function sumarEntero(int $entero1, int $entero2):int | float
{
    //return $entero1 + $entero2;
    return ($entero1 + $entero2)/2;
}

$resultado = sumarEntero(2, 5);
echo $resultado;

echo "<br>";

?>