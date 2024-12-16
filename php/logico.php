<?php

$a = true;
$b = true;
$c = false;
$d = false;

$var = ($a and $c);
var_dump($var);
echo "<br>";

$var = ($a && $c);
var_dump($var);
echo "<br>";

$var = ($a or $c);
var_dump($var);
echo "<br>";

$var = ($a || $c);
var_dump($var);
echo "<br>";

$var = (!$a);
var_dump($var);
echo "<br>";


?>