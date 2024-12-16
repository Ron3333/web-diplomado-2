<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Condicionales </title>
</head>
<body>

	<?php

		$var1 = true;
		$num1 = 0 ;
		$num2 = 10 ;

		if($num1 == 10){

			echo "<h1> Soy 10 </h1>";

		}else if ($num1 == 20){
			echo "<h1> Soy 20 </h1>";
			
		}else{

			echo "<h1> Soy Falso </h1>";
		}

	?>

	<?php if($var1): ?>
		<h2>Soy Verdadero 2</h2>
		<h2>Soy Verdadero 2</h2>
		<h2>Soy Verdadero 2</h2>
		<h2>Soy Verdadero 2</h2>
	<?php else: ?>
		<h2>Soy Falso 1</h2>
	<?php endif; ?>

</body>
</html>