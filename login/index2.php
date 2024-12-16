<?php

include 'conexion.php';

$sql = "SELECT * FROM usuarios;";
$usuarios = $conn->query($sql);

echo '<pre>';
//print_r($usuarios->num_rows);
//print_r($usuarios->fetch_assoc());
echo '</pre>';

$i = 0;
if($usuarios->num_rows > 0){
	
	while($row = $usuarios->fetch_assoc()) {
		echo "Fila:". ++$i;
		echo "<br>";
		 echo $row['id'];
		 echo "<br>";
		 echo $row['nombre'];
		 echo "<br>";
		 echo $row['email'];
		 echo "<br>";
		 echo $row['password'];
		 echo "<br>";
		 echo $row['roll'];
		 echo "<br>";
		 echo $row['sexo'];
		 echo "<br>";
		 echo $row['fecha'];
		 echo "<br> <hr> ";
	 }
	
}else{
	echo "No hay datos";
}



?>