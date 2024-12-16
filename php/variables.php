<?php

$nombre = "Pepe Trueno";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>CURSO DE PHP</h1>
    <h2><?php echo  "Hola mundo mi nombre es  ". $nombre ; ?> </h2>
    <h2><?php echo "Hola mundo mi nombre es  $nombre  " ; ?> </h2>
    <h2><?php echo "Hola mundo mi nombre es \" $nombre \" " ; ?> </h2>
    <h2><?php echo 'Hola mundo mi nombre es  $nombre ' ; ?> </h2>
    <h2><?php echo 'Hola mundo mi monbre es php ' . $nombre  ; ?> </h2>



</body>
</html>