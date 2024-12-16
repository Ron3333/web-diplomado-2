<?php

$a = 10;
$b = "10";
$c = 30;

$var = ($a === $b);
var_dump($var);
echo "<br>";
$var = ($a != $c);
var_dump($var);
echo "<br>";
$var = ($a !== $c);
var_dump($var);
echo "<br>";
$var = ($a > $c);
var_dump($var);
echo "<br>";
$var = ($a < $c);
var_dump($var);
echo "<br>";
$var = ($a >= $c);
var_dump($var);
echo "<br>";
$var = ($a <= $c);
var_dump($var);


?>